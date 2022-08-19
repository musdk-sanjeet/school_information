<?php
include 'header.php';
?>
<div id="main-content">
    <h2>Student_Information</h2>

    <?php 

    $host="localhost";
    $user="root";
    $password="";
    $db_name="student_information";


        // 1st Step Connection Create
    $conn=mysqli_connect($host,$user,$password,$db_name) or die("Connection failed.");


        // Run SQL Query
    $sql="SELECT * FROM studnt";
    
    $result=mysqli_query($conn,$sql) or die("query unsuccessful.");

    if(mysqli_num_rows($result)>0)
    {



    ?>

    <table cellpadding="7px">
        <thead>
        <th>Id</th>
        <th>Name</th>
        <th>Father_Name</th>
        <th>Mother_Name</th>
        <th>Mobile</th>
        <th>Address</th>
         <!-- <th>Gender</th> -->
        <th>Action</th>    
        </thead>
        <tbody>
            <?php
                while ($row=mysqli_fetch_assoc($result))
                {
                    
            ?>
            <tr>
                <td><?php echo $row['sid'] ?></td>
                <td><?php echo $row['sname'] ?></td>
                <td><?php echo $row['sfather'] ?></td>
                <td><?php echo $row['smother'] ?></td>
                <td><?php echo $row['smobile'] ?></td>
                <td><?php echo $row['caddress'] ?></td>
                <!-- <td><?php echo $row['sgender'] ?></td>  -->

                <td>
                    <a href="#">Edit</a>
        
                </td>
            </tr>

        <?php } ?>
               
        </tbody>
    </table>



<?php }else{
    echo "<h3>No Records Founds</h3>";
}

// 3rd Steps Close the connection 

mysqli_close($conn);

 ?>
</div>
</div>
</body>
</html>