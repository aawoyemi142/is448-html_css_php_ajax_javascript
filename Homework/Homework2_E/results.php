<!DOCTYPE html>
<html>
<head>
    <title>Survey Results</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <h2>Submitted Song Survey Entries</h2>

    <?php
    // Path to the songs.txt file
    $path = "/afs/umbc.edu/users/e/d/edar1/pub/text-files/songs.txt";

    if (file_exists($path)) {
        $entries = file($path); // reads each line into an array

        if (count($entries) > 0) {
            echo "<ul>";
            foreach ($entries as $line) {
                echo "<li>" . htmlspecialchars($line) . "</li>";
            }
            echo "</ul>";
        } else {
            echo "<p>No entries found yet.</p>";
        }
    } else {
        echo "<p>Error: File not found.</p>";
    }
    ?>

    <br>
    <a href="index.html">Return to Survey Form</a>
</body>
</html>
