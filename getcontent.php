<?php   header("Content-type: text/html; charset=utf-8");
//引用zoneLib
include ('admin.php');

include ('zoneLib.php'); 
$mysql_server_name='localhost'; 
//改成自己的mysql数据库服务器  
$mysql_username='root'; 
//改成自己的mysql数据库用户名  
$mysql_password='huixiumo.com'; 
//改成自己的mysql数据库密码  
$mysql_database='gamezone';
 //改成自己的mysql数据库名  
 //连上数据库
$conn=mysql_connect($mysql_server_name,
$mysql_username,$mysql_password,
$mysql_database);

mysql_select_db($mysql_database,$conn);  

//需要执行的SQL脚本 从表中获取所有内容
$sql = 'SELECT * FROM unity';
//设置编码格式
mysql_query("set names UTF8");
//执行数据库脚本
$result = mysql_query($sql);
//列出反馈内容
$show = "";

while($row = mysql_fetch_array($result))
{
	$item = new Item;
	$item->{'id'} = $row['id'];
	$item->{'gatherType'} = $row['gatherType'];
	$item->{'gameType'} = $row['gameType'];
	$item->{'name'} = $row['name'];
	$item->{'cp'} = $row['cp'];
	$item->{'price'} = $row['price'];
	$item->{'capacity'} = $row['capacity'];
	$item->{'title'} = $row['title'];
	$item->{'content'} = $row['content'];
	$item->{'star'} = $row['star'];
	$item->{'downloadURL'} = $row['downloadURL'];
	$item->{'iconurl'} = "/".$item->{'id'}."/icon.png";//$row['iconurl'];
	$item->{'imgurl1'} = "/".$item->{'id'}."/img1.png";//$row['imgurl1'];
	$item->{'imgurl2'} = "/".$item->{'id'}."/img2.png";//$row['imgurl2'];
	//生成xml内容
	$show.='<List><Item>'.
	'<id>'.$item->{'id'}.'</id>'.
	'<gatherType>'.$item->{'gatherType'}.'</gatherType>'.
	'<gameType>'.$item->{'gameType'}.'</gameType>'.
	'<name>'.$item->{'name'}.'</name>'.
	'<cp>'.$item->{'cp'}.'</cp>'.
	'<price>'.$item->{'price'}.'</price>'.
	'<capacity>'.$item->{'capacity'}.'</capacity>'.
	'<title>'.$item->{'title'}.'</title>'.
	'<content>'.$item->{'content'}.'</content>'.
	'<star>'.$item->{'star'}.'</star>'.
	'<downloadURL>'.$item->{'downloadURL'}.'</downloadURL>'.
	'<iconurl>'.$localip.'/'.$item->{'iconurl'}.'</iconurl>'.
	'<imgurl1>'.$localip.'/'.$item->{'imgurl1'}.'</imgurl1>'.
	'<imgurl2>'.$localip.'/'.$item->{'imgurl2'}.'</imgurl2>'.'</Item>';
} 

$show.='</List>';
//将xml内容反馈给unity
echo $show;
//执行数据库脚本
//mysql_query($sql); 
//需要执行的数据库脚本  
/*$sql='CREATE TABLE `counter` 
(`id` INT(255) UNSIGNED NOT NULL 
AUTO_INCREMENT ,`count` INT(255) 
UNSIGNED NOT NULL DEFAULT 0,PRIMARY KEY 
( `id` ) ) TYPE = innodb;';   
*/
 
//$result=mysql_query($sql);   
//echo $sql;   
mysql_close($conn);   
?> 