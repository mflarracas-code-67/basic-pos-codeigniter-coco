<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title>Edit Customer</title>

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
            Edit Customer
        </h1>

        <p class="page-description">
            Update the customer's information.
        </p>


        <form
            action="<?= base_url('customers/update/' . $customer['id']) ?>"
            method="post"
            class="edit-form"
        >

            <label for="full_name">
                Full Name
            </label>

            <input
                type="text"
                id="full_name"
                name="full_name"
                value="<?= esc($customer['full_name']) ?>"
                required
            >


            <label for="email">
                Email
            </label>

            <input
                type="email"
                id="email"
                name="email"
                value="<?= esc($customer['email']) ?>"
                required
            >


            <label for="phone">
                Phone
            </label>

            <input
                type="text"
                id="phone"
                name="phone"
                value="<?= esc($customer['phone']) ?>"
            >


            <button type="submit">
                Update Customer
            </button>

        </form>


        <a
            href="<?= base_url('customers') ?>"
            class="back-button"
        >
            Back to Customers
        </a>

    </div>


    <footer>

        <p>
            &copy; 2026 Tasks for Today Management System
        </p>

    </footer>

</body>

</html>