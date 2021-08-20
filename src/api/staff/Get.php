<?php

// namespace quiz\api\answer;

use quiz\model\Staff;

class Get
{
    public function __construct()
    {
       echo 'get staff';
    }

    public function create()
    {
        $answer = new Staff();
    }
}