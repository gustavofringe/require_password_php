<?php
require 'function.php';
?>
<!doctype html>
<html class="no-js" lang="">
<head>
    <meta charset="utf-8">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <title></title>
    <meta name="description" content="">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <link rel="apple-touch-icon" href="apple-touch-icon.png">
    <!-- Place favicon.ico in the root directory -->
    <link rel="icon" href="<?= BASE_URL; ?>favicon.ico">
    <link rel="stylesheet" href="<?= BASE_URL; ?>css/bootstrap.css">
    <script src="<?= BASE_URL; ?>js/vendor/modernizr-2.8.3.min.js"></script>
</head>

<body>

<div class="container">
    <div class="header clearfix">
        <nav>
            <ul class="nav nav-pills float-right">
                <li class="nav-item">
                    <a class="nav-link active" href="<?= BASE_URL; ?>">Home <span class="sr-only">(current)</span></a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="<?= BASE_URL; ?>partials/login.php">Login</a>
                </li>
                <?php if(isset($_SESSION['auth'])): ?>
                <li class="nav-item">
                    <a class="nav-link" href="<?= BASE_URL; ?>partials/account.php">Account</a>
                </li>
                <?php endif; ?>
            </ul>
        </nav>
        <h3 class="text-muted">Project name</h3>
    </div>

<div class="container">

    <?php if (isset($_SESSION['flash'])): ?>
    <?php foreach ($_SESSION['flash'] as $type => $message): ?>
        <div class="alert alert-<?= $type; ?>">
            <?= $message; ?>
        </div>
    <?php endforeach; ?>
    <?php unset($_SESSION['flash']); ?>
<?php endif; ?>