<?php
$numbers = [1, 2, 3, 4, 5];
$target = 3;

$index = array_search($target, $numbers);

if ($index !== false) {
    echo "Target telah tercapai pada indeks nomor $index";
} else {
    echo "Target tidak ditemukan dalam array";
}
?>
