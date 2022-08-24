<?php

if (isset($_POST['submitbtn'])) {
    $subject = 'League Submitted';
    $mailfrom = $_POST['email'];
    
    $message .= $_POST['name'];
    $message .= $_POST['email'];
    $message .= $_POST['leaguename'];
    $message .= $_POST['region'];
    $message .= $_POST['description'];
    
    $mailTo = "support@tunedtv.co.uk";

    $headers = "From: $email";

    mail($mailTo, $subject, $message, $headers);
    header("Location: ../static/leaguesubmitsuccess.php");
}

if (isset($_POST['cancelbtn'])) {
    header('Location: ../html/leagues.php');
}
?>