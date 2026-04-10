<?php $pageTitle = "Contact"; include 'includes/head.php'; ?>

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
                                            Contact
                                        </li>
                                    </ul>
                                </nav>
                            </div>
                            <div class="rs-breadcrumb-title-wrapper">
                                <h1 class="rs-breadcrumb-title">Contact</h1>
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
        <section class="rs-contact-area rs-contact-three section-space">
            <div class="container">
                <div class="row">
                    <div class="col-xl-12">
                        <div class="rs-contact-wrapper">
                            <div class="rs-contact-item">
                                <div class="rs-contact-thumb">
                                    <img src="assets/images/contact/contact-thumb-09.webp" alt="image">
                                </div>
                                <h5 class="rs-contact-title">California</h5>
                                <div class="rs-contact-info">
                                    <span><a href="#">Madison Avenue, new york</a></span>
                                    <span><a href="tel:990123456789">+990 123 456 789</a></span>
                                    <span><a href="mailto:bustarconsulting@gmail.com">bustarconsulting@gmail.com</a></span>
                                </div>
                            </div>
                            <div class="rs-contact-item">
                                <div class="rs-contact-thumb">
                                    <img src="assets/images/contact/contact-thumb-06.webp" alt="image">
                                </div>
                                <h5 class="rs-contact-title">New York City</h5>
                                <div class="rs-contact-info">
                                    <span><a href="#">Washington Ave. Manchester, Kentucky </a></span>
                                    <span><a href="tel:893085550121">+89 (308) 555-0121</a></span>
                                    <span><a href="mailto:bustarconsulting@gmail.com">bustarconsulting@gmail.com</a></span>
                                </div>
                            </div>
                            <div class="rs-contact-item">
                                <div class="rs-contact-thumb">
                                    <img src="assets/images/contact/contact-thumb-02.webp" alt="image">
                                </div>
                                <h5 class="rs-contact-title">New Hampshire</h5>
                                <div class="rs-contact-info">
                                    <span><a href="#"> Parker Rd. Allentown, New Mexico</a></span>
                                    <span><a href="tel:9075550101">(907) 555-0101</a></span>
                                    <span><a href="mailto:consulting@gmail.com">consulting@gmail.com</a></span>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- contact area end -->

        <!-- contact area start -->
        <section class="rs-contact-area rs-contact-two">
            <div class="rs-contact-bg-thumb include-bg" data-background="assets/images/bg/contact-bg-thumb-01.webp"></div>
            <div class="container">
                <div class="row">
                    <div class="col-xl-12">
                        <div class="rs-contact-wrapper">
                            <div class="rs-contact-left">
                                <div class="section-title-wrapper">
                                    <span class="section-subtitle is-white">
                              Contact with us now
                           </span>
                                    <h2 class="section-title rs-split-text-enable split-in-left is-white mb-10">Let’s Collaborate
                                        with Us!</h2>
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
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-md-6">
                                                <div class="rs-contact-input-box">
                                                    <div class="rs-contact-input">
                                                        <input id="email" name="email" type="email" placeholder="Email Address*">
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-md-6">
                                                <div class="rs-contact-input-box">
                                                    <div class="rs-contact-input">
                                                        <input id="phone" name="phone" type="text" placeholder="Phone Number*">
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
                                    <img src="assets/images/contact/contact-thumb-10.webp" alt="image">
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- contact area end -->

        <!-- Google map area start -->
        <div class="rs-map-area rs-map-one">
            <div class="rs-google-map">
                <iframe src="https://www.google.com/maps/embed?pb=!1m14!1m12!1m3!1d34214.60083365065!2d-74.01068688015093!3d40.714229226069826!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!5e0!3m2!1sen!2sbd!4v1713786758295!5m2!1sen!2sbd" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade">
                </iframe>
            </div>
        </div>
        <!-- Google map area end-->


    </main>
    <!-- Body main wrapper end -->

    <?php include 'includes/footer.php'; ?>
    <!-- footer area end -->

    <?php include 'includes/scripts.php'; ?>
