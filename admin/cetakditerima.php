<?php
session_start();
include '../koneksi.php';
?>

<table cellspacing="0" border="1">
<img src="gambar/logo.png"/></br>

    <h4 align="center">Laporan Karyawan Diterima</h4>
    </thead>
<tr>
  <td width="29"><div align="center"><strong>No</strong></div></td>
  <td width="93"><div align="center"><strong>Nik</strong></div></td>
  <td width="146"><div align="center"><strong>Nama Karyawan<strong></div></td>
  <td width="81"><div align="center"><strong>Tanggal Lahir</strong></div></td>
  <td width="124"><div align="center"><strong>Jenis kelamin</strong></div></td>
   <td width="170"><div align="center"><strong>Alamat</strong></div><div align="left"></div></td>
   <td width="135"><div align="center"><strong>No Tlp</strong></div></td>
   <td width="135"><div align="center"><strong>Jabatan</strong></div></td>
 </tr>
    
 
<?php
$nomor=0;
$tgl1=date('d/m/y');
include "koneksi.php";
$tampil=mysql_query("SELECT * FROM karyawan");
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
	
</tr>";
}
?>

         
    </tbody>
</table><br />
<tr >

<td><span style="margin-left:800px;">Mengetahui, <?php  echo $tgl1; ?></span></td>
<br /><br /><br /> <br />
<td><span style="margin-left:830px;"><?php  echo $_SESSION['admin']; ?></span></td>
</tr>