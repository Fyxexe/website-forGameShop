<?php
    include './src/inc/header.php';
    $id = $_GET['id'];
    $product = select('products',$id);
?>
  
 
    <main>
        <div class="container">

        <div class="specific-box">
       <div class='specific__image'>
       <img src="public/products/<?php echo $product->img ;?>" alt="" width="300px">'
    </div>
       <div class="specific__info">
        <h1><?php echo $product->name;?></h1>
        <p><?php echo $product->description;?></p>
        <div class="specific__buttons">
        <button class="button-24" role="button">buy!</button>
        <button class="button-24" role="button"><a href="./products.php">back</a></button>
        </div>
       </div>
    </div>
   
        </div>
    </main>

    <?php
        include './src/inc/footer.php';
    ?>
 
