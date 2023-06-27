<?php
require_once "database.php";


class login extends DatabaseConnection{
    private $result;
    private $error;

    private function __construct($user,$password)
    {
        $connection = $this->getConnection();
        $query = "SELECT * FROM users
                WHERE username = '$user' AND password = '$password'";
        $this->result = mysqli_query($connection, $query);
    }

    public function loginAuth()
    {
        return $this->result;
    }

}


?>