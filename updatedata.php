<?php 
include_once 'header.php'; 
require_once "connection.php";
    $db = 'dummy';
    $conn = connectDB($db);

    if(!$conn){
        die('Could not connect: '. mysqli_connect_error());
    }

    $id = $_GET['sid'];
    $name = $_GET['sname'];
    $add =  $_GET['saddress'];
    $class = $_GET['class'];
    $phone = $_GET['sphone'];

    $Query = "UPDATE myusers SET UNAME = '$name', CLASS = '$class', UADDRESS = '$add', PHONE = '$phone' WHERE ID = '$id' ";
    
    $result = mysqli_query($conn,$Query);

    header("Location:index.php");
?>