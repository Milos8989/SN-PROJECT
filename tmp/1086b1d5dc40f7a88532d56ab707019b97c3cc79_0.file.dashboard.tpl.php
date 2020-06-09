<?php
/* Smarty version 3.1.33, created on 2019-03-18 13:40:41
  from 'C:\xampp\htdocs\Bootcamp\social network\Faza 4\views\dashboard.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.33',
  'unifunc' => 'content_5c8f91c93b8cb9_55023801',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '1086b1d5dc40f7a88532d56ab707019b97c3cc79' => 
    array (
      0 => 'C:\\xampp\\htdocs\\Bootcamp\\social network\\Faza 4\\views\\dashboard.tpl',
      1 => 1552912640,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5c8f91c93b8cb9_55023801 (Smarty_Internal_Template $_smarty_tpl) {
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
	<form action="dashboard.php" method="post">
		<input type="text" name="post_body" placeholder="Whats on your mind ?"><br>
		<select name="privacy">
			<option value="public">public</option>
			<option value="private">private</option>
		</select>
		<input type="submit" name="submit" value="Post">
	</form>
</div>
<div class="container">
	<?php echo $_smarty_tpl->tpl_vars['postSuccessMessage']->value;?>

	<!-- ISCITAVANJE POSTOVA-->
	<?php
$__section_i_0_loop = (is_array(@$_loop=$_smarty_tpl->tpl_vars['postRows']->value) ? count($_loop) : max(0, (int) $_loop));
$__section_i_0_total = $__section_i_0_loop;
$_smarty_tpl->tpl_vars['__smarty_section_i'] = new Smarty_Variable(array());
if ($__section_i_0_total !== 0) {
for ($__section_i_0_iteration = 1, $_smarty_tpl->tpl_vars['__smarty_section_i']->value['index'] = 0; $__section_i_0_iteration <= $__section_i_0_total; $__section_i_0_iteration++, $_smarty_tpl->tpl_vars['__smarty_section_i']->value['index']++){
?>
	<div align="center" id="printText">
		<div class="posts">
			<img src="images/placeholder.jpg">
			<span id="fullName">
				<?php echo $_smarty_tpl->tpl_vars['postRows']->value[(isset($_smarty_tpl->tpl_vars['__smarty_section_i']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_i']->value['index'] : null)]['name'];?>

				<?php echo $_smarty_tpl->tpl_vars['postRows']->value[(isset($_smarty_tpl->tpl_vars['__smarty_section_i']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_i']->value['index'] : null)]['lastname'];?>

			</span>
			<div id="postTxt"><?php echo $_smarty_tpl->tpl_vars['postRows']->value[(isset($_smarty_tpl->tpl_vars['__smarty_section_i']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_i']->value['index'] : null)]['body'];?>
</div>
			<br><div id=like>Like Comment</div>
		</div>
	</div>
	<span></span>
	<?php
}
}
?>
</div>
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
