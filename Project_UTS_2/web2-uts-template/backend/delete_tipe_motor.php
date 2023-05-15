<?php

include '../database/dbkoneksi.php';

$query = "DELETE FROM tipe_motor WHERE id=?";
$data = $dbh->prepare($query);
$data->execute(array($_GET['iddel']));

header("location: tipe_motor.php");