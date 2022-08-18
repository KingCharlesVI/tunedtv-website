<?php
  session_start();
?>
<!DOCTYPE html>
<html>
    <div class="topnav">
      <img class="logo" src="../images/condensed-tunedtv.jpg">  
      <a href="../index.php">Home</a>
      <a href="leagues.php">Leagues</a>
      <a href="premium.php">Premium</a>
      <a href="about.php">About</a>
      <a href="../exclusive/exclusive.php">Exclusive Content</a>
    </div>
<head>
    <script src="https://unpkg.com/@mux/mux-player"></script>
    <meta charset="UTF-8">
  <link rel="stylesheet" href="../css/lvf1.css">
    <title>TunedTV</title>
  <link rel="icon" type="image/x-icon" href="../images/favicon.ico">
</head>
<style>
  h1 {text-align: center}
  h2 {text-align: center}
  h3 {text-align: center}
  p {text-align: center}
</style>
<body>
<br>
<h1><u>LigavirtualF1</u></h1>
<br>
<p>Livestream should start automatically. If it does not, please refresh the page.</p>
<center>
<iframe
    src="https://player.twitch.tv/?channel=ligavirtualf1&parent=tunedtv.co.uk&muted=true"
    height="720"
    width="1280"
    allowfullscreen>
</iframe>
</center>
<h2>Additional feeds:</h2>
<h3>Coming Soon</h3>
<br>
<h2>VODs for this league:</h2>
<a href="../vods/lvf1vods.html"><h3>LVF1 VODs</h3></a>
<br>
<h2>League Details:</h2>
<h3><b>Current Championship:</b><br><a href="https://ligavirtualf1.es/en/Championship/Standings" target="_blank">F1 2021</a>
  <br>
  <a href="https://discord.com/invite/bjV4BYwx" target="_blank">
    <img src="../images/discord.png" alt="Discord Icon" style="width:42px;height:42px;">
  <a href="https://ligavirtualf1.es/en/" target="_blank">
    <img src="../images/web_icon.png" alt="Web Icon" style="width:42px;height:42px;">
  </a>
</h3>
<br>
<footer>
  <p><b>TunedTV</b><br><b>Developed by:</b> KingCharlesVI, Kosmik247<br><b>Version: </b>v0.2</p>
</footer>
</body>
</html>