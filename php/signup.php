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
    <title>TunedTV</title>
  <link rel="icon" type="image/x-icon" href="../images/favicon.ico">
  <style>
    /* Site-wide font */
    *{
        font-family: Montserrat;
          }
      
          /* Logo formatting */
          .logo {
          vertical-align: top;
          width: 100px;
          height: 50px;
          float: left;
          }
      
          /* Add a black background color to the top navigation */
          .topnav {
          background-color: rgb(0, 0, 0);
          overflow: hidden;
          }
        
        /* Style the links inside the navigation bar */
        .topnav a {
          float: left;
          color: #f2f2f2;
          text-align: center;
          padding: 14px 16px;
          text-decoration: none;
          font-size: 17px;
        }
        
        /* Change the color of links on hover */
        .topnav a:hover {
          background-color: #ddd;
          color: black;
        }
        
        /* Add a color to the active/current link */
        .topnav a.active {
          background-color: #ffffff;
          color: rgb(0, 0, 0);
        }
</style>
</head>
<body>
<div class="topnav">
    <img class="logo" src="../images/condensed-tunedtv.jpg">
    <a class="active" href="#home">Home</a>
    <a href="html/leagues.html">Leagues</a>
    <a href="html/premium.html">Premium</a>
    <a href="html/about.html">About</a>
    <a href="exclusive/exclusive.html">Exclusive Content</a>
    <a href="php/signup.php">Sign Up</a>
  </div>
    <section class="signup-form">
    <h2>Sign Up</h2>
    <form action="signup.inc.php" method="post">
        <input type="text" name="name" placeholder="Username">
        <br>
        <input type="text" name="email" placeholder="Email">
        <br>
        <input type="password" name="pwd" placeholder="Password">
        <br>
        <input type="password" name="pwdrepeat" placeholder="Confirm Password">
        <br>
        <button type="submit" name="submit">Sign Up</button>
    </form>
</body>
</section>
</html>