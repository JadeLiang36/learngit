<?php
$hostname="localhost";	//主机名
$database="exp1";	//数据库名
$username="root";	//数据库用户名
$pastword="";		//密码
$conn=mysqli_connect($hostname,$username,$pastword) or trigger_error(E_USER_ERROR);
mysqli_select_db($conn,$database);
$db=@mysqli_select_db($conn,$database) or die(mysql_error());
?>