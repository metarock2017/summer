<?php

    require('../myConnect/connect.php');

    header("Content-Type:text/xml;charset=utf-8");
    header("Cache-control:no-cache");
    //这个控制器用于响应用户取数据的请求
    $getter = $_POST['getter'];
    $sender = $_POST['sender'];

    $sql = "select * from message where getter = '$getter' and sender = '$sender' and isGet = 0";

    $res = mysql_query($sql);
    
    while($row = mysql_fetch_assoc($res)){
        $rows[] = $row;
    }

    //把$res关闭
    //mysql_free_result($res);

    //拼接xml串
    $messageInfo = "<meses>";
    for($i = 0;$i < count($rows);$i++){
    	$rowl = $rows[$i];
    	$messageInfo.="<mesid>{$rowl['id']}</mesid><sender>{$rowl['sender']}</sender><getter>{$rowl['getter']}</getter><con>{$rowl['content']}</con><sendTime>{$rowl['sendTime']}</sendTime>";
    }
    $messageInfo.="</meses>";

    echo $messageInfo;

    $sql = "update message set isGet = 1 where getter = '$getter' and sender = '$sender'";

    $res = mysql_query($sql);




    

    //file_put_contents("d:/mylog.log",$messageInfo."\r\n",FILE_APPEND);