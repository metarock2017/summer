<?php

require('../myConnect/connect.php');

header("content-type:text/html;charset=utf-8");

$sql = "select * from denglu";

$res = mysql_query($sql);

while($row = mysql_fetch_assoc($res)){
    $rows[] = $row;
}

?>


<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <title></title>
        <link type="text/css" rel="stylesheet" href="friendList.css">
     </head>
    <?php
        session_start();
        $loginuser = $_SESSION['loginuser'];
    ?>
    <body>
    <div class="big">
        <div class="left">
            <div class="left-top">
                千行聊天,你我更亲近
            </div>


            <div class="motto">
                种一棵树最好的时间是十年前,其次是现在。
            </div>
            
        </div>
        
        <div class="contain">
            <div class="top">
                当前用户：<?php echo $loginuser; ?>
            </div>



            <div class="secend">
                好友列表
            </div>

            <div class="third">
                <ul>
                    <?php foreach($rows as $k=>$v):?>
                        <?php 
                            if($v['name'] == $loginuser){
                                continue;
                            }
                         ?>
                        <li onmouseover="change1('over',this)" onmouseout="change1('out',this)" onclick="openChatRoom(this)"><?php echo $v['name'] ?></li>
                    <?php endforeach;?>
                </ul>
            </div>
            
            <div class="bottem">简约风格</div>
            
        </div>
    </div>



    </body>
    
    <script type="text/javascript">
    
    function change1(val,obj){
        if(val == 'over'){
            obj.style.color = "red";
            obj.style.cursor = "pointer";
        }else if(val == 'out'){
            obj.style.color = "white";
        }
    }

    function openChatRoom(obj){
        //打开新窗口
        //编一下码  防止乱码
        window.open("../chatroom/chatroom.php?username="+encodeURI(obj.innerText),"_blank",'width=800,height=500,top=60,left=380');
    }

    
    </script>

</html>