
<!DOCTYPE html>
<html>
<head>
	<title></title>
<link rel="stylesheet" type="text/css" href="css/style.css">
<meta name="viewport" content="width=device-width, initial-scale=1">

</head>
<body>
	<header class="nav-bar">
		<form action="processLogin.php" method="POST">
			<img src="images/Kafananet.png" alt="" id="logoPic">
			<input type="text" name="username" placeholder="Корисничко име">
			<input type="password" name="password" placeholder="Шифра">
			<input type="submit" name="submit" value="Пријави се">
		</form>
<?php 
if(!empty($_COOKIE['poruka'])){
	echo $_COOKIE['poruka'];
	unset($_COOKIE['poruka']);
	setcookie('poruka', '', time() - 3600, '/');
}
?>
	</header>
	<div id="kafana">
	<section class="main">
        <div class="container">
      		<iframe width="560" height="315" src="https://www.youtube.com/embed/7RALy6oVdto" frameborder="0" allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
   		</div>
    	<div id="registracija">
       
        <form class="box" action="index.php" method="post">
            <h1>Регистрација</h1>
            <input type="text" name="name" placeholder="Унесите име"> <br>
            <input type="text" name="lastname" placeholder="Унесите презиме"> <br>
            <input type="email" name="email" placeholder="Унесите имејл"> <br>
            <input type="text" name="username" placeholder="Унесите корисничко име"> <br>
            <input type="password" name="password" placeholder="Унесите шифру"> <br>
            <input type="submit" name="register" placeholder="Registruj" value="Пошаљи">
        </form>
       </div> 
	</section>
<?php include('processregister.php'); ?>
<?php
 if($registerMessage) {
 	echo
<<<HTML
<div class="container2">
<div class="message">
<span class="closebtn">&times;</span>
Bravo $registerMessage
</div>
</div>
HTML;
 }
?>

<script type="text/javascript">
	var close = document.querySelector(".closebtn");
	close.addEventListener("click", function(){
		this.parentElement.style.opacity = "0";
	})
</script>
<script>
   		if ( window.history.replaceState ) {
       		window.history.replaceState( null, null, window.location.href );
   		}
</script>
</div>
</body>
</html>