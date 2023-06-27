<?php

if(isset($_GET['home']))
{
    header('Location: ./Controller/home');
    exit();
}
elseif(isset($_GET['dashboard']))
{
    header('Location: ./Controller/dashboard');
    exit();
}
elseif(isset($_GET['dasUpload']))
{
    header('Location: ./Views/upload');
    exit();
}
elseif(isset($_GET['dasManage']))
{
    header('Location: ./Controller/manage');
    exit();
}
else
{
    header('Location: ./Controller/home');
    exit();
    // echo "no page found";
}
?>