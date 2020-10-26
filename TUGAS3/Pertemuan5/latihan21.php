<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Document</title>
</head>

<body>
  <form>
    Masukkan Bilangan Pertama : <br>
    <input type="text" name="A" size=10> <br>

    Masukkan Bilangan Kedua : <br>
    <input type="text" name="B" size=10> <br>

    <input type="submit" value="hitung">
  </form>

  <!membandingkan 2 buah bilangan yang diinput>

    <?php
    $A = $_POST["A"];
    $B = $_POST["B"];

    function jumlah($A, $B)
    {
      $jumlahbil = $A + $B;
      return $jumlahbil;
    }
    function kurang($A, $B)
    {
      $kurangbil = $A - $B;
      return $kurangbil;
    }
    function kali($A, $B)
    {
      $kalibil = $A * $B;
      return $kalibil;
    }
    function bagi($A, $B)
    {
      $bagibil = $A / $B;
      return $bagibil;
    }

    echo "<br>";
    echo ("Bilangan Pertama : ");
    echo $A;
    echo "<br>";
    echo ("Bilangan Kedua : ");
    echo $B;
    echo "<br> <br>";

    echo "Hasil Penjumlahan 2 buah bilangan ";
    echo "<br>";
    $jumlahbil = jumlah($A, $B);
    printf(
      "Penjumlahan antara : %d + %d = %d ",
      $A,
      $B,
      $jumlahbil
    );

    echo "<br><br>";
    echo "Hasil Pengurangan 2 buah bilangan ";
    echo "<br>";
    $kurangbil = kurang($A, $B);
    printf(
      "Pengurangan antara : %d - %d = %d ",
      $A,
      $B,
      $kurangbil
    );

    echo "<br><br>";
    echo "Hasil Perkalian 2 buah bilangan ";
    echo "<br>";
    $kalibil = kali($A, $B);
    printf(
      "Perkalian antara : %d * %d = %d ",
      $A,
      $B,
      $kalibil
    );
    echo "<br><br>";
    echo "Hasil Pembagian 2 buah bilangan ";
    echo "<br>";
    $bagibil = bagi($A, $B);
    Printf("Pembagian antara : %d / %d = %d ", $A, $B, $bagibil);
    echo "<br><br>";
    ?>
</body>

</html>