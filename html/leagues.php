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
    <link rel="icon" type="image/x-icon" href="images/favicon.ico">
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
<b><p>Only the league owner or authorised league admins may submit their league to TunedTV. This should NOT UNDER ANY CIRCUMSTANCES be done by anyone else.</p></b>
<br>
<form class="contact-form" action="../includes/contactform.inc.php" method="post">
        <input type="text" name="name" placeholder="Name">
        <br>
        <input type="text" name="email" placeholder="Email">
        <br>
        <input type="text" name="leaguename" placeholder="League Name">
        <br>
        <select id="region" name="region">
          <option value="">--Select a region--</option>
          <option value="namerica">North America</option>
          <option value="samerica">South America</option>
          <option value="europe">Europe</option>
          <option value="africa">Africa</option>
          <option value="asia">Asia</option>
          <option value="oceania">Oceania</option>
        <br>
        <textarea name="description" placeholder="Tell us more about your league"></textarea>
        <br>
        <button type="button" class="cancelbtn">Cancel</button>
        <button type="submit" class="submitbtn">Submit League</button>
    </form>
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