<?php
session_start();
//menghubungkan ke DB
$conn = mysqli_connect("localhost","root","12345", "dams2.0");

if($conn){
    echo 'terhubung';
}


if(isset($_POST['tambahkanlaptop'])){
    $serial_number = $_POST['serialnumber'];
    $brand = $_POST['brand'];
    $model = $_POST['model'];
    $serial_number = $_POST['serialnumber']
}



?>