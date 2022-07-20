<?php
if (isset($_GET['tgl'])) {
    $x = $_GET['tgl'];
} else {
    $x = 0;
}
?>

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
<tr>
<form method="get" action="">
		<div class="padding" align="center">
				<p>
					<label>Tanggal</label>
					<input type="date" name="tgl">
<button type="submit" class="btn">Cari</button>					
				</p>
		
		</div>
</form>
 <td height="41" colspan="2">
  <div align="center" class="style7">
   <a href="cetak.php?tgl=<?php  echo $x; ?>" target="_blank"><input type="button" value="CETAK"></a>
  <a href="diterima.php"><input type="button" value="DITERIMA"></a>
   <a href="ditolak.php"><input type="button" value="DITOLAK"></a>
   </div></td>
</tr>

<div>
<form action="" method="get"> 
<table width="1000px" height="70px" border="1" align="center">
 <tr>
   <td colspan="10"><div align="center" class="style2 style3"><strong>Laporan Total Calon Karyawan</strong></div></td>
 </tr>
 
 <tr>
  <td width="20"><div align="center"><strong>No</strong></div></td>
    <td width="80"><div align="center"><strong>Id Daftar</strong></div></td>
  <td width="100"><div align="center"><strong>Nama Daftar<strong></div></td>
  <td width="80"><div align="center"><strong>Tanggal Lahir</strong></div></td>
  <td width="80"><div align="center"><strong>Jenis Kelamin</strong></div></td>
  <td width="200"><div align="center"><strong>Alamat</strong></div>
    <div align="left"></div></td>
  <td width="100"><div align="center"><strong>No Telp</strong></div></td>
  <td width="50"><div align="center"><strong>Pendidikan</strong></div></td>
  <td width="100"><div align="center"><strong>Posisi</strong></div></td>
 </tr>
    
 
<?php
include "koneksi.php";
include_once "../library/inc.connection.php";
$baris 		= 10;
$halaman 	= isset($_GET['hal']) ? $_GET['hal'] : 0;
if (isset($_GET['tgl'])) {
$pageSql 	= "SELECT * FROM pelamar WHERE  tgl_pelamar='$_GET[tgl]'";
}else {
$pageSql 	= "SELECT * FROM pelamar";
}

$pageQry 	= mysql_query($pageSql, $koneksidb) or die ("Error: ".mysql_error());
$jmlData 	= mysql_num_rows($pageQry);
$maksData	= ceil($jmlData/$baris);
  if (isset($_GET['tgl'])) {
			$mySql = "SELECT * FROM pelamar WHERE  tgl_pelamar='$_GET[tgl]' ORDER BY id ASC LIMIT $halaman, $baris";
            
        } else {
            $mySql = "SELECT * FROM pelamar ORDER BY id ASC LIMIT $halaman, $baris";
        }




	$myQry = mysql_query($mySql, $koneksidb)  or die ("Query salah : ".mysql_error());
	$nomor  = 0; 
	while ($sql = mysql_fetch_array($myQry)) {
		$nomor++;
        
echo "<tr>
  <td>$nomor</td>
  <td>$sql[id]</td>
  <td>$sql[nama]</td>
  <td>$sql[tanggal_lahir]</td>
  <td>$sql[gender]</td>
  <td>$sql[alamat]</td>
  <td>$sql[no_tlp]</td>
  <td>$sql[pendidikan]</td>
  <td>$sql[posisi]</td>
	
</tr>";
}?>
  <tr class="selKecil">
    <td colspan="3"><strong>Jumlah Data :</strong> <?php echo $jmlData; ?> </td>
    <td colspan="4" align="right">
	<strong>Halaman ke :</strong>
    <?php
	for ($h = 1; $h <= $maksData; $h++) {
		$list[$h] = $baris * $h - $baris;
		echo " <a href='laporan.php?hal=$list[$h]'>$h</a> ";
	}
	?></td>
  </tr>
  </table>
</form>  
</div>

<div class="style4" id="bawah">
<div align="center">
</div>
</body>
</html>
