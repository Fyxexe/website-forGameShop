<?php 
  $rootFolderName = 'Web2';
?>

<?php include "./src/inc/header.php";
   ?>
    <main>
        <div class="container">
        <div class="products-box">
    <?php  $products = select('products');?>
    <?php foreach ($products as $value) { ?>
        <div class="product-box">
            <img src="./public/products/<?php echo $value['img'] ?>" alt="" width="200px">
            <h1><?php echo $value['name'] ;?></h1>
            <p><?php echo $value['price'] . ' '.'$';?></p>
            <a href="./single.php?id=<?php echo $value['id'] ?>" class="button-18">BUY</a>
        </div>
    <?php } ?>
</div>

       
        </div>
        </div>
    </main>

    <?php
        include './src/inc/footer.php';
    ?>
    

