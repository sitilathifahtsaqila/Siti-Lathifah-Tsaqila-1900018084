<html>
<body>
	Selamat datang <?php
	if(isset($_POST['nama'])){
		if($_POST['nama'] == ""){
			echo "Nama Belum Di Masukkan !";
		}else{
			echo $_POST["nama"];
		}
		
	}?><br>
	Berikut adalah data biodata Anda : <br>
	Nama : <?php 
	if(isset($_POST['nama'])){
		if($_POST['nama'] == ""){
			echo "Nama Belum Di Masukkan !";
		}else{
			echo $_POST["nama"];
		}
		
	}?><br>
	Alamat : <?php 
	if(isset($_POST['alamat'])){
		if($_POST['alamat'] == ""){
			echo "Alamat Belum Di Masukkan !";
		}else{
			echo $_POST["alamat"];
		}
		
	} ?><br>
	No HP : <?php 
	if(isset($_POST['no'])){
		if($_POST['no'] == ""){
			echo "No HP/Telp Belum Di Masukkan !";
		}else{
			echo $_POST["no"];
		}
		
	}?><br>
	Agama : <?php 
	if(isset($_POST['agama'])){
		if($_POST['agama'] == ""){
			echo "Agama Belum Di Masukkan !";
		}else{
			echo $_POST["agama"];
		}
		
	}?><br>
	Prestasi yang pernah anda raih : <?php 
	if(isset($_POST['prestasi'])){
		if($_POST['prestasi'] == ""){
			echo "Prestasi Belum Di Masukkan !";
		}else{
			echo $_POST["prestasi"];
		}
		
	}?><br>
	Terimaksih Sudah Mengisi Form Biodata 
</body>
</html>
