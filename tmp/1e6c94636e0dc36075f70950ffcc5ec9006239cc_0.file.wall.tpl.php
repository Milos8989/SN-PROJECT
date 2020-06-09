<?php
/* Smarty version 3.1.33, created on 2019-04-05 12:30:12
  from 'C:\xampp\htdocs\Nikola_Djukic\konstantinfaza\SN PROJECT\views\wall.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.33',
  'unifunc' => 'content_5ca72e344d84d1_08800058',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '1e6c94636e0dc36075f70950ffcc5ec9006239cc' => 
    array (
      0 => 'C:\\xampp\\htdocs\\Nikola_Djukic\\konstantinfaza\\SN PROJECT\\views\\wall.tpl',
      1 => 1554460209,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5ca72e344d84d1_08800058 (Smarty_Internal_Template $_smarty_tpl) {
?><!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Wall</title>
    <link rel="stylesheet" href="style.css">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.7.2/css/all.css" integrity="sha384-fnmOCqbTlWIlj8LyTjo7mOUStjsKC4pOpQbqyi7RrhN7udi9RwhKkMHpvLbHG9Sr" crossorigin="anonymous">
    <meta name="viewport" content="width=device-width, initial-scale=1">
</head>
<body>
	
	 <header class="nav-bar">
    <div id="logo">
      <img src="images/Kafananet.png" alt="" id="logoPic">
           Кафананет
           
        </div>
        <?php echo $_smarty_tpl->tpl_vars['poruka']->value;?>

        <nav>
           <div id="login">
           <a href="dashboard.php">Почетна страна</a>
            <i class="fas fa-user"></i>
             <?php echo $_smarty_tpl->tpl_vars['username']->value;?>

             
            <a class="logout" href="logout.php"><i class="fas fa-power-off"></i></a>
           </div>
        </nav>
  </header>
  <div id="userProfile">
    <div><img class='image2' src="images/<?php echo $_smarty_tpl->tpl_vars['currentUser']->value;?>
.jpg" alt='image'></div>
    <div>
      <?php echo $_smarty_tpl->tpl_vars['userNow']->value['name'];?>

      <?php echo $_smarty_tpl->tpl_vars['userNow']->value['lastname'];?>

    </div>
    <div>
      <?php if ($_smarty_tpl->tpl_vars['username']->value == $_smarty_tpl->tpl_vars['usersNow']->value) {?>
      <form action="editUser.php?uid=<?php echo $_smarty_tpl->tpl_vars['userNow']->value['uid'];?>
" method="post">
            <input type="hidden" name="name" value="<?php echo $_smarty_tpl->tpl_vars['userNow']->value['name'];?>
">
            <input type="hidden" name="lastname" value="<?php echo $_smarty_tpl->tpl_vars['userNow']->value['lastname'];?>
">
            <input type="hidden" name="username" value="<?php echo $_smarty_tpl->tpl_vars['userNow']->value['username'];?>
">
            <button type="submit" name="edit"><i class="fas fa-edit" ></i></button>
      </form>
      <?php }?>
    </div>
  </div>
  <!-- ISCITAVANJE POSTOVA-->
  <?php
$__section_i_0_loop = (is_array(@$_loop=$_smarty_tpl->tpl_vars['postRows']->value) ? count($_loop) : max(0, (int) $_loop));
$__section_i_0_total = $__section_i_0_loop;
$_smarty_tpl->tpl_vars['__smarty_section_i'] = new Smarty_Variable(array());
if ($__section_i_0_total !== 0) {
for ($__section_i_0_iteration = 1, $_smarty_tpl->tpl_vars['__smarty_section_i']->value['index'] = 0; $__section_i_0_iteration <= $__section_i_0_total; $__section_i_0_iteration++, $_smarty_tpl->tpl_vars['__smarty_section_i']->value['index']++){
?>
    <div class="post">
      <div class="alignLeft">
      <div><img class='image' src="images/<?php echo $_smarty_tpl->tpl_vars['currentUser']->value;?>
.jpg" alt='image'></div>
      <span id="fullName">
        <?php echo $_smarty_tpl->tpl_vars['postRows']->value[(isset($_smarty_tpl->tpl_vars['__smarty_section_i']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_i']->value['index'] : null)]['name'];?>

        <?php echo $_smarty_tpl->tpl_vars['postRows']->value[(isset($_smarty_tpl->tpl_vars['__smarty_section_i']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_i']->value['index'] : null)]['lastname'];?>


        <?php if ($_smarty_tpl->tpl_vars['username']->value == $_smarty_tpl->tpl_vars['usersNow']->value) {?>
        <form action="deletePosts.php?id=<?php echo $_smarty_tpl->tpl_vars['postRows']->value[(isset($_smarty_tpl->tpl_vars['__smarty_section_i']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_i']->value['index'] : null)]['id'];?>
" method="post">
              <button type="submit" name="delete"><i class="fas fa-trash" ></i></button>
        </form>
        <form action="editPost.php?id=<?php echo $_smarty_tpl->tpl_vars['postRows']->value[(isset($_smarty_tpl->tpl_vars['__smarty_section_i']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_i']->value['index'] : null)]['id'];?>
" method="post">
            <input type="hidden" name="postbody" value="<?php echo $_smarty_tpl->tpl_vars['postRows']->value[(isset($_smarty_tpl->tpl_vars['__smarty_section_i']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_i']->value['index'] : null)]['body'];?>
">
            <button type="submit" name="edit"><i class="fas fa-edit" ></i></button>
        </form>
        <?php }?> 
      </span>
      </div>
      <div id="postTxt"><?php echo $_smarty_tpl->tpl_vars['postRows']->value[(isset($_smarty_tpl->tpl_vars['__smarty_section_i']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_i']->value['index'] : null)]['body'];?>
</div><br>
      <?php if ($_smarty_tpl->tpl_vars['postRows']->value[(isset($_smarty_tpl->tpl_vars['__smarty_section_i']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_i']->value['index'] : null)]['image'] == true) {?>
      <!--ovo je deo za unos slike-->
      <div>
        <img id="image" src="upload/<?php echo $_smarty_tpl->tpl_vars['postRows']->value[(isset($_smarty_tpl->tpl_vars['__smarty_section_i']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_i']->value['index'] : null)]['image'];?>
">
      </div>
      <?php }?>
      <div id="date"><?php echo $_smarty_tpl->tpl_vars['postRows']->value[(isset($_smarty_tpl->tpl_vars['__smarty_section_i']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_i']->value['index'] : null)]['date'];?>
</div><br>
      
    </div>
  
  
  <?php
}
}
?>

<?php echo '<script'; ?>
>
   if ( window.history.replaceState ) {
       window.history.replaceState( null, null, window.location.href );
   }
<?php echo '</script'; ?>
>



</body>
</html><?php }
}
