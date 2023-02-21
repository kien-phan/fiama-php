<?php

class Upload extends Controller
{
    function index()
    {
        header("Location: " . ROOT . "upload/image");
        die;
    }

    function image()
    {
        $user = $this->loadModel('user');
        $result = $user->check_logged_in();

        if (!$result)
        {
            header("Location:" . ROOT . "login");
            die;
        }

        if(isset($_POST['title']) && isset($_FILES['file']))
        {
            $uploader = $this->loadModel("upload_file");
            $uploader->upload($_POST, $_FILES);
        }

        $data['page_title'] = 'Upload';
        $this->view("fiama/upload", $data);
    }
}