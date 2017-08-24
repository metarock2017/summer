<?php

require('../myConnect/connect.php');

header("content-type:text/html;charset=utf-8");
$name = $_POST['name'];
$phone = $_POST['phone'];
$password = $_POST['password'];
$addtime = date("Y-m-d H:i:s");

$sql = "insert into denglu values('','{$name}','{$phone}','{$password}','{$addtime}')";

$res = mysql_query($sql);

if(!$res){
	echo "<script>alert('注册失败！');
	window.location.href='../../data/denglu.html';</script>";
	
}else{
	echo "<script>alert('恭喜你,注册成功！');
	window.location.href='../../data/denglu.html';</script>";
}
?>