<?php
$con=mysqli_connect('localhost','root','','cpp');
$n=$_GET['pID'];
$m=$_GET['cid'];
$name=$_GET['name'];
echo $name;
$tbl_name;
$sql3="SELECT * FROM category where cid=$m ";
$rs=mysqli_query($con,$sql3);
echo $m."      ".$n;
  echo "jgd";
while($rw=mysqli_fetch_row($rs))
					  {
						    echo "jgd";
					 $tbl_name= $rw[1];
					
					
					  }
//$s="delete from `product` where `pname`='$name'";
$s1="delete from `$tbl_name` where `pid`='$n'";
	if(mysqli_query($con,$s1))
{
	header('location:Product.php');
}
else
{
	echo"not deleted";
}
?>
