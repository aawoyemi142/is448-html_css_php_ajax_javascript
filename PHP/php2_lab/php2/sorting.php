<!DOCTYPE html>
<html lang="EN">
  <head> 
    <title> Sorting </title>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8"/>
  </head>
  <body>
    <?php
      $original = array("Fred" => 31, "Al" => 27, 
                        "Gandalf" => "wizzard",
						          "Betty" => 42, 
                      "Frodo" => "hobbit");
    ?>
<h4> Original Array </h4>
<?php
foreach ($original as $key => $value)
	print("[$key] => $value <br />");

$new = $original;
sort($new);
?>
<h4> Array sorted with sort </h4>
<?php
foreach ($new as $key => $value)
	print("[$key] = $value <br />");

$new = $original;
asort($new);
?>
<h4> Array sorted with asort </h4>
<?php
foreach ($new as $key => $value)
	print("[$key] = $value <br />");

$new = $original;
ksort($new);
?>
<h4> Array sorted with ksort </h4>
<?php
foreach ($new as $key => $value)
        print("[$key] = $value <br />");

?>
</body>
</html>
