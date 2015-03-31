<?php /* Smarty version Smarty-3.1.19, created on 2014-09-29 12:55:15
         compiled from "/home/maria951/public_html/novo/application/views/admin/editar_atendente.tpl" */ ?>
<?php /*%%SmartyHeaderCode:51618996542980e3314747-78651567%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'a7ade1795fded09eda80e6011f50ef5245700c39' => 
    array (
      0 => '/home/maria951/public_html/novo/application/views/admin/editar_atendente.tpl',
      1 => 1412006091,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '51618996542980e3314747-78651567',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'language' => 0,
    'email' => 0,
    'erro' => 0,
    'sucesso' => 0,
    'nome' => 0,
    'sexo' => 0,
    'status' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.19',
  'unifunc' => 'content_542980e33db756_27085631',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_542980e33db756_27085631')) {function content_542980e33db756_27085631($_smarty_tpl) {?><?php echo $_smarty_tpl->getSubTemplate ("admin/header.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 9999, null, array(), 0);?>


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
/admin/editar/<?php echo $_smarty_tpl->tpl_vars['email']->value;?>
" method="post">


                <div class="row">
                    <div class="col-md-6 text-left">
                        <h2><span class="label label-default">Editar Atendente</span></h2>
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
                        <h4>E-mail: <?php echo $_smarty_tpl->tpl_vars['email']->value;?>
</h4>
                        
                        <input type="checkbox" name="trocar_senha" id="trocar_senha"/> Trocar senha?
                        <p class="show_senha hide"><input type="password" class="form-control" id="senha" name="senha" maxlength="70" value="" placeholder="Senha"/></p>
                        
                        <h4>Sexo</h4>
                        <p>
                            <select name="sexo" class="form-control">
                                <option value="M" <?php if ($_smarty_tpl->tpl_vars['sexo']->value=="M") {?>selected<?php }?>>Masculino</option>
                                <option value="F" <?php if ($_smarty_tpl->tpl_vars['sexo']->value=="F") {?>selected<?php }?>>Feminino</option>
                            </select>
                        </p>
                        <h4>
                            <?php if ($_smarty_tpl->tpl_vars['status']->value==0) {?>
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
