<?php 

include('koneksi.php');


$id = $_POST["id_parkir"];
$nomor_plat     = $_POST['nomor_plat'];
$jenis_kendaraan = $_POST['jenis_kendaraan'];

$query = "UPDATE tbl_parkir SET nomor_plat='$nomor_plat', jenis_kendaraan='$jenis_kendaraan' WHERE id_parkir=$id";
$result = mysqli_query($con, $query);

if (!$result) {
    echo "Gagal mas";
}

header('Location: index.php')

?>