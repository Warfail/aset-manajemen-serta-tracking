<?php
session_start();
//menghubungkan ke DB
$conn = mysqli_connect("localhost","root","12345", "dams2.0");

if($conn){
    echo 'terhubung';
}


if(isset($_POST['tambahkanlaptop'])){
    $serial_number = $_POST['serial_number'];
    $brand = $_POST['brand'];
    $model = $_POST['model'];
    $spesifikasi = $_POST['spesifikasi'];

    $addtotable = mysqli_query($conn, "insert into stock(serial_number, brand, model, spesifikasi) values ('$serial_number', '$brand','$model', '$spesifikasi')");
    if($addtotable){
        header('location:index.php');
    } else {
        echo 'gagal';
        header('location:index.php');
    }


};

if(isset($_POST['laptopmasuk'])){
    

    $addmasuk = mysqli_query($conn, "insert into masuk(brand, serial_number, keterangan) values ('$brand','$serial_number','$keterangan')");
    if($addmasuk){
        header('location:inde.php');
    } else {
        echo 'gagal';
        header('location:masuk.php');
    }

}






?>