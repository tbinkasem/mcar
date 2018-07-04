<?php

    $servername = "localhost";
    $username = "root";
    $password = "12345678";
    $database = "mcar";

    $conn = mysqli_connect($servername, $username, $password, $database);

    if (!$conn) {
        die("ไม่สามารถเชื่อมต่อฐานข้อมูลได้ : " . mysqli_connect_error());
    }
    // echo "การเชื่อมต่อฐานข้อมูลสำเร็จ";

?>