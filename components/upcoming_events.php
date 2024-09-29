<?php
// Database connection
include './php_files/db_connections.php';

// Query to fetch all events
$events_query = "SELECT event_id AS id, event_name AS name, event_description AS description, event_date AS date, event_time AS time, venue, price, image, category_id FROM events";
$events_result = $conn->query($events_query); // Use $conn instead of $db

$events = [];
if ($events_result->num_rows > 0) {
    while ($row = $events_result->fetch_assoc()) {
        $events[] = $row;
    }
}

// Query to fetch all festivals
$festivals_query = "SELECT festival_id AS id, festival_name AS name, festival_description AS description, start_date AS date, '08:00:00' AS time, venue, price, image, category_id FROM festivals";
$festivals_result = $conn->query($festivals_query); // Use $conn instead of $db

$festivals = [];
if ($festivals_result->num_rows > 0) {
    while ($row = $festivals_result->fetch_assoc()) {
        $festivals[] = $row;
    }
}

// Combined Data for 'All'
$all_data = array_merge($events, $festivals);
?>


<section class="events space-top space-extra-bottom">
    <div class="container">
        <div class="row">
            <div class="col-xxl-6 col-xl-7 col-lg-8 col-md-10 mx-auto">
                <div class="title-area text-center">
                    <span class="sec-subtitle2">Upcoming Events</span>
                    <h2 class="sec-title">Explore Our Next Upcoming Awesome Events</h2>
                </div>
            </div>
            <div>
                <div class="filter-menu1 filter-menu-active wow fadeInUp" data-wow-delay="0.3s">
                    <button data-filter="*" class="active">All</button>
                    <button data-filter=".Music">Music Events</button>
                    <button data-filter=".Festival">Festival Events</button>
                </div>
            </div>
        </div>

        <div class="row filter-active2 wow fadeInUp" data-wow-delay="0.4s">
            <?php 
            $limited_events = array_slice($events, 0, 6);
            // Iterate through all events
            foreach ($limited_events as $event) { ?>
                <div class="col-md-6 col-lg-4 filter-item Music"> <!-- Change the class based on event type -->
                    <div class="event-style1">
                        <div class="event-img">
                            <img src="assets/img/<?php echo $event['image']; ?>" alt="<?php echo $event['name']; ?>">
                            <div class="event-tags">
                                <a href="event-details.html">Event</a>
                            </div>
                            <div class="event-date">
                                <span><?php echo date('d', strtotime($event['date'])); ?></span>
                                <?php echo date('F', strtotime($event['date'])); ?>
                            </div>
                        </div>
                        <div class="event-content">
                            <div class="event-meta">
                                <ul>
                                    <li>
                                        <span><i class="fas fa-clock"></i><?php echo $event['time']; ?></span>
                                    </li>
                                    <li>
                                        <span><i class="fas fa-map-marker-alt"></i><?php echo $event['venue']; ?></span>
                                    </li>
                                </ul>
                            </div>
                            <h3 class="event-title h5">
                                <a href="event-details.html"><?php echo $event['name']; ?></a>
                            </h3>
                            <p class="event-text"><?php echo $event['description']; ?></p>
                            <div class="event-footer">
                                <a href="event-details.html" class="event-link">Tickets & Details</a>
                                <span class="event-price">Price: <span>$<?php echo $event['price']; ?></span></span>
                            </div>
                        </div>
                    </div>
                </div>
            <?php } ?>

            <?php
            $limited_festival = array_slice($festivals, 0, 6);
            // Iterate through all festivals
            foreach ($limited_festival as $festival) { ?>
                <div class="col-md-6 col-lg-4 filter-item Festival"> <!-- Change the class to Festival -->
                    <div class="event-style1">
                        <div class="event-img">
                            <img src="assets/img/<?php echo $festival['image']; ?>" alt="<?php echo $festival['name']; ?>">
                            <div class="event-tags">
                                <a href="event-details.html">Festival</a>
                            </div>
                            <div class="event-date">
                                <span><?php echo date('d', strtotime($festival['date'])); ?></span>
                                <?php echo date('F', strtotime($festival['date'])); ?>
                            </div>
                        </div>
                        <div class="event-content">
                            <div class="event-meta">
                                <ul>
                                    <li>
                                        <span><i class="fas fa-clock"></i><?php echo $festival['time']; ?></span>
                                    </li>
                                    <li>
                                        <span><i class="fas fa-map-marker-alt"></i><?php echo $festival['venue']; ?></span>
                                    </li>
                                </ul>
                            </div>
                            <h3 class="event-title h5">
                                <a href="event-details.html"><?php echo $festival['name']; ?></a>
                            </h3>
                            <p class="event-text"><?php echo $festival['description']; ?></p>
                            <div class="event-footer">
                                <a href="event-details.html" class="event-link">Tickets & Details</a>
                                <span class="event-price">Price: <span>$<?php echo $festival['price']; ?></span></span>
                            </div>
                        </div>
                    </div>
                </div>
            <?php } ?>
        </div>

        <div class="row justify-content-center">
            <?php if (count($events) + count($festival) > 7) { // Check if more than 7 events exist ?>
                <div class="col-auto">
                    <div class="d-inline-flex pt-10">
                        <a href="./events.php" class="vs-btn">View All Events</a>
                    </div>
                </div>
            <?php } ?>
        </div>
    </div>
</section>

