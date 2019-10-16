<?php

namespace Armonya\Request;

class Request
{

    public $post = [];

    public function __construct()
    {

        $this->getRequest();
        $this->getPost();

    }

    private function getRequest()
    {
        foreach ($_SERVER as $key => $value) {
            $this->{strtolower($key)} = $value;
        }
    }

    private function getPost()
    {
        if($this->request_method == "POST") {
            foreach ($_POST as $key => $value) {
                $this->post[$key] = $value;
            }
        }
    }
}