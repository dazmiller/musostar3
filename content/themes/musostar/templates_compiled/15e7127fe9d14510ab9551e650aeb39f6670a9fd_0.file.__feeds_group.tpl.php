<?php
/* Smarty version 3.1.32, created on 2018-12-18 07:10:47
  from 'C:\xampp\htdocs\musostar3\content\themes\musostar\templates\__feeds_group.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.32',
  'unifunc' => 'content_5c189d775a5b00_49739795',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '15e7127fe9d14510ab9551e650aeb39f6670a9fd' => 
    array (
      0 => 'C:\\xampp\\htdocs\\musostar3\\content\\themes\\musostar\\templates\\__feeds_group.tpl',
      1 => 1542671624,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5c189d775a5b00_49739795 (Smarty_Internal_Template $_smarty_tpl) {
if (!($_smarty_tpl->tpl_vars['_tpl']->value == "profile_groups" || $_smarty_tpl->tpl_vars['_tpl']->value == "list")) {?>
    <li class="col-md-3 col-sm-6">
        <div class="box">
            <a class="box-picture" href="<?php echo $_smarty_tpl->tpl_vars['system']->value['system_url'];?>
/groups/<?php echo $_smarty_tpl->tpl_vars['_group']->value['group_name'];?>
" style="background-image:url('<?php echo $_smarty_tpl->tpl_vars['_group']->value['group_picture'];?>
');"></a>
            <div class="box-content">
                <a href="<?php echo $_smarty_tpl->tpl_vars['system']->value['system_url'];?>
/groups/<?php echo $_smarty_tpl->tpl_vars['_group']->value['group_name'];?>
" class="title">
                    <?php echo $_smarty_tpl->tpl_vars['_group']->value['group_title'];?>

                </a>
                <div class="text clearfix">
                    <div class="pull-right flip">
                        <?php if ($_smarty_tpl->tpl_vars['_group']->value['i_joined'] == "approved") {?>
                            <button type="button" class="btn btn-default btn-delete js_leave-group" data-id="<?php echo $_smarty_tpl->tpl_vars['_group']->value['group_id'];?>
" data-privacy="<?php echo $_smarty_tpl->tpl_vars['_group']->value['group_privacy'];?>
">
                                <i class="fa fa-check"></i>
                                <?php echo __("Joined");?>

                            </button>
                        <?php } elseif ($_smarty_tpl->tpl_vars['_group']->value['i_joined'] == "pending") {?>
                            <button type="button" class="btn btn-default btn-delete js_leave-group" data-id="<?php echo $_smarty_tpl->tpl_vars['_group']->value['group_id'];?>
" data-privacy="<?php echo $_smarty_tpl->tpl_vars['_group']->value['group_privacy'];?>
">
                                <i class="fa fa-clock"></i>
                                <?php echo __("Pending");?>

                            </button>
                        <?php } else { ?>
                            <button type="button" class="btn btn-success js_join-group" data-id="<?php echo $_smarty_tpl->tpl_vars['_group']->value['group_id'];?>
" data-privacy="<?php if ($_smarty_tpl->tpl_vars['user']->value->_data['user_id'] == $_smarty_tpl->tpl_vars['_group']->value['group_admin']) {?>public<?php } else {
echo $_smarty_tpl->tpl_vars['_group']->value['group_privacy'];
}?>">
                                <i class="fa fa-user-plus"></i>
                                <?php echo __("Join");?>

                            </button>
                        <?php }?>
                    </div>
                    <div>
                        <?php echo $_smarty_tpl->tpl_vars['_group']->value['group_members'];?>
 <?php echo __("Members");?>

                    </div>
                </div>
            </div>
        </div>
    </li>
<?php } else { ?>
    <?php if ($_smarty_tpl->tpl_vars['_tpl']->value == "profile_groups") {?><li class="col-sm-12 col-md-6"><div class="data-container-wrapper"><?php } else { ?><li class="feeds-item"><?php }?>
        <div class="data-container <?php if ($_smarty_tpl->tpl_vars['_small']->value) {?>small<?php }?>">
            <a href="<?php echo $_smarty_tpl->tpl_vars['system']->value['system_url'];?>
/groups/<?php echo $_smarty_tpl->tpl_vars['_group']->value['group_name'];
if ($_smarty_tpl->tpl_vars['_search']->value) {?>?ref=qs<?php }?>">
                <img class="data-avatar" src="<?php echo $_smarty_tpl->tpl_vars['_group']->value['group_picture'];?>
" alt="<?php echo $_smarty_tpl->tpl_vars['_group']->value['group_title'];?>
">
            </a>
            <div class="data-content">
                <div class="pull-right flip">
                    <?php if ($_smarty_tpl->tpl_vars['_group']->value['i_joined'] == "approved") {?>
                        <button type="button" class="btn btn-default btn-delete js_leave-group" data-id="<?php echo $_smarty_tpl->tpl_vars['_group']->value['group_id'];?>
" data-privacy="<?php echo $_smarty_tpl->tpl_vars['_group']->value['group_privacy'];?>
">
                            <i class="fa fa-check"></i>
                            <?php echo __("Joined");?>

                        </button>
                    <?php } elseif ($_smarty_tpl->tpl_vars['_group']->value['i_joined'] == "pending") {?>
                        <button type="button" class="btn btn-default btn-delete js_leave-group" data-id="<?php echo $_smarty_tpl->tpl_vars['_group']->value['group_id'];?>
" data-privacy="<?php echo $_smarty_tpl->tpl_vars['_group']->value['group_privacy'];?>
">
                            <i class="fa fa-clock"></i>
                            <?php echo __("Pending");?>

                        </button>
                    <?php } else { ?>
                        <button type="button" class="btn btn-success js_join-group" data-id="<?php echo $_smarty_tpl->tpl_vars['_group']->value['group_id'];?>
" data-privacy="<?php if ($_smarty_tpl->tpl_vars['user']->value->_data['user_id'] == $_smarty_tpl->tpl_vars['_group']->value['group_admin']) {?>public<?php } else {
echo $_smarty_tpl->tpl_vars['_group']->value['group_privacy'];
}?>">
                            <i class="fa fa-user-plus"></i>
                            <?php echo __("Join");?>

                        </button>
                    <?php }?>
                </div>
                <div>
                    <span class="name">
                        <a href="<?php echo $_smarty_tpl->tpl_vars['system']->value['system_url'];?>
/groups/<?php echo $_smarty_tpl->tpl_vars['_group']->value['group_name'];
if ($_smarty_tpl->tpl_vars['_search']->value) {?>?ref=qs<?php }?>"><?php echo $_smarty_tpl->tpl_vars['_group']->value['group_title'];?>
</a>
                    </span>
                    <div><?php echo $_smarty_tpl->tpl_vars['_group']->value['group_members'];?>
 <?php echo __("Members");?>
</div>
                </div>
            </div>
        </div>
    <?php if ($_smarty_tpl->tpl_vars['_tpl']->value == "profile_groups") {?></div></li><?php } else { ?></li><?php }
}
}
}
