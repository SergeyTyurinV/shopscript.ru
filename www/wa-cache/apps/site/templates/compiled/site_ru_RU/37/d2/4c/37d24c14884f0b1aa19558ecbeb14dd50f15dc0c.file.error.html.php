<?php /* Smarty version Smarty-3.1.14, created on 2017-09-29 16:24:31
         compiled from "Z:\home\shopscript.ru\www\wa-apps\site\themes\default\error.html" */ ?>
<?php /*%%SmartyHeaderCode:2561859ce2d6f120240-83722158%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '37d24c14884f0b1aa19558ecbeb14dd50f15dc0c' => 
    array (
      0 => 'Z:\\home\\shopscript.ru\\www\\wa-apps\\site\\themes\\default\\error.html',
      1 => 1452519804,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '2561859ce2d6f120240-83722158',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'error_code' => 0,
    'error_message' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.14',
  'unifunc' => 'content_59ce2d6f73c1a1_35810724',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_59ce2d6f73c1a1_35810724')) {function content_59ce2d6f73c1a1_35810724($_smarty_tpl) {?><h1>
	<?php if ($_smarty_tpl->tpl_vars['error_code']->value){?><?php echo $_smarty_tpl->tpl_vars['error_code']->value;?>
. <?php }?>
	<?php if ($_smarty_tpl->tpl_vars['error_message']->value){?><?php echo $_smarty_tpl->tpl_vars['error_message']->value;?>
<?php }else{ ?>Ошибка<?php }?>
</h1>
Запрашиваемый ресурс недоступен.
<?php }} ?>