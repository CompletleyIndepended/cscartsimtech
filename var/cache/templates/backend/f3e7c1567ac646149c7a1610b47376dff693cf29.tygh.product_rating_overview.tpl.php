<?php /* Smarty version Smarty-3.1.21, created on 2021-09-05 11:48:25
         compiled from "C:\OpenServer\domains\cscart\design\backend\templates\addons\product_reviews\views\product_reviews\components\rating\product_rating_overview.tpl" */ ?>
<?php /*%%SmartyHeaderCode:25203008361348459741c45-84847762%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'f3e7c1567ac646149c7a1610b47376dff693cf29' => 
    array (
      0 => 'C:\\OpenServer\\domains\\cscart\\design\\backend\\templates\\addons\\product_reviews\\views\\product_reviews\\components\\rating\\product_rating_overview.tpl',
      1 => 1628148740,
      2 => 'tygh',
    ),
  ),
  'nocache_hash' => '25203008361348459741c45-84847762',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'total_product_reviews' => 0,
    'average_rating' => 0,
    'ratings_stats' => 0,
    'product_data' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.21',
  'unifunc' => 'content_61348459770045_96243095',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_61348459770045_96243095')) {function content_61348459770045_96243095($_smarty_tpl) {?>

<?php if ($_smarty_tpl->tpl_vars['total_product_reviews']->value) {?>
    <section class="cs-product-reviews-rating-product-rating-overview well">
        <?php echo $_smarty_tpl->getSubTemplate ("addons/product_reviews/views/product_reviews/components/rating/stars_with_text.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array('rating'=>$_smarty_tpl->tpl_vars['average_rating']->value,'size'=>"xlarge"), 0);?>


        <?php echo $_smarty_tpl->getSubTemplate ("addons/product_reviews/views/product_reviews/components/rating/stars_details.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array('ratings_stats'=>$_smarty_tpl->tpl_vars['ratings_stats']->value), 0);?>


        <?php echo $_smarty_tpl->getSubTemplate ("addons/product_reviews/views/product_reviews/components/rating/total_reviews.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array('total_product_reviews'=>$_smarty_tpl->tpl_vars['total_product_reviews']->value,'product_id'=>$_smarty_tpl->tpl_vars['product_data']->value['product_id'],'meta'=>"muted"), 0);?>


    </section>
<?php }?>
<?php }} ?>
