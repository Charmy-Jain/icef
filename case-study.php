<?php $pageTitle = "Case Study";
include 'includes/head.php'; ?>

<body class="rs-smoother-yes">

    <?php include 'includes/header.php'; ?>

    <?php include 'includes/offcanvas.php'; ?>

    <!-- Body main wrapper start -->
    <main>

        <!-- blog area style override -->
        <style>
            .rs-blog-one .rs-blog-wrapper {
                grid-template-columns: repeat(4, 1fr) !important;
                gap: 20px !important;
            }
            .rs-blog-one .rs-blog-thumb {
                height: 450px !important; 
            }
            .rs-blog-one .rs-blog-content-hover .rs-blog-desc {
                margin-bottom: 30px !important;
                font-size: 14px;
                line-height: 1.4;
            }
            .rs-blog-one .rs-blog-content-hover .rs-blog-content {
                padding-top: 80px !important;
            }
            .rs-blog-one .rs-blog-content-hover .rs-blog-title {
                padding-bottom: 15px !important;
                margin-bottom: 15px !important;
                font-size: 20px;
            }
            .rs-blog-one .rs-blog-title {
                font-size: 20px;
            }
            @media only screen and (max-width: 1399px) {
                .rs-blog-one .rs-blog-wrapper {
                    gap: 15px !important;
                }
                .rs-blog-one .rs-blog-thumb {
                    height: 400px !important;
                }
            }
            @media only screen and (max-width: 1199px) {
                .rs-blog-one .rs-blog-wrapper {
                    grid-template-columns: repeat(2, 1fr) !important;
                }
            }
            @media only screen and (max-width: 767px) {
                .rs-blog-one .rs-blog-wrapper {
                    grid-template-columns: repeat(1, 1fr) !important;
                }
            }
        </style>

        <!-- blog area start -->
        <section class="rs-blog-area rs-blog-one section-space">
            <div class="container">
                <div class="row justify-content-center">
                    <div class="col-xl-7 col-lg-7">
                        <div class="section-title-wrapper text-center section-title-space">
                            <span class="section-subtitle">
                                Read Our Blog & News
                            </span>
                            <h2 class="section-title rs-split-text-enable split-in-left mb-15">Featured news and
                                insights</h2>
                            <p class="section-desc">Read and update the latest news from us. donec eu magna quis felis.
                            </p>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-xl-12">
                        <div class="rs-blog-wrapper">
                            <div class="rs-blog-item wow fadeInUp" data-wow-delay=".3s" data-wow-duration="1s">
                                <div class="rs-blog-thumb">
                                    <img src="assets/images/blog/blog-thumb-01.webp" alt="image">
                                </div>

                                <div class="rs-blog-content-wrapper">
                                    <div class="rs-blog-tag">
                                        <a href="blog-details.php" class="post-tag">September 23, 2025 </a>
                                    </div>
                                    <div class="rs-blog-content">
                                        <div class="rs-blog-meta-wrapper">
                                            <div class="rs-blog-meta-item">
                                                <span>
                                                    <i class="ri-user-line"></i>
                                                    <a href="#">
                                                        Bustar
                                                    </a>
                                                </span>
                                            </div>
                                            <div class="rs-blog-meta-item">
                                                <span> <i class="ri-price-tag-3-line"></i>
                                                    Corporate</span>
                                            </div>
                                        </div>
                                        <h5 class="rs-blog-title">
                                            <a href="blog-details.php"> Insights That Driven Business Smarter
                                                Forward</a>
                                        </h5>
                                    </div>
                                </div>
                                <div class="rs-blog-content-hover">
                                    <div class="rs-blog-content">
                                        <div class="rs-blog-meta-wrapper">
                                            <div class="rs-blog-meta-item">
                                                <span>
                                                    <i class="ri-user-line"></i>
                                                    <a href="#">
                                                        Bustar
                                                    </a>
                                                </span>
                                            </div>
                                            <div class="rs-blog-meta-item">
                                                <span> <i class="ri-price-tag-3-line"></i>
                                                    Corporate</span>
                                            </div>
                                        </div>
                                        <h5 class="rs-blog-title">
                                            <a href="blog-details.php"> Insights That Driven Business Smarter
                                                Forward</a>
                                        </h5>
                                        <p class="rs-blog-desc">Consulting empowers businesses with data-driven
                                            strategies and
                                            innovative solutions to achieve sustainable...</p>
                                        <div class="rs-blog-btn">
                                            <a class="rs-btn has-text is-white" href="blog-details.php">Read More
                                            </a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="rs-blog-item wow fadeInUp" data-wow-delay=".5s" data-wow-duration="1s">
                                <div class="rs-blog-thumb">
                                    <img src="assets/images/blog/blog-thumb-02.webp" alt="image">
                                </div>

                                <div class="rs-blog-content-wrapper">
                                    <div class="rs-blog-tag">
                                        <a href="blog-details.php" class="post-tag">August 26, 2025</a>
                                    </div>
                                    <div class="rs-blog-content">
                                        <div class="rs-blog-meta-wrapper">
                                            <div class="rs-blog-meta-item">
                                                <span>
                                                    <i class="ri-user-line"></i>
                                                    <a href="#">
                                                        Bustar
                                                    </a>
                                                </span>
                                            </div>
                                            <div class="rs-blog-meta-item">
                                                <span> <i class="ri-price-tag-3-line"></i>
                                                    Consulting</span>
                                            </div>
                                        </div>
                                        <h5 class="rs-blog-title">
                                            <a href="blog-details.php"> How Strategic Planning Drives Business
                                                Success</a>
                                        </h5>
                                    </div>
                                </div>
                                <div class="rs-blog-content-hover">
                                    <div class="rs-blog-content">
                                        <div class="rs-blog-meta-wrapper">
                                            <div class="rs-blog-meta-item">
                                                <span>
                                                    <i class="ri-user-line"></i>
                                                    <a href="#">
                                                        Bustar
                                                    </a>
                                                </span>
                                            </div>
                                            <div class="rs-blog-meta-item">
                                                <span> <i class="ri-price-tag-3-line"></i>
                                                    Corporate</span>
                                            </div>
                                        </div>
                                        <h5 class="rs-blog-title">
                                            <a href="blog-details.php"> How Strategic Planning Drives Business
                                                Success</a>
                                        </h5>
                                        <p class="rs-blog-desc">From insights to execution, we guide businesses to
                                            smarter
                                            decisions and better...</p>
                                        <div class="rs-blog-btn">
                                            <a class="rs-btn has-text is-white" href="blog-details.php">Read More
                                            </a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="rs-blog-item wow fadeInUp" data-wow-delay=".7s" data-wow-duration="1s">
                                <div class="rs-blog-thumb">
                                    <img src="assets/images/blog/blog-thumb-03.webp" alt="image">
                                </div>

                                <div class="rs-blog-content-wrapper">
                                    <div class="rs-blog-tag">
                                        <a href="blog-details.php" class="post-tag">Feb 17, 2025</a>
                                    </div>
                                    <div class="rs-blog-content">
                                        <div class="rs-blog-meta-wrapper">
                                            <div class="rs-blog-meta-item">
                                                <span>
                                                    <i class="ri-user-line"></i>
                                                    <a href="#">
                                                        Bustar
                                                    </a>
                                                </span>
                                            </div>
                                            <div class="rs-blog-meta-item">
                                                <span> <i class="ri-price-tag-3-line"></i>
                                                    Corporate</span>
                                            </div>
                                        </div>
                                        <h5 class="rs-blog-title">
                                            <a href="blog-details.php"> Planning Your Business for Long-Term Growth</a>
                                        </h5>
                                    </div>
                                </div>
                                <div class="rs-blog-content-hover">
                                    <div class="rs-blog-content">
                                        <div class="rs-blog-meta-wrapper">
                                            <div class="rs-blog-item">
                                                <span>
                                                    <i class="ri-user-line"></i>
                                                    <a href="#">
                                                        Bustar
                                                    </a>
                                                </span>
                                            </div>
                                            <div class="rs-blog-meta-item">
                                                <span> <i class="ri-price-tag-3-line"></i>
                                                    Corporate</span>
                                            </div>
                                        </div>
                                        <h5 class="rs-blog-title">
                                            <a href="blog-details.php"> Planning Your Business for Long-Term Growth</a>
                                        </h5>
                                        <p class="rs-blog-desc">Consulting transforms challenges into opportunities with
                                            tailored
                                            solutions and proven expertise.</p>
                                        <div class="rs-blog-btn">
                                            <a class="rs-btn has-text is-white" href="blog-details.php">Read More
                                            </a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="rs-blog-item wow fadeInUp" data-wow-delay=".9s" data-wow-duration="1s">
                                <div class="rs-blog-thumb">
                                    <img src="assets/images/blog/blog-thumb-04.webp" alt="image">
                                </div>

                                <div class="rs-blog-content-wrapper">
                                    <div class="rs-blog-tag">
                                        <a href="blog-details.php" class="post-tag">Jan 10, 2025</a>
                                    </div>
                                    <div class="rs-blog-content">
                                        <div class="rs-blog-meta-wrapper">
                                            <div class="rs-blog-meta-item">
                                                <span>
                                                    <i class="ri-user-line"></i>
                                                    <a href="#">
                                                        Bustar
                                                    </a>
                                                </span>
                                            </div>
                                            <div class="rs-blog-meta-item">
                                                <span> <i class="ri-price-tag-3-line"></i>
                                                    Analysis</span>
                                            </div>
                                        </div>
                                        <h5 class="rs-blog-title">
                                            <a href="blog-details.php"> Mastering the Art of Market Analysis</a>
                                        </h5>
                                    </div>
                                </div>
                                <div class="rs-blog-content-hover">
                                    <div class="rs-blog-content">
                                        <div class="rs-blog-meta-wrapper">
                                            <div class="rs-blog-meta-item">
                                                <span>
                                                    <i class="ri-user-line"></i>
                                                    <a href="#">
                                                        Bustar
                                                    </a>
                                                </span>
                                            </div>
                                            <div class="rs-blog-meta-item">
                                                <span> <i class="ri-price-tag-3-line"></i>
                                                    Analysis</span>
                                            </div>
                                        </div>
                                        <h5 class="rs-blog-title">
                                            <a href="blog-details.php"> Mastering the Art of Market Analysis</a>
                                        </h5>
                                        <p class="rs-blog-desc">Understand your competitors and market trends to stay ahead of the curve and grow.</p>
                                        <div class="rs-blog-btn">
                                            <a class="rs-btn has-text is-white" href="blog-details.php">Read More
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
        <!-- blog area end -->
        <!-- blog area end -->

    </main>
    <!-- Body main wrapper end -->

    <?php include 'includes/footer.php'; ?>

    <?php include 'includes/scripts.php'; ?>

</body>

</html>