<?php
require_once "database.php";

class DashboardModel extends DatabaseModel{
    public $connection;

    public function pdfLoad()
    {
        $this->connection = $this->getConnection();
        $query = "SELECT * FROM pdf_files";
        $result = mysqli_query($this->connection, $query);
        
        if ($result) {              // Check if the query executed successfully
            $data = array();        // Initialize an empty array to store the fetched data
            while ($row = mysqli_fetch_assoc($result)) {        // Fetch and store the rows of data
                $data[] = $row;
            }
            $_SESSION['pdf_data'] = $data;         // Save the data in a session variable
            mysqli_free_result($result);        // Free the result set            
            // $this->closeConnection();       // Close the database connection
            $_SESSION['queryStaus'] = 'Successful';
            return true;
        }
        else
        {
            $_SESSION['queryStaus'] = mysqli_error($this->connection);
            return false;
        }

    }
    public function userLoad()
    {
        $this->connection = $this->getConnection();
        $query = "SELECT * FROM users";
        $result = mysqli_query($this->connection, $query);
        
        if ($result) {              // Check if the query executed successfully
            $data = array();        // Initialize an empty array to store the fetched data
            while ($row = mysqli_fetch_assoc($result)) {        // Fetch and store the rows of data
                $data[] = $row;
            }
            $_SESSION['users_data'] = $data;         // Save the data in a session variable
            mysqli_free_result($result);        // Free the result set            
            // $this->closeConnection();       // Close the database connection
            $_SESSION['queryStaus'] = 'Successful';
            return true;
        }
        else
        {
            $_SESSION['queryStaus'] = mysqli_error($this->connection);
            return false;
        }

    }
}


?>