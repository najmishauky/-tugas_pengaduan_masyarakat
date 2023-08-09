<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="bootstrap-5.3.1-dist/css/bootstrap.min.css">
</head>
<body>
<div class="p-3 mb-2 bg-primary text-white">.bg-primary</div>
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
<div class="mb-3">
    <p>"Berikan pendapat Anda dengan jujur tentang apa yang Anda lihat"</p>
  <label for="exampleFormControlTextarea1" class="form-label" >Pesan Pengaduan</label>
  <textarea class="form-control" id="exampleFormControlTextarea1" rows="3" placeholder="Ketik Di sini....."></textarea>
</div>
<div class="mb-3">
  <label for="formFile" class="form-label">Bukti Foto</label>
  <input class="form-control" type="file" id="formFile">
</div>
</div>
<br>
<br>
<br>
<div class="d-grid gap-2 col-6 mx-auto">
  <button class="btn btn-primary" type="button">Kirim</button>
</div>
<script src="bootstrap-5.3.1-dist/js/bootstrap.min.js"></script>
</body>
</html>