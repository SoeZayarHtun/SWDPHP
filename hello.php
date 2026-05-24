<!DOCTYPE html>
<html>
<head>
    <title>PHP Form to .txt File</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            margin: 40px;
        }
        form {
            background: #f9f9f9;
            padding: 20px;
            width: 300px;
            border-radius: 8px;
        }
        input, textarea {
            width: 100%;
            margin-bottom: 10px;
            padding: 8px;
        }
        .message {
            margin-top: 20px;
            padding: 15px;
            background: #e2f0d9;
            border: 1px solid #b7dfb3;
        }
    </style>
</head>
<body>

    <h2>Contact Form</h2>
    <form method="POST" action="hello.php">
        <label>Your Name:</label>
        <input type="text" name="name" required>

        <label>Your Message:</label>
        <textarea name="message" required></textarea>

        <input type="submit" value="Send Message">
    </form>

    <?php
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        $name = htmlspecialchars($_POST['name']);
        $message = htmlspecialchars($_POST['message']);

        // Save to messages.txt
        $file = fopen("messages.txt", "a"); // "a" means append
        $content = "Name: $name\nMessage: $message\n---\n";
        fwrite($file, $content);
        fclose($file);

        echo "<div class='message'>";
        echo "<strong>Thank you, $name!</strong><br>";
        echo "Your message has been saved.";
        echo "</div>";
    }
    ?>

</body>
</html>
