<?php
require_once 'dbkoneksi.php';
$conn = mysqli_connect('localhost', 'root', '', 'dbecommerce');

if(isset($_GET['iddel']) && !empty($_GET['iddel'])) {
    $id = $_GET['iddel'];
    $query = "DELETE FROM pesanan WHERE id = $id";
    mysqli_query($conn, $query);
    header("Location:pesanan.php");
    exit;
}
?>

<a class="btn btn-primary" href="delete_pesanan.php?iddel=<?=$row['id']?>"
onclick="if(!confirm('Anda Yakin Ingin Menghapus Data Pesanan <?=$row['nama']?>?')) {return false}">Delete</a>