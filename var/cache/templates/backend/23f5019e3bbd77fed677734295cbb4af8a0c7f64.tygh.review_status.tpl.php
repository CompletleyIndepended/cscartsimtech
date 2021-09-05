<?php /* Smarty version Smarty-3.1.21, created on 2021-09-05 11:16:29
         compiled from "C:\OpenServer\domains\cscart\design\backend\templates\addons\product_reviews\views\product_reviews\components\reviews\review_status.tpl" */ ?>
<?php /*%%SmartyHeaderCode:172444053361347cddc1ccf1-50732234%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '23f5019e3bbd77fed677734295cbb4af8a0c7f64' => 
    array (
      0 => 'C:\\OpenServer\\domains\\cscart\\design\\backend\\templates\\addons\\product_reviews\\views\\product_reviews\\components\\reviews\\review_status.tpl',
      1 => 1628148740,
      2 => 'tygh',
    ),
  ),
  'nocache_hash' => '172444053361347cddc1ccf1-50732234',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'product_review_status' => 0,
    'config' => 0,
    'product_review_id' => 0,
    'product_review_status_descr' => 0,
    'rev' => 0,
    'return_url' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.21',
  'unifunc' => 'content_61347cddc29e59_06186668',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_61347cddc29e59_06186668')) {function content_61347cddc29e59_06186668($_smarty_tpl) {?>

<?php if ($_smarty_tpl->tpl_vars['product_review_status']->value) {?>
    <?php $_smarty_tpl->tpl_vars['return_url'] = new Smarty_variable(rawurlencode($_smarty_tpl->tpl_vars['config']->value['current_url']), null, 0);?>

    <?php echo $_smarty_tpl->getSubTemplate ("common/select_popup.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array('prefix'=>"product_review",'id'=>$_smarty_tpl->tpl_vars['product_review_id']->value,'status'=>$_smarty_tpl->tpl_vars['product_review_status']->value,'items_status'=>$_smarty_tpl->tpl_vars['product_review_status_descr']->value,'object_id_name'=>"product_review_id",'table'=>"product_reviews",'st_result_ids'=>$_smarty_tpl->tpl_vars['rev']->value,'btn_meta'=>"nowrap cs-product-reviews-reviews-review-status__btn",'extra'=>"&return_url=".((string)$_smarty_tpl->tpl_vars['return_url']->value),'ajax_full_render'=>true), 0);?>


<?php }?>
<?php }} ?>
