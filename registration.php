<?php
include './src/inc/header.php';

$error = '';

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $username = $_POST['username'];
    $lastname = $_POST['lastname'];
    $email = $_POST['email'];
    $password = $_POST['password'];

    $hashedPassword = password_hash($password, PASSWORD_DEFAULT);

    if ($hashedPassword) {
        $stmt = mysqli_prepare($db, "INSERT INTO accounts (name, lastname, email, password) VALUES (?, ?, ?, ?)");

        if ($stmt) {
            mysqli_stmt_bind_param($stmt, "ssss", $username, $lastname, $email, $hashedPassword);

            if (mysqli_stmt_execute($stmt)) {
                header('Location: login.php');
                exit;
            } else {
                $error = "Registration failed. Please try again later. " . mysqli_error($db);
            }
        } else {
            $error = "Prepared statement creation failed.";
        }
    } else {
        $error = "Password hashing failed.";
    }
}
?>

<div class="registration-container">
    <h2>Register</h2>
    <form method="post">
        <input type="text" name="username" placeholder="Username" required>
        <input type="text" name="lastname" placeholder="Lastname" required>
        <input type="email" name="email" placeholder="Email" required>
        <input type="password" name="password" placeholder="Password" required>
        <button type="submit">Register</button>
    </form>
    <?php
    if ($error !== '') {
        echo '<p class="error">' . $error . '</p>';
    }
    ?>
</div>

<?php
include 'footer.php';
?>
