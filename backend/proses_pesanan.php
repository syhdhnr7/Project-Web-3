<?php
require_once 'dbkoneksi.php';

$_namaproduk = $_POST['nama_produk'];
$_jumlah = $_POST['jumlah'];
$_tanggal = $_POST['tanggal'];
$conn = mysqli_connect('localhost', 'root', '', 'dbecommerce');
$nama = $_POST['nama_produk'];
$sql = "SELECT harga FROM produk WHERE nama ='$nama'";
$result = mysqli_query($conn, $sql);
$row = mysqli_fetch_assoc($result);
$_totalharga = $row['harga'] * $_jumlah;
$_namapemesan = $_POST['nama_pemesan'];
$_alamatpemesan = $_POST['alamat_pemesan'];


$_proses = $_POST['proses'];

// array data
$ar_data[] = $_namaproduk;
$ar_data[] = $_jumlah;
$ar_data[] = $_tanggal;
$ar_data[] = $_totalharga;
$ar_data[] = $_namapemesan;
$ar_data[] = $_alamatpemesan;

if ($_proses == "Simpan") {
   // data baru
   $sql = "INSERT INTO pesanan (nama_produk,jumlah,tanggal,total_harga,nama_pemesan,alamat_pemesan) VALUES (?,?,?,?,?,?)";
} else if ($_proses == "Update") {
   $ar_data[] = $_POST['idedit'];
   $sql = "UPDATE pesanan SET nama_produk=?,jumlah=?,tanggal=?,total_harga=?,nama_pemesan=?,alamat_pemesan=? WHERE id=?";
}
if (isset($sql)) {
   $st = $conn->prepare($sql);
   $st->execute($ar_data);
}

header('location:pesanan.php');
?>