<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Material Inventory</title>
    <!-- Include CSS stylesheets -->
    <link rel="stylesheet" href="/css/styles.css">
</head>
<body>
    <!-- Sidebar -->
    <div class="sidebar">
        <h2>Sidebar</h2>
        <ul>
            <li><a href="/materials">Materials</a></li>
            <li><a href="/categories">Categories</a></li>
            <!-- Tambahkan menu lainnya sesuai kebutuhan -->
        </ul>
    </div>

    <!-- Konten Utama -->
    <div class="content">
        <?= $this->renderSection('content') ?>
    </div>

    <!-- Include JavaScript -->
    <script src="/js/scripts.js"></script>
</body>
</html>
