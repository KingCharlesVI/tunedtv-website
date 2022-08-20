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
  input[type=text] {
  width: 50%;
  padding: 20px;
  margin: 5px 0 22px 0;
  display: inline-block;
  border: none;
  background: #f1f1f1;
}

input[type=text]:focus {
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
  width: 50%;
}

/* Extra styles for the submit button */
.submitbtn {
  width: 50%;
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
    <section class="signup-form">
    <h2>Reset your password</h2>
    <p>An e-mail will be sent to you with instructions on how to reset your password</p>
    <form action="../included/reset-request.inc.php" method="post">
        <input type="text" name="email" placeholder="Email">
        <br>
        <button type="button" class="cancelbtn">Cancel</button>
        <button type="submit" class="submitbtn" name="reset-request-submit">Request password change email</button>
    </form>
  </div>
  <a href="reset=password.php">Forgot your password?</a>
  <?php
    if (isset($_GET["reset"])) {
        if ($_GET["reset"] == "success") {
            echo '<p class="signupsuccess">Check your e-mail</p>';
        }
    }
  ?>

<?php
  if (isset($_GET["error"])) {
    if ($_GET["error"] == "emptyInput") {
      echo "<p>Fill in all fields</p>";
    }
    else if ($_GET["error"] == "invaliduid") {
      echo "<p>Choose a proper username</p>";
    }
    else if ($_GET["error"] == "invalidemail") {
      echo "<p>Choose a proper email</p>";
    }
    else if ($_GET["error"] == "passwordsdontmatch") {
      echo "<p>Passwords don't match</p>";
    }
    else if ($_GET["error"] == "stmtfailed") {
      echo "<p>Something went wrong, try again</p>";
    }
    else if ($_GET["error"] == "usernametaken") {
      echo "<p>Username already taken</p>";
    }
    else if ($_GET["error"] == "none") {
      echo "<p>You have signed up</p>";
    }

  }
?>
</body>
</section>
</html>