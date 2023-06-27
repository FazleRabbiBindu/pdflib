<?php

require_once "dashboard.php";

class ManageModel extends DashboardModel{
    public $connection;

    public function update($description,$title,$author,$id)
    {
        $this->connection = $this->getConnection();
        $query = "UPDATE pdf_files
        SET title = '$title', author = '$author', description = '$description'
        WHERE id = $id";
        $result = mysqli_query($this->connection, $query);
        if ($result) { $_SESSION['alert'] = 'Successful update';}
        else{ $_SESSION['alert'] = mysqli_error($this->connection);}
        return $result;
    }
    public function delete($file,$image,$id)
    {
        $this->connection = $this->getConnection();
        $query = "DELETE FROM pdf_files
        WHERE id = $id";
        $result = mysqli_query($this->connection, $query);
        if ($result) { 
            $_SESSION['alert'] = 'Successful database deletion';
            $this->deleteFile($file);
            $_SESSION['alert'] = $_SESSION['alert'].' '.'Successful pdf deletion';
            $this->deleteFile($image);
            $_SESSION['alert'] = $_SESSION['alert'].' '.'Successful image deletion';
        }
        else{ $_SESSION['alert'] = mysqli_error($this->connection);}
        return $result;
    }
    private function deleteFile($file_path)
    {

        if (file_exists($file_path)) {
            if (unlink($file_path)) {
                echo "File deleted successfully.";
            } else {
                echo "Unable to delete the file.";
            }
        } else {
            echo "File does not exist.";
        }

    }
}


?>