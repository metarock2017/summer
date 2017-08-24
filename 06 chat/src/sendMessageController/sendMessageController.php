<?php

    require('../myConnect/connect.php');

    header("content-type:text/html;charset=utf-8");
    //控制器
     $sender = $_POST['sender'];
     $getter = $_POST['getter'];
     $con = $_POST['con'];
     $addtime = date("Y-m-d H:i:s");

      $sql = "insert into message (sender,getter,content,sendTime) values('$sender','$getter','$con','$addtime')";
       
       $res = mysql_query($sql);

    if(!$res){
	    echo "<script>alert('删除失败！');
	    window.location.href='../sendMessageController/sendMessageController.php';</script>";
	}


    //把信息输出到一个文件
    //file_put_contents("d:/mylog.log",$sender."_".$getter."_".$con."_".$addtime."\r\n",FILE_APPEND);



?>












 