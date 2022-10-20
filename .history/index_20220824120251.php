<?php
require 'function.php';
require 'cek.php';
// require 'hapuS.php';
?>

<!DOCTYPE html>
<html lang="en">
    <head>

        <meta charset="utf-8" />
        <meta http-equiv="X-UA-Compatible" content="IE=edge" />
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
        <meta name="description" content="" />
        <meta name="author" content="" />
        <title>Dashboard - SB Admin</title>
        <link href="https://cdn.jsdelivr.net/npm/simple-datatables@latest/dist/style.css" rel="stylesheet" />
        <link href="css/styles.css" rel="stylesheet" />
        <script src="https://use.fontawesome.com/releases/v6.1.0/js/all.js" crossorigin="anonymous"></script>
        <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/css/bootstrap.min.css">
        <script src="https://cdn.jsdelivr.net/npm/jquery@3.6.0/dist/jquery.slim.min.js"></script>
        <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js"></script>
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/js/bootstrap.bundle.min.js"></script>
        <script type ="text/JavaScript"></script>  
                
    </head>
    <body class="sb-nav-fixed">
        <nav class="sb-topnav navbar navbar-expand navbar-dark bg-dark">
            <!-- Navbar Brand-->
            <a class="navbar-brand ps-3" href="index.html">Start Bootstrap</a>
            <!-- Sidebar Toggle-->
            <button class="btn btn-link btn-sm order-1 order-lg-0 me-4 me-lg-0" id="sidebarToggle" href="#!"><i class="fas fa-bars"></i></button>
            <!-- Navbar Search-->
            <form class="d-none d-md-inline-block form-inline ms-auto me-0 me-md-3 my-2 my-md-0">
                <div class="input-group">
                    <input class="form-control" type="text" placeholder="Search for..." aria-label="Search for..." aria-describedby="btnNavbarSearch" />
                    <button class="btn btn-primary" id="btnNavbarSearch" type="button"><i class="fas fa-search"></i></button>
                </div>
            </form>
            <!-- Navbar-->
            <ul class="navbar-nav ms-auto ms-md-0 me-3 me-lg-4">
                <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle" id="navbarDropdown" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false"><i class="fas fa-user fa-fw"></i></a>
                    <ul class="dropdown-menu dropdown-menu-end" aria-labelledby="navbarDropdown">
                        <li><a class="dropdown-item" href="#!">Settings</a></li>
                        <li><a class="dropdown-item" href="#!">Activity Log</a></li>
                        <li><hr class="dropdown-divider" /></li>
                        <li><a class="dropdown-item" href="logout.php">Logout</a></li>
                    </ul>
                </li>
            </ul>
        </nav>
        <div id="layoutSidenav">
            <div id="layoutSidenav_nav">
                <nav class="sb-sidenav accordion sb-sidenav-dark" id="sidenavAccordion">
                    <div class="sb-sidenav-menu">
                        <div class="nav">
                            <div class="sb-sidenav-menu-heading">Core</div>
                            <a class="nav-link" href="index.php">
                                <div class="sb-nav-link-icon"><i class="fas fa-tachometer-alt"></i></div>
                                STOCK LAPTOP
                            </a>
                            <a class="nav-link" href="rusak.php">
                                <div class="sb-nav-link-icon"><i class="fas fa-tachometer-alt"></i></div>
                                LAPTOP RUSAK
                            </a>
                            <a class="nav-link" href="masuk.php">
                                <div class="sb-nav-link-icon"><i class="fas fa-tachometer-alt"></i></div>
                                LAPTOP MASUK
                            </a>
                            <a class="nav-link" href="keluar.php">
                                <div class="sb-nav-link-icon"><i class="fas fa-tachometer-alt"></i></div>
                                LAPTOP KELUAR
                            </a>



                            <div class="sb-sidenav-menu-heading">Interface</div>
                            <a class="nav-link collapsed" href="#" data-bs-toggle="collapse" data-bs-target="#collapseLayouts" aria-expanded="false" aria-controls="collapseLayouts">
                                <div class="sb-nav-link-icon"><i class="fas fa-columns"></i></div>
                                Layouts
                                <div class="sb-sidenav-collapse-arrow"><i class="fas fa-angle-down"></i></div>
                            </a>
                            <div class="collapse" id="collapseLayouts" aria-labelledby="headingOne" data-bs-parent="#sidenavAccordion">
                                <nav class="sb-sidenav-menu-nested nav">
                                    <a class="nav-link" href="layout-static.html">Static Navigation</a>
                                    <a class="nav-link" href="layout-sidenav-light.html">Light Sidenav</a>
                                </nav>
                            </div>
                            <a class="nav-link collapsed" href="#" data-bs-toggle="collapse" data-bs-target="#collapsePages" aria-expanded="false" aria-controls="collapsePages">
                                <div class="sb-nav-link-icon"><i class="fas fa-book-open"></i></div>
                                Pages
                                <div class="sb-sidenav-collapse-arrow"><i class="fas fa-angle-down"></i></div>
                            </a>
                            <div class="collapse" id="collapsePages" aria-labelledby="headingTwo" data-bs-parent="#sidenavAccordion">
                                <nav class="sb-sidenav-menu-nested nav accordion" id="sidenavAccordionPages">
                                    <a class="nav-link collapsed" href="#" data-bs-toggle="collapse" data-bs-target="#pagesCollapseAuth" aria-expanded="false" aria-controls="pagesCollapseAuth">
                                        Authentication
                                        <div class="sb-sidenav-collapse-arrow"><i class="fas fa-angle-down"></i></div>
                                    </a>
                                    <div class="collapse" id="pagesCollapseAuth" aria-labelledby="headingOne" data-bs-parent="#sidenavAccordionPages">
                                        <nav class="sb-sidenav-menu-nested nav">
                                            <a class="nav-link" href="login.php">Login</a>
                                        </nav>
                                    </div>
                                    <a class="nav-link collapsed" href="#" data-bs-toggle="collapse" data-bs-target="#pagesCollapseError" aria-expanded="false" aria-controls="pagesCollapseError">
                                        Error
                                        <div class="sb-sidenav-collapse-arrow"><i class="fas fa-angle-down"></i></div>
                                    </a>
                                    <div class="collapse" id="pagesCollapseError" aria-labelledby="headingOne" data-bs-parent="#sidenavAccordionPages">
                                        <nav class="sb-sidenav-menu-nested nav">
                                            <a class="nav-link" href="401.html">401 Page</a>
                                            <a class="nav-link" href="404.html">404 Page</a>
                                            <a class="nav-link" href="500.html">500 Page</a>
                                        </nav>
                                    </div>
                                </nav>
                            </div>
                           
                        </div>
                    </div>
                    <div class="sb-sidenav-footer">
                        <div class="small">Logged in as:</div>
                        Administrator
                    </div>
                </nav>
            </div>
            <div id="layoutSidenav_content">
                <main>
                    <div class="container-fluid px-4">
                        <h1 class="mt-4">Stock Laptop</h1>
                        <ol class="breadcrumb mb-4">
                            <li class="breadcrumb-item active">Dashboard</li>
                            
                        </ol>
                        <div class="row">
                            <div class="col-xl-3 col-md-6">
                                <div class="card bg-primary text-white mb-4">
                                    <div class="card-body">Total Stock</div>
                                    <div class="card-footer d-flex align-items-center justify-content-between">
                                    <?php
                                            

                                            $query = mysqli_query($conn, "select serial_number from stock");
                                            $row_cnt = $query->num_rows;

                                            // echo $row_cnt;

                                            // Return 4 for example
                                            ?>
                                        <a><?=$row_cnt;?></a>
                                        <div class="small text-white"><i class="fas fa-angle-right"></i></div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-xl-3 col-md-6">
                                <div class="card bg-warning text-white mb-4">
                                    <div class="card-body">Stock Masuk</div>
                                    <div class="card-footer d-flex align-items-center justify-content-between">
                                    <?php
                                            

                                            $query = mysqli_query($conn, "select serial_number from masuk");
                                            $row_cnt = $query->num_rows;

                                            // echo $row_cnt;

                                            // Return 4 for example
                                            ?>
                                        <a><?=$row_cnt;?></a>
                                        <div class="small text-white"><i class="fas fa-angle-right"></i></div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-xl-3 col-md-6">
                                <div class="card bg-success text-white mb-4">
                                    <div class="card-body">Stock keluar</div>
                                    <div class="card-footer d-flex align-items-center justify-content-between">
                                    <?php
                                            

                                            $query = mysqli_query($conn, "select serial_number from keluar");
                                            $row_cnt = $query->num_rows;

                                            // echo $row_cnt;

                                            // Return 4 for example
                                            ?>
                                        <a><?=$row_cnt;?></a>
                                        <div class="small text-white"><i class="fas fa-angle-right"></i></div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-xl-3 col-md-6">
                                <div class="card bg-danger text-white mb-4">
                                    <div class="card-body">Stock Rusak</div>
                                    <div class="card-footer d-flex align-items-center justify-content-between">
                                    <?php
                                            

                                            $query = mysqli_query($conn, "select serial_number from rusak");
                                            $row_cnt = $query->num_rows;

                                            // echo $row_cnt;

                                            // Return 4 for example
                                            ?>
                                        <a><?=$row_cnt;?></a>
                                        <div class="small text-white"><i class="fas fa-angle-right"></i></div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="card mb-4">
                            <div class="card-header">
                            
                            </div>
                            <div class="card-body">
                                <table id="datatablesSimple">
                                    <thead>
                                        <tr>
                                            <th>No</th>
                                            <th>Serial Number</th>
                                            <th>Brand</th>
                                            <th>Model</th>
                                            <th>Spesifikasi</th>
                                            <th>Opsi</th>
                                            <!-- <th>Start date</th> -->
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <?php
                                        $datastok = mysqli_query($conn, "select * from stock ");
                                        $i = 1;
                                        while($data = mysqli_fetch_array($datastok)){
                                            
                                            $serial_number = $data['serial_number'];
                                            $brand = $data['brand'];
                                            $model = $data['model'];
                                            $spesifikasi = $data['spesifikasi'];
                                            $sn = $data['serial_number'];
                                        ?>
                                        <tr>
                                            <td><?=$i++;?></td>
                                            <td><?=$serial_number;?></td>
                                            <td><?=$brand;?></td>
                                            <td><?=$model;?></td>
                                            <td><?=$spesifikasi;?></td>
                                            <td>
                                            <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#edit<?=$sn;?>">
                                                Edit
                                            </button>
                                            <input type="hidden" name="sndihapus" value="<?=$sn;?>">
                                            <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#delete<?=$sn;?>">
                                                Hapus
                                            </button>
                                            </td>
                                        </tr>
                                        <!-- Edit Modal -->
                                        <div class="modal fade" id="edit<?=$sn;?>">
                                        <div class="modal-dialog">
                                        <div class="modal-content">
                                        
                                            <!-- Modal Header -->
                                            <div class="modal-header">
                                            <h4 class="modal-title">Edit Data</h4>
                                            <button type="button" class="close" data-dismiss="modal">&times;</button>
                                            </div>
                                            
                                            <!-- Modal body -->
                                            <form method="post">
                                            <div class="modal-body">
                                            <input type="text" name="serial_number" placeholder="Serial Number" value="<?=$serial_number;?>" class="form-control" >
                                            <br>
                                            <input type="text" name="brand" placeholder="brand" value="<?=$brand;?>" class="form-control" >
                                            <br>
                                            <input type="text" name="model" placeholder="Model" value="<?=$model;?>" class="form-control" >
                                            <br>
                                            <input type="text" name="spesifikasi" placeholder="Spesifikasi" value="<?=$spesifikasi;?>" class="form-control" >
                                            <br>
                                            <button type="submit" class="btn btn-primary" name="updatelaptop">Update</button>
                                            </div>
                                            </form>
                                            
                                            <!-- Modal footer -->
                                            <div class="modal-footer">
                                            <button type="button" class="btn btn-danger" data-dismiss="modal">Close</button>
                                            </div>
                                            
                                        </div>
                                        </div>
                                    </div>

                                     <!-- Delete Modal -->
                                     <div class="modal fade" id="delete<?=$sn;?>">
                                        <div class="modal-dialog">
                                        <div class="modal-content">
                                        
                                            <!-- Modal Header -->
                                            <div class="modal-header">
                                            <h4 class="modal-title">Delete Data</h4>
                                            <button type="button" class="close" data-dismiss="modal">&times;</button>
                                            </div>
                                            
                                            <!-- Modal body -->
                                            <form method="post">
                                            <div class="modal-body">
                                            
                                                <br>
                                                Apakah anda yakin ingin menghapus laptop dengan S/N berikut?
                                                <span> <?=$serial_number;?> </span>
                                                <br>
                                                <br>
                                                if(isset($_POST['hapuslaptop'])){
            $serialnumber = $_POST['serialnumber'];
            $delete = mysqli_query($conn, "delete from stock WHERE serial_number='$serial_number'");
            
            if ($delete){
                echo '<script>alert("data terhapus"); </script>';
                header("location:index.php");
            }
            else {
                echo '<script>alert("data tidak terhapus"); </script>';
            }
        }
                                                <br>
                                            <button type="submit" class="btn btn-danger" name="hapuslaptop" <?=$serial_number;?>>Hapus</button>
                                            </div>
                                            </form>
                                            
                                            <!-- Modal footer -->
                                            <div class="modal-footer">
                                            
                                            <button type="button" name="serial_number" value="<?=$serial_number;?>" class="btn btn-danger" data-dismiss="modal">Close</button>
                                            
                                            </div>
                                            
                                        </div>
                                        </div>
                                    </div>
                                                                <?php
                                        };

                                        
                                        ?>
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>
                </main>
                <footer class="py-4 bg-light mt-auto">
                    <div class="container-fluid px-4">
                        <div class="d-flex align-items-center justify-content-between small">
                            <div class="text-muted">Copyright &copy; Your Website 2022</div>
                            <div>
                                <a href="#">Privacy Policy</a>
                                &middot;
                                <a href="#">Terms &amp; Conditions</a>
                            </div>
                        </div>
                    </div>
                </footer>
            </div>
        </div>
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" crossorigin="anonymous"></script>
        <script src="js/scripts.js"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/2.8.0/Chart.min.js" crossorigin="anonymous"></script>
        <script src="assets/demo/chart-area-demo.js"></script>
        <script src="assets/demo/chart-bar-demo.js"></script>
        <script src="https://cdn.jsdelivr.net/npm/simple-datatables@latest" crossorigin="anonymous"></script>
        <script src="js/datatables-simple-demo.js"></script>
        <script>
