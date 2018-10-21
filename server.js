var express = require('express');
var app = express();

app.use('/css', express.static(__dirname + "/css"));
app.use('/img', express.static(__dirname + "/img"));
app.use('/js', express.static(__dirname + "/js"));


app.get('/', function(req, res){
    res.sendfile('index.html');
});

app.get('/prenota', function(req, res){
    res.sendfile('prenota.html');
});

app.get('/prenota.html', function(req, res){
    res.sendfile('prenota.html');
});


app.get('/conferma', function(req, res){
    res.sendfile('conferma.html');
});

app.get('/prenota.html', function(req, res){
    res.sendfile('prenota.html');
});


app.get('/favicon.ico', function(req, res){
    res.sendfile('favicon.ico');
});

app.get('/apple-touch-icon.png', function(req, res){
    res.sendfile('apple-touch-icon.png');
});

app.get('/todo.html', function(req, res){
    res.sendfile('todo.html');
});


app.use(function(req, res, next){
    res.status(404).sendfile('404.html');
});


app.listen('3001', function(){
  console.log("Server online sulla porta 3001");
});