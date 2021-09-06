<?php /* Smarty version Smarty-3.1.21, created on 2021-09-06 10:38:25
         compiled from "C:\OpenServer\domains\cscart\design\backend\templates\views\products\update_department.tpl" */ ?>
<?php /*%%SmartyHeaderCode:13637010406135320dbbd4d4-09293517%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'aea74ebe2f249c917cce552b78d42ecf817592d0' => 
    array (
      0 => 'C:\\OpenServer\\domains\\cscart\\design\\backend\\templates\\views\\products\\update_department.tpl',
      1 => 1630913900,
      2 => 'tygh',
    ),
  ),
  'nocache_hash' => '13637010406135320dbbd4d4-09293517',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.21',
  'unifunc' => 'content_6135320dbf09f7_69037034',
  'variables' => 
  array (
    'department_data' => 0,
    'id' => 0,
    'settings' => 0,
    'u_info' => 0,
    'hide_first_button' => 0,
    'hide_second_button' => 0,
    'title_start' => 0,
    'title_end' => 0,
    'title' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_6135320dbf09f7_69037034')) {function content_6135320dbf09f7_69037034($_smarty_tpl) {?><?php
\Tygh\Languages\Helper::preloadLangVars(array('name','image','creation_date','manager','add_recipients_from_users','staffers','add_staffs','delete'));
?>
<?php if ($_smarty_tpl->tpl_vars['department_data']->value) {?>
    <?php $_smarty_tpl->tpl_vars["id"] = new Smarty_variable($_smarty_tpl->tpl_vars['department_data']->value['department_id'], null, 0);?>
<?php } else { ?>
    <?php $_smarty_tpl->tpl_vars["id"] = new Smarty_variable(0, null, 0);?>
<?php }?>

<?php $_smarty_tpl->_capture_stack[0][] = array("mainbox", null, null); ob_start(); ?>

<form action="<?php echo htmlspecialchars(fn_url(''), ENT_QUOTES, 'UTF-8');?>
" method="post" class="form-horizontal form-edit" name="department_form1" enctype="multipart/form-data">
    <input type="hidden" class="cm-no-hide-input" name="fake" value="1" />
    <input type="hidden" class="cm-no-hide-input" name="department_id" value="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['id']->value, ENT_QUOTES, 'UTF-8');?>
" />

    <div id="content_general">
        <div class="control-group">
            <label for="elm_department_name" class="control-label cm-required"><?php echo $_smarty_tpl->__("name");?>
</label>
            <div class="controls">
                <input type="text" name="department_data[department]" id="elm_department_name" value="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['department_data']->value['department'], ENT_QUOTES, 'UTF-8');?>
" size="25" class="input-large" />
            </div>
        </div>

        <div class="control-group" id="banner_graphic">
            <label class="control-label"><?php echo $_smarty_tpl->__("image");?>
</label>
            <div class="controls">
                <?php echo $_smarty_tpl->getSubTemplate ("common/attach_images.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array('image_name'=>"department",'image_object_type'=>"department",'image_pair'=>$_smarty_tpl->tpl_vars['department_data']->value['main_pair'],'image_object_id'=>$_smarty_tpl->tpl_vars['id']->value,'no_detailed'=>true,'hide_titles'=>false), 0);?>

            </div>
        </div>
        
        <div class="control-group">
            <label class="control-label" for="elm_department_timestamp_<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['id']->value, ENT_QUOTES, 'UTF-8');?>
"><?php echo $_smarty_tpl->__("creation_date");?>
</label>
            <div class="controls">
                <?php echo $_smarty_tpl->getSubTemplate ("common/calendar.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array('date_id'=>"elm_department_timestamp_".((string)$_smarty_tpl->tpl_vars['id']->value),'date_name'=>"department_data[timestamp]",'date_val'=>(($tmp = @$_smarty_tpl->tpl_vars['department_data']->value['timestamp'])===null||$tmp==='' ? (defined('TIME') ? constant('TIME') : null) : $tmp),'start_year'=>$_smarty_tpl->tpl_vars['settings']->value['Company']['company_start_year']), 0);?>

            </div>
        </div>

        <?php echo $_smarty_tpl->getSubTemplate ("common/select_status.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array('input_name'=>"department_data[status]",'id'=>"elm_department_status",'obj_id'=>$_smarty_tpl->tpl_vars['id']->value,'obj'=>$_smarty_tpl->tpl_vars['department_data']->value,'hidden'=>false), 0);?>


        

<div class="control-group">
            <label class="control-label"><?php echo $_smarty_tpl->__("manager");?>
</label>
            <div class="controls">
                <?php echo $_smarty_tpl->getSubTemplate ("pickers/users/picker.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array('view_mode'=>"single_button",'but_text'=>$_smarty_tpl->__("add_recipients_from_users"),'data_id'=>"department_users",'but_meta'=>"btn",'input_name'=>"department_data[user_id]",'item_ids'=>$_smarty_tpl->tpl_vars['department_data']->value['user_id'],'display'=>"radio",'user_info'=>$_smarty_tpl->tpl_vars['u_info']->value), 0);?>

            </div>
        </div>

        <div class="control-group">
            <label class="control-label"><?php echo $_smarty_tpl->__("staffers");?>
</label>
            <div class="controls">
                <?php echo $_smarty_tpl->getSubTemplate ("pickers/users/picker.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array('but_text'=>$_smarty_tpl->__("add_staffs"),'data_id'=>"department_users",'but_meta'=>"btn",'input_name'=>"department_data[users_ids][]",'item_ids'=>$_smarty_tpl->tpl_vars['department_data']->value['users_ids']), 0);?>

            </div>
        </div>
    

    <?php $_smarty_tpl->_capture_stack[0][] = array("buttons", null, null); ob_start(); ?>
        <?php if (!$_smarty_tpl->tpl_vars['id']->value) {?>
            <?php echo $_smarty_tpl->getSubTemplate ("buttons/save_cancel.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array('but_role'=>"submit-link",'but_target_form'=>"department_form1",'but_name'=>"dispatch[products.update_department]"), 0);?>

        <?php } else { ?>
            <?php echo $_smarty_tpl->getSubTemplate ("buttons/save_cancel.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array('but_name'=>"dispatch[products.update_department]",'but_role'=>"department-link",'but_target_form'=>"department_form1",'hide_first_button'=>$_smarty_tpl->tpl_vars['hide_first_button']->value,'hide_second_button'=>$_smarty_tpl->tpl_vars['hide_second_button']->value,'save'=>$_smarty_tpl->tpl_vars['id']->value), 0);?>


            

            <?php $_smarty_tpl->_capture_stack[0][] = array("tools_list", null, null); ob_start(); ?>
                <li><?php smarty_template_function_btn($_smarty_tpl,array('type'=>"list",'text'=>$_smarty_tpl->__("delete"),'class'=>"cm-confirm",'href'=>"products.delete_department?department_id=".((string)$_smarty_tpl->tpl_vars['id']->value),'method'=>"POST"));?>
</li>
            <?php list($_capture_buffer, $_capture_assign, $_capture_append) = array_pop($_smarty_tpl->_capture_stack[0]);
if (!empty($_capture_buffer)) {
 if (isset($_capture_assign)) $_smarty_tpl->assign($_capture_assign, ob_get_contents());
 if (isset( $_capture_append)) $_smarty_tpl->append( $_capture_append, ob_get_contents());
 Smarty::$_smarty_vars['capture'][$_capture_buffer]=ob_get_clean();
} else $_smarty_tpl->capture_error();?>
            <?php smarty_template_function_dropdown($_smarty_tpl,array('content'=>Smarty::$_smarty_vars['capture']['tools_list']));?>

        <?php }?>
    <?php list($_capture_buffer, $_capture_assign, $_capture_append) = array_pop($_smarty_tpl->_capture_stack[0]);
if (!empty($_capture_buffer)) {
 if (isset($_capture_assign)) $_smarty_tpl->assign($_capture_assign, ob_get_contents());
 if (isset( $_capture_append)) $_smarty_tpl->append( $_capture_append, ob_get_contents());
 Smarty::$_smarty_vars['capture'][$_capture_buffer]=ob_get_clean();
} else $_smarty_tpl->capture_error();?>

</form>

<?php list($_capture_buffer, $_capture_assign, $_capture_append) = array_pop($_smarty_tpl->_capture_stack[0]);
if (!empty($_capture_buffer)) {
 if (isset($_capture_assign)) $_smarty_tpl->assign($_capture_assign, ob_get_contents());
 if (isset( $_capture_append)) $_smarty_tpl->append( $_capture_append, ob_get_contents());
 Smarty::$_smarty_vars['capture'][$_capture_buffer]=ob_get_clean();
} else $_smarty_tpl->capture_error();?>

<?php if (!$_smarty_tpl->tpl_vars['id']->value) {?>
    <?php $_smarty_tpl->tpl_vars['title'] = new Smarty_variable("Добавить новую коллекцию", null, 0);?>
<?php } else { ?>
    <?php $_smarty_tpl->tpl_vars['title_start'] = new Smarty_variable("Изменить", null, 0);?>
    <?php $_smarty_tpl->tpl_vars['title_end'] = new Smarty_variable($_smarty_tpl->tpl_vars['department_data']->value['department'], null, 0);?>
<?php }?>

<?php echo $_smarty_tpl->getSubTemplate ("common/mainbox.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array('title_start'=>$_smarty_tpl->tpl_vars['title_start']->value,'title_end'=>$_smarty_tpl->tpl_vars['title_end']->value,'title'=>$_smarty_tpl->tpl_vars['title']->value,'content'=>Smarty::$_smarty_vars['capture']['mainbox'],'buttons'=>Smarty::$_smarty_vars['capture']['buttons'],'select_languages'=>true), 0);?>



<?php }} ?>
