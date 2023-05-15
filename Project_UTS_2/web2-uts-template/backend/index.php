<?php
require_once '../database/dbkoneksi.php';
?>

<?php
$sql = 'SELECT * FROM motor';
$rs = $dbh->query($sql); 
 ?>
 
<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8" />
        <meta http-equiv="X-UA-Compatible" content="IE=edge" />
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
        <meta name="description" content="" />
        <meta name="author" content="" />
        <title>Shop</title>
        <link href="https://cdn.jsdelivr.net/npm/simple-datatables@7.1.2/dist/style.min.css" rel="stylesheet" />
        <link href="css/styles.css" rel="stylesheet" />
        <script src="https://use.fontawesome.com/releases/v6.3.0/js/all.js" crossorigin="anonymous"></script>
    </head>
    <body class="sb-nav-fixed">
        <nav class="sb-topnav navbar navbar-expand navbar-dark bg-dark">
            <!-- Navbar Brand-->
            <a class="navbar-brand ps-3" >Beranda</a>
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
                            <a class="nav-link" href="../frontend/index.php">
                                <div class="sb-nav-link-icon"><i></i>
                <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" style="margin-left: 4px; margin-right: 5px;" fill="currentColor" class="bi bi-house-door-fill" viewBox="0 0 16 16">
                <path d="M6.5 14.5v-3.505c0-.245.25-.495.5-.495h2c.25 0 .5.25.5.5v3.5a.5.5 0 0 0 .5.5h4a.5.5 0 0 0 .5-.5v-7a.5.5 0 0 0-.146-.354L13 5.793V2.5a.5.5 0 0 0-.5-.5h-1a.5.5 0 0 0-.5.5v1.293L8.354 1.146a.5.5 0 0 0-.708 0l-6 6A.5.5 0 0 0 1.5 7.5v7a.5.5 0 0 0 .5.5h4a.5.5 0 0 0 .5-.5Z"/>
              </svg></div>
                                Home
                            </a>
                            <a class="nav-link collapsed" href="#" data-bs-toggle="collapse" data-bs-target="#collapseLayouts" aria-expanded="false" aria-controls="collapseLayouts">
                                <div style="margin-left: 7px;" class="sb-nav-link-icon"><i class="fas fa-tachometer-alt"></i></div>
                                Dashbord
                                <div class="sb-sidenav-collapse-arrow"><i class="fas fa-angle-down"></i></div>
                            </a>
                            <div class="collapse" id="collapseLayouts" aria-labelledby="headingOne" data-bs-parent="#sidenavAccordion">
                                <nav class="sb-sidenav-menu-nested nav">
                                    <a class="nav-link" href="pesanan_motor.php">Pesanan Motor</a>
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
                <a href="create_nama_motor.php" type="button" class="btn btn-success">Create</a>
                <table class="table table-dark table-striped">
<tr>
    <td>Nama Motor</td>
    <td>CC</td>
    <td>Harga</td>
    <td>Stok</td>
    <td>Action</td>
</tr>
<?php
foreach ($rs as $row){
?>
<tr>
    <td><?= $row['nama_motor']?></td>
    <td><?= $row['cc']?></td>
    <td><?= $row['harga']?></td>
    <td><?= $row['stok']?></td>
    <td><a class="btn btn-primary" href="edit_nama_motor.php?idedit=<?=$row['id']?>">Update</a>
        <a class="btn btn-primary" href="delete_nama_motor.php?iddel=<?=$row['id']?>"
        onclick="if(!confirm('Anda Yakin Hapus Data Motor <?=$row['nama_motor']?>?')) {return false}">Delete</a>
        <a class="btn btn-primary" href="view_nama_motor.php?id=<?=$row['id']?>">View</a>
    </td>
</tr>
<?php
}
?>
</table>
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
