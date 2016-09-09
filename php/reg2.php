<?php
header("Content-Type: text/html; charset=utf-8");
$user=$_POST['user'];
$psw=$_POST['psw'];
if(!$user){

 exit('错误：用户名不符合规定');

}
if(strlen($psw) < 6){

 exit('错误：密码长度不符合规定。');

}
$con=@mysql_connect("localhost","root","") or die('数据库连接失败');

mysql_select_db('login');

$check_query = mysql_query("select username from user where username='$user' limit 1");//检测用户名是否存在

if(mysql_fetch_array($check_query)){

 echo '错误：用户名 ',$user,' 已存在。';

 exit;

}
$query="INSERT INTO user (username, password, reg) VALUES ('$user','$psw', Now())" ;

$insert=@mysql_query($query) or die('x');

if($insert){

 echo 'okla';

} else {
	echo 'x';
}	

?>