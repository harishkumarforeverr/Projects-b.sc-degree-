
// explain to sir, how i used these thecniques for hacking(10th friends account hack story)
var express = require('express');
var fs = require('fs');
var app = express();
app.get("/", (req, res) => {
  fs.readFile('./mahesh goud.vcf', 'utf-8', (err, data) => {
    if (err) {
      console.log('runtime error ', err);
    } else {
      res.send(data);
      res.end();
    }
  });
}).listen(9000);
console.log("server started at 9000");