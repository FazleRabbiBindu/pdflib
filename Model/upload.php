<?php
session_start(); // Start the session

require_once "database.php";

class UploadModel extends DatabaseModel{
    private $connection;

    public function uploader($fileToUpload, $targetDirectory) {
      $originalFileName = basename($fileToUpload['name']);
      $targetFile = $targetDirectory . $originalFileName;
      $uploadSuccess = true;
      $uploadMessage = '';
  
      // Check if file with the same name already exists
      if (file_exists($targetFile)) {
        $fileExtension = strtolower(pathinfo($originalFileName, PATHINFO_EXTENSION));
        $newFileName = $this->generateUniqueFileName($targetDirectory, $fileExtension);
        $targetFile = $targetDirectory . $newFileName;
        $originalFileName=$newFileName;
      }
  
      // Validate file type
      $allowedExtensions = ['jpg', 'jpeg', 'png', 'pdf'];
      $fileExtension = strtolower(pathinfo($fileToUpload['name'], PATHINFO_EXTENSION));
      if (!in_array($fileExtension, $allowedExtensions)) {
        $uploadSuccess = false;
        $uploadMessage = 'Invalid file type. Only PDF, JPG, JPEG, PNG files are allowed.';
      }
  
      // Validate file size (in this example, maximum file size is set to 5MB)
      $maxFileSize = 100 * 1024 * 1024; // 100MB
      if ($fileToUpload['size'] > $maxFileSize) {
        $uploadSuccess = false;
        $uploadMessage = 'File size exceeds the maximum limit of 5MB.';
      }
  
      // Upload the file if validation passes
      if ($uploadSuccess) {
        if (move_uploaded_file($fileToUpload['tmp_name'], $targetFile)) {
          $uploadMessage = 'File uploaded successfully.';
        } else {
          $uploadSuccess = false;
          $uploadMessage = 'Error uploading file.';
        }
      }
  
      return array(
        'success' => $uploadSuccess,
        'message' => $uploadMessage,
        'filename' =>$originalFileName
      );
    }
  
    // Generate a unique file name to avoid collisions
    private function generateUniqueFileName($targetDirectory, $fileExtension) {
      $newFileName = uniqid() . '.' . $fileExtension;
      $targetFile = $targetDirectory . $newFileName;
  
      // Check if the generated name already exists, recursively generate a new name if needed
      if (file_exists($targetFile)) {
        return $this->generateUniqueFileName($targetDirectory, $fileExtension);
      }
  
      return $newFileName;
    }
    
    public function updatePDFMetadata($pdfFileName, $metadata,$imageName) {
        
        $this->connection = $this->getConnection();
        
        $pdfFilename = mysqli_real_escape_string($this->connection, $pdfFileName);
        $title = mysqli_real_escape_string($this->connection, $metadata['title']);
        $author = mysqli_real_escape_string($this->connection, $metadata['author']);
        $description = mysqli_real_escape_string($this->connection, $metadata['description']);
        $image = mysqli_real_escape_string($this->connection, $imageName);
        
        $query = "INSERT INTO pdf_files (filename, title, author, description, image) VALUES ('$pdfFilename', '$title', '$author', '$description', '$image')";
        return mysqli_query($this->connection, $query);
    }

  }
  
?>


