<?php
echo "<br><br>"; 

$pattern = '/go{1,2}d/'; 
$text = 'god is good.';
if (preg_match($pattern, $text, $matches)) {
    echo "Cocokkan (Soal 5.6): " . $matches[0];
} else {
    echo "Tidak ada yang cocok! (Soal 5.6)";
}
?>