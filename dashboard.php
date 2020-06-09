<?php

/************************/
/**initial settings for the smarty tpl engine*/
/***********************/
require_once("smarty/libs/Smarty.class.php");

$smarty = new Smarty();
$smarty->template_dir = 'views';
$smarty->compile_dir = 'tmp';
//initial variable definition
$wrongPassword = "";
//end initial settings

/********************/
/**database connection and session start*/
/********************/
session_start();
include("config/config.php");
if (empty($_SESSION['user'])) {
	header('Location: index.php');
}else {
	//echo $_SESSION['user'];
}


$username = $_SESSION['user'];
$uid = $_SESSION['uid'];


?>
<?php


// Create connection
$conn = new mysqli(SERVER, USER, PASS, DB);
// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
} 
//end database cibbectuib settings


/*************************************/
/******* UNOS SLIKE U FOLDER *********/
/*************************************/
if (isset($_POST['submit'])){
	$file=$_FILES['file'];

	$fileName = $_FILES['file']['name'];
	$fileTmpName = $_FILES['file']['tmp_name'];
	$fileSize = $_FILES['file']['size'];
	$fileError	 = $_FILES['file']['error'];
	$fileType = $_FILES['file']['type'];
	$fileExt = explode('.', $fileName);
	$fileActualExt = strtolower(end($fileExt));
	$allowed = array('jpg', 'jpeg', 'png');
	if (in_array($fileActualExt, $allowed)) {
		 if ($fileError === 0) {
		 	if ($fileSize < 1000000) {
		 		$fileNameNew = $username.time().".".'jpg';
		 		$fileDestination = 'upload/'.$fileNameNew;
		 		move_uploaded_file($fileTmpName, $fileDestination);
		 		$postSuccessMessage ="Uplouded Successfully!";
		 	}else {
		 		$postSuccessMessage ="Youre file is to big!";
		 	}
		 }else {
		 	$postSuccessMessage ="There was an error uploading your file!";
		 }
	}else {
		$postSuccessMessage ="You can not upload this type!";
	}
};
/*************************************/
/***** KRAJ UNOSA U FOLDER *****/
/*************************************/




$postBody='';
$privacy='';
$userID='';
$postSuccessMessage='';
$postSuccessMessage2='';
$fileToUpload = '';
$user = '';
$poruka= '';

//kod za unos podataka u bazu
if (!empty($_POST['submit'])) {
	$postBody = $_POST["post_body"];
	$privacy = $_POST["privacy"];
	$userID=$_SESSION["uid"];//dodato ovde***********************
	$date =  date("Y/m/d");
	//putanja za unos slike
	if(!empty($_FILES['file']['name'])) {
	$fileToUpload = $username.time()."."."jpg";
	}

	$sqlInsert = "INSERT INTO posts(id, body, date, userid, image, privateStatus) VALUES (null,'".$postBody."', '".$date."', '".$uid."', '".$fileToUpload."', '".$privacy."')";
	$resultInsert = $conn->query($sqlInsert);
	if($resultInsert === true) {
		$postSuccessMessage= "Vas status je uspesno evidentiran";
	}else {
		$postSuccessMessage= "Imate gresku u konekciji".$conn->error;
	}
}
//end of inser post code

/********************/
/**give me post and the users*/
/*******************/

////////////KOD ZA UNOS KOMENTARA U BAZU
if(!empty($_POST["submit2"])){
  //if(!empty($_POST["submit"])){
    $postBody2= $_POST["post_body2"];
    $postid= $_POST["postid"];
    $userID=$_SESSION["uid"];
  //}
  
  //////INSERT INTO comments(uid, body) VALUES ('vla', 'sla')

  $sqlInsert2 = "INSERT INTO comments(userid, comment, postid) VALUES
   ('".$userID."', '".$postBody2."','".$postid."')";
  
  $resultInsert2 = $conn->query($sqlInsert2);
  if($resultInsert2 === true) {
      $postSuccessMessage2= "Vas komentar je uspesno evidentiran.";
  } else {
      $postSuccessMessage2= "Imate gresku u konekciji " . $conn->error;
  }
}

/*************************************/
/***** KRAJ UNOSA komentara *****/
/*************************************/




//select postova
$sql = "SELECT 	posts.id, 
				users.uid, 
				posts.userid, 
				users.name,
				users.username,
				users.lastname,
				posts.image,
				users.image as t,
				posts.date, 
				posts.body,
				posts.privateStatus 
				FROM posts INNER JOIN 
				users ON posts.userID = users.uid 
				WHERE privateStatus = 'public' 
				OR posts.userID = '".$uid."'
				ORDER BY posts.id DESC";

	
$result = $conn->query($sql);
$postRows = [];

if ($result->num_rows > 0) {
      // output data of each row
      $i=0;
        while($row = $result->fetch_assoc()) {
            //save users and posts in this variable
            $postRows[] = $row;
            //$postRows[$i]['t'] = $row['t'];//dodato
            // SELECT COMMENTS FOR EACH POST
            $id =$row['id'];
            $sql3 = "SELECT * FROM comments INNER JOIN users ON comments.userid =
            users.uid WHERE comments.postid=$id";
            $comments = $conn->query($sql3);
            while($row2= $comments->fetch_assoc()){
              //UPDATE EXISTING ARRAY WITH NEW PROP
              $postRows[$i]['comments'][] = $row2['comment'];
              $postRows[$i]['fullname'][] = $row2['name']." ".$row2['lastname'];
            }
            $i++;

          }
          $postSuccessMessage = '';
          /* testing
          echo "<pre>";
          print_r($postsRows);
          echo "</pre>";*/
        } else {
        $postSuccessMessage = "Trenutno nema podataka u bazi.";
    }



$conn->close();
/******************/
//end of defining variables,
//know we need to send them to template dashboard.tpl
/******************/
$smarty->assign(
   		'username',
   		$username
 );

$smarty->assign(
   		'postSuccessMessage',
   		$postSuccessMessage
 );
$smarty->assign(
   		'postSuccessMessage2',
   		$postSuccessMessage2
 );


$smarty->assign(
   		'postRows',
   		$postRows
 );

$smarty->display('dashboard.tpl');

?>



	
