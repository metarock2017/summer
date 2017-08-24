//创建ajax引擎
    function getXmlHttpobject(){
        
        var xmlHttpRequest;
        //不同的浏览器获取对象xmlhttprequest 对象方法不一样
        if(window.ActiveXobject){
            
            xmlHttpRequest = new ActiveXobject("Microsoft.XMLHTTP")	;
        
        }else{
            
            xmlHttpRequest = new XMLHttpRequest(); 
        
        }
        
        return xmlHttpRequest;
   }

   function $(id){
   	    return document.getElementById(id);
   }