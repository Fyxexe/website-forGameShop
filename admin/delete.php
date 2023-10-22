<?php include 'inc/header.php' ?>
<main class="main-content container">
	<h1 class="text-center">Admin Dashboard</h1>
	<hr>
	<div class="admin_menu">
		<ul class="nav nav-pills nav-justified">
		  <li class="nav-item">
		    <a class="nav-link " href="index.php">Add Product</a>
		  </li>
		  <li class="nav-item">
		    <a class="nav-link" href="update.php">Update Product</a>
		  </li>
		  <li class="nav-item">
		    <a class="nav-link active" href="delete.php">Delete Product</a>
		  </li>
		</ul>
	</div>
	<hr>
	<h2 class="text-center">Delete Product</h2>
	<div class="form">
		<form method="post">
			<div class="form-group">
				<label for="exampleInputEmail1">Product ID</label>
				<input type="number" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Enter product id" name="id">
			</div>
		<input type="submit" class="btn input-btn" name="delete">
		</form>
		<br>
	</div>
</main>
<?php include 'inc/footer.php' ?>