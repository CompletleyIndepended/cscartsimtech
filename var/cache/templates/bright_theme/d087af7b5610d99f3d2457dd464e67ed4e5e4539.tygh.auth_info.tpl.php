<?php /* Smarty version Smarty-3.1.21, created on 2021-09-06 17:41:17
         compiled from "C:\OpenServer\domains\cscart\design\themes\responsive\templates\blocks\static_templates\auth_info.tpl" */ ?>
<?php /*%%SmartyHeaderCode:4205212246136288d8e8430-14626563%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'd087af7b5610d99f3d2457dd464e67ed4e5e4539' => 
    array (
      0 => 'C:\\OpenServer\\domains\\cscart\\design\\themes\\responsive\\templates\\blocks\\static_templates\\auth_info.tpl',
      1 => 1629025916,
      2 => 'tygh',
    ),
  ),
  'nocache_hash' => '4205212246136288d8e8430-14626563',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'runtime' => 0,
    'auth' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.21',
  'unifunc' => 'content_6136288d9860b8_53040538',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_6136288d9860b8_53040538')) {function content_6136288d9860b8_53040538($_smarty_tpl) {?><?php if (!is_callable('smarty_block_hook')) include 'C:/OpenServer/domains/cscart/app/functions/smarty_plugins\\block.hook.php';
if (!is_callable('smarty_function_set_id')) include 'C:/OpenServer/domains/cscart/app/functions/smarty_plugins\\function.set_id.php';
?><?php
\Tygh\Languages\Helper::preloadLangVars(array('text_login_form','register_new_account','text_recover_password_title','text_recover_password','text_login_form','register_new_account','text_recover_password_title','text_recover_password'));
?>
<?php if ($_smarty_tpl->tpl_vars['runtime']->value['customization_mode']['design']=="Y"&&(defined('AREA') ? constant('AREA') : null)=="C") {
$_smarty_tpl->_capture_stack[0][] = array("template_content", null, null); ob_start(); ?><div class="ty-login-info">
	<?php if ($_smarty_tpl->tpl_vars['runtime']->value['controller']=="auth"&&$_smarty_tpl->tpl_vars['runtime']->value['mode']=="login_form") {?>
        <?php $_smarty_tpl->smarty->_tag_stack[] = array('hook', array('name'=>"auth_info:login_form")); $_block_repeat=true; echo smarty_block_hook(array('name'=>"auth_info:login_form"), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>

	    <div class="ty-login-info__txt">
		    <?php echo $_smarty_tpl->__("text_login_form");?>

		    <a href="<?php echo htmlspecialchars(fn_url("profiles.add"), ENT_QUOTES, 'UTF-8');?>
"><?php echo $_smarty_tpl->__("register_new_account");?>
</a>
		</div>
        <?php $_block_content = ob_get_clean(); $_block_repeat=false; echo smarty_block_hook(array('name'=>"auth_info:login_form"), $_block_content, $_smarty_tpl, $_block_repeat);  } array_pop($_smarty_tpl->smarty->_tag_stack);?>

	<?php } elseif ($_smarty_tpl->tpl_vars['runtime']->value['controller']=="auth"&&$_smarty_tpl->tpl_vars['runtime']->value['mode']=="recover_password"&&$_smarty_tpl->tpl_vars['runtime']->value['action']!="recover") {?>
        <?php $_smarty_tpl->smarty->_tag_stack[] = array('hook', array('name'=>"auth_info:recover_password")); $_block_repeat=true; echo smarty_block_hook(array('name'=>"auth_info:recover_password"), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>

	    <h4 class="ty-login-info__title"><?php echo $_smarty_tpl->__("text_recover_password_title");?>
</h4>
	    <div class="ty-login-info__txt"><?php echo $_smarty_tpl->__("text_recover_password");?>
</div>
        <?php $_block_content = ob_get_clean(); $_block_repeat=false; echo smarty_block_hook(array('name'=>"auth_info:recover_password"), $_block_content, $_smarty_tpl, $_block_repeat);  } array_pop($_smarty_tpl->smarty->_tag_stack);?>

	<?php }?>
    <?php $_smarty_tpl->smarty->_tag_stack[] = array('hook', array('name'=>"auth_info:extra")); $_block_repeat=true; echo smarty_block_hook(array('name'=>"auth_info:extra"), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>

    <?php $_block_content = ob_get_clean(); $_block_repeat=false; echo smarty_block_hook(array('name'=>"auth_info:extra"), $_block_content, $_smarty_tpl, $_block_repeat);  } array_pop($_smarty_tpl->smarty->_tag_stack);?>

</div><?php list($_capture_buffer, $_capture_assign, $_capture_append) = array_pop($_smarty_tpl->_capture_stack[0]);
if (!empty($_capture_buffer)) {
 if (isset($_capture_assign)) $_smarty_tpl->assign($_capture_assign, ob_get_contents());
 if (isset( $_capture_append)) $_smarty_tpl->append( $_capture_append, ob_get_contents());
 Smarty::$_smarty_vars['capture'][$_capture_buffer]=ob_get_clean();
} else $_smarty_tpl->capture_error();
if (trim(Smarty::$_smarty_vars['capture']['template_content'])) {
if ($_smarty_tpl->tpl_vars['auth']->value['area']=="A") {?><span class="cm-template-box template-box" data-ca-te-template="blocks/static_templates/auth_info.tpl" id="<?php echo smarty_function_set_id(array('name'=>"blocks/static_templates/auth_info.tpl"),$_smarty_tpl);?>
"><div class="cm-template-icon icon-edit ty-icon-edit hidden"></div><?php echo Smarty::$_smarty_vars['capture']['template_content'];?>
<!--[/tpl_id]--></span><?php } else {
echo Smarty::$_smarty_vars['capture']['template_content'];
}
}
} else { ?><div class="ty-login-info">
	<?php if ($_smarty_tpl->tpl_vars['runtime']->value['controller']=="auth"&&$_smarty_tpl->tpl_vars['runtime']->value['mode']=="login_form") {?>
        <?php $_smarty_tpl->smarty->_tag_stack[] = array('hook', array('name'=>"auth_info:login_form")); $_block_repeat=true; echo smarty_block_hook(array('name'=>"auth_info:login_form"), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>

	    <div class="ty-login-info__txt">
		    <?php echo $_smarty_tpl->__("text_login_form");?>

		    <a href="<?php echo htmlspecialchars(fn_url("profiles.add"), ENT_QUOTES, 'UTF-8');?>
"><?php echo $_smarty_tpl->__("register_new_account");?>
</a>
		</div>
        <?php $_block_content = ob_get_clean(); $_block_repeat=false; echo smarty_block_hook(array('name'=>"auth_info:login_form"), $_block_content, $_smarty_tpl, $_block_repeat);  } array_pop($_smarty_tpl->smarty->_tag_stack);?>

	<?php } elseif ($_smarty_tpl->tpl_vars['runtime']->value['controller']=="auth"&&$_smarty_tpl->tpl_vars['runtime']->value['mode']=="recover_password"&&$_smarty_tpl->tpl_vars['runtime']->value['action']!="recover") {?>
        <?php $_smarty_tpl->smarty->_tag_stack[] = array('hook', array('name'=>"auth_info:recover_password")); $_block_repeat=true; echo smarty_block_hook(array('name'=>"auth_info:recover_password"), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>

	    <h4 class="ty-login-info__title"><?php echo $_smarty_tpl->__("text_recover_password_title");?>
</h4>
	    <div class="ty-login-info__txt"><?php echo $_smarty_tpl->__("text_recover_password");?>
</div>
        <?php $_block_content = ob_get_clean(); $_block_repeat=false; echo smarty_block_hook(array('name'=>"auth_info:recover_password"), $_block_content, $_smarty_tpl, $_block_repeat);  } array_pop($_smarty_tpl->smarty->_tag_stack);?>

	<?php }?>
    <?php $_smarty_tpl->smarty->_tag_stack[] = array('hook', array('name'=>"auth_info:extra")); $_block_repeat=true; echo smarty_block_hook(array('name'=>"auth_info:extra"), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>

    <?php $_block_content = ob_get_clean(); $_block_repeat=false; echo smarty_block_hook(array('name'=>"auth_info:extra"), $_block_content, $_smarty_tpl, $_block_repeat);  } array_pop($_smarty_tpl->smarty->_tag_stack);?>

</div><?php }?><?php }} ?>
