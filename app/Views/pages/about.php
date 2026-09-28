<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title>About</title>

    <link rel="stylesheet" href="<?= base_url('assets/css/style.css') ?>">

</head>

<body>

    <nav>

        <div class="logo">
            TASKS FOR TODAY
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

            <a href="<?= base_url('tasks') ?>">
                Tasks
            </a>

        </div>

    </nav>


    <div class="container">

        <h1 class="page-title">
            About the System
        </h1>

        <div class="card">

            <h3>
                Tasks for Today Management System
            </h3>

            <br>

            <p>
                This system is designed to help users manage and
                organize their daily tasks.
            </p>

            <br>

            <p>
                The system displays tasks scheduled for today,
                provides a complete task list, and allows users
                to manage their tasks and view system information.
            </p>

            <br>

            <p>
                <strong>Developer:</strong>
                Mico F. Larracas
            </p>

            <br>

            <p>
                <strong>Technology:</strong>
                PHP, CodeIgniter 4, MySQL
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