<?php

require_once '../koneksi.php';

$nama = $_POST['id_mahasiswa'];
$email = $_POST['nilai_akhir'];

$perintah = "INSERT INTO `tb_nilai_mahasiswa` (`id`, `id_mahasiswa`, `nilai_akhir`) VALUES (NULL, '$id_mahasiswa', '$nilai_akhir')";

if ($conn->query($perintah) === TRUE) {
    header("location: ../../data-nilai-mahasiswa.php");
} else {
    header("location: ../../data-nilai-mahasiswa.php");
}