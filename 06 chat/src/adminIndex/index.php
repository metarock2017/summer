<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <title></title>
        <link href="admin-index.css" rel="stylesheet" type="text/css">
        
    </head>
    <body>
        <div class="contain">
            <div class="nav">
                <span class="jjmanage" onclick="index()">后台管理</span>
                <span onclick="personal()" class="first">账号管理</span>
                <span onclick="text()" class="secend">聊天记录</span>
               
            </div>
            <div class="left">
                <ul>
                    <li>管理列表</li>
                    <li>管理首页</li>
                    <!-- <li>1.命运石之门</li>
                    <li>2.未闻花名</li>
                    <li>3.刀剑神域</li>
                    <li>4.</li>
                    <li>5.</li>
                    <li>6.</li>
                    <li>7.</li>
                    <li>8.</li>
                    <li>9.</li>
                    <li>10.</li>
                     -->
                    
                </ul>
            </div>
            <div class="right">
                <span>Hello,world!</span><br>
                <span>当前管理员： 王佳</span>
                
            </div>
            
        </div>
    <script type="text/javascript">
        function index(){
            window.location.href = "../adminIndex/index.php";
        }
        function personal(){
            window.location.href = "../adminPerson/personal.php";
        }
        function text(){
            window.location.href = "../adminText/text.php";
        }
    </script>
    </body>
</html>