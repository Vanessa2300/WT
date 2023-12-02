<?php
session_start();

// Function to set the user as logged in and set a cookie
function setLoggedIn($username) {
    $_SESSION['username'] = $username;

    // Set a cookie to retain information for 30 minutes (30 * 60 seconds)
    setcookie('loggedInUser', $username, time() + 1800, '/');
}

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $username = $_POST['username']; // Get username from the login form
    $password = $_POST['password']; // Get password from the login form

    // Validate the username and password (You should use a more secure validation and authentication method in a real application)
    // For demonstration purposes, a simple check is done here
    if ($username === 'user' && $password === 'user') {
        // Set the user as logged in and create a cookie
        setLoggedIn($username);
        echo "Login successful. Welcome, " . $username . "!";
    } else {
        echo "Invalid username or password. Please try again.";
    }
}
?>
