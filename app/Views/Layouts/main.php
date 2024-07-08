<?php

defined('BASEPATH') or exit('No direct script access allowed');

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <title><?= $title ?></title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link rel="stylesheet" href="<?= base_url('assets/css/bootstrap.min.css') ?>">
</head>
<body>
    <nav class="navbar navbar-expand-lg navbar-dark bg-dark">
        <!-- Your navigation menu here -->
    </nav>

    <div class="container-fluid">
        <div class="row">
            <aside class="col-md-3 sidebar bg-light">
                <?= $this->renderSection('sidebar') ?>
            </aside>

            <div class="col-md-9 main-content">
                <?= $this->renderSection('content') ?>
            </div>
        </div>
    </div>

    <script src="<?= base_url('assets/js/jquery.min.js') ?>"></script>
    <script src="<?= base_url('assets/js/bootstrap.min.js') ?>"></script>
</body>
</html>