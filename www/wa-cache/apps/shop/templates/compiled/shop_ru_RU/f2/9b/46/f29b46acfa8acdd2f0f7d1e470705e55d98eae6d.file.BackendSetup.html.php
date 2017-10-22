<?php /* Smarty version Smarty-3.1.14, created on 2017-09-29 16:29:15
         compiled from "Z:\home\shopscript.ru\www\wa-apps\shop\plugins\migrate\templates\actions\backend\BackendSetup.html" */ ?>
<?php /*%%SmartyHeaderCode:109259ce2e8b09bbe7-81878152%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'f29b46acfa8acdd2f0f7d1e470705e55d98eae6d' => 
    array (
      0 => 'Z:\\home\\shopscript.ru\\www\\wa-apps\\shop\\plugins\\migrate\\templates\\actions\\backend\\BackendSetup.html',
      1 => 1452519800,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '109259ce2e8b09bbe7-81878152',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'group' => 0,
    'transports' => 0,
    't' => 0,
    'id' => 0,
    'platform' => 0,
    'wa_url' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.14',
  'unifunc' => 'content_59ce2e8b3aa7f2_32367955',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_59ce2e8b3aa7f2_32367955')) {function content_59ce2e8b3aa7f2_32367955($_smarty_tpl) {?><div class="block double-padded" id="s-migrate-form">
   <p>Перенос данных из внешних источников и других платформ электронной коммерции в Shop-Script.</p>
   <form id="s-plugin-migrate" method="post" action="?plugin=migrate&action=run">
    <div class="fields form">
        <h6 class="heading">Источник</h6>
        <div class="field-group" id="plugin-migrate-transport-group">
            <div class="field">
                <div class="name"><label for="plugin-migrate-transport">Платформа</label></div>
                <div class="value no-shift">
                    <select name="transport" id="plugin-migrate-transport" class="s-plugin-migrate-transport">
                    <?php $_smarty_tpl->tpl_vars['group'] = new Smarty_variable(false, null, 0);?>
                        <?php if ($_smarty_tpl->tpl_vars['group']->value){?>
                        <optgroup>
                        <?php }?>
                        <?php  $_smarty_tpl->tpl_vars['t'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['t']->_loop = false;
 $_smarty_tpl->tpl_vars['id'] = new Smarty_Variable;
 $_from = $_smarty_tpl->tpl_vars['transports']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
 $_smarty_tpl->tpl_vars['t']->total= $_smarty_tpl->_count($_from);
 $_smarty_tpl->tpl_vars['t']->iteration=0;
 $_smarty_tpl->tpl_vars['t']->index=-1;
foreach ($_from as $_smarty_tpl->tpl_vars['t']->key => $_smarty_tpl->tpl_vars['t']->value){
$_smarty_tpl->tpl_vars['t']->_loop = true;
 $_smarty_tpl->tpl_vars['id']->value = $_smarty_tpl->tpl_vars['t']->key;
 $_smarty_tpl->tpl_vars['t']->iteration++;
 $_smarty_tpl->tpl_vars['t']->index++;
 $_smarty_tpl->tpl_vars['t']->first = $_smarty_tpl->tpl_vars['t']->index === 0;
 $_smarty_tpl->tpl_vars['t']->last = $_smarty_tpl->tpl_vars['t']->iteration === $_smarty_tpl->tpl_vars['t']->total;
?>
                        <?php if ($_smarty_tpl->tpl_vars['group']->value!=$_smarty_tpl->tpl_vars['t']->value['group']){?>

                        <?php if (!$_smarty_tpl->tpl_vars['t']->first&&$_smarty_tpl->tpl_vars['group']->value){?>
                        </optgroup>
                        <?php }?>
                        <?php $_smarty_tpl->tpl_vars['group'] = new Smarty_variable($_smarty_tpl->tpl_vars['t']->value['group'], null, 0);?>
                        <optgroup label="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['group']->value, ENT_QUOTES, 'UTF-8', true);?>
">
                        <?php }?>

                        <option value="<?php echo $_smarty_tpl->tpl_vars['id']->value;?>
" title="<?php echo htmlspecialchars(preg_replace('!<[^>]*?>!', ' ', $_smarty_tpl->tpl_vars['t']->value['description']), ENT_QUOTES, 'UTF-8', true);?>
"<?php if ($_smarty_tpl->tpl_vars['id']->value==$_smarty_tpl->tpl_vars['platform']->value){?> selected<?php }?>><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['t']->value['title'], ENT_QUOTES, 'UTF-8', true);?>
</option>
                        <?php if ($_smarty_tpl->tpl_vars['t']->last){?>
                        </optgroup>
                        <?php }?>
<?php } ?>
                    </select>
                    <br>
                    <?php  $_smarty_tpl->tpl_vars['t'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['t']->_loop = false;
 $_smarty_tpl->tpl_vars['id'] = new Smarty_Variable;
 $_from = $_smarty_tpl->tpl_vars['transports']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
 $_smarty_tpl->tpl_vars['t']->total= $_smarty_tpl->_count($_from);
 $_smarty_tpl->tpl_vars['t']->iteration=0;
 $_smarty_tpl->tpl_vars['t']->index=-1;
foreach ($_from as $_smarty_tpl->tpl_vars['t']->key => $_smarty_tpl->tpl_vars['t']->value){
$_smarty_tpl->tpl_vars['t']->_loop = true;
 $_smarty_tpl->tpl_vars['id']->value = $_smarty_tpl->tpl_vars['t']->key;
 $_smarty_tpl->tpl_vars['t']->iteration++;
 $_smarty_tpl->tpl_vars['t']->index++;
 $_smarty_tpl->tpl_vars['t']->first = $_smarty_tpl->tpl_vars['t']->index === 0;
 $_smarty_tpl->tpl_vars['t']->last = $_smarty_tpl->tpl_vars['t']->iteration === $_smarty_tpl->tpl_vars['t']->total;
?>
                    <span id="plugin-migrate-transport-<?php echo $_smarty_tpl->tpl_vars['id']->value;?>
" class="hint plugin-migrate-transport-description" style="display:none;"><?php echo $_smarty_tpl->tpl_vars['t']->value['description'];?>
</span>
                    <?php } ?>
                </div>
            </div>
        </div>

        <div class="field-group" id="plugin-migrate-transport-fields">
        </div>

        <div class="clear-left"></div>

        <div class="field-group" id="plugin-migrate-submit" style="display: none;">
            <div class="field">
                <div class="value submit">
                    <input type="submit" class="button" data-validate="Загрузить" data-import="Импортировать данные" value="Загрузить">
                    <div class="js-progressbar-container" style="display:none;">
                        <div class="progressbar blue float-left" style="display: none; width: 70%;">
                            <div class="progressbar-outer">
                                <div class="progressbar-inner" style="width: 0;"></div>
                            </div>
                        </div>
                        <img style="float:left; margin-top:8px;" src="<?php echo $_smarty_tpl->tpl_vars['wa_url']->value;?>
wa-content/img/loading32.gif" />
                        <div class="clear"></div>
                            <span class="progressbar-description"></span>
                        <br style="clear: left" />
                        <br>
                        <span class="small italic">
                            Пожалуйста, не закрывайте браузер и не покидайте эту страницу, пока процесс переноса данных не будет полностью завершен.
                        </span>
                    </div><br><br>
                    <em class="errormsg"></em>
                </div>
            </div>
        </div>
        <div class="field-group" id="plugin-migrate-report" style="display: none;">
            <div class="field">
                <div class="value"></div>
            </div>
        </div>
    </div>
</form>
</div>

<div class="clear"></div>
<script type="text/javascript">
    $.wa.locale = $.extend($.wa.locale, {
        'Loading...':'Загрузка...'}
    );
<?php echo $_smarty_tpl->getSubTemplate ("../../../js/migrate.js", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0);?>

</script><?php }} ?>