function deleletconfig(){

var del=confirm("Are you sure you want to delete this record?");
if (del==true){
   alert ("record deleted")
}
return del;
}
</script>

//add onclick event
onclick="return deleletconfig()"

    </body>
        <!-- The Modal -->
        <div class="modal fade" id="myModal">
            <div class="modal-dialog">
            <div class="modal-content">
            
                <!-- Modal Header -->
                <div class="modal-header">
                <h4 class="modal-title">Modal Heading</h4>
                <button type="button" class="close" data-dismiss="modal">&times;</button>
                </div>
                
                <!-- Modal body -->
                <form method="post">
                <div class="modal-body">
                <input type="text" name="serial_number" placeholder="Serial Number" class="form-control" required>
                <br>
                <input type="text" name="brand" placeholder="Brand" class="form-control" required>
                <br>
                <input type="text" name="model" placeholder="Model" class="form-control" required>
                <br>
                <input type="text" name="spesifikasi" placeholder="Spesifikasi" class="form-control" required>
                <br>
                <button type="submit" class="btn btn-primary" name="tambahkanlaptop">Submit</button>
                </div>
                </form>
                
                <!-- Modal footer -->
                <div class="modal-footer">
                <button type="button" class="btn btn-danger" data-dismiss="modal">Close</button>
                </div>
                
            </div>
            </div>
        </div>
</html>
