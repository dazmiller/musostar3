<?php
/* Smarty version 3.1.32, created on 2018-12-19 01:12:28
  from 'C:\xampp\htdocs\musostar3\content\themes\musostar\templates\ajax.chat.master.head.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.32',
  'unifunc' => 'content_5c199afce0bb35_28482431',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '19b7e6e223540f18973dab24224593aa79cb27a6' => 
    array (
      0 => 'C:\\xampp\\htdocs\\musostar3\\content\\themes\\musostar\\templates\\ajax.chat.master.head.tpl',
      1 => 1542671621,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5c199afce0bb35_28482431 (Smarty_Internal_Template $_smarty_tpl) {
if ($_smarty_tpl->tpl_vars['offline']->value) {?>

    <div class="chat-head-title">
        <i class="fa fa-user-secret"></i>
        <?php echo __("Offline");?>

    </div>

<?php } else { ?>

    <div class="chat-head-title">
        <i class="fa fa-circle"></i>
        (<?php echo count($_smarty_tpl->tpl_vars['online_friends']->value);?>
)
    </div>

<?php }
}
}
