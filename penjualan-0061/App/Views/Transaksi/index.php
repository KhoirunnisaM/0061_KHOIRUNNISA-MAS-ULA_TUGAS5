<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <title>Halaman Transaksi</title>
    <link href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" rel="stylesheet">
    <style>
        h1 {
            margin-top: 20px;
        }
        .btn-add {
            color: #6c757d;
            border: 1px solid #6c757d;
        }
        .btn-add:hover {
            color: #fff;
            background-color: #6c757d;
        }
        .btn-detail {
            color: #28a745;
            border: 1px solid #28a745;
        }
        .btn-detail:hover {
            color: #fff;
            background-color: #28a745;
        }
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
    <h1>Daftar Transaksi</h1>

    <a href="index.php?controller=transaksi&action=create" class="btn btn-add mb-3">Tambah Data</a>

    <table class="table table-striped table-bordered">
        <thead class="thead-light">
            <tr>
                <th>No</th>
                <th>ID Transaksi</th>
                <th>Kode Barang</th>
                <th>ID Pelanggan</th>
                <th>Jumlah</th>
                <th>Total Harga</th>
                <th>Tanggal Transaksi</th>
                <th>Aksi</th>
            </tr>
        </thead>
        <tbody>
            <?php foreach ($transaksiList as $key => $transaksi): ?>
                <tr>
                    <td><?= $key + 1 ?></td>
                    <td><?= $transaksi['id'] ?></td>
                    <td><?= $transaksi['kode_barang'] ?></td>
                    <td><?= $transaksi['id_pelanggan'] ?></td>
                    <td><?= $transaksi['jumlah'] ?></td>
                    <td><?= number_format($transaksi['total_harga'], 2, '.', ',') ?></td>
                    <td><?= $transaksi['tanggal'] ?></td>
                    <td>
                        <a href="index.php?controller=transaksi&action=detail&id=<?= $transaksi['id'] ?>" class="btn btn-sm btn-detail">Detail</a>
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
