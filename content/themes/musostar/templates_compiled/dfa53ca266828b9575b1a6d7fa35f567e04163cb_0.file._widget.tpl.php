<?php
/* Smarty version 3.1.32, created on 2018-12-18 07:10:47
  from 'C:\xampp\htdocs\musostar3\content\themes\musostar\templates\_widget.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.32',
  'unifunc' => 'content_5c189d774f6637_71907623',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'dfa53ca266828b9575b1a6d7fa35f567e04163cb' => 
    array (
      0 => 'C:\\xampp\\htdocs\\musostar3\\content\\themes\\musostar\\templates\\_widget.tpl',
      1 => 1542671624,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5c189d774f6637_71907623 (Smarty_Internal_Template $_smarty_tpl) {
if ($_smarty_tpl->tpl_vars['widgets']->value) {?>
<!-- Widgets -->
<?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['widgets']->value, 'widget');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['widget']->value) {
?>
	<div class="panel panel-default panel-widget">
	    <div class="panel-heading">
	        <strong><?php echo $_smarty_tpl->tpl_vars['widget']->value['title'];?>
</strong>
	    </div>
	    <div class="panel-body"><?php echo $_smarty_tpl->tpl_vars['widget']->value['code'];?>
</div>
	</div>
<?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
<!-- Widgets -->
<?php }
}
}
