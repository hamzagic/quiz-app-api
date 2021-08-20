<?php

// namespace quiz\api\answer;

use quiz\model\Answer;

class Create
{
    public function __construct()
    {
       echo 'create answer';
    }

    public function create()
    {
        $answer = new Answer();
    }
}