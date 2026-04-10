<?php $pageTitle = "Checkout"; include 'includes/head.php'; ?>

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
                                            Checkout
                                        </li>
                                    </ul>
                                </nav>
                            </div>
                            <div class="rs-breadcrumb-title-wrapper">
                                <h1 class="rs-breadcrumb-title">Checkout</h1>
                                <span class="rs-breadcrumb-line"></span>
                            </div>
                            <p class="rs-breadcrumb-desc">Position your agency bridge between a client’s big picture</p>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- breadcrumb area end -->

        <!-- Coupon area start -->
        <div class="rs-coupon-area section-space-top">
            <div class="container">
                <div class="row">
                    <div class="col-xl-12">
                        <div class="coupon-accordion">
                            <div class="checkout-verify-item">
                                <p class="checkout-verify-reveal">Have a coupon? <button type="button" class="checkout-login-form-reveal-btn">Click here to enter your code</button></p>
                                <div id="checkout-coupon" class="coupon-content">
                                    <div class="coupon-inner">
                                        <div class="coupon-info">
                                            <p>If you have a coupon code, please apply it below.</p>
                                            <form action="#">
                                                <p class="checkout-coupon-form">
                                                    <input type="text" placeholder="Coupon Code">
                                                    <button class="rs-btn" type="submit">Apply Coupon</button>
                                                </p>
                                            </form>
                                        </div>
                                        <div class="coupon-info">
                                            <form action="#">
                                                <p class="checkout-form">
                                                    <label>Username or email <span class="required">*</span></label>
                                                    <input type="text">
                                                </p>
                                                <p class="checkout-form">
                                                    <label>Password <span class="required">*</span></label>
                                                    <input type="text">
                                                </p>
                                                <p class="checkout-form-btn">
                                                    <button class="rs-btn" type="submit">Login</button>
                                                </p>
                                            </form>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!--Coupon area end -->

        <!-- checkout area start -->
        <div class="checkout-bill-area">
            <div class="container">
                <div class="checkout-bill-inner">
                    <div class="row g-5">
                        <div class="col-xl-6 col-lg-6">
                            <h3 class="checkout-bill-title">Billing Details</h3>
                            <div class="checkout-bill-form">
                                <form action="#">
                                    <div class="col-md-12">
                                        <div class="checkout-input">
                                            <label>Company name <span>*</span></label>
                                            <input type="text">
                                        </div>
                                    </div>
                                    <div class="col-md-12">
                                        <div class="checkout-input">
                                            <label>Country / Region<span>*</span></label>
                                            <select class="checkout-country country-list">
                                                <option>United State</option>
                                                <option>Vietnam</option>
                                                <option>France</option>
                                                <option>Japan</option>
                                                <option>Maldives</option>
                                            </select>
                                        </div>
                                    </div>
                                    <div class="col-md-12">
                                        <div class="checkout-input">
                                            <label>Street address <span>*</span></label>
                                            <input type="text">
                                        </div>
                                    </div>
                                    <div class="col-md-12">
                                        <div class="checkout-input">
                                            <label>Town city <span>*</span></label>
                                            <input type="text">
                                        </div>
                                    </div>
                                    <div class="col-md-12">
                                        <div class="checkout-input">
                                            <label>State<span>*</span></label>
                                            <select class="checkout-country country-list">
                                                <option>Alabama</option>
                                                <option>Alaska</option>
                                                <option>Arizona</option>
                                                <option>Arkansas</option>
                                                <option>California</option>
                                            </select>
                                        </div>
                                    </div>
                                    <div class="col-md-12">
                                        <div class="checkout-input">
                                            <label>Town city <span>*</span></label>
                                            <input type="text">
                                        </div>
                                    </div>
                                    <div class="col-md-12">
                                        <div class="checkout-input">
                                            <label>Phone <span>*</span></label>
                                            <input id="email" name="email" type="email">
                                        </div>
                                    </div>
                                    <div class="col-md-12">
                                        <div class="checkout-input">
                                            <label>Email address <span>*</span></label>
                                            <input id="phone" name="phone" type="text">
                                        </div>
                                    </div>
                                </form>
                            </div>
                        </div>
                        <div class="col-xl-6 col-lg-6">
                            <h3 class="checkout-bill-title">Additional information</h3>
                            <div class="checkout-bill-form">
                                <form action="#">
                                    <textarea id="message" name="message" placeholder="Notes about your order, e.g. special notes for delivery."></textarea>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- checkout area end -->

        <!-- checkout place order area -->
        <section class="checkout-place-order section-space-bottom pt-40">
            <div class="container">
                <div class="row">
                    <div class="col-md-12">
                        <div class="checkout-place-total">
                            <h3 class="checkout-place-order-title mb-25">Your order</h3>
                            <ul class="mb-20">
                                <li>Product <span>Subtotal</span></li>
                                <li>Adjustable Wrentch × 1 <span>$12.00</span></li>
                                <li>Subtotal <span>$12.00</span></li>
                                <li>Total <span>$12.00</span></li>
                            </ul>
                            <p class="checkout-place-order-btn">
                                <button class="rs-btn" type="submit">Place Order</button>
                            </p>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- checkout place order end -->

    </main>
    <!-- Body main wrapper end -->

    <?php include 'includes/footer.php'; ?>
    <!-- footer area end -->

    <?php include 'includes/scripts.php'; ?>