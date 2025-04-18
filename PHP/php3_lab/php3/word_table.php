<!DOCTYPE html>
<html lang="EN">
<!--	word_table.php
        Uses a function to split a given string of text into
        its constituant words. It also determines the frequency of
        occurrence of each word. The words are separated by whitespace
        or punctuation, possibly followed by whitespace. The
        punctuation can be a period, a comma, a semicolon, a colon,
        an exclamation point, or a questionmark.
        The main driver program calls the function and displays
        the results.	
	-->
<head> 
  <title> word_table.php </title>
  <meta http-equiv="Content-Type" content="text/html; charset=utf-8"/>
</head>
<body>
  <p>
<?php

// Function splitter
//  Parameter: a string of text containing words and punctuation
//  Returns: an array in which the unique words of the string are
//           the keys and their frequencies are the values.

function splitter($str) {

// Create the empty word frequency array

  $freq = array();

// Split the parameter string into words

  $words = preg_split("/[ .,;:!?]\s*/", $str);

// Loop to count the words (either increment or initialize to 1)

  foreach ($words as $word) {
    $keys = array_keys($freq);
    if(in_array($word, $keys))
      $freq[$word]++;
    else
      $freq[$word] = 1;
  }

  return $freq;
} #** End of splitter

// Main test driver

  $str = "apples are good for you, or don't you like apples? 
          or maybe you like oranges better than apples";

// Call splitter

  $tbl = splitter($str);

// Display the words and their frequencies
  print "Initial string: $str <br />";
  print "<br /> Word Frequency <br /><br />";
  $sorted_keys = array_keys($tbl);
  sort($sorted_keys);
  foreach ($sorted_keys as $word)
    print "$word $tbl[$word] <br />";
?>
</p>
</body>
</html>
