<?php

class About extends Controller
{
    function index()
    {
        $data['page_title'] = 'About';
        $this->view("fiama/about-us", $data);
    }
}