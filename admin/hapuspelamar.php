<?php
include"koneksi.php";
 $karyawan=mysql_query("SELECT * FROM pelamar WHERE id='$_GET[id]'");
 $sql=mysql_fetch_array($karyawan);

mysql_query("DELETE FROM pelamar WHERE id='$_GET[id]'");	

echo"<script type='text/javascript'>alert('Data Berhasil Dihapus!');</script><meta http-equiv='Refresh' content='0; url=tampilpelamar.php' />";

?>