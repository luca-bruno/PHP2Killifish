<?php namespace App\Controllers;

use App\Models\UserModel;

class UserController extends BaseController{
    

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
                // 'userAvatar'                => 'max_size[image,4096]|is_image[image]|ext_in[image,jpg,jpeg,gif,png]',
                'userEmail'                 => 'required|min_length[3]|max_length[255]|valid_email|is_unique[users.userEmail]', //in built CI email format validation + database validation
                'userEmail_confirm'         => 'matches[userEmail]',
                'userPassword'              => 'required|min_length[8]|max_length[255]',
                'userPassword_confirm'      => 'matches[userPassword]',
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
                $session = session(); //create session
                $session->setFlashdata('success', 'Successful Registration'); //displays success dialog as flashdata (session data that will only be available for the next request)
                return redirect()->to('login'); //return user to login page
            }
        }
    
        echo view('templates/header', $data);
        echo view('register');
        echo view('templates/footer');

    }

    // public function userLogout(){

    //     $this->session->sess_destroy();
    //     redirect('user/loginView', 'refresh');
    // }
}
?>