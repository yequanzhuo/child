<?php
header('Content-Type:text/html;charset=utf-8');
//error_reporting(0);
mysql_connect('localhost','root','');
mysql_select_db('words');
mysql_query('set names utf8');

$sql="select * from animals";  
$res=mysql_query($sql);

while($row=mysql_fetch_array($res))    
	{
		echo $row[2];
?>
<label><img src=" ./<?php echo $row[2];?>"></label>
<?php 
}
?>