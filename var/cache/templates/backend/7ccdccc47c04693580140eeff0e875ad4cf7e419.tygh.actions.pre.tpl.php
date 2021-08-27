<?php /* Smarty version Smarty-3.1.21, created on 2021-08-27 19:16:25
         compiled from "C:\OpenServer\domains\cscart\design\backend\templates\addons\product_reviews\hooks\index\actions.pre.tpl" */ ?>
<?php /*%%SmartyHeaderCode:61432185561290fd9cce275-14888126%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '7ccdccc47c04693580140eeff0e875ad4cf7e419' => 
    array (
      0 => 'C:\\OpenServer\\domains\\cscart\\design\\backend\\templates\\addons\\product_reviews\\hooks\\index\\actions.pre.tpl',
      1 => 1628148740,
      2 => 'tygh',
    ),
  ),
  'nocache_hash' => '61432185561290fd9cce275-14888126',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'runtime' => 0,
    'addons' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.21',
  'unifunc' => 'content_61290fd9cd7f12_10947375',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_61290fd9cd7f12_10947375')) {function content_61290fd9cd7f12_10947375($_smarty_tpl) {?><?php if (!is_callable('smarty_modifier_enum')) include 'C:/OpenServer/domains/cscart/app/functions/smarty_plugins\\modifier.enum.php';
?>


<?php if (fn_allowed_for("ULTIMATE")&&$_smarty_tpl->tpl_vars['runtime']->value['controller']==='reviews'&&($_smarty_tpl->tpl_vars['runtime']->value['mode']==='manage'&&$_smarty_tpl->tpl_vars['addons']->value['product_reviews']['split_reviews_by_storefronts']!==smarty_modifier_enum("YesNo::YES")||$_smarty_tpl->tpl_vars['runtime']->value['mode']==='update')) {?>
    <?php $_smarty_tpl->tpl_vars['select_storefront'] = new Smarty_variable(false, null, 1);
if ($_smarty_tpl->parent != null) $_smarty_tpl->parent->tpl_vars['select_storefront'] = clone $_smarty_tpl->tpl_vars['select_storefront'];?>
<?php }?>
<?php }} ?>
