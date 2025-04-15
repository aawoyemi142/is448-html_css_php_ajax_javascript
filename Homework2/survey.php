<?php
// Get form data safely
$song = $_POST['song'] ?? '';
$composer = $_POST['composer'] ?? '';
$artist = $_POST['artist'] ?? '';

// Validate: make sure no field is empty
if (!$song || !$composer || !$artist) {
    echo "<h2>All fields are required.</h2><a href='index.html'>Go Back</a>";
    exit();
}

// Format entry and define file path
$entry = "Song: $song | Composer: $composer | Artist: $artist\n";
$path = "/afs/umbc.edu/users/a/a/aawoyem1/pub/text-files/songs.txt";

// Try to open and write to file
$file = fopen($path, "a");
if ($file) {
    fwrite($file, $entry);
    fclose($file);
    echo "<h2>Thank you for your submission!</h2><a href='index.html'>Submit Another</a>";
} else {
    echo "<h2>Error writing to file.</h2>";
}
?>