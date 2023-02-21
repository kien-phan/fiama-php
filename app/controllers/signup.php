<?php

class Signup extends Controller
{
    function index()
    {
        $data['page_title'] = 'Signup';
        if (isset($_POST['email']))
        {
            $user = $this->loadModel("user");
            $user->signup($_POST);
        }
        else if (isset($_POST['username']) && !isset($_POST['email']))
        {
            $user = $this->loadModel("user");
            $user->login($_POST);
        }
        $this->view("fiama/signup", $data);
    }
}