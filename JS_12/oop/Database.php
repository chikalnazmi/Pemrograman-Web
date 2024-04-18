<?php
class Database
{
    private $host = "127.0.0.1:3306";
    private $username = "root";
    private $password = "";
    private $database = "prakwebdb";
    public $conn;

    public function __construct()
    {
        $this->conn = new mysqli(
            $this->host,
            $this->username,
            $this->password,
            $this->database
        );

        if ($this->conn->connect_error) {
            die("Connection failed: " . $this->conn->connect_error);
        }
    }
}