<?php /* Smarty version Smarty-3.1.19, created on 2015-03-13 18:58:34
         compiled from "/home/estil450/public_html/application/views/admin/editar.tpl" */ ?>
<?php /*%%SmartyHeaderCode:11867421435503335a5c2400-59535193%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'df8fe9f2a6bd7119070b0af370378ea788e59ef5' => 
    array (
      0 => '/home/estil450/public_html/application/views/admin/editar.tpl',
      1 => 1425662769,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '11867421435503335a5c2400-59535193',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'language' => 0,
    'erro' => 0,
    'sucesso' => 0,
    'produto' => 0,
    'foto_destaque' => 0,
    'email_restricao' => 0,
    'web_files' => 0,
    'rotulos' => 0,
    'i' => 0,
    'rotulo' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.19',
  'unifunc' => 'content_5503335a7e3484_44636607',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5503335a7e3484_44636607')) {function content_5503335a7e3484_44636607($_smarty_tpl) {?><?php if (!is_callable('smarty_function_counter')) include '/home/estil450/public_html/libraries/plugins/function.counter.php';
?><?php echo $_smarty_tpl->getSubTemplate ("admin/header.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 9999, null, array(), 0);?>


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
                <i class="fa fa-child"></i>  Editar Produtos
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

                                            <div class="page-header">
                                                <h1>Preview - <?php echo $_smarty_tpl->tpl_vars['produto']->value->NOME;?>
 - R$ <?php echo $_smarty_tpl->tpl_vars['produto']->value->PRECO;?>
 </h1>
                                            </div>
                                            <?php if ($_smarty_tpl->tpl_vars['foto_destaque']->value=='') {?>
                                                <img src="http://placehold.it/400x400" alt="" border="0" title="" class="img-thumbnail"/>
                                            <?php } else { ?>
                                                <img src="<?php echo $_smarty_tpl->tpl_vars['foto_destaque']->value;?>
" alt="" border="0" title="" class="img-thumbnail"/>
                                            <?php }?> 
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-lg-12">
                                <div class="panel panel-green">
                                    <div class="panel-heading">
                                        <h3 class="panel-title"><i class="fa fa-long-arrow-right"></i> Produto</h3>
                                    </div>
                                    <div class="panel-body">
                                        <div class="flot-chart">

                                            <div class="input-group input-group-lg" style="margin-bottom: 1%;">
                                                <input type="text" class="form-control" id="de" name="de" placeholder="De" value="<?php echo $_smarty_tpl->tpl_vars['produto']->value->DE;?>
"  onkeypress="formataValor(event, this, 12);" onkeydown="backspaceFormataValor(event, this)" <?php if ($_smarty_tpl->tpl_vars['email_restricao']->value=="fabiano@mariadebarro.com.br"||$_smarty_tpl->tpl_vars['email_restricao']->value=="thais@mariadebarro.com.br") {?>readonly="readonly"<?php }?>/>
                                            </div>	
                                            <br/>
                                            <div class="input-group input-group-lg" style="margin-bottom: 1%;">
                                                <input type="text" class="form-control" id="preco" name="preco" placeholder="Para" value="<?php echo $_smarty_tpl->tpl_vars['produto']->value->PRECO;?>
" onkeypress="formataValor(event, this, 12);" onkeydown="backspaceFormataValor(event, this)" <?php if ($_smarty_tpl->tpl_vars['email_restricao']->value=="fabiano@mariadebarro.com.br"||$_smarty_tpl->tpl_vars['email_restricao']->value=="thais@mariadebarro.com.br") {?>readonly="readonly"<?php }?>/>
                                            </div>	
                                            <br/>
                                            	
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

                                            <div class="input-group input-group-lg">
                                                <div>Categoria</div>
                                                <select name="categoria" class="form-control">
                                                    <option value="junior" <?php if ($_smarty_tpl->tpl_vars['produto']->value->CATEGORIA=="junior") {?>selected<?php }?>>Junior</option>
                                                    <option value="nilton-santos" <?php if ($_smarty_tpl->tpl_vars['produto']->value->CATEGORIA=="nilton-santos") {?>selected<?php }?>>Nilton Santos</option>
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
                                                <?php if (isset($_smarty_tpl->tpl_vars['rotulos']->value)) {?>
                                                    <thead>
                                                        <tr>
                                                            <th style="text-align: center">Rótulo</th>
                                                            <th style="text-align: center">Especificação</th>
                                                            
                                                            <th style="text-align: center">Quantidade</th>
                                                            <th style="text-align: center">Posição</th>
                                                        </tr>
                                                    </thead><tbody id="data">
                                                    <?php echo smarty_function_counter(array('assign'=>'i','start'=>0,'print'=>false),$_smarty_tpl);?>

                                                    <?php  $_smarty_tpl->tpl_vars['rotulo'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['rotulo']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['rotulos']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['rotulo']->key => $_smarty_tpl->tpl_vars['rotulo']->value) {
$_smarty_tpl->tpl_vars['rotulo']->_loop = true;
?>
                                                            <tr class="datagrid">
                                                                <td style='text-align: center'><input type='text' name='rotulo_<?php echo $_smarty_tpl->tpl_vars['i']->value;?>
' id='rotulo_<?php echo $_smarty_tpl->tpl_vars['i']->value;?>
' value='<?php echo $_smarty_tpl->tpl_vars['rotulo']->value->ROTULO;?>
'/></td>
                                                                <td style='text-align: center'><input type='text' name='especificacao_<?php echo $_smarty_tpl->tpl_vars['i']->value;?>
' id='especificacao_<?php echo $_smarty_tpl->tpl_vars['i']->value;?>
' value='<?php echo $_smarty_tpl->tpl_vars['rotulo']->value->ESPECIFICACAO;?>
'/></td>
                                                                
                                                                <td style='text-align: center'><input type='text' name='quantidade_<?php echo $_smarty_tpl->tpl_vars['i']->value;?>
' id='quantidade_<?php echo $_smarty_tpl->tpl_vars['i']->value;?>
' value='<?php echo $_smarty_tpl->tpl_vars['rotulo']->value->QUANTIDADE;?>
' onkeypress='return formataNumDV(event, this, 6);'/></td>
                                                                <td style='text-align: center'><input type='text' name='ordem_<?php echo $_smarty_tpl->tpl_vars['i']->value;?>
' id='ordem_<?php echo $_smarty_tpl->tpl_vars['i']->value;?>
' value='<?php echo $_smarty_tpl->tpl_vars['rotulo']->value->ORDEM;?>
' readonly='readonly'/></td>

                                                        <?php echo smarty_function_counter(array(),$_smarty_tpl);?>

                                                    <?php } ?>
                                                    </tbody>

                                                <?php } else { ?>    
                                                    <thead>
                                                        <tr>
                                                            <th style="text-align: center">Rótulo</th>
                                                            <th style="text-align: center">Especificação</th>
                                                            <th style="text-align: center">Exibir Cor?</th>
                                                            <th style="text-align: center">Cor</th>
                                                            <th style="text-align: center">Quantidade</th>
                                                            <th style="text-align: center">Posição</th>
                                                        </tr>
                                                    </thead>
                                                    <tbody id="data">
                                                        <tr class="datagrid">
                                                            <td style='text-align: center'><input type='text' name='rotulo_0' id='rotulo_0' value=''/></td>
                                                            <td style='text-align: center'><input type='text' name='especificacao_0' id='especificacao_0' value=''/></td>
                                                            <td style='text-align: center'><input type='checkbox' name='is_cor_0' id='is_cor_0'/></td>
                                                            <td style='text-align: center'>
                                                                <div class='input-group colorpicker-component demo-0 demo-auto colorpicker-element'>
                                                                    <input type="text" name='cor_0' id='cor_0' value="000000" class="form-control">
                                                                    <span class='input-group-addon'><i style='background-color: rgb(0, 0, 0);'></i></span>
                                                                </div>
                                                            </td>
                                                            <td style='text-align: center'><input type='text' name='quantidade_0' id='quantidade_0' value='' onkeypress='return formataNumDV(event, this, 6);'/></td>
                                                            <td style='text-align: center'><input type='text' name='ordem_0' id='ordem_0' value='1' readonly='readonly'/></td>
                                                        </tr>
                                                    </tbody>

                                                <?php }?>  
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

                                                <?php echo smarty_function_counter(array('assign'=>'i','start'=>0,'print'=>false),$_smarty_tpl);?>

                                                <?php  $_smarty_tpl->tpl_vars['rotulo'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['rotulo']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['rotulos']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['rotulo']->key => $_smarty_tpl->tpl_vars['rotulo']->value) {
$_smarty_tpl->tpl_vars['rotulo']->_loop = true;
?>
                                                    $(function() {
                                                        $('.demo-<?php echo $_smarty_tpl->tpl_vars['i']->value;?>
').colorpicker();
                                                    });
                                                    <?php echo smarty_function_counter(array(),$_smarty_tpl);?>

                                                <?php } ?>

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
                                                    <?php if ($_smarty_tpl->tpl_vars['produto']->value->DESCRICAO=='') {?>
                                                        <?php echo $_smarty_tpl->getSubTemplate ("admin/html_descricao.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 9999, null, array(), 0);?>
 
                                                    <?php } else { ?>
                                                        <?php echo $_smarty_tpl->tpl_vars['produto']->value->DESCRICAO;?>

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
                                                    <?php if ($_smarty_tpl->tpl_vars['produto']->value->ESPECIFICACOES=='') {?>
                                                        <?php echo $_smarty_tpl->getSubTemplate ("admin/html_especificacao.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 9999, null, array(), 0);?>
 
                                                    <?php } else { ?>
                                                        <?php echo $_smarty_tpl->tpl_vars['produto']->value->ESPECIFICACOES;?>

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
