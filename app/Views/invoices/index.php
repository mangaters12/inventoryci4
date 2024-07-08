<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Invoice List</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.0/dist/css/bootstrap.min.css">
    <style>
        body {
            font-family: Arial, sans-serif;
            background-color: #f0f0f0;
            padding: 20px;
        }
        .container {
            background-color: #ffffff;
            padding: 20px;
            border: 1px solid #dddddd;
            box-shadow: 0px 0px 10px rgba(0, 0, 0, 0.1);
        }
        .invoice-table {
            width: 100%;
            border-collapse: collapse;
            margin-bottom: 20px;
        }
        .invoice-table th, .invoice-table td {
            border: 1px solid #dddddd;
            padding: 8px;
            text-align: left;
        }
        .invoice-table th {
            background-color: #f2f2f2;
        }
        .btn-create {
            margin-bottom: 20px;
        }
    </style>
</head>
<body>
    <div class="container">
        <h1 class="text-center">Invoice List</h1>
        <a href="/orders" class="btn btn-primary mb-3">Back to Orders</a>
        <table class="invoice-table">
            <thead>
                <tr>
                    <th>ID</th>
                    <th>Customer ID</th>
                    <th>Nama Barang</th>
                    <th>Quantity</th>
                    <th>Nama Customer</th>
                    <th>Alamat Customer</th>
                    <th>Tanggal Pesanan</th>
                    <th>Total Harga</th>
                    <th>Actions</th>
                </tr>
            </thead>
            <tbody>
                <?php foreach($invoices as $invoice): ?>
                <tr>
                    <td><?= $invoice['id'] ?></td>
                    <td><?= $invoice['custid'] ?></td>
                    <td><?= $invoice['nama_barang'] ?></td>
                    <td><?= $invoice['quantity'] ?></td>
                    <td><?= $invoice['nama_customer'] ?></td>
                    <td><?= $invoice['alamat_customer'] ?></td>
                    <td><?= $invoice['tanggal_pesanan'] ?></td>
                    <td><?= 'Rp. ' . number_format($invoice['total_harga'], 0, ',', '.') ?></td>
                    <td>
                        <a href="/invoices/view/<?= $invoice['id'] ?>" class="btn btn-info btn-sm">View</a>
                    </td>
                </tr>
                <?php endforeach; ?>
            </tbody>
        </table>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.0/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
