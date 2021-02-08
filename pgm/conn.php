<?php

$servername ='localhost';
$username='root';
$password='';
$dbname="apple";

$conn=mysqli_connect($servername,$username,$password,$dbname);
if(!$conn){
die('Could not Connect MySQL:'.mysql_error());
}
else
{
echo"Database Connected";
}
?>
