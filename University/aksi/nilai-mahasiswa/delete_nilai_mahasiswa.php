<?php

require_once '../koneksi.php';

$id = $_GET['id'];

$perintah = "DELETE FROM `tb_nilai_mahasiswa` WHERE `tb_nilai_mahasiswa`.`id` = " . $id;

if ($conn->query($perintah) === TRUE) {
    header("location: ../../data-dosen.php");
} else {
    header("location: ../../data-dosen.php");
}