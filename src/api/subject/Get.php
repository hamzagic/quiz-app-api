<?php

// namespace quiz\api\answer;

use quiz\model\Subject;

class Get
{
    public function __construct()
    {
       echo 'get subject';
    }

    public function create()
    {
        $answer = new Subject();
    }
}