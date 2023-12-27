<?php
require 'header.php';
?>
<div id="main-content">
    <h2>All Records</h2>
    <table cellpadding="7px">
        <thead>
        <th>Id</th>
        <th>Name</th>
        <th>Address</th>
        <th>Class</th>
        <th>Phone</th>
        <th>Action</th>
        </thead>
        <tbody>
            <?php
                require_once "connection.php";
                $db = 'dummy';
                $conn = connectDB($db);

                if(!$conn){
                    die('Could not connect: '. mysqli_connect_error());
                }

                $sql = "SELECT * FROM `myusers`";
                $result=mysqli_query($conn,$sql);
                if(mysqli_num_rows($result)>0){
                    // $i=1;
                    while($row = mysqli_fetch_assoc($result)){
                        echo "<tr>";
                        echo "<td>". $row['ID'] ."</td>";
                        echo "<td>".$row['UNAME']."</td>";
                        echo "<td>".$row['UADDRESS']."</td>";
                        echo "<td>".$row['CLASS']."</td>";
                        echo "<td>".$row['PHONE']."</td>";
                        ?>
                        <td>
                                <a href='edit.php?ID=<?php echo $row['ID'] ?>'>Edit</a>
                                <a href='deleteinline.php?ID=<?php echo $row['ID']?>'>Delete</a>
                                </td>
                                <?php
                        echo "</tr>";
                        // $i++;
                    }
                }else{
                    echo 'Nothing to Display';
                } 

            ?>
        </tbody>
    </table>
</div>
</div>
</body>
</html>