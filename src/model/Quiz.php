<?php

namespace quiz\model;

use quiz\database\Database;

class Quiz
{
    private $name;
    private $back_button;
    private $active;
    private $start_date;
    private $end_date;
    private $questions_per_page;
    private $created_at;
    private $updated_at;
    private $db;

    public function __construct()
    {
        $this->db = new Database();
    }

    public function create($data)
    {

    }
}