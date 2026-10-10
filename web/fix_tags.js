const fs = require('fs');
let c = fs.readFileSync('src/app/page.tsx', 'utf8');
c = c.replace("</div>\n</div>\n{/* JavaScript", "{/* JavaScript");
fs.writeFileSync('src/app/page.tsx', c);
