<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Halaman Home</title>
</head>

<body>
  <div class="container">
    <div class="jumbotron mt-3">
      <h5 class="display-8">Form Input Stock LKS</h5>
    </div>
  </div>

  <!--KELAS, JUMLAH, HARGA.-->
  <form>
    <hr>
    <div class="container">
      <pre>
      Kelas            : <select name=kelas>
        <option value="1">1</option>
        <option value="2">2</option>
        <option value="3">3</option>
        <option value="4">4</option>
        <option value="5">5</option>
        <option value="6">6</option>
      </select> 

      Jumlah           : <input type="text" size="11" name="jumlah">

      Harga            : <input type="text" size="11" name="harga"> 
    </pre>
    </div>

  </form>

  <div class="container">
    <div class="jumbotron mt-3">
      <h5 class="display-8">Data Stock LKS</h5>
    </div>
  </div>

  <div class="container">
    <div class="jumbotron mt-3">
      <table border="1" width="100%">
        <tr>
          <th width="5%">No</th>
          <th width="15%">Kelas</th>
          <th width="15%">Jumlah</th>
          <th width="15%">Harga</th>
          <th width="15%">Nilai Persediaan</th>
          <th width="15%">Action</th>
          <br>
        </tr>
      </table>

      <table border="1" width="100%">
        <tr>
          <td colspan="1"><br></td>
        </tr>
      </table>
    </div>
  </div>

  <br>
  <input type="button" value="Edit">
  <input type="reset" value="Hapus">
  <div class="container">
    <div class="container">
      <pre>
      Jumlah LKS Seluruh                : <input type="text" size="11" name="jumlahlks">

      Total Nilai Persediaan            : <input type="text" size="11" name="totalnilai"> 
    </pre>
    </div>
</body>


</html>