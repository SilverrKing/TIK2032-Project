<?php
$koneksi = mysqli_connect("localhost", "root", "", "feedbackwebkris");

$nama = $_POST['nama'];
$email = $_POST['email'];
$komentar = $_POST['komentar'];
$submit = $_POST['submit'];

$query = "INSERT INTO feedback VALUES('$nama','$email','$komentar','$submit')";
mysqli_query($koneksi, $query);
?>
