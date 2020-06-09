<?php
/* Smarty version 3.1.33, created on 2019-04-04 20:44:42
  from 'C:\xampp\htdocs\Nikola_Djukic\konstantinfaza\SN PROJECT\views\editPost.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.33',
  'unifunc' => 'content_5ca6509ac27502_32465607',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '92a40496c9b5fda2d8a57492217f6aeb45e95502' => 
    array (
      0 => 'C:\\xampp\\htdocs\\Nikola_Djukic\\konstantinfaza\\SN PROJECT\\views\\editPost.tpl',
      1 => 1554403478,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5ca6509ac27502_32465607 (Smarty_Internal_Template $_smarty_tpl) {
?><!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
    <title>Измена објаве</title>
    <link rel="stylesheet" href="css/style.css">
    <meta name="viewport" content="width=device-width, initial-scale=1">
</head>
<body>
    
       
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
</body>
</html><?php }
}
