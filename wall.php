<?php

include("config/config.php");
/*****************initial settings for the smarty tpl engine*************************/
require_once("smarty/libs/Smarty.class.php");

$smarty= new Smarty();
$smarty->template_dir='views';
$smarty->compile_dir= 'tmp';
//initial varialble definition
$wrongPassword="";
//end initial settings

/*************dataBase connection and session start****************/


// Create connection
session_start();
// ovde se pita: "da li je postavljena sesija u user.u" a ovo '||' znaci 'ili'
$uid = $_SESSION['uid'];
if (empty($_SESSION['user'])) {
   header('Location: index.php');
}

$username = $_SESSION['user'];
$userID= $_SESSION['uid'];
$poruka= '';

  
  // Create connection
  $conn = new mysqli(SERVER, USER, PASS, DB);
  // Check connection
  if ($conn->connect_error) {
      die("Connection failed: ".$conn->connect_error);
  }
// end data base connection

/**********************************************/
/**taking current user from DASHBOARD sesije**/
/********************************************/

if(isset($_GET['username'])) {
   $currentUser = $_GET['username'];

} else {
   header('Location: dashboard.php');
}
// end fetching data from dashboard
/*****************************************/
/**taking from database posts and users**/
/***************************************/

//biras podatke koje ces pokazati na wall.tpl



//
/*************************************/
/***** kod za ispisivanje brisanja *****/
/*************************************/
if(!empty($_COOKIE['poruka3'])) {
            $poruka= $_COOKIE['poruka3'];
            unset($_COOKIE['poruka3']);
            setcookie('poruka3', '', time() - 3600, '/'); 
        } else {
          unset($_COOKIE['poruka3']);
        }
        if(!empty($_COOKIE['poruka4'])) {
            $poruka= $_COOKIE['poruka4'];
            unset($_COOKIE['poruka4']);
            setcookie('poruka4', '', time() - 3600, '/'); 
        } else {
          unset($_COOKIE['poruka4']);
        }



/**taking from database posts and users**/
/***************************************/
$sqlUser ="SELECT   
users.uid, 
users.name,
users.username,
users.lastname
FROM users
WHERE users.username='".$currentUser."' ";

$resultUser = $conn->query($sqlUser);


if ($resultUser->num_rows > 0) {
    // output data of each row
    while($row = $resultUser->fetch_assoc()) {
      //save users and posts in this variable
      $userNow = $row;
    };
} else {
  $empty = "Trenutno nema podataka u bazi";
}


// select postove
   $emptyDBMessage = '';
   $sql = "SELECT   posts.id, users.uid, 
posts.userid, 
users.name,
users.username,
users.lastname,
posts.image,
posts.date, 
posts.body,
posts.privateStatus 
FROM posts INNER JOIN 
users ON posts.userID = users.uid 
WHERE users.username='".$currentUser."' AND (posts.privateStatus='public' OR users.uid=".$uid.")  ORDER BY posts.id DESC";   //ovde se menjalo

	
$result = $conn->query($sql);
$postRows = [];

if ($result->num_rows > 0) {
    // output data of each row
    while($row = $result->fetch_assoc()) {
    	//save users and posts in this variable
    	$postRows[] = $row;
      $usersNow = $row['username'];
    };
} else {
	$empty = "Trenutno nema podataka u bazi";
}



$conn->close();

// end of defining variables
// and
// now we need to send them to template


/********************************************************/
/**send those variables to template file dashboard.tpl */
/******************************************************/

$smarty->assign(
   // prvi je kako ce se promenljiva yvati u tpl fajlu
   'username',
   // drugi je kako se zove u ovom fajlu
   $username
);


$smarty->assign(
   'currentUser',
   $currentUser
);


$smarty->assign(
   'emptyDBMessage',
   $emptyDBMessage
);

$smarty->assign(
   'postRows',
   $postRows
);

$smarty->assign(
   'userNow',
   $userNow
);

$smarty->assign(
   'usersNow',
   $usersNow
);
$smarty->assign( 
      'poruka',
      $poruka
 );

$smarty->display('wall.tpl');

?>