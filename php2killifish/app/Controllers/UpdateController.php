<?php namespace App\Controllers;

use App\Models\UpdateModel;
use CodeIgniter\Controller;

class UpdateController extends BaseController{
    
    protected $imagesFolder = 'uploads/updates';

    public function index(){ //update page

        # Create an instance of the news model.
        $model = new UpdateModel();
        
        // $data['title'] = 'News Archive';
        $data['news'] = $model->getNews();

        echo view('templates/header', $data);
        echo view('updates', $data);
        echo view('templates/footer');

    }

    function view($newsSlug = NULL){

        $model = new UpdateModel();
        helper(['form']);

        $data['news'] = $model->getNews($newsSlug);
        
        if (empty($data['news'])){

            throw new \CodeIgniter\Exceptions\PageNotFoundException('Cannot find the news item: ' . $newsSlug);
        
        }

        $data['newsTitle'] = $data['news']['newsTitle'];
        
        echo view('templates/header', $data);
        echo view('updateDisplay', $data);
        echo view('templates/footer');
    }

    public function submit(){
        $data = [];
        helper(['form']);

        if ($this->request->getMethod() == 'post'){ //built-in CI4 validation rules for admin creating new post
            $rules = [
                'newsTitle'                   => 'required|min_length[3]|max_length[600]',
                'newsDescription'             => 'required|min_length[3]|max_length[1000]',
                'image'                       => 'max_size[image,4096]|is_image[image]|ext_in[image,jpg,jpeg,gif,png]'
            ];
            
            if (! $this->validate($rules)){ //if form is not valid
                $data['validation'] = $this->validator; 
                //validate() method only returns true if form passes with no rules failed
            } else { //if validation successful
                $model = new UpdateModel(); //create instance of UpdateModel

                $newData = [
                    'newsTitle' => $this->request->getVar('newsTitle'),
                    'newsDescription' => $this->request->getVar('newsDescription'),
                    'newsAuthor' => session()->get('userID'),
                    'newsSlug' => url_title($this->request->getPost('newsTitle'))
                ];  //send our data to model
                $model->save($newData); //save it
                $id = $model->getInsertID();// insert id of the last update.
                $this->uploadImage($id);
                $session = session(); //create session
                $session->setFlashdata('success', 'Update successfully added'); //displays success dialog as flashdata (session data that will only be available for the next request)
                return redirect()->to('updates'); //return user to update page
            }
        }

        echo view('templates/header', $data);
		echo view('updateSubmit');
        echo view('templates/footer');
    }


    /**
	 * Checks that a folder exists in the path, and will create one if not.
	 */
	protected function checkFolder($path)
	{
		// Split the path into folders.
		$folders = explode('/', $path);

		// Set the first folder for use.
		$folder = reset($folders);

		// Clear the path so it can be built one step at a time.
		$path = $folder;

		while ($folder != null)
		{
			// skip the loop if the folder is already there.
			if (!file_exists($path) || !is_dir($path))
			{
				// create the folder.
				mkdir($path);
				
				// sets the permissions so the folder can be deleted manually.
				// chmod($path, 0777);
			}

			// move to the next folder and build the next path.
			$folder = next($folders);
			$path .= "/{$folder}";
		}
    }
    
    protected function sampleGetImage($id)
    {
        $path = "{$this->imagesFolder}/{$id}.*";
        $images = glob($path);

        if (count($images) == 0) return 'default.png';
        else return $images[0];
    }

    protected function uploadImage($id)
    {
        $image = $this->request->getFile('image');

        if ($image->getName() != '')
        {
            // Generate a new name for this file.
            $newName = "{$id}.{$image->getClientExtension()}";

            // Make sure the folder exists.
            $this->checkFolder($this->imagesFolder);

            // Delete other images with the same ID.
            $path = "{$this->imagesFolder}/{$id}.*";
            $images = glob($path);

            // Loop through all the items and delete the file(s).
            foreach ($images as $file)
                unlink($file);

            // Move the image to the new folder using a new name.
            $image->move($this->imagesFolder, $newName);
        }
    }
}
?>