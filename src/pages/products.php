<?php 
  $rootFolderName = 'Web2';
  
  include '../inc/db.php';
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../assets/style/main.css">
    <!-- <link rel="stylesheet" href=".././assets/style/media.css"> -->
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
        <div class="products-box">
    <?php foreach ($products as $value) { ?>
        <div class="product-box">
            <img src="<?php echo $value['imgPath'] ?>" alt="" width="200px">
            <h1><?php echo $value['title'] ;?></h1>
            <p><?php echo $value['price'] . ' '.'$';?></p>
            <a href="./single.php?id=<?php echo $value['index'] ?>" class="button-18">BUY</a>
        </div>
    <?php } ?>
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