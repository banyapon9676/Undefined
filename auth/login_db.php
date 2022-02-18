<?php

session_start();
include("../connection/server.php");

if (isset($_POST['submit'])) {
    $email = mysqli_real_escape_string($conn, $_POST['email']);
    $password = mysqli_real_escape_string($conn, $_POST['password']);

    $new_password = md5($password);
    $query = "SELECT * FROM users WHERE email = '$email' AND password = '$new_password'";
    $result = mysqli_query($conn, $query);

    if (mysqli_num_rows($result) == 1) {
        $_SESSION['login_success'] = "Logged in success.";
        header("location: ../index.php");
    } else {
        $_SESSION['login_error'] = "Wrong email or password try again.";
        header("location: login_form.php");
    }
}
 