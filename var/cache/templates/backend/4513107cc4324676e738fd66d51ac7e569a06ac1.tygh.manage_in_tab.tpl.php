<?php /* Smarty version Smarty-3.1.21, created on 2021-09-05 11:48:37
         compiled from "C:\OpenServer\domains\cscart\design\backend\templates\views\tabs\manage_in_tab.tpl" */ ?>
<?php /*%%SmartyHeaderCode:101408979461348465ecdfb9-78209919%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '4513107cc4324676e738fd66d51ac7e569a06ac1' => 
    array (
      0 => 'C:\\OpenServer\\domains\\cscart\\design\\backend\\templates\\views\\tabs\\manage_in_tab.tpl',
      1 => 1628148740,
      2 => 'tygh',
    ),
  ),
  'nocache_hash' => '101408979461348465ecdfb9-78209919',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'selected_section' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.21',
  'unifunc' => 'content_6134846606b5f1_76712583',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_6134846606b5f1_76712583')) {function content_6134846606b5f1_76712583($_smarty_tpl) {?><div class="<?php if ($_smarty_tpl->tpl_vars['selected_section']->value!=="product_tabs") {?>hidden<?php }?>" id="content_product_tabs">
    <?php echo $_smarty_tpl->getSubTemplate ("views/tabs/manage.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>

<!--content_product_tabs--></div>
<?php }} ?>
