<?php
require_once 'dbkoneksi.php';
$conn = mysqli_connect('localhost', 'root', '', 'dbecommerce');

if(isset($_GET['iddel']) && !empty($_GET['iddel'])) {
    $id = $_GET['iddel'];
    $query = "DELETE FROM jenis_produk WHERE id = $id";
    mysqli_query($conn, $query);
    header("Location:index.php");
    exit;
}
?>

<a class="btn btn-primary" href="delete_jenis.php?iddel=<?=$row['id']?>"
onclick="if(!confirm('Anda Yakin Ingin Menghapus Data Produk <?=$row['nama']?>?')) {return false}">Delete</a>