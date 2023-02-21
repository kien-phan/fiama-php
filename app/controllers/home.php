<?php

class Home extends Controller
{
    function index($a = '', $b = '', $c = '')
    {
        // $image_class = $this->loadModel("image_class");
        // show($image_class);

        // show($a);
        // show($b);
        // show($c);

        // $DB = new Database();
        // $data['result'] = $DB->read("select * from images");
        $data['page_title'] = 'Home';

        $posts = $this->loadModel("posts");
        $result = $posts->getAll();
        $data['posts'] = $result;

        $pagination = $this->loadModel("pagination");
        $data['prev_page'] = $pagination->generate_link($pagination->current_page_number() - 1);
        $data['next_page'] = $pagination->generate_link($pagination->current_page_number() + 1);

        //enable extention gd by go to xampp/php/php.ini uncomment the line ;extension=gd
        $image_class = $this->loadModel("image_class");
        if (is_array($data['posts']))
        {
            foreach($data['posts'] as $key => $value)
            {
                $data['posts'][$key]->image = $image_class->get_thumbnail($data['posts'][$key]->image);
            }
        }

        $this->view("fiama/index", $data);
    }

    
}