<html>
<head>
<title>
Retrieve Data</title>
</head>
<body bgcolor="lightpink">
<form action="main.html"method="post">
<center>
<?php
include_once'conn.php';
$sql="SELECT *FROM apptable";
$result=mysqli_query($conn,$sql);
if(mysqli_num_rows($result)>0)
{
?><br><br>
<table border="2">
<tr>
<th>id</th>
<th>uname</th>
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