<?php /* Smarty version Smarty-3.1.19, created on 2014-10-01 13:56:07
         compiled from "/home/maria951/public_html/novo/application/views/atendimento/panel.tpl" */ ?>
<?php /*%%SmartyHeaderCode:1536499479542c3227250a44-17108251%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '582026872ba7ddada85d317be533cbad43443f78' => 
    array (
      0 => '/home/maria951/public_html/novo/application/views/atendimento/panel.tpl',
      1 => 1412106378,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '1536499479542c3227250a44-17108251',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'mensagem' => 0,
    'codatendimento' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.19',
  'unifunc' => 'content_542c32272c0c93_11840757',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_542c32272c0c93_11840757')) {function content_542c32272c0c93_11840757($_smarty_tpl) {?><div style="padding: 20px 10px 0 10px; font-size: 18px; line-height: 2;">
    <h3 style="color: #df5d65; text-align: center;">Atendimento Online</h3>
    <div style="overflow-x: auto; height: 365px;" class="chat_text">
        <span style="display: inline-block; line-height: 1.2; font-size: 16px;"><strong style="color: #df5d65;">Mensagem automática: </strong><?php echo $_smarty_tpl->tpl_vars['mensagem']->value;?>
</span>
        <span style="display: inline-block; line-height: 1.2; font-size: 16px;"><strong class="timer_chat"></strong></span>
    </div>
    <span style="display: inline-block; height: 36px;">
        <div class="atendimento_loading hide"><img src="/web-files/img/Loader.GIF" alt="Carregando..." title="Carregando..." border="0" width="8%" style="opacity:1"/> digitando...</div>
    </span>
    <div class="input-group">
        <input type="hidden" name="codatendimento" id="codatendimento" value="<?php echo $_smarty_tpl->tpl_vars['codatendimento']->value;?>
"/>
        <input type="text" class="form-control" disabled/>
        <span class="input-group-btn">
            <button class="btn btn-primary" type="button" disabled>Enviar</button>
        </span>
    </div>
    
</div><?php }} ?>
