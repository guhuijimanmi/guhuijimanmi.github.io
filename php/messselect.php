<?php
header("Content-Type: text/html; charset=utf-8");
$is=$_POST['is'];
include("conn.php");
$query="SELECT username,content,time,id FROM message ORDER BY id DESC";
mysql_query("set names utf8");
$result=@mysql_query($query) or die('x');

if($result){
 echo mysql_result($result,$is,"username").'zhourui'.mysql_result($result,$is,"content").'zhourui'.mysql_result($result,$is,"time");

} else {

 echo '抱歉！添加数据失败';


}	

?>