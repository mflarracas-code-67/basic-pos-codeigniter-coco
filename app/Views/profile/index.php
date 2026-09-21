<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title>Profile</title>

    <link rel="stylesheet" href="<?= base_url('assets/css/style.css') ?>">
</head>

<body>

    <nav>

        <div class="logo">
            TASKS FOR TODAY
        </div>

        <div class="nav-links">

            <a href="<?= base_url('/') ?>">
                Today
            </a>

            <a href="<?= base_url('tasks') ?>">
                Task List
            </a>

            <a href="<?= base_url('profile') ?>">
                Profile
            </a>

            <a href="<?= base_url('about') ?>">
                About
            </a>

        </div>

    </nav>


    <div class="container">

        <h1 class="page-title">
            User Profile
        </h1>

        <div class="card">

            <h3>
                Demo User Information
            </h3>

            <br>

            <p>
                <strong>Username:</strong>
                <?= esc($user['username']) ?>
            </p>

            <br>

            <p>
                <strong>Full Name:</strong>
                <?= esc($user['full_name']) ?>
            </p>

            <br>

            <p>
                <strong>Email:</strong>
                <?= esc($user['email']) ?>
            </p>

            <br>

            <p>
                <strong>Created At:</strong>
                <?= esc($user['created_at']) ?>
            </p>

        </div>

    </div>


    <footer>

        <p>
            &copy; 2026 Tasks for Today Management System
        </p>

    </footer>

</body>

</html>