<?php
include "koneksi.php";
 $nik=$_POST['txt_nik'];
 $nama=$_POST ['txt_nama'];
  $tgl=$_POST['txt_tgl'];
  $gender= $_POST['rb_pilihan'];
  $alamat=$_POST['alamat'];
  $tlp=$_POST['tlp'];
 $jabatan=$_POST['lm_kode'];
  $nama_file=$_FILES['foto']['name'];
  $link_awal=$_FILES['foto']['tmp_name'];
  move_uploaded_file($link_awal,"gambar/$nama_file");

$simpan=mysql_query("INSERT INTO karyawan values ('$nik','$nama','$tgl','$gender','$alamat','$tlp','$jabatan','$nama_file')");
   
if($simpan){
   echo"<script>alert('Data Diri Berhasil Disimpan');</script>";
   echo"<meta http-equiv='refresh' content= '0 ; url=tampil.php'>";
 }
 else{
   echo"<script>alert('Data gagal disimpan!');</script>";
}
?>