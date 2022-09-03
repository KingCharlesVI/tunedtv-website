<?php 
    session_start();
    include_once 'header.php';
  
    if(!$_SESSION['id']){
        header('location:login.php');
    }
?>
<!DOCTYPE html>
<html>
<head>
  <meta charset="UTF-8">
    <link rel="stylesheet" href="style.css">
    <title>TunedTV</title>
    <link rel="icon" type="image/x-icon" href="/images/favicon.ico">
  </head>
<body>
<h1>Welcome <?php echo ucfirst($_SESSION['first_name']); ?></h1>
<a href="logout.php?logout=true">Logout</a>
</body>
</html>