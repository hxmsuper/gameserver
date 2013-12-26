 <?php
include('conn.php'); 
$userid=$_POST['username'];
$password=$_POST['password']; 
$sql="SELECT password FROM 'userinfor' WHERE userid='".$userid."'";
	$result=mysql_query($sql);
	if($result == $password)
	{
		echo "Success";
	}  
	else
	{
		echo "Faild";
	}
 ?> 