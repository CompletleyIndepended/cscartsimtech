<?php /* Smarty version Smarty-3.1.21, created on 2021-09-05 11:14:51
         compiled from "C:\OpenServer\domains\cscart\design\backend\templates\views\pages\components\context_menu\parent.tpl" */ ?>
<?php /*%%SmartyHeaderCode:79561455061347c7b78e636-41461606%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'f8500d2d184badd7cff78fa7b943092c437d27d7' => 
    array (
      0 => 'C:\\OpenServer\\domains\\cscart\\design\\backend\\templates\\views\\pages\\components\\context_menu\\parent.tpl',
      1 => 1628148740,
      2 => 'tygh',
    ),
  ),
  'nocache_hash' => '79561455061347c7b78e636-41461606',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'parent_pages' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.21',
  'unifunc' => 'content_61347c7b7977e9_66756034',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_61347c7b7977e9_66756034')) {function content_61347c7b7977e9_66756034($_smarty_tpl) {?><?php
\Tygh\Languages\Helper::preloadLangVars(array('parent','parent','reset','apply'));
?>


<li class="btn bulk-edit__btn bulk-edit__btn--parent dropleft-mod">
            <span class="bulk-edit__btn-content bulk-edit-toggle bulk-edit__btn-content--parent" data-toggle=".bulk-edit__content--parent">
                <?php echo $_smarty_tpl->__("parent");?>

                <span class="caret mobile-hide"></span>
            </span>

    <div class="bulk-edit--reset-dropdown-menu bulk-edit__content bulk-edit__content--parent">
        <div class="bulk-edit-inner bulk-edit-inner--parent">
            <div class="bulk-edit-inner__header">
                <span><?php echo $_smarty_tpl->__("parent");?>
</span>
            </div>
            <div class="bulk-edit-inner__body">
                <?php echo $_smarty_tpl->getSubTemplate ("views/pages/components/parent_page_selector.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array('show_label'=>false,'bulkedit_changer'=>"data-ca-bulkedit-parent-changer"), 0);?>

            </div>

            <div class="bulk-edit-inner__footer">
                <button class="btn bulk-edit-inner__btn bulkedit-parent-cancel"
                        role="button"
                        data-ca-bulkedit-mod-parent-cancel
                        data-ca-bulkedit-mod-parent-reset-changer="[data-ca-bulkedit-parent-changer]"
                ><?php echo $_smarty_tpl->__("reset");?>
</button>
                <button class="btn btn-primary bulk-edit-inner__btn bulkedit-parent-update"
                        role="button"
                        data-ca-bulkedit-mod-parent-update
                        data-ca-bulkedit-mod-values="<?php if (!$_smarty_tpl->tpl_vars['parent_pages']->value) {?>[name='page_data[parent_id]']<?php } else { ?>[data-ca-bulkedit-parent-changer]<?php }?>"
                        data-ca-bulkedit-mod-target-form="[name=pages_tree_form]"
                        data-ca-bulkedit-mod-target-form-active-objects="tr.selected:has(input[type=checkbox].cm-item:checked)"
                        data-ca-bulkedit-mod-dispatch="pages.m_update_parent_page"
                ><?php echo $_smarty_tpl->__("apply");?>
</button>
            </div>
        </div>
    </div>

    <div class="bulk-edit--overlay"></div>
</li>
<?php }} ?>
