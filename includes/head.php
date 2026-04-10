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
            flex: 1;
            display: flex;
            flex-direction: column;
        }

        .rs-contact-form-banner .rs-form-group-full {
            flex: 1 1 100%;
        }

        .rs-contact-form-banner input,
        .rs-contact-form-banner select,
        .rs-contact-form-banner textarea {
            width: 100%;
            border: 1px solid #e0e0e0;
            border-radius: 4px;
            padding: 9px 12px;
            font-size: 12px;
            color: #444;
            background: #fff;
            outline: none;
            transition: border-color 0.3s;
            font-family: inherit;
            appearance: auto;
            -webkit-appearance: auto;
            box-sizing: border-box;
        }

        .rs-contact-form-banner input::placeholder,
        .rs-contact-form-banner textarea::placeholder {
            color: #aaa;
        }

        .rs-contact-form-banner input:focus,
        .rs-contact-form-banner select:focus,
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
            resize: vertical;
            min-height: 70px;
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
        }

        /* =============================================
           Glass Effect — Transparent Header over Banner
        ============================================= */
        @media (min-width: 992px) {

            /* Overlay Header Container — only for main header, not sticky */
            .rs-header-area.header-transparent:not(.rs-sticky-header) {
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

            /* Sticky header — glass while not yet active */
            .header-transparent.rs-sticky-header:not(.active) {
                background: rgba(43, 57, 68, 0.4) !important;
                backdrop-filter: blur(20px);
                -webkit-backdrop-filter: blur(20px);
                border-bottom: 1px solid rgba(255, 255, 255, 0.1);
                position: fixed;
                width: 100%;
                top: -100px;
                z-index: 1001;
                visibility: hidden;
                opacity: 0;
                pointer-events: none;
                transition: all 0.4s ease;
            }

            /* Sticky header — fully visible when active */
            .header-transparent.rs-sticky-header.active {
                background: var(--rs-theme-secondary) !important;
                backdrop-filter: none;
                -webkit-backdrop-filter: none;
                top: 0 !important;
                position: fixed;
                width: 100%;
                visibility: visible;
                opacity: 1;
                pointer-events: auto;
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