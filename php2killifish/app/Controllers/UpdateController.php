<?php namespace App\Controllers;

use App\Models\UpdateModel;

class UpdateController extends BaseController{
    public function index(){ //update page


    }

    public function submit(){
        $data = [];
        helper(['form']);

        if ($this->request->getMethod() == 'post'){ //built-in CI4 validation rules for admin creating new post
            $rules = [
                'newsTitle'                   => 'required|min_length[3]|max_length[600]',
                'newsDescription'             => 'required|min_length[3]|max_length[1000]',
                // 'newsImage'                => 'max_size[image,4096]|is_image[image]|ext_in[image,jpg,jpeg,gif,png]'
            ];

            if (! $this->validate($rules)){ //if form is not valid
                $data['validation'] = $this->validator; 
                //validate() method only returns true if form passes with no rules failed
            } else { //if validation successful
                $model = new UpdateModel(); //create instance of UpdateModel

                $newData = [
                    'newsTitle' => $this->request->getVar('newsTitle'),
                    'newsDescription' => $this->request->getVar('newsDescription'),
                ];  //send our data to model
                $model->save($newData); //save it
                $session = session(); //create session
                $session->setFlashdata('success', 'Update successfully added'); //displays success dialog as flashdata (session data that will only be available for the next request)
                return redirect()->to('updates'); //return user to update page
            }
        }

        echo view('templates/header', $data);
		echo view('updateSubmit');
		echo view('templates/footer');
    }


    // public function display(){

    // }
}
?>