<?php
$late_payment_charge = 100000; // Define the late payment charge here
?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Invoice</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.0/dist/css/bootstrap.min.css">
    <style>
        body {
            font-family: Arial, sans-serif;
            background-color: #f0f0f0;
            padding: 20px;
        }
        .invoice-container {
            max-width: 1114px;
            margin: 0 auto;
            background-color: #ffffff;
            padding: 20px;
            border: 1px solid #dddddd;
            box-shadow: 0px 0px 10px rgba(0, 0, 0, 0.1);
        }
        .invoice-header {
            text-align: center;
            margin-bottom: 20px;
        }
        .invoice-header h1 {
            margin-bottom: 5px;
            color: #007bff;
        }
        .invoice-header p {
            margin: 5px 0;
            font-size: 14px;
        }
        .invoice-table {
            width: 100%;
            border-collapse: collapse;
            margin-bottom: 20px;
        }
        .invoice-table th, .invoice-table td {
            border: 1px solid #dddddd;
            padding: 8px;
        }
        .invoice-table th {
            background-color: #f2f2f2;
            text-align: left;
            font-size: 14px;
        }
        .invoice-table td {
            font-size: 14px;
        }
        .invoice-footer {
            position: fixed;
            bottom: 20px;
            right: 20px;
            background-color: #ffffff;
            border: 1px solid #dddddd;
            padding: 10px 15px;
            box-shadow: 0px 0px 10px rgba(0, 0, 0, 0.1);
        }
        .invoice-footer button {
            background-color: #007bff;
            color: #ffffff;
            border: none;
            padding: 10px 15px;
            cursor: pointer;
            border-radius: 5px;
        }
    </style>
</head>
<body>
    <div class="invoice-container">
        <!-- Company Letterhead -->
        <div class="invoice-header">
            <h1>Invoice</h1>
            <p>PT HUALONG CONSTRUCTION MACHINERY INDONESIA</p>
            <p>KOMPLEK PERTOKOAN, Jl. Ruko Glodok Jaya No.23, Mangga Besar, Kec. Taman Sari, Kota Jakarta Barat, Daerah Khusus Ibukota Jakarta 11180</p>
            <p>Phone: +62 8123 56789</p>
        </div>

        <!-- Invoice Details -->
        <div class="card">
            <div class="card-body">
                <h5 class="card-title">Detail Order</h5>
                <table class="invoice-table table-responsive">
                    <thead>
                        <tr>
                            <th>Customer ID</th>
                            <th>Nama Barang</th>
                            <th>Quantity</th>
                            <th>Nama Customer</th>
                            <th>Alamat Customer</th>
                            <th>Tanggal Pesanan</th>
                            <th>Total Harga</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <td><?= $order['custid'] ?></td>
                            <td><?= $order['nama_barang'] ?></td>
                            <td><?= $order['quantity'] ?></td>
                            <td><?= $order['nama_customer'] ?></td>
                            <td><?= $order['alamat_customer'] ?></td>
                            <td><?= $order['tanggal_pesanan'] ?></td>
                            <td>Rp. <?= number_format($order['total_harga'], 0, '.', ',') ?></td>
                        </tr>
                        <!-- Add more rows if necessary -->
                    </tbody>
                </table>

                <!-- SKU Information -->
                <div style="font-size:14px; font-style: italic;">
                    * Invoice No. : INVOICE001
                    * Invoice Date : <?= date('Y-m-d') ?>
                    * Payment Terms : Due within <?= date('d', strtotime('+7 days')) ?> days
                    * Late Payment Charge : <?= number_format($late_payment_charge) ?> IDR <br>
                    *) Invoice ini telah terbit dan berlaku sebagai bukti transaksi yang sah. Mohon melakukan pembayaran sesuai dengan syarat dan ketentuan yang berlaku.
                    
                </div>

                <!-- Additional Information or Invoice Form here -->
            </div>
        </div>
    </div>

    <!-- Floating Print Button -->
    <div class="invoice-footer">
        <button onclick="window.print()">Print Invoice</button>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.0/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>