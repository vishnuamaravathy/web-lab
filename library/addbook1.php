<html>
<body bgcolor="Red">
<form action ="book.html"method="post">
<center>
<br>
<br>
<?php
include_once 'connlibr.php';
if(isset($_POST['submit']))
{

 $name=$_POST['title'];
 $auth=$_POST['author'];
 $pub=$_POST['publisher'];
 $pri=$_POST['price'];
 $qua=$_POST['quantity'];

 $sql="INSERT INTO book
(title,author,publisher,price,quantity)
 VALUES('$name','$auth','$pub','$pri','$qua')";
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