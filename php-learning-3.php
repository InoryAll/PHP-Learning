<html>
	<body>
		<a href="php-learning-3.php?username=trj&password=123456">go!</a>
		
		<?php
			$username = $_GET['username'];
			$password = $_GET['password'];
			echo "username:$username, password:$password";
		?>
	</body>
</html>