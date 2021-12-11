<?php

require_once '../koneksi.php';


$nama_lengkap = $_POST['mata_kuliah'];
$email = $_POST['sks'];
$alamat = $_POST['id_dosen'];
$jurusan = $_POST['ruang'];
$nidn = $_POST['hari'];
$jenis_kelamin = $_POST['waktu'];

$perintah = "UPDATE `tb_jadwal_kuliah` SET `mata_kuliah` = '$mata_kuliah', `sks` = '$sks', `id_dosen` = '$id_dosen', `ruang` = '$ruang', `hari` = '$hari', `waktu` = '$waktu',  WHERE `tb_jadwal-kuliah`.`id` = 1" . $id;

if ($conn->query($perintah) === TRUE) {
    header("location: ../../data-jadwal-kuliah.php");
} else {
    header("location: ../../data-jadwal-kuliah.php");
}