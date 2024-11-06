<?php

namespace sys\core\database;

use mysqli;
use sys\core\utils\Config;

class Connection
{
    public array $db_params;

    public function __construct()
    {
        $config = new Config();
        $this->db_params = $config->get('database');
    }

    public function getConnection()
    {
        $conn = new mysqli($this->db_params['servername'], $this->db_params['username'], $this->db_params['password'], $this->db_params['dbname']);
        if ($conn->connect_error) {
            die("Connection failed: " . $conn->connect_error);
        }
        return $conn;
    }
}
