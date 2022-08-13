<!DOCTYPE html>
<html>

<div class="topnav">
    <img class="logo" src="../images/condensed-tunedtv.jpg">
    <a class="active" href="#home">Home</a>
    <a href="html/leagues.html">Leagues</a>
    <a href="html/premium.html">Premium</a>
    <a href="html/about.html">About</a>
    <a href="exclusive/exclusive.html">Exclusive Content</a>
    <a href="php/signup.php">Sign Up</a>
  </div>
<head>
  <meta charset="UTF-8">
  <link rel="stylesheet" href="../css/style.css">
    <title>TunedTV</title>
  <link rel="icon" type="image/x-icon" href="../images/favicon.ico">
</head>
<body>
    <section class="signup-form">
    <h2>Sign Up</h2>
    <form action="signup.inc.php" method="post">
        <input type="text" name="name" placeholder="Username">
        <input type="text" name="email" placeholder="Email">
        <input type="password" name="pwd" placeholder="Password">
        <input type="password" name="pwdrepeat" placeholder="Confirm Password">
        <button type="submit" name="submit">Sign Up</button>
    </form>
</body>
</section>
</html>