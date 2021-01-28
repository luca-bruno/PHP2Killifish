<?php namespace App\Controllers;

use App\Models\CommentModel;
use App\Models\PostModel;

class CommentController extends BaseController{
    public function index(){ //update page

        # Create an instance of the comment model.
        $model = new CommentModel();
        
        // $data['title'] = 'Comments Archive';
        $data['comments'] = $model->getComments();

        echo view('templates/header', $data);
        echo view('postDisplay', $data);
        echo view('templates/footer');

    }

    // function view($commentSlug = NULL){

    //     $model = new CommentModel();

    //     $data['comments'] = $model->getComments($commentSlug);
        
    //     if (empty($data['comments'])){

    //         throw new \CodeIgniter\Exceptions\PageNotFoundException('Cannot find the comment item: ' . $commentSlug);
        
    //     }

    //     $data['commentTitle'] = $data['comments']['commentTitle'];
        
    //     echo view('templates/header', $data);
    //     echo view('postDisplay', $data);
    //     echo view('templates/footer');
    // }


    public function submit(){
        $data = [];
        helper(['form']);

        if ($this->request->getMethod() == 'post'){ //built-in CI4 validation rules for admin creating new post
            $rules = [
                'commentDescription'             => 'required|min_length[3]|max_length[1000]'
            ];

            $postModel = new PostModel();
            $postID = $this->request->getPost('parent-post-id');
            $post = $postModel->find($postID);

            if (! $this->validate($rules)){ //if form is not valid
                $data['validation'] = $this->validator; 
                //validate() method only returns true if form passes with no rules failed
            } else { //if validation successful
                $model = new CommentModel(); //create instance of Comment Model

                $newData = [
                    'commentDescription' => $this->request->getVar('commentDescription'),
                    'commentAuthor' => session()->get('userID'),
                    'commentParent' => $this->request->getPost('parent-post-id')
                ];  //send our data to model
                $model->save($newData); //save it
                $uri = current_url(true);

                $session = session(); //create session
                $session->setFlashdata('success', 'Comment successfully added'); //displays success dialog as flashdata (session data that will only be available for the next request)
            }
        }

        return redirect()->to("postDisplay/{$post['postSlug']}"); //return user to post dislplay page
    }


    // public function display(){

    // }
}
?>