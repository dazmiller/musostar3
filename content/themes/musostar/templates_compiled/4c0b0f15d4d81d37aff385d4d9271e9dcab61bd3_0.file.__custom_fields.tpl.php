<?php
/* Smarty version 3.1.32, created on 2018-12-19 00:09:16
  from 'C:\xampp\htdocs\musostar3\content\themes\musostar\templates\__custom_fields.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.32',
  'unifunc' => 'content_5c198c2c6bc501_01877330',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '4c0b0f15d4d81d37aff385d4d9271e9dcab61bd3' => 
    array (
      0 => 'C:\\xampp\\htdocs\\musostar3\\content\\themes\\musostar\\templates\\__custom_fields.tpl',
      1 => 1542671624,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5c198c2c6bc501_01877330 (Smarty_Internal_Template $_smarty_tpl) {
if ($_smarty_tpl->tpl_vars['_registration']->value) {?>
	<?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['_custom_fields']->value, 'custom_field');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['custom_field']->value) {
?>
        <div class="form-group">
            <label><?php echo __($_smarty_tpl->tpl_vars['custom_field']->value['label']);?>
</label>
            <?php if ($_smarty_tpl->tpl_vars['custom_field']->value['type'] == "textbox") {?>
                <input name="fld_<?php echo $_smarty_tpl->tpl_vars['custom_field']->value['field_id'];?>
" type="text" class="form-control" placeholder="<?php echo __($_smarty_tpl->tpl_vars['custom_field']->value['label']);?>
">
            <?php } elseif ($_smarty_tpl->tpl_vars['custom_field']->value['type'] == "textarea") {?>
                <textarea name="fld_<?php echo $_smarty_tpl->tpl_vars['custom_field']->value['field_id'];?>
" class="form-control" placeholder="<?php echo __($_smarty_tpl->tpl_vars['custom_field']->value['label']);?>
"></textarea>
            <?php } elseif ($_smarty_tpl->tpl_vars['custom_field']->value['type'] == "selectbox") {?>
                <select name="fld_<?php echo $_smarty_tpl->tpl_vars['custom_field']->value['field_id'];?>
" class="form-control">
                	<option selected value="none"><?php echo __("Select");?>
 <?php echo __($_smarty_tpl->tpl_vars['custom_field']->value['label']);?>
</option>
                    <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['custom_field']->value['options'], 'value', false, 'id');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['id']->value => $_smarty_tpl->tpl_vars['value']->value) {
?>
                        <option <?php if ($_smarty_tpl->tpl_vars['custom_field']->value['value'] == $_smarty_tpl->tpl_vars['value']->value) {?>selected<?php }?> value="<?php echo $_smarty_tpl->tpl_vars['id']->value;?>
"><?php echo $_smarty_tpl->tpl_vars['value']->value;?>
</option>
                    <?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
                </select>
            <?php }?>
            <span class="help-block">
                <?php echo $_smarty_tpl->tpl_vars['custom_field']->value['description'];?>

            </span>
        </div>
    <?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);
} else { ?>
	<?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['_custom_fields']->value, 'custom_field');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['custom_field']->value) {
?>
	    <div class="form-group">
	        <label class="col-sm-3 control-label">
	            <?php echo __($_smarty_tpl->tpl_vars['custom_field']->value['label']);?>

	        </label>
	        <div class="col-sm-9">
	            <?php if ($_smarty_tpl->tpl_vars['custom_field']->value['type'] == "textbox") {?>
	                <input type="text" name="fld_<?php echo $_smarty_tpl->tpl_vars['custom_field']->value['field_id'];?>
" class="form-control" value="<?php echo $_smarty_tpl->tpl_vars['custom_field']->value['value'];?>
">
	            <?php } elseif ($_smarty_tpl->tpl_vars['custom_field']->value['type'] == "textarea") {?>
	                <textarea name="fld_<?php echo $_smarty_tpl->tpl_vars['custom_field']->value['field_id'];?>
" class="form-control"><?php echo $_smarty_tpl->tpl_vars['custom_field']->value['value'];?>
</textarea>
	            <?php } elseif ($_smarty_tpl->tpl_vars['custom_field']->value['type'] == "selectbox") {?>
	                <select name="fld_<?php echo $_smarty_tpl->tpl_vars['custom_field']->value['field_id'];?>
" class="form-control">
	                    <option <?php if ($_smarty_tpl->tpl_vars['custom_field']->value['value'] == '') {?>selected<?php }?> value="none"><?php echo __("Select");?>
 <?php echo __($_smarty_tpl->tpl_vars['custom_field']->value['label']);?>
</option>
	                    <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['custom_field']->value['options'], 'value', false, 'id');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['id']->value => $_smarty_tpl->tpl_vars['value']->value) {
?>
	                        <option <?php if ($_smarty_tpl->tpl_vars['custom_field']->value['value'] == $_smarty_tpl->tpl_vars['value']->value) {?>selected<?php }?> value="<?php echo $_smarty_tpl->tpl_vars['id']->value;?>
"><?php echo $_smarty_tpl->tpl_vars['value']->value;?>
</option>
	                    <?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
	                </select>
	            <?php }?>
	            <span class="help-block">
                    <?php echo $_smarty_tpl->tpl_vars['custom_field']->value['description'];?>

                </span>
	        </div>
	    </div>
	<?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);
}
}
}
