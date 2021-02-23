<html>
<body bgcolor="lightblue">
<form action="employee.html"method="post">
<center>
<?php
include_once'conn3.php';
if(isset($_POST['submit']))
{
$uid=$_POST['id2'];
$fname=$_POST['upduname'];
$gen=$_POST['gender'];
$em1=$_POST['email'];
$jb=$_POST['job2'];
$ph1=$_POST['code'];
$ph2=$_POST['phno2'];
$sql="UPDATE emp SET name='$fname',gender='$gen',email='$em1',job='$jb',code='$ph1',phone='$ph2' where id='$uid'";
if(mysqli_query($conn,$sql)){
echo "updated successfully!<br><br>";
}
else
{
echo "error:" .$sql. "" .mysqli_error($conn);
}
mysqli_close($conn);
}
?>
<br>
<br>
<input type="submit" value="back to home page"name="submit">
</center>
</body>
</html>