<?php
// Start the session
session_start();

// Include the database connection
include 'db_connections.php';

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $email = $conn->real_escape_string($_POST['email']);

    // Check if the email exists in the database
    $sql = "SELECT * FROM user WHERE email_id='$email'";
    $result = $conn->query($sql);

    if ($result->num_rows > 0) {
        // Generate a unique token
        $token = random_int(100000, 999999); 

        // Set token expiration (1 hour)
        $expires_at = date("Y-m-d H:i:s", strtotime('+1 hour'));

        // Store the token and expiration in the database
        $sql = "INSERT INTO password_resets (email, token, expires_at) VALUES ('$email', '$token', '$expires_at')";

        if ($conn->query($sql) === TRUE) {
            // Create the reset URL
            $reset_link = "http://localhost/New_gg/password_reset.php?token=" . $token;
            $_SESSION['message'] = "$reset_link";
            header("Location: ../loginindex.php");
            exit();
        } else {
            $_SESSION['error'] = "Failed to create a password reset request.";
        }
        
    } else {
        $_SESSION['error'] = "No user found with this email address.";
    }
}

$conn->close();
?>
