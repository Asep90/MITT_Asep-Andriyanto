<?php
$tgl1=date('d/m/y');
session_start();
include '../koneksi.php';
?>

<table cellspacing="0" border="1">
<img src="gambar/logo.png"/></br>
    <h4 align="center">Laporan Hasil Seleksi</h4>
    </thead>
<tr>
  <td width="50"><div align="center"><strong>No Daftar<strong></div></td>
  <td width="100"><div align="center"><strong>Nama Daftar</strong></div></td>
  <td width="100"><div align="center"><strong>Daftar Posisi</strong></div></td>
  <td width="50"><div align="center"><strong>Tanggal Seleksi</strong></div>
    <div align="left"></div></td>
  <td width="50"><div align="center"><strong>Waktu Seleksi</strong></div></td>
  <td width="80"><div align="center"><strong>Tes Tertulis</strong></div></td>
  <td width="80"><div align="center"><strong>Tes Wawancara</strong></div></td>
  <td width="80"><div align="center"><strong>Hasil</strong></div></td>
  <td width="80"><div align="center"><strong>Keterangan</strong></div></td>
 </tr>
    
 
<?php
include "koneksi.php";
if (isset($_GET['tgl'])=='0000-00-00') {
$tampil=mysql_query("SELECT * FROM seleksi");
}else {
$tampil=mysql_query("SELECT * FROM seleksi WHERE  tanggal_seleksi='$_GET[tgl]'");
}




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
	
</tr>";
}
?>


         
    </tbody>
</table>
<br />
<tr >

<td><span style="margin-left:600px;">Mengetahui, <?php  echo $tgl1; ?></span></td>
<br /><br /><br /> <br />
<td><span style="margin-left:640px;"><?php  echo $_SESSION['admin']; ?></span></td>
</tr>