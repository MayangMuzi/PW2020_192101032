<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Test Penyisipan PHP Pada HTML</title>
</head>

<body>
  <br>Kapal asing, silahkan identifikasi diri anda!

  <?php
  //Berikut ini adalah inisiasi beberapa variable
  $namad = "Jean";
  $namat = "Luc";
  $namab = "Piccard";

  $nilai1 = 25;
  $nilai2 = 50;
  $hasil = $nilai1 * $nilai2;

  $a = 2;
  $b = 3;
  $hsl = ($a ^ $b);
  ?>

  <b> Ini adalah kapal federasi planet mars
    <br>
    <?php
    echo "Saya $namab, $namad, $namat, kapten kapal. </b> </br>";
    echo "$nilai1 * $nilai2 = $hasil <br>";
    echo "$a ^ $b = $hsl";

    ?>
</body>

</html>