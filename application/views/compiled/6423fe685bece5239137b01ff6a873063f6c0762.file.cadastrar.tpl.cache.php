<?php /* Smarty version Smarty-3.1.19, created on 2014-10-22 17:05:05
         compiled from "/home/maria951/public_html/novo/application/views/admin/cadastrar.tpl" */ ?>
<?php /*%%SmartyHeaderCode:186519375447ffe1ac47d4-51286010%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '6423fe685bece5239137b01ff6a873063f6c0762' => 
    array (
      0 => '/home/maria951/public_html/novo/application/views/admin/cadastrar.tpl',
      1 => 1412200353,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '186519375447ffe1ac47d4-51286010',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'language' => 0,
    'erro' => 0,
    'sucesso' => 0,
    'descricao' => 0,
    'especificacoes' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.19',
  'unifunc' => 'content_5447ffe21cd1f1_75192803',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5447ffe21cd1f1_75192803')) {function content_5447ffe21cd1f1_75192803($_smarty_tpl) {?><?php echo $_smarty_tpl->getSubTemplate ("admin/header.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 9999, null, array(), 0);?>


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
/produtos/cadastrar" method="post">


                <div class="row">
                    <div class="col-md-6 text-left">
                        <h2><span class="label label-default">Cadastro de Produtos</span></h2>
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
                            <div class="auto-img"><img src="/web-files/img/img_default.png" alt="" border="0" title="" class="img-responsive"/></div>
                            <div class="row sp1"><div class="col-sm-12 sp2"></div></div>
                            <div class="auto-price text-center" style="text-decoration: line-through"> R$ <span class="view-preco-de">0,00</span></div>
                            <div class="auto-price text-center"> R$ <span class="view-preco">0,00</span></div>
                            <div class="auto-title text-center view-nome">ANEL ZIRCONIA DUPLO</div>
                            <div class="text-center">
                                <a onclick="return false;" class="btn btn-default navbar-btn eu-quero">Eu quero</a> 
                            </div>
                        </div>

                        <h4 class="panel-heading x-label">Produto</h4>
                        <div class="input-group input-group-lg" style="margin-bottom: 1%;">
                            <input type="text" class="form-control" id="de" name="de" placeholder="De" onkeypress="formataValor(event, this, 12);" onkeydown="backspaceFormataValor(event, this)"/>
                        </div>	
                        <br/>
                        <div class="input-group input-group-lg" style="margin-bottom: 1%;">
                            <input type="text" class="form-control" id="preco" name="preco" placeholder="Para" onkeypress="formataValor(event, this, 12);" onkeydown="backspaceFormataValor(event, this)"/>
                        </div>	
                        <br/>
                        <div class="input-group input-group-lg" style="margin-bottom: 1%;">
                            <input type="text" class="form-control" id="preco" name="quantidade" placeholder="Quantidade" onkeypress="return formataNumDV(event, this, 6);" />
                        </div>	
                        <br/>
                        <div class="input-group input-group-lg" style="margin-bottom: 1%;">
                            <input type="text" class="form-control" id="nome" name="nome" maxlength="40" placeholder="Nome"/>
                        </div>
                        <br/>
                        <div class="input-group input-group-lg" style="margin-bottom: 1%;">
                            <input type="text" class="form-control" id="referencia" name="referencia" maxlength="20" placeholder="Referência"/>
                        </div>
                        <br/>
                        <div class="input-group input-group-lg" style="margin-bottom: 1%;">
                            <input type="text" class="form-control" id="peso" name="peso" maxlength="8" placeholder="Peso" onkeydown="javascript: return mascaraPeso(this, event, 5, 3);"/>
                        </div>


                        <br/>
                        <h4 class="panel-heading x-label">Categoria</h4>
                        <div class="input-group input-group-lg">
                            <select name="categoria" class="form-control">
                                <option value="aneis">Anéis</option>
                                <option value="brincos">Brinco</option>
                                <option value="colares">Colares</option>
                                <option value="pulseiras">Pulseiras</option>
                                <option value="conjuntos">Conjuntos</option>
                            </select>
                        </div>                   

                        <br/> <br/>
                    </div>

                    <div class="col-md-5" style="padding-left: 0;">

                        <h4 class="panel-heading x-label">Descrição Rápida</h4>
                        <p><textarea class="form-control" rows="10" style="min-width: 100%" id="descricao" name="descricao"><?php echo $_smarty_tpl->tpl_vars['descricao']->value;?>
</textarea></p>
                        <br/> <br/>
                        <h4 class="panel-heading x-label">Mais Informações</h4>
                        <p><textarea class="form-control" rows="10" style="min-width: 100%" id="especificacoes" name="especificacoes"><?php echo $_smarty_tpl->tpl_vars['especificacoes']->value;?>
</textarea></p>
                        <br/> <br/>
                        <div class="input-group input-group-lg">
                            <button type="submit" class="btn btn-primary btn-lg btn-primary-maria" role="button">Enviar</button>
                        </div>

                    </div>
                    <div class="col-md-4" style="padding-left: 0;"></div>

                </div>

        </div>


        </form>
    </div>
</div>
</div>
<?php echo $_smarty_tpl->getSubTemplate ("admin/tinymce_2.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 9999, null, array(), 0);?>

<?php echo $_smarty_tpl->getSubTemplate ("admin/footer.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 9999, null, array(), 0);?>
<?php }} ?>
