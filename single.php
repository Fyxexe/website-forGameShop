<?php
include './src/inc/header.php';
$id = $_GET['id'];
$product = select('products', $id);

function getCommentsForProduct($product_id) {
    global $db; 

    $query = "SELECT author, comment FROM reviews WHERE product_id = ?";
    $stmt = mysqli_prepare($db, $query);

    if ($stmt) {
        mysqli_stmt_bind_param($stmt, "i", $product_id);
        mysqli_stmt_execute($stmt);
        $result = mysqli_stmt_get_result($stmt);

        $comments = [];
        while ($row = mysqli_fetch_assoc($result)) {
            $comments[] = $row;
        }

        return $comments;
    } else {
        return [];
    }
}

?>

<main>
    <div class="container">
        <div class="specific-box">
            <div class='specific__image'>
                <img src="public/products/<?php echo $product->img; ?>" alt="" width="300px">
            </div>
            <div class="specific__info">
                <h1><?php echo $product->name; ?></h1>
                <p><?php echo $product->description; ?></p>
                <div class="specific__buttons">
                    <button class="button-24" role="button">Buy!</button>
                    <button class="button-24" role="button"><a href="./products.php">Back</a></button>
                </div>
            </div>
        </div>
        <?php

        if (isset($_SESSION['username'])) {
            echo '
    <form method="post" action="add_comment.php" class="comment-box">
    <input type="hidden" name="product_id" value="' . $id . '">
    <textarea name="comment" placeholder="Add a comment" required></textarea>
    <button type="submit">Add Comment</button>
</form>

    ';
        } else {
            echo '<p><a href="./login.php">Login</a> to leave a comment.</p>';
        }
        ?>
    </div>
    <div class="comments">
    <h2>Comments</h2>
    <?php
    $comments = getCommentsForProduct($id); // Замените эту функцию на ваш способ получения комментариев
    
    if (!empty($comments)) {
        foreach ($comments as $comment) {
            echo '<p><strong>' . $comment['author'] . ':</strong> ' . $comment['comment'] . '</p>';
        }
    } else {
        echo '<p>No comments yet.</p>';
    }
    ?>
</div>

</main>

<?php
include './src/inc/footer.php';
?>