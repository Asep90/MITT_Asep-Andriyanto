<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<?php 
include_once "../library/inc.library.php";
include_once "../library/inc.connection.php"; ?>
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
	 <td align="center"><a href="pelamar.php"><font face="Britannic bold" size="4">User Profil
	 </font></a></td>
	 <td align="center"><a href="seleksi.php"><font face="Britannic bold" size="4">User Skill
	 </font></a></td>
	 <td align="center"><a href="input.php"><font face="Britannic bold" size="4">Skill Level
	 </font></a></td>
	 <td align="center"><a href="laporan.php"><font face="Britannic bold" size="4">Skill
	 </font></a></td>
	 <td align="center"><a href="../logout.php"><font face="Britannic bold" size="4">Logout
	 <td align="center"><font face="Britannic bold" size="4"><?php 
echo date("d/m/Y");
?></font></td>
	 </font></a></td>
	 </tr></table>
</div></tr>
<div > 
<?php $noTransaksi 	= buatKode("karyawan", "0"); ?>
<form id="form1" name="form1" enctype="multipart/form-data" method="post" action="simpan.php">
  <table height="100px" width="1000px" border="0" align="center" bgcolor="#B9B9FF">
  <td width="252" rowspan="10"><img src="gambar/input.jpeg" width="252" height="350" /></td>
<tr>
 <td height="25">NIK</td>
 <td>
  <label>
   <input name="txt_nik" value="<?php echo $noTransaksi; ?>" size="23" maxlength="20" readonly="readonly" required="true"/>
  </label></td>
</tr>
    
<tr>
  
  <td width="113"  height="28">Skill Level</td>
  <td width="257">
  <label>
    <input name="txt_nama" type="text" id="txt_nama" size="30" required="true"/>
  </label></td>
</tr>
<tr>
 <td height="25">Skill level Name</td>
 <td>
  <label>
   <input name="txt_tgl" type="text" id="txt_tgl" size="30" required="true"/>
  </label></td>
</tr>

<tr>
 <td height="41" colspan="2">
  <div align="left" class="style7">
   <input name="simpan" type="submit" id="bsimpan" value="SIMPAN" />
   <input name="batal" type="button" id="bbatal" value="BATAL" />
   <a href="tampil.php"><input type="button" value="LIHAT DATA"></a>
  </div></td>
</tr>

  </table>
<tr>
	<table height="20px" width="1000px" border="0" align="center" cellpadding="0" cellspacing="0">
	<tr bgcolor="#E4EAF2">
	<div>
	<td width="750px"><font face="broadway" color="blue" size="2">&nbsp;CopyRight All Reserved © 2014</td>
	<td width="200px"align="center"><font color="blue" size="4"><b>PT Krisna Raja Sukses</b></font></td></font>
	</div></tr>
  </tr></form>
</body>
</html>
