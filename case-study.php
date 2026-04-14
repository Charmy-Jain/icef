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
                            <p class="section-desc">Explore our latest case studies showcasing successful project implementations, strategic insights, and impactful solutions delivered by ICEF INDIA.
                            </p>
                        </div>
                    </div>
                </div>

                <!-- Search Bar Row -->
                <div class="row mb-40">
                    <div class="col-xl-12">
                        <div class="rs-search-container d-flex justify-content-end">
                            <form action="javascript:void(0)" method="GET" class="rs-search-form" onsubmit="return false;">
                                <div class="rs-search-input-group">
                                    <input type="text" id="caseStudySearchInput" placeholder="Search case studies..." name="search">
                                    <button type="button">
                                        <i class="ri-search-line"></i>
                                    </button>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>

                <style>
                    .rs-search-container {
                        margin-bottom: 20px;
                    }
                    .rs-search-form {
                        width: 100%;
                        max-width: 350px;
                    }
                    .rs-search-input-group {
                        position: relative;
                        display: flex;
                        align-items: center;
                    }
                    .rs-search-input-group input {
                        width: 100%;
                        height: 55px;
                        padding: 10px 60px 10px 25px;
                        border: 1px solid #E5E9F2;
                        border-radius: 50px;
                        background: #fff;
                        font-size: 16px;
                        color: #1a1a1a;
                        transition: all 0.3s ease;
                        box-shadow: 0 5px 15px rgba(0,0,0,0.05);
                    }
                    .rs-search-input-group input:focus {
                        border-color: #AB052D;
                        outline: none;
                        box-shadow: 0 5px 20px rgba(171, 5, 45, 0.1);
                    }
                    .rs-search-input-group button {
                        position: absolute;
                        right: 5px;
                        top: 5px;
                        width: 45px;
                        height: 45px;
                        background: #AB052D;
                        color: #fff;
                        border: none;
                        border-radius: 50%;
                        display: flex;
                        align-items: center;
                        justify-content: center;
                        font-size: 20px;
                        transition: all 0.3s ease;
                        cursor: pointer;
                    }
                    .rs-search-input-group button:hover {
                        background: #1a1a1a;
                        transform: scale(1.05);
                    }
                    @media (max-width: 767px) {
                        .rs-search-form {
                            max-width: 100%;
                        }
                    }
                </style>

                <div class="row">
                    <div class="col-xl-12">
                        <div class="rs-blog-wrapper">
                            <div class="rs-blog-item wow fadeInUp" data-wow-delay=".3s" data-wow-duration="1s">
                                <div class="rs-blog-thumb">
                                    <img src="assets/images/blog/blog-thumb-01.webp" alt="image">
                                </div>

                                <div class="rs-blog-content-wrapper">
                                    <div class="rs-blog-tag">
                                        <a href="case-study-details.php" class="post-tag">September 23, 2025 </a>
                                    </div>
                                    <div class="rs-blog-content">
                                        <div class="rs-blog-meta-wrapper">
                                            
                                            <div class="rs-blog-meta-item">
                                                <span> <i class="ri-price-tag-3-line"></i>
                                                    Corporate</span>
                                            </div>
                                        </div>
                                        <h5 class="rs-blog-title">
                                            <a href="case-study-details.php"> Insights That Driven Business Smarter
                                                Forward</a>
                                        </h5>
                                    </div>
                                </div>
                                <div class="rs-blog-content-hover">
                                    <div class="rs-blog-content">
                                        <div class="rs-blog-meta-wrapper">
                                            
                                            <div class="rs-blog-meta-item">
                                                <span> <i class="ri-price-tag-3-line"></i>
                                                    Corporate</span>
                                            </div>
                                        </div>
                                        <h5 class="rs-blog-title">
                                            <a href="case-study-details.php"> Insights That Driven Business Smarter
                                                Forward</a>
                                        </h5>
                                        <p class="rs-blog-desc">Consulting empowers businesses with data-driven
                                            strategies and
                                            innovative solutions to achieve sustainable...</p>
                                        <div class="rs-blog-btn">
                                            <a class="rs-btn has-text is-white" href="case-study-details.php">Read More
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
                                        <a href="case-study-details.php" class="post-tag">August 26, 2025</a>
                                    </div>
                                    <div class="rs-blog-content">
                                        <div class="rs-blog-meta-wrapper">
                                            
                                            <div class="rs-blog-meta-item">
                                                <span> <i class="ri-price-tag-3-line"></i>
                                                    Consulting</span>
                                            </div>
                                        </div>
                                        <h5 class="rs-blog-title">
                                            <a href="case-study-details.php"> How Strategic Planning Drives Business
                                                Success</a>
                                        </h5>
                                    </div>
                                </div>
                                <div class="rs-blog-content-hover">
                                    <div class="rs-blog-content">
                                        <div class="rs-blog-meta-wrapper">
                                            
                                            <div class="rs-blog-meta-item">
                                                <span> <i class="ri-price-tag-3-line"></i>
                                                    Corporate</span>
                                            </div>
                                        </div>
                                        <h5 class="rs-blog-title">
                                            <a href="case-study-details.php"> How Strategic Planning Drives Business
                                                Success</a>
                                        </h5>
                                        <p class="rs-blog-desc">From insights to execution, we guide businesses to
                                            smarter
                                            decisions and better...</p>
                                        <div class="rs-blog-btn">
                                            <a class="rs-btn has-text is-white" href="case-study-details.php">Read More
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
                                        <a href="case-study-details.php" class="post-tag">Feb 17, 2025</a>
                                    </div>
                                    <div class="rs-blog-content">
                                        <div class="rs-blog-meta-wrapper">
                                            
                                            <div class="rs-blog-meta-item">
                                                <span> <i class="ri-price-tag-3-line"></i>
                                                    Corporate</span>
                                            </div>
                                        </div>
                                        <h5 class="rs-blog-title">
                                            <a href="case-study-details.php"> Planning Your Business for Long-Term Growth</a>
                                        </h5>
                                    </div>
                                </div>
                                <div class="rs-blog-content-hover">
                                    <div class="rs-blog-content">
                                        <div class="rs-blog-meta-wrapper">
                                            
                                            <div class="rs-blog-meta-item">
                                                <span> <i class="ri-price-tag-3-line"></i>
                                                    Corporate</span>
                                            </div>
                                        </div>
                                        <h5 class="rs-blog-title">
                                            <a href="case-study-details.php"> Planning Your Business for Long-Term Growth</a>
                                        </h5>
                                        <p class="rs-blog-desc">Consulting transforms challenges into opportunities with
                                            tailored
                                            solutions and proven expertise.</p>
                                        <div class="rs-blog-btn">
                                            <a class="rs-btn has-text is-white" href="case-study-details.php">Read More
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
                                        <a href="case-study-details.php" class="post-tag">Jan 10, 2025</a>
                                    </div>
                                    <div class="rs-blog-content">
                                        <div class="rs-blog-meta-wrapper">
                                            
                                            <div class="rs-blog-meta-item">
                                                <span> <i class="ri-price-tag-3-line"></i>
                                                    Analysis</span>
                                            </div>
                                        </div>
                                        <h5 class="rs-blog-title">
                                            <a href="case-study-details.php"> Mastering the Art of Market Analysis</a>
                                        </h5>
                                    </div>
                                </div>
                                <div class="rs-blog-content-hover">
                                    <div class="rs-blog-content">
                                        <div class="rs-blog-meta-wrapper">
                                            
                                            <div class="rs-blog-meta-item">
                                                <span> <i class="ri-price-tag-3-line"></i>
                                                    Analysis</span>
                                            </div>
                                        </div>
                                        <h5 class="rs-blog-title">
                                            <a href="case-study-details.php"> Mastering the Art of Market Analysis</a>
                                        </h5>
                                        <p class="rs-blog-desc">Understand your competitors and market trends to stay ahead of the curve and grow.</p>
                                        <div class="rs-blog-btn">
                                            <a class="rs-btn has-text is-white" href="case-study-details.php">Read More
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

    <script>
        document.getElementById('caseStudySearchInput').addEventListener('input', function(e) {
            const term = e.target.value.toLowerCase();
            const items = document.querySelectorAll('.rs-blog-item');
            
            items.forEach(item => {
                const title = item.querySelector('.rs-blog-title').innerText.toLowerCase();
                const desc = item.querySelector('.rs-blog-desc') ? item.querySelector('.rs-blog-desc').innerText.toLowerCase() : "";
                
                if (title.includes(term) || desc.includes(term)) {
                    item.style.display = 'block';
                } else {
                    item.style.display = 'none';
                }
            });
        });
    </script>

</body>

</html>
