<?php
session_start();
class DatabaseModel {
    private $connection;
    private $hostName = 'localhost';
    private $userName = 'root';
    private $password = '';
    private $databaseName = 'mydatabase';
    public function __construct() {
        $this->connection = mysqli_connect($this->hostName, $this->userName, $this->password, $this->databaseName);
        if (!$this->connection) {
            die("Connection failed: " . mysqli_connect_error());
        }
    }

    public function getConnection() {
        return $this->connection;
    }

    public function closeConnection() {
        mysqli_close($this->connection);
    }
}

?>
