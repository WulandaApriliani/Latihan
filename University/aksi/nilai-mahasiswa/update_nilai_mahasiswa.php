<?php

require_once '../koneksi.php';


$nama_lengkap = $_POST['id_mahasiswa'];
$email = $_POST['nilai_akhir'];

$perintah = "UPDATE `tb_nilai_mahasiswa` SET `id_mahasiswa` = '$id_mahasiswa', `nilai_akhir` = '$nilai_akhir', WHERE `tb_nilai_mahasiswa`.`id` = " . $id;

if ($conn->query($perintah) === TRUE) {
    header("location: ../../data-nilai-mahasiswa.php");
} else {
    header("location: ../../data-nilai-mahasiswa.php");
}