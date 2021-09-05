<?php /* Smarty version Smarty-3.1.21, created on 2021-09-05 11:15:02
         compiled from "C:\OpenServer\domains\cscart\design\backend\templates\addons\yml_export\hooks\product_features\variants_list_clone.post.tpl" */ ?>
<?php /*%%SmartyHeaderCode:17047746761347c86b76448-62347211%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'a060d1d7d3d4488d3081c1170e5c18f262bd11b4' => 
    array (
      0 => 'C:\\OpenServer\\domains\\cscart\\design\\backend\\templates\\addons\\yml_export\\hooks\\product_features\\variants_list_clone.post.tpl',
      1 => 1628148740,
      2 => 'tygh',
    ),
  ),
  'nocache_hash' => '17047746761347c86b76448-62347211',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'num' => 0,
    'var' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.21',
  'unifunc' => 'content_61347c86b7af86_47973916',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_61347c86b7af86_47973916')) {function content_61347c86b7af86_47973916($_smarty_tpl) {?><td>
    <input type="text" name="feature_data[variants][<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['num']->value, ENT_QUOTES, 'UTF-8');?>
][yml2_unit]" value="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['var']->value['yml2_unit'], ENT_QUOTES, 'UTF-8');?>
" class="span2">
</td>
<?php }} ?>
