<?php

namespace App\Controllers;

class Controller{
    public function sendPage($page, array $data = [])
    {
        exit($this->view->render($page, $data));
    }
}