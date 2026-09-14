<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="UTF-8">

    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title>POS System - Home</title>

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
                    and phone numbers.
                </p>

            </div>


            <div class="card">

                <h3>
                    User Accounts
                </h3>

                <p>
                    View staff usernames, names,
                    and assigned roles.
                </p>

            </div>


            <div class="card">

                <h3>
                    Simple Management
                </h3>

                <p>
                    This first version uses temporary PHP
                    arrays instead of a database.
                </p>

            </div>

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