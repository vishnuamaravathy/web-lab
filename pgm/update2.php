<html>
<head>
<title>
Update Data</title>
</head>
<body bgcolor="cyan">
<form method="post"action="update3.php">
<center>
<?php
include_once 'conn.php';
$rid=$_POST['id'];
$sql="SELECT *FROM apptable where id='$rid'";
$result=mysqli_query($conn,$sql);
if(mysqli_num_rows($result)>0)
{
?>
<br><br>
<?php
if($row=mysqli_fetch_assoc($result))
{
?>
<b>Form id:&nbsp&nbsp</b>
<input type="text"value="<?php echo $row["id"];?>"name="id2"><br><br>
<b>
Username:&nbsp&nbsp</b>
<input type="text"value="<?php echo $row["uname"];?>"name="upduname"><br><br>
<b>Password:&nbsp&nbsp</b>
<input type="text"value="<?php echo $row["password"];?>"name="password2"><br><br>
<b>Gender&nbsp&nbsp</b>
<input type="radio"name="gender"value="male"<?php
if($row["gender"]=="male"){echo "checked";}?>/>male
<input type="radio"name="gender"value="female"<?php
if($row["gender"]=="female"){echo "checked";}?>/>female<br><br>
<b>
email:&nbsp&nbsp</b>
<input type="text"value="<?php echo $row["email"];?>"name="email"><br><br>
<b>phno &nbsp&nbsp</b>
<select name='code'>
<option <?php if($row["code"]="977"){echo "selected";}?>
>977</option>
<option <?php if($row["code"]="978"){echo "selected";}?>
>978</option>
<option <?php if($row["code"]="979"){echo "selected";}?>
>979</option>
<option <?php if($row["code"]="973"){echo "selected";}?>
>973</option>
<option <?php if($row["code"]="972"){echo "selected";}?>
>972</option>
<option <?php if($row["code"]="974"){echo "selected";}?>
>974</option>
<input type="text"value="<?php echo $row["phno"];?>"name="phno2"><br>
<br>
<input type="submit"value="update"name="submit">
<?php
}
?>
<?php
}
else
{
echo"no result found";
}
?>
</center>
</form>
</body>
</html>