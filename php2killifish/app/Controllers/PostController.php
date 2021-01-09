<?php namespace App\Controllers;

use App\Models\PostModel;

class PostController extends BaseController{
    public function index(){ //community post page


    }

    public function submit(){
        $data = [];
        helper(['form']);

        if ($this->request->getMethod() == 'post'){ //built-in CI4 validation rules for users creating a new post
            $rules = [
                'postTitle'                   => 'required|min_length[3]|max_length[600]',
                'postDescription'             => 'required|min_length[3]|max_length[1000]',
                // 'postFile'                => 'max_size[image,4096]|is_image[image]|ext_in[image,jpg,jpeg,gif,png]'
            ];

            if (! $this->validate($rules)){ //if form is not valid
                $data['validation'] = $this->validator; 
                //validate() method only returns true if form passes with no rules failed
            } else { //if validation successful
                $model = new PostModel(); //create instance of PostModel

                $newData = [
                    'postTitle' => $this->request->getVar('postTitle'),
                    'postDescription' => $this->request->getVar('postDescription'),
                ];  //send our data to model
                $model->save($newData); //save it
                $session = session(); //create session
                $session->setFlashdata('success', 'Post successfully added'); //displays success dialog as flashdata (session data that will only be available for the next request)
                return redirect()->to('community'); //return user to update page
            }
        }

        echo view('templates/header', $data);
		echo view('postSubmit');
		echo view('templates/footer');
    }


    // public function display(){

    // }
}
?>