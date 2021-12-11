<?php

require_once '../koneksi.php';

$nama = $_POST['mata_kuliah'];
$email = $_POST['sks'];
$alamat = $_POST['id_dosen'];
$jurusan = $_POST['ruang'];
$nidn = $_POST['hari'];
$jenis_kelamin = $_POST['waktu'];

$perintah = "INSERT INTO `tb_jadwal_kuliah` (`id`, `mata_kuliah`, `sks`, `id_dosen`, `ruang`, `hari`, `waktu`) VALUES (NULL, '$nama', '$email', '$alamat', '$jurusan', '$nidn', '$jenis_kelamin', '$no_hp')";

if ($conn->query($perintah) === TRUE) {
    header("location: ../../data-jadwal-kuliah.php");
} else {
    header("location: ../../data-jadwal-kuliah.php");
}