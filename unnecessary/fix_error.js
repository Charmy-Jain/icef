const fs = require('fs');

try {
    const hrOnePage = fs.readFileSync('c:\\xampp\\htdocs\\icefindia\\hr-consulting-one-page.php', 'utf8');
    const hrFile = fs.readFileSync('c:\\xampp\\htdocs\\icefindia\\hr-consulting.php', 'utf8');
    const careersFile = fs.readFileSync('c:\\xampp\\htdocs\\icefindia\\careers-culture.php', 'utf8');

    const onePageLines = hrOnePage.split('\n');
    let hrLines = hrFile.split('\n');
    let careersLines = careersFile.split('\n');

    // Extract rich block from hr-consulting-one-page.php
    let richStart = onePageLines.findIndex(l => l.includes('<!-- value area start -->'));
    let richEnd = onePageLines.findIndex((l, i) => i > richStart && l.includes('<!-- feature area end -->'));
    const richBlock = onePageLines.slice(richStart, richEnd + 1);

    // Revert hr-consulting.php
    let hrStartIdx = hrLines.findIndex(l => l.includes('<!-- value area start -->'));
    let hrEndIdx = hrLines.findIndex((l, i) => i > hrStartIdx && l.includes('<!-- feature area end -->'));
    
    if (hrStartIdx !== -1 && hrEndIdx !== -1) {
        hrLines = [
            ...hrLines.slice(0, hrStartIdx),
            ...richBlock,
            ...hrLines.slice(hrEndIdx + 1)
        ];
        fs.writeFileSync('c:\\xampp\\htdocs\\icefindia\\hr-consulting.php', hrLines.join('\n'), 'utf8');
        console.log('Restored hr-consulting.php successfully.');
    }

    // Update careers-culture.php
    let careersStartIdx = careersLines.findIndex(l => l.includes('<!-- Section 2: Company Values -->'));
    let careersEndIdx = careersLines.findIndex((l, i) => i > careersStartIdx && l.includes('<!-- Section 3: Our Guiding Principles & Chart -->'));
    
    if (careersStartIdx !== -1 && careersEndIdx !== -1) {
        // We will insert after '<!-- Section 2: Company Values -->' 
        // We remove everything up to just before '<!-- Section 3: ... -->'
        careersLines = [
            ...careersLines.slice(0, careersStartIdx),
            '        <!-- Section 2: Company Values -->',
            ...richBlock,
            '',
            ...careersLines.slice(careersEndIdx)
        ];
        fs.writeFileSync('c:\\xampp\\htdocs\\icefindia\\careers-culture.php', careersLines.join('\n'), 'utf8');
        console.log('Updated careers-culture.php successfully.');
    } else {
        console.log('Could not find boundaries in careers-culture.php');
    }

} catch (e) {
    console.error('Error during execution:', e);
}
