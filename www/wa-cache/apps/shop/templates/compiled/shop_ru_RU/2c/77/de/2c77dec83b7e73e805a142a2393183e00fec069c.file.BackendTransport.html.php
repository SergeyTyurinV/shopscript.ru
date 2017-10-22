<?php /* Smarty version Smarty-3.1.14, created on 2017-09-29 16:29:17
         compiled from "Z:\home\shopscript.ru\www\wa-apps\shop\plugins\migrate\templates\actions\backend\BackendTransport.html" */ ?>
<?php /*%%SmartyHeaderCode:1597059ce2e8dc11ed4-26533776%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '2c77dec83b7e73e805a142a2393183e00fec069c' => 
    array (
      0 => 'Z:\\home\\shopscript.ru\\www\\wa-apps\\shop\\plugins\\migrate\\templates\\actions\\backend\\BackendTransport.html',
      1 => 1452519800,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '1597059ce2e8dc11ed4-26533776',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'errors' => 0,
    'controls' => 0,
    'html' => 0,
    'validate' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.14',
  'unifunc' => 'content_59ce2e8dd3d349_34956522',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_59ce2e8dd3d349_34956522')) {function content_59ce2e8dd3d349_34956522($_smarty_tpl) {?>
<?php if (!empty($_smarty_tpl->tpl_vars['errors']->value[''])){?>
    <div class="field">
        <div class="value errormsg">
            <?php echo nl2br(htmlspecialchars($_smarty_tpl->tpl_vars['errors']->value[''], ENT_QUOTES, 'UTF-8', true));?>

        </div>
    </div>
<?php }?>
<?php  $_smarty_tpl->tpl_vars['html'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['html']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['controls']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['html']->key => $_smarty_tpl->tpl_vars['html']->value){
$_smarty_tpl->tpl_vars['html']->_loop = true;
?>
    <?php echo $_smarty_tpl->tpl_vars['html']->value;?>

<?php } ?>
<script type="text/javascript">
<!--
<?php if ($_smarty_tpl->tpl_vars['validate']->value){?>
if($.importexport.plugins.migrate.validate) {
    $("#s-plugin-migrate").submit();
} else {
    $.importexport.plugins.migrate.validate=true;
}
<?php }else{ ?>
$.importexport.plugins.migrate.validate=false;
<?php }?>

$('#plugin-migrate-transport-group').find(':input').attr('disabled', <?php echo htmlspecialchars(var_export(!!$_smarty_tpl->tpl_vars['errors']->value,true), ENT_QUOTES, 'UTF-8', true);?>
);
//-->
</script>
<?php }} ?>