<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Review Form</title>
    <link rel="stylesheet" href="styles.css">
</head>
<body>
    <div class="container">
        <h1>Submit Your Review</h1>
        <form action="submit_review.php" method="POST">
            <label for="name">Name:</label>
            <input type="text" id="name" name="name" required>

            <label for="email">Email:</label>
            <input type="email" id="email" name="email" required>

            <label for="review">Review:</label>
            <textarea id="review" name="review" rows="5" required></textarea>

            <button type="submit">Submit Review</button>
        </form>
    </div>
</body>
</html>
