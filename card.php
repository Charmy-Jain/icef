<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Our Solutions - ICEF</title>
    <meta name="description" content="Discover comprehensive solutions at ICEF.">
    <link href="https://fonts.googleapis.com/css2?family=Outfit:wght@300;400;600;700&display=swap" rel="stylesheet">
    <style>
        :root {
            --primary-bg: #2B3944;
            --accent-theme: #AB052D;
            --accent-hover: #8a0424;
            --text-dark: #FFFFFF;
            --text-muted: rgba(255, 255, 255, 0.7);
            --card-radius: 20px;
        }

        * { margin: 0; padding: 0; box-sizing: border-box; }

        body {
            font-family: 'Outfit', sans-serif;
            background-color: var(--primary-bg);
            color: var(--text-dark);
            overflow-x: hidden;
        }

        .spacer {
            height: 100vh;
            display: flex;
            align-items: center;
            justify-content: center;
            font-size: 1.4rem;
            color: var(--text-muted);
            letter-spacing: 2px;
            text-transform: uppercase;
        }

        .scroll-driver {
            height: 400vh; 
            position: relative;
        }

        .sticky-container {
            position: sticky;
            top: 0;
            height: 100vh;
            overflow: hidden;
            display: flex;
            align-items: center;
            justify-content: center;
            width: 100%;
        }

        .container {
            max-width: 1200px;
            width: 100%;
            text-align: center;
            padding: 40px 20px;
        }

        .header { margin-bottom: 60px; }

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
            width: 100%;
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
            box-shadow: 0 10px 30px rgba(0,0,0,0.3);
            margin-bottom: 30px;
            background: rgba(255,255,255,0.08);
            will-change: transform, opacity;
            position: relative;
        }

        .card img {
            width: 100%;
            height: 100%;
            object-fit: cover;
            display: block;
        }

        .connector {
            width: 1px;
            height: 80px;
            background: linear-gradient(to bottom, rgba(255,255,255,0.3), rgba(255,255,255,0.05));
            margin-bottom: 20px;
        }

        .label { text-align: center; }

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
            transition: all 0.3s cubic-bezier(0.4, 0, 0.2, 1);
            border: none;
            cursor: pointer;
            box-shadow: 0 4px 15px rgba(171,5,45,0.3);
            opacity: 0;
            transform: translateY(20px);
        }

        @media (max-width: 1024px) {
            .timeline { flex-wrap: wrap; justify-content: center; gap: 40px 20px; }
            .timeline-item { flex: 0 0 calc(33.333% - 20px); }
        }
        @media (max-width: 768px) {
            .timeline-item { flex: 0 0 calc(50% - 20px); }
            .header h1 { font-size: 2rem; }
        }
        @media (max-width: 480px) {
            .timeline-item { flex: 0 0 100%; }
            .connector { height: 40px; }
        }
    </style>
