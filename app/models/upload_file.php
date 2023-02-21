<?php

class Upload_file 
{
    function upload($POST, $FILES)
    {
        $DB = new Database();
        $_SESSION['error'] = "";
        $allowed[] = "image/jpeg"; 

        if (isset($POST['title']) && isset($FILES['file']))
        {
            //upload file
            if($FILES['file']['name'] != "" && $FILES['file']['error'] == 0 && in_array($FILES['file']['type'], $allowed))
            {
                // show($POST);
                // show($FILES);
                // die;
                $folder = "uploads/";
                if(!file_exists($folder))
                {
                    mkdir($folder, 0777, true);
                }
                $destination = $folder . $FILES['file']['name'];
                move_uploaded_file($FILES['file']['tmp_name'], $destination);
            }
            else 
            {
                $_SESSION['error'] = "This file could not be uploaded!!";
            }

            if($_SESSION['error'] == "")
            {
                //save to db
                $arr['title'] = $POST['title'];
                $arr['description'] = $POST['description'];
                $arr['url_address'] = get_random_string_max(60);
                $arr['date'] = date("Y-m-d H:i:s");
                $arr['image'] = $destination;
                                                            //":" for prepare statement
                $query = "insert into images (title, description, url_address, date, image) values (:title, :description, :url_address, :date, :image)";
                $data = $DB->write($query, $arr);

                if($data)
                {
                    //signed up
                    header("Location:" . ROOT . "home");
                    die;
                }
            }
            else
            {

            }
        }
    }
}