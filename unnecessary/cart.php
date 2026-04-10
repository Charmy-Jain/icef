<?php $pageTitle = "Cart"; include 'includes/head.php'; ?>

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
                                            Cart
                                        </li>
                                    </ul>
                                </nav>
                            </div>
                            <div class="rs-breadcrumb-title-wrapper">
                                <h1 class="rs-breadcrumb-title">Cart</h1>
                                <span class="rs-breadcrumb-line"></span>
                            </div>
                            <p class="rs-breadcrumb-desc">Position your agency bridge between a client’s big picture</p>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- breadcrumb area end -->

        <!-- Cart-area area start -->
        <section class="rs-cart-area section-space">
            <div class="container">
                <div class="row">
                    <div class="col-xl-12">
                        <div class="rs-cart-list mb-25 mr-30">
                            <div class="shop-table-content table-responsive">
                                <table class="table table-bordered">
                                    <thead>
                                        <tr>
                                            <th>Images</th>
                                            <th>Product</th>
                                            <th>Unit Price</th>
                                            <th>Quantity</th>
                                            <th>Remove</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <tr>
                                            <td class="product-thumbnail"><a href="product-details.php"><img src="assets/images/shop/shop-thumb-01.webp" alt="img"></a></td>
                                            <td><a href="shop-details.php">Iphone 15 Pro Max</a></td>
                                            <td>$15.00</td>
                                            <td>
                                                <div class="rs-product-quantity">
                                                    <span class="rs-cart-minus">
                                          <svg width="10" height="2" viewBox="0 0 10 2" fill="none"
                                             xmlns="http://www.w3.org/2000/svg">
                                             <path d="M1 1H9" stroke="currentColor" stroke-width="1.5"
                                                stroke-linecap="round" stroke-linejoin="round"></path>
                                          </svg>
                                       </span>
                                                    <input class="rs-cart-input" type="text" value="1">
                                                    <span class="rs-cart-plus">
                                          <svg width="10" height="10" viewBox="0 0 10 10" fill="none"
                                             xmlns="http://www.w3.org/2000/svg">
                                             <path d="M5 1V9" stroke="currentColor" stroke-width="1.5"
                                                stroke-linecap="round" stroke-linejoin="round"></path>
                                             <path d="M1 5H9" stroke="currentColor" stroke-width="1.5"
                                                stroke-linecap="round" stroke-linejoin="round"></path>
                                          </svg>
                                       </span>
                                                </div>
                                            </td>
                                            <td>
                                                <button class="removeRow"><i class="ri-close-line"></i> Remove</button>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td class="product-thumbnail"><a href="product-details.php"><img src="assets/images/shop/shop-thumb-02.webp" alt="img"></a></td>
                                            <td><a href="shop-details.php">Headset</a></td>
                                            <td>$10.00</td>
                                            <td>
                                                <div class="rs-product-quantity">
                                                    <span class="rs-cart-minus">
                                          <svg width="10" height="2" viewBox="0 0 10 2" fill="none"
                                             xmlns="http://www.w3.org/2000/svg">
                                             <path d="M1 1H9" stroke="currentColor" stroke-width="1.5"
                                                stroke-linecap="round" stroke-linejoin="round"></path>
                                          </svg>
                                       </span>
                                                    <input class="rs-cart-input" type="text" value="1">
                                                    <span class="rs-cart-plus">
                                          <svg width="10" height="10" viewBox="0 0 10 10" fill="none"
                                             xmlns="http://www.w3.org/2000/svg">
                                             <path d="M5 1V9" stroke="currentColor" stroke-width="1.5"
                                                stroke-linecap="round" stroke-linejoin="round"></path>
                                             <path d="M1 5H9" stroke="currentColor" stroke-width="1.5"
                                                stroke-linecap="round" stroke-linejoin="round"></path>
                                          </svg>
                                       </span>
                                                </div>
                                            </td>
                                            <td>
                                                <button class="removeRow"><i class="ri-close-line"></i> Remove</button>
                                            </td>
                                        </tr>
                                    </tbody>
                                </table>
                            </div>
                        </div>
                        <div class="rs-cart-bottom">
                            <div class="row align-items-end g-5">
                                <div class="col-xl-7 col-md-8">
                                    <div class="rs-cart-coupon">
                                        <form action="#">
                                            <div class="rs-cart-coupon-input-box">
                                                <label>Coupon Code:</label>
                                                <div class="rs-cart-coupon-input d-flex flex-wrap gap-15 align-items-center">
                                                    <input type="text" placeholder="Enter Coupon Code">
                                                    <button type="submit" class="rs-btn">Apply Coupon
                                                    </button>
                                                </div>
                                            </div>
                                        </form>
                                    </div>
                                </div>
                                <div class="col-xl-5 col-md-4">
                                    <div class="rs-cart-update text-md-end">
                                        <button type="submit" class="rs-btn">Update Cart</button>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="row justify-content-end">
                    <div class="col-md-5">
                        <div class="cart-page-total">
                            <h5>Cart Totals</h5>
                            <ul class="mb-20">
                                <li>Subtotal <span>$50.00</span></li>
                                <li>Total <span>$50.00</span></li>
                            </ul>
                            <a class="rs-btn has-icon is-transparent" href="checkout.php">Proceed to checkout</a>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- Cart-area area end -->

    </main>
    <!-- Body main wrapper end -->

    <?php include 'includes/footer.php'; ?>
    <!-- footer area end -->

    <?php include 'includes/scripts.php'; ?>