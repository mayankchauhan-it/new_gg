<header class="vs-header">
    <!-- Header Top -->
    <div class="header-top">
        <div class="container">
            <div class="row align-items-center justify-content-between gy-1 text-center text-lg-start">
                <div class="col-lg-auto d-none d-lg-block">
                    <p class="header-text"><i class="fas fa-map-marker-alt"></i>A20, Street No.5, Ayodhya Residency, Ayodhya Chowk, Rajkot-360006.
                    </p>
                </div>
                <div class="col-lg-auto">
                    <div class="header-right">
                        <div class="header-social">
                            <a href="#"><i class="fab fa-facebook-f"></i></a>
                            <a href="#"><i class="fab fa-twitter"></i></a>
                            <a href="#"><i class="fab fa-instagram"></i></a>
                            <a href="#"><i class="fab fa-behance"></i></a>
                            <a href="#"><i class="fab fa-youtube"></i></a>
                        </div>
                        <!-- <div class="header-links d-none d-md-flex">
                            <a href="loginindex.php"><i class="fas fa-user"></i>Register</a>
                            <a href="loginindex.php"><i class="fas fa-lock"></i>Login</a>
                        </div> -->
                        <div class="header-links d-none d-md-flex">
                            <?php if (isset($_SESSION['user_logged_in']) && $_SESSION['user_logged_in'] === true): ?>
                                <a href="php_files/logout.php"><i class="fas fa-sign-out-alt"></i>Logout</a>
                            <?php else: ?>
                                <a href="loginindex.php"><i class="fas fa-user"></i>Register</a>
                                <a href="loginindex.php"><i class="fas fa-lock"></i>Login</a>
                            <?php endif; ?>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="container">
        <div class="header-inner">
            <div class="menu-top">
                <div class="row gx-50 justify-content-between align-items-center gx-sm-0">
                    <div class="col">
                        <!-- Logo Here -->
                        <div class="header-logo">
                            <a href="index.php"><img src="assets/images/gg-icon.png" alt="Eventino" class="logo" width="250"
                                    height="60px"></a>
                        </div>
                    </div>
                    <div class="col-auto header-info d-none d-lg-flex pe-0">
                        <div class="header-info_icon"><i class="fas fa-envelope"></i></div>
                        <div class="media-body">
                            <span class="header-info_label">Email Us:</span>
                            <div class="header-info_link"><a href="mailto:example@gmail.com">info@globalgathering.com</a></div>
                        </div>
                    </div>
                    <div class="col-auto header-info d-none d-lg-flex pe-0">
                        <div class="header-info_icon"><i class="fas fa-phone-alt"></i></div>
                        <div class="media-body">
                            <span class="header-info_label">Call us 24/7</span>
                            <div class="header-info_link"><a href="tel:+052699256693">+91-8511583131</a></div>
                        </div>
                    </div>
                    <div class="col-auto">
                        <div class="d-none d-xl-inline-flex">
                            <a href="about.html" class="vs-btn" tabindex="0">
                                Book Tickets
                            </a>
                        </div>
                        <button class="vs-menu-toggle d-inline-block d-lg-none"><i class="fal fa-bars"></i></button>
                    </div>
                </div>
            </div>
            <!-- Header Area -->
            <div class="sticky-wrapper">
                <div class="sticky-active">
                    <div class="custom-container">
                        <div class="row align-items-center">
                            <div class="col">
                                <nav class="main-menu menu-style1 d-none d-lg-block">
                                    <ul>
                                        <li>
                                            <a href="index.php">Home</a>
                                        </li>
                                        <li>
                                            <a href="about.php">About Us</a>
                                        </li>
                                        <li>
                                            <a href="events.php">Events</a>
                                        </li>
                                        <li>
                                            <a href="festivals.php">Festivals</a>
                                        </li>
                                        <!-- <li>
                                            <a href="tickets.php">Tickets</a>
                                        </li> -->
                                        <!-- <li>
                                            <a href="blog.php">Blogs</a>
                                        </li> -->
                                        <li>
                                            <a href="contact.php">Contact</a>
                                        </li>
                                    </ul>
                                </nav>
                            </div>
                            <div class="col-auto">
                                <div class="header-btns">
                                    <div class="d-none d-lg-block">
                                        <!-- <form action="#" class="header-search v3">
                                            <input type="text" placeholder="Search here...">
                                            <button type="submit" aria-label="button">
                                                <img src="assets/img/icons/e-2-2.svg" alt="icon">
                                            </button>
                                        </form> -->
                                    </div>
                                    <div class="d-none d-lg-inline-block">
                                        <button class="sideMenuToggler">
                                            <svg width="30" height="30" viewBox="0 0 30 30" fill="none"
                                                xmlns="http://www.w3.org/2000/svg">
                                                <g clip-path="url(#clip0_130_126)">
                                                    <path fill-rule="evenodd" clip-rule="evenodd"
                                                        d="M24.7161 14.0882L29.0814 9.72289C30.3067 8.49763 30.3067 6.50957 29.0814 5.2843L24.7161 0.918952C23.4908 -0.306317 21.5027 -0.306317 20.2775 0.918952L15.9121 5.2843C14.6868 6.50957 14.6868 8.49763 15.9121 9.72289L20.2775 14.0882C21.5027 15.3135 23.4908 15.3135 24.7161 14.0882ZM27.6019 8.24336L23.2365 12.6087C22.8285 13.0168 22.1651 13.0168 21.757 12.6087L17.3916 8.24336C16.9836 7.83529 16.9836 7.1719 17.3916 6.76383L21.757 2.39848C22.1651 1.99041 22.8285 1.99041 23.2365 2.39848L27.6019 6.76383C28.0099 7.1719 28.0099 7.83529 27.6019 8.24336Z"
                                                        fill="#7409F6" />
                                                    <path fill-rule="evenodd" clip-rule="evenodd"
                                                        d="M13.6025 19.5363C13.6025 18.7035 13.2718 17.9051 12.6827 17.317C12.0947 16.728 11.2963 16.3973 10.4634 16.3973C8.3854 16.3973 5.21707 16.3973 3.13903 16.3973C2.30614 16.3973 1.50778 16.728 0.919734 17.317C0.330643 17.9051 0 18.7035 0 19.5363V26.8608C0 27.6936 0.330643 28.492 0.919734 29.0801C1.50778 29.6691 2.30614 29.9998 3.13903 29.9998H10.4634C11.2963 29.9998 12.0947 29.6691 12.6827 29.0801C13.2718 28.492 13.6025 27.6936 13.6025 26.8608V19.5363ZM29.2976 19.5363C29.2976 18.7035 28.967 17.9051 28.3779 17.317C27.7899 16.728 26.9915 16.3973 26.1586 16.3973C24.0806 16.3973 20.9122 16.3973 18.8342 16.3973C18.0013 16.3973 17.2029 16.728 16.6149 17.317C16.0258 17.9051 15.6952 18.7035 15.6952 19.5363V26.8608C15.6952 27.6936 16.0258 28.492 16.6149 29.0801C17.2029 29.6691 18.0013 29.9998 18.8342 29.9998H26.1586C26.9915 29.9998 27.7899 29.6691 28.3779 29.0801C28.967 28.492 29.2976 27.6936 29.2976 26.8608V19.5363ZM11.5098 19.5363V26.8608C11.5098 27.138 11.3999 27.4049 11.2032 27.6005C11.0075 27.7972 10.7407 27.9071 10.4634 27.9071H3.13903C2.86175 27.9071 2.59493 27.7972 2.39927 27.6005C2.20255 27.4049 2.09269 27.138 2.09269 26.8608V19.5363C2.09269 19.2591 2.20255 18.9922 2.39927 18.7966C2.59493 18.5999 2.86175 18.49 3.13903 18.49H10.4634C10.7407 18.49 11.0075 18.5999 11.2032 18.7966C11.3999 18.9922 11.5098 19.2591 11.5098 19.5363ZM27.205 19.5363V26.8608C27.205 27.138 27.0951 27.4049 26.8984 27.6005C26.7027 27.7972 26.4359 27.9071 26.1586 27.9071H18.8342C18.5569 27.9071 18.2901 27.7972 18.0944 27.6005C17.8977 27.4049 17.7879 27.138 17.7879 26.8608V19.5363C17.7879 19.2591 17.8977 18.9922 18.0944 18.7966C18.2901 18.5999 18.5569 18.49 18.8342 18.49H26.1586C26.4359 18.49 26.7027 18.5999 26.8984 18.7966C27.0951 18.9922 27.205 19.2591 27.205 19.5363ZM13.6025 3.84118C13.6025 3.00829 13.2718 2.20993 12.6827 1.62188C12.0947 1.03279 11.2963 0.702148 10.4634 0.702148C8.3854 0.702148 5.21707 0.702148 3.13903 0.702148C2.30614 0.702148 1.50778 1.03279 0.919734 1.62188C0.330643 2.20993 0 3.00829 0 3.84118V11.1656C0 11.9985 0.330643 12.7968 0.919734 13.3849C1.50778 13.974 2.30614 14.3046 3.13903 14.3046H10.4634C11.2963 14.3046 12.0947 13.974 12.6827 13.3849C13.2718 12.7968 13.6025 11.9985 13.6025 11.1656V3.84118ZM11.5098 3.84118V11.1656C11.5098 11.4429 11.3999 11.7097 11.2032 11.9054C11.0075 12.1021 10.7407 12.2119 10.4634 12.2119H3.13903C2.86175 12.2119 2.59493 12.1021 2.39927 11.9054C2.20255 11.7097 2.09269 11.4429 2.09269 11.1656V3.84118C2.09269 3.5639 2.20255 3.29708 2.39927 3.10142C2.59493 2.9047 2.86175 2.79484 3.13903 2.79484H10.4634C10.7407 2.79484 11.0075 2.9047 11.2032 3.10142C11.3999 3.29708 11.5098 3.5639 11.5098 3.84118Z"
                                                        fill="#272E39" />
                                                </g>
                                                <defs>
                                                    <clipPath id="clip0_130_126">
                                                        <rect width="30" height="30" fill="white" />
                                                    </clipPath>
                                                </defs>
                                            </svg>
                                        </button>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</header>