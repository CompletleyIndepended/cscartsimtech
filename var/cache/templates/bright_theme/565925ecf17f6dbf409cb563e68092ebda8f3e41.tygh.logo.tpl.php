<?php /* Smarty version Smarty-3.1.21, created on 2021-09-03 18:30:04
         compiled from "C:\OpenServer\domains\cscart\design\themes\responsive\templates\blocks\static_templates\logo.tpl" */ ?>
<?php /*%%SmartyHeaderCode:189943967261323f7ce43353-60663485%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '565925ecf17f6dbf409cb563e68092ebda8f3e41' => 
    array (
      0 => 'C:\\OpenServer\\domains\\cscart\\design\\themes\\responsive\\templates\\blocks\\static_templates\\logo.tpl',
      1 => 1629025916,
      2 => 'tygh',
    ),
  ),
  'nocache_hash' => '189943967261323f7ce43353-60663485',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'runtime' => 0,
    'block' => 0,
    'logo_link' => 0,
    'logos' => 0,
    'auth' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.21',
  'unifunc' => 'content_61323f7ce707c5_81490256',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_61323f7ce707c5_81490256')) {function content_61323f7ce707c5_81490256($_smarty_tpl) {?><?php if (!is_callable('smarty_function_set_id')) include 'C:/OpenServer/domains/cscart/app/functions/smarty_plugins\\function.set_id.php';
?><?php if ($_smarty_tpl->tpl_vars['runtime']->value['customization_mode']['design']=="Y"&&(defined('AREA') ? constant('AREA') : null)=="C") {
$_smarty_tpl->_capture_stack[0][] = array("template_content", null, null); ob_start(); ?>
<div class="ty-logo-container">
    <?php $_smarty_tpl->tpl_vars['logo_link'] = new Smarty_variable((($tmp = @$_smarty_tpl->tpl_vars['block']->value['properties']['enable_link'])===null||$tmp==='' ? "Y" : $tmp)=="Y", null, 0);?>

    <?php if ($_smarty_tpl->tpl_vars['logo_link']->value) {?>
        <a href="<?php echo htmlspecialchars(fn_url(''), ENT_QUOTES, 'UTF-8');?>
" title="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['logos']->value['theme']['image']['alt'], ENT_QUOTES, 'UTF-8');?>
">
    <?php }?>
    <?php echo $_smarty_tpl->getSubTemplate ("common/image.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array('images'=>$_smarty_tpl->tpl_vars['logos']->value['theme']['image'],'class'=>"ty-logo-container__image",'image_additional_attrs'=>array("width"=>$_smarty_tpl->tpl_vars['logos']->value['theme']['image']['image_x'],"height"=>$_smarty_tpl->tpl_vars['logos']->value['theme']['image']['image_y']),'obj_id'=>false,'show_no_image'=>false,'show_detailed_link'=>false,'capture_image'=>false), 0);?>

    
    <?php if ($_smarty_tpl->tpl_vars['logo_link']->value) {?>
        </a>
    <?php }?>
</div>
<?php list($_capture_buffer, $_capture_assign, $_capture_append) = array_pop($_smarty_tpl->_capture_stack[0]);
if (!empty($_capture_buffer)) {
 if (isset($_capture_assign)) $_smarty_tpl->assign($_capture_assign, ob_get_contents());
 if (isset( $_capture_append)) $_smarty_tpl->append( $_capture_append, ob_get_contents());
 Smarty::$_smarty_vars['capture'][$_capture_buffer]=ob_get_clean();
} else $_smarty_tpl->capture_error();
if (trim(Smarty::$_smarty_vars['capture']['template_content'])) {
if ($_smarty_tpl->tpl_vars['auth']->value['area']=="A") {?><span class="cm-template-box template-box" data-ca-te-template="blocks/static_templates/logo.tpl" id="<?php echo smarty_function_set_id(array('name'=>"blocks/static_templates/logo.tpl"),$_smarty_tpl);?>
"><div class="cm-template-icon icon-edit ty-icon-edit hidden"></div><?php echo Smarty::$_smarty_vars['capture']['template_content'];?>
<!--[/tpl_id]--></span><?php } else {
echo Smarty::$_smarty_vars['capture']['template_content'];
}
}
} else { ?>
<div class="ty-logo-container">
    <?php $_smarty_tpl->tpl_vars['logo_link'] = new Smarty_variable((($tmp = @$_smarty_tpl->tpl_vars['block']->value['properties']['enable_link'])===null||$tmp==='' ? "Y" : $tmp)=="Y", null, 0);?>

    <?php if ($_smarty_tpl->tpl_vars['logo_link']->value) {?>
        <a href="<?php echo htmlspecialchars(fn_url(''), ENT_QUOTES, 'UTF-8');?>
" title="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['logos']->value['theme']['image']['alt'], ENT_QUOTES, 'UTF-8');?>
">
    <?php }?>
    <?php echo $_smarty_tpl->getSubTemplate ("common/image.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array('images'=>$_smarty_tpl->tpl_vars['logos']->value['theme']['image'],'class'=>"ty-logo-container__image",'image_additional_attrs'=>array("width"=>$_smarty_tpl->tpl_vars['logos']->value['theme']['image']['image_x'],"height"=>$_smarty_tpl->tpl_vars['logos']->value['theme']['image']['image_y']),'obj_id'=>false,'show_no_image'=>false,'show_detailed_link'=>false,'capture_image'=>false), 0);?>

    
    <?php if ($_smarty_tpl->tpl_vars['logo_link']->value) {?>
        </a>
    <?php }?>
</div>
<?php }?><?php }} ?>
