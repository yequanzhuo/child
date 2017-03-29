<?php 
header('Content-Type:text/html;charset=utf-8');
error_reporting(0);
$conn =@mysql_connect("localhost","root","") or die("数据库连接失败");
mysql_select_db("child",$conn);
mysql_query("set names 'utf8'");
 
?>      
   