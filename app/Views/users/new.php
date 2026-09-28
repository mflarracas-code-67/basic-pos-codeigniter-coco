<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title>New User</title>

    <link rel="stylesheet" href="<?= base_url('assets/css/style.css') ?>">

    <style>

        .user-form {
            max-width: 600px;
            margin: 0 auto;
        }

        .user-form label {
            display: block;
            margin-bottom: 8px;
            font-weight: bold;
        }

        .user-form input {
            width: 100%;
            padding: 12px;
            margin-bottom: 20px;

            background-color: #000000;
            color: #ffffff;

            border: 2px solid #ffd400;
        }

        .user-form input:focus {
            outline: none;
            border-color: #ffffff;
        }

        .user-form button {
            padding: 12px 20px;

            background-color: #000000;
            color: #ffffff;

            border: 2px solid #ffd400;

            font-weight: bold;
            cursor: pointer;
        }

        .user-form button:hover {
            background-color: #ffd400;
            color: #000000;
        }

        .back-button {
            display: inline-block;

            margin-top: 20px;

            color: #ffffff;

            border: 2px solid #ffd400;

            padding: 10px 18px;

            text-decoration: none;

            font-weight: bold;
        }

        .back-button:hover {
            background-color: #ffd400;
            color: #000000;
        }

        .error-box {
            max-width: 600px;
            margin: 0 auto 25px auto;

            border: 2px solid #ff4444;
            padding: 15px;

            color: #ffffff;
        }

        .error-box p {
            margin-bottom: 5px;
        }

    </style>

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
            Add New User
        </h1>

        <p class="page-description">
            Create a new system user or staff account.
        </p>


        <?php if (session()->getFlashdata('errors')): ?>

            <div class="error-box">

                <?php foreach (session()->getFlashdata('errors') as $error): ?>

                    <p>
                        <?= esc($error) ?>
                    </p>

                <?php endforeach; ?>

            </div>

        <?php endif; ?>


        <form
            action="<?= base_url('users/add') ?>"
            method="post"
            class="user-form"
        >

            <label for="username">
                Username
            </label>

            <input
                type="text"
                id="username"
                name="username"
                value="<?= old('username') ?>"
                placeholder="Enter username"
                required
            >


            <label for="full_name">
                Full Name
            </label>

            <input
                type="text"
                id="full_name"
                name="full_name"
                value="<?= old('full_name') ?>"
                placeholder="Enter full name"
                required
            >


            <button type="submit">
                Create User
            </button>

        </form>


        <div style="text-align: center;">

            <a
                href="<?= base_url('users') ?>"
                class="back-button"
            >
                Back to Users
            </a>

        </div>

    </div>


    <footer>

        <p>
            &copy; 2026 Tasks for Today Management System
        </p>

    </footer>

</body>

</html>