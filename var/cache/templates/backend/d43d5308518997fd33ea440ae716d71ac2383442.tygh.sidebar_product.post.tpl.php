<?php /* Smarty version Smarty-3.1.21, created on 2021-09-05 11:17:49
         compiled from "C:\OpenServer\domains\cscart\design\backend\templates\addons\product_reviews\hooks\common\sidebar_product.post.tpl" */ ?>
<?php /*%%SmartyHeaderCode:137082646261347d2de43c97-30313364%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'd43d5308518997fd33ea440ae716d71ac2383442' => 
    array (
      0 => 'C:\\OpenServer\\domains\\cscart\\design\\backend\\templates\\addons\\product_reviews\\hooks\\common\\sidebar_product.post.tpl',
      1 => 1628148740,
      2 => 'tygh',
    ),
  ),
  'nocache_hash' => '137082646261347d2de43c97-30313364',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'product_data' => 0,
    'total_product_reviews' => 0,
    'product_review' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.21',
  'unifunc' => 'content_61347d2de4d589_41031949',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_61347d2de4d589_41031949')) {function content_61347d2de4d589_41031949($_smarty_tpl) {?>

<?php if ($_smarty_tpl->tpl_vars['product_data']->value) {?>
    <li>
        <?php echo $_smarty_tpl->getSubTemplate ("addons/product_reviews/views/product_reviews/components/rating/stars.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array('rating'=>$_smarty_tpl->tpl_vars['product_data']->value['average_rating'],'total_product_reviews'=>$_smarty_tpl->tpl_vars['total_product_reviews']->value,'link'=>true), 0);?>

    </li>
    <?php if ($_smarty_tpl->tpl_vars['total_product_reviews']->value) {?>
        <li>
            <?php echo $_smarty_tpl->getSubTemplate ("addons/product_reviews/views/product_reviews/components/rating/total_reviews.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array('total_product_reviews'=>$_smarty_tpl->tpl_vars['total_product_reviews']->value,'product_id'=>$_smarty_tpl->tpl_vars['product_review']->value['product']['product_id'],'link'=>true), 0);?>

        </li>
    <?php }?>
<?php }?>
<?php }} ?>
