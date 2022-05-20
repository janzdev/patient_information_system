<?php

include 'connect.php';



if(isset($_POST['login'])){
   $username = $_POST['username'];
   $password = $_POST['password'];

  $sql="SELECT * FROM `admin` WHERE username ='$username' AND password ='$password'";
  $user = $conn->query($sql) or die($con->error);
  $row = $user->fetch_assoc();
  $total = $user->num_rows;

  if($total > 0){
     $_SESSION['UserLogin'] = $row['username'];
     header('Location:index.php');
  }else{
     echo "No user found";
  }
}


?>

<!DOCTYPE html>
<html lang="en">
<head>
   <meta charset="UTF-8">
   <meta http-equiv="X-UA-Compatible" content="IE=edge">
   <meta name="viewport" content="width=device-width, initial-scale=1.0">
   <title>PIS | Login</title>
   <link rel="stylesheet" href="./css/components.css">

</head>
<body>
   <section class="form-container">
      <div class="flex">
         
         <form action="" method="POST">
         <h2>Login Now</h2>
            <input type="text" name="username" id="username" placeholder="Enter username" class="box">
            <input type="password" name="password" id="password" placeholder="Enter password" class="box">
            <input type="submit" value="Login" name="login" class="btn">
         </form>
         </div>
   </section>

    
   
</body>
</html>