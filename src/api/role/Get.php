<?php

// namespace quiz\api\answer;

use quiz\model\Role;

class Get
{
    public function __construct()
    {
       echo 'get role';
    }

    public function create()
    {
        $answer = new Role();
    }
}