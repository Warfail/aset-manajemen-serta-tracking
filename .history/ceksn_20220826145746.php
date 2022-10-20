<?php

//menghubungkan ke DB
$conn = mysqli_connect("localhost","root","12345", "dams2.0");

if($conn){
    echo 'terhubung';
}


if(isset($_POST['ceksn'])) {
    
    $query = mysqli_query($conn, "SELECT serial_number FROM stock WHERE serial_number = '$ceksn' ");
   
    $result =($query);
    
    $row = mysqli_fetch_array($result, MYSQLI_ASSOC);
    
    if(! $row) {
        echo "No description";
    } else {
        echo  "" ;
    }
}
?>

