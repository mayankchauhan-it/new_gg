<?php
session_start();
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

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
                        <input type="password" id="signup-password" name="password" placeholder="Enter Password" required>
                        <i class="bx bx-show eye-icon" id="signup-eye" onclick="togglePassword('signup-password', 'signup-eye')"></i>
                    </div>
                    <button type="submit">Sign Up</button>
                </form>
            </div>

            <!-- Sign In -->
            <div class="form-container sign-in">

                <form action="php_files/login.php" method="POST" id="signin_box">
                    <h1>Sign In</h1>
                    <div class="social-icons">
                        <a href="#" class="icons"><i class="bx bxl-google"></i></a>
                        <a href="#" class="icons"><i class="bx bxl-facebook"></i></a>
                        <a href="#" class="icons"><i class="bx bxl-github"></i></a>
                        <a href="#" class="icons"><i class="bx bxl-linkedin"></i></a>
                    </div>
                    <span><b>Login With Email & Password</b></span>
                    <input type="email" name="email" placeholder="Enter E-mail" required>
                    <div class="password-container">
                        <input type="password" id="login-password" name="password" placeholder="Enter Password" required>
                        <i class="bx bx-show eye-icon" id="login-eye" onclick="togglePassword('login-password', 'login-eye')"></i>
                    </div>
                    <a href="#" data-toggle="modal" data-target="#passwordReset" id="passwordReset"><b> Forget Password?</b></a>
                    <button type="submit">Sign In</button>
                </form>

                <!-- Reset Box -->
                <form action="php_files/reset_link_generator.php" method="POST" id="reset_box" style="display: none;">
                    <h1>Reset Password</h1>
                    <input type="email" name="email" placeholder="Enter E-mail" required>
                    <button type="submit">Submit</button>
                    <button type="button" id="back">Cancel</button>
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
                        <h1>Hii User's</h1>
                        <h5>
                            <p>
                                <strong>Join Our Culture </strong>
                            </p>
                        </h5>
                        <button class="text-light" id="register">Sign Up</button>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <script src="login/script.js"></script>
    <script src="https://code.jquery.com/jquery-3.7.1.js" integrity="sha256-eKhayi8LEQwp4NKxN+CfCh+3qOVUtJn3QNZ0TciWLP4=" crossorigin="anonymous"></script>
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

        $(document).ready(function() {
            $("#passwordReset").click(function() {
                $("#signin_box").hide();
                $("#reset_box").show()
            });

            $("#back").click(function() {
                $("#signin_box").show();
                $("#reset_box").hide()
            });

           // Show alert if there is a reset link message
            <?php if (isset($_SESSION['message'])): ?>
                alert("<?php echo $_SESSION['message']; ?>");
                <?php unset($_SESSION['message']); ?> // Clear the message after displaying
            <?php endif; ?>
        });
    </script>

</body>

</html>
