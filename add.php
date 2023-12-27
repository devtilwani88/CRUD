<?php include_once 'header.php'; ?>
<div id="main-content">
    <h2>Add New Record</h2>
    <form class="post-form" action="#" method="post">
        <div class="form-group">
            <label>Name</label>
            <input type="text" name="sname" />
        </div>
        <div class="form-group">
            <label>Address</label>
            <input type="text" name="saddress" />
        </div>
        <div class="form-group">
            <label>Class</label>
            <select name="class">
                <option value="" selected disabled>Select Class</option>
                <option value="BCA">BCA</option>
                <option value="BSC">BSC</option>
                <option value="B.TECH">B.TECH</option>
            </select>
        </div>
        <div class="form-group">
            <label>Phone</label>
            <input type="text" name="sphone" />
        </div>
        <input class="submit" type="submit" value="Save" name='save' />
    </form>
</div>
</div>
</body>
</html>

<?php

if(isset($_POST['save'])){
    
    require_once "connection.php";
    $db = 'dummy';
    $conn = connectDB($db);

    if(!$conn){
        die('Could not connect: '. mysqli_connect_error());
    }

    $name = $_POST['sname'];
    $address = $_POST['saddress'];
    $class = $_POST['class'];
    $phone = $_POST['sphone'];

    $sql = "INSERT INTO myusers(uname,uaddress,class,phone) VALUES ('$name','$address','$class','$phone')";

    mysqli_query($conn,$sql);
    header('location:index.php');
    // die();
}
?>