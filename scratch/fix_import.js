const fs = require('fs');
let c = fs.readFileSync('./src/app/page.tsx', 'utf8');
const batteryStart = c.indexOf('const batteryData = {');
if (batteryStart !== -1) {
    const batteryEnd = c.indexOf('};', batteryStart) + 2;
    c = c.slice(0, batteryStart) + c.slice(batteryEnd);
}
c = c.replace('import { specDetails } from "../data/specData";', 'import { specDetails } from "../data/specData";\nimport { batteryData } from "../data/batteryData";');
fs.writeFileSync('./src/app/page.tsx', c);
console.log('Cleaned and imported batteryData');
