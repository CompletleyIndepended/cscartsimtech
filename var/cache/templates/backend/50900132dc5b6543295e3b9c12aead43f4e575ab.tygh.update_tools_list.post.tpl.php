<?php /* Smarty version Smarty-3.1.21, created on 2021-09-05 11:48:24
         compiled from "C:\OpenServer\domains\cscart\design\backend\templates\addons\vendor_communication\hooks\products\update_tools_list.post.tpl" */ ?>
<?php /*%%SmartyHeaderCode:261441586613484585151b3-96986076%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '50900132dc5b6543295e3b9c12aead43f4e575ab' => 
    array (
      0 => 'C:\\OpenServer\\domains\\cscart\\design\\backend\\templates\\addons\\vendor_communication\\hooks\\products\\update_tools_list.post.tpl',
      1 => 1628148740,
      2 => 'tygh',
    ),
  ),
  'nocache_hash' => '261441586613484585151b3-96986076',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'product_data' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.21',
  'unifunc' => 'content_613484585411a5_45170198',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_613484585411a5_45170198')) {function content_613484585411a5_45170198($_smarty_tpl) {?><?php echo $_smarty_tpl->getSubTemplate ("addons/vendor_communication/views/vendor_communication/components/new_thread_button.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array('object_type'=>(defined('VC_OBJECT_TYPE_PRODUCT') ? constant('VC_OBJECT_TYPE_PRODUCT') : null),'object_id'=>$_smarty_tpl->tpl_vars['product_data']->value['product_id'],'menu_button'=>true,'divider'=>true), 0);?>
<?php }} ?>
