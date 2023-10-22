<?php
include './src/inc/header.php';

if ($_SERVER["REQUEST_METHOD"] == "POST" && isset($_SESSION['username'])) {
    $product_id = $_POST['product_id'];
    $comment = $_POST['comment'];
    $author = $_SESSION['username'];

    $query = "INSERT INTO reviews (product_id, author, comment) VALUES (?, ?, ?)";

    if ($stmt = mysqli_prepare($db, $query)) {
        mysqli_stmt_bind_param($stmt, "iss", $product_id, $author, $comment);

        if (mysqli_stmt_execute($stmt)) {
            header('Location: single.php?id=' . $product_id);
        } else {
            echo "Ошибка при выполнении SQL-запроса: " . mysqli_error($db);
        }
    } else {
        echo "Ошибка при создании подготовленного выражения: " . mysqli_error($db);
    }
} else {
    header('Location: login.php');
    exit;
}

include './src/inc/footer.php';
?>
