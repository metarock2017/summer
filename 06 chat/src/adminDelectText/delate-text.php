<?php

require('../myConnect/connect.php');

header("content-type:text/html;charset=utf-8");
$id = $_GET['id'];

$sql = "delete from message where id='{$id}'";

$res = mysql_query($sql);

if(!$res){
	echo "<script>alert('删除失败！');
	window.location.href='../adminText/text.php';</script>";
	
}else{
	echo "<script>alert('该条记录已成功删除！');
	window.location.href='../adminText/text.php';</script>";
}
?>