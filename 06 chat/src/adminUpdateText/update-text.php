<?php

require('../myConnect/connect.php');

$id = $_GET['id'];
header("content-type:text/html;charset=utf-8");

$sql = "select * from message where id='{$id}'";

$res = mysql_query($sql);

$row = mysql_fetch_assoc($res);

?>


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

            width:1100px;
            margin:100px auto;
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
        .sign{
            border:2px dashed rgb(200,200,200);
        }
        .list input{
            background-color:rgb(240,240,240);
            font-size:25px;
            outline:medium;
            border:none;
            width:400px;
            height:50px;
            border-radius:5px;
            border-bottom:1px solid rgb(200,200,200);
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
            background-color:blue;
            font-size:25px;
            border-radius:5px;
        }
        .text{
            border:none;
            font-size:20px;
            color:#b3b3b3;
            overflow-x:hidden;
            overflow-y:hidden;
            outline:medium;
        }
        </style>
    </head>
    <body>
        <div class="contain">
            <fieldset class="sign">
                <legend>修改聊天记录</legend>
                <form action="../adminUpdateChangeText/update-change-text.php" method="post" class="form" onsubmit="return checkForm()">
                    <dl class="list">
                        <dt>发送人:</dt>
                        <dd>
                            <input type="text" name="title" value="<?php echo $row['sender']?>" id="email" onfocus="onfocusEmail()" onblur="onblurEmail()">
                            <span class="" id="s-email"></span>
                        </dd>
                    </dl>
                    <dl class="list">
                        <dt>接收人:</dt>
                        <dd>
                            <input type="text" name="topic" value="<?php echo $row['getter']?>" id="name" onfocus="onfocusName()" onblur="onblurName()">
                            <span class="" id="s-name"></span>
                        </dd>
                    </dl>
                    <dl class="list">
                        <dt>发送时间:</dt>
                        <dd>
                            <input name="image" type="text" value="<?php echo $row['sendTime']?>" id="pwd" onfocus="onfocusPwd()" onblur="onblurPwd()">
                            <span class="" id="s-pwd"></span>
                        </dd>
                    </dl>
                    <dl class="list">
                        <dt>聊天内容:</dt><br>
                        <dd>
                            <input class="text" name="text" style="width:730px;height:80px;" value="<?php echo $row['content']?>" id="textarea" onfocus="onfocusTextarea()" onblur="onblurTextarea()">
                                
                            </input>
                            <span class="" id="s-textarea"></span>
                        </dd>
                    </dl>
                    <input type="hidden" name="id" value="<?php echo $row['id']?>" >
                    <input class="queren" type="submit" value="确认修改">
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
            }else if(!onblurName()){
                return false;
            }else if(!onblurPwd()){
                return false;
            }else{
                return true;
            }
            
        }

        
        function onfocusEmail(){
            var email = $("email");
            var span = $("s-email");
            span.innerHTML = "请修改发送者！";
            span.className = "msg2";
        }
        function onblurEmail(){
            var email = $("email");
            var span = $("s-email");
            if(email.value == ""){
                span.innerHTML = "发送人不能为空！";
                span.className = "msg2";
                return false;
            }else{
                span.innerHTML = "<img src='../../data/img/true.png'>";
                span.className = "msg";
                return true;
            }
        }
        
        function onfocusName(){
            var email = $("name");
            var span = $("s-name");
            span.innerHTML = "请修改接收者！";
            span.className = "msg2";
        }
        function onblurName(){
            var name = $("name");
            var span = $("s-name");
            if(name.value == ""){
                span.innerHTML = "接收人不能为空！";
                span.className = "msg2";
                return false;
            }else{
                span.innerHTML = "<img src='../../data/img/true.png'>";
                span.className = "msg";
                return true;
            }
        }

        function onfocusPwd(){
            var pwd = $("pwd");
            var span = $("s-pwd");
            span.innerHTML = "请修改发送时间！";
            span.className = "msg2";
        }
        function onblurPwd(){
            var pwd = $("pwd");
            var span = $("s-pwd");
            if(pwd.value == ""){
                span.innerHTML = "发送时间不能为空！";
                span.className = "msg2";
                return false;
            }else{
                span.innerHTML = "<img src='../../data/img/true.png'>";
                span.className = "msg";
                return true;
            }
        }

        
        
        

    

     </script>
    </body>
</html>