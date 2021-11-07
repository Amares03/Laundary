<?php
    include 'dbh.inc.php';

    $name = $_POST['name'];
    $phone = $_POST['phone'];
    $aynet = $_POST['type'];
    $bezat = $_POST['bezat'];
    $date = $_POST['date'];
    $now = date('Y-m-d');


    $connect = new Dbh();
    $conn = $connect->connect();

    $sql = "INSERT INTO user_info (id, name, phone, aynet, bzat, date, return_date) VALUES (NULL, '$name', '$phone', '$aynet', '$bezat', '$now', '$date');";
    mysqli_query($conn, $sql);

    header("Location: ../home.php?insert=Done");

?>