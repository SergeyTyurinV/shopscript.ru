<?php /* Smarty version Smarty-3.1.14, created on 2017-09-29 16:24:37
         compiled from "Z:\home\shopscript.ru\www\wa-apps\site\themes\default\main.html" */ ?>
<?php /*%%SmartyHeaderCode:3257559ce2d753d00e2-06871003%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '232d0e698038d611f190197e9ac76f5cbef82f0e' => 
    array (
      0 => 'Z:\\home\\shopscript.ru\\www\\wa-apps\\site\\themes\\default\\main.html',
      1 => 1452519804,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '3257559ce2d753d00e2-06871003',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'wa' => 0,
    'wa_app_url' => 0,
    'page' => 0,
    'wa_backend_url' => 0,
    'content' => 0,
    'action' => 0,
    'theme_settings' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.14',
  'unifunc' => 'content_59ce2d7550ad76_03620999',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_59ce2d7550ad76_03620999')) {function content_59ce2d7550ad76_03620999($_smarty_tpl) {?><?php if ($_smarty_tpl->tpl_vars['wa']->value->currentUrl()==$_smarty_tpl->tpl_vars['wa_app_url']->value&&(empty($_smarty_tpl->tpl_vars['page']->value['id'])&&empty($_smarty_tpl->tpl_vars['page']->value['content']))){?>    

    <div class="welcome">
        <h1>Добро пожаловать на ваш новый сайт!</h1>
        <p><?php echo sprintf('Начните с <a href="%s">создания страницы</a> в бекенде сайта.',($_smarty_tpl->tpl_vars['wa_backend_url']->value).('site/#/pages/'));?>
</p>
    </div>
    
<?php }else{ ?>

    <article class="content with-sidebar" itemscope itemtype="http://schema.org/WebPage">   
        <?php echo $_smarty_tpl->tpl_vars['content']->value;?>
 
    </article>

    <?php if (!empty($_smarty_tpl->tpl_vars['action']->value)&&$_smarty_tpl->tpl_vars['action']->value=='page'){?>
    <div class="content">
    
        <!-- FOLLOW -->
        <aside class="connect inline">
            <?php if (!empty($_smarty_tpl->tpl_vars['theme_settings']->value['facebook_likebox_code'])){?>
                <div class="likebox">
                    <?php echo $_smarty_tpl->tpl_vars['theme_settings']->value['facebook_likebox_code'];?>

                </div>
            <?php }?>
            <?php if (!empty($_smarty_tpl->tpl_vars['theme_settings']->value['twitter_timeline_code'])){?>
                <div class="likebox">
                    <?php echo $_smarty_tpl->tpl_vars['theme_settings']->value['twitter_timeline_code'];?>

                </div>
            <?php }?>
            <?php if (!empty($_smarty_tpl->tpl_vars['theme_settings']->value['vk_widget_code'])){?>
                <div class="likebox">
                    <?php echo $_smarty_tpl->tpl_vars['theme_settings']->value['vk_widget_code'];?>

                </div>
            <?php }?>
            
        </aside>
        
    </div>
    <?php }?>

<?php }?><?php }} ?>