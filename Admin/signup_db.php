<?php
include '_dbconnect.php'; 
?>

<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>SignUp</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-KK94CHFLLe+nY2dmCWGMq91rCGa5gtU4mk92HdvYe+M/SXH301p5ILy+dN9+nJOZ" crossorigin="anonymous">
  </head>
  <body>
    <?php require '_nav.php'?>
    <div class="alert alert-success alert-dismissible fade show" role="alert">
  <strong>Success</strong> Your account is created now you can login  !!
  <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
</div>
  <div class="container my-4">
    <h1 class=text-center>Signup to our website</h1>
  </div>
  <form action="signup.php" method="post">
  <div class="form-group col-md-6" >
    <label for="username" class="form-label">username</label>
    <input type="email" class="form-control" id="username" name="username" aria-describedby="emailHelp">
    
  </div>
  <div class="form-group col-md-6" >
    <label for="password" class="form-label">Password</label>
    <input type="password" class="form-control" id="password" name="password">
  </div>
  <div class="form-group col-md-6">
    <label for="cpassword" class="form-label">Confirm Password</label>
    <input type="password" class="form-control" id="cpassword" name="cpassword">
    <div id="emailHelp" class="form-text">Make sure to type same password</div>
  </div>
  
  <button type="submit" class="btn btn-primary ">SignUp</button>
</form>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ENjdO4Dr2bkBIFxQpeoTz1HIcje39Wm4jDKdf19U8gI4ddQ3GYNS7NTKfAdVQSZe" crossorigin="anonymous"></script>
  </body>
</html> 