<?php
session_start();
//menghubungkan ke DB
$conn = mysqli_connect("localhost","root","12345", "dams2.0");

if($conn){
    echo 'terhubung';
}

// stok laptop
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


// laptop masuk

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

};

//laptop keluar

if(isset($_POST['laptopkeluar'])){

   
    $ceksn = mysqli_query($conn, "select * from stock");
    while ($sn = mysqli_fetch_array($ceksn)){
        if($sn == null){
            
            echo "<script>
                alert('visit deleted successfully');
                window.location ="keluar.php";
                </script>";
                
        }  
        $serial_number = $_POST['serial_number'];
        $tujuan = $_POST['tujuan'];
        $addkeluar = mysqli_query($conn, "insert into keluar(serial_number,tujuan) values ('$serial_number','$tujuan')");
        $hapusstock = mysqli_query($conn, "delete from stock where serial_number ='$serial_number'");
        if($addkeluar && $hapusstock){
            header('location:keluar.php');
        } else {
            
            echo "<script>
                alert('visit deleted successfully');
                window.location.href='keluar.php';
                </script>";
        }
        
    }

    $cekrusak = mysqli_query($conn, "select * from rusak");
    while ($rs = mysqli_fetch_array($cekrusak)){
        if($rs == null){
            echo 'tidak ada data';
            
        }  
        $serial_number = $_POST['serial_number'];
        $tujuan = $_POST['tujuan'];
        $keluarlepi = mysqli_query($conn, "insert into keluar(serial_number,tujuan) values ('$serial_number','$tujuan')");
        $lepirusak = mysqli_query($conn, "delete from rusak where serial_number ='$serial_number'");
        if($keluarlepi && $lepirusak){
            header('location:keluar.php');
        } else {
            echo 'gagal';
            header('location:keluar.php');
        }
        
    }
   
    
    
};

if(isset($_POST['laptoprusak'])){
    $serial_number = $_POST['serial_number'];
    $brand = $_POST['brand'];
    $model = $_POST['model'];
    $spesifikasi = $_POST['spesifikasi'];
    $keterangan = $_POST['keterangan'];
    $tanggal = $po = $_POST['tanggal'];



    $addmasuk = mysqli_query($conn, "insert into masuk(serial_number, brand, keterangan) values ('$serial_number', '$brand','$keterangan')");
    $stokrusak = mysqli_query($conn, "insert into rusak(serial_number, brand, model, spesifikasi, keterangan, tanggal) values ('$serial_number', '$brand','$model', '$spesifikasi', '$keterangan', '$tanggal')");
    if($addmasuk && $stokrusak){
        header('location:rusak.php');
    } else {
        echo 'gagal';
        header('location:rusak.php');
    }

};

if(isset($_POST['updatelaptop'])){
    $sn = $_POST['sn'];
    $serial_number = $_POST['serial_number'];
    $brand = $_POST['brand'];
    $model = $_POST['model'];
    $spesifikasi = $_POST['spesifikasi'];

    $update = mysqli_query($conn, "update stock set serial_number='$serial_number', brand = '$brand', model='$model', spesifikasi ='$spesifikasi'");
    if($update){
        header('location:index.php');

    } else {
        echo 'gagal';
        header('location:index.php');
    }

};


//menghapus stok

if(isset($_POST['hapuslaptop'])){
    $serial_number = $_POST['serial_number'];
    
    $delete = mysqli_query($conn, "delete from stock");
    if($delete){
        header('location:index.php');
    } else{
        echo 'error';
        header('location:index.php');
    }
}

    



?>