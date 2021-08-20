<?php

// namespace quiz\api\answer;

use quiz\model\Student;

class Create
{
    public function __construct()
    {
       echo 'create student';
    }

    public function create()
    {
        $answer = new Student();
    }
}