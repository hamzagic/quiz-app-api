<?php

// namespace quiz\api\answer;

use quiz\model\Classes;

class Get
{
    public function __construct()
    {
       echo 'get class';
    }

    public function create()
    {
        $answer = new Classes();
    }
}