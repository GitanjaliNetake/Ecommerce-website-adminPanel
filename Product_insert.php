<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8" />
        <meta http-equiv="X-UA-Compatible" content="IE=edge" />
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
        <meta name="description" content="" />
        <meta name="author" content="" />
        <title>Login - SB Admin</title>
        <link href="css/styles.css" rel="stylesheet" />
        <script src="https://use.fontawesome.com/releases/v6.1.0/js/all.js" crossorigin="anonymous"></script>
    </head>
	<style>
	.button{
	color:blue;
	margin:auto;
	height:20px;
	width:60px;
	}
	</style>
	
<?php
$con=mysqli_connect('localhost','root','','cpp');
if(isset($_POST['btn']))
{
	//$pid=$_POST['id'];
	$cid=$_POST['cate'];
$pname=$_POST['inputname'];
$Price=$_POST['Price'];
$Description=$_POST['Description'];
$image_name=$_FILES['Image']['name'];
$image_type=$_FILES['Image']['type'];
$image_size=$_FILES['Image']['size'];
$image_loc=$_FILES['Image']['tmp_name'];
$store="C:/xampp/htdocs/cpp/bootstrap-shop-template/product images/".$image_name;
$sql1="SELECT * FROM category where cid=$cid ";
$rs=mysqli_query($con,$sql1);
while($rw=mysqli_fetch_row($rs))
					  {
					 $tbl_name= $rw[1];
					
					
					  }
                       
$sql="INSERT INTO `$tbl_name`(`cid`, `description`, `image`, `pname`, `pprice`) VALUES  ('$cid','$Description','$image_name','$pname','$Price')";
if(move_uploaded_file($image_loc,$store))
{

	if(mysqli_query($con,$sql))
	{
		
		header('location:Product.php');
	}
	else
	{
		echo"not inserted";
	}
}
}

?>
    <body class="bg-primary">
        <div id="layoutAuthentication">
            <div id="layoutAuthentication_content">
                <main>
                    <div class="container">
                        <div class="row justify-content-center">
						
                            <div class="col-lg-5">
                                <div class="card shadow-lg border-0 rounded-lg mt-5">
                                    <div class="card-header"><h3 class="text-center font-weight-light my-4">Product</h3></div>
                                    <div class="card-body">
									   <form method="post" enctype="multipart/form-data">
										<select name="cate">
											<?php
											$con=mysqli_connect('localhost','root','','cpp');
											$r="SELECT * FROM `category`";
											$rw=mysqli_query($con,$r);
											while ($rs=mysqli_fetch_row($rw))
											{
												echo"<option value=".$rs[0].">".$rs[1]."</option>";
											
											}
											?>
											</select>
											<br>
											<br>
											<br>
											<br>
											
                                            <div class="form-floating mb-3">
                                                <input class="form-control" name="inputname" type="text" placeholder="name" />
                                                <label for="inputPassword">Product name</label>
                                            </div>
											<div class="form-floating mb-3">
                                                <input class="form-control" name="Price" type="text" placeholder="Status" />
                                                <label for="inputPassword">Price</label>
												
                                            </div>
											<div class="form-floating mb-3">
                                                <input class="form-control" name="Description" type="text" placeholder="Status" />
                                                <label for="inputPassword">Description</label>
												
                                            </div><div class="form-floating mb-3">
                                                <input class="form-control" name="Image" type="file" placeholder="" />
                                                <label for="inputPassword">Image</label>
												
                                            </div>
											
                                            <div class="button">
                                            <div class="d-flex align-items-center justify-content-between mt-4 mb-0">
                                            <input class="btn btn-primary btn-block"  type="submit" value="submit" name="btn">
											</div>
                                            </div>
											<br>
                                        </form>
                                    </div>
                                    
                                </div>
                            </div>
                        </div>
                    </div>
                </main>
            </div>
            <!--<div id="layoutAuthentication_footer">
                <footer class="py-4 bg-light mt-auto">
                    <div class="container-fluid px-4">
                        <div class="d-flex align-items-center justify-content-between small">
                            <div class="text-muted">Copyright &copy; Your Website 2022</div>
                            <div>
                                <a href="#">Privacy Policy</a>
                                &middot;
                                <a href="#">Terms &amp; Conditions</a>
                            </div>
                        </div>
                    </div>
                </footer>
            </div>
        </div>>-->
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" crossorigin="anonymous"></script>
        <script src="js/scripts.js"></script>
    </body>
</html>
