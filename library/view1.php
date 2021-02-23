<html>
<head>
<title>
Retrieve Data</title>
</head>
<body bgcolor="lightpink">
<form action="book.html"method="post">
<center>
<?php
include_once'connlibr.php';
$sql="SELECT *FROM book";
$result=mysqli_query($conn,$sql);
if(mysqli_num_rows($result)>0)
{
?><br><br>
<table border="2">
<tr>
<th>bookid</th>
<th>title</th>
<th>author</th>
<th>publisher</th>
<th>price</th>
<th>quantity</th>
</tr>
<?php
$i=0;
while($row=mysqli_fetch_assoc($result))
{
?>
<tr>
<td><?php echo $row["bookid"];?></td>
<td><?php echo $row["title"];?></td>
<td><?php echo $row["author"];?></td>
<td><?php echo $row["publisher"];?></td>
<td><?php echo $row["price"];?></td>
<td><?php echo $row["quantity"];?></td>

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