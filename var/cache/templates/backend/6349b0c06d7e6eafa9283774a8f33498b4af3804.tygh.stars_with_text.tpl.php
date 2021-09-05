<?php /* Smarty version Smarty-3.1.21, created on 2021-09-05 11:49:34
         compiled from "C:\OpenServer\domains\cscart\design\backend\templates\addons\product_reviews\views\product_reviews\components\rating\stars_with_text.tpl" */ ?>
<?php /*%%SmartyHeaderCode:13094869666134849e12a529-69656966%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '6349b0c06d7e6eafa9283774a8f33498b4af3804' => 
    array (
      0 => 'C:\\OpenServer\\domains\\cscart\\design\\backend\\templates\\addons\\product_reviews\\views\\product_reviews\\components\\rating\\stars_with_text.tpl',
      1 => 1628148740,
      2 => 'tygh',
    ),
  ),
  'nocache_hash' => '13094869666134849e12a529-69656966',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'rating' => 0,
    'size' => 0,
    'accurate_rating' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.21',
  'unifunc' => 'content_6134849e204e79_89833882',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_6134849e204e79_89833882')) {function content_6134849e204e79_89833882($_smarty_tpl) {?><?php
\Tygh\Languages\Helper::preloadLangVars(array('product_reviews.out_of_five'));
?>


<?php if ($_smarty_tpl->tpl_vars['rating']->value>0) {?>
    <?php $_smarty_tpl->tpl_vars['accurate_rating'] = new Smarty_variable(round($_smarty_tpl->tpl_vars['rating']->value,1), null, 0);?>

    <section>
        <?php echo $_smarty_tpl->getSubTemplate ("addons/product_reviews/views/product_reviews/components/rating/stars.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array('rating'=>$_smarty_tpl->tpl_vars['rating']->value,'size'=>$_smarty_tpl->tpl_vars['size']->value), 0);?>


        <div>
            <strong class="text-larger">
                <?php echo htmlspecialchars($_smarty_tpl->tpl_vars['accurate_rating']->value, ENT_QUOTES, 'UTF-8');?>

            </strong>
            <span>
                <?php echo $_smarty_tpl->__("product_reviews.out_of_five");?>

            </span>
        </div>
    </section>
<?php }?>
<?php }} ?>
