<?php

// namespace quiz\api\answer;

use quiz\model\School;

class Get
{
    public function __construct()
    {
       echo 'get school';
    }

    public function create()
    {
        $answer = new School();
    }
}