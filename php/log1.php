<?php
	include("conn.php");
	$username = $_POST['user'];//取得用户输入的用户名
	$password = $_POST['psw'];//取得用户输入的密码,用md5加密后的密码
	$sql = "SELECT username,password FROM user WHERE username='$username' and password='$password'";//SQL查询
	$query = mysql_query($sql);//执行SQL语句
	$row = mysql_fetch_array($query);
	$user = $row['username'];//将查询的结果赋值
	$pass = $row['password'];//将查询的结果赋值
	if($user == $username && $pass == $password)//验证用户名和密码是否一致
	{
		//  当验证通过后，启动 Session
    		session_start();
    		//  注册登陆成功的 admin 变量，并赋值 true
    		$_SESSION["admin"] = true;
		echo "ok";//用户名和密码一致，跳转到指定页面
	}
	else
	{
		echo "用户名或密码错误";//用户名和密码不一致，跳转到当前页面重新输入
	}
	
?>