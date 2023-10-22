<?php
session_start();

$correctCode = "123";
$correctPassword = "321";

if (isset($_POST['insert'])) {
    $enteredCode = $_POST['code'];
    $enteredPassword = $_POST['password'];

    if ($enteredCode === $correctCode && $enteredPassword === $correctPassword) {
        $_SESSION['is_logged_in'] = true;
    } else {
        $error_message = "Неверный код или пароль. Попробуйте снова.";
    }
}

if (isset($_SESSION['is_logged_in']) && $_SESSION['is_logged_in'] === true) {
    include 'inc/header.php';
    ?>
    <main class="main-content container">
        <h1 class="text-center">Admin Dashboard</h1>
        <hr>
        <div class="admin_menu">
            <ul class="nav nav-pills nav-justified">
                <li class="nav-item">
                    <a class="nav-link active" href="index.php">Add Product</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="update.php">Update Product</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="delete.php">Delete Product</a>
                </li>
            </ul>
        </div>
        <hr>
        <h2 class="text-center">Add Product</h2>
        <div class="form">
            <form method="post">
                <div class="form-group">
                    <label for="exampleInputEmail1">Product Name</label>
                    <input type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Enter product name" name="name">
                </div>
                <div class="form-group">
                    <label for="exampleInputEmail1">Product Price</label>
                    <input type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Enter product price" name "price">
                </div>
                <div class="form-group">
                    <label for="exampleInputEmail1">Product Image</label>
                    <input type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Enter product image name" name="img">
                </div>
                <div class="form-group">
                    <label for="comment">Product description</label>
                    <textarea class="form-control" rows="5" id="comment" name="description"></textarea>
                </div>
                <input type="submit" class="btn input-btn" name="insert">
            </form>
        </div>
    </main>
    <?php
    include 'inc/footer.php';
} else {
    include 'inc/header.php';
    ?>
    <main class="main-content container">
        <h1 class="text-center">Admin Login</h1>
        <hr>
        <div class="form">
            <?php if (isset($error_message)) { echo "<p class='text-danger'>$error_message</p>"; } ?>
            <form method="post">
                <div class="form-group">
                    <label for="code">Код</label>
                    <input type="text" class="form-control" id="code" name="code">
                </div>
                <div class="form-group">
                    <label for="password">Пароль</label>
                    <input type="password" class="form-control" id="password" name="password">
                </div>
                <input type="submit" class="btn input-btn" name="insert">
            </form>
        </div>
    </main>
    <?php
    include 'inc/footer.php';
}
?>
