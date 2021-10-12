<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Untitled Document</title>
</head>

<body>
<?php
include ('connection.php');

if(isset($_POST['submit']))

{
$ename=$_POST['email'];	
$pname=$_POST['pass'];
$dob=$_POST['dob'];
$add=$_POST['add'];
$prn=$_POST['prn'];
$mob=$_POST['mob'];
$city=$_POST['city'];
$g=$_POST['gender'];
$file1=$_FILES["photo"]["name"];
$tempname=$_FILES["photo"]["tmp_name"];
$up='uploads/'.$file1;
move_uploaded_file($tempname,$up);

$file2=$_FILES["resu"]["name"];
$tempname2=$_FILES["resu"]["tmp_name"];
$up1='uploads/'.$file2;
move_uploaded_file($tempname2,$up1);


$result = mysqli_query($con, "UPDATE studreg SET email='$ename',password='$pname',dob='$dob',address='$add',mobile='$mob',city='$city',gender='$g',photo='$file1',resume='$file2' WHERE prn='$prn'");

echo "<font color='green'>Data updated successfully.";


}
?>
</body>
</html>