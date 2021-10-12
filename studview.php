<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Untitled Document</title>
<link href="style.css" rel="stylesheet" type="text/css" />
</head>

<body>
<?php
include ("connection.php");
session_start();
$s=$_SESSION["stud"];


$res=mysqli_query($con,"select*from studreg where prn='$s'");
while($res1=mysqli_fetch_array($res))
	{

		$fname=$res1['firstname'];
		$lname=$res1['lastname'];
		$pno=$res1['prn'];
		$pass=$res1['password'];
		$branch=$res1['branch'];
		$year=$res1['year'];
		$rno=$res1['rno'];
		$city=$res1['city'];
		$address=$res1['address'];
		$dob=$res1['dob'];
		$mob=$res1['mobile'];
		$gen=$res1['gender'];
		$email=$res1['email'];
		$resume=$res1['resume'];
		$photo=$res1['photo'];
		
	/*	echo"<script>alert($fname); </script>" ;*/
		}
	
?>

<div class="header">

<div class="headerlogo"></div>
<div class="headername"><h1 style="text-align:center; color:#FFF;line-height:150px;">STUDENT INFORMATION MANAGEMENT SYSTEM</h1></div>

</div>

<!--<div class="menu"></div>-->


<div class="content">
<form method="post" action="studinfo.php" enctype="multipart/form-data">
<table border="1"  align="center" style="text-align:left" cellpadding="10">
<caption><h2>STUDENT REGISTRATION FORM</h2></caption>

<tr>
<th>first name *</th>
<td><input type="text" name="firstname" id="firstname" maxlength="15" value="<?php echo $fname;?>" readonly="readonly"/></td>
<th>last name *</th>
<td><input type="text" name="lastname" id="lastname" maxlength="15" value="<?php echo $lname;?>" readonly="readonly"/></td>
</tr>

<tr>
<th>PRN *</th>
<td><input type="text" name="prn" id="prn" maxlength="10" value="<?php echo $pno;?>" readonly="readonly"/></td>
<th>email</th>
<td><input type="text" name="email" id="email" value="<?php echo $email;?>" readonly="readonly"/></td>
</tr>



<tr>
<th>password</th>
<td><input type="password" name="pass" id="pass" value="<?php echo $pass;?>"  /></td>
<th>photo</th>
<td><?php echo"<a href='uploads/$photo' target='_blank'>View photo</a>"; ?></td>

</tr>


<tr>
<td></td>
<td style="color:#F00">*mobile number is your password*</td>
<th>resume</th>

<td><?php echo"<a href='uploads/$resume' target='_blank'>View Resume</a>"; ?></td>
</tr>


<tr>
<th>mobile</th>
<td><input type="number" name="mob" id="mob" maxlength="10" value="<?php echo $mob;?>" readonly="readonly" /></td>
<th>gender</th>
<td>
<input type="text" name="gender" id="gender"  value="<?php echo $gen;?>" readonly="readonly" />

</td>
</tr>
<tr>
<th>address</th>
<td><input type="text" name="add" id="add" value="<?php echo $address;?>" readonly="readonly" ></td>
<th>DOB</th>
<td><input type="text" name="dob" id="dob" value="<?php echo $dob;?>" readonly="readonly" /></td>
</tr>
<tr>
<th>branch *</th>
<td><input type="text" name="branch" id="branch" value="<?php echo $branch;?>" readonly="readonly"   /></td>

<th>city</th>
<td><input type="text" name="city" id="city" value="<?php echo $city;?>" readonly="readonly"  /></td>
</td>
</tr>
<tr>
<th>year *</th>
<td><input type="text" name="branch" id="branch" value="<?php echo $year;?>" readonly="readonly"   /></td>


<th>roll no *</th>
<td><input type="text" name="rno" id="rno" value="<?php echo $rno;?>" readonly="readonly" /></td>
</tr>

<!--<tr>
<td></td>
<td><input type="submit" value="update"  name="submit" style="height:40px;width:150px; background-color:#06C;color:#FFF;"/></td>&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp;
<td></td>
<td><input type="reset" value="Reset" style="height:40px;width:150px; background-color:#06C;color:#FFF;"/></td>
</tr>
-->
</table>
</form>
</div>

<!--<div class="footer"></div>-->
</body>
</html>
