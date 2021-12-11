<?php

require_once 'aksi/koneksi.php';

$id = $_GET['id'];

$perintah = "SELECT * FROM tb_jadwal_kuliah WHERE id = " . $id;
$result = $conn->query($perintah);