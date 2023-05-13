<?php
require_once 'dbkoneksi.php';
?>
<?php
$_id = $_GET['id'];
$sql = "SELECT * FROM pesanan WHERE id=?";
$st = $dbh->prepare($sql);
$st->execute([$_id]);
$row = $st->fetch();
?>

<div class="container mt-5 col-8">
    <div class="card bg-light" style="background-image: linear-gradient(to bottom, #007BFF, #00BFFF); box-shadow: 7px 7px 7px #778899;">
        <div class="card-body">
            <h2 class="text-center mb-4" style="color: white; text-shadow: 3px 3px 3px #1C1CA2"><strong>Deskripsi Produk</h2>
            <table class="table table-bordered bg-white">
                <tbody style="box-shadow: 5px 5px 5px #005DBC;">
                    <tr>
                        <td>Nama Produk</td>
                        <td><?= $row['nama_produk'] ?></td>
                    </tr>
                    <tr>
                        <td>Jumlah</td>
                        <td><?= $row['jumlah'] ?></td>
                    </tr>
                    <tr>
                        <td>Tanggal</td>
                        <td><?= $row['tanggal'] ?></td>
                    </tr>
                    <tr>
                        <td>Total Harga</td>
                        <td><?= $row['total_harga'] ?></td>
                    </tr>
                    <tr>
                        <td>Nama Pesesan</td>
                        <td><?= $row['nama_pemesan'] ?></td>
                    </tr>
                    <tr>
                        <td>Alamat Pesesan</td>
                        <td><?= $row['alamat_pemesan'] ?></td>
                    </tr>
                </tbody>
            </table>
            <br>
            <div class="form-group row">
                <div class="offset-5 col-8">
                    <a class="btn btn-primary" style="background-image: linear-gradient(to right, #005DBC, #007BFF, #00BFFF); box-shadow: 3px 3px 3px #1C1CA2;" href="pesanan.php">
                    <i class="fa fa-long-arrow-left m-l-10" aria-hidden="true"></i> Kembali</a>
                </div>
            </div>
        </div>
    </div>
</div>