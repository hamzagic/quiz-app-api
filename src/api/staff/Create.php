<?php

// namespace quiz\api\answer;

use quiz\model\Staff;

class Create
{
    public function __construct()
    {
       echo 'create answer';
    }

    public function create()
    {
        $answer = new Staff();
    }
}