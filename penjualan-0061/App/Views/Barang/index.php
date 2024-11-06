<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Halaman Barang</title>
    <!-- Link to Bootstrap CSS -->
    <link href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" rel="stylesheet">
    <style>
        h1 {
            margin-top: 20px;
        }
        .btn-edit {
            color: #ffc107; 
            border: 1px solid #ffc107;
        }
        .btn-delete {
            color: #dc3545; 
            border: 1px solid #dc3545;
        }
        .btn-edit:hover {
            color: #fff;
            background-color: #ffc107;
        }
        .btn-delete:hover {
            color: #fff;
            background-color: #dc3545;
        }
    </style>
    </style>
</head>
<body>

<nav class="navbar navbar-expand-lg navbar-light bg-light mb-3">
    <ul class="navbar-nav mr-auto">
        <li class="nav-item">
            <a class="nav-link" href="index.php?controller=home&action=index">Home</a>
        </li>
        <li class="nav-item">
            <a class="nav-link" href="index.php?controller=barang&action=index">Barang</a>
        </li>
        <li class="nav-item">
            <a class="nav-link" href="index.php?controller=pelanggan&action=index">Pelanggan</a>
        </li>
        <li class="nav-item">
            <a class="nav-link" href="index.php?controller=transaksi&action=index">Transaksi</a>
        </li>
    </ul>
</nav>

<div class="container">
    <h1>Daftar Barang</h1>

    <a href="index.php?controller=barang&action=create" class="btn btn-outline-secondary mb-3">Tambah Data</a>

    <table class="table table-striped table-bordered">
        <thead class="thead-light">
            <tr>
                <th>No</th>
                <th>Kode Barang</th>
                <th>Nama Barang</th>
                <th>Harga</th>
                <th>Stok</th>
                <th>Aksi</th>
            </tr>
        </thead>
        <tbody>
            <?php foreach ($data as $key => $barang): ?>
                <tr>
                    <td><?= $key + 1 ?></td>
                    <td><?= $barang['kode_barang'] ?></td>
                    <td><?= $barang['nama_barang'] ?></td>
                    <td><?= number_format($barang['harga'], 2, '.', ',') ?></td>
                    <td><?= $barang['stok'] ?></td>
                    <td>
                        <a href="index.php?controller=barang&action=edit&id=<?= $barang['kode_barang'] ?>" class="btn btn-sm btn-edit">Edit</a>
                        <a href="index.php?controller=barang&action=delete&id=<?= $barang['kode_barang'] ?>" class="btn btn-sm btn-delete" 
                        onclick="return confirm('Kamu yakin akan menghapus data ini ?');">Hapus</a>
                    </td>
                </tr>
            <?php endforeach; ?>
        </tbody>
    </table>
</div>

<script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.2/dist/js/bootstrap.bundle.min.js"></script>

</body>
</html>