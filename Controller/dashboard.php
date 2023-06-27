<?php
require_once "../Model/dashboard.php";

$load = new DashboardModel();
$response = $load->pdfLoad();
$users = $load->userLoad();
$load->closeConnection();

if($users && $response){
    header('Location: ../Views/dashboard');
    exit();
}
else{echo $_SESSION['queryStaus'];}
?>