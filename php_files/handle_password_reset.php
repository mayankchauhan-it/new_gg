<?php
// handle_password_reset.php
session_start();
include 'db_connections.php';

if (isset($_GET['token'])) {
    $token = $_GET['token'];

    // Check if the token is valid and not expired
    $sql = "SELECT * FROM password_resets WHERE token='$token'";
    $result = $conn->query($sql);

    if ($result->num_rows > 0) {
        $row = $result->fetch_assoc();
        $email = $row['email'];

        if ($_SERVER["REQUEST_METHOD"] == "POST") {
            $password = $_POST['password'];
            $hashpassword = password_hash($password, PASSWORD_BCRYPT);
            $sql = "UPDATE user SET u_pw='$hashpassword' WHERE email_id='$email'";

            if ($conn->query($sql) === TRUE) {
                $conn->query("DELETE FROM password_resets WHERE token='$token'");
                $_SESSION['message'] = "Your password has been successfully reset!";
                header("Location: loginindex.php");
                exit();
            } else {
                $_SESSION['error'] = "Failed to update password. Please try again.";
            }
        }
    } else {
        $_SESSION['error'] = "This link is invalid or expired.";
    }
} else {
    $_SESSION['error'] = "No token provided in the URL.";
}

$conn->close();
?>
