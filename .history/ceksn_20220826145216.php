<?php

//menghubungkan ke DB
$conn = mysqli_connect("localhost","root","12345", "dams2.0");

if($conn){
    echo 'terhubung';
}


if(isset($_POST['ceksn'])) {
    
    $query = "SELECT serial_number FROM stock WHERE serial_number = $serial_number ";
    $result = mysqli_query($co, $query);
    
    $row = mysqli_fetch_array($result, MYSQLI_ASSOC);
    
    if(! $row) {
        echo "<p>No description</p>";
    } else {
        echo '<p>' . $row['description'] . '</p>';
    }
?>

