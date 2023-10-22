<?php
////////////////////////// Create Functions /////////////////////////////////////
/*
 * add new product
 */
function insert($db){
//INSERT INTO
$name = $_POST['name'];
$price = $_POST['price'];
$description = $_POST['description'];
$img = $_POST['img'];
$sql = "INSERT INTO `products`(`name`, `price`, `description`, `img`)
 		VALUES ('$name', '$price', '$description', '$img')";
	

 $result = mysqli_query($db, $sql);
 if($result): ?>
 	<div class="alert alert-success" role="alert">
  		This is a success!
	</div>
 <?php else: ?>
 	<div class="alert alert-danger" role="alert">
  		This is a danger!
	</div>
 <?php endif; 
}

/*
 * update product by id
 */
function update($db){

//UPDATE

$id = $_POST['id'];
$name = $_POST['name'];
$price = $_POST['price'];
$description = $_POST['description'];
$img = $_POST['img'];
$sql = "UPDATE `products` SET `name`='$name',`price`= $price,`img`='$img',`description`='$description' WHERE `id` = $id";



 $result = mysqli_query($db, $sql);
 if($result): ?>
 	<div class="alert alert-success" role="alert">
  		Update is a success!
	</div>
 <?php else: ?>
 	<div class="alert alert-danger" role="alert">
  		Update is a danger!
	</div>
 <?php endif; 
}

/*
 * delete product by id
 */
function delete($id){
	global $db;
	// DELETE
	$id = $_POST['id'];
	$sql = "DELETE FROM `products`
	WHERE ID=$id;";
	$result = mysqli_query($db, $sql);
}
if (isset($_POST['delete'])) {
	$id = $_POST['prodid'];
	delete($id);
	header("location:index.php");
}
?>
