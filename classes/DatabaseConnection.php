<?php

class DatabaseConnection
{
    private $hostname;
    private $username;
    private $passwd;
    private $dbname;

    public function __construct()
    {
        $this->hostname = "localhost";
        $this->username = "root";
        $this->passwd = "";
        $this->dbname = "attendance_management_db";
    }

    public function connect()
    {
        try {
            return new mysqli($this->hostname, $this->username, $this->passwd, $this->dbname);
        } catch (Exception $exception) {
            echo "Failed to connect to MySQL: " . $exception->getMessage();
        }
    }
}


