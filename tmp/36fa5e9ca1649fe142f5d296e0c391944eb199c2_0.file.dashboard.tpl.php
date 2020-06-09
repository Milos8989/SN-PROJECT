<?php
/* Smarty version 3.1.33, created on 2019-03-21 00:22:55
  from 'C:\xampp\htdocs\Social Network\Faza 4\views\dashboard.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.33',
  'unifunc' => 'content_5c92cb4fdfbe06_28717911',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '36fa5e9ca1649fe142f5d296e0c391944eb199c2' => 
    array (
      0 => 'C:\\xampp\\htdocs\\Social Network\\Faza 4\\views\\dashboard.tpl',
      1 => 1553026056,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5c92cb4fdfbe06_28717911 (Smarty_Internal_Template $_smarty_tpl) {
?><!DOCTYPE html>
<html>
<head>
	<title></title>
	<link rel="stylesheet" type="text/css" href="style.css">
</head>
<body>
	<header class="nav-bar2">
		<div class="div-left">
			<p>Social-network</p>
		</div>
		<div class="div-right">
			<a href="#"><img src="images/placeholder.jpg">
			<?php echo $_smarty_tpl->tpl_vars['username']->value;?>
</a>
			<a href="logout.php">Log Out</a>
		</div>
	</header>
<div class="forma">
	<form action="dashboard.php" method="post" enctype="multipart/form-data">
		<input type="text" name="post_body" placeholder="Whats on your mind ?"><br>
		<select name="privacy">
			<option value="public">public</option>
			<option value="private">private</option>
		</select>
		<input type="submit" name="submit" value="Post"><br>
		<input type="file" name="file">
		<button type="submit" name="upload">UPLOAD</button>
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
			<div><img class="image" src="images/placeholder.jpg"></div>
			<a href="wall.php?username=<?php ob_start();
echo $_smarty_tpl->tpl_vars['postRows']->value[(isset($_smarty_tpl->tpl_vars['__smarty_section_i']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_i']->value['index'] : null)]['name'];
$_prefixVariable1 = ob_get_clean();
echo $_prefixVariable1;?>
"><span id="fullName">
				<?php echo $_smarty_tpl->tpl_vars['postRows']->value[(isset($_smarty_tpl->tpl_vars['__smarty_section_i']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_i']->value['index'] : null)]['name'];?>

				<?php echo $_smarty_tpl->tpl_vars['postRows']->value[(isset($_smarty_tpl->tpl_vars['__smarty_section_i']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_i']->value['index'] : null)]['lastname'];?>

			</span></a>
			</div>
			<div id="postTxt"><?php echo $_smarty_tpl->tpl_vars['postRows']->value[(isset($_smarty_tpl->tpl_vars['__smarty_section_i']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_i']->value['index'] : null)]['body'];?>
</div>
			<div id="date"><?php echo $_smarty_tpl->tpl_vars['postRows']->value[(isset($_smarty_tpl->tpl_vars['__smarty_section_i']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_i']->value['index'] : null)]['date'];?>
</div><br>
			<div id=like>Like Comment</div>
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
