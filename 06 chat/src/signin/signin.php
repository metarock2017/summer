<?php

require('../myConnect/connect.php');

header("content-type:text/html;charset=utf-8");
$phone2 = $_POST['phone2'];
$psw = $_POST['psw'];

$sql = "select * from denglu where phone='{$phone2}' and password='{$psw}'";

$res = mysql_query($sql);

$row = mysql_fetch_assoc($res);
    
$loginUser = $row['name'];

if(!$row){
	echo "<script>alert('用户名或密码错误');
	window.location.href='../../data/denglu.html';</script>";
	exit;
}else{
	echo "<script>alert('登录成功');
    window.location.href='../friendList/friendList.php';
	</script>";
	session_start();
    $_SESSION['loginuser'] = $loginUser;

}



var_dump($row);

