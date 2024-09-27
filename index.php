<?php
      include 'php_files/login.php'
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

</head>

<body class="homepage2">
  <!-- Pre Loader -->
  <div class="preloader">
    <button class="vs-btn preloaderCls">Cancel Preloader </button>
    <div class="preloader-inner">
      <img src="assets/images/gg-icon.png" alt="logo">
      <span class="loader"></span>
    </div>
  </div>
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

  <!-- Offcanvas -->
  <?php
      include 'components/offcanvas.php'
  ?>

  <!-- Slider Section -->
  <?php
      include 'components/slider.php'
  ?>

  <!-- About Area Start -->
  <section class="about space-top space-extra-bottom">
    <div class="container">
      <div class="row gx-40 align-items-center">
        <div class="col-lg-6 mb-30">
          <div class="img-box1">
            <div class="card-style1">
              <span class="number"><span>3</span>+</span>
              <h3 class="title">Years of Experience</h3>
            </div>
            <div class="img-1">
              <img src="assets/img/about/a-1-1.jpg" alt="about 1 1">
            </div>
            <div class="img-2">
              <img src="assets/img/about/a-1-2.jpg" alt="about 1 2">
            </div>
          </div>
        </div>
        <div class="col-lg-6 mb-30">
          <span class="sec-subtitle">About Us</span>
          <h2 class="sec-title">We Are Global Gathering, No. 1 Event Management Agency</h2>
          <p>We specialize in creating unforgettable experiences, bringing the vibrant energy of Ahmedabad and Mumbai to
            life. Whether it's festivals or events, we are committed to making every moment count with exceptional
            planning and execution. Join us to celebrate the best these cities have to offer!</p>
          <div class="img-3">
            <img src="assets/img/about/a-1-3.jpg" alt="about 1 3">
          </div>
          <div class="list-style1">
            <ul>
              <li><i class="fal fa-check-circle"></i> Expert event management for festivals, ensuring a memorable
                celebration every time.</li>
              <li><i class="fal fa-check-circle"></i> Seamless coordination of all event details, from start to finish,
                for a stress-free experience.</li>
            </ul>


          </div>
          <div class="d-inline-flex">
            <a href="about.php" class="vs-btn" tabindex="0">
              More Information
            </a>
          </div>
        </div>
      </div>
    </div>
  </section>

  <!-- Counter Area Start -->
  <?php
      include 'components/counter.php'
  ?>
  <!-- Counter Area End -->

  <section class="service smoke-bg space">
    <div class="container">
      <div class="row justify-content-between align-items-end">
        <div class="col-lg-6">
          <div class="title-area">
            <span class="sec-subtitle">Services</span>
            <h2 class="sec-title">Discover Unique Experiences with Global Gathering Services</h2>
          </div>
        </div>
        <div class="col-auto d-none d-lg-block">
          <div class="sec-btns style1">
            <button class="vs-btn" data-slick-prev="#service-slider1">
              <i class="far fa-arrow-left"></i>
            </button>
            <button class="vs-btn" data-slick-next="#service-slider1">
              <i class="far fa-arrow-right"></i>
            </button>
          </div>
        </div>
      </div>
      <div class="row vs-carousel" data-slide-show="4" data-lg-slide-show="3" data-md-slide-show="2"
        data-sm-slide-show="1" id="service-slider1">
        <div class="col-lg-3">
          <div class="service-style1">
            <div class="overlay"></div>
            <div class="service-img">
              <img src="assets/img/services/s-1-5.jpg" alt="service image">
            </div>
            <div class="service-content">
              <h2 class="service-name"><a href="service-details.html">Music Events</a></h2>
            </div>
          </div>
        </div>
        <div class="col-lg-3">
          <div class="service-style1">
            <div class="overlay"></div>
            <div class="service-img">
              <img src="assets/img/services/s-1-2.jpg" alt="service image">
            </div>
            <div class="service-content">
              <h2 class="service-name"><a href="service-details.html">Birthday Party</a></h2>
            </div>
          </div>
        </div>
        <div class="col-lg-3">
          <div class="service-style1">
            <div class="overlay"></div>
            <div class="service-img">
              <img src="assets/img/services/s-1-3.jpg" alt="service image">
            </div>
            <div class="service-content">
              <h2 class="service-name"><a href="service-details.html">Food Festivals</a></h2>
            </div>
          </div>
        </div>
        <div class="col-lg-3">
          <div class="service-style1">
            <div class="overlay"></div>
            <div class="service-img">
              <img src="assets/img/services/s-1-5.jpg" alt="service image">
            </div>
            <div class="service-content">
              <h2 class="service-name"><a href="service-details.html">Friends Party</a></h2>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>

  <!-- Upcoming Events -->
  <?php
      include 'components/upcoming_events.php'
  ?>
  <!-- Upcoming Events -->

  <!-- Feature Area -->
  <section class="feature-layout1">
    <div class="overlay"></div>
    <img src="assets/img/bg/f-o-1-1.png" alt="img overlay" class="img-overlay">
    <div class="container">
      <div class="row justify-content-between align-items-end">
        <div class="col-lg-6">
          <div class="title-area">
            <span class="sec-subtitle4">Why Choose Us</span>
            <h2 class="sec-title2">Our Exceptional Working Process And Feature</h2>
          </div>
        </div>
        <div class="col-auto d-none d-lg-block">
          <div class="sec-btns style2">
            <button class="vs-btn" data-slick-prev="#service-slider2">
              <i class="far fa-arrow-left"></i>
            </button>
            <button class="vs-btn" data-slick-next="#service-slider2">
              <i class="far fa-arrow-right"></i>
            </button>
          </div>
        </div>
      </div>
      <div class="row vs-carousel" data-slide-show="4" data-lg-slide-show="3" data-md-slide-show="2"
        id="service-slider2">
        <div class="col-lg-3">
          <div class="feature-style1">
            <div class="feature-icon">
              <img src="assets/img/icons/f-1-1.svg" alt="feature icon 1">
            </div>
            <h3 class="feature-title h5">Friendly Team</h3>
            <p class="feature-text">Bibendum enim facilisis neque convallis a cras. At augue an eget arcu dictum
              varius duis at. Aliquet eget sit amet tellus cras.</p>
          </div>
        </div>
        <div class="col-lg-3">
          <div class="feature-style1">
            <div class="feature-icon">
              <img src="assets/img/icons/f-1-2.svg" alt="feature icon 1">
            </div>
            <h3 class="feature-title h5">Brilliant Idea</h3>
            <p class="feature-text">Bibendum enim facilisis neque convallis a cras. At augue an eget arcu dictum
              varius duis at. Aliquet eget sit amet tellus cras.</p>
          </div>
        </div>
        <div class="col-lg-3">
          <div class="feature-style1">
            <div class="feature-icon">
              <img src="assets/img/icons/f-1-3.svg" alt="feature icon 1">
            </div>
            <h3 class="feature-title h5">Perfect Work</h3>
            <p class="feature-text">Bibendum enim facilisis neque convallis a cras. At augue an eget arcu dictum
              varius duis at. Aliquet eget sit amet tellus cras.</p>
          </div>
        </div>
        <div class="col-lg-3">
          <div class="feature-style1">
            <div class="feature-icon">
              <img src="assets/img/icons/f-1-5.svg" alt="feature icon 1">
            </div>
            <h3 class="feature-title h5">Secure Payment</h3>
            <p class="feature-text">Bibendum enim facilisis neque convallis a cras. At augue an eget arcu dictum
              varius duis at. Aliquet eget sit amet tellus cras.</p>
          </div>
        </div>
        <div class="col-lg-3">
          <div class="feature-style1">
            <div class="feature-icon">
              <img src="assets/img/icons/f-1-4.svg" alt="feature icon 1">
            </div>
            <h3 class="feature-title h5">Support 24/7</h3>
            <p class="feature-text">Bibendum enim facilisis neque convallis a cras. At augue an eget arcu dictum
              varius duis at. Aliquet eget sit amet tellus cras.</p>
          </div>
        </div>
      </div>
    </div>
  </section>
  <!-- Feature Area End -->

  <!-- Gallery Area Start -->
  <section class="space-top space-extra-bottom overflow-hidden">
    <div class="container">
      <div class="row align-items-end justify-content-between">
        <div class="col-lg-5">
          <div class="title-area">
            <span class="sec-subtitle">Eventino Gallery</span>
            <h2 class="sec-title">Our Amazing And unforgettable Times</h2>
          </div>
        </div>
        <div class="col-auto">
          <div class="d-inline-flex pt-10 title-area">
            <a href="event.html" class="vs-btn">View All Events</a>
          </div>
        </div>
      </div>
      <div class="row gx-30 filter-active filter-gallery">
        <div class="col-lg-3 col-md-6 filter-item">
          <div class="gallery-style1">
            <a href="assets/img/gallery/g-1-1.jpg" class="popup-image popup-link">
              <i class="fas fa-image"></i>
            </a>
            <div class="overlay"></div>
            <div class="gallery-thumb">
              <img src="assets/img/gallery/g-1-1.jpg" alt="gallery">
            </div>
            <div class="gallery-content">
              <div class="gallery-date">
                <span>
                <i class="fas fa-clock"></i>
                08:00am - 22:00pm
              </span>
              </div>
              <h3 class="gallery-title h5">
                <a href="gallery-details.html">Business Conference In Australia</a>
              </h3>
            </div>
          </div>
        </div>
        <div class="col-lg-6 col-md-6 filter-item grid-item--width2">
          <div class="gallery-style1">
            <a href="https://www.youtube.com/watch?v=_sI_Ps7JSEk" class="popup-video popup-link">
              <i class="fas fa-play"></i>
            </a>
            <div class="overlay"></div>
            <div class="gallery-thumb">
              <img src="assets/img/gallery/g-1-2.jpg" alt="gallery">
            </div>
            <div class="gallery-content">
              <div class="gallery-date">
                <span>
                <i class="fas fa-clock"></i>
                08:00am - 22:00pm
              </span>
              </div>
              <h3 class="gallery-title h5">
                <a href="gallery-details.html">Empowering Business Growth Conference in Melbourne</a>
              </h3>
            </div>
          </div>
        </div>
        <div class="col-lg-3 col-md-6 filter-item">
          <div class="gallery-style1">
            <a href="assets/img/gallery/g-1-3.jpg" class="popup-image popup-link">
              <i class="fas fa-image"></i>
            </a>
            <div class="overlay"></div>
            <div class="gallery-thumb">
              <img src="assets/img/gallery/g-1-3.jpg" alt="gallery">
            </div>
            <div class="gallery-content">
              <div class="gallery-date">
                <span>
                <i class="fas fa-clock"></i>
                08:00am - 22:00pm
              </span>
              </div>
              <h3 class="gallery-title h5">
                <a href="gallery-details.html">Melbourne Business Mastermind</a>
              </h3>
            </div>
          </div>
        </div>
        <div class="col-lg-6 col-md-6 filter-item grid-item--width2">
          <div class="gallery-style1">
            <a href="https://www.youtube.com/watch?v=_sI_Ps7JSEk" class="popup-video popup-link">
              <i class="fas fa-play"></i>
            </a>
            <div class="overlay"></div>
            <div class="gallery-thumb">
              <img src="assets/img/gallery/g-1-4.jpg" alt="gallery">
            </div>
            <div class="gallery-content">
              <div class="gallery-date">
                <span>
                <i class="fas fa-clock"></i>
                08:00am - 22:00pm
              </span>
              </div>
              <h3 class="gallery-title h5">
                <a href="gallery-details.html">Innovative Leadership Summit for Australian Entrepreneurs</a>
              </h3>
            </div>
          </div>
        </div>
        <div class="col-lg-3 col-md-6 filter-item">
          <div class="gallery-style1">
            <a href="assets/img/gallery/g-1-5.jpg" class="popup-image popup-link">
              <i class="fas fa-image"></i>
            </a>
            <div class="overlay"></div>
            <div class="gallery-thumb">
              <img src="assets/img/gallery/g-1-5.jpg" alt="gallery">
            </div>
            <div class="gallery-content">
              <div class="gallery-date">
                <span>
                <i class="fas fa-clock"></i>
                08:00am - 22:00pm
              </span>
              </div>
              <h3 class="gallery-title h5">
                <a href="gallery-details.html">Canberra Commerce Convention</a>
              </h3>
            </div>
          </div>
        </div>
        <div class="col-lg-3 col-md-6 filter-item">
          <div class="gallery-style1">
            <a href="assets/img/gallery/g-1-6.jpg" class="popup-image popup-link">
              <i class="fas fa-image"></i>
            </a>
            <div class="overlay"></div>
            <div class="gallery-thumb">
              <img src="assets/img/gallery/g-1-6.jpg" alt="gallery">
            </div>
            <div class="gallery-content">
              <div class="gallery-date">
                <span>
                <i class="fas fa-clock"></i>
                08:00am - 22:00pm
              </span>
              </div>
              <h3 class="gallery-title h5">
                <a href="gallery-details.html">Sydney Leadership Symposium</a>
              </h3>
            </div>
          </div>
        </div>
        <div class="col-lg-3 col-md-6 filter-item">
          <div class="gallery-style1">
            <a href="assets/img/gallery/g-1-7.jpg" class="popup-image popup-link">
              <i class="fas fa-image"></i>
            </a>
            <div class="overlay"></div>
            <div class="gallery-thumb">
              <img src="assets/img/gallery/g-1-7.jpg" alt="gallery">
            </div>
            <div class="gallery-content">
              <div class="gallery-date">
                <span>
                <i class="fas fa-clock"></i>
                08:00am - 22:00pm
              </span>
              </div>
              <h3 class="gallery-title h5">
                <a href="gallery-details.html">Brisbane Business Breakthrough</a>
              </h3>
            </div>
          </div>
        </div>
        <div class="col-lg-3 col-md-6 filter-item">
          <div class="gallery-style1">
            <a href="assets/img/gallery/g-1-8.jpg" class="popup-image popup-link">
              <i class="fas fa-image"></i>
            </a>
            <div class="overlay"></div>
            <div class="gallery-thumb">
              <img src="assets/img/gallery/g-1-8.jpg" alt="gallery">
            </div>
            <div class="gallery-content">
              <div class="gallery-date">
                <span>
                <i class="fas fa-clock"></i>
                08:00am - 22:00pm
              </span>
              </div>
              <h3 class="gallery-title h5">
                <a href="gallery-details.html">Canberra Commerce Convention</a>
              </h3>
            </div>
          </div>
        </div>
        <div class="col-lg-6 col-md-6 filter-item grid-item--width2">
          <div class="gallery-style1">
            <a href="https://www.youtube.com/watch?v=_sI_Ps7JSEk" class="popup-video popup-link">
              <i class="fas fa-play"></i>
            </a>
            <div class="overlay"></div>
            <div class="gallery-thumb">
              <img src="assets/img/gallery/g-1-9.jpg" alt="gallery">
            </div>
            <div class="gallery-content">
              <div class="gallery-date">
                <span>
                <i class="fas fa-clock"></i>
                08:00am - 22:00pm
              </span>
              </div>
              <h3 class="gallery-title h5">
                <a href="gallery-details.html">Transformative Business Strategies Conference in Australia</a>
              </h3>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>
  <!-- Gallery Area End -->

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