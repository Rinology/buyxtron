const fs = require('fs');
let c = fs.readFileSync('./src/app/page.tsx', 'utf8');
c = c.replace(/<a([^>]+)href="javascript:void\(0\);"([^>]*)>/g, '<button type="button" $1 $2>');
c = c.replace(/<\/a>/g, (match, offset, str) => {
    // A bit hacky, let's just do a string replace for the specific block
    return match;
});

// more precise replacement
c = fs.readFileSync('./src/app/page.tsx', 'utf8');
c = c.split('\n').map(line => {
    if (line.includes('href="javascript:void(0);"')) {
        return line.replace('<a', '<button type="button"').replace('href="javascript:void(0);"', '');
    }
    if (line.includes('</a>') && line.includes('한정판 구매하기') || (line.includes('</a>') && c.split('\n')[c.split('\n').indexOf(line)-1] && c.split('\n')[c.split('\n').indexOf(line)-1].includes('한정판 구매하기'))) {
        return line.replace('</a>', '</button>');
    }
    return line;
}).join('\n');

// Wait, the `</a>` is on the next line.
c = fs.readFileSync('./src/app/page.tsx', 'utf8');
c = c.replace(/<a([^>]+)href="javascript:void\(0\);"([^>]*)>([\s\S]*?)<\/a>/g, '<button type="button" $1 $2>$3</button>');
fs.writeFileSync('./src/app/page.tsx', c);
console.log('Fixed javascript:void(0)');
