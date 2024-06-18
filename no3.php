<?php
$numbers = [1, 4, 5, 6];
$target = 2;

$index = array_search($target, $numbers);

if ($index !== false) {
    echo "Target telah tercapai pada indeks nomor $index";
} else {
    echo "Target tidak ditemukan dalam data array";
}
?>
