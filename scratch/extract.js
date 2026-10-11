const fs = require('fs');

// Read JSON
const productsJson = JSON.parse(fs.readFileSync('./src/data/products.json', 'utf8'));

// Extract productData.ts by executing it as a CommonJS module
const productDataScript = fs.readFileSync('./src/data/productData.ts', 'utf8')
    .replace('export const products =', 'module.exports =')
    .replace('export interface Product {', '/*')
    .replace('};', '}; */');
// wait, it's easier to just use regex or extract the object.
