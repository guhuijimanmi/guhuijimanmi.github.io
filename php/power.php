<?php
	include("conn.php");
	$zhi = $_POST['zhi'];
	//$sql = "SELECT zhi FROM power WHERE zhi='$zhi' ";SQL查询
	$sql="INSERT INTO power (username, zhi) VALUES ('user','$zhi')";
	$query = mysql_query($sql);//执行SQL语句
	//$row = mysql_fetch_array($query);
	if($query)//验证用户名和密码是否一致
	{
		echo "ok";//用户名和密码一致，跳转到指定页面
	}
	else
	{
		echo "X";//用户名和密码不一致，跳转到当前页面重新输入
	}
	
?>