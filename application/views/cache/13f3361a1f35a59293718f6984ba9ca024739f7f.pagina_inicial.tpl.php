<?php /*%%SmartyHeaderCode:408715512542c694a04e733-40878267%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '13f3361a1f35a59293718f6984ba9ca024739f7f' => 
    array (
      0 => '/home/maria951/public_html/novo/application/views/atendimento/pagina_inicial.tpl',
      1 => 1412098508,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '408715512542c694a04e733-40878267',
  'variables' => 
  array (
    'nome' => 0,
    'email' => 0,
    'enviar_email' => 0,
    'erro' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.19',
  'unifunc' => 'content_542c694a0b9224_19866125',
  'cache_lifetime' => 120,
),true); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_542c694a0b9224_19866125')) {function content_542c694a0b9224_19866125($_smarty_tpl) {?><div style="padding: 15%; font-size: 18px; line-height: 2;">
<h3 style="color: #df5d65">Entre com seus dados!</h3>
<input type="text" class="form-control" name="nome" id="nome" value="" placeholder="Seu nome" style="margin-bottom: 9px;"/>
<input type="text" class="form-control" name="email" id="email" value=""  placeholder="Seu e-mail"/>
<input type="checkbox" name="enviar_email" id="enviar_email" /> Desejo que me envie esta conversa por e-mail assim que terminar.<br/>
<button type="button"  class="btn btn-primary" onclick="javascript:init_chat();" >Enviar</button>
<span class="atendimento_loading hide"><img src="/web-files/img/Loader.GIF" alt="Carregando..." title="Carregando..." border="0" width="20%" style="opacity:1"/></span>
<br/>
<strong class="atendimento_msg_erro"></strong>
</div><?php }} ?>
