<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
    <title>Измена корисничких информација</title>
    <link rel="stylesheet" href="css/style.css">
    <meta name="viewport" content="width=device-width, initial-scale=1">
</head>
<body>
    
<div id="pera">   
<div class="contact-section">  
		
		<h1>Промените податке</h1>
  		<div class="border"></div>      
        
		<form class="contact-form" action="editUser.php" method="post">

			<input type="hidden" name="uid" value="{$userid}">
			<span>Име</span>
			<input type="text" class="contact-form-text" name="name" value="{$nameedit}"><br>
			<span>Презиме</span>
			<input type="text" class="contact-form-text" name="lastname" value="{$lastnameedit}"><br>
			<input type="submit" class="contact-form-btn" value="Промени податке" name="editUser">

		</form>

</div>
   </div>
</body>
</html>