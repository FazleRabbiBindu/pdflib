<?php
require_once "../Model/manage.php";

$manage = new ManageModel();

if(isset($_POST['update']))
{
    
    $result = $manage->update($_POST['description'], $_POST['title'],$_POST['author'],$_POST['id']);
    if($result){
        $response = $manage->pdfLoad();
        $manage->closeConnection();
        header('Location: ../Views/manage');
        exit();
    }
    echo "Result: ".$_SESSION['alert'];
    
}
elseif(isset($_POST['delete']))
{
    $file = '../uploads/'.$_POST['filename'];
    $image = '../Assets/image/'.$_POST['image'];
    $result = $manage->delete($file,$image,$_POST['id']);
    if($result){
        $response = $manage->pdfLoad();
        $manage->closeConnection();
        header('Location: ../Views/manage');
        exit();
    }
    echo "Result: ".$_SESSION['alert'];
    
}
else
{
    $response = $manage->pdfLoad();
    $manage->closeConnection();
    if($response){
        header('Location: ../Views/manage');
        exit();
    }
    else{echo $_SESSION['queryStaus'];}
}

?>