<html>
<body bgcolor="Red">
<form action ="employee.html"method="post">
<center>
<br>
<br>
<?php
include_once 'conn3.php';
if(isset($_POST['submit']))
{
 $fname=$_POST['name'];
 $gen=$_POST['gender'];
 $em=$_POST['email'];
 $jb=$_POST['job'];
 $ph1=$_POST['code'];
 $ph2=$_POST['phone'];

 $sql="INSERT INTO emp
(name,gender,email,job,code,phone)
 VALUES('$fname','$gen','$em','$jb','$ph1','$ph2')";
 if(mysqli_query($conn,$sql))
{
echo"New record created successfully !<br>";
}
else
{
echo "Error: " .$sql ."" .mysqli_error($conn);
}
mysqli_close($conn);
}
?>
<br><br><input type="submit"value="Back to home page"name="submit">
</center>
</body> 
</html>