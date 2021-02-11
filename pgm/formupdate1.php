<html>
<head>
<title>retrive data</title>
</head>
<body bgcolor="lightgreen">
<center>
<?php
include_once 'conn.php';
$sql="SELECT * FROM apptable";
$result=mysqli_query($conn,$sql);
if(mysqli_num_rows($result)>0)
{
?>
<br><br>
<table border="2">
<tr>
<th>id</th>
<th>name</th>
<th>password</th>
<th>gender</th>
<th>email</th>
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
<td><?php echo $row["uname"];?></td>
<td><?php echo $row["password"];?></td>
<td><?php echo $row["gender"];?></td>
<td><?php echo $row["email"];?></td>
<td><?php echo $row["code"];?></td>
<td><?php echo $row["phno"];?></td>
</tr>
<?php
$i++;
}
?>
</table>
</tr><br><br>
<form method="post"action="update2.php">
enter id to update:&nbsp&nbsp
<input type="text"name="id">
<br><br><br>
<input type="submit"name="submit"value="submit">
</form>
<?php
}
else{
echo "no result found";
}
mysqli_close($conn);
?>
</center>
</body>
</html>