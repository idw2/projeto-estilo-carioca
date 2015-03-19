<?php /* Smarty version Smarty-3.1.19, created on 2015-03-17 21:56:04
         compiled from "/home/estil450/public_html/application/views/descricao.tpl" */ ?>
<?php /*%%SmartyHeaderCode:19827755085508a2f40b6215-37967130%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'a66abc8fab60c2ac544c52d23b6dea710264fe16' => 
    array (
      0 => '/home/estil450/public_html/application/views/descricao.tpl',
      1 => 1426116894,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '19827755085508a2f40b6215-37967130',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'fotos_full' => 0,
    'i' => 0,
    'fful' => 0,
    'nome' => 0,
    'is_promocao' => 0,
    'de' => 0,
    'preco' => 0,
    'preco_6' => 0,
    'client_hidden' => 0,
    'codproduto' => 0,
    'rotulos' => 0,
    'rotulo' => 0,
    'referencia' => 0,
    'email_logon' => 0,
    'lista_desejos' => 0,
    'produto' => 0,
    'FOTO_SM' => 0,
    'language' => 0,
    'web_files' => 0,
    'descricao' => 0,
    'especificacoes' => 0,
    'site' => 0,
    'ctgr' => 0,
    'url_amigavel' => 0,
    'arr' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.19',
  'unifunc' => 'content_5508a2f440fcf8_86020852',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5508a2f440fcf8_86020852')) {function content_5508a2f440fcf8_86020852($_smarty_tpl) {?><?php if (!is_callable('smarty_function_counter')) include '/home/estil450/public_html/libraries/plugins/function.counter.php';
?><?php echo $_smarty_tpl->getSubTemplate ("header.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 9999, null, array(), 0);?>


<section class="section product">
    <div style="margin-top: 5%;"></div>
    <div class="container">
        <div class="row">
            <div class="col-sm-5">
                <figure class="product-img">

                    <div class="slider-for product-slider ">
                        <?php echo smarty_function_counter(array('assign'=>'i','start'=>0,'print'=>false),$_smarty_tpl);?>

                        <?php  $_smarty_tpl->tpl_vars['fful'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['fful']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['fotos_full']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['fful']->key => $_smarty_tpl->tpl_vars['fful']->value) {
$_smarty_tpl->tpl_vars['fful']->_loop = true;
?>
                            <?php if ($_smarty_tpl->tpl_vars['i']->value==0) {?>
                                <?php $_smarty_tpl->tpl_vars["FOTO_SM"] = new Smarty_variable(((string)$_smarty_tpl->tpl_vars['fful']->value->FOTO_LG), null, 0);?>
                            <?php }?>
                            <div>
                                <a  href="<?php echo $_smarty_tpl->tpl_vars['fful']->value->FOTO_LG;?>
" class="imagem-produto" rel="gallery">

                                    <img   src="<?php echo $_smarty_tpl->tpl_vars['fful']->value->FOTO_IT;?>
" alt="<?php echo $_smarty_tpl->tpl_vars['nome']->value;?>
" border="0" title="<?php echo $_smarty_tpl->tpl_vars['nome']->value;?>
" />
                                </a>
                                <a  href="<?php echo $_smarty_tpl->tpl_vars['fful']->value->FOTO_LG;?>
" class="imagem-produto-zoom fontawesome-zoom-in">

                                </a>
                            </div>
                            <?php echo smarty_function_counter(array(),$_smarty_tpl);?>

                        <?php } ?>

                    </div> 

                    <div class="slider-nav product-slider-nav">
                        <?php echo smarty_function_counter(array('assign'=>'i','start'=>0,'print'=>false),$_smarty_tpl);?>

                        <?php  $_smarty_tpl->tpl_vars['fful'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['fful']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['fotos_full']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['fful']->key => $_smarty_tpl->tpl_vars['fful']->value) {
$_smarty_tpl->tpl_vars['fful']->_loop = true;
?>
                            <div style="width: 130px !important;">
                                <img style="cursor:pointer;" width="100" height='100' src="<?php echo $_smarty_tpl->tpl_vars['fful']->value->FOTO_MD;?>
" alt="<?php echo $_smarty_tpl->tpl_vars['nome']->value;?>
" border="0" title="<?php echo $_smarty_tpl->tpl_vars['nome']->value;?>
" />
                            </div>
                            <?php echo smarty_function_counter(array(),$_smarty_tpl);?>

                        <?php } ?>
                    </div>
                </figure>
                

                
                

                
                
                
                

                
                
                
                

                


                
                
                
                
            </div>
            <div class="col-sm-7">
                <div class="product-infos">
                    <div class="product-infos-row">
                        <h1 class="title"><?php echo $_smarty_tpl->tpl_vars['nome']->value;?>
</h1>
                        <div class="price-rating">
                            <span class="estrelas e-5"></span>
                            <span class="price" style="text-align: right;">
                                <?php if ($_smarty_tpl->tpl_vars['is_promocao']->value==1) {?><span class="price-through">R$ <?php echo $_smarty_tpl->tpl_vars['de']->value;?>
</span><?php }?> <span style="float:right; margin-bottom: 10px">R$ <?php echo $_smarty_tpl->tpl_vars['preco']->value;?>
</span>
                                <br>
                                <span class="produto-parcelamento" style="font-size: 14px; text-align: right; display: inherit;">ou <strong>6x</strong> de <strong>R$ <?php echo $_smarty_tpl->tpl_vars['preco_6']->value;?>
</strong></span>
                            </span>
                        </div>
                    </div>


                    <div class="product-infos-row">   

                        <input type="hidden" id="client_hidden" name="client_hidden" value="<?php echo $_smarty_tpl->tpl_vars['client_hidden']->value;?>
"/>
                        <input type="hidden" id="codproduto" name="codproduto" value="<?php echo $_smarty_tpl->tpl_vars['codproduto']->value;?>
"/>
                        <table class="table table-datagrid">
                            <thead>
                                <tr>
                                    
                                </tr>
                                

                                <tr >
                                    <th style="border: 0; text-align: center; font-family: 'Roboto Condensed', 'Helvetica', 'sans-serif';font-weight: 400; letter-spacing: 1px;">TAMANHO</th>
                                    <th style="border: 0; text-align: center!important;font-family: 'Roboto Condensed', 'Helvetica', 'sans-serif';font-weight: 400; letter-spacing: 1px;"">QUANTIDADE</th>
                                    <th style="border: 0; text-align: center;font-family: 'Roboto Condensed', 'Helvetica', 'sans-serif';font-weight: 400; letter-spacing: 1px;""></th>
                                </tr>
                            </thead>
                            <tbody id="data">
                                <tr class="datagrid">
                                    <td>
                                        <div class='label-top inline-middle'>
                                            <select name='tamanho_0' id='tamanho_0' class='select select-loop' onchange='javascript:is_disponibilidade(this.value, this.name);'>
                                                <?php echo smarty_function_counter(array('assign'=>'i','start'=>0,'print'=>false),$_smarty_tpl);?>

                                                <option value='' selected></option>
                                                <?php  $_smarty_tpl->tpl_vars['rotulo'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['rotulo']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['rotulos']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['rotulo']->key => $_smarty_tpl->tpl_vars['rotulo']->value) {
$_smarty_tpl->tpl_vars['rotulo']->_loop = true;
?>
                                                    <option value='<?php echo $_smarty_tpl->tpl_vars['rotulo']->value->CODQUANTIDADE;?>
' ><?php echo $_smarty_tpl->tpl_vars['rotulo']->value->ROTULO;?>
<?php if ($_smarty_tpl->tpl_vars['rotulo']->value->ESPECIFICACAO!='') {?> - <?php echo $_smarty_tpl->tpl_vars['rotulo']->value->ESPECIFICACAO;?>
<?php }?></option>
                                                    <?php echo smarty_function_counter(array(),$_smarty_tpl);?>

                                                <?php } ?>
                                            </select>
                                        </div>
                                    </td>
                                    <td valign='left'>
                                        <div class='label-top inline-middle'>
                                            <select name='quantidade_0' id='quantidade_0' class='select select-loop' onchange='javascript:is_disponibilidade_row(0);'/>
                                            <option value='' selected></option>
                                            <?php echo smarty_function_counter(array('assign'=>'i','start'=>1,'print'=>false),$_smarty_tpl);?>

                                            <?php while ($_smarty_tpl->tpl_vars['i']->value<11) {?>
                                                <option style='margin-left:20px; position: absolute;' value='<?php echo $_smarty_tpl->tpl_vars['i']->value;?>
'><?php if (strlen($_smarty_tpl->tpl_vars['i']->value)==1) {?>0<?php echo $_smarty_tpl->tpl_vars['i']->value;?>
<?php } else { ?><?php echo $_smarty_tpl->tpl_vars['i']->value;?>
<?php }?></option>
                                                <?php echo smarty_function_counter(array(),$_smarty_tpl);?>

                                            <?php }?>
                                            </select> 
                                        </div>
                                    </td>
                                    <td id='verificar_0' style='width: 30%;'> <div style='line-height: 35px; color: #8795ae;'>VERIFICAR!</div> </td>

                                </tr>
                                
                            </tbody> 
                        </table>


                    </div>   
                    <div class='avise-me-hide-0 hide product-infos-row hide-email'>
                        <label style="text-align: center!important; font-family: 'Roboto Condensed', 'Helvetica', 'sans-serif'; font-weight: 400; letter-spacing: 1px; text-transform: uppercase;">Avise-me ao chegar: </label> 
                        <div class="input-group">
                            <input type='hidden' class='form-control avise-me-ao-referencia' value='<?php echo $_smarty_tpl->tpl_vars['referencia']->value;?>
'>
                            <input type="text" class='form-control avise-me-ao-chegar-0' id='' value='<?php echo $_smarty_tpl->tpl_vars['email_logon']->value;?>
' placeholder='E-mail'>
                            <span class='input-group-btn'>
                                <button class='btn btn-default avise-me-ao-chegar-button-0' type='button' onclick=''><b>ENVIAR</b></button>
                            </span>
                        </div>
                    </div>

                    
                    
                    
                    
                    

                    


                    <div class="product-infos-row show-btn-comprar">

                        <a href="" class="btn btn-default btn-buy btn-block comprar" data-params="<?php echo $_smarty_tpl->tpl_vars['lista_desejos']->value;?>
" data-id="<?php echo $_smarty_tpl->tpl_vars['produto']->value->CODPRODUTO;?>
" data-img="<?php echo $_smarty_tpl->tpl_vars['FOTO_SM']->value;?>
" data-redirect="/<?php echo $_smarty_tpl->tpl_vars['language']->value;?>
/produtos/checkout/" data-name="<?php echo $_smarty_tpl->tpl_vars['nome']->value;?>
">INCLUIR NO CARRINHO</a>
                        <br>

                        <span class="Loader hide"><img src="<?php echo $_smarty_tpl->tpl_vars['web_files']->value;?>
/img/Loader.GIF" alt="Carregando..." title="Carregando..."/></span>
                    </div>
                    
                    


                    
                    
                    


                    <div role="tabpanel">
                        <!-- Nav tabs -->
                        <ul class="nav nav-tabs" role="tablist">
                            <li role="presentation" class="active"><a href="#home" aria-controls="home" role="tab" data-toggle="tab">Descrição do Produto</a></li>
                            <li role="presentation"><a href="#profile" aria-controls="profile" role="tab" data-toggle="tab">Tamanhos</a></li>

                        </ul>
                        <!-- Tab panes -->
                        <div class="tab-content">
                            <div role="tabpanel" class="tab-pane fade in active" id="home" style="padding: 1%;"> 
                                <div class="product-infos-row product-description"> 
                                    <br/>
                                    <?php echo $_smarty_tpl->tpl_vars['descricao']->value;?>

                                </div>
                            </div>
                            <div role="tabpanel" class="tab-pane fade" id="profile" style="padding: 1%;">
                                <div class="product-infos-row">
                                    <br/>
                                    <?php echo $_smarty_tpl->tpl_vars['especificacoes']->value;?>

                                </div>
                            </div>
                        </div>

                        <style>
                            .tab-content{
                                max-width: 100%;
                            }
                            .tab-content table{
                                width: 100%;
                            }
                            .tab-content table thead td:last-child{
                                width: 20%;
                            }
                            .tab-content table thead td{
                                width: 40%;
                            }
                        </style>
                        <div class="row">
                            <div class="col-lg-12">
                                <div class="share">
                                    <span>COMPARTILHE:</span>
                                    <ul class="list-inline list-social">
                                        
                                        <li style="margin: 0 !important;"><a href="http://www.facebook.com/sharer.php?u=<?php echo $_smarty_tpl->tpl_vars['site']->value;?>
<?php echo $_smarty_tpl->tpl_vars['language']->value;?>
/<?php echo $_smarty_tpl->tpl_vars['ctgr']->value;?>
/<?php echo $_smarty_tpl->tpl_vars['url_amigavel']->value;?>
?news=s&utm_source=fbBTshare" target="_blank" ><b class="entypo-facebook"></b></a></li>
                                        <li style="margin: 0 !important;"><a href=""><b class="entypo-mail"></b></a></li>    
                                    </ul>
                                </div>
                            </div>
                        </div>

                    </div>

                </div>
            </div>
        </div>

    </div>

</section>

<section class="section section-gray">
    <div class="container">
        <div class="row">
            <div class="col-lg-12">
                <div class="section-title">
                    <h2 class="title">Produtos Relacionados</h2>
                    <a href="" class="subtitle">VEJA TODOS</a>
                </div>
            </div>
        </div>
        <div class="row">
            <?php  $_smarty_tpl->tpl_vars['produto'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['produto']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['arr']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['produto']->key => $_smarty_tpl->tpl_vars['produto']->value) {
$_smarty_tpl->tpl_vars['produto']->_loop = true;
?>
                <?php if ($_smarty_tpl->tpl_vars['produto']->value->CODPRODUTO!='') {?>
                    <div class="col-sm-3">
                        <div class="thumb">
                            <div class="thumb-img">
                                <a href="/<?php echo $_smarty_tpl->tpl_vars['language']->value;?>
/<?php echo $_smarty_tpl->tpl_vars['produto']->value->CATEGORIA;?>
/<?php echo $_smarty_tpl->tpl_vars['produto']->value->URL_AMIGAVEL;?>
">
                                    <img src="<?php echo $_smarty_tpl->tpl_vars['produto']->value->CROP268;?>
" alt="<?php echo $_smarty_tpl->tpl_vars['produto']->value->NOME;?>
" title="<?php echo $_smarty_tpl->tpl_vars['produto']->value->NOME;?>
" width="312" height="312">
                                </a>
                            </div>
                            <div class="thumb-holder">
                                <div class="thumb-holder-out">
                                    <div class="thumb-holder-in">
                                        <h2 class="price">R$ <?php echo $_smarty_tpl->tpl_vars['produto']->value->PRECO;?>
</h2>
                                        <p class="name"><?php if ($_smarty_tpl->tpl_vars['produto']->value->CATEGORIA=="junior") {?>Junior<?php } else { ?>Nilton Santos<?php }?><br/><span style="font-size: 18px !important;"><?php echo $_smarty_tpl->tpl_vars['produto']->value->NOME;?>
</span></p>
                                        <a href="/<?php echo $_smarty_tpl->tpl_vars['language']->value;?>
/<?php echo $_smarty_tpl->tpl_vars['produto']->value->CATEGORIA;?>
/<?php echo $_smarty_tpl->tpl_vars['produto']->value->URL_AMIGAVEL;?>
" class="btn btn-default btn-buy">COMPRAR</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                <?php }?>
            <?php } ?>


        </div>
        <hr style="margin-top: 9%;">
    </div>
</section>



<style>
    .datagrid > td {
        border: 0 !important;
        padding: 0 !important;
    }
    .table-datagrid > tbody > tr > td, .table > tbody > tr > th, .table > tfoot > tr > td, .table > tfoot > tr > th, .table > thead > tr > td, .table > thead > tr > th {
        border: 0 !important;
        padding: 0 !important;
    }
    .select{
        position: relative !important;
    }
    .product-infos .label-top {
        margin-right: 0;
    }
    .product-infos .title {
        margin: 25px 0 0 !important;
    }
</style>
<?php echo $_smarty_tpl->getSubTemplate ("footer.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 9999, null, array(), 0);?>


<script>

    $(document).ready(function () {
        $("#less").click(function () {
            datagrid_less()
        });
        $("#plus").click(function () {
            datagrid_plus()
        });
    });

    function datagrid_less() {
        var n = 0;
        $("#data .datagrid").each(function (i) {
            n = i;
        });
        var qntdd = (parseInt(n) - 1);

        if (qntdd > -1) {
            $("#data .datagrid:last").remove();
        }

    }

    function datagrid_plus() {

        var n = 0;
        $("#data .datagrid").each(function (i) {
            n = i;
        });
        var qntdd = (parseInt(n) + 1);


        var str = "<tr class='datagrid'>";
        str += "<td style='text-align: center'>";
        str += "<div class='label-top inline-middle'>";
        str += "<select name='tamanho_" + qntdd + "' id='tamanho_" + qntdd + "' class='select select-loop' onchange='javascript:is_disponibilidade(this.value, this.name);'>";
        str += "<option value='' selected></option>";
    <?php echo smarty_function_counter(array('assign'=>'i','start'=>0,'print'=>false),$_smarty_tpl);?>

    <?php  $_smarty_tpl->tpl_vars['rotulo'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['rotulo']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['rotulos']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['rotulo']->key => $_smarty_tpl->tpl_vars['rotulo']->value) {
$_smarty_tpl->tpl_vars['rotulo']->_loop = true;
?>
        str += "<option value='<?php echo $_smarty_tpl->tpl_vars['rotulo']->value->CODQUANTIDADE;?>
'><?php echo $_smarty_tpl->tpl_vars['rotulo']->value->ROTULO;?>
<?php if ($_smarty_tpl->tpl_vars['rotulo']->value->ESPECIFICACAO!='') {?> - <?php echo $_smarty_tpl->tpl_vars['rotulo']->value->ESPECIFICACAO;?>
<?php }?></option>";
        <?php echo smarty_function_counter(array(),$_smarty_tpl);?>

    <?php } ?>
        str += "</select>";
        str += "</div>";
        str += "</td>";
        str += "<td style='text-align: center'>";
        str += "<div class='label-top inline-middle'>";
        str += "<select name='quantidade_" + qntdd + "' id='quantidade_" + qntdd + "' class='select select-loop' onchange='javascript:is_disponibilidade_row(" + qntdd + ");'>";
        str += "<option value='' selected></option>";
    <?php echo smarty_function_counter(array('assign'=>'i','start'=>1,'print'=>false),$_smarty_tpl);?>

    <?php while ($_smarty_tpl->tpl_vars['i']->value<11) {?>
        str += "<option value='<?php echo $_smarty_tpl->tpl_vars['i']->value;?>
'><?php if (strlen($_smarty_tpl->tpl_vars['i']->value)==1) {?>0<?php echo $_smarty_tpl->tpl_vars['i']->value;?>
<?php } else { ?><?php echo $_smarty_tpl->tpl_vars['i']->value;?>
<?php }?></option>";
        <?php echo smarty_function_counter(array(),$_smarty_tpl);?>

    <?php }?>
        str += "</select>";
        str += "</div>";
        str += "</td><td id='verificar_" + qntdd + "' style='width: 30%;'> <span style='color: #8795ae'>VERIFICAR!</span> </td>";
        str += "</tr>";
        str += "<tr class='avise-me-hide-" + qntdd + " hide'>";
        str += "<td colspan='3'>";
        str += "<div class='product-infos-row hide-email'>";
        str += "<label style=\"margin-bottom: 15px; margin-top: 10px; color: #87020b; float: left; font-family: 'Roboto Slab', 'Helvetica', 'sans-serif'\">Avise-me ao chegar: </label> ";
        str += "<div class='input-group'>";
        str += "<input type='hidden' class='form-control avise-me-ao-referencia' value='<?php echo $_smarty_tpl->tpl_vars['referencia']->value;?>
'>";
        str += "<input type='text' class='form-control avise-me-ao-chegar-" + qntdd + "' id='' value='<?php echo $_smarty_tpl->tpl_vars['email_logon']->value;?>
' placeholder='E-mail'>";
        str += "<span class='input-group-btn'>";
        str += "<button class='btn btn-default avise-me-ao-chegar-button-" + qntdd + "' type='button' onclick=''><b>ENVIAR</b></button>";
        str += "</span>";
        str += "</div>";
        str += "</div>";
        str += "<span class='avise-me-load-" + qntdd + " Loader hide'><img src='<?php echo $_smarty_tpl->tpl_vars['web_files']->value;?>
/img/Loader.GIF' alt='Carregando...' title='Carregando...' style='width: 20px'/></span>";
        str += "<div class='avise-me-ao-chegar-error-" + qntdd + "' style='color: #df5d65; font-weight: bold; line-height: 4;'></div>";
        str += "<div style='clear: both'> </div>";
        str += "</td>";
        str += "</tr>";

        $("#data").append(str);

    }

    function is_disponibilidade(codquantidade, nome) {

        var n = nome.replace("tamanho_", "");
        var verificar = "verificar_" + n;
        var quantidade = "quantidade_" + n;

        $("#" + verificar).html("<div style='line-height: 0; color: #8795ae; position: relative; top: 9px;'><img src='<?php echo $_smarty_tpl->tpl_vars['web_files']->value;?>
/img/Loader.GIF' alt='Carregando...' title='Carregando...' border='0' style='opacity:1; width: 20px'/><br/><br/></div>");

        $.ajax({
            type: 'post',
            data: "codquantidade=" + codquantidade,
            url: '<?php echo $_smarty_tpl->tpl_vars['web_files']->value;?>
/ajax/is-disponibilidade',
            success: function (data) {

                console.log(Math.random() + ": " + data + ": " + $("#" + quantidade).val() + ": " + codquantidade);

                var qntdd = parseInt(data);
                var qntdd_compare = parseInt($("#" + quantidade).val());
                if (qntdd_compare > qntdd || qntdd == 0 || qntdd == "") {
                    var html1 = "<div style='line-height: 35px; color: #8795ae;'>INDISPONÍVEL!</div> <br>";
    
                    $("#" + verificar).html(html1);
                    $(".avise-me-hide-" + n).removeClass("hide");
                    if (codquantidade != "") {
                        var carragar = "avise-me-load-" + n;
                        var error = "avise-me-ao-chegar-error-" + n;
                        var email = "avise-me-ao-chegar-" + n;
                        $(".avise-me-ao-chegar-" + n).attr('id', codquantidade);
                        var jscrt = "javascript:avise_me_chegar('" + codquantidade + "', '" + error + "', '" + carragar + "', '" + email + "');";
                        $(".avise-me-ao-chegar-button-" + n).attr('onclick', jscrt);
                    }

                    $(".show-btn-comprar").addClass("hide");

                } else {
                    $("#" + verificar).html("<div style='line-height: 35px; color: #8795ae;'>DISPONÍVEL!</div>");
                    $(".avise-me-hide-" + n).addClass("hide");
                    $(".show-btn-comprar").removeClass("hide");
                }
            }
        });
    }

    function is_disponibilidade_row(indice) {

        var nome = "tamanho_" + indice;
        var codquantidade = $("#" + nome).val();
        if (codquantidade != "" || codquantidade != null) {
            is_disponibilidade(codquantidade, nome);
        }
    }

</script>
"<?php }} ?>
