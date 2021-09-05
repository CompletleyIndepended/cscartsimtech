<?php /* Smarty version Smarty-3.1.21, created on 2021-09-05 11:28:03
         compiled from "C:\OpenServer\domains\cscart\design\backend\templates\views\profiles\components\context_menu\notify_checkboxes.tpl" */ ?>
<?php /*%%SmartyHeaderCode:187650091861347f93f03775-51986299%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '7004654452b4e5d550b65101950e79befc7a528a' => 
    array (
      0 => 'C:\\OpenServer\\domains\\cscart\\design\\backend\\templates\\views\\profiles\\components\\context_menu\\notify_checkboxes.tpl',
      1 => 1628148740,
      2 => 'tygh',
    ),
  ),
  'nocache_hash' => '187650091861347f93f03775-51986299',
  'function' => 
  array (
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.21',
  'unifunc' => 'content_61347f93f30b53_28027121',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_61347f93f30b53_28027121')) {function content_61347f93f30b53_28027121($_smarty_tpl) {?><?php
\Tygh\Languages\Helper::preloadLangVars(array('notify_user'));
?>


<?php echo $_smarty_tpl->getSubTemplate ("common/notify_checkboxes.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array('prefix'=>"multiple",'id'=>"select",'notify'=>true,'notify_customer_status'=>true,'notify_text'=>$_smarty_tpl->__("notify_user"),'name_prefix'=>"notify"), 0);?>
<?php }} ?>
