<?php
// Get input values safely
$name = $_POST['name'] ?? '';
$id = $_POST['id'] ?? '';

// Check campus ID format (2 letters followed by 4 digits)
if (preg_match('/^[A-Z]{2}\d{4}$/', $id)) {
    echo "<h2>Campus ID was in the correct format</h2><p>Thank you, $name!</p>";
} else {
    echo "<h2>Campus ID was incorrect.</h2><a href='student.html'>Go back and try again.</a>";
}
?>