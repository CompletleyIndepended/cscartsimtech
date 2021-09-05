<?php /* Smarty version Smarty-3.1.21, created on 2021-09-05 11:48:18
         compiled from "C:\OpenServer\domains\cscart\design\backend\templates\addons\product_variations\hooks\products\update_product_tax_ids.override.tpl" */ ?>
<?php /*%%SmartyHeaderCode:147481882613484521be373-11724299%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'fe75d3958095a67e2141c43e8d2dad51ef7acb8b' => 
    array (
      0 => 'C:\\OpenServer\\domains\\cscart\\design\\backend\\templates\\addons\\product_variations\\hooks\\products\\update_product_tax_ids.override.tpl',
      1 => 1628148740,
      2 => 'tygh',
    ),
  ),
  'nocache_hash' => '147481882613484521be373-11724299',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'product_type' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.21',
  'unifunc' => 'content_613484521eab19_24196241',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_613484521eab19_24196241')) {function content_613484521eab19_24196241($_smarty_tpl) {?><?php if (!$_smarty_tpl->tpl_vars['product_type']->value->isFieldAvailable("tax_ids")) {?>
    <!-- Overridden by the Product Variations add-on -->
<?php }?>
<?php }} ?>
