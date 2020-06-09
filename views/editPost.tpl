<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
    <title>Измена објаве</title>
    <link rel="stylesheet" href="css/style.css">
    <meta name="viewport" content="width=device-width, initial-scale=1">
</head>
<body>
    
 <div id="pera">      
<div class="contact-section"> 

		<h1>Промените објаву</h1>
  		<div class="border"></div>       
        
		<form class="contact-form" action="editPost.php?id={$postid}" method="post">
			
			<input type="hidden" name="postid" value="{$postid}">
			<input type="text" class="contact-form-text" name="postbody" value="{$bodyedit}" >
			<input type="submit" class="contact-form-btn" value="Измени објаву" name="editPost">

		</form>
</div>
</div>   
</body>
</html>