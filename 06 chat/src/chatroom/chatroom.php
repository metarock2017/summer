<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <title></title>
        <style type="text/css">
        #con{
            width:400px;
            outline:none;
            height:30px;
            font-size:25px;
        }
        body{
            background-color:rgb(136,232,204);
        }
        #mycons{
            background-color:rgb(136,232,204);
        }
        .wenzhi{
            cursor:pointer;
            display:block;
            width:150px;
            height:45px;
            background-color:#0f88eb;
            border-radius:4px;
            text-align:center;
            line-height:45px;
            border:none;
            color:#ffffff;
            font-size:20px;
            font-weight:550;
            margin-top:20px;
        }
        </style>
        
    </head>
    <?php
        $username = $_GET['username'];
        session_start();
        $loginuser = $_SESSION['loginuser'];

    ?>
    
    

    
    <center>
        <h1>聊天室(<span style="color:red"><?php echo $loginuser; ?></span>正在和<span style="color:red"><?php echo $username; ?></span>聊天)</h1>
        <textarea cols="80" rows="20" id="mycons"></textarea><br>
        <input type="text" id="con"><br>
        
        <input type="submit" class="wenzhi" value="发送消息" onclick="sendMessage()">

        
    
    </center>
    
    <script type="text/javascript" src="../myjs/my.js"></script>
    <script type="text/javascript">
        var day = new Date();
        var myday = "2" + ("0"+(day.getYear() - 100).toString())+"-"+("0"+(day.getMonth()+1).toString())+
            "-"+day.getDate()+" "+day.getHours()+":"+day.getMinutes()+":"+day.getSeconds();
        
        function sendMessage(){
            
            //创建一个xmlHttpRequest对象
            var myXmlHttpRequest=getXmlHttpobject();
            if(myXmlHttpRequest){
                
                var url = "../sendMessageController/sendMessageController.php";

                var data="con=" + $('con').value + "&getter=<?php echo $username ?>&sender=<?php echo $loginuser ?>";
                //window.alert(data);
                //打开请求
                myXmlHttpRequest.open("post",url,true);
                myXmlHttpRequest.setRequestHeader("Content-Type","application/x-www-form-urlencoded");
                myXmlHttpRequest.onreadystatechange = function(){
                    if(myXmlHttpRequest.readyState == 4){
                        if(myXmlHttpRequest.status == 200){
                     
                        }
                    }
                }
                myXmlHttpRequest.send(data);
                //把你的话显示到聊天框
                $("mycons").innerHTML += myday + " "+"你对 <?php echo $username ?>说:" + $('con').value + "\r\n";
                $("con").value = "";

            }
        }

        window.setInterval("getMessage()",5000);
        
        function getMessage(){
            var myXmlHttpRequest=getXmlHttpobject();
            if(myXmlHttpRequest){
                var url = "../getMessageController/getMessageController.php";

                var data = "getter=<?php echo $loginuser; ?>&sender=<?php echo $username; ?>";
                myXmlHttpRequest.open("post",url,true);
                myXmlHttpRequest.setRequestHeader("Content-Type","application/x-www-form-urlencoded");
                //指定处理函数
                myXmlHttpRequest.onreadystatechange = function(){
                    if(myXmlHttpRequest.readyState == 4){
                        if(myXmlHttpRequest.status == 200){
                            //接收结果
                            var mesRes = myXmlHttpRequest.responseXML;
                            //第一步取出content和sendTime
                            var cons = mesRes.getElementsByTagName("con");
                            var sendTimes = mesRes.getElementsByTagName("sendTime");
                            //window.alert(cons.length);
                            if(cons.length){
                                //有多少条记录 显示多少条看记录
                                for(var i = 0;i < cons.length;i++){
                                    //拼接字符串
                                    var str =sendTimes[i].childNodes[0].nodeValue+" "+ "<?php echo $username; ?> 对你说:" 
                                     + cons[i].childNodes[0].nodeValue +" "+"\r\n";
                                    //将拼接的字符串写入文本域
                                    $('mycons').innerHTML += str;
                                }
                            }
                        }
                    }
                }
                myXmlHttpRequest.send(data);
            }
        }
    </script>
</html>