<?php

// inisiasi variable yang digunakan

// nama peralatan
$brg1 = "Buku";
$brg2 = "Mouse";
$brg3 = "Flashdisk";
$brg4 = "Pulpen";

// harga per unit peralatan
$harga1 = 17500;
$harga2 = 30000;
$harga3 = 70000;
$harga4 = 22300;

//jumlah peralatan yang ada
$jmlbrg1 = 2;
$jmlbrg2 = 5;
$jmlbrg3 = 1;
$jmlbrg4 = 3;

//total harga per jenis peralatan
$th1 = $jmlbrg1 * $harga1;
$th2 = $jmlbrg2 * $harga2;
$th3 = $jmlbrg3 * $harga3;
$th4 = $jmlbrg4 * $harga4;


// hitung grand total nilai peralatan
$tharga = $th1 + $th2 + $th3 + $th4;

// besar diskon
$diskon = 5;

//jumlah total diskon yang diberikan
$tdiskon = ($diskon * $tharga) / 100;

//jumlah yang harus dibayar
$tdibayar = $tharga - $tdiskon;
