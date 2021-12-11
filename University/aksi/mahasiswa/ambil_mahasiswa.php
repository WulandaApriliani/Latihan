<?php

require_once './aksi/koneksi.php';

$perintah = "SELECT * FROM `tb_mahasiswa`";
$result = $conn->query($perintah);
$no = 1;