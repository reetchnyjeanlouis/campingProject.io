<?php
// Get login information
$username = filter_input(INPUT_POST, 'username', FILTER_SANITIZE_STRING);
$password = filter_input(INPUT_POST, 'password', FILTER_SANITIZE_STRING);

// Perform login validation
if ($username === 'admin' && $password === '1234') {
    echo '<h1>Login Successful</h1>';
} else {
    echo '<h1>Invalid Credentials</h1>';
}
?>
