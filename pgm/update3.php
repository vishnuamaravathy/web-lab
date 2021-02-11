<html>
<body bgcolor="lightblue">
<form action="main.html"method="post">
<center>
<?php
include_once'conn.php';
if(isset($_POST['submit']))
{
$uid=$_POST['id2'];
$fname=$_POST['upduname'];
$pass=$_POST['password2'];
$gen=$_POST['gender'];
$em1=$_POST['email'];
$ph1=$_POST['code'];
$ph2=$_POST['phno2'];
$sql="UPDATE apptable SET uname='$fname',password='$pass',gender='$gen',email='$em1',code='$ph1',phno='$ph2' where id='$uid'";
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