<?php 
$pageTitle = "Terms & Agreements";
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

    <!-- Terms Content Start -->
    <section class="rs-terms-area section-space" style="padding: 100px 0; background: #fbfbfb; position: relative; overflow: hidden;">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-xl-10">
                    <div class="rs-legal-card" style="background: #fff; padding: 60px; border-radius: 20px; box-shadow: 0 20px 60px rgba(0,0,0,0.05); position: relative; z-index: 2;">
                        <div class="rs-legal-content-wrapper" style="color: #444; line-height: 1.8;">
                            <div class="section-title-wrapper mb-40">
                                <h2 class="rs-section-title">1. Introduction</h2>
                                <p>Welcome to <strong>ICEF INDIA</strong>. These Terms & Agreements govern your use of our website and services. By accessing our platform, you agree to be bound by these terms. ICEF INDIA provides end-to-end solutions in Assessment, Recruitment, and Workforce Development since 2000.</p>
                            </div>

                            <div class="section-title-wrapper mb-40">
                                <h2 class="rs-section-title">2. User Responsibilities</h2>
                                <p>As a user of ICEF INDIA services, you agree to:</p>
                                <ul class="rs-legal-list">
                                    <li>Provide accurate and complete information during registration and assessment processes.</li>
                                    <li>Maintain the confidentiality of your account credentials.</li>
                                    <li>Use the platform only for lawful purposes related to recruitment, assessment, or workforce development.</li>
                                    <li>Not attempt to circumvent any security measures or proctoring protocols during examinations.</li>
                                </ul>
                            </div>

                            <div class="section-title-wrapper mb-40">
                                <h2 class="rs-section-title">3. Service Availability</h2>
                                <p>While we strive to ensure 24/7 availability of our digital platforms, ICEF INDIA does not guarantee uninterrupted access. Scheduled maintenance and unforeseen technical issues may occasionally result in temporary service suspensions. We will make reasonable efforts to notify users in advance of any planned downtime.</p>
                            </div>

                            <div class="section-title-wrapper mb-40">
                                <h2 class="rs-section-title">4. Intellectual Property</h2>
                                <p>All content, including but not limited to assessment methodologies, question banks, software code, logos, and website design, are the exclusive property of ICEF INDIA or its licensors. You may not reproduce, distribute, or create derivative works without explicit written permission.</p>
                            </div>

                            <div class="section-title-wrapper mb-40">
                                <h2 class="rs-section-title">5. Limitation of Liability</h2>
                                <p>ICEF INDIA shall not be liable for any indirect, incidental, or consequential damages arising from the use or inability to use our services. Our maximum liability in any circumstance is limited to the amount paid for the specific service in question.</p>
                            </div>

                            <div class="section-title-wrapper mb-40">
                                <h2 class="rs-section-title">6. Governing Law</h2>
                                <p>These terms are governed by and construed in accordance with the laws of India. Any disputes arising shall be subject to the exclusive jurisdiction of the courts in Uttar Pradesh/Delhi NCR.</p>
                            </div>

                            <div class="section-title-wrapper mb-40">
                                <h2 class="rs-section-title">7. Changes to Terms</h2>
                                <p>ICEF INDIA reserves the right to modify these Terms & Agreements at any time. Significant changes will be communicated via the platform. Your continued use of the services after such changes constitutes acceptance of the new terms.</p>
                            </div>

                            <div class="rs-terms-footer">
                                <p>Last Updated: April 2024</p>
                                <p>If you have any questions regarding these terms, please contact us at <a href="mailto:sales@icefindia.in">sales@icefindia.in</a>.</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        
        <!-- Subtle Background Decoration -->
        <div style="position: absolute; bottom: 0; right: 0; opacity: 0.03; font-size: 300px; font-weight: 800; color: #AB052D; line-height: 1; z-index: 1; pointer-events: none; transform: translate(20%, 20%); text-transform: uppercase;">
            ICEF
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
    <!-- Terms Content End -->
</main>

<?php 
include 'includes/footer.php'; 
include 'includes/scripts.php'; 
?>
