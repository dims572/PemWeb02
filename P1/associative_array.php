<?php
// $profilArray = [
//     "nama" => "Dimas Julian <br>",
//     "kelas" => "SI14"];

// print_r($profilArray);

$profilMultiArray = [
    [
        'nama' => 'Ucok',
        'kelas' => 'XMM'
    ], [
        'nama' => 'Udin',
        'kelas' => 'XAP'
    ], [
        'nama' => 'Ujang',
        'kelas' => 'XTKJ'
    ]
    ];

foreach($profilMultiArray as $profil) {
    echo $profil['nama'] ."<br>";
}