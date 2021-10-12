<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Untitled Document</title>
</head>

<body>
<?php

include('connection.php');

if(isset($_POST['submit']))
{
	$user=$_POST['username'];
	$pass=$_POST['password'];
	
	$res=mysqli_query($con,"select * from adminlogin");
	while($res1=mysqli_fetch_array($res))
	{
		$u=$res1['username'];
		$p=$res1['password'];
	}
	if(($u==$user)&&($p==$pass))
	{
	  header("Location:adminmenu.html");
	}
	else
	{
		echo"<script>alert(' Not logged in')</script>";
	}
}

?>
</body>
</html>