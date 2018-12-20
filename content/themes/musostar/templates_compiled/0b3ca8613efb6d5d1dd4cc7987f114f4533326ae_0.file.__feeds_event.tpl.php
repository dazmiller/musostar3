<?php
/* Smarty version 3.1.32, created on 2018-12-18 07:10:47
  from 'C:\xampp\htdocs\musostar3\content\themes\musostar\templates\__feeds_event.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.32',
  'unifunc' => 'content_5c189d77a2c6c9_60884686',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '0b3ca8613efb6d5d1dd4cc7987f114f4533326ae' => 
    array (
      0 => 'C:\\xampp\\htdocs\\musostar3\\content\\themes\\musostar\\templates\\__feeds_event.tpl',
      1 => 1542671624,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5c189d77a2c6c9_60884686 (Smarty_Internal_Template $_smarty_tpl) {
if (!($_smarty_tpl->tpl_vars['_tpl']->value == "profile_events" || $_smarty_tpl->tpl_vars['_tpl']->value == "list")) {?>
    <li class="col-md-3 col-sm-6">
        <div class="box">
            <a class="box-picture" href="<?php echo $_smarty_tpl->tpl_vars['system']->value['system_url'];?>
/events/<?php echo $_smarty_tpl->tpl_vars['_event']->value['event_id'];?>
" style="background-image:url('<?php echo $_smarty_tpl->tpl_vars['_event']->value['event_picture'];?>
');"></a>
            <div class="box-content">
                <a href="<?php echo $_smarty_tpl->tpl_vars['system']->value['system_url'];?>
/events/<?php echo $_smarty_tpl->tpl_vars['_event']->value['event_id'];?>
" class="title">
                    <?php echo $_smarty_tpl->tpl_vars['_event']->value['event_title'];?>

                </a>
                <div class="text clearfix">
                    <div class="pull-right flip">
                        <?php if ($_smarty_tpl->tpl_vars['_event']->value['i_joined']['is_interested']) {?>
                            <button type="button" class="btn btn-default js_uninterest-event" data-id="<?php echo $_smarty_tpl->tpl_vars['_event']->value['event_id'];?>
">
                                <i class="fa fa-check"></i> <?php echo __("Interested");?>

                            </button>
                        <?php } else { ?>
                            <button type="button" class="btn btn-primary js_interest-event" data-id="<?php echo $_smarty_tpl->tpl_vars['_event']->value['event_id'];?>
">
                                <i class="fa fa-star"></i> <?php echo __("Interested");?>

                            </button>
                        <?php }?>
                    </div>
                    <div>
                        <?php echo $_smarty_tpl->tpl_vars['_event']->value['event_interested'];?>
 <?php echo __("Interested");?>

                    </div>
                </div>
            </div>
        </div>
    </li>
<?php } else { ?>
    <?php if ($_smarty_tpl->tpl_vars['_tpl']->value == "profile_events") {?><li class="col-sm-12 col-md-6"><div class="data-container-wrapper"><?php } else { ?><li class="feeds-item"><?php }?>
        <div class="data-container <?php if ($_smarty_tpl->tpl_vars['_small']->value) {?>small<?php }?>">
            <a href="<?php echo $_smarty_tpl->tpl_vars['system']->value['system_url'];?>
/events/<?php echo $_smarty_tpl->tpl_vars['_event']->value['event_id'];
if ($_smarty_tpl->tpl_vars['_search']->value) {?>?ref=qs<?php }?>">
                <img class="data-avatar" src="<?php echo $_smarty_tpl->tpl_vars['_event']->value['event_picture'];?>
" alt="<?php echo $_smarty_tpl->tpl_vars['_event']->value['event_title'];?>
">
            </a>
            <div class="data-content">
                <div class="pull-right flip">
                    <?php if ($_smarty_tpl->tpl_vars['_tpl']->value != "list") {?>
                        <?php if ($_smarty_tpl->tpl_vars['_event']->value['i_joined']['is_going']) {?>
                            <button type="button" class="btn btn-default js_ungo-event" data-id="<?php echo $_smarty_tpl->tpl_vars['_event']->value['event_id'];?>
">
                                <i class="fa fa-check"></i> <?php echo __("Going");?>

                            </button>
                        <?php } else { ?>
                            <button type="button" class="btn btn-success js_go-event" data-id="<?php echo $_smarty_tpl->tpl_vars['_event']->value['event_id'];?>
">
                                <i class="fa fa-calendar-check	"></i> <?php echo __("Going");?>

                            </button>
                        <?php }?>
                    <?php }?>
                    <?php if ($_smarty_tpl->tpl_vars['_event']->value['i_joined']['is_interested']) {?>
                        <button type="button" class="btn btn-default js_uninterest-event" data-id="<?php echo $_smarty_tpl->tpl_vars['_event']->value['event_id'];?>
">
                            <i class="fa fa-check"></i> <?php echo __("Interested");?>

                        </button>
                    <?php } else { ?>
                        <button type="button" class="btn btn-primary js_interest-event" data-id="<?php echo $_smarty_tpl->tpl_vars['_event']->value['event_id'];?>
">
                            <i class="fa fa-star"></i> <?php echo __("Interested");?>

                        </button>
                    <?php }?>
                </div>
                <div>
                    <span class="name">
                        <a href="<?php echo $_smarty_tpl->tpl_vars['system']->value['system_url'];?>
/events/<?php echo $_smarty_tpl->tpl_vars['_event']->value['event_id'];
if ($_smarty_tpl->tpl_vars['_search']->value) {?>?ref=qs<?php }?>"><?php echo $_smarty_tpl->tpl_vars['_event']->value['event_title'];?>
</a>
                    </span>
                    <div><?php echo $_smarty_tpl->tpl_vars['_event']->value['event_interested'];?>
 <?php echo __("Interested");?>
</div>
                </div>
            </div>
        </div>
    <?php if ($_smarty_tpl->tpl_vars['_tpl']->value == "profile_events") {?></div></li><?php } else { ?></li><?php }
}
}
}
