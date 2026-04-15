<!doctype html>
<html class="no-js" lang="zxx">

<head>
    <meta charset="utf-8">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <meta name="template-version" content="1.0.0">
    <title><?php echo isset($pageTitle) ? $pageTitle . " - ICEF INDIA" : "ICEF INDIA - Integrated Assessment & Recruitment Platform"; ?>
    </title>
    <meta name="description" content="">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- Place favicon.ico in the root directory -->
    <link rel="shortcut icon" type="image/x-icon" href="assets/images/logo/favicon-icef.png">
    <!-- CSS here -->
    <link rel="stylesheet" href="assets/css/vendor/bootstrap.min.css">
    <link rel="stylesheet" href="assets/css/vendor/animate.min.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.css">
    <link rel="stylesheet" href="assets/css/plugins/nice-select.css">
    <link rel="stylesheet" href="assets/css/plugins/flatpickr.min.css">
    <link rel="stylesheet" href="assets/css/plugins/nouislider.min.css">
    <link rel="stylesheet" href="assets/css/vendor/magnific-popup.css">
    <link rel="stylesheet" href="assets/css/vendor/odometer.min.css">
    <link rel="stylesheet" href="assets/css/vendor/spacing.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/remixicon@4.3.0/fonts/remixicon.css">
    <link rel="stylesheet" href="assets/css/main.css">
    <style>
        /* =============================================
           Banner Contact Form — Form Overlaps Girl Image
        ============================================= */

        /* Right column: position:relative so the form can be overlaid */
        .rs-banner-form-wrap {
            position: relative;
            display: block;
        }

        /* Girl image: fully visible, natural width, drives wrapper height */
        .rs-banner-bg-img {
            display: block;
            width: 100%;
            height: auto;
            object-fit: cover;
            object-position: top center;
            opacity: 1;
            position: relative;
            z-index: 0;
        }

        /* Form card: positioned absolutely, centred over the girl image */
        .rs-banner-contact-form {
            position: absolute;
            top: 50%;
            left: 50%;
            transform: translate(-50%, -50%);
            z-index: 3;
            background: #ffffff;
            border-radius: 8px;
            padding: 28px 24px;
            width: calc(100% - 60px);
            max-width: 400px;
            box-shadow: 0 8px 40px rgba(0, 0, 0, 0.28);
        }

        .rs-form-title {
            font-size: 20px;
            font-weight: 700;
            color: #1a1a2e;
            margin-bottom: 4px;
            line-height: 1.3;
        }

        .rs-form-subtitle {
            font-size: 12px;
            color: #888;
            margin-bottom: 14px;
        }

        .rs-contact-form-banner .rs-form-row {
            display: flex;
            gap: 10px;
            margin-bottom: 10px;
        }

        .rs-contact-form-banner .rs-form-group {
            flex: 1 1 0%;
            min-width: 0;
            display: flex;
            flex-direction: column;
        }

        .rs-contact-form-banner .rs-form-group-full {
            flex: 1 1 100%;
        }

        .rs-contact-form-banner input,
        .rs-contact-form-banner select,
        .rs-contact-form-banner .nice-select,
        .rs-contact-form-banner textarea {
            width: 100% !important;
            border: 1px solid #e0e0e0;
            border-radius: 4px;
            font-size: 14px;
            color: #444;
            background: #fff !important;
            background-image: none !important;
            outline: none;
            transition: border-color 0.3s;
            font-family: inherit;
            appearance: none !important;
            -webkit-appearance: none !important;
            -moz-appearance: none !important;
            box-sizing: border-box;
        }

        .rs-contact-form-banner input,
        .rs-contact-form-banner select,
        .rs-contact-form-banner .nice-select {
            height: 45px !important;
            padding: 0 12px;
            line-height: 43px; /* adjusted for border */
        }

        .rs-contact-form-banner .nice-select {
            display: flex;
            align-items: center;
            float: none;
        }

        .rs-contact-form-banner .nice-select .current {
            display: block;
            width: 100%;
            overflow: hidden;
            text-overflow: ellipsis;
            white-space: nowrap;
            padding-right: 20px;
        }

        .rs-contact-form-banner .nice-select:after {
            content: "" !important;
            border-bottom: 2px solid #AB052D;
            border-right: 2px solid #AB052D;
            height: 8px;
            width: 8px;
            right: 15px;
            top: 40%; 
            transform: rotate(45deg);
        }

        .rs-contact-form-banner input::placeholder,
        .rs-contact-form-banner textarea::placeholder {
            color: #aaa;
        }

        .rs-contact-form-banner input:focus,
        .rs-contact-form-banner select:focus,
        .rs-contact-form-banner .nice-select:focus,
        .rs-contact-form-banner textarea:focus {
            border-color: #AB052D;
        }

        .rs-contact-form-banner select {
            cursor: pointer;
            color: #aaa;
        }

        .rs-contact-form-banner select option:not([disabled]) {
            color: #444;
        }

        .rs-contact-form-banner textarea {
            height: 120px !important;
            padding: 12px;
            resize: none;
            line-height: normal;
        }

        /* Button: maroon matching the site header */
        .rs-banner-form-btn {
            width: 100%;
            background: #AB052D;
            color: #fff;
            border: none;
            border-radius: 4px;
            padding: 12px;
            font-size: 13px;
            font-weight: 700;
            letter-spacing: 1.5px;
            cursor: pointer;
            transition: background 0.3s, transform 0.2s;
            text-transform: uppercase;
        }

        .rs-banner-form-btn:hover {
            background: #8c0424;
            transform: translateY(-1px);
        }

        /* Banner left content: nudge right so it's not touching the left edge */
        .rs-banner-area .rs-banner-content {
            padding-left: 60px;
        }

        /* Hero Left Button: make it maroon */
        .rs-banner-area .rs-banner-content .rs-btn {
            background-color: #AB052D;
            border-color: #AB052D;
        }

        .rs-banner-area .rs-banner-content .rs-btn:hover {
            background-color: #8c0424;
            border-color: #8c0424;
        }

        /* Solution Page Banner Desktop Defaults (Replacing removed inline styles to maintain laptop view) */
        @media (min-width: 992px) {
            .rs-banner-one .rs-banner-title {
                font-size: 54px;
                line-height: 1.3;
            }
            .rs-banner-one .row > .col-lg-5 {
                margin-top: -210px;
            }
            .rs-form-title {
                font-size: 18px;
            }
        }

        /* ---- Responsive overrides ---- */
        @media (max-width: 1399px) {
            .rs-banner-area .rs-banner-content { padding-left: 40px; }
        }

        @media (max-width: 1199px) {
            .rs-banner-area .rs-banner-content { padding-left: 24px; }
        }

        @media (max-width: 991px) {
            .rs-banner-area .rs-banner-content { padding-left: 16px; }

            .rs-banner-contact-form {
                position: relative;
                top: auto;
                left: auto;
                transform: none;
                width: 100%;
                max-width: 100%;
                margin-top: 20px;
            }

            .rs-contact-form-banner .rs-form-row {
                flex-direction: column;
                gap: 10px;
            }

            /* Solution Page Banner Fixes (Targeting inline styles) */
            .rs-banner-one .rs-banner-title {
                font-size: 32px !important;
                line-height: 1.2 !important;
            }

            .rs-banner-one [style*="margin-top: -210px"] {
                margin-top: 30px !important;
            }
            
            .rs-banner-area.rs-banner-one {
                padding-top: 100px;
                padding-bottom: 40px;
            }

            .rs-banner-one .rs-banner-subtitle {
                font-size: 14px !important;
                margin-bottom: 10px !important;
            }

            .rs-banner-one .rs-banner-desc {
                font-size: 16px !important;
                margin-bottom: 20px !important;
            }
        }

        /* Further Mobile Adjustments */
        @media (max-width: 575px) {
            .rs-banner-one .rs-banner-title {
                font-size: 26px !important;
            }
            .rs-banner-area.rs-banner-one {
                padding-top: 80px;
            }
        }

        /* Footer Logo Responsiveness */
        @media (max-width: 767px) {
            .rs-footer-widget-logo img {
                max-width: 140px !important;
                height: auto !important;
            }
        }

        /* Global Compact Banner Form Styles */
        .rs-banner-contact-form .rs-form-group input,
        .rs-banner-contact-form .rs-form-group select {
            font-size: 12px !important;
            padding: 6px 10px !important;
            height: 36px !important;
            min-height: unset !important;
            line-height: 1 !important;
            box-sizing: border-box !important;
        }
        .rs-banner-contact-form .rs-form-group textarea {
            font-size: 12px !important;
            padding: 6px 10px !important;
            height: 80px !important;
            min-height: unset !important;
            resize: none;
            box-sizing: border-box !important;
        }
        .rs-banner-contact-form .rs-form-group {
            margin-bottom: 8px !important;
        }
        .rs-banner-contact-form .rs-form-row {
            gap: 8px !important;
            margin-bottom: 0 !important;
        }
        .rs-banner-contact-form .rs-banner-form-btn {
            padding: 10px 20px !important;
            font-size: 13px !important;
        }

        /* =============================================
           Glass Effect — Transparent Header over Banner
        ============================================= */
        @media (min-width: 992px) {

            /* Overlay Header Container — only for main header, not sticky */
            .rs-header-area.header-transparent {
                position: absolute;
                width: 100%;
                top: 40px; /* leave space for the Top Red Bar */
                left: 0;
                z-index: 1000;
                background: transparent;
            }

            /* Top Red Bar */
            .header-transparent-parent .rs-header-top {
                background: #AB052D !important;
                position: relative;
                z-index: 1002;
                height: 40px;
                display: flex !important;
                align-items: center;
            }

        }

        /* Mobile Menu Fix: hide desktop nav on small screens */
        @media (max-width: 1199px) {
            .header-menu,
            .main-menu,
            #mobile-menu,
            #mobile-menu-two {
                display: none !important;
            }
        }
    </style>
</head>
