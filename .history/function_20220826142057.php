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
    $processor = $_POST['processor'];
    $ram = $_POST['ram'];
    $storage = $_POST['storage'];

    $addtotable = mysqli_query($conn, "insert into stock(serial_number, brand, model, processor, ram, storage) values ('$serial_number', '$brand','$model', '$processor', '$ram', '$storage' ) ");
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
    $processor = $_POST['processor'];
    $ram = $_POST['ram'];
    $storage = $_POST['storage'];
    $keterangan = $_POST['keterangan'];



    $addmasuk = mysqli_query($conn, "insert into masuk(serial_number, brand, keterangan) values ('$serial_number', '$brand','$keterangan')");
    $updatestockmasuk = mysqli_query($conn, "insert into stock(serial_number, brand, model, processor, ram, storage) values ('$serial_number', '$brand','$model', '$processor', '$ram', '$storage')");
    if($addmasuk && $updatestockmasuk ) {
        header('location:masuk.php');
    } else {
        
        echo 'gagal';
        header('location:masuk.php');
    }

};

//laptop keluar

if(isset($_POST['laptopkeluar'])) {
    $serial_number = $_GET['serial_number'];
    $tujuan = $_POST['tujuan'];
    
   
    $ceksn = mysqli_query($conn, "select serial_number from stock WHERE serial_number = '$serial_number'");
    while ($sn = mysqli_fetch_array($ceksn)){
        if($ceksn == null){
            header('location:keluar.php');
            echo '<script>alert("data tidak ada") </script>';
            
                
        }
        $sn = mysqli_query($conn, "delete from stock where serial_number ='$serial_number'");
        
        
        if($addkeluar && $sn ) {
            echo '<script>alert("data tidak ada") </script>';
            header('location:keluar.php');
            
        } else {
           
            echo 'data tidak ada';
            header('location:keluar.php');
           
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
        if($keluarlepi && $lepirusak ){
            header('location:keluar.php');
        } else {
            echo 'gagal';
            header('location:keluar.php');
        }
    }
   
    $addkeluar = mysqli_query($conn, "insert into keluar (serial_number, tujuan ) values ('$serial_number', '$tujuan') ");
    if($addkeluar && $ceksn) {
        header('location:keluar.php');
    } else {
        
        echo 'gagal';
        header('location:keluar.php');
    }

}
   
    
    


if(isset($_POST['laptoprusak'])){
    $serial_number = $_POST['serial_number'];
    $brand = $_POST['brand'];
    $model = $_POST['model'];
    $processor = $_POST['processor'];
    $ram = $_POST['ram'];
    $storage = $_POST['storage'];
    $keterangan = $_POST['keterangan'];
    // $tanggal = $_POST['tanggal'];



    $addmasuk = mysqli_query($conn, "insert into masuk(serial_number, brand, keterangan) values ('$serial_number', '$brand','$keterangan')");
    $stokrusak = mysqli_query($conn, "insert into rusak(serial_number, brand, model, processor, ram, storage) values ('$serial_number', '$brand','$model', '$processor', '$ram', '$storage' )");
    if($addmasuk && $stokrusak){
        
        header('location:rusak.php');
        
    } else {
       echo 'gagal';
        header('location:rusak.php');
        
    }

};

if(isset($_POST['updatelaptop'])){
    // $serial_number = $_POST['sn'];
    $serial_number = $_POST['serial_number'];
    $brand = $_POST['brand'];
    $model = $_POST['model'];
    $processor = $_POST['processor'];
    $ram = $_POST['ram'];
    $storage = $_POST['storage'];
    

    $update = mysqli_query($conn, "update stock set serial_number='$serial_number', brand = '$brand', model='$model', processor ='$processor', ram ='$ram', storage ='$storage' where serial_number = '$_POST[serial_number]'");
    if($update == $serial_number){
        echo '<script>alert("data terisi"); </script>';
        header('location:index.php');
        echo '<script>alert("data terisi"); </script>';

    } else {
        echo '<script>alert("data terisi"); </script>';
        echo 'gagal';
        header('location:index.php');
        echo '<script>alert("data terisi"); </script>';
    }

}




//menghapus stok

if(isset($_POST['hapuslaptop'])){
    $hapus = $_POST['hapuslaptop'];
    $serial_number = $_POST['serial_number'];
    $sn = $_POST['serial_number'];
    $delete = mysqli_query($conn, "delete from stock where serial_number = '$hapus'");
    
    if ($delete == $sn){
        echo '<script>alert("data tidak terhapus"); </script>';
        header("location:index.php");
    }
    else {
        echo '<script>alert("data terhapus"); </script>';
    }
}

    
if(isset($_POST['lepibarumasuk'])){
    $kerusakan = $_POST['kerusakan'];
    $serial_number = $_POST['serial_number'];
    $tanggal_pengembalian = $_POST['tanggal_pengembalian'];
    $tanggal_kembali = $_POST['tanggal_kembali'];



    $catatanbaru = mysqli_query($conn, "insert into laptopbaru_rusak(kerusakan, serial_number, tanggal_pengembalian, tanggal_kembali) values ('$kerusakan', '$serial_number', '$tanggal_pengembalian','$tanggal_kembali')");
    if($catatanbaru){
        header('location:lembiru.php');
    } else {
        
        echo 'gagal';
        header('location:lembiru.php');
    }

};



if(isset($_POST['ceksn'])) {
   


    $ceksn = mysqli_query($conn, "select serial_number from stock ");
        if ($ceksn = $_POST[[]]) {
            echo '<script>alert("data tidak terdapat") </script>';
        } else {
        echo '<script>alert("data terdapat") </script>';
    }
    
}

?>