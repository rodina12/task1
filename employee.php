<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css"> 
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
    <title>employee</title>
</head>
<body>

  <div class="container">
  <h2>upload</h2>
    <div class="form-group">
        <form onsubmit="myfunction()">
        <label for="details">details</label>
       <input type="text" class="form-control" id="details" placeholder="Enter details" name="details">
      </div>
      <div class="form-group">
  <form action="upload_file.php" method="post" enctype="multipart/form-data">
    <input type="file" name="file"/>
    <button type="submit" name="upload">upload</button>
</div>
</div>
</form>
</body>
</html>