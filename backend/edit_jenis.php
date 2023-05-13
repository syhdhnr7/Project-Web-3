<?php
require_once 'dbkoneksi.php';
?>
<?php
$_idedit = $_GET['idedit'];
if (!empty($_idedit)) {
    $sql = "SELECT * FROM jenis_produk WHERE id=?";
    $st = $dbh->prepare($sql);
    $st->execute([$_idedit]);
    $row = $st->fetch();
} else {
    $row = [];
}
?>

<div class="container mt-5 col-8">
    <div class="card bg-light" style="background-image: linear-gradient(to bottom, #007BFF, #00BFFF); box-shadow: 7px 7px 7px #778899;">
        <div class="card-body">
            <h2 class="text-center mb-4" style="color: white; text-shadow: 3px 3px 3px #1C1CA2"><strong>Edit Jenis Produk</h2>
            <hr>
            <form method="POST" action="proses_jenis.php" class="card-body">
                <div class="form-group row">
                    <label for="id" class="col-4 col-form-label text-white" style="text-shadow: 2px 2px 2px #005DBC;">Id</label>
                    <div class="col-8">
                        <div class="input-group">
                            <input id="id" name="id" type="text" class="form-control" value="<?= $row['id'] ?>" style="box-shadow: 3px 3px 3px #005DBC;">
                        </div>
                    </div>
                </div>

                <div class="form-group row">
                    <label for="nama" class="col-4 col-form-label text-white" style="text-shadow: 2px 2px 2px #005DBC;">Nama</label>
                    <div class="col-8">
                        <div class="input-group">
                            <input id="nama" name="nama" type="text" class="form-control" value="<?= $row['nama'] ?>" style="box-shadow: 3px 3px 3px #005DBC;">
                        </div>
                    </div>
                </div>
                <br>
                <div class="form-group row">
                    <div class="offset-4 col-8">
                        <?php $button = (empty($_idedit)) ? "Simpan" : "Update"; ?>
                        <input type="submit" name="proses" type="submit" class="btn btn-primary" value="<?= $button ?>" style="background-image: linear-gradient(to right, #005DBC, #007BFF, #00BFFF); box-shadow: 3px 3px 3px #1C1CA2;" />
                        <input type="hidden" name="idedit" value="<?= $_idedit ?>" />
                    </div>
                </div>
            </form>
        </div>
    </div>
</div>