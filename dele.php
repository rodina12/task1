<?php
 
 $servername='localhost';
 $username='root';
 $pass='root';
 $dbname='task';
$con = new mysqli($servername, $username, $pass, $dbname);
 
    $id=$_GET["id"];
$sql=mysqli_query($con,"DELETE FROM `users` WHERE `userid`=$id");
header("Location:admin.php");
?>