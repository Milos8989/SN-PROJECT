<?php
/* Smarty version 3.1.33, created on 2019-04-07 21:01:16
  from 'C:\xampp\htdocs\Milos Bjelivuk\Kanarinci\SN PROJECT\views\editPost.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.33',
  'unifunc' => 'content_5caa48fc1c2f58_15079448',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '15e142cb5df3a031a5b68978a67be60a09a153a1' => 
    array (
      0 => 'C:\\xampp\\htdocs\\Milos Bjelivuk\\Kanarinci\\SN PROJECT\\views\\editPost.tpl',
      1 => 1554663671,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5caa48fc1c2f58_15079448 (Smarty_Internal_Template $_smarty_tpl) {
?><!DOCTYPE html>
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
        
		<form class="contact-form" action="editPost.php?id=<?php echo $_smarty_tpl->tpl_vars['postid']->value;?>
" method="post">
			
			<input type="hidden" name="postid" value="<?php echo $_smarty_tpl->tpl_vars['postid']->value;?>
">
			<input type="text" class="contact-form-text" name="postbody" value="<?php echo $_smarty_tpl->tpl_vars['bodyedit']->value;?>
" >
			<input type="submit" class="contact-form-btn" value="Измени објаву" name="editPost">

		</form>
</div>
</div>   
</body>
</html><?php }
}
