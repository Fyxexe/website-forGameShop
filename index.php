<?php
        include './src/inc/header.php';
?>

<div class="container">
  <div class="header-info-box">
    <div class="info_box_text">
        <h1>Crypto game shop</h1>
        <p>the largest and coolest gaming store in the entire CIS, 
            the best players buy from us, and those who don’t buy should buy</p>
            <div class="info_buttons">
            <button class="button-79" role="button"><a href="./products.php">Go to Products</a></button>
            <button class="button-78" role="button">more info</button>
            </div>
    </div>
      <img src="/Web2/public/icons/game.png" alt="Game Image" id='header_info_image'>
   </div>
    </div>

    <main class="main">
        <div class="game-container">
            <div class="game-title">Welcome to Our Snake Game</div>
            <p class="game-description">Eat the apples and grow the snake. Use arrow keys to control.</p>
            <button href="#" class="play-button" id="start-game">Play Now</button>
        </div>
        <div class="snake-game-container">
        <canvas id="snakeCanvas" width="300" height="300" style="background-color: #fff;"></canvas>

<div id="snakeLength">Snake Length: 1</div>
        </div>
    </main>

    <?php
        include './src/inc/footer.php';
    ?>
 
