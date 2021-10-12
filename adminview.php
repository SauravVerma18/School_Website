<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Untitled Document</title>
<link href="style.css" rel="stylesheet" type="text/css" />


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

	//if(isset($_POST["view"])=="view")
//{
	$res=mysqli_query($con,"select*from studreg order by prn");
	
	echo"<table align='center' bgcolor='#FFFF99' border='1' cellpadding='5'  >";
	echo"<tr>";
	echo"<td>FIRSTNAME</td>";
	echo"<td>LASTNAME</td>";
	echo"<td>PRN</td>";
	echo"<td>ROLL NO</td>";
	echo"<td>EMAIL</td>";
	echo"<td>ADDRESS</td>";
	echo"<td>CITY</td>";
	echo"<td>DOB</td>";
	echo"<td>MOBILE</td>";
	echo"<td>GENDER</td>";
	echo"<td>BRANCH</td>";
	echo"<td>YEAR</td>";
	echo"<td>DELETE</td>";
	/*echo"<td>RESUME</td>";
	echo"<td>PHOTO</td>";*/
	echo"</tr>";
    while($res1=mysqli_fetch_array($res))
	{
		
		echo"<tr>";
		echo"<td>".$res1['firstname']."</td>";
		echo"<td>".$res1['lastname']."</td>";
		echo"<td>".$res1['prn']."</td>";
		echo"<td>".$res1['rno']."</td>";
		echo"<td>".$res1['email']."</td>";
		echo"<td>".$res1['address']."</td>";
		echo"<td>".$res1['city']."</td>";
		echo"<td>".$res1['dob']."</td>";
		echo"<td>".$res1['mobile']."</td>";
		echo"<td>".$res1['gender']."</td>";
		echo"<td>".$res1['branch']."</td>";
		echo"<td>".$res1['year']."</td>";
		echo "<td><a href=\"delete.php?prn=$res1[prn]\" onClick=\"return confirm('Are you sure you want to delete?')\">Delete</a></td>";        
		/*echo"<td>".$res1['resume']."</td>";
		echo"<td>".$res1['photo']."</td>";*/
		echo"</tr>";
	}
	echo"</table>";
	echo"</div>";
//}

	

?>
</div>

<!--<div class="footer"></div>-->
</body>
</html>
