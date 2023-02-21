<?php

class Single_post extends Controller
{
    function index($link = '')
    {
        if ($link == "")
        {
            $data['page_title'] = "Image not found";
            $this->view("fiama/not_found", $data);
        }
        else 
        {
            $posts = $this->loadModel("posts");
            $result = $posts->getOne($link);
            $data['post'] = $result;

            $data['page_title'] = 'Single Post';
            $this->view("fiama/single_post", $data);
        }
    }

    
}