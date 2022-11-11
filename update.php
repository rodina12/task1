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
 $namee;
 $email;
 $phone;
 $password;
 $task_name;
$conn = new mysqli($servername, $username, $pass, $dbname);

    $id = isset($_GET['id']) ? $_GET['id'] : '';
    
    
    $sqll= "SELECT * from `users` where userID ='$id'";
    $rs = mysqli_query($conn,$sqll);
    $row=mysqli_fetch_assoc($rs);
    $namee=$row['name'];
    
    $email =$row['email'];
    $phone =$row['phone'];
    $password =$row['password'];
    $task_name =$row['task_name'];
    if(isset($_POST['update'])){
    $sql="UPDATE `users` SET name='$_POST[name]',email='$_POST[email]',phone='$_POST[phone]', password='$_POST[pwd]', task_name='$_POST[sub]' where userID ='$_POST[id]'";
    $rss = mysqli_query($conn,$sql);
    header("Location:admin.php");
}
?>
<div class="container">

<nav class="navbar navbar-default ">
       
    <nav class="navbar navbar-inverse navbar-fixed-top" >
    <ul class="nav navbar-nav">
        <li  ><a style="font-size: x-large;" href="#" onclick="hom()" ><i class="fa fa-home" aria-hidden="true" style='margin-right:16px' ></i>Home</a></li>
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
    
        <label for="first"> name</label>
        <input type="text" class="form-control"  id="first" placeholder=" name" name="name" value="<?php echo "$namee";?>">
      </div>
      <div class="form-group">
       
       <label for="email">Email</label>
       <input type="email" class="form-control" id="email" placeholder=" email" name="email" value="<?php echo "$email";?>" required>
     </div>
      <div class="form-group">
        <label for="phone">Mobile number</label>
        <input type="tel" class="form-control" id="phone" placeholder="phone" name="phone" value="<?php echo "$phone";?>" required>
      </div>
    
      <div class="form-group">
        <label for="pwd">Password</label>
        <input type="password" class="form-control" id="pwd" placeholder="password" name="pwd" value="<?php echo " $password";?>" required>
      </div>
      
      <div class="form-group">
        <label for="sub">task</label>
        <input type="text" class="form-control" id="sub" placeholder="project" name="sub" value="<?php echo " $task_name";?>" required>
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
     

     </script> 
</body>
</html>
