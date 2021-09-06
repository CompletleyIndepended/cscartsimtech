<?php /* Smarty version Smarty-3.1.21, created on 2021-09-06 17:33:02
         compiled from "C:\OpenServer\domains\cscart\design\backend\templates\views\auth\recover_password.tpl" */ ?>
<?php /*%%SmartyHeaderCode:15956461886136269e0cbf68-60929940%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '6eca41bb8294cf1446c1640033b25ca7eeb10977' => 
    array (
      0 => 'C:\\OpenServer\\domains\\cscart\\design\\backend\\templates\\views\\auth\\recover_password.tpl',
      1 => 1628148740,
      2 => 'tygh',
    ),
  ),
  'nocache_hash' => '15956461886136269e0cbf68-60929940',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'action' => 0,
    'ekey' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.21',
  'unifunc' => 'content_6136269e46bb63_20439014',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_6136269e46bb63_20439014')) {function content_6136269e46bb63_20439014($_smarty_tpl) {?><?php
\Tygh\Languages\Helper::preloadLangVars(array('recover_password','text_recover_password_notice','email','reset_password','press_continue_to_recover_password','continue'));
?>
<div class="modal signin-modal">
    <form action="<?php echo htmlspecialchars(fn_url(''), ENT_QUOTES, 'UTF-8');?>
"
          method="post"
          name="recover_form"
          class=" cm-skip-check-items cm-check-changes"
    >
        <div class="modal-header">
            <h4><?php echo $_smarty_tpl->__("recover_password");?>
</h4>
        </div>
        <?php if ($_smarty_tpl->tpl_vars['action']->value=="request") {?>
            <div class="modal-body">
                <p><?php echo $_smarty_tpl->__("text_recover_password_notice");?>
</p>
                <label for="user_login"><?php echo $_smarty_tpl->__("email");?>
:</label>
                <input type="text"
                       name="user_email"
                       id="user_login"
                       size="20"
                       value=""
                />
            </div>
            <div class="modal-footer">
                <?php echo $_smarty_tpl->getSubTemplate ("buttons/button.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array('but_text'=>$_smarty_tpl->__("reset_password"),'but_name'=>"dispatch[auth.recover_password]",'but_role'=>"button_main"), 0);?>

            </div>
        <?php } elseif ($_smarty_tpl->tpl_vars['action']->value=="recover") {?>
            <input type="hidden"
                   name="ekey"
                   value="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['ekey']->value, ENT_QUOTES, 'UTF-8');?>
"
            />
            <div class="modal-body">
                <p><?php echo $_smarty_tpl->__("press_continue_to_recover_password");?>
</p>
            </div>
            <div class="modal-footer">
                <?php echo $_smarty_tpl->getSubTemplate ("buttons/button.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array('but_text'=>$_smarty_tpl->__("continue"),'but_name'=>"dispatch[auth.recover_password]",'but_role'=>"button_main"), 0);?>

            </div>
        <?php }?>
    </form>
</div><?php }} ?>
