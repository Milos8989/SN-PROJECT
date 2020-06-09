<!DOCTYPE html>
<html>
<head>
	<title></title>
	<link rel="stylesheet" type="text/css" href="css/style.css">
	<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.7.2/css/all.css" integrity="sha384-fnmOCqbTlWIlj8LyTjo7mOUStjsKC4pOpQbqyi7RrhN7udi9RwhKkMHpvLbHG9Sr" crossorigin="anonymous">
	<meta name="viewport" content="width=device-width, initial-scale=1">
</head>
<body>
	<header class="nav-bar">
		<div id="logo">
			<img src="images/Kafananet.png" alt="" id="logoPic">
           Кафананет
           <!--{$messageLog}-->
        </div>
        <nav>
           <div id="login">
           	<a href="dashboard.php">Почетна страна</a>
            <i class="fas fa-user"></i>
              {$username}
            <a class="logout" href="logout.php"><i class="fas fa-power-off"></i></a>
           </div>
        </nav>
	</header>
<div class="status">
	{$postSuccessMessage}
	{$postSuccessMessage2}
</div>
<div class="forma">
	<form action="dashboard.php" method="post" enctype="multipart/form-data">
		<input type="text" name="post_body" placeholder="Шта се пије?"><br>
		<select name="privacy">
			<option value="public">Јавно</option>
			<option value="private">Тајно</option>
		</select>
		<input type="submit" name="submit" value="Објави"><br>
		<input type="file" name="file">
	</form>
</div>

	<!-- ISCITAVANJE POSTOVA-->
	{section name=i loop=$postRows}
		<div class="post">
			<div class="alignLeft">
			<div><img class="image" src="images/Kafananet.png"></div>
			<a href="wall.php?username={$postRows[i].username}"><span id="fullName">
				{$postRows[i].name}
				{$postRows[i].lastname}
			</span></a>
			<div><img class="image" src="images/Kafananet.png"></div>
			</div>
			<div id="postTxt">{$postRows[i].body}</div><br>
			{if $postRows[i].image eq true}
			<!--ovo je deo za unos slike-->
			
			<div>
					
				<a href="upload/{$postRows[i].image}">

					<img id="image" src="upload/{$postRows[i].image}">
				</a>
			</div>
			{/if}
			<div id="date">{$postRows[i].date}</div><br>
			
			<div>{if array_key_exists('comments', $postRows[i])}
                {section name=j loop=$postRows[i].comments}
              </div>
              <div>
                {$postRows[i].comments[j]}<br> by:
                {$postRows[i].fullname[j]}
                {/section}
                {/if}
              </div>

               <div id="comment">
                <form action="dashboard.php" method="POST">
                  <input type="hidden" value="{$postRows[i].id}" name="postid">
                  <input type="text" name="post_body2" placeholder="Шта збориш"><br>
                  <input type="submit" name="submit2" value="Пошаљи">
                </form>
              </div>
            </div>
		</div>
	
	
	{/section}

<script>
   if ( window.history.replaceState ) {
       window.history.replaceState( null, null, window.location.href );
   }
</script>


</body>
</html>
