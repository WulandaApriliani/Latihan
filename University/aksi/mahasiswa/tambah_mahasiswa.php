<?php

require_once '../koneksi.php';

$nama = $_POST['nama_lengkap'];
$email = $_POST['email'];
$alamat = $_POST['alamat'];
$jurusan = $_POST['jurusan'];
$nidn = $_POST['npm'];
$jenis_kelamin = $_POST['jenis_kelamin'];
$no_hp = $_POST['no_hp'];

$perintah = "INSERT INTO `tb_dosen` (`id`, `nama_lengkap`, `email`, `jurusan`, `alamat`, `npm`, `jenis_kelamin`, `no_hp`) VALUES (NULL, '$nama', '$email', '$alamat', '$jurusan', '$npm', '$jenis_kelamin', '$no_hp')";

if ($conn->query($perintah) === TRUE) {
    header("location: ../../data-mahasiswa.php");
} else {
    header("location: ../../data-mahasiswa.php");
}