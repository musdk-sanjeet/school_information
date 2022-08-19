<?php
 $host="localhost";
 $user="root";
 $password="";
 $db_name="student_information";


     // 1st Step Connection Create
 $conn=mysqli_connect($host,$user,$password,$db_name) or die("Connection failed.");

 if(isset($_POST['student_add']))
 {
    $sid=$_POST['sid'];
    $sname=$_POST['sname'];
    $sfather=$_POST['sfather'];
    $smother=$_POST['smother'];
    $smobile=$_POST['smobile'];
    $caddress=$_POST['saddress'];
    // $sgender=$_POST['sgender'];


   echo $query="INSERT INTO studnt(sname,sfather,smother,smobile,caddress) VALUES
     ('$sname','$sfather','$smother','$smobile','$caddress')";
    $query_run=mysqli_query($conn,$query);

    if($query_run)
    {
	header('Location: index.php');
    }
else
{
    echo "Something want wrong";
	 header('Location: add.php');


}  

    

 }