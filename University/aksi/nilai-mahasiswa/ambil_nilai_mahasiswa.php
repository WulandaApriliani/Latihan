<?php

require_once './aksi/koneksi.php';

$perintah = "SELECT * FROM `tb_nilai_mahasiswa`";
$result = $conn->query($perintah);
$no = 1;