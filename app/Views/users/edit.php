<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title>Edit User</title>

    <link rel="stylesheet" href="<?= base_url('assets/css/style.css') ?>">

    <style>

        .edit-form {
            max-width: 600px;
            margin: 0 auto;
        }

        .edit-form label {
            display: block;
            margin-bottom: 8px;
            font-weight: bold;
        }

        .edit-form input {
            width: 100%;
            padding: 12px;
            margin-bottom: 20px;

            background-color: #000000;
            color: #ffffff;

            border: 2px solid #ffd400;
        }

        .edit-form button {
            padding: 12px 20px;

            background-color: #000000;
            color: #ffffff;

            border: 2px solid #ffd400;

            font-weight: bold;
            cursor: pointer;
        }

        .edit-form button:hover {
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
            Edit User
        </h1>

        <p class="page-description">
            Update the user's account information.
        </p>


        <form
            action="<?= base_url('users/update/' . $user['id']) ?>"
            method="post"
            class="edit-form"
        >

            <label for="username">
                Username
            </label>

            <input
                type="text"
                id="username"
                name="username"
                value="<?= esc($user['username']) ?>"
                required
            >


            <label for="full_name">
                Full Name
            </label>

            <input
                type="text"
                id="full_name"
                name="full_name"
                value="<?= esc($user['full_name']) ?>"
                required
            >


            <button type="submit">
                Update User
            </button>

        </form>


        <a
            href="<?= base_url('users') ?>"
            class="back-button"
        >
            Back to Users
        </a>

    </div>


    <footer>

        <p>
            &copy; 2026 Tasks for Today Management System
        </p>

    </footer>

</body>

</html>