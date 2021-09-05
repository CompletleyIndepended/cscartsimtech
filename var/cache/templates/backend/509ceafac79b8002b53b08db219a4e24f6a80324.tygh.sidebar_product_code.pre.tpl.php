<?php /* Smarty version Smarty-3.1.21, created on 2021-09-05 11:17:49
         compiled from "C:\OpenServer\domains\cscart\design\backend\templates\addons\product_variations\hooks\common\sidebar_product_code.pre.tpl" */ ?>
<?php /*%%SmartyHeaderCode:24052482861347d2db27839-61653197%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '509ceafac79b8002b53b08db219a4e24f6a80324' => 
    array (
      0 => 'C:\\OpenServer\\domains\\cscart\\design\\backend\\templates\\addons\\product_variations\\hooks\\common\\sidebar_product_code.pre.tpl',
      1 => 1628148740,
      2 => 'tygh',
    ),
  ),
  'nocache_hash' => '24052482861347d2db27839-61653197',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'product_data' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.21',
  'unifunc' => 'content_61347d2db2c8e6_12405228',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_61347d2db2c8e6_12405228')) {function content_61347d2db2c8e6_12405228($_smarty_tpl) {?><?php if ($_smarty_tpl->tpl_vars['product_data']->value['variation_features']) {?>
    <?php echo $_smarty_tpl->getSubTemplate ("addons/product_variations/views/product_variations/components/variation_features.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array('variation_features'=>$_smarty_tpl->tpl_vars['product_data']->value['variation_features'],'features_split'=>true,'features_inline'=>true,'features_secondary'=>true), 0);?>

<?php }?>
<?php }} ?>
