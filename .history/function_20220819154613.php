<?php
//menghubungkan ke DB
$conn = mysqli_connect("localhost", "root","", "dams2.0");

if($conn){
    echo 'terhubung';
}

?>