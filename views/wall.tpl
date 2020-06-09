<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Wall</title>
    <link rel="stylesheet" href="css/style.css">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.7.2/css/all.css" integrity="sha384-fnmOCqbTlWIlj8LyTjo7mOUStjsKC4pOpQbqyi7RrhN7udi9RwhKkMHpvLbHG9Sr" crossorigin="anonymous">
    <meta name="viewport" content="width=device-width, initial-scale=1">
</head>
<body>
	
	 <header class="nav-bar">
    <div id="logo">
      <img src="images/Kafananet.png" alt="" id="logoPic">
           Кафананет
           
        </div>
        {$poruka}
        <nav>
           <div id="login">
           <a href="dashboard.php">Почетна страна</a>
            <i class="fas fa-user"></i>
             {$username}
             
            <a class="logout" href="logout.php"><i class="fas fa-power-off"></i></a>
           </div>
        </nav>
  </header>
  <div id="userProfile">
    <div><img class='image2' src="images/{$currentUser}.jpg" alt='image'></div>
    <div>
      {$userNow.name}
      {$userNow.lastname}
    </div>
    <div>
      {if $username == $usersNow}
      <form action="editUser.php?uid={$userNow.uid}" method="post">
            <input type="hidden" name="name" value="{$userNow.name}">
            <input type="hidden" name="lastname" value="{$userNow.lastname}">
            <input type="hidden" name="username" value="{$userNow.username}">
            <button type="submit" name="edit"><i class="fas fa-edit" ></i></button>
      </form>
      {/if}
    </div>
  </div>
  <!-- ISCITAVANJE POSTOVA-->
  {section name=i loop=$postRows}
    <div class="post">
      <div class="alignLeft">
      <div><img class='image' src="images/{$currentUser}.jpg" alt='image'></div>
      <span id="fullName">
        {$postRows[i].name}
        {$postRows[i].lastname}

        {if $username == $usersNow}
        <form action="deletePosts.php?id={$postRows[i].id}" method="post">
              <button type="submit" name="delete"><i class="fas fa-trash" ></i></button>
        </form>
        <form action="editPost.php?id={$postRows[i].id}" method="post">
            <input type="hidden" name="postbody" value="{$postRows[i].body}">
            <button type="submit" name="edit"><i class="fas fa-edit" ></i></button>
        </form>
        {/if} 
      </span>
      </div>
      <div id="postTxt">{$postRows[i].body}</div><br>
      {if $postRows[i].image eq true}
      <!--ovo je deo za unos slike-->
      <div>
        <img id="image" src="upload/{$postRows[i].image}">
      </div>
      {/if}
      <div id="date">{$postRows[i].date}</div><br>
      
    </div>
  
  
  {/section}

<script>
   if ( window.history.replaceState ) {
       window.history.replaceState( null, null, window.location.href );
   }
</script>



</body>
</html>