<?php include 'header.php'; ?>
<main>
    <div class="left-section">
        <h2>Join Georgia Outdoors!</h2>
        <p>Discover the best camping spots and outdoor adventures in Georgia.</p>
        <p>Sign up today to access exclusive member benefits!</p>
    </div>
    <div class="right-section">
        <h1>Create Account</h1>
        <form action="process_create_account.php" method="post">
            <fieldset>
                <label for="first_name">First Name *</label>
                <input type="text" id="first_name" name="first_name" required>
            </fieldset>
            <fieldset>
                <label for="email">Email *</label>
                <input type="email" id="email" name="email" required>
            </fieldset>
            <fieldset>
                <label for="password">Password *</label>
                <input type="password" id="password" name="password" required>
            </fieldset>
            <button type="submit">Sign Up</button>
        </form>
        <a href="login.php">Already have an account? Log in</a>
    </div>
</main>
