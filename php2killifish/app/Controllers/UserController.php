<?php namespace App\Controllers;

use App\Models\UserModel;
use CodeIgniter\Controller;

class UserController extends BaseController{
    
    protected $imagesFolder = 'uploads/avatars';

    // http://localhost/php2killifish/php2killifish/public/login
    public function index(){ //login page
        $data = [];
        helper(['form']);

        if ($this->request->getMethod() == 'post'){ //validation rules for login
            $rules = [
                'userScreenName'            => 'required|min_length[3]|max_length[255]',
                'userPassword'              => 'required|min_length[8]|max_length[255]|validateUser[userScreenName,userPassword]',
            ];

            $errors = [
                'userPassword' => [
                    'validateUser' => 'Username or password don\'t match'
                ]
            ];

            if (! $this->validate($rules, $errors)){ //if form is not valid
                $data['validation'] = $this->validator; 
                //validate() method only returns true if form passes with no rules failed
            } else { //if validation successful
                $model = new UserModel(); //create instance of UserModel
                
                $user = $model->where('userScreenName', $this->request->getVar('userScreenName')) //search db for matching username to input
                            ->first(); //calls first item in list search
                
                $this->setUserSession($user); //assigns user to session
                return redirect()->to('home'); //redirect user to home page after successful login
            }
        }
        
        echo view('templates/header', $data); //any difference to return view? or $this->load
        echo view('login');
        echo view('templates/footer');
    }

    private function setUserSession($user){ //set logged in user's details to session
        $data = [
            'userID' => $user['userID'],
            'userFirstName' => $user['userFirstName'],
            'userLastName' => $user['userLastName'],
            'userScreenName' => $user['userScreenName'],
            'isLoggedIn' => true,
            'userIsAdmin' => $user['userIsAdmin'] // takes value set in table field
        ];

        session()->set($data);
        return true;
    }

    // http://localhost/php2killifish/php2killifish/public/register
    public function register(){
        $data = [];
        helper(['form']);

        if ($this->request->getMethod() == 'post'){ //built-in CI4 validation rules for registration
            $rules = [
                'userFirstName'             => 'required|min_length[3]|max_length[255]',
                'userLastName'              => 'required|min_length[3]|max_length[255]',
                'userScreenName'            => 'required|min_length[3]|max_length[255]|is_unique[users.userScreenName]',
                'userEmail'                 => 'required|min_length[3]|max_length[255]|valid_email|is_unique[users.userEmail]', //in built CI email format validation + database validation
                'userEmail_confirm'         => 'matches[userEmail]',
                'userPassword'              => 'required|min_length[8]|max_length[255]',
                'userPassword_confirm'      => 'matches[userPassword]',
                'image'                     => 'max_size[image,7168]|is_image[image]|ext_in[image,jpg,jpeg,gif,png]'
            ];

            if (! $this->validate($rules)){ //if form is not valid
                $data['validation'] = $this->validator; 
                //validate() method only returns true if form passes with no rules failed
            } else { //if validation successful
                $model = new UserModel(); //create instance of UserModel

                $newData = [
                    'userFirstName' => $this->request->getVar('userFirstName'),
                    'userLastName' => $this->request->getVar('userLastName'),
                    'userScreenName' => $this->request->getVar('userScreenName'),
                    'userEmail' => $this->request->getVar('userEmail'),
                    'userPassword' => $this->request->getVar('userPassword'),
                ];  //send our data to model
                $model->save($newData); //save it
                $id = $model->getInsertID();
                $this->uploadImage($id);
                $session = session(); //create session
                $session->setFlashdata('success', 'Successful Registration'); //displays success dialog as flashdata (session data that will only be available for the next request)
                return redirect()->to('login'); //return user to login page
            }
        }
    
        echo view('templates/header', $data);
        echo view('register');
        echo view('templates/footer');

    }

    public function logout(){ //logs out current user

        session()->destroy(); //destroys current session
        return redirect()->to('home'); //redirects user to home page

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
				chmod($path, 0777);
			}

			// move to the next folder and build the next path.
			$folder = next($folders);
			$path .= "/{$folder}";
		}
    }
    
    protected function sampleGetImage($id) //default avatar if one is not set
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