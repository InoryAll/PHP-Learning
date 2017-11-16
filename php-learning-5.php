<?php
	$name = $email = $gender = "";
	$nameErr = $emailErr = $genderErr = "";

	if ($_SERVER['REQUEST_METHOD'] == 'POST') {

		if (empty($_POST['name'])) {
			$nameErr = 'Name is Required!';
		} else {
			$name = format_input($_POST['name']);
		}

		if(empty($_POST['email'])) {
			$emailErr = 'Email is Required!';
		} else {
			$email = format_input($_POST['email']);
		}

		if (empty($_POST['gender'])) {
			$genderErr = 'Gender is Required';
		} else {
			$gender = format_input($_POST['gender']);
		}	

	}

	function format_input($data) {
		$data = trim($data);
		$data = stripcslashes($data);
		$data = htmlspecialchars($data);
		return $data;
	}

?>

<html>
	<body>
		<form method="POST" action="<?php echo htmlspecialchars($_SERVER['PHP_SELF']) ?>">
			<div>
				Name: <input type="text" name="name">
				<span><?php echo $nameErr ?></span>
			</div>
			<div>
				E-mail: <input type="text" name="email">
				<span><?php echo $emailErr ?></span>
			</div>
			<div>
				Gender:
				<input type="radio" name="gender" value="female">female
				<input type="radio" name="gender" value="male">male
				<span><?php echo $genderErr ?></span>
			</div>
			<input type="submit">
		</form>
	</body>
</html>

<?php
	echo '获取到的值:<br />';
	echo "$name<br />";
	echo "$email<br />";
	echo "$gender<br />";
?>
