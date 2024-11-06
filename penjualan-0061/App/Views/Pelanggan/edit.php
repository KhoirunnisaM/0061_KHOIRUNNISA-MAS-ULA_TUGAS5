<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <title>Edit Pelanggan</title>
    <link href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" rel="stylesheet">
    <style>
        .form-container {
            max-width: 600px;
            margin: 20px auto;
            padding: 20px;
            border: 1px solid #ddd;
            border-radius: 5px;
            background-color: #f9f9f9;
        }
        .form-title {
            font-weight: bold;
            margin-bottom: 20px;
        }
        .btn-update {
            color: #fff;
            background-color: #28a745;
            border: none;
        }
        .btn-update:hover {
            background-color: #218838;
        }
        .btn-back {
            color: #6c757d;
            border: 1px solid #6c757d;
        }
        .btn-back:hover {
            color: #fff;
            background-color: #6c757d;
        }
    </style>
</head>

<body>

<div class="container form-container">
    <h2 class="form-title">Edit Pelanggan</h2>
    <form action="index.php?controller=pelanggan&action=update" method="POST">

        <div class="form-group">
            <label for="id_pelanggan">ID Pelanggan:</label>
            <input type="text" class="form-control" name="id_pelanggan" value="<?= $pelanggan['id_pelanggan'] ?>" required>
        </div>

        <div class="form-group">
            <label for="nama_pelanggan">Nama Pelanggan:</label>
            <input type="text" class="form-control" name="nama_pelanggan" value="<?= $pelanggan['nama_pelanggan'] ?>" required>
        </div>

        <div class="form-group">
            <label for="alamat">Alamat:</label>
            <input type="text" class="form-control" name="alamat" value="<?= $pelanggan['alamat'] ?>" required>
        </div>

        <button type="submit" class="btn btn-update">Update</button>
        <a href="index.php?controller=pelanggan&action=index" class="btn btn-back">Kembali</a>
    </form>
</div>

<script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.2/dist/js/bootstrap.bundle.min.js"></script>

</body>

</html>
