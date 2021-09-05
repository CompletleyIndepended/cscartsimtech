<?php /* Smarty version Smarty-3.1.21, created on 2021-09-05 11:48:17
         compiled from "C:\OpenServer\domains\cscart\design\backend\templates\addons\product_variations\hooks\products\update_product_min_qty.override.tpl" */ ?>
<?php /*%%SmartyHeaderCode:134926516361348451b79356-28010593%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '668e6f8c61e2b55b9504df064d5ce1400c5118d5' => 
    array (
      0 => 'C:\\OpenServer\\domains\\cscart\\design\\backend\\templates\\addons\\product_variations\\hooks\\products\\update_product_min_qty.override.tpl',
      1 => 1628148740,
      2 => 'tygh',
    ),
  ),
  'nocache_hash' => '134926516361348451b79356-28010593',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'product_type' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.21',
  'unifunc' => 'content_61348451ba3ec5_25599960',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_61348451ba3ec5_25599960')) {function content_61348451ba3ec5_25599960($_smarty_tpl) {?><?php if (!$_smarty_tpl->tpl_vars['product_type']->value->isFieldAvailable("min_qty")) {?>
    <!-- Overridden by the Product Variations add-on -->
<?php }?>
<?php }} ?>
