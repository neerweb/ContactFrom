<?php
include 'db.php'; // Include the database connection

// Initialize variables for form submission
$message = '';

// Handle form submission
if (isset($_POST['submit'])) {
    $name = $_POST['name'];
    $email = $_POST['email'];
    $phone = $_POST['phone'];
    $messageText = $_POST['message'];

    // Insert data into the Contacts table
    $sql = "INSERT INTO Contacts (Name, Email, Phone, Message) VALUES (?, ?, ?, ?)";
    $params = array($name, $email, $phone, $messageText);
    $stmt = sqlsrv_query($conn, $sql, $params);

    // Check for errors
    if ($stmt === false) {
        $message = "<p style='color: red;'>Error: " . print_r(sqlsrv_errors(), true) . "</p>";
    } else {
        $message = "<p style='color: green;'>Thank you for contacting us!</p>";
    }
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Contact Us</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            margin: 0;
            padding: 0;
            background-color: #f9f9f9;
        }

        .container {
            width: 50%;
            margin: 50px auto;
            background: white;
            padding: 20px;
            border-radius: 8px;
            box-shadow: 0px 2px 8px rgba(0, 0, 0, 0.1);
        }

        h1 {
            text-align: center;
            color: #4CAF50;
        }

        form {
            display: flex;
            flex-direction: column;
            gap: 15px;
        }

        input, textarea, button {
            font-size: 16px;
            padding: 10px;
            border-radius: 5px;
            border: 1px solid #ccc;
        }

        textarea {
            resize: none;
            height: 100px;
        }

        button {
            background-color: #4CAF50;
            color: white;
            border: none;
            cursor: pointer;
        }

        button:hover {
            background-color: #45a049;
        }

        .message {
            margin-top: 10px;
            text-align: center;
        }
    </style>
</head>
<body>
    <div class="container">
        <h1>Contact Us</h1>
        <?php echo $message; ?> <!-- Display success or error message -->
        <form method="POST" action="contact.php">
            <input type="text" name="name" placeholder="Your Name" required>
            <input type="email" name="email" placeholder="Your Email" required>
            <input type="text" name="phone" placeholder="Your Phone (Optional)">
            <textarea name="message" placeholder="Your Message"></textarea>
            <button type="submit" name="submit">Submit</button>
        </form>
    </div>
</body>
</html>
