<?php /* Smarty version Smarty-3.1.21, created on 2021-09-05 11:48:28
         compiled from "C:\OpenServer\domains\cscart\design\backend\templates\addons\yml_export\hooks\product_options\edit_product_options.post.tpl" */ ?>
<?php /*%%SmartyHeaderCode:20001781336134845c4be8f8-36527880%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '9041db872424b9bf71bc379181c2138dac88f9bf' => 
    array (
      0 => 'C:\\OpenServer\\domains\\cscart\\design\\backend\\templates\\addons\\yml_export\\hooks\\product_options\\edit_product_options.post.tpl',
      1 => 1628148740,
      2 => 'tygh',
    ),
  ),
  'nocache_hash' => '20001781336134845c4be8f8-36527880',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'num' => 0,
    'vr' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.21',
  'unifunc' => 'content_6134845c4f0207_72575515',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_6134845c4f0207_72575515')) {function content_6134845c4f0207_72575515($_smarty_tpl) {?><?php
\Tygh\Languages\Helper::preloadLangVars(array('yml_export.yml2_option_variant'));
?>
<div class="control-group cm-non-cb">
    <label class="control-label"><?php echo $_smarty_tpl->__("yml_export.yml2_option_variant");?>
</label>
    <div class="controls">
        <input type="text" name="option_data[variants][<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['num']->value, ENT_QUOTES, 'UTF-8');?>
][yml2_variant]" value="<?php if (!empty($_smarty_tpl->tpl_vars['vr']->value['yml2_variant'])) {
echo htmlspecialchars($_smarty_tpl->tpl_vars['vr']->value['yml2_variant'], ENT_QUOTES, 'UTF-8');
}?>" class="input-medium" />
    </div>
</div>
<?php }} ?>
