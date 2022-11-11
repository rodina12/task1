<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css"> 
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
    <title>admin</title>
</head>
<body>
<form  method="POST">
  <?php
 
  
  
 $servername='localhost';
 $username='root';
 $pass='root';
 $dbname='task';
 
  
  $con = new mysqli($servername, $username, $pass, $dbname);
  /*select only admin`s data from database*/
  $sql="select * from users where is_admin=0";
  $rs = mysqli_query($con,$sql);
  
?>
<div class="container">

<nav class="navbar navbar-default ">
       
    <nav class="navbar navbar-inverse navbar-fixed-top" >
    <ul class="nav navbar-nav">
        <li  ><a style="font-size: x-large;" href="#" onclick="hom()" ><i class="fa fa-home" aria-hidden="true" style='margin-right:16px' ></i>Home</a></li>
        <li class="project" ><a style="font-size: x-large;" href="#" onclick="projects()"><i class="fa fa-sign-out" aria-hidden="true"style='margin-right:16px'></i>projects</a></li>
      
    </ul> 
        <ul class="nav navbar-nav navbar-right">
          <li class="logoutt" ><a style="font-size: x-large;" href="#" onclick="logout()"><i class="fa fa-sign-out" aria-hidden="true"style='margin-right:16px'></i>log out</a></li>
          
        </ul> 
        
  
    </nav>
    

</div>
<div class="container">
<table class="table table-hover"  style=" margin-top: 50px;" >
    <tr>
        <th>employeeID</th>
        <th>name</th>
        <th>email</th>
        <th>password</th>
        <th>phone</th>
        <th>task</th>
        <th>optional</th>
 
  </tr>
  <?php
  $num=mysqli_num_rows($rs);
  if($num>0){
      while($result=mysqli_fetch_assoc($rs)){
          $us=$result['userID'];
          echo " <tr>
          <th>".$result['userID']."</th>
          <th>".$result['name']."</th>
          <th>".$result['email']."</th>
          <th>".$result['password']."</th>
          <th>".$result['phone']."</th>
          <th>".$result['task_name']."</th>
           


	
          <th><a href='http://localhost/task/delete.php?id=$us'> Delete </a>

          <a href='http://localhost/task/update.php?id=$us'> update </a>
          </th>
     
    </tr>";
         
      }
  }
  else{
      echo"no data found";
  }
  /*include page to create new employee*/
  include_once "create.php";

  ?>
 </div>
</table>

<script> 
       
       
        function hom(){
          window.location.href = 'http://localhost/task/admin.php';
        }
     
        function logout(){
          window.location.href = ' http://localhost/task/login.php';
        }
        function projects(){
          window.location.href = ' http://localhost/task/projects.php';
        }
       

      </script> 
</body>
</html>