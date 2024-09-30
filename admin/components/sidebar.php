<nav class="navbar navbar-vertical navbar-expand-lg" style="display:none;">
    <div class="collapse navbar-collapse" id="navbarVerticalCollapse">
        <!-- scrollbar removed-->
        <div class="navbar-vertical-content">
            <ul class="navbar-nav flex-column" id="navbarVerticalNav">
                <li class="nav-item">
                    <!-- parent pages-->
                    <div class="nav-item-wrapper">
                        <a class="nav-link label-1" href="admin_index.php" role="button">
                            <div class="d-flex align-items-center">
                                <span class="nav-link-icon">
                                    <span data-feather="home"></span>
                                </span>
                                <span class="nav-link-text">Dashboard</span>
                                <span class="fa-solid fa-circle text-info ms-1 new-page-indicator"
                                    style="font-size: 6px">
                                </span>
                            </div>
                        </a>
                    </div>

                    <div class="nav-item-wrapper">
                        <a class="nav-link label-1" href="users.php" role="button">
                            <div class="d-flex align-items-center">
                                <span class="nav-link-icon">
                                    <span data-feather="users"></span>
                                </span>
                                <span class="nav-link-text">Users</span>
                            </div>
                        </a>
                    </div>


                    <div class="nav-item-wrapper">
                        <a class="nav-link label-1" href="category.php" role="button">
                            <div class="d-flex align-items-center">
                                <span class="nav-link-icon">
                                    <span data-feather="pie-chart"></span>
                                </span>
                                <span class="nav-link-text">Category</span>
                            </div>
                        </a>
                    </div>

                    <div class="nav-item-wrapper">
                        <a class="nav-link dropdown-indicator label-1" href="#nv-events" role="button" data-bs-toggle="collapse" aria-expanded="false" aria-controls="nv-events">
                            <div class="d-flex align-items-center">
                                <div class="dropdown-indicator-icon-wrapper"><span
                                        class="fas fa-caret-right dropdown-indicator-icon"></span></div><span
                                    class="nav-link-icon"><span data-feather="bookmark"></span></span><span
                                    class="nav-link-text">Events</span>
                            </div>
                        </a>
                        <div class="parent-wrapper label-1">
                            <ul class="nav collapse parent" data-bs-parent="#navbarVerticalCollapse" id="nv-events">
                                <li class="collapsed-nav-item-title d-none">Events</li>
                                <li class="nav-item"><a class="nav-link"
                                        href="event_add.php">
                                        <div class="d-flex align-items-center"><span class="nav-link-text">Create an event</span></div>
                                    </a><!-- more inner pages-->
                                </li>
                                <li class="nav-item"><a class="nav-link"
                                        href="events_list.php">
                                        <div class="d-flex align-items-center"><span class="nav-link-text">Event
                                                List</span></div>
                                    </a><!-- more inner pages-->
                                </li>
                            </ul>
                        </div>
                    </div><!-- parent pages-->

                    <div class="nav-item-wrapper">
                        <a class="nav-link dropdown-indicator label-1" href="#nv-festivals" role="button" data-bs-toggle="collapse" aria-expanded="false" aria-controls="nv-festivals">
                            <div class="d-flex align-items-center">
                                <div class="dropdown-indicator-icon-wrapper"><span
                                        class="fas fa-caret-right dropdown-indicator-icon"></span></div><span
                                    class="nav-link-icon"><span data-feather="bookmark"></span></span><span
                                    class="nav-link-text">Festival</span>
                            </div>
                        </a>
                        <div class="parent-wrapper label-1">
                            <ul class="nav collapse parent" data-bs-parent="#navbarVerticalCollapse" id="nv-festivals">
                                <li class="collapsed-nav-item-title d-none">Festival</li>
                                <li class="nav-item"><a class="nav-link"
                                        href="festival_add.php">
                                        <div class="d-flex align-items-center"><span class="nav-link-text">Create an
                                                Festival</span></div>
                                    </a><!-- more inner pages-->
                                </li>
                                <li class="nav-item"><a class="nav-link"
                                        href="festivals_list.php">
                                        <div class="d-flex align-items-center"><span class="nav-link-text">Festival
                                                List</span></div>
                                    </a><!-- more inner pages-->
                                </li>
                            </ul>
                        </div>
                    </div><!-- parent pages-->

                    

                    <div class="nav-item-wrapper">
                        <a class="nav-link label-1" href="bookings.php" role="button">
                            <div class="d-flex align-items-center">
                                <span class="nav-link-icon">
                                    <span data-feather="bar-chart-2"></span>
                                </span>
                                <span class="nav-link-text">Booking</span>
                            </div>
                        </a>
                    </div>

                    <div class="nav-item-wrapper">
                        <a class="nav-link label-1" href="password_reset_list.php" role="button">
                            <div class="d-flex align-items-center">
                                <span class="nav-link-icon">
                                    <span data-feather="tool"></span>
                                </span>
                                <span class="nav-link-text">Password Reset Tokens</span>
                            </div>
                        </a>
                    </div>
                </li>

                <li class="nav-item">
                    <div class="nav-item-wrapper">
                        <a class="nav-link label-1" href="../php_files/logout.php" role="button">
                            <button class="btn btn-danger w-100">
                                Logout
                            </button>
                        </a>
                    </div>
                </li>
            </ul>
        </div>
    </div>
    <div class="navbar-vertical-footer"><button
            class="btn navbar-vertical-toggle border-0 fw-semibold w-100 white-space-nowrap d-flex align-items-center"><span
                class="uil uil-left-arrow-to-left fs-8"></span><span class="uil uil-arrow-from-right fs-8"></span><span
                class="navbar-vertical-footer-text ms-2">Collapsed View</span></button></div>
</nav>