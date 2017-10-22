<?php /* Smarty version Smarty-3.1.14, created on 2017-09-23 23:00:06
         compiled from "Z:\home\shopscript.ru\www\wa-apps\shop\templates\actions\backend\BackendWelcome.html" */ ?>
<?php /*%%SmartyHeaderCode:326559c6a126675019-78003786%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '22aed036d6ec7758ff09f318e252527d612a42dd' => 
    array (
      0 => 'Z:\\home\\shopscript.ru\\www\\wa-apps\\shop\\templates\\actions\\backend\\BackendWelcome.html',
      1 => 1452519801,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '326559c6a126675019-78003786',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'countries' => 0,
    'country' => 0,
    'country_iso' => 0,
    'wa_url' => 0,
    'types' => 0,
    'type_id' => 0,
    'type' => 0,
    'backend_welcome' => 0,
    'data' => 0,
    'plugin' => 0,
    'wa' => 0,
    'wa_app_static_url' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.14',
  'unifunc' => 'content_59c6a126808986_83398824',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_59c6a126808986_83398824')) {function content_59c6a126808986_83398824($_smarty_tpl) {?><div class="block double-padded welcome">
  <form method="POST" action="?action=welcome">
    <h1>Добро пожаловать в Shop-Script!</h1>
    <p>С помощью формы быстрого старта вы можете легко подготовить начальную конфигурацию для вашего интернет-магазина в зависимости от вашего региона и типа товаров, которые вы собиратесь продавать. Ваши товары не будут автоматически добавлены в интернет-магазин, однако будут сохранены некоторые полезные настройки (например, валюты и налоги), чтобы вам не пришлось делать этого вручную.</p>
    <div class="form fields">
     

      <div class="field-group">
        <div class="field js-bold">
            <div class="name">
                Страна
            </div>
            <?php  $_smarty_tpl->tpl_vars['country'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['country']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['countries']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['country']->key => $_smarty_tpl->tpl_vars['country']->value){
$_smarty_tpl->tpl_vars['country']->_loop = true;
?>
            <div class="value no-shift">
                <label>
                    <input type="radio" name="country" value="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['country']->value['iso3letter'], ENT_QUOTES, 'UTF-8', true);?>
"<?php if ($_smarty_tpl->tpl_vars['country']->value['iso3letter']==$_smarty_tpl->tpl_vars['country_iso']->value){?> checked="checked"<?php }?>>
                    <i class="icon16 country" style="background: url(<?php echo $_smarty_tpl->tpl_vars['wa_url']->value;?>
wa-content/img/country/<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['country']->value['iso3letter'], ENT_QUOTES, 'UTF-8', true);?>
.gif) no-repeat;"></i>
                    <?php echo htmlspecialchars($_smarty_tpl->tpl_vars['country']->value['name'], ENT_QUOTES, 'UTF-8', true);?>

                </label>
            </div>
            <?php } ?>

            <div class="value no-shift">
                <label>
                    <input type="radio" name="country">
                    <i class="icon16 globe" style="margin-left: 0.3em;"></i>
                    Другая <span class="hint">Никакие региональные данные добавлены не будут</span>
                </label>
            </div>
        </div>
      </div>
      <div class="field-group">
        <div class="field js-bold">
            <div class="name">Типы товаров</div>
            <div class="value">
                <p>Выберите типы товаров, которые вы собираетесь продавать. Вместе с типами товаров автоматически добавится список полезных характеристик товаров в ваш интернет-магазин; они также позволят вам удобно настраивать доступ нескольким администраторам магазина к отдельным группам товаров и регулировать перечень товаров, видимых на витрине магазина.</p>
            </div>
            <?php  $_smarty_tpl->tpl_vars['type'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['type']->_loop = false;
 $_smarty_tpl->tpl_vars['type_id'] = new Smarty_Variable;
 $_from = $_smarty_tpl->tpl_vars['types']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['type']->key => $_smarty_tpl->tpl_vars['type']->value){
$_smarty_tpl->tpl_vars['type']->_loop = true;
 $_smarty_tpl->tpl_vars['type_id']->value = $_smarty_tpl->tpl_vars['type']->key;
?>
            <div class="value no-shift">
                <label>
                    <input type="checkbox" name="types[]" value="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['type_id']->value, ENT_QUOTES, 'UTF-8', true);?>
">
                    <?php echo shopHelper::getIcon($_smarty_tpl->tpl_vars['type']->value['icon']);?>
<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['type']->value['name'], ENT_QUOTES, 'UTF-8', true);?>

                    <span class="hint"><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['type']->value['description'], ENT_QUOTES, 'UTF-8', true);?>
</span>
                </label>
            </div>
            <?php } ?>
            <div class="value no-shift">
                <p class="hint">Если в этом списке нет нужного вам типа товаров, вы сможете добавить его позднее.</p>
            </div>
        </div>
      </div>
      <?php if (!empty($_smarty_tpl->tpl_vars['backend_welcome']->value)){?>
      <?php  $_smarty_tpl->tpl_vars['data'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['data']->_loop = false;
 $_smarty_tpl->tpl_vars['plugin'] = new Smarty_Variable;
 $_from = $_smarty_tpl->tpl_vars['backend_welcome']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
 $_smarty_tpl->tpl_vars['data']->total= $_smarty_tpl->_count($_from);
foreach ($_from as $_smarty_tpl->tpl_vars['data']->key => $_smarty_tpl->tpl_vars['data']->value){
$_smarty_tpl->tpl_vars['data']->_loop = true;
 $_smarty_tpl->tpl_vars['plugin']->value = $_smarty_tpl->tpl_vars['data']->key;
?>
          <?php if (!empty($_smarty_tpl->tpl_vars['data']->value['controls'])||!empty($_smarty_tpl->tpl_vars['data']->value['name'])){?>
              <div class="field-group">
                  
                      <label>
                          <input type="<?php if ($_smarty_tpl->tpl_vars['data']->total>1){?>radio<?php }else{ ?>hidden<?php }?>" name="plugin" value="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['plugin']->value, ENT_QUOTES, 'UTF-8', true);?>
"/>
                          
                      </label>
                  
                  
                  <?php echo $_smarty_tpl->tpl_vars['data']->value['controls'];?>

              </div>
          <?php }?>
      </div>
      <?php } ?>
      <?php }?>

      <div class="field-group">
        <div class="field">
            <div class="value submit">
            <?php echo $_smarty_tpl->tpl_vars['wa']->value->csrf();?>

            <input type="submit" class="button green" value="Начать работу"> или <a href="?action=products&skipwelcome=1">пропустить автоматическую настройку</a>
            </div>
        </div>
      </div>
    </div>
  </form>
</div>

<script type="text/javascript" src="<?php echo $_smarty_tpl->tpl_vars['wa_app_static_url']->value;?>
js/backend/welcome.js?<?php echo $_smarty_tpl->tpl_vars['wa']->value->version();?>
"></script><?php }} ?>