<?php
require_once "connection.php";
$db = 'dummy';
$conn = connectDB($db);

if(!$conn){
    die('Could not connect: '. mysqli_connect_error());
}
$uid = $_GET['ID'];
$sql = "DELETE FROM myusers WHERE ID = $uid";
$result = mysqli_query($conn, $sql) or die("Query Failed...");
header('location:index.php');
mysqli_close($conn);
?>