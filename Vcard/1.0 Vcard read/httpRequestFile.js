// explain to sir, how i used these thecniques for hacking(10th friends account hack story)
const http = require('http');
const fs = require('fs');
http.createServer((req, res) => {
    fs.readFile('./mahesh goud.vcf','utf-8', (err, data) => {
        if (err) throw err;    
        console.log(data);
        res.write(data);
        res.end();
      });   
}).listen(3000);
console.log("server started at : 3000");