


if(isset($_POST['hapuslaptop'])){
    $serial_number = $_POST['serial_number'];
    $query = "delete from stock where serial_number = '$serial_number'";
    $query_run = mysqli_query($conn, $query);
    if ($query_run){
        echo '<script>alert("data terhapus"); </script>';
        header("location:index.php");
    }
    else {
        echo '<script>alert("data tidak terhapus"); </script>';
    }
}