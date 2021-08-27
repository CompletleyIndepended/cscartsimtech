<?php /* Smarty version Smarty-3.1.21, created on 2021-08-27 12:35:08
         compiled from "C:\OpenServer\domains\cscart\design\backend\templates\common\comet.tpl" */ ?>
<?php /*%%SmartyHeaderCode:3052071256128b1cc0181b1-24322408%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '7bef0e51402d89d025588ae425d8f7c61e583ab6' => 
    array (
      0 => 'C:\\OpenServer\\domains\\cscart\\design\\backend\\templates\\common\\comet.tpl',
      1 => 1628148740,
      2 => 'tygh',
    ),
  ),
  'nocache_hash' => '3052071256128b1cc0181b1-24322408',
  'function' => 
  array (
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.21',
  'unifunc' => 'content_6128b1cc01c455_55195510',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_6128b1cc01c455_55195510')) {function content_6128b1cc01c455_55195510($_smarty_tpl) {?><?php
\Tygh\Languages\Helper::preloadLangVars(array('processing'));
?>
<a id="comet_container_controller" data-backdrop="static" data-keyboard="false" href="#comet_control" data-toggle="modal" class="hide"></a>

<div class="modal hide fade" id="comet_control" tabindex="-1" role="dialog" aria-labelledby="comet_title" aria-hidden="true">
    <div class="modal-header">
        <h3 id="comet_title"><?php echo $_smarty_tpl->__("processing");?>
</h3>
    </div>
    <div class="modal-body">
        <p></p>
        <div class="progress progress-striped active">
            
            <div class="bar" style="width: 0%;"></div>
        </div>
    </div>
</div><?php }} ?>
