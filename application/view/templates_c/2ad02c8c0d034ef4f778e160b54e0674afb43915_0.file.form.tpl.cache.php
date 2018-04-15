<?php
/* Smarty version 3.1.30, created on 2018-04-15 01:43:41
  from "C:\wamp\www\bulbstore\templates\form.tpl" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.30',
  'unifunc' => 'content_5ad2ae4d473618_37764735',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '2ad02c8c0d034ef4f778e160b54e0674afb43915' => 
    array (
      0 => 'C:\\wamp\\www\\bulbstore\\templates\\form.tpl',
      1 => 1523755839,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5ad2ae4d473618_37764735 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->compiled->nocache_hash = '153655ad2ae4d4362e2_04749686';
?>
<!DOCTYPE html>
<html>
<head>
	<title>Document</title>
</head>
<body>
	Hello World!! This is from TPL
	and value is <?php echo $_smarty_tpl->tpl_vars['message']->value;?>


<ul>
<?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['arr']->value, 'element');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['element']->value) {
?>
    <li><?php echo $_smarty_tpl->tpl_vars['element']->value;?>
</li>
<?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl);
?>

</ul>

</body>
</html><?php }
}
