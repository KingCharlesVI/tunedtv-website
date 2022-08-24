<?php
  session_start();
?>
<!DOCTYPE html>
<html>
  <head>
    <link rel="shortcut icon" type="image/ico" href="/images/favicon.ico"/>
  </head>
  <body>
  <div class="topnav">
    <img class="logo" src="/images/condensed-tunedtv.jpg">
    <a href="/index.php">Home</a>
    <a href="/html/leagues.php">Leagues</a>
    <a href="/html/premium.php">Premium</a>
    <a href="/html/about.php">About</a>
    <a href="/exclusive/exclusive.php">Exclusive Content</a>
    <?php
      if (isset($_SESSION["useruid"])) {
        echo "<a href='/php/profile.php'>Profile</a>";
        echo "<a href='/php/logout.inc.php'>Logout</a>";
      }
      else {
        echo "<a href='/php/signup.php'>Sign Up</a>";
        echo "<a href='/php/login.php'>Login</a>";
      } ?>
  </div>
<style>

  footer {
    text-align: left;
    padding: 3px;
    background-color: rgb(0, 0, 0);
    color: white;
  }

</style>
</body>
<footer>
  <p><b>TunedTV</b><br><b>Developed by:</b> KingCharlesVI, Kosmik247<br><b>Version: </b>v0.2</p>
  <div class="discordlogo">
    <img src="/images/discord.png" style="width:42px;height:42px">
    </div>
  <div class="githublogo">
    <img src="/images/github.png" style="width:42px;height:42px">
    </div>
  </footer>
</html>