<?php
  session_start();
  include_once '../header.php';
  if(!isset($_SESSION['id'])) // The exact conditional depends on your login-system implementation
  {
    header('Location: /login.php?notloggedin'); // Instructs the visitor's browser to redirect
    exit(); // <-- What you want. Prevents further code from being executed, works as a security measure.
  }
?>
<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <link rel="stylesheet" href="../css/about.css">
    <title>TunedTV</title>
  <link rel="icon" type="image/x-icon" href="../images/favicon.ico">
</head>
<body>
    <center><h1>Exclusive Content</h1></center>
    <center><h2>Created by TunedTV</h2></center>
    <center><p>Here you can find exclusive, premium-only, on-demand content such as trailers, season reviews, highlights and features. Enjoy!</p></center>
<br>
<h2>Highlights</h2>
<br>
<div class="row">
  <div class="column">
    <a href="#exclusive">
    <div class="card">
      <h3>[Coming Soon]</h3>
      <p>Content not yet available</p>
    </div>
    </a>
  </div>
  <div class="column">
    <a href="#exclusive">
    <div class="card">
      <h3>[Coming Soon]</h3>
      <p>Content not yet available</p>
    </div>
    </a>
  </div>
  <div class="column">
    <a href="#exclusive">
    <div class="card">
      <h3>[Coming Soon]</h3>
      <p>Content not yet available</p>
    </div>
    </a>
  </div>
  <div class="column">
    <a href="#exclusive">
    <div class="card">
      <h3>[Coming Soon]</h3>
      <p>Content not yet available</p>
    </div>
    </a>
  </div>
</div>
<br>
<div class="row">
  <div class="column">
    <a href="#exclusive">
    <div class="card">
      <h3>[Coming Soon]</h3>
      <p>Content not yet available</p>
    </div>
    </a>
  </div>
  <div class="column">
    <a href="#exclusive">
    <div class="card">
      <h3>[Coming Soon]</h3>
      <p>Content not yet available</p>
    </div>
    </a>
  </div>
  <div class="column">
    <a href="#exclusive">
    <div class="card">
      <h3>[Coming Soon]</h3>
      <p>Content not yet available</p>
    </div>
    </a>
  </div>
  <div class="column">
    <a href="#exclusive">
    <div class="card">
      <h3>[Coming Soon]</h3>
      <p>Content not yet available</p>
    </div>
    </a>
  </div>
</div>
<br>
<h2>Features</h2>
<br>
<div class="row">
  <div class="column">
    <a href="#exclusive">
    <div class="card">
      <h3>[Coming Soon]</h3>
      <p>Content not yet available</p>
    </div>
    </a>
  </div>
  <div class="column">
    <a href="#exclusive">
    <div class="card">
      <h3>[Coming Soon]</h3>
      <p>Content not yet available</p>
    </div>
    </a>
  </div>
  <div class="column">
    <a href="#exclusive">
    <div class="card">
      <h3>[Coming Soon]</h3>
      <p>Content not yet available</p>
    </div>
    </a>
  </div>
  <div class="column">
    <a href="#exclusive">
    <div class="card">
      <h3>[Coming Soon]</h3>
      <p>Content not yet available</p>
    </div>
    </a>
  </div>
</div>
<br>
<div class="row">
  <div class="column">
    <a href="#exclusive">
    <div class="card">
      <h3>[Coming Soon]</h3>
      <p>Content not yet available</p>
    </div>
    </a>
  </div>
  <div class="column">
    <a href="#exclusive">
    <div class="card">
      <h3>[Coming Soon]</h3>
      <p>Content not yet available</p>
    </div>
    </a>
  </div>
  <div class="column">
    <a href="#exclusive">
    <div class="card">
      <h3>[Coming Soon]</h3>
      <p>Content not yet available</p>
    </div>
    </a>
  </div>
  <div class="column">
    <a href="#exclusive">
    <div class="card">
      <h3>[Coming Soon]</h3>
      <p>Content not yet available</p>
    </div>
    </a>
  </div>
</div>
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
  <p><b>TunedTV</b><br><b>Developed by:</b> KingCharlesVI, Kosmik247, Kip<br><b>Version: </b>v0.25</p>
  <a href="https://discord.gg/UpweTajymD" target="_blank"><img src="/images/discord.png" style="width:42px;height:42px"></a>
  <a href="https://github.com/KingCharlesVI/tunedtv-website" target="_blank"><img src="/images/github.png" style="width:42px;height:42px"></a>
  </footer>
</body>
</html>