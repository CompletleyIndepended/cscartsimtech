<?php /* Smarty version Smarty-3.1.21, created on 2021-09-05 11:17:49
         compiled from "C:\OpenServer\domains\cscart\design\backend\templates\addons\product_reviews\views\product_reviews\components\update\post_vendor_reply.tpl" */ ?>
<?php /*%%SmartyHeaderCode:102828377361347d2d5eecd6-72836695%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '9f0b2bf3911049831ef6f02f5ed41221410270c7' => 
    array (
      0 => 'C:\\OpenServer\\domains\\cscart\\design\\backend\\templates\\addons\\product_reviews\\views\\product_reviews\\components\\update\\post_vendor_reply.tpl',
      1 => 1628148740,
      2 => 'tygh',
    ),
  ),
  'nocache_hash' => '102828377361347d2d5eecd6-72836695',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'product_review_reply' => 0,
    'settings' => 0,
    'runtime' => 0,
    'is_allowed_update_reply' => 0,
    'but_text' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.21',
  'unifunc' => 'content_61347d2d60df10_91701260',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_61347d2d60df10_91701260')) {function content_61347d2d60df10_91701260($_smarty_tpl) {?><?php if (!is_callable('smarty_modifier_date_format')) include 'C:/OpenServer/domains/cscart/app/functions/smarty_plugins\\modifier.date_format.php';
?><?php
\Tygh\Languages\Helper::preloadLangVars(array('product_reviews.date','product_reviews.vendor','product_reviews.reply','product_reviews.type_message','product_reviews.update_reply','product_reviews.add_reply'));
?>


<section class="cs-product-reviews-update-post-vendor-reply">
    
    <div class="control-group">
        <label class="control-label">
            <?php echo $_smarty_tpl->__("product_reviews.date");?>
:
        </label>
        <div class="controls">
            <p>
                <?php echo htmlspecialchars(smarty_modifier_date_format($_smarty_tpl->tpl_vars['product_review_reply']->value['reply_timestamp'],((string)$_smarty_tpl->tpl_vars['settings']->value['Appearance']['date_format']).", ".((string)$_smarty_tpl->tpl_vars['settings']->value['Appearance']['time_format'])), ENT_QUOTES, 'UTF-8');?>

            </p>
        </div>
    </div>

    <?php if ($_smarty_tpl->tpl_vars['product_review_reply']->value['reply_company_id']&&!$_smarty_tpl->tpl_vars['runtime']->value['company_id']) {?>
        <div class="control-group">
            <label class="control-label">
                <?php echo $_smarty_tpl->__("product_reviews.vendor");?>
:
            </label>
            <div class="controls">
                <p>
                    <?php echo $_smarty_tpl->getSubTemplate ("addons/product_reviews/views/product_reviews/components/reviews/vendor_name.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array('product_review_reply'=>$_smarty_tpl->tpl_vars['product_review_reply']->value), 0);?>

                </p>
            </div>
        </div>
    <?php }?>

    <div class="control-group">
        <label class="control-label">
            <?php echo $_smarty_tpl->__("product_reviews.reply");?>
:
        </label>
        <div class="controls">
            <textarea
                id="product_review_data_reply"
                name="product_review_data[reply]"
                placeholder="<?php echo $_smarty_tpl->__("product_reviews.type_message");?>
"
                class="cs-textarea-adaptive cs-textarea-adaptive--with-sidebar input-full
                    <?php if ($_smarty_tpl->tpl_vars['is_allowed_update_reply']->value) {?>
                        cm-no-hide-input
                    <?php }?>"
                style="--text-length: <?php echo htmlspecialchars(mb_strlen($_smarty_tpl->tpl_vars['product_review_reply']->value['reply'], 'UTF-8'), ENT_QUOTES, 'UTF-8');?>
;"
                <?php if (!$_smarty_tpl->tpl_vars['product_review_reply']->value['reply_company_id']&&!$_smarty_tpl->tpl_vars['product_review_reply']->value&&$_smarty_tpl->tpl_vars['runtime']->value['company_id']) {?>
                    autofocus
                <?php }?>
            ><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['product_review_reply']->value['reply'], ENT_QUOTES, 'UTF-8');?>
</textarea>
        </div>
    </div>

    <?php if ($_smarty_tpl->tpl_vars['is_allowed_update_reply']->value) {?>
        <div class="control-group">
            <div class="controls">
                <p>
                    <?php $_smarty_tpl->tpl_vars['but_text'] = new Smarty_variable($_smarty_tpl->tpl_vars['product_review_reply']->value['reply'] ? $_smarty_tpl->__("product_reviews.update_reply") : $_smarty_tpl->__("product_reviews.add_reply"), null, 0);?>
                    <?php echo $_smarty_tpl->getSubTemplate ("buttons/button.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array('but_text'=>$_smarty_tpl->tpl_vars['but_text']->value,'but_role'=>"submit-link",'but_name'=>"dispatch[product_reviews.update]",'but_target_form'=>"update_product_reviews_form",'allow_href'=>true), 0);?>

                </p>
            </div>
        </div>
    <?php }?>

</section>
<?php }} ?>
