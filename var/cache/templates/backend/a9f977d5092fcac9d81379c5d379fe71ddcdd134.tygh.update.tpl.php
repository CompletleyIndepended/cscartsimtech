<?php /* Smarty version Smarty-3.1.21, created on 2021-09-05 11:17:49
         compiled from "C:\OpenServer\domains\cscart\design\backend\templates\addons\product_reviews\views\product_reviews\update.tpl" */ ?>
<?php /*%%SmartyHeaderCode:62244504661347d2d2ad4b6-18095604%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'a9f977d5092fcac9d81379c5d379fe71ddcdd134' => 
    array (
      0 => 'C:\\OpenServer\\domains\\cscart\\design\\backend\\templates\\addons\\product_reviews\\views\\product_reviews\\update.tpl',
      1 => 1628148740,
      2 => 'tygh',
    ),
  ),
  'nocache_hash' => '62244504661347d2d2ad4b6-18095604',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'product_review' => 0,
    'is_allowed_to_update_product_reviews' => 0,
    'auth' => 0,
    'config' => 0,
    'is_allowed_update_reply' => 0,
    'product_review_id' => 0,
    'available_message_types' => 0,
    'total_product_reviews' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.21',
  'unifunc' => 'content_61347d2d30ba18_85047412',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_61347d2d30ba18_85047412')) {function content_61347d2d30ba18_85047412($_smarty_tpl) {?><?php if (!is_callable('smarty_modifier_enum')) include 'C:/OpenServer/domains/cscart/app/functions/smarty_plugins\\modifier.enum.php';
?><?php
\Tygh\Languages\Helper::preloadLangVars(array('product_reviews.title'));
?>


<?php $_smarty_tpl->tpl_vars['product_review_id'] = new Smarty_variable($_smarty_tpl->tpl_vars['product_review']->value['product_review_id'], null, 0);?>

<?php $_smarty_tpl->_capture_stack[0][] = array("mainbox", null, null); ob_start(); ?>

    <form action="<?php echo htmlspecialchars(fn_url(''), ENT_QUOTES, 'UTF-8');?>
"
        method="POST"
        enctype="multipart/form-data"
        class="form-horizontal form-edit cs-product-reviews-update
            <?php if (!$_smarty_tpl->tpl_vars['is_allowed_to_update_product_reviews']->value||$_smarty_tpl->tpl_vars['auth']->value['user_type']===smarty_modifier_enum("UserTypes::VENDOR")) {?>
                cm-hide-inputs
            <?php }?>"
        name="update_product_reviews_form"
    >
        <input type="hidden"
            name="redirect_url"
            value="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['config']->value['current_url'], ENT_QUOTES, 'UTF-8');?>
"
            class="<?php if ($_smarty_tpl->tpl_vars['is_allowed_update_reply']->value) {?>cm-no-hide-input<?php }?>"
        />
        <input type="hidden"
            name="selected_section"
            value=""
        />
        <input type="hidden"
            name="product_review_data[product_review_id]"
            value="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['product_review_id']->value, ENT_QUOTES, 'UTF-8');?>
"
            class="<?php if ($_smarty_tpl->tpl_vars['is_allowed_update_reply']->value) {?>cm-no-hide-input<?php }?>"
        />

        <?php echo $_smarty_tpl->getSubTemplate ("addons/product_reviews/views/product_reviews/components/update/review.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array('product_review'=>$_smarty_tpl->tpl_vars['product_review']->value,'available_message_types'=>$_smarty_tpl->tpl_vars['available_message_types']->value,'is_allowed_update_reply'=>$_smarty_tpl->tpl_vars['is_allowed_update_reply']->value), 0);?>


    </form>

<?php list($_capture_buffer, $_capture_assign, $_capture_append) = array_pop($_smarty_tpl->_capture_stack[0]);
if (!empty($_capture_buffer)) {
 if (isset($_capture_assign)) $_smarty_tpl->assign($_capture_assign, ob_get_contents());
 if (isset( $_capture_append)) $_smarty_tpl->append( $_capture_append, ob_get_contents());
 Smarty::$_smarty_vars['capture'][$_capture_buffer]=ob_get_clean();
} else $_smarty_tpl->capture_error();?>

<?php $_smarty_tpl->_capture_stack[0][] = array("sidebar", null, null); ob_start(); ?>
    <?php echo $_smarty_tpl->getSubTemplate ("addons/product_reviews/views/product_reviews/components/sidebar/sidebar_review_details.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array('product_review'=>$_smarty_tpl->tpl_vars['product_review']->value,'user_data'=>$_smarty_tpl->tpl_vars['product_review']->value['user_data'],'total_product_reviews'=>$_smarty_tpl->tpl_vars['total_product_reviews']->value,'product_review_id'=>$_smarty_tpl->tpl_vars['product_review_id']->value), 0);?>

<?php list($_capture_buffer, $_capture_assign, $_capture_append) = array_pop($_smarty_tpl->_capture_stack[0]);
if (!empty($_capture_buffer)) {
 if (isset($_capture_assign)) $_smarty_tpl->assign($_capture_assign, ob_get_contents());
 if (isset( $_capture_append)) $_smarty_tpl->append( $_capture_append, ob_get_contents());
 Smarty::$_smarty_vars['capture'][$_capture_buffer]=ob_get_clean();
} else $_smarty_tpl->capture_error();?>

<?php $_smarty_tpl->_capture_stack[0][] = array("buttons", null, null); ob_start(); ?>
    <?php if ($_smarty_tpl->tpl_vars['is_allowed_update_reply']->value) {?>
        <?php echo $_smarty_tpl->getSubTemplate ("buttons/save.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array('but_name'=>"dispatch[product_reviews.update]",'but_target_form'=>"update_product_reviews_form",'but_role'=>"submit-link"), 0);?>

    <?php }?>
<?php list($_capture_buffer, $_capture_assign, $_capture_append) = array_pop($_smarty_tpl->_capture_stack[0]);
if (!empty($_capture_buffer)) {
 if (isset($_capture_assign)) $_smarty_tpl->assign($_capture_assign, ob_get_contents());
 if (isset( $_capture_append)) $_smarty_tpl->append( $_capture_append, ob_get_contents());
 Smarty::$_smarty_vars['capture'][$_capture_buffer]=ob_get_clean();
} else $_smarty_tpl->capture_error();?>

<?php ob_start();
echo $_smarty_tpl->__("product_reviews.title");
$_tmp1=ob_get_clean();?><?php echo $_smarty_tpl->getSubTemplate ("common/mainbox.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array('title'=>$_tmp1." #".((string)$_smarty_tpl->tpl_vars['product_review_id']->value),'content'=>Smarty::$_smarty_vars['capture']['mainbox'],'buttons'=>Smarty::$_smarty_vars['capture']['buttons'],'sidebar'=>Smarty::$_smarty_vars['capture']['sidebar']), 0);?>

<?php }} ?>
