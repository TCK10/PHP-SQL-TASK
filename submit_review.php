<?php
// Database connection details
$host = 'localhost';
$user = 'root';
$password = '';
$dbname = 'reviews_db';

// Establish connection
$conn = new mysqli($host, $user, $password, $dbname);

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

// Validate and sanitize input
$name = htmlspecialchars(trim($_POST['name']));
$email = htmlspecialchars(trim($_POST['email']));
$review = htmlspecialchars(trim($_POST['review']));

// Check if inputs are not empty
if (!empty($name) && !empty($email) && !empty($review)) {
    // Insert data into database
    $stmt = $conn->prepare("INSERT INTO reviews (name, email, review) VALUES (?, ?, ?)");
    $stmt->bind_param("sss", $name, $email, $review);

    if ($stmt->execute()) {
        echo "Review submitted successfully!";
    } else {
        echo "Error: " . $stmt->error;
    }
    $stmt->close();
} else {
    echo "All fields are required!";
}

// Close connection
$conn->close();
?>
