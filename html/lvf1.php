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
    <link rel="stylesheet" href="/css/lvf1.css">
    <title>TunedTV</title>
    <link href="//vjs.zencdn.net/7.10.2/video-js.min.css" rel="stylesheet">
    <script src="//vjs.zencdn.net/7.10.2/video.min.js"></script>
  </head>
<style>
  h1 {text-align: center}
  h2 {text-align: center}
  h3 {text-align: center}
</style>
<body>
<br>
<h1><u>LigavirtualF1</u></h1>
<br>
<center><p>Livestream should start automatically. If it does not, please refresh the page.</p></center>
<iframe
    src="https://player.twitch.tv/?channel=tunedtv_official&parent=tunedtv.co.uk&muted=true"
    height="720"
    width="1280"
    allowfullscreen>
</iframe>
<div class="chat">
  <iframe src="https://www.twitch.tv/embed/tunedtv_official/chat?parent=tunedtv.co.uk"
          height="600"
          width="350">
  </iframe>
  </div>
<h2>Additional feeds:</h2>
<h3>Coming Soon</h3>
<br>
<h2>VODs for this league:</h2>
<a href="../vods/lvf1vods.php"><h3>LVF1 VODs</h3></a>
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
  <p><b>TunedTV</b><br><b>Developed by:</b> KingCharlesVI, Kosmik247, Kip<br><b>Version: </b>v0.4</p>
  <a href="https://discord.gg/UpweTajymD" target="_blank"><img src="/images/discord.png" style="width:42px;height:42px"></a>
  <a href="https://github.com/KingCharlesVI/tunedtv-website" target="_blank"><img src="/images/github.png" style="width:42px;height:42px"></a>
  </footer>
</body>
</html>