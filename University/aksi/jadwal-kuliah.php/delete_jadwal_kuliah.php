<?php

require_once '../koneksi.php';

$id = $_GET['id'];

$perintah = "DELETE FROM `tb_jadwal_kuliah` WHERE `tb_jadwal_kuliah`.`id` = " . $id;

if ($conn->query($perintah) === TRUE) {
    header("location: ../../data-jadwal-kuliah.php");
} else {
    header("location: ../../data-jadwal-kuliah.php");
}