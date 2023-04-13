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
      //if (isset($_SESSION)) {
        //echo "<a href='/dashboard.php'>Profile</a>";
        //echo "<a href='/logout.php'>Logout</a>";
      //}
      //else {
        //echo "<a href='https://buy.stripe.com/eVaaFXbtf4cR412aEE'>Sign Up</a>";
        //echo "<a href='/login.php'>Login</a>";
      //} ?>
  </div>
</body>
</html>