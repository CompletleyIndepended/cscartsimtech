<?php /* Smarty version Smarty-3.1.21, created on 2021-09-05 11:48:23
         compiled from "C:\OpenServer\domains\cscart\design\backend\templates\addons\yml_export\common\yml_delivery_options.tpl" */ ?>
<?php /*%%SmartyHeaderCode:21629453861348457c83443-64697049%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '8207d1ba44d95dbe7a19cb81c4ecf74a2b410629' => 
    array (
      0 => 'C:\\OpenServer\\domains\\cscart\\design\\backend\\templates\\addons\\yml_export\\common\\yml_delivery_options.tpl',
      1 => 1628148740,
      2 => 'tygh',
    ),
  ),
  'nocache_hash' => '21629453861348457c83443-64697049',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'data' => 0,
    'id' => 0,
    'num' => 0,
    'name_data' => 0,
    'option' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.21',
  'unifunc' => 'content_61348457cdf002_88695067',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_61348457cdf002_88695067')) {function content_61348457cdf002_88695067($_smarty_tpl) {?><?php if (!is_callable('smarty_function_math')) include 'C:\\OpenServer\\domains\\cscart\\app\\lib\\vendor\\smarty\\smarty\\libs\\plugins\\function.math.php';
?><?php
\Tygh\Languages\Helper::preloadLangVars(array('yml_export.delivery_options','yml_export.delivery_cost','yml_export.delivery_days','yml_export.order_before','yml_export.delivery_cost','yml_export.delivery_days','yml_export.order_before','yml_export.delivery_cost','yml_export.delivery_days','yml_export.order_before'));
?>
<div class="control-group">
    <label for="yml2_pickup" class="control-label"><?php echo $_smarty_tpl->__("yml_export.delivery_options");?>
:</label>
    <div class="controls">
        <div class="table-responsive-wrapper">
            <table width="100%" class="table table-middle table--relative table-responsive">
                <thead>
                <tr>
                    <th width="15%"><?php echo $_smarty_tpl->__("yml_export.delivery_cost");?>
</th>
                    <th width="15%"><?php echo $_smarty_tpl->__("yml_export.delivery_days");?>
</th>
                    <th><?php echo $_smarty_tpl->__("yml_export.order_before");?>
</th>
                    <th class="cm-non-cb">&nbsp;</th>
                </tr>
                </thead>
                <?php  $_smarty_tpl->tpl_vars["option"] = new Smarty_Variable; $_smarty_tpl->tpl_vars["option"]->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['data']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
 $_smarty_tpl->tpl_vars['smarty']->value['foreach']["option_index"]['iteration']=0;
foreach ($_from as $_smarty_tpl->tpl_vars["option"]->key => $_smarty_tpl->tpl_vars["option"]->value) {
$_smarty_tpl->tpl_vars["option"]->_loop = true;
 $_smarty_tpl->tpl_vars['smarty']->value['foreach']["option_index"]['iteration']++;
?>
                    <?php $_smarty_tpl->tpl_vars["num"] = new Smarty_variable($_smarty_tpl->getVariable('smarty')->value['foreach']['option_index']['iteration'], null, 0);?>
                    <tbody class="hover cm-row-item" id="delivery_options_<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['id']->value, ENT_QUOTES, 'UTF-8');?>
_<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['num']->value, ENT_QUOTES, 'UTF-8');?>
">
                    <tr>
                        <td data-th="<?php echo $_smarty_tpl->__("yml_export.delivery_cost");?>
">
                            <input type="text" name="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['name_data']->value, ENT_QUOTES, 'UTF-8');?>
[<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['num']->value, ENT_QUOTES, 'UTF-8');?>
][cost]" size="20" value="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['option']->value['cost'], ENT_QUOTES, 'UTF-8');?>
" class="input-mini" />
                        </td>
                        <td data-th="<?php echo $_smarty_tpl->__("yml_export.delivery_days");?>
">
                            <input type="text" name="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['name_data']->value, ENT_QUOTES, 'UTF-8');?>
[<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['num']->value, ENT_QUOTES, 'UTF-8');?>
][days]" size="20" value="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['option']->value['days'], ENT_QUOTES, 'UTF-8');?>
" class="input-mini" />
                        </td>
                        <td data-th="<?php echo $_smarty_tpl->__("yml_export.order_before");?>
">
                            <input type="text" name="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['name_data']->value, ENT_QUOTES, 'UTF-8');?>
[<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['num']->value, ENT_QUOTES, 'UTF-8');?>
][order_before]" size="20" value="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['option']->value['order_before'], ENT_QUOTES, 'UTF-8');?>
" class="input-mini" />
                        </td>
                        <td class="right cm-non-cb">
                            <?php echo $_smarty_tpl->getSubTemplate ("buttons/multiple_buttons.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array('item_id'=>"option_variants_".((string)$_smarty_tpl->tpl_vars['id']->value)."_".((string)$_smarty_tpl->tpl_vars['num']->value),'tag_level'=>"3",'only_delete'=>"Y"), 0);?>

                        </td>
                    </tbody>
                <?php } ?>

                <?php echo smarty_function_math(array('equation'=>"x + 1",'assign'=>"num",'x'=>(($tmp = @$_smarty_tpl->tpl_vars['num']->value)===null||$tmp==='' ? 0 : $tmp)),$_smarty_tpl);?>


                <tbody class="hover cm-row-item" id="box_add_delivery_option_<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['id']->value, ENT_QUOTES, 'UTF-8');?>
">
                <tr>
                    <td data-th="<?php echo $_smarty_tpl->__("yml_export.delivery_cost");?>
">
                        <input type="text" name="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['name_data']->value, ENT_QUOTES, 'UTF-8');?>
[<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['num']->value, ENT_QUOTES, 'UTF-8');?>
][cost]" size="20" value="" class="input-mini" />
                    </td>
                    <td data-th="<?php echo $_smarty_tpl->__("yml_export.delivery_days");?>
">
                        <input type="text" name="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['name_data']->value, ENT_QUOTES, 'UTF-8');?>
[<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['num']->value, ENT_QUOTES, 'UTF-8');?>
][days]" size="20" value="" class="input-mini" />
                    </td>
                    <td data-th="<?php echo $_smarty_tpl->__("yml_export.order_before");?>
">
                        <input type="text" name="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['name_data']->value, ENT_QUOTES, 'UTF-8');?>
[<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['num']->value, ENT_QUOTES, 'UTF-8');?>
][order_before]" size="20" value="" class="input-mini" />
                    </td>
                    <td class="right cm-non-cb">
                        <?php echo $_smarty_tpl->getSubTemplate ("buttons/multiple_buttons.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array('item_id'=>"add_delivery_option_".((string)$_smarty_tpl->tpl_vars['id']->value),'tag_level'=>"2"), 0);?>

                    </td>
                </tr>
                </tbody>
            </table>
        </div>
    </div>
</div><?php }} ?>