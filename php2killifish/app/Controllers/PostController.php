<?php namespace App\Controllers;

use App\Models\PostModel;

class PostController extends BaseController{
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
        helper(['form']);

        $data['posts'] = $model->getPosts($postSlug);
        
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
                    'postAuthor' => session()->get('userID'),
                    'postSlug' => url_title($this->request->getPost('postTitle'))
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