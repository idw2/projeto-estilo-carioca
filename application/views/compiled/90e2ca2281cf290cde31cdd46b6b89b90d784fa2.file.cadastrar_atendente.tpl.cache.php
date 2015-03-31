<?php /* Smarty version Smarty-3.1.19, created on 2014-09-29 14:00:29
         compiled from "/home/maria951/public_html/novo/application/views/admin/cadastrar_atendente.tpl" */ ?>
<?php /*%%SmartyHeaderCode:5407066415429902de23d41-54095097%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '90e2ca2281cf290cde31cdd46b6b89b90d784fa2' => 
    array (
      0 => '/home/maria951/public_html/novo/application/views/admin/cadastrar_atendente.tpl',
      1 => 1412001556,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '5407066415429902de23d41-54095097',
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
  'unifunc' => 'content_5429902df354b2_02297564',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5429902df354b2_02297564')) {function content_5429902df354b2_02297564($_smarty_tpl) {?><?php echo $_smarty_tpl->getSubTemplate ("admin/header.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 9999, null, array(), 0);?>


<div class="sidebar">
    <?php echo $_smarty_tpl->getSubTemplate ("admin/navbar.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 9999, null, array(), 0);?>

</div>
<div class="content">
    <div class="row">
        <div class="col-md-12">
            <div class="pull-left">
                <?php echo $_smarty_tpl->getSubTemplate ("admin/logo.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 9999, null, array(), 0);?>

            </div>
            <!-- <?php echo $_smarty_tpl->getSubTemplate ("admin/search.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 9999, null, array(), 0);?>
 -->
        </div>
    </div>
    <div class="row">
        <div class="col-md-12">

            <form class="navbar-form navbar-left" style="width: 100%" action="/<?php echo $_smarty_tpl->tpl_vars['language']->value;?>
/admin/cadastrar_atendente" method="post">


                <div class="row">
                    <div class="col-md-6 text-left">
                        <h2><span class="label label-default">Cadastro de Atendente</span></h2>
                    </div>
                    <br/>
                    <div class="col-md-6 text-right">
                        <a href="/<?php echo $_smarty_tpl->tpl_vars['language']->value;?>
/admin/atendentes_lista" class="btn btn-default navbar-btn"><i class="fa fa-reply">&nbsp</i> Voltar</a>
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-6 text-left">
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

                    </div>
                    <div class="col-md-6 text-right"></div>
                </div>


                <div class="row">

                    <div class="col-md-12 text-left">

                        <p><input type="text" class="form-control" id="nome" name="nome" maxlength="40" value="<?php echo $_smarty_tpl->tpl_vars['nome']->value;?>
" placeholder="Nome completo"/></p>
                        <p><input type="text" class="form-control" id="email" name="email" maxlength="70" value="<?php echo $_smarty_tpl->tpl_vars['email']->value;?>
" placeholder="E-mail"/></p>
                        <p><input type="password" class="form-control" id="senha" name="senha" maxlength="70" value="" placeholder="Senha"/></p>
                        <h4>Sexo</h4>
                        <p>
                            <select name="sexo" class="form-control">
                                <option value="M">Masculino</option>
                                <option value="F">Feminino</option>
                            </select>
                        </p>
                        <h4>
                            <?php if ($_smarty_tpl->tpl_vars['termos']->value=='') {?>
                                <input type="checkbox" name="status"/> Ativo
                            <?php } else { ?>
                                <input type="checkbox" name="status" checked="true"/> Ativo
                            <?php }?>    
                        </h4>
                        <p><button type="submit" class="btn btn-primary" name="enviar">ENVIAR</button></p>

                    </div>

                </div>

        </div>


        </form>
    </div>
</div>
</div>
<?php echo $_smarty_tpl->getSubTemplate ("admin/tinymce_2.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 9999, null, array(), 0);?>

<?php echo $_smarty_tpl->getSubTemplate ("admin/footer.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 9999, null, array(), 0);?>
<?php }} ?>
