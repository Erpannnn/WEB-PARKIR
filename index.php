
<?php 

session_start();

if (!$_SESSION['nama_lengkap']) {
  header('Location: login.php');
}

include "koneksi.php";

?>



<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css">
    <link rel="stylesheet" href="//cdn.datatables.net/1.10.20/css/jquery.dataTables.min.css">
    <title>WEB PARKIR ONLINE</title>
    
  </head>
  <body style=>
    <div class="container" style="margin-top: 80px">
      <div class="row">
        <div class="col-md-12">
          <div class="card">
            <div class="card-header bg-primary text-white">
              DATA PARKIR, Admin By <?php echo $_SESSION["nama_lengkap"]?>
            </div>
            <div class="card-body">
              <a href="input-jam-masuk.php" class="btn btn-md btn-success" style="margin-bottom: 10px">TAMBAH DATA</a>
              <a href="logout.php" class="btn btn-md btn-danger" style="margin-bottom: 10px">LOGOUT</a>

              <table class="table table-bordered" id="myTable">
                <thead>
                  <tr>
                    <th scope="col">ID</th>
                    <th scope="col">PLAT NOMOR</th>
                    <th scope="col">JENIS KENDARAAN</th>
                    <th scope="col">FOTO KENDARAAN</th>
                    <th scope="col">JAM MASUK</th>
                    <th scope="col">JAM KELUAR</th>
                    <th scope="col">ACTION</th>
                  </tr>
                </thead>
                <tbody>
                  <?php 
                      include('koneksi.php');
                      $no = 1;
                      $query = mysqli_query($con,"SELECT * FROM tbl_parkir");
                      while($row = mysqli_fetch_array($query)){
                  ?>
                  <tr>
                      <td><?php echo $no++ ?></td>
                      <td style="text-transform: uppercase"><?php echo $row['nomor_plat'] ?></td>
                      <td><?php echo $row['jenis_kendaraan'] ?></td>
                      <td><img src="kumpulan-gambar/<?php echo $row['gambar'] ?>" alt="" width="50px"></td>
                      <td><?php echo $row['jam_masuk'] ?></td>
                      <td><?php echo $row['jam_keluar'] ?></td>
                      <td class="text-center">
                        <a href="update-jam-keluar.php?id=<?php echo $row['id_parkir'] ?>" class="btn btn-sm btn-primary">UPDATE JAM KELUAR</a>
                        <a href="hapus-parkir.php?id_parkir=<?php echo $row['id_parkir'] ?>" class="btn btn-sm btn-danger">HAPUS</a>
                        <a href="edit.php?id_parkir=<?php echo $row['id_parkir'] ?>" class="btn btn-sm btn-success">EDIT</a>
                      </td>
                  </tr>
                <?php } ?>
                </tbody>
              </table>
            </div>
          </div>
        </div>
      </div>
    </div>
    <script src="https://code.jquery.com/jquery-3.4.1.slim.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js"></script>
    <script src="//cdn.datatables.net/1.10.20/js/jquery.dataTables.min.js"></script>
    <script>
      $(document).ready( function () {
          $('#myTable').DataTable();
      } );
    </script>
  </body>
</html>