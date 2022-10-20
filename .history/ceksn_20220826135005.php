<?php


?>


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