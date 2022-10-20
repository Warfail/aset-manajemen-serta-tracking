<?php
//menghubungkan ke DB
$conn = mysqli_connect("localhost", "root","roo", "dams2.0");

if($conn){
    echo 'terhubung';
}

?>