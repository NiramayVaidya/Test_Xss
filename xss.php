<!DOCTYPE html>
<html>
<head>
</head>
<body>
<?php
	// <script>alert("xss successful")</script>
	// <script>window.alert(document.cookie)</script>
	// <script>window.location='http://google.com'</script>
	// <script>window.location='http://amazon.in'</script>
	// <script>window.location='http://in.ebay.com</script>'
	if(isset($_POST['submit'])) {
		// $name = $_POST['name'];
		$name = htmlentities($_POST['name']);
		echo "User has submitted the form: <b> $name </b><br>";
	}
?>
<form method="post" action="<?php echo $_SERVER['PHP_SELF']; ?>">
<input type="text" name="name"><br>
<input type="submit" name="submit" value="Submit Form"><br>
<hr>
</form>
</body>
</html>
