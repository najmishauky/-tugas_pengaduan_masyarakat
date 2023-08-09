<?php

$koneksi = new PDO("mysql:host=localhost;dbname=pengaduan_masyarakat", "root", "");

$query = $koneksi->query("select * from pengaduan");
$data = $query->fetchAll();

var_dump($data);

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="bootstrap-5.3.1-dist/css/bootstrap.min.css">
    
</head>
<body>
    <nav class="navbar navbar-dark bg-dark fixed-top">
        <div class="container-fluid">
          <a class="navbar-brand" href="#">Pengaduan Masyarakat</a>
          <button class="navbar-toggler" type="button" data-bs-toggle="offcanvas" data-bs-target="#offcanvasDarkNavbar" aria-controls="offcanvasDarkNavbar" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
          </button>
          <div class="offcanvas offcanvas-end text-bg-dark" tabindex="-1" id="offcanvasDarkNavbar" aria-labelledby="offcanvasDarkNavbarLabel">
            <div class="offcanvas-header">
              <h5 class="offcanvas-title" id="offcanvasDarkNavbarLabel">Dark offcanvas</h5>
              <button type="button" class="btn-close btn-close-white" data-bs-dismiss="offcanvas" aria-label="Close"></button>
            </div>
            <div class="offcanvas-body">
              <ul class="navbar-nav justify-content-end flex-grow-1 pe-3">
                <li class="nav-item">
                  <a class="nav-link active" aria-current="page" href="#">Home</a>
                </li>
                <li class="nav-item">
                  <a class="nav-link active" aria-current="page" href="#">Buat Pengaduan</a>
                </li>
              </ul>
            </div>
          </div>
        </div>
      </nav>
      <br>
      <br>
      <br>
      <br>
    <div class="container">
      <table class="table">
        <thead>
          <tr>
            <th scope="col">no</th>
            <th scope="col">isi laporan</th>
            <th scope="col">Bukti Foto</th>
            <th scope="col">Aksi</th>
            <th scope="col">Status</th>
          </tr>
        </thead>
        <tbody class="table-group-divider">
          <?php foreach($data as $pengaduan){ ?>
          <tr>
            <th scope="row">1</th>
            <td><?=$pengaduan['isi_laporan'] ?></td>
            <td><?=$pengaduan['foto'] ?></td>
            <td><input type="button" value="detail" class="button"></td>
            <td><?=$pengaduan['status'] ?></td>
          </tr>
          <?php } ?>
        </tbody>
      </table>
    </div>
      <script src="bootstrap-5.3.1-dist/js/bootstrap.min.js"></script>
      <link rel="stylesheet" href="bootstrap-5.3.1-dist/css/bootstrap.min.css">
    </body>
</html>