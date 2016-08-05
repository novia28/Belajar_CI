<?php
defined('BASEPATH') OR exit('No direct script access allowed');
?><!DOCTYPE html>
<html lang="en">
<head>
	<title> First CI </title>
</head>
<body>
<form action="<?php echo site_url('home/show_edit_mhs/'.$id); ?>" method="POST">
<table>
<?php foreach($show as $s){ ?>
	<tr>
		<td>NIM</td>
		<td><input type="text" name="nim" value="<?php echo $s->nim; ?>" required="required"></td>
	</tr>
	<tr>
		<td>Nama</td>
		<td><input type="text" name="nama" value="<?php echo $s->nama; ?>" required="required"></td>
	</tr>
	<tr>
		<td colspan='2'><input type="submit" value="Update"></td>
	</tr>
<?php } ?>
</table>
</form>
</body>
</html>