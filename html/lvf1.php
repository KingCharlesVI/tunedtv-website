<?php
  session_start();
?>
<?php
  include_once '../header.php'
?>
<head>
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
<p>Livestream should start automatically. If it does not, please refresh the page.</p>
<center>
<video
    id="my-player"
    class="video-js"
    controls
    preload="auto"
    poster="/images/Logo-C.jpg"
    data-setup='{}'>
  <source src="https://10.88.1.61/embed/video"></source>
  <p class="vjs-no-js">
    To view this video please enable JavaScript, and consider upgrading to a
    web browser that
    <a href="https://videojs.com/html5-video-support/" target="_blank">
      supports HTML5 video
    </a>
  </p>
</video>
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