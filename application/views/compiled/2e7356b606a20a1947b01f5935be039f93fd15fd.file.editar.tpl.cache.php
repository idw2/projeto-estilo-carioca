<?php /* Smarty version Smarty-3.1.19, created on 2014-10-23 15:19:59
         compiled from "/home/maria951/public_html/novo/application/views/admin/editar.tpl" */ ?>
<?php /*%%SmartyHeaderCode:524713690544938bfbb6e93-67903305%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '2e7356b606a20a1947b01f5935be039f93fd15fd' => 
    array (
      0 => '/home/maria951/public_html/novo/application/views/admin/editar.tpl',
      1 => 1412200398,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '524713690544938bfbb6e93-67903305',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'language' => 0,
    'url_amigavel' => 0,
    'erro' => 0,
    'sucesso' => 0,
    'foto_destaque' => 0,
    'produto' => 0,
    'active_1' => 0,
    'active_2' => 0,
    'active_3' => 0,
    'active_4' => 0,
    'active_5' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.19',
  'unifunc' => 'content_544938bfd005e6_45015282',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_544938bfd005e6_45015282')) {function content_544938bfd005e6_45015282($_smarty_tpl) {?><?php echo $_smarty_tpl->getSubTemplate ("admin/header.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 9999, null, array(), 0);?>


<div class="sidebar">
    <?php echo $_smarty_tpl->getSubTemplate ("admin/navbar.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 9999, null, array(), 0);?>

</div>
<div class="content">
    <div class="row">
        <div class="col-md-12">
            <div class="pull-left">
                <?php echo $_smarty_tpl->getSubTemplate ("admin/logo.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 9999, null, array(), 0);?>

            </div>
            <?php echo $_smarty_tpl->getSubTemplate ("admin/search.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 9999, null, array(), 0);?>

        </div>
    </div>
    <div class="row">
        <div class="col-md-12">

            <form class="navbar-form navbar-left" style="width: 100%" action="/<?php echo $_smarty_tpl->tpl_vars['language']->value;?>
/produtos/editar/<?php echo $_smarty_tpl->tpl_vars['url_amigavel']->value;?>
" method="post">

                <div class="row">
                    <div class="col-md-6 text-left">
                        <h2><span class="label label-default">Editar Produto</span></h2>
                    </div>
                    <br/>
                    <div class="col-md-6 text-right">
                        <a href="/<?php echo $_smarty_tpl->tpl_vars['language']->value;?>
/produtos/produtos_lista" class="btn btn-default navbar-btn"><i class="fa fa-reply">&nbsp</i> Voltar</a>
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

                    <div class="col-md-3 text-left">

                        <h4 class="panel-heading x-label">Preview</h4>
                        <div class="thumbnail env-produto" style="margin: 0;"> 
                            <?php if ($_smarty_tpl->tpl_vars['foto_destaque']->value=='') {?>
                                <div class="auto-img"><img src="/web-files/img/img_default.png" alt="" border="0" title="" class="img-responsive"/></div>
                                <?php } else { ?>
                                <div class="auto-img"><img src="<?php echo $_smarty_tpl->tpl_vars['foto_destaque']->value;?>
" alt="" border="0" title="" class="img-responsive"/></div>
                                <?php }?>  
                            <div class="row sp1"><div class="col-sm-12 sp2"></div></div>
                            <div class="auto-price text-center"> R$ <span class="view-preco"><?php echo $_smarty_tpl->tpl_vars['produto']->value->PRECO;?>
</span></div>
                            <div class="auto-title text-center view-nome"><?php echo $_smarty_tpl->tpl_vars['produto']->value->NOME;?>
</div>
                            <div class="text-center">
                                <a onclick="return false;" class="btn btn-default navbar-btn eu-quero">Eu quero</a> 
                            </div>
                        </div>

                        <h4 class="panel-heading x-label">Produtos</h4>
                        <div class="input-group input-group-lg" style="margin-bottom: 1%;">
                            <input type="text" class="form-control" id="de" name="de" placeholder="De" value="<?php echo $_smarty_tpl->tpl_vars['produto']->value->DE;?>
"  onkeypress="formataValor(event, this, 12);" onkeydown="backspaceFormataValor(event, this)"/>
                        </div>	
                        <br/>
                        <div class="input-group input-group-lg" style="margin-bottom: 1%;">
                            <input type="text" class="form-control" id="preco" name="preco" placeholder="Para" value="<?php echo $_smarty_tpl->tpl_vars['produto']->value->PRECO;?>
" onkeypress="formataValor(event, this, 12);" onkeydown="backspaceFormataValor(event, this)"/>
                        </div>	
                        <br/>
                        <div class="input-group input-group-lg" style="margin-bottom: 1%;">
                            <input type="text" class="form-control" id="preco" name="quantidade" placeholder="Quantidade" value="<?php echo $_smarty_tpl->tpl_vars['produto']->value->QUANTIDADE;?>
" onkeypress="return formataNumDV(event, this, 6);" />
                        </div>	
                        <br/>
                        <div class="input-group input-group-lg" style="margin-bottom: 1%;">
                            <input type="text" class="form-control" id="nome" name="nome" maxlength="40" value="<?php echo $_smarty_tpl->tpl_vars['produto']->value->NOME;?>
" placeholder="Nome"/>
                        </div>	
                        <br/>
                        <div class="input-group input-group-lg" style="margin-bottom: 1%;">
                            <input type="text" class="form-control" id="referencia" name="referencia" maxlength="20" value="<?php echo $_smarty_tpl->tpl_vars['produto']->value->REFERENCIA;?>
" placeholder="Referência"/>
                        </div>
                        <br/>
                        <div class="input-group input-group-lg" style="margin-bottom: 1%;">
                            <input type="text" class="form-control" id="peso" name="peso" maxlength="8" value="<?php echo $_smarty_tpl->tpl_vars['produto']->value->PESO;?>
" placeholder="Peso" onkeydown="javascript: return mascaraPeso(this, event, 5, 3);"/>
                        </div>

                        <br/>
                        <h4 class="panel-heading x-label">Categoria</h4>
                        <div class="input-group input-group-lg">

                            <?php if ($_smarty_tpl->tpl_vars['produto']->value->CATEGORIA=="aneis") {?>
                                <?php $_smarty_tpl->tpl_vars['active_1'] = new Smarty_variable("selected", null, 0);?>
                            <?php } elseif ($_smarty_tpl->tpl_vars['produto']->value->CATEGORIA=="brincos") {?>    
                                <?php $_smarty_tpl->tpl_vars['active_2'] = new Smarty_variable("selected", null, 0);?>
                            <?php } elseif ($_smarty_tpl->tpl_vars['produto']->value->CATEGORIA=="colares") {?>    
                                <?php $_smarty_tpl->tpl_vars['active_3'] = new Smarty_variable("selected", null, 0);?>
                            <?php } elseif ($_smarty_tpl->tpl_vars['produto']->value->CATEGORIA=="pulseiras") {?>    
                                <?php $_smarty_tpl->tpl_vars['active_4'] = new Smarty_variable("selected", null, 0);?>
                            <?php } else { ?>
                                <?php $_smarty_tpl->tpl_vars['active_5'] = new Smarty_variable("selected", null, 0);?> 
                            <?php }?>    

                            <select name="categoria" class="form-control">

                                <option value="aneis" <?php echo $_smarty_tpl->tpl_vars['active_1']->value;?>
>Anéis</option>
                                <option value="brincos" <?php echo $_smarty_tpl->tpl_vars['active_2']->value;?>
>Brinco</option>
                                <option value="colares" <?php echo $_smarty_tpl->tpl_vars['active_3']->value;?>
>Colares</option>
                                <option value="pulseiras" <?php echo $_smarty_tpl->tpl_vars['active_4']->value;?>
>Pulseiras</option>
                                <option value="conjuntos" <?php echo $_smarty_tpl->tpl_vars['active_5']->value;?>
>Conjuntos</option>

                            </select>
                        </div>

                    </div>

                    <div class="col-md-5" style="padding-left: 0;">

                        <h4 class="panel-heading x-label">Descrição Rápida</h4>
                        <p><textarea class="form-control" rows="10" style="min-width: 100%" id="descricao" name="descricao"><?php echo $_smarty_tpl->tpl_vars['produto']->value->DESCRICAO;?>
</textarea></p>
                        <br/> <br/>
                        <h4 class="panel-heading x-label">Mais Informações</h4>
                        <p><textarea class="form-control" rows="10" style="min-width: 100%" id="especificacoes" name="especificacoes"><?php echo $_smarty_tpl->tpl_vars['produto']->value->ESPECIFICACOES;?>
</textarea></p>
                        <br/> <br/>

                        <div class="input-group input-group-lg">
                            <button type="submit" class="btn btn-primary btn-lg btn-primary-maria" role="button">Enviar</button>
                        </div>

                    </div> 
                    <div class="col-md-4" style="padding-left: 0;"></div>

                </div>


            </form>
        </div>
    </div>
</div>
<?php echo $_smarty_tpl->getSubTemplate ("admin/tinymce_2.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 9999, null, array(), 0);?>

<?php echo $_smarty_tpl->getSubTemplate ("admin/footer.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 9999, null, array(), 0);?>
<?php }} ?>
