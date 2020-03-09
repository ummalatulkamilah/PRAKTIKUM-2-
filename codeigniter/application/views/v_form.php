<!DOCTYPE html>
<html>
<head>
	<title>Membuat form validation dengan Codeigniter | MalasNgoding.com</title>
</head>
<body>
	<!-- view v_form berfungsi sebagai form untuk penginputan data yang akan divalidasi -->
	<h1>Membuat Form Validation dengan CodeIgniter</h1>
	<?php echo validation_errors(); ?> <!-- pesan peringatan form validationnya -->
	
	 <?php echo form_open('form/aksi'); ?>  <!-- menetapkan aksi dari form ke method aksi pada controller form -->
	
		<label>Nama</label><br/>
		<input type="text" name="nama"><br/>
		<label>Email</label><br/>
		<input type="text" name="email"><br/>
		<label>Konfirmasi Email</label><br/>
		<input type="text" name="konfir_email"><br/>
		<input type="submit" value="Simpan">
	</form>
</body>
</html>