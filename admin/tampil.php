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
   <td colspan="10"><div align="center" class="style2 style3"><strong>DATA TERSEDIA</strong></div></td>
 </tr>
 
 <tr>
  <td width="29"><div align="center"><strong>No</strong></div></td>
  <td width="93"><div align="center"><strong>Nik</strong></div></td>
  <td width="146"><div align="center"><strong>Nama Karyawan<strong></div></td>
  <td width="81"><div align="center"><strong>Tanggal Lahir</strong></div></td>
  <td width="124"><div align="center"><strong>Jenis kelamin</strong></div></td>
   <td width="170"><div align="center"><strong>Alamat</strong></div><div align="left"></div></td>
   <td width="135"><div align="center"><strong>No Tlp</strong></div></td>
   <td width="135"><div align="center"><strong>Jabatan</strong></div></td>
  <td width="135"><div align="center"><strong>Foto</strong></div></td>
  <td width="138"><div align="center"><strong>Aksi</strong></div></td>
 </tr>
    
 
<?php
include "koneksi.php";
$tampil=mysql_query("SELECT * FROM karyawan");
$nomor=0;
while($sql=mysql_fetch_array($tampil)){
$nomor++;

echo "<tr>
  <td>$nomor</td>
   <td>$sql[nik]</td>
  <td>$sql[nama_karyawan]</td>
  <td>$sql[tgl_lahir]</td>
  <td>$sql[gender]</td>
  <td>$sql[alamat]</td>
  <td>$sql[no_tlp]</td>
  <td>$sql[jabatan]</td>
  <td><img src='gambar/$sql[foto]' width='150' height='115' /></td>
	
<td align='center'><a href='javascript:if(confirm(\"Apakah Anda Ingin Menghapus Data ini...\")){ window.location=\"hapus.php?nik=$sql[nik]\"; }'>HAPUS</a></td>
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
