<?php
header("Content-Type: text/html; charset=utf-8");
$user=$_POST['user'];
$content=$_POST['content'];

include("conn.php");
$query="INSERT INTO message (username, content, time) VALUES ('$user','$content', Now())" ;
mysql_query("set names utf8");
$insert=@mysql_query($query) or die('x');

if($insert){

 echo 'ok';

} else {

 echo '抱歉！添加数据失败';


}	

?>