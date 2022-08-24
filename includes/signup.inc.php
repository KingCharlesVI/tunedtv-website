<?php
var_dump("test"); exit;
error_reporting(E_ALL); 
ini_set('ignore_repeated_errors', TRUE); 
ini_set('display_errors', TRUE);
ini_set('log_errors', TRUE);
if (isset($_POST["submit"])) {

    $name = $_POST["uid"];
    $email = $_POST["email"];
    $pwd = $_POST["pwd"];
    $pwdRepeat = $_POST["pwdrepeat"];

    require_once 'dbh.inc.php';
    require_once 'functions.inc.php';

    if (emptyInputSignup($name, $email, $pwd, $pwdRepeat) !== false) {
        header("location: ../php/signup.php?error=emptyinput");
        exit();
    }
    if (invalidUid($name) !== false) {
        header("location: ../php/signup.php?error=invaliduid");
        exit();
    }
    if (invalidEmail($email) !== false) {
        header("location: ../php/signup.php?error=invalidemail");
        exit();
    }
    if (pwdMatch($pwd, $pwdRepeat) !== false) {
        header("location: ../php/signup.php?error=passwordsdontmatch");
        exit();
    }
    if (uidExists($conn, $name, $email) !== false) {
        header("location: ../php/signup.php?error=usernametaken");
        exit();
    }

    createUser($conn, $name, $email, $pwd);

}
else {
        header("location: ../php/signup.php");
        exit();
}
