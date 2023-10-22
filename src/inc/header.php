<?php include 'db.php' ?>
<?php include 'action.php' ?>
<?php
session_start();

if (isset($_SESSION['username'])) {
    $username = $_SESSION['username'];
} else {
    $username = null;
}
?>


<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/main.css">
    <link rel="stylesheet" href="css/media.css">
    <link rel="shortcut icon" href="./public/icons/ico.png" type="image/x-icon">
    <title>Home</title>
</head>

<body>

</body>
<header class="header">
        <ul class="menu">
            <li class="menu-logo">
                <h1>Crypto</h1>
            </li>
            <li class="menu-bar">
                <ul class="nav-bar">
                    <li class="nav-item"><a href="index.php">Home</a></li>
                    <li class="nav-item"><a href="products.php">Products</a></li>
                    <li class="nav-item"><a href="aboutus.php">About Us</a></li>
                    <li class="nav-item"><a href="feedback.php">Feedback</a></li>
                    <ul class="account-mange">
                        <?php
                        if ($username) {
                            echo '<div class="user-info">' . '<img src="./public/icons/avatar.png" alt="" width="30px">' . $username . '</div>';
                        } else {
                            echo '<li><button class="button-62" role="button"><a href="login.php">Sign In</a></button></li>';
                            echo '<li><button class="button-62" role="button"><a href="registration.php">Sign Up</a></button></li>';
                        }
                        ?>
                    </ul>
                </ul>
            </li>
        </ul>
    </header>

