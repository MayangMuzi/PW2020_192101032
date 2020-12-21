<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Halaman Mahasiswa</title>
</head>

<body>
  <div class="container mt-5">
    <div class="row">
      <div class="col-6">
        <div class="row">
          <div class="col-lg-6"> <?php Flasher::flash(); ?> </div>
        </div>
        <!-- Modal -->
        <div class="modal fade" id="formModal" tabindex="-1" aria-labelledby="judlModal" aria-hidden="true">
          <div class="modal-dialog">
            <div class="modal-content">
              <div class="modal-header">
                <h5 class="modal-title" id="judulModal">Tambah Data Mahasiswa</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close">
                </button>
              </div>
              <div class="modal-body">
                <form action="<?= BASEURL; ?>/mahasiswa/tambah" method="post">

                  <div class="form-group">
                    <label for="nama">Nama</label>
                    <input type="text" class="form-control" id="nama" name="nama">
                  </div>

                  <div class="form-group"> <label for="nim">NIM</label>
                    <input type="number" class="form-control" id="nim" name="nim">
                  </div>

                  <div class="form-group"> <label for="email">Email</label>
                    <input type="email" class="form-control" id="email" name="email">
                  </div>

                  <div class="form-group">
                    <label for="jurusan">Jurusan</label>
                    <select class="form-control" name="jurusan" id="jurusan">
                      <option value="Teknik Informatika">Teknik Informatika</option>
                      <option value="Sistem Informasi">Sistem Informasi</option>
                      <option value="Teknik Industri">Teknik Industri</option>
                      <option value="Teknik Kimia">Teknik Kimia</option>
                      <option value="Teknik Elektro">Teknik Elektro</option>
                    </select>
                  </div>
              </div>

              <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                <button type="submit" class="btn btn-primary">Simpan</button>
                </form>
              </div>
            </div>
          </div>
        </div>

        <!-- Button trigger modal -->
        <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#formModal">
          Tambah Data Mahasiswa </button>
        <br><br>

        <h3>Daftar Mahasiswa</h3>
        <ul class="list-group">
          <?php foreach ($data['mhs'] as $mhs) : ?>
            <li class="list-group-item list-group-item d-flex justify-content-between align-items-center">
              <?= $mhs['nama']; ?>
              <a href="<?= BASEURL; ?>/mahasiswa/detail/<?= $mhs['id']; ?>" class="badge badge-primary">detail</a>
            </li>
          <?php endforeach; ?>
        </ul>
      </div>
    </div>
  </div>


</body>

</html>