<?php
// Check if the form was submitted
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Sanitize user inputs to prevent XSS attacks
    $name = htmlspecialchars(trim($_POST['name']));
    $email = htmlspecialchars(trim($_POST['email']));
    $phone = htmlspecialchars(trim($_POST['phone']));
    $gender = htmlspecialchars(trim($_POST['gender']));
    $address = htmlspecialchars(trim($_POST['address']));

    // Display the submitted data
    echo "<!DOCTYPE html>";
    echo "<html lang='en'>";
    echo "<head>";
    echo "<meta charset='UTF-8'>";
    echo "<meta name='viewport' content='width=device-width, initial-scale=1.0'>";
    echo "<title>Registration Successful</title>";
    echo "<style>
            body {
                font-family: Arial, sans-serif;
                background-color: #1e1e2f;
                color: #ffffff;
                text-align: center;
                padding: 20px;
            }
            .container {
                background-color: #29293d;
                padding: 20px;
                border-radius: 10px;
                max-width: 500px;
                margin: 50px auto;
                box-shadow: 0 10px 30px rgba(0, 0, 0, 0.5);
            }
            h2 {
                color: #4ecdc4;
            }
            p {
                margin: 10px 0;
                font-size: 1.1rem;
            }
          </style>";
    echo "</head>";
    echo "<body>";
    echo "<div class='container'>";
    echo "<h2>Registration Successful</h2>";
    echo "<p><strong>Name:</strong> $name</p>";
    echo "<p><strong>Email:</strong> $email</p>";
    echo "<p><strong>Phone:</strong> $phone</p>";
    echo "<p><strong>Gender:</strong> $gender</p>";
    echo "<p><strong>Address:</strong> $address</p>";
    echo "</div>";
    echo "</body>";
    echo "</html>";
} else {
    // Redirect to the form if accessed directly
    header("Location: index.html");
    exit();
}
?>
