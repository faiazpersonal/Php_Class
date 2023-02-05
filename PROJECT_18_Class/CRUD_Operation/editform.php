<?php
error_reporting(0);
include_once 'dbConfig.php';

if(isset($_GET['edit_id']) && !empty($_GET['edit_id']))
{
	$id = $_GET['edit_id'];
	$stmt_edit = $DB_con->prepare('SELECT product_name, description, product_image FROM tbl_products WHERE id = :uid');

	$stmt_edit->execute(array(':uid'=>$id));
	$edit_row = $stmt_edit->fetch(PDO::FETCH_ASSOC);
	extract($edit_row);
}
else
{
	header('location:index.php');
}

if (isset($_POST['btnupdate']))
{
	$productname = $_POST['product_name'];
	$description = $_POST['description'];
	$imgfile = $_FILES['product_image']['name'];
	$tmp_dir = $_FILES['product_image']['tmp_name'];
	$imgsize = $_FILES['product_image']['size'];

	if ($imgfile) {
		
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

	else
	{
		$productpic = $edit_row['product_image'];
	}

	if(!isset($errmsg))
	{
		$stmt = $DB_con->prepare('UPDATE tbl_products SET product_name= :pname, description = :pdesc, product_image = :pimage WHERE id = :pid');

		$stmt->bindParam(':pname',$productname);
		$stmt->bindParam(':pdesc',$description);
		$stmt->bindParam(':pimage',$productpic);
		$stmt->bindParam(':pid',$id);

		if($stmt->execute())
			{		
	

?>

<script>
	alert("Successfully Updated!");
	window.location.href='index.php';
</script>
<?php

	}

else
{
	$errmsg = "Sorry, Data couldn't be updated";
}

}
}
?>


<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Update Product Information</title>
	<script src="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/3.4.1/js/bootstrap.min.js" integrity="sha512-oBTprMeNEKCnqfuqKd6sbvFzmFQtlXS3e0C/RGFV0hD6QzhHV+ODfaQbAlmY6/q0ubbwlAM/nCJjkrgA3waLzg==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>

	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/3.4.1/css/bootstrap.min.css" integrity="sha512-Dop/vW3iOtayerlYAqCgkVr2aTr2ErwwTYOvRFUpzl2VhCMJyjQF0Q9TjUXIo6JhuM/3i0vVEt2e/7QQmnHQqw==" crossorigin="anonymous" referrerpolicy="no-referrer" />

	<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/js/bootstrap.min.js" integrity="sha384-+sLIOodYLS7CIrQpBjl+C7nPvqq+FbNUBDunl/OZv93DB7Ln/533i8e/mZXLi/P+" crossorigin="anonymous"></script>
</head>
<body>
	<div>
	<h1>Update Products. <a href="index.php">All Products</a></h1>
	</div>
	<form method="post" enctype="multipart/form-data" class="form-group">

		<?php

			if(isset($errmsg))
			{

		?>
		<div>
			<span></span>&nbsp;<?php echo $errmsg; ?>
		</div>
		<?php
			}
		?>
		<table class="table table-responsive">
			<tr>
				<td>
					<label>Product Name</label>
				</td>
				<td>
					<input type="text" name="product_name" class="form-control" placeholder="Enter Product name" value="<?php echo $edit_row['product_name'];?>" required>
				</td>
			</tr>

			<tr>
				<td>
					<label>Description</label>
					<textarea name="description" class="form-control" rows="3" cols="10" placeholder="description" required><?php echo $edit_row['description'];?></textarea>
				</td>
			</tr>
			<tr>
				<td>
					<label>Product Image</label>

				</td>
				<td>
					<p>
						<img src="product_images/<?php echo $edit_row['product_image'];?>" width="200px" height="200px">
					</p>
					<input type="file" name="product_image" class="form-control" accept="image/*">
				</td>
			</tr>
			<td colspan="2">
				<button style="submit" name="btnupdate" class="btn btn-primary"><span class="glyphicon glyphicon-update"></span>&nbsp;Update</button>
				<a href="index.php" class="btn btn-warning">Cancel</a>
			</td>
		</table>
	</form>

</body>
</html>