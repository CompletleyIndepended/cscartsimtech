<?php /* Smarty version Smarty-3.1.21, created on 2021-09-05 11:16:29
         compiled from "C:\OpenServer\domains\cscart\design\backend\templates\addons\product_reviews\views\product_reviews\components\reviews\review_with_photo_icon.tpl" */ ?>
<?php /*%%SmartyHeaderCode:170395599561347cdd4efd20-01760324%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '1ababa7aca29b5f1bb404d9de925e6cde4a08acb' => 
    array (
      0 => 'C:\\OpenServer\\domains\\cscart\\design\\backend\\templates\\addons\\product_reviews\\views\\product_reviews\\components\\reviews\\review_with_photo_icon.tpl',
      1 => 1628148740,
      2 => 'tygh',
    ),
  ),
  'nocache_hash' => '170395599561347cdd4efd20-01760324',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'product_review_images' => 0,
    'scroll_to_elm' => 0,
    'external_click_id' => 0,
    'link' => 0,
    'product_review_id' => 0,
    'meta' => 0,
    'button' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.21',
  'unifunc' => 'content_61347cdd5050c3_69332963',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_61347cdd5050c3_69332963')) {function content_61347cdd5050c3_69332963($_smarty_tpl) {?><?php
\Tygh\Languages\Helper::preloadLangVars(array('product_reviews.with_photo','product_reviews.show_review_images','product_reviews.scroll_to_review_images'));
?>


<?php if ($_smarty_tpl->tpl_vars['product_review_images']->value) {?>

    <?php $_smarty_tpl->tpl_vars['scroll_to_elm'] = new Smarty_variable((($tmp = @$_smarty_tpl->tpl_vars['scroll_to_elm']->value)===null||$tmp==='' ? "content_product_reviews" : $tmp), null, 0);?>
    <?php $_smarty_tpl->tpl_vars['external_click_id'] = new Smarty_variable((($tmp = @$_smarty_tpl->tpl_vars['external_click_id']->value)===null||$tmp==='' ? "reviews" : $tmp), null, 0);?>
    <?php if ($_smarty_tpl->tpl_vars['link']->value===true) {?>
        <?php $_smarty_tpl->tpl_vars['link'] = new Smarty_variable("product_reviews.update?product_review_id=".((string)$_smarty_tpl->tpl_vars['product_review_id']->value), null, 0);?>
    <?php }?>

    <?php $_smarty_tpl->_capture_stack[0][] = array("with_photo_icon", null, null); ob_start(); ?>
        <i class="icon-picture muted" title="<?php echo $_smarty_tpl->__("product_reviews.with_photo");?>
"></i>
    <?php list($_capture_buffer, $_capture_assign, $_capture_append) = array_pop($_smarty_tpl->_capture_stack[0]);
if (!empty($_capture_buffer)) {
 if (isset($_capture_assign)) $_smarty_tpl->assign($_capture_assign, ob_get_contents());
 if (isset( $_capture_append)) $_smarty_tpl->append( $_capture_append, ob_get_contents());
 Smarty::$_smarty_vars['capture'][$_capture_buffer]=ob_get_clean();
} else $_smarty_tpl->capture_error();?>

    <?php if ($_smarty_tpl->tpl_vars['link']->value) {?>
        <a href="<?php echo htmlspecialchars(fn_url($_smarty_tpl->tpl_vars['link']->value), ENT_QUOTES, 'UTF-8');?>
"
            class="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['meta']->value, ENT_QUOTES, 'UTF-8');?>
"
            title="<?php echo $_smarty_tpl->__("product_reviews.show_review_images");?>
"
        >
            <?php echo Smarty::$_smarty_vars['capture']['with_photo_icon'];?>

        </a>

    <?php } elseif ($_smarty_tpl->tpl_vars['button']->value) {?>
        <button type="button"
            class="cm-external-click <?php echo htmlspecialchars($_smarty_tpl->tpl_vars['meta']->value, ENT_QUOTES, 'UTF-8');?>
"
            data-ca-scroll="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['scroll_to_elm']->value, ENT_QUOTES, 'UTF-8');?>
"
            data-ca-external-click-id="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['external_click_id']->value, ENT_QUOTES, 'UTF-8');?>
"
            title="<?php echo $_smarty_tpl->__("product_reviews.scroll_to_review_images");?>
"
        >
            <?php echo Smarty::$_smarty_vars['capture']['with_photo_icon'];?>

        </button>
    <?php } else { ?>
        <span class="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['meta']->value, ENT_QUOTES, 'UTF-8');?>
">
            <?php echo Smarty::$_smarty_vars['capture']['with_photo_icon'];?>

        </span>
    <?php }?>

<?php }?>
<?php }} ?>
