<?php
  session_start();
?>
<?php
  include_once 'header.php'
?>
<!DOCTYPE html>
<html>
<head>
  <meta charset="UTF-8">
    <link rel="stylesheet" href="style.css">
    <title>TunedTV</title>
  </head>
<style>
  h1 {text-align: center}
  body {
    background-image: url(https://i.imgur.com/5h6oHDc.jpg);
    background-repeat: no-repeat;
    background-attachment: fixed;
  }
</style>
<body>
<br>
<h1><u>TunedTV</u></h1>
<center><h2><u>Streaming the action</u></h2></center>
<br>
<div class="textarea">
<h2>Upcoming Races</h2>
<br>
<div class="row">
  <div class="column">
    <a href="html/lvf1.php">
    <div class="card">
      <h3>LVF1 F1 2021</h3>
      <p>USA Grand Prix</p>
    </div>
    </a>
  </div>
</div>
<br>
<h2>Replays</h2>
<br>
<div class="row">
  <div class="column">
    <a href="#Home">
    <div class="card">
      <h3>Replays will appear here</h3>
      <p>NOT AVAILABLE YET</p>
    </div>
    </a>
  </div>
</div>
<br>
<h2>Newsfeed</h2>
<br>
<div class="row">
  <div class="column">
  <a href="html/devblog.php">
      <div class="card">
        <h3>Devlog #3</h3>
        <p>Version 0.4 released</p>
      </div>
      </a>
    </div>
  <div class="column">
  <a href="html/devblog.php">
    <div class="card">
      <h3>Devlog #2</h3>
      <p>Version 0.25 released</p>
    </div>
    </a>
  </div>
  <div class="column">
    <a href="html/devblog.php">
    <div class="card">
      <h3>Devlog #1</h3>
      <p>Development Begins</p>
    </div>
    </a>
  </div>
</div>
<br>
</div>
<br>
<br>
<br>
<footer>
  <p><b>TunedTV</b><br><b>Developed by:</b> KingCharlesVI, Kosmik247, Kip<br><b>Version: </b>v0.4</p>
  <a href="https://discord.gg/UpweTajymD" target="_blank"><img src="/images/discord.png" style="width:42px;height:42px"></a>
  <a href="https://github.com/KingCharlesVI/tunedtv-website" target="_blank"><img src="/images/github.png" style="width:42px;height:42px"></a>
  </footer>
</body>
</html>