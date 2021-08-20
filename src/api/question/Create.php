<?php

// namespace quiz\api\answer;

use quiz\model\Question;

class Create
{
    public function __construct()
    {
       echo 'create question';
    }

    public function create()
    {
        $answer = new Question();
    }
}