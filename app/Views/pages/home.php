<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>POS System - Home</title>

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

        <section class="hero">

            <h1>
                Point-of-Sale System
            </h1>

            <p>
                A simple and organized system for managing
                customers, users, and basic POS information.
            </p>

            <a href="<?= base_url('customers') ?>" class="button">
                View Customers
            </a>

        </section>


        <div class="card-container">

            <div class="card">

                <h3>
                    Customer Accounts
                </h3>

                <p>
                    View customer names, email addresses,
                    and phone numbers retrieved from the
                    MySQL database.
                </p>

            </div>


            <div class="card">

                <h3>
                    User Accounts
                </h3>

                <p>
                    View system usernames and names
                    retrieved from the MySQL database.
                </p>

            </div>


            <div class="card">

                <h3>
                    Database Management
                </h3>

                <p>
                    Customer and user information is stored
                    and retrieved using a MySQL database
                    through CodeIgniter 4 models.
                </p>

            </div>

        </div>

    </div>


    <footer>

        <p>
            &copy; 2026 POS System
        </p>

    </footer>

</body>

</html>