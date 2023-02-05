<?php
require_once 'dbConfig.php';

if(isset($_POST['btnsave']))
{
	$productname = $_POST['product_name'];
	$description = $_POST['description'];
	$imgfile = $_FILES['product_image']['name'];
	$tmp_dir = $_FILES['product_image']['tmp_name'];
	$imgsize = $_FILES['product_image']['size'];

	if(empty($productname))
	{
		$errmsg = "Please Enter Product Name";
	}

	else if(empty($description))
		{
			$errmsg = "Please Enter Product Description";
		}

	else if(empty($imgfile))
		{
			$errmsg = "Please Enter Product Image";
		}
	else
	{
		$upload_dir = 'product_images/';
		$imgext = strtolower(pathinfo($imgfile,PATHINFO_EXTENSION));

		$valid_extension = array('jpeg','jpg','png','gif');

		$productpic = rand(1000,1000000000).".".$imgext;

		if(in_array($imgext,$valid_extension))
		{
			if($imgsize < 5000000)
			{
				move_uploaded_file($tmp_dir,$upload_dir.$productpic);
			}
			else
			{
				$errmsg = "Sorry, the file is too large";
			}
		}

		else
		{
			$errmsg = "Sorry, Only jpg, png and gif image are allowed";
		}
	}

	if(!isset($errmsg))
	{
		$stmt = $DB_con->prepare('INSERT INTO tbl_products(product_name,description,product_image) VALUES(:pname,:pdesc,:ppic)');

		$stmt->bindParam(':pname',$productname);
		$stmt->bindParam(':pdesc',$description);
		$stmt->bindParam(':ppic',$productpic);

		if($stmt->execute())
		{
			$successmsg = "New Products Saved Successfully";
			header('refresh:5; index.php');
		}

		else
		{
			$errmsg = "Error while inserting";
		}
	}
}

?>

<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Add New Products</title>
	<script src="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/3.4.1/js/bootstrap.min.js" integrity="sha512-oBTprMeNEKCnqfuqKd6sbvFzmFQtlXS3e0C/RGFV0hD6QzhHV+ODfaQbAlmY6/q0ubbwlAM/nCJjkrgA3waLzg==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>

	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/3.4.1/css/bootstrap.min.css" integrity="sha512-Dop/vW3iOtayerlYAqCgkVr2aTr2ErwwTYOvRFUpzl2VhCMJyjQF0Q9TjUXIo6JhuM/3i0vVEt2e/7QQmnHQqw==" crossorigin="anonymous" referrerpolicy="no-referrer" />

	<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/js/bootstrap.min.js" integrity="sha384-+sLIOodYLS7CIrQpBjl+C7nPvqq+FbNUBDunl/OZv93DB7Ln/533i8e/mZXLi/P+" crossorigin="anonymous"></script>
</head>
<body>

	<div class="container">
		<div class="row">
			<?php

				error_reporting(0);
				if(isset($errmsg))
				{
			?>
			<div>
				<span></span><b><?php echo $errmsg; ?></b>
			</div>
			<?php

				}

			else if(isset($successmsg))
			{
			?>
			<div>
				<span></span><b><?php echo $successmsg; ?></b>
			</div>
			<?php 

				}
			?>
			<h1>Add New Product</h1>
			<a href="index.php" class="btn btn-success">Show All Products</a>
			<p>
				<form method="post" action="" enctype="multipart/form-data" class="form-horizontal">
					<table class="table table-responsive">
						<tr>
							<td>
								<label>Product name</label>
							</td>
							<td>
								<input type="text" name="product_name" class="form-control" placeholder="Enter Product Name" value="">
							</td>
						</tr>

						<tr>
							<td>
								<label>Description</label>
							</td>
							<td>
								<textarea name="description" class="form-control" rows="3" cols="10" placeholder="Description"></textarea>
							</td>
						</tr>
						<tr>
							<td>
								<label>Product Image</label>
							</td>
							<td>
								<input type="file" name="product_image" class="form-control" accept="image/*">
							</td>
						</tr>
						<tr>
							<td colspan="2">
								<button type="submit" name="btnsave" class="btn btn-success"><span class="glyphicon glyphicon-save"></span>&nbsp;Save</button>
							</td>
						</tr>
					</table>
					
				</form>
			</p>
		</div>
	</div>

</body>
</html>