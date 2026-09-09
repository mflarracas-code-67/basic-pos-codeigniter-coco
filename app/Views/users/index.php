<?= view('templates/header', ['title' => 'User Accounts']) ?>

<div class="container">

    <h1 class="page-title">User Accounts</h1>

    <p style="margin-bottom: 20px;">
        List of system users and staff members.
    </p>

    <div class="table-container">

        <table>

            <thead>
                <tr>
                    <th>#</th>
                    <th>Username</th>
                    <th>Full Name</th>
                    <th>Role</th>
                </tr>
            </thead>

            <tbody>

                <?php $number = 1; ?>

                <?php foreach ($users as $user): ?>

                    <tr>

                        <td><?= $number++ ?></td>

                        <td>
                            <?= esc($user['username']) ?>
                        </td>

                        <td>
                            <?= esc($user['full_name']) ?>
                        </td>

                        <td>
                            <?= esc($user['role']) ?>
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