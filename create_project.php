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

if (isset($_POST['projectName'])) {
  $name =$_POST['projectName'];

  
  
  
  
      $con = new mysqli($servername, $username, $pass, $dbname);
  $sql = "INSERT INTO project (projectName) VALUES ( '$name')";
  
  
  $rs = mysqli_query($con,$sql);
  
}






?>
<div class="container">
    <h2>ADD project</h2>
    <form method="POST">
    <div class="form-group">
        <form onsubmit="myfunction()">
        <label for="first"> project</label>
        <input type="text" class="form-control" id="first" placeholder=" project" name="projectName" required>
      </div>
</div>
      <button type="submit"  class="btn btn-primary"  >add</button>
      
    </form>

  </div>

</body>
</html>
