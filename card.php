<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Our Solutions - ICEF</title>
    <meta name="description" content="Discover comprehensive solutions at ICEF including Exam Management, Workforce Solutions, Recruitment, and IT Emerging Tech.">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Outfit:wght@300;400;600;700&display=swap" rel="stylesheet">
    <style>
        :root {
            --primary-bg: #2B3944;
            --accent-theme: #AB052D;
            --accent-hover: #8a0424;
            --text-dark: #FFFFFF;
            --text-muted: rgba(255, 255, 255, 0.7);
            --card-radius: 20px;
            --transition: all 0.3s cubic-bezier(0.4, 0, 0.2, 1);
        }

        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
        }

        body {
            font-family: 'Outfit', sans-serif;
            background-color: var(--primary-bg);
            color: var(--text-dark);
            min-height: 100vh;
            display: flex;
            justify-content: center;
            align-items: center;
            padding: 40px 20px;
        }

        .container {
            max-width: 1200px;
            width: 100%;
            text-align: center;
        }

        .header {
            margin-bottom: 60px;
        }

        .header h1 {
            font-size: 2.5rem;
            font-weight: 700;
            margin-bottom: 20px;
            line-height: 1.2;
        }

        .header p {
            font-size: 1.1rem;
            color: var(--text-muted);
            max-width: 700px;
            margin: 0 auto;
            line-height: 1.6;
        }

        .timeline {
            display: flex;
            justify-content: space-between;
            align-items: flex-start;
            gap: 15px;
            margin-bottom: 60px;
            position: relative;
        }

        .timeline-item {
            flex: 1;
            display: flex;
            flex-direction: column;
            align-items: center;
        }

        .card {
            width: 100%;
            aspect-ratio: 4/3;
            border-radius: var(--card-radius);
            overflow: hidden;
            box-shadow: 0 10px 30px rgba(0, 0, 0, 0.2);
            margin-bottom: 30px;
            transition: var(--transition);
            background: rgba(255, 255, 255, 0.05);
        }

        .card:hover {
            transform: translateY(-10px);
            box-shadow: 0 20px 40px rgba(0, 0, 0, 0.4);
        }

        .card img {
            width: 100%;
            height: 100%;
            object-fit: cover;
            transition: var(--transition);
        }

        .card:hover img {
            scale: 1.05;
        }

        .connector {
            width: 1px;
            height: 80px;
            background: linear-gradient(to bottom, rgba(255, 255, 255, 0.3), rgba(255, 255, 255, 0.05));
            margin-bottom: 20px;
        }

        .label {
            text-align: center;
        }

        .year {
            font-size: 0.85rem;
            font-weight: 600;
            color: var(--text-muted);
            margin-bottom: 8px;
            text-transform: uppercase;
            letter-spacing: 1px;
        }

        .gen-name {
            font-size: 0.95rem;
            font-weight: 700;
            color: var(--text-dark);
            text-transform: uppercase;
            letter-spacing: 1px;
        }

        .cta-button {
            display: inline-flex;
            align-items: center;
            background-color: var(--accent-theme);
            color: #ffffff;
            padding: 16px 32px;
            border-radius: 50px;
            text-decoration: none;
            font-weight: 700;
            font-size: 1rem;
            transition: var(--transition);
            border: none;
            cursor: pointer;
            box-shadow: 0 4px 15px rgba(171, 5, 45, 0.3);
        }

        .cta-button:hover {
            transform: scale(1.05);
            box-shadow: 0 8px 25px rgba(171, 5, 45, 0.4);
            background-color: var(--accent-hover);
        }

        .cta-button span {
            margin-right: 10px;
        }

        .cta-button i {
            font-style: normal;
        }

        @media (max-width: 1024px) {
            .timeline {
                flex-wrap: wrap;
                justify-content: center;
                gap: 40px 20px;
            }
            .timeline-item {
                flex: 0 0 calc(33.333% - 20px);
            }
        }

        @media (max-width: 768px) {
            .timeline-item {
                flex: 0 0 calc(50% - 20px);
            }
            .header h1 {
                font-size: 2rem;
            }
        }

        @media (max-width: 480px) {
            .timeline-item {
                flex: 0 0 100%;
            }
            .connector {
                height: 40px;
            }
        }
    </style>
</head>
<body>

    <div class="container">
        <header class="header">
            <h1 id="main-title">Comprehensive Solutions<br>for Your Organization</h1>
            <p>We offer a wide range of services designed to drive your success. Explore our key offerings including Exam Management, Workforce Solutions, Recruitment, and IT Emerging Tech.</p>
        </header>

        <div class="timeline" role="list">
            <!-- Gen 1 -->
            <div class="timeline-item" role="listitem">
                <div class="card">
                    <img src="assets/images/banner/banner-thumb-02.webp" alt="IT & Emerging Tech Enablement Solution">
                </div>
                <div class="connector"></div>
                <div class="label">
                    <div class="year">01</div>
                    <div class="gen-name">IT & Emerging Tech Enablement</div>
                </div>
            </div>

            <!-- Gen 2 -->
            <div class="timeline-item" role="listitem">
                <div class="card">
                    <img src="assets/images/banner/assessment-testing.webp" alt="Assessment & Testing Solution">
                </div>
                <div class="connector"></div>
                <div class="label">
                    <div class="year">02</div>
                    <div class="gen-name">Assessment & Testing</div>
                </div>
            </div>

            <!-- Gen 3 -->
            <div class="timeline-item" role="listitem">
                <div class="card">
                    <img src="assets/images/banner/recruitment.webp" alt="Recruitment & Hiring Solution">
                </div>
                <div class="connector"></div>
                <div class="label">
                    <div class="year">03</div>
                    <div class="gen-name">Recruitment & Hiring</div>
                </div>
            </div>

            <!-- Gen 4 -->
            <div class="timeline-item" role="listitem">
                <div class="card">
                    <img src="assets/images/banner/exam-management.webp" alt="Exam Management Solution">
                </div>
                <div class="connector"></div>
                <div class="label">
                    <div class="year">04</div>
                    <div class="gen-name">Exam Management</div>
                </div>
            </div>

            <!-- Gen 5 -->
            <div class="timeline-item" role="listitem">
                <div class="card">
                    <img src="assets/images/banner/manpower.webp" alt="Manpower & Workforce Solution">
                </div>
                <div class="connector"></div>
                <div class="label">
                    <div class="year">05</div>
                    <div class="gen-name">Manpower & Workforce</div>
                </div>
            </div>

            <!-- Gen 6 -->
            <div class="timeline-item" role="listitem">
                <div class="card">
                    <img src="assets/images/banner/call-center.webp" alt="Call Center & BPOs Solution">
                </div>
                <div class="connector"></div>
                <div class="label">
                    <div class="year">06</div>
                    <div class="gen-name">Call Center & BPOs</div>
                </div>
            </div>
        </div>

        <a href="solutions.php" class="cta-button" id="explore-btn">
            <span>Explore our solutions</span>
            <i>&rarr;</i>
        </a>
    </div>

</body>
</html>
