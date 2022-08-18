<?php

$serverName = "127.0.0.1";
$dBUsername = "u297474313_Admin";
$dBPassword = "p_]8k?HEw&U/z$,";
$dBName = "u297474313_TunedTv";

$conn = mysqli_connect($serverName, $dBUsername, $dBPassword, $dBName);

if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
}