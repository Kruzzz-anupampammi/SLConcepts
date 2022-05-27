<?php

$serverName = "localhost";
$dBUsername = "root";
$dBPassword = "";
$dBName = "slconcepts";

$conn = mysqli_connect ($serverName, $dBUsername, $dBPassword, $dBName);

if (!$conn) {
    die("There's been an issue with the connection. Verify and Try again");
}