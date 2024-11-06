<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <title>Tambah Barang</title>
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
        .btn-save {
            color: #fff;
            background-color: #28a745;
            border: none;
        }
        .btn-save:hover {
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
    <h2 class="form-title">Tambah Barang</h2>
    <form action="index.php?controller=barang&action=store" method="POST">
        <div class="form-group">
            <label for="kode_barang">Kode Barang:</label>
            <input type="text" class="form-control" id="kode_barang" name="kode_barang" required>
        </div>

        <div class="form-group">
            <label for="nama_barang">Nama Barang:</label>
            <input type="text" class="form-control" id="nama_barang" name="nama_barang" required>
        </div>

        <div class="form-group">
            <label for="harga">Harga:</label>
            <input type="number" class="form-control" id="harga" name="harga" required>
        </div>

        <div class="form-group">
            <label for="stok">Stok:</label>
            <input type="number" class="form-control" id="stok" name="stok" required>
        </div>

        <button type="submit" class="btn btn-save">Simpan</button>
        <a href="index.php?controller=barang&action=index" class="btn btn-back">Kembali</a>
    </form>
</div>

<script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.2/dist/js/bootstrap.bundle.min.js"></script>

</body>

</html>
