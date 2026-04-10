<?php $pageTitle = "Appointment"; include 'includes/head.php'; ?>

<body class="rs-smoother-yes">

    <?php include 'includes/header.php'; ?>

    <?php include 'includes/offcanvas.php'; ?>

    <!-- Body main wrapper start -->
    <main>

        <!-- breadcrumb area start -->
        <section class="rs-breadcrumb-area rs-breadcrumb-one p-relative section-space">
            <div class="rs-breadcrumb-bg-thumb include-bg" data-background="assets/images/bg/breadcrumb-bg-thumb-01.webp">
            </div>
            <div class="container">
                <div class="row">
                    <div class="col-xl-8 col-lg-9">
                        <div class="rs-breadcrumb-wrapper">
                            <div class="rs-breadcrumb-menu">
                                <nav>
                                    <ul>
                                        <li class="rs-breadcumb-item">
                                            <span>
                                    <a href="index.php">
                                       Home
                                    </a>
                                 </span>
                                        </li>
                                        <li class="rs-breadcumb-item">
                                            Appointment
                                        </li>
                                    </ul>
                                </nav>
                            </div>
                            <div class="rs-breadcrumb-title-wrapper">
                                <h1 class="rs-breadcrumb-title">Appointment</h1>
                                <span class="rs-breadcrumb-line"></span>
                            </div>
                            <p class="rs-breadcrumb-desc">Position your agency bridge between a client’s big picture</p>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- breadcrumb area end -->

        <!-- contact area start -->
        <section class="rs-contact-area rs-contact-two section-space rs-contact-alt-two">
            <div class="rs-contact-bg-thumb include-bg" data-background="assets/images/bg/contact-bg-thumb-01.webp"></div>
            <div class="container-fluid">
                <div class="row">
                    <div class="col-xl-12">
                        <div class="rs-contact-wrapper">
                            <div class="rs-contact-left">
                                <div class="section-title-wrapper">
                                    <span class="section-subtitle is-white">
                              Contact with us now
                           </span>
                                    <h2 class="section-title rs-split-text-enable split-in-left is-white mb-10">Free Consultation
                                    </h2>
                                    <p class="rs-section-desc">read and update the latest news from us. done eu magna quis felis.
                                    </p>
                                </div>
                                <div class="rs-contact-form">
                                    <form id="contact-form" action="./assets/mailer.php" method="POST">
                                        <div class="row">
                                            <div class="col-md-6">
                                                <div class="rs-contact-input-box">
                                                    <div class="rs-contact-input">
                                                        <input id="name" name="name" type="text" placeholder="Full name*">
                                                        <i class="ri-user-line"></i>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-md-6">
                                                <div class="rs-contact-input-box">
                                                    <div class="rs-contact-input">
                                                        <input id="email" name="email" type="email" placeholder="Email Address*">
                                                        <i class="ri-mail-line"></i>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-md-6">
                                                <div class="rs-contact-input-box">
                                                    <div class="rs-contact-input">
                                                        <input id="phone" name="phone" type="text" placeholder="Phone Number*">
                                                        <i class="ri-smartphone-line"></i>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-md-6">
                                                <div class="rs-contact-input-box">
                                                    <div class="rs-contact-input">
                                                        <select id="subject" name="subject">
                                                            <option>Your Business</option>
                                                            <option value="one">Business Strategy</option>
                                                            <option value="two">Market Analysis</option>
                                                            <option value="three">Financial Planing</option>
                                                            <option value="four">Risk Management</option>
                                                            <option value="five">Digital Transformation</option>
                                                        </select>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-md-6">
                                                <div class="rs-contact-input-box">
                                                    <div class="rs-contact-input">
                                                        <input id="rs-date" name="date" type="text" placeholder="Select Date*" autocomplete="off">
                                                        <i class="ri-calendar-line"></i>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-md-6">
                                                <div class="rs-contact-input-box">
                                                    <div class="rs-contact-input">
                                                        <input id="rs-time" name="time" type="text" placeholder="Select Time*" autocomplete="off">
                                                        <i class="ri-time-line"></i>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-md-12">
                                                <div class="rs-contact-input-box">
                                                    <div class="rs-contact-input">
                                                        <textarea id="message" name="message" placeholder="Message*"></textarea>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-md-12">
                                                <div class="rs-contact-btn">
                                                    <button type="submit" class="rs-btn has-sm-radius has-theme-secondary w-100">
                                                        Send Massage
                                                    </button>
                                                </div>
                                            </div>
                                        </div>
                                    </form>
                                </div>
                            </div>
                            <div class="rs-contact-right">
                                <div class="rs-contact-item-wrapper">
                                    <div class="rs-contact-item">
                                        <span class="rs-contact-title">Email: </span>
                                        <a href="mailto:bustarbusiness@gmail.com">bustarbusiness@gmail.com</a>
                                    </div>
                                    <div class="rs-contact-item">
                                        <span class="rs-contact-title">Hot Line:</span>
                                        <a href="tel:+920866660112">+9 (208) 6666 0112</a>
                                    </div>
                                </div>
                                <div class="rs-contact-thumb">
                                    <img src="assets/images/contact/map-thumb-01.webp" alt="image">
                                    <div class="rs-contact-ripple-wrapper">
                                        <div class="rs-ripple-item ripple-1">
                                            <div class="rs-ripple-figure">
                                                <div class="rs-ripple-thumb">
                                                    <img src="assets/images/contact/contact-thumb-06.webp" alt="image">
                                                </div>
                                                <div class="ripple-content">
                                                    <div class="pre-title">
                                                        <h6 class="title"> Corporate Growth </h6>
                                                    </div>
                                                    <!-- Start Description -->
                                                    <div class="ripple-desc">
                                                        <p class="description"> Address:<br>29 Fortune Plaza, Atlanta</p>
                                                    </div>
                                                    <!-- End Description -->
                                                </div>
                                            </div>
                                            <div class="pre-circle-ripple">
                                                <div class="ripple-line"></div>
                                            </div>
                                        </div>
                                        <div class="mobile_item">
                                            <i class="remove-icon ri-close-line"></i>
                                            <div class="pre-title">
                                                <h6 class="title"> Corporate Growth </h6>
                                            </div>
                                            <div class="ripple-desc">
                                                <p class="description"> Address:<br>29 Fortune Plaza, Atlanta</p>
                                            </div>
                                        </div>
                                        <div class="rs-ripple-item ripple-2">
                                            <div class="rs-ripple-figure">
                                                <div class="rs-ripple-thumb">
                                                    <img src="assets/images/contact/contact-thumb-07.webp" alt="image">
                                                </div>
                                                <div class="ripple-content">
                                                    <div class="pre-title">
                                                        <h6 class="title"> Risk Management </h6>
                                                    </div>
                                                    <!-- Start Description -->
                                                    <div class="ripple-desc">
                                                        <p class="description"> Address:<br> Washington, DC 20001</p>
                                                    </div>
                                                    <!-- End Description -->
                                                </div>
                                            </div>
                                            <div class="pre-circle-ripple">
                                                <div class="ripple-line"></div>
                                            </div>
                                        </div>
                                        <div class="mobile_item">
                                            <i class="remove-icon ri-close-line"></i>
                                            <div class="pre-title">
                                                <h6 class="title"> Risk Management </h6>
                                            </div>
                                            <div class="ripple-desc">
                                                <p class="description"> Address:<br>29 Fortune Plaza, Atlanta</p>
                                            </div>
                                        </div>
                                        <div class="rs-ripple-item ripple-3">
                                            <div class="rs-ripple-figure">
                                                <div class="rs-ripple-thumb">
                                                    <img src="assets/images/contact/contact-thumb-08.webp" alt="image">
                                                </div>
                                                <div class="ripple-content">
                                                    <div class="pre-title">
                                                        <h6 class="title"> Financial Advisory </h6>
                                                    </div>
                                                    <!-- Start Description -->
                                                    <div class="ripple-desc">
                                                        <p class="description"> Address:<br>Philadelphia, PA 19103</p>
                                                    </div>
                                                    <!-- End Description -->
                                                </div>
                                            </div>
                                            <div class="pre-circle-ripple">
                                                <div class="ripple-line"></div>
                                            </div>
                                        </div>
                                        <div class="mobile_item">
                                            <i class="remove-icon ri-close-line"></i>
                                            <div class="pre-title">
                                                <h6 class="title"> Financial Advisory </h6>
                                            </div>
                                            <div class="ripple-desc">
                                                <p class="description"> Address:<br>29 Fortune Plaza, Atlanta</p>
                                            </div>
                                        </div>
                                        <div class="rs-ripple-item ripple-4">
                                            <div class="rs-ripple-figure">
                                                <div class="rs-ripple-thumb">
                                                    <img src="assets/images/contact/contact-thumb-09.webp" alt="image">
                                                </div>
                                                <div class="ripple-content">
                                                    <div class="pre-title">
                                                        <h6 class="title"> Business Strategy </h6>
                                                    </div>
                                                    <!-- Start Description -->
                                                    <div class="ripple-desc">
                                                        <p class="description"> Address:<br>1445 Myrtle. New York</p>
                                                    </div>
                                                    <!-- End Description -->
                                                </div>
                                            </div>
                                            <div class="pre-circle-ripple">
                                                <div class="ripple-line"></div>
                                            </div>
                                        </div>
                                        <div class="mobile_item">
                                            <i class="remove-icon ri-close-line"></i>
                                            <div class="pre-title">
                                                <h6 class="title"> Business Strategy </h6>
                                            </div>
                                            <div class="ripple-desc">
                                                <p class="description"> Address:<br>1445 Myrtle. New York</p>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- contact area end -->

        <!-- video area start -->
        <div class="rs-video-area rs-video-one rs-video-one">
            <div class="rs-video-bg-thumb include-bg" data-background="assets/images/bg/video-bg-thumb-01.webp">
            </div>
            <div class="container">
                <div class="row justify-content-center">
                    <div class="col-xl-4">
                        <div class="rs-video-wrapper text-center">
                            <div class="rs-video-play-btn rs-tween_max_btn-yes gsap-move-no">
                                <a href="https://www.youtube.com/watch?v=go7QYaQR494" class="rs-play-btn popup-video is-large is-white"><i class="ri-play-large-fill"></i></a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- video area end -->

        <!-- cta area start -->
        <div class="rs-cta-area rs-cta-six">
            <div class="container-fluid g-0">
                <div class="row">
                    <div class="col-xl-12">
                        <div class="rs-cta-content-wrapper">
                            <span class="rs-cta-icon">
                        <svg xmlns="http://www.w3.org/2000/svg" width="6" height="11" viewBox="0 0 6 11" fill="none">
                           <path
                              d="M0.50204 0.439454C0.811629 0.16438 1.28548 0.192407 1.56063 0.501954L5.56063 5.00195C5.81308 5.28608 5.81308 5.71392 5.56063 5.99805L1.56063 10.498C1.28548 10.8076 0.811629 10.8356 0.50204 10.5605C0.192493 10.2854 0.164466 9.81154 0.43954 9.50195L3.99618 5.5L0.43954 1.49805C0.164466 1.18846 0.192493 0.714606 0.50204 0.439454Z"
                              fill="#AB052D"></path>
                        </svg>
                     </span>
                            <div class="rs-cta-content">
                                <p>Real Consulting Success: Inspiring Case Studies for Growth &amp; Innovation.
                                    <a href="contact.php">Got A project in mind?</a>
                                </p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- cta area end -->

    </main>
    <!-- Body main wrapper end -->

    <?php include 'includes/footer.php'; ?>
    <!-- footer area end -->

    <?php include 'includes/scripts.php'; ?>
