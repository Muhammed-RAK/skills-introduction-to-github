<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Handle POST request
    $name = htmlspecialchars($_POST['name']);
    echo "Hello, " . $name . "! This is a POST request.";
} elseif ($_SERVER["REQUEST_METHOD"] == "GET") {
    // Handle GET request
    if (isset($_GET['name'])) {
        $name = htmlspecialchars($_GET['name']);
        echo "Hello, " . $name . "! This is a GET request.";
    } else {
        echo "Please provide a name parameter.";
    }
}
?>

<!DOCTYPE html>
<html>
<head>
    <title>GET and POST Example</title>
</head>
<body>
    <h2>POST Form</h2>
    <form method="post" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>">
        Name: <input type="text" name="name">
        <input type="submit" value="Submit">
    </form>

    <h2>GET Form</h2>
    <form method="get" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>">
        Name: <input type="text" name="name">
        <input type="submit" value="Submit">
    </form>
</body>
</html>