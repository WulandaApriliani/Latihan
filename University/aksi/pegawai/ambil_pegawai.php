<?php

require_once './aksi/koneksi.php';

$perintah = "SELECT * FROM `tb_pegawai`";
$result = $conn->query($perintah);
$no = 1;