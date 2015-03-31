<?php /*%%SmartyHeaderCode:1758676359541c49bece2c00-07578800%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '387997e30a3bc703caee09763131570d58fb22ff' => 
    array (
      0 => '/home/maria951/public_html/novo/application/views/enviar_produtos.tpl',
      1 => 1411063211,
      2 => 'file',
    ),
    '6a0d8cd5da5366cd163c1096d3e3a62591b34250' => 
    array (
      0 => '/home/maria951/public_html/novo/application/views/header.tpl',
      1 => 1411067324,
      2 => 'file',
    ),
    'dddb63286e4a273b560ff992665e7d4c506e6fdb' => 
    array (
      0 => '/home/maria951/public_html/novo/application/views/navbar.tpl',
      1 => 1411073248,
      2 => 'file',
    ),
    'f9aba294bedd1c58ea2a06f3e7f314dbd8ec1b53' => 
    array (
      0 => '/home/maria951/public_html/novo/application/views/navbar2.tpl',
      1 => 1410976198,
      2 => 'file',
    ),
    '9c6368fa7ae30d46a3ff6d19316b23707d94dba8' => 
    array (
      0 => '/home/maria951/public_html/novo/application/views/footer.tpl',
      1 => 1411078113,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '1758676359541c49bece2c00-07578800',
  'variables' => 
  array (
    'nenhum_produto' => 0,
    'ld' => 0,
    'language' => 0,
    'lista_desejo' => 0,
    'total_peso' => 0,
    'cep_remetente' => 0,
    'total_geral' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.19',
  'unifunc' => 'content_541c49bf1426c7_52602217',
  'cache_lifetime' => 120,
),true); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_541c49bf1426c7_52602217')) {function content_541c49bf1426c7_52602217($_smarty_tpl) {?><!DOCTYPE HTML>
<html lang="pt-br">

    <head>
        <meta charset="UTF-8">
        <title>Maria de Barro | Enviar Produtos</title>

        <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1"/>
        <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0" />

        <!-- para o sistema Open Graph -->
        <meta property="og:title" content="Maria de Barro" />
        <meta property="og:type" content=”article” />
        <meta property="og:url" content="http://novo.mariadebarro.com.br/" />
        <meta property="" content="http://novo.mariadebarro.com.br/web-files/img/logo.png" />
        <meta property="og:description" content="A Maria de Barro é uma loja online de acessórios feita especialmente para as mulheres." />

        <link rel="icon" type="image/vnd.microsoft.icon" href="/web-files/img/favicon.ico"/>
        <link rel="shortcut icon" type="image/x-icon" href="/web-files/img/favicon.ico"/>

        <link rel="stylesheet" href="/web-files/font-awesome-4.1.0/css/font-awesome.min.css"/>
        <link rel="stylesheet" href="/web-files/bootstrap/css/bootstrap.css"/>
        
        <link rel="stylesheet" href="/web-files/plugins/rs-plugin/css/settings.css"/>
        
        <link rel="stylesheet" href="/web-files/pongstagr.am-master/source/pongstagr.am.css"/>		


        <link rel="stylesheet" href="/web-files/css/joker.css"/>
        
    </head>
    <body style="padding-top: 52px">

        

        <header class="header">
            <div class="navbar navbar-fixed-top" role="navigation">
                <div class="container">
                    <a href="#" class="brand-circle"><img src="/web-files/img/brand-circle.png"></a>
                    <ul class="nav navbar-nav">
                        <li><a href="/pt/produtos/autenticacao/" id="nav-login">Login e Cadastro</a></li>
                        
                    </ul>
                    <ul class="nav navbar-nav navbar-right">
                        <li><a href="/pt/produtos/checkout/">Wishlist</a></li>
                        <li class="dropdown">
                            <a href="#" class="dropdown-toggle" data-toggle="dropdown">Meu Carrinho</a>
                            <ul class="dropdown-menu" role="menu">
                                <li><a href="#">-</a></li>
                            </ul>
                        </li>
                        <li><a href="#">Checkout</a></li>
                    </ul>
                </div>
            </div>
            <div class="container header-brand">
                <div class="row">
                    <div class="col-sm-6 col-brand">
                        <a href="/pt/" class="brand"><img src="/web-files/img/logo.png" alt="Maria de Barro" border="0" title="" class="img-responsive"/></a>
                    </div>
                    <div class="col-sm-6 text-right col-chart">
                        <a class="carrinho-wrap" href="/pt/produtos/checkout/">
                            <img src="/web-files/img/carrinho.png" alt="" border="0" title="" />
                            <span id="item_carrinho"> 3 Itens                             </span>
                        </a>
                    </div>
                </div>
            </div>
            <nav class="navbar navbar-default" role="navigation">
                <div class="container">
                    <div class="row">
                        <div class="navbar-header">
                            <a href="#" class="hamburger">
                                <span class="sr-only">Menu</span>
                                <span class="bar"></span>
                            </a>
                        </div>
                        <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
  <ul class="nav navbar-nav">

    <li  class="" ><a href="/pt/">Home</a></li>
    <li  class="" ><a href="/pt/categoria/aneis/">Anéis</a></li>            
    <li  class="" ><a href="/pt/categoria/brincos/">Brincos</a></li>           
    <li  class="" ><a href="/pt/categoria/colares/">Colares</a></li>           
    <li  class="" ><a href="/pt/categoria/pulseiras/">Pulseiras</a></li>                       
    <li  class="" ><a href="/pt/categoria/promocoes/">Promoções</a></li>                       

  </ul>
  <form class="navbar-form pull-right search-wrap" role="search">
    <input type="search" class="form-control" placeholder="BUSCAR">
    <button type="submit" class="btn eu-quero"><span class="fa fa-search"></span></button>
  </form>  
</div>
                    </div>
                </div>
            </nav>
        </header>

        


<div class="container">
    <br/>   
    <div class="row" style="margin-bottom: 10%;">

         <div class="col-lg-12">
    <ul class="nav nav-tabs nav-justified" role="tablist" style="font-size: 14px">
        <li ><a href="/pt/produtos/checkout/">Resumo</a></li>
        <li ><a href="/pt/produtos/autenticacao/">Login</a></li>
        <li ><a href="/pt/produtos/endereco/">Endereço</a></li>
        <li class="active"><a href='/pt/produtos/enviar_produtos'>Envio de Produtos</a></li>
        <li ><a>Pagamento</a></li>
    </ul>
</div>

    </div>


        
        <div class="col-lg-12">
            <div class="panel panel-default"> 
                <table class="table" style="font-size: 14px">
                    <thead>
                        <tr>
                            <th>#</th>
                            <th>Nome do Produto</th>
                            <th>Categoria</th>
                            <th>Referência</th>
                            <th>Preço Unitário</th>
                            <th>Peso Unitário</th>
                            <th>Peso Total</th>
                            <th style="width: 11%;">Quantidade</th>
                            <th style="width: 8%;">Total</th>
                            
                        </tr>
                    </thead>

                    <tbody>

                            
                              

                                <tr>
                                    <td><a href="/pt/descricao/categoria/aneis/anel-dourado-cruz-preta-1"><img src="/web-files/upload/thumbs/AF07C2AC4561A5CB19C28D6F567E4111/615099BAFBB6B016E53CF2DA6B51ED90.jpg" alt="ANEL DOURADO CRUZ - PRETA" title="ANEL DOURADO CRUZ - PRETA" border="0"/></a><br/></td>
                                    <td style="text-transform: uppercase;">ANEL DOURADO CRUZ - PRETA</td>
                                    <td>Anéis</td>
                                    <td>A-00012</td>
                                    <td>36,40</td>
                                    <td>0.300</td>
                                    <td id="peso_total_produto_127C3C5E7D2C622F8DF5332425BED85E">0.300</td>
                                    <td id="n_input">

                                        <input type="text" name="quantidade"  id="input_127C3C5E7D2C622F8DF5332425BED85E"  style="width: 44px; text-align: center;" value="1" readonly="readonly"/>

                                    </td>
                                    <td  id="preco_total_produto_127C3C5E7D2C622F8DF5332425BED85E"> 36,40</td>

                                </tr>

                              

                                <tr>
                                    <td><a href="/pt/descricao/categoria/aneis/anel-largo-cravejado-de-zirconia"><img src="/web-files/upload/thumbs/677EBCC875C45B6D0AF70F2B32D10659/318129E8E7EB09EDCEA24B2316F0F25E.jpg" alt="ANEL LARGO CRAVEJADO DE ZIRCôNIA " title="ANEL LARGO CRAVEJADO DE ZIRCôNIA " border="0"/></a><br/></td>
                                    <td style="text-transform: uppercase;">ANEL LARGO CRAVEJADO DE ZIRCôNIA </td>
                                    <td>Anéis</td>
                                    <td>A-00013</td>
                                    <td>127,20</td>
                                    <td>0.010</td>
                                    <td id="peso_total_produto_294AE28969051A3F34D928517CCB1CE4">0.020</td>
                                    <td id="n_input">

                                        <input type="text" name="quantidade"  id="input_294AE28969051A3F34D928517CCB1CE4"  style="width: 44px; text-align: center;" value="2" readonly="readonly"/>

                                    </td>
                                    <td  id="preco_total_produto_294AE28969051A3F34D928517CCB1CE4"> 254,40</td>

                                </tr>

                             
                        
                    </tbody>
                </table>
            </div>
        </div>

                        
       
           
           
       
                        
        
            <div class="col-lg-8">    
                   
                    <div class="panel panel-default">    
                        <table class="table" style="font-size: 14px">
                            <thead>
                                <tr>
                                    <th>Estimar custo de envio da encomenda.</th>
                                </tr>
                                <tr>
                                    <th>Peso Total:&nbsp;<span id="peso_total">0.32</span>Kg. </th>  
                                </tr>
                            </thead>
                            </body>

                            <tr>
                                <td>
                                    <input type="hidden" class="form-control" id="total_peso" name="total_peso" value="0.32"/>
                                    <input type="hidden" class="form-control" id="cep_remetente" name="cep_remetente" value="22780-084"/>
                                    <input type="text" class="form-control" id="cep_destinatario" name="cep_destinatario" maxlength="8" value="" onkeypress="return formataCEP(event, this);" placeholder="Insira seu CEP" style="width: 50%"/>
                                    <label>Tipo de encomenda</label>
                                    <select id="forma_envio" class="form-control" style="width: 50%">
                                        <option value="41106">PAC</option>
                                        <option value="40010">SEDEX</option>
                                        <option value="40215">SEDEX 10</option>
                                        <option value="40290">SEDEX hoje</option>
                                        
                                    </select>
                                    <br/>
                                    <span id="msg_erro"></span><br/>
                                    <button type="button" id="btn_cep" class="btn btn-primary btn-lg btn-primary-maria" role="button">Entrar</button>

                                    <span class="Loader hide"><img src="/web-files/img/Loader.GIF" alt="Carregando..." title="Carregando..." border="0" style="width: 7%;"/></span>
                                </td>
                            </tr>
                            </tbody>
                        </table>
                    </div>
                            </div>
            <div class="col-lg-4">        
                            
                    <div class="panel panel-default">    
                        <table class="table" style="font-size: 14px">
                            <tbody>
                                <tr>
                                    <td>Total de Produtos</td>
                                    <td>R$&nbsp;                                 
                                        <span id="total_parcial">
                                                                                    290,80    
                                                                                </span>
                                    </td>
                                </tr>
                                <tr>
                                    <td>Taxa de Entrega</td>
                                    <td>R$&nbsp;
                                        <span id="taxa_entrega">0,00</span></td>
                                </tr>
                                <tr>
                                    <td style="width: 42%;"></td>
                                    <td>
                                        <div class="panel panel-default">
                                            <table class="table text-center">
                                                <thead>
                                                    <tr>
                                                        <th>TOTAL</th>
                                                    </tr>    
                                                </thead>
                                                <tbody>
                                                    <tr>
                                                        <td>
                                                            <p class="auto-price text-left" style="padding: 11px 0 0 0;">R$&nbsp;
                                                                <span id="total_geral">
                                                                                                                                            290,80    
                                                                                                                                
                                                                </span>
                                                            </p>
                                                        </td>
                                                    </tr>
                                                </tbody>
                                            </table>
                                        </div>
                                    </td>
                                </tr>
                            </tbody>   
                        </table>   
                    </div>

                                                     
            </div>


    
    <div>
        <ul class="pager">
            <li class="previous"><a href="/pt/">&larr; Continuar comprando</a></li>
            <li class="next"><a href="/pt/produtos/autenticacao/">Finalizar compra &rarr;</a></li>
        </ul>
    </div> 
</div>
<div style="clear: both;"></div>

<!-- FOOTER  -->

<footer class="footer">
    <div class="bs-docs-featurette x-footer mftoot">
        <div class="container">
            <div class="row">
                <div class="col-sm-3">
                    <h3 class="mH3">Maria de Barro</h3>
                    <div class="m-footer" id="resume-somos">

                    </div>
                    <div style="text-align: left; color: #fff">
                        <i class="fa fa-angle-double-right"></i><a href="/pt/informacoes/quem_somos"> leia mais ...</a><br/>     
                    </div>
                </div>
                <div class="col-sm-3">
                    <h3 class="mH3">Fale com a Maria</h3>
                    <ul class="m-footer">
                        <li>
                            <p class="big-message fale-com-maria-vzap">
                                <span class="circled"><i class="icon-whatsapp"></i></span>
                                + 55 21 <strong>99576.5038</strong>
                            </p>
                        </li>
                        <li>
                            <p class="big-message fale-com-maria-vphone">
                                <span class="circled"><i class="fa fa-phone"></i></span>
                                + 55 21 <strong>3283.5265</strong>
                            </p>
                        </li>
                        <li>
                            <p style="font-size: 14px;font-size: 1.4rem;" class="fale-com-maria-vmail">
                                <span class="circled"><i class="fa fa-envelope-o"></i></span>
                                maria@mariadebarro.com.br
                            </p>
                        </li>
                    </ul>
                </div>
                <div class="col-sm-3">
                    <h3 class="mH3">Minhas compras</h3>
                    <ul class="m-footer">
                        <li><a href="/pt/">Minha conta</a></li>
                        <li><a href="/pt/">Meus pedidos</a></li>
                        <li><a href="/pt/">Lista de desejos</a></li>
                        <li><a href="/pt/">VENDA POR ATACADO</a></li>
                    </ul>
                </div>
                <div class="col-sm-3"> 
                    <h3 class="mH3">Eu Quero!</h3>
                    <ul class="m-footer">
                        <li><a href="#">Novos Produtos</a></li>
                        <li><a href="/pt/informacoes/promocoes">Promoções</a></li>
                        <li><a href="/pt/informacoes/programa_vantagens">Programa de vantagens</a></li>
                        <li><a href="/pt/informacoes/programa_fidelidade">Programa de fidelidade</a></li>
                        <li><a href="#">Guia de presentes</a></li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
    <div class="bs-docs-featurette x-footer footer-2">
        <div class="container">
            <div class="row">
                <div class="col-sm-4"> 
                    <h3 class="mH3">Precisa de Ajuda?</h3>
                    <ul class="m-footer-2">
                        <li><a href="/pt/informacoes/forma_pagamento">Formas de Pagamento</a></li>
                        <li><a href="/pt/informacoes/entrega_devolucao">Entrega e devolução</a></li>
                        <li><a href="/pt/informacoes/procon_rj">Procon-RJ</a></li>
                        <li><a href="/pt/informacoes/perguntas_frequentes">Perguntas Frequentes</a></li>
                        <li><a href="/pt/informacoes/cuidados_produtos">Cuidados com o produto</a></li>
                        <li><a href="/pt/informacoes/contato">Fale conosco</a></li>                    
                    </ul>
                </div>
                <div class="col-sm-4"> 
                    <h3 class="mH3">Sobre a Maria</h3>
                    <ul class="m-footer-2">
                        <li><a href="/pt/informacoes/quem_somos">Quem somos</a></li>
                        <li><a href="#">Nosso Blog</a></li>
                        <li><a href="/pt/informacoes/politica_privacidade">Política de Privacidade</a></li>
                        <li><a href="/pt/informacoes/termos_servicos">Termos de serviço</a></li>
                    </ul>
                    <div class="row">
                        <div class="col-sm-12" style="text-align: left;">
                            <form class="navbar-form navbar-left form-inline form-newsletter" role="search">
                                <div class="form-group">
                                    <p style="margin-bottom: 0">Receba nossa Newsletter</p>
                                    <input type="email" class="form-control" placeholder="SEU E-MAIL">
                                    <button type="submit" class="btn">
                                        <img src="/web-files/img/envelope.gif" border="0" alt="newsletter" title="newsletter" width="31px" height="32px" />  
                                    </button>
                                </div>
                            </form>                     
                        </div>    
                    </div>    
                </div>
                <div class="col-sm-4 text-right"> 
                    <img src="/web-files/img/footer-ebit.jpg">
                </div>

            </div>
        </div>
    </div>
    <div class="direitos" style="border-top: #dcdcdc 1px solid; background: #fff;">
        <div class="container">
            <div class="row"> 
                <div class="col-sm-6" style="line-height: 6; font-size: 14px;"> 
                    Desenvolvido por <strong><a href="http://www.designlab.com.br" target="_blank"><img src="/web-files/img/designlab.png" border="0" alt="" title="" style="position: relative; bottom: 2px;"/></a></strong>
                </div> 
                <div class="col-sm-6 text-right"> 
                    <div class="redes-sociais">
                        <a target="_blank" href="http://instagram.com/mariadebarro" class="instagram"><i class="fa fa-instagram"></i></a>
                        <a target="_blank" href="http://instagram.com/mariadebarro" class="facebook"><i class="fa fa-facebook"></i></a>
                        <a target="_blank" href="#" class="twitter"><i class="fa fa-twitter"></i></a>
                        <a target="_blank" href="#" class="gplus"><i class="fa fa-google-plus"></i></a>                
                    </div>
                </div> 
            </div> 
        </div> 
    </div>
</footer>
<!-- /FOOTER  -->

<script language="javascript" src="/web-files/js/jquery-2.1.1.min.js"></script>

<script language="javascript" src="/web-files/js/vendor/jquery.easing.1.3.js"></script>
<script language="javascript" src="/web-files/js/vendor/jquery.smoothscroll.min.js"></script>

<script language="javascript" src="/web-files/plugins/rs-plugin/js/jquery.themepunch.plugins.min.js"></script>
<script language="javascript" src="/web-files/plugins/rs-plugin/js/jquery.themepunch.revolution.min.js"></script>

<script language="javascript" src="/web-files/js/funcoes.js"></script>
<script language="javascript" src="/web-files/js/jQuery-Mask-Plugin.js"></script>
<script language="javascript" src="/web-files/bootstrap/js/bootstrap.js"></script>
<script language="javascript" src="/web-files/pongstagr.am-master/source/pongstagr.am.js"></script>
<script language="javascript" src="/web-files/js/default.js"></script>
<script language="javascript" src="/web-files/js/joker.js"></script>

<link rel="stylesheet" href="//code.jquery.com/ui/1.11.1/themes/smoothness/jquery-ui.css">
<script src="//code.jquery.com/ui/1.11.1/jquery-ui.js"></script>
<link rel="stylesheet" href="/resources/demos/style.css">


</body>
</html><?php }} ?>
