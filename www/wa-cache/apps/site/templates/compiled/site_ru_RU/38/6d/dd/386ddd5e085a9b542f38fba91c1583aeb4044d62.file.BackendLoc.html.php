<?php /* Smarty version Smarty-3.1.14, created on 2017-09-29 16:25:11
         compiled from "Z:\home\shopscript.ru\www\wa-apps\site\templates\actions\backend\BackendLoc.html" */ ?>
<?php /*%%SmartyHeaderCode:2940559ce2d97ae7c85-57275568%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '386ddd5e085a9b542f38fba91c1583aeb4044d62' => 
    array (
      0 => 'Z:\\home\\shopscript.ru\\www\\wa-apps\\site\\templates\\actions\\backend\\BackendLoc.html',
      1 => 1452519803,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '2940559ce2d97ae7c85-57275568',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'strings' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.14',
  'unifunc' => 'content_59ce2d97b5c552_11643028',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_59ce2d97b5c552_11643028')) {function content_59ce2d97b5c552_11643028($_smarty_tpl) {?>$.wa.locale = $.extend($.wa.locale, <?php ob_start();?><?php echo json_encode($_smarty_tpl->tpl_vars['strings']->value);?>
<?php $_tmp1=ob_get_clean();?><?php echo $_tmp1;?>
);<?php }} ?>