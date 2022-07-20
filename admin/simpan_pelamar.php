<?php
include "koneksi.php";
 $id=$_POST['id'];
 $nama=$_POST['nama'];
 $lahir=$_POST['tgl'];
 $gender=$_POST['rb_pilihan'];
 $alamat=$_POST['alamat'];
 $no=$_POST['no_tlp'];
 $pendidikan=$_POST['pendidikan'];
 $posisi=$_POST['posisi'];
$tgl1=date('Y/m/d');
$simpan=mysql_query ("INSERT INTO pelamar values('$id','$nama','$lahir','$gender','$alamat','$no','$pendidikan','$posisi','$tgl1')");
   
if($simpan){
   echo"<script>alert('Data Berhasil Disimpan');</script>";
   echo"<meta http-equiv='refresh' content= '0 ; url= tampilpelamar.php'>";
 }
 else{
   echo"<script>alert('Data gagal disimpan!');</script>";
}
?>