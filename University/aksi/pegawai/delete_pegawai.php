<?php

require_once '../koneksi.php';

$id = $_GET['id'];

$perintah = "DELETE FROM `tb_pegawai` WHERE `tb_pegawai`.`id` = " . $id;

if ($conn->query($perintah) === TRUE) {
    header("location: ../../data-pegawai.php");
} else {
    header("location: ../../data-pegawai.php");
}