<?php
defined('BASEPATH') OR exit('No direct script access allowed');
?><!DOCTYPE html>
<html lang="en">
<head>
	<title> First CI </title>
</head>
<body>
<form action="<?php echo site_url('home/form_mhs'); ?>" method="POST">
<table>
	<tr>
		<td>NIM</td>
		<td><input type="text" name="nim" required="required"></td>
	</tr>
	<tr>
		<td>Nama</td>
		<td><input type="text" name="nama" required="required"></td>
	</tr>
	<tr>
		<td colspan='2'><input type="submit" value="Submit"></td>
	</tr>
</table>
</form>
</body>
</html>