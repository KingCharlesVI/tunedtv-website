<?php
  session_start();
?>
<?php
  include_once '../header.php'
?>
<!DOCTYPE html>
<html>
<head>
  <meta charset="UTF-8">
    <link rel="stylesheet" href="../css/leagues.css">
    <title>TunedTV</title>
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
<h3>How to to submit your league to the Closed Beta testing</h3>
<b><p>Only the league owner or authorised league admins may submit their league to TunedTV. This should NOT UNDER ANY CIRCUMSTANCES be done by anyone else!</p></b>
<br>
<h4>Email us using the following guidelines:</h4>
<ul>
  <li><b>To: </b>support@tunedtv.co.uk</li>
  <li><b>Subject: </b>League submission</li>
  <li>League Name</li>
  <li>League Region (multiple allowed)</li>
  <li>About the league
    <ul>
      <li>What sim?</li>
      <li>What kind of series?</li>
      <li>Event format and timings?</li>
      <li>When?</li>
      <li>Do you have your own broadcaster(s)/commentator(s) or do you need us to do that?</li>
      <li>How many drivers expected per race?</li>
    </ul>
  </li>
</ul>
<h4>You will then receive a reply within 24 hours with further instructions.</h4>
<p>If you do not receive an email within 24 hours, please just be patient- we will get to you as soon as we can, we are probably just busy with IRL stuff.</p>
<br>
<br>
<footer>
  <p><b>TunedTV</b><br><b>Developed by:</b> KingCharlesVI, Kosmik247, Kip<br><b>Version: </b>v0.25</p>
  <a href="https://discord.gg/UpweTajymD" target="_blank"><img src="/images/discord.png" style="width:42px;height:42px"></a>
  <a href="https://github.com/KingCharlesVI/tunedtv-website" target="_blank"><img src="/images/github.png" style="width:42px;height:42px"></a>
  </footer>
</body>
</html>