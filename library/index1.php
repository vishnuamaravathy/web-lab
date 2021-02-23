<html>
<body bgcolor="Red">
<form action ="index.html"method="post">
<center>
<br>
<br>
<?php
include_once 'connlibr.php';
if(isset($_POST['submit']))
{

 $nam=$_POST['uname'];
 $pass=$_POST['password'];

 $sql="INSERT INTO login
(uname,password)
 VALUES('$nam','$pass';)";
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