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
    <!-- Pre Loader -->
    <?php
    include 'components/preloader.php'
        ?>
    <!-- Pre Loader -->

    <!-- header component -->
    <?php
      include 'components/header.php'
    ?>
    <!-- header component  -->

    <!-- Mobile Menu -->
    <?php
      include 'components/mobile_menu.php'
    ?>
    <!-- Mobile Menu -->


    <!-- Offcanvas -->
    <?php
      include 'components/offcanvas.php'
    ?>
    <!-- Offcanvas -->

    <!-- Slider Section -->
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
                                    <h1 class="hero-title">Festivals</h1>
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
    <!-- Slider Section -->

    <!-- Festivals Grid -->
    <?php
        
        include './php_files/db_connections.php'; 

        
        $limit = 7; 
        $page = isset($_GET['page']) ? (int)$_GET['page'] : 1; 
        $offset = ($page - 1) * $limit; 

        
        $festivals_query = "SELECT festival_id AS id, festival_name AS name, festival_description AS description, start_date AS date, '08:00:00' AS time, venue, price, image, category_id FROM festivals LIMIT $limit OFFSET $offset";
        $festivals_result = $conn->query($festivals_query); 

        $festivals = [];
        if ($festivals_result->num_rows > 0) {
            while ($row = $festivals_result->fetch_assoc()) {
                $festivals[] = $row;
            }
        }

        
        $total_festivals_query = "SELECT COUNT(*) as total FROM festivals";
        $total_festivals_result = $conn->query($total_festivals_query); 
        $total_festivals = $total_festivals_result->fetch_assoc()['total'];
        $total_pages = ceil($total_festivals / $limit);
    ?>

    <div class="event-details space-top space-extra-bottom">
        <div class="container">
            <div class="row align-items-center justify-content-center justify-content-lg-between">
                <div class="col-auto mb-40">
                    <p class="event-title-count">
                        <?php echo $total_festivals; ?> Search results from
                        <?php echo $total_festivals; ?> festivals
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
                        <?php foreach ($festivals as $festival) { ?>
                        <div class="col-md-6 col-lg-4 filter-item Festival">
                            <div class="event-style1">
                                <div class="event-img">
                                    <img src="assets/img/<?php echo $festival['image']; ?>"
                                        alt="<?php echo $festival['name']; ?>">
                                    <div class="event-tags">
                                        <a href="#">Festival</a>
                                    </div>
                                    <div class="event-date">
                                        <span>
                                            <?php echo date('d', strtotime($festival['date'])); ?>
                                        </span>
                                        <?php echo date('F', strtotime($festival['date'])); ?>
                                    </div>
                                </div>
                                <div class="event-content">
                                    <div class="event-meta">
                                        <ul>
                                            <li>
                                                <span><i class="fas fa-clock"></i>
                                                    <?php echo $festival['time']; ?>
                                                </span>
                                            </li>
                                            <li>
                                                <span><i class="fas fa-map-marker-alt"></i>
                                                    <?php echo $festival['venue']; ?>
                                                </span>
                                            </li>
                                        </ul>
                                    </div>

                                    <!-- Dynamic Festival Detail Page Target -->
                                    <h3 class="event-title h5">
                                        <a href="festival-details.php?id=<?php echo $festival['id']; ?>">
                                            <?php echo $festival['name']; ?>
                                        </a>
                                    </h3>
                                    <p class="event-text">
                                        <?php echo $festival['description']; ?>
                                    </p>
                                    <div class="event-footer">
                                        <a href="festival-details.php?id=<?php echo $festival['id']; ?>"
                                            class="event-link">Tickets & Details</a>
                                        <span class="event-price">Price: <span>&#8377
                                                <?php echo $festival['price']; ?>
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
                                <?php if ($page > 1): ?>
                                <a href="?page=<?php echo $page - 1; ?>" class="pagi-btn">Prev</a>
                                <?php endif; ?>
                                <ul>
                                    <?php for ($i = 1; $i <= $total_pages; $i++): ?>
                                    <li>
                                        <a href="?page=<?php echo $i; ?>" <?php echo $i===$page ? 'class="active"' : ''
                                            ; ?>>
                                            <?php echo $i; ?>
                                        </a>
                                    </li>
                                    <?php endfor; ?>
                                </ul>
                                <?php if ($page < $total_pages): ?>
                                <a href="?page=<?php echo $page + 1; ?>" class="pagi-btn">Next</a>
                                <?php endif; ?>
                            </div>
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
</body>

</html>