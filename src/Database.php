<?php

namespace Src;

use PDO;
use PDOException;

class Database
{
    public $dbname;
    public $username;
    public $password;
    public $servername;

    public function __construct()
    {
        $this->dbname = env('DB_NAME');
        $this->username = env('DB_USERNAME');
        $this->password = env('DB_PASSWORD');
        $this->servername = env('DB_SERVERNAME');
    }

    public function connect()
    {
        try {
            $conn = new PDO("mysql:host=$this->servername;dbname=$this->dbname", $this->username, $this->password);
            $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
            return $conn;
        } catch (PDOException $e) {
            echo "Connection failed: {$e->getMessage()}";
        }
    }
}
