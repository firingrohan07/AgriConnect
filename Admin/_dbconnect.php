<?php
$username=$_POST['username'];
$password=$_POST['password'];
$result = FALSE;
$con=new mysqli("localhost","root","","users");
if($con->connect_error){
    die("Failed".$con->connect_error);
}
else{
    $stmt=$con->prepare("select * from users where username = ?");
    $stmt->bind_param('s',$username);
    $stmt->execute(); 
    $stmt_result=$stmt->get_result();
    if($stmt_result->num_rows > 0){
        $data=$stmt_result->fetch_assoc();
        if($data['password']===$password){
            header('Location: index.html');
        }else{
            echo "<div class='alert alert-danger' role='alert'>
            <h4 class='alert-heading'>Oops!</h4>
            <p>You have entered worng Email or Password !! Try again</p>
            <hr>
          </div>" ;
        }
    }else{
        echo "<div class='alert alert-danger' role='alert'>
            <h4 class='alert-heading'>Oops!</h4>
            <p>You have entered worng Email or Password !! Try again</p>
            <hr>
          </div>" ;
    }
}
?>
