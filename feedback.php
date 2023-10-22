<?php
include './src/inc/header.php';

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    if (isset($_POST["confirmed"]) && $_POST["confirmed"] == "yes") {
        $to = "artgameplay4@gmail.com.com";
        $subject = $_POST["subject"];
        $message = $_POST["message"];
        $headers = "From: " . $_POST["email"];

        mail($to, $subject, $message, $headers);
        echo '<dialog open><p>Message sent successfully!</p><form method="post"><button>Close</button></form></dialog>';
    }
}

?>




<div class="feedback-container">
    <h2>Feedback</h2>
    <form method="post">
        <label for="subject">The headline of the message:</label>
        <input type="text" id="subject" name="subject" required>
        <br>
        <label for="message">Message text:</label>
        <textarea id="message" name="message" required></textarea>
        <br>
        <label for="email">Your Email:</label>
        <input type="email" id="email" name="email" required>
        <br>
        <label for="confirmed">I'm sure I want to send this message:</label>
        <input type="checkbox" id="confirmed" name="confirmed" value="yes">
        <br>
        <input type="submit" value="Send">
    </form>
</div>

<?php include './src/inc/footer.php'; ?>