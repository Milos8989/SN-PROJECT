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
if(empty($_POST['postbody'])){
	$bodyedit = '';
} else {
	$bodyedit = $_POST['postbody'];	
}

$postid = $_GET['id'];
$userid = $_SESSION['uid'];
if(!empty($_POST['editPost'])){
$sqlUpdate = "UPDATE posts 
    SET     body = '$bodyedit'
    WHERE   userid = $userid
    AND     id = $postid";

$resultUpdate = $conn->query($sqlUpdate);
header('Location: wall.php?username='.$_SESSION["user"]);

}
        




$conn->close();


$smarty->assign(
	'postid',
	$postid
);

$smarty->assign(
	'bodyedit',
	$bodyedit
);



$smarty->display('editPost.tpl');



?>