<?php /* Smarty version Smarty-3.1.21, created on 2021-09-05 11:48:16
         compiled from "C:\OpenServer\domains\cscart\design\backend\templates\addons\product_variations\hooks\products\update_detailed_images.override.tpl" */ ?>
<?php /*%%SmartyHeaderCode:12366788476134845053c928-39844048%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '2b0b1d033d08eaab5580076060b3d58f012997d6' => 
    array (
      0 => 'C:\\OpenServer\\domains\\cscart\\design\\backend\\templates\\addons\\product_variations\\hooks\\products\\update_detailed_images.override.tpl',
      1 => 1628148740,
      2 => 'tygh',
    ),
  ),
  'nocache_hash' => '12366788476134845053c928-39844048',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'product_type' => 0,
    'product_data' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.21',
  'unifunc' => 'content_613484505758a3_40485709',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_613484505758a3_40485709')) {function content_613484505758a3_40485709($_smarty_tpl) {?><?php
\Tygh\Languages\Helper::preloadLangVars(array('images'));
?>
<?php if (!$_smarty_tpl->tpl_vars['product_type']->value->isFieldAvailable("detailed_image")) {?>
    <div class="control-group">
        <label class="control-label"><?php echo $_smarty_tpl->__("images");?>
:</label>
        <div class="controls">
            <?php echo $_smarty_tpl->getSubTemplate ("common/form_file_uploader.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array('existing_pairs'=>($_smarty_tpl->tpl_vars['product_data']->value['main_pair'] ? array($_smarty_tpl->tpl_vars['product_data']->value['main_pair']) : array())+(($tmp = @$_smarty_tpl->tpl_vars['product_data']->value['image_pairs'])===null||$tmp==='' ? array() : $tmp),'file_name'=>"file",'image_pair_types'=>array('N'=>'product_add_additional_image','M'=>'product_main_image','A'=>'product_additional_image'),'allow_update_files'=>false), 0);?>

        </div>
    </div>
<?php }?>
<?php }} ?>
