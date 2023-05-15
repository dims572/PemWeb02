<?php
require_once '../database/dbkoneksi.php';
$id = $_GET['idedit'];
    $sql = "SELECT * FROM pesanan WHERE id = ? ";
    $statement = $dbh -> prepare($sql);
    $statement -> execute([$id]);
    $result = $statement -> fetch();
?>

<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8" />
        <meta http-equiv="X-UA-Compatible" content="IE=edge" />
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
        <meta name="description" content="" />
        <meta name="author" content="" />
        <title>Edit Pesanan Motor</title>
        <link href="https://cdn.jsdelivr.net/npm/simple-datatables@7.1.2/dist/style.min.css" rel="stylesheet" />
        <link href="css/styles.css" rel="stylesheet" />
        <script src="https://use.fontawesome.com/releases/v6.3.0/js/all.js" crossorigin="anonymous"></script>
    </head>
    <body class="sb-nav-fixed">
        <nav class="sb-topnav navbar navbar-expand navbar-dark bg-dark">
            <!-- Navbar Brand-->
            <a class="navbar-brand ps-3">Edit Pesanan</a>
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
        </nav>
        <div id="layoutSidenav">
            <div id="layoutSidenav_nav">
                <nav class="sb-sidenav accordion sb-sidenav-dark" id="sidenavAccordion">
                    <div class="sb-sidenav-menu">
                        <div class="nav">
                            <a class="nav-link" href="pesanan_motor.php">
                                <div class="sb-nav-link-icon"><i class="fas fa-tachometer-alt"></i></div>
                                Back
                            </a>
                            <a class="nav-link collapsed" href="#" data-bs-toggle="collapse" data-bs-target="#collapseLayouts" aria-expanded="false" aria-controls="collapseLayouts">
                                <div class="sb-nav-link-icon"><i class="fas fa-columns"></i></div>
                                Dashbord
                                <div class="sb-sidenav-collapse-arrow"><i class="fas fa-angle-down"></i></div>
                            </a>
                            <div class="collapse" id="collapseLayouts" aria-labelledby="headingOne" data-bs-parent="#sidenavAccordion">
                                <nav class="sb-sidenav-menu-nested nav">
                                    <a class="nav-link" href="jenis_motor.php">Jenis Motor</a>
                                    <a class="nav-link" href="tipe_motor.php">Tipe Motor</a>
                                    <a class="nav-link" href="merk_motor.php">Merk Motor</a>
                                </nav>
                            </div>
                        </div>
                    </div>
                    <div class="sb-sidenav-footer">
                        <div class="small">Logged in as:</div>
                        Start Bootstrap
                    </div>
                </nav>
            </div>
            <div id="layoutSidenav_content">
            <main>
            <div class="card-body">
                                <form method="POST" action="proses_pesanan_motor.php">
                                    <input type="hidden" name="idedit" value="<?= $result['id'] ?>">
                                    <div class="form-group">
                                        <label for="nama_pelanggan" class="form-label">Nama Pelanggan</label>
                                        <input id="nama_pelanggan" name="nama_pelanggan" type="text" class="form-control" required value="<?= $result['nama_pelanggan'] ?>">
                                    </div>
                                    <div class="form-group">
                                        <label for="alamat_pelanggan" class="form-label">Alamat Pelanggan</label>
                                        <input id="alamat_pelanggan" name="alamat_pelanggan" type="text" class="form-control" required value="<?= $result['alamat_pelanggan'] ?>">
                                    </div>
                                    <div class="form-group">
                                        <label for="quantity" class="form-label">Quantity</label>
                                        <input id="quantity" name="quantity" required type="text" class="form-control" value="<?= $result['quantity'] ?>">
                                    </div>
                                    <div class="form-group mt-4">
                                        <input type="submit" name="proses" type="submit" class="btn btn-success form-control" value="Update" />
                                    </div>
                                </form>
                            </div>
                </main>
            </div>
        </div>
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js" crossorigin="anonymous"></script>
        <script src="js/scripts.js"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/2.8.0/Chart.min.js" crossorigin="anonymous"></script>
        <script src="assets/demo/chart-area-demo.js"></script>
        <script src="assets/demo/chart-bar-demo.js"></script>
        <script src="https://cdn.jsdelivr.net/npm/simple-datatables@7.1.2/dist/umd/simple-datatables.min.js" crossorigin="anonymous"></script>
        <script src="js/datatables-simple-demo.js"></script>
    </body>
</html>