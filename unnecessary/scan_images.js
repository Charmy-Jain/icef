const fs = require('fs');
const path = require('path');

const files = [
    'support.php',
    'why-choose-us.php',
    'solutions.php',
    'articles.php',
    'case-study.php',
    'about-mission.php',
    'industry-clients.php',
    'awards.php',
    'careers-culture.php'
];

const imageRegex = /(?:src|data-background|data-bg)=["'](assets\/images\/[^"']+)["']/g;

const allImages = {};

files.forEach(file => {
    try {
        const content = fs.readFileSync(file, 'utf8');
        let match;
        allImages[file] = new Set();
        while ((match = imageRegex.exec(content)) !== null) {
            allImages[file].add(match[1]);
        }
    } catch (e) {
        console.error(`Error reading ${file}: ${e.message}`);
    }
});

Object.keys(allImages).forEach(file => {
    console.log(`--- ${file} ---`);
    allImages[file].forEach(img => console.log(img));
});
