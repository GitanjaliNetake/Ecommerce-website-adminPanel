<?php
$con=mysqli_connect('localhost','root','','cpp');
$n=$_GET['name'];
$s1="delete from `category` where `cname`='$n'"; 
$s="drop table $n";
  if(mysqli_query($con,$s1))
	{
		if(mysqli_query($con,$s))
		{
		header('location:Category.php');
		}
	}
else
{
	echo"not deleted";
}
?>
