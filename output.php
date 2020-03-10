<?php
date_default_timezone_set("Asia/Jakarta");
echo "Diakses pada ".date("d-m-Y, h:i:s A");
if (empty($_POST['NPM'])) {
	header("Location:tidaklengkap.php");
} else {
	echo "<center>NPM : ".$_POST['NPM']."</center><br>";
}
if (empty($_POST['Nama'])) {
	header("Location:tidaklengkap.php");
} else {
	echo "<center>Nama : ".$_POST['Nama']."</center><br>";
}
if (empty($_POST['Email'])) {
	header("Location:tidaklengkap.php");
} else {
	echo "<center>Email : ".$_POST['Email']."</center><br>";
}
if (empty($_POST['Tempat'])) {
	header("Location:tidaklengkap.php");
} else {
	echo "<center>Tempat dan Tanggal Lahir : ".$_POST['Tempat'] .$_POST['Tgl'] .$_POST['Bln'] .$_POST['Thn']."</center><br>";
}
if (empty($_POST['JenisKelamin'])) {
	header("Location:tidaklengkap.php");
} else {
	echo "<center>Jenis Kelamin : ".$_POST['JenisKelamin']."</center><br>";
}
if (empty($_POST['Alamat'])) {
	header("Location:tidaklengkap.php");
} else {
	echo "<center>Alamat : ".$_POST['Alamat']."</center><br>";
}
if (empty($_POST['Prodi'])) {
	header("Location:tidaklengkap.php");
} else {
	echo "<center>Prodi : ".$_POST['Prodi']."</center><br>";
}
if (empty($_POST['Fakultas'])) {
	header("Location:tidaklengkap.php");
} else {
	echo "<center>Fakultas : ".$_POST['Fakultas']."</center><br>";
}
if (empty($_POST['AsalUniversitas'])) {
	header("Location:tidaklengkap.php");
} else {
	echo "<center>Asal Universitas : ".$_POST['AsalUniversitas']."</center><br>";
}
if (empty($_POST['Hobi'])) {
	header("Location:tidaklengkap.php");
} else {
	echo "<center>Hobi : ".$_POST['Hobi']."</center><br>";
}
?>