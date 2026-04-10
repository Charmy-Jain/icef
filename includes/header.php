    <!-- preloader start -->
    <div id="pre-load">
        <div id="loader" class="loader">
            <div class="loader-container">
                <div class="loader-icon"><img src="assets/images/logo/favicon-icef.png" alt="ICEF INDIA"></div>
            </div>
        </div>
    </div>
    <!-- preloader end -->

    <!-- preloader start -->

    <div id="rs-mouse">
        <div id="cursor-ball"></div>
    </div>

    <!-- preloader end -->

    <style>
        /* Custom Mega Menu for Solutions with Feature Image */
        .main-menu .mega-grid-two {
            grid-template-columns: repeat(6, 1fr) 350px !important;
            width: 1550px !important;
            padding: 0 !important;
            overflow: hidden;
            border-radius: 10px !important;
        }

        @media only screen and (max-width: 1600px) {
            .main-menu .mega-grid-two {
                width: 1350px !important;
                grid-template-columns: repeat(6, 1fr) 280px !important;
            }
        }

        @media only screen and (max-width: 1366px) {
            .main-menu .mega-grid-two {
                width: 1180px !important;
                grid-template-columns: repeat(5, 1fr) !important;
            }
            .mega-menu-feature {
                display: none !important; /* Hide feature on smaller screens to keep navigation clear */
            }
        }

        .main-menu .mega-grid-one > li, .main-menu .mega-grid-two > li {
            padding: 30px 20px !important;
        }

        .mega-menu-feature {
            background-color: #f8fafc;
            padding: 40px 30px !important;
            display: flex;
            flex-direction: column;
            justify-content: flex-start;
            border-left: 1px solid #e2e8f0;
        }

        .mega-menu-feature h6.title {
            color: #AB052D !important;
            font-size: 20px !important;
            margin-bottom: 12px !important;
            font-weight: 700 !important;
            text-transform: capitalize !important;
        }

        .mega-menu-feature p {
            font-size: 14px !important;
            line-height: 1.5 !important;
            color: #64748b !important;
            margin-bottom: 20px !important;
            white-space: normal !important;
        }

        .mega-menu-feature .feature-thumb {
            position: relative;
            overflow: hidden;
            border-radius: 10px;
        }

        .mega-menu-feature .feature-thumb img {
            width: 100%;
            height: auto;
            border-radius: 10px;
            box-shadow: 0 4px 6px -1px rgba(0, 0, 0, 0.1);
            transition: all 0.4s ease;
        }
        
        .mega-menu-feature:hover .feature-thumb img {
            transform: scale(1.05);
        }

        .main-menu .mega-grid-two > li:nth-child(6)::before {
            content: none !important;
        }

        /* Submenu adjustments */
        .main-menu .submenu {
            width: auto !important;
            min-width: 320px !important;
        }

        .main-menu .submenu li a {
            white-space: nowrap !important;
        }

        /* Sticky Header Styles */
        .rs-sticky-header.active {
            background: var(--rs-theme-secondary) !important;
            box-shadow: 0 4px 20px rgba(0, 0, 0, 0.2);
            top: 0 !important;
        }

        .rs-sticky-header .header-logo img {
            max-height: 50px;
            width: auto;
        }

        .rs-sticky-header .header-wrapper {
            background: transparent !important;
            padding-top: 10px;
            padding-bottom: 10px;
        }
    </style>

    <!-- header area start-->
    <header>
        <div class="container-fluid g-0">
            <!-- top start -->
            <div class="rs-header-top rs-header-top-one">
                <div class="header-top-left">
                    <span class="header-top-icon">
                        <svg xmlns="http://www.w3.org/2000/svg" width="6" height="11" viewBox="0 0 6 11" fill="none">
                            <path
                                d="M0.50204 0.439454C0.811629 0.16438 1.28548 0.192407 1.56063 0.501954L5.56063 5.00195C5.81308 5.28608 5.81308 5.71392 5.56063 5.99805L1.56063 10.498C1.28548 10.8076 0.811629 10.8356 0.50204 10.5605C0.192493 10.2854 0.164466 9.81154 0.43954 9.50195L3.99618 5.5L0.43954 1.49805C0.164466 1.18846 0.192493 0.714606 0.50204 0.439454Z"
                                fill="#AB052D"></path>
                        </svg>
                    </span>
                    <div class="header-top-content">
                        <p>India's Leading Integrated Assessment & Recruitment Platform Since 2000
                            <a href="about-mission.php">Learn More</a>
                        </p>
                    </div>
                </div>
                <div class="header-top-right">
                    <div class="header-top-meta">
                        <span class="header-top-meta-icon">
                            <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" viewBox="0 0 16 16">
                                <path
                                    d="M12.1641 10.5834C11.6414 10.0673 10.9888 10.0673 10.4694 10.5834C10.0732 10.9762 9.67699 11.3691 9.28744 11.7686C9.1809 11.8785 9.091 11.9018 8.96115 11.8286C8.70479 11.6887 8.43177 11.5755 8.18539 11.4224C7.03673 10.6999 6.07452 9.77097 5.22218 8.72552C4.79934 8.20613 4.42312 7.65011 4.16009 7.02417C4.10682 6.89765 4.11681 6.81442 4.22002 6.7112C4.61622 6.32832 5.00244 5.93544 5.39198 5.54257C5.93469 4.99654 5.93469 4.35728 5.38866 3.80792C5.07902 3.49495 4.76938 3.18865 4.45974 2.87568C4.14011 2.55605 3.82381 2.23309 3.50086 1.9168C2.97813 1.40739 2.32556 1.40739 1.80617 1.92012C1.40663 2.313 1.02375 2.71586 0.617555 3.10208C0.241327 3.45833 0.0515486 3.89449 0.0115952 4.40389C-0.0516643 5.23293 0.151432 6.01535 0.437765 6.77779C1.02375 8.35595 1.91604 9.75765 2.99811 11.0428C4.45974 12.7808 6.20437 14.1558 8.24532 15.148C9.16425 15.5942 10.1165 15.9371 11.1519 15.9937C11.8644 16.0337 12.4837 15.8539 12.9798 15.2979C13.3194 14.9183 13.7023 14.572 14.0619 14.2091C14.5946 13.6697 14.5979 13.0172 14.0685 12.4845C13.4359 11.8485 12.8 11.2159 12.1641 10.5834Z"></path>
                                <path
                                    d="M11.5271 7.92979L12.7557 7.72003C12.5625 6.59135 12.0298 5.56921 11.2208 4.75682C10.3651 3.90116 9.28304 3.36178 8.0911 3.19531L7.91797 4.43054C8.84023 4.56039 9.67925 4.97657 10.3418 5.63913C10.9677 6.26506 11.3773 7.05747 11.5271 7.92979Z"></path>
                                <path
                                    d="M13.4493 2.59031C12.0309 1.17197 10.2363 0.276344 8.25531 0L8.08218 1.23523C9.79352 1.47495 11.345 2.25071 12.5703 3.47262C13.7323 4.63459 14.4947 6.10288 14.771 7.71766L15.9996 7.50791C15.6767 5.63676 14.7943 3.93874 13.4493 2.59031Z"></path>
                            </svg>
                        </span>
                        <div class="header-top-meta-content">
                            <span>Call us:</span>
                            <a href="tel:+911204221735">+91 120 422 1735</a>
                        </div>
                    </div>
                    <div class="header-top-meta">
                        <span class="header-top-meta-icon">
                            <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" viewBox="0 0 16 16"
                                fill="none">
                                <g clip-path="url(#clip0_28535_99)">
                                    <path
                                        d="M15.8603 3.17969L11.0078 8.00091L15.8603 12.8221C15.948 12.6388 16.0012 12.4361 16.0012 12.2197V3.78216C16.0012 3.56569 15.948 3.36303 15.8603 3.17969Z"
                                        fill="white"></path>
                                    <path
                                        d="M14.5947 2.375H1.40716C1.19069 2.375 0.988031 2.42822 0.804688 2.51594L7.00666 8.68666C7.55503 9.23503 8.44678 9.23503 8.99516 8.68666L15.1971 2.51594C15.0138 2.42822 14.8111 2.375 14.5947 2.375Z"
                                        fill="white"></path>
                                    <path
                                        d="M0.140938 3.17969C0.0532188 3.36303 0 3.56569 0 3.78216V12.2197C0 12.4361 0.0532188 12.6388 0.140938 12.8221L4.99341 8.00091L0.140938 3.17969Z"
                                        fill="white"></path>
                                    <path
                                        d="M10.3447 8.66211L9.658 9.34877C8.74428 10.2625 7.2575 10.2625 6.34378 9.34877L5.65716 8.66211L0.804688 13.4833C0.988031 13.571 1.19069 13.6243 1.40716 13.6243H14.5947C14.8111 13.6243 15.0138 13.571 15.1971 13.4833L10.3447 8.66211Z"
                                        fill="white"></path>
                                </g>
                                <defs>
                                    <clipPath id="clip0_28535_99">
                                        <rect width="16" height="16" fill="white"></rect>
                                    </clipPath>
                                </defs>
                            </svg>
                        </span>
                        <div class="header-top-meta-content">
                            <span>Send mail:</span>
                            <a href="mailto:sales@icefindia.in">
                                sales@icefindia.in
                            </a>
                        </div>
                    </div>
                </div>
            </div>
            <!-- top end -->
        </div>

        <?php ob_start(); ?>
        <div class="container-fluid g-0">
            <div class="header-wrapper">
                <div class="header-left">
                    <div class="header-logo">
                        <a href="index.php"><img src="assets/images/logo/logo-icef.png" alt="ICEF INDIA - Integrated Assessment & Recruitment Platform"></a>
                    </div>
                </div>
                <div class="header-right">
                    <div class="header-menu">
                        <nav id="mobile-menu-two" class="main-menu">
                            <ul class="multipage-menu">
                                <li><a href="index.php">Home</a></li>
                                <li class="menu-item-has-children">
                                    <a href="javascript:void(0)">About Company</a>
                                    <ul class="submenu last-children">
                                        <li><a href="about-mission.php">About ICEF India</a></li>
                                        <li><a href="about-mission.php#mission">Mission & Vision</a></li>
                                        <li><a href="industry-clients.php">Industry We Work With</a></li>
                                        <li><a href="industry-clients.php#clients">Client Tele</a></li>
                                        <li><a href="awards.php">Awards & Recognition</a></li>
                                        <li><a href="careers-culture.php">Work Culture</a></li>
                                        <li><a href="careers-culture.php#careers">Careers</a></li>
                                    </ul>
                                </li>
                                <li class="menu-item-has-children rs-mega-menu">
                                    <a href="javascript:void(0)">Solutions</a>
                                    <ul class="mega-menu mega-grid-two">
                                        <li class="rs-menu-item" data-image="assets/images/banner/banner-thumb-02.webp">
                                            <a href="it-emerging-tech.php" class="title">IT & Emerging Tech Enablement</a>
                                            <ul>
                                                <li><a href="it-emerging-tech.php">IOT & RFID Based Products</a></li>
                                                <li><a href="it-emerging-tech.php">Application Development</a></li>
                                                <li><a href="it-emerging-tech.php">Customized Software Development</a></li>
                                                <li><a href="it-emerging-tech.php">Emerging Tech</a></li>
                                            </ul>
                                        </li>
                                        <li class="rs-menu-item" data-image="assets/images/banner/assessment-testing.webp">
                                            <a href="assessment-and-testing.php" class="title">Assessment & Testing</a>
                                            <ul>
                                                <li><a href="assessment-and-testing.php">Cognitive/Domain</a></li>
                                                <li><a href="assessment-and-testing.php">Online/Offline</a></li>
                                                <li><a href="assessment-and-testing.php">Proctoring</a></li>
                                            </ul>
                                        </li>
                                        <li class="rs-menu-item" data-image="assets/images/banner/recruitment.webp">
                                            <a href="recruitment-hiring.php" class="title">Recruitment & Hiring</a>
                                            <ul>
                                                <li><a href="recruitment-hiring.php">Screening</a></li>
                                                <li><a href="recruitment-hiring.php">Assessments</a></li>
                                                <li><a href="recruitment-hiring.php">Merit Lists</a></li>
                                            </ul>
                                        </li>
                                        <li class="rs-menu-item" data-image="assets/images/banner/exam-management.webp">
                                            <a href="exam-management.php" class="title">Exam Management</a>
                                            <ul>
                                                <li><a href="exam-management.php">Question Banks</a></li>
                                                <li><a href="exam-management.php">Conduct</a></li>
                                                <li><a href="exam-management.php">Processing</a></li>
                                            </ul>
                                        </li>
                                        <li class="rs-menu-item" data-image="assets/images/banner/manpower.webp">
                                            <a href="manpower-workforce.php" class="title">Manpower & Workforce</a>
                                            <ul>
                                                <li><a href="manpower-workforce.php">Outsourcing</a></li>
                                                <li><a href="manpower-workforce.php">Staffing</a></li>
                                                <li><a href="manpower-workforce.php">Deployment</a></li>
                                            </ul>
                                        </li>
                                        <li class="rs-menu-item" data-image="assets/images/banner/call-center.webp">
                                            <a href="call-center-and-bpos.php" class="title">Call Center & BPOs</a>
                                            <ul>
                                                <li><a href="call-center-and-bpos.php">Inbound/Outbound</a></li>
                                                <li><a href="call-center-and-bpos.php">Support</a></li>
                                                <li><a href="call-center-and-bpos.php">Tele-Calling</a></li>
                                            </ul>
                                        </li>
                                        <li class="mega-menu-feature">
                                            <div class="mega-feature-content">
                                                <h6 class="title">Let's Talk Business</h6>
                                                <p>Empowering businesses with smart IT solutions since 1997.</p>
                                                <a href="contact.php" class="rs-btn has-icon has-md-radius hover-primary">Request Quote</a>
                                                <div class="feature-thumb mt-20">
                                                    <img id="mega-menu-target-img" src="assets/images/mega-menu-feature.png" alt="Consultation">
                                                </div>
                                            </div>
                                        </li>
                                    </ul>
                                </li>
                                <li><a href="why-choose-us.php">Why Choose Us</a></li>
                                <li class="menu-item-has-children">
                                    <a href="javascript:void(0)">WhiteBoard</a>
                                    <ul class="submenu last-children">
                                        <li><a href="articles.php">Articles</a></li>
                                        <li><a href="faq.php">FAQs</a></li>
                                        <li><a href="case-study.php">Case Study</a></li>
                                    </ul>
                                </li>
                                
                                
                                <li><a href="support.php">Support</a></li>
                            </ul>
                        </nav>
                    </div>
                    <div class="header-content">
                        <div class="header-btn">
                            <a class="rs-btn has-icon is-transparent hover-primary border-hover-primary" href="support.php">Get Free Quote</a>
                        </div>
                        <div class="header-search-wrapper">
                            <div class="header-search-icon"><i class="ri-search-line"></i></div>
                        </div>
                        <div class="header-hamburger">
                            <div class="sidebar-toggle">
                                <a class="header-bar-icon" href="javascript:void(0)"><span></span><span></span><span></span></a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <?php $nav_html = ob_get_clean(); ?>

        <div class="rs-header-area rs-header-one <?php echo isset($header_class) ? $header_class : ''; ?>">
            <?php echo $nav_html; ?>
        </div>

        <div id="rs-sticky-header" class="rs-sticky-header rs-header-area rs-header-one <?php echo isset($header_class) ? $header_class : ''; ?>">
            <?php echo $nav_html; ?>
        </div>
    </header>
    <!-- Header area end -->

    <script>
        document.addEventListener('DOMContentLoaded', function() {
            const targetImg = document.getElementById('mega-menu-target-img');
            if (!targetImg) return;

            const globalDefaultImg = targetImg.getAttribute('src');
            let defaultImg = globalDefaultImg;
            const menuItems = document.querySelectorAll('.rs-mega-menu .mega-menu .rs-menu-item');

            // Detect active page and set its image as default
            const currentPath = window.location.pathname;
            menuItems.forEach(item => {
                const links = item.querySelectorAll('a');
                links.forEach(link => {
                    const href = link.getAttribute('href');
                    if (href && href !== '#' && currentPath.endsWith(href)) {
                        const activeImg = item.getAttribute('data-image');
                        if (activeImg) {
                            defaultImg = activeImg;
                            targetImg.setAttribute('src', activeImg);
                        }
                    }
                });
            });

            menuItems.forEach(item => {
                item.addEventListener('mouseenter', function() {
                    const newImg = this.getAttribute('data-image');
                    if (newImg) {
                        targetImg.style.opacity = '0';
                        setTimeout(() => {
                            targetImg.setAttribute('src', newImg);
                            targetImg.style.opacity = '1';
                        }, 200);
                    }
                });
            });

            // Revert to default when leaving the entire mega menu grid
            const megaGrid = document.querySelector('.mega-grid-two');
            if (megaGrid) {
                megaGrid.addEventListener('mouseleave', function() {
                    targetImg.style.opacity = '0';
                    setTimeout(() => {
                        targetImg.setAttribute('src', defaultImg);
                        targetImg.style.opacity = '1';
                    }, 200);
                });
            }
        });
    </script>
    <style>
        #mega-menu-target-img {
            transition: opacity 0.3s ease;
        }
    </style>