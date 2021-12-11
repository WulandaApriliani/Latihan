<!DOCTYPE html>
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
    <div class="container">
        <div class="d-flex flex-column justify-content-center mt-3">
            <?php include_once "aksi/dosen/cari_dosen.php" ?>
            <?php if ($result->num_rows == 1) : ?>
                <?php while ($row = $result->fetch_assoc()) : ?>
                    <form action="aksi/dosen/update_dosen.php?id=<?= $row['id']; ?>" method="POST">
                        <div class="mb-3">
                            <label for="nama" class="form-label">Name</label>
                            <input type="text" class="form-control" id="nama" placeholder="Enter Fullname" name="nama" value="<?= $row['nama']; ?>">
                        </div>
                        <div class="mb-3">
                            <label for="email" class="form-label">Email address</label>
                            <input type="email" class="form-control" id="email" placeholder="Enter Email" name="email" value="<?= $row['email']; ?>">
                        </div>
                        <div class="mb-3">
                            <label for="alamat" class="form-label">Address</label>
                            <textarea class="form-control" id="alamat" rows="3" placeholder="Enter Address" name="alamat"><?= $row['alamat']; ?></textarea>
                        </div>
                        <button class="btn btn-primary" type="submit">Update Data</button>
                    </form>
                <?php endwhile; ?>
            <?php endif; ?>
        </div>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>

</body>

</html>