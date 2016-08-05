<?php
defined('BASEPATH') OR exit('No direct script access allowed');
?><!DOCTYPE html>
<html lang="en">
<head>
	<title> First CI </title>
</head>
<body>
<table border='1'>
<?php if($this->session->flashdata() != NULL){ ?>
	<tr>
		<td colspan='2'> <?php echo $this->session->flashdata('Message'); ?></td>
	</tr>
<?php } ?>
	<tr>
		<td>NIM</td>
		<td>Nama</td>
	</tr>
	<?php 
	foreach($row as $s){ ?>
	<tr>
		<td><?php echo $s->nim; ?></td>
		<td><?php echo $s->nama; ?></td>
		<td><?php echo anchor('home/delete_mhs/'.$s->nim, 'Delete'); ?></td>
		<td><?php echo anchor('home/show_edit_mhs/'.$s->nim, 'Edit'); ?></td>
	</tr>
	
	<?php } ?>
	<!--<a href="<?php //echo site_url('home/form_mhs'); ?>">Form Mahasiswa</a>-->
	<?php echo anchor('home/form_mhs', 'Form Mahasiswa', 'title=""'); ?>
</table>
</body>
</html>