<?php
header("Content-Type: text/html; charset=utf-8");
$dairy=$_POST['dairy'];
include("conn.php");
$query2="SELECT * FROM dairy";
mysql_query("set names utf8");
$result=@mysql_query($query2) or die('x');

if($result){
 while($row = mysql_fetch_assoc($result)){
 	echo $row['dairy_content']."￥".$row['title']."￥".$row['time']."￥";
 }
} else {

 echo '抱歉！添加数据失败';


}	