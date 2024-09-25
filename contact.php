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
                                    <h1 class="hero-title">Contact US</h1>
                                    <p class="hero-text">Celebrate the Vibrant Festivals in India With Us</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>



    <!-- Contact Area -->
    <section class="space-top space-extra-bottom">
        <div class="container">
            <div class="row">
                <div class="col-lg-6 mb-30">
                    <div class="contact-box">
                        <h3 class="contact-box__title h4">Office Address</h3>
                        <p class="contact-box__text">Visit us anytime! We are here to assist you with all your event planning needs, providing a collaborative and supportive environment.</p>
                        <div class="contact-box__item">
                            <div class="contact-box__icon"><i class="fal fa-phone-alt"></i></div>
                            <div class="media-body">
                                <h4 class="contact-box__label">Phone Number &amp; Email</h4>
                                <p class="contact-box__info"><a href="tel:+918511583131">+91-8511583131</a><a
                                        href="mailto:info@globalgathering.com">info@globalgathering.com</a></p>
                            </div>
                        </div>
                        <div class="contact-box__item">
                            <div class="contact-box__icon"><i class="far fa-map-marker-alt"></i></div>
                            <div class="media-body">
                                <h4 class="contact-box__label">Our Office Address</h4>
                                <p class="contact-box__info">A20, Ayodhya Residency, Ayodhya Chowk, Rajkot-360006.</p>
                            </div>
                        </div>
                        <div class="contact-box__item">
                            <div class="contact-box__icon"><i class="far fa-clock"></i></div>
                            <div class="media-body">
                                <h4 class="contact-box__label">Official Work Time</h4>
                                <p class="contact-box__info">7:00am - 6:00pm ( Mon - Fri ) Sat, Sun &amp; Holiday
                                    Closed</p>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-6 mb-30">
                    <div class="contact-box">
                        <h3 class="contact-box__title h4">Leave a Message</h3>
                        <p class="contact-box__text">We’re Ready To Help You</p>
                        <form class="contact-box__form ajax-contact"
                            action="https://html.vecurosoft.com/eventino/demo/mail.php" method="POST">
                            <div class="row gx-20">
                                <div class="col-md-6 form-group">
                                    <input type="text" name="name" id="name" placeholder="Your Name">
                                    <i class="fal fa-user"></i>
                                </div>
                                <div class="col-md-6 form-group">
                                    <input type="email" name="email" id="email" placeholder="Email Address">
                                    <i class="fal fa-envelope"></i>
                                </div>
                                <div class="col-12 form-group">
                                    <select name="subject" id="subject">
                                        <option selected="" disabled="" hidden="">Select subject</option>
                                        <option value="Web Development">Web Development</option>
                                        <option value="UI Design">UI Design</option>
                                        <option value="CMS Development">CMS Development</option>
                                        <option value="Theme Development">Theme Development</option>
                                        <option value="Wordpress Development">Wordpress Development</option>
                                    </select>
                                </div>
                                <div class="col-12 form-group">
                                    <textarea name="message" id="message" placeholder="Type Your Message"></textarea>
                                </div>
                                <div class="col-12">
                                    <button class="vs-btn">Submit Message<i class="far fa-arrow-right"></i></button>
                                </div>
                            </div>
                        </form>
                        <p class="form-messages mb-0 mt-3"></p>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- Contact Area End -->



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