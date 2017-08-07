
function count(){
    
    var arr = [];
    for(var i = 0;i < 100000;i++){
    	arr.push(Math.floor(Math.random()*10000)) ;
    }

	postMessage('交换前的数组' +"&nbsp&nbsp&nbsp&nbsp&nbsp"+ arr);
    var length = arr.length;
    for(var i = 0; i < length - 1;i++){
        var max_i = i;
        for(var j = i+1;j < length;j++){
    	    if(arr[max_i] < arr[j]){
                max_i = j;
    	    }
        }
        if(max_i != i){
    	    var temp = 0;
    	    temp = arr[max_i];
    	    arr[max_i] = arr[i];
    	    arr[i] = temp;
        }
    }
    postMessage('交换后的数组' +"&nbsp&nbsp&nbsp&nbsp&nbsp"+arr);
}

var i = new Date();

postMessage('交换前的时间' +"&nbsp&nbsp&nbsp&nbsp&nbsp"+ i.toLocaleString());

count();

var j = new Date();

postMessage('交换后的时间' +"&nbsp&nbsp&nbsp&nbsp&nbsp"+ j.toLocaleString());

postMessage('交换花费的秒' +"&nbsp&nbsp&nbsp&nbsp&nbsp"+ (j-i) / 3600);
