<!DOCTYPE html>
<meta charset="utf-8">
<html>
<head>
	
</head>
<body style="padding: 50px; font-size: 14px; font-family: Helvetica, Arial, sans-serif; color: #555;background: #eee;">
<?php
	if(isset($_POST)) {
			
		$email = $_POST["email"];
		echo $email . '<br>';
		$email = filter_var($email, FILTER_SANITIZE_EMAIL);
		
		if(filter_var($email, FILTER_VALIDATE_EMAIL)) {
			echo 'true<br>';	
		}
		
		echo $email;
	}
?>

<form method="post" action="" style="width: 500px;">
	<label>E-post </label>
	<input type="text" name="email" style="margin: 0 0 20px 0;padding: 10px; background: #f1f1f1; border-radius: 5px; border: #cdcdcd 1px solid; width: 500px;box-shadow: 2px 2px 10px rgba(0, 0, 0, 0.1);"><br>
	<button type="submit" style="padding: 20px;font-size: 18px;">Le validate();</button>
</form>

</body>
</html>