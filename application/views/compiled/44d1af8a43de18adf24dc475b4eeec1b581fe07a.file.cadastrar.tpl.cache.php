<?php /* Smarty version Smarty-3.1.19, created on 2015-03-25 22:16:55
         compiled from "/home/estil450/public_html/application/views/admin/cadastrar.tpl" */ ?>
<?php /*%%SmartyHeaderCode:349158457551333d7697a61-49364807%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '44d1af8a43de18adf24dc475b4eeec1b581fe07a' => 
    array (
      0 => '/home/estil450/public_html/application/views/admin/cadastrar.tpl',
      1 => 1425575521,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '349158457551333d7697a61-49364807',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'language' => 0,
    'erro' => 0,
    'sucesso' => 0,
    'de' => 0,
    'preco' => 0,
    'nome' => 0,
    'referencia' => 0,
    'peso' => 0,
    'categoria' => 0,
    'web_files' => 0,
    'descricao' => 0,
    'especificacoes' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.19',
  'unifunc' => 'content_551333d7846a97_04205236',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_551333d7846a97_04205236')) {function content_551333d7846a97_04205236($_smarty_tpl) {?><?php echo $_smarty_tpl->getSubTemplate ("admin/header.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 9999, null, array(), 0);?>


<div class="sidebar">
    <?php echo $_smarty_tpl->getSubTemplate ("admin/navbar.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 9999, null, array(), 0);?>

</div>

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
    <div class="col-lg-12">
        <h1 class="page-header">
            Cadastro de Produtos
        </h1>
        <ol class="breadcrumb">
            <li>
                <i class="fa fa-home"></i>  <a href="/<?php echo $_smarty_tpl->tpl_vars['language']->value;?>
/admin/welcome">Home</a>
            </li>
            <li>
                <i class="fa fa-paper-plane"></i>  <a href="/<?php echo $_smarty_tpl->tpl_vars['language']->value;?>
/produtos/produtos-lista">Lista de Produtos</a>
            </li>
            <li class="active">
                <i class="fa fa-child"></i>  Cadastro de Produtos
            </li>
        </ol>
    </div>
</div>    

<div class="row">
    <div class="col-md-12 text-left">
        <?php if ($_smarty_tpl->tpl_vars['erro']->value=='') {?>
            <div class="alert alert-info alert-dismissable" role="alert"><strong>Atenção: </strong>Preencher todos os campos!</div>
        <?php } else { ?>
            <?php if ($_smarty_tpl->tpl_vars['sucesso']->value==false) {?>
                <div class="alert alert-danger" role="alert"><strong>Atenção: </strong><?php echo $_smarty_tpl->tpl_vars['erro']->value;?>
</div>
            <?php } else { ?>
                <div class="alert alert-success" role="alert"><?php echo $_smarty_tpl->tpl_vars['erro']->value;?>
</div>	
            <?php }?>
        <?php }?>
    </div>
</div>            

<div class="row">
    <div class="col-md-12">

        <div class="row">
            <br/>
            <div class="col-md-12 text-right">
                <?php $_smarty_tpl->tpl_vars["link_btn_voltar"] = new Smarty_variable("/".((string)$_smarty_tpl->tpl_vars['language']->value)."/produtos/produtos-lista", null, 0);?>
                <?php echo $_smarty_tpl->getSubTemplate ("admin/btn_voltar.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 9999, null, array(), 0);?>
                
            </div>
        </div>

    </div>
</div>            

<div class="row">
    <div class="col-lg-12">
        <div class="panel panel-default">
            <div class="panel-body">
                <div class="row">
                    <form class="navbar-form navbar-left" style="width: 100%" method="post">
                        <div class="row">
                            <div class="col-lg-12">
                                <div class="panel panel-green">
                                    <div class="panel-heading">
                                        <h3 class="panel-title"><i class="fa fa-long-arrow-right"></i> Produto</h3>
                                    </div>
                                    <div class="panel-body">
                                        <div class="flot-chart">

                                            <div class="input-group input-group-lg" style="margin-bottom: 1%;">
                                                <input type="text" class="form-control" id="de" name="de" value='<?php echo $_smarty_tpl->tpl_vars['de']->value;?>
' placeholder="De" onkeypress="formataValor(event, this, 12);" onkeydown="backspaceFormataValor(event, this)"/>
                                            </div>	
                                            <br/>
                                            <div class="input-group input-group-lg" style="margin-bottom: 1%;">
                                                <input type="text" class="form-control" id="preco" name="preco" value='<?php echo $_smarty_tpl->tpl_vars['preco']->value;?>
' placeholder="Para" onkeypress="formataValor(event, this, 12);" onkeydown="backspaceFormataValor(event, this)"/>
                                            </div>	
                                            <br/>
                                            
                                            <div class="input-group input-group-lg" style="margin-bottom: 1%;">
                                                <input type="text" class="form-control" id="nome" name="nome" value='<?php echo $_smarty_tpl->tpl_vars['nome']->value;?>
' maxlength="40" placeholder="Nome"/>
                                            </div>
                                            <br/>
                                            <div class="input-group input-group-lg" style="margin-bottom: 1%;">
                                                <input type="text" class="form-control" id="referencia" name="referencia" value='<?php echo $_smarty_tpl->tpl_vars['referencia']->value;?>
' maxlength="20" placeholder="Referência"/>
                                            </div>
                                            <br/>
                                            <div class="input-group input-group-lg" style="margin-bottom: 1%;">
                                                <input type="text" class="form-control" id="peso" name="peso" maxlength="8" value='<?php echo $_smarty_tpl->tpl_vars['peso']->value;?>
' placeholder="Peso" onkeydown="javascript: return mascaraPeso(this, event, 5, 3);"/>
                                            </div>


                                            <br/>

                                            <div class="input-group input-group-lg">
                                                <div>Categoria</div>
                                                <select name="categoria" class="form-control">
                                                    <option value="junior" <?php if ($_smarty_tpl->tpl_vars['categoria']->value=="junior") {?>selected<?php }?>>Junior</option>
                                                    <option value="nilton-santos" <?php if ($_smarty_tpl->tpl_vars['categoria']->value=="nilton-santos") {?>selected<?php }?>>Nilton Santos</option>
                                                </select>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-lg-12">
                                <div class="panel panel-primary">
                                    <div class="panel-heading">
                                        <h3 class="panel-title"><i class="fa fa-long-arrow-right"></i> Gerenciamento de Rótulos - <img src="<?php echo $_smarty_tpl->tpl_vars['web_files']->value;?>
/img/less.png" id="less" data-toggle="tooltip" border="0" alt="" title="Retirar Linha"> <img src="<?php echo $_smarty_tpl->tpl_vars['web_files']->value;?>
/img/plus.png" id="plus" data-toggle="tooltip" border="0" alt="" title="Adicionar Linha"></h3>
                                    </div>
                                    <div class="panel-body">
                                        <div class="flot-chart">
                                            <table class="table">
                                                <thead>
                                                    <tr>
                                                        <th style="text-align: center">Rótulo</th>
                                                        <th style="text-align: center">Especificação</th>
                                                        
                                                        <th style="text-align: center">Quantidade</th>
                                                        <th style="text-align: center">Posição</th>
                                                    </tr>
                                                </thead>
                                                <tbody id="data">
                                                    <tr class="datagrid">
                                                        <td style='text-align: center'><input type='text' name='rotulo_0' id='rotulo_0' value=''/></td>
                                                        <td style='text-align: center'><input type='text' name='especificacao_0' id='especificacao_0' value=''/></td>
                                                        
                                                        <td style='text-align: center'><input type='text' name='quantidade_0' id='quantidade_0' value='' onkeypress='return formataNumDV(event, this, 6);'/></td>
                                                        <td style='text-align: center'><input type='text' name='ordem_0' id='ordem_0' value='1' readonly='readonly'/></td>
                                                    </tr>
                                                </tbody>
                                            </table>
                                            <style>
                                                .colorpicker{
                                                    margin-top: -40px;
                                                    margin-left: 6px;
                                                }
                                            </style>
                                            <script>
                                                $(document).ready(function() {
                                                    $("#less").click(function() {
                                                        datagrid_less()
                                                    });
                                                    $("#plus").click(function() {
                                                        datagrid_plus()
                                                    });

                                                    $(function() {
                                                        $('.demo-0').colorpicker();
                                                    });

                                                });

                                                function datagrid_less() {
                                                    var n = 0;
                                                    $("#data .datagrid").each(function(i) {
                                                        n = i;
                                                    });
                                                    var qntdd = (parseInt(n) - 1);

                                                    if (qntdd > -1) {
                                                        $("#data .datagrid:last").remove();
                                                    }

                                                }
                                                function datagrid_plus() {

                                                    var n = 0;
                                                    $("#data .datagrid").each(function(i) {
                                                        n = i;
                                                    });
                                                    var qntdd = (parseInt(n) + 1);

                                                    var str = "<tr class='datagrid'>";
                                                    str += "<td style='text-align: center'><input type='text' name='rotulo_" + qntdd + "' id='rotulo_" + qntdd + "' value=''/></td>";
                                                    str += "<td style='text-align: center'><input type='text' name='especificacao_" + qntdd + "' id='especificacao_" + qntdd + "' value=''/></td>";
                                                    //str += "<td style='text-align: center'><input type='checkbox' name='is_cor_" + qntdd + "' id='is_cor_" + qntdd + "'/></td>";
                                                    //str += "<td style='text-align: center'>";
                                                    //str += "<div class='input-group colorpicker-component demo-" + qntdd + " demo-auto colorpicker-element'>";
                                                    //str += "<input type='' name='cor_" + qntdd + "' id='cor_" + qntdd + "' value='#000000' class='form-control'>";
                                                    //str += "<span class='input-group-addon'><i style='background-color: rgb(0, 0, 0);'></i></span>";
                                                    //str += "</div>"; 
                                                    //str += "</td>";
                                                    str += "<td style='text-align: center'><input type='text' name='quantidade_" + qntdd + "' id='quantidade_" + qntdd + "' value='' onkeypress='return formataNumDV(event, this, 6);'/></td>";
                                                    str += "<td style='text-align: center'><input type='text' name='ordem_" + qntdd + "' id='ordem_" + qntdd + "' value='" + (qntdd + 1) + "' readonly='readonly'/></td>";
                                                    str += "</tr>";

                                                    $("#data").append(str);

                                                    $('.demo-' + qntdd).colorpicker();
                                                }
                                            </script>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-12">
                                <div class="panel panel-yellow">
                                    <div class="panel-heading">
                                        <h3 class="panel-title"><i class="fa fa-long-arrow-right"></i> Descrição Rápida - Apague a que não for necessária!</h3>
                                    </div>
                                    <div class="panel-body">
                                        <div class="flot-chart">
                                            <p>
                                                <textarea class="form-control" rows="18" style="min-width: 100%" id="descricao" name="descricao">                                
                                                    <?php if ($_smarty_tpl->tpl_vars['descricao']->value=='') {?>
                                                        <?php echo $_smarty_tpl->getSubTemplate ("admin/html_descricao.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 9999, null, array(), 0);?>
 
                                                    <?php } else { ?>                                
                                                        <?php echo $_smarty_tpl->tpl_vars['descricao']->value;?>

                                                    <?php }?>                           
                                                </textarea>
                                            </p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-12">
                                <div class="panel panel-red">
                                    <div class="panel-heading">
                                        <h3 class="panel-title"><i class="fa fa-long-arrow-right"></i> Mais Informações - Apague a que não for necessária ou edite!</h3>
                                    </div>
                                    <div class="panel-body">
                                        <div class="flot-chart">
                                            <p>
                                                <textarea class="form-control" rows="18" style="min-width: 100%" id="especificacoes" name="especificacoes">
                                                    <?php if ($_smarty_tpl->tpl_vars['especificacoes']->value=='') {?>
                                                        <?php echo $_smarty_tpl->getSubTemplate ("admin/html_especificacao.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 9999, null, array(), 0);?>
 
                                                    <?php } else { ?>                                
                                                        <?php echo $_smarty_tpl->tpl_vars['especificacoes']->value;?>

                                                    <?php }?>          
                                                </textarea>
                                            </p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-lg-12">
                                <div class="input-group input-group-lg">
                                    <?php echo $_smarty_tpl->getSubTemplate ("admin/btn_enviar.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 9999, null, array(), 0);?>

                                </div>
                            </div> 
                        </div>
                    </form>
                </div>

            </div>
        </div>
    </div>
</div> 

<?php echo $_smarty_tpl->getSubTemplate ("admin/tinymce_2.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 9999, null, array(), 0);?>

<?php echo $_smarty_tpl->getSubTemplate ("admin/footer.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 9999, null, array(), 0);?>
<?php }} ?>
