<?php

include_once 'dbConfig.php';

if(isset($_GET['del_id']))
{
	$stmt_select = $DB_con->prepare('SELECT product_image FROM tbl_products WHERE id=:pid');
	$stmt_select->execute(array(':pid'=>$_GET['del_id']));
	$imgrow = $stmt_select->fetch(PDO::FETCH_ASSOC);
	unlink("product_images/".$imgrow['product_image']);

	$stmt_delete = $DB_con->prepare('DELETE FROM tbl_products WHERE id=:pid');

	$stmt_delete->bindParam(':pid',$_GET['del_id']);
	$stmt_delete->execute();
	header('location:index.php');
}

?>

<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>All Products</title>

	<script src="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/3.4.1/js/bootstrap.min.js" integrity="sha512-oBTprMeNEKCnqfuqKd6sbvFzmFQtlXS3e0C/RGFV0hD6QzhHV+ODfaQbAlmY6/q0ubbwlAM/nCJjkrgA3waLzg==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>

	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/3.4.1/css/bootstrap.min.css" integrity="sha512-Dop/vW3iOtayerlYAqCgkVr2aTr2ErwwTYOvRFUpzl2VhCMJyjQF0Q9TjUXIo6JhuM/3i0vVEt2e/7QQmnHQqw==" crossorigin="anonymous" referrerpolicy="no-referrer" />

	<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/js/bootstrap.min.js" integrity="sha384-+sLIOodYLS7CIrQpBjl+C7nPvqq+FbNUBDunl/OZv93DB7Ln/533i8e/mZXLi/P+" crossorigin="anonymous"></script>
</head>
<body>
<nav class="navbar navbar-default">
  <div class="container-fluid">
    <!-- Brand and toggle get grouped for better mobile display -->
    <div class="navbar-header">
      <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1" aria-expanded="false">
        <span class="sr-only">Toggle navigation</span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
      </button>
      <a class="navbar-brand" href="#">Brand</a>
    </div>

    <!-- Collect the nav links, forms, and other content for toggling -->
    <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
      <ul class="nav navbar-nav">
        <li class="active"><a href="addNew.php">Add Products <span class="sr-only">(current)</span></a></li>
        <li><a href="#">Category</a></li>
       
      </ul>
      <form class="navbar-form navbar-left">
        <div class="form-group">
          <input type="text" class="form-control" placeholder="Search">
        </div>
        <button type="submit" class="btn btn-default">Submit</button>
      </form>
      <ul class="nav navbar-nav navbar-right">
        <li><a href="#">Login</a></li>
        <li><a href="#">Register</a></li>
        
      </ul>
    </div><!-- /.navbar-collapse -->
  </div><!-- /.container-fluid -->
</nav>

<div class="row">
	<?php 

	$stmt = $DB_con->prepare('SELECT id,product_name,description,product_image FROM tbl_products ORDER BY id DESC');

	$stmt->execute();

	if($stmt->rowCount() > 0)
	{
		while($row = $stmt->fetch(PDO::FETCH_ASSOC))
		{
			extract($row);

	?>

	<div class="col-xs-3">
		<p class="page-header"><?php echo $row['product_name']."&nbsp;/&nbsp;".$row['description'];?></p>
	<img src="product_images/<?php echo $row['product_image'];?>" class="img-rounded" width="200px" height="200px">

	<p class="page-header">
		<span>
			<a href="editform.php?edit_id=<?php echo $row['id'];?>" title="Click for Edit" onclick="return confirm('Sure to Edit?')" class="btn btn-info">Edit</a>


			<a href="?del_id=<?php echo $row['id'];?>" title="Click for Delete" onclick="return confirm('Sure to Delete?')" class="btn btn-danger">Delete</a>
		</span>
	</p>
	</div>
	<?php

}
}
	?>
</div>

</body>
</html>