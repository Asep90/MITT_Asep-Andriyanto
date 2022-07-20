<?php
include "koneksi.php";
$idkaryawan=$_GET['id'];
$tampil=mysql_query("SELECT * FROM Karyawan WHERE no='$idkaryawan'");

// Kalo idnya gak ada maka kembali ke Tampil
if(mysql_num_rows($tampil)==0){ header('Location: tampil.php'); }
?>


<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>PT Krisna Raja Sukses</title>
<style type="text/css">
<!--
A:link {text-decoration:none}
A:visited {text-decoration:none}
A:active {text-decoration: none}
-->
</style>
</head>

<body>
<form>
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
</div>

<div id="conten-wrapper"> 
<form action="simpan.php" method="post" enctype="multipart/form-data">
	<table height="100px" width="1000px" border="1" cellpadding="4" cellspacing="0" align="center">
<?php
$sql=mysql_fetch_array($tampil);
echo "
<tr>
    <td colspan='2'>NO : $sql[no]<input type='hidden' name='no' value='$sql[no]'/></td>
</tr>

<tr>
    <td width='120'>ID Daftar </td>
    <td><input type='text' name='id' required='required' value='$sql[id]' /></td>
</tr>
<tr>
    <td width='120'>Nama Daftar</td>
    <td><input type='text' name='txt_nik' required='required' value='$sql[nama]' /></td>
</tr>
<tr>
    <td width='120'>Tanggal Lahir</td>
    <td><input type='text' name='txt_nik' required='required' value='$sql[nama]' /></td>
</tr>
<tr>
    <td width='120'>JENIS KELAMIN </td>
    <td>";
	
	$rad1 = '<input type="radio" name="rb_pilihan" id="radio" value="PRIA" ';
	$rad2 = '<input type="radio" name="rb_pilihan" id="radio2" value="WANITA" ';
	
if($sql['gender']=='pria') {
	$rad1 .= 'checked="checked"';
}else{
	$rad2 .= 'checked="checked"';
}
    $rad1 .= ' /> PRIA';
    $rad2 .= ' /> WANITA';	
	
	echo $rad1 . $rad2 . "</td>
</tr>
<tr>
    <td>ALAMAT</td>
    <td><textarea name='alamat' rows='5' required='required'>$sql[alamat]</textarea></td>
</tr>

<tr>

    <td width='120'>JABATAN </td>
	
	<td>
	
	<select name='lm_kode'>";

   
   $pil1="<option value='operator' ";
   $pil2="<option value='leader' ";
   $pil3="<option value='supervisor' ";
   $pil4="<option value='manager' ";
   
   if($sql['jabatan']=='operator') { $pil1 .= " selected='selected'"; }
   if($sql['jabatan']=='leader') { $pil2 .= " selected='selected'"; }
   if($sql['jabatan']=='supervisor') { $pil3 .= " selected='selected'"; }
   if($sql['jabatan']=='manager') { $pil4 .= " selected='selected'"; }

   $pil1 .=">operator</option>";
   $pil2 .=">leader</option>";
   $pil3 .=">supervisor</option>";
   $pil4 .=">manager</option>";


echo $pil1 . $pil2 . $pil3 . $pil4 ;
	
    //<input type='text' name='lm_kode' required='required' value='$sql[jabatan]' />  selected='selected'
	
	
echo "</select></td>

</tr>

<tr>
    <td>ALAMAT</td>
    <td><textarea name='alamat' rows='5' required='required'>$sql[alamat]</textarea></td>
</tr>

<tr>
    <td width='120'>JENIS KELAMIN </td>
    <td>";
	
	$rad1 = '<input type="radio" name="rb_pilihan" id="radio" value="PRIA" ';
	$rad2 = '<input type="radio" name="rb_pilihan" id="radio2" value="WANITA" ';
	
if($sql['gender']=='pria') {
	$rad1 .= 'checked="checked"';
}else{
	$rad2 .= 'checked="checked"';
}
    $rad1 .= ' /> PRIA';
    $rad2 .= ' /> WANITA';	
	
	echo $rad1 . $rad2 . "</td>
</tr>

";



?>
<tr>
    <td colspan="2">
        <input type="submit" id="bSimpan" value="Update" />
        <input name="Button" type="button" id="bBatal" onclick="window.location='tampil.php'" value="Batal" />
    </td>
</tr>
</table>
</form>
</div>

<div class="style4" id="bawah">
</div>
</body>
</html>
