<?php

//menghubungkan ke DB
$conn = mysqli_connect("localhost","root","12345", "dams2.0");

if($conn){
    echo 'terhubung';
}


if(isset($_POST['ceksn'])) {
    $ambilsn = mysqli_query($conn, "select * from keluar ");
    $sn = mysqli_query($conn, "select * from stock ");
    $query = "SELECT serial_number FROM s WHERE id = $id AND description IS NOT NULL LIMIT 1";
    $result = mysqli_query($dbc, $query);
    
    $row = mysqli_fetch_array($result, MYSQLI_ASSOC);
    
    if(! $row) {
        echo "<p>No description</p>";
    } else {
        echo '<p>' . $row['description'] . '</p>';
    }
?>

