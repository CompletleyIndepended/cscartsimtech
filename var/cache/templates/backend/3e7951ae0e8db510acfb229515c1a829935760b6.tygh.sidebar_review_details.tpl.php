<?php /* Smarty version Smarty-3.1.21, created on 2021-09-05 11:17:49
         compiled from "C:\OpenServer\domains\cscart\design\backend\templates\addons\product_reviews\views\product_reviews\components\sidebar\sidebar_review_details.tpl" */ ?>
<?php /*%%SmartyHeaderCode:109407470461347d2d728238-88107246%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '3e7951ae0e8db510acfb229515c1a829935760b6' => 
    array (
      0 => 'C:\\OpenServer\\domains\\cscart\\design\\backend\\templates\\addons\\product_reviews\\views\\product_reviews\\components\\sidebar\\sidebar_review_details.tpl',
      1 => 1628148740,
      2 => 'tygh',
    ),
  ),
  'nocache_hash' => '109407470461347d2d728238-88107246',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'product_review' => 0,
    'product_review_id' => 0,
    'product_review_status_descr' => 0,
    'total_product_reviews' => 0,
    'user_data' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.21',
  'unifunc' => 'content_61347d2d735893_17537268',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_61347d2d735893_17537268')) {function content_61347d2d735893_17537268($_smarty_tpl) {?><?php
\Tygh\Languages\Helper::preloadLangVars(array('product_reviews.review_status','anonymous'));
?>


<div class="sidebar-row">
    <h6><?php echo $_smarty_tpl->__("product_reviews.review_status");?>
</h6>
    <?php echo $_smarty_tpl->getSubTemplate ("addons/product_reviews/views/product_reviews/components/reviews/review_status.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array('product_review_status'=>$_smarty_tpl->tpl_vars['product_review']->value['status'],'product_review_id'=>$_smarty_tpl->tpl_vars['product_review_id']->value,'product_review_status_descr'=>$_smarty_tpl->tpl_vars['product_review_status_descr']->value), 0);?>

</div>

<?php echo $_smarty_tpl->getSubTemplate ("common/sidebar/sidebar_product.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array('product_data'=>$_smarty_tpl->tpl_vars['product_review']->value['product'],'total_product_reviews'=>$_smarty_tpl->tpl_vars['total_product_reviews']->value), 0);?>


<?php echo $_smarty_tpl->getSubTemplate ("common/sidebar/sidebar_customer.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array('user_data'=>$_smarty_tpl->tpl_vars['user_data']->value,'user_default_name'=>$_smarty_tpl->__("anonymous")), 0);?>

<?php }} ?>
