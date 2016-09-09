<?php
	include("conn.php");
	$zhi = $_POST['zhi'];//取得用户输入的用户名
	$sql = "SELECT zhi FROM power WHERE zhi='$zhi' ";//SQL查询
	$query = mysql_query($sql);//执行SQL语句
	$zhiS = $row['zhi'];//将查询的结果赋值
	if($zhi == $zhiS)//验证用户名和密码是否一致
	{
		echo "ok";//用户名和密码一致，跳转到指定页面
	}
	else
	{
		echo "用户名或密码错误";//用户名和密码不一致，跳转到当前页面重新输入
	}
	
?>