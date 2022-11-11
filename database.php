<?php
$servername='localhost';
$username='root';
$pass='root';
$dbname='task';

 
 $con = new mysqli($servername, $username, $pass, $dbname);
 if(!$con){
   die('could not connect mysql:' .mysql_error());
 }
 ?>