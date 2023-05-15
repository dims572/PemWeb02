<?php

include '../database/dbkoneksi.php';

$query = "DELETE FROM motor WHERE id=?";
$data = $dbh->prepare($query);
$data->execute(array($_GET['iddel']));

header("location: index.php");