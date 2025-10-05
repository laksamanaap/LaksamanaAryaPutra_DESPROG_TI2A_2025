<?php
// Soal 3.1: Operator Aritmatika
echo "<b>--- Operator Aritmatika ---</b><br>";
$a = 10;
$b = 5;

echo "a = $a, b = $b<br>";
echo "Hasil Tambah: " . ($a + $b) . "<br>";
echo "Hasil Kurang: " . ($a - $b) . "<br>";
echo "Hasil Kali: " . ($a * $b) . "<br>";
echo "Hasil Bagi: " . ($a / $b) . "<br>";
echo "Sisa Bagi: " . ($a % $b) . "<br>";
echo "Pangkat: " . ($a ** $b) . "<br><br>";

// Soal 3.2: Operator Pembanding
echo "<b>--- Operator Pembanding ---</b><br>";
echo "a == b : "; var_dump($a == $b); echo "<br>";
echo "a != b : "; var_dump($a != $b); echo "<br>";
echo "a > b  : "; var_dump($a > $b); echo "<br><br>";

// Soal 3.3: Operator Logika
echo "<b>--- Operator Logika ---</b><br>";
$hasilAnd = $a && $b;
$hasilOr = $a || $b;
$hasilNotA = !$a;
$hasilNotB = !$b;

echo "true && true : " . ($hasilAnd ? 'true' : 'false') . "<br>";
echo "true || true : " . ($hasilOr ? 'true' : 'false') . "<br>";
echo "!true : " . ($hasilNotA ? 'true' : 'false') . "<br>". "<br>";

// Soal 3.4: Operator Penugasan
echo "<b>--- Operator Penugasan --- <br></b>";
$a_penugasan = 10;
$a_penugasan += $b; echo "Nilai a setelah a += b adalah $a_penugasan <br>";
$a_penugasan = 10;
$a_penugasan -= $b; echo "Nilai a setelah a -= b adalah $a_penugasan <br>";
$a_penugasan = 10;
$a_penugasan *= $b; echo "Nilai a setelah a *= b adalah $a_penugasan <br>";
$a_penugasan = 10;
$a_penugasan /= $b; echo "Nilai a setelah a /= b adalah $a_penugasan <br>";
$a_penugasan = 10;
$a_penugasan %= $b; echo "Nilai a setelah a %= b adalah $a_penugasan <br>". "<br>";

// Soal 3.5: Operator Identitas
echo "<b>--- Operator Identitas --- <br> </b>";
$hasilIdentik = $a === $b;
$hasilTidakIdentik = $a !== $b;

echo "10 === 5 : " . ($hasilIdentik ? 'true' : 'false') . "<br>";
echo "10 !== 5 : " . ($hasilTidakIdentik ? 'true' : 'false') . "<br>" . "<br>";

// Soal 3.6
$totalKursi = 45;
$kursiDitempati = 28;
$kursiKosong = $totalKursi - $kursiDitempati;
$persentaseKosong = ($kursiKosong / $totalKursi) * 100;
echo "Persentase kursi yang masih kosong di restoran tersebut adalah " . number_format($persentaseKosong, 2) . "%";

?>