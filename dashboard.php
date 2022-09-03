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
<br>
<h1>This is your personal dashboard page</h1>
<br>
<br>
<br>
<br>
<br>
<br>
<br>
<br>
<br>
<br>
<br>
<br>
<br>
<br>
<footer>
<p><b>TunedTV</b><br><b>Developed by:</b> KingCharlesVI, Kosmik247<br><b>Version: </b>v0.25</p>
<a href="https://discord.gg/UpweTajymD" target="_blank"><img src="/images/discord.png" style="width:42px;height:42px"></a>
<a href="https://github.com/KingCharlesVI/tunedtv-website" target="_blank"><img src="/images/github.png" style="width:42px;height:42px"></a>
</footer>
</body>
</html>