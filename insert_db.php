<?php

require './connection/server.php';


$name = $_POST['name'];
$des = $_POST['des'];
$price = $_POST['price'];
$url = $_POST['url'];


if($name != "" && $des != ""  && $price != "" ) {
    $sql =  "INSERT INTO cars (`name`,`description`,`price`,`img_url`) VALUE ('$name', '$des', '$price', '$url')";
    $resultInsert = mysqli_query($conn, $sql);

//บันทึกสำเร็จแจ้งเตือนและกระโดดกลับไปหน้าฟอร์ม   
if ($resultInsert) 
{
    header("Location: index.php");
}
}
?>
