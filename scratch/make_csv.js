const fs = require('fs');

const productsJsonStr = fs.readFileSync('./src/data/products.json', 'utf8');
const productsJson = JSON.parse(productsJsonStr);

const pdContent = fs.readFileSync('./src/data/productData.ts', 'utf8');
const objStr = pdContent.substring(pdContent.indexOf('export const products = ') + 'export const products = '.length, pdContent.lastIndexOf('};') + 1);
const pdObj = eval('(' + objStr + ')');

let csv = "id,name,category,basePrice,hasMega,megaPrice,originalPrice,desc,tag,imgSrc,url,colors,isSoldOut,isPreOrder,ratingValue,reviewCount\n";

const allProducts = [];

for (const cat in pdObj) {
    const list = pdObj[cat];
    list.forEach((p, idx) => {
        let nameMatch = p.name.replace(/<[^>]*>?/gm, '').trim();
        if (nameMatch.includes('MEGA')) nameMatch = '엑스트론 프로 팻 리미티드 에디션 MEGA'; // simplifications
        else if (nameMatch.includes('20Ah+20Ah')) nameMatch = '엑스트론 프로 팻 리미티드 에디션 듀얼';
        
        let id = cat + '-' + idx;
        if (p.name.includes('프로 S')) id = 'pro-s';
        else if (p.name.includes('프로미니')) id = 'pro-mini';
        else if (p.name.includes('프로 팻')) id = 'pro-fat-' + idx;
        else if (p.name === '엑스트론 프로') id = 'pro-basic';
        else if (p.name.includes('GT S')) id = 'gt-s';
        else if (p.name === '엑스트론 GT') id = 'gt-basic';
        else if (p.name.includes('시티')) id = 'city';
        else if (p.name.includes('투어')) id = 'tour';
        else if (p.isAcc) id = 'acc-' + idx;

        const jsonMatch = productsJson.find(j => j.name.replace(/\s/g, '') === nameMatch.replace(/\s/g, ''));
        
        const rating = jsonMatch ? jsonMatch.ratingValue : '';
        const reviews = jsonMatch ? jsonMatch.reviewCount : '';

        // escape desc
        let desc = p.desc || '';
        if (desc.includes(',') || desc.includes('"') || desc.includes('\n')) {
            desc = `"${desc.replace(/"/g, '""')}"`;
        }

        const colors = p.colors ? p.colors.join('|') : '';
        
        // fields: id,name,category,basePrice,hasMega,megaPrice,originalPrice,desc,tag,imgSrc,url,colors,isSoldOut,isPreOrder,ratingValue,reviewCount
        csv += `${id},"${p.name.replace(/"/g, '""')}","${cat}",${p.basePrice || ''},${p.hasMega ? 'TRUE' : 'FALSE'},${p.megaPrice || ''},${p.originalPrice || ''},${desc},${p.tag || ''},${p.imgSrc || ''},${p.url || ''},${colors},${p.isSoldOut ? 'TRUE' : 'FALSE'},${p.isPreOrder ? 'TRUE' : 'FALSE'},${rating},${reviews}\n`;
    });
}

fs.writeFileSync('./scratch/full_products.csv', csv);
console.log('CSV generated');
