<?php
include 'productData.php';

if (isset($_GET['id'])) {
    $id = $_GET['id'];
    if (isset($products[$id - 1])) { 
        $product = $products[$id - 1];
?>
       <!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../assets/style/main.css">
    <link rel="stylesheet" href=".././assets/style/media.css">
    <title>Home</title>
</head>
<body>
    <header class="header">
    <div class="container">
    <?php
        include "../components/header.php";
    ?>

    </div>
    </header>
    <main>
        <div class="container">

        <div class="specific-box">
       <div class='specific__image'><?php  echo '<img src="' . $product['imgPath'] . '" alt="" width="300px">'; ?></div>
       <div class="specific__info">
        <h1><?php echo $product['title'];?></h1>
        <p><?php echo $product['moreInfo'];?></p>
        <div class="specific__buttons">
        <button class="button-24" role="button">buy!</button>
        <button class="button-24" role="button"><a href="./products.php">back</a></button>
        </div>
       </div>
    </div>
   
        </div>
    </main>

    <footer>
    <p>&copy; 2023 Fyx</p>
    </footer>
    <script src="./src/assets/scripts/index.js"></script>
</body>
</html>
<?php
    } else {
        echo 'Product not found';
    }
} else {
    echo 'Product index not specified';
}
?>
