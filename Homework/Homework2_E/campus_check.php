<!DOCTYPE html>
<html>
<head>
    <title>Campus ID Validation</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
<?php
$name = $_POST['name'] ?? '';
$id = $_POST['id'] ?? '';

if (preg_match('/^[A-Z]{2}\d{4}$/', $id)) {
    echo "<h2>Thank you, $name</h2>";
    echo "<p>Your Campus ID $id has been recorded.</p>";
} else {
    echo "<h2>Campus ID was incorrect.</h2>";
    echo "<p>Please go back and re-enter your name and campus ID.</p>";
    echo "<a href='student.html'>Return to Form</a>";
}
?>
</body>
</html>
