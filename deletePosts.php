<?php
include("config/config.php");


session_start();



$conn = new mysqli(SERVER, USER, PASS, DB);
		
		if ($conn->connect_error) {
    		die("Connection failed: " . $conn->connect_error);
		} 



$userId = $_SESSION['uid'];
$postId = $_GET['id'];

	
	$sqlDelete="DELETE FROM posts WHERE id = $postId AND userId = $userId";
	$resultDelete = $conn->query($sqlDelete); 
	if($resultDelete === true) {      
		 
		setcookie("poruka3", "Vas post je uspesno obrisan.", time() + 86400, "/");
		header('Location: wall.php?username='.$_SESSION["user"]);
	} else {
 		setcookie("poruka4", "Imate gresku u konekciji.", time() + 86400, "/");
				header('Location: wall.php?username='.$_SESSION["user"]);

	}


?>