</head>
<body>

    <div class="spacer">↓ Scroll Down ↓</div>

    <div class="scroll-driver">
        <div class="sticky-container">
            <div class="container">
                <header class="header">
                    <h1>Comprehensive Solutions<br>for Your Organization</h1>
                    <p>We offer a wide range of services designed to drive your success. Explore our key offerings including Exam Management, Workforce Solutions, Recruitment, and IT Emerging Tech.</p>
                </header>

                <div class="timeline" id="timeline" role="list">
                    <div class="timeline-item" role="listitem">
                        <div class="card" id="card-1"><img src="assets/images/banner/banner-1.webp" alt="IT & Emerging Tech"></div>
                        <div class="connector"></div>
                        <div class="label"><div class="year">01</div><div class="gen-name">IT & Emerging Tech Enablement</div></div>
                    </div>
                    <div class="timeline-item" role="listitem">
                        <div class="card" id="card-2"><img src="assets/images/banner/banner-1.webp" alt="Assessment & Testing"></div>
                        <div class="connector"></div>
                        <div class="label"><div class="year">02</div><div class="gen-name">Assessment & Testing</div></div>
                    </div>
                    <div class="timeline-item" role="listitem">
                        <div class="card" id="card-3"><img src="assets/images/banner/banner-1.webp" alt="Recruitment & Hiring"></div>
                        <div class="connector"></div>
                        <div class="label"><div class="year">03</div><div class="gen-name">Recruitment & Hiring</div></div>
                    </div>
                    <div class="timeline-item" role="listitem">
                        <div class="card" id="card-4"><img src="assets/images/banner/banner-1.webp" alt="Exam Management"></div>
                        <div class="connector"></div>
                        <div class="label"><div class="year">04</div><div class="gen-name">Exam Management</div></div>
                    </div>
                    <div class="timeline-item" role="listitem">
                        <div class="card" id="card-5"><img src="assets/images/banner/banner-1.webp" alt="Manpower & Workforce"></div>
                        <div class="connector"></div>
                        <div class="label"><div class="year">05</div><div class="gen-name">Manpower & Workforce</div></div>
                    </div>
                    <div class="timeline-item" role="listitem">
                        <div class="card" id="card-6"><img src="assets/images/banner/banner-1.webp" alt="Call Center & BPOs"></div>
                        <div class="connector"></div>
                        <div class="label"><div class="year">06</div><div class="gen-name">Call Center & BPOs</div></div>
                    </div>
                </div>

                <a href="solutions.php" class="cta-button" id="explore-btn">
                    <span>Explore our solutions</span><i>&rarr;</i>
                </a>
            </div>
        </div>
    </div>

    <div class="spacer">↑ Content Below ↑</div>

    <script src="https://cdnjs.cloudflare.com/ajax/libs/gsap/3.12.5/gsap.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/gsap/3.12.5/ScrollTrigger.min.js"></script>

    <script>
    gsap.registerPlugin(ScrollTrigger);

    let ctx;

    function buildAnimation() {
        if (ctx) ctx.revert();

        ctx = gsap.context(() => {
            const cards = gsap.utils.toArray('.card');
            const card1 = cards[0];
            const otherCards = cards.slice(1);
            const connectors = gsap.utils.toArray('.connector');
            const labels = gsap.utils.toArray('.label');
            const cta = document.getElementById('explore-btn');

            const vw = window.innerWidth;
            const vh = window.innerHeight;

            // 1. Snapshot layout to find the distance from each card to the viewport center
            const snap = cards.map(card => {
                const r = card.getBoundingClientRect();
                return {
                    xToCenter: (vw / 2) - (r.left + r.width / 2),
                    yToCenter: (vh / 2) - (r.top + r.height / 2),
                    width: r.width,
                    height: r.height
                };
            });

            // Calculate Full Screen Cover Scale for Card 1
            const coverScale = Math.max(vw / snap[0].width, vh / snap[0].height) * 1.05;

            // Hide Text
            gsap.set([connectors, labels, cta], { opacity: 0, y: 20 });

            // ── INITIAL STATE ──

            // Card 1: Full Screen
            gsap.set(card1, {
                x: snap[0].xToCenter,
                y: snap[0].yToCenter,
                scale: coverScale,
                borderRadius: '0px',
                zIndex: 10,
                transformOrigin: '50% 50%'
            });

            // Cards 2-6: Form a hidden "Deck" behind Card 1 in the center
            otherCards.forEach((card, index) => {
                // By adding a small offset (index * 6) and shrinking scale, we make it look like a deck!
                const deckOffsetX = (index + 1) * 6; 
                const deckOffsetY = (index + 1) * 4;
                const deckScale   = 1 - ((index + 1) * 0.03); 

                gsap.set(card, {
                    x: snap[index + 1].xToCenter + deckOffsetX, 
                    y: snap[index + 1].yToCenter + deckOffsetY,
                    scale: deckScale,
                    opacity: 0, // Hidden until Card 1 shrinks
                    zIndex: 9 - index, // Properly layered behind Card 1
                    transformOrigin: '50% 50%'
                });
            });

            // ── TIMELINE ──
            const tl = gsap.timeline({
                scrollTrigger: {
                    trigger: '.scroll-driver',
                    start: 'top top',
                    end: 'bottom bottom',
                    scrub: 1.5,
                }
            });

            // PHASE 1: Card 1 shrinks to the center
            tl.to(card1, {
                scale: 1,
                borderRadius: '20px',
                ease: "none",
                duration: 0.35
            }, 0);

            // PHASE 2: The "Deck" becomes instantly visible right as Card 1 finishes shrinking
            tl.set(otherCards, { opacity: 1 }, 0.35);

            // PHASE 3: ALL CARDS spread from the central deck to their natural row positions
            tl.to(cards, {
                x: 0,            // 0 = The card's natural position in the HTML grid
                y: 0,            // 0 = Natural Y position
                scale: 1,        // Restores the deck cards back to 100% size
                ease: "power2.out",
                duration: 0.45
            }, 0.35); // Start separating at the exact moment the deck becomes visible

            // PHASE 4: Fade in Text and Button
            tl.to(connectors, { opacity: 1, y: 0, stagger: 0.05, duration: 0.1, ease: "power1.out" }, 0.80)
              .to(labels, { opacity: 1, y: 0, stagger: 0.05, duration: 0.1, ease: "power1.out" }, 0.85)
              .to(cta, { opacity: 1, y: 0, duration: 0.1, ease: "power1.out" }, 0.90);
        });
    }

    window.addEventListener('load', buildAnimation);
    
    let resizeTimer;
    window.addEventListener('resize', () => {
        clearTimeout(resizeTimer);
        resizeTimer = setTimeout(buildAnimation, 250);
    });
    </script>
</body>
</html>
