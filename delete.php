<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css"> 
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
    <title>delete</title>
</head>
<body>
<div class="container">
       
        
          <div class="form-group">
            <form method="post">
            <label for="email">are you sure</label>
          
          </div>
          <button type="submit"  class="btn btn-primary" name="btnyes">yes</button>
          <button type="submit"  class="btn btn-primary" name="btnno">no</button>


          <?php
                 if(isset($_POST["btnno"])){
                    header("Location:admin.php");
                 }
                 if(isset($_POST["btnyes"])){
                    $id=$_GET["id"];
                    header("Location:dele.php?id=$id");
                 }

          ?>
         </form>
       </div>
</body>
</html>