<?php
header("Content-Type: text/html; charset=utf-8");
$dairy=$_POST['dairy'];
$title=$_POST['title'];
$did=$_POST['did'];
include("conn.php");//修改数据：update tablename set xx=xx,xxx=xx where xxx=xxx and xxx=xxx
$query="update dairy SET dairy_content='$dairy',title='$title' WHERE id='$did'" ;
mysql_query("set names utf8");
$update=@mysql_query($query) or die('x');
if($update){
 echo 'ok ';
} else {
 echo '抱歉！修改数据失败';


}	

?>