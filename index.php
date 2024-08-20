<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Contact Form</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <!-- Main heading for the contact page -->
    <h1>Contact</h1>

    <!-- Form to capture user input and send it to send_email.php using POST method -->
    <form action="send_email.php" method="post">
        <!-- Label and input field for the user's name -->
        <label for="name">Name:</label>
        <input type="text" id="name" name="name" required>

        <!-- Label and input field for the user's email -->
        <label for="email">Email:</label>
        <input type="email" id="email" name="email" required>

        <!-- Label and input field for the subject of the message -->
        <label for="subject">Subject:</label>
        <input type="text" id="subject" name="subject" required>

        <!-- Label and textarea for the user's message -->
        <label for="message">Message:</label>
        <textarea id="message" name="message" required></textarea>

        <!-- Submit button to send the form data -->
        <button type="submit">Send</button>
    </form>
</body>
</html>
