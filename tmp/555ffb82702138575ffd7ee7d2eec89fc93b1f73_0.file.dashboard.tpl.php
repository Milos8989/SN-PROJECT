<?php
/* Smarty version 3.1.33, created on 2019-04-07 20:16:58
  from 'C:\xampp\htdocs\Milos Bjelivuk\Kanarinci\SN PROJECT\views\dashboard.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.33',
  'unifunc' => 'content_5caa3e9aa23c91_31210517',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '555ffb82702138575ffd7ee7d2eec89fc93b1f73' => 
    array (
      0 => 'C:\\xampp\\htdocs\\Milos Bjelivuk\\Kanarinci\\SN PROJECT\\views\\dashboard.tpl',
      1 => 1554660987,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5caa3e9aa23c91_31210517 (Smarty_Internal_Template $_smarty_tpl) {
?><!DOCTYPE html>
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
           <!--<?php echo $_smarty_tpl->tpl_vars['messageLog']->value;?>
-->
        </div>
        <nav>
           <div id="login">
           	<a href="dashboard.php">Почетна страна</a>
            <i class="fas fa-user"></i>
              <?php echo $_smarty_tpl->tpl_vars['username']->value;?>

            <a class="logout" href="logout.php"><i class="fas fa-power-off"></i></a>
           </div>
        </nav>
	</header>
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
<div class="status">
	<?php echo $_smarty_tpl->tpl_vars['postSuccessMessage']->value;?>

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
			<div><img class="image" src="images/Kafananet.png"></div>
			<a href="wall.php?username=<?php echo $_smarty_tpl->tpl_vars['postRows']->value[(isset($_smarty_tpl->tpl_vars['__smarty_section_i']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_i']->value['index'] : null)]['username'];?>
"><span id="fullName">
				<?php echo $_smarty_tpl->tpl_vars['postRows']->value[(isset($_smarty_tpl->tpl_vars['__smarty_section_i']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_i']->value['index'] : null)]['name'];?>

				<?php echo $_smarty_tpl->tpl_vars['postRows']->value[(isset($_smarty_tpl->tpl_vars['__smarty_section_i']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_i']->value['index'] : null)]['lastname'];?>

			</span></a>
			<div><img class="image" src="images/Kafananet.png"></div>
			</div>
			<div id="postTxt"><?php echo $_smarty_tpl->tpl_vars['postRows']->value[(isset($_smarty_tpl->tpl_vars['__smarty_section_i']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_i']->value['index'] : null)]['body'];?>
</div><br>
			<?php if ($_smarty_tpl->tpl_vars['postRows']->value[(isset($_smarty_tpl->tpl_vars['__smarty_section_i']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_i']->value['index'] : null)]['image'] == true) {?>
			<!--ovo je deo za unos slike-->
			
			<div>
					
				<a href="upload/<?php echo $_smarty_tpl->tpl_vars['postRows']->value[(isset($_smarty_tpl->tpl_vars['__smarty_section_i']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_i']->value['index'] : null)]['image'];?>
">

					<img id="image" src="upload/<?php echo $_smarty_tpl->tpl_vars['postRows']->value[(isset($_smarty_tpl->tpl_vars['__smarty_section_i']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_i']->value['index'] : null)]['image'];?>
">
				</a>
			</div>
			<?php }?>
			<div id="date"><?php echo $_smarty_tpl->tpl_vars['postRows']->value[(isset($_smarty_tpl->tpl_vars['__smarty_section_i']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_i']->value['index'] : null)]['date'];?>
</div><br>
			
			<div><?php if (array_key_exists('comments',$_smarty_tpl->tpl_vars['postRows']->value[(isset($_smarty_tpl->tpl_vars['__smarty_section_i']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_i']->value['index'] : null)])) {?>
                <?php
$__section_j_1_loop = (is_array(@$_loop=$_smarty_tpl->tpl_vars['postRows']->value[(isset($_smarty_tpl->tpl_vars['__smarty_section_i']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_i']->value['index'] : null)]['comments']) ? count($_loop) : max(0, (int) $_loop));
$__section_j_1_total = $__section_j_1_loop;
$_smarty_tpl->tpl_vars['__smarty_section_j'] = new Smarty_Variable(array());
if ($__section_j_1_total !== 0) {
for ($__section_j_1_iteration = 1, $_smarty_tpl->tpl_vars['__smarty_section_j']->value['index'] = 0; $__section_j_1_iteration <= $__section_j_1_total; $__section_j_1_iteration++, $_smarty_tpl->tpl_vars['__smarty_section_j']->value['index']++){
?>
              </div>
              <div>
                <?php echo $_smarty_tpl->tpl_vars['postRows']->value[(isset($_smarty_tpl->tpl_vars['__smarty_section_i']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_i']->value['index'] : null)]['comments'][(isset($_smarty_tpl->tpl_vars['__smarty_section_j']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_j']->value['index'] : null)];?>
<br> by:
                <?php echo $_smarty_tpl->tpl_vars['postRows']->value[(isset($_smarty_tpl->tpl_vars['__smarty_section_i']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_i']->value['index'] : null)]['fullname'][(isset($_smarty_tpl->tpl_vars['__smarty_section_j']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_j']->value['index'] : null)];?>

                <?php
}
}
?>
                <?php }?>
              </div>

               <div id="comment">
                <form action="dashboard.php" method="POST">
                  <input type="hidden" value="<?php echo $_smarty_tpl->tpl_vars['postRows']->value[(isset($_smarty_tpl->tpl_vars['__smarty_section_i']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_i']->value['index'] : null)]['id'];?>
" name="postid">
                  <input type="text" name="post_body2" placeholder="Шта збориш"><br>
                  <input type="submit" name="submit2" value="Пошаљи">
                </form>
              </div>
            </div>
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
</html>
<?php }
}
