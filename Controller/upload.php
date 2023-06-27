<?php
require_once "../Model/upload.php";

$uploadModel = new UploadModel();

$pdfToUpload = $_FILES['pdfToUpload'];
$imageToUpload = $_FILES['imageToUpload'];

$metadata = [
    'title' => $_POST['title'],
    'author' => $_POST['author'],
    'description' => $_POST['description']
];

// Upload the PDF file to the desired location
$pdfDirectory = '../uploads/';
$pdfName = $uploadModel->uploader($pdfToUpload,$pdfDirectory);
$imageDirectory = '../Assets/image/';
$imageName = $uploadModel->uploader($imageToUpload,$imageDirectory);

// Update the metadata in the database
$sqlResult = $uploadModel->updatePDFMetadata($pdfName['filename'], $metadata,$imageName['filename']);
echo $pdfName['success'];
echo $imageName['success'];
// print_r($sqlResult);
$_SESSION['alert'] = "PDF ".$pdfName['message'].". Image ".$imageName['message'];
// Display a success message
header("Location: ../Views/upload");
exit();

?>