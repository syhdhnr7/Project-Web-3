<?php
require_once 'dbkoneksi.php';
$conn = mysqli_connect('localhost', 'root', '', 'dbecommerce');
$sql = "SELECT nama FROM produk";
$result = mysqli_query($conn, $sql);
?>

<div class="container mt-5 col-8">
    <div class="card bg-light" style="background-image: linear-gradient(to bottom, #007BFF, #00BFFF); box-shadow: 7px 7px 7px #778899;">
        <div class="card-body">
            <h2 class="text-center mb-4" style="color: white; text-shadow: 3px 3px 3px #1C1CA2"><strong>Form Pemesanan</h2>
            <hr>
            <form method="POST" action="proses_pesanan.php" class="card-body">
                <div class="form-group row">
                    <label for="nama_produk" class="col-4 col-form-label text-white" style="text-shadow: 2px 2px 2px #005DBC;">Nama Produk</label>
                    <div class="col-8">
                        <div class="input-group" style="box-shadow: 3px 3px 3px #005DBC;">
                            <?php
                            echo "<select id='nama_produk' name='nama_produk' required='required' class='custom-select'>";
                            echo "<option disabled selected>Pilih Nama Produk</option>";
                            while ($row = mysqli_fetch_assoc($result)) {
                                echo "<option value='" . $row['nama'] . "'>" . $row['nama'] . "</option>";
                            }
                            echo "</select>";
                            ?>
                        </div>
                    </div>
                </div>

                <div class="form-group row">
                    <label for="jumlah" class="col-4 col-form-label text-white" style="text-shadow: 2px 2px 2px #005DBC;">Jumlah</label>
                    <div class="col-8">
                        <div class="input-group">
                            <input id="jumlah" name="jumlah" type="number" class="form-control" value="1" placeholder="" style="box-shadow: 3px 3px 3px #005DBC;">
                        </div>
                    </div>
                </div>

                <div class="form-group row">
                    <label for="tanggal" class="col-4 col-form-label text-white" style="text-shadow: 2px 2px 2px #005DBC;">Tanggal</label>
                    <div class="col-8">
                        <div class="input-group">
                            <input id="tanggal" name="tanggal" type="date" class="form-control" value="<?php echo date('Y-m-d'); ?>" placeholder="" style="box-shadow: 3px 3px 3px #005DBC;">
                        </div>
                    </div>
                </div>

                <div class="form-group row">
                    <label for="total_harga" class="col-4 col-form-label text-white" style="text-shadow: 2px 2px 2px #005DBC;">Total Harga</label>
                    <div class="col-8">
                        <div class="input-group">
                            <input id="total_harga" name="total_harga" type="text" class="form-control" value="" readonly placeholder="" style="box-shadow: 3px 3px 3px #005DBC;">
                        </div>
                    </div>
                </div>

                <div class="form-group row">
                    <label for="nama_pemesan" class="col-4 col-form-label text-white" style="text-shadow: 2px 2px 2px #005DBC;">Nama Pemesan</label>
                    <div class="col-8">
                        <div class="input-group">
                            <input id="nama_pemesan" name="nama_pemesan" type="text" class="form-control" value="" placeholder="Masukkan Nama Anda" style="box-shadow: 3px 3px 3px #005DBC;">
                        </div>
                    </div>
                </div>

                <div class="form-group row">
                    <label for="alamat_pemesan" class="col-4 col-form-label text-white" style="text-shadow: 2px 2px 2px #005DBC;">Alamat Pemesan</label>
                    <div class="col-8">
                        <div class="input-group">
                            <textarea id="alamat_pemesan" name="alamat_pemesan" class="form-control" value="" placeholder="Masukkan Alamat Anda" rows="3" style="box-shadow: 3px 3px 3px #005DBC;"></textarea>
                        </div>
                    </div>
                </div>

                <br>
                <div class="form-group row">
                    <div class="offset-4 col-8">
                        <input type="submit" name="proses" type="submit" class="btn btn-primary" value="Simpan" style="background-image: linear-gradient(to right, #005DBC, #007BFF, #00BFFF); box-shadow: 3px 3px 3px #1C1CA2;"/>
                    </div>
                </div>
            </form>
        </div>
    </div>
</div>