<?php

// namespace quiz\api\answer;

use quiz\model\Classes;

class Create
{
    public function __construct()
    {
       echo 'create class';
    }

    public function create()
    {
        $answer = new Classes();
    }
}