<?php
session_start();
if(!empty($_SESSION['admin'])){
echo "<meta http-equiv='refresh' content='0; url=admin/index.php'>";
}
else{
?>
<?php
include('koneksi.php');
?>
<br>&nbsp; </br>
<br>&nbsp; </br>
<br>&nbsp; </br>
<form method="post" action="log-admin.php">
<table align="center" border="0"  width="325">
	<tr>
		<td colspan="2">
			<img src="admin/gambar/login.jpg" height="200" width="325"></td>
	</tr>
		<tr>
			<td width="66">Username</td><td width="312"><input type="text" class="input" size="37" name="user" /></td>
		</tr>
			<tr>
				<td width="66">Password</td><td><input type="password" class="input" size="37" name="pass" /> </td>
		</tr>
			<tr>
				<td><input type="submit" class="submitButton" value="Masuk"/></td>
				<td> <input type="reset" class="submitButton" value="Hapus"/></td>
			</tr>
</table>
</form>
<?php
}
?>