<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h1>Feedback received</h1>
    <section>
        <h2>Thank You for your feedback</h2>
        <?php
        if ($_SERVER["REQUEST_METHOD"] == "POST") {
            $fullName = $_POST["fullName"];
            $country = $_POST["country"];
            $address = $_POST["address"];
            $customerFeedback = $_POST["customerFeedback"];
            $rating = $_POST["rating"];

            echo "<p><strong>Full Name:</strong> $fullName</p>";
            echo "<p><strong>Country:</strong> $country</p>";
            echo "<p><strong>Address:</strong> $address</p>";
            echo "<p><strong>Feedback:</strong> $customerFeedback</p>";
            echo "<p><strong>Rating:</strong> $rating</p>";
        }
        else{
            echo"<p>error</p>";
        }
        ?>
    </section>
</body>
</html>