<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Admin - Global Gathering</title>
    <?php include 'components/head.php' ?>
</head>

<body>
    <main class="main" id="top">

        <!-- Side Bar Start Here -->
        <?php include 'components/sidebar.php' ?>
        <!-- Side Bar End Here -->


        <!-- Top NavBar Start Here -->
        <?php include 'components/topNav.php' ?>
        <!-- Top NavBar End Here -->


        <nav class="navbar navbar-top navbar-slim fixed-top navbar-expand" id="topNavSlim" style="display:none;">
            <div class="collapse navbar-collapse justify-content-between">
                <div class="navbar-logo">
                    <button class="btn navbar-toggler navbar-toggler-humburger-icon hover-bg-transparent" type="button"
                        data-bs-toggle="collapse" data-bs-target="#navbarVerticalCollapse"
                        aria-controls="navbarVerticalCollapse" aria-expanded="false"
                        aria-label="Toggle Navigation"><span class="navbar-toggle-icon"><span
                                class="toggle-line"></span></span></button>
                    <a class="navbar-brand navbar-brand"
                        href="https://prium.github.io/phoenix/v1.18.0/index.html">phoenix <span
                            class="text-body-highlight d-none d-sm-inline">slim</span></a>
                </div>
                <ul class="navbar-nav navbar-nav-icons flex-row">
                    <li class="nav-item">
                        <div class="theme-control-toggle fa-ion-wait pe-2 theme-control-toggle-slim"><input
                                class="form-check-input ms-0 theme-control-toggle-input" id="themeControlToggle"
                                type="checkbox" data-theme-control="phoenixTheme" value="dark" /><label
                                class="mb-0 theme-control-toggle-label theme-control-toggle-light"
                                for="themeControlToggle" data-bs-toggle="tooltip" data-bs-placement="left"
                                title="Switch theme"><span class="d-none d-sm-flex flex-center"
                                    style="height:16px;width:16px;"><span class="me-1 icon"
                                        data-feather="moon"></span></span><span
                                    class="fs-9 fw-bold">Dark</span></label><label
                                class="mb-0 theme-control-toggle-label theme-control-toggle-dark"
                                for="themeControlToggle" data-bs-toggle="tooltip" data-bs-placement="left"
                                title="Switch theme"><span class="d-none d-sm-flex flex-center"
                                    style="height:16px;width:16px;"><span class="me-1 icon"
                                        data-feather="sun"></span></span><span class="fs-9 fw-bold">Light</span></label>
                        </div>
                    </li>
                    <li class="nav-item"> <a class="nav-link" href="#" data-bs-toggle="modal"
                            data-bs-target="#searchBoxModal"><span class="d-inline-block"
                                style="height:12px;width:12px;"><span data-feather="search"
                                    style="height:12px;width:12px;"></span></span></a></li>
                    <li class="nav-item dropdown">
                        <a class="nav-link" id="navbarDropdownNotification" href="#" role="button"
                            data-bs-toggle="dropdown" data-bs-auto-close="outside" aria-haspopup="true"
                            aria-expanded="false"><span class="d-inline-block" style="height:12px;width:12px;"><span
                                    data-feather="bell" style="height:12px;width:12px;"></span></span></a>
                        <div class="dropdown-menu dropdown-menu-end notification-dropdown-menu py-0 shadow border navbar-dropdown-caret"
                            id="navbarDropdownNotfication" aria-labelledby="navbarDropdownNotfication">
                            <div class="card position-relative border-0">
                                <div class="card-header p-2">
                                    <div class="d-flex justify-content-between">
                                        <h5 class="text-body-emphasis mb-0">Notifications</h5><button
                                            class="btn btn-link p-0 fs-9 fw-normal" type="button">Mark all as
                                            read</button>
                                    </div>
                                </div>
                                <div class="card-body p-0">
                                    <div class="scrollbar-overlay" style="height: 27rem;">
                                        <div
                                            class="px-2 px-sm-3 py-3 notification-card position-relative read border-bottom">
                                            <div
                                                class="d-flex align-items-center justify-content-between position-relative">
                                                <div class="d-flex">
                                                    <div class="avatar avatar-m status-online me-3"><img
                                                            class="rounded-circle"
                                                            src="https://prium.github.io/phoenix/v1.18.0/assets/img/team/40x40/30.webp"
                                                            alt="" /></div>
                                                    <div class="flex-1 me-sm-3">
                                                        <h4 class="fs-9 text-body-emphasis">Jessie Samson</h4>
                                                        <p class="fs-9 text-body-highlight mb-2 mb-sm-3 fw-normal"><span
                                                                class='me-1 fs-10'>💬</span>Mentioned you in a
                                                            comment.<span
                                                                class="ms-2 text-body-quaternary text-opacity-75 fw-bold fs-10">10m</span>
                                                        </p>
                                                        <p class="text-body-secondary fs-9 mb-0"><span
                                                                class="me-1 fas fa-clock"></span><span
                                                                class="fw-bold">10:41 AM </span>August 7,2021</p>
                                                    </div>
                                                </div>
                                                <div class="dropdown notification-dropdown"><button
                                                        class="btn fs-10 btn-sm dropdown-toggle dropdown-caret-none transition-none"
                                                        type="button" data-bs-toggle="dropdown" data-boundary="window"
                                                        aria-haspopup="true" aria-expanded="false"
                                                        data-bs-reference="parent"><span
                                                            class="fas fa-ellipsis-h fs-10 text-body"></span></button>
                                                    <div class="dropdown-menu py-2"><a class="dropdown-item"
                                                            href="#!">Mark as unread</a></div>
                                                </div>
                                            </div>
                                        </div>
                                        <div
                                            class="px-2 px-sm-3 py-3 notification-card position-relative unread border-bottom">
                                            <div
                                                class="d-flex align-items-center justify-content-between position-relative">
                                                <div class="d-flex">
                                                    <div class="avatar avatar-m status-online me-3">
                                                        <div class="avatar-name rounded-circle"><span>J</span></div>
                                                    </div>
                                                    <div class="flex-1 me-sm-3">
                                                        <h4 class="fs-9 text-body-emphasis">Jane Foster</h4>
                                                        <p class="fs-9 text-body-highlight mb-2 mb-sm-3 fw-normal"><span
                                                                class='me-1 fs-10'>📅</span>Created an event.<span
                                                                class="ms-2 text-body-quaternary text-opacity-75 fw-bold fs-10">20m</span>
                                                        </p>
                                                        <p class="text-body-secondary fs-9 mb-0"><span
                                                                class="me-1 fas fa-clock"></span><span
                                                                class="fw-bold">10:20 AM </span>August 7,2021</p>
                                                    </div>
                                                </div>
                                                <div class="dropdown notification-dropdown"><button
                                                        class="btn fs-10 btn-sm dropdown-toggle dropdown-caret-none transition-none"
                                                        type="button" data-bs-toggle="dropdown" data-boundary="window"
                                                        aria-haspopup="true" aria-expanded="false"
                                                        data-bs-reference="parent"><span
                                                            class="fas fa-ellipsis-h fs-10 text-body"></span></button>
                                                    <div class="dropdown-menu py-2"><a class="dropdown-item"
                                                            href="#!">Mark as unread</a></div>
                                                </div>
                                            </div>
                                        </div>
                                        <div
                                            class="px-2 px-sm-3 py-3 notification-card position-relative unread border-bottom">
                                            <div
                                                class="d-flex align-items-center justify-content-between position-relative">
                                                <div class="d-flex">
                                                    <div class="avatar avatar-m status-online me-3"><img
                                                            class="rounded-circle avatar-placeholder"
                                                            src="https://prium.github.io/phoenix/v1.18.0/assets/img/team/40x40/avatar.webp"
                                                            alt="" /></div>
                                                    <div class="flex-1 me-sm-3">
                                                        <h4 class="fs-9 text-body-emphasis">Jessie Samson</h4>
                                                        <p class="fs-9 text-body-highlight mb-2 mb-sm-3 fw-normal"><span
                                                                class='me-1 fs-10'>👍</span>Liked your comment.<span
                                                                class="ms-2 text-body-quaternary text-opacity-75 fw-bold fs-10">1h</span>
                                                        </p>
                                                        <p class="text-body-secondary fs-9 mb-0"><span
                                                                class="me-1 fas fa-clock"></span><span
                                                                class="fw-bold">9:30 AM </span>August 7,2021</p>
                                                    </div>
                                                </div>
                                                <div class="dropdown notification-dropdown"><button
                                                        class="btn fs-10 btn-sm dropdown-toggle dropdown-caret-none transition-none"
                                                        type="button" data-bs-toggle="dropdown" data-boundary="window"
                                                        aria-haspopup="true" aria-expanded="false"
                                                        data-bs-reference="parent"><span
                                                            class="fas fa-ellipsis-h fs-10 text-body"></span></button>
                                                    <div class="dropdown-menu py-2"><a class="dropdown-item"
                                                            href="#!">Mark as unread</a></div>
                                                </div>
                                            </div>
                                        </div>
                                        <div
                                            class="px-2 px-sm-3 py-3 notification-card position-relative unread border-bottom">
                                            <div
                                                class="d-flex align-items-center justify-content-between position-relative">
                                                <div class="d-flex">
                                                    <div class="avatar avatar-m status-online me-3"><img
                                                            class="rounded-circle"
                                                            src="https://prium.github.io/phoenix/v1.18.0/assets/img/team/40x40/57.webp"
                                                            alt="" /></div>
                                                    <div class="flex-1 me-sm-3">
                                                        <h4 class="fs-9 text-body-emphasis">Kiera Anderson</h4>
                                                        <p class="fs-9 text-body-highlight mb-2 mb-sm-3 fw-normal"><span
                                                                class='me-1 fs-10'>💬</span>Mentioned you in a
                                                            comment.<span
                                                                class="ms-2 text-body-quaternary text-opacity-75 fw-bold fs-10"></span>
                                                        </p>
                                                        <p class="text-body-secondary fs-9 mb-0"><span
                                                                class="me-1 fas fa-clock"></span><span
                                                                class="fw-bold">9:11 AM </span>August 7,2021</p>
                                                    </div>
                                                </div>
                                                <div class="dropdown notification-dropdown"><button
                                                        class="btn fs-10 btn-sm dropdown-toggle dropdown-caret-none transition-none"
                                                        type="button" data-bs-toggle="dropdown" data-boundary="window"
                                                        aria-haspopup="true" aria-expanded="false"
                                                        data-bs-reference="parent"><span
                                                            class="fas fa-ellipsis-h fs-10 text-body"></span></button>
                                                    <div class="dropdown-menu py-2"><a class="dropdown-item"
                                                            href="#!">Mark as unread</a></div>
                                                </div>
                                            </div>
                                        </div>
                                        <div
                                            class="px-2 px-sm-3 py-3 notification-card position-relative unread border-bottom">
                                            <div
                                                class="d-flex align-items-center justify-content-between position-relative">
                                                <div class="d-flex">
                                                    <div class="avatar avatar-m status-online me-3"><img
                                                            class="rounded-circle"
                                                            src="https://prium.github.io/phoenix/v1.18.0/assets/img/team/40x40/59.webp"
                                                            alt="" /></div>
                                                    <div class="flex-1 me-sm-3">
                                                        <h4 class="fs-9 text-body-emphasis">Herman Carter</h4>
                                                        <p class="fs-9 text-body-highlight mb-2 mb-sm-3 fw-normal"><span
                                                                class='me-1 fs-10'>👤</span>Tagged you in a
                                                            comment.<span
                                                                class="ms-2 text-body-quaternary text-opacity-75 fw-bold fs-10"></span>
                                                        </p>
                                                        <p class="text-body-secondary fs-9 mb-0"><span
                                                                class="me-1 fas fa-clock"></span><span
                                                                class="fw-bold">10:58 PM </span>August 7,2021</p>
                                                    </div>
                                                </div>
                                                <div class="dropdown notification-dropdown"><button
                                                        class="btn fs-10 btn-sm dropdown-toggle dropdown-caret-none transition-none"
                                                        type="button" data-bs-toggle="dropdown" data-boundary="window"
                                                        aria-haspopup="true" aria-expanded="false"
                                                        data-bs-reference="parent"><span
                                                            class="fas fa-ellipsis-h fs-10 text-body"></span></button>
                                                    <div class="dropdown-menu py-2"><a class="dropdown-item"
                                                            href="#!">Mark as unread</a></div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="px-2 px-sm-3 py-3 notification-card position-relative read ">
                                            <div
                                                class="d-flex align-items-center justify-content-between position-relative">
                                                <div class="d-flex">
                                                    <div class="avatar avatar-m status-online me-3"><img
                                                            class="rounded-circle"
                                                            src="https://prium.github.io/phoenix/v1.18.0/assets/img/team/40x40/58.webp"
                                                            alt="" /></div>
                                                    <div class="flex-1 me-sm-3">
                                                        <h4 class="fs-9 text-body-emphasis">Benjamin Button</h4>
                                                        <p class="fs-9 text-body-highlight mb-2 mb-sm-3 fw-normal"><span
                                                                class='me-1 fs-10'>👍</span>Liked your comment.<span
                                                                class="ms-2 text-body-quaternary text-opacity-75 fw-bold fs-10"></span>
                                                        </p>
                                                        <p class="text-body-secondary fs-9 mb-0"><span
                                                                class="me-1 fas fa-clock"></span><span
                                                                class="fw-bold">10:18 AM </span>August 7,2021</p>
                                                    </div>
                                                </div>
                                                <div class="dropdown notification-dropdown"><button
                                                        class="btn fs-10 btn-sm dropdown-toggle dropdown-caret-none transition-none"
                                                        type="button" data-bs-toggle="dropdown" data-boundary="window"
                                                        aria-haspopup="true" aria-expanded="false"
                                                        data-bs-reference="parent"><span
                                                            class="fas fa-ellipsis-h fs-10 text-body"></span></button>
                                                    <div class="dropdown-menu py-2"><a class="dropdown-item"
                                                            href="#!">Mark as unread</a></div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="card-footer p-0 border-top border-translucent border-0">
                                    <div class="my-2 text-center fw-bold fs-10 text-body-tertiary text-opactity-85"><a
                                            class="fw-bolder"
                                            href="https://prium.github.io/phoenix/v1.18.0/pages/notifications.html">Notification
                                            history</a></div>
                                </div>
                            </div>
                        </div>
                    </li>
                    <li class="nav-item dropdown">
                        <a class="nav-link" id="navbarDropdownNindeDots" href="#" role="button"
                            data-bs-toggle="dropdown" aria-haspopup="true" data-bs-auto-close="outside"
                            aria-expanded="false"><svg width="10" height="10" viewbox="0 0 16 16" fill="none"
                                xmlns="http://www.w3.org/2000/svg">
                                <circle cx="2" cy="2" r="2" fill="currentColor"></circle>
                                <circle cx="2" cy="8" r="2" fill="currentColor"></circle>
                                <circle cx="2" cy="14" r="2" fill="currentColor"></circle>
                                <circle cx="8" cy="8" r="2" fill="currentColor"></circle>
                                <circle cx="8" cy="14" r="2" fill="currentColor"></circle>
                                <circle cx="14" cy="8" r="2" fill="currentColor"></circle>
                                <circle cx="14" cy="14" r="2" fill="currentColor"></circle>
                                <circle cx="8" cy="2" r="2" fill="currentColor"></circle>
                                <circle cx="14" cy="2" r="2" fill="currentColor"></circle>
                            </svg></a>
                        <div class="dropdown-menu dropdown-menu-end navbar-dropdown-caret py-0 dropdown-nine-dots shadow border"
                            aria-labelledby="navbarDropdownNindeDots">
                            <div class="card bg-body-emphasis position-relative border-0">
                                <div class="card-body pt-3 px-3 pb-0 overflow-auto scrollbar" style="height: 20rem;">
                                    <div class="row text-center align-items-center gx-0 gy-0">
                                        <div class="col-4"><a
                                                class="d-block bg-body-secondary-hover p-2 rounded-3 text-center text-decoration-none mb-3"
                                                href="#!"><img
                                                    src="https://prium.github.io/phoenix/v1.18.0/assets/img/nav-icons/behance.webp"
                                                    alt="" width="30" />
                                                <p class="mb-0 text-body-emphasis text-truncate fs-10 mt-1 pt-1">Behance
                                                </p>
                                            </a></div>
                                        <div class="col-4"><a
                                                class="d-block bg-body-secondary-hover p-2 rounded-3 text-center text-decoration-none mb-3"
                                                href="#!"><img
                                                    src="https://prium.github.io/phoenix/v1.18.0/assets/img/nav-icons/google-cloud.webp"
                                                    alt="" width="30" />
                                                <p class="mb-0 text-body-emphasis text-truncate fs-10 mt-1 pt-1">Cloud
                                                </p>
                                            </a></div>
                                        <div class="col-4"><a
                                                class="d-block bg-body-secondary-hover p-2 rounded-3 text-center text-decoration-none mb-3"
                                                href="#!"><img
                                                    src="https://prium.github.io/phoenix/v1.18.0/assets/img/nav-icons/slack.webp"
                                                    alt="" width="30" />
                                                <p class="mb-0 text-body-emphasis text-truncate fs-10 mt-1 pt-1">Slack
                                                </p>
                                            </a></div>
                                        <div class="col-4"><a
                                                class="d-block bg-body-secondary-hover p-2 rounded-3 text-center text-decoration-none mb-3"
                                                href="#!"><img
                                                    src="https://prium.github.io/phoenix/v1.18.0/assets/img/nav-icons/gitlab.webp"
                                                    alt="" width="30" />
                                                <p class="mb-0 text-body-emphasis text-truncate fs-10 mt-1 pt-1">Gitlab
                                                </p>
                                            </a></div>
                                        <div class="col-4"><a
                                                class="d-block bg-body-secondary-hover p-2 rounded-3 text-center text-decoration-none mb-3"
                                                href="#!"><img
                                                    src="https://prium.github.io/phoenix/v1.18.0/assets/img/nav-icons/bitbucket.webp"
                                                    alt="" width="30" />
                                                <p class="mb-0 text-body-emphasis text-truncate fs-10 mt-1 pt-1">
                                                    BitBucket</p>
                                            </a></div>
                                        <div class="col-4"><a
                                                class="d-block bg-body-secondary-hover p-2 rounded-3 text-center text-decoration-none mb-3"
                                                href="#!"><img
                                                    src="https://prium.github.io/phoenix/v1.18.0/assets/img/nav-icons/google-drive.webp"
                                                    alt="" width="30" />
                                                <p class="mb-0 text-body-emphasis text-truncate fs-10 mt-1 pt-1">Drive
                                                </p>
                                            </a></div>
                                        <div class="col-4"><a
                                                class="d-block bg-body-secondary-hover p-2 rounded-3 text-center text-decoration-none mb-3"
                                                href="#!"><img
                                                    src="https://prium.github.io/phoenix/v1.18.0/assets/img/nav-icons/trello.webp"
                                                    alt="" width="30" />
                                                <p class="mb-0 text-body-emphasis text-truncate fs-10 mt-1 pt-1">Trello
                                                </p>
                                            </a></div>
                                        <div class="col-4"><a
                                                class="d-block bg-body-secondary-hover p-2 rounded-3 text-center text-decoration-none mb-3"
                                                href="#!"><img
                                                    src="https://prium.github.io/phoenix/v1.18.0/assets/img/nav-icons/figma.webp"
                                                    alt="" width="20" />
                                                <p class="mb-0 text-body-emphasis text-truncate fs-10 mt-1 pt-1">Figma
                                                </p>
                                            </a></div>
                                        <div class="col-4"><a
                                                class="d-block bg-body-secondary-hover p-2 rounded-3 text-center text-decoration-none mb-3"
                                                href="#!"><img
                                                    src="https://prium.github.io/phoenix/v1.18.0/assets/img/nav-icons/twitter.webp"
                                                    alt="" width="30" />
                                                <p class="mb-0 text-body-emphasis text-truncate fs-10 mt-1 pt-1">Twitter
                                                </p>
                                            </a></div>
                                        <div class="col-4"><a
                                                class="d-block bg-body-secondary-hover p-2 rounded-3 text-center text-decoration-none mb-3"
                                                href="#!"><img
                                                    src="https://prium.github.io/phoenix/v1.18.0/assets/img/nav-icons/pinterest.webp"
                                                    alt="" width="30" />
                                                <p class="mb-0 text-body-emphasis text-truncate fs-10 mt-1 pt-1">
                                                    Pinterest</p>
                                            </a></div>
                                        <div class="col-4"><a
                                                class="d-block bg-body-secondary-hover p-2 rounded-3 text-center text-decoration-none mb-3"
                                                href="#!"><img
                                                    src="https://prium.github.io/phoenix/v1.18.0/assets/img/nav-icons/ln.webp"
                                                    alt="" width="30" />
                                                <p class="mb-0 text-body-emphasis text-truncate fs-10 mt-1 pt-1">
                                                    Linkedin</p>
                                            </a></div>
                                        <div class="col-4"><a
                                                class="d-block bg-body-secondary-hover p-2 rounded-3 text-center text-decoration-none mb-3"
                                                href="#!"><img
                                                    src="https://prium.github.io/phoenix/v1.18.0/assets/img/nav-icons/google-maps.webp"
                                                    alt="" width="30" />
                                                <p class="mb-0 text-body-emphasis text-truncate fs-10 mt-1 pt-1">Maps
                                                </p>
                                            </a></div>
                                        <div class="col-4"><a
                                                class="d-block bg-body-secondary-hover p-2 rounded-3 text-center text-decoration-none mb-3"
                                                href="#!"><img
                                                    src="https://prium.github.io/phoenix/v1.18.0/assets/img/nav-icons/google-photos.webp"
                                                    alt="" width="30" />
                                                <p class="mb-0 text-body-emphasis text-truncate fs-10 mt-1 pt-1">Photos
                                                </p>
                                            </a></div>
                                        <div class="col-4"><a
                                                class="d-block bg-body-secondary-hover p-2 rounded-3 text-center text-decoration-none mb-3"
                                                href="#!"><img
                                                    src="https://prium.github.io/phoenix/v1.18.0/assets/img/nav-icons/spotify.webp"
                                                    alt="" width="30" />
                                                <p class="mb-0 text-body-emphasis text-truncate fs-10 mt-1 pt-1">Spotify
                                                </p>
                                            </a></div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </li>
                    <li class="nav-item dropdown"><a class="nav-link lh-1 pe-0 white-space-nowrap"
                            id="navbarDropdownUser" href="#!" role="button" data-bs-toggle="dropdown"
                            aria-haspopup="true" data-bs-auto-close="outside" aria-expanded="false">Olivia <span
                                class="d-inline-block" style="height:10.2px;width:10.2px;"><span
                                    class="fa-solid fa-chevron-down fs-10"></span></span></a>
                        <div class="dropdown-menu dropdown-menu-end navbar-dropdown-caret py-0 dropdown-profile shadow border"
                            aria-labelledby="navbarDropdownUser">
                            <div class="card position-relative border-0">
                                <div class="card-body p-0">
                                    <div class="text-center pt-4 pb-3">
                                        <div class="avatar avatar-xl ">
                                            <img class="rounded-circle "
                                                src="https://prium.github.io/phoenix/v1.18.0/assets/img/team/72x72/57.webp"
                                                alt="" />
                                        </div>
                                        <h6 class="mt-2 text-body-emphasis">Jerry Seinfield</h6>
                                    </div>
                                    <div class="mb-3 mx-3"><input class="form-control form-control-sm"
                                            id="statusUpdateInput" type="text" placeholder="Update your status" /></div>
                                </div>
                                <div class="overflow-auto scrollbar" style="height: 10rem;">
                                    <ul class="nav d-flex flex-column mb-2 pb-1">
                                        <li class="nav-item"><a class="nav-link px-3 d-block" href="#!"> <span
                                                    class="me-2 text-body align-bottom"
                                                    data-feather="user"></span><span>Profile</span></a></li>
                                        <li class="nav-item"><a class="nav-link px-3 d-block" href="#!"><span
                                                    class="me-2 text-body align-bottom"
                                                    data-feather="pie-chart"></span>Dashboard</a></li>
                                        <li class="nav-item"><a class="nav-link px-3 d-block" href="#!"> <span
                                                    class="me-2 text-body align-bottom" data-feather="lock"></span>Posts
                                                &amp; Activity</a></li>
                                        <li class="nav-item"><a class="nav-link px-3 d-block" href="#!"> <span
                                                    class="me-2 text-body align-bottom"
                                                    data-feather="settings"></span>Settings &amp; Privacy </a></li>
                                        <li class="nav-item"><a class="nav-link px-3 d-block" href="#!"> <span
                                                    class="me-2 text-body align-bottom"
                                                    data-feather="help-circle"></span>Help Center</a></li>
                                        <li class="nav-item"><a class="nav-link px-3 d-block" href="#!"> <span
                                                    class="me-2 text-body align-bottom"
                                                    data-feather="globe"></span>Language</a></li>
                                    </ul>
                                </div>
                                <div class="card-footer p-0 border-top border-translucent">
                                    <ul class="nav d-flex flex-column my-3">
                                        <li class="nav-item"><a class="nav-link px-3 d-block" href="#!"> <span
                                                    class="me-2 text-body align-bottom"
                                                    data-feather="user-plus"></span>Add another account</a></li>
                                    </ul>
                                    <hr />
                                    <div class="px-3"> <a class="btn btn-phoenix-secondary d-flex flex-center w-100"
                                            href="#!"> <span class="me-2" data-feather="log-out"> </span>Sign out</a>
                                    </div>
                                    <div class="my-2 text-center fw-bold fs-10 text-body-quaternary"><a
                                            class="text-body-quaternary me-1" href="#!">Privacy policy</a>&bull;<a
                                            class="text-body-quaternary mx-1" href="#!">Terms</a>&bull;<a
                                            class="text-body-quaternary ms-1" href="#!">Cookies</a></div>
                                </div>
                            </div>
                        </div>
                    </li>
                </ul>
            </div>
        </nav>
        <nav class="navbar navbar-top fixed-top navbar-expand-lg" id="navbarTop" style="display:none;">
            <div class="navbar-logo">
                <button class="btn navbar-toggler navbar-toggler-humburger-icon hover-bg-transparent" type="button"
                    data-bs-toggle="collapse" data-bs-target="#navbarTopCollapse" aria-controls="navbarTopCollapse"
                    aria-expanded="false" aria-label="Toggle Navigation"><span class="navbar-toggle-icon"><span
                            class="toggle-line"></span></span></button>
                <a class="navbar-brand me-1 me-sm-3" href="https://prium.github.io/phoenix/v1.18.0/index.html">
                    <div class="d-flex align-items-center">
                        <div class="d-flex align-items-center"><img src="../assets/img/icons/logo.png" alt="phoenix"
                                width="27" />
                            <h5 class="logo-text ms-2 d-none d-sm-block">phoenix</h5>
                        </div>
                    </div>
                </a>
            </div>
            <div class="collapse navbar-collapse navbar-top-collapse order-1 order-lg-0 justify-content-center"
                id="navbarTopCollapse">
                <ul class="navbar-nav navbar-nav-top" data-dropdown-on-hover="data-dropdown-on-hover">
                    <li class="nav-item dropdown"><a class="nav-link dropdown-toggle lh-1" href="#!" role="button"
                            data-bs-toggle="dropdown" data-bs-auto-close="outside" aria-haspopup="true"
                            aria-expanded="false"><span class="uil fs-8 me-2 uil-chart-pie"></span>Home</a>
                        <ul class="dropdown-menu navbar-dropdown-caret">
                            <li><a class="dropdown-item" href="https://prium.github.io/phoenix/v1.18.0/index.html">
                                    <div class="dropdown-item-wrapper"><span class="me-2 uil"
                                            data-feather="shopping-cart"></span>E commerce</div>
                                </a></li>
                            <li><a class="dropdown-item" href="project-management.html">
                                    <div class="dropdown-item-wrapper"><span class="me-2 uil"
                                            data-feather="clipboard"></span>Project management</div>
                                </a></li>
                            <li><a class="dropdown-item" href="crm.html">
                                    <div class="dropdown-item-wrapper"><span class="me-2 uil"
                                            data-feather="phone"></span>CRM</div>
                                </a></li>
                            <li><a class="dropdown-item active" href="travel-agency.html">
                                    <div class="dropdown-item-wrapper"><span class="me-2 uil"
                                            data-feather="briefcase"></span>Travel agency</div>
                                </a></li>
                            <li><a class="dropdown-item"
                                    href="https://prium.github.io/phoenix/v1.18.0/apps/social/feed.html">
                                    <div class="dropdown-item-wrapper"><span class="me-2 uil"
                                            data-feather="share-2"></span>Social feed</div>
                                </a></li>
                        </ul>
                    </li>
                    <li class="nav-item dropdown"><a class="nav-link dropdown-toggle lh-1" href="#!" role="button"
                            data-bs-toggle="dropdown" data-bs-auto-close="outside" aria-haspopup="true"
                            aria-expanded="false"><span class="uil fs-8 me-2 uil-cube"></span>Apps</a>
                        <ul class="dropdown-menu navbar-dropdown-caret">
                            <li class="dropdown"><a class="dropdown-item dropdown-toggle" id="e-commerce" href="#"
                                    data-bs-toggle="dropdown" data-bs-auto-close="outside">
                                    <div class="dropdown-item-wrapper"><span
                                            class="uil fs-8 uil-angle-right lh-1 dropdown-indicator-icon"></span><span><span
                                                class="me-2 uil" data-feather="shopping-cart"></span>E commerce</span>
                                    </div>
                                </a>
                                <ul class="dropdown-menu">
                                    <li class="dropdown"><a class="dropdown-item dropdown-toggle" id="admin" href="#"
                                            data-bs-toggle="dropdown" data-bs-auto-close="outside">
                                            <div class="dropdown-item-wrapper"><span
                                                    class="uil fs-8 uil-angle-right lh-1 dropdown-indicator-icon"></span><span><span
                                                        class="me-2 uil"></span>Admin</span></div>
                                        </a>
                                        <ul class="dropdown-menu">
                                            <li><a class="dropdown-item"
                                                    href="https://prium.github.io/phoenix/v1.18.0/apps/e-commerce/admin/add-product.html">
                                                    <div class="dropdown-item-wrapper"><span class="me-2 uil"></span>Add
                                                        product</div>
                                                </a></li>
                                            <li><a class="dropdown-item"
                                                    href="https://prium.github.io/phoenix/v1.18.0/apps/e-commerce/admin/products.html">
                                                    <div class="dropdown-item-wrapper"><span
                                                            class="me-2 uil"></span>Products</div>
                                                </a></li>
                                            <li><a class="dropdown-item"
                                                    href="https://prium.github.io/phoenix/v1.18.0/apps/e-commerce/admin/customers.html">
                                                    <div class="dropdown-item-wrapper"><span
                                                            class="me-2 uil"></span>Customers</div>
                                                </a></li>
                                            <li><a class="dropdown-item"
                                                    href="https://prium.github.io/phoenix/v1.18.0/apps/e-commerce/admin/customer-details.html">
                                                    <div class="dropdown-item-wrapper"><span
                                                            class="me-2 uil"></span>Customer details</div>
                                                </a></li>
                                            <li><a class="dropdown-item"
                                                    href="https://prium.github.io/phoenix/v1.18.0/apps/e-commerce/admin/orders.html">
                                                    <div class="dropdown-item-wrapper"><span
                                                            class="me-2 uil"></span>Orders</div>
                                                </a></li>
                                            <li><a class="dropdown-item"
                                                    href="https://prium.github.io/phoenix/v1.18.0/apps/e-commerce/admin/order-details.html">
                                                    <div class="dropdown-item-wrapper"><span
                                                            class="me-2 uil"></span>Order details</div>
                                                </a></li>
                                            <li><a class="dropdown-item"
                                                    href="https://prium.github.io/phoenix/v1.18.0/apps/e-commerce/admin/refund.html">
                                                    <div class="dropdown-item-wrapper"><span
                                                            class="me-2 uil"></span>Refund</div>
                                                </a></li>
                                        </ul>
                                    </li>
                                    <li class="dropdown"><a class="dropdown-item dropdown-toggle" id="customer" href="#"
                                            data-bs-toggle="dropdown" data-bs-auto-close="outside">
                                            <div class="dropdown-item-wrapper"><span
                                                    class="uil fs-8 uil-angle-right lh-1 dropdown-indicator-icon"></span><span><span
                                                        class="me-2 uil"></span>Customer</span></div>
                                        </a>
                                        <ul class="dropdown-menu">
                                            <li><a class="dropdown-item"
                                                    href="https://prium.github.io/phoenix/v1.18.0/apps/e-commerce/landing/homepage.html">
                                                    <div class="dropdown-item-wrapper"><span
                                                            class="me-2 uil"></span>Homepage</div>
                                                </a></li>
                                            <li><a class="dropdown-item"
                                                    href="https://prium.github.io/phoenix/v1.18.0/apps/e-commerce/landing/product-details.html">
                                                    <div class="dropdown-item-wrapper"><span
                                                            class="me-2 uil"></span>Product details</div>
                                                </a></li>
                                            <li><a class="dropdown-item"
                                                    href="https://prium.github.io/phoenix/v1.18.0/apps/e-commerce/landing/products-filter.html">
                                                    <div class="dropdown-item-wrapper"><span
                                                            class="me-2 uil"></span>Products filter</div>
                                                </a></li>
                                            <li><a class="dropdown-item"
                                                    href="https://prium.github.io/phoenix/v1.18.0/apps/e-commerce/landing/cart.html">
                                                    <div class="dropdown-item-wrapper"><span
                                                            class="me-2 uil"></span>Cart</div>
                                                </a></li>
                                            <li><a class="dropdown-item"
                                                    href="https://prium.github.io/phoenix/v1.18.0/apps/e-commerce/landing/checkout.html">
                                                    <div class="dropdown-item-wrapper"><span
                                                            class="me-2 uil"></span>Checkout</div>
                                                </a></li>
                                            <li><a class="dropdown-item"
                                                    href="https://prium.github.io/phoenix/v1.18.0/apps/e-commerce/landing/shipping-info.html">
                                                    <div class="dropdown-item-wrapper"><span
                                                            class="me-2 uil"></span>Shipping info</div>
                                                </a></li>
                                            <li><a class="dropdown-item"
                                                    href="https://prium.github.io/phoenix/v1.18.0/apps/e-commerce/landing/profile.html">
                                                    <div class="dropdown-item-wrapper"><span
                                                            class="me-2 uil"></span>Profile</div>
                                                </a></li>
                                            <li><a class="dropdown-item"
                                                    href="https://prium.github.io/phoenix/v1.18.0/apps/e-commerce/landing/favourite-stores.html">
                                                    <div class="dropdown-item-wrapper"><span
                                                            class="me-2 uil"></span>Favourite stores</div>
                                                </a></li>
                                            <li><a class="dropdown-item"
                                                    href="https://prium.github.io/phoenix/v1.18.0/apps/e-commerce/landing/wishlist.html">
                                                    <div class="dropdown-item-wrapper"><span
                                                            class="me-2 uil"></span>Wishlist</div>
                                                </a></li>
                                            <li><a class="dropdown-item"
                                                    href="https://prium.github.io/phoenix/v1.18.0/apps/e-commerce/landing/order-tracking.html">
                                                    <div class="dropdown-item-wrapper"><span
                                                            class="me-2 uil"></span>Order tracking</div>
                                                </a></li>
                                            <li><a class="dropdown-item"
                                                    href="https://prium.github.io/phoenix/v1.18.0/apps/e-commerce/landing/invoice.html">
                                                    <div class="dropdown-item-wrapper"><span
                                                            class="me-2 uil"></span>Invoice</div>
                                                </a></li>
                                        </ul>
                                    </li>
                                </ul>
                            </li>
                            <li class="dropdown"><a class="dropdown-item dropdown-toggle" id="CRM" href="#"
                                    data-bs-toggle="dropdown" data-bs-auto-close="outside">
                                    <div class="dropdown-item-wrapper"><span
                                            class="uil fs-8 uil-angle-right lh-1 dropdown-indicator-icon"></span><span><span
                                                class="me-2 uil" data-feather="phone"></span>CRM</span></div>
                                </a>
                                <ul class="dropdown-menu">
                                    <li><a class="dropdown-item"
                                            href="https://prium.github.io/phoenix/v1.18.0/apps/crm/analytics.html">
                                            <div class="dropdown-item-wrapper"><span class="me-2 uil"></span>Analytics
                                            </div>
                                        </a></li>
                                    <li><a class="dropdown-item"
                                            href="https://prium.github.io/phoenix/v1.18.0/apps/crm/deals.html">
                                            <div class="dropdown-item-wrapper"><span class="me-2 uil"></span>Deals</div>
                                        </a></li>
                                    <li><a class="dropdown-item"
                                            href="https://prium.github.io/phoenix/v1.18.0/apps/crm/deal-details.html">
                                            <div class="dropdown-item-wrapper"><span class="me-2 uil"></span>Deal
                                                details</div>
                                        </a></li>
                                    <li><a class="dropdown-item"
                                            href="https://prium.github.io/phoenix/v1.18.0/apps/crm/leads.html">
                                            <div class="dropdown-item-wrapper"><span class="me-2 uil"></span>Leads</div>
                                        </a></li>
                                    <li><a class="dropdown-item"
                                            href="https://prium.github.io/phoenix/v1.18.0/apps/crm/lead-details.html">
                                            <div class="dropdown-item-wrapper"><span class="me-2 uil"></span>Lead
                                                details</div>
                                        </a></li>
                                    <li><a class="dropdown-item"
                                            href="https://prium.github.io/phoenix/v1.18.0/apps/crm/reports.html">
                                            <div class="dropdown-item-wrapper"><span class="me-2 uil"></span>Reports
                                            </div>
                                        </a></li>
                                    <li><a class="dropdown-item"
                                            href="https://prium.github.io/phoenix/v1.18.0/apps/crm/report-details.html">
                                            <div class="dropdown-item-wrapper"><span class="me-2 uil"></span>Report
                                                details</div>
                                        </a></li>
                                    <li><a class="dropdown-item"
                                            href="https://prium.github.io/phoenix/v1.18.0/apps/crm/add-contact.html">
                                            <div class="dropdown-item-wrapper"><span class="me-2 uil"></span>Add contact
                                            </div>
                                        </a></li>
                                </ul>
                            </li>
                            <li class="dropdown"><a class="dropdown-item dropdown-toggle" id="project-management"
                                    href="#" data-bs-toggle="dropdown" data-bs-auto-close="outside">
                                    <div class="dropdown-item-wrapper"><span
                                            class="uil fs-8 uil-angle-right lh-1 dropdown-indicator-icon"></span><span><span
                                                class="me-2 uil" data-feather="clipboard"></span>Project
                                            management</span></div>
                                </a>
                                <ul class="dropdown-menu">
                                    <li><a class="dropdown-item"
                                            href="https://prium.github.io/phoenix/v1.18.0/apps/project-management/create-new.html">
                                            <div class="dropdown-item-wrapper"><span class="me-2 uil"></span>Create new
                                            </div>
                                        </a></li>
                                    <li><a class="dropdown-item"
                                            href="https://prium.github.io/phoenix/v1.18.0/apps/project-management/project-list-view.html">
                                            <div class="dropdown-item-wrapper"><span class="me-2 uil"></span>Project
                                                list view</div>
                                        </a></li>
                                    <li><a class="dropdown-item"
                                            href="https://prium.github.io/phoenix/v1.18.0/apps/project-management/project-card-view.html">
                                            <div class="dropdown-item-wrapper"><span class="me-2 uil"></span>Project
                                                card view</div>
                                        </a></li>
                                    <li><a class="dropdown-item"
                                            href="https://prium.github.io/phoenix/v1.18.0/apps/project-management/project-board-view.html">
                                            <div class="dropdown-item-wrapper"><span class="me-2 uil"></span>Project
                                                board view</div>
                                        </a></li>
                                    <li><a class="dropdown-item"
                                            href="https://prium.github.io/phoenix/v1.18.0/apps/project-management/todo-list.html">
                                            <div class="dropdown-item-wrapper"><span class="me-2 uil"></span>Todo list
                                            </div>
                                        </a></li>
                                    <li><a class="dropdown-item"
                                            href="https://prium.github.io/phoenix/v1.18.0/apps/project-management/project-details.html">
                                            <div class="dropdown-item-wrapper"><span class="me-2 uil"></span>Project
                                                details</div>
                                        </a></li>
                                </ul>
                            </li>
                            <li class="dropdown"><a class="dropdown-item dropdown-toggle" id="travel-agency" href="#"
                                    data-bs-toggle="dropdown" data-bs-auto-close="outside">
                                    <div class="dropdown-item-wrapper"><span
                                            class="uil fs-8 uil-angle-right lh-1 dropdown-indicator-icon"></span><span><span
                                                class="me-2 uil" data-feather="briefcase"></span>Travel agency</span>
                                    </div>
                                </a>
                                <ul class="dropdown-menu">
                                    <li><a class="dropdown-item"
                                            href="https://prium.github.io/phoenix/v1.18.0/apps/travel-agency/landing.html">
                                            <div class="dropdown-item-wrapper"><span class="me-2 uil"></span>Landing
                                            </div>
                                        </a></li>
                                    <li class="dropdown"><a class="dropdown-item dropdown-toggle" id="hotel" href="#"
                                            data-bs-toggle="dropdown" data-bs-auto-close="outside">
                                            <div class="dropdown-item-wrapper"><span
                                                    class="uil fs-8 uil-angle-right lh-1 dropdown-indicator-icon"></span><span><span
                                                        class="me-2 uil"></span>Hotel</span></div>
                                        </a>
                                        <ul class="dropdown-menu">
                                            <li class="dropdown"><a class="dropdown-item dropdown-toggle" id="admin"
                                                    href="#" data-bs-toggle="dropdown" data-bs-auto-close="outside">
                                                    <div class="dropdown-item-wrapper"><span
                                                            class="uil fs-8 uil-angle-right lh-1 dropdown-indicator-icon"></span><span><span
                                                                class="me-2 uil"></span>Admin</span></div>
                                                </a>
                                                <ul class="dropdown-menu">
                                                    <li><a class="dropdown-item"
                                                            href="https://prium.github.io/phoenix/v1.18.0/apps/travel-agency/hotel/admin/add-property.html">
                                                            <div class="dropdown-item-wrapper"><span
                                                                    class="me-2 uil"></span>Add property</div>
                                                        </a></li>
                                                    <li><a class="dropdown-item"
                                                            href="https://prium.github.io/phoenix/v1.18.0/apps/travel-agency/hotel/admin/add-room.html">
                                                            <div class="dropdown-item-wrapper"><span
                                                                    class="me-2 uil"></span>Add room</div>
                                                        </a></li>
                                                    <li><a class="dropdown-item"
                                                            href="https://prium.github.io/phoenix/v1.18.0/apps/travel-agency/hotel/admin/room-listing.html">
                                                            <div class="dropdown-item-wrapper"><span
                                                                    class="me-2 uil"></span>Room listing</div>
                                                        </a></li>
                                                    <li><a class="dropdown-item"
                                                            href="https://prium.github.io/phoenix/v1.18.0/apps/travel-agency/hotel/admin/room-search.html">
                                                            <div class="dropdown-item-wrapper"><span
                                                                    class="me-2 uil"></span>Search room</div>
                                                        </a></li>
                                                </ul>
                                            </li>
                                            <li class="dropdown"><a class="dropdown-item dropdown-toggle" id="customer"
                                                    href="#" data-bs-toggle="dropdown" data-bs-auto-close="outside">
                                                    <div class="dropdown-item-wrapper"><span
                                                            class="uil fs-8 uil-angle-right lh-1 dropdown-indicator-icon"></span><span><span
                                                                class="me-2 uil"></span>Customer</span></div>
                                                </a>
                                                <ul class="dropdown-menu">
                                                    <li><a class="dropdown-item"
                                                            href="https://prium.github.io/phoenix/v1.18.0/apps/travel-agency/hotel/customer/homepage.html">
                                                            <div class="dropdown-item-wrapper"><span
                                                                    class="me-2 uil"></span>Homepage</div>
                                                        </a></li>
                                                    <li><a class="dropdown-item"
                                                            href="https://prium.github.io/phoenix/v1.18.0/apps/travel-agency/hotel/customer/hotel-details.html">
                                                            <div class="dropdown-item-wrapper"><span
                                                                    class="me-2 uil"></span>Hotel details</div>
                                                        </a></li>
                                                    <li><a class="dropdown-item"
                                                            href="https://prium.github.io/phoenix/v1.18.0/apps/travel-agency/hotel/customer/hotel-compare.html">
                                                            <div class="dropdown-item-wrapper"><span
                                                                    class="me-2 uil"></span>Hotel compare</div>
                                                        </a></li>
                                                    <li><a class="dropdown-item"
                                                            href="https://prium.github.io/phoenix/v1.18.0/apps/travel-agency/hotel/customer/checkout.html">
                                                            <div class="dropdown-item-wrapper"><span
                                                                    class="me-2 uil"></span>Checkout</div>
                                                        </a></li>
                                                    <li><a class="dropdown-item"
                                                            href="https://prium.github.io/phoenix/v1.18.0/apps/travel-agency/hotel/customer/payment.html">
                                                            <div class="dropdown-item-wrapper"><span
                                                                    class="me-2 uil"></span>Payment</div>
                                                        </a></li>
                                                    <li><a class="dropdown-item"
                                                            href="https://prium.github.io/phoenix/v1.18.0/apps/travel-agency/hotel/customer/gallery.html">
                                                            <div class="dropdown-item-wrapper"><span
                                                                    class="me-2 uil"></span>Gallery</div>
                                                        </a></li>
                                                </ul>
                                            </li>
                                        </ul>
                                    </li>
                                    <li class="dropdown"><a class="dropdown-item dropdown-toggle" id="flight" href="#"
                                            data-bs-toggle="dropdown" data-bs-auto-close="outside">
                                            <div class="dropdown-item-wrapper"><span
                                                    class="uil fs-8 uil-angle-right lh-1 dropdown-indicator-icon"></span><span><span
                                                        class="me-2 uil"></span>Flight</span></div>
                                        </a>
                                        <ul class="dropdown-menu">
                                            <li><a class="dropdown-item"
                                                    href="https://prium.github.io/phoenix/v1.18.0/apps/travel-agency/flight/homepage.html">
                                                    <div class="dropdown-item-wrapper"><span
                                                            class="me-2 uil"></span>Homepage</div>
                                                </a></li>
                                            <li><a class="dropdown-item"
                                                    href="https://prium.github.io/phoenix/v1.18.0/apps/travel-agency/flight/booking.html">
                                                    <div class="dropdown-item-wrapper"><span
                                                            class="me-2 uil"></span>Booking</div>
                                                </a></li>
                                            <li><a class="dropdown-item"
                                                    href="https://prium.github.io/phoenix/v1.18.0/apps/travel-agency/flight/payment.html">
                                                    <div class="dropdown-item-wrapper"><span
                                                            class="me-2 uil"></span>Payment</div>
                                                </a></li>
                                        </ul>
                                    </li>
                                    <li class="dropdown"><a class="dropdown-item dropdown-toggle" id="trip" href="#"
                                            data-bs-toggle="dropdown" data-bs-auto-close="outside">
                                            <div class="dropdown-item-wrapper"><span
                                                    class="uil fs-8 uil-angle-right lh-1 dropdown-indicator-icon"></span><span><span
                                                        class="me-2 uil"></span>Trip</span></div>
                                        </a>
                                        <ul class="dropdown-menu">
                                            <li><a class="dropdown-item"
                                                    href="https://prium.github.io/phoenix/v1.18.0/apps/travel-agency/trip/homepage.html">
                                                    <div class="dropdown-item-wrapper"><span
                                                            class="me-2 uil"></span>Homepage</div>
                                                </a></li>
                                            <li><a class="dropdown-item"
                                                    href="https://prium.github.io/phoenix/v1.18.0/apps/travel-agency/trip/trip-details.html">
                                                    <div class="dropdown-item-wrapper"><span
                                                            class="me-2 uil"></span>Trip details</div>
                                                </a></li>
                                            <li><a class="dropdown-item"
                                                    href="https://prium.github.io/phoenix/v1.18.0/apps/travel-agency/trip/checkout.html">
                                                    <div class="dropdown-item-wrapper"><span
                                                            class="me-2 uil"></span>Checkout</div>
                                                </a></li>
                                        </ul>
                                    </li>
                                </ul>
                            </li>
                            <li><a class="dropdown-item" href="https://prium.github.io/phoenix/v1.18.0/apps/chat.html">
                                    <div class="dropdown-item-wrapper"><span class="me-2 uil"
                                            data-feather="message-square"></span>Chat</div>
                                </a></li>
                            <li class="dropdown"><a class="dropdown-item dropdown-toggle" id="email" href="#"
                                    data-bs-toggle="dropdown" data-bs-auto-close="outside">
                                    <div class="dropdown-item-wrapper"><span
                                            class="uil fs-8 uil-angle-right lh-1 dropdown-indicator-icon"></span><span><span
                                                class="me-2 uil" data-feather="mail"></span>Email</span></div>
                                </a>
                                <ul class="dropdown-menu">
                                    <li><a class="dropdown-item"
                                            href="https://prium.github.io/phoenix/v1.18.0/apps/email/inbox.html">
                                            <div class="dropdown-item-wrapper"><span class="me-2 uil"></span>Inbox</div>
                                        </a></li>
                                    <li><a class="dropdown-item"
                                            href="https://prium.github.io/phoenix/v1.18.0/apps/email/email-detail.html">
                                            <div class="dropdown-item-wrapper"><span class="me-2 uil"></span>Email
                                                detail</div>
                                        </a></li>
                                    <li><a class="dropdown-item"
                                            href="https://prium.github.io/phoenix/v1.18.0/apps/email/compose.html">
                                            <div class="dropdown-item-wrapper"><span class="me-2 uil"></span>Compose
                                            </div>
                                        </a></li>
                                </ul>
                            </li>
                            <li class="dropdown"><a class="dropdown-item dropdown-toggle" id="events" href="#"
                                    data-bs-toggle="dropdown" data-bs-auto-close="outside">
                                    <div class="dropdown-item-wrapper"><span
                                            class="uil fs-8 uil-angle-right lh-1 dropdown-indicator-icon"></span><span><span
                                                class="me-2 uil" data-feather="bookmark"></span>Events</span></div>
                                </a>
                                <ul class="dropdown-menu">
                                    <li><a class="dropdown-item"
                                            href="https://prium.github.io/phoenix/v1.18.0/apps/events/create-an-event.html">
                                            <div class="dropdown-item-wrapper"><span class="me-2 uil"></span>Create an
                                                event</div>
                                        </a></li>
                                    <li><a class="dropdown-item"
                                            href="https://prium.github.io/phoenix/v1.18.0/apps/events/event-detail.html">
                                            <div class="dropdown-item-wrapper"><span class="me-2 uil"></span>Event
                                                detail</div>
                                        </a></li>
                                </ul>
                            </li>
                            <li class="dropdown"><a class="dropdown-item dropdown-toggle" id="kanban" href="#"
                                    data-bs-toggle="dropdown" data-bs-auto-close="outside">
                                    <div class="dropdown-item-wrapper"><span
                                            class="uil fs-8 uil-angle-right lh-1 dropdown-indicator-icon"></span><span><span
                                                class="me-2 uil" data-feather="trello"></span>Kanban</span></div>
                                </a>
                                <ul class="dropdown-menu">
                                    <li><a class="dropdown-item"
                                            href="https://prium.github.io/phoenix/v1.18.0/apps/kanban/kanban.html">
                                            <div class="dropdown-item-wrapper"><span class="me-2 uil"></span>Kanban
                                            </div>
                                        </a></li>
                                    <li><a class="dropdown-item"
                                            href="https://prium.github.io/phoenix/v1.18.0/apps/kanban/boards.html">
                                            <div class="dropdown-item-wrapper"><span class="me-2 uil"></span>Boards
                                            </div>
                                        </a></li>
                                    <li><a class="dropdown-item"
                                            href="https://prium.github.io/phoenix/v1.18.0/apps/kanban/create-kanban-board.html">
                                            <div class="dropdown-item-wrapper"><span class="me-2 uil"></span>Create
                                                board</div>
                                        </a></li>
                                </ul>
                            </li>
                            <li class="dropdown"><a class="dropdown-item dropdown-toggle" id="social" href="#"
                                    data-bs-toggle="dropdown" data-bs-auto-close="outside">
                                    <div class="dropdown-item-wrapper"><span
                                            class="uil fs-8 uil-angle-right lh-1 dropdown-indicator-icon"></span><span><span
                                                class="me-2 uil" data-feather="share-2"></span>Social</span></div>
                                </a>
                                <ul class="dropdown-menu">
                                    <li><a class="dropdown-item"
                                            href="https://prium.github.io/phoenix/v1.18.0/apps/social/profile.html">
                                            <div class="dropdown-item-wrapper"><span class="me-2 uil"></span>Profile
                                            </div>
                                        </a></li>
                                    <li><a class="dropdown-item"
                                            href="https://prium.github.io/phoenix/v1.18.0/apps/social/settings.html">
                                            <div class="dropdown-item-wrapper"><span class="me-2 uil"></span>Settings
                                            </div>
                                        </a></li>
                                </ul>
                            </li>
                            <li><a class="dropdown-item"
                                    href="https://prium.github.io/phoenix/v1.18.0/apps/calendar.html">
                                    <div class="dropdown-item-wrapper"><span class="me-2 uil"
                                            data-feather="calendar"></span>Calendar</div>
                                </a></li>
                        </ul>
                    </li>
                    <li class="nav-item dropdown"><a class="nav-link dropdown-toggle lh-1" href="#!" role="button"
                            data-bs-toggle="dropdown" data-bs-auto-close="outside" aria-haspopup="true"
                            aria-expanded="false"><span class="uil fs-8 me-2 uil-files-landscapes-alt"></span>Pages</a>
                        <ul class="dropdown-menu navbar-dropdown-caret">
                            <li><a class="dropdown-item"
                                    href="https://prium.github.io/phoenix/v1.18.0/pages/starter.html">
                                    <div class="dropdown-item-wrapper"><span class="me-2 uil"
                                            data-feather="compass"></span>Starter</div>
                                </a></li>
                            <li class="dropdown"><a class="dropdown-item dropdown-toggle" id="faq" href="#"
                                    data-bs-toggle="dropdown" data-bs-auto-close="outside">
                                    <div class="dropdown-item-wrapper"><span
                                            class="uil fs-8 uil-angle-right lh-1 dropdown-indicator-icon"></span><span><span
                                                class="me-2 uil" data-feather="help-circle"></span>Faq</span></div>
                                </a>
                                <ul class="dropdown-menu">
                                    <li><a class="dropdown-item"
                                            href="https://prium.github.io/phoenix/v1.18.0/pages/faq/faq-accordion.html">
                                            <div class="dropdown-item-wrapper"><span class="me-2 uil"></span>Faq
                                                accordion</div>
                                        </a></li>
                                    <li><a class="dropdown-item"
                                            href="https://prium.github.io/phoenix/v1.18.0/pages/faq/faq-tab.html">
                                            <div class="dropdown-item-wrapper"><span class="me-2 uil"></span>Faq tab
                                            </div>
                                        </a></li>
                                </ul>
                            </li>
                            <li class="dropdown"><a class="dropdown-item dropdown-toggle" id="landing" href="#"
                                    data-bs-toggle="dropdown" data-bs-auto-close="outside">
                                    <div class="dropdown-item-wrapper"><span
                                            class="uil fs-8 uil-angle-right lh-1 dropdown-indicator-icon"></span><span><span
                                                class="me-2 uil" data-feather="globe"></span>Landing</span></div>
                                </a>
                                <ul class="dropdown-menu">
                                    <li><a class="dropdown-item"
                                            href="https://prium.github.io/phoenix/v1.18.0/pages/landing/default.html">
                                            <div class="dropdown-item-wrapper"><span class="me-2 uil"></span>Default
                                            </div>
                                        </a></li>
                                    <li><a class="dropdown-item"
                                            href="https://prium.github.io/phoenix/v1.18.0/pages/landing/alternate.html">
                                            <div class="dropdown-item-wrapper"><span class="me-2 uil"></span>Alternate
                                            </div>
                                        </a></li>
                                </ul>
                            </li>
                            <li class="dropdown"><a class="dropdown-item dropdown-toggle" id="pricing" href="#"
                                    data-bs-toggle="dropdown" data-bs-auto-close="outside">
                                    <div class="dropdown-item-wrapper"><span
                                            class="uil fs-8 uil-angle-right lh-1 dropdown-indicator-icon"></span><span><span
                                                class="me-2 uil" data-feather="tag"></span>Pricing</span></div>
                                </a>
                                <ul class="dropdown-menu">
                                    <li><a class="dropdown-item"
                                            href="https://prium.github.io/phoenix/v1.18.0/pages/pricing/pricing-column.html">
                                            <div class="dropdown-item-wrapper"><span class="me-2 uil"></span>Pricing
                                                column</div>
                                        </a></li>
                                    <li><a class="dropdown-item"
                                            href="https://prium.github.io/phoenix/v1.18.0/pages/pricing/pricing-grid.html">
                                            <div class="dropdown-item-wrapper"><span class="me-2 uil"></span>Pricing
                                                grid</div>
                                        </a></li>
                                </ul>
                            </li>
                            <li><a class="dropdown-item"
                                    href="https://prium.github.io/phoenix/v1.18.0/pages/notifications.html">
                                    <div class="dropdown-item-wrapper"><span class="me-2 uil"
                                            data-feather="bell"></span>Notifications</div>
                                </a></li>
                            <li><a class="dropdown-item"
                                    href="https://prium.github.io/phoenix/v1.18.0/pages/members.html">
                                    <div class="dropdown-item-wrapper"><span class="me-2 uil"
                                            data-feather="users"></span>Members</div>
                                </a></li>
                            <li><a class="dropdown-item"
                                    href="https://prium.github.io/phoenix/v1.18.0/pages/timeline.html">
                                    <div class="dropdown-item-wrapper"><span class="me-2 uil"
                                            data-feather="clock"></span>Timeline</div>
                                </a></li>
                            <li class="dropdown"><a class="dropdown-item dropdown-toggle" id="errors" href="#"
                                    data-bs-toggle="dropdown" data-bs-auto-close="outside">
                                    <div class="dropdown-item-wrapper"><span
                                            class="uil fs-8 uil-angle-right lh-1 dropdown-indicator-icon"></span><span><span
                                                class="me-2 uil" data-feather="alert-triangle"></span>Errors</span>
                                    </div>
                                </a>
                                <ul class="dropdown-menu">
                                    <li><a class="dropdown-item"
                                            href="https://prium.github.io/phoenix/v1.18.0/pages/errors/404.html">
                                            <div class="dropdown-item-wrapper"><span class="me-2 uil"></span>404</div>
                                        </a></li>
                                    <li><a class="dropdown-item"
                                            href="https://prium.github.io/phoenix/v1.18.0/pages/errors/403.html">
                                            <div class="dropdown-item-wrapper"><span class="me-2 uil"></span>403</div>
                                        </a></li>
                                    <li><a class="dropdown-item"
                                            href="https://prium.github.io/phoenix/v1.18.0/pages/errors/500.html">
                                            <div class="dropdown-item-wrapper"><span class="me-2 uil"></span>500</div>
                                        </a></li>
                                </ul>
                            </li>
                            <li class="dropdown"><a class="dropdown-item dropdown-toggle" id="authentication" href="#"
                                    data-bs-toggle="dropdown" data-bs-auto-close="outside">
                                    <div class="dropdown-item-wrapper"><span
                                            class="uil fs-8 uil-angle-right lh-1 dropdown-indicator-icon"></span><span><span
                                                class="me-2 uil" data-feather="lock"></span>Authentication</span></div>
                                </a>
                                <ul class="dropdown-menu">
                                    <li class="dropdown"><a class="dropdown-item dropdown-toggle" id="simple" href="#"
                                            data-bs-toggle="dropdown" data-bs-auto-close="outside">
                                            <div class="dropdown-item-wrapper"><span
                                                    class="uil fs-8 uil-angle-right lh-1 dropdown-indicator-icon"></span><span><span
                                                        class="me-2 uil"></span>Simple</span></div>
                                        </a>
                                        <ul class="dropdown-menu">
                                            <li><a class="dropdown-item"
                                                    href="https://prium.github.io/phoenix/v1.18.0/pages/authentication/simple/sign-in.html">
                                                    <div class="dropdown-item-wrapper"><span
                                                            class="me-2 uil"></span>Sign in</div>
                                                </a></li>
                                            <li><a class="dropdown-item"
                                                    href="https://prium.github.io/phoenix/v1.18.0/pages/authentication/simple/sign-up.html">
                                                    <div class="dropdown-item-wrapper"><span
                                                            class="me-2 uil"></span>Sign up</div>
                                                </a></li>
                                            <li><a class="dropdown-item"
                                                    href="https://prium.github.io/phoenix/v1.18.0/pages/authentication/simple/sign-out.html">
                                                    <div class="dropdown-item-wrapper"><span
                                                            class="me-2 uil"></span>Sign out</div>
                                                </a></li>
                                            <li><a class="dropdown-item"
                                                    href="https://prium.github.io/phoenix/v1.18.0/pages/authentication/simple/forgot-password.html">
                                                    <div class="dropdown-item-wrapper"><span
                                                            class="me-2 uil"></span>Forgot password</div>
                                                </a></li>
                                            <li><a class="dropdown-item"
                                                    href="https://prium.github.io/phoenix/v1.18.0/pages/authentication/simple/reset-password.html">
                                                    <div class="dropdown-item-wrapper"><span
                                                            class="me-2 uil"></span>Reset password</div>
                                                </a></li>
                                            <li><a class="dropdown-item"
                                                    href="https://prium.github.io/phoenix/v1.18.0/pages/authentication/simple/lock-screen.html">
                                                    <div class="dropdown-item-wrapper"><span
                                                            class="me-2 uil"></span>Lock screen</div>
                                                </a></li>
                                            <li><a class="dropdown-item"
                                                    href="https://prium.github.io/phoenix/v1.18.0/pages/authentication/simple/2FA.html">
                                                    <div class="dropdown-item-wrapper"><span class="me-2 uil"></span>2FA
                                                    </div>
                                                </a></li>
                                        </ul>
                                    </li>
                                    <li class="dropdown"><a class="dropdown-item dropdown-toggle" id="split" href="#"
                                            data-bs-toggle="dropdown" data-bs-auto-close="outside">
                                            <div class="dropdown-item-wrapper"><span
                                                    class="uil fs-8 uil-angle-right lh-1 dropdown-indicator-icon"></span><span><span
                                                        class="me-2 uil"></span>Split</span></div>
                                        </a>
                                        <ul class="dropdown-menu">
                                            <li><a class="dropdown-item"
                                                    href="https://prium.github.io/phoenix/v1.18.0/pages/authentication/split/sign-in.html">
                                                    <div class="dropdown-item-wrapper"><span
                                                            class="me-2 uil"></span>Sign in</div>
                                                </a></li>
                                            <li><a class="dropdown-item"
                                                    href="https://prium.github.io/phoenix/v1.18.0/pages/authentication/split/sign-up.html">
                                                    <div class="dropdown-item-wrapper"><span
                                                            class="me-2 uil"></span>Sign up</div>
                                                </a></li>
                                            <li><a class="dropdown-item"
                                                    href="https://prium.github.io/phoenix/v1.18.0/pages/authentication/split/sign-out.html">
                                                    <div class="dropdown-item-wrapper"><span
                                                            class="me-2 uil"></span>Sign out</div>
                                                </a></li>
                                            <li><a class="dropdown-item"
                                                    href="https://prium.github.io/phoenix/v1.18.0/pages/authentication/split/forgot-password.html">
                                                    <div class="dropdown-item-wrapper"><span
                                                            class="me-2 uil"></span>Forgot password</div>
                                                </a></li>
                                            <li><a class="dropdown-item"
                                                    href="https://prium.github.io/phoenix/v1.18.0/pages/authentication/split/reset-password.html">
                                                    <div class="dropdown-item-wrapper"><span
                                                            class="me-2 uil"></span>Reset password</div>
                                                </a></li>
                                            <li><a class="dropdown-item"
                                                    href="https://prium.github.io/phoenix/v1.18.0/pages/authentication/split/lock-screen.html">
                                                    <div class="dropdown-item-wrapper"><span
                                                            class="me-2 uil"></span>Lock screen</div>
                                                </a></li>
                                            <li><a class="dropdown-item"
                                                    href="https://prium.github.io/phoenix/v1.18.0/pages/authentication/split/2FA.html">
                                                    <div class="dropdown-item-wrapper"><span class="me-2 uil"></span>2FA
                                                    </div>
                                                </a></li>
                                        </ul>
                                    </li>
                                    <li class="dropdown"><a class="dropdown-item dropdown-toggle" id="Card" href="#"
                                            data-bs-toggle="dropdown" data-bs-auto-close="outside">
                                            <div class="dropdown-item-wrapper"><span
                                                    class="uil fs-8 uil-angle-right lh-1 dropdown-indicator-icon"></span><span><span
                                                        class="me-2 uil"></span>Card</span></div>
                                        </a>
                                        <ul class="dropdown-menu">
                                            <li><a class="dropdown-item"
                                                    href="https://prium.github.io/phoenix/v1.18.0/pages/authentication/card/sign-in.html">
                                                    <div class="dropdown-item-wrapper"><span
                                                            class="me-2 uil"></span>Sign in</div>
                                                </a></li>
                                            <li><a class="dropdown-item"
                                                    href="https://prium.github.io/phoenix/v1.18.0/pages/authentication/card/sign-up.html">
                                                    <div class="dropdown-item-wrapper"><span
                                                            class="me-2 uil"></span>Sign up</div>
                                                </a></li>
                                            <li><a class="dropdown-item"
                                                    href="https://prium.github.io/phoenix/v1.18.0/pages/authentication/card/sign-out.html">
                                                    <div class="dropdown-item-wrapper"><span
                                                            class="me-2 uil"></span>Sign out</div>
                                                </a></li>
                                            <li><a class="dropdown-item"
                                                    href="https://prium.github.io/phoenix/v1.18.0/pages/authentication/card/forgot-password.html">
                                                    <div class="dropdown-item-wrapper"><span
                                                            class="me-2 uil"></span>Forgot password</div>
                                                </a></li>
                                            <li><a class="dropdown-item"
                                                    href="https://prium.github.io/phoenix/v1.18.0/pages/authentication/card/reset-password.html">
                                                    <div class="dropdown-item-wrapper"><span
                                                            class="me-2 uil"></span>Reset password</div>
                                                </a></li>
                                            <li><a class="dropdown-item"
                                                    href="https://prium.github.io/phoenix/v1.18.0/pages/authentication/card/lock-screen.html">
                                                    <div class="dropdown-item-wrapper"><span
                                                            class="me-2 uil"></span>Lock screen</div>
                                                </a></li>
                                            <li><a class="dropdown-item"
                                                    href="https://prium.github.io/phoenix/v1.18.0/pages/authentication/card/2FA.html">
                                                    <div class="dropdown-item-wrapper"><span class="me-2 uil"></span>2FA
                                                    </div>
                                                </a></li>
                                        </ul>
                                    </li>
                                </ul>
                            </li>
                            <li class="dropdown"><a class="dropdown-item dropdown-toggle" id="layouts" href="#"
                                    data-bs-toggle="dropdown" data-bs-auto-close="outside">
                                    <div class="dropdown-item-wrapper"><span
                                            class="uil fs-8 uil-angle-right lh-1 dropdown-indicator-icon"></span><span><span
                                                class="me-2 uil" data-feather="layout"></span>Layouts</span></div>
                                </a>
                                <ul class="dropdown-menu">
                                    <li><a class="dropdown-item"
                                            href="https://prium.github.io/phoenix/v1.18.0/demo/vertical-sidenav.html">
                                            <div class="dropdown-item-wrapper"><span class="me-2 uil"></span>Vertical
                                                sidenav</div>
                                        </a></li>
                                    <li><a class="dropdown-item"
                                            href="https://prium.github.io/phoenix/v1.18.0/demo/dark-mode.html">
                                            <div class="dropdown-item-wrapper"><span class="me-2 uil"></span>Dark mode
                                            </div>
                                        </a></li>
                                    <li><a class="dropdown-item"
                                            href="https://prium.github.io/phoenix/v1.18.0/demo/sidenav-collapse.html">
                                            <div class="dropdown-item-wrapper"><span class="me-2 uil"></span>Sidenav
                                                collapse</div>
                                        </a></li>
                                    <li><a class="dropdown-item"
                                            href="https://prium.github.io/phoenix/v1.18.0/demo/darknav.html">
                                            <div class="dropdown-item-wrapper"><span class="me-2 uil"></span>Darknav
                                            </div>
                                        </a></li>
                                    <li><a class="dropdown-item"
                                            href="https://prium.github.io/phoenix/v1.18.0/demo/topnav-slim.html">
                                            <div class="dropdown-item-wrapper"><span class="me-2 uil"></span>Topnav slim
                                            </div>
                                        </a></li>
                                    <li><a class="dropdown-item"
                                            href="https://prium.github.io/phoenix/v1.18.0/demo/navbar-horizontal.html">
                                            <div class="dropdown-item-wrapper"><span class="me-2 uil"></span>Navbar
                                                horizontal</div>
                                        </a></li>
                                    <li><a class="dropdown-item"
                                            href="https://prium.github.io/phoenix/v1.18.0/demo/horizontal-slim.html">
                                            <div class="dropdown-item-wrapper"><span class="me-2 uil"></span>Horizontal
                                                slim</div>
                                        </a></li>
                                    <li><a class="dropdown-item"
                                            href="https://prium.github.io/phoenix/v1.18.0/demo/combo-nav.html">
                                            <div class="dropdown-item-wrapper"><span class="me-2 uil"></span>Combo nav
                                            </div>
                                        </a></li>
                                    <li><a class="dropdown-item"
                                            href="https://prium.github.io/phoenix/v1.18.0/demo/combo-nav-slim.html">
                                            <div class="dropdown-item-wrapper"><span class="me-2 uil"></span>Combo nav
                                                slim</div>
                                        </a></li>
                                    <li><a class="dropdown-item"
                                            href="https://prium.github.io/phoenix/v1.18.0/demo/dual-nav.html">
                                            <div class="dropdown-item-wrapper"><span class="me-2 uil"></span>Dual nav
                                            </div>
                                        </a></li>
                                </ul>
                            </li>
                        </ul>
                    </li>
                    <li class="nav-item dropdown"><a class="nav-link dropdown-toggle lh-1" href="#!" role="button"
                            data-bs-toggle="dropdown" data-bs-auto-close="outside" aria-haspopup="true"
                            aria-expanded="false"><span class="uil fs-8 me-2 uil-puzzle-piece"></span>Modules</a>
                        <ul class="dropdown-menu navbar-dropdown-caret dropdown-menu-card py-0">
                            <div class="border-0 scrollbar" style="max-height: 60vh;">
                                <div class="px-3 pt-4 pb-3 img-dropdown">
                                    <div class="row gx-4 gy-5">
                                        <div class="col-12 col-sm-6 col-md-4">
                                            <div class="dropdown-item-group"><span class="me-2" data-feather="file-text"
                                                    style="stroke-width:2;"></span>
                                                <h6 class="dropdown-item-title">Forms</h6>
                                            </div><a class="dropdown-link"
                                                href="https://prium.github.io/phoenix/v1.18.0/modules/forms/basic/form-control.html">Form
                                                control</a><a class="dropdown-link"
                                                href="https://prium.github.io/phoenix/v1.18.0/modules/forms/basic/input-group.html">Input
                                                group</a><a class="dropdown-link"
                                                href="https://prium.github.io/phoenix/v1.18.0/modules/forms/basic/select.html">Select</a><a
                                                class="dropdown-link"
                                                href="https://prium.github.io/phoenix/v1.18.0/modules/forms/basic/checks.html">Checks</a><a
                                                class="dropdown-link"
                                                href="https://prium.github.io/phoenix/v1.18.0/modules/forms/basic/range.html">Range</a><a
                                                class="dropdown-link"
                                                href="https://prium.github.io/phoenix/v1.18.0/modules/forms/basic/floating-labels.html">Floating
                                                labels</a><a class="dropdown-link"
                                                href="https://prium.github.io/phoenix/v1.18.0/modules/forms/basic/layout.html">Layout</a><a
                                                class="dropdown-link"
                                                href="https://prium.github.io/phoenix/v1.18.0/modules/forms/advance/advance-select.html">Advance
                                                select</a><a class="dropdown-link"
                                                href="https://prium.github.io/phoenix/v1.18.0/modules/forms/advance/date-picker.html">Date
                                                picker</a><a class="dropdown-link"
                                                href="https://prium.github.io/phoenix/v1.18.0/modules/forms/advance/editor.html">Editor</a><a
                                                class="dropdown-link"
                                                href="https://prium.github.io/phoenix/v1.18.0/modules/forms/advance/file-uploader.html">File
                                                uploader</a><a class="dropdown-link"
                                                href="https://prium.github.io/phoenix/v1.18.0/modules/forms/advance/range.html">Range</a><a
                                                class="dropdown-link"
                                                href="https://prium.github.io/phoenix/v1.18.0/modules/forms/advance/rating.html">Rating</a><a
                                                class="dropdown-link"
                                                href="https://prium.github.io/phoenix/v1.18.0/modules/forms/advance/emoji-button.html">Emoji
                                                button</a><a class="dropdown-link"
                                                href="https://prium.github.io/phoenix/v1.18.0/modules/forms/validation.html">Validation</a><a
                                                class="dropdown-link"
                                                href="https://prium.github.io/phoenix/v1.18.0/modules/forms/wizard.html">Wizard</a>
                                            <div class="dropdown-item-group mt-5"><span class="me-2" data-feather="grid"
                                                    style="stroke-width:2;"></span>
                                                <h6 class="dropdown-item-title">Icons</h6>
                                            </div><a class="dropdown-link"
                                                href="https://prium.github.io/phoenix/v1.18.0/modules/icons/feather.html">Feather</a><a
                                                class="dropdown-link"
                                                href="https://prium.github.io/phoenix/v1.18.0/modules/icons/font-awesome.html">Font
                                                awesome</a><a class="dropdown-link"
                                                href="https://prium.github.io/phoenix/v1.18.0/modules/icons/unicons.html">Unicons</a>
                                            <div class="dropdown-item-group mt-5"><span class="me-2"
                                                    data-feather="bar-chart-2" style="stroke-width:2;"></span>
                                                <h6 class="dropdown-item-title">ECharts</h6>
                                            </div><a class="dropdown-link"
                                                href="https://prium.github.io/phoenix/v1.18.0/modules/echarts/line-charts.html">Line
                                                charts</a><a class="dropdown-link"
                                                href="https://prium.github.io/phoenix/v1.18.0/modules/echarts/bar-charts.html">Bar
                                                charts</a><a class="dropdown-link"
                                                href="https://prium.github.io/phoenix/v1.18.0/modules/echarts/candlestick-charts.html">Candlestick
                                                charts</a><a class="dropdown-link"
                                                href="https://prium.github.io/phoenix/v1.18.0/modules/echarts/geo-map.html">Geo
                                                map</a><a class="dropdown-link"
                                                href="https://prium.github.io/phoenix/v1.18.0/modules/echarts/scatter-charts.html">Scatter
                                                charts</a><a class="dropdown-link"
                                                href="https://prium.github.io/phoenix/v1.18.0/modules/echarts/pie-charts.html">Pie
                                                charts</a><a class="dropdown-link"
                                                href="https://prium.github.io/phoenix/v1.18.0/modules/echarts/gauge-chart.html">Gauge
                                                chart</a><a class="dropdown-link"
                                                href="https://prium.github.io/phoenix/v1.18.0/modules/echarts/radar-charts.html">Radar
                                                charts</a><a class="dropdown-link"
                                                href="https://prium.github.io/phoenix/v1.18.0/modules/echarts/heatmap-charts.html">Heatmap
                                                charts</a><a class="dropdown-link"
                                                href="https://prium.github.io/phoenix/v1.18.0/modules/echarts/how-to-use.html">How
                                                to use</a>
                                        </div>
                                        <div class="col-12 col-sm-6 col-md-4">
                                            <div class="dropdown-item-group"><span class="me-2" data-feather="package"
                                                    style="stroke-width:2;"></span>
                                                <h6 class="dropdown-item-title">Components</h6>
                                            </div><a class="dropdown-link"
                                                href="https://prium.github.io/phoenix/v1.18.0/modules/components/accordion.html">Accordion</a><a
                                                class="dropdown-link"
                                                href="https://prium.github.io/phoenix/v1.18.0/modules/components/avatar.html">Avatar</a><a
                                                class="dropdown-link"
                                                href="https://prium.github.io/phoenix/v1.18.0/modules/components/alerts.html">Alerts</a><a
                                                class="dropdown-link"
                                                href="https://prium.github.io/phoenix/v1.18.0/modules/components/badge.html">Badge</a><a
                                                class="dropdown-link"
                                                href="https://prium.github.io/phoenix/v1.18.0/modules/components/breadcrumb.html">Breadcrumb</a><a
                                                class="dropdown-link"
                                                href="https://prium.github.io/phoenix/v1.18.0/modules/components/button.html">Buttons</a><a
                                                class="dropdown-link"
                                                href="https://prium.github.io/phoenix/v1.18.0/modules/components/calendar.html">Calendar</a><a
                                                class="dropdown-link"
                                                href="https://prium.github.io/phoenix/v1.18.0/modules/components/card.html">Card</a><a
                                                class="dropdown-link"
                                                href="https://prium.github.io/phoenix/v1.18.0/modules/components/carousel/bootstrap.html">Bootstrap</a><a
                                                class="dropdown-link"
                                                href="https://prium.github.io/phoenix/v1.18.0/modules/components/carousel/swiper.html">Swiper</a><a
                                                class="dropdown-link"
                                                href="https://prium.github.io/phoenix/v1.18.0/modules/components/collapse.html">Collapse</a><a
                                                class="dropdown-link"
                                                href="https://prium.github.io/phoenix/v1.18.0/modules/components/dropdown.html">Dropdown</a><a
                                                class="dropdown-link"
                                                href="https://prium.github.io/phoenix/v1.18.0/modules/components/list-group.html">List
                                                group</a><a class="dropdown-link"
                                                href="https://prium.github.io/phoenix/v1.18.0/modules/components/modal.html">Modals</a><a
                                                class="dropdown-link"
                                                href="https://prium.github.io/phoenix/v1.18.0/modules/components/navs-and-tabs/navs.html">Navs</a><a
                                                class="dropdown-link"
                                                href="https://prium.github.io/phoenix/v1.18.0/modules/components/navs-and-tabs/navbar.html">Navbar</a><a
                                                class="dropdown-link"
                                                href="https://prium.github.io/phoenix/v1.18.0/modules/components/navs-and-tabs/tabs.html">Tabs</a><a
                                                class="dropdown-link"
                                                href="https://prium.github.io/phoenix/v1.18.0/modules/components/offcanvas.html">Offcanvas</a><a
                                                class="dropdown-link"
                                                href="https://prium.github.io/phoenix/v1.18.0/modules/components/progress-bar.html">Progress
                                                bar</a><a class="dropdown-link"
                                                href="https://prium.github.io/phoenix/v1.18.0/modules/components/placeholder.html">Placeholder</a><a
                                                class="dropdown-link"
                                                href="https://prium.github.io/phoenix/v1.18.0/modules/components/pagination.html">Pagination</a><a
                                                class="dropdown-link"
                                                href="https://prium.github.io/phoenix/v1.18.0/modules/components/popovers.html">Popovers</a><a
                                                class="dropdown-link"
                                                href="https://prium.github.io/phoenix/v1.18.0/modules/components/scrollspy.html">Scrollspy</a><a
                                                class="dropdown-link"
                                                href="https://prium.github.io/phoenix/v1.18.0/modules/components/sortable.html">Sortable</a><a
                                                class="dropdown-link"
                                                href="https://prium.github.io/phoenix/v1.18.0/modules/components/spinners.html">Spinners</a><a
                                                class="dropdown-link"
                                                href="https://prium.github.io/phoenix/v1.18.0/modules/components/toast.html">Toast</a><a
                                                class="dropdown-link"
                                                href="https://prium.github.io/phoenix/v1.18.0/modules/components/tooltips.html">Tooltips</a><a
                                                class="dropdown-link"
                                                href="https://prium.github.io/phoenix/v1.18.0/modules/components/typed-text.html">Typed
                                                text</a><a class="dropdown-link"
                                                href="https://prium.github.io/phoenix/v1.18.0/modules/components/chat-widget.html">Chat
                                                widget</a>
                                        </div>
                                        <div class="col-12 col-sm-6 col-md-4">
                                            <div class="dropdown-item-group"><span class="me-2" data-feather="columns"
                                                    style="stroke-width:2;"></span>
                                                <h6 class="dropdown-item-title">Tables</h6>
                                            </div><a class="dropdown-link"
                                                href="https://prium.github.io/phoenix/v1.18.0/modules/tables/basic-tables.html">Basic
                                                tables</a><a class="dropdown-link"
                                                href="https://prium.github.io/phoenix/v1.18.0/modules/tables/advance-tables.html">Advance
                                                tables</a><a class="dropdown-link"
                                                href="https://prium.github.io/phoenix/v1.18.0/modules/tables/bulk-select.html">Bulk
                                                Select</a>
                                            <div class="dropdown-item-group mt-5"><span class="me-2" data-feather="tool"
                                                    style="stroke-width:2;"></span>
                                                <h6 class="dropdown-item-title">Utilities</h6>
                                            </div><a class="dropdown-link"
                                                href="https://prium.github.io/phoenix/v1.18.0/modules/utilities/background.html">Background</a><a
                                                class="dropdown-link"
                                                href="https://prium.github.io/phoenix/v1.18.0/modules/utilities/borders.html">Borders</a><a
                                                class="dropdown-link"
                                                href="https://prium.github.io/phoenix/v1.18.0/modules/utilities/colors.html">Colors</a><a
                                                class="dropdown-link"
                                                href="https://prium.github.io/phoenix/v1.18.0/modules/utilities/display.html">Display</a><a
                                                class="dropdown-link"
                                                href="https://prium.github.io/phoenix/v1.18.0/modules/utilities/flex.html">Flex</a><a
                                                class="dropdown-link"
                                                href="https://prium.github.io/phoenix/v1.18.0/modules/utilities/stacks.html">Stacks</a><a
                                                class="dropdown-link"
                                                href="https://prium.github.io/phoenix/v1.18.0/modules/utilities/float.html">Float</a><a
                                                class="dropdown-link"
                                                href="https://prium.github.io/phoenix/v1.18.0/modules/utilities/grid.html">Grid</a><a
                                                class="dropdown-link"
                                                href="https://prium.github.io/phoenix/v1.18.0/modules/utilities/interactions.html">Interactions</a><a
                                                class="dropdown-link"
                                                href="https://prium.github.io/phoenix/v1.18.0/modules/utilities/opacity.html">Opacity</a><a
                                                class="dropdown-link"
                                                href="https://prium.github.io/phoenix/v1.18.0/modules/utilities/overflow.html">Overflow</a><a
                                                class="dropdown-link"
                                                href="https://prium.github.io/phoenix/v1.18.0/modules/utilities/position.html">Position</a><a
                                                class="dropdown-link"
                                                href="https://prium.github.io/phoenix/v1.18.0/modules/utilities/shadows.html">Shadows</a><a
                                                class="dropdown-link"
                                                href="https://prium.github.io/phoenix/v1.18.0/modules/utilities/sizing.html">Sizing</a><a
                                                class="dropdown-link"
                                                href="https://prium.github.io/phoenix/v1.18.0/modules/utilities/spacing.html">Spacing</a><a
                                                class="dropdown-link"
                                                href="https://prium.github.io/phoenix/v1.18.0/modules/utilities/typography.html">Typography</a><a
                                                class="dropdown-link"
                                                href="https://prium.github.io/phoenix/v1.18.0/modules/utilities/vertical-align.html">Vertical
                                                align</a><a class="dropdown-link"
                                                href="https://prium.github.io/phoenix/v1.18.0/modules/utilities/visibility.html">Visibility</a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </ul>
                    </li>
                    <li class="nav-item dropdown"><a class="nav-link dropdown-toggle lh-1" href="#!" role="button"
                            data-bs-toggle="dropdown" data-bs-auto-close="outside" aria-haspopup="true"
                            aria-expanded="false"><span
                                class="uil fs-8 me-2 uil-document-layout-right"></span>Documentation</a>
                        <ul class="dropdown-menu navbar-dropdown-caret">
                            <li><a class="dropdown-item"
                                    href="https://prium.github.io/phoenix/v1.18.0/documentation/getting-started.html">
                                    <div class="dropdown-item-wrapper"><span class="me-2 uil"
                                            data-feather="life-buoy"></span>Getting started</div>
                                </a></li>
                            <li class="dropdown dropdown-inside"><a class="dropdown-item dropdown-toggle"
                                    id="customization" href="#" data-bs-toggle="dropdown" data-bs-auto-close="outside">
                                    <div class="dropdown-item-wrapper"><span
                                            class="uil fs-8 uil-angle-right lh-1 dropdown-indicator-icon"></span><span><span
                                                class="me-2 uil" data-feather="settings"></span>Customization</span>
                                    </div>
                                </a>
                                <ul class="dropdown-menu">
                                    <li><a class="dropdown-item"
                                            href="https://prium.github.io/phoenix/v1.18.0/documentation/customization/configuration.html">
                                            <div class="dropdown-item-wrapper"><span
                                                    class="me-2 uil"></span>Configuration</div>
                                        </a></li>
                                    <li><a class="dropdown-item"
                                            href="https://prium.github.io/phoenix/v1.18.0/documentation/customization/styling.html">
                                            <div class="dropdown-item-wrapper"><span class="me-2 uil"></span>Styling
                                            </div>
                                        </a></li>
                                    <li><a class="dropdown-item"
                                            href="https://prium.github.io/phoenix/v1.18.0/documentation/customization/color.html">
                                            <div class="dropdown-item-wrapper"><span class="me-2 uil"></span>Color</div>
                                        </a></li>
                                    <li><a class="dropdown-item"
                                            href="https://prium.github.io/phoenix/v1.18.0/documentation/customization/dark-mode.html">
                                            <div class="dropdown-item-wrapper"><span class="me-2 uil"></span>Dark mode
                                            </div>
                                        </a></li>
                                    <li><a class="dropdown-item"
                                            href="https://prium.github.io/phoenix/v1.18.0/documentation/customization/plugin.html">
                                            <div class="dropdown-item-wrapper"><span class="me-2 uil"></span>Plugin
                                            </div>
                                        </a></li>
                                </ul>
                            </li>
                            <li class="dropdown dropdown-inside"><a class="dropdown-item dropdown-toggle"
                                    id="layouts-doc" href="#" data-bs-toggle="dropdown" data-bs-auto-close="outside">
                                    <div class="dropdown-item-wrapper"><span
                                            class="uil fs-8 uil-angle-right lh-1 dropdown-indicator-icon"></span><span><span
                                                class="me-2 uil" data-feather="table"></span>Layouts doc</span></div>
                                </a>
                                <ul class="dropdown-menu">
                                    <li><a class="dropdown-item"
                                            href="https://prium.github.io/phoenix/v1.18.0/documentation/layouts/vertical-navbar.html">
                                            <div class="dropdown-item-wrapper"><span class="me-2 uil"></span>Vertical
                                                navbar</div>
                                        </a></li>
                                    <li><a class="dropdown-item"
                                            href="https://prium.github.io/phoenix/v1.18.0/documentation/layouts/horizontal-navbar.html">
                                            <div class="dropdown-item-wrapper"><span class="me-2 uil"></span>Horizontal
                                                navbar</div>
                                        </a></li>
                                    <li><a class="dropdown-item"
                                            href="https://prium.github.io/phoenix/v1.18.0/documentation/layouts/combo-navbar.html">
                                            <div class="dropdown-item-wrapper"><span class="me-2 uil"></span>Combo
                                                navbar</div>
                                        </a></li>
                                    <li><a class="dropdown-item"
                                            href="https://prium.github.io/phoenix/v1.18.0/documentation/layouts/dual-nav.html">
                                            <div class="dropdown-item-wrapper"><span class="me-2 uil"></span>Dual nav
                                            </div>
                                        </a></li>
                                </ul>
                            </li>
                            <li><a class="dropdown-item"
                                    href="https://prium.github.io/phoenix/v1.18.0/documentation/gulp.html">
                                    <div class="dropdown-item-wrapper"><span
                                            class="me-2 fa-brands fa-gulp ms-1 me-1 fa-lg"></span>Gulp</div>
                                </a></li>
                            <li><a class="dropdown-item"
                                    href="https://prium.github.io/phoenix/v1.18.0/documentation/design-file.html">
                                    <div class="dropdown-item-wrapper"><span class="me-2 uil"
                                            data-feather="figma"></span>Design file</div>
                                </a></li>
                            <li><a class="dropdown-item" href="https://prium.github.io/phoenix/v1.18.0/changelog.html">
                                    <div class="dropdown-item-wrapper"><span class="me-2 uil"
                                            data-feather="git-merge"></span>Changelog</div>
                                </a></li>
                            <li><a class="dropdown-item" href="https://prium.github.io/phoenix/v1.18.0/showcase.html">
                                    <div class="dropdown-item-wrapper"><span class="me-2 uil"
                                            data-feather="monitor"></span>Showcase</div>
                                </a></li>
                        </ul>
                    </li>
                </ul>
            </div>
            <ul class="navbar-nav navbar-nav-icons flex-row">
                <li class="nav-item">
                    <div class="theme-control-toggle fa-icon-wait px-2"><input
                            class="form-check-input ms-0 theme-control-toggle-input" type="checkbox"
                            data-theme-control="phoenixTheme" value="dark" id="themeControlToggle" /><label
                            class="mb-0 theme-control-toggle-label theme-control-toggle-light" for="themeControlToggle"
                            data-bs-toggle="tooltip" data-bs-placement="left" data-bs-title="Switch theme"
                            style="height:32px;width:32px;"><span class="icon" data-feather="moon"></span></label><label
                            class="mb-0 theme-control-toggle-label theme-control-toggle-dark" for="themeControlToggle"
                            data-bs-toggle="tooltip" data-bs-placement="left" data-bs-title="Switch theme"
                            style="height:32px;width:32px;"><span class="icon" data-feather="sun"></span></label></div>
                </li>
                <li class="nav-item"><a class="nav-link" href="#" data-bs-toggle="modal"
                        data-bs-target="#searchBoxModal"><span data-feather="search"
                            style="height:19px;width:19px;margin-bottom: 2px;"></span></a></li>
                <li class="nav-item dropdown">
                    <a class="nav-link" href="#" style="min-width: 2.25rem" role="button" data-bs-toggle="dropdown"
                        aria-haspopup="true" aria-expanded="false" data-bs-auto-close="outside"><span class="d-block"
                            style="height:20px;width:20px;"><span data-feather="bell"
                                style="height:20px;width:20px;"></span></span></a>
                    <div class="dropdown-menu dropdown-menu-end notification-dropdown-menu py-0 shadow border navbar-dropdown-caret"
                        id="navbarDropdownNotfication" aria-labelledby="navbarDropdownNotfication">
                        <div class="card position-relative border-0">
                            <div class="card-header p-2">
                                <div class="d-flex justify-content-between">
                                    <h5 class="text-body-emphasis mb-0">Notifications</h5><button
                                        class="btn btn-link p-0 fs-9 fw-normal" type="button">Mark all as read</button>
                                </div>
                            </div>
                            <div class="card-body p-0">
                                <div class="scrollbar-overlay" style="height: 27rem;">
                                    <div
                                        class="px-2 px-sm-3 py-3 notification-card position-relative read border-bottom">
                                        <div
                                            class="d-flex align-items-center justify-content-between position-relative">
                                            <div class="d-flex">
                                                <div class="avatar avatar-m status-online me-3"><img
                                                        class="rounded-circle"
                                                        src="https://prium.github.io/phoenix/v1.18.0/assets/img/team/40x40/30.webp"
                                                        alt="" /></div>
                                                <div class="flex-1 me-sm-3">
                                                    <h4 class="fs-9 text-body-emphasis">Jessie Samson</h4>
                                                    <p class="fs-9 text-body-highlight mb-2 mb-sm-3 fw-normal"><span
                                                            class='me-1 fs-10'>💬</span>Mentioned you in a comment.<span
                                                            class="ms-2 text-body-quaternary text-opacity-75 fw-bold fs-10">10m</span>
                                                    </p>
                                                    <p class="text-body-secondary fs-9 mb-0"><span
                                                            class="me-1 fas fa-clock"></span><span class="fw-bold">10:41
                                                            AM </span>August 7,2021</p>
                                                </div>
                                            </div>
                                            <div class="dropdown notification-dropdown"><button
                                                    class="btn fs-10 btn-sm dropdown-toggle dropdown-caret-none transition-none"
                                                    type="button" data-bs-toggle="dropdown" data-boundary="window"
                                                    aria-haspopup="true" aria-expanded="false"
                                                    data-bs-reference="parent"><span
                                                        class="fas fa-ellipsis-h fs-10 text-body"></span></button>
                                                <div class="dropdown-menu py-2"><a class="dropdown-item" href="#!">Mark
                                                        as unread</a></div>
                                            </div>
                                        </div>
                                    </div>
                                    <div
                                        class="px-2 px-sm-3 py-3 notification-card position-relative unread border-bottom">
                                        <div
                                            class="d-flex align-items-center justify-content-between position-relative">
                                            <div class="d-flex">
                                                <div class="avatar avatar-m status-online me-3">
                                                    <div class="avatar-name rounded-circle"><span>J</span></div>
                                                </div>
                                                <div class="flex-1 me-sm-3">
                                                    <h4 class="fs-9 text-body-emphasis">Jane Foster</h4>
                                                    <p class="fs-9 text-body-highlight mb-2 mb-sm-3 fw-normal"><span
                                                            class='me-1 fs-10'>📅</span>Created an event.<span
                                                            class="ms-2 text-body-quaternary text-opacity-75 fw-bold fs-10">20m</span>
                                                    </p>
                                                    <p class="text-body-secondary fs-9 mb-0"><span
                                                            class="me-1 fas fa-clock"></span><span class="fw-bold">10:20
                                                            AM </span>August 7,2021</p>
                                                </div>
                                            </div>
                                            <div class="dropdown notification-dropdown"><button
                                                    class="btn fs-10 btn-sm dropdown-toggle dropdown-caret-none transition-none"
                                                    type="button" data-bs-toggle="dropdown" data-boundary="window"
                                                    aria-haspopup="true" aria-expanded="false"
                                                    data-bs-reference="parent"><span
                                                        class="fas fa-ellipsis-h fs-10 text-body"></span></button>
                                                <div class="dropdown-menu py-2"><a class="dropdown-item" href="#!">Mark
                                                        as unread</a></div>
                                            </div>
                                        </div>
                                    </div>
                                    <div
                                        class="px-2 px-sm-3 py-3 notification-card position-relative unread border-bottom">
                                        <div
                                            class="d-flex align-items-center justify-content-between position-relative">
                                            <div class="d-flex">
                                                <div class="avatar avatar-m status-online me-3"><img
                                                        class="rounded-circle avatar-placeholder"
                                                        src="https://prium.github.io/phoenix/v1.18.0/assets/img/team/40x40/avatar.webp"
                                                        alt="" /></div>
                                                <div class="flex-1 me-sm-3">
                                                    <h4 class="fs-9 text-body-emphasis">Jessie Samson</h4>
                                                    <p class="fs-9 text-body-highlight mb-2 mb-sm-3 fw-normal"><span
                                                            class='me-1 fs-10'>👍</span>Liked your comment.<span
                                                            class="ms-2 text-body-quaternary text-opacity-75 fw-bold fs-10">1h</span>
                                                    </p>
                                                    <p class="text-body-secondary fs-9 mb-0"><span
                                                            class="me-1 fas fa-clock"></span><span class="fw-bold">9:30
                                                            AM </span>August 7,2021</p>
                                                </div>
                                            </div>
                                            <div class="dropdown notification-dropdown"><button
                                                    class="btn fs-10 btn-sm dropdown-toggle dropdown-caret-none transition-none"
                                                    type="button" data-bs-toggle="dropdown" data-boundary="window"
                                                    aria-haspopup="true" aria-expanded="false"
                                                    data-bs-reference="parent"><span
                                                        class="fas fa-ellipsis-h fs-10 text-body"></span></button>
                                                <div class="dropdown-menu py-2"><a class="dropdown-item" href="#!">Mark
                                                        as unread</a></div>
                                            </div>
                                        </div>
                                    </div>
                                    <div
                                        class="px-2 px-sm-3 py-3 notification-card position-relative unread border-bottom">
                                        <div
                                            class="d-flex align-items-center justify-content-between position-relative">
                                            <div class="d-flex">
                                                <div class="avatar avatar-m status-online me-3"><img
                                                        class="rounded-circle"
                                                        src="https://prium.github.io/phoenix/v1.18.0/assets/img/team/40x40/57.webp"
                                                        alt="" /></div>
                                                <div class="flex-1 me-sm-3">
                                                    <h4 class="fs-9 text-body-emphasis">Kiera Anderson</h4>
                                                    <p class="fs-9 text-body-highlight mb-2 mb-sm-3 fw-normal"><span
                                                            class='me-1 fs-10'>💬</span>Mentioned you in a comment.<span
                                                            class="ms-2 text-body-quaternary text-opacity-75 fw-bold fs-10"></span>
                                                    </p>
                                                    <p class="text-body-secondary fs-9 mb-0"><span
                                                            class="me-1 fas fa-clock"></span><span class="fw-bold">9:11
                                                            AM </span>August 7,2021</p>
                                                </div>
                                            </div>
                                            <div class="dropdown notification-dropdown"><button
                                                    class="btn fs-10 btn-sm dropdown-toggle dropdown-caret-none transition-none"
                                                    type="button" data-bs-toggle="dropdown" data-boundary="window"
                                                    aria-haspopup="true" aria-expanded="false"
                                                    data-bs-reference="parent"><span
                                                        class="fas fa-ellipsis-h fs-10 text-body"></span></button>
                                                <div class="dropdown-menu py-2"><a class="dropdown-item" href="#!">Mark
                                                        as unread</a></div>
                                            </div>
                                        </div>
                                    </div>
                                    <div
                                        class="px-2 px-sm-3 py-3 notification-card position-relative unread border-bottom">
                                        <div
                                            class="d-flex align-items-center justify-content-between position-relative">
                                            <div class="d-flex">
                                                <div class="avatar avatar-m status-online me-3"><img
                                                        class="rounded-circle"
                                                        src="https://prium.github.io/phoenix/v1.18.0/assets/img/team/40x40/59.webp"
                                                        alt="" /></div>
                                                <div class="flex-1 me-sm-3">
                                                    <h4 class="fs-9 text-body-emphasis">Herman Carter</h4>
                                                    <p class="fs-9 text-body-highlight mb-2 mb-sm-3 fw-normal"><span
                                                            class='me-1 fs-10'>👤</span>Tagged you in a comment.<span
                                                            class="ms-2 text-body-quaternary text-opacity-75 fw-bold fs-10"></span>
                                                    </p>
                                                    <p class="text-body-secondary fs-9 mb-0"><span
                                                            class="me-1 fas fa-clock"></span><span class="fw-bold">10:58
                                                            PM </span>August 7,2021</p>
                                                </div>
                                            </div>
                                            <div class="dropdown notification-dropdown"><button
                                                    class="btn fs-10 btn-sm dropdown-toggle dropdown-caret-none transition-none"
                                                    type="button" data-bs-toggle="dropdown" data-boundary="window"
                                                    aria-haspopup="true" aria-expanded="false"
                                                    data-bs-reference="parent"><span
                                                        class="fas fa-ellipsis-h fs-10 text-body"></span></button>
                                                <div class="dropdown-menu py-2"><a class="dropdown-item" href="#!">Mark
                                                        as unread</a></div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="px-2 px-sm-3 py-3 notification-card position-relative read ">
                                        <div
                                            class="d-flex align-items-center justify-content-between position-relative">
                                            <div class="d-flex">
                                                <div class="avatar avatar-m status-online me-3"><img
                                                        class="rounded-circle"
                                                        src="https://prium.github.io/phoenix/v1.18.0/assets/img/team/40x40/58.webp"
                                                        alt="" /></div>
                                                <div class="flex-1 me-sm-3">
                                                    <h4 class="fs-9 text-body-emphasis">Benjamin Button</h4>
                                                    <p class="fs-9 text-body-highlight mb-2 mb-sm-3 fw-normal"><span
                                                            class='me-1 fs-10'>👍</span>Liked your comment.<span
                                                            class="ms-2 text-body-quaternary text-opacity-75 fw-bold fs-10"></span>
                                                    </p>
                                                    <p class="text-body-secondary fs-9 mb-0"><span
                                                            class="me-1 fas fa-clock"></span><span class="fw-bold">10:18
                                                            AM </span>August 7,2021</p>
                                                </div>
                                            </div>
                                            <div class="dropdown notification-dropdown"><button
                                                    class="btn fs-10 btn-sm dropdown-toggle dropdown-caret-none transition-none"
                                                    type="button" data-bs-toggle="dropdown" data-boundary="window"
                                                    aria-haspopup="true" aria-expanded="false"
                                                    data-bs-reference="parent"><span
                                                        class="fas fa-ellipsis-h fs-10 text-body"></span></button>
                                                <div class="dropdown-menu py-2"><a class="dropdown-item" href="#!">Mark
                                                        as unread</a></div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="card-footer p-0 border-top border-translucent border-0">
                                <div class="my-2 text-center fw-bold fs-10 text-body-tertiary text-opactity-85"><a
                                        class="fw-bolder"
                                        href="https://prium.github.io/phoenix/v1.18.0/pages/notifications.html">Notification
                                        history</a></div>
                            </div>
                        </div>
                    </div>
                </li>
                <li class="nav-item dropdown">
                    <a class="nav-link" id="navbarDropdownNindeDots" href="#" role="button" data-bs-toggle="dropdown"
                        aria-haspopup="true" data-bs-auto-close="outside" aria-expanded="false"><svg width="16"
                            height="16" viewbox="0 0 16 16" fill="none" xmlns="http://www.w3.org/2000/svg">
                            <circle cx="2" cy="2" r="2" fill="currentColor"></circle>
                            <circle cx="2" cy="8" r="2" fill="currentColor"></circle>
                            <circle cx="2" cy="14" r="2" fill="currentColor"></circle>
                            <circle cx="8" cy="8" r="2" fill="currentColor"></circle>
                            <circle cx="8" cy="14" r="2" fill="currentColor"></circle>
                            <circle cx="14" cy="8" r="2" fill="currentColor"></circle>
                            <circle cx="14" cy="14" r="2" fill="currentColor"></circle>
                            <circle cx="8" cy="2" r="2" fill="currentColor"></circle>
                            <circle cx="14" cy="2" r="2" fill="currentColor"></circle>
                        </svg></a>
                    <div class="dropdown-menu dropdown-menu-end navbar-dropdown-caret py-0 dropdown-nine-dots shadow border"
                        aria-labelledby="navbarDropdownNindeDots">
                        <div class="card bg-body-emphasis position-relative border-0">
                            <div class="card-body pt-3 px-3 pb-0 overflow-auto scrollbar" style="height: 20rem;">
                                <div class="row text-center align-items-center gx-0 gy-0">
                                    <div class="col-4"><a
                                            class="d-block bg-body-secondary-hover p-2 rounded-3 text-center text-decoration-none mb-3"
                                            href="#!"><img
                                                src="https://prium.github.io/phoenix/v1.18.0/assets/img/nav-icons/behance.webp"
                                                alt="" width="30" />
                                            <p class="mb-0 text-body-emphasis text-truncate fs-10 mt-1 pt-1">Behance</p>
                                        </a></div>
                                    <div class="col-4"><a
                                            class="d-block bg-body-secondary-hover p-2 rounded-3 text-center text-decoration-none mb-3"
                                            href="#!"><img
                                                src="https://prium.github.io/phoenix/v1.18.0/assets/img/nav-icons/google-cloud.webp"
                                                alt="" width="30" />
                                            <p class="mb-0 text-body-emphasis text-truncate fs-10 mt-1 pt-1">Cloud</p>
                                        </a></div>
                                    <div class="col-4"><a
                                            class="d-block bg-body-secondary-hover p-2 rounded-3 text-center text-decoration-none mb-3"
                                            href="#!"><img
                                                src="https://prium.github.io/phoenix/v1.18.0/assets/img/nav-icons/slack.webp"
                                                alt="" width="30" />
                                            <p class="mb-0 text-body-emphasis text-truncate fs-10 mt-1 pt-1">Slack</p>
                                        </a></div>
                                    <div class="col-4"><a
                                            class="d-block bg-body-secondary-hover p-2 rounded-3 text-center text-decoration-none mb-3"
                                            href="#!"><img
                                                src="https://prium.github.io/phoenix/v1.18.0/assets/img/nav-icons/gitlab.webp"
                                                alt="" width="30" />
                                            <p class="mb-0 text-body-emphasis text-truncate fs-10 mt-1 pt-1">Gitlab</p>
                                        </a></div>
                                    <div class="col-4"><a
                                            class="d-block bg-body-secondary-hover p-2 rounded-3 text-center text-decoration-none mb-3"
                                            href="#!"><img
                                                src="https://prium.github.io/phoenix/v1.18.0/assets/img/nav-icons/bitbucket.webp"
                                                alt="" width="30" />
                                            <p class="mb-0 text-body-emphasis text-truncate fs-10 mt-1 pt-1">BitBucket
                                            </p>
                                        </a></div>
                                    <div class="col-4"><a
                                            class="d-block bg-body-secondary-hover p-2 rounded-3 text-center text-decoration-none mb-3"
                                            href="#!"><img
                                                src="https://prium.github.io/phoenix/v1.18.0/assets/img/nav-icons/google-drive.webp"
                                                alt="" width="30" />
                                            <p class="mb-0 text-body-emphasis text-truncate fs-10 mt-1 pt-1">Drive</p>
                                        </a></div>
                                    <div class="col-4"><a
                                            class="d-block bg-body-secondary-hover p-2 rounded-3 text-center text-decoration-none mb-3"
                                            href="#!"><img
                                                src="https://prium.github.io/phoenix/v1.18.0/assets/img/nav-icons/trello.webp"
                                                alt="" width="30" />
                                            <p class="mb-0 text-body-emphasis text-truncate fs-10 mt-1 pt-1">Trello</p>
                                        </a></div>
                                    <div class="col-4"><a
                                            class="d-block bg-body-secondary-hover p-2 rounded-3 text-center text-decoration-none mb-3"
                                            href="#!"><img
                                                src="https://prium.github.io/phoenix/v1.18.0/assets/img/nav-icons/figma.webp"
                                                alt="" width="20" />
                                            <p class="mb-0 text-body-emphasis text-truncate fs-10 mt-1 pt-1">Figma</p>
                                        </a></div>
                                    <div class="col-4"><a
                                            class="d-block bg-body-secondary-hover p-2 rounded-3 text-center text-decoration-none mb-3"
                                            href="#!"><img
                                                src="https://prium.github.io/phoenix/v1.18.0/assets/img/nav-icons/twitter.webp"
                                                alt="" width="30" />
                                            <p class="mb-0 text-body-emphasis text-truncate fs-10 mt-1 pt-1">Twitter</p>
                                        </a></div>
                                    <div class="col-4"><a
                                            class="d-block bg-body-secondary-hover p-2 rounded-3 text-center text-decoration-none mb-3"
                                            href="#!"><img
                                                src="https://prium.github.io/phoenix/v1.18.0/assets/img/nav-icons/pinterest.webp"
                                                alt="" width="30" />
                                            <p class="mb-0 text-body-emphasis text-truncate fs-10 mt-1 pt-1">Pinterest
                                            </p>
                                        </a></div>
                                    <div class="col-4"><a
                                            class="d-block bg-body-secondary-hover p-2 rounded-3 text-center text-decoration-none mb-3"
                                            href="#!"><img
                                                src="https://prium.github.io/phoenix/v1.18.0/assets/img/nav-icons/ln.webp"
                                                alt="" width="30" />
                                            <p class="mb-0 text-body-emphasis text-truncate fs-10 mt-1 pt-1">Linkedin
                                            </p>
                                        </a></div>
                                    <div class="col-4"><a
                                            class="d-block bg-body-secondary-hover p-2 rounded-3 text-center text-decoration-none mb-3"
                                            href="#!"><img
                                                src="https://prium.github.io/phoenix/v1.18.0/assets/img/nav-icons/google-maps.webp"
                                                alt="" width="30" />
                                            <p class="mb-0 text-body-emphasis text-truncate fs-10 mt-1 pt-1">Maps</p>
                                        </a></div>
                                    <div class="col-4"><a
                                            class="d-block bg-body-secondary-hover p-2 rounded-3 text-center text-decoration-none mb-3"
                                            href="#!"><img
                                                src="https://prium.github.io/phoenix/v1.18.0/assets/img/nav-icons/google-photos.webp"
                                                alt="" width="30" />
                                            <p class="mb-0 text-body-emphasis text-truncate fs-10 mt-1 pt-1">Photos</p>
                                        </a></div>
                                    <div class="col-4"><a
                                            class="d-block bg-body-secondary-hover p-2 rounded-3 text-center text-decoration-none mb-3"
                                            href="#!"><img
                                                src="https://prium.github.io/phoenix/v1.18.0/assets/img/nav-icons/spotify.webp"
                                                alt="" width="30" />
                                            <p class="mb-0 text-body-emphasis text-truncate fs-10 mt-1 pt-1">Spotify</p>
                                        </a></div>
                                </div>
                            </div>
                        </div>
                    </div>
                </li>
                <li class="nav-item dropdown"><a class="nav-link lh-1 pe-0" id="navbarDropdownUser" href="#!"
                        role="button" data-bs-toggle="dropdown" data-bs-auto-close="outside" aria-haspopup="true"
                        aria-expanded="false">
                        <div class="avatar avatar-l ">
                            <img class="rounded-circle "
                                src="https://prium.github.io/phoenix/v1.18.0/assets/img/team/40x40/57.webp" alt="" />
                        </div>
                    </a>
                    <div class="dropdown-menu dropdown-menu-end navbar-dropdown-caret py-0 dropdown-profile shadow border"
                        aria-labelledby="navbarDropdownUser">
                        <div class="card position-relative border-0">
                            <div class="card-body p-0">
                                <div class="text-center pt-4 pb-3">
                                    <div class="avatar avatar-xl ">
                                        <img class="rounded-circle "
                                            src="https://prium.github.io/phoenix/v1.18.0/assets/img/team/72x72/57.webp"
                                            alt="" />
                                    </div>
                                    <h6 class="mt-2 text-body-emphasis">Jerry Seinfield</h6>
                                </div>
                                <div class="mb-3 mx-3"><input class="form-control form-control-sm"
                                        id="statusUpdateInput" type="text" placeholder="Update your status" /></div>
                            </div>
                            <div class="overflow-auto scrollbar" style="height: 10rem;">
                                <ul class="nav d-flex flex-column mb-2 pb-1">
                                    <li class="nav-item"><a class="nav-link px-3 d-block" href="#!"> <span
                                                class="me-2 text-body align-bottom"
                                                data-feather="user"></span><span>Profile</span></a></li>
                                    <li class="nav-item"><a class="nav-link px-3 d-block" href="#!"><span
                                                class="me-2 text-body align-bottom"
                                                data-feather="pie-chart"></span>Dashboard</a></li>
                                    <li class="nav-item"><a class="nav-link px-3 d-block" href="#!"> <span
                                                class="me-2 text-body align-bottom" data-feather="lock"></span>Posts
                                            &amp; Activity</a></li>
                                    <li class="nav-item"><a class="nav-link px-3 d-block" href="#!"> <span
                                                class="me-2 text-body align-bottom"
                                                data-feather="settings"></span>Settings &amp; Privacy </a></li>
                                    <li class="nav-item"><a class="nav-link px-3 d-block" href="#!"> <span
                                                class="me-2 text-body align-bottom"
                                                data-feather="help-circle"></span>Help Center</a></li>
                                    <li class="nav-item"><a class="nav-link px-3 d-block" href="#!"> <span
                                                class="me-2 text-body align-bottom"
                                                data-feather="globe"></span>Language</a></li>
                                </ul>
                            </div>
                            <div class="card-footer p-0 border-top border-translucent">
                                <ul class="nav d-flex flex-column my-3">
                                    <li class="nav-item"><a class="nav-link px-3 d-block" href="#!"> <span
                                                class="me-2 text-body align-bottom" data-feather="user-plus"></span>Add
                                            another account</a></li>
                                </ul>
                                <hr />
                                <div class="px-3"> <a class="btn btn-phoenix-secondary d-flex flex-center w-100"
                                        href="#!"> <span class="me-2" data-feather="log-out"> </span>Sign out</a></div>
                                <div class="my-2 text-center fw-bold fs-10 text-body-quaternary"><a
                                        class="text-body-quaternary me-1" href="#!">Privacy policy</a>&bull;<a
                                        class="text-body-quaternary mx-1" href="#!">Terms</a>&bull;<a
                                        class="text-body-quaternary ms-1" href="#!">Cookies</a></div>
                            </div>
                        </div>
                    </div>
                </li>
            </ul>
        </nav>
        <nav class="navbar navbar-top navbar-slim justify-content-between fixed-top navbar-expand-lg" id="navbarTopSlim"
            style="display:none;">
            <div class="navbar-logo">
                <button class="btn navbar-toggler navbar-toggler-humburger-icon hover-bg-transparent" type="button"
                    data-bs-toggle="collapse" data-bs-target="#navbarTopCollapse" aria-controls="navbarTopCollapse"
                    aria-expanded="false" aria-label="Toggle Navigation"><span class="navbar-toggle-icon"><span
                            class="toggle-line"></span></span></button>
                <a class="navbar-brand navbar-brand" href="https://prium.github.io/phoenix/v1.18.0/index.html">phoenix
                    <span class="text-body-highlight d-none d-sm-inline">slim</span></a>
            </div>
            <div class="collapse navbar-collapse navbar-top-collapse order-1 order-lg-0 justify-content-center"
                id="navbarTopCollapse">
                <ul class="navbar-nav navbar-nav-top" data-dropdown-on-hover="data-dropdown-on-hover">
                    <li class="nav-item dropdown"><a class="nav-link dropdown-toggle lh-1" href="#!" role="button"
                            data-bs-toggle="dropdown" data-bs-auto-close="outside" aria-haspopup="true"
                            aria-expanded="false"><span class="uil fs-8 me-2 uil-chart-pie"></span>Home</a>
                        <ul class="dropdown-menu navbar-dropdown-caret">
                            <li><a class="dropdown-item" href="https://prium.github.io/phoenix/v1.18.0/index.html">
                                    <div class="dropdown-item-wrapper"><span class="me-2 uil"
                                            data-feather="shopping-cart"></span>E commerce</div>
                                </a></li>
                            <li><a class="dropdown-item" href="project-management.html">
                                    <div class="dropdown-item-wrapper"><span class="me-2 uil"
                                            data-feather="clipboard"></span>Project management</div>
                                </a></li>
                            <li><a class="dropdown-item" href="crm.html">
                                    <div class="dropdown-item-wrapper"><span class="me-2 uil"
                                            data-feather="phone"></span>CRM</div>
                                </a></li>
                            <li><a class="dropdown-item active" href="travel-agency.html">
                                    <div class="dropdown-item-wrapper"><span class="me-2 uil"
                                            data-feather="briefcase"></span>Travel agency</div>
                                </a></li>
                            <li><a class="dropdown-item"
                                    href="https://prium.github.io/phoenix/v1.18.0/apps/social/feed.html">
                                    <div class="dropdown-item-wrapper"><span class="me-2 uil"
                                            data-feather="share-2"></span>Social feed</div>
                                </a></li>
                        </ul>
                    </li>
                    <li class="nav-item dropdown"><a class="nav-link dropdown-toggle lh-1" href="#!" role="button"
                            data-bs-toggle="dropdown" data-bs-auto-close="outside" aria-haspopup="true"
                            aria-expanded="false"><span class="uil fs-8 me-2 uil-cube"></span>Apps</a>
                        <ul class="dropdown-menu navbar-dropdown-caret">
                            <li class="dropdown"><a class="dropdown-item dropdown-toggle" id="e-commerce" href="#"
                                    data-bs-toggle="dropdown" data-bs-auto-close="outside">
                                    <div class="dropdown-item-wrapper"><span
                                            class="uil fs-8 uil-angle-right lh-1 dropdown-indicator-icon"></span><span><span
                                                class="me-2 uil" data-feather="shopping-cart"></span>E commerce</span>
                                    </div>
                                </a>
                                <ul class="dropdown-menu">
                                    <li class="dropdown"><a class="dropdown-item dropdown-toggle" id="admin" href="#"
                                            data-bs-toggle="dropdown" data-bs-auto-close="outside">
                                            <div class="dropdown-item-wrapper"><span
                                                    class="uil fs-8 uil-angle-right lh-1 dropdown-indicator-icon"></span><span><span
                                                        class="me-2 uil"></span>Admin</span></div>
                                        </a>
                                        <ul class="dropdown-menu">
                                            <li><a class="dropdown-item"
                                                    href="https://prium.github.io/phoenix/v1.18.0/apps/e-commerce/admin/add-product.html">
                                                    <div class="dropdown-item-wrapper"><span class="me-2 uil"></span>Add
                                                        product</div>
                                                </a></li>
                                            <li><a class="dropdown-item"
                                                    href="https://prium.github.io/phoenix/v1.18.0/apps/e-commerce/admin/products.html">
                                                    <div class="dropdown-item-wrapper"><span
                                                            class="me-2 uil"></span>Products</div>
                                                </a></li>
                                            <li><a class="dropdown-item"
                                                    href="https://prium.github.io/phoenix/v1.18.0/apps/e-commerce/admin/customers.html">
                                                    <div class="dropdown-item-wrapper"><span
                                                            class="me-2 uil"></span>Customers</div>
                                                </a></li>
                                            <li><a class="dropdown-item"
                                                    href="https://prium.github.io/phoenix/v1.18.0/apps/e-commerce/admin/customer-details.html">
                                                    <div class="dropdown-item-wrapper"><span
                                                            class="me-2 uil"></span>Customer details</div>
                                                </a></li>
                                            <li><a class="dropdown-item"
                                                    href="https://prium.github.io/phoenix/v1.18.0/apps/e-commerce/admin/orders.html">
                                                    <div class="dropdown-item-wrapper"><span
                                                            class="me-2 uil"></span>Orders</div>
                                                </a></li>
                                            <li><a class="dropdown-item"
                                                    href="https://prium.github.io/phoenix/v1.18.0/apps/e-commerce/admin/order-details.html">
                                                    <div class="dropdown-item-wrapper"><span
                                                            class="me-2 uil"></span>Order details</div>
                                                </a></li>
                                            <li><a class="dropdown-item"
                                                    href="https://prium.github.io/phoenix/v1.18.0/apps/e-commerce/admin/refund.html">
                                                    <div class="dropdown-item-wrapper"><span
                                                            class="me-2 uil"></span>Refund</div>
                                                </a></li>
                                        </ul>
                                    </li>
                                    <li class="dropdown"><a class="dropdown-item dropdown-toggle" id="customer" href="#"
                                            data-bs-toggle="dropdown" data-bs-auto-close="outside">
                                            <div class="dropdown-item-wrapper"><span
                                                    class="uil fs-8 uil-angle-right lh-1 dropdown-indicator-icon"></span><span><span
                                                        class="me-2 uil"></span>Customer</span></div>
                                        </a>
                                        <ul class="dropdown-menu">
                                            <li><a class="dropdown-item"
                                                    href="https://prium.github.io/phoenix/v1.18.0/apps/e-commerce/landing/homepage.html">
                                                    <div class="dropdown-item-wrapper"><span
                                                            class="me-2 uil"></span>Homepage</div>
                                                </a></li>
                                            <li><a class="dropdown-item"
                                                    href="https://prium.github.io/phoenix/v1.18.0/apps/e-commerce/landing/product-details.html">
                                                    <div class="dropdown-item-wrapper"><span
                                                            class="me-2 uil"></span>Product details</div>
                                                </a></li>
                                            <li><a class="dropdown-item"
                                                    href="https://prium.github.io/phoenix/v1.18.0/apps/e-commerce/landing/products-filter.html">
                                                    <div class="dropdown-item-wrapper"><span
                                                            class="me-2 uil"></span>Products filter</div>
                                                </a></li>
                                            <li><a class="dropdown-item"
                                                    href="https://prium.github.io/phoenix/v1.18.0/apps/e-commerce/landing/cart.html">
                                                    <div class="dropdown-item-wrapper"><span
                                                            class="me-2 uil"></span>Cart</div>
                                                </a></li>
                                            <li><a class="dropdown-item"
                                                    href="https://prium.github.io/phoenix/v1.18.0/apps/e-commerce/landing/checkout.html">
                                                    <div class="dropdown-item-wrapper"><span
                                                            class="me-2 uil"></span>Checkout</div>
                                                </a></li>
                                            <li><a class="dropdown-item"
                                                    href="https://prium.github.io/phoenix/v1.18.0/apps/e-commerce/landing/shipping-info.html">
                                                    <div class="dropdown-item-wrapper"><span
                                                            class="me-2 uil"></span>Shipping info</div>
                                                </a></li>
                                            <li><a class="dropdown-item"
                                                    href="https://prium.github.io/phoenix/v1.18.0/apps/e-commerce/landing/profile.html">
                                                    <div class="dropdown-item-wrapper"><span
                                                            class="me-2 uil"></span>Profile</div>
                                                </a></li>
                                            <li><a class="dropdown-item"
                                                    href="https://prium.github.io/phoenix/v1.18.0/apps/e-commerce/landing/favourite-stores.html">
                                                    <div class="dropdown-item-wrapper"><span
                                                            class="me-2 uil"></span>Favourite stores</div>
                                                </a></li>
                                            <li><a class="dropdown-item"
                                                    href="https://prium.github.io/phoenix/v1.18.0/apps/e-commerce/landing/wishlist.html">
                                                    <div class="dropdown-item-wrapper"><span
                                                            class="me-2 uil"></span>Wishlist</div>
                                                </a></li>
                                            <li><a class="dropdown-item"
                                                    href="https://prium.github.io/phoenix/v1.18.0/apps/e-commerce/landing/order-tracking.html">
                                                    <div class="dropdown-item-wrapper"><span
                                                            class="me-2 uil"></span>Order tracking</div>
                                                </a></li>
                                            <li><a class="dropdown-item"
                                                    href="https://prium.github.io/phoenix/v1.18.0/apps/e-commerce/landing/invoice.html">
                                                    <div class="dropdown-item-wrapper"><span
                                                            class="me-2 uil"></span>Invoice</div>
                                                </a></li>
                                        </ul>
                                    </li>
                                </ul>
                            </li>
                            <li class="dropdown"><a class="dropdown-item dropdown-toggle" id="CRM" href="#"
                                    data-bs-toggle="dropdown" data-bs-auto-close="outside">
                                    <div class="dropdown-item-wrapper"><span
                                            class="uil fs-8 uil-angle-right lh-1 dropdown-indicator-icon"></span><span><span
                                                class="me-2 uil" data-feather="phone"></span>CRM</span></div>
                                </a>
                                <ul class="dropdown-menu">
                                    <li><a class="dropdown-item"
                                            href="https://prium.github.io/phoenix/v1.18.0/apps/crm/analytics.html">
                                            <div class="dropdown-item-wrapper"><span class="me-2 uil"></span>Analytics
                                            </div>
                                        </a></li>
                                    <li><a class="dropdown-item"
                                            href="https://prium.github.io/phoenix/v1.18.0/apps/crm/deals.html">
                                            <div class="dropdown-item-wrapper"><span class="me-2 uil"></span>Deals</div>
                                        </a></li>
                                    <li><a class="dropdown-item"
                                            href="https://prium.github.io/phoenix/v1.18.0/apps/crm/deal-details.html">
                                            <div class="dropdown-item-wrapper"><span class="me-2 uil"></span>Deal
                                                details</div>
                                        </a></li>
                                    <li><a class="dropdown-item"
                                            href="https://prium.github.io/phoenix/v1.18.0/apps/crm/leads.html">
                                            <div class="dropdown-item-wrapper"><span class="me-2 uil"></span>Leads</div>
                                        </a></li>
                                    <li><a class="dropdown-item"
                                            href="https://prium.github.io/phoenix/v1.18.0/apps/crm/lead-details.html">
                                            <div class="dropdown-item-wrapper"><span class="me-2 uil"></span>Lead
                                                details</div>
                                        </a></li>
                                    <li><a class="dropdown-item"
                                            href="https://prium.github.io/phoenix/v1.18.0/apps/crm/reports.html">
                                            <div class="dropdown-item-wrapper"><span class="me-2 uil"></span>Reports
                                            </div>
                                        </a></li>
                                    <li><a class="dropdown-item"
                                            href="https://prium.github.io/phoenix/v1.18.0/apps/crm/report-details.html">
                                            <div class="dropdown-item-wrapper"><span class="me-2 uil"></span>Report
                                                details</div>
                                        </a></li>
                                    <li><a class="dropdown-item"
                                            href="https://prium.github.io/phoenix/v1.18.0/apps/crm/add-contact.html">
                                            <div class="dropdown-item-wrapper"><span class="me-2 uil"></span>Add contact
                                            </div>
                                        </a></li>
                                </ul>
                            </li>
                            <li class="dropdown"><a class="dropdown-item dropdown-toggle" id="project-management"
                                    href="#" data-bs-toggle="dropdown" data-bs-auto-close="outside">
                                    <div class="dropdown-item-wrapper"><span
                                            class="uil fs-8 uil-angle-right lh-1 dropdown-indicator-icon"></span><span><span
                                                class="me-2 uil" data-feather="clipboard"></span>Project
                                            management</span></div>
                                </a>
                                <ul class="dropdown-menu">
                                    <li><a class="dropdown-item"
                                            href="https://prium.github.io/phoenix/v1.18.0/apps/project-management/create-new.html">
                                            <div class="dropdown-item-wrapper"><span class="me-2 uil"></span>Create new
                                            </div>
                                        </a></li>
                                    <li><a class="dropdown-item"
                                            href="https://prium.github.io/phoenix/v1.18.0/apps/project-management/project-list-view.html">
                                            <div class="dropdown-item-wrapper"><span class="me-2 uil"></span>Project
                                                list view</div>
                                        </a></li>
                                    <li><a class="dropdown-item"
                                            href="https://prium.github.io/phoenix/v1.18.0/apps/project-management/project-card-view.html">
                                            <div class="dropdown-item-wrapper"><span class="me-2 uil"></span>Project
                                                card view</div>
                                        </a></li>
                                    <li><a class="dropdown-item"
                                            href="https://prium.github.io/phoenix/v1.18.0/apps/project-management/project-board-view.html">
                                            <div class="dropdown-item-wrapper"><span class="me-2 uil"></span>Project
                                                board view</div>
                                        </a></li>
                                    <li><a class="dropdown-item"
                                            href="https://prium.github.io/phoenix/v1.18.0/apps/project-management/todo-list.html">
                                            <div class="dropdown-item-wrapper"><span class="me-2 uil"></span>Todo list
                                            </div>
                                        </a></li>
                                    <li><a class="dropdown-item"
                                            href="https://prium.github.io/phoenix/v1.18.0/apps/project-management/project-details.html">
                                            <div class="dropdown-item-wrapper"><span class="me-2 uil"></span>Project
                                                details</div>
                                        </a></li>
                                </ul>
                            </li>
                            <li class="dropdown"><a class="dropdown-item dropdown-toggle" id="travel-agency" href="#"
                                    data-bs-toggle="dropdown" data-bs-auto-close="outside">
                                    <div class="dropdown-item-wrapper"><span
                                            class="uil fs-8 uil-angle-right lh-1 dropdown-indicator-icon"></span><span><span
                                                class="me-2 uil" data-feather="briefcase"></span>Travel agency</span>
                                    </div>
                                </a>
                                <ul class="dropdown-menu">
                                    <li><a class="dropdown-item"
                                            href="https://prium.github.io/phoenix/v1.18.0/apps/travel-agency/landing.html">
                                            <div class="dropdown-item-wrapper"><span class="me-2 uil"></span>Landing
                                            </div>
                                        </a></li>
                                    <li class="dropdown"><a class="dropdown-item dropdown-toggle" id="hotel" href="#"
                                            data-bs-toggle="dropdown" data-bs-auto-close="outside">
                                            <div class="dropdown-item-wrapper"><span
                                                    class="uil fs-8 uil-angle-right lh-1 dropdown-indicator-icon"></span><span><span
                                                        class="me-2 uil"></span>Hotel</span></div>
                                        </a>
                                        <ul class="dropdown-menu">
                                            <li class="dropdown"><a class="dropdown-item dropdown-toggle" id="admin"
                                                    href="#" data-bs-toggle="dropdown" data-bs-auto-close="outside">
                                                    <div class="dropdown-item-wrapper"><span
                                                            class="uil fs-8 uil-angle-right lh-1 dropdown-indicator-icon"></span><span><span
                                                                class="me-2 uil"></span>Admin</span></div>
                                                </a>
                                                <ul class="dropdown-menu">
                                                    <li><a class="dropdown-item"
                                                            href="https://prium.github.io/phoenix/v1.18.0/apps/travel-agency/hotel/admin/add-property.html">
                                                            <div class="dropdown-item-wrapper"><span
                                                                    class="me-2 uil"></span>Add property</div>
                                                        </a></li>
                                                    <li><a class="dropdown-item"
                                                            href="https://prium.github.io/phoenix/v1.18.0/apps/travel-agency/hotel/admin/add-room.html">
                                                            <div class="dropdown-item-wrapper"><span
                                                                    class="me-2 uil"></span>Add room</div>
                                                        </a></li>
                                                    <li><a class="dropdown-item"
                                                            href="https://prium.github.io/phoenix/v1.18.0/apps/travel-agency/hotel/admin/room-listing.html">
                                                            <div class="dropdown-item-wrapper"><span
                                                                    class="me-2 uil"></span>Room listing</div>
                                                        </a></li>
                                                    <li><a class="dropdown-item"
                                                            href="https://prium.github.io/phoenix/v1.18.0/apps/travel-agency/hotel/admin/room-search.html">
                                                            <div class="dropdown-item-wrapper"><span
                                                                    class="me-2 uil"></span>Search room</div>
                                                        </a></li>
                                                </ul>
                                            </li>
                                            <li class="dropdown"><a class="dropdown-item dropdown-toggle" id="customer"
                                                    href="#" data-bs-toggle="dropdown" data-bs-auto-close="outside">
                                                    <div class="dropdown-item-wrapper"><span
                                                            class="uil fs-8 uil-angle-right lh-1 dropdown-indicator-icon"></span><span><span
                                                                class="me-2 uil"></span>Customer</span></div>
                                                </a>
                                                <ul class="dropdown-menu">
                                                    <li><a class="dropdown-item"
                                                            href="https://prium.github.io/phoenix/v1.18.0/apps/travel-agency/hotel/customer/homepage.html">
                                                            <div class="dropdown-item-wrapper"><span
                                                                    class="me-2 uil"></span>Homepage</div>
                                                        </a></li>
                                                    <li><a class="dropdown-item"
                                                            href="https://prium.github.io/phoenix/v1.18.0/apps/travel-agency/hotel/customer/hotel-details.html">
                                                            <div class="dropdown-item-wrapper"><span
                                                                    class="me-2 uil"></span>Hotel details</div>
                                                        </a></li>
                                                    <li><a class="dropdown-item"
                                                            href="https://prium.github.io/phoenix/v1.18.0/apps/travel-agency/hotel/customer/hotel-compare.html">
                                                            <div class="dropdown-item-wrapper"><span
                                                                    class="me-2 uil"></span>Hotel compare</div>
                                                        </a></li>
                                                    <li><a class="dropdown-item"
                                                            href="https://prium.github.io/phoenix/v1.18.0/apps/travel-agency/hotel/customer/checkout.html">
                                                            <div class="dropdown-item-wrapper"><span
                                                                    class="me-2 uil"></span>Checkout</div>
                                                        </a></li>
                                                    <li><a class="dropdown-item"
                                                            href="https://prium.github.io/phoenix/v1.18.0/apps/travel-agency/hotel/customer/payment.html">
                                                            <div class="dropdown-item-wrapper"><span
                                                                    class="me-2 uil"></span>Payment</div>
                                                        </a></li>
                                                    <li><a class="dropdown-item"
                                                            href="https://prium.github.io/phoenix/v1.18.0/apps/travel-agency/hotel/customer/gallery.html">
                                                            <div class="dropdown-item-wrapper"><span
                                                                    class="me-2 uil"></span>Gallery</div>
                                                        </a></li>
                                                </ul>
                                            </li>
                                        </ul>
                                    </li>
                                    <li class="dropdown"><a class="dropdown-item dropdown-toggle" id="flight" href="#"
                                            data-bs-toggle="dropdown" data-bs-auto-close="outside">
                                            <div class="dropdown-item-wrapper"><span
                                                    class="uil fs-8 uil-angle-right lh-1 dropdown-indicator-icon"></span><span><span
                                                        class="me-2 uil"></span>Flight</span></div>
                                        </a>
                                        <ul class="dropdown-menu">
                                            <li><a class="dropdown-item"
                                                    href="https://prium.github.io/phoenix/v1.18.0/apps/travel-agency/flight/homepage.html">
                                                    <div class="dropdown-item-wrapper"><span
                                                            class="me-2 uil"></span>Homepage</div>
                                                </a></li>
                                            <li><a class="dropdown-item"
                                                    href="https://prium.github.io/phoenix/v1.18.0/apps/travel-agency/flight/booking.html">
                                                    <div class="dropdown-item-wrapper"><span
                                                            class="me-2 uil"></span>Booking</div>
                                                </a></li>
                                            <li><a class="dropdown-item"
                                                    href="https://prium.github.io/phoenix/v1.18.0/apps/travel-agency/flight/payment.html">
                                                    <div class="dropdown-item-wrapper"><span
                                                            class="me-2 uil"></span>Payment</div>
                                                </a></li>
                                        </ul>
                                    </li>
                                    <li class="dropdown"><a class="dropdown-item dropdown-toggle" id="trip" href="#"
                                            data-bs-toggle="dropdown" data-bs-auto-close="outside">
                                            <div class="dropdown-item-wrapper"><span
                                                    class="uil fs-8 uil-angle-right lh-1 dropdown-indicator-icon"></span><span><span
                                                        class="me-2 uil"></span>Trip</span></div>
                                        </a>
                                        <ul class="dropdown-menu">
                                            <li><a class="dropdown-item"
                                                    href="https://prium.github.io/phoenix/v1.18.0/apps/travel-agency/trip/homepage.html">
                                                    <div class="dropdown-item-wrapper"><span
                                                            class="me-2 uil"></span>Homepage</div>
                                                </a></li>
                                            <li><a class="dropdown-item"
                                                    href="https://prium.github.io/phoenix/v1.18.0/apps/travel-agency/trip/trip-details.html">
                                                    <div class="dropdown-item-wrapper"><span
                                                            class="me-2 uil"></span>Trip details</div>
                                                </a></li>
                                            <li><a class="dropdown-item"
                                                    href="https://prium.github.io/phoenix/v1.18.0/apps/travel-agency/trip/checkout.html">
                                                    <div class="dropdown-item-wrapper"><span
                                                            class="me-2 uil"></span>Checkout</div>
                                                </a></li>
                                        </ul>
                                    </li>
                                </ul>
                            </li>
                            <li><a class="dropdown-item" href="https://prium.github.io/phoenix/v1.18.0/apps/chat.html">
                                    <div class="dropdown-item-wrapper"><span class="me-2 uil"
                                            data-feather="message-square"></span>Chat</div>
                                </a></li>
                            <li class="dropdown"><a class="dropdown-item dropdown-toggle" id="email" href="#"
                                    data-bs-toggle="dropdown" data-bs-auto-close="outside">
                                    <div class="dropdown-item-wrapper"><span
                                            class="uil fs-8 uil-angle-right lh-1 dropdown-indicator-icon"></span><span><span
                                                class="me-2 uil" data-feather="mail"></span>Email</span></div>
                                </a>
                                <ul class="dropdown-menu">
                                    <li><a class="dropdown-item"
                                            href="https://prium.github.io/phoenix/v1.18.0/apps/email/inbox.html">
                                            <div class="dropdown-item-wrapper"><span class="me-2 uil"></span>Inbox</div>
                                        </a></li>
                                    <li><a class="dropdown-item"
                                            href="https://prium.github.io/phoenix/v1.18.0/apps/email/email-detail.html">
                                            <div class="dropdown-item-wrapper"><span class="me-2 uil"></span>Email
                                                detail</div>
                                        </a></li>
                                    <li><a class="dropdown-item"
                                            href="https://prium.github.io/phoenix/v1.18.0/apps/email/compose.html">
                                            <div class="dropdown-item-wrapper"><span class="me-2 uil"></span>Compose
                                            </div>
                                        </a></li>
                                </ul>
                            </li>
                            <li class="dropdown"><a class="dropdown-item dropdown-toggle" id="events" href="#"
                                    data-bs-toggle="dropdown" data-bs-auto-close="outside">
                                    <div class="dropdown-item-wrapper"><span
                                            class="uil fs-8 uil-angle-right lh-1 dropdown-indicator-icon"></span><span><span
                                                class="me-2 uil" data-feather="bookmark"></span>Events</span></div>
                                </a>
                                <ul class="dropdown-menu">
                                    <li><a class="dropdown-item"
                                            href="https://prium.github.io/phoenix/v1.18.0/apps/events/create-an-event.html">
                                            <div class="dropdown-item-wrapper"><span class="me-2 uil"></span>Create an
                                                event</div>
                                        </a></li>
                                    <li><a class="dropdown-item"
                                            href="https://prium.github.io/phoenix/v1.18.0/apps/events/event-detail.html">
                                            <div class="dropdown-item-wrapper"><span class="me-2 uil"></span>Event
                                                detail</div>
                                        </a></li>
                                </ul>
                            </li>
                            <li class="dropdown"><a class="dropdown-item dropdown-toggle" id="kanban" href="#"
                                    data-bs-toggle="dropdown" data-bs-auto-close="outside">
                                    <div class="dropdown-item-wrapper"><span
                                            class="uil fs-8 uil-angle-right lh-1 dropdown-indicator-icon"></span><span><span
                                                class="me-2 uil" data-feather="trello"></span>Kanban</span></div>
                                </a>
                                <ul class="dropdown-menu">
                                    <li><a class="dropdown-item"
                                            href="https://prium.github.io/phoenix/v1.18.0/apps/kanban/kanban.html">
                                            <div class="dropdown-item-wrapper"><span class="me-2 uil"></span>Kanban
                                            </div>
                                        </a></li>
                                    <li><a class="dropdown-item"
                                            href="https://prium.github.io/phoenix/v1.18.0/apps/kanban/boards.html">
                                            <div class="dropdown-item-wrapper"><span class="me-2 uil"></span>Boards
                                            </div>
                                        </a></li>
                                    <li><a class="dropdown-item"
                                            href="https://prium.github.io/phoenix/v1.18.0/apps/kanban/create-kanban-board.html">
                                            <div class="dropdown-item-wrapper"><span class="me-2 uil"></span>Create
                                                board</div>
                                        </a></li>
                                </ul>
                            </li>
                            <li class="dropdown"><a class="dropdown-item dropdown-toggle" id="social" href="#"
                                    data-bs-toggle="dropdown" data-bs-auto-close="outside">
                                    <div class="dropdown-item-wrapper"><span
                                            class="uil fs-8 uil-angle-right lh-1 dropdown-indicator-icon"></span><span><span
                                                class="me-2 uil" data-feather="share-2"></span>Social</span></div>
                                </a>
                                <ul class="dropdown-menu">
                                    <li><a class="dropdown-item"
                                            href="https://prium.github.io/phoenix/v1.18.0/apps/social/profile.html">
                                            <div class="dropdown-item-wrapper"><span class="me-2 uil"></span>Profile
                                            </div>
                                        </a></li>
                                    <li><a class="dropdown-item"
                                            href="https://prium.github.io/phoenix/v1.18.0/apps/social/settings.html">
                                            <div class="dropdown-item-wrapper"><span class="me-2 uil"></span>Settings
                                            </div>
                                        </a></li>
                                </ul>
                            </li>
                            <li><a class="dropdown-item"
                                    href="https://prium.github.io/phoenix/v1.18.0/apps/calendar.html">
                                    <div class="dropdown-item-wrapper"><span class="me-2 uil"
                                            data-feather="calendar"></span>Calendar</div>
                                </a></li>
                        </ul>
                    </li>
                    <li class="nav-item dropdown"><a class="nav-link dropdown-toggle lh-1" href="#!" role="button"
                            data-bs-toggle="dropdown" data-bs-auto-close="outside" aria-haspopup="true"
                            aria-expanded="false"><span class="uil fs-8 me-2 uil-files-landscapes-alt"></span>Pages</a>
                        <ul class="dropdown-menu navbar-dropdown-caret">
                            <li><a class="dropdown-item"
                                    href="https://prium.github.io/phoenix/v1.18.0/pages/starter.html">
                                    <div class="dropdown-item-wrapper"><span class="me-2 uil"
                                            data-feather="compass"></span>Starter</div>
                                </a></li>
                            <li class="dropdown"><a class="dropdown-item dropdown-toggle" id="faq" href="#"
                                    data-bs-toggle="dropdown" data-bs-auto-close="outside">
                                    <div class="dropdown-item-wrapper"><span
                                            class="uil fs-8 uil-angle-right lh-1 dropdown-indicator-icon"></span><span><span
                                                class="me-2 uil" data-feather="help-circle"></span>Faq</span></div>
                                </a>
                                <ul class="dropdown-menu">
                                    <li><a class="dropdown-item"
                                            href="https://prium.github.io/phoenix/v1.18.0/pages/faq/faq-accordion.html">
                                            <div class="dropdown-item-wrapper"><span class="me-2 uil"></span>Faq
                                                accordion</div>
                                        </a></li>
                                    <li><a class="dropdown-item"
                                            href="https://prium.github.io/phoenix/v1.18.0/pages/faq/faq-tab.html">
                                            <div class="dropdown-item-wrapper"><span class="me-2 uil"></span>Faq tab
                                            </div>
                                        </a></li>
                                </ul>
                            </li>
                            <li class="dropdown"><a class="dropdown-item dropdown-toggle" id="landing" href="#"
                                    data-bs-toggle="dropdown" data-bs-auto-close="outside">
                                    <div class="dropdown-item-wrapper"><span
                                            class="uil fs-8 uil-angle-right lh-1 dropdown-indicator-icon"></span><span><span
                                                class="me-2 uil" data-feather="globe"></span>Landing</span></div>
                                </a>
                                <ul class="dropdown-menu">
                                    <li><a class="dropdown-item"
                                            href="https://prium.github.io/phoenix/v1.18.0/pages/landing/default.html">
                                            <div class="dropdown-item-wrapper"><span class="me-2 uil"></span>Default
                                            </div>
                                        </a></li>
                                    <li><a class="dropdown-item"
                                            href="https://prium.github.io/phoenix/v1.18.0/pages/landing/alternate.html">
                                            <div class="dropdown-item-wrapper"><span class="me-2 uil"></span>Alternate
                                            </div>
                                        </a></li>
                                </ul>
                            </li>
                            <li class="dropdown"><a class="dropdown-item dropdown-toggle" id="pricing" href="#"
                                    data-bs-toggle="dropdown" data-bs-auto-close="outside">
                                    <div class="dropdown-item-wrapper"><span
                                            class="uil fs-8 uil-angle-right lh-1 dropdown-indicator-icon"></span><span><span
                                                class="me-2 uil" data-feather="tag"></span>Pricing</span></div>
                                </a>
                                <ul class="dropdown-menu">
                                    <li><a class="dropdown-item"
                                            href="https://prium.github.io/phoenix/v1.18.0/pages/pricing/pricing-column.html">
                                            <div class="dropdown-item-wrapper"><span class="me-2 uil"></span>Pricing
                                                column</div>
                                        </a></li>
                                    <li><a class="dropdown-item"
                                            href="https://prium.github.io/phoenix/v1.18.0/pages/pricing/pricing-grid.html">
                                            <div class="dropdown-item-wrapper"><span class="me-2 uil"></span>Pricing
                                                grid</div>
                                        </a></li>
                                </ul>
                            </li>
                            <li><a class="dropdown-item"
                                    href="https://prium.github.io/phoenix/v1.18.0/pages/notifications.html">
                                    <div class="dropdown-item-wrapper"><span class="me-2 uil"
                                            data-feather="bell"></span>Notifications</div>
                                </a></li>
                            <li><a class="dropdown-item"
                                    href="https://prium.github.io/phoenix/v1.18.0/pages/members.html">
                                    <div class="dropdown-item-wrapper"><span class="me-2 uil"
                                            data-feather="users"></span>Members</div>
                                </a></li>
                            <li><a class="dropdown-item"
                                    href="https://prium.github.io/phoenix/v1.18.0/pages/timeline.html">
                                    <div class="dropdown-item-wrapper"><span class="me-2 uil"
                                            data-feather="clock"></span>Timeline</div>
                                </a></li>
                            <li class="dropdown"><a class="dropdown-item dropdown-toggle" id="errors" href="#"
                                    data-bs-toggle="dropdown" data-bs-auto-close="outside">
                                    <div class="dropdown-item-wrapper"><span
                                            class="uil fs-8 uil-angle-right lh-1 dropdown-indicator-icon"></span><span><span
                                                class="me-2 uil" data-feather="alert-triangle"></span>Errors</span>
                                    </div>
                                </a>
                                <ul class="dropdown-menu">
                                    <li><a class="dropdown-item"
                                            href="https://prium.github.io/phoenix/v1.18.0/pages/errors/404.html">
                                            <div class="dropdown-item-wrapper"><span class="me-2 uil"></span>404</div>
                                        </a></li>
                                    <li><a class="dropdown-item"
                                            href="https://prium.github.io/phoenix/v1.18.0/pages/errors/403.html">
                                            <div class="dropdown-item-wrapper"><span class="me-2 uil"></span>403</div>
                                        </a></li>
                                    <li><a class="dropdown-item"
                                            href="https://prium.github.io/phoenix/v1.18.0/pages/errors/500.html">
                                            <div class="dropdown-item-wrapper"><span class="me-2 uil"></span>500</div>
                                        </a></li>
                                </ul>
                            </li>
                            <li class="dropdown"><a class="dropdown-item dropdown-toggle" id="authentication" href="#"
                                    data-bs-toggle="dropdown" data-bs-auto-close="outside">
                                    <div class="dropdown-item-wrapper"><span
                                            class="uil fs-8 uil-angle-right lh-1 dropdown-indicator-icon"></span><span><span
                                                class="me-2 uil" data-feather="lock"></span>Authentication</span></div>
                                </a>
                                <ul class="dropdown-menu">
                                    <li class="dropdown"><a class="dropdown-item dropdown-toggle" id="simple" href="#"
                                            data-bs-toggle="dropdown" data-bs-auto-close="outside">
                                            <div class="dropdown-item-wrapper"><span
                                                    class="uil fs-8 uil-angle-right lh-1 dropdown-indicator-icon"></span><span><span
                                                        class="me-2 uil"></span>Simple</span></div>
                                        </a>
                                        <ul class="dropdown-menu">
                                            <li><a class="dropdown-item"
                                                    href="https://prium.github.io/phoenix/v1.18.0/pages/authentication/simple/sign-in.html">
                                                    <div class="dropdown-item-wrapper"><span
                                                            class="me-2 uil"></span>Sign in</div>
                                                </a></li>
                                            <li><a class="dropdown-item"
                                                    href="https://prium.github.io/phoenix/v1.18.0/pages/authentication/simple/sign-up.html">
                                                    <div class="dropdown-item-wrapper"><span
                                                            class="me-2 uil"></span>Sign up</div>
                                                </a></li>
                                            <li><a class="dropdown-item"
                                                    href="https://prium.github.io/phoenix/v1.18.0/pages/authentication/simple/sign-out.html">
                                                    <div class="dropdown-item-wrapper"><span
                                                            class="me-2 uil"></span>Sign out</div>
                                                </a></li>
                                            <li><a class="dropdown-item"
                                                    href="https://prium.github.io/phoenix/v1.18.0/pages/authentication/simple/forgot-password.html">
                                                    <div class="dropdown-item-wrapper"><span
                                                            class="me-2 uil"></span>Forgot password</div>
                                                </a></li>
                                            <li><a class="dropdown-item"
                                                    href="https://prium.github.io/phoenix/v1.18.0/pages/authentication/simple/reset-password.html">
                                                    <div class="dropdown-item-wrapper"><span
                                                            class="me-2 uil"></span>Reset password</div>
                                                </a></li>
                                            <li><a class="dropdown-item"
                                                    href="https://prium.github.io/phoenix/v1.18.0/pages/authentication/simple/lock-screen.html">
                                                    <div class="dropdown-item-wrapper"><span
                                                            class="me-2 uil"></span>Lock screen</div>
                                                </a></li>
                                            <li><a class="dropdown-item"
                                                    href="https://prium.github.io/phoenix/v1.18.0/pages/authentication/simple/2FA.html">
                                                    <div class="dropdown-item-wrapper"><span class="me-2 uil"></span>2FA
                                                    </div>
                                                </a></li>
                                        </ul>
                                    </li>
                                    <li class="dropdown"><a class="dropdown-item dropdown-toggle" id="split" href="#"
                                            data-bs-toggle="dropdown" data-bs-auto-close="outside">
                                            <div class="dropdown-item-wrapper"><span
                                                    class="uil fs-8 uil-angle-right lh-1 dropdown-indicator-icon"></span><span><span
                                                        class="me-2 uil"></span>Split</span></div>
                                        </a>
                                        <ul class="dropdown-menu">
                                            <li><a class="dropdown-item"
                                                    href="https://prium.github.io/phoenix/v1.18.0/pages/authentication/split/sign-in.html">
                                                    <div class="dropdown-item-wrapper"><span
                                                            class="me-2 uil"></span>Sign in</div>
                                                </a></li>
                                            <li><a class="dropdown-item"
                                                    href="https://prium.github.io/phoenix/v1.18.0/pages/authentication/split/sign-up.html">
                                                    <div class="dropdown-item-wrapper"><span
                                                            class="me-2 uil"></span>Sign up</div>
                                                </a></li>
                                            <li><a class="dropdown-item"
                                                    href="https://prium.github.io/phoenix/v1.18.0/pages/authentication/split/sign-out.html">
                                                    <div class="dropdown-item-wrapper"><span
                                                            class="me-2 uil"></span>Sign out</div>
                                                </a></li>
                                            <li><a class="dropdown-item"
                                                    href="https://prium.github.io/phoenix/v1.18.0/pages/authentication/split/forgot-password.html">
                                                    <div class="dropdown-item-wrapper"><span
                                                            class="me-2 uil"></span>Forgot password</div>
                                                </a></li>
                                            <li><a class="dropdown-item"
                                                    href="https://prium.github.io/phoenix/v1.18.0/pages/authentication/split/reset-password.html">
                                                    <div class="dropdown-item-wrapper"><span
                                                            class="me-2 uil"></span>Reset password</div>
                                                </a></li>
                                            <li><a class="dropdown-item"
                                                    href="https://prium.github.io/phoenix/v1.18.0/pages/authentication/split/lock-screen.html">
                                                    <div class="dropdown-item-wrapper"><span
                                                            class="me-2 uil"></span>Lock screen</div>
                                                </a></li>
                                            <li><a class="dropdown-item"
                                                    href="https://prium.github.io/phoenix/v1.18.0/pages/authentication/split/2FA.html">
                                                    <div class="dropdown-item-wrapper"><span class="me-2 uil"></span>2FA
                                                    </div>
                                                </a></li>
                                        </ul>
                                    </li>
                                    <li class="dropdown"><a class="dropdown-item dropdown-toggle" id="Card" href="#"
                                            data-bs-toggle="dropdown" data-bs-auto-close="outside">
                                            <div class="dropdown-item-wrapper"><span
                                                    class="uil fs-8 uil-angle-right lh-1 dropdown-indicator-icon"></span><span><span
                                                        class="me-2 uil"></span>Card</span></div>
                                        </a>
                                        <ul class="dropdown-menu">
                                            <li><a class="dropdown-item"
                                                    href="https://prium.github.io/phoenix/v1.18.0/pages/authentication/card/sign-in.html">
                                                    <div class="dropdown-item-wrapper"><span
                                                            class="me-2 uil"></span>Sign in</div>
                                                </a></li>
                                            <li><a class="dropdown-item"
                                                    href="https://prium.github.io/phoenix/v1.18.0/pages/authentication/card/sign-up.html">
                                                    <div class="dropdown-item-wrapper"><span
                                                            class="me-2 uil"></span>Sign up</div>
                                                </a></li>
                                            <li><a class="dropdown-item"
                                                    href="https://prium.github.io/phoenix/v1.18.0/pages/authentication/card/sign-out.html">
                                                    <div class="dropdown-item-wrapper"><span
                                                            class="me-2 uil"></span>Sign out</div>
                                                </a></li>
                                            <li><a class="dropdown-item"
                                                    href="https://prium.github.io/phoenix/v1.18.0/pages/authentication/card/forgot-password.html">
                                                    <div class="dropdown-item-wrapper"><span
                                                            class="me-2 uil"></span>Forgot password</div>
                                                </a></li>
                                            <li><a class="dropdown-item"
                                                    href="https://prium.github.io/phoenix/v1.18.0/pages/authentication/card/reset-password.html">
                                                    <div class="dropdown-item-wrapper"><span
                                                            class="me-2 uil"></span>Reset password</div>
                                                </a></li>
                                            <li><a class="dropdown-item"
                                                    href="https://prium.github.io/phoenix/v1.18.0/pages/authentication/card/lock-screen.html">
                                                    <div class="dropdown-item-wrapper"><span
                                                            class="me-2 uil"></span>Lock screen</div>
                                                </a></li>
                                            <li><a class="dropdown-item"
                                                    href="https://prium.github.io/phoenix/v1.18.0/pages/authentication/card/2FA.html">
                                                    <div class="dropdown-item-wrapper"><span class="me-2 uil"></span>2FA
                                                    </div>
                                                </a></li>
                                        </ul>
                                    </li>
                                </ul>
                            </li>
                            <li class="dropdown"><a class="dropdown-item dropdown-toggle" id="layouts" href="#"
                                    data-bs-toggle="dropdown" data-bs-auto-close="outside">
                                    <div class="dropdown-item-wrapper"><span
                                            class="uil fs-8 uil-angle-right lh-1 dropdown-indicator-icon"></span><span><span
                                                class="me-2 uil" data-feather="layout"></span>Layouts</span></div>
                                </a>
                                <ul class="dropdown-menu">
                                    <li><a class="dropdown-item"
                                            href="https://prium.github.io/phoenix/v1.18.0/demo/vertical-sidenav.html">
                                            <div class="dropdown-item-wrapper"><span class="me-2 uil"></span>Vertical
                                                sidenav</div>
                                        </a></li>
                                    <li><a class="dropdown-item"
                                            href="https://prium.github.io/phoenix/v1.18.0/demo/dark-mode.html">
                                            <div class="dropdown-item-wrapper"><span class="me-2 uil"></span>Dark mode
                                            </div>
                                        </a></li>
                                    <li><a class="dropdown-item"
                                            href="https://prium.github.io/phoenix/v1.18.0/demo/sidenav-collapse.html">
                                            <div class="dropdown-item-wrapper"><span class="me-2 uil"></span>Sidenav
                                                collapse</div>
                                        </a></li>
                                    <li><a class="dropdown-item"
                                            href="https://prium.github.io/phoenix/v1.18.0/demo/darknav.html">
                                            <div class="dropdown-item-wrapper"><span class="me-2 uil"></span>Darknav
                                            </div>
                                        </a></li>
                                    <li><a class="dropdown-item"
                                            href="https://prium.github.io/phoenix/v1.18.0/demo/topnav-slim.html">
                                            <div class="dropdown-item-wrapper"><span class="me-2 uil"></span>Topnav slim
                                            </div>
                                        </a></li>
                                    <li><a class="dropdown-item"
                                            href="https://prium.github.io/phoenix/v1.18.0/demo/navbar-horizontal.html">
                                            <div class="dropdown-item-wrapper"><span class="me-2 uil"></span>Navbar
                                                horizontal</div>
                                        </a></li>
                                    <li><a class="dropdown-item"
                                            href="https://prium.github.io/phoenix/v1.18.0/demo/horizontal-slim.html">
                                            <div class="dropdown-item-wrapper"><span class="me-2 uil"></span>Horizontal
                                                slim</div>
                                        </a></li>
                                    <li><a class="dropdown-item"
                                            href="https://prium.github.io/phoenix/v1.18.0/demo/combo-nav.html">
                                            <div class="dropdown-item-wrapper"><span class="me-2 uil"></span>Combo nav
                                            </div>
                                        </a></li>
                                    <li><a class="dropdown-item"
                                            href="https://prium.github.io/phoenix/v1.18.0/demo/combo-nav-slim.html">
                                            <div class="dropdown-item-wrapper"><span class="me-2 uil"></span>Combo nav
                                                slim</div>
                                        </a></li>
                                    <li><a class="dropdown-item"
                                            href="https://prium.github.io/phoenix/v1.18.0/demo/dual-nav.html">
                                            <div class="dropdown-item-wrapper"><span class="me-2 uil"></span>Dual nav
                                            </div>
                                        </a></li>
                                </ul>
                            </li>
                        </ul>
                    </li>
                    <li class="nav-item dropdown"><a class="nav-link dropdown-toggle lh-1" href="#!" role="button"
                            data-bs-toggle="dropdown" data-bs-auto-close="outside" aria-haspopup="true"
                            aria-expanded="false"><span class="uil fs-8 me-2 uil-puzzle-piece"></span>Modules</a>
                        <ul class="dropdown-menu navbar-dropdown-caret dropdown-menu-card py-0">
                            <div class="border-0 scrollbar" style="max-height: 60vh;">
                                <div class="px-3 pt-4 pb-3 img-dropdown">
                                    <div class="row gx-4 gy-5">
                                        <div class="col-12 col-sm-6 col-md-4">
                                            <div class="dropdown-item-group"><span class="me-2" data-feather="file-text"
                                                    style="stroke-width:2;"></span>
                                                <h6 class="dropdown-item-title">Forms</h6>
                                            </div><a class="dropdown-link"
                                                href="https://prium.github.io/phoenix/v1.18.0/modules/forms/basic/form-control.html">Form
                                                control</a><a class="dropdown-link"
                                                href="https://prium.github.io/phoenix/v1.18.0/modules/forms/basic/input-group.html">Input
                                                group</a><a class="dropdown-link"
                                                href="https://prium.github.io/phoenix/v1.18.0/modules/forms/basic/select.html">Select</a><a
                                                class="dropdown-link"
                                                href="https://prium.github.io/phoenix/v1.18.0/modules/forms/basic/checks.html">Checks</a><a
                                                class="dropdown-link"
                                                href="https://prium.github.io/phoenix/v1.18.0/modules/forms/basic/range.html">Range</a><a
                                                class="dropdown-link"
                                                href="https://prium.github.io/phoenix/v1.18.0/modules/forms/basic/floating-labels.html">Floating
                                                labels</a><a class="dropdown-link"
                                                href="https://prium.github.io/phoenix/v1.18.0/modules/forms/basic/layout.html">Layout</a><a
                                                class="dropdown-link"
                                                href="https://prium.github.io/phoenix/v1.18.0/modules/forms/advance/advance-select.html">Advance
                                                select</a><a class="dropdown-link"
                                                href="https://prium.github.io/phoenix/v1.18.0/modules/forms/advance/date-picker.html">Date
                                                picker</a><a class="dropdown-link"
                                                href="https://prium.github.io/phoenix/v1.18.0/modules/forms/advance/editor.html">Editor</a><a
                                                class="dropdown-link"
                                                href="https://prium.github.io/phoenix/v1.18.0/modules/forms/advance/file-uploader.html">File
                                                uploader</a><a class="dropdown-link"
                                                href="https://prium.github.io/phoenix/v1.18.0/modules/forms/advance/range.html">Range</a><a
                                                class="dropdown-link"
                                                href="https://prium.github.io/phoenix/v1.18.0/modules/forms/advance/rating.html">Rating</a><a
                                                class="dropdown-link"
                                                href="https://prium.github.io/phoenix/v1.18.0/modules/forms/advance/emoji-button.html">Emoji
                                                button</a><a class="dropdown-link"
                                                href="https://prium.github.io/phoenix/v1.18.0/modules/forms/validation.html">Validation</a><a
                                                class="dropdown-link"
                                                href="https://prium.github.io/phoenix/v1.18.0/modules/forms/wizard.html">Wizard</a>
                                            <div class="dropdown-item-group mt-5"><span class="me-2" data-feather="grid"
                                                    style="stroke-width:2;"></span>
                                                <h6 class="dropdown-item-title">Icons</h6>
                                            </div><a class="dropdown-link"
                                                href="https://prium.github.io/phoenix/v1.18.0/modules/icons/feather.html">Feather</a><a
                                                class="dropdown-link"
                                                href="https://prium.github.io/phoenix/v1.18.0/modules/icons/font-awesome.html">Font
                                                awesome</a><a class="dropdown-link"
                                                href="https://prium.github.io/phoenix/v1.18.0/modules/icons/unicons.html">Unicons</a>
                                            <div class="dropdown-item-group mt-5"><span class="me-2"
                                                    data-feather="bar-chart-2" style="stroke-width:2;"></span>
                                                <h6 class="dropdown-item-title">ECharts</h6>
                                            </div><a class="dropdown-link"
                                                href="https://prium.github.io/phoenix/v1.18.0/modules/echarts/line-charts.html">Line
                                                charts</a><a class="dropdown-link"
                                                href="https://prium.github.io/phoenix/v1.18.0/modules/echarts/bar-charts.html">Bar
                                                charts</a><a class="dropdown-link"
                                                href="https://prium.github.io/phoenix/v1.18.0/modules/echarts/candlestick-charts.html">Candlestick
                                                charts</a><a class="dropdown-link"
                                                href="https://prium.github.io/phoenix/v1.18.0/modules/echarts/geo-map.html">Geo
                                                map</a><a class="dropdown-link"
                                                href="https://prium.github.io/phoenix/v1.18.0/modules/echarts/scatter-charts.html">Scatter
                                                charts</a><a class="dropdown-link"
                                                href="https://prium.github.io/phoenix/v1.18.0/modules/echarts/pie-charts.html">Pie
                                                charts</a><a class="dropdown-link"
                                                href="https://prium.github.io/phoenix/v1.18.0/modules/echarts/gauge-chart.html">Gauge
                                                chart</a><a class="dropdown-link"
                                                href="https://prium.github.io/phoenix/v1.18.0/modules/echarts/radar-charts.html">Radar
                                                charts</a><a class="dropdown-link"
                                                href="https://prium.github.io/phoenix/v1.18.0/modules/echarts/heatmap-charts.html">Heatmap
                                                charts</a><a class="dropdown-link"
                                                href="https://prium.github.io/phoenix/v1.18.0/modules/echarts/how-to-use.html">How
                                                to use</a>
                                        </div>
                                        <div class="col-12 col-sm-6 col-md-4">
                                            <div class="dropdown-item-group"><span class="me-2" data-feather="package"
                                                    style="stroke-width:2;"></span>
                                                <h6 class="dropdown-item-title">Components</h6>
                                            </div><a class="dropdown-link"
                                                href="https://prium.github.io/phoenix/v1.18.0/modules/components/accordion.html">Accordion</a><a
                                                class="dropdown-link"
                                                href="https://prium.github.io/phoenix/v1.18.0/modules/components/avatar.html">Avatar</a><a
                                                class="dropdown-link"
                                                href="https://prium.github.io/phoenix/v1.18.0/modules/components/alerts.html">Alerts</a><a
                                                class="dropdown-link"
                                                href="https://prium.github.io/phoenix/v1.18.0/modules/components/badge.html">Badge</a><a
                                                class="dropdown-link"
                                                href="https://prium.github.io/phoenix/v1.18.0/modules/components/breadcrumb.html">Breadcrumb</a><a
                                                class="dropdown-link"
                                                href="https://prium.github.io/phoenix/v1.18.0/modules/components/button.html">Buttons</a><a
                                                class="dropdown-link"
                                                href="https://prium.github.io/phoenix/v1.18.0/modules/components/calendar.html">Calendar</a><a
                                                class="dropdown-link"
                                                href="https://prium.github.io/phoenix/v1.18.0/modules/components/card.html">Card</a><a
                                                class="dropdown-link"
                                                href="https://prium.github.io/phoenix/v1.18.0/modules/components/carousel/bootstrap.html">Bootstrap</a><a
                                                class="dropdown-link"
                                                href="https://prium.github.io/phoenix/v1.18.0/modules/components/carousel/swiper.html">Swiper</a><a
                                                class="dropdown-link"
                                                href="https://prium.github.io/phoenix/v1.18.0/modules/components/collapse.html">Collapse</a><a
                                                class="dropdown-link"
                                                href="https://prium.github.io/phoenix/v1.18.0/modules/components/dropdown.html">Dropdown</a><a
                                                class="dropdown-link"
                                                href="https://prium.github.io/phoenix/v1.18.0/modules/components/list-group.html">List
                                                group</a><a class="dropdown-link"
                                                href="https://prium.github.io/phoenix/v1.18.0/modules/components/modal.html">Modals</a><a
                                                class="dropdown-link"
                                                href="https://prium.github.io/phoenix/v1.18.0/modules/components/navs-and-tabs/navs.html">Navs</a><a
                                                class="dropdown-link"
                                                href="https://prium.github.io/phoenix/v1.18.0/modules/components/navs-and-tabs/navbar.html">Navbar</a><a
                                                class="dropdown-link"
                                                href="https://prium.github.io/phoenix/v1.18.0/modules/components/navs-and-tabs/tabs.html">Tabs</a><a
                                                class="dropdown-link"
                                                href="https://prium.github.io/phoenix/v1.18.0/modules/components/offcanvas.html">Offcanvas</a><a
                                                class="dropdown-link"
                                                href="https://prium.github.io/phoenix/v1.18.0/modules/components/progress-bar.html">Progress
                                                bar</a><a class="dropdown-link"
                                                href="https://prium.github.io/phoenix/v1.18.0/modules/components/placeholder.html">Placeholder</a><a
                                                class="dropdown-link"
                                                href="https://prium.github.io/phoenix/v1.18.0/modules/components/pagination.html">Pagination</a><a
                                                class="dropdown-link"
                                                href="https://prium.github.io/phoenix/v1.18.0/modules/components/popovers.html">Popovers</a><a
                                                class="dropdown-link"
                                                href="https://prium.github.io/phoenix/v1.18.0/modules/components/scrollspy.html">Scrollspy</a><a
                                                class="dropdown-link"
                                                href="https://prium.github.io/phoenix/v1.18.0/modules/components/sortable.html">Sortable</a><a
                                                class="dropdown-link"
                                                href="https://prium.github.io/phoenix/v1.18.0/modules/components/spinners.html">Spinners</a><a
                                                class="dropdown-link"
                                                href="https://prium.github.io/phoenix/v1.18.0/modules/components/toast.html">Toast</a><a
                                                class="dropdown-link"
                                                href="https://prium.github.io/phoenix/v1.18.0/modules/components/tooltips.html">Tooltips</a><a
                                                class="dropdown-link"
                                                href="https://prium.github.io/phoenix/v1.18.0/modules/components/typed-text.html">Typed
                                                text</a><a class="dropdown-link"
                                                href="https://prium.github.io/phoenix/v1.18.0/modules/components/chat-widget.html">Chat
                                                widget</a>
                                        </div>
                                        <div class="col-12 col-sm-6 col-md-4">
                                            <div class="dropdown-item-group"><span class="me-2" data-feather="columns"
                                                    style="stroke-width:2;"></span>
                                                <h6 class="dropdown-item-title">Tables</h6>
                                            </div><a class="dropdown-link"
                                                href="https://prium.github.io/phoenix/v1.18.0/modules/tables/basic-tables.html">Basic
                                                tables</a><a class="dropdown-link"
                                                href="https://prium.github.io/phoenix/v1.18.0/modules/tables/advance-tables.html">Advance
                                                tables</a><a class="dropdown-link"
                                                href="https://prium.github.io/phoenix/v1.18.0/modules/tables/bulk-select.html">Bulk
                                                Select</a>
                                            <div class="dropdown-item-group mt-5"><span class="me-2" data-feather="tool"
                                                    style="stroke-width:2;"></span>
                                                <h6 class="dropdown-item-title">Utilities</h6>
                                            </div><a class="dropdown-link"
                                                href="https://prium.github.io/phoenix/v1.18.0/modules/utilities/background.html">Background</a><a
                                                class="dropdown-link"
                                                href="https://prium.github.io/phoenix/v1.18.0/modules/utilities/borders.html">Borders</a><a
                                                class="dropdown-link"
                                                href="https://prium.github.io/phoenix/v1.18.0/modules/utilities/colors.html">Colors</a><a
                                                class="dropdown-link"
                                                href="https://prium.github.io/phoenix/v1.18.0/modules/utilities/display.html">Display</a><a
                                                class="dropdown-link"
                                                href="https://prium.github.io/phoenix/v1.18.0/modules/utilities/flex.html">Flex</a><a
                                                class="dropdown-link"
                                                href="https://prium.github.io/phoenix/v1.18.0/modules/utilities/stacks.html">Stacks</a><a
                                                class="dropdown-link"
                                                href="https://prium.github.io/phoenix/v1.18.0/modules/utilities/float.html">Float</a><a
                                                class="dropdown-link"
                                                href="https://prium.github.io/phoenix/v1.18.0/modules/utilities/grid.html">Grid</a><a
                                                class="dropdown-link"
                                                href="https://prium.github.io/phoenix/v1.18.0/modules/utilities/interactions.html">Interactions</a><a
                                                class="dropdown-link"
                                                href="https://prium.github.io/phoenix/v1.18.0/modules/utilities/opacity.html">Opacity</a><a
                                                class="dropdown-link"
                                                href="https://prium.github.io/phoenix/v1.18.0/modules/utilities/overflow.html">Overflow</a><a
                                                class="dropdown-link"
                                                href="https://prium.github.io/phoenix/v1.18.0/modules/utilities/position.html">Position</a><a
                                                class="dropdown-link"
                                                href="https://prium.github.io/phoenix/v1.18.0/modules/utilities/shadows.html">Shadows</a><a
                                                class="dropdown-link"
                                                href="https://prium.github.io/phoenix/v1.18.0/modules/utilities/sizing.html">Sizing</a><a
                                                class="dropdown-link"
                                                href="https://prium.github.io/phoenix/v1.18.0/modules/utilities/spacing.html">Spacing</a><a
                                                class="dropdown-link"
                                                href="https://prium.github.io/phoenix/v1.18.0/modules/utilities/typography.html">Typography</a><a
                                                class="dropdown-link"
                                                href="https://prium.github.io/phoenix/v1.18.0/modules/utilities/vertical-align.html">Vertical
                                                align</a><a class="dropdown-link"
                                                href="https://prium.github.io/phoenix/v1.18.0/modules/utilities/visibility.html">Visibility</a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </ul>
                    </li>
                    <li class="nav-item dropdown"><a class="nav-link dropdown-toggle lh-1" href="#!" role="button"
                            data-bs-toggle="dropdown" data-bs-auto-close="outside" aria-haspopup="true"
                            aria-expanded="false"><span
                                class="uil fs-8 me-2 uil-document-layout-right"></span>Documentation</a>
                        <ul class="dropdown-menu navbar-dropdown-caret">
                            <li><a class="dropdown-item"
                                    href="https://prium.github.io/phoenix/v1.18.0/documentation/getting-started.html">
                                    <div class="dropdown-item-wrapper"><span class="me-2 uil"
                                            data-feather="life-buoy"></span>Getting started</div>
                                </a></li>
                            <li class="dropdown dropdown-inside"><a class="dropdown-item dropdown-toggle"
                                    id="customization" href="#" data-bs-toggle="dropdown" data-bs-auto-close="outside">
                                    <div class="dropdown-item-wrapper"><span
                                            class="uil fs-8 uil-angle-right lh-1 dropdown-indicator-icon"></span><span><span
                                                class="me-2 uil" data-feather="settings"></span>Customization</span>
                                    </div>
                                </a>
                                <ul class="dropdown-menu">
                                    <li><a class="dropdown-item"
                                            href="https://prium.github.io/phoenix/v1.18.0/documentation/customization/configuration.html">
                                            <div class="dropdown-item-wrapper"><span
                                                    class="me-2 uil"></span>Configuration</div>
                                        </a></li>
                                    <li><a class="dropdown-item"
                                            href="https://prium.github.io/phoenix/v1.18.0/documentation/customization/styling.html">
                                            <div class="dropdown-item-wrapper"><span class="me-2 uil"></span>Styling
                                            </div>
                                        </a></li>
                                    <li><a class="dropdown-item"
                                            href="https://prium.github.io/phoenix/v1.18.0/documentation/customization/color.html">
                                            <div class="dropdown-item-wrapper"><span class="me-2 uil"></span>Color</div>
                                        </a></li>
                                    <li><a class="dropdown-item"
                                            href="https://prium.github.io/phoenix/v1.18.0/documentation/customization/dark-mode.html">
                                            <div class="dropdown-item-wrapper"><span class="me-2 uil"></span>Dark mode
                                            </div>
                                        </a></li>
                                    <li><a class="dropdown-item"
                                            href="https://prium.github.io/phoenix/v1.18.0/documentation/customization/plugin.html">
                                            <div class="dropdown-item-wrapper"><span class="me-2 uil"></span>Plugin
                                            </div>
                                        </a></li>
                                </ul>
                            </li>
                            <li class="dropdown dropdown-inside"><a class="dropdown-item dropdown-toggle"
                                    id="layouts-doc" href="#" data-bs-toggle="dropdown" data-bs-auto-close="outside">
                                    <div class="dropdown-item-wrapper"><span
                                            class="uil fs-8 uil-angle-right lh-1 dropdown-indicator-icon"></span><span><span
                                                class="me-2 uil" data-feather="table"></span>Layouts doc</span></div>
                                </a>
                                <ul class="dropdown-menu">
                                    <li><a class="dropdown-item"
                                            href="https://prium.github.io/phoenix/v1.18.0/documentation/layouts/vertical-navbar.html">
                                            <div class="dropdown-item-wrapper"><span class="me-2 uil"></span>Vertical
                                                navbar</div>
                                        </a></li>
                                    <li><a class="dropdown-item"
                                            href="https://prium.github.io/phoenix/v1.18.0/documentation/layouts/horizontal-navbar.html">
                                            <div class="dropdown-item-wrapper"><span class="me-2 uil"></span>Horizontal
                                                navbar</div>
                                        </a></li>
                                    <li><a class="dropdown-item"
                                            href="https://prium.github.io/phoenix/v1.18.0/documentation/layouts/combo-navbar.html">
                                            <div class="dropdown-item-wrapper"><span class="me-2 uil"></span>Combo
                                                navbar</div>
                                        </a></li>
                                    <li><a class="dropdown-item"
                                            href="https://prium.github.io/phoenix/v1.18.0/documentation/layouts/dual-nav.html">
                                            <div class="dropdown-item-wrapper"><span class="me-2 uil"></span>Dual nav
                                            </div>
                                        </a></li>
                                </ul>
                            </li>
                            <li><a class="dropdown-item"
                                    href="https://prium.github.io/phoenix/v1.18.0/documentation/gulp.html">
                                    <div class="dropdown-item-wrapper"><span
                                            class="me-2 fa-brands fa-gulp ms-1 me-1 fa-lg"></span>Gulp</div>
                                </a></li>
                            <li><a class="dropdown-item"
                                    href="https://prium.github.io/phoenix/v1.18.0/documentation/design-file.html">
                                    <div class="dropdown-item-wrapper"><span class="me-2 uil"
                                            data-feather="figma"></span>Design file</div>
                                </a></li>
                            <li><a class="dropdown-item" href="https://prium.github.io/phoenix/v1.18.0/changelog.html">
                                    <div class="dropdown-item-wrapper"><span class="me-2 uil"
                                            data-feather="git-merge"></span>Changelog</div>
                                </a></li>
                            <li><a class="dropdown-item" href="https://prium.github.io/phoenix/v1.18.0/showcase.html">
                                    <div class="dropdown-item-wrapper"><span class="me-2 uil"
                                            data-feather="monitor"></span>Showcase</div>
                                </a></li>
                        </ul>
                    </li>
                </ul>
            </div>
            <ul class="navbar-nav navbar-nav-icons flex-row">
                <li class="nav-item">
                    <div class="theme-control-toggle fa-ion-wait pe-2 theme-control-toggle-slim"><input
                            class="form-check-input ms-0 theme-control-toggle-input" id="themeControlToggle"
                            type="checkbox" data-theme-control="phoenixTheme" value="dark" /><label
                            class="mb-0 theme-control-toggle-label theme-control-toggle-light" for="themeControlToggle"
                            data-bs-toggle="tooltip" data-bs-placement="left" title="Switch theme"><span
                                class="d-none d-sm-flex flex-center" style="height:16px;width:16px;"><span
                                    class="me-1 icon" data-feather="moon"></span></span><span
                                class="fs-9 fw-bold">Dark</span></label><label
                            class="mb-0 theme-control-toggle-label theme-control-toggle-dark" for="themeControlToggle"
                            data-bs-toggle="tooltip" data-bs-placement="left" title="Switch theme"><span
                                class="d-none d-sm-flex flex-center" style="height:16px;width:16px;"><span
                                    class="me-1 icon" data-feather="sun"></span></span><span
                                class="fs-9 fw-bold">Light</span></label></div>
                </li>
                <li class="nav-item"> <a class="nav-link" href="#" data-bs-toggle="modal"
                        data-bs-target="#searchBoxModal"><span class="d-inline-block"
                            style="height:12px;width:12px;"><span data-feather="search"
                                style="height:12px;width:12px;"></span></span></a></li>
                <li class="nav-item dropdown">
                    <a class="nav-link" id="navbarDropdownNotification" href="#" role="button" data-bs-toggle="dropdown"
                        data-bs-auto-close="outside" aria-haspopup="true" aria-expanded="false"><span
                            class="d-inline-block" style="height:12px;width:12px;"><span data-feather="bell"
                                style="height:12px;width:12px;"></span></span></a>
                    <div class="dropdown-menu dropdown-menu-end notification-dropdown-menu py-0 shadow border navbar-dropdown-caret"
                        id="navbarDropdownNotfication" aria-labelledby="navbarDropdownNotfication">
                        <div class="card position-relative border-0">
                            <div class="card-header p-2">
                                <div class="d-flex justify-content-between">
                                    <h5 class="text-body-emphasis mb-0">Notifications</h5><button
                                        class="btn btn-link p-0 fs-9 fw-normal" type="button">Mark all as read</button>
                                </div>
                            </div>
                            <div class="card-body p-0">
                                <div class="scrollbar-overlay" style="height: 27rem;">
                                    <div
                                        class="px-2 px-sm-3 py-3 notification-card position-relative read border-bottom">
                                        <div
                                            class="d-flex align-items-center justify-content-between position-relative">
                                            <div class="d-flex">
                                                <div class="avatar avatar-m status-online me-3"><img
                                                        class="rounded-circle"
                                                        src="https://prium.github.io/phoenix/v1.18.0/assets/img/team/40x40/30.webp"
                                                        alt="" /></div>
                                                <div class="flex-1 me-sm-3">
                                                    <h4 class="fs-9 text-body-emphasis">Jessie Samson</h4>
                                                    <p class="fs-9 text-body-highlight mb-2 mb-sm-3 fw-normal"><span
                                                            class='me-1 fs-10'>💬</span>Mentioned you in a comment.<span
                                                            class="ms-2 text-body-quaternary text-opacity-75 fw-bold fs-10">10m</span>
                                                    </p>
                                                    <p class="text-body-secondary fs-9 mb-0"><span
                                                            class="me-1 fas fa-clock"></span><span class="fw-bold">10:41
                                                            AM </span>August 7,2021</p>
                                                </div>
                                            </div>
                                            <div class="dropdown notification-dropdown"><button
                                                    class="btn fs-10 btn-sm dropdown-toggle dropdown-caret-none transition-none"
                                                    type="button" data-bs-toggle="dropdown" data-boundary="window"
                                                    aria-haspopup="true" aria-expanded="false"
                                                    data-bs-reference="parent"><span
                                                        class="fas fa-ellipsis-h fs-10 text-body"></span></button>
                                                <div class="dropdown-menu py-2"><a class="dropdown-item" href="#!">Mark
                                                        as unread</a></div>
                                            </div>
                                        </div>
                                    </div>
                                    <div
                                        class="px-2 px-sm-3 py-3 notification-card position-relative unread border-bottom">
                                        <div
                                            class="d-flex align-items-center justify-content-between position-relative">
                                            <div class="d-flex">
                                                <div class="avatar avatar-m status-online me-3">
                                                    <div class="avatar-name rounded-circle"><span>J</span></div>
                                                </div>
                                                <div class="flex-1 me-sm-3">
                                                    <h4 class="fs-9 text-body-emphasis">Jane Foster</h4>
                                                    <p class="fs-9 text-body-highlight mb-2 mb-sm-3 fw-normal"><span
                                                            class='me-1 fs-10'>📅</span>Created an event.<span
                                                            class="ms-2 text-body-quaternary text-opacity-75 fw-bold fs-10">20m</span>
                                                    </p>
                                                    <p class="text-body-secondary fs-9 mb-0"><span
                                                            class="me-1 fas fa-clock"></span><span class="fw-bold">10:20
                                                            AM </span>August 7,2021</p>
                                                </div>
                                            </div>
                                            <div class="dropdown notification-dropdown"><button
                                                    class="btn fs-10 btn-sm dropdown-toggle dropdown-caret-none transition-none"
                                                    type="button" data-bs-toggle="dropdown" data-boundary="window"
                                                    aria-haspopup="true" aria-expanded="false"
                                                    data-bs-reference="parent"><span
                                                        class="fas fa-ellipsis-h fs-10 text-body"></span></button>
                                                <div class="dropdown-menu py-2"><a class="dropdown-item" href="#!">Mark
                                                        as unread</a></div>
                                            </div>
                                        </div>
                                    </div>
                                    <div
                                        class="px-2 px-sm-3 py-3 notification-card position-relative unread border-bottom">
                                        <div
                                            class="d-flex align-items-center justify-content-between position-relative">
                                            <div class="d-flex">
                                                <div class="avatar avatar-m status-online me-3"><img
                                                        class="rounded-circle avatar-placeholder"
                                                        src="https://prium.github.io/phoenix/v1.18.0/assets/img/team/40x40/avatar.webp"
                                                        alt="" /></div>
                                                <div class="flex-1 me-sm-3">
                                                    <h4 class="fs-9 text-body-emphasis">Jessie Samson</h4>
                                                    <p class="fs-9 text-body-highlight mb-2 mb-sm-3 fw-normal"><span
                                                            class='me-1 fs-10'>👍</span>Liked your comment.<span
                                                            class="ms-2 text-body-quaternary text-opacity-75 fw-bold fs-10">1h</span>
                                                    </p>
                                                    <p class="text-body-secondary fs-9 mb-0"><span
                                                            class="me-1 fas fa-clock"></span><span class="fw-bold">9:30
                                                            AM </span>August 7,2021</p>
                                                </div>
                                            </div>
                                            <div class="dropdown notification-dropdown"><button
                                                    class="btn fs-10 btn-sm dropdown-toggle dropdown-caret-none transition-none"
                                                    type="button" data-bs-toggle="dropdown" data-boundary="window"
                                                    aria-haspopup="true" aria-expanded="false"
                                                    data-bs-reference="parent"><span
                                                        class="fas fa-ellipsis-h fs-10 text-body"></span></button>
                                                <div class="dropdown-menu py-2"><a class="dropdown-item" href="#!">Mark
                                                        as unread</a></div>
                                            </div>
                                        </div>
                                    </div>
                                    <div
                                        class="px-2 px-sm-3 py-3 notification-card position-relative unread border-bottom">
                                        <div
                                            class="d-flex align-items-center justify-content-between position-relative">
                                            <div class="d-flex">
                                                <div class="avatar avatar-m status-online me-3"><img
                                                        class="rounded-circle"
                                                        src="https://prium.github.io/phoenix/v1.18.0/assets/img/team/40x40/57.webp"
                                                        alt="" /></div>
                                                <div class="flex-1 me-sm-3">
                                                    <h4 class="fs-9 text-body-emphasis">Kiera Anderson</h4>
                                                    <p class="fs-9 text-body-highlight mb-2 mb-sm-3 fw-normal"><span
                                                            class='me-1 fs-10'>💬</span>Mentioned you in a comment.<span
                                                            class="ms-2 text-body-quaternary text-opacity-75 fw-bold fs-10"></span>
                                                    </p>
                                                    <p class="text-body-secondary fs-9 mb-0"><span
                                                            class="me-1 fas fa-clock"></span><span class="fw-bold">9:11
                                                            AM </span>August 7,2021</p>
                                                </div>
                                            </div>
                                            <div class="dropdown notification-dropdown"><button
                                                    class="btn fs-10 btn-sm dropdown-toggle dropdown-caret-none transition-none"
                                                    type="button" data-bs-toggle="dropdown" data-boundary="window"
                                                    aria-haspopup="true" aria-expanded="false"
                                                    data-bs-reference="parent"><span
                                                        class="fas fa-ellipsis-h fs-10 text-body"></span></button>
                                                <div class="dropdown-menu py-2"><a class="dropdown-item" href="#!">Mark
                                                        as unread</a></div>
                                            </div>
                                        </div>
                                    </div>
                                    <div
                                        class="px-2 px-sm-3 py-3 notification-card position-relative unread border-bottom">
                                        <div
                                            class="d-flex align-items-center justify-content-between position-relative">
                                            <div class="d-flex">
                                                <div class="avatar avatar-m status-online me-3"><img
                                                        class="rounded-circle"
                                                        src="https://prium.github.io/phoenix/v1.18.0/assets/img/team/40x40/59.webp"
                                                        alt="" /></div>
                                                <div class="flex-1 me-sm-3">
                                                    <h4 class="fs-9 text-body-emphasis">Herman Carter</h4>
                                                    <p class="fs-9 text-body-highlight mb-2 mb-sm-3 fw-normal"><span
                                                            class='me-1 fs-10'>👤</span>Tagged you in a comment.<span
                                                            class="ms-2 text-body-quaternary text-opacity-75 fw-bold fs-10"></span>
                                                    </p>
                                                    <p class="text-body-secondary fs-9 mb-0"><span
                                                            class="me-1 fas fa-clock"></span><span class="fw-bold">10:58
                                                            PM </span>August 7,2021</p>
                                                </div>
                                            </div>
                                            <div class="dropdown notification-dropdown"><button
                                                    class="btn fs-10 btn-sm dropdown-toggle dropdown-caret-none transition-none"
                                                    type="button" data-bs-toggle="dropdown" data-boundary="window"
                                                    aria-haspopup="true" aria-expanded="false"
                                                    data-bs-reference="parent"><span
                                                        class="fas fa-ellipsis-h fs-10 text-body"></span></button>
                                                <div class="dropdown-menu py-2"><a class="dropdown-item" href="#!">Mark
                                                        as unread</a></div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="px-2 px-sm-3 py-3 notification-card position-relative read ">
                                        <div
                                            class="d-flex align-items-center justify-content-between position-relative">
                                            <div class="d-flex">
                                                <div class="avatar avatar-m status-online me-3"><img
                                                        class="rounded-circle"
                                                        src="https://prium.github.io/phoenix/v1.18.0/assets/img/team/40x40/58.webp"
                                                        alt="" /></div>
                                                <div class="flex-1 me-sm-3">
                                                    <h4 class="fs-9 text-body-emphasis">Benjamin Button</h4>
                                                    <p class="fs-9 text-body-highlight mb-2 mb-sm-3 fw-normal"><span
                                                            class='me-1 fs-10'>👍</span>Liked your comment.<span
                                                            class="ms-2 text-body-quaternary text-opacity-75 fw-bold fs-10"></span>
                                                    </p>
                                                    <p class="text-body-secondary fs-9 mb-0"><span
                                                            class="me-1 fas fa-clock"></span><span class="fw-bold">10:18
                                                            AM </span>August 7,2021</p>
                                                </div>
                                            </div>
                                            <div class="dropdown notification-dropdown"><button
                                                    class="btn fs-10 btn-sm dropdown-toggle dropdown-caret-none transition-none"
                                                    type="button" data-bs-toggle="dropdown" data-boundary="window"
                                                    aria-haspopup="true" aria-expanded="false"
                                                    data-bs-reference="parent"><span
                                                        class="fas fa-ellipsis-h fs-10 text-body"></span></button>
                                                <div class="dropdown-menu py-2"><a class="dropdown-item" href="#!">Mark
                                                        as unread</a></div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="card-footer p-0 border-top border-translucent border-0">
                                <div class="my-2 text-center fw-bold fs-10 text-body-tertiary text-opactity-85"><a
                                        class="fw-bolder"
                                        href="https://prium.github.io/phoenix/v1.18.0/pages/notifications.html">Notification
                                        history</a></div>
                            </div>
                        </div>
                    </div>
                </li>
                <li class="nav-item dropdown">
                    <a class="nav-link" id="navbarDropdownNindeDots" href="#" role="button" data-bs-toggle="dropdown"
                        aria-haspopup="true" data-bs-auto-close="outside" aria-expanded="false"><svg width="10"
                            height="10" viewbox="0 0 16 16" fill="none" xmlns="http://www.w3.org/2000/svg">
                            <circle cx="2" cy="2" r="2" fill="currentColor"></circle>
                            <circle cx="2" cy="8" r="2" fill="currentColor"></circle>
                            <circle cx="2" cy="14" r="2" fill="currentColor"></circle>
                            <circle cx="8" cy="8" r="2" fill="currentColor"></circle>
                            <circle cx="8" cy="14" r="2" fill="currentColor"></circle>
                            <circle cx="14" cy="8" r="2" fill="currentColor"></circle>
                            <circle cx="14" cy="14" r="2" fill="currentColor"></circle>
                            <circle cx="8" cy="2" r="2" fill="currentColor"></circle>
                            <circle cx="14" cy="2" r="2" fill="currentColor"></circle>
                        </svg></a>
                    <div class="dropdown-menu dropdown-menu-end navbar-dropdown-caret py-0 dropdown-nine-dots shadow border"
                        aria-labelledby="navbarDropdownNindeDots">
                        <div class="card bg-body-emphasis position-relative border-0">
                            <div class="card-body pt-3 px-3 pb-0 overflow-auto scrollbar" style="height: 20rem;">
                                <div class="row text-center align-items-center gx-0 gy-0">
                                    <div class="col-4"><a
                                            class="d-block bg-body-secondary-hover p-2 rounded-3 text-center text-decoration-none mb-3"
                                            href="#!"><img
                                                src="https://prium.github.io/phoenix/v1.18.0/assets/img/nav-icons/behance.webp"
                                                alt="" width="30" />
                                            <p class="mb-0 text-body-emphasis text-truncate fs-10 mt-1 pt-1">Behance</p>
                                        </a></div>
                                    <div class="col-4"><a
                                            class="d-block bg-body-secondary-hover p-2 rounded-3 text-center text-decoration-none mb-3"
                                            href="#!"><img
                                                src="https://prium.github.io/phoenix/v1.18.0/assets/img/nav-icons/google-cloud.webp"
                                                alt="" width="30" />
                                            <p class="mb-0 text-body-emphasis text-truncate fs-10 mt-1 pt-1">Cloud</p>
                                        </a></div>
                                    <div class="col-4"><a
                                            class="d-block bg-body-secondary-hover p-2 rounded-3 text-center text-decoration-none mb-3"
                                            href="#!"><img
                                                src="https://prium.github.io/phoenix/v1.18.0/assets/img/nav-icons/slack.webp"
                                                alt="" width="30" />
                                            <p class="mb-0 text-body-emphasis text-truncate fs-10 mt-1 pt-1">Slack</p>
                                        </a></div>
                                    <div class="col-4"><a
                                            class="d-block bg-body-secondary-hover p-2 rounded-3 text-center text-decoration-none mb-3"
                                            href="#!"><img
                                                src="https://prium.github.io/phoenix/v1.18.0/assets/img/nav-icons/gitlab.webp"
                                                alt="" width="30" />
                                            <p class="mb-0 text-body-emphasis text-truncate fs-10 mt-1 pt-1">Gitlab</p>
                                        </a></div>
                                    <div class="col-4"><a
                                            class="d-block bg-body-secondary-hover p-2 rounded-3 text-center text-decoration-none mb-3"
                                            href="#!"><img
                                                src="https://prium.github.io/phoenix/v1.18.0/assets/img/nav-icons/bitbucket.webp"
                                                alt="" width="30" />
                                            <p class="mb-0 text-body-emphasis text-truncate fs-10 mt-1 pt-1">BitBucket
                                            </p>
                                        </a></div>
                                    <div class="col-4"><a
                                            class="d-block bg-body-secondary-hover p-2 rounded-3 text-center text-decoration-none mb-3"
                                            href="#!"><img
                                                src="https://prium.github.io/phoenix/v1.18.0/assets/img/nav-icons/google-drive.webp"
                                                alt="" width="30" />
                                            <p class="mb-0 text-body-emphasis text-truncate fs-10 mt-1 pt-1">Drive</p>
                                        </a></div>
                                    <div class="col-4"><a
                                            class="d-block bg-body-secondary-hover p-2 rounded-3 text-center text-decoration-none mb-3"
                                            href="#!"><img
                                                src="https://prium.github.io/phoenix/v1.18.0/assets/img/nav-icons/trello.webp"
                                                alt="" width="30" />
                                            <p class="mb-0 text-body-emphasis text-truncate fs-10 mt-1 pt-1">Trello</p>
                                        </a></div>
                                    <div class="col-4"><a
                                            class="d-block bg-body-secondary-hover p-2 rounded-3 text-center text-decoration-none mb-3"
                                            href="#!"><img
                                                src="https://prium.github.io/phoenix/v1.18.0/assets/img/nav-icons/figma.webp"
                                                alt="" width="20" />
                                            <p class="mb-0 text-body-emphasis text-truncate fs-10 mt-1 pt-1">Figma</p>
                                        </a></div>
                                    <div class="col-4"><a
                                            class="d-block bg-body-secondary-hover p-2 rounded-3 text-center text-decoration-none mb-3"
                                            href="#!"><img
                                                src="https://prium.github.io/phoenix/v1.18.0/assets/img/nav-icons/twitter.webp"
                                                alt="" width="30" />
                                            <p class="mb-0 text-body-emphasis text-truncate fs-10 mt-1 pt-1">Twitter</p>
                                        </a></div>
                                    <div class="col-4"><a
                                            class="d-block bg-body-secondary-hover p-2 rounded-3 text-center text-decoration-none mb-3"
                                            href="#!"><img
                                                src="https://prium.github.io/phoenix/v1.18.0/assets/img/nav-icons/pinterest.webp"
                                                alt="" width="30" />
                                            <p class="mb-0 text-body-emphasis text-truncate fs-10 mt-1 pt-1">Pinterest
                                            </p>
                                        </a></div>
                                    <div class="col-4"><a
                                            class="d-block bg-body-secondary-hover p-2 rounded-3 text-center text-decoration-none mb-3"
                                            href="#!"><img
                                                src="https://prium.github.io/phoenix/v1.18.0/assets/img/nav-icons/ln.webp"
                                                alt="" width="30" />
                                            <p class="mb-0 text-body-emphasis text-truncate fs-10 mt-1 pt-1">Linkedin
                                            </p>
                                        </a></div>
                                    <div class="col-4"><a
                                            class="d-block bg-body-secondary-hover p-2 rounded-3 text-center text-decoration-none mb-3"
                                            href="#!"><img
                                                src="https://prium.github.io/phoenix/v1.18.0/assets/img/nav-icons/google-maps.webp"
                                                alt="" width="30" />
                                            <p class="mb-0 text-body-emphasis text-truncate fs-10 mt-1 pt-1">Maps</p>
                                        </a></div>
                                    <div class="col-4"><a
                                            class="d-block bg-body-secondary-hover p-2 rounded-3 text-center text-decoration-none mb-3"
                                            href="#!"><img
                                                src="https://prium.github.io/phoenix/v1.18.0/assets/img/nav-icons/google-photos.webp"
                                                alt="" width="30" />
                                            <p class="mb-0 text-body-emphasis text-truncate fs-10 mt-1 pt-1">Photos</p>
                                        </a></div>
                                    <div class="col-4"><a
                                            class="d-block bg-body-secondary-hover p-2 rounded-3 text-center text-decoration-none mb-3"
                                            href="#!"><img
                                                src="https://prium.github.io/phoenix/v1.18.0/assets/img/nav-icons/spotify.webp"
                                                alt="" width="30" />
                                            <p class="mb-0 text-body-emphasis text-truncate fs-10 mt-1 pt-1">Spotify</p>
                                        </a></div>
                                </div>
                            </div>
                        </div>
                    </div>
                </li>
                <li class="nav-item dropdown"><a class="nav-link lh-1 pe-0 white-space-nowrap" id="navbarDropdownUser"
                        href="#!" role="button" data-bs-toggle="dropdown" aria-haspopup="true"
                        data-bs-auto-close="outside" aria-expanded="false">Olivia <span class="d-inline-block"
                            style="height:10.2px;width:10.2px;"><span
                                class="fa-solid fa-chevron-down fs-10"></span></span></a>
                    <div class="dropdown-menu dropdown-menu-end navbar-dropdown-caret py-0 dropdown-profile shadow border"
                        aria-labelledby="navbarDropdownUser">
                        <div class="card position-relative border-0">
                            <div class="card-body p-0">
                                <div class="text-center pt-4 pb-3">
                                    <div class="avatar avatar-xl ">
                                        <img class="rounded-circle "
                                            src="https://prium.github.io/phoenix/v1.18.0/assets/img/team/72x72/57.webp"
                                            alt="" />
                                    </div>
                                    <h6 class="mt-2 text-body-emphasis">Jerry Seinfield</h6>
                                </div>
                                <div class="mb-3 mx-3"><input class="form-control form-control-sm"
                                        id="statusUpdateInput" type="text" placeholder="Update your status" /></div>
                            </div>
                            <div class="overflow-auto scrollbar" style="height: 10rem;">
                                <ul class="nav d-flex flex-column mb-2 pb-1">
                                    <li class="nav-item"><a class="nav-link px-3 d-block" href="#!"> <span
                                                class="me-2 text-body align-bottom"
                                                data-feather="user"></span><span>Profile</span></a></li>
                                    <li class="nav-item"><a class="nav-link px-3 d-block" href="#!"><span
                                                class="me-2 text-body align-bottom"
                                                data-feather="pie-chart"></span>Dashboard</a></li>
                                    <li class="nav-item"><a class="nav-link px-3 d-block" href="#!"> <span
                                                class="me-2 text-body align-bottom" data-feather="lock"></span>Posts
                                            &amp; Activity</a></li>
                                    <li class="nav-item"><a class="nav-link px-3 d-block" href="#!"> <span
                                                class="me-2 text-body align-bottom"
                                                data-feather="settings"></span>Settings &amp; Privacy </a></li>
                                    <li class="nav-item"><a class="nav-link px-3 d-block" href="#!"> <span
                                                class="me-2 text-body align-bottom"
                                                data-feather="help-circle"></span>Help Center</a></li>
                                    <li class="nav-item"><a class="nav-link px-3 d-block" href="#!"> <span
                                                class="me-2 text-body align-bottom"
                                                data-feather="globe"></span>Language</a></li>
                                </ul>
                            </div>
                            <div class="card-footer p-0 border-top border-translucent">
                                <ul class="nav d-flex flex-column my-3">
                                    <li class="nav-item"><a class="nav-link px-3 d-block" href="#!"> <span
                                                class="me-2 text-body align-bottom" data-feather="user-plus"></span>Add
                                            another account</a></li>
                                </ul>
                                <hr />
                                <div class="px-3"> <a class="btn btn-phoenix-secondary d-flex flex-center w-100"
                                        href="#!"> <span class="me-2" data-feather="log-out"> </span>Sign out</a></div>
                                <div class="my-2 text-center fw-bold fs-10 text-body-quaternary"><a
                                        class="text-body-quaternary me-1" href="#!">Privacy policy</a>&bull;<a
                                        class="text-body-quaternary mx-1" href="#!">Terms</a>&bull;<a
                                        class="text-body-quaternary ms-1" href="#!">Cookies</a></div>
                            </div>
                        </div>
                    </div>
                </li>
            </ul>
        </nav>
        <nav class="navbar navbar-top fixed-top navbar-expand-lg" id="navbarCombo" data-navbar-top="combo"
            data-move-target="#navbarVerticalNav" style="display:none;">
            <div class="navbar-logo">
                <button class="btn navbar-toggler navbar-toggler-humburger-icon hover-bg-transparent" type="button"
                    data-bs-toggle="collapse" data-bs-target="#navbarVerticalCollapse"
                    aria-controls="navbarVerticalCollapse" aria-expanded="false" aria-label="Toggle Navigation"><span
                        class="navbar-toggle-icon"><span class="toggle-line"></span></span></button>
                <a class="navbar-brand me-1 me-sm-3" href="https://prium.github.io/phoenix/v1.18.0/index.html">
                    <div class="d-flex align-items-center">
                        <div class="d-flex align-items-center"><img src="../assets/img/icons/logo.png" alt="phoenix"
                                width="27" />
                            <h5 class="logo-text ms-2 d-none d-sm-block">phoenix</h5>
                        </div>
                    </div>
                </a>
            </div>
            <div class="collapse navbar-collapse navbar-top-collapse order-1 order-lg-0 justify-content-center"
                id="navbarTopCollapse">
                <ul class="navbar-nav navbar-nav-top" data-dropdown-on-hover="data-dropdown-on-hover">
                    <li class="nav-item dropdown"><a class="nav-link dropdown-toggle lh-1" href="#!" role="button"
                            data-bs-toggle="dropdown" data-bs-auto-close="outside" aria-haspopup="true"
                            aria-expanded="false"><span class="uil fs-8 me-2 uil-chart-pie"></span>Home</a>
                        <ul class="dropdown-menu navbar-dropdown-caret">
                            <li><a class="dropdown-item" href="https://prium.github.io/phoenix/v1.18.0/index.html">
                                    <div class="dropdown-item-wrapper"><span class="me-2 uil"
                                            data-feather="shopping-cart"></span>E commerce</div>
                                </a></li>
                            <li><a class="dropdown-item" href="project-management.html">
                                    <div class="dropdown-item-wrapper"><span class="me-2 uil"
                                            data-feather="clipboard"></span>Project management</div>
                                </a></li>
                            <li><a class="dropdown-item" href="crm.html">
                                    <div class="dropdown-item-wrapper"><span class="me-2 uil"
                                            data-feather="phone"></span>CRM</div>
                                </a></li>
                            <li><a class="dropdown-item active" href="travel-agency.html">
                                    <div class="dropdown-item-wrapper"><span class="me-2 uil"
                                            data-feather="briefcase"></span>Travel agency</div>
                                </a></li>
                            <li><a class="dropdown-item"
                                    href="https://prium.github.io/phoenix/v1.18.0/apps/social/feed.html">
                                    <div class="dropdown-item-wrapper"><span class="me-2 uil"
                                            data-feather="share-2"></span>Social feed</div>
                                </a></li>
                        </ul>
                    </li>
                    <li class="nav-item dropdown"><a class="nav-link dropdown-toggle lh-1" href="#!" role="button"
                            data-bs-toggle="dropdown" data-bs-auto-close="outside" aria-haspopup="true"
                            aria-expanded="false"><span class="uil fs-8 me-2 uil-cube"></span>Apps</a>
                        <ul class="dropdown-menu navbar-dropdown-caret">
                            <li class="dropdown"><a class="dropdown-item dropdown-toggle" id="e-commerce" href="#"
                                    data-bs-toggle="dropdown" data-bs-auto-close="outside">
                                    <div class="dropdown-item-wrapper"><span
                                            class="uil fs-8 uil-angle-right lh-1 dropdown-indicator-icon"></span><span><span
                                                class="me-2 uil" data-feather="shopping-cart"></span>E commerce</span>
                                    </div>
                                </a>
                                <ul class="dropdown-menu">
                                    <li class="dropdown"><a class="dropdown-item dropdown-toggle" id="admin" href="#"
                                            data-bs-toggle="dropdown" data-bs-auto-close="outside">
                                            <div class="dropdown-item-wrapper"><span
                                                    class="uil fs-8 uil-angle-right lh-1 dropdown-indicator-icon"></span><span><span
                                                        class="me-2 uil"></span>Admin</span></div>
                                        </a>
                                        <ul class="dropdown-menu">
                                            <li><a class="dropdown-item"
                                                    href="https://prium.github.io/phoenix/v1.18.0/apps/e-commerce/admin/add-product.html">
                                                    <div class="dropdown-item-wrapper"><span class="me-2 uil"></span>Add
                                                        product</div>
                                                </a></li>
                                            <li><a class="dropdown-item"
                                                    href="https://prium.github.io/phoenix/v1.18.0/apps/e-commerce/admin/products.html">
                                                    <div class="dropdown-item-wrapper"><span
                                                            class="me-2 uil"></span>Products</div>
                                                </a></li>
                                            <li><a class="dropdown-item"
                                                    href="https://prium.github.io/phoenix/v1.18.0/apps/e-commerce/admin/customers.html">
                                                    <div class="dropdown-item-wrapper"><span
                                                            class="me-2 uil"></span>Customers</div>
                                                </a></li>
                                            <li><a class="dropdown-item"
                                                    href="https://prium.github.io/phoenix/v1.18.0/apps/e-commerce/admin/customer-details.html">
                                                    <div class="dropdown-item-wrapper"><span
                                                            class="me-2 uil"></span>Customer details</div>
                                                </a></li>
                                            <li><a class="dropdown-item"
                                                    href="https://prium.github.io/phoenix/v1.18.0/apps/e-commerce/admin/orders.html">
                                                    <div class="dropdown-item-wrapper"><span
                                                            class="me-2 uil"></span>Orders</div>
                                                </a></li>
                                            <li><a class="dropdown-item"
                                                    href="https://prium.github.io/phoenix/v1.18.0/apps/e-commerce/admin/order-details.html">
                                                    <div class="dropdown-item-wrapper"><span
                                                            class="me-2 uil"></span>Order details</div>
                                                </a></li>
                                            <li><a class="dropdown-item"
                                                    href="https://prium.github.io/phoenix/v1.18.0/apps/e-commerce/admin/refund.html">
                                                    <div class="dropdown-item-wrapper"><span
                                                            class="me-2 uil"></span>Refund</div>
                                                </a></li>
                                        </ul>
                                    </li>
                                    <li class="dropdown"><a class="dropdown-item dropdown-toggle" id="customer" href="#"
                                            data-bs-toggle="dropdown" data-bs-auto-close="outside">
                                            <div class="dropdown-item-wrapper"><span
                                                    class="uil fs-8 uil-angle-right lh-1 dropdown-indicator-icon"></span><span><span
                                                        class="me-2 uil"></span>Customer</span></div>
                                        </a>
                                        <ul class="dropdown-menu">
                                            <li><a class="dropdown-item"
                                                    href="https://prium.github.io/phoenix/v1.18.0/apps/e-commerce/landing/homepage.html">
                                                    <div class="dropdown-item-wrapper"><span
                                                            class="me-2 uil"></span>Homepage</div>
                                                </a></li>
                                            <li><a class="dropdown-item"
                                                    href="https://prium.github.io/phoenix/v1.18.0/apps/e-commerce/landing/product-details.html">
                                                    <div class="dropdown-item-wrapper"><span
                                                            class="me-2 uil"></span>Product details</div>
                                                </a></li>
                                            <li><a class="dropdown-item"
                                                    href="https://prium.github.io/phoenix/v1.18.0/apps/e-commerce/landing/products-filter.html">
                                                    <div class="dropdown-item-wrapper"><span
                                                            class="me-2 uil"></span>Products filter</div>
                                                </a></li>
                                            <li><a class="dropdown-item"
                                                    href="https://prium.github.io/phoenix/v1.18.0/apps/e-commerce/landing/cart.html">
                                                    <div class="dropdown-item-wrapper"><span
                                                            class="me-2 uil"></span>Cart</div>
                                                </a></li>
                                            <li><a class="dropdown-item"
                                                    href="https://prium.github.io/phoenix/v1.18.0/apps/e-commerce/landing/checkout.html">
                                                    <div class="dropdown-item-wrapper"><span
                                                            class="me-2 uil"></span>Checkout</div>
                                                </a></li>
                                            <li><a class="dropdown-item"
                                                    href="https://prium.github.io/phoenix/v1.18.0/apps/e-commerce/landing/shipping-info.html">
                                                    <div class="dropdown-item-wrapper"><span
                                                            class="me-2 uil"></span>Shipping info</div>
                                                </a></li>
                                            <li><a class="dropdown-item"
                                                    href="https://prium.github.io/phoenix/v1.18.0/apps/e-commerce/landing/profile.html">
                                                    <div class="dropdown-item-wrapper"><span
                                                            class="me-2 uil"></span>Profile</div>
                                                </a></li>
                                            <li><a class="dropdown-item"
                                                    href="https://prium.github.io/phoenix/v1.18.0/apps/e-commerce/landing/favourite-stores.html">
                                                    <div class="dropdown-item-wrapper"><span
                                                            class="me-2 uil"></span>Favourite stores</div>
                                                </a></li>
                                            <li><a class="dropdown-item"
                                                    href="https://prium.github.io/phoenix/v1.18.0/apps/e-commerce/landing/wishlist.html">
                                                    <div class="dropdown-item-wrapper"><span
                                                            class="me-2 uil"></span>Wishlist</div>
                                                </a></li>
                                            <li><a class="dropdown-item"
                                                    href="https://prium.github.io/phoenix/v1.18.0/apps/e-commerce/landing/order-tracking.html">
                                                    <div class="dropdown-item-wrapper"><span
                                                            class="me-2 uil"></span>Order tracking</div>
                                                </a></li>
                                            <li><a class="dropdown-item"
                                                    href="https://prium.github.io/phoenix/v1.18.0/apps/e-commerce/landing/invoice.html">
                                                    <div class="dropdown-item-wrapper"><span
                                                            class="me-2 uil"></span>Invoice</div>
                                                </a></li>
                                        </ul>
                                    </li>
                                </ul>
                            </li>
                            <li class="dropdown"><a class="dropdown-item dropdown-toggle" id="CRM" href="#"
                                    data-bs-toggle="dropdown" data-bs-auto-close="outside">
                                    <div class="dropdown-item-wrapper"><span
                                            class="uil fs-8 uil-angle-right lh-1 dropdown-indicator-icon"></span><span><span
                                                class="me-2 uil" data-feather="phone"></span>CRM</span></div>
                                </a>
                                <ul class="dropdown-menu">
                                    <li><a class="dropdown-item"
                                            href="https://prium.github.io/phoenix/v1.18.0/apps/crm/analytics.html">
                                            <div class="dropdown-item-wrapper"><span class="me-2 uil"></span>Analytics
                                            </div>
                                        </a></li>
                                    <li><a class="dropdown-item"
                                            href="https://prium.github.io/phoenix/v1.18.0/apps/crm/deals.html">
                                            <div class="dropdown-item-wrapper"><span class="me-2 uil"></span>Deals</div>
                                        </a></li>
                                    <li><a class="dropdown-item"
                                            href="https://prium.github.io/phoenix/v1.18.0/apps/crm/deal-details.html">
                                            <div class="dropdown-item-wrapper"><span class="me-2 uil"></span>Deal
                                                details</div>
                                        </a></li>
                                    <li><a class="dropdown-item"
                                            href="https://prium.github.io/phoenix/v1.18.0/apps/crm/leads.html">
                                            <div class="dropdown-item-wrapper"><span class="me-2 uil"></span>Leads</div>
                                        </a></li>
                                    <li><a class="dropdown-item"
                                            href="https://prium.github.io/phoenix/v1.18.0/apps/crm/lead-details.html">
                                            <div class="dropdown-item-wrapper"><span class="me-2 uil"></span>Lead
                                                details</div>
                                        </a></li>
                                    <li><a class="dropdown-item"
                                            href="https://prium.github.io/phoenix/v1.18.0/apps/crm/reports.html">
                                            <div class="dropdown-item-wrapper"><span class="me-2 uil"></span>Reports
                                            </div>
                                        </a></li>
                                    <li><a class="dropdown-item"
                                            href="https://prium.github.io/phoenix/v1.18.0/apps/crm/report-details.html">
                                            <div class="dropdown-item-wrapper"><span class="me-2 uil"></span>Report
                                                details</div>
                                        </a></li>
                                    <li><a class="dropdown-item"
                                            href="https://prium.github.io/phoenix/v1.18.0/apps/crm/add-contact.html">
                                            <div class="dropdown-item-wrapper"><span class="me-2 uil"></span>Add contact
                                            </div>
                                        </a></li>
                                </ul>
                            </li>
                            <li class="dropdown"><a class="dropdown-item dropdown-toggle" id="project-management"
                                    href="#" data-bs-toggle="dropdown" data-bs-auto-close="outside">
                                    <div class="dropdown-item-wrapper"><span
                                            class="uil fs-8 uil-angle-right lh-1 dropdown-indicator-icon"></span><span><span
                                                class="me-2 uil" data-feather="clipboard"></span>Project
                                            management</span></div>
                                </a>
                                <ul class="dropdown-menu">
                                    <li><a class="dropdown-item"
                                            href="https://prium.github.io/phoenix/v1.18.0/apps/project-management/create-new.html">
                                            <div class="dropdown-item-wrapper"><span class="me-2 uil"></span>Create new
                                            </div>
                                        </a></li>
                                    <li><a class="dropdown-item"
                                            href="https://prium.github.io/phoenix/v1.18.0/apps/project-management/project-list-view.html">
                                            <div class="dropdown-item-wrapper"><span class="me-2 uil"></span>Project
                                                list view</div>
                                        </a></li>
                                    <li><a class="dropdown-item"
                                            href="https://prium.github.io/phoenix/v1.18.0/apps/project-management/project-card-view.html">
                                            <div class="dropdown-item-wrapper"><span class="me-2 uil"></span>Project
                                                card view</div>
                                        </a></li>
                                    <li><a class="dropdown-item"
                                            href="https://prium.github.io/phoenix/v1.18.0/apps/project-management/project-board-view.html">
                                            <div class="dropdown-item-wrapper"><span class="me-2 uil"></span>Project
                                                board view</div>
                                        </a></li>
                                    <li><a class="dropdown-item"
                                            href="https://prium.github.io/phoenix/v1.18.0/apps/project-management/todo-list.html">
                                            <div class="dropdown-item-wrapper"><span class="me-2 uil"></span>Todo list
                                            </div>
                                        </a></li>
                                    <li><a class="dropdown-item"
                                            href="https://prium.github.io/phoenix/v1.18.0/apps/project-management/project-details.html">
                                            <div class="dropdown-item-wrapper"><span class="me-2 uil"></span>Project
                                                details</div>
                                        </a></li>
                                </ul>
                            </li>
                            <li class="dropdown"><a class="dropdown-item dropdown-toggle" id="travel-agency" href="#"
                                    data-bs-toggle="dropdown" data-bs-auto-close="outside">
                                    <div class="dropdown-item-wrapper"><span
                                            class="uil fs-8 uil-angle-right lh-1 dropdown-indicator-icon"></span><span><span
                                                class="me-2 uil" data-feather="briefcase"></span>Travel agency</span>
                                    </div>
                                </a>
                                <ul class="dropdown-menu">
                                    <li><a class="dropdown-item"
                                            href="https://prium.github.io/phoenix/v1.18.0/apps/travel-agency/landing.html">
                                            <div class="dropdown-item-wrapper"><span class="me-2 uil"></span>Landing
                                            </div>
                                        </a></li>
                                    <li class="dropdown"><a class="dropdown-item dropdown-toggle" id="hotel" href="#"
                                            data-bs-toggle="dropdown" data-bs-auto-close="outside">
                                            <div class="dropdown-item-wrapper"><span
                                                    class="uil fs-8 uil-angle-right lh-1 dropdown-indicator-icon"></span><span><span
                                                        class="me-2 uil"></span>Hotel</span></div>
                                        </a>
                                        <ul class="dropdown-menu">
                                            <li class="dropdown"><a class="dropdown-item dropdown-toggle" id="admin"
                                                    href="#" data-bs-toggle="dropdown" data-bs-auto-close="outside">
                                                    <div class="dropdown-item-wrapper"><span
                                                            class="uil fs-8 uil-angle-right lh-1 dropdown-indicator-icon"></span><span><span
                                                                class="me-2 uil"></span>Admin</span></div>
                                                </a>
                                                <ul class="dropdown-menu">
                                                    <li><a class="dropdown-item"
                                                            href="https://prium.github.io/phoenix/v1.18.0/apps/travel-agency/hotel/admin/add-property.html">
                                                            <div class="dropdown-item-wrapper"><span
                                                                    class="me-2 uil"></span>Add property</div>
                                                        </a></li>
                                                    <li><a class="dropdown-item"
                                                            href="https://prium.github.io/phoenix/v1.18.0/apps/travel-agency/hotel/admin/add-room.html">
                                                            <div class="dropdown-item-wrapper"><span
                                                                    class="me-2 uil"></span>Add room</div>
                                                        </a></li>
                                                    <li><a class="dropdown-item"
                                                            href="https://prium.github.io/phoenix/v1.18.0/apps/travel-agency/hotel/admin/room-listing.html">
                                                            <div class="dropdown-item-wrapper"><span
                                                                    class="me-2 uil"></span>Room listing</div>
                                                        </a></li>
                                                    <li><a class="dropdown-item"
                                                            href="https://prium.github.io/phoenix/v1.18.0/apps/travel-agency/hotel/admin/room-search.html">
                                                            <div class="dropdown-item-wrapper"><span
                                                                    class="me-2 uil"></span>Search room</div>
                                                        </a></li>
                                                </ul>
                                            </li>
                                            <li class="dropdown"><a class="dropdown-item dropdown-toggle" id="customer"
                                                    href="#" data-bs-toggle="dropdown" data-bs-auto-close="outside">
                                                    <div class="dropdown-item-wrapper"><span
                                                            class="uil fs-8 uil-angle-right lh-1 dropdown-indicator-icon"></span><span><span
                                                                class="me-2 uil"></span>Customer</span></div>
                                                </a>
                                                <ul class="dropdown-menu">
                                                    <li><a class="dropdown-item"
                                                            href="https://prium.github.io/phoenix/v1.18.0/apps/travel-agency/hotel/customer/homepage.html">
                                                            <div class="dropdown-item-wrapper"><span
                                                                    class="me-2 uil"></span>Homepage</div>
                                                        </a></li>
                                                    <li><a class="dropdown-item"
                                                            href="https://prium.github.io/phoenix/v1.18.0/apps/travel-agency/hotel/customer/hotel-details.html">
                                                            <div class="dropdown-item-wrapper"><span
                                                                    class="me-2 uil"></span>Hotel details</div>
                                                        </a></li>
                                                    <li><a class="dropdown-item"
                                                            href="https://prium.github.io/phoenix/v1.18.0/apps/travel-agency/hotel/customer/hotel-compare.html">
                                                            <div class="dropdown-item-wrapper"><span
                                                                    class="me-2 uil"></span>Hotel compare</div>
                                                        </a></li>
                                                    <li><a class="dropdown-item"
                                                            href="https://prium.github.io/phoenix/v1.18.0/apps/travel-agency/hotel/customer/checkout.html">
                                                            <div class="dropdown-item-wrapper"><span
                                                                    class="me-2 uil"></span>Checkout</div>
                                                        </a></li>
                                                    <li><a class="dropdown-item"
                                                            href="https://prium.github.io/phoenix/v1.18.0/apps/travel-agency/hotel/customer/payment.html">
                                                            <div class="dropdown-item-wrapper"><span
                                                                    class="me-2 uil"></span>Payment</div>
                                                        </a></li>
                                                    <li><a class="dropdown-item"
                                                            href="https://prium.github.io/phoenix/v1.18.0/apps/travel-agency/hotel/customer/gallery.html">
                                                            <div class="dropdown-item-wrapper"><span
                                                                    class="me-2 uil"></span>Gallery</div>
                                                        </a></li>
                                                </ul>
                                            </li>
                                        </ul>
                                    </li>
                                    <li class="dropdown"><a class="dropdown-item dropdown-toggle" id="flight" href="#"
                                            data-bs-toggle="dropdown" data-bs-auto-close="outside">
                                            <div class="dropdown-item-wrapper"><span
                                                    class="uil fs-8 uil-angle-right lh-1 dropdown-indicator-icon"></span><span><span
                                                        class="me-2 uil"></span>Flight</span></div>
                                        </a>
                                        <ul class="dropdown-menu">
                                            <li><a class="dropdown-item"
                                                    href="https://prium.github.io/phoenix/v1.18.0/apps/travel-agency/flight/homepage.html">
                                                    <div class="dropdown-item-wrapper"><span
                                                            class="me-2 uil"></span>Homepage</div>
                                                </a></li>
                                            <li><a class="dropdown-item"
                                                    href="https://prium.github.io/phoenix/v1.18.0/apps/travel-agency/flight/booking.html">
                                                    <div class="dropdown-item-wrapper"><span
                                                            class="me-2 uil"></span>Booking</div>
                                                </a></li>
                                            <li><a class="dropdown-item"
                                                    href="https://prium.github.io/phoenix/v1.18.0/apps/travel-agency/flight/payment.html">
                                                    <div class="dropdown-item-wrapper"><span
                                                            class="me-2 uil"></span>Payment</div>
                                                </a></li>
                                        </ul>
                                    </li>
                                    <li class="dropdown"><a class="dropdown-item dropdown-toggle" id="trip" href="#"
                                            data-bs-toggle="dropdown" data-bs-auto-close="outside">
                                            <div class="dropdown-item-wrapper"><span
                                                    class="uil fs-8 uil-angle-right lh-1 dropdown-indicator-icon"></span><span><span
                                                        class="me-2 uil"></span>Trip</span></div>
                                        </a>
                                        <ul class="dropdown-menu">
                                            <li><a class="dropdown-item"
                                                    href="https://prium.github.io/phoenix/v1.18.0/apps/travel-agency/trip/homepage.html">
                                                    <div class="dropdown-item-wrapper"><span
                                                            class="me-2 uil"></span>Homepage</div>
                                                </a></li>
                                            <li><a class="dropdown-item"
                                                    href="https://prium.github.io/phoenix/v1.18.0/apps/travel-agency/trip/trip-details.html">
                                                    <div class="dropdown-item-wrapper"><span
                                                            class="me-2 uil"></span>Trip details</div>
                                                </a></li>
                                            <li><a class="dropdown-item"
                                                    href="https://prium.github.io/phoenix/v1.18.0/apps/travel-agency/trip/checkout.html">
                                                    <div class="dropdown-item-wrapper"><span
                                                            class="me-2 uil"></span>Checkout</div>
                                                </a></li>
                                        </ul>
                                    </li>
                                </ul>
                            </li>
                            <li><a class="dropdown-item" href="https://prium.github.io/phoenix/v1.18.0/apps/chat.html">
                                    <div class="dropdown-item-wrapper"><span class="me-2 uil"
                                            data-feather="message-square"></span>Chat</div>
                                </a></li>
                            <li class="dropdown"><a class="dropdown-item dropdown-toggle" id="email" href="#"
                                    data-bs-toggle="dropdown" data-bs-auto-close="outside">
                                    <div class="dropdown-item-wrapper"><span
                                            class="uil fs-8 uil-angle-right lh-1 dropdown-indicator-icon"></span><span><span
                                                class="me-2 uil" data-feather="mail"></span>Email</span></div>
                                </a>
                                <ul class="dropdown-menu">
                                    <li><a class="dropdown-item"
                                            href="https://prium.github.io/phoenix/v1.18.0/apps/email/inbox.html">
                                            <div class="dropdown-item-wrapper"><span class="me-2 uil"></span>Inbox</div>
                                        </a></li>
                                    <li><a class="dropdown-item"
                                            href="https://prium.github.io/phoenix/v1.18.0/apps/email/email-detail.html">
                                            <div class="dropdown-item-wrapper"><span class="me-2 uil"></span>Email
                                                detail</div>
                                        </a></li>
                                    <li><a class="dropdown-item"
                                            href="https://prium.github.io/phoenix/v1.18.0/apps/email/compose.html">
                                            <div class="dropdown-item-wrapper"><span class="me-2 uil"></span>Compose
                                            </div>
                                        </a></li>
                                </ul>
                            </li>
                            <li class="dropdown"><a class="dropdown-item dropdown-toggle" id="events" href="#"
                                    data-bs-toggle="dropdown" data-bs-auto-close="outside">
                                    <div class="dropdown-item-wrapper"><span
                                            class="uil fs-8 uil-angle-right lh-1 dropdown-indicator-icon"></span><span><span
                                                class="me-2 uil" data-feather="bookmark"></span>Events</span></div>
                                </a>
                                <ul class="dropdown-menu">
                                    <li><a class="dropdown-item"
                                            href="https://prium.github.io/phoenix/v1.18.0/apps/events/create-an-event.html">
                                            <div class="dropdown-item-wrapper"><span class="me-2 uil"></span>Create an
                                                event</div>
                                        </a></li>
                                    <li><a class="dropdown-item"
                                            href="https://prium.github.io/phoenix/v1.18.0/apps/events/event-detail.html">
                                            <div class="dropdown-item-wrapper"><span class="me-2 uil"></span>Event
                                                detail</div>
                                        </a></li>
                                </ul>
                            </li>
                            <li class="dropdown"><a class="dropdown-item dropdown-toggle" id="kanban" href="#"
                                    data-bs-toggle="dropdown" data-bs-auto-close="outside">
                                    <div class="dropdown-item-wrapper"><span
                                            class="uil fs-8 uil-angle-right lh-1 dropdown-indicator-icon"></span><span><span
                                                class="me-2 uil" data-feather="trello"></span>Kanban</span></div>
                                </a>
                                <ul class="dropdown-menu">
                                    <li><a class="dropdown-item"
                                            href="https://prium.github.io/phoenix/v1.18.0/apps/kanban/kanban.html">
                                            <div class="dropdown-item-wrapper"><span class="me-2 uil"></span>Kanban
                                            </div>
                                        </a></li>
                                    <li><a class="dropdown-item"
                                            href="https://prium.github.io/phoenix/v1.18.0/apps/kanban/boards.html">
                                            <div class="dropdown-item-wrapper"><span class="me-2 uil"></span>Boards
                                            </div>
                                        </a></li>
                                    <li><a class="dropdown-item"
                                            href="https://prium.github.io/phoenix/v1.18.0/apps/kanban/create-kanban-board.html">
                                            <div class="dropdown-item-wrapper"><span class="me-2 uil"></span>Create
                                                board</div>
                                        </a></li>
                                </ul>
                            </li>
                            <li class="dropdown"><a class="dropdown-item dropdown-toggle" id="social" href="#"
                                    data-bs-toggle="dropdown" data-bs-auto-close="outside">
                                    <div class="dropdown-item-wrapper"><span
                                            class="uil fs-8 uil-angle-right lh-1 dropdown-indicator-icon"></span><span><span
                                                class="me-2 uil" data-feather="share-2"></span>Social</span></div>
                                </a>
                                <ul class="dropdown-menu">
                                    <li><a class="dropdown-item"
                                            href="https://prium.github.io/phoenix/v1.18.0/apps/social/profile.html">
                                            <div class="dropdown-item-wrapper"><span class="me-2 uil"></span>Profile
                                            </div>
                                        </a></li>
                                    <li><a class="dropdown-item"
                                            href="https://prium.github.io/phoenix/v1.18.0/apps/social/settings.html">
                                            <div class="dropdown-item-wrapper"><span class="me-2 uil"></span>Settings
                                            </div>
                                        </a></li>
                                </ul>
                            </li>
                            <li><a class="dropdown-item"
                                    href="https://prium.github.io/phoenix/v1.18.0/apps/calendar.html">
                                    <div class="dropdown-item-wrapper"><span class="me-2 uil"
                                            data-feather="calendar"></span>Calendar</div>
                                </a></li>
                        </ul>
                    </li>
                    <li class="nav-item dropdown"><a class="nav-link dropdown-toggle lh-1" href="#!" role="button"
                            data-bs-toggle="dropdown" data-bs-auto-close="outside" aria-haspopup="true"
                            aria-expanded="false"><span class="uil fs-8 me-2 uil-files-landscapes-alt"></span>Pages</a>
                        <ul class="dropdown-menu navbar-dropdown-caret">
                            <li><a class="dropdown-item"
                                    href="https://prium.github.io/phoenix/v1.18.0/pages/starter.html">
                                    <div class="dropdown-item-wrapper"><span class="me-2 uil"
                                            data-feather="compass"></span>Starter</div>
                                </a></li>
                            <li class="dropdown"><a class="dropdown-item dropdown-toggle" id="faq" href="#"
                                    data-bs-toggle="dropdown" data-bs-auto-close="outside">
                                    <div class="dropdown-item-wrapper"><span
                                            class="uil fs-8 uil-angle-right lh-1 dropdown-indicator-icon"></span><span><span
                                                class="me-2 uil" data-feather="help-circle"></span>Faq</span></div>
                                </a>
                                <ul class="dropdown-menu">
                                    <li><a class="dropdown-item"
                                            href="https://prium.github.io/phoenix/v1.18.0/pages/faq/faq-accordion.html">
                                            <div class="dropdown-item-wrapper"><span class="me-2 uil"></span>Faq
                                                accordion</div>
                                        </a></li>
                                    <li><a class="dropdown-item"
                                            href="https://prium.github.io/phoenix/v1.18.0/pages/faq/faq-tab.html">
                                            <div class="dropdown-item-wrapper"><span class="me-2 uil"></span>Faq tab
                                            </div>
                                        </a></li>
                                </ul>
                            </li>
                            <li class="dropdown"><a class="dropdown-item dropdown-toggle" id="landing" href="#"
                                    data-bs-toggle="dropdown" data-bs-auto-close="outside">
                                    <div class="dropdown-item-wrapper"><span
                                            class="uil fs-8 uil-angle-right lh-1 dropdown-indicator-icon"></span><span><span
                                                class="me-2 uil" data-feather="globe"></span>Landing</span></div>
                                </a>
                                <ul class="dropdown-menu">
                                    <li><a class="dropdown-item"
                                            href="https://prium.github.io/phoenix/v1.18.0/pages/landing/default.html">
                                            <div class="dropdown-item-wrapper"><span class="me-2 uil"></span>Default
                                            </div>
                                        </a></li>
                                    <li><a class="dropdown-item"
                                            href="https://prium.github.io/phoenix/v1.18.0/pages/landing/alternate.html">
                                            <div class="dropdown-item-wrapper"><span class="me-2 uil"></span>Alternate
                                            </div>
                                        </a></li>
                                </ul>
                            </li>
                            <li class="dropdown"><a class="dropdown-item dropdown-toggle" id="pricing" href="#"
                                    data-bs-toggle="dropdown" data-bs-auto-close="outside">
                                    <div class="dropdown-item-wrapper"><span
                                            class="uil fs-8 uil-angle-right lh-1 dropdown-indicator-icon"></span><span><span
                                                class="me-2 uil" data-feather="tag"></span>Pricing</span></div>
                                </a>
                                <ul class="dropdown-menu">
                                    <li><a class="dropdown-item"
                                            href="https://prium.github.io/phoenix/v1.18.0/pages/pricing/pricing-column.html">
                                            <div class="dropdown-item-wrapper"><span class="me-2 uil"></span>Pricing
                                                column</div>
                                        </a></li>
                                    <li><a class="dropdown-item"
                                            href="https://prium.github.io/phoenix/v1.18.0/pages/pricing/pricing-grid.html">
                                            <div class="dropdown-item-wrapper"><span class="me-2 uil"></span>Pricing
                                                grid</div>
                                        </a></li>
                                </ul>
                            </li>
                            <li><a class="dropdown-item"
                                    href="https://prium.github.io/phoenix/v1.18.0/pages/notifications.html">
                                    <div class="dropdown-item-wrapper"><span class="me-2 uil"
                                            data-feather="bell"></span>Notifications</div>
                                </a></li>
                            <li><a class="dropdown-item"
                                    href="https://prium.github.io/phoenix/v1.18.0/pages/members.html">
                                    <div class="dropdown-item-wrapper"><span class="me-2 uil"
                                            data-feather="users"></span>Members</div>
                                </a></li>
                            <li><a class="dropdown-item"
                                    href="https://prium.github.io/phoenix/v1.18.0/pages/timeline.html">
                                    <div class="dropdown-item-wrapper"><span class="me-2 uil"
                                            data-feather="clock"></span>Timeline</div>
                                </a></li>
                            <li class="dropdown"><a class="dropdown-item dropdown-toggle" id="errors" href="#"
                                    data-bs-toggle="dropdown" data-bs-auto-close="outside">
                                    <div class="dropdown-item-wrapper"><span
                                            class="uil fs-8 uil-angle-right lh-1 dropdown-indicator-icon"></span><span><span
                                                class="me-2 uil" data-feather="alert-triangle"></span>Errors</span>
                                    </div>
                                </a>
                                <ul class="dropdown-menu">
                                    <li><a class="dropdown-item"
                                            href="https://prium.github.io/phoenix/v1.18.0/pages/errors/404.html">
                                            <div class="dropdown-item-wrapper"><span class="me-2 uil"></span>404</div>
                                        </a></li>
                                    <li><a class="dropdown-item"
                                            href="https://prium.github.io/phoenix/v1.18.0/pages/errors/403.html">
                                            <div class="dropdown-item-wrapper"><span class="me-2 uil"></span>403</div>
                                        </a></li>
                                    <li><a class="dropdown-item"
                                            href="https://prium.github.io/phoenix/v1.18.0/pages/errors/500.html">
                                            <div class="dropdown-item-wrapper"><span class="me-2 uil"></span>500</div>
                                        </a></li>
                                </ul>
                            </li>
                            <li class="dropdown"><a class="dropdown-item dropdown-toggle" id="authentication" href="#"
                                    data-bs-toggle="dropdown" data-bs-auto-close="outside">
                                    <div class="dropdown-item-wrapper"><span
                                            class="uil fs-8 uil-angle-right lh-1 dropdown-indicator-icon"></span><span><span
                                                class="me-2 uil" data-feather="lock"></span>Authentication</span></div>
                                </a>
                                <ul class="dropdown-menu">
                                    <li class="dropdown"><a class="dropdown-item dropdown-toggle" id="simple" href="#"
                                            data-bs-toggle="dropdown" data-bs-auto-close="outside">
                                            <div class="dropdown-item-wrapper"><span
                                                    class="uil fs-8 uil-angle-right lh-1 dropdown-indicator-icon"></span><span><span
                                                        class="me-2 uil"></span>Simple</span></div>
                                        </a>
                                        <ul class="dropdown-menu">
                                            <li><a class="dropdown-item"
                                                    href="https://prium.github.io/phoenix/v1.18.0/pages/authentication/simple/sign-in.html">
                                                    <div class="dropdown-item-wrapper"><span
                                                            class="me-2 uil"></span>Sign in</div>
                                                </a></li>
                                            <li><a class="dropdown-item"
                                                    href="https://prium.github.io/phoenix/v1.18.0/pages/authentication/simple/sign-up.html">
                                                    <div class="dropdown-item-wrapper"><span
                                                            class="me-2 uil"></span>Sign up</div>
                                                </a></li>
                                            <li><a class="dropdown-item"
                                                    href="https://prium.github.io/phoenix/v1.18.0/pages/authentication/simple/sign-out.html">
                                                    <div class="dropdown-item-wrapper"><span
                                                            class="me-2 uil"></span>Sign out</div>
                                                </a></li>
                                            <li><a class="dropdown-item"
                                                    href="https://prium.github.io/phoenix/v1.18.0/pages/authentication/simple/forgot-password.html">
                                                    <div class="dropdown-item-wrapper"><span
                                                            class="me-2 uil"></span>Forgot password</div>
                                                </a></li>
                                            <li><a class="dropdown-item"
                                                    href="https://prium.github.io/phoenix/v1.18.0/pages/authentication/simple/reset-password.html">
                                                    <div class="dropdown-item-wrapper"><span
                                                            class="me-2 uil"></span>Reset password</div>
                                                </a></li>
                                            <li><a class="dropdown-item"
                                                    href="https://prium.github.io/phoenix/v1.18.0/pages/authentication/simple/lock-screen.html">
                                                    <div class="dropdown-item-wrapper"><span
                                                            class="me-2 uil"></span>Lock screen</div>
                                                </a></li>
                                            <li><a class="dropdown-item"
                                                    href="https://prium.github.io/phoenix/v1.18.0/pages/authentication/simple/2FA.html">
                                                    <div class="dropdown-item-wrapper"><span class="me-2 uil"></span>2FA
                                                    </div>
                                                </a></li>
                                        </ul>
                                    </li>
                                    <li class="dropdown"><a class="dropdown-item dropdown-toggle" id="split" href="#"
                                            data-bs-toggle="dropdown" data-bs-auto-close="outside">
                                            <div class="dropdown-item-wrapper"><span
                                                    class="uil fs-8 uil-angle-right lh-1 dropdown-indicator-icon"></span><span><span
                                                        class="me-2 uil"></span>Split</span></div>
                                        </a>
                                        <ul class="dropdown-menu">
                                            <li><a class="dropdown-item"
                                                    href="https://prium.github.io/phoenix/v1.18.0/pages/authentication/split/sign-in.html">
                                                    <div class="dropdown-item-wrapper"><span
                                                            class="me-2 uil"></span>Sign in</div>
                                                </a></li>
                                            <li><a class="dropdown-item"
                                                    href="https://prium.github.io/phoenix/v1.18.0/pages/authentication/split/sign-up.html">
                                                    <div class="dropdown-item-wrapper"><span
                                                            class="me-2 uil"></span>Sign up</div>
                                                </a></li>
                                            <li><a class="dropdown-item"
                                                    href="https://prium.github.io/phoenix/v1.18.0/pages/authentication/split/sign-out.html">
                                                    <div class="dropdown-item-wrapper"><span
                                                            class="me-2 uil"></span>Sign out</div>
                                                </a></li>
                                            <li><a class="dropdown-item"
                                                    href="https://prium.github.io/phoenix/v1.18.0/pages/authentication/split/forgot-password.html">
                                                    <div class="dropdown-item-wrapper"><span
                                                            class="me-2 uil"></span>Forgot password</div>
                                                </a></li>
                                            <li><a class="dropdown-item"
                                                    href="https://prium.github.io/phoenix/v1.18.0/pages/authentication/split/reset-password.html">
                                                    <div class="dropdown-item-wrapper"><span
                                                            class="me-2 uil"></span>Reset password</div>
                                                </a></li>
                                            <li><a class="dropdown-item"
                                                    href="https://prium.github.io/phoenix/v1.18.0/pages/authentication/split/lock-screen.html">
                                                    <div class="dropdown-item-wrapper"><span
                                                            class="me-2 uil"></span>Lock screen</div>
                                                </a></li>
                                            <li><a class="dropdown-item"
                                                    href="https://prium.github.io/phoenix/v1.18.0/pages/authentication/split/2FA.html">
                                                    <div class="dropdown-item-wrapper"><span class="me-2 uil"></span>2FA
                                                    </div>
                                                </a></li>
                                        </ul>
                                    </li>
                                    <li class="dropdown"><a class="dropdown-item dropdown-toggle" id="Card" href="#"
                                            data-bs-toggle="dropdown" data-bs-auto-close="outside">
                                            <div class="dropdown-item-wrapper"><span
                                                    class="uil fs-8 uil-angle-right lh-1 dropdown-indicator-icon"></span><span><span
                                                        class="me-2 uil"></span>Card</span></div>
                                        </a>
                                        <ul class="dropdown-menu">
                                            <li><a class="dropdown-item"
                                                    href="https://prium.github.io/phoenix/v1.18.0/pages/authentication/card/sign-in.html">
                                                    <div class="dropdown-item-wrapper"><span
                                                            class="me-2 uil"></span>Sign in</div>
                                                </a></li>
                                            <li><a class="dropdown-item"
                                                    href="https://prium.github.io/phoenix/v1.18.0/pages/authentication/card/sign-up.html">
                                                    <div class="dropdown-item-wrapper"><span
                                                            class="me-2 uil"></span>Sign up</div>
                                                </a></li>
                                            <li><a class="dropdown-item"
                                                    href="https://prium.github.io/phoenix/v1.18.0/pages/authentication/card/sign-out.html">
                                                    <div class="dropdown-item-wrapper"><span
                                                            class="me-2 uil"></span>Sign out</div>
                                                </a></li>
                                            <li><a class="dropdown-item"
                                                    href="https://prium.github.io/phoenix/v1.18.0/pages/authentication/card/forgot-password.html">
                                                    <div class="dropdown-item-wrapper"><span
                                                            class="me-2 uil"></span>Forgot password</div>
                                                </a></li>
                                            <li><a class="dropdown-item"
                                                    href="https://prium.github.io/phoenix/v1.18.0/pages/authentication/card/reset-password.html">
                                                    <div class="dropdown-item-wrapper"><span
                                                            class="me-2 uil"></span>Reset password</div>
                                                </a></li>
                                            <li><a class="dropdown-item"
                                                    href="https://prium.github.io/phoenix/v1.18.0/pages/authentication/card/lock-screen.html">
                                                    <div class="dropdown-item-wrapper"><span
                                                            class="me-2 uil"></span>Lock screen</div>
                                                </a></li>
                                            <li><a class="dropdown-item"
                                                    href="https://prium.github.io/phoenix/v1.18.0/pages/authentication/card/2FA.html">
                                                    <div class="dropdown-item-wrapper"><span class="me-2 uil"></span>2FA
                                                    </div>
                                                </a></li>
                                        </ul>
                                    </li>
                                </ul>
                            </li>
                            <li class="dropdown"><a class="dropdown-item dropdown-toggle" id="layouts" href="#"
                                    data-bs-toggle="dropdown" data-bs-auto-close="outside">
                                    <div class="dropdown-item-wrapper"><span
                                            class="uil fs-8 uil-angle-right lh-1 dropdown-indicator-icon"></span><span><span
                                                class="me-2 uil" data-feather="layout"></span>Layouts</span></div>
                                </a>
                                <ul class="dropdown-menu">
                                    <li><a class="dropdown-item"
                                            href="https://prium.github.io/phoenix/v1.18.0/demo/vertical-sidenav.html">
                                            <div class="dropdown-item-wrapper"><span class="me-2 uil"></span>Vertical
                                                sidenav</div>
                                        </a></li>
                                    <li><a class="dropdown-item"
                                            href="https://prium.github.io/phoenix/v1.18.0/demo/dark-mode.html">
                                            <div class="dropdown-item-wrapper"><span class="me-2 uil"></span>Dark mode
                                            </div>
                                        </a></li>
                                    <li><a class="dropdown-item"
                                            href="https://prium.github.io/phoenix/v1.18.0/demo/sidenav-collapse.html">
                                            <div class="dropdown-item-wrapper"><span class="me-2 uil"></span>Sidenav
                                                collapse</div>
                                        </a></li>
                                    <li><a class="dropdown-item"
                                            href="https://prium.github.io/phoenix/v1.18.0/demo/darknav.html">
                                            <div class="dropdown-item-wrapper"><span class="me-2 uil"></span>Darknav
                                            </div>
                                        </a></li>
                                    <li><a class="dropdown-item"
                                            href="https://prium.github.io/phoenix/v1.18.0/demo/topnav-slim.html">
                                            <div class="dropdown-item-wrapper"><span class="me-2 uil"></span>Topnav slim
                                            </div>
                                        </a></li>
                                    <li><a class="dropdown-item"
                                            href="https://prium.github.io/phoenix/v1.18.0/demo/navbar-horizontal.html">
                                            <div class="dropdown-item-wrapper"><span class="me-2 uil"></span>Navbar
                                                horizontal</div>
                                        </a></li>
                                    <li><a class="dropdown-item"
                                            href="https://prium.github.io/phoenix/v1.18.0/demo/horizontal-slim.html">
                                            <div class="dropdown-item-wrapper"><span class="me-2 uil"></span>Horizontal
                                                slim</div>
                                        </a></li>
                                    <li><a class="dropdown-item"
                                            href="https://prium.github.io/phoenix/v1.18.0/demo/combo-nav.html">
                                            <div class="dropdown-item-wrapper"><span class="me-2 uil"></span>Combo nav
                                            </div>
                                        </a></li>
                                    <li><a class="dropdown-item"
                                            href="https://prium.github.io/phoenix/v1.18.0/demo/combo-nav-slim.html">
                                            <div class="dropdown-item-wrapper"><span class="me-2 uil"></span>Combo nav
                                                slim</div>
                                        </a></li>
                                    <li><a class="dropdown-item"
                                            href="https://prium.github.io/phoenix/v1.18.0/demo/dual-nav.html">
                                            <div class="dropdown-item-wrapper"><span class="me-2 uil"></span>Dual nav
                                            </div>
                                        </a></li>
                                </ul>
                            </li>
                        </ul>
                    </li>
                    <li class="nav-item dropdown"><a class="nav-link dropdown-toggle lh-1" href="#!" role="button"
                            data-bs-toggle="dropdown" data-bs-auto-close="outside" aria-haspopup="true"
                            aria-expanded="false"><span class="uil fs-8 me-2 uil-puzzle-piece"></span>Modules</a>
                        <ul class="dropdown-menu navbar-dropdown-caret dropdown-menu-card py-0">
                            <div class="border-0 scrollbar" style="max-height: 60vh;">
                                <div class="px-3 pt-4 pb-3 img-dropdown">
                                    <div class="row gx-4 gy-5">
                                        <div class="col-12 col-sm-6 col-md-4">
                                            <div class="dropdown-item-group"><span class="me-2" data-feather="file-text"
                                                    style="stroke-width:2;"></span>
                                                <h6 class="dropdown-item-title">Forms</h6>
                                            </div><a class="dropdown-link"
                                                href="https://prium.github.io/phoenix/v1.18.0/modules/forms/basic/form-control.html">Form
                                                control</a><a class="dropdown-link"
                                                href="https://prium.github.io/phoenix/v1.18.0/modules/forms/basic/input-group.html">Input
                                                group</a><a class="dropdown-link"
                                                href="https://prium.github.io/phoenix/v1.18.0/modules/forms/basic/select.html">Select</a><a
                                                class="dropdown-link"
                                                href="https://prium.github.io/phoenix/v1.18.0/modules/forms/basic/checks.html">Checks</a><a
                                                class="dropdown-link"
                                                href="https://prium.github.io/phoenix/v1.18.0/modules/forms/basic/range.html">Range</a><a
                                                class="dropdown-link"
                                                href="https://prium.github.io/phoenix/v1.18.0/modules/forms/basic/floating-labels.html">Floating
                                                labels</a><a class="dropdown-link"
                                                href="https://prium.github.io/phoenix/v1.18.0/modules/forms/basic/layout.html">Layout</a><a
                                                class="dropdown-link"
                                                href="https://prium.github.io/phoenix/v1.18.0/modules/forms/advance/advance-select.html">Advance
                                                select</a><a class="dropdown-link"
                                                href="https://prium.github.io/phoenix/v1.18.0/modules/forms/advance/date-picker.html">Date
                                                picker</a><a class="dropdown-link"
                                                href="https://prium.github.io/phoenix/v1.18.0/modules/forms/advance/editor.html">Editor</a><a
                                                class="dropdown-link"
                                                href="https://prium.github.io/phoenix/v1.18.0/modules/forms/advance/file-uploader.html">File
                                                uploader</a><a class="dropdown-link"
                                                href="https://prium.github.io/phoenix/v1.18.0/modules/forms/advance/range.html">Range</a><a
                                                class="dropdown-link"
                                                href="https://prium.github.io/phoenix/v1.18.0/modules/forms/advance/rating.html">Rating</a><a
                                                class="dropdown-link"
                                                href="https://prium.github.io/phoenix/v1.18.0/modules/forms/advance/emoji-button.html">Emoji
                                                button</a><a class="dropdown-link"
                                                href="https://prium.github.io/phoenix/v1.18.0/modules/forms/validation.html">Validation</a><a
                                                class="dropdown-link"
                                                href="https://prium.github.io/phoenix/v1.18.0/modules/forms/wizard.html">Wizard</a>
                                            <div class="dropdown-item-group mt-5"><span class="me-2" data-feather="grid"
                                                    style="stroke-width:2;"></span>
                                                <h6 class="dropdown-item-title">Icons</h6>
                                            </div><a class="dropdown-link"
                                                href="https://prium.github.io/phoenix/v1.18.0/modules/icons/feather.html">Feather</a><a
                                                class="dropdown-link"
                                                href="https://prium.github.io/phoenix/v1.18.0/modules/icons/font-awesome.html">Font
                                                awesome</a><a class="dropdown-link"
                                                href="https://prium.github.io/phoenix/v1.18.0/modules/icons/unicons.html">Unicons</a>
                                            <div class="dropdown-item-group mt-5"><span class="me-2"
                                                    data-feather="bar-chart-2" style="stroke-width:2;"></span>
                                                <h6 class="dropdown-item-title">ECharts</h6>
                                            </div><a class="dropdown-link"
                                                href="https://prium.github.io/phoenix/v1.18.0/modules/echarts/line-charts.html">Line
                                                charts</a><a class="dropdown-link"
                                                href="https://prium.github.io/phoenix/v1.18.0/modules/echarts/bar-charts.html">Bar
                                                charts</a><a class="dropdown-link"
                                                href="https://prium.github.io/phoenix/v1.18.0/modules/echarts/candlestick-charts.html">Candlestick
                                                charts</a><a class="dropdown-link"
                                                href="https://prium.github.io/phoenix/v1.18.0/modules/echarts/geo-map.html">Geo
                                                map</a><a class="dropdown-link"
                                                href="https://prium.github.io/phoenix/v1.18.0/modules/echarts/scatter-charts.html">Scatter
                                                charts</a><a class="dropdown-link"
                                                href="https://prium.github.io/phoenix/v1.18.0/modules/echarts/pie-charts.html">Pie
                                                charts</a><a class="dropdown-link"
                                                href="https://prium.github.io/phoenix/v1.18.0/modules/echarts/gauge-chart.html">Gauge
                                                chart</a><a class="dropdown-link"
                                                href="https://prium.github.io/phoenix/v1.18.0/modules/echarts/radar-charts.html">Radar
                                                charts</a><a class="dropdown-link"
                                                href="https://prium.github.io/phoenix/v1.18.0/modules/echarts/heatmap-charts.html">Heatmap
                                                charts</a><a class="dropdown-link"
                                                href="https://prium.github.io/phoenix/v1.18.0/modules/echarts/how-to-use.html">How
                                                to use</a>
                                        </div>
                                        <div class="col-12 col-sm-6 col-md-4">
                                            <div class="dropdown-item-group"><span class="me-2" data-feather="package"
                                                    style="stroke-width:2;"></span>
                                                <h6 class="dropdown-item-title">Components</h6>
                                            </div><a class="dropdown-link"
                                                href="https://prium.github.io/phoenix/v1.18.0/modules/components/accordion.html">Accordion</a><a
                                                class="dropdown-link"
                                                href="https://prium.github.io/phoenix/v1.18.0/modules/components/avatar.html">Avatar</a><a
                                                class="dropdown-link"
                                                href="https://prium.github.io/phoenix/v1.18.0/modules/components/alerts.html">Alerts</a><a
                                                class="dropdown-link"
                                                href="https://prium.github.io/phoenix/v1.18.0/modules/components/badge.html">Badge</a><a
                                                class="dropdown-link"
                                                href="https://prium.github.io/phoenix/v1.18.0/modules/components/breadcrumb.html">Breadcrumb</a><a
                                                class="dropdown-link"
                                                href="https://prium.github.io/phoenix/v1.18.0/modules/components/button.html">Buttons</a><a
                                                class="dropdown-link"
                                                href="https://prium.github.io/phoenix/v1.18.0/modules/components/calendar.html">Calendar</a><a
                                                class="dropdown-link"
                                                href="https://prium.github.io/phoenix/v1.18.0/modules/components/card.html">Card</a><a
                                                class="dropdown-link"
                                                href="https://prium.github.io/phoenix/v1.18.0/modules/components/carousel/bootstrap.html">Bootstrap</a><a
                                                class="dropdown-link"
                                                href="https://prium.github.io/phoenix/v1.18.0/modules/components/carousel/swiper.html">Swiper</a><a
                                                class="dropdown-link"
                                                href="https://prium.github.io/phoenix/v1.18.0/modules/components/collapse.html">Collapse</a><a
                                                class="dropdown-link"
                                                href="https://prium.github.io/phoenix/v1.18.0/modules/components/dropdown.html">Dropdown</a><a
                                                class="dropdown-link"
                                                href="https://prium.github.io/phoenix/v1.18.0/modules/components/list-group.html">List
                                                group</a><a class="dropdown-link"
                                                href="https://prium.github.io/phoenix/v1.18.0/modules/components/modal.html">Modals</a><a
                                                class="dropdown-link"
                                                href="https://prium.github.io/phoenix/v1.18.0/modules/components/navs-and-tabs/navs.html">Navs</a><a
                                                class="dropdown-link"
                                                href="https://prium.github.io/phoenix/v1.18.0/modules/components/navs-and-tabs/navbar.html">Navbar</a><a
                                                class="dropdown-link"
                                                href="https://prium.github.io/phoenix/v1.18.0/modules/components/navs-and-tabs/tabs.html">Tabs</a><a
                                                class="dropdown-link"
                                                href="https://prium.github.io/phoenix/v1.18.0/modules/components/offcanvas.html">Offcanvas</a><a
                                                class="dropdown-link"
                                                href="https://prium.github.io/phoenix/v1.18.0/modules/components/progress-bar.html">Progress
                                                bar</a><a class="dropdown-link"
                                                href="https://prium.github.io/phoenix/v1.18.0/modules/components/placeholder.html">Placeholder</a><a
                                                class="dropdown-link"
                                                href="https://prium.github.io/phoenix/v1.18.0/modules/components/pagination.html">Pagination</a><a
                                                class="dropdown-link"
                                                href="https://prium.github.io/phoenix/v1.18.0/modules/components/popovers.html">Popovers</a><a
                                                class="dropdown-link"
                                                href="https://prium.github.io/phoenix/v1.18.0/modules/components/scrollspy.html">Scrollspy</a><a
                                                class="dropdown-link"
                                                href="https://prium.github.io/phoenix/v1.18.0/modules/components/sortable.html">Sortable</a><a
                                                class="dropdown-link"
                                                href="https://prium.github.io/phoenix/v1.18.0/modules/components/spinners.html">Spinners</a><a
                                                class="dropdown-link"
                                                href="https://prium.github.io/phoenix/v1.18.0/modules/components/toast.html">Toast</a><a
                                                class="dropdown-link"
                                                href="https://prium.github.io/phoenix/v1.18.0/modules/components/tooltips.html">Tooltips</a><a
                                                class="dropdown-link"
                                                href="https://prium.github.io/phoenix/v1.18.0/modules/components/typed-text.html">Typed
                                                text</a><a class="dropdown-link"
                                                href="https://prium.github.io/phoenix/v1.18.0/modules/components/chat-widget.html">Chat
                                                widget</a>
                                        </div>
                                        <div class="col-12 col-sm-6 col-md-4">
                                            <div class="dropdown-item-group"><span class="me-2" data-feather="columns"
                                                    style="stroke-width:2;"></span>
                                                <h6 class="dropdown-item-title">Tables</h6>
                                            </div><a class="dropdown-link"
                                                href="https://prium.github.io/phoenix/v1.18.0/modules/tables/basic-tables.html">Basic
                                                tables</a><a class="dropdown-link"
                                                href="https://prium.github.io/phoenix/v1.18.0/modules/tables/advance-tables.html">Advance
                                                tables</a><a class="dropdown-link"
                                                href="https://prium.github.io/phoenix/v1.18.0/modules/tables/bulk-select.html">Bulk
                                                Select</a>
                                            <div class="dropdown-item-group mt-5"><span class="me-2" data-feather="tool"
                                                    style="stroke-width:2;"></span>
                                                <h6 class="dropdown-item-title">Utilities</h6>
                                            </div><a class="dropdown-link"
                                                href="https://prium.github.io/phoenix/v1.18.0/modules/utilities/background.html">Background</a><a
                                                class="dropdown-link"
                                                href="https://prium.github.io/phoenix/v1.18.0/modules/utilities/borders.html">Borders</a><a
                                                class="dropdown-link"
                                                href="https://prium.github.io/phoenix/v1.18.0/modules/utilities/colors.html">Colors</a><a
                                                class="dropdown-link"
                                                href="https://prium.github.io/phoenix/v1.18.0/modules/utilities/display.html">Display</a><a
                                                class="dropdown-link"
                                                href="https://prium.github.io/phoenix/v1.18.0/modules/utilities/flex.html">Flex</a><a
                                                class="dropdown-link"
                                                href="https://prium.github.io/phoenix/v1.18.0/modules/utilities/stacks.html">Stacks</a><a
                                                class="dropdown-link"
                                                href="https://prium.github.io/phoenix/v1.18.0/modules/utilities/float.html">Float</a><a
                                                class="dropdown-link"
                                                href="https://prium.github.io/phoenix/v1.18.0/modules/utilities/grid.html">Grid</a><a
                                                class="dropdown-link"
                                                href="https://prium.github.io/phoenix/v1.18.0/modules/utilities/interactions.html">Interactions</a><a
                                                class="dropdown-link"
                                                href="https://prium.github.io/phoenix/v1.18.0/modules/utilities/opacity.html">Opacity</a><a
                                                class="dropdown-link"
                                                href="https://prium.github.io/phoenix/v1.18.0/modules/utilities/overflow.html">Overflow</a><a
                                                class="dropdown-link"
                                                href="https://prium.github.io/phoenix/v1.18.0/modules/utilities/position.html">Position</a><a
                                                class="dropdown-link"
                                                href="https://prium.github.io/phoenix/v1.18.0/modules/utilities/shadows.html">Shadows</a><a
                                                class="dropdown-link"
                                                href="https://prium.github.io/phoenix/v1.18.0/modules/utilities/sizing.html">Sizing</a><a
                                                class="dropdown-link"
                                                href="https://prium.github.io/phoenix/v1.18.0/modules/utilities/spacing.html">Spacing</a><a
                                                class="dropdown-link"
                                                href="https://prium.github.io/phoenix/v1.18.0/modules/utilities/typography.html">Typography</a><a
                                                class="dropdown-link"
                                                href="https://prium.github.io/phoenix/v1.18.0/modules/utilities/vertical-align.html">Vertical
                                                align</a><a class="dropdown-link"
                                                href="https://prium.github.io/phoenix/v1.18.0/modules/utilities/visibility.html">Visibility</a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </ul>
                    </li>
                    <li class="nav-item dropdown"><a class="nav-link dropdown-toggle lh-1" href="#!" role="button"
                            data-bs-toggle="dropdown" data-bs-auto-close="outside" aria-haspopup="true"
                            aria-expanded="false"><span
                                class="uil fs-8 me-2 uil-document-layout-right"></span>Documentation</a>
                        <ul class="dropdown-menu navbar-dropdown-caret">
                            <li><a class="dropdown-item"
                                    href="https://prium.github.io/phoenix/v1.18.0/documentation/getting-started.html">
                                    <div class="dropdown-item-wrapper"><span class="me-2 uil"
                                            data-feather="life-buoy"></span>Getting started</div>
                                </a></li>
                            <li class="dropdown dropdown-inside"><a class="dropdown-item dropdown-toggle"
                                    id="customization" href="#" data-bs-toggle="dropdown" data-bs-auto-close="outside">
                                    <div class="dropdown-item-wrapper"><span
                                            class="uil fs-8 uil-angle-right lh-1 dropdown-indicator-icon"></span><span><span
                                                class="me-2 uil" data-feather="settings"></span>Customization</span>
                                    </div>
                                </a>
                                <ul class="dropdown-menu">
                                    <li><a class="dropdown-item"
                                            href="https://prium.github.io/phoenix/v1.18.0/documentation/customization/configuration.html">
                                            <div class="dropdown-item-wrapper"><span
                                                    class="me-2 uil"></span>Configuration</div>
                                        </a></li>
                                    <li><a class="dropdown-item"
                                            href="https://prium.github.io/phoenix/v1.18.0/documentation/customization/styling.html">
                                            <div class="dropdown-item-wrapper"><span class="me-2 uil"></span>Styling
                                            </div>
                                        </a></li>
                                    <li><a class="dropdown-item"
                                            href="https://prium.github.io/phoenix/v1.18.0/documentation/customization/color.html">
                                            <div class="dropdown-item-wrapper"><span class="me-2 uil"></span>Color</div>
                                        </a></li>
                                    <li><a class="dropdown-item"
                                            href="https://prium.github.io/phoenix/v1.18.0/documentation/customization/dark-mode.html">
                                            <div class="dropdown-item-wrapper"><span class="me-2 uil"></span>Dark mode
                                            </div>
                                        </a></li>
                                    <li><a class="dropdown-item"
                                            href="https://prium.github.io/phoenix/v1.18.0/documentation/customization/plugin.html">
                                            <div class="dropdown-item-wrapper"><span class="me-2 uil"></span>Plugin
                                            </div>
                                        </a></li>
                                </ul>
                            </li>
                            <li class="dropdown dropdown-inside"><a class="dropdown-item dropdown-toggle"
                                    id="layouts-doc" href="#" data-bs-toggle="dropdown" data-bs-auto-close="outside">
                                    <div class="dropdown-item-wrapper"><span
                                            class="uil fs-8 uil-angle-right lh-1 dropdown-indicator-icon"></span><span><span
                                                class="me-2 uil" data-feather="table"></span>Layouts doc</span></div>
                                </a>
                                <ul class="dropdown-menu">
                                    <li><a class="dropdown-item"
                                            href="https://prium.github.io/phoenix/v1.18.0/documentation/layouts/vertical-navbar.html">
                                            <div class="dropdown-item-wrapper"><span class="me-2 uil"></span>Vertical
                                                navbar</div>
                                        </a></li>
                                    <li><a class="dropdown-item"
                                            href="https://prium.github.io/phoenix/v1.18.0/documentation/layouts/horizontal-navbar.html">
                                            <div class="dropdown-item-wrapper"><span class="me-2 uil"></span>Horizontal
                                                navbar</div>
                                        </a></li>
                                    <li><a class="dropdown-item"
                                            href="https://prium.github.io/phoenix/v1.18.0/documentation/layouts/combo-navbar.html">
                                            <div class="dropdown-item-wrapper"><span class="me-2 uil"></span>Combo
                                                navbar</div>
                                        </a></li>
                                    <li><a class="dropdown-item"
                                            href="https://prium.github.io/phoenix/v1.18.0/documentation/layouts/dual-nav.html">
                                            <div class="dropdown-item-wrapper"><span class="me-2 uil"></span>Dual nav
                                            </div>
                                        </a></li>
                                </ul>
                            </li>
                            <li><a class="dropdown-item"
                                    href="https://prium.github.io/phoenix/v1.18.0/documentation/gulp.html">
                                    <div class="dropdown-item-wrapper"><span
                                            class="me-2 fa-brands fa-gulp ms-1 me-1 fa-lg"></span>Gulp</div>
                                </a></li>
                            <li><a class="dropdown-item"
                                    href="https://prium.github.io/phoenix/v1.18.0/documentation/design-file.html">
                                    <div class="dropdown-item-wrapper"><span class="me-2 uil"
                                            data-feather="figma"></span>Design file</div>
                                </a></li>
                            <li><a class="dropdown-item" href="https://prium.github.io/phoenix/v1.18.0/changelog.html">
                                    <div class="dropdown-item-wrapper"><span class="me-2 uil"
                                            data-feather="git-merge"></span>Changelog</div>
                                </a></li>
                            <li><a class="dropdown-item" href="https://prium.github.io/phoenix/v1.18.0/showcase.html">
                                    <div class="dropdown-item-wrapper"><span class="me-2 uil"
                                            data-feather="monitor"></span>Showcase</div>
                                </a></li>
                        </ul>
                    </li>
                </ul>
            </div>
            <ul class="navbar-nav navbar-nav-icons flex-row">
                <li class="nav-item">
                    <div class="theme-control-toggle fa-icon-wait px-2"><input
                            class="form-check-input ms-0 theme-control-toggle-input" type="checkbox"
                            data-theme-control="phoenixTheme" value="dark" id="themeControlToggle" /><label
                            class="mb-0 theme-control-toggle-label theme-control-toggle-light" for="themeControlToggle"
                            data-bs-toggle="tooltip" data-bs-placement="left" data-bs-title="Switch theme"
                            style="height:32px;width:32px;"><span class="icon" data-feather="moon"></span></label><label
                            class="mb-0 theme-control-toggle-label theme-control-toggle-dark" for="themeControlToggle"
                            data-bs-toggle="tooltip" data-bs-placement="left" data-bs-title="Switch theme"
                            style="height:32px;width:32px;"><span class="icon" data-feather="sun"></span></label></div>
                </li>
                <li class="nav-item"><a class="nav-link" href="#" data-bs-toggle="modal"
                        data-bs-target="#searchBoxModal"><span data-feather="search"
                            style="height:19px;width:19px;margin-bottom: 2px;"></span></a></li>
                <li class="nav-item dropdown">
                    <a class="nav-link" href="#" style="min-width: 2.25rem" role="button" data-bs-toggle="dropdown"
                        aria-haspopup="true" aria-expanded="false" data-bs-auto-close="outside"><span class="d-block"
                            style="height:20px;width:20px;"><span data-feather="bell"
                                style="height:20px;width:20px;"></span></span></a>
                    <div class="dropdown-menu dropdown-menu-end notification-dropdown-menu py-0 shadow border navbar-dropdown-caret"
                        id="navbarDropdownNotfication" aria-labelledby="navbarDropdownNotfication">
                        <div class="card position-relative border-0">
                            <div class="card-header p-2">
                                <div class="d-flex justify-content-between">
                                    <h5 class="text-body-emphasis mb-0">Notifications</h5><button
                                        class="btn btn-link p-0 fs-9 fw-normal" type="button">Mark all as read</button>
                                </div>
                            </div>
                            <div class="card-body p-0">
                                <div class="scrollbar-overlay" style="height: 27rem;">
                                    <div
                                        class="px-2 px-sm-3 py-3 notification-card position-relative read border-bottom">
                                        <div
                                            class="d-flex align-items-center justify-content-between position-relative">
                                            <div class="d-flex">
                                                <div class="avatar avatar-m status-online me-3"><img
                                                        class="rounded-circle"
                                                        src="https://prium.github.io/phoenix/v1.18.0/assets/img/team/40x40/30.webp"
                                                        alt="" /></div>
                                                <div class="flex-1 me-sm-3">
                                                    <h4 class="fs-9 text-body-emphasis">Jessie Samson</h4>
                                                    <p class="fs-9 text-body-highlight mb-2 mb-sm-3 fw-normal"><span
                                                            class='me-1 fs-10'>💬</span>Mentioned you in a comment.<span
                                                            class="ms-2 text-body-quaternary text-opacity-75 fw-bold fs-10">10m</span>
                                                    </p>
                                                    <p class="text-body-secondary fs-9 mb-0"><span
                                                            class="me-1 fas fa-clock"></span><span class="fw-bold">10:41
                                                            AM </span>August 7,2021</p>
                                                </div>
                                            </div>
                                            <div class="dropdown notification-dropdown"><button
                                                    class="btn fs-10 btn-sm dropdown-toggle dropdown-caret-none transition-none"
                                                    type="button" data-bs-toggle="dropdown" data-boundary="window"
                                                    aria-haspopup="true" aria-expanded="false"
                                                    data-bs-reference="parent"><span
                                                        class="fas fa-ellipsis-h fs-10 text-body"></span></button>
                                                <div class="dropdown-menu py-2"><a class="dropdown-item" href="#!">Mark
                                                        as unread</a></div>
                                            </div>
                                        </div>
                                    </div>
                                    <div
                                        class="px-2 px-sm-3 py-3 notification-card position-relative unread border-bottom">
                                        <div
                                            class="d-flex align-items-center justify-content-between position-relative">
                                            <div class="d-flex">
                                                <div class="avatar avatar-m status-online me-3">
                                                    <div class="avatar-name rounded-circle"><span>J</span></div>
                                                </div>
                                                <div class="flex-1 me-sm-3">
                                                    <h4 class="fs-9 text-body-emphasis">Jane Foster</h4>
                                                    <p class="fs-9 text-body-highlight mb-2 mb-sm-3 fw-normal"><span
                                                            class='me-1 fs-10'>📅</span>Created an event.<span
                                                            class="ms-2 text-body-quaternary text-opacity-75 fw-bold fs-10">20m</span>
                                                    </p>
                                                    <p class="text-body-secondary fs-9 mb-0"><span
                                                            class="me-1 fas fa-clock"></span><span class="fw-bold">10:20
                                                            AM </span>August 7,2021</p>
                                                </div>
                                            </div>
                                            <div class="dropdown notification-dropdown"><button
                                                    class="btn fs-10 btn-sm dropdown-toggle dropdown-caret-none transition-none"
                                                    type="button" data-bs-toggle="dropdown" data-boundary="window"
                                                    aria-haspopup="true" aria-expanded="false"
                                                    data-bs-reference="parent"><span
                                                        class="fas fa-ellipsis-h fs-10 text-body"></span></button>
                                                <div class="dropdown-menu py-2"><a class="dropdown-item" href="#!">Mark
                                                        as unread</a></div>
                                            </div>
                                        </div>
                                    </div>
                                    <div
                                        class="px-2 px-sm-3 py-3 notification-card position-relative unread border-bottom">
                                        <div
                                            class="d-flex align-items-center justify-content-between position-relative">
                                            <div class="d-flex">
                                                <div class="avatar avatar-m status-online me-3"><img
                                                        class="rounded-circle avatar-placeholder"
                                                        src="https://prium.github.io/phoenix/v1.18.0/assets/img/team/40x40/avatar.webp"
                                                        alt="" /></div>
                                                <div class="flex-1 me-sm-3">
                                                    <h4 class="fs-9 text-body-emphasis">Jessie Samson</h4>
                                                    <p class="fs-9 text-body-highlight mb-2 mb-sm-3 fw-normal"><span
                                                            class='me-1 fs-10'>👍</span>Liked your comment.<span
                                                            class="ms-2 text-body-quaternary text-opacity-75 fw-bold fs-10">1h</span>
                                                    </p>
                                                    <p class="text-body-secondary fs-9 mb-0"><span
                                                            class="me-1 fas fa-clock"></span><span class="fw-bold">9:30
                                                            AM </span>August 7,2021</p>
                                                </div>
                                            </div>
                                            <div class="dropdown notification-dropdown"><button
                                                    class="btn fs-10 btn-sm dropdown-toggle dropdown-caret-none transition-none"
                                                    type="button" data-bs-toggle="dropdown" data-boundary="window"
                                                    aria-haspopup="true" aria-expanded="false"
                                                    data-bs-reference="parent"><span
                                                        class="fas fa-ellipsis-h fs-10 text-body"></span></button>
                                                <div class="dropdown-menu py-2"><a class="dropdown-item" href="#!">Mark
                                                        as unread</a></div>
                                            </div>
                                        </div>
                                    </div>
                                    <div
                                        class="px-2 px-sm-3 py-3 notification-card position-relative unread border-bottom">
                                        <div
                                            class="d-flex align-items-center justify-content-between position-relative">
                                            <div class="d-flex">
                                                <div class="avatar avatar-m status-online me-3"><img
                                                        class="rounded-circle"
                                                        src="https://prium.github.io/phoenix/v1.18.0/assets/img/team/40x40/57.webp"
                                                        alt="" /></div>
                                                <div class="flex-1 me-sm-3">
                                                    <h4 class="fs-9 text-body-emphasis">Kiera Anderson</h4>
                                                    <p class="fs-9 text-body-highlight mb-2 mb-sm-3 fw-normal"><span
                                                            class='me-1 fs-10'>💬</span>Mentioned you in a comment.<span
                                                            class="ms-2 text-body-quaternary text-opacity-75 fw-bold fs-10"></span>
                                                    </p>
                                                    <p class="text-body-secondary fs-9 mb-0"><span
                                                            class="me-1 fas fa-clock"></span><span class="fw-bold">9:11
                                                            AM </span>August 7,2021</p>
                                                </div>
                                            </div>
                                            <div class="dropdown notification-dropdown"><button
                                                    class="btn fs-10 btn-sm dropdown-toggle dropdown-caret-none transition-none"
                                                    type="button" data-bs-toggle="dropdown" data-boundary="window"
                                                    aria-haspopup="true" aria-expanded="false"
                                                    data-bs-reference="parent"><span
                                                        class="fas fa-ellipsis-h fs-10 text-body"></span></button>
                                                <div class="dropdown-menu py-2"><a class="dropdown-item" href="#!">Mark
                                                        as unread</a></div>
                                            </div>
                                        </div>
                                    </div>
                                    <div
                                        class="px-2 px-sm-3 py-3 notification-card position-relative unread border-bottom">
                                        <div
                                            class="d-flex align-items-center justify-content-between position-relative">
                                            <div class="d-flex">
                                                <div class="avatar avatar-m status-online me-3"><img
                                                        class="rounded-circle"
                                                        src="https://prium.github.io/phoenix/v1.18.0/assets/img/team/40x40/59.webp"
                                                        alt="" /></div>
                                                <div class="flex-1 me-sm-3">
                                                    <h4 class="fs-9 text-body-emphasis">Herman Carter</h4>
                                                    <p class="fs-9 text-body-highlight mb-2 mb-sm-3 fw-normal"><span
                                                            class='me-1 fs-10'>👤</span>Tagged you in a comment.<span
                                                            class="ms-2 text-body-quaternary text-opacity-75 fw-bold fs-10"></span>
                                                    </p>
                                                    <p class="text-body-secondary fs-9 mb-0"><span
                                                            class="me-1 fas fa-clock"></span><span class="fw-bold">10:58
                                                            PM </span>August 7,2021</p>
                                                </div>
                                            </div>
                                            <div class="dropdown notification-dropdown"><button
                                                    class="btn fs-10 btn-sm dropdown-toggle dropdown-caret-none transition-none"
                                                    type="button" data-bs-toggle="dropdown" data-boundary="window"
                                                    aria-haspopup="true" aria-expanded="false"
                                                    data-bs-reference="parent"><span
                                                        class="fas fa-ellipsis-h fs-10 text-body"></span></button>
                                                <div class="dropdown-menu py-2"><a class="dropdown-item" href="#!">Mark
                                                        as unread</a></div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="px-2 px-sm-3 py-3 notification-card position-relative read ">
                                        <div
                                            class="d-flex align-items-center justify-content-between position-relative">
                                            <div class="d-flex">
                                                <div class="avatar avatar-m status-online me-3"><img
                                                        class="rounded-circle"
                                                        src="https://prium.github.io/phoenix/v1.18.0/assets/img/team/40x40/58.webp"
                                                        alt="" /></div>
                                                <div class="flex-1 me-sm-3">
                                                    <h4 class="fs-9 text-body-emphasis">Benjamin Button</h4>
                                                    <p class="fs-9 text-body-highlight mb-2 mb-sm-3 fw-normal"><span
                                                            class='me-1 fs-10'>👍</span>Liked your comment.<span
                                                            class="ms-2 text-body-quaternary text-opacity-75 fw-bold fs-10"></span>
                                                    </p>
                                                    <p class="text-body-secondary fs-9 mb-0"><span
                                                            class="me-1 fas fa-clock"></span><span class="fw-bold">10:18
                                                            AM </span>August 7,2021</p>
                                                </div>
                                            </div>
                                            <div class="dropdown notification-dropdown"><button
                                                    class="btn fs-10 btn-sm dropdown-toggle dropdown-caret-none transition-none"
                                                    type="button" data-bs-toggle="dropdown" data-boundary="window"
                                                    aria-haspopup="true" aria-expanded="false"
                                                    data-bs-reference="parent"><span
                                                        class="fas fa-ellipsis-h fs-10 text-body"></span></button>
                                                <div class="dropdown-menu py-2"><a class="dropdown-item" href="#!">Mark
                                                        as unread</a></div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="card-footer p-0 border-top border-translucent border-0">
                                <div class="my-2 text-center fw-bold fs-10 text-body-tertiary text-opactity-85"><a
                                        class="fw-bolder"
                                        href="https://prium.github.io/phoenix/v1.18.0/pages/notifications.html">Notification
                                        history</a></div>
                            </div>
                        </div>
                    </div>
                </li>
                <li class="nav-item dropdown">
                    <a class="nav-link" id="navbarDropdownNindeDots" href="#" role="button" data-bs-toggle="dropdown"
                        aria-haspopup="true" data-bs-auto-close="outside" aria-expanded="false"><svg width="16"
                            height="16" viewbox="0 0 16 16" fill="none" xmlns="http://www.w3.org/2000/svg">
                            <circle cx="2" cy="2" r="2" fill="currentColor"></circle>
                            <circle cx="2" cy="8" r="2" fill="currentColor"></circle>
                            <circle cx="2" cy="14" r="2" fill="currentColor"></circle>
                            <circle cx="8" cy="8" r="2" fill="currentColor"></circle>
                            <circle cx="8" cy="14" r="2" fill="currentColor"></circle>
                            <circle cx="14" cy="8" r="2" fill="currentColor"></circle>
                            <circle cx="14" cy="14" r="2" fill="currentColor"></circle>
                            <circle cx="8" cy="2" r="2" fill="currentColor"></circle>
                            <circle cx="14" cy="2" r="2" fill="currentColor"></circle>
                        </svg></a>
                    <div class="dropdown-menu dropdown-menu-end navbar-dropdown-caret py-0 dropdown-nine-dots shadow border"
                        aria-labelledby="navbarDropdownNindeDots">
                        <div class="card bg-body-emphasis position-relative border-0">
                            <div class="card-body pt-3 px-3 pb-0 overflow-auto scrollbar" style="height: 20rem;">
                                <div class="row text-center align-items-center gx-0 gy-0">
                                    <div class="col-4"><a
                                            class="d-block bg-body-secondary-hover p-2 rounded-3 text-center text-decoration-none mb-3"
                                            href="#!"><img
                                                src="https://prium.github.io/phoenix/v1.18.0/assets/img/nav-icons/behance.webp"
                                                alt="" width="30" />
                                            <p class="mb-0 text-body-emphasis text-truncate fs-10 mt-1 pt-1">Behance</p>
                                        </a></div>
                                    <div class="col-4"><a
                                            class="d-block bg-body-secondary-hover p-2 rounded-3 text-center text-decoration-none mb-3"
                                            href="#!"><img
                                                src="https://prium.github.io/phoenix/v1.18.0/assets/img/nav-icons/google-cloud.webp"
                                                alt="" width="30" />
                                            <p class="mb-0 text-body-emphasis text-truncate fs-10 mt-1 pt-1">Cloud</p>
                                        </a></div>
                                    <div class="col-4"><a
                                            class="d-block bg-body-secondary-hover p-2 rounded-3 text-center text-decoration-none mb-3"
                                            href="#!"><img
                                                src="https://prium.github.io/phoenix/v1.18.0/assets/img/nav-icons/slack.webp"
                                                alt="" width="30" />
                                            <p class="mb-0 text-body-emphasis text-truncate fs-10 mt-1 pt-1">Slack</p>
                                        </a></div>
                                    <div class="col-4"><a
                                            class="d-block bg-body-secondary-hover p-2 rounded-3 text-center text-decoration-none mb-3"
                                            href="#!"><img
                                                src="https://prium.github.io/phoenix/v1.18.0/assets/img/nav-icons/gitlab.webp"
                                                alt="" width="30" />
                                            <p class="mb-0 text-body-emphasis text-truncate fs-10 mt-1 pt-1">Gitlab</p>
                                        </a></div>
                                    <div class="col-4"><a
                                            class="d-block bg-body-secondary-hover p-2 rounded-3 text-center text-decoration-none mb-3"
                                            href="#!"><img
                                                src="https://prium.github.io/phoenix/v1.18.0/assets/img/nav-icons/bitbucket.webp"
                                                alt="" width="30" />
                                            <p class="mb-0 text-body-emphasis text-truncate fs-10 mt-1 pt-1">BitBucket
                                            </p>
                                        </a></div>
                                    <div class="col-4"><a
                                            class="d-block bg-body-secondary-hover p-2 rounded-3 text-center text-decoration-none mb-3"
                                            href="#!"><img
                                                src="https://prium.github.io/phoenix/v1.18.0/assets/img/nav-icons/google-drive.webp"
                                                alt="" width="30" />
                                            <p class="mb-0 text-body-emphasis text-truncate fs-10 mt-1 pt-1">Drive</p>
                                        </a></div>
                                    <div class="col-4"><a
                                            class="d-block bg-body-secondary-hover p-2 rounded-3 text-center text-decoration-none mb-3"
                                            href="#!"><img
                                                src="https://prium.github.io/phoenix/v1.18.0/assets/img/nav-icons/trello.webp"
                                                alt="" width="30" />
                                            <p class="mb-0 text-body-emphasis text-truncate fs-10 mt-1 pt-1">Trello</p>
                                        </a></div>
                                    <div class="col-4"><a
                                            class="d-block bg-body-secondary-hover p-2 rounded-3 text-center text-decoration-none mb-3"
                                            href="#!"><img
                                                src="https://prium.github.io/phoenix/v1.18.0/assets/img/nav-icons/figma.webp"
                                                alt="" width="20" />
                                            <p class="mb-0 text-body-emphasis text-truncate fs-10 mt-1 pt-1">Figma</p>
                                        </a></div>
                                    <div class="col-4"><a
                                            class="d-block bg-body-secondary-hover p-2 rounded-3 text-center text-decoration-none mb-3"
                                            href="#!"><img
                                                src="https://prium.github.io/phoenix/v1.18.0/assets/img/nav-icons/twitter.webp"
                                                alt="" width="30" />
                                            <p class="mb-0 text-body-emphasis text-truncate fs-10 mt-1 pt-1">Twitter</p>
                                        </a></div>
                                    <div class="col-4"><a
                                            class="d-block bg-body-secondary-hover p-2 rounded-3 text-center text-decoration-none mb-3"
                                            href="#!"><img
                                                src="https://prium.github.io/phoenix/v1.18.0/assets/img/nav-icons/pinterest.webp"
                                                alt="" width="30" />
                                            <p class="mb-0 text-body-emphasis text-truncate fs-10 mt-1 pt-1">Pinterest
                                            </p>
                                        </a></div>
                                    <div class="col-4"><a
                                            class="d-block bg-body-secondary-hover p-2 rounded-3 text-center text-decoration-none mb-3"
                                            href="#!"><img
                                                src="https://prium.github.io/phoenix/v1.18.0/assets/img/nav-icons/ln.webp"
                                                alt="" width="30" />
                                            <p class="mb-0 text-body-emphasis text-truncate fs-10 mt-1 pt-1">Linkedin
                                            </p>
                                        </a></div>
                                    <div class="col-4"><a
                                            class="d-block bg-body-secondary-hover p-2 rounded-3 text-center text-decoration-none mb-3"
                                            href="#!"><img
                                                src="https://prium.github.io/phoenix/v1.18.0/assets/img/nav-icons/google-maps.webp"
                                                alt="" width="30" />
                                            <p class="mb-0 text-body-emphasis text-truncate fs-10 mt-1 pt-1">Maps</p>
                                        </a></div>
                                    <div class="col-4"><a
                                            class="d-block bg-body-secondary-hover p-2 rounded-3 text-center text-decoration-none mb-3"
                                            href="#!"><img
                                                src="https://prium.github.io/phoenix/v1.18.0/assets/img/nav-icons/google-photos.webp"
                                                alt="" width="30" />
                                            <p class="mb-0 text-body-emphasis text-truncate fs-10 mt-1 pt-1">Photos</p>
                                        </a></div>
                                    <div class="col-4"><a
                                            class="d-block bg-body-secondary-hover p-2 rounded-3 text-center text-decoration-none mb-3"
                                            href="#!"><img
                                                src="https://prium.github.io/phoenix/v1.18.0/assets/img/nav-icons/spotify.webp"
                                                alt="" width="30" />
                                            <p class="mb-0 text-body-emphasis text-truncate fs-10 mt-1 pt-1">Spotify</p>
                                        </a></div>
                                </div>
                            </div>
                        </div>
                    </div>
                </li>
                <li class="nav-item dropdown"><a class="nav-link lh-1 pe-0" id="navbarDropdownUser" href="#!"
                        role="button" data-bs-toggle="dropdown" data-bs-auto-close="outside" aria-haspopup="true"
                        aria-expanded="false">
                        <div class="avatar avatar-l ">
                            <img class="rounded-circle "
                                src="https://prium.github.io/phoenix/v1.18.0/assets/img/team/40x40/57.webp" alt="" />
                        </div>
                    </a>
                    <div class="dropdown-menu dropdown-menu-end navbar-dropdown-caret py-0 dropdown-profile shadow border"
                        aria-labelledby="navbarDropdownUser">
                        <div class="card position-relative border-0">
                            <div class="card-body p-0">
                                <div class="text-center pt-4 pb-3">
                                    <div class="avatar avatar-xl ">
                                        <img class="rounded-circle "
                                            src="https://prium.github.io/phoenix/v1.18.0/assets/img/team/72x72/57.webp"
                                            alt="" />
                                    </div>
                                    <h6 class="mt-2 text-body-emphasis">Jerry Seinfield</h6>
                                </div>
                                <div class="mb-3 mx-3"><input class="form-control form-control-sm"
                                        id="statusUpdateInput" type="text" placeholder="Update your status" /></div>
                            </div>
                            <div class="overflow-auto scrollbar" style="height: 10rem;">
                                <ul class="nav d-flex flex-column mb-2 pb-1">
                                    <li class="nav-item"><a class="nav-link px-3 d-block" href="#!"> <span
                                                class="me-2 text-body align-bottom"
                                                data-feather="user"></span><span>Profile</span></a></li>
                                    <li class="nav-item"><a class="nav-link px-3 d-block" href="#!"><span
                                                class="me-2 text-body align-bottom"
                                                data-feather="pie-chart"></span>Dashboard</a></li>
                                    <li class="nav-item"><a class="nav-link px-3 d-block" href="#!"> <span
                                                class="me-2 text-body align-bottom" data-feather="lock"></span>Posts
                                            &amp; Activity</a></li>
                                    <li class="nav-item"><a class="nav-link px-3 d-block" href="#!"> <span
                                                class="me-2 text-body align-bottom"
                                                data-feather="settings"></span>Settings &amp; Privacy </a></li>
                                    <li class="nav-item"><a class="nav-link px-3 d-block" href="#!"> <span
                                                class="me-2 text-body align-bottom"
                                                data-feather="help-circle"></span>Help Center</a></li>
                                    <li class="nav-item"><a class="nav-link px-3 d-block" href="#!"> <span
                                                class="me-2 text-body align-bottom"
                                                data-feather="globe"></span>Language</a></li>
                                </ul>
                            </div>
                            <div class="card-footer p-0 border-top border-translucent">
                                <ul class="nav d-flex flex-column my-3">
                                    <li class="nav-item"><a class="nav-link px-3 d-block" href="#!"> <span
                                                class="me-2 text-body align-bottom" data-feather="user-plus"></span>Add
                                            another account</a></li>
                                </ul>
                                <hr />
                                <div class="px-3"> <a class="btn btn-phoenix-secondary d-flex flex-center w-100"
                                        href="#!"> <span class="me-2" data-feather="log-out"> </span>Sign out</a></div>
                                <div class="my-2 text-center fw-bold fs-10 text-body-quaternary"><a
                                        class="text-body-quaternary me-1" href="#!">Privacy policy</a>&bull;<a
                                        class="text-body-quaternary mx-1" href="#!">Terms</a>&bull;<a
                                        class="text-body-quaternary ms-1" href="#!">Cookies</a></div>
                            </div>
                        </div>
                    </div>
                </li>
            </ul>
        </nav>
        <nav class="navbar navbar-top fixed-top navbar-slim justify-content-between navbar-expand-lg"
            id="navbarComboSlim" data-navbar-top="combo" data-move-target="#navbarVerticalNav" style="display:none;">
            <div class="navbar-logo">
                <button class="btn navbar-toggler navbar-toggler-humburger-icon hover-bg-transparent" type="button"
                    data-bs-toggle="collapse" data-bs-target="#navbarVerticalCollapse"
                    aria-controls="navbarVerticalCollapse" aria-expanded="false" aria-label="Toggle Navigation"><span
                        class="navbar-toggle-icon"><span class="toggle-line"></span></span></button>
                <a class="navbar-brand navbar-brand" href="https://prium.github.io/phoenix/v1.18.0/index.html">phoenix
                    <span class="text-body-highlight d-none d-sm-inline">slim</span></a>
            </div>
            <div class="collapse navbar-collapse navbar-top-collapse order-1 order-lg-0 justify-content-center"
                id="navbarTopCollapse">
                <ul class="navbar-nav navbar-nav-top" data-dropdown-on-hover="data-dropdown-on-hover">
                    <li class="nav-item dropdown"><a class="nav-link dropdown-toggle lh-1" href="#!" role="button"
                            data-bs-toggle="dropdown" data-bs-auto-close="outside" aria-haspopup="true"
                            aria-expanded="false"><span class="uil fs-8 me-2 uil-chart-pie"></span>Home</a>
                        <ul class="dropdown-menu navbar-dropdown-caret">
                            <li><a class="dropdown-item" href="https://prium.github.io/phoenix/v1.18.0/index.html">
                                    <div class="dropdown-item-wrapper"><span class="me-2 uil"
                                            data-feather="shopping-cart"></span>E commerce</div>
                                </a></li>
                            <li><a class="dropdown-item" href="project-management.html">
                                    <div class="dropdown-item-wrapper"><span class="me-2 uil"
                                            data-feather="clipboard"></span>Project management</div>
                                </a></li>
                            <li><a class="dropdown-item" href="crm.html">
                                    <div class="dropdown-item-wrapper"><span class="me-2 uil"
                                            data-feather="phone"></span>CRM</div>
                                </a></li>
                            <li><a class="dropdown-item active" href="travel-agency.html">
                                    <div class="dropdown-item-wrapper"><span class="me-2 uil"
                                            data-feather="briefcase"></span>Travel agency</div>
                                </a></li>
                            <li><a class="dropdown-item"
                                    href="https://prium.github.io/phoenix/v1.18.0/apps/social/feed.html">
                                    <div class="dropdown-item-wrapper"><span class="me-2 uil"
                                            data-feather="share-2"></span>Social feed</div>
                                </a></li>
                        </ul>
                    </li>
                    <li class="nav-item dropdown"><a class="nav-link dropdown-toggle lh-1" href="#!" role="button"
                            data-bs-toggle="dropdown" data-bs-auto-close="outside" aria-haspopup="true"
                            aria-expanded="false"><span class="uil fs-8 me-2 uil-cube"></span>Apps</a>
                        <ul class="dropdown-menu navbar-dropdown-caret">
                            <li class="dropdown"><a class="dropdown-item dropdown-toggle" id="e-commerce" href="#"
                                    data-bs-toggle="dropdown" data-bs-auto-close="outside">
                                    <div class="dropdown-item-wrapper"><span
                                            class="uil fs-8 uil-angle-right lh-1 dropdown-indicator-icon"></span><span><span
                                                class="me-2 uil" data-feather="shopping-cart"></span>E commerce</span>
                                    </div>
                                </a>
                                <ul class="dropdown-menu">
                                    <li class="dropdown"><a class="dropdown-item dropdown-toggle" id="admin" href="#"
                                            data-bs-toggle="dropdown" data-bs-auto-close="outside">
                                            <div class="dropdown-item-wrapper"><span
                                                    class="uil fs-8 uil-angle-right lh-1 dropdown-indicator-icon"></span><span><span
                                                        class="me-2 uil"></span>Admin</span></div>
                                        </a>
                                        <ul class="dropdown-menu">
                                            <li><a class="dropdown-item"
                                                    href="https://prium.github.io/phoenix/v1.18.0/apps/e-commerce/admin/add-product.html">
                                                    <div class="dropdown-item-wrapper"><span class="me-2 uil"></span>Add
                                                        product</div>
                                                </a></li>
                                            <li><a class="dropdown-item"
                                                    href="https://prium.github.io/phoenix/v1.18.0/apps/e-commerce/admin/products.html">
                                                    <div class="dropdown-item-wrapper"><span
                                                            class="me-2 uil"></span>Products</div>
                                                </a></li>
                                            <li><a class="dropdown-item"
                                                    href="https://prium.github.io/phoenix/v1.18.0/apps/e-commerce/admin/customers.html">
                                                    <div class="dropdown-item-wrapper"><span
                                                            class="me-2 uil"></span>Customers</div>
                                                </a></li>
                                            <li><a class="dropdown-item"
                                                    href="https://prium.github.io/phoenix/v1.18.0/apps/e-commerce/admin/customer-details.html">
                                                    <div class="dropdown-item-wrapper"><span
                                                            class="me-2 uil"></span>Customer details</div>
                                                </a></li>
                                            <li><a class="dropdown-item"
                                                    href="https://prium.github.io/phoenix/v1.18.0/apps/e-commerce/admin/orders.html">
                                                    <div class="dropdown-item-wrapper"><span
                                                            class="me-2 uil"></span>Orders</div>
                                                </a></li>
                                            <li><a class="dropdown-item"
                                                    href="https://prium.github.io/phoenix/v1.18.0/apps/e-commerce/admin/order-details.html">
                                                    <div class="dropdown-item-wrapper"><span
                                                            class="me-2 uil"></span>Order details</div>
                                                </a></li>
                                            <li><a class="dropdown-item"
                                                    href="https://prium.github.io/phoenix/v1.18.0/apps/e-commerce/admin/refund.html">
                                                    <div class="dropdown-item-wrapper"><span
                                                            class="me-2 uil"></span>Refund</div>
                                                </a></li>
                                        </ul>
                                    </li>
                                    <li class="dropdown"><a class="dropdown-item dropdown-toggle" id="customer" href="#"
                                            data-bs-toggle="dropdown" data-bs-auto-close="outside">
                                            <div class="dropdown-item-wrapper"><span
                                                    class="uil fs-8 uil-angle-right lh-1 dropdown-indicator-icon"></span><span><span
                                                        class="me-2 uil"></span>Customer</span></div>
                                        </a>
                                        <ul class="dropdown-menu">
                                            <li><a class="dropdown-item"
                                                    href="https://prium.github.io/phoenix/v1.18.0/apps/e-commerce/landing/homepage.html">
                                                    <div class="dropdown-item-wrapper"><span
                                                            class="me-2 uil"></span>Homepage</div>
                                                </a></li>
                                            <li><a class="dropdown-item"
                                                    href="https://prium.github.io/phoenix/v1.18.0/apps/e-commerce/landing/product-details.html">
                                                    <div class="dropdown-item-wrapper"><span
                                                            class="me-2 uil"></span>Product details</div>
                                                </a></li>
                                            <li><a class="dropdown-item"
                                                    href="https://prium.github.io/phoenix/v1.18.0/apps/e-commerce/landing/products-filter.html">
                                                    <div class="dropdown-item-wrapper"><span
                                                            class="me-2 uil"></span>Products filter</div>
                                                </a></li>
                                            <li><a class="dropdown-item"
                                                    href="https://prium.github.io/phoenix/v1.18.0/apps/e-commerce/landing/cart.html">
                                                    <div class="dropdown-item-wrapper"><span
                                                            class="me-2 uil"></span>Cart</div>
                                                </a></li>
                                            <li><a class="dropdown-item"
                                                    href="https://prium.github.io/phoenix/v1.18.0/apps/e-commerce/landing/checkout.html">
                                                    <div class="dropdown-item-wrapper"><span
                                                            class="me-2 uil"></span>Checkout</div>
                                                </a></li>
                                            <li><a class="dropdown-item"
                                                    href="https://prium.github.io/phoenix/v1.18.0/apps/e-commerce/landing/shipping-info.html">
                                                    <div class="dropdown-item-wrapper"><span
                                                            class="me-2 uil"></span>Shipping info</div>
                                                </a></li>
                                            <li><a class="dropdown-item"
                                                    href="https://prium.github.io/phoenix/v1.18.0/apps/e-commerce/landing/profile.html">
                                                    <div class="dropdown-item-wrapper"><span
                                                            class="me-2 uil"></span>Profile</div>
                                                </a></li>
                                            <li><a class="dropdown-item"
                                                    href="https://prium.github.io/phoenix/v1.18.0/apps/e-commerce/landing/favourite-stores.html">
                                                    <div class="dropdown-item-wrapper"><span
                                                            class="me-2 uil"></span>Favourite stores</div>
                                                </a></li>
                                            <li><a class="dropdown-item"
                                                    href="https://prium.github.io/phoenix/v1.18.0/apps/e-commerce/landing/wishlist.html">
                                                    <div class="dropdown-item-wrapper"><span
                                                            class="me-2 uil"></span>Wishlist</div>
                                                </a></li>
                                            <li><a class="dropdown-item"
                                                    href="https://prium.github.io/phoenix/v1.18.0/apps/e-commerce/landing/order-tracking.html">
                                                    <div class="dropdown-item-wrapper"><span
                                                            class="me-2 uil"></span>Order tracking</div>
                                                </a></li>
                                            <li><a class="dropdown-item"
                                                    href="https://prium.github.io/phoenix/v1.18.0/apps/e-commerce/landing/invoice.html">
                                                    <div class="dropdown-item-wrapper"><span
                                                            class="me-2 uil"></span>Invoice</div>
                                                </a></li>
                                        </ul>
                                    </li>
                                </ul>
                            </li>
                            <li class="dropdown"><a class="dropdown-item dropdown-toggle" id="CRM" href="#"
                                    data-bs-toggle="dropdown" data-bs-auto-close="outside">
                                    <div class="dropdown-item-wrapper"><span
                                            class="uil fs-8 uil-angle-right lh-1 dropdown-indicator-icon"></span><span><span
                                                class="me-2 uil" data-feather="phone"></span>CRM</span></div>
                                </a>
                                <ul class="dropdown-menu">
                                    <li><a class="dropdown-item"
                                            href="https://prium.github.io/phoenix/v1.18.0/apps/crm/analytics.html">
                                            <div class="dropdown-item-wrapper"><span class="me-2 uil"></span>Analytics
                                            </div>
                                        </a></li>
                                    <li><a class="dropdown-item"
                                            href="https://prium.github.io/phoenix/v1.18.0/apps/crm/deals.html">
                                            <div class="dropdown-item-wrapper"><span class="me-2 uil"></span>Deals</div>
                                        </a></li>
                                    <li><a class="dropdown-item"
                                            href="https://prium.github.io/phoenix/v1.18.0/apps/crm/deal-details.html">
                                            <div class="dropdown-item-wrapper"><span class="me-2 uil"></span>Deal
                                                details</div>
                                        </a></li>
                                    <li><a class="dropdown-item"
                                            href="https://prium.github.io/phoenix/v1.18.0/apps/crm/leads.html">
                                            <div class="dropdown-item-wrapper"><span class="me-2 uil"></span>Leads</div>
                                        </a></li>
                                    <li><a class="dropdown-item"
                                            href="https://prium.github.io/phoenix/v1.18.0/apps/crm/lead-details.html">
                                            <div class="dropdown-item-wrapper"><span class="me-2 uil"></span>Lead
                                                details</div>
                                        </a></li>
                                    <li><a class="dropdown-item"
                                            href="https://prium.github.io/phoenix/v1.18.0/apps/crm/reports.html">
                                            <div class="dropdown-item-wrapper"><span class="me-2 uil"></span>Reports
                                            </div>
                                        </a></li>
                                    <li><a class="dropdown-item"
                                            href="https://prium.github.io/phoenix/v1.18.0/apps/crm/report-details.html">
                                            <div class="dropdown-item-wrapper"><span class="me-2 uil"></span>Report
                                                details</div>
                                        </a></li>
                                    <li><a class="dropdown-item"
                                            href="https://prium.github.io/phoenix/v1.18.0/apps/crm/add-contact.html">
                                            <div class="dropdown-item-wrapper"><span class="me-2 uil"></span>Add contact
                                            </div>
                                        </a></li>
                                </ul>
                            </li>
                            <li class="dropdown"><a class="dropdown-item dropdown-toggle" id="project-management"
                                    href="#" data-bs-toggle="dropdown" data-bs-auto-close="outside">
                                    <div class="dropdown-item-wrapper"><span
                                            class="uil fs-8 uil-angle-right lh-1 dropdown-indicator-icon"></span><span><span
                                                class="me-2 uil" data-feather="clipboard"></span>Project
                                            management</span></div>
                                </a>
                                <ul class="dropdown-menu">
                                    <li><a class="dropdown-item"
                                            href="https://prium.github.io/phoenix/v1.18.0/apps/project-management/create-new.html">
                                            <div class="dropdown-item-wrapper"><span class="me-2 uil"></span>Create new
                                            </div>
                                        </a></li>
                                    <li><a class="dropdown-item"
                                            href="https://prium.github.io/phoenix/v1.18.0/apps/project-management/project-list-view.html">
                                            <div class="dropdown-item-wrapper"><span class="me-2 uil"></span>Project
                                                list view</div>
                                        </a></li>
                                    <li><a class="dropdown-item"
                                            href="https://prium.github.io/phoenix/v1.18.0/apps/project-management/project-card-view.html">
                                            <div class="dropdown-item-wrapper"><span class="me-2 uil"></span>Project
                                                card view</div>
                                        </a></li>
                                    <li><a class="dropdown-item"
                                            href="https://prium.github.io/phoenix/v1.18.0/apps/project-management/project-board-view.html">
                                            <div class="dropdown-item-wrapper"><span class="me-2 uil"></span>Project
                                                board view</div>
                                        </a></li>
                                    <li><a class="dropdown-item"
                                            href="https://prium.github.io/phoenix/v1.18.0/apps/project-management/todo-list.html">
                                            <div class="dropdown-item-wrapper"><span class="me-2 uil"></span>Todo list
                                            </div>
                                        </a></li>
                                    <li><a class="dropdown-item"
                                            href="https://prium.github.io/phoenix/v1.18.0/apps/project-management/project-details.html">
                                            <div class="dropdown-item-wrapper"><span class="me-2 uil"></span>Project
                                                details</div>
                                        </a></li>
                                </ul>
                            </li>
                            <li class="dropdown"><a class="dropdown-item dropdown-toggle" id="travel-agency" href="#"
                                    data-bs-toggle="dropdown" data-bs-auto-close="outside">
                                    <div class="dropdown-item-wrapper"><span
                                            class="uil fs-8 uil-angle-right lh-1 dropdown-indicator-icon"></span><span><span
                                                class="me-2 uil" data-feather="briefcase"></span>Travel agency</span>
                                    </div>
                                </a>
                                <ul class="dropdown-menu">
                                    <li><a class="dropdown-item"
                                            href="https://prium.github.io/phoenix/v1.18.0/apps/travel-agency/landing.html">
                                            <div class="dropdown-item-wrapper"><span class="me-2 uil"></span>Landing
                                            </div>
                                        </a></li>
                                    <li class="dropdown"><a class="dropdown-item dropdown-toggle" id="hotel" href="#"
                                            data-bs-toggle="dropdown" data-bs-auto-close="outside">
                                            <div class="dropdown-item-wrapper"><span
                                                    class="uil fs-8 uil-angle-right lh-1 dropdown-indicator-icon"></span><span><span
                                                        class="me-2 uil"></span>Hotel</span></div>
                                        </a>
                                        <ul class="dropdown-menu">
                                            <li class="dropdown"><a class="dropdown-item dropdown-toggle" id="admin"
                                                    href="#" data-bs-toggle="dropdown" data-bs-auto-close="outside">
                                                    <div class="dropdown-item-wrapper"><span
                                                            class="uil fs-8 uil-angle-right lh-1 dropdown-indicator-icon"></span><span><span
                                                                class="me-2 uil"></span>Admin</span></div>
                                                </a>
                                                <ul class="dropdown-menu">
                                                    <li><a class="dropdown-item"
                                                            href="https://prium.github.io/phoenix/v1.18.0/apps/travel-agency/hotel/admin/add-property.html">
                                                            <div class="dropdown-item-wrapper"><span
                                                                    class="me-2 uil"></span>Add property</div>
                                                        </a></li>
                                                    <li><a class="dropdown-item"
                                                            href="https://prium.github.io/phoenix/v1.18.0/apps/travel-agency/hotel/admin/add-room.html">
                                                            <div class="dropdown-item-wrapper"><span
                                                                    class="me-2 uil"></span>Add room</div>
                                                        </a></li>
                                                    <li><a class="dropdown-item"
                                                            href="https://prium.github.io/phoenix/v1.18.0/apps/travel-agency/hotel/admin/room-listing.html">
                                                            <div class="dropdown-item-wrapper"><span
                                                                    class="me-2 uil"></span>Room listing</div>
                                                        </a></li>
                                                    <li><a class="dropdown-item"
                                                            href="https://prium.github.io/phoenix/v1.18.0/apps/travel-agency/hotel/admin/room-search.html">
                                                            <div class="dropdown-item-wrapper"><span
                                                                    class="me-2 uil"></span>Search room</div>
                                                        </a></li>
                                                </ul>
                                            </li>
                                            <li class="dropdown"><a class="dropdown-item dropdown-toggle" id="customer"
                                                    href="#" data-bs-toggle="dropdown" data-bs-auto-close="outside">
                                                    <div class="dropdown-item-wrapper"><span
                                                            class="uil fs-8 uil-angle-right lh-1 dropdown-indicator-icon"></span><span><span
                                                                class="me-2 uil"></span>Customer</span></div>
                                                </a>
                                                <ul class="dropdown-menu">
                                                    <li><a class="dropdown-item"
                                                            href="https://prium.github.io/phoenix/v1.18.0/apps/travel-agency/hotel/customer/homepage.html">
                                                            <div class="dropdown-item-wrapper"><span
                                                                    class="me-2 uil"></span>Homepage</div>
                                                        </a></li>
                                                    <li><a class="dropdown-item"
                                                            href="https://prium.github.io/phoenix/v1.18.0/apps/travel-agency/hotel/customer/hotel-details.html">
                                                            <div class="dropdown-item-wrapper"><span
                                                                    class="me-2 uil"></span>Hotel details</div>
                                                        </a></li>
                                                    <li><a class="dropdown-item"
                                                            href="https://prium.github.io/phoenix/v1.18.0/apps/travel-agency/hotel/customer/hotel-compare.html">
                                                            <div class="dropdown-item-wrapper"><span
                                                                    class="me-2 uil"></span>Hotel compare</div>
                                                        </a></li>
                                                    <li><a class="dropdown-item"
                                                            href="https://prium.github.io/phoenix/v1.18.0/apps/travel-agency/hotel/customer/checkout.html">
                                                            <div class="dropdown-item-wrapper"><span
                                                                    class="me-2 uil"></span>Checkout</div>
                                                        </a></li>
                                                    <li><a class="dropdown-item"
                                                            href="https://prium.github.io/phoenix/v1.18.0/apps/travel-agency/hotel/customer/payment.html">
                                                            <div class="dropdown-item-wrapper"><span
                                                                    class="me-2 uil"></span>Payment</div>
                                                        </a></li>
                                                    <li><a class="dropdown-item"
                                                            href="https://prium.github.io/phoenix/v1.18.0/apps/travel-agency/hotel/customer/gallery.html">
                                                            <div class="dropdown-item-wrapper"><span
                                                                    class="me-2 uil"></span>Gallery</div>
                                                        </a></li>
                                                </ul>
                                            </li>
                                        </ul>
                                    </li>
                                    <li class="dropdown"><a class="dropdown-item dropdown-toggle" id="flight" href="#"
                                            data-bs-toggle="dropdown" data-bs-auto-close="outside">
                                            <div class="dropdown-item-wrapper"><span
                                                    class="uil fs-8 uil-angle-right lh-1 dropdown-indicator-icon"></span><span><span
                                                        class="me-2 uil"></span>Flight</span></div>
                                        </a>
                                        <ul class="dropdown-menu">
                                            <li><a class="dropdown-item"
                                                    href="https://prium.github.io/phoenix/v1.18.0/apps/travel-agency/flight/homepage.html">
                                                    <div class="dropdown-item-wrapper"><span
                                                            class="me-2 uil"></span>Homepage</div>
                                                </a></li>
                                            <li><a class="dropdown-item"
                                                    href="https://prium.github.io/phoenix/v1.18.0/apps/travel-agency/flight/booking.html">
                                                    <div class="dropdown-item-wrapper"><span
                                                            class="me-2 uil"></span>Booking</div>
                                                </a></li>
                                            <li><a class="dropdown-item"
                                                    href="https://prium.github.io/phoenix/v1.18.0/apps/travel-agency/flight/payment.html">
                                                    <div class="dropdown-item-wrapper"><span
                                                            class="me-2 uil"></span>Payment</div>
                                                </a></li>
                                        </ul>
                                    </li>
                                    <li class="dropdown"><a class="dropdown-item dropdown-toggle" id="trip" href="#"
                                            data-bs-toggle="dropdown" data-bs-auto-close="outside">
                                            <div class="dropdown-item-wrapper"><span
                                                    class="uil fs-8 uil-angle-right lh-1 dropdown-indicator-icon"></span><span><span
                                                        class="me-2 uil"></span>Trip</span></div>
                                        </a>
                                        <ul class="dropdown-menu">
                                            <li><a class="dropdown-item"
                                                    href="https://prium.github.io/phoenix/v1.18.0/apps/travel-agency/trip/homepage.html">
                                                    <div class="dropdown-item-wrapper"><span
                                                            class="me-2 uil"></span>Homepage</div>
                                                </a></li>
                                            <li><a class="dropdown-item"
                                                    href="https://prium.github.io/phoenix/v1.18.0/apps/travel-agency/trip/trip-details.html">
                                                    <div class="dropdown-item-wrapper"><span
                                                            class="me-2 uil"></span>Trip details</div>
                                                </a></li>
                                            <li><a class="dropdown-item"
                                                    href="https://prium.github.io/phoenix/v1.18.0/apps/travel-agency/trip/checkout.html">
                                                    <div class="dropdown-item-wrapper"><span
                                                            class="me-2 uil"></span>Checkout</div>
                                                </a></li>
                                        </ul>
                                    </li>
                                </ul>
                            </li>
                            <li><a class="dropdown-item" href="https://prium.github.io/phoenix/v1.18.0/apps/chat.html">
                                    <div class="dropdown-item-wrapper"><span class="me-2 uil"
                                            data-feather="message-square"></span>Chat</div>
                                </a></li>
                            <li class="dropdown"><a class="dropdown-item dropdown-toggle" id="email" href="#"
                                    data-bs-toggle="dropdown" data-bs-auto-close="outside">
                                    <div class="dropdown-item-wrapper"><span
                                            class="uil fs-8 uil-angle-right lh-1 dropdown-indicator-icon"></span><span><span
                                                class="me-2 uil" data-feather="mail"></span>Email</span></div>
                                </a>
                                <ul class="dropdown-menu">
                                    <li><a class="dropdown-item"
                                            href="https://prium.github.io/phoenix/v1.18.0/apps/email/inbox.html">
                                            <div class="dropdown-item-wrapper"><span class="me-2 uil"></span>Inbox</div>
                                        </a></li>
                                    <li><a class="dropdown-item"
                                            href="https://prium.github.io/phoenix/v1.18.0/apps/email/email-detail.html">
                                            <div class="dropdown-item-wrapper"><span class="me-2 uil"></span>Email
                                                detail</div>
                                        </a></li>
                                    <li><a class="dropdown-item"
                                            href="https://prium.github.io/phoenix/v1.18.0/apps/email/compose.html">
                                            <div class="dropdown-item-wrapper"><span class="me-2 uil"></span>Compose
                                            </div>
                                        </a></li>
                                </ul>
                            </li>
                            <li class="dropdown"><a class="dropdown-item dropdown-toggle" id="events" href="#"
                                    data-bs-toggle="dropdown" data-bs-auto-close="outside">
                                    <div class="dropdown-item-wrapper"><span
                                            class="uil fs-8 uil-angle-right lh-1 dropdown-indicator-icon"></span><span><span
                                                class="me-2 uil" data-feather="bookmark"></span>Events</span></div>
                                </a>
                                <ul class="dropdown-menu">
                                    <li><a class="dropdown-item"
                                            href="https://prium.github.io/phoenix/v1.18.0/apps/events/create-an-event.html">
                                            <div class="dropdown-item-wrapper"><span class="me-2 uil"></span>Create an
                                                event</div>
                                        </a></li>
                                    <li><a class="dropdown-item"
                                            href="https://prium.github.io/phoenix/v1.18.0/apps/events/event-detail.html">
                                            <div class="dropdown-item-wrapper"><span class="me-2 uil"></span>Event
                                                detail</div>
                                        </a></li>
                                </ul>
                            </li>
                            <li class="dropdown"><a class="dropdown-item dropdown-toggle" id="kanban" href="#"
                                    data-bs-toggle="dropdown" data-bs-auto-close="outside">
                                    <div class="dropdown-item-wrapper"><span
                                            class="uil fs-8 uil-angle-right lh-1 dropdown-indicator-icon"></span><span><span
                                                class="me-2 uil" data-feather="trello"></span>Kanban</span></div>
                                </a>
                                <ul class="dropdown-menu">
                                    <li><a class="dropdown-item"
                                            href="https://prium.github.io/phoenix/v1.18.0/apps/kanban/kanban.html">
                                            <div class="dropdown-item-wrapper"><span class="me-2 uil"></span>Kanban
                                            </div>
                                        </a></li>
                                    <li><a class="dropdown-item"
                                            href="https://prium.github.io/phoenix/v1.18.0/apps/kanban/boards.html">
                                            <div class="dropdown-item-wrapper"><span class="me-2 uil"></span>Boards
                                            </div>
                                        </a></li>
                                    <li><a class="dropdown-item"
                                            href="https://prium.github.io/phoenix/v1.18.0/apps/kanban/create-kanban-board.html">
                                            <div class="dropdown-item-wrapper"><span class="me-2 uil"></span>Create
                                                board</div>
                                        </a></li>
                                </ul>
                            </li>
                            <li class="dropdown"><a class="dropdown-item dropdown-toggle" id="social" href="#"
                                    data-bs-toggle="dropdown" data-bs-auto-close="outside">
                                    <div class="dropdown-item-wrapper"><span
                                            class="uil fs-8 uil-angle-right lh-1 dropdown-indicator-icon"></span><span><span
                                                class="me-2 uil" data-feather="share-2"></span>Social</span></div>
                                </a>
                                <ul class="dropdown-menu">
                                    <li><a class="dropdown-item"
                                            href="https://prium.github.io/phoenix/v1.18.0/apps/social/profile.html">
                                            <div class="dropdown-item-wrapper"><span class="me-2 uil"></span>Profile
                                            </div>
                                        </a></li>
                                    <li><a class="dropdown-item"
                                            href="https://prium.github.io/phoenix/v1.18.0/apps/social/settings.html">
                                            <div class="dropdown-item-wrapper"><span class="me-2 uil"></span>Settings
                                            </div>
                                        </a></li>
                                </ul>
                            </li>
                            <li><a class="dropdown-item"
                                    href="https://prium.github.io/phoenix/v1.18.0/apps/calendar.html">
                                    <div class="dropdown-item-wrapper"><span class="me-2 uil"
                                            data-feather="calendar"></span>Calendar</div>
                                </a></li>
                        </ul>
                    </li>
                    <li class="nav-item dropdown"><a class="nav-link dropdown-toggle lh-1" href="#!" role="button"
                            data-bs-toggle="dropdown" data-bs-auto-close="outside" aria-haspopup="true"
                            aria-expanded="false"><span class="uil fs-8 me-2 uil-files-landscapes-alt"></span>Pages</a>
                        <ul class="dropdown-menu navbar-dropdown-caret">
                            <li><a class="dropdown-item"
                                    href="https://prium.github.io/phoenix/v1.18.0/pages/starter.html">
                                    <div class="dropdown-item-wrapper"><span class="me-2 uil"
                                            data-feather="compass"></span>Starter</div>
                                </a></li>
                            <li class="dropdown"><a class="dropdown-item dropdown-toggle" id="faq" href="#"
                                    data-bs-toggle="dropdown" data-bs-auto-close="outside">
                                    <div class="dropdown-item-wrapper"><span
                                            class="uil fs-8 uil-angle-right lh-1 dropdown-indicator-icon"></span><span><span
                                                class="me-2 uil" data-feather="help-circle"></span>Faq</span></div>
                                </a>
                                <ul class="dropdown-menu">
                                    <li><a class="dropdown-item"
                                            href="https://prium.github.io/phoenix/v1.18.0/pages/faq/faq-accordion.html">
                                            <div class="dropdown-item-wrapper"><span class="me-2 uil"></span>Faq
                                                accordion</div>
                                        </a></li>
                                    <li><a class="dropdown-item"
                                            href="https://prium.github.io/phoenix/v1.18.0/pages/faq/faq-tab.html">
                                            <div class="dropdown-item-wrapper"><span class="me-2 uil"></span>Faq tab
                                            </div>
                                        </a></li>
                                </ul>
                            </li>
                            <li class="dropdown"><a class="dropdown-item dropdown-toggle" id="landing" href="#"
                                    data-bs-toggle="dropdown" data-bs-auto-close="outside">
                                    <div class="dropdown-item-wrapper"><span
                                            class="uil fs-8 uil-angle-right lh-1 dropdown-indicator-icon"></span><span><span
                                                class="me-2 uil" data-feather="globe"></span>Landing</span></div>
                                </a>
                                <ul class="dropdown-menu">
                                    <li><a class="dropdown-item"
                                            href="https://prium.github.io/phoenix/v1.18.0/pages/landing/default.html">
                                            <div class="dropdown-item-wrapper"><span class="me-2 uil"></span>Default
                                            </div>
                                        </a></li>
                                    <li><a class="dropdown-item"
                                            href="https://prium.github.io/phoenix/v1.18.0/pages/landing/alternate.html">
                                            <div class="dropdown-item-wrapper"><span class="me-2 uil"></span>Alternate
                                            </div>
                                        </a></li>
                                </ul>
                            </li>
                            <li class="dropdown"><a class="dropdown-item dropdown-toggle" id="pricing" href="#"
                                    data-bs-toggle="dropdown" data-bs-auto-close="outside">
                                    <div class="dropdown-item-wrapper"><span
                                            class="uil fs-8 uil-angle-right lh-1 dropdown-indicator-icon"></span><span><span
                                                class="me-2 uil" data-feather="tag"></span>Pricing</span></div>
                                </a>
                                <ul class="dropdown-menu">
                                    <li><a class="dropdown-item"
                                            href="https://prium.github.io/phoenix/v1.18.0/pages/pricing/pricing-column.html">
                                            <div class="dropdown-item-wrapper"><span class="me-2 uil"></span>Pricing
                                                column</div>
                                        </a></li>
                                    <li><a class="dropdown-item"
                                            href="https://prium.github.io/phoenix/v1.18.0/pages/pricing/pricing-grid.html">
                                            <div class="dropdown-item-wrapper"><span class="me-2 uil"></span>Pricing
                                                grid</div>
                                        </a></li>
                                </ul>
                            </li>
                            <li><a class="dropdown-item"
                                    href="https://prium.github.io/phoenix/v1.18.0/pages/notifications.html">
                                    <div class="dropdown-item-wrapper"><span class="me-2 uil"
                                            data-feather="bell"></span>Notifications</div>
                                </a></li>
                            <li><a class="dropdown-item"
                                    href="https://prium.github.io/phoenix/v1.18.0/pages/members.html">
                                    <div class="dropdown-item-wrapper"><span class="me-2 uil"
                                            data-feather="users"></span>Members</div>
                                </a></li>
                            <li><a class="dropdown-item"
                                    href="https://prium.github.io/phoenix/v1.18.0/pages/timeline.html">
                                    <div class="dropdown-item-wrapper"><span class="me-2 uil"
                                            data-feather="clock"></span>Timeline</div>
                                </a></li>
                            <li class="dropdown"><a class="dropdown-item dropdown-toggle" id="errors" href="#"
                                    data-bs-toggle="dropdown" data-bs-auto-close="outside">
                                    <div class="dropdown-item-wrapper"><span
                                            class="uil fs-8 uil-angle-right lh-1 dropdown-indicator-icon"></span><span><span
                                                class="me-2 uil" data-feather="alert-triangle"></span>Errors</span>
                                    </div>
                                </a>
                                <ul class="dropdown-menu">
                                    <li><a class="dropdown-item"
                                            href="https://prium.github.io/phoenix/v1.18.0/pages/errors/404.html">
                                            <div class="dropdown-item-wrapper"><span class="me-2 uil"></span>404</div>
                                        </a></li>
                                    <li><a class="dropdown-item"
                                            href="https://prium.github.io/phoenix/v1.18.0/pages/errors/403.html">
                                            <div class="dropdown-item-wrapper"><span class="me-2 uil"></span>403</div>
                                        </a></li>
                                    <li><a class="dropdown-item"
                                            href="https://prium.github.io/phoenix/v1.18.0/pages/errors/500.html">
                                            <div class="dropdown-item-wrapper"><span class="me-2 uil"></span>500</div>
                                        </a></li>
                                </ul>
                            </li>
                            <li class="dropdown"><a class="dropdown-item dropdown-toggle" id="authentication" href="#"
                                    data-bs-toggle="dropdown" data-bs-auto-close="outside">
                                    <div class="dropdown-item-wrapper"><span
                                            class="uil fs-8 uil-angle-right lh-1 dropdown-indicator-icon"></span><span><span
                                                class="me-2 uil" data-feather="lock"></span>Authentication</span></div>
                                </a>
                                <ul class="dropdown-menu">
                                    <li class="dropdown"><a class="dropdown-item dropdown-toggle" id="simple" href="#"
                                            data-bs-toggle="dropdown" data-bs-auto-close="outside">
                                            <div class="dropdown-item-wrapper"><span
                                                    class="uil fs-8 uil-angle-right lh-1 dropdown-indicator-icon"></span><span><span
                                                        class="me-2 uil"></span>Simple</span></div>
                                        </a>
                                        <ul class="dropdown-menu">
                                            <li><a class="dropdown-item"
                                                    href="https://prium.github.io/phoenix/v1.18.0/pages/authentication/simple/sign-in.html">
                                                    <div class="dropdown-item-wrapper"><span
                                                            class="me-2 uil"></span>Sign in</div>
                                                </a></li>
                                            <li><a class="dropdown-item"
                                                    href="https://prium.github.io/phoenix/v1.18.0/pages/authentication/simple/sign-up.html">
                                                    <div class="dropdown-item-wrapper"><span
                                                            class="me-2 uil"></span>Sign up</div>
                                                </a></li>
                                            <li><a class="dropdown-item"
                                                    href="https://prium.github.io/phoenix/v1.18.0/pages/authentication/simple/sign-out.html">
                                                    <div class="dropdown-item-wrapper"><span
                                                            class="me-2 uil"></span>Sign out</div>
                                                </a></li>
                                            <li><a class="dropdown-item"
                                                    href="https://prium.github.io/phoenix/v1.18.0/pages/authentication/simple/forgot-password.html">
                                                    <div class="dropdown-item-wrapper"><span
                                                            class="me-2 uil"></span>Forgot password</div>
                                                </a></li>
                                            <li><a class="dropdown-item"
                                                    href="https://prium.github.io/phoenix/v1.18.0/pages/authentication/simple/reset-password.html">
                                                    <div class="dropdown-item-wrapper"><span
                                                            class="me-2 uil"></span>Reset password</div>
                                                </a></li>
                                            <li><a class="dropdown-item"
                                                    href="https://prium.github.io/phoenix/v1.18.0/pages/authentication/simple/lock-screen.html">
                                                    <div class="dropdown-item-wrapper"><span
                                                            class="me-2 uil"></span>Lock screen</div>
                                                </a></li>
                                            <li><a class="dropdown-item"
                                                    href="https://prium.github.io/phoenix/v1.18.0/pages/authentication/simple/2FA.html">
                                                    <div class="dropdown-item-wrapper"><span class="me-2 uil"></span>2FA
                                                    </div>
                                                </a></li>
                                        </ul>
                                    </li>
                                    <li class="dropdown"><a class="dropdown-item dropdown-toggle" id="split" href="#"
                                            data-bs-toggle="dropdown" data-bs-auto-close="outside">
                                            <div class="dropdown-item-wrapper"><span
                                                    class="uil fs-8 uil-angle-right lh-1 dropdown-indicator-icon"></span><span><span
                                                        class="me-2 uil"></span>Split</span></div>
                                        </a>
                                        <ul class="dropdown-menu">
                                            <li><a class="dropdown-item"
                                                    href="https://prium.github.io/phoenix/v1.18.0/pages/authentication/split/sign-in.html">
                                                    <div class="dropdown-item-wrapper"><span
                                                            class="me-2 uil"></span>Sign in</div>
                                                </a></li>
                                            <li><a class="dropdown-item"
                                                    href="https://prium.github.io/phoenix/v1.18.0/pages/authentication/split/sign-up.html">
                                                    <div class="dropdown-item-wrapper"><span
                                                            class="me-2 uil"></span>Sign up</div>
                                                </a></li>
                                            <li><a class="dropdown-item"
                                                    href="https://prium.github.io/phoenix/v1.18.0/pages/authentication/split/sign-out.html">
                                                    <div class="dropdown-item-wrapper"><span
                                                            class="me-2 uil"></span>Sign out</div>
                                                </a></li>
                                            <li><a class="dropdown-item"
                                                    href="https://prium.github.io/phoenix/v1.18.0/pages/authentication/split/forgot-password.html">
                                                    <div class="dropdown-item-wrapper"><span
                                                            class="me-2 uil"></span>Forgot password</div>
                                                </a></li>
                                            <li><a class="dropdown-item"
                                                    href="https://prium.github.io/phoenix/v1.18.0/pages/authentication/split/reset-password.html">
                                                    <div class="dropdown-item-wrapper"><span
                                                            class="me-2 uil"></span>Reset password</div>
                                                </a></li>
                                            <li><a class="dropdown-item"
                                                    href="https://prium.github.io/phoenix/v1.18.0/pages/authentication/split/lock-screen.html">
                                                    <div class="dropdown-item-wrapper"><span
                                                            class="me-2 uil"></span>Lock screen</div>
                                                </a></li>
                                            <li><a class="dropdown-item"
                                                    href="https://prium.github.io/phoenix/v1.18.0/pages/authentication/split/2FA.html">
                                                    <div class="dropdown-item-wrapper"><span class="me-2 uil"></span>2FA
                                                    </div>
                                                </a></li>
                                        </ul>
                                    </li>
                                    <li class="dropdown"><a class="dropdown-item dropdown-toggle" id="Card" href="#"
                                            data-bs-toggle="dropdown" data-bs-auto-close="outside">
                                            <div class="dropdown-item-wrapper"><span
                                                    class="uil fs-8 uil-angle-right lh-1 dropdown-indicator-icon"></span><span><span
                                                        class="me-2 uil"></span>Card</span></div>
                                        </a>
                                        <ul class="dropdown-menu">
                                            <li><a class="dropdown-item"
                                                    href="https://prium.github.io/phoenix/v1.18.0/pages/authentication/card/sign-in.html">
                                                    <div class="dropdown-item-wrapper"><span
                                                            class="me-2 uil"></span>Sign in</div>
                                                </a></li>
                                            <li><a class="dropdown-item"
                                                    href="https://prium.github.io/phoenix/v1.18.0/pages/authentication/card/sign-up.html">
                                                    <div class="dropdown-item-wrapper"><span
                                                            class="me-2 uil"></span>Sign up</div>
                                                </a></li>
                                            <li><a class="dropdown-item"
                                                    href="https://prium.github.io/phoenix/v1.18.0/pages/authentication/card/sign-out.html">
                                                    <div class="dropdown-item-wrapper"><span
                                                            class="me-2 uil"></span>Sign out</div>
                                                </a></li>
                                            <li><a class="dropdown-item"
                                                    href="https://prium.github.io/phoenix/v1.18.0/pages/authentication/card/forgot-password.html">
                                                    <div class="dropdown-item-wrapper"><span
                                                            class="me-2 uil"></span>Forgot password</div>
                                                </a></li>
                                            <li><a class="dropdown-item"
                                                    href="https://prium.github.io/phoenix/v1.18.0/pages/authentication/card/reset-password.html">
                                                    <div class="dropdown-item-wrapper"><span
                                                            class="me-2 uil"></span>Reset password</div>
                                                </a></li>
                                            <li><a class="dropdown-item"
                                                    href="https://prium.github.io/phoenix/v1.18.0/pages/authentication/card/lock-screen.html">
                                                    <div class="dropdown-item-wrapper"><span
                                                            class="me-2 uil"></span>Lock screen</div>
                                                </a></li>
                                            <li><a class="dropdown-item"
                                                    href="https://prium.github.io/phoenix/v1.18.0/pages/authentication/card/2FA.html">
                                                    <div class="dropdown-item-wrapper"><span class="me-2 uil"></span>2FA
                                                    </div>
                                                </a></li>
                                        </ul>
                                    </li>
                                </ul>
                            </li>
                            <li class="dropdown"><a class="dropdown-item dropdown-toggle" id="layouts" href="#"
                                    data-bs-toggle="dropdown" data-bs-auto-close="outside">
                                    <div class="dropdown-item-wrapper"><span
                                            class="uil fs-8 uil-angle-right lh-1 dropdown-indicator-icon"></span><span><span
                                                class="me-2 uil" data-feather="layout"></span>Layouts</span></div>
                                </a>
                                <ul class="dropdown-menu">
                                    <li><a class="dropdown-item"
                                            href="https://prium.github.io/phoenix/v1.18.0/demo/vertical-sidenav.html">
                                            <div class="dropdown-item-wrapper"><span class="me-2 uil"></span>Vertical
                                                sidenav</div>
                                        </a></li>
                                    <li><a class="dropdown-item"
                                            href="https://prium.github.io/phoenix/v1.18.0/demo/dark-mode.html">
                                            <div class="dropdown-item-wrapper"><span class="me-2 uil"></span>Dark mode
                                            </div>
                                        </a></li>
                                    <li><a class="dropdown-item"
                                            href="https://prium.github.io/phoenix/v1.18.0/demo/sidenav-collapse.html">
                                            <div class="dropdown-item-wrapper"><span class="me-2 uil"></span>Sidenav
                                                collapse</div>
                                        </a></li>
                                    <li><a class="dropdown-item"
                                            href="https://prium.github.io/phoenix/v1.18.0/demo/darknav.html">
                                            <div class="dropdown-item-wrapper"><span class="me-2 uil"></span>Darknav
                                            </div>
                                        </a></li>
                                    <li><a class="dropdown-item"
                                            href="https://prium.github.io/phoenix/v1.18.0/demo/topnav-slim.html">
                                            <div class="dropdown-item-wrapper"><span class="me-2 uil"></span>Topnav slim
                                            </div>
                                        </a></li>
                                    <li><a class="dropdown-item"
                                            href="https://prium.github.io/phoenix/v1.18.0/demo/navbar-horizontal.html">
                                            <div class="dropdown-item-wrapper"><span class="me-2 uil"></span>Navbar
                                                horizontal</div>
                                        </a></li>
                                    <li><a class="dropdown-item"
                                            href="https://prium.github.io/phoenix/v1.18.0/demo/horizontal-slim.html">
                                            <div class="dropdown-item-wrapper"><span class="me-2 uil"></span>Horizontal
                                                slim</div>
                                        </a></li>
                                    <li><a class="dropdown-item"
                                            href="https://prium.github.io/phoenix/v1.18.0/demo/combo-nav.html">
                                            <div class="dropdown-item-wrapper"><span class="me-2 uil"></span>Combo nav
                                            </div>
                                        </a></li>
                                    <li><a class="dropdown-item"
                                            href="https://prium.github.io/phoenix/v1.18.0/demo/combo-nav-slim.html">
                                            <div class="dropdown-item-wrapper"><span class="me-2 uil"></span>Combo nav
                                                slim</div>
                                        </a></li>
                                    <li><a class="dropdown-item"
                                            href="https://prium.github.io/phoenix/v1.18.0/demo/dual-nav.html">
                                            <div class="dropdown-item-wrapper"><span class="me-2 uil"></span>Dual nav
                                            </div>
                                        </a></li>
                                </ul>
                            </li>
                        </ul>
                    </li>
                    <li class="nav-item dropdown"><a class="nav-link dropdown-toggle lh-1" href="#!" role="button"
                            data-bs-toggle="dropdown" data-bs-auto-close="outside" aria-haspopup="true"
                            aria-expanded="false"><span class="uil fs-8 me-2 uil-puzzle-piece"></span>Modules</a>
                        <ul class="dropdown-menu navbar-dropdown-caret dropdown-menu-card py-0">
                            <div class="border-0 scrollbar" style="max-height: 60vh;">
                                <div class="px-3 pt-4 pb-3 img-dropdown">
                                    <div class="row gx-4 gy-5">
                                        <div class="col-12 col-sm-6 col-md-4">
                                            <div class="dropdown-item-group"><span class="me-2" data-feather="file-text"
                                                    style="stroke-width:2;"></span>
                                                <h6 class="dropdown-item-title">Forms</h6>
                                            </div><a class="dropdown-link"
                                                href="https://prium.github.io/phoenix/v1.18.0/modules/forms/basic/form-control.html">Form
                                                control</a><a class="dropdown-link"
                                                href="https://prium.github.io/phoenix/v1.18.0/modules/forms/basic/input-group.html">Input
                                                group</a><a class="dropdown-link"
                                                href="https://prium.github.io/phoenix/v1.18.0/modules/forms/basic/select.html">Select</a><a
                                                class="dropdown-link"
                                                href="https://prium.github.io/phoenix/v1.18.0/modules/forms/basic/checks.html">Checks</a><a
                                                class="dropdown-link"
                                                href="https://prium.github.io/phoenix/v1.18.0/modules/forms/basic/range.html">Range</a><a
                                                class="dropdown-link"
                                                href="https://prium.github.io/phoenix/v1.18.0/modules/forms/basic/floating-labels.html">Floating
                                                labels</a><a class="dropdown-link"
                                                href="https://prium.github.io/phoenix/v1.18.0/modules/forms/basic/layout.html">Layout</a><a
                                                class="dropdown-link"
                                                href="https://prium.github.io/phoenix/v1.18.0/modules/forms/advance/advance-select.html">Advance
                                                select</a><a class="dropdown-link"
                                                href="https://prium.github.io/phoenix/v1.18.0/modules/forms/advance/date-picker.html">Date
                                                picker</a><a class="dropdown-link"
                                                href="https://prium.github.io/phoenix/v1.18.0/modules/forms/advance/editor.html">Editor</a><a
                                                class="dropdown-link"
                                                href="https://prium.github.io/phoenix/v1.18.0/modules/forms/advance/file-uploader.html">File
                                                uploader</a><a class="dropdown-link"
                                                href="https://prium.github.io/phoenix/v1.18.0/modules/forms/advance/range.html">Range</a><a
                                                class="dropdown-link"
                                                href="https://prium.github.io/phoenix/v1.18.0/modules/forms/advance/rating.html">Rating</a><a
                                                class="dropdown-link"
                                                href="https://prium.github.io/phoenix/v1.18.0/modules/forms/advance/emoji-button.html">Emoji
                                                button</a><a class="dropdown-link"
                                                href="https://prium.github.io/phoenix/v1.18.0/modules/forms/validation.html">Validation</a><a
                                                class="dropdown-link"
                                                href="https://prium.github.io/phoenix/v1.18.0/modules/forms/wizard.html">Wizard</a>
                                            <div class="dropdown-item-group mt-5"><span class="me-2" data-feather="grid"
                                                    style="stroke-width:2;"></span>
                                                <h6 class="dropdown-item-title">Icons</h6>
                                            </div><a class="dropdown-link"
                                                href="https://prium.github.io/phoenix/v1.18.0/modules/icons/feather.html">Feather</a><a
                                                class="dropdown-link"
                                                href="https://prium.github.io/phoenix/v1.18.0/modules/icons/font-awesome.html">Font
                                                awesome</a><a class="dropdown-link"
                                                href="https://prium.github.io/phoenix/v1.18.0/modules/icons/unicons.html">Unicons</a>
                                            <div class="dropdown-item-group mt-5"><span class="me-2"
                                                    data-feather="bar-chart-2" style="stroke-width:2;"></span>
                                                <h6 class="dropdown-item-title">ECharts</h6>
                                            </div><a class="dropdown-link"
                                                href="https://prium.github.io/phoenix/v1.18.0/modules/echarts/line-charts.html">Line
                                                charts</a><a class="dropdown-link"
                                                href="https://prium.github.io/phoenix/v1.18.0/modules/echarts/bar-charts.html">Bar
                                                charts</a><a class="dropdown-link"
                                                href="https://prium.github.io/phoenix/v1.18.0/modules/echarts/candlestick-charts.html">Candlestick
                                                charts</a><a class="dropdown-link"
                                                href="https://prium.github.io/phoenix/v1.18.0/modules/echarts/geo-map.html">Geo
                                                map</a><a class="dropdown-link"
                                                href="https://prium.github.io/phoenix/v1.18.0/modules/echarts/scatter-charts.html">Scatter
                                                charts</a><a class="dropdown-link"
                                                href="https://prium.github.io/phoenix/v1.18.0/modules/echarts/pie-charts.html">Pie
                                                charts</a><a class="dropdown-link"
                                                href="https://prium.github.io/phoenix/v1.18.0/modules/echarts/gauge-chart.html">Gauge
                                                chart</a><a class="dropdown-link"
                                                href="https://prium.github.io/phoenix/v1.18.0/modules/echarts/radar-charts.html">Radar
                                                charts</a><a class="dropdown-link"
                                                href="https://prium.github.io/phoenix/v1.18.0/modules/echarts/heatmap-charts.html">Heatmap
                                                charts</a><a class="dropdown-link"
                                                href="https://prium.github.io/phoenix/v1.18.0/modules/echarts/how-to-use.html">How
                                                to use</a>
                                        </div>
                                        <div class="col-12 col-sm-6 col-md-4">
                                            <div class="dropdown-item-group"><span class="me-2" data-feather="package"
                                                    style="stroke-width:2;"></span>
                                                <h6 class="dropdown-item-title">Components</h6>
                                            </div><a class="dropdown-link"
                                                href="https://prium.github.io/phoenix/v1.18.0/modules/components/accordion.html">Accordion</a><a
                                                class="dropdown-link"
                                                href="https://prium.github.io/phoenix/v1.18.0/modules/components/avatar.html">Avatar</a><a
                                                class="dropdown-link"
                                                href="https://prium.github.io/phoenix/v1.18.0/modules/components/alerts.html">Alerts</a><a
                                                class="dropdown-link"
                                                href="https://prium.github.io/phoenix/v1.18.0/modules/components/badge.html">Badge</a><a
                                                class="dropdown-link"
                                                href="https://prium.github.io/phoenix/v1.18.0/modules/components/breadcrumb.html">Breadcrumb</a><a
                                                class="dropdown-link"
                                                href="https://prium.github.io/phoenix/v1.18.0/modules/components/button.html">Buttons</a><a
                                                class="dropdown-link"
                                                href="https://prium.github.io/phoenix/v1.18.0/modules/components/calendar.html">Calendar</a><a
                                                class="dropdown-link"
                                                href="https://prium.github.io/phoenix/v1.18.0/modules/components/card.html">Card</a><a
                                                class="dropdown-link"
                                                href="https://prium.github.io/phoenix/v1.18.0/modules/components/carousel/bootstrap.html">Bootstrap</a><a
                                                class="dropdown-link"
                                                href="https://prium.github.io/phoenix/v1.18.0/modules/components/carousel/swiper.html">Swiper</a><a
                                                class="dropdown-link"
                                                href="https://prium.github.io/phoenix/v1.18.0/modules/components/collapse.html">Collapse</a><a
                                                class="dropdown-link"
                                                href="https://prium.github.io/phoenix/v1.18.0/modules/components/dropdown.html">Dropdown</a><a
                                                class="dropdown-link"
                                                href="https://prium.github.io/phoenix/v1.18.0/modules/components/list-group.html">List
                                                group</a><a class="dropdown-link"
                                                href="https://prium.github.io/phoenix/v1.18.0/modules/components/modal.html">Modals</a><a
                                                class="dropdown-link"
                                                href="https://prium.github.io/phoenix/v1.18.0/modules/components/navs-and-tabs/navs.html">Navs</a><a
                                                class="dropdown-link"
                                                href="https://prium.github.io/phoenix/v1.18.0/modules/components/navs-and-tabs/navbar.html">Navbar</a><a
                                                class="dropdown-link"
                                                href="https://prium.github.io/phoenix/v1.18.0/modules/components/navs-and-tabs/tabs.html">Tabs</a><a
                                                class="dropdown-link"
                                                href="https://prium.github.io/phoenix/v1.18.0/modules/components/offcanvas.html">Offcanvas</a><a
                                                class="dropdown-link"
                                                href="https://prium.github.io/phoenix/v1.18.0/modules/components/progress-bar.html">Progress
                                                bar</a><a class="dropdown-link"
                                                href="https://prium.github.io/phoenix/v1.18.0/modules/components/placeholder.html">Placeholder</a><a
                                                class="dropdown-link"
                                                href="https://prium.github.io/phoenix/v1.18.0/modules/components/pagination.html">Pagination</a><a
                                                class="dropdown-link"
                                                href="https://prium.github.io/phoenix/v1.18.0/modules/components/popovers.html">Popovers</a><a
                                                class="dropdown-link"
                                                href="https://prium.github.io/phoenix/v1.18.0/modules/components/scrollspy.html">Scrollspy</a><a
                                                class="dropdown-link"
                                                href="https://prium.github.io/phoenix/v1.18.0/modules/components/sortable.html">Sortable</a><a
                                                class="dropdown-link"
                                                href="https://prium.github.io/phoenix/v1.18.0/modules/components/spinners.html">Spinners</a><a
                                                class="dropdown-link"
                                                href="https://prium.github.io/phoenix/v1.18.0/modules/components/toast.html">Toast</a><a
                                                class="dropdown-link"
                                                href="https://prium.github.io/phoenix/v1.18.0/modules/components/tooltips.html">Tooltips</a><a
                                                class="dropdown-link"
                                                href="https://prium.github.io/phoenix/v1.18.0/modules/components/typed-text.html">Typed
                                                text</a><a class="dropdown-link"
                                                href="https://prium.github.io/phoenix/v1.18.0/modules/components/chat-widget.html">Chat
                                                widget</a>
                                        </div>
                                        <div class="col-12 col-sm-6 col-md-4">
                                            <div class="dropdown-item-group"><span class="me-2" data-feather="columns"
                                                    style="stroke-width:2;"></span>
                                                <h6 class="dropdown-item-title">Tables</h6>
                                            </div><a class="dropdown-link"
                                                href="https://prium.github.io/phoenix/v1.18.0/modules/tables/basic-tables.html">Basic
                                                tables</a><a class="dropdown-link"
                                                href="https://prium.github.io/phoenix/v1.18.0/modules/tables/advance-tables.html">Advance
                                                tables</a><a class="dropdown-link"
                                                href="https://prium.github.io/phoenix/v1.18.0/modules/tables/bulk-select.html">Bulk
                                                Select</a>
                                            <div class="dropdown-item-group mt-5"><span class="me-2" data-feather="tool"
                                                    style="stroke-width:2;"></span>
                                                <h6 class="dropdown-item-title">Utilities</h6>
                                            </div><a class="dropdown-link"
                                                href="https://prium.github.io/phoenix/v1.18.0/modules/utilities/background.html">Background</a><a
                                                class="dropdown-link"
                                                href="https://prium.github.io/phoenix/v1.18.0/modules/utilities/borders.html">Borders</a><a
                                                class="dropdown-link"
                                                href="https://prium.github.io/phoenix/v1.18.0/modules/utilities/colors.html">Colors</a><a
                                                class="dropdown-link"
                                                href="https://prium.github.io/phoenix/v1.18.0/modules/utilities/display.html">Display</a><a
                                                class="dropdown-link"
                                                href="https://prium.github.io/phoenix/v1.18.0/modules/utilities/flex.html">Flex</a><a
                                                class="dropdown-link"
                                                href="https://prium.github.io/phoenix/v1.18.0/modules/utilities/stacks.html">Stacks</a><a
                                                class="dropdown-link"
                                                href="https://prium.github.io/phoenix/v1.18.0/modules/utilities/float.html">Float</a><a
                                                class="dropdown-link"
                                                href="https://prium.github.io/phoenix/v1.18.0/modules/utilities/grid.html">Grid</a><a
                                                class="dropdown-link"
                                                href="https://prium.github.io/phoenix/v1.18.0/modules/utilities/interactions.html">Interactions</a><a
                                                class="dropdown-link"
                                                href="https://prium.github.io/phoenix/v1.18.0/modules/utilities/opacity.html">Opacity</a><a
                                                class="dropdown-link"
                                                href="https://prium.github.io/phoenix/v1.18.0/modules/utilities/overflow.html">Overflow</a><a
                                                class="dropdown-link"
                                                href="https://prium.github.io/phoenix/v1.18.0/modules/utilities/position.html">Position</a><a
                                                class="dropdown-link"
                                                href="https://prium.github.io/phoenix/v1.18.0/modules/utilities/shadows.html">Shadows</a><a
                                                class="dropdown-link"
                                                href="https://prium.github.io/phoenix/v1.18.0/modules/utilities/sizing.html">Sizing</a><a
                                                class="dropdown-link"
                                                href="https://prium.github.io/phoenix/v1.18.0/modules/utilities/spacing.html">Spacing</a><a
                                                class="dropdown-link"
                                                href="https://prium.github.io/phoenix/v1.18.0/modules/utilities/typography.html">Typography</a><a
                                                class="dropdown-link"
                                                href="https://prium.github.io/phoenix/v1.18.0/modules/utilities/vertical-align.html">Vertical
                                                align</a><a class="dropdown-link"
                                                href="https://prium.github.io/phoenix/v1.18.0/modules/utilities/visibility.html">Visibility</a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </ul>
                    </li>
                    <li class="nav-item dropdown"><a class="nav-link dropdown-toggle lh-1" href="#!" role="button"
                            data-bs-toggle="dropdown" data-bs-auto-close="outside" aria-haspopup="true"
                            aria-expanded="false"><span
                                class="uil fs-8 me-2 uil-document-layout-right"></span>Documentation</a>
                        <ul class="dropdown-menu navbar-dropdown-caret">
                            <li><a class="dropdown-item"
                                    href="https://prium.github.io/phoenix/v1.18.0/documentation/getting-started.html">
                                    <div class="dropdown-item-wrapper"><span class="me-2 uil"
                                            data-feather="life-buoy"></span>Getting started</div>
                                </a></li>
                            <li class="dropdown dropdown-inside"><a class="dropdown-item dropdown-toggle"
                                    id="customization" href="#" data-bs-toggle="dropdown" data-bs-auto-close="outside">
                                    <div class="dropdown-item-wrapper"><span
                                            class="uil fs-8 uil-angle-right lh-1 dropdown-indicator-icon"></span><span><span
                                                class="me-2 uil" data-feather="settings"></span>Customization</span>
                                    </div>
                                </a>
                                <ul class="dropdown-menu">
                                    <li><a class="dropdown-item"
                                            href="https://prium.github.io/phoenix/v1.18.0/documentation/customization/configuration.html">
                                            <div class="dropdown-item-wrapper"><span
                                                    class="me-2 uil"></span>Configuration</div>
                                        </a></li>
                                    <li><a class="dropdown-item"
                                            href="https://prium.github.io/phoenix/v1.18.0/documentation/customization/styling.html">
                                            <div class="dropdown-item-wrapper"><span class="me-2 uil"></span>Styling
                                            </div>
                                        </a></li>
                                    <li><a class="dropdown-item"
                                            href="https://prium.github.io/phoenix/v1.18.0/documentation/customization/color.html">
                                            <div class="dropdown-item-wrapper"><span class="me-2 uil"></span>Color</div>
                                        </a></li>
                                    <li><a class="dropdown-item"
                                            href="https://prium.github.io/phoenix/v1.18.0/documentation/customization/dark-mode.html">
                                            <div class="dropdown-item-wrapper"><span class="me-2 uil"></span>Dark mode
                                            </div>
                                        </a></li>
                                    <li><a class="dropdown-item"
                                            href="https://prium.github.io/phoenix/v1.18.0/documentation/customization/plugin.html">
                                            <div class="dropdown-item-wrapper"><span class="me-2 uil"></span>Plugin
                                            </div>
                                        </a></li>
                                </ul>
                            </li>
                            <li class="dropdown dropdown-inside"><a class="dropdown-item dropdown-toggle"
                                    id="layouts-doc" href="#" data-bs-toggle="dropdown" data-bs-auto-close="outside">
                                    <div class="dropdown-item-wrapper"><span
                                            class="uil fs-8 uil-angle-right lh-1 dropdown-indicator-icon"></span><span><span
                                                class="me-2 uil" data-feather="table"></span>Layouts doc</span></div>
                                </a>
                                <ul class="dropdown-menu">
                                    <li><a class="dropdown-item"
                                            href="https://prium.github.io/phoenix/v1.18.0/documentation/layouts/vertical-navbar.html">
                                            <div class="dropdown-item-wrapper"><span class="me-2 uil"></span>Vertical
                                                navbar</div>
                                        </a></li>
                                    <li><a class="dropdown-item"
                                            href="https://prium.github.io/phoenix/v1.18.0/documentation/layouts/horizontal-navbar.html">
                                            <div class="dropdown-item-wrapper"><span class="me-2 uil"></span>Horizontal
                                                navbar</div>
                                        </a></li>
                                    <li><a class="dropdown-item"
                                            href="https://prium.github.io/phoenix/v1.18.0/documentation/layouts/combo-navbar.html">
                                            <div class="dropdown-item-wrapper"><span class="me-2 uil"></span>Combo
                                                navbar</div>
                                        </a></li>
                                    <li><a class="dropdown-item"
                                            href="https://prium.github.io/phoenix/v1.18.0/documentation/layouts/dual-nav.html">
                                            <div class="dropdown-item-wrapper"><span class="me-2 uil"></span>Dual nav
                                            </div>
                                        </a></li>
                                </ul>
                            </li>
                            <li><a class="dropdown-item"
                                    href="https://prium.github.io/phoenix/v1.18.0/documentation/gulp.html">
                                    <div class="dropdown-item-wrapper"><span
                                            class="me-2 fa-brands fa-gulp ms-1 me-1 fa-lg"></span>Gulp</div>
                                </a></li>
                            <li><a class="dropdown-item"
                                    href="https://prium.github.io/phoenix/v1.18.0/documentation/design-file.html">
                                    <div class="dropdown-item-wrapper"><span class="me-2 uil"
                                            data-feather="figma"></span>Design file</div>
                                </a></li>
                            <li><a class="dropdown-item" href="https://prium.github.io/phoenix/v1.18.0/changelog.html">
                                    <div class="dropdown-item-wrapper"><span class="me-2 uil"
                                            data-feather="git-merge"></span>Changelog</div>
                                </a></li>
                            <li><a class="dropdown-item" href="https://prium.github.io/phoenix/v1.18.0/showcase.html">
                                    <div class="dropdown-item-wrapper"><span class="me-2 uil"
                                            data-feather="monitor"></span>Showcase</div>
                                </a></li>
                        </ul>
                    </li>
                </ul>
            </div>
            <ul class="navbar-nav navbar-nav-icons flex-row">
                <li class="nav-item">
                    <div class="theme-control-toggle fa-ion-wait pe-2 theme-control-toggle-slim"><input
                            class="form-check-input ms-0 theme-control-toggle-input" id="themeControlToggle"
                            type="checkbox" data-theme-control="phoenixTheme" value="dark" /><label
                            class="mb-0 theme-control-toggle-label theme-control-toggle-light" for="themeControlToggle"
                            data-bs-toggle="tooltip" data-bs-placement="left" title="Switch theme"><span
                                class="d-none d-sm-flex flex-center" style="height:16px;width:16px;"><span
                                    class="me-1 icon" data-feather="moon"></span></span><span
                                class="fs-9 fw-bold">Dark</span></label><label
                            class="mb-0 theme-control-toggle-label theme-control-toggle-dark" for="themeControlToggle"
                            data-bs-toggle="tooltip" data-bs-placement="left" title="Switch theme"><span
                                class="d-none d-sm-flex flex-center" style="height:16px;width:16px;"><span
                                    class="me-1 icon" data-feather="sun"></span></span><span
                                class="fs-9 fw-bold">Light</span></label></div>
                </li>
                <li class="nav-item"> <a class="nav-link" href="#" data-bs-toggle="modal"
                        data-bs-target="#searchBoxModal"><span class="d-inline-block"
                            style="height:12px;width:12px;"><span data-feather="search"
                                style="height:12px;width:12px;"></span></span></a></li>
                <li class="nav-item dropdown">
                    <a class="nav-link" id="navbarDropdownNotification" href="#" role="button" data-bs-toggle="dropdown"
                        data-bs-auto-close="outside" aria-haspopup="true" aria-expanded="false"><span
                            class="d-inline-block" style="height:12px;width:12px;"><span data-feather="bell"
                                style="height:12px;width:12px;"></span></span></a>
                    <div class="dropdown-menu dropdown-menu-end notification-dropdown-menu py-0 shadow border navbar-dropdown-caret"
                        id="navbarDropdownNotfication" aria-labelledby="navbarDropdownNotfication">
                        <div class="card position-relative border-0">
                            <div class="card-header p-2">
                                <div class="d-flex justify-content-between">
                                    <h5 class="text-body-emphasis mb-0">Notifications</h5><button
                                        class="btn btn-link p-0 fs-9 fw-normal" type="button">Mark all as read</button>
                                </div>
                            </div>
                            <div class="card-body p-0">
                                <div class="scrollbar-overlay" style="height: 27rem;">
                                    <div
                                        class="px-2 px-sm-3 py-3 notification-card position-relative read border-bottom">
                                        <div
                                            class="d-flex align-items-center justify-content-between position-relative">
                                            <div class="d-flex">
                                                <div class="avatar avatar-m status-online me-3"><img
                                                        class="rounded-circle"
                                                        src="https://prium.github.io/phoenix/v1.18.0/assets/img/team/40x40/30.webp"
                                                        alt="" /></div>
                                                <div class="flex-1 me-sm-3">
                                                    <h4 class="fs-9 text-body-emphasis">Jessie Samson</h4>
                                                    <p class="fs-9 text-body-highlight mb-2 mb-sm-3 fw-normal"><span
                                                            class='me-1 fs-10'>💬</span>Mentioned you in a comment.<span
                                                            class="ms-2 text-body-quaternary text-opacity-75 fw-bold fs-10">10m</span>
                                                    </p>
                                                    <p class="text-body-secondary fs-9 mb-0"><span
                                                            class="me-1 fas fa-clock"></span><span class="fw-bold">10:41
                                                            AM </span>August 7,2021</p>
                                                </div>
                                            </div>
                                            <div class="dropdown notification-dropdown"><button
                                                    class="btn fs-10 btn-sm dropdown-toggle dropdown-caret-none transition-none"
                                                    type="button" data-bs-toggle="dropdown" data-boundary="window"
                                                    aria-haspopup="true" aria-expanded="false"
                                                    data-bs-reference="parent"><span
                                                        class="fas fa-ellipsis-h fs-10 text-body"></span></button>
                                                <div class="dropdown-menu py-2"><a class="dropdown-item" href="#!">Mark
                                                        as unread</a></div>
                                            </div>
                                        </div>
                                    </div>
                                    <div
                                        class="px-2 px-sm-3 py-3 notification-card position-relative unread border-bottom">
                                        <div
                                            class="d-flex align-items-center justify-content-between position-relative">
                                            <div class="d-flex">
                                                <div class="avatar avatar-m status-online me-3">
                                                    <div class="avatar-name rounded-circle"><span>J</span></div>
                                                </div>
                                                <div class="flex-1 me-sm-3">
                                                    <h4 class="fs-9 text-body-emphasis">Jane Foster</h4>
                                                    <p class="fs-9 text-body-highlight mb-2 mb-sm-3 fw-normal"><span
                                                            class='me-1 fs-10'>📅</span>Created an event.<span
                                                            class="ms-2 text-body-quaternary text-opacity-75 fw-bold fs-10">20m</span>
                                                    </p>
                                                    <p class="text-body-secondary fs-9 mb-0"><span
                                                            class="me-1 fas fa-clock"></span><span class="fw-bold">10:20
                                                            AM </span>August 7,2021</p>
                                                </div>
                                            </div>
                                            <div class="dropdown notification-dropdown"><button
                                                    class="btn fs-10 btn-sm dropdown-toggle dropdown-caret-none transition-none"
                                                    type="button" data-bs-toggle="dropdown" data-boundary="window"
                                                    aria-haspopup="true" aria-expanded="false"
                                                    data-bs-reference="parent"><span
                                                        class="fas fa-ellipsis-h fs-10 text-body"></span></button>
                                                <div class="dropdown-menu py-2"><a class="dropdown-item" href="#!">Mark
                                                        as unread</a></div>
                                            </div>
                                        </div>
                                    </div>
                                    <div
                                        class="px-2 px-sm-3 py-3 notification-card position-relative unread border-bottom">
                                        <div
                                            class="d-flex align-items-center justify-content-between position-relative">
                                            <div class="d-flex">
                                                <div class="avatar avatar-m status-online me-3"><img
                                                        class="rounded-circle avatar-placeholder"
                                                        src="https://prium.github.io/phoenix/v1.18.0/assets/img/team/40x40/avatar.webp"
                                                        alt="" /></div>
                                                <div class="flex-1 me-sm-3">
                                                    <h4 class="fs-9 text-body-emphasis">Jessie Samson</h4>
                                                    <p class="fs-9 text-body-highlight mb-2 mb-sm-3 fw-normal"><span
                                                            class='me-1 fs-10'>👍</span>Liked your comment.<span
                                                            class="ms-2 text-body-quaternary text-opacity-75 fw-bold fs-10">1h</span>
                                                    </p>
                                                    <p class="text-body-secondary fs-9 mb-0"><span
                                                            class="me-1 fas fa-clock"></span><span class="fw-bold">9:30
                                                            AM </span>August 7,2021</p>
                                                </div>
                                            </div>
                                            <div class="dropdown notification-dropdown"><button
                                                    class="btn fs-10 btn-sm dropdown-toggle dropdown-caret-none transition-none"
                                                    type="button" data-bs-toggle="dropdown" data-boundary="window"
                                                    aria-haspopup="true" aria-expanded="false"
                                                    data-bs-reference="parent"><span
                                                        class="fas fa-ellipsis-h fs-10 text-body"></span></button>
                                                <div class="dropdown-menu py-2"><a class="dropdown-item" href="#!">Mark
                                                        as unread</a></div>
                                            </div>
                                        </div>
                                    </div>
                                    <div
                                        class="px-2 px-sm-3 py-3 notification-card position-relative unread border-bottom">
                                        <div
                                            class="d-flex align-items-center justify-content-between position-relative">
                                            <div class="d-flex">
                                                <div class="avatar avatar-m status-online me-3"><img
                                                        class="rounded-circle"
                                                        src="https://prium.github.io/phoenix/v1.18.0/assets/img/team/40x40/57.webp"
                                                        alt="" /></div>
                                                <div class="flex-1 me-sm-3">
                                                    <h4 class="fs-9 text-body-emphasis">Kiera Anderson</h4>
                                                    <p class="fs-9 text-body-highlight mb-2 mb-sm-3 fw-normal"><span
                                                            class='me-1 fs-10'>💬</span>Mentioned you in a comment.<span
                                                            class="ms-2 text-body-quaternary text-opacity-75 fw-bold fs-10"></span>
                                                    </p>
                                                    <p class="text-body-secondary fs-9 mb-0"><span
                                                            class="me-1 fas fa-clock"></span><span class="fw-bold">9:11
                                                            AM </span>August 7,2021</p>
                                                </div>
                                            </div>
                                            <div class="dropdown notification-dropdown"><button
                                                    class="btn fs-10 btn-sm dropdown-toggle dropdown-caret-none transition-none"
                                                    type="button" data-bs-toggle="dropdown" data-boundary="window"
                                                    aria-haspopup="true" aria-expanded="false"
                                                    data-bs-reference="parent"><span
                                                        class="fas fa-ellipsis-h fs-10 text-body"></span></button>
                                                <div class="dropdown-menu py-2"><a class="dropdown-item" href="#!">Mark
                                                        as unread</a></div>
                                            </div>
                                        </div>
                                    </div>
                                    <div
                                        class="px-2 px-sm-3 py-3 notification-card position-relative unread border-bottom">
                                        <div
                                            class="d-flex align-items-center justify-content-between position-relative">
                                            <div class="d-flex">
                                                <div class="avatar avatar-m status-online me-3"><img
                                                        class="rounded-circle"
                                                        src="https://prium.github.io/phoenix/v1.18.0/assets/img/team/40x40/59.webp"
                                                        alt="" /></div>
                                                <div class="flex-1 me-sm-3">
                                                    <h4 class="fs-9 text-body-emphasis">Herman Carter</h4>
                                                    <p class="fs-9 text-body-highlight mb-2 mb-sm-3 fw-normal"><span
                                                            class='me-1 fs-10'>👤</span>Tagged you in a comment.<span
                                                            class="ms-2 text-body-quaternary text-opacity-75 fw-bold fs-10"></span>
                                                    </p>
                                                    <p class="text-body-secondary fs-9 mb-0"><span
                                                            class="me-1 fas fa-clock"></span><span class="fw-bold">10:58
                                                            PM </span>August 7,2021</p>
                                                </div>
                                            </div>
                                            <div class="dropdown notification-dropdown"><button
                                                    class="btn fs-10 btn-sm dropdown-toggle dropdown-caret-none transition-none"
                                                    type="button" data-bs-toggle="dropdown" data-boundary="window"
                                                    aria-haspopup="true" aria-expanded="false"
                                                    data-bs-reference="parent"><span
                                                        class="fas fa-ellipsis-h fs-10 text-body"></span></button>
                                                <div class="dropdown-menu py-2"><a class="dropdown-item" href="#!">Mark
                                                        as unread</a></div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="px-2 px-sm-3 py-3 notification-card position-relative read ">
                                        <div
                                            class="d-flex align-items-center justify-content-between position-relative">
                                            <div class="d-flex">
                                                <div class="avatar avatar-m status-online me-3"><img
                                                        class="rounded-circle"
                                                        src="https://prium.github.io/phoenix/v1.18.0/assets/img/team/40x40/58.webp"
                                                        alt="" /></div>
                                                <div class="flex-1 me-sm-3">
                                                    <h4 class="fs-9 text-body-emphasis">Benjamin Button</h4>
                                                    <p class="fs-9 text-body-highlight mb-2 mb-sm-3 fw-normal"><span
                                                            class='me-1 fs-10'>👍</span>Liked your comment.<span
                                                            class="ms-2 text-body-quaternary text-opacity-75 fw-bold fs-10"></span>
                                                    </p>
                                                    <p class="text-body-secondary fs-9 mb-0"><span
                                                            class="me-1 fas fa-clock"></span><span class="fw-bold">10:18
                                                            AM </span>August 7,2021</p>
                                                </div>
                                            </div>
                                            <div class="dropdown notification-dropdown"><button
                                                    class="btn fs-10 btn-sm dropdown-toggle dropdown-caret-none transition-none"
                                                    type="button" data-bs-toggle="dropdown" data-boundary="window"
                                                    aria-haspopup="true" aria-expanded="false"
                                                    data-bs-reference="parent"><span
                                                        class="fas fa-ellipsis-h fs-10 text-body"></span></button>
                                                <div class="dropdown-menu py-2"><a class="dropdown-item" href="#!">Mark
                                                        as unread</a></div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="card-footer p-0 border-top border-translucent border-0">
                                <div class="my-2 text-center fw-bold fs-10 text-body-tertiary text-opactity-85"><a
                                        class="fw-bolder"
                                        href="https://prium.github.io/phoenix/v1.18.0/pages/notifications.html">Notification
                                        history</a></div>
                            </div>
                        </div>
                    </div>
                </li>
                <li class="nav-item dropdown">
                    <a class="nav-link" id="navbarDropdownNindeDots" href="#" role="button" data-bs-toggle="dropdown"
                        aria-haspopup="true" data-bs-auto-close="outside" aria-expanded="false"><svg width="10"
                            height="10" viewbox="0 0 16 16" fill="none" xmlns="http://www.w3.org/2000/svg">
                            <circle cx="2" cy="2" r="2" fill="currentColor"></circle>
                            <circle cx="2" cy="8" r="2" fill="currentColor"></circle>
                            <circle cx="2" cy="14" r="2" fill="currentColor"></circle>
                            <circle cx="8" cy="8" r="2" fill="currentColor"></circle>
                            <circle cx="8" cy="14" r="2" fill="currentColor"></circle>
                            <circle cx="14" cy="8" r="2" fill="currentColor"></circle>
                            <circle cx="14" cy="14" r="2" fill="currentColor"></circle>
                            <circle cx="8" cy="2" r="2" fill="currentColor"></circle>
                            <circle cx="14" cy="2" r="2" fill="currentColor"></circle>
                        </svg></a>
                    <div class="dropdown-menu dropdown-menu-end navbar-dropdown-caret py-0 dropdown-nine-dots shadow border"
                        aria-labelledby="navbarDropdownNindeDots">
                        <div class="card bg-body-emphasis position-relative border-0">
                            <div class="card-body pt-3 px-3 pb-0 overflow-auto scrollbar" style="height: 20rem;">
                                <div class="row text-center align-items-center gx-0 gy-0">
                                    <div class="col-4"><a
                                            class="d-block bg-body-secondary-hover p-2 rounded-3 text-center text-decoration-none mb-3"
                                            href="#!"><img
                                                src="https://prium.github.io/phoenix/v1.18.0/assets/img/nav-icons/behance.webp"
                                                alt="" width="30" />
                                            <p class="mb-0 text-body-emphasis text-truncate fs-10 mt-1 pt-1">Behance</p>
                                        </a></div>
                                    <div class="col-4"><a
                                            class="d-block bg-body-secondary-hover p-2 rounded-3 text-center text-decoration-none mb-3"
                                            href="#!"><img
                                                src="https://prium.github.io/phoenix/v1.18.0/assets/img/nav-icons/google-cloud.webp"
                                                alt="" width="30" />
                                            <p class="mb-0 text-body-emphasis text-truncate fs-10 mt-1 pt-1">Cloud</p>
                                        </a></div>
                                    <div class="col-4"><a
                                            class="d-block bg-body-secondary-hover p-2 rounded-3 text-center text-decoration-none mb-3"
                                            href="#!"><img
                                                src="https://prium.github.io/phoenix/v1.18.0/assets/img/nav-icons/slack.webp"
                                                alt="" width="30" />
                                            <p class="mb-0 text-body-emphasis text-truncate fs-10 mt-1 pt-1">Slack</p>
                                        </a></div>
                                    <div class="col-4"><a
                                            class="d-block bg-body-secondary-hover p-2 rounded-3 text-center text-decoration-none mb-3"
                                            href="#!"><img
                                                src="https://prium.github.io/phoenix/v1.18.0/assets/img/nav-icons/gitlab.webp"
                                                alt="" width="30" />
                                            <p class="mb-0 text-body-emphasis text-truncate fs-10 mt-1 pt-1">Gitlab</p>
                                        </a></div>
                                    <div class="col-4"><a
                                            class="d-block bg-body-secondary-hover p-2 rounded-3 text-center text-decoration-none mb-3"
                                            href="#!"><img
                                                src="https://prium.github.io/phoenix/v1.18.0/assets/img/nav-icons/bitbucket.webp"
                                                alt="" width="30" />
                                            <p class="mb-0 text-body-emphasis text-truncate fs-10 mt-1 pt-1">BitBucket
                                            </p>
                                        </a></div>
                                    <div class="col-4"><a
                                            class="d-block bg-body-secondary-hover p-2 rounded-3 text-center text-decoration-none mb-3"
                                            href="#!"><img
                                                src="https://prium.github.io/phoenix/v1.18.0/assets/img/nav-icons/google-drive.webp"
                                                alt="" width="30" />
                                            <p class="mb-0 text-body-emphasis text-truncate fs-10 mt-1 pt-1">Drive</p>
                                        </a></div>
                                    <div class="col-4"><a
                                            class="d-block bg-body-secondary-hover p-2 rounded-3 text-center text-decoration-none mb-3"
                                            href="#!"><img
                                                src="https://prium.github.io/phoenix/v1.18.0/assets/img/nav-icons/trello.webp"
                                                alt="" width="30" />
                                            <p class="mb-0 text-body-emphasis text-truncate fs-10 mt-1 pt-1">Trello</p>
                                        </a></div>
                                    <div class="col-4"><a
                                            class="d-block bg-body-secondary-hover p-2 rounded-3 text-center text-decoration-none mb-3"
                                            href="#!"><img
                                                src="https://prium.github.io/phoenix/v1.18.0/assets/img/nav-icons/figma.webp"
                                                alt="" width="20" />
                                            <p class="mb-0 text-body-emphasis text-truncate fs-10 mt-1 pt-1">Figma</p>
                                        </a></div>
                                    <div class="col-4"><a
                                            class="d-block bg-body-secondary-hover p-2 rounded-3 text-center text-decoration-none mb-3"
                                            href="#!"><img
                                                src="https://prium.github.io/phoenix/v1.18.0/assets/img/nav-icons/twitter.webp"
                                                alt="" width="30" />
                                            <p class="mb-0 text-body-emphasis text-truncate fs-10 mt-1 pt-1">Twitter</p>
                                        </a></div>
                                    <div class="col-4"><a
                                            class="d-block bg-body-secondary-hover p-2 rounded-3 text-center text-decoration-none mb-3"
                                            href="#!"><img
                                                src="https://prium.github.io/phoenix/v1.18.0/assets/img/nav-icons/pinterest.webp"
                                                alt="" width="30" />
                                            <p class="mb-0 text-body-emphasis text-truncate fs-10 mt-1 pt-1">Pinterest
                                            </p>
                                        </a></div>
                                    <div class="col-4"><a
                                            class="d-block bg-body-secondary-hover p-2 rounded-3 text-center text-decoration-none mb-3"
                                            href="#!"><img
                                                src="https://prium.github.io/phoenix/v1.18.0/assets/img/nav-icons/ln.webp"
                                                alt="" width="30" />
                                            <p class="mb-0 text-body-emphasis text-truncate fs-10 mt-1 pt-1">Linkedin
                                            </p>
                                        </a></div>
                                    <div class="col-4"><a
                                            class="d-block bg-body-secondary-hover p-2 rounded-3 text-center text-decoration-none mb-3"
                                            href="#!"><img
                                                src="https://prium.github.io/phoenix/v1.18.0/assets/img/nav-icons/google-maps.webp"
                                                alt="" width="30" />
                                            <p class="mb-0 text-body-emphasis text-truncate fs-10 mt-1 pt-1">Maps</p>
                                        </a></div>
                                    <div class="col-4"><a
                                            class="d-block bg-body-secondary-hover p-2 rounded-3 text-center text-decoration-none mb-3"
                                            href="#!"><img
                                                src="https://prium.github.io/phoenix/v1.18.0/assets/img/nav-icons/google-photos.webp"
                                                alt="" width="30" />
                                            <p class="mb-0 text-body-emphasis text-truncate fs-10 mt-1 pt-1">Photos</p>
                                        </a></div>
                                    <div class="col-4"><a
                                            class="d-block bg-body-secondary-hover p-2 rounded-3 text-center text-decoration-none mb-3"
                                            href="#!"><img
                                                src="https://prium.github.io/phoenix/v1.18.0/assets/img/nav-icons/spotify.webp"
                                                alt="" width="30" />
                                            <p class="mb-0 text-body-emphasis text-truncate fs-10 mt-1 pt-1">Spotify</p>
                                        </a></div>
                                </div>
                            </div>
                        </div>
                    </div>
                </li>
                <li class="nav-item dropdown"><a class="nav-link lh-1 pe-0 white-space-nowrap" id="navbarDropdownUser"
                        href="#!" role="button" data-bs-toggle="dropdown" aria-haspopup="true"
                        data-bs-auto-close="outside" aria-expanded="false">Olivia <span class="d-inline-block"
                            style="height:10.2px;width:10.2px;"><span
                                class="fa-solid fa-chevron-down fs-10"></span></span></a>
                    <div class="dropdown-menu dropdown-menu-end navbar-dropdown-caret py-0 dropdown-profile shadow border"
                        aria-labelledby="navbarDropdownUser">
                        <div class="card position-relative border-0">
                            <div class="card-body p-0">
                                <div class="text-center pt-4 pb-3">
                                    <div class="avatar avatar-xl ">
                                        <img class="rounded-circle "
                                            src="https://prium.github.io/phoenix/v1.18.0/assets/img/team/72x72/57.webp"
                                            alt="" />
                                    </div>
                                    <h6 class="mt-2 text-body-emphasis">Jerry Seinfield</h6>
                                </div>
                                <div class="mb-3 mx-3"><input class="form-control form-control-sm"
                                        id="statusUpdateInput" type="text" placeholder="Update your status" /></div>
                            </div>
                            <div class="overflow-auto scrollbar" style="height: 10rem;">
                                <ul class="nav d-flex flex-column mb-2 pb-1">
                                    <li class="nav-item"><a class="nav-link px-3 d-block" href="#!"> <span
                                                class="me-2 text-body align-bottom"
                                                data-feather="user"></span><span>Profile</span></a></li>
                                    <li class="nav-item"><a class="nav-link px-3 d-block" href="#!"><span
                                                class="me-2 text-body align-bottom"
                                                data-feather="pie-chart"></span>Dashboard</a></li>
                                    <li class="nav-item"><a class="nav-link px-3 d-block" href="#!"> <span
                                                class="me-2 text-body align-bottom" data-feather="lock"></span>Posts
                                            &amp; Activity</a></li>
                                    <li class="nav-item"><a class="nav-link px-3 d-block" href="#!"> <span
                                                class="me-2 text-body align-bottom"
                                                data-feather="settings"></span>Settings &amp; Privacy </a></li>
                                    <li class="nav-item"><a class="nav-link px-3 d-block" href="#!"> <span
                                                class="me-2 text-body align-bottom"
                                                data-feather="help-circle"></span>Help Center</a></li>
                                    <li class="nav-item"><a class="nav-link px-3 d-block" href="#!"> <span
                                                class="me-2 text-body align-bottom"
                                                data-feather="globe"></span>Language</a></li>
                                </ul>
                            </div>
                            <div class="card-footer p-0 border-top border-translucent">
                                <ul class="nav d-flex flex-column my-3">
                                    <li class="nav-item"><a class="nav-link px-3 d-block" href="#!"> <span
                                                class="me-2 text-body align-bottom" data-feather="user-plus"></span>Add
                                            another account</a></li>
                                </ul>
                                <hr />
                                <div class="px-3"> <a class="btn btn-phoenix-secondary d-flex flex-center w-100"
                                        href="#!"> <span class="me-2" data-feather="log-out"> </span>Sign out</a></div>
                                <div class="my-2 text-center fw-bold fs-10 text-body-quaternary"><a
                                        class="text-body-quaternary me-1" href="#!">Privacy policy</a>&bull;<a
                                        class="text-body-quaternary mx-1" href="#!">Terms</a>&bull;<a
                                        class="text-body-quaternary ms-1" href="#!">Cookies</a></div>
                            </div>
                        </div>
                    </div>
                </li>
            </ul>
        </nav>
        <nav class="navbar navbar-top fixed-top navbar-expand-lg" id="dualNav" style="display:none;">
            <div class="w-100">
                <div class="d-flex flex-between-center dual-nav-first-layer">
                    <div class="navbar-logo">
                        <button class="btn navbar-toggler navbar-toggler-humburger-icon hover-bg-transparent"
                            type="button" data-bs-toggle="collapse" data-bs-target="#navbarTopCollapse"
                            aria-controls="navbarTopCollapse" aria-expanded="false" aria-label="Toggle Navigation"><span
                                class="navbar-toggle-icon"><span class="toggle-line"></span></span></button>
                        <a class="navbar-brand me-1 me-sm-3" href="https://prium.github.io/phoenix/v1.18.0/index.html">
                            <div class="d-flex align-items-center">
                                <div class="d-flex align-items-center"><img src="../assets/img/icons/logo.png"
                                        alt="phoenix" width="27" />
                                    <h5 class="logo-text ms-2 d-none d-sm-block">phoenix</h5>
                                </div>
                            </div>
                        </a>
                    </div>
                    <div class="search-box navbar-top-search-box d-none d-lg-block" data-list='{"valueNames":["title"]}'
                        style="width:25rem;">
                        <form class="position-relative" data-bs-toggle="search" data-bs-display="static"><input
                                class="form-control search-input fuzzy-search rounded-pill form-control-sm"
                                type="search" placeholder="Search..." aria-label="Search" />
                            <span class="fas fa-search search-box-icon"></span>
                        </form>
                        <div class="btn-close position-absolute end-0 top-50 translate-middle cursor-pointer shadow-none"
                            data-bs-dismiss="search"><button class="btn btn-link p-0" aria-label="Close"></button></div>
                        <div class="dropdown-menu border start-0 py-0 overflow-hidden w-100">
                            <div class="scrollbar-overlay" style="max-height: 30rem;">
                                <div class="list pb-3">
                                    <h6 class="dropdown-header text-body-highlight fs-10 py-2">24 <span
                                            class="text-body-quaternary">results</span></h6>
                                    <hr class="my-0" />
                                    <h6
                                        class="dropdown-header text-body-highlight fs-9 border-bottom border-translucent py-2 lh-sm">
                                        Recently Searched </h6>
                                    <div class="py-2"><a class="dropdown-item"
                                            href="https://prium.github.io/phoenix/v1.18.0/apps/e-commerce/landing/product-details.html">
                                            <div class="d-flex align-items-center">
                                                <div class="fw-normal text-body-highlight title"><span
                                                        class="fa-solid fa-clock-rotate-left"
                                                        data-fa-transform="shrink-2"></span> Store Macbook</div>
                                            </div>
                                        </a>
                                        <a class="dropdown-item"
                                            href="https://prium.github.io/phoenix/v1.18.0/apps/e-commerce/landing/product-details.html">
                                            <div class="d-flex align-items-center">
                                                <div class="fw-normal text-body-highlight title"> <span
                                                        class="fa-solid fa-clock-rotate-left"
                                                        data-fa-transform="shrink-2"></span> MacBook Air - 13″</div>
                                            </div>
                                        </a>
                                    </div>
                                    <hr class="my-0" />
                                    <h6
                                        class="dropdown-header text-body-highlight fs-9 border-bottom border-translucent py-2 lh-sm">
                                        Products</h6>
                                    <div class="py-2"><a class="dropdown-item py-2 d-flex align-items-center"
                                            href="https://prium.github.io/phoenix/v1.18.0/apps/e-commerce/landing/product-details.html">
                                            <div class="file-thumbnail me-2"><img
                                                    class="h-100 w-100 object-fit-cover rounded-3"
                                                    src="../assets/img/products/60x60/3.png" alt="" /></div>
                                            <div class="flex-1">
                                                <h6 class="mb-0 text-body-highlight title">MacBook Air - 13″</h6>
                                                <p class="fs-10 mb-0 d-flex text-body-tertiary"><span
                                                        class="fw-medium text-body-tertiary text-opactity-85">8GB Memory
                                                        - 1.6GHz - 128GB Storage</span></p>
                                            </div>
                                        </a>
                                        <a class="dropdown-item py-2 d-flex align-items-center"
                                            href="https://prium.github.io/phoenix/v1.18.0/apps/e-commerce/landing/product-details.html">
                                            <div class="file-thumbnail me-2"><img class="img-fluid"
                                                    src="../assets/img/products/60x60/3.png" alt="" /></div>
                                            <div class="flex-1">
                                                <h6 class="mb-0 text-body-highlight title">MacBook Pro - 13″</h6>
                                                <p class="fs-10 mb-0 d-flex text-body-tertiary"><span
                                                        class="fw-medium text-body-tertiary text-opactity-85">30 Sep at
                                                        12:30 PM</span></p>
                                            </div>
                                        </a>
                                    </div>
                                    <hr class="my-0" />
                                    <h6
                                        class="dropdown-header text-body-highlight fs-9 border-bottom border-translucent py-2 lh-sm">
                                        Quick Links</h6>
                                    <div class="py-2"><a class="dropdown-item"
                                            href="https://prium.github.io/phoenix/v1.18.0/apps/e-commerce/landing/product-details.html">
                                            <div class="d-flex align-items-center">
                                                <div class="fw-normal text-body-highlight title"><span
                                                        class="fa-solid fa-link text-body"
                                                        data-fa-transform="shrink-2"></span> Support MacBook House</div>
                                            </div>
                                        </a>
                                        <a class="dropdown-item"
                                            href="https://prium.github.io/phoenix/v1.18.0/apps/e-commerce/landing/product-details.html">
                                            <div class="d-flex align-items-center">
                                                <div class="fw-normal text-body-highlight title"> <span
                                                        class="fa-solid fa-link text-body"
                                                        data-fa-transform="shrink-2"></span> Store MacBook″</div>
                                            </div>
                                        </a>
                                    </div>
                                    <hr class="my-0" />
                                    <h6
                                        class="dropdown-header text-body-highlight fs-9 border-bottom border-translucent py-2 lh-sm">
                                        Files</h6>
                                    <div class="py-2"><a class="dropdown-item"
                                            href="https://prium.github.io/phoenix/v1.18.0/apps/e-commerce/landing/product-details.html">
                                            <div class="d-flex align-items-center">
                                                <div class="fw-normal text-body-highlight title"><span
                                                        class="fa-solid fa-file-zipper text-body"
                                                        data-fa-transform="shrink-2"></span> Library MacBook folder.rar
                                                </div>
                                            </div>
                                        </a>
                                        <a class="dropdown-item"
                                            href="https://prium.github.io/phoenix/v1.18.0/apps/e-commerce/landing/product-details.html">
                                            <div class="d-flex align-items-center">
                                                <div class="fw-normal text-body-highlight title"> <span
                                                        class="fa-solid fa-file-lines text-body"
                                                        data-fa-transform="shrink-2"></span> Feature MacBook
                                                    extensions.txt</div>
                                            </div>
                                        </a>
                                        <a class="dropdown-item"
                                            href="https://prium.github.io/phoenix/v1.18.0/apps/e-commerce/landing/product-details.html">
                                            <div class="d-flex align-items-center">
                                                <div class="fw-normal text-body-highlight title"> <span
                                                        class="fa-solid fa-image text-body"
                                                        data-fa-transform="shrink-2"></span> MacBook Pro_13.jpg</div>
                                            </div>
                                        </a>
                                    </div>
                                    <hr class="my-0" />
                                    <h6
                                        class="dropdown-header text-body-highlight fs-9 border-bottom border-translucent py-2 lh-sm">
                                        Members</h6>
                                    <div class="py-2"><a class="dropdown-item py-2 d-flex align-items-center"
                                            href="https://prium.github.io/phoenix/v1.18.0/pages/members.html">
                                            <div class="avatar avatar-l status-online  me-2 text-body">
                                                <img class="rounded-circle "
                                                    src="https://prium.github.io/phoenix/v1.18.0/assets/img/team/40x40/10.webp"
                                                    alt="" />
                                            </div>
                                            <div class="flex-1">
                                                <h6 class="mb-0 text-body-highlight title">Carry Anna</h6>
                                                <p class="fs-10 mb-0 d-flex text-body-tertiary">anna@technext.it</p>
                                            </div>
                                        </a>
                                        <a class="dropdown-item py-2 d-flex align-items-center"
                                            href="https://prium.github.io/phoenix/v1.18.0/pages/members.html">
                                            <div class="avatar avatar-l  me-2 text-body">
                                                <img class="rounded-circle "
                                                    src="https://prium.github.io/phoenix/v1.18.0/assets/img/team/40x40/12.webp"
                                                    alt="" />
                                            </div>
                                            <div class="flex-1">
                                                <h6 class="mb-0 text-body-highlight title">John Smith</h6>
                                                <p class="fs-10 mb-0 d-flex text-body-tertiary">smith@technext.it</p>
                                            </div>
                                        </a>
                                    </div>
                                    <hr class="my-0" />
                                    <h6
                                        class="dropdown-header text-body-highlight fs-9 border-bottom border-translucent py-2 lh-sm">
                                        Related Searches</h6>
                                    <div class="py-2"><a class="dropdown-item"
                                            href="https://prium.github.io/phoenix/v1.18.0/apps/e-commerce/landing/product-details.html">
                                            <div class="d-flex align-items-center">
                                                <div class="fw-normal text-body-highlight title"><span
                                                        class="fa-brands fa-firefox-browser text-body"
                                                        data-fa-transform="shrink-2"></span> Search in the Web MacBook
                                                </div>
                                            </div>
                                        </a>
                                        <a class="dropdown-item"
                                            href="https://prium.github.io/phoenix/v1.18.0/apps/e-commerce/landing/product-details.html">
                                            <div class="d-flex align-items-center">
                                                <div class="fw-normal text-body-highlight title"> <span
                                                        class="fa-brands fa-chrome text-body"
                                                        data-fa-transform="shrink-2"></span> Store MacBook″</div>
                                            </div>
                                        </a>
                                    </div>
                                </div>
                                <div class="text-center">
                                    <p class="fallback fw-bold fs-7 d-none">No Result Found.</p>
                                </div>
                            </div>
                        </div>
                    </div>
                    <ul class="navbar-nav navbar-nav-icons flex-row">
                        <li class="nav-item">
                            <div class="theme-control-toggle fa-icon-wait px-2"><input
                                    class="form-check-input ms-0 theme-control-toggle-input" type="checkbox"
                                    data-theme-control="phoenixTheme" value="dark" id="themeControlToggle" /><label
                                    class="mb-0 theme-control-toggle-label theme-control-toggle-light"
                                    for="themeControlToggle" data-bs-toggle="tooltip" data-bs-placement="left"
                                    data-bs-title="Switch theme" style="height:32px;width:32px;"><span class="icon"
                                        data-feather="moon"></span></label><label
                                    class="mb-0 theme-control-toggle-label theme-control-toggle-dark"
                                    for="themeControlToggle" data-bs-toggle="tooltip" data-bs-placement="left"
                                    data-bs-title="Switch theme" style="height:32px;width:32px;"><span class="icon"
                                        data-feather="sun"></span></label></div>
                        </li>
                        <li class="nav-item dropdown">
                            <a class="nav-link" href="#" style="min-width: 2.25rem" role="button"
                                data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false"
                                data-bs-auto-close="outside"><span class="d-block" style="height:20px;width:20px;"><span
                                        data-feather="bell" style="height:20px;width:20px;"></span></span></a>
                            <div class="dropdown-menu dropdown-menu-end notification-dropdown-menu py-0 shadow border navbar-dropdown-caret"
                                id="navbarDropdownNotfication" aria-labelledby="navbarDropdownNotfication">
                                <div class="card position-relative border-0">
                                    <div class="card-header p-2">
                                        <div class="d-flex justify-content-between">
                                            <h5 class="text-body-emphasis mb-0">Notifications</h5><button
                                                class="btn btn-link p-0 fs-9 fw-normal" type="button">Mark all as
                                                read</button>
                                        </div>
                                    </div>
                                    <div class="card-body p-0">
                                        <div class="scrollbar-overlay" style="height: 27rem;">
                                            <div
                                                class="px-2 px-sm-3 py-3 notification-card position-relative read border-bottom">
                                                <div
                                                    class="d-flex align-items-center justify-content-between position-relative">
                                                    <div class="d-flex">
                                                        <div class="avatar avatar-m status-online me-3"><img
                                                                class="rounded-circle"
                                                                src="https://prium.github.io/phoenix/v1.18.0/assets/img/team/40x40/30.webp"
                                                                alt="" /></div>
                                                        <div class="flex-1 me-sm-3">
                                                            <h4 class="fs-9 text-body-emphasis">Jessie Samson</h4>
                                                            <p class="fs-9 text-body-highlight mb-2 mb-sm-3 fw-normal">
                                                                <span class='me-1 fs-10'>💬</span>Mentioned you in a
                                                                comment.<span
                                                                    class="ms-2 text-body-quaternary text-opacity-75 fw-bold fs-10">10m</span>
                                                            </p>
                                                            <p class="text-body-secondary fs-9 mb-0"><span
                                                                    class="me-1 fas fa-clock"></span><span
                                                                    class="fw-bold">10:41 AM </span>August 7,2021</p>
                                                        </div>
                                                    </div>
                                                    <div class="dropdown notification-dropdown"><button
                                                            class="btn fs-10 btn-sm dropdown-toggle dropdown-caret-none transition-none"
                                                            type="button" data-bs-toggle="dropdown"
                                                            data-boundary="window" aria-haspopup="true"
                                                            aria-expanded="false" data-bs-reference="parent"><span
                                                                class="fas fa-ellipsis-h fs-10 text-body"></span></button>
                                                        <div class="dropdown-menu py-2"><a class="dropdown-item"
                                                                href="#!">Mark as unread</a></div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div
                                                class="px-2 px-sm-3 py-3 notification-card position-relative unread border-bottom">
                                                <div
                                                    class="d-flex align-items-center justify-content-between position-relative">
                                                    <div class="d-flex">
                                                        <div class="avatar avatar-m status-online me-3">
                                                            <div class="avatar-name rounded-circle"><span>J</span></div>
                                                        </div>
                                                        <div class="flex-1 me-sm-3">
                                                            <h4 class="fs-9 text-body-emphasis">Jane Foster</h4>
                                                            <p class="fs-9 text-body-highlight mb-2 mb-sm-3 fw-normal">
                                                                <span class='me-1 fs-10'>📅</span>Created an event.<span
                                                                    class="ms-2 text-body-quaternary text-opacity-75 fw-bold fs-10">20m</span>
                                                            </p>
                                                            <p class="text-body-secondary fs-9 mb-0"><span
                                                                    class="me-1 fas fa-clock"></span><span
                                                                    class="fw-bold">10:20 AM </span>August 7,2021</p>
                                                        </div>
                                                    </div>
                                                    <div class="dropdown notification-dropdown"><button
                                                            class="btn fs-10 btn-sm dropdown-toggle dropdown-caret-none transition-none"
                                                            type="button" data-bs-toggle="dropdown"
                                                            data-boundary="window" aria-haspopup="true"
                                                            aria-expanded="false" data-bs-reference="parent"><span
                                                                class="fas fa-ellipsis-h fs-10 text-body"></span></button>
                                                        <div class="dropdown-menu py-2"><a class="dropdown-item"
                                                                href="#!">Mark as unread</a></div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div
                                                class="px-2 px-sm-3 py-3 notification-card position-relative unread border-bottom">
                                                <div
                                                    class="d-flex align-items-center justify-content-between position-relative">
                                                    <div class="d-flex">
                                                        <div class="avatar avatar-m status-online me-3"><img
                                                                class="rounded-circle avatar-placeholder"
                                                                src="https://prium.github.io/phoenix/v1.18.0/assets/img/team/40x40/avatar.webp"
                                                                alt="" /></div>
                                                        <div class="flex-1 me-sm-3">
                                                            <h4 class="fs-9 text-body-emphasis">Jessie Samson</h4>
                                                            <p class="fs-9 text-body-highlight mb-2 mb-sm-3 fw-normal">
                                                                <span class='me-1 fs-10'>👍</span>Liked your
                                                                comment.<span
                                                                    class="ms-2 text-body-quaternary text-opacity-75 fw-bold fs-10">1h</span>
                                                            </p>
                                                            <p class="text-body-secondary fs-9 mb-0"><span
                                                                    class="me-1 fas fa-clock"></span><span
                                                                    class="fw-bold">9:30 AM </span>August 7,2021</p>
                                                        </div>
                                                    </div>
                                                    <div class="dropdown notification-dropdown"><button
                                                            class="btn fs-10 btn-sm dropdown-toggle dropdown-caret-none transition-none"
                                                            type="button" data-bs-toggle="dropdown"
                                                            data-boundary="window" aria-haspopup="true"
                                                            aria-expanded="false" data-bs-reference="parent"><span
                                                                class="fas fa-ellipsis-h fs-10 text-body"></span></button>
                                                        <div class="dropdown-menu py-2"><a class="dropdown-item"
                                                                href="#!">Mark as unread</a></div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div
                                                class="px-2 px-sm-3 py-3 notification-card position-relative unread border-bottom">
                                                <div
                                                    class="d-flex align-items-center justify-content-between position-relative">
                                                    <div class="d-flex">
                                                        <div class="avatar avatar-m status-online me-3"><img
                                                                class="rounded-circle"
                                                                src="https://prium.github.io/phoenix/v1.18.0/assets/img/team/40x40/57.webp"
                                                                alt="" /></div>
                                                        <div class="flex-1 me-sm-3">
                                                            <h4 class="fs-9 text-body-emphasis">Kiera Anderson</h4>
                                                            <p class="fs-9 text-body-highlight mb-2 mb-sm-3 fw-normal">
                                                                <span class='me-1 fs-10'>💬</span>Mentioned you in a
                                                                comment.<span
                                                                    class="ms-2 text-body-quaternary text-opacity-75 fw-bold fs-10"></span>
                                                            </p>
                                                            <p class="text-body-secondary fs-9 mb-0"><span
                                                                    class="me-1 fas fa-clock"></span><span
                                                                    class="fw-bold">9:11 AM </span>August 7,2021</p>
                                                        </div>
                                                    </div>
                                                    <div class="dropdown notification-dropdown"><button
                                                            class="btn fs-10 btn-sm dropdown-toggle dropdown-caret-none transition-none"
                                                            type="button" data-bs-toggle="dropdown"
                                                            data-boundary="window" aria-haspopup="true"
                                                            aria-expanded="false" data-bs-reference="parent"><span
                                                                class="fas fa-ellipsis-h fs-10 text-body"></span></button>
                                                        <div class="dropdown-menu py-2"><a class="dropdown-item"
                                                                href="#!">Mark as unread</a></div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div
                                                class="px-2 px-sm-3 py-3 notification-card position-relative unread border-bottom">
                                                <div
                                                    class="d-flex align-items-center justify-content-between position-relative">
                                                    <div class="d-flex">
                                                        <div class="avatar avatar-m status-online me-3"><img
                                                                class="rounded-circle"
                                                                src="https://prium.github.io/phoenix/v1.18.0/assets/img/team/40x40/59.webp"
                                                                alt="" /></div>
                                                        <div class="flex-1 me-sm-3">
                                                            <h4 class="fs-9 text-body-emphasis">Herman Carter</h4>
                                                            <p class="fs-9 text-body-highlight mb-2 mb-sm-3 fw-normal">
                                                                <span class='me-1 fs-10'>👤</span>Tagged you in a
                                                                comment.<span
                                                                    class="ms-2 text-body-quaternary text-opacity-75 fw-bold fs-10"></span>
                                                            </p>
                                                            <p class="text-body-secondary fs-9 mb-0"><span
                                                                    class="me-1 fas fa-clock"></span><span
                                                                    class="fw-bold">10:58 PM </span>August 7,2021</p>
                                                        </div>
                                                    </div>
                                                    <div class="dropdown notification-dropdown"><button
                                                            class="btn fs-10 btn-sm dropdown-toggle dropdown-caret-none transition-none"
                                                            type="button" data-bs-toggle="dropdown"
                                                            data-boundary="window" aria-haspopup="true"
                                                            aria-expanded="false" data-bs-reference="parent"><span
                                                                class="fas fa-ellipsis-h fs-10 text-body"></span></button>
                                                        <div class="dropdown-menu py-2"><a class="dropdown-item"
                                                                href="#!">Mark as unread</a></div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="px-2 px-sm-3 py-3 notification-card position-relative read ">
                                                <div
                                                    class="d-flex align-items-center justify-content-between position-relative">
                                                    <div class="d-flex">
                                                        <div class="avatar avatar-m status-online me-3"><img
                                                                class="rounded-circle"
                                                                src="https://prium.github.io/phoenix/v1.18.0/assets/img/team/40x40/58.webp"
                                                                alt="" /></div>
                                                        <div class="flex-1 me-sm-3">
                                                            <h4 class="fs-9 text-body-emphasis">Benjamin Button</h4>
                                                            <p class="fs-9 text-body-highlight mb-2 mb-sm-3 fw-normal">
                                                                <span class='me-1 fs-10'>👍</span>Liked your
                                                                comment.<span
                                                                    class="ms-2 text-body-quaternary text-opacity-75 fw-bold fs-10"></span>
                                                            </p>
                                                            <p class="text-body-secondary fs-9 mb-0"><span
                                                                    class="me-1 fas fa-clock"></span><span
                                                                    class="fw-bold">10:18 AM </span>August 7,2021</p>
                                                        </div>
                                                    </div>
                                                    <div class="dropdown notification-dropdown"><button
                                                            class="btn fs-10 btn-sm dropdown-toggle dropdown-caret-none transition-none"
                                                            type="button" data-bs-toggle="dropdown"
                                                            data-boundary="window" aria-haspopup="true"
                                                            aria-expanded="false" data-bs-reference="parent"><span
                                                                class="fas fa-ellipsis-h fs-10 text-body"></span></button>
                                                        <div class="dropdown-menu py-2"><a class="dropdown-item"
                                                                href="#!">Mark as unread</a></div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="card-footer p-0 border-top border-translucent border-0">
                                        <div class="my-2 text-center fw-bold fs-10 text-body-tertiary text-opactity-85">
                                            <a class="fw-bolder"
                                                href="https://prium.github.io/phoenix/v1.18.0/pages/notifications.html">Notification
                                                history</a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </li>
                        <li class="nav-item dropdown">
                            <a class="nav-link" id="navbarDropdownNindeDots" href="#" role="button"
                                data-bs-toggle="dropdown" aria-haspopup="true" data-bs-auto-close="outside"
                                aria-expanded="false"><svg width="16" height="16" viewbox="0 0 16 16" fill="none"
                                    xmlns="http://www.w3.org/2000/svg">
                                    <circle cx="2" cy="2" r="2" fill="currentColor"></circle>
                                    <circle cx="2" cy="8" r="2" fill="currentColor"></circle>
                                    <circle cx="2" cy="14" r="2" fill="currentColor"></circle>
                                    <circle cx="8" cy="8" r="2" fill="currentColor"></circle>
                                    <circle cx="8" cy="14" r="2" fill="currentColor"></circle>
                                    <circle cx="14" cy="8" r="2" fill="currentColor"></circle>
                                    <circle cx="14" cy="14" r="2" fill="currentColor"></circle>
                                    <circle cx="8" cy="2" r="2" fill="currentColor"></circle>
                                    <circle cx="14" cy="2" r="2" fill="currentColor"></circle>
                                </svg></a>
                            <div class="dropdown-menu dropdown-menu-end navbar-dropdown-caret py-0 dropdown-nine-dots shadow border"
                                aria-labelledby="navbarDropdownNindeDots">
                                <div class="card bg-body-emphasis position-relative border-0">
                                    <div class="card-body pt-3 px-3 pb-0 overflow-auto scrollbar"
                                        style="height: 20rem;">
                                        <div class="row text-center align-items-center gx-0 gy-0">
                                            <div class="col-4"><a
                                                    class="d-block bg-body-secondary-hover p-2 rounded-3 text-center text-decoration-none mb-3"
                                                    href="#!"><img
                                                        src="https://prium.github.io/phoenix/v1.18.0/assets/img/nav-icons/behance.webp"
                                                        alt="" width="30" />
                                                    <p class="mb-0 text-body-emphasis text-truncate fs-10 mt-1 pt-1">
                                                        Behance</p>
                                                </a></div>
                                            <div class="col-4"><a
                                                    class="d-block bg-body-secondary-hover p-2 rounded-3 text-center text-decoration-none mb-3"
                                                    href="#!"><img
                                                        src="https://prium.github.io/phoenix/v1.18.0/assets/img/nav-icons/google-cloud.webp"
                                                        alt="" width="30" />
                                                    <p class="mb-0 text-body-emphasis text-truncate fs-10 mt-1 pt-1">
                                                        Cloud</p>
                                                </a></div>
                                            <div class="col-4"><a
                                                    class="d-block bg-body-secondary-hover p-2 rounded-3 text-center text-decoration-none mb-3"
                                                    href="#!"><img
                                                        src="https://prium.github.io/phoenix/v1.18.0/assets/img/nav-icons/slack.webp"
                                                        alt="" width="30" />
                                                    <p class="mb-0 text-body-emphasis text-truncate fs-10 mt-1 pt-1">
                                                        Slack</p>
                                                </a></div>
                                            <div class="col-4"><a
                                                    class="d-block bg-body-secondary-hover p-2 rounded-3 text-center text-decoration-none mb-3"
                                                    href="#!"><img
                                                        src="https://prium.github.io/phoenix/v1.18.0/assets/img/nav-icons/gitlab.webp"
                                                        alt="" width="30" />
                                                    <p class="mb-0 text-body-emphasis text-truncate fs-10 mt-1 pt-1">
                                                        Gitlab</p>
                                                </a></div>
                                            <div class="col-4"><a
                                                    class="d-block bg-body-secondary-hover p-2 rounded-3 text-center text-decoration-none mb-3"
                                                    href="#!"><img
                                                        src="https://prium.github.io/phoenix/v1.18.0/assets/img/nav-icons/bitbucket.webp"
                                                        alt="" width="30" />
                                                    <p class="mb-0 text-body-emphasis text-truncate fs-10 mt-1 pt-1">
                                                        BitBucket</p>
                                                </a></div>
                                            <div class="col-4"><a
                                                    class="d-block bg-body-secondary-hover p-2 rounded-3 text-center text-decoration-none mb-3"
                                                    href="#!"><img
                                                        src="https://prium.github.io/phoenix/v1.18.0/assets/img/nav-icons/google-drive.webp"
                                                        alt="" width="30" />
                                                    <p class="mb-0 text-body-emphasis text-truncate fs-10 mt-1 pt-1">
                                                        Drive</p>
                                                </a></div>
                                            <div class="col-4"><a
                                                    class="d-block bg-body-secondary-hover p-2 rounded-3 text-center text-decoration-none mb-3"
                                                    href="#!"><img
                                                        src="https://prium.github.io/phoenix/v1.18.0/assets/img/nav-icons/trello.webp"
                                                        alt="" width="30" />
                                                    <p class="mb-0 text-body-emphasis text-truncate fs-10 mt-1 pt-1">
                                                        Trello</p>
                                                </a></div>
                                            <div class="col-4"><a
                                                    class="d-block bg-body-secondary-hover p-2 rounded-3 text-center text-decoration-none mb-3"
                                                    href="#!"><img
                                                        src="https://prium.github.io/phoenix/v1.18.0/assets/img/nav-icons/figma.webp"
                                                        alt="" width="20" />
                                                    <p class="mb-0 text-body-emphasis text-truncate fs-10 mt-1 pt-1">
                                                        Figma</p>
                                                </a></div>
                                            <div class="col-4"><a
                                                    class="d-block bg-body-secondary-hover p-2 rounded-3 text-center text-decoration-none mb-3"
                                                    href="#!"><img
                                                        src="https://prium.github.io/phoenix/v1.18.0/assets/img/nav-icons/twitter.webp"
                                                        alt="" width="30" />
                                                    <p class="mb-0 text-body-emphasis text-truncate fs-10 mt-1 pt-1">
                                                        Twitter</p>
                                                </a></div>
                                            <div class="col-4"><a
                                                    class="d-block bg-body-secondary-hover p-2 rounded-3 text-center text-decoration-none mb-3"
                                                    href="#!"><img
                                                        src="https://prium.github.io/phoenix/v1.18.0/assets/img/nav-icons/pinterest.webp"
                                                        alt="" width="30" />
                                                    <p class="mb-0 text-body-emphasis text-truncate fs-10 mt-1 pt-1">
                                                        Pinterest</p>
                                                </a></div>
                                            <div class="col-4"><a
                                                    class="d-block bg-body-secondary-hover p-2 rounded-3 text-center text-decoration-none mb-3"
                                                    href="#!"><img
                                                        src="https://prium.github.io/phoenix/v1.18.0/assets/img/nav-icons/ln.webp"
                                                        alt="" width="30" />
                                                    <p class="mb-0 text-body-emphasis text-truncate fs-10 mt-1 pt-1">
                                                        Linkedin</p>
                                                </a></div>
                                            <div class="col-4"><a
                                                    class="d-block bg-body-secondary-hover p-2 rounded-3 text-center text-decoration-none mb-3"
                                                    href="#!"><img
                                                        src="https://prium.github.io/phoenix/v1.18.0/assets/img/nav-icons/google-maps.webp"
                                                        alt="" width="30" />
                                                    <p class="mb-0 text-body-emphasis text-truncate fs-10 mt-1 pt-1">
                                                        Maps</p>
                                                </a></div>
                                            <div class="col-4"><a
                                                    class="d-block bg-body-secondary-hover p-2 rounded-3 text-center text-decoration-none mb-3"
                                                    href="#!"><img
                                                        src="https://prium.github.io/phoenix/v1.18.0/assets/img/nav-icons/google-photos.webp"
                                                        alt="" width="30" />
                                                    <p class="mb-0 text-body-emphasis text-truncate fs-10 mt-1 pt-1">
                                                        Photos</p>
                                                </a></div>
                                            <div class="col-4"><a
                                                    class="d-block bg-body-secondary-hover p-2 rounded-3 text-center text-decoration-none mb-3"
                                                    href="#!"><img
                                                        src="https://prium.github.io/phoenix/v1.18.0/assets/img/nav-icons/spotify.webp"
                                                        alt="" width="30" />
                                                    <p class="mb-0 text-body-emphasis text-truncate fs-10 mt-1 pt-1">
                                                        Spotify</p>
                                                </a></div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </li>
                        <li class="nav-item dropdown"><a class="nav-link lh-1 pe-0" id="navbarDropdownUser" href="#!"
                                role="button" data-bs-toggle="dropdown" data-bs-auto-close="outside"
                                aria-haspopup="true" aria-expanded="false">
                                <div class="avatar avatar-l ">
                                    <img class="rounded-circle "
                                        src="https://prium.github.io/phoenix/v1.18.0/assets/img/team/40x40/57.webp"
                                        alt="" />
                                </div>
                            </a>
                            <div class="dropdown-menu dropdown-menu-end navbar-dropdown-caret py-0 dropdown-profile shadow border"
                                aria-labelledby="navbarDropdownUser">
                                <div class="card position-relative border-0">
                                    <div class="card-body p-0">
                                        <div class="text-center pt-4 pb-3">
                                            <div class="avatar avatar-xl ">
                                                <img class="rounded-circle "
                                                    src="https://prium.github.io/phoenix/v1.18.0/assets/img/team/72x72/57.webp"
                                                    alt="" />
                                            </div>
                                            <h6 class="mt-2 text-body-emphasis">Jerry Seinfield</h6>
                                        </div>
                                        <div class="mb-3 mx-3"><input class="form-control form-control-sm"
                                                id="statusUpdateInput" type="text" placeholder="Update your status" />
                                        </div>
                                    </div>
                                    <div class="overflow-auto scrollbar" style="height: 10rem;">
                                        <ul class="nav d-flex flex-column mb-2 pb-1">
                                            <li class="nav-item"><a class="nav-link px-3 d-block" href="#!"> <span
                                                        class="me-2 text-body align-bottom"
                                                        data-feather="user"></span><span>Profile</span></a></li>
                                            <li class="nav-item"><a class="nav-link px-3 d-block" href="#!"><span
                                                        class="me-2 text-body align-bottom"
                                                        data-feather="pie-chart"></span>Dashboard</a></li>
                                            <li class="nav-item"><a class="nav-link px-3 d-block" href="#!"> <span
                                                        class="me-2 text-body align-bottom"
                                                        data-feather="lock"></span>Posts &amp; Activity</a></li>
                                            <li class="nav-item"><a class="nav-link px-3 d-block" href="#!"> <span
                                                        class="me-2 text-body align-bottom"
                                                        data-feather="settings"></span>Settings &amp; Privacy </a></li>
                                            <li class="nav-item"><a class="nav-link px-3 d-block" href="#!"> <span
                                                        class="me-2 text-body align-bottom"
                                                        data-feather="help-circle"></span>Help Center</a></li>
                                            <li class="nav-item"><a class="nav-link px-3 d-block" href="#!"> <span
                                                        class="me-2 text-body align-bottom"
                                                        data-feather="globe"></span>Language</a></li>
                                        </ul>
                                    </div>
                                    <div class="card-footer p-0 border-top border-translucent">
                                        <ul class="nav d-flex flex-column my-3">
                                            <li class="nav-item"><a class="nav-link px-3 d-block" href="#!"> <span
                                                        class="me-2 text-body align-bottom"
                                                        data-feather="user-plus"></span>Add another account</a></li>
                                        </ul>
                                        <hr />
                                        <div class="px-3"> <a class="btn btn-phoenix-secondary d-flex flex-center w-100"
                                                href="#!"> <span class="me-2" data-feather="log-out"> </span>Sign
                                                out</a></div>
                                        <div class="my-2 text-center fw-bold fs-10 text-body-quaternary"><a
                                                class="text-body-quaternary me-1" href="#!">Privacy policy</a>&bull;<a
                                                class="text-body-quaternary mx-1" href="#!">Terms</a>&bull;<a
                                                class="text-body-quaternary ms-1" href="#!">Cookies</a></div>
                                    </div>
                                </div>
                            </div>
                        </li>
                    </ul>
                </div>
                <div class="collapse navbar-collapse navbar-top-collapse justify-content-center" id="navbarTopCollapse">
                    <ul class="navbar-nav navbar-nav-top" data-dropdown-on-hover="data-dropdown-on-hover">
                        <li class="nav-item dropdown"><a class="nav-link dropdown-toggle lh-1" href="#!" role="button"
                                data-bs-toggle="dropdown" data-bs-auto-close="outside" aria-haspopup="true"
                                aria-expanded="false"><span class="uil fs-8 me-2 uil-chart-pie"></span>Home</a>
                            <ul class="dropdown-menu navbar-dropdown-caret">
                                <li><a class="dropdown-item" href="https://prium.github.io/phoenix/v1.18.0/index.html">
                                        <div class="dropdown-item-wrapper"><span class="me-2 uil"
                                                data-feather="shopping-cart"></span>E commerce</div>
                                    </a></li>
                                <li><a class="dropdown-item" href="project-management.html">
                                        <div class="dropdown-item-wrapper"><span class="me-2 uil"
                                                data-feather="clipboard"></span>Project management</div>
                                    </a></li>
                                <li><a class="dropdown-item" href="crm.html">
                                        <div class="dropdown-item-wrapper"><span class="me-2 uil"
                                                data-feather="phone"></span>CRM</div>
                                    </a></li>
                                <li><a class="dropdown-item active" href="travel-agency.html">
                                        <div class="dropdown-item-wrapper"><span class="me-2 uil"
                                                data-feather="briefcase"></span>Travel agency</div>
                                    </a></li>
                                <li><a class="dropdown-item"
                                        href="https://prium.github.io/phoenix/v1.18.0/apps/social/feed.html">
                                        <div class="dropdown-item-wrapper"><span class="me-2 uil"
                                                data-feather="share-2"></span>Social feed</div>
                                    </a></li>
                            </ul>
                        </li>
                        <li class="nav-item dropdown"><a class="nav-link dropdown-toggle lh-1" href="#!" role="button"
                                data-bs-toggle="dropdown" data-bs-auto-close="outside" aria-haspopup="true"
                                aria-expanded="false"><span class="uil fs-8 me-2 uil-cube"></span>Apps</a>
                            <ul class="dropdown-menu navbar-dropdown-caret">
                                <li class="dropdown"><a class="dropdown-item dropdown-toggle" id="e-commerce" href="#"
                                        data-bs-toggle="dropdown" data-bs-auto-close="outside">
                                        <div class="dropdown-item-wrapper"><span
                                                class="uil fs-8 uil-angle-right lh-1 dropdown-indicator-icon"></span><span><span
                                                    class="me-2 uil" data-feather="shopping-cart"></span>E
                                                commerce</span></div>
                                    </a>
                                    <ul class="dropdown-menu">
                                        <li class="dropdown"><a class="dropdown-item dropdown-toggle" id="admin"
                                                href="#" data-bs-toggle="dropdown" data-bs-auto-close="outside">
                                                <div class="dropdown-item-wrapper"><span
                                                        class="uil fs-8 uil-angle-right lh-1 dropdown-indicator-icon"></span><span><span
                                                            class="me-2 uil"></span>Admin</span></div>
                                            </a>
                                            <ul class="dropdown-menu">
                                                <li><a class="dropdown-item"
                                                        href="https://prium.github.io/phoenix/v1.18.0/apps/e-commerce/admin/add-product.html">
                                                        <div class="dropdown-item-wrapper"><span
                                                                class="me-2 uil"></span>Add product</div>
                                                    </a></li>
                                                <li><a class="dropdown-item"
                                                        href="https://prium.github.io/phoenix/v1.18.0/apps/e-commerce/admin/products.html">
                                                        <div class="dropdown-item-wrapper"><span
                                                                class="me-2 uil"></span>Products</div>
                                                    </a></li>
                                                <li><a class="dropdown-item"
                                                        href="https://prium.github.io/phoenix/v1.18.0/apps/e-commerce/admin/customers.html">
                                                        <div class="dropdown-item-wrapper"><span
                                                                class="me-2 uil"></span>Customers</div>
                                                    </a></li>
                                                <li><a class="dropdown-item"
                                                        href="https://prium.github.io/phoenix/v1.18.0/apps/e-commerce/admin/customer-details.html">
                                                        <div class="dropdown-item-wrapper"><span
                                                                class="me-2 uil"></span>Customer details</div>
                                                    </a></li>
                                                <li><a class="dropdown-item"
                                                        href="https://prium.github.io/phoenix/v1.18.0/apps/e-commerce/admin/orders.html">
                                                        <div class="dropdown-item-wrapper"><span
                                                                class="me-2 uil"></span>Orders</div>
                                                    </a></li>
                                                <li><a class="dropdown-item"
                                                        href="https://prium.github.io/phoenix/v1.18.0/apps/e-commerce/admin/order-details.html">
                                                        <div class="dropdown-item-wrapper"><span
                                                                class="me-2 uil"></span>Order details</div>
                                                    </a></li>
                                                <li><a class="dropdown-item"
                                                        href="https://prium.github.io/phoenix/v1.18.0/apps/e-commerce/admin/refund.html">
                                                        <div class="dropdown-item-wrapper"><span
                                                                class="me-2 uil"></span>Refund</div>
                                                    </a></li>
                                            </ul>
                                        </li>
                                        <li class="dropdown"><a class="dropdown-item dropdown-toggle" id="customer"
                                                href="#" data-bs-toggle="dropdown" data-bs-auto-close="outside">
                                                <div class="dropdown-item-wrapper"><span
                                                        class="uil fs-8 uil-angle-right lh-1 dropdown-indicator-icon"></span><span><span
                                                            class="me-2 uil"></span>Customer</span></div>
                                            </a>
                                            <ul class="dropdown-menu">
                                                <li><a class="dropdown-item"
                                                        href="https://prium.github.io/phoenix/v1.18.0/apps/e-commerce/landing/homepage.html">
                                                        <div class="dropdown-item-wrapper"><span
                                                                class="me-2 uil"></span>Homepage</div>
                                                    </a></li>
                                                <li><a class="dropdown-item"
                                                        href="https://prium.github.io/phoenix/v1.18.0/apps/e-commerce/landing/product-details.html">
                                                        <div class="dropdown-item-wrapper"><span
                                                                class="me-2 uil"></span>Product details</div>
                                                    </a></li>
                                                <li><a class="dropdown-item"
                                                        href="https://prium.github.io/phoenix/v1.18.0/apps/e-commerce/landing/products-filter.html">
                                                        <div class="dropdown-item-wrapper"><span
                                                                class="me-2 uil"></span>Products filter</div>
                                                    </a></li>
                                                <li><a class="dropdown-item"
                                                        href="https://prium.github.io/phoenix/v1.18.0/apps/e-commerce/landing/cart.html">
                                                        <div class="dropdown-item-wrapper"><span
                                                                class="me-2 uil"></span>Cart</div>
                                                    </a></li>
                                                <li><a class="dropdown-item"
                                                        href="https://prium.github.io/phoenix/v1.18.0/apps/e-commerce/landing/checkout.html">
                                                        <div class="dropdown-item-wrapper"><span
                                                                class="me-2 uil"></span>Checkout</div>
                                                    </a></li>
                                                <li><a class="dropdown-item"
                                                        href="https://prium.github.io/phoenix/v1.18.0/apps/e-commerce/landing/shipping-info.html">
                                                        <div class="dropdown-item-wrapper"><span
                                                                class="me-2 uil"></span>Shipping info</div>
                                                    </a></li>
                                                <li><a class="dropdown-item"
                                                        href="https://prium.github.io/phoenix/v1.18.0/apps/e-commerce/landing/profile.html">
                                                        <div class="dropdown-item-wrapper"><span
                                                                class="me-2 uil"></span>Profile</div>
                                                    </a></li>
                                                <li><a class="dropdown-item"
                                                        href="https://prium.github.io/phoenix/v1.18.0/apps/e-commerce/landing/favourite-stores.html">
                                                        <div class="dropdown-item-wrapper"><span
                                                                class="me-2 uil"></span>Favourite stores</div>
                                                    </a></li>
                                                <li><a class="dropdown-item"
                                                        href="https://prium.github.io/phoenix/v1.18.0/apps/e-commerce/landing/wishlist.html">
                                                        <div class="dropdown-item-wrapper"><span
                                                                class="me-2 uil"></span>Wishlist</div>
                                                    </a></li>
                                                <li><a class="dropdown-item"
                                                        href="https://prium.github.io/phoenix/v1.18.0/apps/e-commerce/landing/order-tracking.html">
                                                        <div class="dropdown-item-wrapper"><span
                                                                class="me-2 uil"></span>Order tracking</div>
                                                    </a></li>
                                                <li><a class="dropdown-item"
                                                        href="https://prium.github.io/phoenix/v1.18.0/apps/e-commerce/landing/invoice.html">
                                                        <div class="dropdown-item-wrapper"><span
                                                                class="me-2 uil"></span>Invoice</div>
                                                    </a></li>
                                            </ul>
                                        </li>
                                    </ul>
                                </li>
                                <li class="dropdown"><a class="dropdown-item dropdown-toggle" id="CRM" href="#"
                                        data-bs-toggle="dropdown" data-bs-auto-close="outside">
                                        <div class="dropdown-item-wrapper"><span
                                                class="uil fs-8 uil-angle-right lh-1 dropdown-indicator-icon"></span><span><span
                                                    class="me-2 uil" data-feather="phone"></span>CRM</span></div>
                                    </a>
                                    <ul class="dropdown-menu">
                                        <li><a class="dropdown-item"
                                                href="https://prium.github.io/phoenix/v1.18.0/apps/crm/analytics.html">
                                                <div class="dropdown-item-wrapper"><span
                                                        class="me-2 uil"></span>Analytics</div>
                                            </a></li>
                                        <li><a class="dropdown-item"
                                                href="https://prium.github.io/phoenix/v1.18.0/apps/crm/deals.html">
                                                <div class="dropdown-item-wrapper"><span class="me-2 uil"></span>Deals
                                                </div>
                                            </a></li>
                                        <li><a class="dropdown-item"
                                                href="https://prium.github.io/phoenix/v1.18.0/apps/crm/deal-details.html">
                                                <div class="dropdown-item-wrapper"><span class="me-2 uil"></span>Deal
                                                    details</div>
                                            </a></li>
                                        <li><a class="dropdown-item"
                                                href="https://prium.github.io/phoenix/v1.18.0/apps/crm/leads.html">
                                                <div class="dropdown-item-wrapper"><span class="me-2 uil"></span>Leads
                                                </div>
                                            </a></li>
                                        <li><a class="dropdown-item"
                                                href="https://prium.github.io/phoenix/v1.18.0/apps/crm/lead-details.html">
                                                <div class="dropdown-item-wrapper"><span class="me-2 uil"></span>Lead
                                                    details</div>
                                            </a></li>
                                        <li><a class="dropdown-item"
                                                href="https://prium.github.io/phoenix/v1.18.0/apps/crm/reports.html">
                                                <div class="dropdown-item-wrapper"><span class="me-2 uil"></span>Reports
                                                </div>
                                            </a></li>
                                        <li><a class="dropdown-item"
                                                href="https://prium.github.io/phoenix/v1.18.0/apps/crm/report-details.html">
                                                <div class="dropdown-item-wrapper"><span class="me-2 uil"></span>Report
                                                    details</div>
                                            </a></li>
                                        <li><a class="dropdown-item"
                                                href="https://prium.github.io/phoenix/v1.18.0/apps/crm/add-contact.html">
                                                <div class="dropdown-item-wrapper"><span class="me-2 uil"></span>Add
                                                    contact</div>
                                            </a></li>
                                    </ul>
                                </li>
                                <li class="dropdown"><a class="dropdown-item dropdown-toggle" id="project-management"
                                        href="#" data-bs-toggle="dropdown" data-bs-auto-close="outside">
                                        <div class="dropdown-item-wrapper"><span
                                                class="uil fs-8 uil-angle-right lh-1 dropdown-indicator-icon"></span><span><span
                                                    class="me-2 uil" data-feather="clipboard"></span>Project
                                                management</span></div>
                                    </a>
                                    <ul class="dropdown-menu">
                                        <li><a class="dropdown-item"
                                                href="https://prium.github.io/phoenix/v1.18.0/apps/project-management/create-new.html">
                                                <div class="dropdown-item-wrapper"><span class="me-2 uil"></span>Create
                                                    new</div>
                                            </a></li>
                                        <li><a class="dropdown-item"
                                                href="https://prium.github.io/phoenix/v1.18.0/apps/project-management/project-list-view.html">
                                                <div class="dropdown-item-wrapper"><span class="me-2 uil"></span>Project
                                                    list view</div>
                                            </a></li>
                                        <li><a class="dropdown-item"
                                                href="https://prium.github.io/phoenix/v1.18.0/apps/project-management/project-card-view.html">
                                                <div class="dropdown-item-wrapper"><span class="me-2 uil"></span>Project
                                                    card view</div>
                                            </a></li>
                                        <li><a class="dropdown-item"
                                                href="https://prium.github.io/phoenix/v1.18.0/apps/project-management/project-board-view.html">
                                                <div class="dropdown-item-wrapper"><span class="me-2 uil"></span>Project
                                                    board view</div>
                                            </a></li>
                                        <li><a class="dropdown-item"
                                                href="https://prium.github.io/phoenix/v1.18.0/apps/project-management/todo-list.html">
                                                <div class="dropdown-item-wrapper"><span class="me-2 uil"></span>Todo
                                                    list</div>
                                            </a></li>
                                        <li><a class="dropdown-item"
                                                href="https://prium.github.io/phoenix/v1.18.0/apps/project-management/project-details.html">
                                                <div class="dropdown-item-wrapper"><span class="me-2 uil"></span>Project
                                                    details</div>
                                            </a></li>
                                    </ul>
                                </li>
                                <li class="dropdown"><a class="dropdown-item dropdown-toggle" id="travel-agency"
                                        href="#" data-bs-toggle="dropdown" data-bs-auto-close="outside">
                                        <div class="dropdown-item-wrapper"><span
                                                class="uil fs-8 uil-angle-right lh-1 dropdown-indicator-icon"></span><span><span
                                                    class="me-2 uil" data-feather="briefcase"></span>Travel
                                                agency</span></div>
                                    </a>
                                    <ul class="dropdown-menu">
                                        <li><a class="dropdown-item"
                                                href="https://prium.github.io/phoenix/v1.18.0/apps/travel-agency/landing.html">
                                                <div class="dropdown-item-wrapper"><span class="me-2 uil"></span>Landing
                                                </div>
                                            </a></li>
                                        <li class="dropdown"><a class="dropdown-item dropdown-toggle" id="hotel"
                                                href="#" data-bs-toggle="dropdown" data-bs-auto-close="outside">
                                                <div class="dropdown-item-wrapper"><span
                                                        class="uil fs-8 uil-angle-right lh-1 dropdown-indicator-icon"></span><span><span
                                                            class="me-2 uil"></span>Hotel</span></div>
                                            </a>
                                            <ul class="dropdown-menu">
                                                <li class="dropdown"><a class="dropdown-item dropdown-toggle" id="admin"
                                                        href="#" data-bs-toggle="dropdown" data-bs-auto-close="outside">
                                                        <div class="dropdown-item-wrapper"><span
                                                                class="uil fs-8 uil-angle-right lh-1 dropdown-indicator-icon"></span><span><span
                                                                    class="me-2 uil"></span>Admin</span></div>
                                                    </a>
                                                    <ul class="dropdown-menu">
                                                        <li><a class="dropdown-item"
                                                                href="https://prium.github.io/phoenix/v1.18.0/apps/travel-agency/hotel/admin/add-property.html">
                                                                <div class="dropdown-item-wrapper"><span
                                                                        class="me-2 uil"></span>Add property</div>
                                                            </a></li>
                                                        <li><a class="dropdown-item"
                                                                href="https://prium.github.io/phoenix/v1.18.0/apps/travel-agency/hotel/admin/add-room.html">
                                                                <div class="dropdown-item-wrapper"><span
                                                                        class="me-2 uil"></span>Add room</div>
                                                            </a></li>
                                                        <li><a class="dropdown-item"
                                                                href="https://prium.github.io/phoenix/v1.18.0/apps/travel-agency/hotel/admin/room-listing.html">
                                                                <div class="dropdown-item-wrapper"><span
                                                                        class="me-2 uil"></span>Room listing</div>
                                                            </a></li>
                                                        <li><a class="dropdown-item"
                                                                href="https://prium.github.io/phoenix/v1.18.0/apps/travel-agency/hotel/admin/room-search.html">
                                                                <div class="dropdown-item-wrapper"><span
                                                                        class="me-2 uil"></span>Search room</div>
                                                            </a></li>
                                                    </ul>
                                                </li>
                                                <li class="dropdown"><a class="dropdown-item dropdown-toggle"
                                                        id="customer" href="#" data-bs-toggle="dropdown"
                                                        data-bs-auto-close="outside">
                                                        <div class="dropdown-item-wrapper"><span
                                                                class="uil fs-8 uil-angle-right lh-1 dropdown-indicator-icon"></span><span><span
                                                                    class="me-2 uil"></span>Customer</span></div>
                                                    </a>
                                                    <ul class="dropdown-menu">
                                                        <li><a class="dropdown-item"
                                                                href="https://prium.github.io/phoenix/v1.18.0/apps/travel-agency/hotel/customer/homepage.html">
                                                                <div class="dropdown-item-wrapper"><span
                                                                        class="me-2 uil"></span>Homepage</div>
                                                            </a></li>
                                                        <li><a class="dropdown-item"
                                                                href="https://prium.github.io/phoenix/v1.18.0/apps/travel-agency/hotel/customer/hotel-details.html">
                                                                <div class="dropdown-item-wrapper"><span
                                                                        class="me-2 uil"></span>Hotel details</div>
                                                            </a></li>
                                                        <li><a class="dropdown-item"
                                                                href="https://prium.github.io/phoenix/v1.18.0/apps/travel-agency/hotel/customer/hotel-compare.html">
                                                                <div class="dropdown-item-wrapper"><span
                                                                        class="me-2 uil"></span>Hotel compare</div>
                                                            </a></li>
                                                        <li><a class="dropdown-item"
                                                                href="https://prium.github.io/phoenix/v1.18.0/apps/travel-agency/hotel/customer/checkout.html">
                                                                <div class="dropdown-item-wrapper"><span
                                                                        class="me-2 uil"></span>Checkout</div>
                                                            </a></li>
                                                        <li><a class="dropdown-item"
                                                                href="https://prium.github.io/phoenix/v1.18.0/apps/travel-agency/hotel/customer/payment.html">
                                                                <div class="dropdown-item-wrapper"><span
                                                                        class="me-2 uil"></span>Payment</div>
                                                            </a></li>
                                                        <li><a class="dropdown-item"
                                                                href="https://prium.github.io/phoenix/v1.18.0/apps/travel-agency/hotel/customer/gallery.html">
                                                                <div class="dropdown-item-wrapper"><span
                                                                        class="me-2 uil"></span>Gallery</div>
                                                            </a></li>
                                                    </ul>
                                                </li>
                                            </ul>
                                        </li>
                                        <li class="dropdown"><a class="dropdown-item dropdown-toggle" id="flight"
                                                href="#" data-bs-toggle="dropdown" data-bs-auto-close="outside">
                                                <div class="dropdown-item-wrapper"><span
                                                        class="uil fs-8 uil-angle-right lh-1 dropdown-indicator-icon"></span><span><span
                                                            class="me-2 uil"></span>Flight</span></div>
                                            </a>
                                            <ul class="dropdown-menu">
                                                <li><a class="dropdown-item"
                                                        href="https://prium.github.io/phoenix/v1.18.0/apps/travel-agency/flight/homepage.html">
                                                        <div class="dropdown-item-wrapper"><span
                                                                class="me-2 uil"></span>Homepage</div>
                                                    </a></li>
                                                <li><a class="dropdown-item"
                                                        href="https://prium.github.io/phoenix/v1.18.0/apps/travel-agency/flight/booking.html">
                                                        <div class="dropdown-item-wrapper"><span
                                                                class="me-2 uil"></span>Booking</div>
                                                    </a></li>
                                                <li><a class="dropdown-item"
                                                        href="https://prium.github.io/phoenix/v1.18.0/apps/travel-agency/flight/payment.html">
                                                        <div class="dropdown-item-wrapper"><span
                                                                class="me-2 uil"></span>Payment</div>
                                                    </a></li>
                                            </ul>
                                        </li>
                                        <li class="dropdown"><a class="dropdown-item dropdown-toggle" id="trip" href="#"
                                                data-bs-toggle="dropdown" data-bs-auto-close="outside">
                                                <div class="dropdown-item-wrapper"><span
                                                        class="uil fs-8 uil-angle-right lh-1 dropdown-indicator-icon"></span><span><span
                                                            class="me-2 uil"></span>Trip</span></div>
                                            </a>
                                            <ul class="dropdown-menu">
                                                <li><a class="dropdown-item"
                                                        href="https://prium.github.io/phoenix/v1.18.0/apps/travel-agency/trip/homepage.html">
                                                        <div class="dropdown-item-wrapper"><span
                                                                class="me-2 uil"></span>Homepage</div>
                                                    </a></li>
                                                <li><a class="dropdown-item"
                                                        href="https://prium.github.io/phoenix/v1.18.0/apps/travel-agency/trip/trip-details.html">
                                                        <div class="dropdown-item-wrapper"><span
                                                                class="me-2 uil"></span>Trip details</div>
                                                    </a></li>
                                                <li><a class="dropdown-item"
                                                        href="https://prium.github.io/phoenix/v1.18.0/apps/travel-agency/trip/checkout.html">
                                                        <div class="dropdown-item-wrapper"><span
                                                                class="me-2 uil"></span>Checkout</div>
                                                    </a></li>
                                            </ul>
                                        </li>
                                    </ul>
                                </li>
                                <li><a class="dropdown-item"
                                        href="https://prium.github.io/phoenix/v1.18.0/apps/chat.html">
                                        <div class="dropdown-item-wrapper"><span class="me-2 uil"
                                                data-feather="message-square"></span>Chat</div>
                                    </a></li>
                                <li class="dropdown"><a class="dropdown-item dropdown-toggle" id="email" href="#"
                                        data-bs-toggle="dropdown" data-bs-auto-close="outside">
                                        <div class="dropdown-item-wrapper"><span
                                                class="uil fs-8 uil-angle-right lh-1 dropdown-indicator-icon"></span><span><span
                                                    class="me-2 uil" data-feather="mail"></span>Email</span></div>
                                    </a>
                                    <ul class="dropdown-menu">
                                        <li><a class="dropdown-item"
                                                href="https://prium.github.io/phoenix/v1.18.0/apps/email/inbox.html">
                                                <div class="dropdown-item-wrapper"><span class="me-2 uil"></span>Inbox
                                                </div>
                                            </a></li>
                                        <li><a class="dropdown-item"
                                                href="https://prium.github.io/phoenix/v1.18.0/apps/email/email-detail.html">
                                                <div class="dropdown-item-wrapper"><span class="me-2 uil"></span>Email
                                                    detail</div>
                                            </a></li>
                                        <li><a class="dropdown-item"
                                                href="https://prium.github.io/phoenix/v1.18.0/apps/email/compose.html">
                                                <div class="dropdown-item-wrapper"><span class="me-2 uil"></span>Compose
                                                </div>
                                            </a></li>
                                    </ul>
                                </li>
                                <li class="dropdown"><a class="dropdown-item dropdown-toggle" id="events" href="#"
                                        data-bs-toggle="dropdown" data-bs-auto-close="outside">
                                        <div class="dropdown-item-wrapper"><span
                                                class="uil fs-8 uil-angle-right lh-1 dropdown-indicator-icon"></span><span><span
                                                    class="me-2 uil" data-feather="bookmark"></span>Events</span></div>
                                    </a>
                                    <ul class="dropdown-menu">
                                        <li><a class="dropdown-item"
                                                href="https://prium.github.io/phoenix/v1.18.0/apps/events/create-an-event.html">
                                                <div class="dropdown-item-wrapper"><span class="me-2 uil"></span>Create
                                                    an event</div>
                                            </a></li>
                                        <li><a class="dropdown-item"
                                                href="https://prium.github.io/phoenix/v1.18.0/apps/events/event-detail.html">
                                                <div class="dropdown-item-wrapper"><span class="me-2 uil"></span>Event
                                                    detail</div>
                                            </a></li>
                                    </ul>
                                </li>
                                <li class="dropdown"><a class="dropdown-item dropdown-toggle" id="kanban" href="#"
                                        data-bs-toggle="dropdown" data-bs-auto-close="outside">
                                        <div class="dropdown-item-wrapper"><span
                                                class="uil fs-8 uil-angle-right lh-1 dropdown-indicator-icon"></span><span><span
                                                    class="me-2 uil" data-feather="trello"></span>Kanban</span></div>
                                    </a>
                                    <ul class="dropdown-menu">
                                        <li><a class="dropdown-item"
                                                href="https://prium.github.io/phoenix/v1.18.0/apps/kanban/kanban.html">
                                                <div class="dropdown-item-wrapper"><span class="me-2 uil"></span>Kanban
                                                </div>
                                            </a></li>
                                        <li><a class="dropdown-item"
                                                href="https://prium.github.io/phoenix/v1.18.0/apps/kanban/boards.html">
                                                <div class="dropdown-item-wrapper"><span class="me-2 uil"></span>Boards
                                                </div>
                                            </a></li>
                                        <li><a class="dropdown-item"
                                                href="https://prium.github.io/phoenix/v1.18.0/apps/kanban/create-kanban-board.html">
                                                <div class="dropdown-item-wrapper"><span class="me-2 uil"></span>Create
                                                    board</div>
                                            </a></li>
                                    </ul>
                                </li>
                                <li class="dropdown"><a class="dropdown-item dropdown-toggle" id="social" href="#"
                                        data-bs-toggle="dropdown" data-bs-auto-close="outside">
                                        <div class="dropdown-item-wrapper"><span
                                                class="uil fs-8 uil-angle-right lh-1 dropdown-indicator-icon"></span><span><span
                                                    class="me-2 uil" data-feather="share-2"></span>Social</span></div>
                                    </a>
                                    <ul class="dropdown-menu">
                                        <li><a class="dropdown-item"
                                                href="https://prium.github.io/phoenix/v1.18.0/apps/social/profile.html">
                                                <div class="dropdown-item-wrapper"><span class="me-2 uil"></span>Profile
                                                </div>
                                            </a></li>
                                        <li><a class="dropdown-item"
                                                href="https://prium.github.io/phoenix/v1.18.0/apps/social/settings.html">
                                                <div class="dropdown-item-wrapper"><span
                                                        class="me-2 uil"></span>Settings</div>
                                            </a></li>
                                    </ul>
                                </li>
                                <li><a class="dropdown-item"
                                        href="https://prium.github.io/phoenix/v1.18.0/apps/calendar.html">
                                        <div class="dropdown-item-wrapper"><span class="me-2 uil"
                                                data-feather="calendar"></span>Calendar</div>
                                    </a></li>
                            </ul>
                        </li>
                        <li class="nav-item dropdown"><a class="nav-link dropdown-toggle lh-1" href="#!" role="button"
                                data-bs-toggle="dropdown" data-bs-auto-close="outside" aria-haspopup="true"
                                aria-expanded="false"><span
                                    class="uil fs-8 me-2 uil-files-landscapes-alt"></span>Pages</a>
                            <ul class="dropdown-menu navbar-dropdown-caret">
                                <li><a class="dropdown-item"
                                        href="https://prium.github.io/phoenix/v1.18.0/pages/starter.html">
                                        <div class="dropdown-item-wrapper"><span class="me-2 uil"
                                                data-feather="compass"></span>Starter</div>
                                    </a></li>
                                <li class="dropdown"><a class="dropdown-item dropdown-toggle" id="faq" href="#"
                                        data-bs-toggle="dropdown" data-bs-auto-close="outside">
                                        <div class="dropdown-item-wrapper"><span
                                                class="uil fs-8 uil-angle-right lh-1 dropdown-indicator-icon"></span><span><span
                                                    class="me-2 uil" data-feather="help-circle"></span>Faq</span></div>
                                    </a>
                                    <ul class="dropdown-menu">
                                        <li><a class="dropdown-item"
                                                href="https://prium.github.io/phoenix/v1.18.0/pages/faq/faq-accordion.html">
                                                <div class="dropdown-item-wrapper"><span class="me-2 uil"></span>Faq
                                                    accordion</div>
                                            </a></li>
                                        <li><a class="dropdown-item"
                                                href="https://prium.github.io/phoenix/v1.18.0/pages/faq/faq-tab.html">
                                                <div class="dropdown-item-wrapper"><span class="me-2 uil"></span>Faq tab
                                                </div>
                                            </a></li>
                                    </ul>
                                </li>
                                <li class="dropdown"><a class="dropdown-item dropdown-toggle" id="landing" href="#"
                                        data-bs-toggle="dropdown" data-bs-auto-close="outside">
                                        <div class="dropdown-item-wrapper"><span
                                                class="uil fs-8 uil-angle-right lh-1 dropdown-indicator-icon"></span><span><span
                                                    class="me-2 uil" data-feather="globe"></span>Landing</span></div>
                                    </a>
                                    <ul class="dropdown-menu">
                                        <li><a class="dropdown-item"
                                                href="https://prium.github.io/phoenix/v1.18.0/pages/landing/default.html">
                                                <div class="dropdown-item-wrapper"><span class="me-2 uil"></span>Default
                                                </div>
                                            </a></li>
                                        <li><a class="dropdown-item"
                                                href="https://prium.github.io/phoenix/v1.18.0/pages/landing/alternate.html">
                                                <div class="dropdown-item-wrapper"><span
                                                        class="me-2 uil"></span>Alternate</div>
                                            </a></li>
                                    </ul>
                                </li>
                                <li class="dropdown"><a class="dropdown-item dropdown-toggle" id="pricing" href="#"
                                        data-bs-toggle="dropdown" data-bs-auto-close="outside">
                                        <div class="dropdown-item-wrapper"><span
                                                class="uil fs-8 uil-angle-right lh-1 dropdown-indicator-icon"></span><span><span
                                                    class="me-2 uil" data-feather="tag"></span>Pricing</span></div>
                                    </a>
                                    <ul class="dropdown-menu">
                                        <li><a class="dropdown-item"
                                                href="https://prium.github.io/phoenix/v1.18.0/pages/pricing/pricing-column.html">
                                                <div class="dropdown-item-wrapper"><span class="me-2 uil"></span>Pricing
                                                    column</div>
                                            </a></li>
                                        <li><a class="dropdown-item"
                                                href="https://prium.github.io/phoenix/v1.18.0/pages/pricing/pricing-grid.html">
                                                <div class="dropdown-item-wrapper"><span class="me-2 uil"></span>Pricing
                                                    grid</div>
                                            </a></li>
                                    </ul>
                                </li>
                                <li><a class="dropdown-item"
                                        href="https://prium.github.io/phoenix/v1.18.0/pages/notifications.html">
                                        <div class="dropdown-item-wrapper"><span class="me-2 uil"
                                                data-feather="bell"></span>Notifications</div>
                                    </a></li>
                                <li><a class="dropdown-item"
                                        href="https://prium.github.io/phoenix/v1.18.0/pages/members.html">
                                        <div class="dropdown-item-wrapper"><span class="me-2 uil"
                                                data-feather="users"></span>Members</div>
                                    </a></li>
                                <li><a class="dropdown-item"
                                        href="https://prium.github.io/phoenix/v1.18.0/pages/timeline.html">
                                        <div class="dropdown-item-wrapper"><span class="me-2 uil"
                                                data-feather="clock"></span>Timeline</div>
                                    </a></li>
                                <li class="dropdown"><a class="dropdown-item dropdown-toggle" id="errors" href="#"
                                        data-bs-toggle="dropdown" data-bs-auto-close="outside">
                                        <div class="dropdown-item-wrapper"><span
                                                class="uil fs-8 uil-angle-right lh-1 dropdown-indicator-icon"></span><span><span
                                                    class="me-2 uil" data-feather="alert-triangle"></span>Errors</span>
                                        </div>
                                    </a>
                                    <ul class="dropdown-menu">
                                        <li><a class="dropdown-item"
                                                href="https://prium.github.io/phoenix/v1.18.0/pages/errors/404.html">
                                                <div class="dropdown-item-wrapper"><span class="me-2 uil"></span>404
                                                </div>
                                            </a></li>
                                        <li><a class="dropdown-item"
                                                href="https://prium.github.io/phoenix/v1.18.0/pages/errors/403.html">
                                                <div class="dropdown-item-wrapper"><span class="me-2 uil"></span>403
                                                </div>
                                            </a></li>
                                        <li><a class="dropdown-item"
                                                href="https://prium.github.io/phoenix/v1.18.0/pages/errors/500.html">
                                                <div class="dropdown-item-wrapper"><span class="me-2 uil"></span>500
                                                </div>
                                            </a></li>
                                    </ul>
                                </li>
                                <li class="dropdown"><a class="dropdown-item dropdown-toggle" id="authentication"
                                        href="#" data-bs-toggle="dropdown" data-bs-auto-close="outside">
                                        <div class="dropdown-item-wrapper"><span
                                                class="uil fs-8 uil-angle-right lh-1 dropdown-indicator-icon"></span><span><span
                                                    class="me-2 uil" data-feather="lock"></span>Authentication</span>
                                        </div>
                                    </a>
                                    <ul class="dropdown-menu">
                                        <li class="dropdown"><a class="dropdown-item dropdown-toggle" id="simple"
                                                href="#" data-bs-toggle="dropdown" data-bs-auto-close="outside">
                                                <div class="dropdown-item-wrapper"><span
                                                        class="uil fs-8 uil-angle-right lh-1 dropdown-indicator-icon"></span><span><span
                                                            class="me-2 uil"></span>Simple</span></div>
                                            </a>
                                            <ul class="dropdown-menu">
                                                <li><a class="dropdown-item"
                                                        href="https://prium.github.io/phoenix/v1.18.0/pages/authentication/simple/sign-in.html">
                                                        <div class="dropdown-item-wrapper"><span
                                                                class="me-2 uil"></span>Sign in</div>
                                                    </a></li>
                                                <li><a class="dropdown-item"
                                                        href="https://prium.github.io/phoenix/v1.18.0/pages/authentication/simple/sign-up.html">
                                                        <div class="dropdown-item-wrapper"><span
                                                                class="me-2 uil"></span>Sign up</div>
                                                    </a></li>
                                                <li><a class="dropdown-item"
                                                        href="https://prium.github.io/phoenix/v1.18.0/pages/authentication/simple/sign-out.html">
                                                        <div class="dropdown-item-wrapper"><span
                                                                class="me-2 uil"></span>Sign out</div>
                                                    </a></li>
                                                <li><a class="dropdown-item"
                                                        href="https://prium.github.io/phoenix/v1.18.0/pages/authentication/simple/forgot-password.html">
                                                        <div class="dropdown-item-wrapper"><span
                                                                class="me-2 uil"></span>Forgot password</div>
                                                    </a></li>
                                                <li><a class="dropdown-item"
                                                        href="https://prium.github.io/phoenix/v1.18.0/pages/authentication/simple/reset-password.html">
                                                        <div class="dropdown-item-wrapper"><span
                                                                class="me-2 uil"></span>Reset password</div>
                                                    </a></li>
                                                <li><a class="dropdown-item"
                                                        href="https://prium.github.io/phoenix/v1.18.0/pages/authentication/simple/lock-screen.html">
                                                        <div class="dropdown-item-wrapper"><span
                                                                class="me-2 uil"></span>Lock screen</div>
                                                    </a></li>
                                                <li><a class="dropdown-item"
                                                        href="https://prium.github.io/phoenix/v1.18.0/pages/authentication/simple/2FA.html">
                                                        <div class="dropdown-item-wrapper"><span
                                                                class="me-2 uil"></span>2FA</div>
                                                    </a></li>
                                            </ul>
                                        </li>
                                        <li class="dropdown"><a class="dropdown-item dropdown-toggle" id="split"
                                                href="#" data-bs-toggle="dropdown" data-bs-auto-close="outside">
                                                <div class="dropdown-item-wrapper"><span
                                                        class="uil fs-8 uil-angle-right lh-1 dropdown-indicator-icon"></span><span><span
                                                            class="me-2 uil"></span>Split</span></div>
                                            </a>
                                            <ul class="dropdown-menu">
                                                <li><a class="dropdown-item"
                                                        href="https://prium.github.io/phoenix/v1.18.0/pages/authentication/split/sign-in.html">
                                                        <div class="dropdown-item-wrapper"><span
                                                                class="me-2 uil"></span>Sign in</div>
                                                    </a></li>
                                                <li><a class="dropdown-item"
                                                        href="https://prium.github.io/phoenix/v1.18.0/pages/authentication/split/sign-up.html">
                                                        <div class="dropdown-item-wrapper"><span
                                                                class="me-2 uil"></span>Sign up</div>
                                                    </a></li>
                                                <li><a class="dropdown-item"
                                                        href="https://prium.github.io/phoenix/v1.18.0/pages/authentication/split/sign-out.html">
                                                        <div class="dropdown-item-wrapper"><span
                                                                class="me-2 uil"></span>Sign out</div>
                                                    </a></li>
                                                <li><a class="dropdown-item"
                                                        href="https://prium.github.io/phoenix/v1.18.0/pages/authentication/split/forgot-password.html">
                                                        <div class="dropdown-item-wrapper"><span
                                                                class="me-2 uil"></span>Forgot password</div>
                                                    </a></li>
                                                <li><a class="dropdown-item"
                                                        href="https://prium.github.io/phoenix/v1.18.0/pages/authentication/split/reset-password.html">
                                                        <div class="dropdown-item-wrapper"><span
                                                                class="me-2 uil"></span>Reset password</div>
                                                    </a></li>
                                                <li><a class="dropdown-item"
                                                        href="https://prium.github.io/phoenix/v1.18.0/pages/authentication/split/lock-screen.html">
                                                        <div class="dropdown-item-wrapper"><span
                                                                class="me-2 uil"></span>Lock screen</div>
                                                    </a></li>
                                                <li><a class="dropdown-item"
                                                        href="https://prium.github.io/phoenix/v1.18.0/pages/authentication/split/2FA.html">
                                                        <div class="dropdown-item-wrapper"><span
                                                                class="me-2 uil"></span>2FA</div>
                                                    </a></li>
                                            </ul>
                                        </li>
                                        <li class="dropdown"><a class="dropdown-item dropdown-toggle" id="Card" href="#"
                                                data-bs-toggle="dropdown" data-bs-auto-close="outside">
                                                <div class="dropdown-item-wrapper"><span
                                                        class="uil fs-8 uil-angle-right lh-1 dropdown-indicator-icon"></span><span><span
                                                            class="me-2 uil"></span>Card</span></div>
                                            </a>
                                            <ul class="dropdown-menu">
                                                <li><a class="dropdown-item"
                                                        href="https://prium.github.io/phoenix/v1.18.0/pages/authentication/card/sign-in.html">
                                                        <div class="dropdown-item-wrapper"><span
                                                                class="me-2 uil"></span>Sign in</div>
                                                    </a></li>
                                                <li><a class="dropdown-item"
                                                        href="https://prium.github.io/phoenix/v1.18.0/pages/authentication/card/sign-up.html">
                                                        <div class="dropdown-item-wrapper"><span
                                                                class="me-2 uil"></span>Sign up</div>
                                                    </a></li>
                                                <li><a class="dropdown-item"
                                                        href="https://prium.github.io/phoenix/v1.18.0/pages/authentication/card/sign-out.html">
                                                        <div class="dropdown-item-wrapper"><span
                                                                class="me-2 uil"></span>Sign out</div>
                                                    </a></li>
                                                <li><a class="dropdown-item"
                                                        href="https://prium.github.io/phoenix/v1.18.0/pages/authentication/card/forgot-password.html">
                                                        <div class="dropdown-item-wrapper"><span
                                                                class="me-2 uil"></span>Forgot password</div>
                                                    </a></li>
                                                <li><a class="dropdown-item"
                                                        href="https://prium.github.io/phoenix/v1.18.0/pages/authentication/card/reset-password.html">
                                                        <div class="dropdown-item-wrapper"><span
                                                                class="me-2 uil"></span>Reset password</div>
                                                    </a></li>
                                                <li><a class="dropdown-item"
                                                        href="https://prium.github.io/phoenix/v1.18.0/pages/authentication/card/lock-screen.html">
                                                        <div class="dropdown-item-wrapper"><span
                                                                class="me-2 uil"></span>Lock screen</div>
                                                    </a></li>
                                                <li><a class="dropdown-item"
                                                        href="https://prium.github.io/phoenix/v1.18.0/pages/authentication/card/2FA.html">
                                                        <div class="dropdown-item-wrapper"><span
                                                                class="me-2 uil"></span>2FA</div>
                                                    </a></li>
                                            </ul>
                                        </li>
                                    </ul>
                                </li>
                                <li class="dropdown"><a class="dropdown-item dropdown-toggle" id="layouts" href="#"
                                        data-bs-toggle="dropdown" data-bs-auto-close="outside">
                                        <div class="dropdown-item-wrapper"><span
                                                class="uil fs-8 uil-angle-right lh-1 dropdown-indicator-icon"></span><span><span
                                                    class="me-2 uil" data-feather="layout"></span>Layouts</span></div>
                                    </a>
                                    <ul class="dropdown-menu">
                                        <li><a class="dropdown-item"
                                                href="https://prium.github.io/phoenix/v1.18.0/demo/vertical-sidenav.html">
                                                <div class="dropdown-item-wrapper"><span
                                                        class="me-2 uil"></span>Vertical sidenav</div>
                                            </a></li>
                                        <li><a class="dropdown-item"
                                                href="https://prium.github.io/phoenix/v1.18.0/demo/dark-mode.html">
                                                <div class="dropdown-item-wrapper"><span class="me-2 uil"></span>Dark
                                                    mode</div>
                                            </a></li>
                                        <li><a class="dropdown-item"
                                                href="https://prium.github.io/phoenix/v1.18.0/demo/sidenav-collapse.html">
                                                <div class="dropdown-item-wrapper"><span class="me-2 uil"></span>Sidenav
                                                    collapse</div>
                                            </a></li>
                                        <li><a class="dropdown-item"
                                                href="https://prium.github.io/phoenix/v1.18.0/demo/darknav.html">
                                                <div class="dropdown-item-wrapper"><span class="me-2 uil"></span>Darknav
                                                </div>
                                            </a></li>
                                        <li><a class="dropdown-item"
                                                href="https://prium.github.io/phoenix/v1.18.0/demo/topnav-slim.html">
                                                <div class="dropdown-item-wrapper"><span class="me-2 uil"></span>Topnav
                                                    slim</div>
                                            </a></li>
                                        <li><a class="dropdown-item"
                                                href="https://prium.github.io/phoenix/v1.18.0/demo/navbar-horizontal.html">
                                                <div class="dropdown-item-wrapper"><span class="me-2 uil"></span>Navbar
                                                    horizontal</div>
                                            </a></li>
                                        <li><a class="dropdown-item"
                                                href="https://prium.github.io/phoenix/v1.18.0/demo/horizontal-slim.html">
                                                <div class="dropdown-item-wrapper"><span
                                                        class="me-2 uil"></span>Horizontal slim</div>
                                            </a></li>
                                        <li><a class="dropdown-item"
                                                href="https://prium.github.io/phoenix/v1.18.0/demo/combo-nav.html">
                                                <div class="dropdown-item-wrapper"><span class="me-2 uil"></span>Combo
                                                    nav</div>
                                            </a></li>
                                        <li><a class="dropdown-item"
                                                href="https://prium.github.io/phoenix/v1.18.0/demo/combo-nav-slim.html">
                                                <div class="dropdown-item-wrapper"><span class="me-2 uil"></span>Combo
                                                    nav slim</div>
                                            </a></li>
                                        <li><a class="dropdown-item"
                                                href="https://prium.github.io/phoenix/v1.18.0/demo/dual-nav.html">
                                                <div class="dropdown-item-wrapper"><span class="me-2 uil"></span>Dual
                                                    nav</div>
                                            </a></li>
                                    </ul>
                                </li>
                            </ul>
                        </li>
                        <li class="nav-item dropdown"><a class="nav-link dropdown-toggle lh-1" href="#!" role="button"
                                data-bs-toggle="dropdown" data-bs-auto-close="outside" aria-haspopup="true"
                                aria-expanded="false"><span class="uil fs-8 me-2 uil-puzzle-piece"></span>Modules</a>
                            <ul class="dropdown-menu navbar-dropdown-caret dropdown-menu-card py-0">
                                <div class="border-0 scrollbar" style="max-height: 60vh;">
                                    <div class="px-3 pt-4 pb-3 img-dropdown">
                                        <div class="row gx-4 gy-5">
                                            <div class="col-12 col-sm-6 col-md-4">
                                                <div class="dropdown-item-group"><span class="me-2"
                                                        data-feather="file-text" style="stroke-width:2;"></span>
                                                    <h6 class="dropdown-item-title">Forms</h6>
                                                </div><a class="dropdown-link"
                                                    href="https://prium.github.io/phoenix/v1.18.0/modules/forms/basic/form-control.html">Form
                                                    control</a><a class="dropdown-link"
                                                    href="https://prium.github.io/phoenix/v1.18.0/modules/forms/basic/input-group.html">Input
                                                    group</a><a class="dropdown-link"
                                                    href="https://prium.github.io/phoenix/v1.18.0/modules/forms/basic/select.html">Select</a><a
                                                    class="dropdown-link"
                                                    href="https://prium.github.io/phoenix/v1.18.0/modules/forms/basic/checks.html">Checks</a><a
                                                    class="dropdown-link"
                                                    href="https://prium.github.io/phoenix/v1.18.0/modules/forms/basic/range.html">Range</a><a
                                                    class="dropdown-link"
                                                    href="https://prium.github.io/phoenix/v1.18.0/modules/forms/basic/floating-labels.html">Floating
                                                    labels</a><a class="dropdown-link"
                                                    href="https://prium.github.io/phoenix/v1.18.0/modules/forms/basic/layout.html">Layout</a><a
                                                    class="dropdown-link"
                                                    href="https://prium.github.io/phoenix/v1.18.0/modules/forms/advance/advance-select.html">Advance
                                                    select</a><a class="dropdown-link"
                                                    href="https://prium.github.io/phoenix/v1.18.0/modules/forms/advance/date-picker.html">Date
                                                    picker</a><a class="dropdown-link"
                                                    href="https://prium.github.io/phoenix/v1.18.0/modules/forms/advance/editor.html">Editor</a><a
                                                    class="dropdown-link"
                                                    href="https://prium.github.io/phoenix/v1.18.0/modules/forms/advance/file-uploader.html">File
                                                    uploader</a><a class="dropdown-link"
                                                    href="https://prium.github.io/phoenix/v1.18.0/modules/forms/advance/range.html">Range</a><a
                                                    class="dropdown-link"
                                                    href="https://prium.github.io/phoenix/v1.18.0/modules/forms/advance/rating.html">Rating</a><a
                                                    class="dropdown-link"
                                                    href="https://prium.github.io/phoenix/v1.18.0/modules/forms/advance/emoji-button.html">Emoji
                                                    button</a><a class="dropdown-link"
                                                    href="https://prium.github.io/phoenix/v1.18.0/modules/forms/validation.html">Validation</a><a
                                                    class="dropdown-link"
                                                    href="https://prium.github.io/phoenix/v1.18.0/modules/forms/wizard.html">Wizard</a>
                                                <div class="dropdown-item-group mt-5"><span class="me-2"
                                                        data-feather="grid" style="stroke-width:2;"></span>
                                                    <h6 class="dropdown-item-title">Icons</h6>
                                                </div><a class="dropdown-link"
                                                    href="https://prium.github.io/phoenix/v1.18.0/modules/icons/feather.html">Feather</a><a
                                                    class="dropdown-link"
                                                    href="https://prium.github.io/phoenix/v1.18.0/modules/icons/font-awesome.html">Font
                                                    awesome</a><a class="dropdown-link"
                                                    href="https://prium.github.io/phoenix/v1.18.0/modules/icons/unicons.html">Unicons</a>
                                                <div class="dropdown-item-group mt-5"><span class="me-2"
                                                        data-feather="bar-chart-2" style="stroke-width:2;"></span>
                                                    <h6 class="dropdown-item-title">ECharts</h6>
                                                </div><a class="dropdown-link"
                                                    href="https://prium.github.io/phoenix/v1.18.0/modules/echarts/line-charts.html">Line
                                                    charts</a><a class="dropdown-link"
                                                    href="https://prium.github.io/phoenix/v1.18.0/modules/echarts/bar-charts.html">Bar
                                                    charts</a><a class="dropdown-link"
                                                    href="https://prium.github.io/phoenix/v1.18.0/modules/echarts/candlestick-charts.html">Candlestick
                                                    charts</a><a class="dropdown-link"
                                                    href="https://prium.github.io/phoenix/v1.18.0/modules/echarts/geo-map.html">Geo
                                                    map</a><a class="dropdown-link"
                                                    href="https://prium.github.io/phoenix/v1.18.0/modules/echarts/scatter-charts.html">Scatter
                                                    charts</a><a class="dropdown-link"
                                                    href="https://prium.github.io/phoenix/v1.18.0/modules/echarts/pie-charts.html">Pie
                                                    charts</a><a class="dropdown-link"
                                                    href="https://prium.github.io/phoenix/v1.18.0/modules/echarts/gauge-chart.html">Gauge
                                                    chart</a><a class="dropdown-link"
                                                    href="https://prium.github.io/phoenix/v1.18.0/modules/echarts/radar-charts.html">Radar
                                                    charts</a><a class="dropdown-link"
                                                    href="https://prium.github.io/phoenix/v1.18.0/modules/echarts/heatmap-charts.html">Heatmap
                                                    charts</a><a class="dropdown-link"
                                                    href="https://prium.github.io/phoenix/v1.18.0/modules/echarts/how-to-use.html">How
                                                    to use</a>
                                            </div>
                                            <div class="col-12 col-sm-6 col-md-4">
                                                <div class="dropdown-item-group"><span class="me-2"
                                                        data-feather="package" style="stroke-width:2;"></span>
                                                    <h6 class="dropdown-item-title">Components</h6>
                                                </div><a class="dropdown-link"
                                                    href="https://prium.github.io/phoenix/v1.18.0/modules/components/accordion.html">Accordion</a><a
                                                    class="dropdown-link"
                                                    href="https://prium.github.io/phoenix/v1.18.0/modules/components/avatar.html">Avatar</a><a
                                                    class="dropdown-link"
                                                    href="https://prium.github.io/phoenix/v1.18.0/modules/components/alerts.html">Alerts</a><a
                                                    class="dropdown-link"
                                                    href="https://prium.github.io/phoenix/v1.18.0/modules/components/badge.html">Badge</a><a
                                                    class="dropdown-link"
                                                    href="https://prium.github.io/phoenix/v1.18.0/modules/components/breadcrumb.html">Breadcrumb</a><a
                                                    class="dropdown-link"
                                                    href="https://prium.github.io/phoenix/v1.18.0/modules/components/button.html">Buttons</a><a
                                                    class="dropdown-link"
                                                    href="https://prium.github.io/phoenix/v1.18.0/modules/components/calendar.html">Calendar</a><a
                                                    class="dropdown-link"
                                                    href="https://prium.github.io/phoenix/v1.18.0/modules/components/card.html">Card</a><a
                                                    class="dropdown-link"
                                                    href="https://prium.github.io/phoenix/v1.18.0/modules/components/carousel/bootstrap.html">Bootstrap</a><a
                                                    class="dropdown-link"
                                                    href="https://prium.github.io/phoenix/v1.18.0/modules/components/carousel/swiper.html">Swiper</a><a
                                                    class="dropdown-link"
                                                    href="https://prium.github.io/phoenix/v1.18.0/modules/components/collapse.html">Collapse</a><a
                                                    class="dropdown-link"
                                                    href="https://prium.github.io/phoenix/v1.18.0/modules/components/dropdown.html">Dropdown</a><a
                                                    class="dropdown-link"
                                                    href="https://prium.github.io/phoenix/v1.18.0/modules/components/list-group.html">List
                                                    group</a><a class="dropdown-link"
                                                    href="https://prium.github.io/phoenix/v1.18.0/modules/components/modal.html">Modals</a><a
                                                    class="dropdown-link"
                                                    href="https://prium.github.io/phoenix/v1.18.0/modules/components/navs-and-tabs/navs.html">Navs</a><a
                                                    class="dropdown-link"
                                                    href="https://prium.github.io/phoenix/v1.18.0/modules/components/navs-and-tabs/navbar.html">Navbar</a><a
                                                    class="dropdown-link"
                                                    href="https://prium.github.io/phoenix/v1.18.0/modules/components/navs-and-tabs/tabs.html">Tabs</a><a
                                                    class="dropdown-link"
                                                    href="https://prium.github.io/phoenix/v1.18.0/modules/components/offcanvas.html">Offcanvas</a><a
                                                    class="dropdown-link"
                                                    href="https://prium.github.io/phoenix/v1.18.0/modules/components/progress-bar.html">Progress
                                                    bar</a><a class="dropdown-link"
                                                    href="https://prium.github.io/phoenix/v1.18.0/modules/components/placeholder.html">Placeholder</a><a
                                                    class="dropdown-link"
                                                    href="https://prium.github.io/phoenix/v1.18.0/modules/components/pagination.html">Pagination</a><a
                                                    class="dropdown-link"
                                                    href="https://prium.github.io/phoenix/v1.18.0/modules/components/popovers.html">Popovers</a><a
                                                    class="dropdown-link"
                                                    href="https://prium.github.io/phoenix/v1.18.0/modules/components/scrollspy.html">Scrollspy</a><a
                                                    class="dropdown-link"
                                                    href="https://prium.github.io/phoenix/v1.18.0/modules/components/sortable.html">Sortable</a><a
                                                    class="dropdown-link"
                                                    href="https://prium.github.io/phoenix/v1.18.0/modules/components/spinners.html">Spinners</a><a
                                                    class="dropdown-link"
                                                    href="https://prium.github.io/phoenix/v1.18.0/modules/components/toast.html">Toast</a><a
                                                    class="dropdown-link"
                                                    href="https://prium.github.io/phoenix/v1.18.0/modules/components/tooltips.html">Tooltips</a><a
                                                    class="dropdown-link"
                                                    href="https://prium.github.io/phoenix/v1.18.0/modules/components/typed-text.html">Typed
                                                    text</a><a class="dropdown-link"
                                                    href="https://prium.github.io/phoenix/v1.18.0/modules/components/chat-widget.html">Chat
                                                    widget</a>
                                            </div>
                                            <div class="col-12 col-sm-6 col-md-4">
                                                <div class="dropdown-item-group"><span class="me-2"
                                                        data-feather="columns" style="stroke-width:2;"></span>
                                                    <h6 class="dropdown-item-title">Tables</h6>
                                                </div><a class="dropdown-link"
                                                    href="https://prium.github.io/phoenix/v1.18.0/modules/tables/basic-tables.html">Basic
                                                    tables</a><a class="dropdown-link"
                                                    href="https://prium.github.io/phoenix/v1.18.0/modules/tables/advance-tables.html">Advance
                                                    tables</a><a class="dropdown-link"
                                                    href="https://prium.github.io/phoenix/v1.18.0/modules/tables/bulk-select.html">Bulk
                                                    Select</a>
                                                <div class="dropdown-item-group mt-5"><span class="me-2"
                                                        data-feather="tool" style="stroke-width:2;"></span>
                                                    <h6 class="dropdown-item-title">Utilities</h6>
                                                </div><a class="dropdown-link"
                                                    href="https://prium.github.io/phoenix/v1.18.0/modules/utilities/background.html">Background</a><a
                                                    class="dropdown-link"
                                                    href="https://prium.github.io/phoenix/v1.18.0/modules/utilities/borders.html">Borders</a><a
                                                    class="dropdown-link"
                                                    href="https://prium.github.io/phoenix/v1.18.0/modules/utilities/colors.html">Colors</a><a
                                                    class="dropdown-link"
                                                    href="https://prium.github.io/phoenix/v1.18.0/modules/utilities/display.html">Display</a><a
                                                    class="dropdown-link"
                                                    href="https://prium.github.io/phoenix/v1.18.0/modules/utilities/flex.html">Flex</a><a
                                                    class="dropdown-link"
                                                    href="https://prium.github.io/phoenix/v1.18.0/modules/utilities/stacks.html">Stacks</a><a
                                                    class="dropdown-link"
                                                    href="https://prium.github.io/phoenix/v1.18.0/modules/utilities/float.html">Float</a><a
                                                    class="dropdown-link"
                                                    href="https://prium.github.io/phoenix/v1.18.0/modules/utilities/grid.html">Grid</a><a
                                                    class="dropdown-link"
                                                    href="https://prium.github.io/phoenix/v1.18.0/modules/utilities/interactions.html">Interactions</a><a
                                                    class="dropdown-link"
                                                    href="https://prium.github.io/phoenix/v1.18.0/modules/utilities/opacity.html">Opacity</a><a
                                                    class="dropdown-link"
                                                    href="https://prium.github.io/phoenix/v1.18.0/modules/utilities/overflow.html">Overflow</a><a
                                                    class="dropdown-link"
                                                    href="https://prium.github.io/phoenix/v1.18.0/modules/utilities/position.html">Position</a><a
                                                    class="dropdown-link"
                                                    href="https://prium.github.io/phoenix/v1.18.0/modules/utilities/shadows.html">Shadows</a><a
                                                    class="dropdown-link"
                                                    href="https://prium.github.io/phoenix/v1.18.0/modules/utilities/sizing.html">Sizing</a><a
                                                    class="dropdown-link"
                                                    href="https://prium.github.io/phoenix/v1.18.0/modules/utilities/spacing.html">Spacing</a><a
                                                    class="dropdown-link"
                                                    href="https://prium.github.io/phoenix/v1.18.0/modules/utilities/typography.html">Typography</a><a
                                                    class="dropdown-link"
                                                    href="https://prium.github.io/phoenix/v1.18.0/modules/utilities/vertical-align.html">Vertical
                                                    align</a><a class="dropdown-link"
                                                    href="https://prium.github.io/phoenix/v1.18.0/modules/utilities/visibility.html">Visibility</a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </ul>
                        </li>
                        <li class="nav-item dropdown"><a class="nav-link dropdown-toggle lh-1" href="#!" role="button"
                                data-bs-toggle="dropdown" data-bs-auto-close="outside" aria-haspopup="true"
                                aria-expanded="false"><span
                                    class="uil fs-8 me-2 uil-document-layout-right"></span>Documentation</a>
                            <ul class="dropdown-menu navbar-dropdown-caret">
                                <li><a class="dropdown-item"
                                        href="https://prium.github.io/phoenix/v1.18.0/documentation/getting-started.html">
                                        <div class="dropdown-item-wrapper"><span class="me-2 uil"
                                                data-feather="life-buoy"></span>Getting started</div>
                                    </a></li>
                                <li class="dropdown dropdown-inside"><a class="dropdown-item dropdown-toggle"
                                        id="customization" href="#" data-bs-toggle="dropdown"
                                        data-bs-auto-close="outside">
                                        <div class="dropdown-item-wrapper"><span
                                                class="uil fs-8 uil-angle-right lh-1 dropdown-indicator-icon"></span><span><span
                                                    class="me-2 uil" data-feather="settings"></span>Customization</span>
                                        </div>
                                    </a>
                                    <ul class="dropdown-menu">
                                        <li><a class="dropdown-item"
                                                href="https://prium.github.io/phoenix/v1.18.0/documentation/customization/configuration.html">
                                                <div class="dropdown-item-wrapper"><span
                                                        class="me-2 uil"></span>Configuration</div>
                                            </a></li>
                                        <li><a class="dropdown-item"
                                                href="https://prium.github.io/phoenix/v1.18.0/documentation/customization/styling.html">
                                                <div class="dropdown-item-wrapper"><span class="me-2 uil"></span>Styling
                                                </div>
                                            </a></li>
                                        <li><a class="dropdown-item"
                                                href="https://prium.github.io/phoenix/v1.18.0/documentation/customization/color.html">
                                                <div class="dropdown-item-wrapper"><span class="me-2 uil"></span>Color
                                                </div>
                                            </a></li>
                                        <li><a class="dropdown-item"
                                                href="https://prium.github.io/phoenix/v1.18.0/documentation/customization/dark-mode.html">
                                                <div class="dropdown-item-wrapper"><span class="me-2 uil"></span>Dark
                                                    mode</div>
                                            </a></li>
                                        <li><a class="dropdown-item"
                                                href="https://prium.github.io/phoenix/v1.18.0/documentation/customization/plugin.html">
                                                <div class="dropdown-item-wrapper"><span class="me-2 uil"></span>Plugin
                                                </div>
                                            </a></li>
                                    </ul>
                                </li>
                                <li class="dropdown dropdown-inside"><a class="dropdown-item dropdown-toggle"
                                        id="layouts-doc" href="#" data-bs-toggle="dropdown"
                                        data-bs-auto-close="outside">
                                        <div class="dropdown-item-wrapper"><span
                                                class="uil fs-8 uil-angle-right lh-1 dropdown-indicator-icon"></span><span><span
                                                    class="me-2 uil" data-feather="table"></span>Layouts doc</span>
                                        </div>
                                    </a>
                                    <ul class="dropdown-menu">
                                        <li><a class="dropdown-item"
                                                href="https://prium.github.io/phoenix/v1.18.0/documentation/layouts/vertical-navbar.html">
                                                <div class="dropdown-item-wrapper"><span
                                                        class="me-2 uil"></span>Vertical navbar</div>
                                            </a></li>
                                        <li><a class="dropdown-item"
                                                href="https://prium.github.io/phoenix/v1.18.0/documentation/layouts/horizontal-navbar.html">
                                                <div class="dropdown-item-wrapper"><span
                                                        class="me-2 uil"></span>Horizontal navbar</div>
                                            </a></li>
                                        <li><a class="dropdown-item"
                                                href="https://prium.github.io/phoenix/v1.18.0/documentation/layouts/combo-navbar.html">
                                                <div class="dropdown-item-wrapper"><span class="me-2 uil"></span>Combo
                                                    navbar</div>
                                            </a></li>
                                        <li><a class="dropdown-item"
                                                href="https://prium.github.io/phoenix/v1.18.0/documentation/layouts/dual-nav.html">
                                                <div class="dropdown-item-wrapper"><span class="me-2 uil"></span>Dual
                                                    nav</div>
                                            </a></li>
                                    </ul>
                                </li>
                                <li><a class="dropdown-item"
                                        href="https://prium.github.io/phoenix/v1.18.0/documentation/gulp.html">
                                        <div class="dropdown-item-wrapper"><span
                                                class="me-2 fa-brands fa-gulp ms-1 me-1 fa-lg"></span>Gulp</div>
                                    </a></li>
                                <li><a class="dropdown-item"
                                        href="https://prium.github.io/phoenix/v1.18.0/documentation/design-file.html">
                                        <div class="dropdown-item-wrapper"><span class="me-2 uil"
                                                data-feather="figma"></span>Design file</div>
                                    </a></li>
                                <li><a class="dropdown-item"
                                        href="https://prium.github.io/phoenix/v1.18.0/changelog.html">
                                        <div class="dropdown-item-wrapper"><span class="me-2 uil"
                                                data-feather="git-merge"></span>Changelog</div>
                                    </a></li>
                                <li><a class="dropdown-item"
                                        href="https://prium.github.io/phoenix/v1.18.0/showcase.html">
                                        <div class="dropdown-item-wrapper"><span class="me-2 uil"
                                                data-feather="monitor"></span>Showcase</div>
                                    </a></li>
                            </ul>
                        </li>
                    </ul>
                </div>
            </div>
        </nav>
        <script>
        var navbarTopShape = window.config.config.phoenixNavbarTopShape;
        var navbarPosition = window.config.config.phoenixNavbarPosition;
        var body = document.querySelector('body');
        var navbarDefault = document.querySelector('#navbarDefault');
        var navbarTop = document.querySelector('#navbarTop');
        var topNavSlim = document.querySelector('#topNavSlim');
        var navbarTopSlim = document.querySelector('#navbarTopSlim');
        var navbarCombo = document.querySelector('#navbarCombo');
        var navbarComboSlim = document.querySelector('#navbarComboSlim');
        var dualNav = document.querySelector('#dualNav');

        var documentElement = document.documentElement;
        var navbarVertical = document.querySelector('.navbar-vertical');

        if (navbarPosition === 'dual-nav') {
            topNavSlim?.remove();
            navbarTop?.remove();
            navbarTopSlim?.remove();
            navbarCombo?.remove();
            navbarComboSlim?.remove();
            navbarDefault?.remove();
            navbarVertical?.remove();
            dualNav.removeAttribute('style');
            document.documentElement.setAttribute('data-navigation-type', 'dual');

        } else if (navbarTopShape === 'slim' && navbarPosition === 'vertical') {
            navbarDefault?.remove();
            navbarTop?.remove();
            navbarTopSlim?.remove();
            navbarCombo?.remove();
            navbarComboSlim?.remove();
            topNavSlim.style.display = 'block';
            navbarVertical.style.display = 'inline-block';
            document.documentElement.setAttribute('data-navbar-horizontal-shape', 'slim');

        } else if (navbarTopShape === 'slim' && navbarPosition === 'horizontal') {
            navbarDefault?.remove();
            navbarVertical?.remove();
            navbarTop?.remove();
            topNavSlim?.remove();
            navbarCombo?.remove();
            navbarComboSlim?.remove();
            dualNav?.remove();
            navbarTopSlim.removeAttribute('style');
            document.documentElement.setAttribute('data-navbar-horizontal-shape', 'slim');
        } else if (navbarTopShape === 'slim' && navbarPosition === 'combo') {
            navbarDefault?.remove();
            navbarTop?.remove();
            topNavSlim?.remove();
            navbarCombo?.remove();
            navbarTopSlim?.remove();
            dualNav?.remove();
            navbarComboSlim.removeAttribute('style');
            navbarVertical.removeAttribute('style');
            document.documentElement.setAttribute('data-navbar-horizontal-shape', 'slim');
        } else if (navbarTopShape === 'default' && navbarPosition === 'horizontal') {
            navbarDefault?.remove();
            topNavSlim?.remove();
            navbarVertical?.remove();
            navbarTopSlim?.remove();
            navbarCombo?.remove();
            navbarComboSlim?.remove();
            dualNav?.remove();
            navbarTop.removeAttribute('style');
            document.documentElement.setAttribute('data-navigation-type', 'horizontal');
        } else if (navbarTopShape === 'default' && navbarPosition === 'combo') {
            topNavSlim?.remove();
            navbarTop?.remove();
            navbarTopSlim?.remove();
            navbarDefault?.remove();
            navbarComboSlim?.remove();
            dualNav?.remove();
            navbarCombo.removeAttribute('style');
            navbarVertical.removeAttribute('style');
            document.documentElement.setAttribute('data-navigation-type', 'combo');
        } else {
            topNavSlim?.remove();
            navbarTop?.remove();
            navbarTopSlim?.remove();
            navbarCombo?.remove();
            navbarComboSlim?.remove();
            dualNav?.remove();
            navbarDefault.removeAttribute('style');
            navbarVertical.removeAttribute('style');
        }

        var navbarTopStyle = window.config.config.phoenixNavbarTopStyle;
        var navbarTop = document.querySelector('.navbar-top');
        if (navbarTopStyle === 'darker') {
            navbarTop.setAttribute('data-navbar-appearance', 'darker');
        }

        var navbarVerticalStyle = window.config.config.phoenixNavbarVerticalStyle;
        var navbarVertical = document.querySelector('.navbar-vertical');
        if (navbarVerticalStyle === 'darker') {
            navbarVertical.setAttribute('data-navbar-appearance', 'darker');
        }
        </script>
        <div class="content">
            <div class="row mb-4 mb-xl-6 mb-xxl-4 gy-3 justify-content-between">
                <div class="col-auto">
                    <h2 class="mb-0 text-body-emphasis">Travel Agency</h2>
                </div>
                <div class="col-auto">
                    <div class="d-flex gap-3"><a class="btn btn-phoenix-primary" href="#!"><span
                                class="fa-solid fa-plus me-2"></span>New Package</a><a
                            class="btn btn-primary px-4 px-sm-11" href="#!"><span
                                class="fa-regular fa-calendar-days me-2"></span>Book Now</a></div>
                </div>
            </div>
            <div class="row gx-3">
                <div class="col-xxl-7">
                    <div class="row gx-7 pe-xxl-3">
                        <div class="col-12 col-xl-5 col-xxl-12">
                            <div class="row g-0">
                                <div
                                    class="col-6 col-xl-12 col-xxl-6 border-bottom border-end border-end-xl-0 border-end-xxl pb-4 pt-4 pt-xl-0 pt-xxl-4 pe-4 pe-sm-5 pe-xl-0 pe-xxl-5">
                                    <h5 class="text-body mb-4">Total Value</h5>
                                    <div class="d-md-flex flex-between-center">
                                        <div class="echart-booking-value order-1 order-sm-0 order-md-1"
                                            style="height:54px; width: 90px"></div>
                                        <div class="mt-4 mt-md-0">
                                            <h3 class="text-body-highlight mb-2">$2,345.00</h3><span
                                                class="badge badge-phoenix badge-phoenix-primary me-2 fs-10"><span
                                                    class="fa-solid fa-plus me-1"></span>23.35%</span><span
                                                class="fs-9 text-body-secondary d-block d-sm-inline mt-1">From last
                                                month</span>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-6 col-xl-12 col-xxl-6 border-bottom py-4 ps-4 ps-sm-5 ps-xl-0 ps-xxl-5">
                                    <h5 class="text-body mb-4">Booked Flights</h5>
                                    <div class="d-md-flex flex-between-center">
                                        <div class="d-md-flex align-items-center gap-2 order-sm-0 order-md-1"><span
                                                class="fa-solid fa-cloud-bolt fs-5 text-warning-light dark__text-opacity-75"
                                                data-bs-theme="light"></span>
                                            <div class="d-flex d-md-block gap-2 align-items-center mt-1 mt-md-0">
                                                <p class="fs-9 mb-0 mb-md-2 text-body-tertiary text-nowrap">Rain Chances
                                                </p>
                                                <h4 class="text-body-highlight mb-0">95%</h4>
                                            </div>
                                        </div>
                                        <div class="mt-3 mt-md-0">
                                            <h3 class="text-body-highlight mb-2">1,432</h3><span
                                                class="badge badge-phoenix badge-phoenix-success me-2 fs-10"><span
                                                    class="fa-solid fa-plus me-1"></span>3.98%</span><span
                                                class="fs-9 text-body-secondary text-nowrap d-block d-sm-inline mt-1">From
                                                last month</span>
                                        </div>
                                    </div>
                                </div>
                                <div
                                    class="col-6 col-xl-12 col-xxl-6 border-bottom-xl border-bottom-xxl-0 border-end border-end-xl-0 border-end-xxl py-4 pe-4 pe-sm-5 pe-xl-0 pe-xxl-5">
                                    <h5 class="text-body mb-4">Commission</h5>
                                    <div class="d-md-flex flex-between-center">
                                        <div class="echart-commission order-sm-0 order-md-1"
                                            style="height: 54px; width: 54px"></div>
                                        <div class="mt-3 mt-md-0">
                                            <h3 class="text-body-highlight mb-2">$3,339.00</h3><span
                                                class="badge badge-phoenix badge-phoenix-danger me-2 fs-10"><span
                                                    class="fa-solid fa-minus me-1"></span>12.21%</span><span
                                                class="fs-9 text-body-secondary d-block d-sm-inline mt-1">From last
                                                month</span>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-6 col-xl-12 col-xxl-6 py-4 ps-4 ps-sm-5 ps-xl-0 ps-xxl-5">
                                    <h5 class="text-body mb-4">Canceled Booking</h5>
                                    <div class="d-md-flex flex-between-center">
                                        <div class="chart-cancel-booking order-sm-0 order-md-1"
                                            style="height:54px; width:78px"></div>
                                        <div class="mt-3 mt-md-0">
                                            <h3 class="text-body-highlight mb-2">120.00</h3><span
                                                class="badge badge-phoenix badge-phoenix-danger me-2 fs-10"><span
                                                    class="fa-solid fa-plus me-1"></span>5.76%</span><span
                                                class="fs-9 text-body-secondary d-block d-sm-inline mt-1">From last
                                                month</span>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-12 col-xl-7 col-xxl-12">
                            <div class="mt-5 mt-xl-0 mt-xxl-5 mb-5 mb-xxl-0">
                                <div class="row flex-between-end gy-3 gx-2">
                                    <div class="col-auto">
                                        <h3 class="text-body-highlight">Financial activities</h3>
                                        <p class="mb-0 text-body-tertiary">Yearly Balance</p>
                                    </div>
                                    <div
                                        class="col-12 col-sm-auto ms-auto order-1 order-sm-0 order-md-1 order-lg-0 order-xxl-1">
                                        <select class="form-select form-select-sm pe-9 w-auto"
                                            data-activities-options="data-activities-options">
                                            <option value="0">Hotel</option>
                                            <option value="1">Flight</option>
                                            <option value="2">Trip</option>
                                        </select>
                                    </div>
                                    <div class="col-auto order-md-1 order-lg-0 order-xxl-1">
                                        <div class="dropdown"><button
                                                class="btn btn-sm btn-phoenix-secondary bg-body-emphasis bg-body-hover action-btn"
                                                type="button" data-bs-toggle="dropdown" data-boundary="window"
                                                aria-haspopup="true" aria-expanded="false"
                                                data-bs-reference="parent"><span class="fas fa-ellipsis-h"
                                                    data-fa-transform="shrink-2"></span></button>
                                            <div class="dropdown-menu dropdown-menu-end"><a class="dropdown-item"
                                                    href="#">Action</a><a class="dropdown-item" href="#">Another
                                                    action</a><a class="dropdown-item" href="#">Something else here</a>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-12 col-md-auto col-lg-12 col-xxl-auto mx-auto order-1 order-sm-0">
                                        <div class="d-flex justify-content-center gap-6 gap-xxl-4"><button
                                                class="btn d-flex align-items-center p-0 shadow-none fw-semibold"
                                                id="profit"><span class="bg-primary-light me-2"
                                                    style="width: 16px; height: 6px; border-radius: 1px"
                                                    data-bs-theme="light"></span><span
                                                    class="text-body-secondary">Profit</span></button><button
                                                class="btn d-flex align-items-center p-0 shadow-none fw-semibold"
                                                id="revenue"><span class="bg-success-light me-2"
                                                    style="width: 16px; height: 6px; border-radius: 1px"
                                                    data-bs-theme="light"></span><span
                                                    class="text-body-secondary">Revenue</span></button><button
                                                class="btn d-flex align-items-center p-0 shadow-none fw-semibold"
                                                id="expanses"><span class="bg-info-light me-2"
                                                    style="width: 16px; height: 6px; border-radius: 1px"
                                                    data-bs-theme="light"></span><span
                                                    class="text-body-secondary">Expanses</span></button></div>
                                    </div>
                                </div>
                                <div class="echart-financial-Activities"
                                    data-options='{"optionOne":"profit","optionTwo":"revenue","optionThree":"expanses"}'>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-xxl-5">
                    <div class="row g-3">
                        <div class="col-12 col-md-6 col-xxl-12">
                            <div class="card h-100" data-list='{"valueNames":["country","users","status"],"page":4}'>
                                <div class="card-header border-0 d-flex justify-content-between align-items-start">
                                    <div>
                                        <h3 class="text-body-highlight">Visitors</h3>
                                        <p class="mb-0 text-body-tertiary">Users across countries</p>
                                    </div>
                                    <div class="dropdown"><button
                                            class="btn btn-sm btn-phoenix-secondary bg-body-emphasis bg-body-hover action-btn"
                                            type="button" data-bs-toggle="dropdown" data-boundary="window"
                                            aria-haspopup="true" aria-expanded="false" data-bs-reference="parent"><span
                                                class="fas fa-ellipsis-h" data-fa-transform="shrink-2"></span></button>
                                        <div class="dropdown-menu dropdown-menu-end"><a class="dropdown-item"
                                                href="#">Action</a><a class="dropdown-item" href="#">Another
                                                action</a><a class="dropdown-item" href="#">Something else here</a>
                                        </div>
                                    </div>
                                </div>
                                <div class="card-body py-0">
                                    <h4 class="d-flex align-items-center gap-2 text-body-highlight mb-3"><span
                                            class="real-time-user" data-countup='{"endValue":119}'>0</span><span
                                            class="fs-9 fw-normal">User per second</span></h4>
                                    <div class="echart-country-wise-visitors" style="height: 43px; width: 100%"></div>
                                    <div class="table-responsive scrollbar mt-3">
                                        <table class="table fs-10 mb-0">
                                            <thead>
                                                <tr>
                                                    <th class="sort ps-0 align-middle" data-sort="country"
                                                        style="min-width: 100px">COUNTRY NAME</th>
                                                    <th class="sort align-middle" data-sort="users"
                                                        style="min-width: 115px">USERS</th>
                                                    <th class="sort text-end align-middle" data-sort="status">STATUS
                                                    </th>
                                                </tr>
                                            </thead>
                                            <tbody class="list" id="table-country-wise-visitors">
                                                <tr>
                                                    <td class="py-2 white-space-nowrap ps-0 country"><a
                                                            class="d-flex align-items-center text-primary py-md-1 py-xxl-0"
                                                            href="#!"><img src="../assets/img/country/india-2.png"
                                                                alt="" width="40" />
                                                            <p class="mb-0 ps-3 fw-bold fs-9">India</p>
                                                        </a></td>
                                                    <td class="py-2 align-middle users">
                                                        <h6>92,896<span
                                                                class="text-body-tertiary fw-semibold ms-2">(41.6%)</span>
                                                        </h6>
                                                    </td>
                                                    <td class="py-2 align-middle text-end status"><span
                                                            class="badge badge-phoenix fs-10 badge-phoenix-info"><span
                                                                class="fa-solid fa-plus me-1"></span>15.21%</span></td>
                                                </tr>
                                                <tr>
                                                    <td class="py-2 white-space-nowrap ps-0 country"><a
                                                            class="d-flex align-items-center text-primary py-md-1 py-xxl-0"
                                                            href="#!"><img src="../assets/img/country/china-2.png"
                                                                alt="" width="40" />
                                                            <p class="mb-0 ps-3 fw-bold fs-9">China</p>
                                                        </a></td>
                                                    <td class="py-2 align-middle users">
                                                        <h6>50,496<span
                                                                class="text-body-tertiary fw-semibold ms-2">(32.8%)</span>
                                                        </h6>
                                                    </td>
                                                    <td class="py-2 align-middle text-end status"><span
                                                            class="badge badge-phoenix fs-10 badge-phoenix-warning"><span
                                                                class="fa-solid fa-plus me-1"></span>05.21%</span></td>
                                                </tr>
                                                <tr>
                                                    <td class="py-2 white-space-nowrap ps-0 country"><a
                                                            class="d-flex align-items-center text-primary py-md-1 py-xxl-0"
                                                            href="#!"><img src="../assets/img/country/usa-2.png" alt=""
                                                                width="40" />
                                                            <p class="mb-0 ps-3 fw-bold fs-9">USA</p>
                                                        </a></td>
                                                    <td class="py-2 align-middle users">
                                                        <h6>45,679<span
                                                                class="text-body-tertiary fw-semibold ms-2">(24.3%)</span>
                                                        </h6>
                                                    </td>
                                                    <td class="py-2 align-middle text-end status"><span
                                                            class="badge badge-phoenix fs-10 badge-phoenix-primary"><span
                                                                class="fa-solid fa-plus me-1"></span>22.12%</span></td>
                                                </tr>
                                            </tbody>
                                        </table>
                                    </div>
                                </div>
                                <div class="card-footer pt-3 border-0">
                                    <div class="d-flex align-items-center">
                                        <div class="pagination d-none"></div>
                                        <p class="mb-0 d-none d-sm-block me-3 fw-semibold text-body"
                                            data-list-info="data-list-info"></p><a class="fw-bold fs-9 ms-auto"
                                            href="#!">View all<span class="fas fa-angle-right ms-1"
                                                data-fa-transform="down-1"></span></a>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-12 col-md-6 col-xxl-12">
                            <div class="card h-100">
                                <div class="card-header border-0 pb-2 d-flex justify-content-between align-items-start">
                                    <div>
                                        <h3 class="text-body-highlight">Holidays</h3>
                                        <p class="mb-sm-0 text-body-tertiary">Holidays next month</p>
                                    </div><a
                                        class="btn btn-sm btn-phoenix-secondary d-flex align-items-center w-max-content"
                                        href="#!"><span class="text-nowrap">Calender</span><span
                                            class="fa-solid fa-chevron-right ms-2 fs-10"></span></a>
                                </div>
                                <div class="card-body">
                                    <div class="echart-holidays-next-month"
                                        style="height: 100%; min-height: 300px; width: 100%"></div>
                                </div>
                            </div>
                        </div>
                        <div class="col-12">
                            <div class="card mb-3">
                                <div class="bg-holder bg-card"
                                    style="background-image:url(../assets/img/spot-illustrations/39.png);background-position: bottom right 0px; background-size: auto;">
                                </div>
                                <!--/.bg-holder-->
                                <div class="card-body z-5">
                                    <div>
                                        <h3 class="text-body-highlight mb-3">Phoenix integrations</h3>
                                        <p class="text-body-tertiary mb-4 w-75 w-xl-100">Phoenix improves efficiency
                                            instantly and effortlessly <br class="d-none d-xxl-block"> by allowing easy
                                            & simple connection <br class="d-none d-xl-block"> to other popular programs
                                        </p><a class="btn btn-sm btn-phoenix-primary" href="#!"> <span
                                                class="fa-solid fa-link me-1"> </span>Connect Now</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="row g-3 mb-5">
                <div class="col-xl-5 col-xxl-7">
                    <div class="card h-xxl-100">
                        <div class="card-header pb-3">
                            <div class="row justify-content-between g-3">
                                <div class="col-auto">
                                    <h3 class="text-body-highlight">Gross Profit</h3>
                                    <p class="mb-0">Annual income according to the board</p>
                                </div>
                                <div class="col-auto"> <select class="form-select form-select-sm">
                                        <option>Last Fiscal Year</option>
                                        <option>Last Calendar year</option>
                                        <option>Last Quarter</option>
                                    </select></div>
                            </div>
                        </div>
                        <div class="card-body">
                            <div class="row align-items-center h-100 gy-5">
                                <div
                                    class="col-12 col-md-auto col-xl-12 col-xxl-auto order-md-1 order-xl-0 order-xxl-1 px-md-8 px-xl-6">
                                    <div class="echart-gross-profit mx-auto mt-3 mt-md-0 mt-xl-3 mt-xxl-0"
                                        style="width: 250px; height: 250px"></div>
                                </div>
                                <div class="col-12 col-md-auto col-xl-12 col-xxl-auto flex-1 h-md-100">
                                    <div
                                        class="d-flex flex-column justify-content-between h-md-100 h-xl-auto h-xxl-100">
                                        <div class="d-flex align-items-center justify-content-between">
                                            <div class="d-flex gap-2">
                                                <div class="bullet-item bg-primary-light" data-bs-theme="light"></div>
                                                <div>
                                                    <h6 class="mb-0 text-body fw-semibold mb-2">Flight</h6>
                                                    <h5 class="mb-0 text-body">$162,791,400</h5>
                                                </div>
                                            </div>
                                            <div class="d-flex align-items-center gap-2 text-primary"><span
                                                    class="fw-bold" data-feather="trending-up"
                                                    style="width: 24px; height: 24px"></span>
                                                <p class="mb-0 fw-bold">15.50%</p>
                                            </div>
                                        </div>
                                        <hr />
                                        <div class="d-flex align-items-center justify-content-between">
                                            <div class="d-flex gap-2">
                                                <div class="bullet-item bg-info-light" data-bs-theme="light"></div>
                                                <div>
                                                    <h6 class="mb-0 text-body fw-semibold mb-2">Flight (Package)</h6>
                                                    <h5 class="mb-0 text-body">$135,659,500</h5>
                                                </div>
                                            </div>
                                            <div class="d-flex align-items-center gap-2 text-danger"><span
                                                    class="fw-bold" data-feather="trending-down"
                                                    style="width: 24px; height: 24px"></span>
                                                <p class="mb-0 fw-bold">11.09%</p>
                                            </div>
                                        </div>
                                        <hr />
                                        <div class="d-flex align-items-center justify-content-between">
                                            <div class="d-flex gap-2">
                                                <div class="bullet-item bg-warning-light" data-bs-theme="light"></div>
                                                <div>
                                                    <h6 class="mb-0 text-body fw-semibold mb-2">Hotel</h6>
                                                    <h5 class="mb-0 text-body">$271,319,000</h5>
                                                </div>
                                            </div>
                                            <div class="d-flex align-items-center gap-2 text-success"><span
                                                    class="fw-bold" data-feather="trending-up"
                                                    style="width: 24px; height: 24px"></span>
                                                <p class="mb-0 fw-bold">29.98%</p>
                                            </div>
                                        </div>
                                        <hr />
                                        <div class="d-flex align-items-center justify-content-between">
                                            <div class="d-flex gap-2">
                                                <div class="bullet-item bg-success-light" data-bs-theme="light"></div>
                                                <div>
                                                    <h6 class="mb-0 text-body fw-semibold mb-2">Hotel (Package)</h6>
                                                    <h5 class="mb-0 text-body">$162,791,400</h5>
                                                </div>
                                            </div>
                                            <div class="d-flex align-items-center gap-2 text-warning"><span
                                                    class="fw-bold" data-feather="trending-up"
                                                    style="width: 24px; height: 24px"></span>
                                                <p class="mb-0 fw-bold">03.90%</p>
                                            </div>
                                        </div>
                                        <hr class="d-none" />
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-xl-7 col-xxl-5">
                    <div class="card h-100">
                        <div
                            class="card-header pb-3 d-sm-flex d-xl-block d-xxl-flex justify-content-between align-items-start">
                            <div>
                                <h3 class="text-body-highlight">Bookings</h3>
                                <p class="mb-0">Completed and canceled bookings</p>
                            </div><select class="form-select form-select-sm pe-9 w-auto mt-3 mt-sm-0 mt-xl-3 mt-xxl-0"
                                data-booking-options="data-booking-options">
                                <option value="0">Hotel</option>
                                <option value="1">Flight</option>
                                <option value="2">Trip</option>
                            </select>
                        </div>
                        <div class="card-body">
                            <div class="echart-bookings" style="height: 100%;min-height: 322px; width: 100%"></div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="mx-n4 px-4 mx-lg-n6 px-lg-6 pb-9 bg-body-emphasis border-top">
                <div
                    data-list='{"valueNames":["flightNo","vendor","weather","route","destination","status","time"],"page":4}'>
                    <div class="row gx-0 gy-3 align-items-center py-4">
                        <div class="col-xl-auto">
                            <h3 class="mb-0">Flights </h3>
                        </div>
                        <div class="col-auto flex-1">
                            <div class="d-flex flex-between-center">
                                <div class="d-flex align-items-center">
                                    <div class="search-box ms-xl-6 w-auto">
                                        <form class="position-relative"><input class="form-control search-input search"
                                                type="search" placeholder="Search by Flight no." aria-label="Search" />
                                            <span class="fas fa-search search-box-icon"></span>
                                        </form>
                                    </div><button class="btn btn-phoenix-secondary px-3 ms-2 me-3"><span
                                            class="fa-solid fa-filter text-body-secondary"
                                            data-fa-transform="down-2"></span></button>
                                </div>
                                <div class="d-flex align-items-center">
                                    <div class="pagination d-none"></div>
                                    <p class="mb-0 d-none d-md-block me-3 fw-semibold text-body text-nowrap"
                                        data-list-info="data-list-info"></p><a
                                        class="fw-semibold text-nowrap d-none d-sm-block" href="#!"
                                        data-list-view="*">View all<span class="fas fa-angle-right ms-1"
                                            data-fa-transform="down-1"></span></a><a
                                        class="fw-semibold d-none text-nowrap" href="#!" data-list-view="less">View
                                        Less</a><button class="btn btn-phoenix-primary px-3 me-1 ms-sm-4" type="button"
                                        title="Previous" data-list-pagination="prev"><span class="fas fa-chevron-left"
                                            data-fa-transform="down-1"></span></button><button
                                        class="btn btn-phoenix-primary px-3" type="button" title="Next"
                                        data-list-pagination="next"><span class="fas fa-chevron-right"
                                            data-fa-transform="down-1"></span></button>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="table-responsive scrollbar mx-n1 px-1 mb-4">
                        <table class="table fs-9 mb-0 border-top border-translucent">
                            <thead>
                                <tr>
                                    <th class="white-space-nowrap px-0 py-1">
                                        <div class="form-check mb-0 fs-8"><input class="form-check-input"
                                                id="checkbox-bulk-flights-select" type="checkbox"
                                                data-bulk-select='{"body":"table-flights-body"}' /></div>
                                    </th>
                                    <th class="sort white-space-nowrap align-middle text-body-tertiary ps-0" scope="col"
                                        data-sort="flightNo">FLIGHTS NO.</th>
                                    <th class="sort align-middle text-body-tertiary" scope="col" data-sort="vendor"
                                        style="width:170px;">VENDOR</th>
                                    <th class="sort text-start align-middle text-body-tertiary" scope="col"
                                        data-sort="weather" style="width:250px;">WEATHER</th>
                                    <th class="sort align-middle text-body-tertiary" scope="col" data-sort="route"
                                        style="width:180px;">ROUTE</th>
                                    <th class="sort align-middle text-body-tertiary" scope="col"
                                        style="min-width:280px;" data-sort="destination">DESTINATION</th>
                                    <th class="sort text-end align-middle text-body-tertiary" scope="col"
                                        data-sort="status" style="min-width:120px;">STATUS</th>
                                    <th class="sort align-middle text-end text-body-tertiary" scope="col"
                                        data-sort="time" style="min-width:200px;">TIME</th>
                                    <th class="text-end pe-0" scope="col"></th>
                                </tr>
                            </thead>
                            <tbody class="list" id="table-flights-body">
                                <tr>
                                    <td class="fs-9 align-middle px-0">
                                        <div class="form-check mb-0 fs-8"><input class="form-check-input"
                                                type="checkbox"
                                                data-bulk-select-row='{"flightNo":"#24349","vendor":{"image":"/img/brands/phoenix-firelines.png","name":"Phoenix Firelines"},"route":{"from":{"flag":"/img/country/usa.png","airport":"LAX"},"to":{"flag":"/img/country/canada.png","airport":"YVR"}},"destination":{"currentPosition":"180 km, 00h:15m ago","target":"955 km, in 01h:25m","percent":25},"weather":{"temperature":15,"weather":"Stormy","icon":"fa-solid fa-cloud-bolt","color":"text-body-tertiary"},"time":{"time":"08:26 PM","date":"Sunday, Nov 06, 2022"},"status":{"label":"Delayed","type":"warning"}}' />
                                        </div>
                                    </td>
                                    <td class="align-middle flightNo ps-0"><a class="fw-bold" href="#!">#24349</a></td>
                                    <td class="align-middle vendor pe-5"><a class="d-flex align-items-center gap-2"
                                            href="#!"><img src="../assets/img/brands/phoenix-firelines.png" alt=""
                                                width="32" />
                                            <h6 class="mb-0 text-primary fw-semibold text-nowrap">Phoenix Firelines</h6>
                                        </a></td>
                                    <td class="align-middle weather pe-5">
                                        <div class="d-flex align-items-center"><span
                                                class="fa-solid fa-temperature-quarter me-2 text-info"></span>
                                            <p class="mb-0 text-body-tertiary me-3">15°C</p><span
                                                class="me-2 fa-solid fa-cloud-bolt text-body-tertiary"></span>
                                            <p class="mb-0 text-body-tertiary">Stormy</p>
                                        </div>
                                    </td>
                                    <td class="align-middle route pe-5">
                                        <div class="d-flex align-items-center gap-2"><img
                                                src="../assets/img/country/usa.png" alt="" width="16" />
                                            <p class="mb-0 fw-semibold text-bold">LAX</p><span
                                                class="fa-solid fa-arrow-right text-body-tertiary mx-1"></span>
                                            <p class="mb-0 fw-semibold text-bold">YVR</p><img
                                                src="../assets/img/country/canada.png" alt="" width="16" />
                                        </div>
                                    </td>
                                    <td class="align-middle destination pe-5 pe-xxl-7">
                                        <div class="progress overflow-visible" role="progressbar"
                                            aria-label="flight-progress-bar" aria-valuenow="25" aria-valuemin="0"
                                            aria-valuemax="100" style="height: 2px">
                                            <div class="progress-bar overflow-visible position-relative bg-info-light rounded"
                                                style="width: 25%"><span
                                                    class="fa-solid fa-plane text-info position-absolute end-0"></span>
                                            </div>
                                        </div>
                                        <div class="d-flex justify-content-between mt-2">
                                            <p class="mb-0 fs-10 text-body-tertiary">180 km, 00h:15m ago</p>
                                            <p class="mb-0 fs-10 text-body-tertiary">955 km, in 01h:25m</p>
                                        </div>
                                    </td>
                                    <td class="status align-middle text-end"><span
                                            class="badge badge-phoenix fs-10 badge-phoenix-warning">Delayed</span></td>
                                    <td class="align-middle text-end time">
                                        <div class="d-flex justify-content-end align-items-center gap-2 mb-2"><span
                                                class="fa-regular fa-clock text-body"> </span><span
                                                class="text-body fw-semibold">08:26 PM</span></div>
                                        <div class="d-flex justify-content-end gap-2"><span class="text-body"
                                                data-feather="calendar" style="width:16px; height:16px"></span><span
                                                class="text-body fw-semibold">Sunday, Nov 06, 2022</span></div>
                                    </td>
                                    <td class="align-middle text-end">
                                        <div class="btn-reveal-trigger"><button
                                                class="btn btn-sm ms-auto dropdown-toggle dropdown-caret-none transition-none d-flex btn-reveal"
                                                type="button" data-bs-toggle="dropdown" data-boundary="window"
                                                aria-haspopup="true" aria-expanded="false"
                                                data-bs-reference="parent"><span
                                                    class="fas fa-ellipsis-h"></span></button>
                                            <div class="dropdown-menu dropdown-menu-end"><a class="dropdown-item"
                                                    href="#!">Track flight</a><a class="dropdown-item"
                                                    href="#!">Download</a><a class="dropdown-item" href="#!">Report
                                                    abuse</a></div>
                                        </div>
                                    </td>
                                </tr>
                                <tr>
                                    <td class="fs-9 align-middle px-0">
                                        <div class="form-check mb-0 fs-8"><input class="form-check-input"
                                                type="checkbox"
                                                data-bulk-select-row='{"flightNo":"#23421","vendor":{"image":"/img/brands/qatar-airways.png","name":"Qatar Airways"},"route":{"from":{"flag":"/img/country/denmark.png","airport":"EBJ"},"to":{"flag":"/img/country/south-korea.png","airport":"CDG"}},"destination":{"currentPosition":"600 km, 02h:15m ago","target":"1,200 km, in 02h:25m","percent":60},"weather":{"temperature":28,"weather":"Sunny","icon":"fa-solid fa-sun","color":"text-warning"},"time":{"time":"07:23 PM","date":"Monday, Nov 05, 2022"},"status":{"label":"On Time","type":"primary"}}' />
                                        </div>
                                    </td>
                                    <td class="align-middle flightNo ps-0"><a class="fw-bold" href="#!">#23421</a></td>
                                    <td class="align-middle vendor pe-5"><a class="d-flex align-items-center gap-2"
                                            href="#!"><img src="../assets/img/brands/qatar-airways.png" alt=""
                                                width="32" />
                                            <h6 class="mb-0 text-primary fw-semibold text-nowrap">Qatar Airways</h6>
                                        </a></td>
                                    <td class="align-middle weather pe-5">
                                        <div class="d-flex align-items-center"><span
                                                class="fa-solid fa-temperature-quarter me-2 text-danger"></span>
                                            <p class="mb-0 text-body-tertiary me-3">28°C</p><span
                                                class="me-2 fa-solid fa-sun text-warning"></span>
                                            <p class="mb-0 text-body-tertiary">Sunny</p>
                                        </div>
                                    </td>
                                    <td class="align-middle route pe-5">
                                        <div class="d-flex align-items-center gap-2"><img
                                                src="../assets/img/country/denmark.png" alt="" width="16" />
                                            <p class="mb-0 fw-semibold text-bold">EBJ</p><span
                                                class="fa-solid fa-arrow-right text-body-tertiary mx-1"></span>
                                            <p class="mb-0 fw-semibold text-bold">CDG</p><img
                                                src="../assets/img/country/south-korea.png" alt="" width="16" />
                                        </div>
                                    </td>
                                    <td class="align-middle destination pe-5 pe-xxl-7">
                                        <div class="progress overflow-visible" role="progressbar"
                                            aria-label="flight-progress-bar" aria-valuenow="60" aria-valuemin="0"
                                            aria-valuemax="100" style="height: 2px">
                                            <div class="progress-bar overflow-visible position-relative bg-info-light rounded"
                                                style="width: 60%"><span
                                                    class="fa-solid fa-plane text-info position-absolute end-0"></span>
                                            </div>
                                        </div>
                                        <div class="d-flex justify-content-between mt-2">
                                            <p class="mb-0 fs-10 text-body-tertiary">600 km, 02h:15m ago</p>
                                            <p class="mb-0 fs-10 text-body-tertiary">1,200 km, in 02h:25m</p>
                                        </div>
                                    </td>
                                    <td class="status align-middle text-end"><span
                                            class="badge badge-phoenix fs-10 badge-phoenix-primary">On Time</span></td>
                                    <td class="align-middle text-end time">
                                        <div class="d-flex justify-content-end align-items-center gap-2 mb-2"><span
                                                class="fa-regular fa-clock text-body"> </span><span
                                                class="text-body fw-semibold">07:23 PM</span></div>
                                        <div class="d-flex justify-content-end gap-2"><span class="text-body"
                                                data-feather="calendar" style="width:16px; height:16px"></span><span
                                                class="text-body fw-semibold">Monday, Nov 05, 2022</span></div>
                                    </td>
                                    <td class="align-middle text-end">
                                        <div class="btn-reveal-trigger"><button
                                                class="btn btn-sm ms-auto dropdown-toggle dropdown-caret-none transition-none d-flex btn-reveal"
                                                type="button" data-bs-toggle="dropdown" data-boundary="window"
                                                aria-haspopup="true" aria-expanded="false"
                                                data-bs-reference="parent"><span
                                                    class="fas fa-ellipsis-h"></span></button>
                                            <div class="dropdown-menu dropdown-menu-end"><a class="dropdown-item"
                                                    href="#!">Track flight</a><a class="dropdown-item"
                                                    href="#!">Download</a><a class="dropdown-item" href="#!">Report
                                                    abuse</a></div>
                                        </div>
                                    </td>
                                </tr>
                                <tr>
                                    <td class="fs-9 align-middle px-0">
                                        <div class="form-check mb-0 fs-8"><input class="form-check-input"
                                                type="checkbox"
                                                data-bulk-select-row='{"flightNo":"#23132","vendor":{"image":"/img/brands/jal.png","name":"Japan Airlines"},"route":{"from":{"flag":"/img/country/china.png","airport":"GOT"},"to":{"flag":"/img/country/usa.png","airport":"BCN"}},"destination":{"currentPosition":"500 km, 00h:56m ago","target":"3,455 km, in 03h:25m","percent":25},"weather":{"temperature":22,"weather":"Wind","icon":"fa-solid fa-wind","color":"text-info"},"time":{"time":"07:23 PM","date":"Monday, Nov 05, 2022"},"status":{"label":"Departure","type":"success"}}' />
                                        </div>
                                    </td>
                                    <td class="align-middle flightNo ps-0"><a class="fw-bold" href="#!">#23132</a></td>
                                    <td class="align-middle vendor pe-5"><a class="d-flex align-items-center gap-2"
                                            href="#!"><img src="../assets/img/brands/jal.png" alt="" width="32" />
                                            <h6 class="mb-0 text-primary fw-semibold text-nowrap">Japan Airlines</h6>
                                        </a></td>
                                    <td class="align-middle weather pe-5">
                                        <div class="d-flex align-items-center"><span
                                                class="fa-solid fa-temperature-quarter me-2 text-info"></span>
                                            <p class="mb-0 text-body-tertiary me-3">22°C</p><span
                                                class="me-2 fa-solid fa-wind text-info"></span>
                                            <p class="mb-0 text-body-tertiary">Wind</p>
                                        </div>
                                    </td>
                                    <td class="align-middle route pe-5">
                                        <div class="d-flex align-items-center gap-2"><img
                                                src="../assets/img/country/china.png" alt="" width="16" />
                                            <p class="mb-0 fw-semibold text-bold">GOT</p><span
                                                class="fa-solid fa-arrow-right text-body-tertiary mx-1"></span>
                                            <p class="mb-0 fw-semibold text-bold">BCN</p><img
                                                src="../assets/img/country/usa.png" alt="" width="16" />
                                        </div>
                                    </td>
                                    <td class="align-middle destination pe-5 pe-xxl-7">
                                        <div class="progress overflow-visible" role="progressbar"
                                            aria-label="flight-progress-bar" aria-valuenow="25" aria-valuemin="0"
                                            aria-valuemax="100" style="height: 2px">
                                            <div class="progress-bar overflow-visible position-relative bg-info-light rounded"
                                                style="width: 25%"><span
                                                    class="fa-solid fa-plane text-info position-absolute end-0"></span>
                                            </div>
                                        </div>
                                        <div class="d-flex justify-content-between mt-2">
                                            <p class="mb-0 fs-10 text-body-tertiary">500 km, 00h:56m ago</p>
                                            <p class="mb-0 fs-10 text-body-tertiary">3,455 km, in 03h:25m</p>
                                        </div>
                                    </td>
                                    <td class="status align-middle text-end"><span
                                            class="badge badge-phoenix fs-10 badge-phoenix-success">Departure</span>
                                    </td>
                                    <td class="align-middle text-end time">
                                        <div class="d-flex justify-content-end align-items-center gap-2 mb-2"><span
                                                class="fa-regular fa-clock text-body"> </span><span
                                                class="text-body fw-semibold">07:23 PM</span></div>
                                        <div class="d-flex justify-content-end gap-2"><span class="text-body"
                                                data-feather="calendar" style="width:16px; height:16px"></span><span
                                                class="text-body fw-semibold">Monday, Nov 05, 2022</span></div>
                                    </td>
                                    <td class="align-middle text-end">
                                        <div class="btn-reveal-trigger"><button
                                                class="btn btn-sm ms-auto dropdown-toggle dropdown-caret-none transition-none d-flex btn-reveal"
                                                type="button" data-bs-toggle="dropdown" data-boundary="window"
                                                aria-haspopup="true" aria-expanded="false"
                                                data-bs-reference="parent"><span
                                                    class="fas fa-ellipsis-h"></span></button>
                                            <div class="dropdown-menu dropdown-menu-end"><a class="dropdown-item"
                                                    href="#!">Track flight</a><a class="dropdown-item"
                                                    href="#!">Download</a><a class="dropdown-item" href="#!">Report
                                                    abuse</a></div>
                                        </div>
                                    </td>
                                </tr>
                                <tr>
                                    <td class="fs-9 align-middle px-0">
                                        <div class="form-check mb-0 fs-8"><input class="form-check-input"
                                                type="checkbox"
                                                data-bulk-select-row='{"flightNo":"#22267","vendor":{"image":"/img/brands/emirates.png","name":"Emirate"},"route":{"from":{"flag":"/img/country/qatar.png","airport":"DIA"},"to":{"flag":"/img/country/norway.png","airport":"OSL"}},"destination":{"currentPosition":"00 km, 00h:00m ago","target":"00 km, in 00h:00m","percent":0},"weather":{"temperature":5,"weather":"Heavy rain","icon":"fa-solid fa-cloud-showers-heavy","color":"text-danger"},"time":{"time":"07:23 PM","date":"Monday, Nov 05, 2022"},"status":{"label":"Cancelled","type":"danger"}}' />
                                        </div>
                                    </td>
                                    <td class="align-middle flightNo ps-0"><a class="fw-bold" href="#!">#22267</a></td>
                                    <td class="align-middle vendor pe-5"><a class="d-flex align-items-center gap-2"
                                            href="#!"><img src="../assets/img/brands/emirates.png" alt="" width="32" />
                                            <h6 class="mb-0 text-primary fw-semibold text-nowrap">Emirate</h6>
                                        </a></td>
                                    <td class="align-middle weather pe-5">
                                        <div class="d-flex align-items-center"><span
                                                class="fa-solid fa-temperature-quarter me-2 text-info"></span>
                                            <p class="mb-0 text-body-tertiary me-3">5°C</p><span
                                                class="me-2 fa-solid fa-cloud-showers-heavy text-danger"></span>
                                            <p class="mb-0 text-body-tertiary">Heavy rain</p>
                                        </div>
                                    </td>
                                    <td class="align-middle route pe-5">
                                        <div class="d-flex align-items-center gap-2"><img
                                                src="../assets/img/country/qatar.png" alt="" width="16" />
                                            <p class="mb-0 fw-semibold text-bold">DIA</p><span
                                                class="fa-solid fa-arrow-right text-body-tertiary mx-1"></span>
                                            <p class="mb-0 fw-semibold text-bold">OSL</p><img
                                                src="../assets/img/country/norway.png" alt="" width="16" />
                                        </div>
                                    </td>
                                    <td class="align-middle destination pe-5 pe-xxl-7">
                                        <div class="progress overflow-visible" role="progressbar"
                                            aria-label="flight-progress-bar" aria-valuenow="0" aria-valuemin="0"
                                            aria-valuemax="100" style="height: 2px">
                                            <div class="progress-bar overflow-visible position-relative bg-info-light rounded"
                                                style="width: 0%"></div>
                                        </div>
                                        <div class="d-flex justify-content-between mt-2">
                                            <p class="mb-0 fs-10 text-body-quaternary">00 km, 00h:00m ago</p>
                                            <p class="mb-0 fs-10 text-body-quaternary">00 km, in 00h:00m</p>
                                        </div>
                                    </td>
                                    <td class="status align-middle text-end"><span
                                            class="badge badge-phoenix fs-10 badge-phoenix-danger">Cancelled</span></td>
                                    <td class="align-middle text-end time">
                                        <div class="d-flex justify-content-end align-items-center gap-2 mb-2"><span
                                                class="fa-regular fa-clock text-body"> </span><span
                                                class="text-body fw-semibold">07:23 PM</span></div>
                                        <div class="d-flex justify-content-end gap-2"><span class="text-body"
                                                data-feather="calendar" style="width:16px; height:16px"></span><span
                                                class="text-body fw-semibold">Monday, Nov 05, 2022</span></div>
                                    </td>
                                    <td class="align-middle text-end">
                                        <div class="btn-reveal-trigger"><button
                                                class="btn btn-sm ms-auto dropdown-toggle dropdown-caret-none transition-none d-flex btn-reveal"
                                                type="button" data-bs-toggle="dropdown" data-boundary="window"
                                                aria-haspopup="true" aria-expanded="false"
                                                data-bs-reference="parent"><span
                                                    class="fas fa-ellipsis-h"></span></button>
                                            <div class="dropdown-menu dropdown-menu-end"><a class="dropdown-item"
                                                    href="#!">Track flight</a><a class="dropdown-item"
                                                    href="#!">Download</a><a class="dropdown-item" href="#!">Report
                                                    abuse</a></div>
                                        </div>
                                    </td>
                                </tr>
                                <tr>
                                    <td class="fs-9 align-middle px-0">
                                        <div class="form-check mb-0 fs-8"><input class="form-check-input"
                                                type="checkbox"
                                                data-bulk-select-row='{"flightNo":"#41242","vendor":{"image":"/img/brands/emirates.png","name":"Emirate"},"route":{"from":{"flag":"/img/country/qatar.png","airport":"DIA"},"to":{"flag":"/img/country/norway.png","airport":"OSL"}},"destination":{"currentPosition":"26512 km, .02h:56m ago","target":"3,455 km, in 03h:25m","percent":75},"weather":{"temperature":5,"weather":"Heavy rain","icon":"fa-solid fa-cloud-showers-heavy","color":"text-danger"},"time":{"time":"07:23 PM","date":"Monday, Nov 05, 2022"},"status":{"label":"On Time","type":"primary"}}' />
                                        </div>
                                    </td>
                                    <td class="align-middle flightNo ps-0"><a class="fw-bold" href="#!">#41242</a></td>
                                    <td class="align-middle vendor pe-5"><a class="d-flex align-items-center gap-2"
                                            href="#!"><img src="../assets/img/brands/emirates.png" alt="" width="32" />
                                            <h6 class="mb-0 text-primary fw-semibold text-nowrap">Emirate</h6>
                                        </a></td>
                                    <td class="align-middle weather pe-5">
                                        <div class="d-flex align-items-center"><span
                                                class="fa-solid fa-temperature-quarter me-2 text-info"></span>
                                            <p class="mb-0 text-body-tertiary me-3">5°C</p><span
                                                class="me-2 fa-solid fa-cloud-showers-heavy text-danger"></span>
                                            <p class="mb-0 text-body-tertiary">Heavy rain</p>
                                        </div>
                                    </td>
                                    <td class="align-middle route pe-5">
                                        <div class="d-flex align-items-center gap-2"><img
                                                src="../assets/img/country/qatar.png" alt="" width="16" />
                                            <p class="mb-0 fw-semibold text-bold">DIA</p><span
                                                class="fa-solid fa-arrow-right text-body-tertiary mx-1"></span>
                                            <p class="mb-0 fw-semibold text-bold">OSL</p><img
                                                src="../assets/img/country/norway.png" alt="" width="16" />
                                        </div>
                                    </td>
                                    <td class="align-middle destination pe-5 pe-xxl-7">
                                        <div class="progress overflow-visible" role="progressbar"
                                            aria-label="flight-progress-bar" aria-valuenow="75" aria-valuemin="0"
                                            aria-valuemax="100" style="height: 2px">
                                            <div class="progress-bar overflow-visible position-relative bg-info-light rounded"
                                                style="width: 75%"><span
                                                    class="fa-solid fa-plane text-info position-absolute end-0"></span>
                                            </div>
                                        </div>
                                        <div class="d-flex justify-content-between mt-2">
                                            <p class="mb-0 fs-10 text-body-tertiary">26512 km, .02h:56m ago</p>
                                            <p class="mb-0 fs-10 text-body-tertiary">3,455 km, in 03h:25m</p>
                                        </div>
                                    </td>
                                    <td class="status align-middle text-end"><span
                                            class="badge badge-phoenix fs-10 badge-phoenix-primary">On Time</span></td>
                                    <td class="align-middle text-end time">
                                        <div class="d-flex justify-content-end align-items-center gap-2 mb-2"><span
                                                class="fa-regular fa-clock text-body"> </span><span
                                                class="text-body fw-semibold">07:23 PM</span></div>
                                        <div class="d-flex justify-content-end gap-2"><span class="text-body"
                                                data-feather="calendar" style="width:16px; height:16px"></span><span
                                                class="text-body fw-semibold">Monday, Nov 05, 2022</span></div>
                                    </td>
                                    <td class="align-middle text-end">
                                        <div class="btn-reveal-trigger"><button
                                                class="btn btn-sm ms-auto dropdown-toggle dropdown-caret-none transition-none d-flex btn-reveal"
                                                type="button" data-bs-toggle="dropdown" data-boundary="window"
                                                aria-haspopup="true" aria-expanded="false"
                                                data-bs-reference="parent"><span
                                                    class="fas fa-ellipsis-h"></span></button>
                                            <div class="dropdown-menu dropdown-menu-end"><a class="dropdown-item"
                                                    href="#!">Track flight</a><a class="dropdown-item"
                                                    href="#!">Download</a><a class="dropdown-item" href="#!">Report
                                                    abuse</a></div>
                                        </div>
                                    </td>
                                </tr>
                            </tbody>
                        </table>
                    </div>
                    <div class="mapbox-container">
                        <div class="position-relative">
                            <div class="map rounded-3" id="flightMap"></div>
                            <div class="mapbox-control-btn flight-map-control-btn"><button
                                    class="zoomIn d-none d-md-block"><span
                                        class="fa-solid fa-plus"></span></button><button
                                    class="zoomOut d-none d-md-block"><span
                                        class="fa-solid fa-minus"></span></button><button
                                    class="fullScreen mt-md-3"><span
                                        class="fa-solid fa-up-right-and-down-left-from-center"></span></button></div>
                        </div>
                        <div class="position-absolute top-0 w-100 mt-3 mt-md-5 px-3 px-md-5 px-xl-7">
                            <div class="d-flex align-items-center bg-secondary overflow-hidden rounded-1"
                                style="height: 46px">
                                <div
                                    class="h-100 px-3 d-flex align-items-center bg-danger-subtle position-relative z-5">
                                    <span class="fa-solid fa-circle text-danger me-md-2"></span>
                                    <h3 class="mb-0 fw-bold text-nowrap d-none d-md-block">Live Tracking</h3>
                                </div>
                                <div class="swiper-theme-container w-100">
                                    <div class="swiper theme-slider"
                                        data-swiper='{"loop":true,"spaceBetween":40,"centeredSlides":true,"slidesPerView":"auto","autoplay":{"delay":0},"speed":4000,"grabCursor":true}'>
                                        <div class="swiper-wrapper swiper-continuous-autoplay">
                                            <div class="swiper-slide w-auto">
                                                <div class="d-flex align-items-center">
                                                    <h6 class="px-3 py-2 bg-primary-subtle mb-0 fs-10 rounded-1 me-2">1
                                                    </h6><img class="me-1" src="../assets/img/brands/emirates.png"
                                                        alt="" width="16" />
                                                    <h6 class="mb-0 text-white fw-semibold me-3 text-nowrap">EK204
                                                        (AK98)</h6>
                                                    <h6 class="mb-0 fw-semibold text-white">RIG</h6><span
                                                        class="fa-solid fa-plane text-primary mx-2"></span>
                                                    <h6 class="mb-0 fw-semibold text-white border-end pe-6">LAX</h6>
                                                </div>
                                            </div>
                                            <div class="swiper-slide w-auto">
                                                <div class="d-flex align-items-center">
                                                    <h6 class="px-3 py-2 bg-primary-subtle mb-0 fs-10 rounded-1 me-2">2
                                                    </h6><img class="me-1"
                                                        src="../assets/img/brands/phoenix-firelines.png" alt=""
                                                        width="16" />
                                                    <h6 class="mb-0 text-white fw-semibold me-3 text-nowrap">EK204
                                                        (AK98)</h6>
                                                    <h6 class="mb-0 fw-semibold text-white">RIG</h6><span
                                                        class="fa-solid fa-plane text-primary mx-2"></span>
                                                    <h6 class="mb-0 fw-semibold text-white border-end pe-6">LAX</h6>
                                                </div>
                                            </div>
                                            <div class="swiper-slide w-auto">
                                                <div class="d-flex align-items-center">
                                                    <h6 class="px-3 py-2 bg-primary-subtle mb-0 fs-10 rounded-1 me-2">3
                                                    </h6><img class="me-1" src="../assets/img/brands/qatar-airways.png"
                                                        alt="" width="16" />
                                                    <h6 class="mb-0 text-white fw-semibold me-3 text-nowrap">EK204
                                                        (AK98)</h6>
                                                    <h6 class="mb-0 fw-semibold text-white">RIG</h6><span
                                                        class="fa-solid fa-plane text-primary mx-2"></span>
                                                    <h6 class="mb-0 fw-semibold text-white border-end pe-6">LAX</h6>
                                                </div>
                                            </div>
                                            <div class="swiper-slide w-auto">
                                                <div class="d-flex align-items-center">
                                                    <h6 class="px-3 py-2 bg-primary-subtle mb-0 fs-10 rounded-1 me-2">4
                                                    </h6><img class="me-1" src="../assets/img/brands/jal.png" alt=""
                                                        width="16" />
                                                    <h6 class="mb-0 text-white fw-semibold me-3 text-nowrap">EK204
                                                        (AK98)</h6>
                                                    <h6 class="mb-0 fw-semibold text-white">RIG</h6><span
                                                        class="fa-solid fa-plane text-primary mx-2"></span>
                                                    <h6 class="mb-0 fw-semibold text-white border-end pe-6">LAX</h6>
                                                </div>
                                            </div>
                                            <div class="swiper-slide w-auto">
                                                <div class="d-flex align-items-center">
                                                    <h6 class="px-3 py-2 bg-primary-subtle mb-0 fs-10 rounded-1 me-2">5
                                                    </h6><img class="me-1" src="../assets/img/brands/jal.png" alt=""
                                                        width="16" />
                                                    <h6 class="mb-0 text-white fw-semibold me-3 text-nowrap">EK204
                                                        (AK98)</h6>
                                                    <h6 class="mb-0 fw-semibold text-white">RIG</h6><span
                                                        class="fa-solid fa-plane text-primary mx-2"></span>
                                                    <h6 class="mb-0 fw-semibold text-white border-end pe-6">LAX</h6>
                                                </div>
                                            </div>
                                            <div class="swiper-slide w-auto">
                                                <div class="d-flex align-items-center">
                                                    <h6 class="px-3 py-2 bg-primary-subtle mb-0 fs-10 rounded-1 me-2">5
                                                    </h6><img class="me-1" src="../assets/img/brands/jal.png" alt=""
                                                        width="16" />
                                                    <h6 class="mb-0 text-white fw-semibold me-3 text-nowrap">EK204
                                                        (AK98)</h6>
                                                    <h6 class="mb-0 fw-semibold text-white">RIG</h6><span
                                                        class="fa-solid fa-plane text-primary mx-2"></span>
                                                    <h6 class="mb-0 fw-semibold text-white border-end pe-6">LAX</h6>
                                                </div>
                                            </div>
                                            <div class="swiper-slide w-auto">
                                                <div class="d-flex align-items-center">
                                                    <h6 class="px-3 py-2 bg-primary-subtle mb-0 fs-10 rounded-1 me-2">5
                                                    </h6><img class="me-1" src="../assets/img/brands/jal.png" alt=""
                                                        width="16" />
                                                    <h6 class="mb-0 text-white fw-semibold me-3 text-nowrap">EK204
                                                        (AK98)</h6>
                                                    <h6 class="mb-0 fw-semibold text-white">RIG</h6><span
                                                        class="fa-solid fa-plane text-primary mx-2"></span>
                                                    <h6 class="mb-0 fw-semibold text-white border-end pe-6">LAX</h6>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="flight-desc-card p-3 bg-body-emphasis rounded-3">
                            <div class="row gx-5 justify-content-between">
                                <div class="col-auto">
                                    <table class="fs-9">
                                        <tr>
                                            <th style="width: 70px"></th>
                                            <th></th>
                                            <th></th>
                                        </tr>
                                        <tr>
                                            <td>
                                                <h6 class="mb-0 text-body-tertiary">Flight no.</h6>
                                            </td>
                                            <td class="text-body-tertiary pe-2">: </td>
                                            <td>
                                                <h6 class="mb-0 text-nowrap fw-semibold text-body-tertiary">FF-SCA001
                                                </h6>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>
                                                <h6 class="mb-0 text-body-tertiary">Model</h6>
                                            </td>
                                            <td class="text-body-tertiary pe-2">: </td>
                                            <td>
                                                <h6 class="mb-0 text-nowrap fw-semibold text-body-tertiary">Appa 707-RTX
                                                </h6>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>
                                                <h6 class="mb-0 text-body-tertiary">Velocity</h6>
                                            </td>
                                            <td class="text-body-tertiary pe-2">: </td>
                                            <td>
                                                <h6 class="mb-0 text-nowrap fw-semibold text-body-tertiary">450 km/h
                                                </h6>
                                            </td>
                                        </tr>
                                    </table>
                                </div>
                                <div class="col-auto">
                                    <table class="fs-9">
                                        <tr>
                                            <th style="width: 70px"></th>
                                            <th></th>
                                            <th></th>
                                        </tr>
                                        <tr>
                                            <td>
                                                <h6 class="mb-0 text-body-tertiary">Airline</h6>
                                            </td>
                                            <td class="text-body-tertiary pe-2">: </td>
                                            <td>
                                                <h6 class="mb-0 text-nowrap fw-semibold text-primary">YIP YIP</h6>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>
                                                <h6 class="mb-0 text-body-tertiary">Callsign</h6>
                                            </td>
                                            <td class="text-body-tertiary pe-2">: </td>
                                            <td>
                                                <h6 class="mb-0 text-nowrap fw-semibold text-body-tertiary">Skybison1
                                                </h6>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>
                                                <h6 class="mb-0 text-body-tertiary">ETA</h6>
                                            </td>
                                            <td class="text-body-tertiary pe-2">: </td>
                                            <td>
                                                <h6 class="mb-0 text-nowrap fw-semibold text-body-tertiary">12 hrs 57
                                                    mins</h6>
                                            </td>
                                        </tr>
                                    </table>
                                </div>
                            </div>
                            <div class="d-flex align-items-center gap-2 mt-3">
                                <h6 class="mb-0 text-body-tertiary">GRU</h6>
                                <div class="progress flex-1" role="progressbar" aria-label="flight-destination-progress"
                                    aria-valuenow="50" aria-valuemin="0" aria-valuemax="100">
                                    <div class="progress-bar bg-info overflow-visible" style="width: 50%"><span
                                            class="fa-solid fa-plane text-info position-absolute end-0"></span></div>
                                </div>
                                <h6 class="mb-0 text-body-tertiary">SJC</h6>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <footer class="footer position-absolute">
                <div class="row g-0 justify-content-between align-items-center h-100">
                    <div class="col-12 col-sm-auto text-center">
                        <p class="mb-0 mt-2 mt-sm-0 text-body">Thank you for creating with Phoenix<span
                                class="d-none d-sm-inline-block"></span><span
                                class="d-none d-sm-inline-block mx-1">|</span><br class="d-sm-none" />2024 &copy;<a
                                class="mx-1" href="https://themewagon.com/">Themewagon</a></p>
                    </div>
                    <div class="col-12 col-sm-auto text-center">
                        <p class="mb-0 text-body-tertiary text-opacity-85">v1.18.0</p>
                    </div>
                </div>
            </footer>
        </div>
        <div class="modal fade" id="searchBoxModal" tabindex="-1" aria-hidden="true" data-bs-backdrop="true"
            data-phoenix-modal="data-phoenix-modal" style="--phoenix-backdrop-opacity: 1;">
            <div class="modal-dialog">
                <div class="modal-content mt-15 rounded-pill">
                    <div class="modal-body p-0">
                        <div class="search-box navbar-top-search-box" data-list='{"valueNames":["title"]}'
                            style="width: auto;">
                            <form class="position-relative" data-bs-toggle="search" data-bs-display="static"><input
                                    class="form-control search-input fuzzy-search rounded-pill form-control-lg"
                                    type="search" placeholder="Search..." aria-label="Search" />
                                <span class="fas fa-search search-box-icon"></span>
                            </form>
                            <div class="btn-close position-absolute end-0 top-50 translate-middle cursor-pointer shadow-none"
                                data-bs-dismiss="search"><button class="btn btn-link p-0" aria-label="Close"></button>
                            </div>
                            <div class="dropdown-menu border start-0 py-0 overflow-hidden w-100">
                                <div class="scrollbar-overlay" style="max-height: 30rem;">
                                    <div class="list pb-3">
                                        <h6 class="dropdown-header text-body-highlight fs-10 py-2">24 <span
                                                class="text-body-quaternary">results</span></h6>
                                        <hr class="my-0" />
                                        <h6
                                            class="dropdown-header text-body-highlight fs-9 border-bottom border-translucent py-2 lh-sm">
                                            Recently Searched </h6>
                                        <div class="py-2"><a class="dropdown-item"
                                                href="https://prium.github.io/phoenix/v1.18.0/apps/e-commerce/landing/product-details.html">
                                                <div class="d-flex align-items-center">
                                                    <div class="fw-normal text-body-highlight title"><span
                                                            class="fa-solid fa-clock-rotate-left"
                                                            data-fa-transform="shrink-2"></span> Store Macbook</div>
                                                </div>
                                            </a>
                                            <a class="dropdown-item"
                                                href="https://prium.github.io/phoenix/v1.18.0/apps/e-commerce/landing/product-details.html">
                                                <div class="d-flex align-items-center">
                                                    <div class="fw-normal text-body-highlight title"> <span
                                                            class="fa-solid fa-clock-rotate-left"
                                                            data-fa-transform="shrink-2"></span> MacBook Air - 13″</div>
                                                </div>
                                            </a>
                                        </div>
                                        <hr class="my-0" />
                                        <h6
                                            class="dropdown-header text-body-highlight fs-9 border-bottom border-translucent py-2 lh-sm">
                                            Products</h6>
                                        <div class="py-2"><a class="dropdown-item py-2 d-flex align-items-center"
                                                href="https://prium.github.io/phoenix/v1.18.0/apps/e-commerce/landing/product-details.html">
                                                <div class="file-thumbnail me-2"><img
                                                        class="h-100 w-100 object-fit-cover rounded-3"
                                                        src="../assets/img/products/60x60/3.png" alt="" /></div>
                                                <div class="flex-1">
                                                    <h6 class="mb-0 text-body-highlight title">MacBook Air - 13″</h6>
                                                    <p class="fs-10 mb-0 d-flex text-body-tertiary"><span
                                                            class="fw-medium text-body-tertiary text-opactity-85">8GB
                                                            Memory - 1.6GHz - 128GB Storage</span></p>
                                                </div>
                                            </a>
                                            <a class="dropdown-item py-2 d-flex align-items-center"
                                                href="https://prium.github.io/phoenix/v1.18.0/apps/e-commerce/landing/product-details.html">
                                                <div class="file-thumbnail me-2"><img class="img-fluid"
                                                        src="../assets/img/products/60x60/3.png" alt="" /></div>
                                                <div class="flex-1">
                                                    <h6 class="mb-0 text-body-highlight title">MacBook Pro - 13″</h6>
                                                    <p class="fs-10 mb-0 d-flex text-body-tertiary"><span
                                                            class="fw-medium text-body-tertiary text-opactity-85">30 Sep
                                                            at 12:30 PM</span></p>
                                                </div>
                                            </a>
                                        </div>
                                        <hr class="my-0" />
                                        <h6
                                            class="dropdown-header text-body-highlight fs-9 border-bottom border-translucent py-2 lh-sm">
                                            Quick Links</h6>
                                        <div class="py-2"><a class="dropdown-item"
                                                href="https://prium.github.io/phoenix/v1.18.0/apps/e-commerce/landing/product-details.html">
                                                <div class="d-flex align-items-center">
                                                    <div class="fw-normal text-body-highlight title"><span
                                                            class="fa-solid fa-link text-body"
                                                            data-fa-transform="shrink-2"></span> Support MacBook House
                                                    </div>
                                                </div>
                                            </a>
                                            <a class="dropdown-item"
                                                href="https://prium.github.io/phoenix/v1.18.0/apps/e-commerce/landing/product-details.html">
                                                <div class="d-flex align-items-center">
                                                    <div class="fw-normal text-body-highlight title"> <span
                                                            class="fa-solid fa-link text-body"
                                                            data-fa-transform="shrink-2"></span> Store MacBook″</div>
                                                </div>
                                            </a>
                                        </div>
                                        <hr class="my-0" />
                                        <h6
                                            class="dropdown-header text-body-highlight fs-9 border-bottom border-translucent py-2 lh-sm">
                                            Files</h6>
                                        <div class="py-2"><a class="dropdown-item"
                                                href="https://prium.github.io/phoenix/v1.18.0/apps/e-commerce/landing/product-details.html">
                                                <div class="d-flex align-items-center">
                                                    <div class="fw-normal text-body-highlight title"><span
                                                            class="fa-solid fa-file-zipper text-body"
                                                            data-fa-transform="shrink-2"></span> Library MacBook
                                                        folder.rar</div>
                                                </div>
                                            </a>
                                            <a class="dropdown-item"
                                                href="https://prium.github.io/phoenix/v1.18.0/apps/e-commerce/landing/product-details.html">
                                                <div class="d-flex align-items-center">
                                                    <div class="fw-normal text-body-highlight title"> <span
                                                            class="fa-solid fa-file-lines text-body"
                                                            data-fa-transform="shrink-2"></span> Feature MacBook
                                                        extensions.txt</div>
                                                </div>
                                            </a>
                                            <a class="dropdown-item"
                                                href="https://prium.github.io/phoenix/v1.18.0/apps/e-commerce/landing/product-details.html">
                                                <div class="d-flex align-items-center">
                                                    <div class="fw-normal text-body-highlight title"> <span
                                                            class="fa-solid fa-image text-body"
                                                            data-fa-transform="shrink-2"></span> MacBook Pro_13.jpg
                                                    </div>
                                                </div>
                                            </a>
                                        </div>
                                        <hr class="my-0" />
                                        <h6
                                            class="dropdown-header text-body-highlight fs-9 border-bottom border-translucent py-2 lh-sm">
                                            Members</h6>
                                        <div class="py-2"><a class="dropdown-item py-2 d-flex align-items-center"
                                                href="https://prium.github.io/phoenix/v1.18.0/pages/members.html">
                                                <div class="avatar avatar-l status-online  me-2 text-body">
                                                    <img class="rounded-circle "
                                                        src="https://prium.github.io/phoenix/v1.18.0/assets/img/team/40x40/10.webp"
                                                        alt="" />
                                                </div>
                                                <div class="flex-1">
                                                    <h6 class="mb-0 text-body-highlight title">Carry Anna</h6>
                                                    <p class="fs-10 mb-0 d-flex text-body-tertiary">anna@technext.it</p>
                                                </div>
                                            </a>
                                            <a class="dropdown-item py-2 d-flex align-items-center"
                                                href="https://prium.github.io/phoenix/v1.18.0/pages/members.html">
                                                <div class="avatar avatar-l  me-2 text-body">
                                                    <img class="rounded-circle "
                                                        src="https://prium.github.io/phoenix/v1.18.0/assets/img/team/40x40/12.webp"
                                                        alt="" />
                                                </div>
                                                <div class="flex-1">
                                                    <h6 class="mb-0 text-body-highlight title">John Smith</h6>
                                                    <p class="fs-10 mb-0 d-flex text-body-tertiary">smith@technext.it
                                                    </p>
                                                </div>
                                            </a>
                                        </div>
                                        <hr class="my-0" />
                                        <h6
                                            class="dropdown-header text-body-highlight fs-9 border-bottom border-translucent py-2 lh-sm">
                                            Related Searches</h6>
                                        <div class="py-2"><a class="dropdown-item"
                                                href="https://prium.github.io/phoenix/v1.18.0/apps/e-commerce/landing/product-details.html">
                                                <div class="d-flex align-items-center">
                                                    <div class="fw-normal text-body-highlight title"><span
                                                            class="fa-brands fa-firefox-browser text-body"
                                                            data-fa-transform="shrink-2"></span> Search in the Web
                                                        MacBook</div>
                                                </div>
                                            </a>
                                            <a class="dropdown-item"
                                                href="https://prium.github.io/phoenix/v1.18.0/apps/e-commerce/landing/product-details.html">
                                                <div class="d-flex align-items-center">
                                                    <div class="fw-normal text-body-highlight title"> <span
                                                            class="fa-brands fa-chrome text-body"
                                                            data-fa-transform="shrink-2"></span> Store MacBook″</div>
                                                </div>
                                            </a>
                                        </div>
                                    </div>
                                    <div class="text-center">
                                        <p class="fallback fw-bold fs-7 d-none">No Result Found.</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="support-chat-container">
            <div class="container-fluid support-chat">
                <div class="card bg-body-emphasis">
                    <div class="card-header d-flex flex-between-center px-4 py-3 border-bottom border-translucent">
                        <h5 class="mb-0 d-flex align-items-center gap-2">Demo widget<span
                                class="fa-solid fa-circle text-success fs-11"></span></h5>
                        <div class="btn-reveal-trigger"><button
                                class="btn btn-link p-0 dropdown-toggle dropdown-caret-none transition-none d-flex"
                                type="button" id="support-chat-dropdown" data-bs-toggle="dropdown"
                                data-boundary="window" aria-haspopup="true" aria-expanded="false"
                                data-bs-reference="parent"><span class="fas fa-ellipsis-h text-body"></span></button>
                            <div class="dropdown-menu dropdown-menu-end py-2" aria-labelledby="support-chat-dropdown"><a
                                    class="dropdown-item" href="#!">Request a callback</a><a class="dropdown-item"
                                    href="#!">Search in chat</a><a class="dropdown-item" href="#!">Show history</a><a
                                    class="dropdown-item" href="#!">Report to Admin</a><a
                                    class="dropdown-item btn-support-chat" href="#!">Close Support</a></div>
                        </div>
                    </div>
                    <div class="card-body chat p-0">
                        <div class="d-flex flex-column-reverse scrollbar h-100 p-3">
                            <div class="text-end mt-6"><a
                                    class="mb-2 d-inline-flex align-items-center text-decoration-none text-body-emphasis bg-body-hover rounded-pill border border-primary py-2 ps-4 pe-3"
                                    href="#!">
                                    <p class="mb-0 fw-semibold fs-9">I need help with something</p><span
                                        class="fa-solid fa-paper-plane text-primary fs-9 ms-3"></span>
                                </a><a
                                    class="mb-2 d-inline-flex align-items-center text-decoration-none text-body-emphasis bg-body-hover rounded-pill border border-primary py-2 ps-4 pe-3"
                                    href="#!">
                                    <p class="mb-0 fw-semibold fs-9">I can’t reorder a product I previously ordered</p>
                                    <span class="fa-solid fa-paper-plane text-primary fs-9 ms-3"></span>
                                </a><a
                                    class="mb-2 d-inline-flex align-items-center text-decoration-none text-body-emphasis bg-body-hover rounded-pill border border-primary py-2 ps-4 pe-3"
                                    href="#!">
                                    <p class="mb-0 fw-semibold fs-9">How do I place an order?</p><span
                                        class="fa-solid fa-paper-plane text-primary fs-9 ms-3"></span>
                                </a><a
                                    class="false d-inline-flex align-items-center text-decoration-none text-body-emphasis bg-body-hover rounded-pill border border-primary py-2 ps-4 pe-3"
                                    href="#!">
                                    <p class="mb-0 fw-semibold fs-9">My payment method not working</p><span
                                        class="fa-solid fa-paper-plane text-primary fs-9 ms-3"></span>
                                </a></div>
                            <div class="text-center mt-auto">
                                <div class="avatar avatar-3xl status-online"><img
                                        class="rounded-circle border border-3 border-light-subtle"
                                        src="https://prium.github.io/phoenix/v1.18.0/assets/img/team/30.webp" alt="" />
                                </div>
                                <h5 class="mt-2 mb-3">Eric</h5>
                                <p class="text-center text-body-emphasis mb-0">Ask us anything – we’ll get back to you
                                    here or by email within 24 hours.</p>
                            </div>
                        </div>
                    </div>
                    <div
                        class="card-footer d-flex align-items-center gap-2 border-top border-translucent ps-3 pe-4 py-3">
                        <div class="d-flex align-items-center flex-1 gap-3 border border-translucent rounded-pill px-4">
                            <input class="form-control outline-none border-0 flex-1 fs-9 px-0" type="text"
                                placeholder="Write message" /><label
                                class="btn btn-link d-flex p-0 text-body-quaternary fs-9 border-0"
                                for="supportChatPhotos"><span class="fa-solid fa-image"></span></label><input
                                class="d-none" type="file" accept="image/*" id="supportChatPhotos" /><label
                                class="btn btn-link d-flex p-0 text-body-quaternary fs-9 border-0"
                                for="supportChatAttachment"> <span class="fa-solid fa-paperclip"></span></label><input
                                class="d-none" type="file" id="supportChatAttachment" />
                        </div><button class="btn p-0 border-0 send-btn"><span
                                class="fa-solid fa-paper-plane fs-9"></span></button>
                    </div>
                </div>
            </div><button class="btn btn-support-chat p-0 border border-translucent"><span
                    class="fs-8 btn-text text-primary text-nowrap">Chat demo</span><span
                    class="ping-icon-wrapper mt-n4 ms-n6 mt-sm-0 ms-sm-2 position-absolute position-sm-relative"><span
                        class="ping-icon-bg"></span><span class="fa-solid fa-circle ping-icon"></span></span><span
                    class="fa-solid fa-headset text-primary fs-8 d-sm-none"></span><span
                    class="fa-solid fa-chevron-down text-primary fs-7"></span></button>
        </div>
    </main>




    <!-- Scripts Start Here -->

    <?php include 'components/scripts.php' ?>
    <!-- Scripts End Here -->
</body>

</html>