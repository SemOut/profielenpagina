<?php
// Start of PHP script
// You can initialize variables, include external files, or handle form data here
$title = "My PHP Page";
$message = "Welcome to my PHP page!";
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title><?php echo $title; ?></title> <!-- PHP to insert dynamic title -->
</head>
<body>

    <h1><?php echo $title; ?></h1>
    <p><?php echo $message; ?></p>

    <?php
    // Example of basic PHP logic (e.g., a loop or conditional)
    for ($i = 1; $i <= 5; $i++) {
        echo "<p>Item number $i</p>";
    }

    // Handling form input (if the page is submitted)
    if ($_SERVER['REQUEST_METHOD'] == 'POST') {
        $userName = htmlspecialchars($_POST['name']); // Sanitize input to avoid XSS
        echo "<p>Hello, $userName!</p>";
    }
    ?>

    <!-- Form example to interact with PHP -->
    <form method="POST" action="">
        <label for="name">Enter your name:</label>
        <input type="text" id="name" name="name" required>
        <button type="submit">Submit</button>
    </form>

</body>
</html>
