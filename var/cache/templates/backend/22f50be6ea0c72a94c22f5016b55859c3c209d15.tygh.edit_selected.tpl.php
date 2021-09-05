<?php /* Smarty version Smarty-3.1.21, created on 2021-09-05 11:14:30
         compiled from "C:\OpenServer\domains\cscart\design\backend\templates\views\categories\components\context_menu\edit_selected.tpl" */ ?>
<?php /*%%SmartyHeaderCode:51956075161347c66bcaea5-00122171%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '22f50be6ea0c72a94c22f5016b55859c3c209d15' => 
    array (
      0 => 'C:\\OpenServer\\domains\\cscart\\design\\backend\\templates\\views\\categories\\components\\context_menu\\edit_selected.tpl',
      1 => 1628148740,
      2 => 'tygh',
    ),
  ),
  'nocache_hash' => '51956075161347c66bcaea5-00122171',
  'function' => 
  array (
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.21',
  'unifunc' => 'content_61347c66bd0390_33962808',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_61347c66bd0390_33962808')) {function content_61347c66bd0390_33962808($_smarty_tpl) {?><?php
\Tygh\Languages\Helper::preloadLangVars(array('edit_selected'));
?>


<li class="btn bulk-edit__btn bulk-edit__btn--edit-categories mobile-hide">
    <span class="bulk-edit__btn-content">
        <?php smarty_template_function_btn($_smarty_tpl,array('type'=>"dialog",'class'=>"cm-process-items",'text'=>$_smarty_tpl->__("edit_selected"),'target_id'=>"content_select_fields_to_edit",'form'=>"category_tree_form"));?>

    </span>
</li>
<?php }} ?>
