<!DOCTYPE html>
<html lang="id">

<head>
    <meta charset="UTF-8">
    <title>Detail Transaksi</title>
    <link href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" rel="stylesheet">
    <style>
        body {
            background-color: #f8f9fa; 
        }

        .card {
            margin: 20px auto;
            border: none;
            border-radius: 8px;
            box-shadow: 0 2px 10px rgba(0, 0, 0, 0.1); 
            max-width: 500px; 
        }

        .card-header {
            background-color: #ececec;
            color: #000000;
            font-size: 1.5em;
            font-weight: bold;
            text-align: center;
            border-radius: 8px 8px 0 0; 
            padding: 15px; 
        }

        .card-body {
            padding: 20px;
            background-color: #f9f9f9; 
            border-radius: 0 0 8px 8px; 
        }

        .row {
            margin-bottom: 10px; 
        }

        .label {
            font-weight: bold; 
            color: #343a40; 
        }

        .btn-back {
            width: 100%;
            margin-top: 15px;
        }
    </style>
</head>

<body>
    <div class="container">
        <div class="card">
            <div class="card-header">
                Detail Transaksi ID: <?= htmlspecialchars($transaksiDetail['id']) ?>
            </div>
            <div class="card-body">
                <div class="row">
                    <div class="col-5 label">Nama Barang :</div>
                    <div class="col-7"><?= htmlspecialchars($transaksiDetail['nama_barang']) ?></div>
                </div>
                <div class="row">
                    <div class="col-5 label">Nama Pelanggan :</div>
                    <div class="col-7"><?= htmlspecialchars($transaksiDetail['nama_pelanggan']) ?></div>
                </div>
                <div class="row">
                    <div class="col-5 label">Jumlah :</div>
                    <div class="col-7"><?= htmlspecialchars($transaksiDetail['jumlah']) ?></div>
                </div>
                <div class="row">
                    <div class="col-5 label">Harga Barang :</div>
                    <div class="col-7"><?= htmlspecialchars($transaksiDetail['harga']) ?></div>
                </div>
                <div class="row">
                    <div class="col-5 label">Total Harga :</div>
                    <div class="col-7"><?= htmlspecialchars($transaksiDetail['total_harga']) ?></div>
                </div>
                <div class="row">
                    <div class="col-5 label">Tanggal Transaksi :</div>
                    <div class="col-7"><?= htmlspecialchars($transaksiDetail['tanggal']) ?></div>
                </div>
                <a href="index.php?controller=transaksi&action=index" class="btn btn-secondary btn-back">Kembali</a>
            </div>
        </div>
    </div>

    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.2/dist/js/bootstrap.bundle.min.js"></script>
</body>

</html>
