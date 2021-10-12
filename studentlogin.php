<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Untitled Document</title>
</head>

<body>
<?php
session_start();
include('connection.php');

if(isset($_POST['submit']))
{
	$user=$_POST['username'];
	$pass=$_POST['password'];
	/*echo $user;
	echo"<br>";
	echo $pass;
	echo"<br>";*/
	$res=mysqli_query($con,"select prn,password from studreg where prn='$user'");
	
	while($res1=mysqli_fetch_array($res))
	{
		$u=$res1['prn'];
		$p=$res1['password'];
		/*echo $u;
		echo"<br>";
		echo $p;
		echo"<br>";*/
	}
	
	if(($u==$user)&&($p==$pass))
	{
		$_SESSION["stud"]=$u;
		header("Location:studentmenu.php");
	}
	else
	{
		echo"<script>alert(' Not logged in')</script>";
	}
}

?>
</body>
</html>