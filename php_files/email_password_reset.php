<?php
// Start the session
session_start();

include '../php_files/db_connections.php';

if (isset($_GET['token'])) {
    $token = $_GET['token'];

    $sql = "SELECT * FROM password_resets WHERE token='$token' AND expires_at > NOW()";
    $result = $conn->query($sql);

    echo "Number of rows found: " . $result->num_rows . "<br>";

    if ($result->num_rows > 0) {
        $row = $result->fetch_assoc();
        $email = $row['email'];
        echo "Email associated with token: " . $email . "<br>";

        if ($_SERVER["REQUEST_METHOD"] == "POST") {
            $password = $_POST['password'];

            $hashpassword = password_hash($password, PASSWORD_BCRYPT);

            $sql = "UPDATE user SET u_pw='$hashpassword' WHERE email_id='$email'";

            if ($conn->query($sql) === TRUE) {

                $conn->query("DELETE FROM password_resets WHERE token='$token'");

                $_SESSION['message'] = "Your password has been successfully reset!";
                header("Location: ../loginindex.php");
                exit();
            } else {
                error_log("Failed to update password for email: " . $email);
                $_SESSION['error'] = "Failed to update password. Please try again.";
            }
        }
    } else {
        echo "No matching token found, or the token has expired.<br>";
        $_SESSION['error'] = "This link is invalid or expired.";
    }
} else {
    echo "No token provided in the URL.<br>";
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
    <?php
    if (isset($_SESSION['message'])) {
        echo $_SESSION['message'];
        unset($_SESSION['message']);
    }

    if (isset($_SESSION['error'])) {
        echo $_SESSION['error'];
        unset($_SESSION['error']);
    }
    ?>

    <form method="POST" action="">
        <input type="password" name="password" placeholder="Enter new password" required>
        <button type="submit">Reset Password</button>
    </form>
</body>

</html>