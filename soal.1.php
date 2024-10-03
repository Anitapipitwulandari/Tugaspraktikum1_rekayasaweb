<?php
// Membuat variabel array
$data = array(
    "nama" => "John Doe",
    "umur" => 30,
    "kota" => "Jakarta",
    "hobi" => array("membaca", "bermain game", "menonton film")
);

// Meng-encode array menjadi JSON
$json_data = json_encode($data);

// Menampilkan data JSON
echo $json_data;