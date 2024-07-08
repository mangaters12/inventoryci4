<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Register</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.0/dist/css/bootstrap.min.css">
    <style>
        /* Customize additional styles here */
        body {
            background-color: #f8f9fa;
        }
        .container {
            max-width: 400px;
            margin: 100px auto;
            padding: 30px;
            border: 1px solid #ced4da;
            border-radius: 8px;
            background-color: #fff;
            box-shadow: 0 0 10px rgba(0,0,0,0.1);
        }
        .form-control {
            margin-bottom: 20px;
            height: 50px;
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
    </style>
</head>
<body>
    <div class="container">
        <h2 class="mt-5 mb-4 text-center">Register</h2>
        <form action="/register" method="post">
            <div class="form-group">
                <input type="text" class="form-control" id="username" name="username" placeholder="Username" required>
            </div>
            <div class="form-group">
                <input type="email" class="form-control" id="email" name="email" placeholder="Email" required>
            </div>
            <div class="form-group">
                <input type="password" class="form-control" id="password" name="password" placeholder="Password" required>
            </div>
            <button type="submit" class="btn btn-primary btn-block">Register</button>
            <div class="text-center mt-3">
                Already have an account? <a href="/login" class="btn-link">Login here</a>
            </div>
        </form>
    </div>

    <!-- Optional JavaScript; choose one of the two! -->
    <!-- Option 1: jQuery and Bootstrap Bundle (includes Popper) -->
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.0/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
