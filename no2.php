<?php
$numbers = [2, 5, 3, 4, 6];
$target = 4;

$index = array_search($target, $numbers);

if ($index !== false) {
    echo "Target telah tercapai pada indeks nomor $index";
} else {
    echo "Target tidak ditemukan dalam array";
}
?>
