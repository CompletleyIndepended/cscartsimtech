<?php /* Smarty version Smarty-3.1.21, created on 2021-09-05 11:48:24
         compiled from "C:\OpenServer\domains\cscart\design\backend\templates\addons\required_products\hooks\products\tabs_content.post.tpl" */ ?>
<?php /*%%SmartyHeaderCode:1688219616613484581efc23-28599450%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '63dd8c28687c2dff132e28ac2e00eeb75c3e8105' => 
    array (
      0 => 'C:\\OpenServer\\domains\\cscart\\design\\backend\\templates\\addons\\required_products\\hooks\\products\\tabs_content.post.tpl',
      1 => 1628148740,
      2 => 'tygh',
    ),
  ),
  'nocache_hash' => '1688219616613484581efc23-28599450',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'selected_section' => 0,
    'required_products' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.21',
  'unifunc' => 'content_6134845822b063_81353672',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_6134845822b063_81353672')) {function content_6134845822b063_81353672($_smarty_tpl) {?><div class="<?php if ($_smarty_tpl->tpl_vars['selected_section']->value!=="required_products") {?>hidden<?php }?>" id="content_required_products">
    <?php echo $_smarty_tpl->getSubTemplate ("views/products/components/picker/picker.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array('input_name'=>"required_product_ids[]",'item_ids'=>$_smarty_tpl->tpl_vars['required_products']->value,'multiple'=>true,'view_mode'=>"external",'select_group_class'=>"btn-toolbar"), 0);?>

</div><?php }} ?>
