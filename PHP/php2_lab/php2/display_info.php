<!DOCTYPE html>
<html lang="EN">
  <head> 
	<title>response to customer satisfaction survey</title>
	<meta http-equiv="Content-Type" content="text/html; charset=utf-8"/>
	<link rel="stylesheet" type="text/css" href="form_proc.css" />
  </head>
  <body>
    
	
	<?php
		//retrieve values of form fields entered by the user
		//the form field values are sent as a query string to the PHP page
		//the parameter-name in the query string is the name of the form field
		//the parameter-value is the user-entered value
		//all the values are stored by PHP in the $_POST array
		//the value can be accessed by indexing the $_POST array using the query-string parameter-name

		
		if ((isset($_POST["custName"]) && (!empty($_POST["custName"]))) &&
			(isset($_POST["dayTimeNumber"]) && (!empty($_POST["dayTimeNumber"]))) &&
			(isset($_POST["commentsBox"]) && (!empty($_POST["commentsBox"])))
			)

		{

			$customerName = $_POST["custName"];
			$phoneNumber = $_POST["dayTimeNumber"];
			$comments = $_POST["commentsBox"];
		?>
			<p>
			Thank you for the feedack,
			<strong><?php echo $customerName ?></strong>. 
			Your comment 
			<strong> "<?php echo $comments ?>" </strong> 
			is extremely useful to us. <br />
			
			We will
			contact you at <strong> <?php echo $phoneNumber ?> </strong> if we need further information.
			
			</p>


			
		<?php
		}
		else{
			echo "<p>You haven't entered all information in the form.
			Please go back and re-enter</p>.";
		}

		?>

	
	</body>
</html>