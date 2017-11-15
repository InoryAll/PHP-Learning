<html>
	<body>
		<form method="POST" action="<?php echo htmlspecialchars($_SERVER['PHP_SELF']) ?>">
			Name: <input type="text" name="name">
			E-mail: <input type="text" name="email">
			Gender:
			<input type="radio" name="gender" value="female">female
			<input type="radio" name="gender" value="male">male
			<input type="submit">
		</form>
		<?php
			$name = $email = $gender = "";
			if ($_SERVER['REQUEST_METHOD'] == 'POST') {
				$name = format_input($_POST['name']);
				$email = format_input($_POST['email']);
				$gender = format_input($_POST['gender']);
			}

			function format_input($data) {
				$data = trim($data);
				$data = stripcslashes($data);
				$data = htmlspecialchars($data);
				return $data;
			}

			echo '获取到的值:<br />';
			echo "$name<br />";
			echo "$email<br />";
			echo "$gender<br />";
		?>
	</body>
</html>