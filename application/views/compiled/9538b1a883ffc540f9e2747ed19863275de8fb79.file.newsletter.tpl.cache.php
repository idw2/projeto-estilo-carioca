<?php /* Smarty version Smarty-3.1.19, created on 2015-02-04 07:56:58
         compiled from "/home/maria951/public_html/homolog/application/views/newsletter.tpl" */ ?>
<?php /*%%SmartyHeaderCode:85047382454d2252a21e1d3-93450978%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '9538b1a883ffc540f9e2747ed19863275de8fb79' => 
    array (
      0 => '/home/maria951/public_html/homolog/application/views/newsletter.tpl',
      1 => 1417410087,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '85047382454d2252a21e1d3-93450978',
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
    'termos' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.19',
  'unifunc' => 'content_54d2252a2cb548_22350227',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_54d2252a2cb548_22350227')) {function content_54d2252a2cb548_22350227($_smarty_tpl) {?><?php echo $_smarty_tpl->getSubTemplate ("header.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 9999, null, array(), 0);?>


<div class="container">
    <br/>   
    <div class="row">
        <div class="col-md-6">

            <div class="jumbotron">
                <div class="container">

                    <h2>Inscreva-se?</h2>
                    <br/>
                    <p>E receba periódicamente notícias do nosso site!</p><br/>

                </div>
            </div>
        </div> 

        <div class="col-md-6">
            <form class="navbar-form navbar-left" style="width: 100%" action="/<?php echo $_smarty_tpl->tpl_vars['language']->value;?>
/informacoes/newsletter" method="post">

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

                <h3 style="margin: 16px 0 12px">Newsletter</h3>
                <br/>
                <p><input type="text" class="form-control" style="min-width: 100%" id="nome" name="nome" maxlength="40" value="<?php echo $_smarty_tpl->tpl_vars['nome']->value;?>
" placeholder="Nome completo"/></p>
                <p><input type="text" class="form-control" style="max-width: 47%" id="email" name="email" maxlength="70" value="<?php echo $_smarty_tpl->tpl_vars['email']->value;?>
" placeholder="E-mail"/></p>
                <h4>Sexo</h4>
                <p>
                    <select name="sexo" class="form-control">
                        <option value="M">Masculino</option>
                        <option value="F">Feminino</option>
                    </select>
                </p>
                <h4>
                    <?php if ($_smarty_tpl->tpl_vars['termos']->value=='') {?>
                        <input type="checkbox" name="termos"/> Sim, ceito receber as notícias deste site por e-mail.
                    <?php } else { ?>
                        <input type="checkbox" name="termos" checked="true"/> Sim, aceito receber as notícias deste site por e-mail.    
                    <?php }?>    
                </h4>
                <p><button type="submit" class="btn btn-primary" name="enviar">ENVIAR</button></p>

            </form>
        </div>
                
    </div>
</div>
<div style="clear: both;"></div>


<?php echo $_smarty_tpl->getSubTemplate ("footer.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 9999, null, array(), 0);?>
<?php }} ?>
