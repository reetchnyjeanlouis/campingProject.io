<?php include 'header.php'; ?>
<main>
    <div class="left-section">
        <h2>Welcome Back!</h2>
        <p>Log in to Georgia Outdoors and continue your adventure!</p>
    </div>
    <div class="right-section">
        <h1>Log In</h1>
        <form action="process_login.php" method="post">
            <fieldset>
                <label for="username">Email/Username *</label>
                <input type="text" id="username" name="username" required>
            </fieldset>
            <fieldset>
                <label for="password">Password *</label>
                <input type="password" id="password" name="password" required>
            </fieldset>
            <button type="submit">Log In</button>
        </form>
        <a href="create_account.php">Create a new account</a>
    </div>
</main>
