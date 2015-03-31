<?php /* Smarty version Smarty-3.1.19, created on 2015-03-17 21:54:51
         compiled from "/home/estil450/public_html/application/views/contato.tpl" */ ?>
<?php /*%%SmartyHeaderCode:5822898275508a2abe04627-32419611%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '001d0e3d176b06c9e902babe38423a134a24d8a3' => 
    array (
      0 => '/home/estil450/public_html/application/views/contato.tpl',
      1 => 1424813759,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '5822898275508a2abe04627-32419611',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'language' => 0,
    'erro' => 0,
    'sucesso' => 0,
    'nome' => 0,
    'email' => 0,
    'assunto' => 0,
    'mensagem' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.19',
  'unifunc' => 'content_5508a2abe91ac6_57699760',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5508a2abe91ac6_57699760')) {function content_5508a2abe91ac6_57699760($_smarty_tpl) {?><?php echo $_smarty_tpl->getSubTemplate ("header.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 9999, null, array(), 0);?>



<div class="container"></div>
<section class="section">
    <div class="container">
        <div class="row">
            <div class="section-title">
                <h2 class="title">FALE CONOSCO</h2>
                <p class="subtitle">--//--</p>
            </div>
        </div>
        <div class="row">
            <div class="col-md-6">

            <div class="jumbotron">
                <div class="container">

                    <!-- h1 e p que já tínhamos -->
                    <h2>Ainda está com problemas?</h2>
                    <br/>
                    <p><strong>E-mail:</strong><br/>
                        <span style='font-size: 20'>contato@estilocarioca.com.br</span>
                    </p><br/>
                    <br/>
                    <p><strong>Obs:</strong><br/>O prazo de respostas para as solicitações é de até 24h.</p><br/>

                </div>
            </div>
        </div> 

        <div class="col-md-6">
            <form class="navbar-form navbar-left" style="width: 100%" action="/<?php echo $_smarty_tpl->tpl_vars['language']->value;?>
/informacoes/contato" method="post">

                <?php if ($_smarty_tpl->tpl_vars['erro']->value=='') {?>

                    <div class="alert alert-success" role="alert"><strong>Atenção: </strong>Preencher todos os campos!</div>

                <?php } else { ?>

                    <?php if ($_smarty_tpl->tpl_vars['sucesso']->value=="FALSE") {?>
                        <div class="alert alert-danger" role="alert"><strong>Atenção: </strong><?php echo $_smarty_tpl->tpl_vars['erro']->value;?>
</div>
                    <?php } else { ?>
                        <div class="alert alert-success" role="alert"><?php echo $_smarty_tpl->tpl_vars['erro']->value;?>
</div>	
                    <?php }?>

                <?php }?>
                
                <p><input type="text" class="form-control" style="min-width: 100%" id="nome" name="nome" maxlength="40" value="<?php echo $_smarty_tpl->tpl_vars['nome']->value;?>
" placeholder="Nome completo"/></p>
                <p><input type="text" class="form-control" style="max-width: 47%" id="email" name="email" maxlength="70" value="<?php echo $_smarty_tpl->tpl_vars['email']->value;?>
" placeholder="E-mail"/></p>
                <p><input type="text" class="form-control" style="min-width: 100%" id="assunto" name="assunto" maxlength="70" value="<?php echo $_smarty_tpl->tpl_vars['assunto']->value;?>
" placeholder="Assunto"/></p>
                <p><textarea class="form-control" rows="5" style="min-width: 100%" id="mensagem" name="mensagem"><?php echo $_smarty_tpl->tpl_vars['mensagem']->value;?>
</textarea></p>
                <p><button type="submit" class="btn btn-primary btn-primary-maria" name="enviar">ENVIAR</button></p>

            </form>
        </div>
        </div>
    </div>
</section>

<div class="container">
    <br/>   
 <div class="row">
        
    </div>
</div>
<div style="clear: both;"></div>

<?php echo $_smarty_tpl->getSubTemplate ("footer.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 9999, null, array(), 0);?>
<?php }} ?>
