<?php
include "koneksi.php";
 $nama=$_POST['nama'];
 $posisi=$_POST['posisi'];
 $tgl=date('Y/m/d', strtotime($_POST['tglseleksi']));
 $waktu=$_POST['waktuseleksi'];
 $tes=$_POST['tes'];
 $wawancara=$_POST['wawancara'];
 $hasil=$_POST['hasil'];
 $ket=$_POST['ket'];

$simpan= mysql_query("INSERT INTO seleksi values (null,'$nama','$posisi','$tgl','$waktu','$tes','$wawancara','$hasil','$ket')");
   
if($simpan){
   echo"<script>alert('Data Berhasil Disimpan');</script>";
   echo"<meta http-equiv='refresh' content= '0 ; url=tampilseleksi.php'>";
 }
 else{
   echo"<script>alert('Data gagal disimpan!');</script>";
}
?>