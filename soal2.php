<?php
// Variabel berisi JSON
$json_string = '{"nama":"Budi","umur":30,"hobi":["membaca","bermain game","menulis"]}';

// Dekode JSON menjadi objek PHP
$obj = json_decode($json_string);

// Dekode JSON menjadi array PHP
$arr = json_decode($json_string, true);

// Akses nilai pada objek
echo "Nama: " . $obj->nama . "<br>";
echo "Umur: " . $obj->umur . "<br>";
echo "Hobi pertama: " . $obj->hobi[0] . "<br>";

// Akses nilai pada array
echo "Nama: " . $arr['nama'] . "<br>";
echo "Umur: " . $arr['umur'] . "<br>";
echo "Hobi kedua: " . $arr['hobi'][1] . "<br>";