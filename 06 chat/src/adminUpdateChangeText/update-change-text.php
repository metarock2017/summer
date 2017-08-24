<?php

require('../myConnect/connect.php');

header("content-type:text/html;charset=utf-8");
$id = $_POST['id'];
$sender = $_POST['title'];
$getter = $_POST['topic'];
$sendTime = $_POST['image'];
$content = $_POST['text'];

$sql = "update message set sender='{$sender}',getter='{$getter}',sendTime='{$sendTime}',content='{$content}' where id='{$id}'";



$res = mysql_query($sql);

if(!$res){
	echo "<script>alert('修改失败！');
	</script>";
	
}else{
	echo "<script>alert('恭喜你,修改成功！');
	window.location.href='../adminText/text.php';</script>";
}
?>