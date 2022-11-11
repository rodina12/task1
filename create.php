<html lang="en">
<head>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css"> 
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
    <title>add</title>
</head>
<style>
    body{
        background-color: white;
    }
   
</style>
</head>
<body>
<?php
 $servername='localhost';
 $username='root';
 $pass='root';
 $dbname='task';
/*took data from the form*/
if (isset($_POST['name'])) {
  $namee =$_POST['name'];
  $email =$_POST['email'];
  $phone =$_POST['phone'];
  $password =$_POST['pwd'];
  $task =$_POST['task'];
  
  
  
  
      $con = new mysqli($servername, $username, $pass, $dbname);
      /*insert data into users table*/
  $sql = "INSERT INTO users (name, email, password, phone ,is_admin,task_name) VALUES ( '$namee','$email', '$password','$phone', 0,'$task')";
  
  
  $rs = mysqli_query($con,$sql);
  
}






?>
<div class="container">
    <h2>ADD employee</h2>
    <form method="POST">
    <div class="form-group">
        <form onsubmit="myfunction()">
        <label for="first"> name</label>
        <input type="text" class="form-control" id="first" placeholder=" name" name="name" required>
      </div>
      <div class="form-group">
       
       <label for="email">Email</label>
       <input type="email" class="form-control" id="email" placeholder="Enter email" name="email" required>
     </div>
      <div class="form-group">
        <label for="phone">phone</label>
        <input type="tel" class="form-control" id="phone" placeholder="Mobile number" name="phone" required>
      </div>
      <div class="form-group">
        <label for="pwd">Password</label>
        <input type="password" class="form-control" id="pwd" placeholder="Enter password" name="pwd" required>
      </div>
      <div class="form-group">
        <label for="task">task</label>
        <input type="text" class="form-control" id="task" placeholder="task" name="task">
      </div>
      
</div>
      <button type="submit"  class="btn btn-primary"  >add</button>
      
    </form>

  </div>

</body>
</html>
