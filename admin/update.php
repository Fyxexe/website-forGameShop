<?php include 'inc/header.php' ?>
<main class="main-content container">
	<h1 class="text-center">Admin Dashboard</h1>
	<hr>
	<div class="admin_menu">
		<ul class="nav nav-pills nav-justified">
		  <li class="nav-item">
		    <a class="nav-link" href="index.php">Add Product</a>
		  </li>
		  <li class="nav-item">
		    <a class="nav-link active" href="update.php">Update Product</a>
		  </li>
		  <li class="nav-item">
		    <a class="nav-link" href="delete.php">Delete Product</a>
		  </li>
		</ul>
	</div>
	<hr>
	<h2 class="text-center">Update Product</h2>
	<div class="form">
		<form method="post">
			<div class="form-group">
				<label for="exampleInputEmail1">Product ID</label>
				<input type="number" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Enter product id" name="id">
			</div>
			<div class="form-group">
				<label for="exampleInputEmail1">Product Name</label>
				<input type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Enter product name" name="name">
			</div>
			<div class="form-group">
				<label for="exampleInputEmail1">Product Price</label>
				<input type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Enter product price" name="price">
			</div>
			<div class="form-group">
				<label for="exampleInputEmail1">Product Image</label>
				<input type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Enter product image name" name="img">
			</div>
			<div class="form-group">
			  <label for="comment">Product description</label>
			  <textarea class="form-control" rows="5" id="comment" name="description"></textarea>
			</div>
		<input type="submit" class="btn input-btn" name="update">
		</form>
		<br>
		<?php if (isset($_POST['update'])) {update($db);}?>
	</div>
</main>
<?php include 'inc/footer.php' ?>