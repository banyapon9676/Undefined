<?php

$servername = "undefined-pre.local";
$username = "root";
$password = "";
$dbname = "undefined_test";

$conn = mysqli_connect($servername, $username, $password, $dbname);

if (!$conn) {
    die("Page 404" . mysqli_connect_error());
}
