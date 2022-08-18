<?php
  session_start();
?>
<!DOCTYPE html>
<html>
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
</body>
</html>