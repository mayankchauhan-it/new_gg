<?php
// Database connection
include './php_files/db_connections.php'; // Ensure this file is included

// Get the event ID from the URL
$event_id = isset($_GET['id']) ? (int)$_GET['id'] : 0;

// Fetch event details along with category name from the database
$event_query = "
    SELECT 
        e.event_id AS id, 
        e.event_name AS name, 
        e.event_description AS description, 
        e.event_date AS date, 
        e.event_time AS time, 
        e.venue, 
        e.price, 
        e.image, 
        c.category_name AS category 
    FROM 
        events e 
    JOIN 
        categories c ON e.category_id = c.category_id 
    WHERE 
        e.event_id = $event_id
";

$event_result = $conn->query($event_query);
$event = $event_result->fetch_assoc();

if (!$event) {
    echo "Event not found!";
    exit;
}

$date = new DateTime($event['date']);
$formatted_date = $date->format('d/m/Y'); // Formats the date as DD/MM/YYYY

// Store the original date for JavaScript countdown
$original_date = $event['date']; // Keeping the original date format (YYYY-MM-DD)
?>


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

        .hero-inner {
            position: relative;
            z-index: 1;
            min-height: 700px;
            padding-top: 260px;
            /* Large devices */
            /* Medium devices */
        }

        div.count-number {
            transition: opacity 0.2s ease-in-out;
            /* Smooth transition effect */
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
                    <div class="container z-index-common">
                        <div class="breadcumb-content">
                            <h1 class="breadcumb-title">
                                <?php echo $event['name']; ?>
                            </h1>
                            <ul class="offer-counter" data-offer-date="<?php echo $original_date; ?>">
                                <li>
                                    <div class="day count-number">00</div><span class="count-name">Days</span>
                                </li>
                                <li>
                                    <div class="hour count-number">00</div><span class="count-name">Hours</span>
                                </li>
                                <li>
                                    <div class="minute count-number">00</div><span class="count-name">Minutes</span>
                                </li>
                                <li>
                                    <div class="seconds count-number">00</div><span class="count-name">Seconds</span>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Festivals Grid -->
    <div class="space-top space-extra-bottom">
        <div class="container">
            <div class="row">
                <div class="col-lg-8">
                    <!-- Festival Main Image -->
                    <img src="assets/img/<?php echo $event['image']; ?>" alt="<?php echo $event['name']; ?>"
                        class="event-details-img mb-50">

                    <div class="row gx-10">
                        <!-- Event Date -->
                        <div class="col-md-5 mb-30">
                            <div class="item-card">
                                <div class="item-icon">
                                    <i class="fas fa-calendar"></i>
                                </div>
                                <div class="item-content">
                                    <span class="item-title">Event Date</span>
                                    <span class="item-text">
                                        <?php echo date('d F, Y', strtotime($event['date'])); ?>
                                    </span>
                                </div>
                            </div>
                        </div>
                        <!-- Event Venue -->
                        <div class="col-md-5 mb-30">
                            <div class="item-card">
                                <div class="item-icon">
                                    <i class="fas fa-map-marker-alt"></i>
                                </div>
                                <div class="item-content">
                                    <span class="item-title">Event Venue</span>
                                    <span class="item-text">
                                        <?php echo $event['venue']; ?>
                                    </span>
                                </div>
                            </div>
                        </div>
                    </div>

                    <!-- Description Here -->
                    <p>
                        <?php echo $event['description']; ?>
                    </p>
                    <div class="row">
                        <div class="col-md-6">
                            <img src="assets/img/events/e-d-1-2.jpg" alt="Event Details"
                                class="event-details-img2 mb-30">
                        </div>
                        <div class="col-md-6">
                            <img src="assets/img/events/e-d-1-3.jpg" alt="Event Details"
                                class="event-details-img2 mb-30">
                        </div>
                        <div class="col-md-4">
                            <div class="d-none d-xl-inline-flex">
                                <a href="event-booking.php?id=<?php echo $event['id']; ?>" class="vs-btn" tabindex="0">
                                    Book Tickets
                                </a>
                            </div>
                            <button class="vs-menu-toggle d-inline-block d-lg-none"><i class="fal fa-bars"></i></button>
                        </div>
                    </div>




                    <div class="vs-comment-form">
                        <div id="respond" class="comment-respond">
                            <div class="form-title">
                                <h3 class="sec-title">Leave a Reply</h3>
                            </div>
                            <div class="form-inner">
                                <div class="row gx-20">
                                    <div class="col-md-6 form-group">
                                        <input type="text" class="form-control" placeholder="Your Name">
                                        <i class="fas fa-user"></i>
                                    </div>
                                    <div class="col-md-6 form-group">
                                        <input type="email" class="form-control" placeholder="Email Address">
                                        <i class="fas fa-envelope"></i>
                                    </div>
                                    <div class="col-12 form-group">
                                        <textarea class="form-control" placeholder="Type Your Message"></textarea>
                                    </div>
                                    <div class="col-12">
                                        <div class="custom-checkbox notice">
                                            <input id="wp-comment-cookies-consent" name="wp-comment-cookies-consent"
                                                type="checkbox" value="yes">
                                            <label for="wp-comment-cookies-consent"> Save my name, email, and website in
                                                this browser for the next time I comment.</label>
                                        </div>
                                    </div>
                                    <div class="col-12 form-group mb-0">
                                        <button class="vs-btn">Post Comment<i class="far fa-arrow-right"></i></button>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="col-lg-4">
                    <div class="sidebar-area">
                        <div class="widget">
                            <h3 class="widget_title">
                                Event Details
                                <img src="assets/img/shapes/d-1-2.svg">
                            </h3>
                            <ul class="wp-block-categories-list wp-block-details">
                                <li>
                                    <div class="item-card">
                                        <div class="item-icon">
                                            <i class="fas fa-calendar-check"></i>
                                        </div>
                                        <div class="item-content">
                                            <span class="item-title">Start Date</span>
                                            <span class="item-text">
                                                <?php echo date('d F, Y', strtotime($event['date'])); ?>
                                            </span>
                                        </div>
                                    </div>
                                </li>
                                <li>
                                    <div class="item-card">
                                        <div class="item-icon">
                                            <i class="fas fa-calendar-times"></i>
                                        </div>
                                        <div class="item-content">
                                            <span class="item-title">Close Date</span>
                                            <span class="item-text">
                                                <?php echo date('d F, Y', strtotime($event['date'])); ?>
                                            </span>
                                        </div>
                                    </div>
                                </li>
                                <li>
                                    <div class="item-card">
                                        <div class="item-icon">
                                            <i class="fas fa-clock"></i>
                                        </div>
                                        <div class="item-content">
                                            <span class="item-title">Status</span>
                                            <span class="item-text">Showing</span>
                                        </div>
                                    </div>
                                </li>
                                <li>
                                    <div class="item-card">
                                        <div class="item-icon">
                                            <i class="fas fa-map-marker-alt"></i>
                                        </div>
                                        <div class="item-content">
                                            <span class="item-title">Location</span>
                                            <span class="item-text">
                                                <?php echo $event['venue']; ?>
                                            </span>
                                        </div>
                                    </div>
                                </li>
                                <li>
                                    <div class="item-card">
                                        <div class="item-icon">
                                            <i class="fas fa-map-marked-alt"></i>
                                        </div>
                                        <div class="item-content">
                                            <span class="item-title">Venue</span>
                                            <span class="item-text">
                                                <?php echo $event['venue']; ?>
                                            </span>
                                        </div>
                                    </div>
                                </li>
                                <li>
                                    <div class="item-card">
                                        <div class="item-icon">
                                            <i class="fas fa-tags"></i>
                                        </div>
                                        <div class="item-content">
                                            <span class="item-title">Price</span>
                                            <span class="item-text">&#8377
                                                <?php echo $event['price']; ?> / Person
                                            </span>
                                        </div>
                                    </div>
                                </li>
                                <li>
                                    <div class="item-card">
                                        <div class="item-icon">
                                            <i class="fas fa-user"></i>
                                        </div>
                                        <div class="item-content">
                                            <span class="item-title">Organizer</span>
                                            <span class="item-text">
                                                Global Gathering
                                            </span>
                                        </div>
                                    </div>
                                </li>
                                <li>
                                    <div class="item-card">
                                        <div class="item-icon">
                                            <i class="fas fa-folder-open"></i>
                                        </div>
                                        <div class="item-content">
                                            <span class="item-title">Category</span>
                                            <span class="item-text">
                                                <?php echo $event['category']; ?>
                                            </span>
                                        </div>
                                    </div>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- Festivals Grid End -->

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

    <!-- Countdown Custom JS -->
    <script>
        $(document).ready(function () {
            $.fn.countdown = function () {
                this.each(function () {
                    var $this = $(this),
                        offerDate = new Date($this.data("offer-date")).getTime(); // Ensure correct date format
                    function findElement(selector) {
                        return $this.find(selector);
                    }

                    var interval = setInterval(function () {
                        var now = new Date().getTime(),
                            timeDiff = offerDate - now,
                            days = Math.floor(timeDiff / 864e5),
                            hours = Math.floor((timeDiff % 864e5) / 36e5),
                            minutes = Math.floor((timeDiff % 36e5) / 6e4),
                            seconds = Math.floor((timeDiff % 6e4) / 1e3);

                        // Add leading zeros
                        days = days < 10 ? "0" + days : days;
                        hours = hours < 10 ? "0" + hours : hours;
                        minutes = minutes < 10 ? "0" + minutes : minutes;
                        seconds = seconds < 10 ? "0" + seconds : seconds;

                        // Update the timer or handle expiration
                        if (timeDiff < 0) {
                            clearInterval(interval);
                            $this.addClass("expired");
                            findElement(".message").css("display", "block"); // Show message when expired
                            findElement(".day, .hour, .minute, .seconds").html("00"); // Reset to 00 on expiration
                        } else {
                            findElement(".day").html(days);
                            findElement(".hour").html(hours);
                            findElement(".minute").html(minutes);
                            findElement(".seconds").html(seconds);
                        }
                    }, 1000);
                });
            };

            // Start the countdown if offer-counter exists
            if ($(".offer-counter").length) {
                $(".offer-counter").countdown();
            }
        });
    </script>
</body>

</html>