<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="UTF-8">

    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title>Customer Accounts</title>

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
            Customer Accounts
        </h1>

        <p class="page-description">
            List of registered customers.
        </p>


        <div class="table-container">

            <table>

                <thead>

                    <tr>

                        <th>#</th>

                        <th>Full Name</th>

                        <th>Email</th>

                        <th>Phone</th>

                    </tr>

                </thead>


                <tbody>

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

                        </tr>

                    <?php endforeach; ?>

                </tbody>

            </table>

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