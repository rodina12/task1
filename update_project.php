<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css"> 
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
    <title>update</title>
</head>


<body>
<?php
 
 $servername='localhost';
 $username='root';
 $pass='root';
 $dbname='task';
 $projectName;
$conn = new mysqli($servername, $username, $pass, $dbname);

    $id = isset($_GET['id']) ? $_GET['id'] : '';
    
    
    $sqll= "SELECT * from `project` where projectID ='$id'";
    $rs = mysqli_query($conn,$sqll);
    $row=mysqli_fetch_assoc($rs);
    $projectName=$row['projectName'];
    if(isset($_POST['update'])){
    $sql="UPDATE `project` SET projectName='$_POST[projectName]' where projectID ='$_POST[id]'";
    $rss = mysqli_query($conn,$sql);
    header("Location:projects.php");
}
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
  <h2>UPDATE </h2>
    <form method="POST">
    <div class="form-group">
        <form onsubmit="myfunction()">
        <label for="first">id</label>
        <input type="num" class="form-control" id="id" placeholder=" id" name="id" value="<?php echo "$id";?>">
      </div>
    <div class="form-group">
    
        <label for="projectName"> project</label>
        <input type="text" class="form-control"  id="projectName" placeholder=" project" name="projectName" value="<?php echo "$projectName";?>">
      </div>
      <button type="submit" name="update" class="btn btn-primary"  >update</button>
      
    </form>

  </div>
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
