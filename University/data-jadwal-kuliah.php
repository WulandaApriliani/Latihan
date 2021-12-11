<!doctype html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">

    <title>Hello, world!</title>
</head>

<body>
    <div class="container mt-3">
        <a class="btn btn-primary" href="tambah-jadwal-kuliah.php">Tambah Jadwal Kuliah</a>
        <div class="d-flex justify-content-center">

            <table class="table">
                <thead>
                    <tr>
                        <th scope="col">No</th>
                        <th scope="col">Mata Kuliah</th>
                        <th scope="col">SKS</th>
                        <th scope="col">DOSEN</th>
                        <th scope="col">Ruang</th>
                        <th scope="col">Hari</th>
                        <th scope="col">Waktu</th>
                        <th scope="col">Aksi</th>
                    </tr>
                </thead>
                <tbody>
                    <?php include_once "./aksi/jadwal-kuliah/ambil_jadwal_kuliah.php" ?>
                    <?php if ($result->num_rows > 0) : ?>
                        <?php while ($row = $result->fetch_assoc()) : ?>
                            <tr>
                                <th scope="row"><?= $no++; ?></th>
                                <td><?= $row['mata_kuliah']; ?></td>
                                <td><?= $row['sks']; ?></td>
                                <td><?= $row['id_dosen']; ?></td>
                                <td><?= $row['Ruang']; ?></td>
                                <td><?= $row['hari']; ?></td>
                                <td><?= $row['waktu']; ?></td>
                               

                                <td>
                                    <a class="btn btn-primary" href="detail-jadwal-kuliah.php?id=<?= $row['id']; ?>">Detail</a>
                                    <a class="btn btn-danger" href="aksi/jadwal-kuliah/delete_jadwal_kuliah.php?id=<?= $row['id']; ?>">Delete</a>
                                    <a class="btn btn-warning" href="update-jadwal-kuliah.php?id=<?= $row['id']; ?>">Update</a>
                                </td>
                            </tr>
                        <?php endwhile; ?>
                    <?php endif; ?>
                </tbody>
            </table>
        </div>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>

</body>

</html>