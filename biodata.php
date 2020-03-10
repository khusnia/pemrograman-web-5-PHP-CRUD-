<html>
<head>
<title>Tugas Praktikum 5</title>
</head>
<body>
<h1>Form Login Biodata</h1>
<?php
date_default_timezone_set("Asia/Jakarta");
echo "Diakses pada ".date("d-m-Y, h:i:s A");
?>
<body background="bunga2.jpg">
<table border="0">
<form action="output.php" method="post">
<tr>
<td>NPM</td>
<td>:</td>
<td><input type="text" name="NPM"></td>
</tr>
<tr>
<td>Nama Lengkap</td>
<td>:</td>
<td><input type="text" name="Nama"></td>
</tr>
<tr>
<td>Email</td>
<td>:</td>
<td><input type="text" name="Email"></td>
</tr>
<tr>
<td>Tempat dan Tanggal Lahir</td>
<td>:</td>
<td><input type="text" name="Tempat" size="15">
<select name="Tgl">
<option name="Tgl">Tgl
<option name="Tgl">1
<option name="Tgl">2	
<option name="Tgl">3
<option name="Tgl">4
<option name="Tgl">5
<option name="Tgl">6
<option name="Tgl">7
<option name="Tgl">8
<option name="Tgl">9
<option name="Tgl">10
<option name="Tgl">11
<option name="Tgl">12
<option name="Tgl">13
<option name="Tgl">14
<option name="Tgl">15
<option name="Tgl">16
<option name="Tgl">17
<option name="Tgl">18
<option name="Tgl">19
<option name="Tgl">20
<option name="Tgl">21
<option name="Tgl">22
<option name="Tgl">23
<option name="Tgl">24
<option name="Tgl">25
<option name="Tgl">26
<option name="Tgl">27
<option name="Tgl">28
<option name="Tgl">29
<option name="Tgl">30
<option name="Tgl">31
</select>
<select name="Bln">
<option name="Bln">Bln
<option name="Bln">Januari
<option name="Bln">Februari
<option name="Bln">Maret
<option name="Bln">April
<option name="Bln">Mei
<option name="Bln">Juni
<option name="Bln">Juli
<option name="Bln">Agustus
<option name="Bln">September
<option name="Bln">Oktober
<option name="Bln">November
<option name="Bln">Desember
</select>
<select name="Thn">
<option name="Thn">Thn
<option name="Thn">1995
<option name="Thn">1996
<option name="Thn">1997
<option name="Thn">1998
<option name="Thn">1999
<option name="Thn">2000
</select>
</td>
</tr>
<tr>
<td>Jenis Kelamin</td>
<td>:</td>
<td><input type="radio" name="JenisKelamin" value="Laki-laki">Laki-laki<input type="radio" name="JenisKelamin" value="Perempuan">Perempuan</td>
</tr>
<tr>
<td>Alamat</td>
<td>:</td>
<td><input type="text" name="Alamat" size="35"></td>
</tr>
<tr>
<td>Program Studi</td>
<td>:</td>
<td><select name="Prodi">
<option name="Prodi">Prodi
<option name="Prodi">Sistem Informasi
<option name="Prodi">Teknik Informatika
<option name="Prodi">Manajemen
<option name="Prodi">Akuntansi
<option name="Prodi">Teknik Kimia
<option name="Prodi">Teknik Industri
<option name="Prodi">Agroteknologi
<option name="Prodi">Hukum
<option name="Prodi">Administrasi Negara
<option name="Prodi">Ilmu Komunikasi
</select>
</td>
</tr>
<tr>
<td>Fakultas</td>
<td>:</td>
<td><select name="Fakultas">
<option name="Fakultas">Fakultas
<option name="Fakultas">Ilmu Komputer
<option name="Fakultas">Ekonomi dan Bisnis
<option name="Fakultas">Teknik
<option name="Fakultas">Pertanian
<option name="Fakultas">Hukum
<option name="Fakultas">Ilmu Sosial dan Ilmu Politik
</select>
</td>
</tr>
<tr>
<td>Asal Univeritas</td>
<td>:</td>
<td><input type="text" name="AsalUniversitas" size="35"></td>
</tr>
<tr>
<td>Hobi</td>
<td>:</td>
<td><select name="Hobi">
<option name="Hobi">Hobi
<option name="Hobi">Menyanyi
<option name="Hobi">Menulis
<option name="Hobi">Membaca
<option name="Hobi">Berenang
<option name="Hobi">Melukis
</select>
</td>
</tr>
<tr>
<td>
<input type="submit" name="btnLogin" value="Login">
<input type="reset" name="reset" value="Reset">
</td>
</tr>
</form>
</table>
</body>
</html>