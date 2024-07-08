<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.0/dist/css/bootstrap.min.css">
    <style>
        /* Customize additional styles here */
        body {
            background-color: #e9f0f5; /* Warna background biru muda pudar */
        }
        .container {
            max-width: 400px;
            margin: 130px auto;
            padding: 30px;
            border: 1px solid #ced4da;
            border-radius: 8px;
            background-color: #fff;
            box-shadow: 0 0 10px rgba(0,0,0,0.1);
            display: flex;
            flex-direction: column;
            align-items: center;
            position: relative; /* Untuk posisi relatif pada container */
        }
        .form-control {
            margin-bottom: 20px;
            height: 40px;
        }
        .btn-primary {
            background-color: #007bff;
            border-color: #007bff;
            height: 50px;
            font-size: 18px;
        }
        .btn-primary:hover {
            background-color: #0056b3;
            border-color: #0056b3;
        }
        .btn-link {
            color: #007bff;
        }
        /* Animasi untuk gambar */
        .login-logo {
            width: 80px; /* Sesuaikan ukuran gambar */
            height: auto;
            margin-right: 10px; /* Jarak antara logo dan teks */
        }
        .login-header {
            display: flex;
            align-items: center;
            justify-content: center;
            margin-bottom: 20px; /* Jarak antara header dan form */
        }
    </style>
</head>
<body>
    <div class="container">
        <div class="login-header">
            <img src="https://images.tokopedia.net/img/cache/215-square/GAnVPX/2023/6/24/57a5c366-74c8-4fea-b1aa-d57c0693a55c.jpg" alt="Logo" class="login-logo">
            <h3 class="mt-4 mb-3">Welcome!</h3>
        </div>
        <?php if(session()->getFlashdata('msg')): ?>
            <div class="alert alert-danger"><?= session()->getFlashdata('msg') ?></div>
        <?php endif; ?>
        <form action="/login" method="post">
            <div class="form-group">
                <input type="text" class="form-control" id="username" name="username" placeholder="Username" required>
            </div>
            <div class="form-group">
                <input type="password" class="form-control" id="password" name="password" placeholder="Password" required>
            </div>
            <button type="submit" class="btn btn-primary btn-block">Login</button>
            <div class="text-center mt-3">
                <a href="/register" class="btn-link">Create an account</a>
            </div>
        </form>
    </div>

    <!-- Optional JavaScript; choose one of the two! -->
    <!-- Option 1: jQuery and Bootstrap Bundle (includes Popper) -->
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.0/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
