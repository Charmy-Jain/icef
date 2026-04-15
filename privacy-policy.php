<?php 
$pageTitle = "Privacy Policy";
include 'includes/head.php'; 
include 'includes/header.php';
include 'includes/offcanvas.php'; 
?>

<main>
    <style>
        .rs-legal-hero {
            background-color: #2B3944;
            padding: 150px 0 100px;
        }
        .rs-breadcrumb-title {
            color: #fff;
            font-size: 52px;
            font-weight: 700;
        }
        .rs-breadcrumb-list span {
            color: rgba(255,255,255,0.7);
            font-size: 16px;
        }
        .rs-breadcrumb-list a {
            color: #fff;
            transition: 0.3s;
        }
        .rs-breadcrumb-list a:hover {
            color: #AB052D;
        }

        @media (max-width: 991px) {
            .rs-legal-hero {
                padding: 120px 0 70px;
            }
            .rs-breadcrumb-title {
                font-size: 42px;
            }
        }
        @media (max-width: 767px) {
            .rs-legal-hero {
                padding: 100px 0 60px;
            }
            .rs-breadcrumb-title {
                font-size: 32px;
            }
            .rs-legal-content-wrapper .rs-section-title {
                font-size: 24px !important;
            }
        }
    </style>

    <!-- Privacy Content Start -->
    <section class="rs-terms-area section-space" style="padding: 100px 0; background: #fbfbfb; position: relative; overflow: hidden;">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-xl-10">
                    <div class="rs-legal-card" style="background: #fff; padding: 60px; border-radius: 20px; box-shadow: 0 20px 60px rgba(0,0,0,0.05); position: relative; z-index: 2;">
                        <div class="rs-legal-content-wrapper" style="color: #444; line-height: 1.8;">
                            <div class="section-title-wrapper mb-40">
                                <h2 class="rs-section-title">1. Information We Collect</h2>
                                <p>ICEF INDIA collects personal information to provide and improve our assessment and recruitment services. This includes:</p>
                                <ul class="rs-legal-list">
                                    <li><strong>Identity Data:</strong> Name, age, gender, and photograph.</li>
                                    <li><strong>Contact Data:</strong> Email address, phone number, and mailing address.</li>
                                    <li><strong>Professional Data:</strong> Educational qualifications, work experience, and resumes.</li>
                                    <li><strong>Assessment Data:</strong> Answers to examination questions, proctoring logs (including video/audio if applicable), and test scores.</li>
                                </ul>
                            </div>

                            <div class="section-title-wrapper mb-40">
                                <h2 class="rs-section-title">2. How We Use Your Data</h2>
                                <p>We use the collected data for the following purposes:</p>
                                <ul class="rs-legal-list">
                                    <li>To facilitate recruitment and assessment processes on behalf of our clients.</li>
                                    <li>To verify the identity of candidates during examinations.</li>
                                    <li>To generate merit lists and evaluation reports for recruitment agencies or government bodies.</li>
                                    <li>To improve our platform's security and user experience.</li>
                                </ul>
                            </div>

                            <div class="section-title-wrapper mb-40">
                                <h2 class="rs-section-title">3. Data Security</h2>
                                <p>ICEF INDIA implements robust technical and organizational measures to protect your personal data from unauthorized access, alteration, or disclosure. We use encrypted databases, secure socket layers (SSL), and regular security audits to safeguard your information.</p>
                            </div>

                            <div class="section-title-wrapper mb-40">
                                <h2 class="rs-section-title">4. Sharing of Information</h2>
                                <p>We do not sell your personal data. However, we may share information with:</p>
                                <ul class="rs-legal-list">
                                    <li><strong>Clients/Employers:</strong> Specifically those whose recruitment or assessment process you are participating in.</li>
                                    <li><strong>Service Providers:</strong> Third-party partners who assist in technical operations (e.g., hosting, SMS/email services).</li>
                                    <li><strong>Legal Authorities:</strong> When required by law or to protect our legal rights.</li>
                                </ul>
                            </div>

                            <div class="section-title-wrapper mb-40">
                                <h2 class="rs-section-title">5. Cookies and Tracking</h2>
                                <p>Our website uses cookies to enhance functionality and track usage patterns. You can manage cookie preferences through your browser settings, though disabling them may affect some features of the site.</p>
                            </div>

                            <div class="section-title-wrapper mb-40">
                                <h2 class="rs-section-title">6. Your Rights</h2>
                                <p>Users have the right to request access to their personal data, seek corrections, or request deletion (subject to legal and contractual obligations). To exercise these rights, please contact our data protection officer.</p>
                            </div>

                            <div class="rs-terms-footer">
                                <p>Last Updated: April 2024</p>
                                <p>For any privacy-related concerns, please reach out to us at <a href="mailto:privacy@icefindia.in">privacy@icefindia.in</a>.</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        
        <!-- Subtle Background Decoration -->
        <div style="position: absolute; bottom: 0; left: 0; opacity: 0.03; font-size: 300px; font-weight: 800; color: #AB052D; line-height: 1; z-index: 1; pointer-events: none; transform: translate(-20%, 20%); text-transform: uppercase;">
            PRIVACY
        </div>
    </section>

    <style>
        .rs-legal-card {
            transition: transform 0.3s ease;
        }
        .rs-legal-content-wrapper .rs-section-title {
            font-size: 28px;
            color: #2B3944;
            margin-bottom: 20px;
            border-left: 4px solid #AB052D;
            padding-left: 15px;
            font-weight: 700;
        }
        .rs-legal-list {
            list-style: none;
            margin-left: 15px;
            margin-bottom: 25px;
        }
        .rs-legal-list li {
            position: relative;
            padding-left: 25px;
            margin-bottom: 15px;
        }
        .rs-legal-list li::before {
            content: "→";
            position: absolute;
            left: 0;
            color: #AB052D;
            font-weight: bold;
        }
        .rs-terms-footer {
            margin-top: 50px;
            padding-top: 30px;
            border-top: 1px solid #eee;
            font-style: italic;
            display: flex;
            justify-content: space-between;
            flex-wrap: wrap;
            gap: 20px;
        }
        .rs-terms-footer a {
            color: #AB052D;
            font-weight: 600;
            text-decoration: underline;
        }

        @media (max-width: 767px) {
            .rs-legal-card {
                padding: 30px 20px !important;
                border-radius: 0 !important;
            }
            .rs-terms-footer {
                flex-direction: column;
                gap: 10px;
            }
        }
    </style>
    <!-- Privacy Content End -->
</main>

<?php 
include 'includes/footer.php'; 
include 'includes/scripts.php'; 
?>
