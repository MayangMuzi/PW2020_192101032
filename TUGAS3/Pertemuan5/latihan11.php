<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Penggunaan Switch-Case</title>
</head>

<body>
  <?php
  $nama_hari = date("l");
  switch ($nama_hari) {
    case "Sunday";
      print("Minggu");
      print "Waktu untuk istirahat";
      break;
    case "Monday";
      print("Senin <br>");
      print "Meeting awal minggu jam 08.00";
      break;
    case "Tuesday";
      print("Selasa <br>");
      print "Pembukaan Workshop Diklat";
      break;
    case "Wednesday";
      print("Rabu <br>");
      print("Seminar Launchig Window Vista di JHCC");
      break;
    case "Thrusday";
      print("Kamis <br>");
      print "Pertemuan dengan Mahasiswa";
      break;
    case "Friday";
      print("Jum’at <br>");
      print "Jogging bersama";
      break;
    default:
      print("Sabtu <br>");
      print "Survey harga ke Dusit, Mangga Dua";
  } ?>
</body>

</html>