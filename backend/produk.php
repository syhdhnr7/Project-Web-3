<?php
require_once 'dbkoneksi.php';
$sql = "SELECT * FROM produk";
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
    <title>Daftar Produk</title>
    <link rel="icon" type="image/png" href="assets/img/logo.png" />
    <link href="https://cdn.jsdelivr.net/npm/simple-datatables@7.1.2/dist/style.min.css" rel="stylesheet" />
    <link href="css/styles.css" rel="stylesheet" />
    <script src="https://use.fontawesome.com/releases/v6.3.0/js/all.js" crossorigin="anonymous"></script>
</head>

<body class="sb-nav-fixed" style="background-image: linear-gradient(to bottom, #E6E6FA, #C798FE);">
    <nav class="sb-topnav navbar navbar-expand navbar-dark" style="background-image: linear-gradient(to right, #1C1CA2, #005DBC, #007BFF, #00BFFF);">
        <!-- Navbar Brand-->
        <h1 class="navbar-brand ps-3"><i class="fas fa-fw fa-paw"></i> Miora Pet</h1>
        <!-- Sidebar Toggle-->
        <button class="btn btn-link btn-sm order-1 order-lg-0 me-4 me-lg-0" id="sidebarToggle" href="#!"><i class="fas fa-bars" style="color: #00BFFF;"></i></button>
        <!-- Navbar Search-->
        <form class="d-none d-md-inline-block form-inline ms-auto me-0 me-md-3 my-2 my-md-0">
            <div class="input-group">
                <input style="box-shadow: 3px 3px 3px #005DBC;" class="form-control" type="text" placeholder="Search for..." aria-label="Search for..." aria-describedby="btnNavbarSearch" />
                <button class="btn btn-primary" id="btnNavbarSearch" style="background-image: linear-gradient(to right, #007BFF, #00BFFF); box-shadow: 3px 3px 3px #005DBC;" type="button"><i class="fas fa-search"></i></button>
            </div>
        </form>
    </nav>

    <!-- Sidebar-->
    <div id="layoutSidenav">
        <div id="layoutSidenav_nav">
            <nav class="sb-sidenav accordion" id="sidenavAccordion" style="background-image: linear-gradient(to top, #000080, #005DBC, #007BFF);">
                <div class="sb-sidenav-menu">
                    <div class="nav">
                        <a class="nav-link text-white" href="index.php">
                            <div class="sb-nav-link-icon"><i class="fas fa-fw fa-shop"></i></div>
                            Jenis Produk
                        </a>
                    </div>
                    <div class="nav">
                        <a class="btn nav-link text-black active" style="background-image: linear-gradient(to top, #CBEAFF, #00BFFF);" href="produk.php">
                            <div class="sb-nav-link-icon"><i class="fas fa-fw fa-sticky-note"></i></div>
                            Daftar Produk
                        </a>
                    </div>
                    <div class="nav">
                        <a class="nav-link text-white" href="pesanan.php">
                            <div class="sb-nav-link-icon"><i class="fas fa-fw fa-shopping-cart"></i></div>
                            Pesanan
                        </a>
                    </div>
                </div>
            </nav>
        </div>
        <div id="layoutSidenav_content">
            <main>
                <div class="container-fluid px-4">
                    <h1 class="mt-4" style="text-shadow: 1px 1px 1px #000000; color: #704DC1;"><strong>Daftar Produk</strong></h1>
                    <hr>
                    <div class="card-body">
                        <table class="table table-bordered">
                            <thead class="bg-dark text-white">
                                <tr class="text-center" style="background-image: linear-gradient(to bottom, #704DC1, #9370DB); line-height: 3;">
                                    <th>No.</th>
                                    <th>Kode</th>
                                    <th>Nama</th>
                                    <th>Harga</th>
                                    <th>Stok</th>
                                    <th>Jenis Produk</th>
                                    <th>Action</th>
                                </tr>
                            </thead>
                            <tbody>
                                <?php
                                $nomor  = 1;
                                foreach ($rs as $row) {
                                ?>
                                    <tr style="background-color: #E6E6FA;">
                                        <td><?= $nomor ?></td>
                                        <td><?= $row['kode'] ?></td>
                                        <td><?= $row['nama'] ?></td>
                                        <td><?= $row['harga'] ?></td>
                                        <td><?= $row['stok'] ?></td>
                                        <td><?= $row['jenis_produk'] ?></td>
                                        <td class="text-center">
                                            <a class="btn text-white mr-2" style="background-image: linear-gradient(to right, #704DC1, #9370DB, #C798FE); box-shadow: 3px 3px 3px #483D8B;" href="view_produk.php?id=<?= $row['id'] ?>">
                                                <i class="fas fa-fw fa-eye"></i> View</a>
                                            <a class="btn text-white mr-2" style="background-image: linear-gradient(to right, #704DC1, #9370DB, #C798FE); box-shadow: 3px 3px 3px #483D8B;" href="edit_produk.php?idedit=<?= $row['id'] ?>">
                                                <i class="fas fa-fw fa-edit"></i> Edit</a>
                                            <a class="btn text-white" style="background-image: linear-gradient(to right, #704DC1, #9370DB, #C798FE); box-shadow: 3px 3px 3px #483D8B;" href="delete_produk.php?iddel=<?= $row['id'] ?>" onclick="if(!confirm('Anda Yakin Ingin Menghapus Data Produk <?= $row['nama'] ?>?')) {return false}">
                                                <i class="fas fa-fw fa-trash"></i> Delete</a>
                                        </td>
                                    </tr>
                                <?php
                                    $nomor++;
                                }
                                ?>
                            </tbody>
                        </table>
                        <a class="btn text-white" style="background-image: linear-gradient(to right, #704DC1, #9370DB, #C798FE); box-shadow: 3px 3px 3px #483D8B;" href="form_produk.php">
                            <i class="fas fa-fw fa-circle-plus"></i> Create</a>
                    </div>
                </div>
            </main>
            <footer class="py-4 bg-light mt-auto" style="background-image: linear-gradient(to right, #704DC1, #9370DB, #C798FE);">
                <div class="container-fluid px-4">
                    <div class="d-flex align-items-center justify-content-between small">
                        <div class="text-white">Copyright &copy; Mahasiswa STT Terpadu Nurul Fikri</div>
                    </div>
                </div>
            </footer>
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