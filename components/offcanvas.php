<?php
// Database connection
include './php_files/db_connections.php';

// Get the current date
$current_date = date('Y-m-d');

// Query to fetch all events that are not expired
$events_query = "SELECT event_id AS id, event_name AS name, event_description AS description, event_date AS date, event_time AS time, venue, price, image, category_id 
                 FROM events 
                 WHERE event_date >= '$current_date'"; // Exclude expired events
$events_result = $conn->query($events_query); // Use $conn instead of $db

$events = [];
if ($events_result->num_rows > 0) {
    while ($row = $events_result->fetch_assoc()) {
        $events[] = $row;
    }
}

// Query to fetch all festivals that are not expired
$festivals_query = "SELECT festival_id AS id, festival_name AS name, festival_description AS description, start_date AS date, '08:00:00' AS time, venue, price, image, category_id 
                    FROM festivals 
                    WHERE start_date >= '$current_date'"; // Exclude expired festivals
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


<div class="sidemenu-wrapper d-none d-lg-block">
    <div class="sidemenu-content">
        <button class="closeButton sideMenuCls">
            <i class="far fa-times"></i>
        </button>
        <div class="widget">
            <div class="vs-widget-about">
                <div class="footer-logo">
                    <a href="index.html"><img src="assets/images/gg-icon.png" alt="Eventino" width="200"
                    height="60px"></a>
                </div>
                <p>
                Welcome to Global Gatherings, your premier destination for celebrating the most exciting festivals and events in Ahmedabad and Mumbai! We are dedicated to bringing the vibrant spirit of these two incredible cities to life with unforgettable experiences that make every moment count.
                </p>
                <div class="footer-social">
                    <a href="#"><i class="fab fa-facebook-f"></i></a>
                    <a href="#"><i class="fab fa-twitter"></i></a>
                    <a href="#"><i class="fab fa-instagram"></i></a>
                    <a href="#"><i class="fab fa-behance"></i></a>
                    <a href="#"><i class="fab fa-youtube"></i></a>
                </div>
            </div>
        </div>
        <div class="widget">
            <h3 class="widget_title h4">Recent Articles</h3>
            <?php
                $limited_events = array_slice($festivals, 0, 4);
                foreach ($limited_events as $festivals) {
                ?>
                    <div class="recent-post-wrap mb-2">
                        <div class="recent-post">
                            <div class="media-img">
                                <a href="blog-details.html"><img src="assets/img/<?php echo $festivals['image']; ?>" alt="Blog Image"></a>
                            </div>
                            <div class="media-body">
                                <h4 class="post-title">
                                    <a class="text-inherit" href="blog-details.html">
                                    <?php echo $festivals['name']; ?>
                                    </a>
                                </h4>
                                <div class="recent-post-meta">
                                    <a href="blog.html"><i class="fas fa-calendar-alt"></i><?php echo $festivals['date']; ?></a>
                                </div>
                            </div>
                        </div>
                    </div>
                <?php }
            ?>
        </div>
    </div>
</div>