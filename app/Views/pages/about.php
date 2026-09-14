<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="UTF-8">

    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title>About - POS System</title>

    <link rel="stylesheet" href="<?= base_url('assets/css/style.css') ?>">

</head>

<body>

    <!-- Navigation -->

    <nav>

        <div class="logo">
            POS SYSTEM
        </div>

        <div class="nav-links">

            <a href="<?= base_url('/') ?>">
                Home
            </a>

            <a href="<?= base_url('about') ?>">
                About
            </a>

            <a href="<?= base_url('customers') ?>">
                Customers
            </a>

            <a href="<?= base_url('users') ?>">
                Users
            </a>

        </div>

    </nav>


    <!-- Main Content -->

    <div class="container">

        <h1 class="page-title">
            About the POS System
        </h1>


        <div class="card">

            <h3>
                About This Project
            </h3>

            <p>
                This project is the first version of a basic
                Point-of-Sale system developed using CodeIgniter 4.
            </p>

            <br>

            <p>
                The system currently provides a landing page,
                an about page, a customer accounts page,
                and a user accounts page.
            </p>

            <br>

            <p>
                Customer and user information is temporarily
                stored using static PHP arrays. A database can
                be added in a future version of the system.
            </p>

        </div>

    </div>


    <!-- Footer -->

    <footer>

        <p>
            &copy; 2026 POS System
        </p>

    </footer>

</body>

</html>