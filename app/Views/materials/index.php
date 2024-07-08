<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Material List</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.0/dist/css/bootstrap.min.css">
    <style>
        /* Sidebar Style */
        .sidebar {
            position: fixed;
            top: 0;
            left: 0;
            height: 100%;
            width: 250px;
            background-color: #343a40; /* Warna background */
            padding-top: 20px;
            transition: all 0.3s ease; /* Animasi transisi */
            box-shadow: 2px 0px 5px rgba(0, 0, 0, 0.2); /* Shadow */
        }
        .sidebar h2 {
            color: #ffffff; /* Warna teks */
            text-align: center;
            margin-bottom: 30px;
        }
        .sidebar ul {
            list-style-type: none;
            padding: 0;
        }
        .sidebar ul li {
            padding: 15px;
            border-bottom: 1px solid #4e555b; /* Warna garis */
            transition: background-color 0.3s ease; /* Animasi background */
        }
        .sidebar ul li a {
            color: #ffffff; /* Warna teks link */
            text-decoration: none;
            transition: color 0.3s ease; /* Animasi warna teks */
        }
        .sidebar ul li a:hover {
            color: #007bff; /* Warna teks saat hover */
        }

        /* Konten Utama */
        .main-content {
            margin-left: 250px; /* Sesuaikan dengan lebar sidebar */
            padding: 20px;
            transition: margin-left 0.3s ease; /* Animasi saat sidebar ditutup */
        }

        /* Responsive */
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
        <h2>Dashboard</h2>
        <ul>
            <li><a href="/">List Stok</a></li>
            <li><a href="/orders">Pesanan Customer</a></li>
            <li><a href="/customers">Data Customer</a></li>
            <li><a href="/">Log Out</a></li>
        </ul>
    </div>

    <!-- Konten Utama -->
    <div class="main-content">
        <h1 class="text-center">Material List</h1>
        <a href="/materials/create" class="btn btn-primary mb-3">Add New Material</a>
        <table class="table table-striped table-bordered">
            <thead>
                <tr>
                    <th scope="col">#</th>
                    <th scope="col">ID</th>
                    <th scope="col">Nama Barang</th>
                    <th scope="col">Stok Barang</th>
                    <th scope="col">Actions</th>
                </tr>
            </thead>
            <tbody>
                <?php foreach($materials as $key => $material): ?>
                <tr>
                    <td><?= $key+1 ?></td>
                    <td><?= $material['id'] ?></td>
                    <td><?= $material['nama_barang'] ?></td>
                    <td><?= $material['stok_barang'] ?></td>
                    <td>
                        <a href="/materials/edit/<?= $material['id'] ?>" class="btn btn-secondary btn-sm">Edit</a>
                        <a href="/materials/delete/<?= $material['id'] ?>" class="btn btn-danger btn-sm">Delete</a>
                    </td>
                </tr>
                <?php endforeach; ?>
            </tbody>
        </table>
    </div>

    <!-- Script Bootstrap -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.0/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
