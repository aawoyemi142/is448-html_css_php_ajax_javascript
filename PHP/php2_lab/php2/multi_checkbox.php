<!DOCTYPE html>
<html lang="EN">
<head>
	<title>Multi checkbox</title>
	<meta http-equiv="Content-Type" content="text/html; charset=utf-8"/>
	<link rel="stylesheet" type="text/css" href="form_proc.css"/>
</head>
<body>
<p>
<?php

#this example shows how to take user input from a checkbox and process in PHP

if ((isset($_POST['hobbies']) && (!empty($_POST['hobbies'])))){
	$hobbies_list = $_POST['hobbies'];

	if(!empty($hobbies_list)){
	
		foreach ($hobbies_list as $hobby){
			echo "Hobbies selected: $hobby <br />";
		}
	}else{
		echo "No hobbies selected";
	}
}
else{
	echo "No hobbies entered";
}
?>
</p>
</body>
</html>