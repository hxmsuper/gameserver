 <?php
 $mysql_server_name='localhost'; 
//改成自己的mysql数据库服务器  
$mysql_username='root'; 
//改成自己的mysql数据库用户名  
$mysql_password='huixiumo'; 
//改成自己的mysql数据库密码  
$mysql_database='paymentlib';
 //改成自己的mysql数据库名  
 //连上数据库
$conn=mysql_connect($mysql_server_name,
$mysql_username,$mysql_password,
$mysql_database);
//设置编码格式
mysql_query("set names UTF8");

mysql_select_db($mysql_database,$conn);  
?> 