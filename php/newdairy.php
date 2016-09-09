<?php
header("Content-Type: text/html; charset=utf-8");
$dairy=$_POST['dairy'];
$title=$_POST['title'];
include("conn.php");
$query="INSERT INTO dairy (dairy_content,title,time) VALUES ('$dairy','$title', Now())";
mysql_query("set names utf8");
$insert=@mysql_query($query) or die('x');
if($insert){
 echo 'ok';
} else {

 echo '抱歉！添加数据失败';


}	

?>