<?php /* Smarty version Smarty-3.1.14, created on 2017-09-23 23:00:06
         compiled from "Z:\home\shopscript.ru\www\wa-apps\shop\templates\layouts\Welcome.html" */ ?>
<?php /*%%SmartyHeaderCode:2775059c6a1269948b3-14043243%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '4b5ce162f563bfba74393da398def8c54278527a' => 
    array (
      0 => 'Z:\\home\\shopscript.ru\\www\\wa-apps\\shop\\templates\\layouts\\Welcome.html',
      1 => 1452519801,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '2775059c6a1269948b3-14043243',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'wa' => 0,
    'title' => 0,
    'wa_url' => 0,
    'wa_app_static_url' => 0,
    'content' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.14',
  'unifunc' => 'content_59c6a126a3de98_18874035',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_59c6a126a3de98_18874035')) {function content_59c6a126a3de98_18874035($_smarty_tpl) {?><!DOCTYPE html><html>
<head>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
    <?php $_smarty_tpl->tpl_vars['title'] = new Smarty_variable($_smarty_tpl->tpl_vars['wa']->value->title(), null, 0);?>
    <title><?php ob_start();?><?php echo (($tmp = @$_smarty_tpl->tpl_vars['title']->value)===null||$tmp==='' ? $_smarty_tpl->tpl_vars['wa']->value->appName() : $tmp);?>
<?php $_tmp1=ob_get_clean();?><?php ob_start();?><?php echo $_smarty_tpl->tpl_vars['wa']->value->accountName(false);?>
<?php $_tmp2=ob_get_clean();?><?php echo htmlspecialchars(($_tmp1).(" — ").($_tmp2), ENT_QUOTES, 'UTF-8', true);?>
</title>

    <?php echo $_smarty_tpl->tpl_vars['wa']->value->css();?>


    <link href="<?php echo $_smarty_tpl->tpl_vars['wa_url']->value;?>
wa-content/css/jquery-ui/base/jquery.ui.autocomplete.css" rel="stylesheet" type="text/css" />
    <link href="<?php echo $_smarty_tpl->tpl_vars['wa_url']->value;?>
wa-content/js/jquery-plugins/ibutton/jquery.ibutton.min.css" rel="stylesheet" type="text/css" />
    <link href="<?php echo $_smarty_tpl->tpl_vars['wa_app_static_url']->value;?>
css/shop.css?v<?php echo $_smarty_tpl->tpl_vars['wa']->value->version();?>
" rel="stylesheet" type="text/css" />
    <!-- link your CSS files here -->
    <script type="text/javascript" src="<?php echo $_smarty_tpl->tpl_vars['wa_url']->value;?>
wa-content/js/jquery/jquery-1.7.1.min.js"></script>

     

    <?php echo $_smarty_tpl->tpl_vars['wa']->value->js();?>

</head>
<body>
<div id="wa">

    <?php echo $_smarty_tpl->tpl_vars['wa']->value->header();?>


    <div id="wa-app">

<?php echo $_smarty_tpl->tpl_vars['content']->value;?>


    </div><!-- #wa-app -->

</div><!-- #wa -->
</body>
</html><?php }} ?>