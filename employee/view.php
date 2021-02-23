<html>
<head>
<title>
Retrieve Data</title>
</head>
<body bgcolor="lightpink">
<form action="employee.html"method="post">
<center>
<?php
include_once'conn3.php';
$sql="SELECT *FROM emp";
$result=mysqli_query($conn,$sql);
if(mysqli_num_rows($result)>0)
{
?><br><br>
<table border="2">
<tr>
<th>id</th>
<th>name</th>
<th>gender</th>
<th>email</th>
<th>job</th>
<th>code</th>
<th>phno</th>
</tr>
<?php
$i=0;
while($row=mysqli_fetch_assoc($result))
{
?>
<tr>
<td><?php echo $row["id"];?></td>
<td><?php echo $row["name"];?></td>
<td><?php echo $row["gender"];?></td>
<td><?php echo $row["email"];?></td>
<td><?php echo $row["job"];?></td>
<td><?php echo $row["code"];?></td>
<td><?php echo $row["phone"];?></td>
</tr>
<?php
$i++;
}
?>
</table>
<?php
}
else{
echo "no result found";
}
?>
<br><br>
<input type="submit"value="back to home page"name="submit">
</center>
</form>
</body>
</html>