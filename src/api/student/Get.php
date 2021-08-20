<?php

// namespace quiz\api\answer;

use quiz\model\Student;

class Get
{
    public function __construct()
    {
       echo 'get student';
    }

    public function create()
    {
        $answer = new Student();
    }
}