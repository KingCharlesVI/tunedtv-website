<?php
  include_once '../header.php'
?>
<!DOCTYPE html>
<html>
<head>
  <meta charset="UTF-8">
    <link rel="stylesheet" href="../style.css">
    <title>TunedTV</title>
    <link rel="icon" type="image/x-icon" href="images/favicon.ico">
  </head>
<style>
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
  width: 25%;
}

/* Extra styles for the submit button */
.submitbtn {
  width: 25%;
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
  <div>
    <section class="signup-form">
    <h2>Login</h2>
    <form action="../includes/login.inc.php" method="post">
        <input type="text" name="uid" placeholder="Username">
        <br>
        <input type="password" name="pwd" placeholder="Password">
        <br>
        <button type="button" class="cancelbtn">Cancel</button>
        <button type="submit" class="submitbtn">Login</button>
    </form>
</div>

<?php
  if (isset($_GET["error"])) {
    if ($_GET["error"] == "emptyInput") {
      echo "<p>Fill in all fields</p>";
    }
    else if ($_GET["error"] == "wronglogin") {
      echo "<p>Incorrect login details</p>";
    }
  }
?>
</body>
</section>
</html>