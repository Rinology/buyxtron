const fs = require('fs');
let c = fs.readFileSync('./src/app/page.tsx', 'utf8');
c = c.replace("getElementById('pricing-section')", "getElementById('pricing')");
fs.writeFileSync('./src/app/page.tsx', c);
console.log('Fixed getElementById');
