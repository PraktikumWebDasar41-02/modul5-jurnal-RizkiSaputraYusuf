	<table>
		<form method="POST">
 <tr>
 		<td>NIM</td>
		<td><input type="number" name="nim"></td>
	</tr>
	<tr>
		<td>Nama</td>
		<td><input type="text" name="nama"></td>
	</tr>
	<tr>
		<td>Email</td>
		<td><input type="text" name="email" placeholder="example@gmail.com"></td>
	</tr>
	<tr>
		<td><input type="submit" name="send" value="submit"></td>
	</tr>
	</td>
</head>
<body>
</table>
</form>

<?php
include 'base.php';
if(isset($_POST['send']){
	if(strlen($_POST['nim'])==10 && $_POST['nim']!==""){$id = $_POST['nim'];
}else{
	echo "NIM Kurang";

	if (strlen($_POST['nama'])==20) {
		echo "Nama anda terlalu panjang";
	}else{
		$nam = $_POST['nama'];
	}
	if (!filter_var($_POST)['Email'],)) {
		echo "email anda tidak sesuai";
	}else{
		$email=$_POST['email'];
	}
		if (isset($id)&& isset($nama)&& isset($email)) {
			$query= mysql_query($conn,"INSERT INTO t_jurnal1(NIM,Nama,email) VALUES('$id','$nama','$email')");
			if (isset($query)) {
				echo "Data Tersimpan";
				header("Location:commen.php");
			}else{
				echo "Data tidak Tersimpan";
			}

			}
		}

?>