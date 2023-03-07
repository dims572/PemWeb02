<?php
$username = $_POST['username'];
$password = $_POST['password'];

if($username == "Dims" && $password == "dims"){
    echo "Login Berhasil";
} else {
    echo "Login Gagal";
}