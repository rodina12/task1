<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css"> 
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
    <title>login</title>
    <style>
        body{
            background-color: white;
        }
      
	
      
    </style>
</head>
<body>
 
<form  method="POST">
        <h2>LOGIN</h2>
        
          <div class="form-group">
            <form onsubmit="myfunction()">
            <label for="email">Email</label>
            <input type="email" class="form-control" id="email" placeholder="Enter email" name="email1" required>
          </div>
          <div class="form-group">
            <label for="pwd">Password</label>
            <input type="password" class="form-control" id="pwd" placeholder="Enter password" name="pswd" required>
          </div>
          <button type="submit"  class="btn btn-primary" name="btnlogin">LOGIN</button>
         
        </form>
      </div>
      
          <?php
          
 
 if(isset($_POST["btnlogin"])){
 
$servername='localhost';
$username='root';
$pass='root';
$dbname='task';

 
 $con = new mysqli($servername, $username, $pass, $dbname);
 /*take data from the form*/
if(isset($_POST['email1']))
{
   $email =$_POST['email1'];
   $password =$_POST['pswd'];
 /*select data from database*/
   $sql = "select * from users where email='".$email."'AND  password='".$password."'"; 
   $rs = mysqli_query($con,$sql);
   $num=mysqli_num_rows($rs);
   if($num>0){
    
         while( $row  = mysqli_fetch_array($rs))
         {
         /*if is_admin =true will go to admin page*/
           if($row["is_admin"] ==1 )
           
             header("Location:admin.php");
           
         
           /*if not will go to employee page*/
         elseif($row["is_admin"]==0)
           
           header("Location:employee.php");
         
       
 
       }
  }

  
   else

    echo"incorrect password";
   
} 
 }
 ?>

</body>
</html>