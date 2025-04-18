<!DOCTYPE html>
<html lang="EN">
<head>
	<meta http-equiv="Content-Type" content="text/html; charset=utf-8"/>
	<title>Showing several read functions</title>
</head>
<body>
<?php
//opening a file for reading 
$filevar = fopen("testdata.txt", "r") or die ("Error - could not open file");
if(file_exists("testdata.txt")) 
	print("file exists <br />"); 
else 
	print ("file does not exist <br />");
?>
<h3> Using the fgets and fgetc functions </h3>

<?php

#fgets reads 15 characters of file from current pointer or end of line is reached
$str = fgets($filevar, 15);
print("First 15 characters of file are: $str <br />");


#fgetc returns the character at current pointer of file
$char = fgetc($filevar);
print("Character in file is: $char <br />");


?>

<h3> Using the fread function </h3>

<?php
//fread function returns contents of file as a string, but will start reading at current pointer of file
$file_content_string = fread($filevar, filesize("testdata.txt"));

fread($filevar,10);


print("$file_content_string <br />");
?>

<h3> Using the file function </h3>

<?php
//file function returns contents of file as an array
$file_content_as_array = file("testdata.txt");
$i = 1;
foreach ($file_content_as_array as $line){
	print("Line $i: $line <br />");
	$i++;
}
fclose($filevar);



?>
</body>
</html>
