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
    'title' => 'CS:GO',
    'price' => 8.40 ,
    'imgPath' => '../../public/products/pr2.jpg',
    'moreInfo' => "counter-Strike: Global Offensive (CS:GO) is a 2012 multiplayer first-person shooter developed by Valve and Hidden Path Entertainment. It is the fourth game in the Counter-Strike series. Developed for over two years, Global Offensive was released for Windows, macOS, Xbox 360, and PlayStation 3 in August 2012, and for Linux in 2014. Valve still regularly updates the game, both with smaller balancing patches and larger content additions",
    'index' => 2
];
$product3 = [
    'title' => 'Assassins Creed',
    'price' => 8.40 ,
    'imgPath' => '../../public/products/pr3.jpg',
    'moreInfo' => "Assassin's Creed is an open-world action-adventure stealth video game franchise published by Ubisoft and developed mainly by its studio Ubisoft Montreal using the game engine Anvil and its more advanced derivatives. Created by Patrice Désilets, Jade Raymond, and Corey May, the Assassin's Creed series depicts a fictional millennia-old struggle between the Assassins, who fight for peace and free will, and the Templars, who desire peace through order and control",
    'index' => 3
];
$product4 = [
    'title' => 'Assassins Creed',
    'price' => 8.40 ,
    'imgPath' => '../../public/products/pr3.jpg',
    'moreInfo' => "Assassin's Creed is an open-world action-adventure stealth video game franchise published by Ubisoft and developed mainly by its studio Ubisoft Montreal using the game engine Anvil and its more advanced derivatives. Created by Patrice Désilets, Jade Raymond, and Corey May, the Assassin's Creed series depicts a fictional millennia-old struggle between the Assassins, who fight for peace and free will, and the Templars, who desire peace through order and control",
    'index' => 4
];

$products = [$product1,$product2,$product3,$product4];
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
                <div class="product_box">
                    <img src="<?php echo $value['imgPath'] ?>" alt="">
                    <h1><?php echo $value['title'] ;?></h1>
                    <p><?php echo $value['price']?></p>
                    <button class="button-18"> more info</button>
                
            </div>
            
            <?php } ?>
       
        </div>
        </div>
    </main>

    <footer>
    <p>&copy; 2023 Fyx</p>
    </footer>
    <script src="./src/assets/scripts/index.js"></script>
</body>
</html>