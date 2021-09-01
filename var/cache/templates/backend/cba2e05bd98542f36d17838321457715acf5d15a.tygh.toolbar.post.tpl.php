<?php /* Smarty version Smarty-3.1.21, created on 2021-09-01 21:53:46
         compiled from "C:\OpenServer\domains\cscart\design\backend\templates\addons\help_center\hooks\index\toolbar.post.tpl" */ ?>
<?php /*%%SmartyHeaderCode:2104811205612fcc3a150c00-12983093%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'cba2e05bd98542f36d17838321457715acf5d15a' => 
    array (
      0 => 'C:\\OpenServer\\domains\\cscart\\design\\backend\\templates\\addons\\help_center\\hooks\\index\\toolbar.post.tpl',
      1 => 1628148740,
      2 => 'tygh',
    ),
  ),
  'nocache_hash' => '2104811205612fcc3a150c00-12983093',
  'function' => 
  array (
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.21',
  'unifunc' => 'content_612fcc3a154db3_24422841',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_612fcc3a154db3_24422841')) {function content_612fcc3a154db3_24422841($_smarty_tpl) {?><?php if ((defined('ACCOUNT_TYPE') ? constant('ACCOUNT_TYPE') : null)==="admin") {?>
    <div class="help-center__toolbar help-center__toolbar--hidden">
        <a class="btn help-center__show-help-center" href="#">
            <i class="help-center__show-help-center--icon icon-question-sign"></i>
        </a>
    </div>
<?php }?>
<?php }} ?>
