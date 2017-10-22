<?php /* Smarty version Smarty-3.1.14, created on 2017-09-29 17:00:10
         compiled from "Z:\home\shopscript.ru\www\wa-apps\shop\templates\actions\dialog\DialogProductsDelete.html" */ ?>
<?php /*%%SmartyHeaderCode:1963559ce35cad80a83-39001507%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '82b5c092387b20f4e9828b42b6c764167e53207c' => 
    array (
      0 => 'Z:\\home\\shopscript.ru\\www\\wa-apps\\shop\\templates\\actions\\dialog\\DialogProductsDelete.html',
      1 => 1452519801,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '1963559ce35cad80a83-39001507',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'count' => 0,
    'wa' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.14',
  'unifunc' => 'content_59ce35cae74963_85257921',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_59ce35cae74963_85257921')) {function content_59ce35cae74963_85257921($_smarty_tpl) {?><div class="dialog width400px height200px" id="s-product-list-delete-products-dialog" data-not-allowed-string="Невозможно удалить товары (%d), к которым у вас нет доступа.">
    <div class="dialog-background"></div>
    <form method="post" action="">
    <div class="dialog-window">
        <div class="dialog-content">
            <div class="dialog-content-indent">
                <h1>Удалить</h1>
                <p>
                    <strong class="red"><?php echo _w('%d product will be deleted without the ability to restore.','%d products will be deleted without the ability to restore.',$_smarty_tpl->tpl_vars['count']->value);?>
</strong>
                    При удалении товара все отчеты о его продажах, его данные о перекрестных продажах и связи с ранее оформленными заказами будут также удалены без возможности восстановления.
                </p>
            </div>
        </div>
        <div class="dialog-buttons">
            <div class="dialog-buttons-gradient">
                <?php echo $_smarty_tpl->tpl_vars['wa']->value->csrf();?>

                <input class="button red" type="submit" value="Удалить">
                <i class="icon16 loading"></i> 
                или <a class="cancel" href="javascript:void(0);">отмена</a>
            </div>
        </div>
    </div>
    </form>
</div><?php }} ?>