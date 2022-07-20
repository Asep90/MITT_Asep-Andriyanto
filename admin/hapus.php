<?php
include"koneksi.php";
 $karyawan=mysql_query("SELECT * FROM karyawan WHERE nik='$_GET[nik]'");
 $sql=mysql_fetch_array($karyawan);
 $nama_file = $sql['foto'];

mysql_query("DELETE FROM karyawan WHERE nik='$_GET[nik]'");

echo"<script type='text/javascript'>alert('Data Berhasil Dihapus!');</script><meta http-equiv='Refresh' content='0; url=tampil.php' />";

?>