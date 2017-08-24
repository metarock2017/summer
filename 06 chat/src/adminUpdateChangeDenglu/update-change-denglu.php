<?php

require('../myConnect/connect.php');

header("content-type:text/html;charset=utf-8");
$id = $_POST['id'];
$name = $_POST['name'];
$phone = $_POST['phone'];
$password = $_POST['password'];
$addtime = date("Y-m-d H:i:s");

$sql = "update denglu set name='{$name}',phone='{$phone}',password='{$password}',addtime='{$addtime}' where id='{$id}'";

$res = mysql_query($sql);

if(!$res){
	echo "<script>alert('修改失败！');
	window.location.href='../adminUpdateDenglu/update-denglu.php';</script>";
	
}else{
	echo "<script>alert('恭喜你,修改成功！');
	window.location.href='../adminPerson/personal.php';</script>";
}
?>