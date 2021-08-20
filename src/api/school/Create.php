<?php

// namespace quiz\api\answer;

use quiz\model\School;

class Create
{
    public function __construct()
    {
       echo 'create school';
    }

    public function create()
    {
        $answer = new School();
    }
}