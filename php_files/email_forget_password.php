<?php

date_default_timezone_set('Asia/Kolkata');

session_start();


include '../php_files/db_connections.php';


use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;

require '../vendor/phpmailer/phpmailer/src/Exception.php';
require '../vendor/phpmailer/phpmailer/src/PHPMailer.php';
require '../vendor/phpmailer/phpmailer/src/SMTP.php';

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $email = $conn->real_escape_string($_POST['email']);

    
    $sql = "SELECT * FROM user WHERE email_id='$email'";
    $result = $conn->query($sql);

    if ($result->num_rows > 0) {
        
        $token = random_int(100000, 999999);

        
        $expires_at = date("Y-m-d H:i:s", strtotime('+1 hour'));

        
        $sql = "INSERT INTO password_resets (email, token, expires_at) VALUES ('$email', '$token', '$expires_at')";
        if ($conn->query($sql) === TRUE) {
            
            $reset_link = "http://localhost/New_gg/php_files/password_reset.php?token=" . urlencode($token);
            $subject = "Password Reset Request";
            $message = "Click this link to reset your password: $reset_link";

            
            $mail = new PHPMailer();
            $mail->isSMTP();
            $mail->Host = 'smtp.gmail.com';
            $mail->SMTPAuth = true;
            $mail->Username = 'abhinavchauhan.it@gmail.com'; 
            $mail->Password = 'rach nxzd hrpc cxwi'; 
            $mail->SMTPSecure = 'tls'; 
            $mail->Port = 587;

            
            $mail->setFrom('abhinavchauhan.it@gmail.com', 'Global Gathering'); 
            $mail->addAddress($email); 

            
            $mail->isHTML(true);
            $mail->Subject = $subject;
            $mail->Body = $message;

            
            if ($mail->send()) {
                $_SESSION['message'] = "Check your email for the password reset link.";
                header("Location: ../loginindex.php");
                exit();
            } else {
                $_SESSION['error'] = "Failed to send the reset email: " . $mail->ErrorInfo;
            }
        }
    } else {
        $_SESSION['error'] = "No user found with this email address.";
    }
}

$conn->close();
?>
