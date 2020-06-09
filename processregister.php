<?php
include ('config/config.php');
$registerMessage = false;
	if (!empty($_POST['register'])) {
		$ok = true;
		if (empty($_POST['name'])) {
			$ok = false;
		}
		if (empty($_POST['lastname'])) {
			$ok = false;
		}
		if (empty($_POST['email'])) {
			$ok = false;
		}
		if (empty($_POST['username'])) {
			$ok = false;
		}
		if (empty($_POST['password'])) {
			$ok = false;
		}
		if ($ok == true) {
			$password = $_POST['password'];
			$username = $_POST['username'];
			$name = $_POST['name'];
			$lastname = $_POST['lastname'];
			$email = $_POST['email'];
			$image ="images/Dusan.jpg";
			$hash = password_hash($password, PASSWORD_DEFAULT);

			//add database code here
			$conn = mysqli_connect(SERVER, USER, PASS, DB);

			// security measures
			$escapeName = mysqli_real_escape_string($conn, $name);
      		$escapeLastname = mysqli_real_escape_string($conn, $lastname);
      		$escapeEmail = mysqli_real_escape_string($conn, $email);
      		$escapeUsername = mysqli_real_escape_string($conn, $username);
       		$escapeHash = mysqli_real_escape_string($conn, $hash);
       		$escapeImage = mysqli_real_escape_string($conn, $image);

       		$sqlSelect = "SELECT * FROM users WHERE username = '".$escapeUsername."'";

       		$sql = "INSERT INTO users (name, lastname, email, username, password, image) VALUES ('".$escapeName."',
       		'".$escapeLastname."',
       		'".$escapeEmail."',
       		'".$escapeUsername."',
       		'".$escapeHash."',
       		'".$escapeImage."'
       		)";

       		$registerUser = mysqli_query($conn, $sql);

       		if($registerUser === true) {
       			$registerMessage = "корисник ".$username." додат у базу";
       		}else {
       			 $registerMessage ="Error description: " . mysqli_error($conn);
       		}

			 mysqli_close($conn);
		}
	}
?>