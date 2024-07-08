<<!DOCTYPE html>
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
        <h2>Sidebar</h2>
        <ul>
            <li><a href="/materials">List Stok</a></li>
            <li><a href="/orders">Pesanan Customer</a></li>
            <li><a href="/customers">Data Customer</a></li>
            <li><a href="/logout">Log Out</a></li>
        </ul>
    </div>


<body>
    <div class="container">
        <h1 class="text-center">Add New Material</h1>
        <form action="/materials/store" method="post" class="form-horizontal">
            <div class="form-group">
                <label for="nama_barang" class="col-sm-2 control-label">Nama Barang:</label>
                <div class="col-sm-10">
                    <input type="text" name="nama_barang" required class="form-control">
                </div>
            </div>

            <div class="form-group">
                <label for="stok_barang" class="col-sm-2 control-label">Stok Barang:</label>
                <div class="col-sm-10">
                    <input type="number" name="stok_barang" required class="form-control">
                </div>
            </div>

            <div class="form-group">
                <div class="col-sm-offset-2 col-sm-10">
                    <button type="submit" class="btn btn-primary">Add Material</button>
                </div>
            </div>
        </form>
    </div>
</body>
</html>