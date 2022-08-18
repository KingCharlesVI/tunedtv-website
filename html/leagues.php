<?php
  session_start();
?>
<!DOCTYPE html>
<html>
    <div class="topnav">
      <img class="logo" src="../images/condensed-tunedtv.jpg">  
      <a href="../index.php">Home</a>
      <a class="active" href="#leagues">Leagues</a>
      <a href="premium.php">Premium</a>
      <a href="about.php">About</a>
      <a href="../exclusive/exclusive.php">Exclusive Content</a>
    </div>
<head>
    <meta charset="UTF-8">
    <link rel="stylesheet" href="../css/leagues.css">
    <title>TunedTV</title>
  <link rel="icon" type="image/x-icon" href="../images/favicon.ico">
</head>
<style>
    h2 {text-align: center}
  </style>
<body>
<br>
<h2>Leagues</h2>
<center><h4>Click on a league's box to visit its page. From there you can view the live broadcast and more..</h4></center>
<br>
<style>
    h1 {text-align: center;}
    </style>
<div class="row">
  <a href="lvf1.php">
  <div class="column" style="background-color:#83ccc5;">
    <center><h2>LigavirtualF1</h2>
    <p>A Spanish-based league with F1 championships from many years, and more!</p></center>
  </div>
  </a>
  <div class="column" style="background-color:#aaa;">
    <center><h2>[Coming Soon]</h2>
    <p>We are working on adding more leagues</p></center>
  </div>
</div>

<div class="row">
  <div class="column" style="background-color:#aaa;">
    <center><h2>[Coming Soon]</h2>
      <p>We are working on adding more leagues</p></center>
    </div>
  <div class="column" style="background-color:#aaa;">
    <center><h2>[Coming Soon]</h2>
    <p>We are working on adding more leagues</p></center>
    </div>
</div>
<script>
// Get the elements with class="column"
var elements = document.getElementsByClassName("column");

// Grid View
function gridView() {
  for (i = 0; i < elements.length; i++) {
    elements[i].style.width = "50%";
  }
}
</script>
<br>
<h3>Contact us to submit your league to the Closed Beta testing</h3>
<p>
  <b><a href="https://discord.gg/UpweTajymD" target="_blank">Discord Server</a></b><br>
  <b>Email: </b>support@tunedtv.co.uk
</p>
<footer>
  <p><b>TunedTV</b><br><b>Developed by:</b> KingCharlesVI, Kosmik247<br><b>Version: </b>v0.2</p>
</footer>
</body>
</html>