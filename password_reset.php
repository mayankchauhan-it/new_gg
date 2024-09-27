<?php
include 'php_files/db_connections.php';

// Include the password reset handler
include 'php_files/handle_password_reset.php';
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="shortcut icon" href="assets/images/gg-favicon.png">
    <link rel="stylesheet" href="login/style.css">

    <link href='https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css' rel='stylesheet'>

    <title>Login & Register Page ->> Our Culture</title>

    <style>
        /* Basic styling */
        .password-container {
            width: 100%;
            position: relative;
            display: flex;
            align-items: center;
        }

        .password-container input[type="password"],
        .password-container input[type="text"],
        .password-container input[type="email"] {
            width: 100%;
            padding: 10px;
            box-sizing: border-box;
        }

        .password-container .eye-icon {
            position: absolute;
            right: 10px;
            cursor: pointer;
            user-select: none;
        }
    </style>
</head>

<body>
    <div class="hero-inner">
        <div class="overlay"></div>
        <div class="container" id="container">
            <!-- Sign UP -->
            <div class="form-container sign-up">
                <form action="php_files/registration.php" method="POST">
                    <h1>Create Account</h1>
                    <div class="social-icons">
                        <a href="#" class="icons"><i class="bx bxl-google"></i></a>
                        <a href="#" class="icons"><i class="bx bxl-facebook"></i></a>
                        <a href="#" class="icons"><i class="bx bxl-github"></i></a>
                        <a href="#" class="icons"><i class="bx bxl-linkedin"></i></a>
                    </div>
                    <span><b>Register with E-mail</b></span>
                    <input type="text" name="name" placeholder="Name" required>
                    <input type="email" name="email" placeholder="Enter E-mail" required>
                    <div class="password-container">
                        <input type="password" id="signup-password" name="password" placeholder="Enter Password"
                            required>
                        <i class="bx bx-show eye-icon" id="signup-eye"
                            onclick="togglePassword('signup-password', 'signup-eye')"></i>
                    </div>
                    <button type="submit">Sign Up</button>
                </form>
            </div>

            <!-- Password Reset -->
            <div class="form-container sign-in">

                <form method="POST" id="signin_box">
                    <h1>Reset Your Password</h1>


                    <div class="password-container">
                        <input type="password" id="login-password" name="password" placeholder="Enter Password"
                            required>
                        <i class="bx bx-show eye-icon" id="login-eye"
                            onclick="togglePassword('login-password', 'login-eye')"></i>
                    </div>


                    <div class="password-container">
                        <input type="password" id="login-password2" name="confirm_password"
                            placeholder="Confirm Password" required>
                        <i class="bx bx-show eye-icon" id="login-eye2"
                            onclick="togglePassword('login-password2', 'login-eye2')"></i>
                    </div>
                    <button type="submit">Submit</button>
                </form>
            </div>


            <div class="toggle-container">
                <div class="toggle">
                    <div class="toggle-panel toggle-left">
                        <h1>Welcome To <br>Our Culture of India</h1>
                        <p>Sign in With ID & Password</p>
                        <button class="text-light" id="login">Sign In</button>
                    </div>

                    <div class="toggle-panel toggle-right">
                        <h1>Welcome User</h1>
                        <h5>
                            <p>
                                <strong>Reset the password</strong>
                            </p>
                        </h5>
                    </div>
                </div>
            </div>

            <!-- Password Reset Modal -->
        </div>
    </div>
    <script src="login/script.js"></script>
    <script src="https://code.jquery.com/jquery-3.7.1.js"
        integrity="sha256-eKhayi8LEQwp4NKxN+CfCh+3qOVUtJn3QNZ0TciWLP4=" crossorigin="anonymous"></script>
    <script>
        function togglePassword(inputId, iconId) {
            var passwordInput = document.getElementById(inputId);
            var eyeIcon = document.getElementById(iconId);
            if (passwordInput.type === 'password') {
                passwordInput.type = 'text';
                eyeIcon.classList.remove('bx-show');
                eyeIcon.classList.add('bx-hide');
            } else {
                passwordInput.type = 'password';
                eyeIcon.classList.remove('bx-hide');
                eyeIcon.classList.add('bx-show');
            }
        }
    </script>

    <script>
        $(document).ready(function () {
            $("#passwordReset").click(function () {
                $("#signin_box").hide();
                $("#reset_box").show()
            })


            $("#back").click(function () {
                $("#signin_box").show();
                $("#reset_box").hide()
            })
        })
    </script>

</body>

</html>