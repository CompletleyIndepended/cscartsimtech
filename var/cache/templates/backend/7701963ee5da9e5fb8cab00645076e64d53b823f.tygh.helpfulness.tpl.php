<?php /* Smarty version Smarty-3.1.21, created on 2021-09-05 11:16:29
         compiled from "C:\OpenServer\domains\cscart\design\backend\templates\addons\product_reviews\views\product_reviews\components\reviews\helpfulness.tpl" */ ?>
<?php /*%%SmartyHeaderCode:71696774561347cddafd9b1-84415501%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '7701963ee5da9e5fb8cab00645076e64d53b823f' => 
    array (
      0 => 'C:\\OpenServer\\domains\\cscart\\design\\backend\\templates\\addons\\product_reviews\\views\\product_reviews\\components\\reviews\\helpfulness.tpl',
      1 => 1628148740,
      2 => 'tygh',
    ),
  ),
  'nocache_hash' => '71696774561347cddafd9b1-84415501',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'helpfulness' => 0,
    'size' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.21',
  'unifunc' => 'content_61347cddb0c9c9_63342157',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_61347cddb0c9c9_63342157')) {function content_61347cddb0c9c9_63342157($_smarty_tpl) {?><?php
\Tygh\Languages\Helper::preloadLangVars(array('product_reviews.helpfulness','product_reviews.vote_up','product_reviews.vote_down'));
?>


<?php if ($_smarty_tpl->tpl_vars['helpfulness']->value) {?>

    <span title="<?php echo $_smarty_tpl->__("product_reviews.helpfulness");?>
: <?php echo htmlspecialchars($_smarty_tpl->tpl_vars['helpfulness']->value['helpfulness'], ENT_QUOTES, 'UTF-8');?>

<?php echo $_smarty_tpl->__("product_reviews.vote_up");?>
: <?php echo htmlspecialchars($_smarty_tpl->tpl_vars['helpfulness']->value['vote_up'], ENT_QUOTES, 'UTF-8');?>

<?php echo $_smarty_tpl->__("product_reviews.vote_down");?>
: <?php echo htmlspecialchars($_smarty_tpl->tpl_vars['helpfulness']->value['vote_down'], ENT_QUOTES, 'UTF-8');?>
"
        class="
            <?php if ($_smarty_tpl->tpl_vars['size']->value==="small") {?>
                slashed-child
            <?php } else { ?>
                spaced-child
            <?php }?>
        "
    >

        <span>
            <?php if ($_smarty_tpl->tpl_vars['size']->value!=="small") {?>
                <i class="muted icon-thumbs-up"></i>
            <?php }?>
            <span class="text-success">
                <?php if ($_smarty_tpl->tpl_vars['helpfulness']->value['vote_up']>0) {?>+<?php }
echo htmlspecialchars($_smarty_tpl->tpl_vars['helpfulness']->value['vote_up'], ENT_QUOTES, 'UTF-8');?>

            </span>
        </span>

        <span>
            <?php if ($_smarty_tpl->tpl_vars['size']->value!=="small") {?>
                <i class="muted icon-thumbs-down"></i>
            <?php }?>
            <span class="text-error">
                <?php if ($_smarty_tpl->tpl_vars['helpfulness']->value['vote_down']>0) {?>−<?php }
echo htmlspecialchars($_smarty_tpl->tpl_vars['helpfulness']->value['vote_down'], ENT_QUOTES, 'UTF-8');?>

            </span>
        </span>

    </span>
<?php }?>
<?php }} ?>
