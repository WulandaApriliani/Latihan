<?php

require_once '../koneksi.php';


$nama_lengkap = $_POST['nama_lengkap'];
$email = $_POST['email'];
$alamat = $_POST['alamat'];
$jurusan = $_POST['tempat_tanggal_lahir'];
$nidn = $_POST['jurusan'];

$perintah = "UPDATE `tb_pegawai` SET `nama_lengkap` = '$nama_lengkap', `email` = '$email', `alamat` = '$alamat', `jurusan` = '$jurusan', `tempat_tanggal_lahir` = '$tempat_tanggal_lahir', WHERE `tb_pegawai`.`id` = 1" . $id;

if ($conn->query($perintah) === TRUE) {
    header("location: ../../data-pegawai.php");
} else {
    header("location: ../../data-pegawai.php");
}