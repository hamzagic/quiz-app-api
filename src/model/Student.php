<?php

namespace quiz\model;

use quiz\database\Database;

class Student
{
    private $id;
    private $first_name;
    private $last_name;
    private $email;
    private $password;
    private $school_id;
    private $active;
    private $created_at;
    private $updated_at;
    private $db;

    public function __construct()
    {
        $this->db = new Database();
        echo 'answer';
    }

    public function create($data)
    {

    }

    public function list()
    {

    }

    public function getById($id)
    {

    }

    public function delete($id)
    {

    }

    public function edit($id, $data)
    {

    }
}