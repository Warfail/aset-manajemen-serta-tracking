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
    $serial_number = $_POST['serial_number'];
    $brand = $_POST['brand'];
    $model = $_POST['model'];
    $spesifikasi = $_POST['spesifikasi'];
    $keterangan = $_POST['keterangan'];



    $addmasuk = mysqli_query($conn, "insert into masuk(serial_number, brand, keterangan) values ('$serial_number', '$brand','$keterangan')");
    $updatestockmasuk = mysqli_query($conn, "insert into stock(serial_number, brand, model, spesifikasi) values ('$serial_number', '$brand','$model', '$spesifikasi')");
    if($addmasuk && $updatestockmasuk){
        header('location:masuk.php');
    } else {
        echo 'gagal';
        header('location:masuk.php');
    }

}



if(isset($_POST['laptopkeluar'])){
    $serial_number = $_POST['serial_number'];
    $brand = $_POST['brand'];
    $model = $_POST['model'];
    $spesifikasi = $_POST['spesifikasi'];
    $keterangan = $_POST['keterangan'];



    $addkeluar = mysqli_query($conn, "insert into masuk(serial_number, brand, keterangan) values ('$serial_number', '$brand','$keterangan')");
    $hapusstock = mysqli_query($conn, "delete from stock where serial_number = $serial_N(serial_number, brand, model, spesifikasi) values ('$serial_number', '$brand','$model', '$spesifikasi')");
    if($addmasuk && $updatestockmasuk){
        header('location:masuk.php');
    } else {
        echo 'gagal';
        header('location:masuk.php');
    }

}


?>