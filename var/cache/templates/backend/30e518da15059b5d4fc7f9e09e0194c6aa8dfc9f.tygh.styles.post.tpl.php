<?php /* Smarty version Smarty-3.1.21, created on 2021-08-27 12:35:04
         compiled from "C:\OpenServer\domains\cscart\design\backend\templates\addons\help_center\hooks\index\styles.post.tpl" */ ?>
<?php /*%%SmartyHeaderCode:8698777786128b1c8686724-10020359%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '30e518da15059b5d4fc7f9e09e0194c6aa8dfc9f' => 
    array (
      0 => 'C:\\OpenServer\\domains\\cscart\\design\\backend\\templates\\addons\\help_center\\hooks\\index\\styles.post.tpl',
      1 => 1628148740,
      2 => 'tygh',
    ),
  ),
  'nocache_hash' => '8698777786128b1c8686724-10020359',
  'function' => 
  array (
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.21',
  'unifunc' => 'content_6128b1c8692d28_55995697',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_6128b1c8692d28_55995697')) {function content_6128b1c8692d28_55995697($_smarty_tpl) {?><?php if (!is_callable('smarty_function_style')) include 'C:/OpenServer/domains/cscart/app/functions/smarty_plugins\\function.style.php';
?><?php if ((defined('ACCOUNT_TYPE') ? constant('ACCOUNT_TYPE') : null)==="admin") {?>
    <?php echo smarty_function_style(array('src'=>"addons/help_center/styles.less"),$_smarty_tpl);?>

<?php }?>
<?php }} ?>
