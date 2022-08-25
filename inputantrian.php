<?php
include 'cetak.php';

$host = "localhost";
$user = "root";
$password = "root";
$db = "antrian";

$konek = mysqli_connect($host, $user, $password, $db);
if (!$konek) {
    die("tidak konek ke database. " . mysqli_connect_error());
}

$huruf = $_GET['huruf'];
$tampilkan = mysqli_query($konek, "select * from tableantrian");
$nomor = $hitung + 1;
$hitung = mysqli_num_rows($tampilkan);

$tanggal = date('d M Y');
$waktu = date('H:i');


$input = "INSERT INTO tableantrian(nomor, tanggal, waktu, huruf) VALUES ('$nomor','$tanggal','$waktu','$huruf')";
if (mysqli_query($konek, $input)) {
    print "<script>window.location='showcetak.php?nomor=$nomor&huruf=$huruf&tanggal=$tanggal&waktu=$waktu'</script>";
}
