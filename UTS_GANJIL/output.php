<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Document</title>
</head>
<style TYPE="text/css">
  body {
    font-size: 10pt;
  }

  table {
    font-size: 16pt;
  }
</style>

<body>
  <form>
    <h1>
      <p align="center">
        <font color="black">Nusantara Computer Center</font><br />
    </h1>
    <h4>
      <p align="center">
        <font color="black">Kode Pendaftaran : ................................</font><br />
    </h4>

    <br>
    Nama :.......................................................
    Jenis Kursus :.........................................................
    <br>
    Kelas :.......................................................
    No Urut :................................................................
    <br>
    Hasil Test :................................................
    Hari :......................................................................
    <br>
    Jumlah Peserta :.........................................orang
    Jumlah Pertemuan :.................................kali
    <br>
    Biaya Kursus :...........................................
    Biaya Tambahan :....................................................
    <br>
    Biaya Subsidi :..........................................
    Biaya yang Dibayar :................................................
  </form>
  <br>
  <center>
    <font face="comic sans serif" size=5 color="black">Nusantara Computer System</font>
    <table border="1" cellspacing="0" cellpadding="1">

      <tr>
        <td colspan="4" align="center" vlagin="middle">
          <b>Kursus 2020</b>
        </td>
      </tr>


      <tr>
        <td><b>Kode</b></td>
        <td><b>Kelas</b></td>
        <td><b>Biaya</b></td>
        <td><b>Jenis Kursus</b></td>
      </tr>

      <?php
      //Mulai Untuk Mengisi Tabel Daftar Dengan Data Yang Ada
      ?>
      <tr>
        <?php
        $vb = "Visual Basic";
        $dp = "Delphi";
        $lx = "Linux";
        $bk1 = "750.000";
        $bk2 = "650.000";
        $bk3 = "800.000";
        $jk1 = "Pemrograman";
        $jk2 = "Pemrograman";
        $jk3 = "Sistem Operasi";
        $h1 = "1";
        $h2 = "1";
        $h3 = "1";



        ?>
        <td align="left"><?php echo $vb; ?></td>
        <td align="left"><?php echo $vb; ?></td>
        <td align="left"><?php echo $bk1; ?></td>
        <td align="left"><?php echo $jk1; ?></td>

      </tr>

      <tr>
        <?php
        $vb = "Visual Basic";
        $dp = "Delphi";
        $lx = "Linux";
        $bk1 = "750.000";
        $bk2 = "650.000";
        $bk3 = "800.000";
        $jk1 = "Pemrograman";
        $jk2 = "Pemrograman";
        $jk3 = "Sistem Operasi";
        $h1 = "1";
        $h2 = "1";
        $h3 = "1";


        ?>
        <td align="left"><?php echo $dp; ?></td>
        <td align="left"><?php echo $dp; ?></td>
        <td align="left"><?php echo $bk2; ?></td>
        <td align="left"><?php echo $jk2; ?></td>

      </tr>

      <tr>
        <?php
        $vb = "Visual Basic";
        $dp = "Delphi";
        $lx = "Linux";
        $bk1 = "750.000";
        $bk2 = "650.000";
        $bk3 = "800.000";
        $jk1 = "Pemrograman";
        $jk2 = "Pemrograman";
        $jk3 = "Sistem Operasi";
        $h1 = "3";
        $h2 = "3";
        $h3 = "3";


        ?>
        <td align="left"><?php echo $lx; ?></td>
        <td align="left"><?php echo $lx; ?></td>
        <td align="left"><?php echo $bk3; ?></td>
        <td align="left"><?php echo $jk3; ?></td>

      </tr>
      <tr>
        <?php
        $tharga = $bk1 * $h1;
        $tharga = $bk2 * $h2;
        $tharga = $bk3 * $h3;
        ?>
        <td colspan="3" align="right">Total Harga</td>
        <td align="right">
          <?php echo $tharga; ?></td>
      </tr>

      <tr>
        <?php
        $diskon1 = "5%";
        $diskon2 = "2%";
        $tdiskon = "Total Diskon";
        ?>
        <td colspan="3" align="right">
          <?php
          $tdiskon = ($diskon1 * $tharga) / 100;
          echo "( $tdiskon %)";
          ?>
        </td>
        <td align="right"><?php echo $tdiskon; ?></td>
      </tr>

      <tr>
        <?php
        $tdibayar = $tharga - $tdiskon;
        ?>
        <td colspan="3" align="right">Jumlah harus dibayar</td>
        <td align="right"><?php echo $tdibayar; ?>
        </td>
      </tr>

    </table>
  </center>
</body>

</html>