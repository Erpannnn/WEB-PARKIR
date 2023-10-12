<?php
include('koneksi.php');

$nomor_plat     = $_POST['nomor_plat'];
$jenis_kendaraan = $_POST['jenis_kendaraan'];

$query = "INSERT INTO tbl_parkir (nomor_plat, jenis_kendaraan, jam_masuk) VALUES ('$nomor_plat', '$jenis_kendaraan', NOW())";

if ($con->query($query)) {
    header("location: index.php");
} else {
    echo "Data Gagal Disimpan!";
}
?>