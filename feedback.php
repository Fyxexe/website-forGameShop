<?php
include './src/inc/header.php';

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    if (isset($_POST["confirmed"]) && $_POST["confirmed"] == "yes") {
        $to = "artgameplay4@gmail.com.com";
        $subject = $_POST["subject"];
        $message = $_POST["message"];
        $headers = "From: " . $_POST["email"];

        mail($to, $subject, $message, $headers);
        echo '<dialog open><p>Сообщение успешно отправлено!</p><form method="post"><button>Закрыть</button></form></dialog>';
    }
}

?>




<div class="feedback-container">
    <h2>Обратная связь</h2>
    <form method="post">
        <label for="subject">Заголовок сообщения:</label>
        <input type="text" id="subject" name="subject" required>
        <br>
        <label for="message">Текст сообщения:</label>
        <textarea id="message" name="message" required></textarea>
        <br>
        <label for="email">Ваш Email:</label>
        <input type="email" id="email" name="email" required>
        <br>
        <label for="confirmed">Я уверен, что хочу отправить это сообщение:</label>
        <input type="checkbox" id="confirmed" name="confirmed" value="yes">
        <br>
        <input type="submit" value="Отправить">
    </form>
</div>

<?php include './src/inc/footer.php'; ?>