<?php
$con=mysqli_connect('localhost','root','','itr');
if(isset($_POST['btn1']))
{
$n=$_POST['cID'];
echo $n;
$pname=$_POST['pName'];
$status=$_POST['stats'];
$sql="update `category` set `cName`='$pname',`status`='$status' where `cID`='$n'";
if(mysqli_query($con,$sql))
 {
	echo"updated";
 }
else
 {
	echo"not updated";
 }
}
?>

