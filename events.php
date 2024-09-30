<!DOCTYPE html>
<html lang="en">

<head>
    <title>Global Gatherings - Best Event Planner</title>
    <?php
      include 'components/head.php'
  ?>

    <?php
      include 'components/style.php'
  ?>

    <style>
        .hero-text {
            margin-bottom: 40px;
            font-size: 18px;
            line-height: 28px;
            max-width: 100%;
        }
    </style>

</head>

<body class="homepage2">
    <!--==============================
	Preloader
	==============================-->
    <div class="preloader">
    <button class="vs-btn preloaderCls">Cancel Preloader </button>
    <div class="preloader-inner">
      <img src="assets/images/gg-icon.png" alt="logo">
      <span class="loader"></span>
    </div>
  </div>


    <?php
      include 'components/header.php'
  ?>
    <!--==============================
    Mobile Menu
  ============================== -->
    <?php
      include 'components/mobile_menu.php'
  ?>

    <!--==============================
      Offcanvas
  ============================== -->
    <?php
      include 'components/offcanvas.php'
    ?>

    <!--==============================
      Slider Section
  ============================== -->
    <section>
        <div class="vs-carousel style1" data-autoplay="false" data-slide-show="1" data-fade="true" data-arrows="false">
            <div>
                <div class="hero-inner">
                    <div class="overlay"></div>
                    <div class="hero-bg" data-bg-src="assets/img/a.jpg"></div>
                    <div class="container">
                        <div class="row justify-content-between">
                            <div class="col-lg-12">
                                <div class="hero-content text-center">
                                    <span class="hero-subtitle">Get Best event Management</span>
                                    <h1 class="hero-title">Events</h1>
                                    <p class="hero-text">Celebrate the Vibrant Festivals in India With Us</p>
                                    <div class="hero-btns justify-content-center">
                                        <a href="about.php" class="vs-btn text-center">
                                            About Us
                                        </a>
                                        <a href="about.php" class="vs-btn style3">
                                            Get Started
                                        </a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>


    <?php
        // Database connection
        include './php_files/db_connections.php';

        // Pagination Variables
        $limit = 7; // Number of events per page
        $page = isset($_GET['page']) ? (int)$_GET['page'] : 1; // Current page
        $offset = ($page - 1) * $limit; // Offset for the SQL query

        // Query to fetch events with pagination
        $events_query = "SELECT event_id AS id, event_name AS name, event_description AS description, event_date AS date, event_time AS time, venue, price, image, category_id FROM events LIMIT $limit OFFSET $offset";
        $events_result = $conn->query($events_query);

        $events = [];
        if ($events_result->num_rows > 0) {
            while ($row = $events_result->fetch_assoc()) {
                $events[] = $row;
            }
        }

        // Count total events for pagination
        $total_events_query = "SELECT COUNT(*) as total FROM events";
        $total_events_result = $conn->query($total_events_query);
        $total_events = $total_events_result->fetch_assoc()['total'];
        $total_pages = ceil($total_events / $limit);
    ?>
    <!-- Events Grid -->
    <div class="event-details space-top space-extra-bottom">
        <div class="container">
            <div class="row align-items-center justify-content-center justify-content-lg-between">
                <div class="col-auto mb-40">
                    <p class="event-title-count">
                        <?php echo count($events); ?> Search results from
                        <?php echo $total_events; ?> events
                    </p>
                </div>
                <div class="col-auto mb-40">
                    <div class="event-tab">
                        <ul class="nav nav-tabs" id="myTab" role="tablist">
                            <li class="nav-item" role="presentation">
                                <button class="nav-link active" id="profile-tab" data-bs-toggle="tab"
                                    data-bs-target="#profile-tab-pane" type="button" role="tab"
                                    aria-controls="profile-tab-pane" aria-selected="false">
                                    <i class="fas fa-th"></i>
                                </button>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
            <div class="tab-content" id="myTabContent">
                <div class="tab-pane fade show active" id="profile-tab-pane" role="tabpanel"
                    aria-labelledby="profile-tab" tabindex="0">
                    <div class="row">
                        <?php foreach ($events as $event) { ?>
                        <div class="col-md-6 col-lg-4 filter-item Business Art More">
                            <div class="event-style1">
                                <div class="event-img">
                                    <img src="assets/img/<?php echo $event['image']; ?>"
                                        alt="<?php echo $event['name']; ?>">
                                    <div class="event-tags">
                                        <a href="#">
                                            Events
                                        </a>
                                    </div>
                                    <div class="event-date">
                                        <span>
                                            <?php echo date('d', strtotime($event['date'])); ?>
                                        </span>
                                        <?php echo date('F', strtotime($event['date'])); ?>
                                    </div>
                                </div>
                                <div class="event-content">
                                    <div class="event-meta">
                                        <ul>
                                            <li>
                                                <span><i class="fas fa-clock"></i>
                                                    <?php echo $event['time']; ?>
                                                </span>
                                            </li>
                                            <li>
                                                <span><i class="fas fa-map-marker-alt"></i>
                                                    <?php echo $event['venue']; ?>
                                                </span>
                                            </li>
                                        </ul>
                                    </div>
                                    <!-- Dynamic Event Details Page Target -->
                                    <h3 class="event-title h5">
                                        <a href="event-detail.php?id=<?php echo $event['id']; ?>"><?php echo $event['name']; ?></a>
                                    </h3>
                                    <p class="event-text">
                                        <?php echo $event['description']; ?>
                                    </p>
                                    <div class="event-footer">
                                        <a href="event-detail.php?id=<?php echo $event['id']; ?>" class="event-link">Tickets & Details</a>
                                        <span class="event-price">Price: <span>&#8377
                                                <?php echo $event['price']; ?>
                                            </span></span>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <?php } ?>
                    </div>
                    <div class="row justify-content-center">
                        <div class="col-auto">
                            <div class="vs-pagination">
                                <?php if ($page > 1) { ?>
                                <a href="?page=<?php echo $page - 1; ?>" class="pagi-btn">Prev</a>
                                <?php } ?>
                                <ul>
                                    <?php for ($i = 1; $i <= $total_pages; $i++) { ?>
                                    <li><a href="?page=<?php echo $i; ?>" <?php if ($i==$page) echo 'class="active"' ;
                                            ?>>
                                            <?php echo $i; ?>
                                        </a></li>
                                    <?php } ?>
                                </ul>
                                <?php if ($page < $total_pages) { ?>
                                <a href="?page=<?php echo $page + 1; ?>" class="pagi-btn">Next</a>
                                <?php } ?>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Events Grid End -->



    

    <!-- <div class="row mt-4">
        <div class="col-12">

        </div>
    </div> -->

    <!-- Newsletter Area -->
    <?php
      include 'components/newslatter.php'
    ?>
    <!-- Newsletter Area End -->

    
    <!-- Footer Area -->
    <?php
      include 'components/footer.php'
    ?>
    <!-- Footer Area End -->



    <?php
      include 'components/scripts.php'
    ?>
</body>

</html>