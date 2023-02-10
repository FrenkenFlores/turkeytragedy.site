<?php
$servername = "localhost";
$username = "volunteer";
$password = "Delta97!";
$db_name = "turkeytragedy";

$conn = mysqli_connect($servername, $username, $password, $db_name);
if (!$conn) {
    die("Connection failed" . mysqli_connect_error());
}
?>