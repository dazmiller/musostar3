<?php
/* Smarty version 3.1.32, created on 2018-12-18 07:10:45
  from 'C:\xampp\htdocs\musostar3\content\themes\musostar\templates\__feeds_post.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.32',
  'unifunc' => 'content_5c189d75463f90_50866624',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '973e516888031b481a89fa2843d9bad30307f012' => 
    array (
      0 => 'C:\\xampp\\htdocs\\musostar3\\content\\themes\\musostar\\templates\\__feeds_post.tpl',
      1 => 1542671624,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:__feeds_post.body.tpl' => 1,
    'file:__feeds_post.social.tpl' => 1,
    'file:__feeds_post.comments.tpl' => 1,
  ),
),false)) {
function content_5c189d75463f90_50866624 (Smarty_Internal_Template $_smarty_tpl) {
if (!$_smarty_tpl->tpl_vars['standalone']->value) {?><li><?php }?>
    <!-- post -->
    <div class="post <?php if ($_smarty_tpl->tpl_vars['boosted']->value) {?>boosted<?php }?>" data-id="<?php echo $_smarty_tpl->tpl_vars['post']->value['post_id'];?>
">

        <?php if ($_smarty_tpl->tpl_vars['standalone']->value && $_smarty_tpl->tpl_vars['pinned']->value) {?>
            <div class="pin-icon" data-toggle="tooltip" title="<?php echo __("Pinned Post");?>
">
                <i class="fa fa-bookmark"></i>
            </div>
        <?php }?>

        <?php if ($_smarty_tpl->tpl_vars['standalone']->value && $_smarty_tpl->tpl_vars['boosted']->value) {?>
            <div class="boosted-icon" data-toggle="tooltip" title="<?php echo __("Promoted");?>
">
                <i class="fa fa-bullhorn"></i>
            </div>
        <?php }?>

        <!-- post body -->
        <div class="post-body">
            
            <?php $_smarty_tpl->_subTemplateRender('file:__feeds_post.body.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('_post'=>$_smarty_tpl->tpl_vars['post']->value,'_shared'=>false), 0, false);
?>

            <!-- post stats -->
            <div class="post-stats">
                <!-- likes -->
                <span class="text-clickable" data-toggle="modal" data-url="posts/who_likes.php?post_id=<?php echo $_smarty_tpl->tpl_vars['post']->value['post_id'];?>
">
                    <i class="fa fa-thumbs-up"></i> 
                    <span class="js_post-likes-num">
                        <?php echo $_smarty_tpl->tpl_vars['post']->value['likes'];?>

                    </span>
                </span>
                <!-- likes -->

                <span class="pull-right flip">
                    <!-- comments -->
                    <span class="text-clickable js_comments-toggle">
                        <i class="fa fa-comments"></i> <?php echo $_smarty_tpl->tpl_vars['post']->value['comments'];?>
 <?php echo __("Comments");?>

                    </span>
                    <!-- comments -->

                    <!-- shares -->
                    <span class="text-clickable ml10 <?php if ($_smarty_tpl->tpl_vars['post']->value['shares'] == 0) {?>x-hidden<?php }?>" data-toggle="modal" data-url="posts/who_shares.php?post_id=<?php echo $_smarty_tpl->tpl_vars['post']->value['post_id'];?>
">
                        <i class="fa fa-share"></i> <?php echo $_smarty_tpl->tpl_vars['post']->value['shares'];?>
 <?php echo __("Shares");?>

                    </span>
                    <!-- shares -->
                </span>
            </div>
            <!-- post stats -->

            <!-- post actions -->
            <?php if ($_smarty_tpl->tpl_vars['user']->value->_logged_in) {?>
                <div class="post-actions clearfix">
                    <!-- like -->
                    <div class="action-btn <?php if ($_smarty_tpl->tpl_vars['post']->value['i_like']) {?>text-active js_unlike-post<?php } else { ?>js_like-post<?php }?>">
                        <i class="fa fa-thumbs-up fa-fw mr5"></i><span><?php echo __("Like");?>
</span>
                    </div>
                    <!-- like -->

                    <!-- comment -->
                    <div class="action-btn js_comment">
                        <i class="fa fa-comment fa-fw mr5"></i><span><?php echo __("Comment");?>
</span>
                    </div>
                    <!-- comment -->

                    <!-- share -->
                    <?php if ($_smarty_tpl->tpl_vars['post']->value['privacy'] == "public") {?>
                        <div class="action-btn <?php if ($_smarty_tpl->tpl_vars['system']->value['social_share_enabled']) {?>js_share-toggle<?php } else { ?>js_share<?php }?>" data-id="<?php echo $_smarty_tpl->tpl_vars['post']->value['post_id'];?>
">
                            <i class="fa fa-share fa-fw mr5"></i><span><?php echo __("Share");?>
</span>
                        </div>
                    <?php }?>
                    <!-- share -->
                </div>
            <?php }?>
            <!-- post actions -->

        </div>
        <!-- post body -->

        <!-- post footer -->
        <div class="post-footer <?php if (!$_smarty_tpl->tpl_vars['standalone']->value) {?>x-hidden<?php }?>">
            <!-- social sharing -->
            <?php $_smarty_tpl->_subTemplateRender('file:__feeds_post.social.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>
            <!-- social sharing -->

            <!-- comments -->
            <?php $_smarty_tpl->_subTemplateRender('file:__feeds_post.comments.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>
            <!-- comments -->
        </div>
        <!-- post footer -->

    </div>
    <!-- post -->
<?php if (!$_smarty_tpl->tpl_vars['standalone']->value) {?></li><?php }
}
}
