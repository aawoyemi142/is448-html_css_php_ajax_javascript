<?php
// Get form data
$song = $_POST['song'] ?? '';
$composer = $_POST['composer'] ?? '';
$artist = $_POST['artist'] ?? '';

// Validate fields
if (empty($song) || empty($composer) || empty($artist)) {
    echo "<h2>All fields are required. Please go back and complete the form.</h2>";
    echo "<a href='index.html'>Return to Survey</a>";
    exit();
}

// Format the entry
$entry = "Song: $song | Composer: $composer | Artist: $artist\n";

// Path to your text file (adjust if needed for GL)
$path = $path = "/afs/umbc.edu/users/e/d/edar1/pub/text-files/songs.txt";

$file = fopen($path, "a");

if ($file && flock($file, LOCK_EX)) {
    fwrite($file, $entry);
    flock($file, LOCK_UN);
    fclose($file);
    echo "<h2>Thank you for your submission!</h2>";
    echo "<a href='index.html'>Submit Another</a>";
} else {
    echo "<h2>There was a problem saving your entry.</h2>";
}
?>
