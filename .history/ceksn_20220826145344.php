<?php

//menghubungkan ke DB
$conn = mysqli_connect("localhost","root","12345", "dams2.0");

if($conn){
    echo 'terhubung';
}


if(isset($_POST['ceksn'])) {
    
    $query = (conn"SELECT serial_number FROM stock WHERE serial_number = $ceksn ";
    $result = mysqli_query($conn, $query);
    
    $row = mysqli_fetch_array($result, MYSQLI_ASSOC);
    
    if(! $row) {
        echo "<p>No description</p>";
    } else {
        echo '<p>' . $row['description'] . '</p>';
    }
}
?>

