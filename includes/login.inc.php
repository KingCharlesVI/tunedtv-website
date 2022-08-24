<?php
var_dump("test"); exit;
error_reporting(E_ALL); 
ini_set('ignore_repeated_errors', TRUE); 
ini_set('display_errors', TRUE);
ini_set('log_errors', TRUE);
if (isset($_POST["submit"])) {

    $username = $_POST["uid"];
    $pwd = $_POST["pwd"]; 
    
    require_once 'dbh.inc.php';
    require_once 'functions.inc.php';

    if (emptyInputLogin($name, $pwd) !== false) {
        header("location: ../php/login.php?error=emptyinput");
        exit();
    }

    loginUser($conn, $name, $pwd);
}
else {
    header("location: ../php/login.php");
    exit();
}
?>