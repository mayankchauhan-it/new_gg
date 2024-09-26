<?php
// Start the session
session_start();

// Include the database connection
include '../php_files/db_connections.php';

if (isset($_GET['token'])) {
    $token = $_GET['token'];

    // Check if the token is valid and not expired
    $sql = "SELECT * FROM password_resets WHERE token='$token' AND expires_at > NOW()";
    $result = $conn->query($sql);

    if ($result->num_rows > 0) {
        if ($_SERVER["REQUEST_METHOD"] == "POST") {
            $password = password_hash($_POST['password'], PASSWORD_BCRYPT);

            // Update the user's password
            $row = $result->fetch_assoc();
            $email = $row['email'];
            $sql = "UPDATE user SET u_pw='$password' WHERE email_id='$email'";

            if ($conn->query($sql) === TRUE) {
                // Delete the token after successful password reset
                $conn->query("DELETE FROM password_resets WHERE token='$token'");
                $_SESSION['message'] = "Your password has been successfully reset!";
                header("Location: login.php");
                exit();
            }
        }
    } else {
        $_SESSION['error'] = "This link is invalid or expired.";
    }
}

$conn->close();
?>

<!DOCTYPE html>
<html>
<head>
    <title>Reset Password</title>
</head>
<body>
    <h1>Reset Password</h1>
    <?php if(isset($_SESSION['message'])) echo $_SESSION['message']; ?>
    <?php if(isset($_SESSION['error'])) echo $_SESSION['error']; ?>

    <form method="POST" action="">
        <input type="password" name="password" placeholder="Enter new password" required>
        <button type="submit">Reset Password</button>
    </form>
</body>
</html>
