const Papa = require('papaparse');
const fs = require('fs');
const https = require('https');

const url = 'https://docs.google.com/spreadsheets/d/e/2PACX-1vQSKPdPE-55vCpRxt6PMC-1LA2tNHIvJ-zfh_NPR-l3LMxcD17g_rwsjR6VVN3-aTyql6PwDQpqQv4J/pub?gid=0&single=true&output=csv';

https.get(url, (resp) => {
  let data = '';
  resp.on('data', (chunk) => {
    data += chunk;
  });
  resp.on('end', () => {
    const results = Papa.parse(data, { header: true, skipEmptyLines: true });
    console.log(results.data.slice(0, 3));
  });
}).on("error", (err) => {
  console.log("Error: " + err.message);
});
