<?php /* Smarty version Smarty-3.1.21, created on 2021-09-05 11:48:24
         compiled from "C:\OpenServer\domains\cscart\design\backend\templates\addons\discussion\hooks\products\tabs_content.post.tpl" */ ?>
<?php /*%%SmartyHeaderCode:193330051613484580a1852-56086415%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'bf07e0d8a154aac66a936d226fbf3f5329a22b1b' => 
    array (
      0 => 'C:\\OpenServer\\domains\\cscart\\design\\backend\\templates\\addons\\discussion\\hooks\\products\\tabs_content.post.tpl',
      1 => 1628148740,
      2 => 'tygh',
    ),
  ),
  'nocache_hash' => '193330051613484580a1852-56086415',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'runtime' => 0,
    'product_data' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.21',
  'unifunc' => 'content_613484580d34c9_98104918',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_613484580d34c9_98104918')) {function content_613484580d34c9_98104918($_smarty_tpl) {?><?php if ($_smarty_tpl->tpl_vars['runtime']->value['company_id']&&fn_allowed_for("ULTIMATE")||fn_allowed_for("MULTIVENDOR")) {?>
    <?php echo $_smarty_tpl->getSubTemplate ("addons/discussion/views/discussion_manager/components/discussion.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array('object_company_id'=>$_smarty_tpl->tpl_vars['product_data']->value['company_id']), 0);?>

<?php }?>
<?php }} ?>
