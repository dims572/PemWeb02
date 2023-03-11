<?php

function hitungUmur($tahunLahir){
    $tahunSekarang = 2023;
    echo $tahunSekarang - $tahunLahir;
}

hitungUmur(2001);
echo "<br>";
hitungUmur(2003);
echo "<br>";
hitungUmur(2005);
echo "<br>";
hitungUmur(2007);
echo "<br>";

function welcome($nama = "dims"){
    echo "Hello, selamat datang $nama !";
}

welcome("ucok");
echo "<br>";
welcome("udin");