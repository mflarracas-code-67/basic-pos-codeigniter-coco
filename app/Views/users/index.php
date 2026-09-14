<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>User Accounts</title>

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
            User Accounts
        </h1>

        <p class="page-description">
            List of system users and staff members.
        </p>


        <div class="table-container">

            <table>

                <thead>

                    <tr>

                        <th>
                            #
                        </th>

                        <th>
                            Username
                        </th>

                        <th>
                            Full Name
                        </th>

                        <th>
                            Created At
                        </th>

                    </tr>

                </thead>


                <tbody>

                    <?php $number = 1; ?>

                    <?php foreach ($users as $user): ?>

                        <tr>

                            <td>
                                <?= $number++ ?>
                            </td>

                            <td>
                                <?= esc($user['username']) ?>
                            </td>

                            <td>
                                <?= esc($user['full_name']) ?>
                            </td>

                            <td>
                                <?= esc($user['created_at']) ?>
                            </td>

                        </tr>

                    <?php endforeach; ?>

                </tbody>

            </table>

        </div>

    </div>


    <footer>

        <p>
            &copy; 2026 POS System
        </p>

    </footer>

</body>

</html>