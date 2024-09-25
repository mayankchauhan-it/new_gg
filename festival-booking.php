<?php
// Database connection
include './php_files/db_connections.php'; // Ensure this file is included

// Get the festival ID from the URL
$festival_id = isset($_GET['id']) ? (int)$_GET['id'] : 0;

// Fetch festival details along with category name from the database
$festival_query = "
    SELECT 
        f.festival_id AS id, 
        f.festival_name AS name, 
        f.festival_description AS description, 
        f.start_date AS date, 
        '08:00:00' AS time, 
        f.venue, 
        f.price, 
        f.image, 
        c.category_name AS category 
    FROM 
        festivals f 
    JOIN 
        categories c ON f.category_id = c.category_id 
    WHERE 
        f.festival_id = $festival_id
";

$festival_result = $conn->query($festival_query);
$festival = $festival_result->fetch_assoc();

if (!$festival) {
    echo "Festival not found!";
    exit;
}



// Assuming this part of the code is included after fetching the event details
$date = new DateTime($festival['date']);
$formatted_date = $date->format('d/m/Y'); // Formats the date as DD/MM/YYYY

// Store the original date for JavaScript countdown
$original_date = $festival['date']; // Keeping the original date format (YYYY-MM-DD)
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
                                <?php echo $festival['name']; ?>
                            </h1>

                            <ul class="offer-counter" data-offer-date="<?php echo $original_date ?>">
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

    <!-- events Grid -->
    <div class="space-top space-extra-bottom">
        <div class="container">
            <div class="row">
                <div class="col-lg-8">
                    <h3 class="sec-title">Order Summary</h3>
                    <div class="order-summmary ebooking-wrap2">
                        <table id="bookingTable">
                            <tr>
                                <th>Event Title</th>
                                <th>Cost</th>
                                <th>Quantity</th>
                                <th>Subtotal</th>
                            </tr>
                            <tr>
                                <td>
                                    <?php echo $festival['name']; ?>
                                </td>
                                <td>&#8377; <span class="price">
                                        <?php echo $festival['price']; ?>
                                    </span></td>
                                <td class='d-flex justify-content-around'>
                                    <button type="button" class="btn btn-sm minus">-</button>
                                    <input id="Q_T" type="text" class="form-control rounded quantity w-50 text-center"
                                        name="quantity" value="1" readonly>
                                    <button type="button" class="btn btn-sm plus">+</button>
                                </td>
                                <td>&#8377; <span class="subtotal">
                                        <?php echo $festival['price']; ?>
                                    </span></td>
                            </tr>
                            <tr>
                                <td colspan='3'>Order Total</td>
                                <td>&#8377; <span id="total">
                                        <?php echo $festival['price']; ?>
                                    </span></td>
                            </tr>
                        </table>
                    </div>

                    <!-- Registration Information Form -->
                    <h3 class="sec-title mb-30">Registration Information</h3>
                    <form class="form-style4 mb-50" action="./php_files/booking_crud.php" method="POST">
                        <h4 class="sec-title h5 mb-25">Ticket Buyer</h4>
                        <div class="row gx-20 mb-20">
                            <div class="col-md-6 form-group">
                                <input class="form-control" type="text" name="fname" placeholder="First Name" >
                            </div>
                            <div class="col-md-6 form-group">
                                <input class="form-control" type="text" name="lname" placeholder="Last Name" >
                            </div>
                            <div class="col-md-6 form-group">
                                <input class="form-control" type="email" name="email" placeholder="Email Address"
                                    >
                            </div>
                            <div class="col-md-6 form-group">
                                <input class="form-control" type="number" name="number" placeholder="Mobile Number"
                                    >
                            </div>
                        </div>

                        <h3 class="sec-title mb-30">Billing Information</h3>
                        <div class="row gx-20 mb-30">
                            <div class="col-md-12 form-group">
                                <textarea name="address" class="form-control" placeholder="Address" ></textarea>
                            </div>
                            <div class="col-md-4 form-group">
                                <input class="form-control" type="text" name="state" placeholder="State" >
                            </div>
                            <div class="col-md-4 form-group">
                                <input class="form-control" type="text" name="city" placeholder="City" >
                            </div>
                            <div class="col-md-4 form-group">
                                <input class="form-control" type="text" name="zipcode" placeholder="Zip Code" >
                            </div>
                        </div>

                        <!-- <input name="event_id" value="<?php echo $festival['id']; ?>">
                        <input name="total_price" id="hiddenTotal" value="<?php echo $festival['price']; ?>">
                        <input class="form-control" id="qt" type="number" name="quantity" placeholder="Ticket Quantity"> -->

                        <input type="hidden" name="booking_type" value="festival"> <!-- or "festival" -->
                        <input type="hidden" name="total_price" id="hiddenTotal" value="<?php echo $festival['price']; ?>">
                        <input type="hidden" name="festival_id" value="<?php echo $festival['id']; ?>"> 
                        <input type="hidden" class="form-control" id="qt" type="number" name="quantity" placeholder="Ticket Quantity">


                        <div class="col-lg-4">
                            <div class="d-flex pt-10">
                                <button type="submit" name="create_booking" class="vs-btn w-100">Book</button>
                            </div>
                        </div>
                    </form>

                </div>


                <!-- Right Side Portion -->
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
                                                <?php echo date('d F, Y', strtotime($festival['date'])); ?>
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
                                                <?php echo date('d F, Y', strtotime($festival['date'])); ?>
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
                                                <?php echo $festival['venue']; ?>
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
                                                <?php echo $festival['venue']; ?>
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
                                                <?php echo $festival['price']; ?> / Person
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
                                                <?php echo $festival['category']; ?>
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

    <!-- events Grid End -->

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

            $('#qt').val($("#Q_T").val());

            function updateSubtotal() {
                // Get the unit price
                var price = parseFloat($('.price').text());

                // Get the current quantity
                var quantity = parseInt($('.quantity').val());

                // Calculate subtotal
                var subtotal = price * quantity;

                // Update subtotal and total in the table
                $('.subtotal').text(subtotal.toFixed(2));
                $('#total').text(subtotal.toFixed(2));
                $('#hiddenTotal').val(subtotal.toFixed(2));
                $('#qt').val($("#Q_T").val());
            }

            // Handle click on plus button
            $('.plus').on('click', function () {
                var quantityInput = $(this).siblings('.quantity');
                var currentQuantity = parseInt(quantityInput.val());

                // Increment quantity
                quantityInput.val(currentQuantity + 1);

                // Update subtotal and total
                updateSubtotal();
            });

            // Handle click on minus button
            $('.minus').on('click', function () {
                var quantityInput = $(this).siblings('.quantity');
                var currentQuantity = parseInt(quantityInput.val());

                // Decrement quantity only if greater than 1
                if (currentQuantity > 1) {
                    quantityInput.val(currentQuantity - 1);

                    // Update subtotal and total
                    updateSubtotal();
                }
            });
        });
    </script>
</body>

</html>