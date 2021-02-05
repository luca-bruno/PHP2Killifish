<?php namespace App\Controllers;

use App\Models\PostModel;
use App\Models\CommentModel;
use CodeIgniter\Controller;

class PostController extends BaseController{
    
    protected $imagesFolder = 'uploads/posts';

    public function index(){ //community post page
        
        # Create an instance of the post model.
        $model = new PostModel();
        
        // $data['title'] = 'News Archive';
        $data['posts'] = $model->getPosts();

        echo view('templates/header', $data);
        echo view('community', $data);
        echo view('templates/footer');

    }

    function view($postSlug = NULL){

        $model = new PostModel();
        $commentModel = new CommentModel();
        helper(['form']);

        $data['posts'] = $model->getPosts($postSlug);
        
        $data['comments'] = $commentModel->getComments();

        if (empty($data['posts'])){

            throw new \CodeIgniter\Exceptions\PageNotFoundException('Cannot find the post item: ' . $postSlug);
        
        }

        $data['postTitle'] = $data['posts']['postTitle'];
        

        echo view('templates/header', $data);
        echo view('postDisplay', $data);
        echo view('templates/footer');
    }

    public function submit(){
        $data = [];
        helper(['form']);

        if ($this->request->getMethod() == 'post'){ //built-in CI4 validation rules for users creating a new post
            $rules = [
                'postTitle'                   => 'required|min_length[3]|max_length[600]',
                'postDescription'             => 'required|min_length[3]|max_length[2000]',
                'image'                       => 'max_size[image,7168]|is_image[image]|ext_in[image,jpg,jpeg,gif,png]'
            ];
            
            if (! $this->validate($rules)){ //if form is not valid
                $data['validation'] = $this->validator; 
                //validate() method only returns true if form passes with no rules failed
            } else { //if validation successful
                $model = new PostModel(); //create instance of PostModel

                $newData = [
                    'postTitle' => $this->request->getVar('postTitle'),
                    'postDescription' => $this->request->getVar('postDescription'),
                    'postAuthor' => session()->get('userID'),
                    'postSlug' => url_title($this->request->getPost('postTitle'))
                ];  //send our data to model
                $model->save($newData); //save it
                $id = $model->getInsertID();// insert id of the last update.
                $this->uploadImage($id);
                $session = session(); //create session
                $session->setFlashdata('success', 'Post successfully added'); //displays success dialog as flashdata (session data that will only be available for the next request)
                return redirect()->to('community'); //return user to update page
            }
        }

        echo view('templates/header', $data);
		echo view('postSubmit');
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
			}

			// move to the next folder and build the next path.
			$folder = next($folders);
			$path .= "/{$folder}";
		}
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