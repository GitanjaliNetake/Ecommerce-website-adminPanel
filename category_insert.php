<?php

$con=mysqli_connect('localhost','root','','cpp');
if(isset($_POST['btn']))
{
	
$pname=$_POST['inputname'];
$status=$_POST['status'];
$image_name=$_FILES['Image']['name'];
$image_type=$_FILES['Image']['type'];
$image_size=$_FILES['Image']['size'];
$image_loc=$_FILES['Image']['tmp_name'];
$store="C:/xampp/htdocs/cpp/bootstrap-shop-template/product images/".$image_name;


$sql="INSERT INTO `category`(`cname`, `status`,`image`) VALUES ('$pname','$status','$image_name')";
if(mysqli_query($con,$sql))
{
	$sql1="create table `$pname` ( cid int (10), pid int(10) PRIMARY KEY AUTO_INCREMENT , description varchar(1000), image varchar(1000), pname varchar(1000), pprice int(100))";
	$sql2="ALTER TABLE demo ADD FOREIGN KEY (cid) REFERENCES category(cid);";
	if(move_uploaded_file($image_loc,$store))
{

		if(mysqli_query($con,$sql1))
		{
			if(mysqli_query($con,$sql2))
			{
				header('location:Category.php');			}
		}
		else
		{
				echo"table not created";
		}
	}
	else
	{
		echo"not inserted";
	}
}
}





?>


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
    <body class="bg-primary">
        <div id="layoutAuthentication">
            <div id="layoutAuthentication_content">
                <main>
                    <div class="container">
                        <div class="row justify-content-center">
                            <div class="col-lg-5">
                                <div class="card shadow-lg border-0 rounded-lg mt-5">
                                    <div class="card-header"><h3 class="text-center font-weight-light my-4">Category</h3></div>
                                    <div class="card-body"><br>
                                        <form method="post" enctype="multipart/form-data">
                                            
                                            <div class="form-floating mb-3">
                                                <input class="form-control" name="inputname" type="text" placeholder="name" />
                                                <label for="inputPassword">Category name</label>
                                            </div><br>
											<div class="form-floating mb-3">
                                                <input class="form-control" name="Image" type="file" placeholder="" />
                                                <label for="inputPassword">Image</label>
												
                                            </div>
											<div class="form-floating mb-3">
                                                <input class="form-control" name="status" type="text" placeholder="Status" />
                                                <label for="inputPassword">Status</label>
												
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
            <div id="layoutAuthentication_footer">
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
        </div>
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" crossorigin="anonymous"></script>
        <script src="js/scripts.js"></script>
    </body>
</html>
