<?php
// Start the session
session_start();


// Include the database connection
include 'db_connections.php';

// Check if the form is submitted
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Sanitize input data
    $email = $conn->real_escape_string($_POST['email']);
    $password = $_POST['password'];

    // Prepare SQL statement to fetch user details, including is_admin status
    $sql = "SELECT * FROM user WHERE email_id='$email'";
    $result = $conn->query($sql);

    if ($result->num_rows > 0) {
        // Fetch the user data
        $row = $result->fetch_assoc();
        $hashed_password = $row['u_pw'];

        // Verify the password
        if (password_verify($password, $hashed_password)) {
            // Password is correct, start a session
            $_SESSION['user_id'] = $row['u_id'];
            $_SESSION['email'] = $email;
            $_SESSION['is_admin'] = $row['is_admin']; // Store the admin status in session
            $_SESSION['user_logged_in'] = true; 


            // Check if the user is an admin
            if ($_SESSION['is_admin'] == 1) {
                // Redirect to admin page if the user is admins
                // header("Location: ../admin_files/admin_index.php");
                header("Location: ../admin/admin_index.php");
                exit();
            } else {
                // Redirect to regular user page
                header("Location: ../index.php");
                exit();
            }
        } else {
            echo "Invalid email or password.";
        }
    } else {
        echo "No user found with this email.";
    }

    // Close connection
    $conn->close();
}
?>
