<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Untitled Document</title>
<link href="style.css" rel="stylesheet" type="text/css" />
<style>
.id-image > img {
	height: auto;
	width: 200px;
	padding: 2px;
}
</style>

</head>

<body>
<div class="header">

<div class="headerlogo"></div>
<div class="headername"><h1 style="text-align:center; color:#FFF;line-height:150px;">STUDENT INFORMATION MANAGEMENT SYSTEM</h1></div>

</div>

<!--<div class="menu"></div>-->

<div class="content">
<!--<button onclick="document.location = 'index.html'" style="padding:10px;margin-top:5px">BACK</button>-->
<?php
include "connection.php";

	
	$res=mysqli_query($con,"select*from studreg");
	
	echo"<table align='center' bgcolor='#FFFF99' border='1' cellpadding='1'  >";
	echo"<tr>";
	
	echo"<td>PRN</td>";
	echo"<td>RESUME</td>";
	echo"<td>PHOTO</td>";
	echo"</tr>";
    while($res1=mysqli_fetch_array($res))
	{
		
		echo"<tr>";
		
		echo"<td>".$res1['prn']."</td>";
		 if($res1['resume'] != null && trim($res1['resume']) != "")
		 {
			 		echo '<td><a href="uploads/'.$res1['resume'].'" target="_blank">View Resume</a></td>';
		 }
		 else
		 {
			 echo '<td>Resume unavailable!</td>';
		 }
		 
		 if($res1['photo'] != null && trim($res1['photo']) != "")
		 {
			 echo '<td><div class="id-image"><img src="uploads/'.$res1['photo'].'" alt="ID Image" /></div></td>';
		 }
		 else
		 {
			 echo '<td>Photo unavailable!</td>';
		 }

		echo"</tr>";
	}
	echo"</table>";
	echo"</div>";


	

?>
</div>

<!--<div class="footer"></div>-->
</body>
</html>
