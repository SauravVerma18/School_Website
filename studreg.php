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

$uname=$_POST['firstname'];
$lname=$_POST['lastname'];
$pno=$_POST['prn'];
$bname=$_POST['branch'];
$yname=$_POST['year'];
$rname=$_POST['rno'];
$pname=$_POST['pass'];



$result = mysqli_query($con, "INSERT INTO studreg(firstname,lastname,prn,rno,branch,year,password) VALUES('$uname','$lname','$pno',$rname,'$bname','$yname',$pname)");

echo "<font color='green'>Data added successfully.";


}
?>
</body>
</html>