<?php

namespace quiz\database;

include_once  "../../config.php";

use \PDO as PDO;

class Database
{
    private $host = DB_HOST;
    private $db = DB_NAME;
    private $user = DB_USER;
    private $pass = DB_PWD;

    private $dbh;
    private $error;

    public function __construct()
    {
        // $dsn = 'mysql:host=' . $this->host . ';dbname=' . $this->db;
        // $options = array(
        //     PDO::ATTR_PERSISTENT => true,
        //     PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION
        // );

        // try {
        //     $this->dbh = new PDO($dsn, $this->user, $this->pass, $options);
        //     return $this->dbh;
        // } catch (\PDOException $e) {
        //     $this->error = $e->getMessage();
        //     echo $this->error;
        // }
    }

    public function connect()
    {
        $dsn = 'mysql:host=' . $this->host . ';dbname=' . $this->db;
        $options = array(
            PDO::ATTR_PERSISTENT => true,
            PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION
        );

        try {
            $this->dbh = new PDO($dsn, $this->user, $this->pass, $options);
            echo 'connected';
            return $this->dbh;
        } catch (\PDOException $e) {
            $this->error = $e->getMessage();
            echo $this->error;
        }
    }
}