<?php

// namespace quiz\api\answer;

use quiz\model\Question;

class Get
{
    public function __construct()
    {
       echo 'get question';
    }

    public function create()
    {
        $answer = new Question();
    }
}