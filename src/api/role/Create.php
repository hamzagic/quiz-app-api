<?php

// namespace quiz\api\answer;

use quiz\model\Role;

class Create
{
    public function __construct()
    {
       echo 'create role';
    }

    public function create()
    {
        $answer = new Role();
    }
}