<?php 

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="./src/assets/style/main.css">
    <link rel="stylesheet" href="./src/assets/style/media.css">
    <title>Home</title>
</head>
<body>
    <header class="header">
    <div class="container">
    <?php
        include './src/components/header.php';
    ?>
    <?php
        include './src/components/infoBox.php';
    ?>
    </div>
    </header>
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

    <footer>
    <p>&copy; 2023 Fyx</p>
    </footer>
    <script src="./src/assets/scripts/index.js"></script>
</body>
</html>