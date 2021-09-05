<?php /* Smarty version Smarty-3.1.21, created on 2021-09-05 11:48:24
         compiled from "C:\OpenServer\domains\cscart\design\backend\templates\addons\attachments\hooks\products\tabs_extra.post.tpl" */ ?>
<?php /*%%SmartyHeaderCode:204156494561348458c73243-06202621%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '768abbedfb6bfc3f9e20fea50a88ba1ca8f287a1' => 
    array (
      0 => 'C:\\OpenServer\\domains\\cscart\\design\\backend\\templates\\addons\\attachments\\hooks\\products\\tabs_extra.post.tpl',
      1 => 1628148740,
      2 => 'tygh',
    ),
  ),
  'nocache_hash' => '204156494561348458c73243-06202621',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'selected_section' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.21',
  'unifunc' => 'content_61348458ca5aa4_91100939',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_61348458ca5aa4_91100939')) {function content_61348458ca5aa4_91100939($_smarty_tpl) {?><div id="content_attachments" class="cm-hide-save-button <?php if ($_smarty_tpl->tpl_vars['selected_section']->value!=="attachments") {?>hidden<?php }?>">

<?php echo $_smarty_tpl->getSubTemplate ("addons/attachments/views/attachments/manage.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array('object_id'=>$_REQUEST['product_id'],'object_type'=>"product"), 0);?>


<!--content_attachments--></div><?php }} ?>
