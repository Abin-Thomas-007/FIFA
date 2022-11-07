<?php

@include 'Connect_db.php';

session_start();

if (!isset($_SESSION['admin_name'])) {
   header('location:http://localhost/FIFA23/Login.php');
}

?>

<!DOCTYPE html>
<html lang="en">

<head>
   <meta charset="UTF-8">
   <meta http-equiv="X-UA-Compatible" content="IE=edge">
   <meta name="viewport" content="width=device-width, initial-scale=1.0">
   <title>admin page</title>

   <!-- custom css file link  -->
   <link rel="stylesheet" href="Style.css">
</head>

<body>

   <div class="container">

      <div class="content">
         <h3>hi, <span>admin</span></h3>
         <h1>welcome <span><?php echo $_SESSION['admin_name'] ?></span></h1>
         <p>this is an admin page</p>
         <a href="http://localhost/FIFA23/Login.php" class="btn">Login</a>
         <a href="http://localhost/FIFA23/Register.php" class="btn">Register</a>
         <a href="http://localhost/FIFA23/Logout.php" class="btn">Logout</a>
      </div>

   </div>

</body>

</html>