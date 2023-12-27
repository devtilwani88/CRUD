<?php 
include_once 'header.php'; 
require_once "connection.php";
    $db = 'dummy';
    $conn = connectDB($db);

    if(!$conn){
        die('Could not connect: '. mysqli_connect_error());
    }
?>

<div id="main-content">
    <h2>Edit Record</h2>
    <!-- <form class="post-form" action="" method="post">
        <div class="form-group">
            <label>Id</label>
            <input type="text" name="sid" />
        </div>
        <input class="submit" type="submit" name="showbtn" value="Show" />
    </form> -->

    <?php

$stu_id = $_GET['ID'];
$sql = "SELECT * FROM myusers WHERE ID = $stu_id";
$result = mysqli_query($conn,$sql) or die("Query failed");
if(mysqli_num_rows($result)>0){
    while($row=mysqli_fetch_assoc($result)){
        ?>
    <form class="post-form" action="updatedata.php" method="get">
        <div class="form-group">
            <label>Name</label>
            <input type="hidden" name="sid"  value="<?php echo $row['ID'];?>" />
            <input type="text" name="sname" value="<?php echo $row['UNAME'];?>" />
        </div>
        <div class="form-group">
            <label>Address</label>
            <input type="text" name="saddress" value="<?php echo $row['UADDRESS'];?>" />
        </div>
        <div class="form-group">
        <label>Class</label>
        <select name="class">
           
            <?php   
            $classes = array("BCA","BSC","B.TECH");
            $i=0;
            while($i<3){
                if($classes[$i] == $row['CLASS'])
                    echo "<option value='$classes[$i]' selected> $classes[$i] </option>";
                else
                echo "<option value='$classes[$i]' > $classes[$i] </option>";
                $i++;
            }
         
            ?>
         </select>

        </div>
        <div class="form-group">
            <label>Phone</label>
            <input type="text" name="sphone" value="<?php echo $row['PHONE'];?>" />
        </div>
    <input class="submit" type="submit" value="Update" />
    </form>
        <?php 
        }
    } 
        ?>

</div>
</div>
</body>
</html>