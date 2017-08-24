<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <title></title>
        <style type="text/css">
        body{
            font-family:"Microsoft Yahei";
            
            background-image:url("../../data/img/13.png");
        }
        .contain{
            
            width:900px;
            margin:100px auto;
        }
        .sign{
            border:2px dashed rgb(200,200,200);
           
          /*  background-color:rgb(135,230,198);*/
       
        }
        .msg2{
            color:#ff3333;
            background-color:#ffcc99;
            height:10px;
            border:solid 1px gray;
            line-height:18px;
            font-size:12px;
            padding:5px 10px;
        }
        .msg{
            height:18px;
            position:relative;
            top:6px;
            background-color:#f8f7f7;
        }
        .list dd{
            margin-left:195px;
            margin-top:-50px;
        }
        .submit{

            margin-top:20px;
            font-size:20px;
        }
        .reset{
            margin-left:100px;
            margin-top:20px;
            font-size:20px;
        }
        .list dt{
            font-size:40px;
        }
        .list input{
            background-color:rgb(240,240,240);
            font-size:25px;
            outline:medium;
            border:none;
            width:400px;
            height:50px;
            border-bottom:1px solid rgb(200,200,200);
            margin-left:15px;
            border-radius:5px;
        }

        legend{
            font-size:25px;

        }
        .queren{
            cursor:pointer;
            border:none;
            outline:medium;
            width:200px;
            height:40px;
            margin:0 auto;
            margin-left:40%;
            margin-top:50px;
            background-color:rgb(15,100,255);
            font-size:25px;
            border-radius:5px;
            margin-top:50px;
            color:rgb(255,255,255);
            font-weight:550;

        }
        .list{
            margin-top:50px;
        }
        </style>
    </head>
    <body>
        <div class="contain">
            <fieldset class="sign">
                <legend>管理员登录</legend>
                <form action="../success/success.html" method="post" class="form" onsubmit="return checkForm()">
                    <dl class="list">
                        <dt>username:</dt>
                        <dd>
                            <input type="text" name="name" value="" placeholder="请输入管理员账号" id="email" onfocus="onfocusEmail()" onblur="onblurEmail()">
                            <span class="" id="s-email"></span>
                        </dd>
                    </dl>
                    <dl class="list">
                        <dt>password:</dt>
                        <dd>
                            <input type="password" value="" placeholder="请输入管理员密码" name="password" id="pwd" onfocus="onfocusPwd()" onblur="onblurPwd()">
                            <span class="" id="s-pwd"></span>
                        </dd>
                    </dl>
                    <input class="queren" type="submit" value="登&nbsp;&nbsp;&nbsp;录">
                </form>
            </fieldset>
        </div>
    <script type="text/javascript">
        
        function $(id){
            return document.getElementById(id);
        }
        function checkForm(){
            if(!onblurEmail()){
                return false;
            }else if(!onblurPwd()){
                return false;
            }else if(!check()){
                return false;
            }else{
                return true;
            }
            
        }
        function check(){
            var email = $("email");
            var pwd = $("pwd");

            if(email.value == "admin" && pwd.value == "wangjia"){
                return true;
            }else{
                alert("管理员账号或密码错误");
                return false;
            }
        }  




        function onfocusEmail(){
            var email = $("email");
            var span = $("s-email");
            span.innerHTML = "请输入你的账号！";
            span.className = "msg2";
        }
        function onblurEmail(){
            var email = $("email");
            var span = $("s-email");
            if(email.value == ""){
                span.innerHTML = "账号不能为空！";
                span.className = "msg2";
                return false;
            }else{
                span.style.display = "none";
                return true;
            }
        }
        


        function onfocusPwd(){
            var pwd = $("pwd");
            var span = $("s-pwd");
            span.innerHTML = "请输入你的密码！";
            span.className = "msg2";
        }
        function onblurPwd(){
            var pwd = $("pwd");
            var span = $("s-pwd");
            if(pwd.value == ""){
                span.innerHTML = "密码不能为空！";
                span.className = "msg2";
                return false;
            }else{
                span.style.display = "none";
                return true;
            }
        }


        

    

     </script>
    </body>
</html>