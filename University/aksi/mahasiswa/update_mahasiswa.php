<?php

require_once '../koneksi.php';


$nama_lengkap = $_POST['nama_lengkap'];
$email = $_POST['email'];
$alamat = $_POST['alamat'];
$jurusan = $_POST['jurusan'];
$nidn = $_POST['npm'];
$jenis_kelamin = $_POST['jenis_kelamin'];
$no_hp = $_POST['no_hp'];

$perintah = "UPDATE `tb_mahasiswa` SET `nama_lengkap` = '$nama_lengkap', `email` = '$email', `alamat` = '$alamat', `jurusan` = '$jurusan', `npm` = '$nidn', `jenis_kelamin` = '$jenis_kelamin', `no_hp` = '$no_hp', WHERE `tb_mahasiswa`.`id` = 1" . $id;

if ($conn->query($perintah) === TRUE) {
    header("location: ../../data-mahasiswa.php");
} else {
    header("location: ../../data-mahasiswa.php");
}