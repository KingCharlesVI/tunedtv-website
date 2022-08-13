<!DOCTYPE html>
<html>
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
    /* Full-width input fields */
  input[type=text], input[type=password] {
  width: 50%;
  padding: 20px;
  margin: 5px 0 22px 0;
  display: inline-block;
  border: none;
  background: #f1f1f1;
}

input[type=text]:focus, input[type=password]:focus {
  background-color: #ddd;
  outline: none;
}

/* Set a style for all buttons */
button {
  background-color: #04AA6D;
  color: white;
  padding: 14px 20px;
  margin: 8px 0;
  border: none;
  cursor: pointer;
  width: 50%;
  opacity: 0.9;
}

button:hover {
  opacity:1;
}

/* Extra styles for the cancel button */
.cancelbtn {
  padding: 14px 20px;
  background-color: #f44336;
}

/* Float cancel and signup buttons and add an equal width */
.cancelbtn, .submitbtn {
  float: left;
  width: 50%;
}

/* Add padding to container elements */
.container {
  padding: 16px;
}

/* Clear floats */
.clearfix::after {
  content: "";
  clear: both;
  display: table;
}
</style>
</head>
<body>
<div class="topnav">
    <img class="logo" src="../images/condensed-tunedtv.jpg">
    <a href="../index.html">Home</a>
    <a href="../html/leagues.html">Leagues</a>
    <a href="../html/premium.html">Premium</a>
    <a href="../html/about.html">About</a>
    <a href="../exclusive/exclusive.html">Exclusive Content</a>
    <a class="active" href="#signup">Sign Up</a>
    <a href="login.php">Login</a>
  </div>
    <section class="signup-form">
    <h2>Sign Up</h2>
    <form action="../included/signup.inc.php" method="post">
        <input type="text" name="name" placeholder="Username">
        <br>
        <input type="text" name="email" placeholder="Email">
        <br>
        <input type="password" name="pwd" placeholder="Password">
        <br>
        <input type="password" name="pwdrepeat" placeholder="Confirm Password">
        <br>
        <button type="button" class="cancelbtn">Cancel</button>
        <button type="submit" class="submitbtn">Sign Up</button>
    </form>
</body>
</section>
</html>