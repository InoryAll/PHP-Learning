<?php
	$name = $email = $gender = $url = "";
	$nameErr = $emailErr = $genderErr = $urlErr = "";

	if ($_SERVER['REQUEST_METHOD'] == 'POST') {

		if (empty($_POST['name'])) {
			$nameErr = 'Name is Required!';
		} else {
			$name = format_input($_POST['name']);
			if (preg_match("/^[a-zA-Z ]$/", $name)) {
				$nameErr = '只允许字母和空格'; 
			}
		}

		if(empty($_POST['email'])) {
			$emailErr = 'Email is Required!';
		} else {
			$email = format_input($_POST['email']);
			if (!preg_match("/([\w\-]+\@[\w\-]+\.[\w\-]+)/", $email)) {
				$emailErr = '无效的email格式';
			}
		}

		if (empty($_POST['url'])) {
			$urlErr = 'Url is Required!';
		} else {
			$url = format_input($_POST['url']);
			if (!preg_match("/\b(?:(?:https?|ftp):\/\/|www\.)[-a-z0-9+&@#\/%?=~_|!:,.;]*[-a-z0-9+&@#\/%=~_|]/i", $url)) {
			    $urlErr = "无效的 URL"; 
			}
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
				Website: <input type="text" name="url">
				<span><?php echo $urlErr ?></span>
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
	echo '获取到的值: <br />';
	echo "$name <br />";
	echo "$email <br />";
	echo "$url <br />";
	echo "$gender<br />";
?>
