<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Distribusi</title>
</head>

<body>
  <div class="container">
    <div class="jumbotron mt-3">
      <h5 class="display-8">Distribusi LKS</h5>
    </div>
  </div>

  <!--NAMA SEKOLAH, KELAS, JUMLAH.-->
  <form>
    <hr>
    <div class="container">
      <pre>
      Nama Sekolah          : <input type="text" size="50" name="namasekolah"> 

      Kelas                 : <input type="radio" name="kelas" value="1"> 1 <input type="radio" name="kelas" value="2"> 2 <input type="radio" name="kelas" value="3"> 3 <input type="radio" name="kelas" value="4"> 4 <input type="radio" name="kelas" value="5"> 5 <input type="radio" name="kelas" value="6"> 6
 
      Jumlah                : <input type="text" size="25" name="jumlah"> 
    </pre>
    </div>

  </form>

  <div class="container">
    <div class="jumbotron mt-3">
      <h5 class="display-8">Data Distribusi</h5>
    </div>
  </div>

  <div class="container">
    <div class="jumbotron mt-3">
      <table border="1" width="100%">
        <tr>
          <th width="5%">No</th>
          <th width="15%">Nama Sekolah</th>
          <th width="15%">Kelas</th>
          <th width="15%">Jumlah</th>
          <th width="15%">Action</th>
          <br>
        </tr>
      </table>
      <table border="1" width="100%">
        <tr>
          <td rowspan="2"><br></td>
        </tr>
      </table>
    </div>
  </div>

  <br>
  <input type="button" value="Edit">
  <input type="reset" value="Hapus">

</body>

</html>