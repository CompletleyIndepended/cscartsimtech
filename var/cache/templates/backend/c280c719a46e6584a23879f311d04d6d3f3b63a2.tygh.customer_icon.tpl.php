<?php /* Smarty version Smarty-3.1.21, created on 2021-09-05 11:16:29
         compiled from "C:\OpenServer\domains\cscart\design\backend\templates\addons\product_reviews\views\product_reviews\components\reviews\customer_icon.tpl" */ ?>
<?php /*%%SmartyHeaderCode:208923325161347cdda62ea1-27271749%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'c280c719a46e6584a23879f311d04d6d3f3b63a2' => 
    array (
      0 => 'C:\\OpenServer\\domains\\cscart\\design\\backend\\templates\\addons\\product_reviews\\views\\product_reviews\\components\\reviews\\customer_icon.tpl',
      1 => 1628148740,
      2 => 'tygh',
    ),
  ),
  'nocache_hash' => '208923325161347cdda62ea1-27271749',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'user_data' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.21',
  'unifunc' => 'content_61347cdda6d5d3_10661999',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_61347cdda6d5d3_10661999')) {function content_61347cdda6d5d3_10661999($_smarty_tpl) {?><?php if (!is_callable('smarty_modifier_enum')) include 'C:/OpenServer/domains/cscart/app/functions/smarty_plugins\\modifier.enum.php';
?><?php
\Tygh\Languages\Helper::preloadLangVars(array('product_reviews.verified_purchase','anonymous'));
?>


<?php if ($_smarty_tpl->tpl_vars['user_data']->value['is_buyer']||$_smarty_tpl->tpl_vars['user_data']->value['user_id']) {?>
    
    <?php if ($_smarty_tpl->tpl_vars['user_data']->value['is_buyer']===smarty_modifier_enum("YesNo::YES")) {?>
        <i class="icon-ok-sign muted" title="<?php echo $_smarty_tpl->__("product_reviews.verified_purchase");?>
"></i>
    <?php }?>

    <?php if ($_smarty_tpl->tpl_vars['user_data']->value['is_anon']) {?>
        <i class="icon-eye-close muted" title="<?php echo $_smarty_tpl->__("anonymous");?>
"></i>
    <?php }?>

<?php }?>
<?php }} ?>
