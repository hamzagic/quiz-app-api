<?php

// namespace quiz\api\answer;

use quiz\model\Answer;

class Get
{
    public function __construct()
    {
       echo 'get answer';
    }

    public function create()
    {
        $answer = new Answer();
    }
}