<?php

require_once '../koneksi.php';

$nama = $_POST['nama_lengkap'];
$email = $_POST['email'];
$alamat = $_POST['alamat'];
$jurusan = $_POST['tempat_tanggal_lahir'];
$nidn = $_POST['jurusan'];

$perintah = "INSERT INTO `tb_pegawai` (`id`, `nama_lengkap`, `email`, `alamat`, `tempat_tanggal_lahir`, `email`) VALUES (NULL, '$nama', '$email', '$alamat', '$tempat_tanggal_lahir', '$jurusan)";

if ($conn->query($perintah) === TRUE) {
    header("location: ../../data-pegawai.php");
} else {
    header("location: ../../data-pegawai.php");
}