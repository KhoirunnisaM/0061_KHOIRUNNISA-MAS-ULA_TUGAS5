<!DOCTYPE html>
<html lang="id">

<head>
    <meta charset="UTF-8">
    <title>Tambah Transaksi</title>
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
            margin-bottom: 20px;
            font-weight: bold;
        }

        .total-harga {
            margin-top: 20px;
            font-weight: bold;
        }
    </style>
</head>

<body>

    <div class="container form-container">
        <h2 class="form-title">Tambah Transaksi</h2>
        <form action="index.php?controller=transaksi&action=store" method="POST">
            <div class="form-group">
                <label for="id">ID Transaksi:</label>
                <input type="number" class="form-control" name="id" required>
            </div>

            <div class="form-group">
                <label for="kode_barang">Kode Barang:</label>
                <input type="text" class="form-control" name="kode_barang" required>
            </div>

            <div class="form-group">
                <label for="id_pelanggan">ID Pelanggan:</label>
                <input type="text" class="form-control" name="id_pelanggan" required>
            </div>

            <div class="form-group">
                <label for="jumlah">Jumlah:</label>
                <input type="number" class="form-control" name="jumlah" required>
            </div>

            <div class="form-group">
                <label for="harga_barang">Harga Barang:</label>
                <input type="number" class="form-control" name="harga_barang" required>
            </div>

            <div class="form-group">
                <label for="tanggal">Tanggal Transaksi:</label>
                <input type="date" class="form-control" name="tanggal" required>
            </div>

            <p>Total Harga: <span id="total_harga">0</span></p>

            <button type="submit" class="btn btn-primary">Simpan</button>
            <a href="index.php?controller=transaksi&action=index" class="btn btn-secondary">Kembali</a>
        </form>
    </div>

    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.2/dist/js/bootstrap.bundle.min.js"></script>

    <script>
        document.querySelector("input[name='jumlah']").addEventListener("input", calculateTotal);
        document.querySelector("input[name='harga_barang']").addEventListener("input", calculateTotal);

        function calculateTotal() {
            let jumlah = parseFloat(document.querySelector("input[name='jumlah']").value) || 0;
            let hargaBarang = parseFloat(document.querySelector("input[name='harga_barang']").value) || 0;
            let total = jumlah * hargaBarang;
            document.getElementById("total_harga").innerText = total;
        }
    </script>
</body>

</html>
