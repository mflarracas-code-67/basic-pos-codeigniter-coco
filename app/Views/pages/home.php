<?= view('templates/header', ['title' => 'POS System - Home']) ?>

<div class="container">

    <section class="hero">

        <h1>Point-of-Sale System</h1>

        <p>
            A simple and organized system for managing customers,
            users, and basic POS information.
        </p>

        <a href="<?= base_url('customers') ?>" class="button">
            View Customers
        </a>

    </section>

    <div class="card-container">

        <div class="card">
            <h3>Customer Accounts</h3>
            <p>
                View customer names, email addresses, and phone numbers.
            </p>
        </div>

        <div class="card">
            <h3>User Accounts</h3>
            <p>
                View staff usernames, names, and assigned roles.
            </p>
        </div>

        <div class="card">
            <h3>Simple Management</h3>
            <p>
                This first version uses temporary PHP arrays instead
                of a database.
            </p>
        </div>

    </div>

</div>

<footer>
    <p>&copy; 2026 POS System</p>
</footer>

</body>
</html>