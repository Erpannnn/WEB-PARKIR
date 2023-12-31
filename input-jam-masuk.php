<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css">
    <title>App Parkir Online</title>
  </head>
  <body style="background-image: url('assets/bg-parkir.jpg'); background-size: cover; background-repeat: no-repeat; background-attachment: fixed;">
    <div class="container" style="margin-top: 80px">
      <div class="row">
        <div class="col-md-8 offset-md-2">
          <div class="card">
            <div class="card-header">
              INPUT JAM MASUK
            </div>
            <div class="card-body">
              <form action="simpan-parkir.php" method="POST" enctype="multipart/form-data">
                <div class="form-group">
                  <label>Plat Nomor :</label>
                  <input type="text" name="nomor_plat" placeholder="Masukkan Nomor Plat" class="form-control" style="text-transform: uppercase">
                </div>
                <div class="form-group">
                  <label>Jenis Kendaraan :</label>
                  <br>
                  <select name="jenis_kendaraan" id="jenis_kendaraan">
                    <option value="Motor">Motor</option>
                    <option value="Mobil">Mobil</option>
                  </select>
                </div>

                <div class="form-group">
                  <label>Upload foto :</label>
                  <input type="file" name="foto" placeholder="Masukkan Nomor Plat" class="form-control">
                </div>
                <button type="submit" class="btn btn-success">SIMPAN</button>
                <button type="reset" class="btn btn-warning">RESET</button>
              </form>
            </div>
          </div>
        </div>
      </div>
    </div>
    <script src="https://code.jquery.com/jquery-3.4.1.slim.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js"></script>
  </body>
</html>