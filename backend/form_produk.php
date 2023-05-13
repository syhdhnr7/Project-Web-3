<?php
require_once 'dbkoneksi.php';
$conn = mysqli_connect('localhost', 'root', '', 'dbecommerce');
$sql = "SELECT nama FROM jenis_produk";
$result = mysqli_query($conn, $sql);
?>

<div class="container mt-5 col-8">
    <div class="card bg-light" style="background-image: linear-gradient(to bottom, #007BFF, #00BFFF); box-shadow: 7px 7px 7px #778899;">
        <div class="card-body">
            <h2 class="text-center mb-4" style="color: white; text-shadow: 3px 3px 3px #1C1CA2"><strong>Form Produk</h2>
            <hr>
            <form method="POST" action="proses_produk.php" class="card-body">

                <div class="form-group row">
                    <label for="kode" class="col-4 col-form-label text-white" style="text-shadow: 2px 2px 2px #005DBC;">Kode</label>
                    <div class="col-8">
                        <div class="input-group" style="box-shadow: 3px 3px 3px #005DBC;">
                            <input id="kode" name="kode" type="text" class="form-control" value="" placeholder="Masukkan Kode">
                        </div>
                    </div>
                </div>

                <div class="form-group row">
                    <label for="nama" class="col-4 col-form-label text-white" style="text-shadow: 2px 2px 2px #005DBC;">Nama</label>
                    <div class="col-8">
                        <div class="input-group" style="box-shadow: 3px 3px 3px #005DBC;">
                            <input id="nama" name="nama" type="text" class="form-control" value="" placeholder="Masukkan Nama">
                        </div>
                    </div>
                </div>

                <div class="form-group row">
                    <label for="harga" class="col-4 col-form-label text-white" style="text-shadow: 2px 2px 2px #005DBC;">Harga</label>
                    <div class="col-8">
                        <div class="input-group" style="box-shadow: 3px 3px 3px #005DBC;">
                            <input id="harga" name="harga" type="text" class="form-control" value="" placeholder="Masukkan Harga">
                        </div>
                    </div>
                </div>

                <div class="form-group row">
                    <label for="stok" class="col-4 col-form-label text-white" style="text-shadow: 2px 2px 2px #005DBC;">Stok</label>
                    <div class="col-8">
                        <div class="input-group" style="box-shadow: 3px 3px 3px #005DBC;">
                            <input id="stok" name="stok" type="text" class="form-control" value="" placeholder="Masukkan Stok">
                        </div>
                    </div>
                </div>

                <div class="form-group row">
                    <label for="jenis_produk" class="col-4 col-form-label text-white" style="text-shadow: 2px 2px 2px #005DBC;">Jenis Produk</label>
                    <div class="col-8">
                        <div class="input-group" style="box-shadow: 3px 3px 3px #005DBC;">
                            <?php
                            echo "<select id='jenis_produk' name='jenis_produk' required='required' class='custom-select'>";
                            echo "<option disabled selected>Pilih Jenis Produk</option>";
                            while ($row = mysqli_fetch_assoc($result)) {
                                echo "<option value='" . $row['nama'] . "'>" . $row['nama'] . "</option>";
                            }
                            echo "</select>";
                            ?>
                        </div>
                    </div>
                </div>
                <br>
                <div class="form-group row">
                    <div class="offset-4 col-8">
                        <input type="submit" name="proses" type="submit" class="btn btn-primary" value="Simpan" style="background-image: linear-gradient(to right, #005DBC, #007BFF, #00BFFF); box-shadow: 3px 3px 3px #1C1CA2;" />
                    </div>
                </div>
            </form>
        </div>
    </div>
</div>