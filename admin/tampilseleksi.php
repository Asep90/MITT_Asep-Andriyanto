<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<style type="text/css">
<!--
A:link {text-decoration:none}
A:visited {text-decoration:none}
A:active {text-decoration: none}
-->
</style>
<title>PT Krisna Raja Sukses</title>

</head>
<body>
<table height="100px" width="1000px" border="0" align="center" cellpadding="0" cellspacing="0">
<tr>
  <td>
	<img src="gambar/welcome.jpg" height="200px" width="1000px"></td>
  </tr>
   <tr>
    <table bgcolor="#E4EAF2" height="40px" width="1000px" border="0" align="center" cellpadding="0" cellspacing="0">
     <tr>
     <td align="center" ><a href="../index.php"><font face="Britannic bold" size="4">Home
	 </font></a></td>
	 <td align="center"><a href="pelamar.php"><font face="Britannic bold" size="4">Input Pelamar
	 </font></a></td>
	 <td align="center"><a href="seleksi.php"><font face="Britannic bold" size="4">Form Hasil Seleksi
	 </font></a></td>
	 <td align="center"><a href="input.php"><font face="Britannic bold" size="4">Karyawan
	 </font></a></td>
	 <td align="center"><a href="laporan.php"><font face="Britannic bold" size="4">Laporan
	 </font></a></td>
	 <td align="center"><a href="../logout.php"><font face="Britannic bold" size="4">Logout
	 <td align="center"><font face="Britannic bold" size="4"><?php 
echo date("d/m/Y");
?></font></td>
	 </font></a></td>
	 </tr></table>
</div></tr>
</div>
<div>
<form action="" method="get"> 
<table width="1000px" height="70px" border="1" align="center">
 <tr>
   <td colspan="11"><div align="center" class="style2 style3"><strong>DATA TERSEDIA</strong></div></td>
 </tr>
 
 <tr>
  <td width="50"><div align="center"><strong>ID Daftar<strong></div></td>
  <td width="100"><div align="center"><strong>Nama Daftar</strong></div></td>
  <td width="100"><div align="center"><strong>Daftar Posisi</strong></div></td>
  <td width="50"><div align="center"><strong>Tanggal Seleksi</strong></div>
    <div align="left"></div></td>
  <td width="50"><div align="center"><strong>Waktu Seleksi</strong></div></td>
  <td width="80"><div align="center"><strong>Tes Tertulis</strong></div></td>
  <td width="80"><div align="center"><strong>Tes Wawancara</strong></div></td>
  <td width="80"><div align="center"><strong>Hasil</strong></div></td>
  <td width="80"><div align="center"><strong>Keterangan</strong></div></td>
  <td width="150"><div align="center"><strong> Aksi </strong></div></td>
 </tr>
    
 
<?php
include "koneksi.php";
$tampil=mysql_query("SELECT * FROM seleksi");
$nomor=0;
while($sql=mysql_fetch_array($tampil)){
$nomor++;
echo "<tr>
  <td>$nomor</td>
  <td>$sql[nama]</td>
  <td>$sql[daftar_posisi]</td>
  <td>$sql[tanggal_seleksi]</td>
  <td>$sql[waktu_seleksi]</td>
   <td>$sql[tes_tulis]</td>
    <td>$sql[tes_wawancara]</td>
  <td>$sql[hasil]</td>
   <td>$sql[ket]</td>
	
<td align='center'><a href='javascript:if(confirm(\"Apakah Anda Ingin Menghapus Data ini...\")){ window.location=\"hapusseleksi.php?id=$sql[id]\"; }'>HAPUS</a> </td>
</tr>";
}
?>
  </table>
</form>  
</div>

<div class="style4" id="bawah">
<div align="center">
</div>
</body>
</html>
