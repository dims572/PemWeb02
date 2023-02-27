<?php
$arrayBuah = ["Naga", "Jeruk", "Apel", "Anggur", "Durian"];

//mengurutkan value dari array
sort($arrayBuah);

//menghapus value array paling akhir
array_pop($arrayBuah);

//menghapus spesifik value pada array
unset($arrayBuah[2]);

//menambahkan value array paling akhir
array_push($arrayBuah, "Nanas");

//menghapus value paling awal
array_shift($arrayBuah);

//menambahkan value array paling depan
array_unshift($arrayBuah);

//mengubah value array tertentu
$arrayBuah[2] = "Pisang";

foreach($arrayBuah as $buah){
    echo $buah . "<br>";
}