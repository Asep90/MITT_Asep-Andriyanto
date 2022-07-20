<?php
$tgl1=date('d/m/y');
session_start();
include '../koneksi.php';
?>

<table cellspacing="0" border="1">
<img src="gambar/logo.png"/></br>
    <h4 align="center">Laporan Total Calon Karyawan</h4>
    </thead>
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
$tgl1=date('Y/m/d');
if (isset($_GET['tgl'])=='0000-00-00') {
$tampil=mysql_query("SELECT * FROM pelamar");
}else {
$tampil=mysql_query("SELECT * FROM pelamar WHERE  tgl_pelamar='$_GET[tgl]'");
}



$nomor=0;
while($sql=mysql_fetch_array($tampil)){
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
}
?>


         
    </tbody>
</table><br />
<tr >

<td><span style="margin-left:790px;">Mengetahui, <?php  echo $tgl1; ?></span></td>
<br /><br /><br /> <br />
<td><span style="margin-left:830px;"><?php  echo $_SESSION['admin']; ?></span></td>
</tr>