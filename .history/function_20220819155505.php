<?php
//menghubungkan ke DB
$conn = mysqli_connect("localhost","root","123", "dams2.0");

if($conn){
    echo 'terhubung';
}

?>