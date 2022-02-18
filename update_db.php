<?php

require "./connection/server.php";

if (isset($_POST["update"])) {

    $id = mysqli_real_escape_string($conn, $_POST["id"]);
    $name = mysqli_real_escape_string($conn, $_POST["name"]);
    $price = mysqli_real_escape_string($conn, $_POST["price"]);
    $img = mysqli_real_escape_string($conn, $_POST["img"]);
    $des = mysqli_real_escape_string($conn, $_POST["des"]);

    $sql = "UPDATE cars SET `name`='$name', `price`='$price', `img_url`='$img', `description`='$des' WHERE ID='$id' ";
    $result = mysqli_query($conn, $sql) or die("Error in query: $sql " . mysqli_error());
    if ($result) {
        echo "<script>";
        echo "alert('Update success')";
        echo "</script>";
        echo "<script>";
        echo "window.location.replace('index.php')";
        echo "</script>";
    }
}
