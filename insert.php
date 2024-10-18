<?php
$con=mysqli_connect('localhost','root','','cpp');
if(isset($_POST['btn']))
{
	echo"jhjhjh";
$pname=$_POST['inputname'];
$status=$_POST['status'];
$image_name=$_FILES['Image']['name'];
$image_type=$_FILES['Image']['type'];
$image_size=$_FILES['Image']['size'];
$image_loc=$_FILES['Image']['tmp_name'];
$store="C:/xampp2/htdocs/cpp/bootstrap-shop-template".$image_name;
echo "bhbhghghg";
echo $image_name;
$sql="INSERT INTO `category`(`cname`, `status`,`image`) VALUES ('$pname','$status','$image_name')";
if(mysqli_query($con,$sql))
{
	$sql1="create table `$pname` ( cid int (10), pid int(10) PRIMARY KEY AUTO_INCREMENT , description varchar(1000), image varchar(1000), pname varchar(1000), pprice int(100))";
	$sql2="ALTER TABLE demo ADD FOREIGN KEY (cid) REFERENCES category(cid);";
	if(mysqli_query($con,$sql1))
{
	if(mysqli_query($con,$sql2))
{
	header('location:Category.php');
}
}else
{
	echo"table not created";
}
}
else
{
	echo"not inserted";
}
}
?>
