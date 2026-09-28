<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title>Customer Accounts</title>

    <link rel="stylesheet" href="<?= base_url('assets/css/style.css') ?>">

    <style>

        .customer-form {
            margin-bottom: 30px;
        }

        .customer-form input {
            padding: 10px;
            margin-right: 10px;
            margin-bottom: 10px;
        }

        .customer-form button {
            padding: 10px 18px;
        }

        .customer-actions {
            display: flex;
            gap: 15px;
            align-items: center;
        }

        .customer-actions a {
            display: inline-block;
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
            Customer Accounts
        </h1>

        <p class="page-description">
            Add and manage customer accounts.
        </p>


        <!-- Add Customer Form -->

        <form
            action="<?= base_url('customers/add') ?>"
            method="post"
            class="customer-form"
        >

            <input
                type="text"
                name="full_name"
                placeholder="Full Name"
                required
            >

            <input
                type="email"
                name="email"
                placeholder="Email"
                required
            >

            <input
                type="text"
                name="phone"
                placeholder="Phone"
            >

            <button type="submit">
                Add Customer
            </button>

        </form>


        <!-- Customer List -->

        <div class="table-container">

            <table>

                <thead>

                    <tr>

                        <th>#</th>

                        <th>Full Name</th>

                        <th>Email</th>

                        <th>Phone</th>

                        <th>Created At</th>

                        <th>Actions</th>

                    </tr>

                </thead>


                <tbody>

                    <?php if (!empty($customers)): ?>

                        <?php $number = 1; ?>

                        <?php foreach ($customers as $customer): ?>

                            <tr>

                                <td>
                                    <?= $number++ ?>
                                </td>

                                <td>
                                    <?= esc($customer['full_name']) ?>
                                </td>

                                <td>
                                    <?= esc($customer['email']) ?>
                                </td>

                                <td>
                                    <?= esc($customer['phone']) ?>
                                </td>

                                <td>
                                    <?= esc($customer['created_at']) ?>
                                </td>

                                <td>

                                    <div class="customer-actions">

                                        <a
                                            href="<?= base_url('customers/edit/' . $customer['id']) ?>"
                                        >
                                            Edit
                                        </a>

                                        <a
                                            href="<?= base_url('customers/delete/' . $customer['id']) ?>"
                                            onclick="return confirm('Are you sure you want to delete this customer?');"
                                        >
                                            Delete
                                        </a>

                                    </div>

                                </td>

                            </tr>

                        <?php endforeach; ?>

                    <?php else: ?>

                        <tr>

                            <td colspan="6" style="text-align: center;">
                                No customers found.
                            </td>

                        </tr>

                    <?php endif; ?>

                </tbody>

            </table>

        </div>

    </div>


    <footer>

        <p>
            &copy; 2026 Tasks for Today Management System
        </p>

    </footer>

</body>

</html>