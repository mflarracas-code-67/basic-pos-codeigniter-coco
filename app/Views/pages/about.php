<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>About - POS System</title>

    <link rel="stylesheet" href="<?= base_url('assets/css/style.css') ?>">
</head>

<body>

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


    <div class="container">

        <h1 class="page-title">
            About the POS System
        </h1>


        <div class="card">

            <h3>
                About This Project
            </h3>

            <p>
                This project is a basic Point-of-Sale system
                developed using CodeIgniter 4.
            </p>

            <br>

            <p>
                The system provides a landing page, an about page,
                a customer accounts page, and a user accounts page.
            </p>

            <br>

            <p>
                Customer and user information is stored in a
                MySQL database named <strong>basic_pos</strong>.
                CodeIgniter 4 Models are used to retrieve the
                records from the database.
            </p>

            <br>

            <p>
                The CustomerModel retrieves customer information
                from the <strong>customers</strong> table, while
                the UserModel retrieves user information from the
                <strong>users</strong> table.
            </p>

        </div>

    </div>


    <footer>

        <p>
            &copy; 2026 POS System
        </p>

    </footer>

</body>

</html>