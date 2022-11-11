<?php
 
 $servername='localhost';
 $username='root';
 $pass='root';
 $dbname='task';
$con = new mysqli($servername, $username, $pass, $dbname);
 
    $id=$_GET["id"];
$sql=mysqli_query($con,"DELETE FROM `project` WHERE `projectID`=$id");
header("Location:projects.php");
?>