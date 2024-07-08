<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Create New Order</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.0/dist/css/bootstrap.min.css">
    <style>
        .sidebar {
            position: fixed;
            top: 0;
            left: 0;
            height: 100%;
            width: 250px;
            background-color: #343a40;
            padding-top: 20px;
            transition: all 0.3s ease;
            box-shadow: 2px 0px 5px rgba(0, 0, 0, 0.2);
        }
        .sidebar h2 {
            color: #ffffff;
            text-align: center;
            margin-bottom: 30px;
        }
        .sidebar ul {
            list-style-type: none;
            padding: 0;
        }
        .sidebar ul li {
            padding: 15px;
            border-bottom: 1px solid #4e555b;
            transition: background-color 0.3s ease;
        }
        .sidebar ul li a {
            color: #ffffff;
            text-decoration: none;
            transition: color 0.3s ease;
        }
        .sidebar ul li a:hover {
            color: #007bff;
        }
        .main-content {
            margin-left: 250px;
            padding: 20px;
            transition: margin-left 0.3s ease;
        }
        @media (max-width: 768px) {
            .sidebar {
                width: 100%;
                height: auto;
                position: relative;
                box-shadow: none;
                z-index: 1000;
                margin-bottom: 20px;
            }
            .main-content {
                margin-left: 0;
                transition: none;
            }
        }
    </style>
</head>
<body>
     <!-- Sidebar -->
     <div class="sidebar">
        <h2>Sidebar</h2>
        <ul>
            <li><a href="/materials">List Stok</a></li>
            <li><a href="/orders">Pesanan Customer</a></li>
            <li><a href="/customers">Data Customer</a></li>
            <li><a href="/logout">Log Out</a></li>
        </ul>
    </div>

    <div class="container main-content">
        <h1 class="text-center">Create New Order</h1>
        <form action="/orders/store" method="POST">
            <div class="form-group">
                <label for="custid">Customer ID:</label>
                <input type="text" class="form-control" id="custid" name="custid" required>
            </div>
            <div class="form-group">
                <label for="nama_barang">Nama Barang:</label>
                <input type="text" class="form-control" id="nama_barang" name="nama_barang" required>
            </div>
            <div class="form-group">
                <label for="quantity">Quantity:</label>
                <input type="text" class="form-control" id="quantity" name="quantity" required>
            </div>
            <div class="form-group">
                <label for="nama_customer">Nama Customer:</label>
                <input type="text" class="form-control" id="nama_customer" name="nama_customer" required>
            </div>
            <div class="form-group">
                <label for="alamat_customer">Alamat Customer:</label>
                <input type="text" class="form-control" id="alamat_customer" name="alamat_customer" required>
            </div>
            <div class="form-group">
                <label for="tanggal_pesanan">Tanggal Pesanan:</label>
                <input type="text" class="form-control" id="tanggal_pesanan" name="tanggal_pesanan" value="<?= date('Y-m-d') ?>" readonly>
            </div>
            <div class="form-group">
                <label for="total_harga">Total Harga:</label>
                <input type="text" class="form-control" id="total_harga" name="total_harga" required>
            </div>
            <button type="submit" class="btn btn-primary">Submit</button>
        </form>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.0/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
