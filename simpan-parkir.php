<?php
include('koneksi.php');

$nomor_plat     = $_POST['nomor_plat'];
$jenis_kendaraan = $_POST['jenis_kendaraan'];


if(isset($_FILES['foto'])) {
    $file_name = $_FILES['foto']['name'];
    $file_tmp = $_FILES['foto']['tmp_name'];

   
    $target_dir = "kumpulan-gambar/";
    $target_file = $target_dir . basename($file_name);


    if (move_uploaded_file($file_tmp, $target_file)) {
        echo "File berhasil di upload.";
    } else {
        echo "Error: Gagal!.";
    }
} else {
    echo "Error: Gagal!.";
}

$query = "INSERT INTO tbl_parkir (nomor_plat, jenis_kendaraan, gambar, jam_masuk) VALUES ('$nomor_plat', '$jenis_kendaraan', '$file_name', NOW())";

if ($con->query($query)) {
    header("location: index.php");
} else {
    echo "Data Gagal Disimpan!";
}
?>
