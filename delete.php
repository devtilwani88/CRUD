<?php include 'header.php'; 

require_once "connection.php";
    $db = 'dummy';
    $conn = connectDB($db);

    if(!$conn){
        die('Could not connect: '. mysqli_connect_error());
    }


?>
<?php

if(isset($_POST['deletebtn'])){
    $uid = $_POST['sid'];
    $sql = "DELETE FROM myusers WHERE ID = $uid";
    $result = mysqli_query($conn, $sql) or die('Query Failed...');
    header('location:index.php');
    mysqli_close($conn);
}


?>
<div id="main-content">
    <h2>Delete Record</h2>
    <form class="post-form" action="" method="post">
        <div class="form-group">
            <label>Id</label>
            <input type="text" name="sid" autocomplete="off" />
        </div>
        <input class="submit" type="submit" name="deletebtn" value="Delete" />
    </form>
</div>
</div>
</body>
</html>