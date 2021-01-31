<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Halaman <?= $data['judul']; ?></title>
  <link rel="stylesheet" href="<?= BASEURL; ?> /css/bootstrap.css">
</head>

<body>
  <div class="container">
    <div class="jumbotron mt-3">
      <h3 class="display-6">DATA LOGISTIK LEMBAR KERJA SISWA (LKS)</h3>
      <h5 class="display-8">Programmer : Mayang Muzi
      </h5>
    </div>
  </div>


  <nav class="navbar navbar-expand-lg navbar-light bg-light">
    <div class="container">
      <a class="navbar-brand" href="<?= BASEURL; ?>">PHP MVC</a>
      <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNavAltMarkup" aria-controls="navbarNavAltMarkup" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
      <div class="collapse navbar-collapse" id="navbarNavAltMarkup">
        <div class="navbar-nav">
          <a class="nav-link active" href="<?= BASEURL; ?>">Input Stock</a>
          <a class="nav-link" href="<?= BASEURL; ?>/mahasiswa">Distribusi</a>
          <a class="nav-link" href="<?= BASEURL; ?>/about">Check Stock</a>
        </div>
      </div>
    </div>
  </nav>
</body>

</html>