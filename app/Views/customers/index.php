<?= view('templates/header', ['title' => 'Customer Accounts']) ?>

<div class="container">

    <h1 class="page-title">Customer Accounts</h1>

    <p style="margin-bottom: 20px;">
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

                        <td><?= $number++ ?></td>

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

<footer>
    <p>&copy; 2026 POS System</p>
</footer>

</body>
</html>