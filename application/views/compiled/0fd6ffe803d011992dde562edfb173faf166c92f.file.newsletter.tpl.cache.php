<?php /* Smarty version Smarty-3.1.19, created on 2014-10-17 12:30:39
         compiled from "/home/maria951/public_html/novo/application/views/newsletter.tpl" */ ?>
<?php /*%%SmartyHeaderCode:5209134355441361fe5b2b3-97950971%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '0fd6ffe803d011992dde562edfb173faf166c92f' => 
    array (
      0 => '/home/maria951/public_html/novo/application/views/newsletter.tpl',
      1 => 1411582696,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '5209134355441361fe5b2b3-97950971',
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
  'unifunc' => 'content_5441361ff0da55_82251962',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5441361ff0da55_82251962')) {function content_5441361ff0da55_82251962($_smarty_tpl) {?><?php echo $_smarty_tpl->getSubTemplate ("header.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 9999, null, array(), 0);?>


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

                <h2><span class="label label-default">Newsletter</span></h2>
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
