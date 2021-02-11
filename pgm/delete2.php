<html>
<body bgcolor="yellow">
<form action="main.html"method="post">
<center>
<?php
include_once'conn.php';
$rid=$_POST['id'];
$sql="DELETE FROM apptable WHERE id='$rid' ";
if (mysqli_query($conn,$sql))
{
echo "record deleted successfully";
}
else
{
echo "error deleting record:" .mysqli_error($conn);
}
mysqli_close($conn);
?>
<br><br>
<input type="submit"value="back to home page"name="submit">
</center>
</body>
</html>