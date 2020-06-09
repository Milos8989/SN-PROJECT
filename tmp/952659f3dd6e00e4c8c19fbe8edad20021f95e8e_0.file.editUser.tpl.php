<?php
/* Smarty version 3.1.33, created on 2019-04-07 20:01:36
  from 'C:\xampp\htdocs\Milos Bjelivuk\Kanarinci\SN PROJECT\views\editUser.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.33',
  'unifunc' => 'content_5caa3b00055110_11961253',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '952659f3dd6e00e4c8c19fbe8edad20021f95e8e' => 
    array (
      0 => 'C:\\xampp\\htdocs\\Milos Bjelivuk\\Kanarinci\\SN PROJECT\\views\\editUser.tpl',
      1 => 1554660091,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5caa3b00055110_11961253 (Smarty_Internal_Template $_smarty_tpl) {
?><!DOCTYPE html>
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

			<input type="hidden" name="uid" value="<?php echo $_smarty_tpl->tpl_vars['userid']->value;?>
">
			<span>Име</span>
			<input type="text" class="contact-form-text" name="name" value="<?php echo $_smarty_tpl->tpl_vars['nameedit']->value;?>
"><br>
			<span>Презиме</span>
			<input type="text" class="contact-form-text" name="lastname" value="<?php echo $_smarty_tpl->tpl_vars['lastnameedit']->value;?>
"><br>
			<input type="submit" class="contact-form-btn" value="Промени податке" name="editUser">

		</form>

</div>
   </div>
</body>
</html><?php }
}
