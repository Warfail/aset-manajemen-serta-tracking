<?php
session_start();
//menghubungkan ke DB
$conn = mysqli_connect("localhost","root","12345", "dams2.0");

if($conn){
    echo 'terhubung';
}


if(isset($_POST['ceksn'])) {
    $ambilsn = mysqli_query($conn, "select * from keluar where serial_number = '$serial_number'");
    $sn = mysqli_query($conn, "select * from stock where serial_number = '$serial_number'");
        if ($sn === $ceksn) {
            echo '<script>alert("data tidak terdapat") </script>';
        } else {
        echo '<script>alert("data terdapat") </script>';
    }
    
}

?