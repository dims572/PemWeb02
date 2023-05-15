<?php 
require_once '../database/dbkoneksi.php';
?>
<?php 
   $_nama_motor = $_POST['nama_motor'];
   $_cc = $_POST['cc'];
   $_harga = $_POST['harga'];
   $_stok = $_POST['stok'];

   $_proses = $_POST['proses'];

   // array data
   $ar_data[]=$_nama_motor; // ? 1
   $ar_data[]=$_cc; // ? 2
   $ar_data[]=$_harga;// 3
   $ar_data[]=$_stok;

   if($_proses == "Simpan"){
    // data baru
    $sql = "INSERT INTO motor (nama_motor,cc,harga,stok) VALUES (?,?,?,?)";
   }else if($_proses == "Update"){
    $ar_data[]=$_POST['idedit'];// ? 8
    $sql = "UPDATE motor SET nama_motor=?,cc=?,harga=?,stok=? WHERE id=?";
   }
   if(isset($sql)){
    $st = $dbh->prepare($sql);
    $st->execute($ar_data);
   }

  header('location: index.php');
?>