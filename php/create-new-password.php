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
  width: 25%;
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
  width: 25%;
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

    <?php
        $selector = $_GET["selector"];
        $validator = $_GET["validator"];

        if (empty($selector) || empty($validator)) {
            echo "Could not validate your request";
        } else {
            if (ctype_xdigit($selector) !== false && ctype_xdigit($validator) !== false) {
                ?>

                <form action="/includes/reset-password.inc.php" method="post">
                    <input type="hidden" name="selector" value="<?php echo $selector; ?>">
                    <input type="hidden" name="validator" value="<?php echo $validator; ?>">
                    <input type="password" name="pwd" placeholder="Enter a new password">
                    <input type="password" name="pwd-repeat" placeholder="Repeat new password">
                    <button type="submit" name="reset-password-submit" class="submitbtn">Reset password</button>
                    <button type="button" class="cancelbtn">Cancel</button>
                </form>
                <?php
                

            }
        }
    ?>

</body>
</section>
</html>