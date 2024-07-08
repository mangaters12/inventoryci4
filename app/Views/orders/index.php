<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Order List</title>
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

    <div class="main-content">
        <h1 class="text-center">Order List</h1>
        <a href="/orders/create" class="btn btn-primary mb-3">Add New Order</a>
        <table class="table table-striped table-bordered">
            <thead>
                <tr>
                    <th>#</th>
                    <!-- <th>ID</th> -->
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
                <?php foreach($orders as $key => $order): ?>
                <tr>
                    <td><?= $key+1 ?></td>
                    <!-- <td><?= $order['id'] ?></td> -->
                    <td><?= $order['custid'] ?></td>
                    <td><?= $order['nama_barang'] ?></td>
                    <td><?= $order['quantity'] ?></td>
                    <td><?= $order['nama_customer'] ?></td>
                    <td><?= $order['alamat_customer'] ?></td>
                    <td><?= $order['tanggal_pesanan'] ?></td>
                    <td><?= $order['total_harga'] ?></td>
                    <td>
                    <a href="/orders/invoice/<?= $order['id'] ?>" class="btn btn-info btn-sm">Create Invoice</a>
    <a href="/orders/edit/<?= $order['id'] ?>" class="btn btn-secondary btn-sm">Edit</a>
    <a href="/orders/delete/<?= $order['id'] ?>" class="btn btn-danger btn-sm">Delete</a>
</td>

                </tr>
                <?php endforeach; ?>
            </tbody>
        </table>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.0/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
