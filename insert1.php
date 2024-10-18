<?php
$con=mysqli_connect('localhost','root','','itr');
if(isset($_POST['btn']))
{
$pid=$_POST['inputid'];
$pname=$_POST['inputname'];
$Price=$_POST['Price'];
$Description=$_POST['Description'];
$image_name=$_FILES['Image']['name'];
$image_type=$_FILES['Image']['type'];
$image_size=$_FILES['Image']['size'];
$image_loc=$_FILES['Image']['tmp_name'];
$store="image/".$image_name;
$sql="INSERT INTO `product`(`pName`,`pPrice`,`description`,`image`) VALUES ('$pname','$Price','$Description','$image_name')";
if(move_uploaded_file($image_loc,$store))
{
	if(mysqli_query($con,$sql))
	{
		echo"inserted";
	}
	else
	{
		echo"not inserted";
	}
}
}
?>