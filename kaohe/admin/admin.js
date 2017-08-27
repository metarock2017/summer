var http = require('http');
var mysql =  require('mysql');

http.createServer(function(req,res) {
	res.writeHead(200, {'Content-Type':'text/html'});
	res.write("我们已经有服务了");
	res.end("我们已经有服务了");

}).listen(50717);

var connection = mysql.createConnection({
    host : '172.0.0.1',
    user : 'root',
    password: '',
    port: '50717',
    database: 'forecast'
});


connection.connect(function(err) {
	if(err) {
		console.log('[query] - :' + err);
		return;
	}
	console.log('[connection connect] succeed!')
});

connection.connect();

connection.query('use'+forecast);

connection.query('select * from'+data,function(error,results,fields){
    if(error){
    	throw error;
    }
    if(results) {
    	for(var i = 0;i < results.length;i++){
    		console.log('%d %d %d %s',id[i],max_temp[i],min_temp[i],weather[i]);
    	}
    }
});














