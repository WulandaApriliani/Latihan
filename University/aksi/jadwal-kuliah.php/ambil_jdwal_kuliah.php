<?php

require_once './aksi/koneksi.php';

$perintah = "SELECT * FROM `tb_jadwal_kuliah`";
$result = $conn->query($perintah);
$no = 1;