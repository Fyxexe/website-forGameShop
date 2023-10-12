<?php 
  $rootFolderName = 'Web2';
  
$product1 = [
    'title' => 'GTA 5',
    'price' => 2.45 ,
    'imgPath' => '../../public/products/productOne_gta.jpeg',
    'moreInfo' => "Grand Theft Auto V is a 2013 action-adventure game developed by Rockstar North and published by Rockstar Games. It is the seventh main entry in the Grand Theft Auto series, following 2008's Grand Theft Auto IV, and the fifteenth instalment overall. Set within the fictional state of San Andreas, based on Southern California, the single-player story follows three protagonists—retired bank robber Michael De Santa, street gangster Franklin Clinton, and drug dealer and gunrunner Trevor Philips—and their attempts to commit heists while under pressure from a corrupt government agency and powerful criminals. The open world design lets players freely roam San Andreas's open countryside and the fictional city of Los Santos, based on Los Angeles.",
    'index' => 1
];

$product2 = [
    'title' => 'GTA 5',
    'price' => 8.40 ,
    'imgPath' => '../../public/products/productOne_gta.jpeg',
    'moreInfo' => "Grand Theft Auto V is a 2013 action-adventure game developed by Rockstar North and published by Rockstar Games. It is the seventh main entry in the Grand Theft Auto series, following 2008's Grand Theft Auto IV, and the fifteenth instalment overall. Set within the fictional state of San Andreas, based on Southern California, the single-player story follows three protagonists—retired bank robber Michael De Santa, street gangster Franklin Clinton, and drug dealer and gunrunner Trevor Philips—and their attempts to commit heists while under pressure from a corrupt government agency and powerful criminals. The open world design lets players freely roam San Andreas's open countryside and the fictional city of Los Santos, based on Los Angeles.",
    'index' => 2
];
 
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href=".././assets/style/main.css">
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
        <div class="products-box">
            <div class="products-row">
                <div class="product_box">
                    <img src="<?php echo $product1['imgPath'];?>" alt="">
                    <h1><?php echo $product1['title']; ?></h1>
                    <p> <?php echo $product1['price'] . '$'; ?></p>
                    <button class="button-18" role="button" id="<?php echo $product1['index'];?>"><a href="#!">Buy!</a></button>
                </div>
                <div class="product_box">
                    <img src="<?php echo $product2['imgPath'];?>" alt="">
                    <h1><?php echo $product2['title']; ?></h1>
                    <p> <?php echo $product2['price'] . '$'; ?></p>
                    <button class="button-18" role="button" id="<?php echo $product2['index'];?>"><a href="#!">Buy!</a></button>
                </div>
                <div class="product_box">
                    <img src="<?php echo $product2['imgPath'];?>" alt="">
                    <h1><?php echo $product2['title']; ?></h1>
                    <p> <?php echo $product2['price'] . '$'; ?></p>
                    <button class="button-18" role="button" id="<?php echo $product2['index'];?>"><a href="#!">Buy!</a></button>
                </div>
            </div>
            <div class="products-row">
                <div class="product_box">
                    <img src="<?php echo $product1['imgPath'];?>" alt="">
                    <h1><?php echo $product1['title']; ?></h1>
                    <p> <?php echo $product1['price'] . '$'; ?></p>
                    <button class="button-18" role="button" id="<?php echo $product1['index'];?>"><a href="#!">Buy!</a></button>
                </div>
                <div class="product_box">
                    <img src="<?php echo $product2['imgPath'];?>" alt="">
                    <h1><?php echo $product2['title']; ?></h1>
                    <p> <?php echo $product2['price'] . '$'; ?></p>
                    <button class="button-18" role="button" id="<?php echo $product2['index'];?>"><a href="#!">Buy!</a></button>
                </div>
                <div class="product_box">
                    <img src="<?php echo $product2['imgPath'];?>" alt="">
                    <h1><?php echo $product2['title']; ?></h1>
                    <p> <?php echo $product2['price'] . '$'; ?></p>
                    <button class="button-18" role="button" id="<?php echo $product2['index'];?>"><a href="#!">Buy!</a></button>
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