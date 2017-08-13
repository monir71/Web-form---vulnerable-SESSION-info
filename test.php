<?php
	/*
		I want to submit this form.
		
		Name : <a href="mysite.com/recover.php">Me</a>
		Country : USA
		
		After submission of the form with the above mentioned information
		will create a link 'Me' and if the user click on that link he will
		be send to 'mysite.com/recover.php' and after sending all the
		information (eg $_SESSION) to a file 'text.txt' and
		will be redirected to this form again

	*/
?>

<!DOCTYPE html>
<html>
<head>

</head>
<body>

	<form action="http://www.example.com/test.php" method="POST">
		Name : <input type="text" name="fm"><br><br>
		Country : <select name="country">
			<option>USA</option>
			<option>UK</option>
			<option>Canada</option>
			<option>Australia</option>
		</select><br><br>
		<input type="submit" value="Submit" name="fm_submit">
	</form>

	<?php
		if(isset($_POST['fm_submit']))
		{
			echo $_POST['fm'] . "<br>";
			echo $_POST['country'] . "<br>";
			
		}
	?>
	
</body>
</html>