<?php

function emptyInputSignup($name, $email, $pwd, $pwdRepeat) {
    $result;
    if (empty($name) || empty($email) || empty($pwd) || empty($pwdRepeat)) {
        $result = true;
    }
    else {
        $result = false;  
    }
    return $result;
}

function invalidUid($name) {
    $result;
    if (!preg_match("/^[a-zA-Z0-9]*$/", $name)) {
        $result = true;
    }
    else {
        $result = false;  
    }
    return $result;
}

function invalidEmail($email) {
    $result;
    if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
        $result = true;
    }
    else {
        $result = false;  
    }
    return $result;
}

function pwdMatch($pwd, $pwdRepeat) {
    $result;
    if ($pwd !== $pwdRepeat) {
        $result = true;
    }
    else {
        $result = false;  
    }
    return $result;
}

function uidExists($conn, $name, $email) {
    $sql = "SELECT * FROM users WHERE uisersUID = ?;";
    $stmt = mysqli_stmt_init($conn);
    if (!mysqli_stmt_prepare($stmt, $sql)) {
        header("location: ../php/signup.php?error=stmtfailed");
        exit();
    }

    mysqli_stmt_bind_param($stmt, "ss", $name, $email);
    mysqli_stmt_execute($stmt);

    $resultData = mysqli_stmt_get_result($stmt);

    if($row = mysqli_fetch_assoc($resultData)) {
        return $row;
    }
    else {
        $result = false;
        return $result;
    }

    mysqli_stmt_close($stmt);
}

function createUser($conn, $name, $email, $pwd) {
    var_dump($conn);exit;
    $sql = "INSERT INTO users (usersEmail, usersUid, usersPwd) VALUES (?, ?, ?);";
    $stmt = mysqli_stmt_init($conn);
    if (!mysqli_stmt_prepare($stmt, $sql)) {
        header("location: ../php/signup.php?error=stmtfailed");
        exit();
    }

    $hashedPwd = password_hash($pwd, PASSWORD_DEFAULT);

    mysqli_stmt_bind_param($stmt, "sss", $name, $email, $hashedPwd);
    mysqli_stmt_execute($stmt);
    mysqli_stmt_close($stmt);
    header("location: ../index.html?error=none");
    exit();

}

function emptyInputLogin($name, $pwd) {
    $result;
    if (empty($name) || empty($pwd)) {
        $result = true;
    }
    else {
        $result = false;  
    }
    return $result;
}

function loginUser($conn, $name, $pwd) {
    $uidExists = uidExists($conn, $name);

    if ($uidExists === false) {
        header("location: ../php/login.php?error=wronglogin");
        exit();
    }

    $pwdHashed = $uidExists["usersPwd"];
    $checkPwd = password_verify($pwd, $pwdHashed);

    if($checkPwd === false) {
        header("location: ../index.html?error=wronglogin");
        exit();
    }
    else if ($checkPwd === true) {
      session_start();
      $_SESSION["userid"] =  $uidExists["usersId"];
      $_SESSION["useruid"] =  $uidExists["usersUid"];
      header("location: ../index.html");
      exit();
    }
}
?>