<?php /* Smarty version Smarty-3.1.21, created on 2021-09-06 11:00:07
         compiled from "C:\OpenServer\domains\cscart\design\backend\templates\components\context_menu\status_selector.tpl" */ ?>
<?php /*%%SmartyHeaderCode:19899028886135ca87848bc3-73242981%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'b1176948cc047bced49797d4c17e89db54d45314' => 
    array (
      0 => 'C:\\OpenServer\\domains\\cscart\\design\\backend\\templates\\components\\context_menu\\status_selector.tpl',
      1 => 1628148740,
      2 => 'tygh',
    ),
  ),
  'nocache_hash' => '19899028886135ca87848bc3-73242981',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'statuses' => 0,
    'params' => 0,
    'elms_container' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.21',
  'unifunc' => 'content_6135ca87864fd3_13518937',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_6135ca87864fd3_13518937')) {function content_6135ca87864fd3_13518937($_smarty_tpl) {?><?php
\Tygh\Languages\Helper::preloadLangVars(array('selected'));
?>


<li class="btn bulk-edit__btn bulk-edit__btn--check-items">
    <input class="bulk-edit__btn-content--checkbox hidden bulkedit-disabler"
           type="checkbox"
           checked
           data-ca-bulkedit-enable="[data-ca-bulkedit-default-object=true]"
           data-ca-bulkedit-disable="[data-ca-bulkedit-expanded-object=true]"
    />
    <span class="bulk-edit__btn-content dropdown-toggle" data-toggle="dropdown">
        <span data-ca-longtap-selected-counter="true">0</span> <span class="mobile-hide"><?php echo $_smarty_tpl->__("selected");?>
</span> <span class="caret mobile-hide"></span>
    </span>

    <?php echo $_smarty_tpl->getSubTemplate ("common/check_items.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array('dropdown_menu_class'=>"cm-check-items",'wrap_select_actions_into_dropdown'=>true,'check_statuses'=>$_smarty_tpl->tpl_vars['statuses']->value,'is_check_all_shown'=>(($tmp = @$_smarty_tpl->tpl_vars['params']->value['is_check_all_shown'])===null||$tmp==='' ? false : $tmp),'elms_container'=>$_smarty_tpl->tpl_vars['elms_container']->value), 0);?>

</li><?php }} ?>
