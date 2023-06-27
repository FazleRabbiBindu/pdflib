<?php
require_once "../Model/home.php";

$load = new HomeModel();
$response = $load->homeLoad();
if($response){
    header('Location: ../Views/home');
    exit();
}
else{echo $_SESSION['queryStaus'];}
?>