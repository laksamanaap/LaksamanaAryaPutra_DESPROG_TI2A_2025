<?php
// Struktur Kontrol If-Elseif-Else
echo "<b> --- Struktur If-Elseif-Else --- <br></b>";
$nilaiNumerik = 92;

if ($nilaiNumerik >= 90 && $nilaiNumerik <= 100) {
    echo "Nilai huruf: A";
} elseif ($nilaiNumerik >= 80 && $nilaiNumerik < 90) {
    echo "Nilai huruf: B";
} elseif ($nilaiNumerik >= 70 && $nilaiNumerik < 80) {
    echo "Nilai huruf: C";
} elseif ($nilaiNumerik < 70) {
    echo "Nilai huruf: D";
}
echo "<br>" . "<br>";

// Perulangan While
echo "<b> --- Perulangan While --- <br></b>";
$jarakSaatIni = 0;
$jarakTarget = 500;
$peningkatanHarian = 30;
$hari = 0;

while ($jarakSaatIni < $jarakTarget) {
    $jarakSaatIni += $peningkatanHarian;
    $hari++;
}
echo "Atlet tersebut memerlukan $hari hari untuk mencapai jarak 500 kilometer.";
echo "<br>" . "<br>";

// Perulangan For
echo "<b>--- Perulangan For --- <br></b>";
$jumlahLahan = 10;
$tanamanPerLahan = 5;
$buahPerTanaman = 10;
$jumlahBuah = 0;

for ($i = 1; $i <= $jumlahLahan; $i++) {
    $jumlahBuah += ($tanamanPerLahan * $buahPerTanaman);
}
echo "Jumlah buah yang akan dipanen adalah: $jumlahBuah";
echo "<br>" . "<br>";

// Perulangan Foreach
echo "<b> --- Perulangan Foreach --- <br></b>";
$skorUjian = [85, 92, 78, 96, 88];
$totalSkor = 0;

foreach ($skorUjian as $skor) {
    $totalSkor += $skor;
}
echo "Total skor ujian adalah: $totalSkor";
echo "<br>" . "<br>";

// Perulangan Foreach dengan Continue
echo "<b>--- Perulangan Foreach dengan Continue --- <br></b>";
$nilaiSiswa = [85, 92, 58, 64, 90, 55, 88, 79, 70, 96];

foreach ($nilaiSiswa as $nilai) {
    if ($nilai < 60) {
        echo "Nilai: $nilai (Tidak lulus) <br>";
        continue;
    }
    echo "Nilai: $nilai (Lulus) <br>";
}
echo "<br>". "<br>";

// 4.6
$nilaiSiswa = [85, 92, 78, 64, 90, 75, 88, 79, 70, 96];

sort($nilaiSiswa);

$nilaiYangDigunakan = array_slice($nilaiSiswa, 2, -2);

$totalNilai = array_sum($nilaiYangDigunakan);

echo "Daftar nilai yang digunakan: " . implode(', ', $nilaiYangDigunakan) . "<br>";
echo "Total nilai setelah mengabaikan dua nilai tertinggi dan dua terendah adalah: $totalNilai" . "<br>" . "<br>";

// 4.7
$hargaAwal = 120000;
$hargaSetelahDiskon = $hargaAwal;

if ($hargaAwal > 100000) {
    $diskon = $hargaAwal * 0.20; // 20% diskon
    $hargaSetelahDiskon = $hargaAwal - $diskon;
}

echo "Harga yang harus dibayar setelah mendapatkan diskon adalah: Rp " . number_format($hargaSetelahDiskon, 0, ',', '.') . "<br> " . "<br> ";

// 4.8
$poin = 650; 

$dapatHadiah = ($poin > 500) ? "YA" : "TIDAK";

echo "Total skor pemain adalah: $poin <br>";
echo "Apakah pemain mendapatkan hadiah tambahan? $dapatHadiah";

?>