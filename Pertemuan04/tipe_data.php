<?php

// Tipe Data Integer
echo "<b>--- Tipe Data Integer ---</b><br>";
$a = 10;
$b = 5;
$c = $a + 5;
$d = $b + (10 * 5);
$e = $d - $c;

echo "Variabel a: {$a} <br>";
echo "Variabel b: {$b} <br>";
echo "Variabel c: {$c} <br>";
echo "Variabel d: {$d} <br>";
echo "Variabel e: {$e} <br>";
var_dump($e);
echo "<br><br>";

// Tipe Data Float
echo "<b>--- Tipe Data Float ---</b><br>";
$nilaiMatematika = 5.1;
$nilaiIPA = 6.7;
$nilaiBahasaIndonesia = 9.3;
$rataRata = ($nilaiMatematika + $nilaiIPA + $nilaiBahasaIndonesia) / 3;

echo "Matematika: {$nilaiMatematika} <br>";
echo "IPA: {$nilaiIPA} <br>";
echo "Bahasa Indonesia: {$nilaiBahasaIndonesia} <br>";
echo "Rata-rata: {$rataRata} <br>";
var_dump($rataRata);
echo "<br><br>";

// Tipe Data Boolean
echo "<b>--- Tipe Data Boolean ---</b><br>";
$apakahSiswaLulus = true;
$apakahSiswaSudahUjian = false;
var_dump($apakahSiswaLulus);
echo "<br>";
var_dump($apakahSiswaSudahUjian);
echo "<br><br>";

// Tipe Data String
echo "<b>--- Tipe Data String ---</b><br>";
$namaDepan = "Ibnu";
$namaBelakang = 'Jakaria';

$namaLengkap = "{$namaDepan} {$namaBelakang}";
$namaLengkap2 = $namaDepan . ' ' . $namaBelakang;

echo "Nama Depan: {$namaDepan} <br>";
echo "Nama Belakang: " . $namaBelakang . "<br>";
echo "Nama Lengkap: {$namaLengkap} <br><br>";

// Tipe Data Array
echo "<b>--- Tipe Data Array ---</b><br>";
$listMahasiswa = ["Wahid Abdullah", "Elmo Bachtiar", "Lendis Fabri"];
echo "Mahasiswa pertama: " . $listMahasiswa[0];


?>