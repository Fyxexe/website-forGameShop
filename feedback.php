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


<style>
    /* CSS стили для обратной связи */
    .feedback-container {
        background-color: #fff;
        color: #000;
        padding: 20px;
        text-align: center;
        margin: 100px auto;
        border: 1px solid #ccc;
        border-radius: 5px;
        max-width: 400px;
        box-shadow: 0 0 10px rgba(0, 0, 0, 0.2);
    }

    .feedback-container h2 {
        font-size: 24px;
        margin-bottom: 20px;
    }

    .feedback-container label {
        display: block;
        font-weight: bold;
        margin: 10px 0;
    }

    .feedback-container input[type="text"],
    .feedback-container input[type="email"],
    .feedback-container textarea {
        width: 100%;
        padding: 10px;
        margin: 5px 0;
        border: 1px solid #ccc;
        border-radius: 3px;
    }

    .feedback-container input[type="checkbox"] {
        margin-right: 5px;
    }

    .feedback-container input[type="submit"] {
        background-color: #000;
        color: #fff;
        padding: 10px 20px;
        border: none;
        border-radius: 3px;
        cursor: pointer;
    }

    .feedback-container input[type="submit"]:hover {
        background-color: #333;
    }

    /* Стили для диалогового окна */
    dialog {
        position: absolute;
        top: 50%;
        left: 50%;
        transform: translate(-50%, -50%);
        background-color: #fff;
        padding: 20px;
        border: 1px solid #ccc;
        border-radius: 5px;
        box-shadow: 0 0 10px rgba(0, 0, 0, 0.2);
    }

    dialog p {
        font-size: 18px;
        margin-bottom: 20px;
    }

    dialog button {
        background-color: #000;
        color: #fff;
        padding: 10px 20px;
        border: none;
        border-radius: 3px;
        cursor: pointer;
    }

    dialog button:hover {
        background-color: #333;
    }
</style>

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