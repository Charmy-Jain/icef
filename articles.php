<?php $pageTitle = "Articles";
include 'includes/head.php'; ?>

<body class="rs-smoother-yes">

    <?php include 'includes/header.php'; ?>

    <?php include 'includes/offcanvas.php'; ?>

    <!-- Body main wrapper start -->
    <main>

        <!-- blog area start -->
        <section class="rs-blog-area rs-blog-two section-space">
            <div class="container">
                <!-- Search Bar Row -->
                <div class="row mb-40">
                    <div class="col-xl-12">
                        <div class="rs-search-container d-flex justify-content-end">
                            <form action="javascript:void(0)" method="GET" class="rs-search-form" onsubmit="return false;">
                                <div class="rs-search-input-group">
                                    <input type="text" id="articleSearchInput" placeholder="Search articles..." name="search">
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

                <div class="row g-5">
                    <!-- row-1 -->
                    <div class="col-xl-4 col-lg-6 col-md-6">
                        <div class="rs-blog-item wow fadeInUp" data-wow-delay=".3s" data-wow-duration="1s">
                            <div class="rs-blog-thumb">
                                <a href="blog-details.php"><img src="assets/images/blog/blog-thumb-01.webp" alt="image"
                                        style="aspect-ratio: 415/285; object-fit: cover; width: 100%;"></a>
                                <div class="rs-blog-meta">
                                    <div class="rs-blog-meta-inner">
                                        
                                        <div class="rs-blog-meta-item">
                                            <div class="rs-blog-meta-icon"><i class="ri-price-tag-3-line"></i></div>
                                            <span> Corporate </span>
                                        </div>
                                        <div class="rs-blog-meta-item">
                                            <div class="rs-blog-meta-icon"><i class="ri-calendar-line"></i></div>
                                            <span> August 20, 2025</span>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="rs-blog-content">
                                <h5 class="rs-blog-title"><a href="blog-details.php">Smarter Thinking for Smarter
                                        Business Solutions</a></h5>
                                <p class="rs-blog-desc">This retains a dynamic action oriented feel and aligns with
                                    consulting core.</p>
                                <div class="rs-blog-btn">
                                    <a class="rs-btn has-icon has-text has-text-underline fw-5"
                                        href="blog-details.php">Read More</a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-xl-4 col-lg-6 col-md-6">
                        <div class="rs-blog-item wow fadeInUp" data-wow-delay=".5s" data-wow-duration="1s">
                            <div class="rs-blog-thumb">
                                <a href="blog-details.php"><img src="assets/images/blog/blog-thumb-02.webp" alt="image"
                                        style="aspect-ratio: 415/285; object-fit: cover; width: 100%;"></a>
                                <div class="rs-blog-meta">
                                    <div class="rs-blog-meta-inner">
                                        
                                        <div class="rs-blog-meta-item">
                                            <div class="rs-blog-meta-icon"><i class="ri-price-tag-3-line"></i></div>
                                            <span> Consulting </span>
                                        </div>
                                        <div class="rs-blog-meta-item">
                                            <div class="rs-blog-meta-icon"><i class="ri-calendar-line"></i></div>
                                            <span> August 20, 2025</span>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="rs-blog-content">
                                <h5 class="rs-blog-title"><a href="blog-details.php">From the Minds of Business Growth
                                        Strategists</a></h5>
                                <p class="rs-blog-desc">Consulting empowers businesses with data-driven strategies and
                                    innovative solutions</p>
                                <div class="rs-blog-btn">
                                    <a class="rs-btn has-icon has-text has-text-underline fw-5"
                                        href="blog-details.php">Read More</a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-xl-4 col-lg-6 col-md-6">
                        <div class="rs-blog-item wow fadeInUp" data-wow-delay=".7s" data-wow-duration="1s">
                            <div class="rs-blog-thumb">
                                <a href="blog-details.php"><img src="assets/images/blog/blog-thumb-03.webp" alt="image"
                                        style="aspect-ratio: 415/285; object-fit: cover; width: 100%;"></a>
                                <div class="rs-blog-meta">
                                    <div class="rs-blog-meta-inner">
                                        
                                        <div class="rs-blog-meta-item">
                                            <div class="rs-blog-meta-icon"><i class="ri-price-tag-3-line"></i></div>
                                            <span> Corporate </span>
                                        </div>
                                        <div class="rs-blog-meta-item">
                                            <div class="rs-blog-meta-icon"><i class="ri-calendar-line"></i></div>
                                            <span> August 20, 2025</span>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="rs-blog-content">
                                <h5 class="rs-blog-title"><a href="blog-details.php">Insights That Drive Business
                                        Smarter Forward</a></h5>
                                <p class="rs-blog-desc">Consulting empowers businesses with data-driven strategies and
                                    innovative solutions</p>
                                <div class="rs-blog-btn">
                                    <a class="rs-btn has-icon has-text has-text-underline fw-5"
                                        href="blog-details.php">Read More</a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- row-2 -->
                    <div class="col-xl-4 col-lg-6 col-md-6">
                        <div class="rs-blog-item wow fadeInUp" data-wow-delay=".3s" data-wow-duration="1s">
                            <div class="rs-blog-thumb">
                                <a href="blog-details.php"><img src="assets/images/blog/blog-thumb-04.webp" alt="image"
                                        style="aspect-ratio: 415/285; object-fit: cover; width: 100%;"></a>
                                <div class="rs-blog-meta">
                                    <div class="rs-blog-meta-inner">
                                        
                                        <div class="rs-blog-meta-item">
                                            <div class="rs-blog-meta-icon"><i class="ri-price-tag-3-line"></i></div>
                                            <span> IT Solutions </span>
                                        </div>
                                        <div class="rs-blog-meta-item">
                                            <div class="rs-blog-meta-icon"><i class="ri-calendar-line"></i></div>
                                            <span> August 20, 2025</span>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="rs-blog-content">
                                <h5 class="rs-blog-title"><a href="blog-details.php">Actionable Insights for Real World
                                        Results</a></h5>
                                <p class="rs-blog-desc">Helping companies thrive through expert consulting, smart
                                    strategies.</p>
                                <div class="rs-blog-btn">
                                    <a class="rs-btn has-icon has-text has-text-underline fw-5"
                                        href="blog-details.php">Read More</a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-xl-4 col-lg-6 col-md-6">
                        <div class="rs-blog-item wow fadeInUp" data-wow-delay=".5s" data-wow-duration="1s">
                            <div class="rs-blog-thumb">
                                <a href="blog-details.php"><img src="assets/images/blog/blog-thumb-05.webp" alt="image"
                                        style="aspect-ratio: 415/285; object-fit: cover; width: 100%;"></a>
                                <div class="rs-blog-meta">
                                    <div class="rs-blog-meta-inner">
                                        
                                        <div class="rs-blog-meta-item">
                                            <div class="rs-blog-meta-icon"><i class="ri-price-tag-3-line"></i></div>
                                            <span> Corporate </span>
                                        </div>
                                        <div class="rs-blog-meta-item">
                                            <div class="rs-blog-meta-icon"><i class="ri-calendar-line"></i></div>
                                            <span> August 20, 2025</span>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="rs-blog-content">
                                <h5 class="rs-blog-title"><a href="blog-details.php">Mastering Markets, Models &
                                        Momentum</a></h5>
                                <p class="rs-blog-desc">We help businesses unlock potential with clear strategies,
                                    expert</p>
                                <div class="rs-blog-btn">
                                    <a class="rs-btn has-icon has-text has-text-underline fw-5"
                                        href="blog-details.php">Read More</a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-xl-4 col-lg-6 col-md-6">
                        <div class="rs-blog-item wow fadeInUp" data-wow-delay=".7s" data-wow-duration="1s">
                            <div class="rs-blog-thumb">
                                <a href="blog-details.php"><img src="assets/images/blog/blog-thumb-06.webp" alt="image"
                                        style="aspect-ratio: 415/285; object-fit: cover; width: 100%;"></a>
                                <div class="rs-blog-meta">
                                    <div class="rs-blog-meta-inner">
                                        
                                        <div class="rs-blog-meta-item">
                                            <div class="rs-blog-meta-icon"><i class="ri-price-tag-3-line"></i></div>
                                            <span> Corporate </span>
                                        </div>
                                        <div class="rs-blog-meta-item">
                                            <div class="rs-blog-meta-icon"><i class="ri-calendar-line"></i></div>
                                            <span> August 20, 2025</span>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="rs-blog-content">
                                <h5 class="rs-blog-title"><a href="blog-details.php">Strategic Thinking for a Changing
                                        World</a></h5>
                                <p class="rs-blog-desc">From insights to execution, we guide businesses to smarter</p>
                                <div class="rs-blog-btn">
                                    <a class="rs-btn has-icon has-text has-text-underline fw-5"
                                        href="blog-details.php">Read More</a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- row-3 (New Row) -->
                    <div class="col-xl-4 col-lg-6 col-md-6">
                        <div class="rs-blog-item wow fadeInUp" data-wow-delay=".3s" data-wow-duration="1s">
                            <div class="rs-blog-thumb">
                                <a href="blog-details.php"><img src="assets/images/blog/blog-thumb-02.webp" alt="image"
                                        style="aspect-ratio: 415/285; object-fit: cover; width: 100%;"></a>
                                <div class="rs-blog-meta">
                                    <div class="rs-blog-meta-inner">
                                        
                                        <div class="rs-blog-meta-item">
                                            <div class="rs-blog-meta-icon"><i class="ri-price-tag-3-line"></i></div>
                                            <span> Business </span>
                                        </div>
                                        <div class="rs-blog-meta-item">
                                            <div class="rs-blog-meta-icon"><i class="ri-calendar-line"></i></div>
                                            <span> August 20, 2025</span>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="rs-blog-content">
                                <h5 class="rs-blog-title"><a href="blog-details.php">Navigating Business Challenges with
                                        Ease</a></h5>
                                <p class="rs-blog-desc">Our experts provide guidance to help businesses navigate
                                    complexities smoothly.</p>
                                <div class="rs-blog-btn">
                                    <a class="rs-btn has-icon has-text has-text-underline fw-5"
                                        href="blog-details.php">Read More</a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-xl-4 col-lg-6 col-md-6">
                        <div class="rs-blog-item wow fadeInUp" data-wow-delay=".5s" data-wow-duration="1s">
                            <div class="rs-blog-thumb">
                                <a href="blog-details.php"><img src="assets/images/blog/blog-thumb-04.webp" alt="image"
                                        style="aspect-ratio: 415/285; object-fit: cover; width: 100%;"></a>
                                <div class="rs-blog-meta">
                                    <div class="rs-blog-meta-inner">
                                        
                                        <div class="rs-blog-meta-item">
                                            <div class="rs-blog-meta-icon"><i class="ri-price-tag-3-line"></i></div>
                                            <span> Innovation </span>
                                        </div>
                                        <div class="rs-blog-meta-item">
                                            <div class="rs-blog-meta-icon"><i class="ri-calendar-line"></i></div>
                                            <span> August 20, 2025</span>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="rs-blog-content">
                                <h5 class="rs-blog-title"><a href="blog-details.php">Innovation: The Key to
                                        Scalability</a></h5>
                                <p class="rs-blog-desc">Leveraging technology to build scalable and efficient business
                                    processes.</p>
                                <div class="rs-blog-btn">
                                    <a class="rs-btn has-icon has-text has-text-underline fw-5"
                                        href="blog-details.php">Read More</a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-xl-4 col-lg-6 col-md-6">
                        <div class="rs-blog-item wow fadeInUp" data-wow-delay=".7s" data-wow-duration="1s">
                            <div class="rs-blog-thumb">
                                <a href="blog-details.php"><img src="assets/images/blog/blog-thumb-01.webp" alt="image"
                                        style="aspect-ratio: 415/285; object-fit: cover; width: 100%;"></a>
                                <div class="rs-blog-meta">
                                    <div class="rs-blog-meta-inner">
                                        
                                        <div class="rs-blog-meta-item">
                                            <div class="rs-blog-meta-icon"><i class="ri-price-tag-3-line"></i></div>
                                            <span> Growth </span>
                                        </div>
                                        <div class="rs-blog-meta-item">
                                            <div class="rs-blog-meta-icon"><i class="ri-calendar-line"></i></div>
                                            <span> August 20, 2025</span>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="rs-blog-content">
                                <h5 class="rs-blog-title"><a href="blog-details.php">Future-Proofing Your Business
                                        Strategy</a></h5>
                                <p class="rs-blog-desc">How to prepare for market shifts and stay ahead of the
                                    competition effectively.</p>
                                <div class="rs-blog-btn">
                                    <a class="rs-btn has-icon has-text has-text-underline fw-5"
                                        href="blog-details.php">Read More</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- pagination style -->
                <div class="row justify-content-center">
                    <div class="col-xl-6">
                        <div class="pagination-wrapper mt-40">
                            <div class="common-pagination text-center">
                                <nav>
                                    <ul>
                                        <li><a class="current">1</a></li>
                                        <li><a href="#">2</a></li>
                                        <li><a href="#">3</a></li>
                                        <li><a class="is-next" href="#"></a></li>
                                    </ul>
                                </nav>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- pagination style end -->
            </div>
        </section>
        <!-- blog area end -->

    </main>
    <!-- Body main wrapper end -->

    <?php include 'includes/footer.php'; ?>

    <?php include 'includes/scripts.php'; ?>

    <script>
        document.getElementById('articleSearchInput').addEventListener('input', function(e) {
            const term = e.target.value.toLowerCase();
            const articles = document.querySelectorAll('.rs-blog-item');
            let foundCount = 0;

            articles.forEach(article => {
                const title = article.querySelector('.rs-blog-title').innerText.toLowerCase();
                const desc = article.querySelector('.rs-blog-desc').innerText.toLowerCase();
                const col = article.closest('.col-xl-4, .col-lg-6, .col-md-6');

                if (title.includes(term) || desc.includes(term)) {
                    col.style.display = 'block';
                    foundCount++;
                } else {
                    col.style.display = 'none';
                }
            });

            // Hide pagination if searching
            const pagination = document.querySelector('.pagination-wrapper');
            if (pagination) {
                pagination.style.display = term.length > 0 ? 'none' : 'block';
            }
        });
    </script>

</body>

</html>
