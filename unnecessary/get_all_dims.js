const fs = require('fs');
const path = require('path');

const images = [
    'assets/images/bg/breadcrumb-bg-thumb-01.webp',
    'assets/images/about/about-thumb-05.webp',
    'assets/images/bg/counter-bg-thumb-03.webp',
    'assets/images/shape/multi-line-shape.webp',
    'assets/images/services/services-thumb-03.webp',
    'assets/images/services/services-thumb-04.webp',
    'assets/images/services/services-thumb-05.webp',
    'assets/images/services/services-thumb-06.webp',
    'assets/images/bg/feature-bg-thumb-02.webp',
    'assets/images/feature/feature-thumb-01.webp',
    'assets/images/feature/feature-thumb-02.webp',
    'assets/images/feature/feature-thumb-03.webp',
    'assets/images/feature/feature-thumb-04.webp',
    'assets/images/blog/blog-thumb-01.webp',
    'assets/images/blog/blog-thumb-02.webp',
    'assets/images/blog/blog-thumb-03.webp',
    'assets/images/blog/blog-thumb-04.webp',
    'assets/images/bg/testimonial-bg-thumb-01.webp',
    'assets/images/testimonial/testimonial-thumb-01.webp',
    'assets/images/feature/feature-thumb-05.webp',
    'assets/images/feature/feature-thumb-06.webp',
    'assets/images/feature/feature-thumb-07.webp',
    'assets/images/feature/feature-thumb-08.webp',
    'assets/images/feature/feature-thumb-09.webp',
    'assets/images/feature/feature-thumb-10.webp',
    'assets/images/faq/faq-thumb-01.webp',
    'assets/images/shape/award-shape.webp',
    'assets/images/testimonial/testimonial-thumb-02.webp',
    'assets/images/user/user-thumb-03.webp',
    'assets/images/user/user-thumb-01.webp',
    'assets/images/user/user-thumb-02.webp',
    'assets/images/shape/cta-shape-01.webp',
    'assets/images/shape/squre-shape.webp',
    'assets/images/cta/cta-thumb-01.webp',
    'assets/images/shape/half-rotate-shape.webp',
    'assets/images/favicon.webp',
    'assets/images/bg/testimonial-bg-thumb-02.webp',
    'assets/images/brand/brand-thumb-01.webp',
    'assets/images/brand/brand-thumb-02.webp',
    'assets/images/brand/brand-thumb-03.webp',
    'assets/images/brand/brand-thumb-04.webp',
    'assets/images/brand/brand-thumb-05.webp',
    'assets/images/brand/brand-thumb-06.webp',
    'assets/images/shape/half-house-shape.webp',
    'assets/images/shape/group-triangle-shape.webp',
    'assets/images/banner/banner-thumb-02.webp',
    'assets/images/feature/feature-thumb-11.webp',
    'assets/images/bg/feature-bg-thumb-05.webp',
    'assets/images/about/about-thumb-06.webp',
    'assets/images/shape/half-rotate-shape-white-02.webp',
    'assets/images/bg/work-bg-thumb-01.webp',
    'assets/images/work/working-thumb-04.webp',
    'assets/images/services/services-thumb-10.webp',
    'assets/images/services/services-thumb-11.webp',
    'assets/images/services/services-thumb-12.webp',
    'assets/images/services/services-thumb-14.webp',
    'assets/images/services/services-thumb-15.webp',
    'assets/images/services/services-thumb-16.webp',
    'assets/images/services/services-thumb-17.webp',
    'assets/images/services/services-thumb-18.webp',
    'assets/images/services/services-thumb-19.webp',
    'assets/images/services/services-thumb-20.webp',
    'assets/images/services/services-thumb-21.webp',
    'assets/images/services/services-thumb-22.webp',
    'assets/images/contact/contact-thumb-09.webp',
    'assets/images/contact/contact-thumb-06.webp',
    'assets/images/contact/contact-thumb-02.webp',
    'assets/images/portfolio/portfolio-thumb-21.webp',
    'assets/images/portfolio/portfolio-thumb-17.webp',
    'assets/images/portfolio/portfolio-thumb-18.webp',
    'assets/images/portfolio/portfolio-thumb-19.webp',
    'assets/images/portfolio/portfolio-thumb-20.webp',
    'assets/images/portfolio/portfolio-thumb-16.webp',
    'assets/images/portfolio/portfolio-thumb-24.webp',
    'assets/images/portfolio/portfolio-thumb-23.webp',
    'assets/images/why-choose/why-choose-thumb-06.webp',
    'assets/images/video/video-thumb-01.webp',
    'assets/images/work/working-thumb-01.webp',
    'assets/images/blog/blog-thumb-05.webp',
    'assets/images/blog/blog-thumb-06.webp',
    'assets/images/about/about-thumb-01.webp',
    'assets/images/shape/services-shape-01.webp',
    'assets/images/bg/text-clip-bg-thumb-02.webp',
    'assets/images/skill/skill-thumb-02.webp',
    'assets/images/bg/feature-bg-thumb-01.webp',
    'assets/images/work/working-thumb-03.webp',
    'assets/images/shape/testimonial-shape-02.webp',
    'assets/images/testimonial/testimonial-thumb-03.webp',
    'assets/images/work/working-thumb-09.webp',
    'assets/images/bg/value-bg-thumb-01.webp'
];

async function getWebPDimensions(filePath) {
    try {
        const buffer = fs.readFileSync(filePath);
        const chunkTag = buffer.toString('ascii', 12, 16);
        if (chunkTag === 'VP8 ') {
            const width = buffer.readUInt16LE(26) & 0x3fff;
            const height = buffer.readUInt16LE(28) & 0x3fff;
            return { width, height };
        } else if (chunkTag === 'VP8L') {
            const val = buffer.readUInt32LE(21);
            const width = (val & 0x3fff) + 1;
            const height = ((val >> 14) & 0x3fff) + 1;
            return { width, height };
        } else if (chunkTag === 'VP8X') {
            const width = (buffer.readUIntLE(24, 3) & 0xffffff) + 1;
            const height = (buffer.readUIntLE(27, 3) & 0xffffff) + 1;
            return { width, height };
        }
    } catch (e) {
        return null;
    }
}

async function run() {
    console.log('--- Consolidation Data ---');
    for (const img of new Set(images)) {
        const fullPath = path.join(process.cwd(), img);
        if (fs.existsSync(fullPath)) {
            const dims = await getWebPDimensions(fullPath);
            if (dims) {
                console.log(`${img}: ${dims.width}x${dims.height}`);
            } else {
                console.log(`${img}: Dimensions unknown`);
            }
        } else {
            console.log(`${img}: File NOT found`);
        }
    }
}

run();
