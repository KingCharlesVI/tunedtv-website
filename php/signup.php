<?php
  include_once '../header.php'
?>
<style>
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
  </div>

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