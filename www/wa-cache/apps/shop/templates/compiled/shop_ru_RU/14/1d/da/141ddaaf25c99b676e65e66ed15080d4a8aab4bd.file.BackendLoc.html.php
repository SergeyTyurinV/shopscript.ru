<?php /* Smarty version Smarty-3.1.14, created on 2017-09-29 16:29:13
         compiled from "Z:\home\shopscript.ru\www\wa-apps\shop\templates\actions\backend\BackendLoc.html" */ ?>
<?php /*%%SmartyHeaderCode:1672759ce2e892f6644-66829389%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '141ddaaf25c99b676e65e66ed15080d4a8aab4bd' => 
    array (
      0 => 'Z:\\home\\shopscript.ru\\www\\wa-apps\\shop\\templates\\actions\\backend\\BackendLoc.html',
      1 => 1452519801,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '1672759ce2e892f6644-66829389',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'strings' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.14',
  'unifunc' => 'content_59ce2e8934c7c7_76408809',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_59ce2e8934c7c7_76408809')) {function content_59ce2e8934c7c7_76408809($_smarty_tpl) {?>$.wa.locale = $.extend($.wa.locale, <?php ob_start();?><?php echo json_encode($_smarty_tpl->tpl_vars['strings']->value);?>
<?php $_tmp1=ob_get_clean();?><?php echo $_tmp1;?>
);<?php }} ?>