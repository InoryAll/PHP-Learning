<html>
	<body>
		<form method="post" action="<?php echo $_SERVER['PHP_SELF'] ?>">
			Name: <input type="text" name="username">
			<input type="submit">
		</form>

		<?php
			$name = $_REQUEST['username'];
			echo $name;
		?>

	</body>
</html>
