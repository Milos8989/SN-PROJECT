<?php

require_once("smarty/libs/Smarty.class.php");

$smarty = new Smarty();
$smarty->template_dir = 'views';
$smarty->compile_dir = 'tmp';

session_start();

include('config/config.php');

$conn = new mysqli(SERVER, USER, PASS, DB);
if ($conn->connect_error) {
	die("Connection failed: " .$conn->connect_error);
}



	$nameedit = '';



	$lastnameedit = '';






$userid = $_SESSION['uid'];
	$nameedit = $_POST['name'];
	$lastnameedit = $_POST['lastname'];

if(!empty($_POST['editUser'])){
	
$sqlUpdate = "UPDATE users 
    SET     name = '$nameedit',
    		lastname = '$lastnameedit'
    		
    WHERE   uid = $userid";

$resultUpdate = $conn->query($sqlUpdate);
header('Location: wall.php?username='.$_SESSION["user"]);

}


$conn->close();


$smarty->assign(
	'nameedit',
	$nameedit
);

$smarty->assign(
	'lastnameedit',
	$lastnameedit
);






$smarty->display('editUser.tpl');

?>