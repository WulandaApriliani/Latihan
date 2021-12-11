<?php

require_once './aksi/koneksi.php';

$perintah = "SELECT * FROM `tb_dosen`";
$result = $conn->query($perintah);
$no = 1;