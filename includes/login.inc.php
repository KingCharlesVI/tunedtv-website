<?php

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