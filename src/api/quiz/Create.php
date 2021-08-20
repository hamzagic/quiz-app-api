<?php
header('Access-Control-Allow-Origin: *');
header('Content-Type: application/json');

// namespace quiz\api\quiz;

use quiz\model\Quiz;

class Create
{
    public $quiz;

    public function __construct()
    {
       echo 'create quiz';
       $this->quiz = new Quiz();
       $this->create();
    }

    public function create()
    {
        // $this->getRequestData();
        $test = $_POST['test'];
        $json = file_get_contents('php://input');
        $data = json_decode($json);
        echo $data->another;
    }

    public function getRequestData() 
    {
        print_r($_POST['test']);
    }
}