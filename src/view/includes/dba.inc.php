<?php
    include 'dbh.inc.php';

    $name = $_POST['name'];
    $phone = $_POST['phone'];
    $aynet = $_POST['type'];
    $bezat = $_POST['bezat'];


    $connect = new Dbh();
    $conn = $connect->connect();

    $sql = "INSERT INTO user_info (id, name, phone, aynet, bzat, date, return_date) VALUES (NULL, '$name', '$phone', '$aynet', '$bezat', '2021-10-21 21:32:28', '2021-10-28 28:32:28');";
    mysqli_query($conn, $sql);

    header("Location: ../home.php?insert=Done");

?>