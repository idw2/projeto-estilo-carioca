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
    '9915484c49efae1e853c1be7aa9d8b2c159a82c4' => 
    array (
      0 => '/home/estil450/public_html/application/views/header.tpl',
      1 => 1425767056,
      2 => 'file',
    ),
    '21ad6c09fd0cb3d807b70a3f24dfe7c8b337e8c6' => 
    array (
      0 => '/home/estil450/public_html/application/views/top.tpl',
      1 => 1426628688,
      2 => 'file',
    ),
    '176fac5985d5dc4b43edea6c0618ca1f6996d998' => 
    array (
      0 => '/home/estil450/public_html/application/views/footer.tpl',
      1 => 1426115679,
      2 => 'file',
    ),
    'e42802b9f9225092d26556a5ec1f3ebf37f60366' => 
    array (
      0 => '/home/estil450/public_html/application/views/atendimento_online.tpl',
      1 => 1417455048,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '19827755085508a2f40b6215-37967130',
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
  'unifunc' => 'content_5508a2f460a373_28290157',
  'cache_lifetime' => 120,
),true); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5508a2f460a373_28290157')) {function content_5508a2f460a373_28290157($_smarty_tpl) {?><!DOCTYPE HTML>
<html lang="pt-br">

    <head>
        <meta charset="UTF-8">
        <title>Estilo Carioca | Nilton Santos | Camisa Masculina</title>

        <meta name="title" content="Estilo Carioca"><meta name="description" content=""><meta name="author" content="Designlab">
        <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no">
           

        <link rel="shortcut icon" href="http://www.estilocarioca.com.br/application/template/estilocarioca/assets/img/favicon.png?v=5">
        <link rel="stylesheet" href="http://www.estilocarioca.com.br/application/template/estilocarioca/assets/css/plugins/slick.css">
        <link rel="stylesheet" href="http://www.estilocarioca.com.br/application/template/estilocarioca/assets/css/plugins/sweet-alert.css">
        <link rel="stylesheet" href="http://www.estilocarioca.com.br/application/template/estilocarioca/assets/css/plugins/jquery.raty.css">
        <link rel="stylesheet" href="http://www.estilocarioca.com.br/application/template/estilocarioca/assets/css/plugins/magnific-popup.css">
        <link rel="stylesheet" href="/web-files/css/sweet-alert.css?v=2"/>
        <link rel="stylesheet" href="http://www.estilocarioca.com.br/application/template/estilocarioca/assets/css/style.css">
        
        <script src="http://www.estilocarioca.com.br/application/template/estilocarioca/assets/js/modernizr.custom.js"></script>
        <link rel="stylesheet" href="/web-files/font-awesome-4.1.0/css/font-awesome.min.css"/>
        <style>
            
            .sugestao a  { font-size: 16px; display: block; background: #f4f4f4 !important; color:#1f3c8a !important; height: 100% !important; padding: 15px !important;margin-top: 0.3em !important; width: 100% !important;  }
.sugestao a:hover { font-size: 16px; background: #1f3c8a !important; text-decoration: none; color:#fff !important; height: 100% !important; padding: 15px  !important; margin-top: 0.3em !important; width: 100% !important;  }
            
        
        @font-face {
            font-family: helveticaneue;
            src: local('HelveticaNeueLTStd-UltLt.otf'), url('HelveticaNeueLTStd-UltLt.otf');
        }
        
        body, .font-default, .footer-title{
            font-family: helveticaneue, Helvetica, sans-serif !important;
        }
        
        .footer-title{
            font-weight: 600 !important;
            color: #293751 !important;
        }
        
        body{
            line-height: 1.90rem !important;
        }
        
        
        
        
        .title-tag{
            background: #8795ae !important;
        }
        
        .theme-default .section-title3 > h2{
            box-shadow: 0 2px #8795ae !important;
        }
        
        </style>
        <!--[if IE 8]>
        <link rel="stylesheet" href="http://www.estilocarioca.com.br/application/template/estilocarioca/assets/css/ie8.css" /><script src="http://www.estilocarioca.com.br/application/template/estilocarioca/assets/js/respond.js" ></script>        <![endif]-->

        <script type="text/javascript">
            var App = window.App || {
                base_path: ''
            };
        </script>
        
        <script>$('#myTab a').click(function (e) {
  e.preventDefault()
  $(this).tab('show')
}) </script>

        <meta property="og:title" content="Camisa Masculina - mariadebarro.com" />        <meta property="og:type" content="product" />        <meta property="og:site_name" content="estilocarioca.com.br" />        <meta property="og:description" content="
CAMISAS MASCULINAS
1. Camisa de manga curta, feita de algod&atilde;o super leve, para aproveitar o clima carioca em grande estilo.
" />        <meta property="og:email" content="contato@estilocarioca.com.br"/>        <meta property="og:phone_number" content="21 32835265"/>        <meta property="og:street-address" content="Edifício Global 7000 Offices, Estrada dos Bandeirantes, 7000 - Rio de Janeiro/RJ - CEP: 22780-084, Bloco C Sala 290"/>        <meta property="og:locality" content="Rio de Janeiro"/>        <meta property="og:region" content="Rio de Janeiro — Capital"/>        <meta property="og:country-name" content="Brasil"/>        <meta property="og:postal-code" content="22780-084"/>    </head>
    <body class="theme-default ">

        <div class="search-popup">
            <div class="search-popup-out popup-close">
                <div class="search-popup-inner">
                    <div class="search-popup-container">
                        <div class="relative">
                            <form class="form search-popup-form" role="search" action="/pt/novos-produtos" method="post">
                                <input type="search" placeholder="Buscar" name="search" class="input" autocomplete="off">
                                <button type="submit"><i class="sprite sprite-search"></i></button>
                                 
                            </form>
                            <div class="search-sugestao"></div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <section id="stt_logado_print">
            <header id="header" class="navbar navbar-fixed-top navbar-default" role="navigation">
    <div class="header-bar"></div>
    <div class="container">
        <div class="navbar-header">
            <a href="#" class="hamburger"><span></span></a>
            <a class="brand" href="/pt/">
                <img src="http://www.estilocarioca.com.br/application/template/estilocarioca/assets/img/estilocarioca2.png" width="71" height="68">
            </a>
        </div>
        <nav class="navbar-collapse">
            <ul class="nav navbar-nav navbar-right">
                <li class="navbar-social">
                    <a href="https://www.facebook.com/estilocarioca">
                        <b class="entypo-facebook"></b>
                    </a>
                    <a href="https://instagram.com/estilocarioca/">
                        <b class="entypo-instagrem"></b>
                    </a>
                    
                    <!--<a href="">
                        <i class="sprite sprite-twitter"></i>
                    </a>-->
                </li>
                <li class="navbar-search">
                    <a href="" class="search">
                        <i class="sprite sprite-search"></i>
                    </a>
                </li>
                                    <li>
                        <a href="/pt/conta/login-cadastro/">
                            <i class="icon sprite sprite-user"></i>
                        </a>
                    </li>
                                <li class="navbar-cart">
                    <a href="/pt/produtos/checkout/">
                        <i class="icon sprite sprite-cart"></i>
                        <span class="value">0</span>
                    </a>
                </li>
            </ul>
                    
            <ul class="nav navbar-nav">
                <li >
                    <a href="/pt/">Home</a>
                </li>
                <li >
                    <a href="/pt/informacoes/quem-somos">A Estilo Carioca</a>
                </li>
                <li >
                    <a href="/pt/junior/">Junior</a>
                </li>
                <li  class="active">
                    <a href="/pt/nilton-santos">Nilton Santos</a>
                </li>
            </ul>
        </nav>
    </div>
</header>  
        </section>


<section class="section product">
    <div style="margin-top: 5%;"></div>
    <div class="container">
        <div class="row">
            <div class="col-sm-5">
                <figure class="product-img">

                    <div class="slider-for product-slider ">
                        
                                                                                                                                            <div>
                                <a  href="/web-files/upload/thumbs/5D8444F91CF4EEC43E4D73A79564A552/6F785979D3DF825B8BB647D1FDFDDBBD.jpg" class="imagem-produto" rel="gallery">

                                    <img   src="/web-files/upload/thumbs/62A7AAC08B923A0F4F4BEC342D246C29/1D432EF2C3D6307125C503F7D2D30726.jpg" alt="Camisa Masculina" border="0" title="Camisa Masculina" />
                                </a>
                                <a  href="/web-files/upload/thumbs/5D8444F91CF4EEC43E4D73A79564A552/6F785979D3DF825B8BB647D1FDFDDBBD.jpg" class="imagem-produto-zoom fontawesome-zoom-in">

                                </a>
                            </div>
                            
                                                                                <div>
                                <a  href="/web-files/upload/thumbs/8D1BFC52D82C6D1AFE4FC8C86BC2F776/390782848432DDB93ADF74ECB1678995.jpg" class="imagem-produto" rel="gallery">

                                    <img   src="/web-files/upload/thumbs/2BD2E26A9AD5E2E463BB81D58EEA8AE0/0B4849292B2B63117560A83107BC3F11.jpg" alt="Camisa Masculina" border="0" title="Camisa Masculina" />
                                </a>
                                <a  href="/web-files/upload/thumbs/8D1BFC52D82C6D1AFE4FC8C86BC2F776/390782848432DDB93ADF74ECB1678995.jpg" class="imagem-produto-zoom fontawesome-zoom-in">

                                </a>
                            </div>
                            
                                                                                <div>
                                <a  href="/web-files/upload/thumbs/A1CDDAF658092CA098A6ED2FF8C2B0F9/352D15CF7B234AC8600E460BA1F08D2A.jpg" class="imagem-produto" rel="gallery">

                                    <img   src="/web-files/upload/thumbs/9722DBCD270B7EF7C1629A7887FAC86B/6AD0A521D1C81CDB3A5F3A5CE8589DF3.jpg" alt="Camisa Masculina" border="0" title="Camisa Masculina" />
                                </a>
                                <a  href="/web-files/upload/thumbs/A1CDDAF658092CA098A6ED2FF8C2B0F9/352D15CF7B234AC8600E460BA1F08D2A.jpg" class="imagem-produto-zoom fontawesome-zoom-in">

                                </a>
                            </div>
                            
                        
                    </div> 

                    <div class="slider-nav product-slider-nav">
                        
                                                    <div style="width: 130px !important;">
                                <img style="cursor:pointer;" width="100" height='100' src="/web-files/upload/thumbs/3EB20EA3705800DCDA50232E0C45D8DC/69D44DFC22D874536A1F71F3AC53DC54.jpg" alt="Camisa Masculina" border="0" title="Camisa Masculina" />
                            </div>
                            
                                                    <div style="width: 130px !important;">
                                <img style="cursor:pointer;" width="100" height='100' src="/web-files/upload/thumbs/0A47A6CA6772806389F8279A2F384399/CA78AD0314A08F207781207110113CB1.jpg" alt="Camisa Masculina" border="0" title="Camisa Masculina" />
                            </div>
                            
                                                    <div style="width: 130px !important;">
                                <img style="cursor:pointer;" width="100" height='100' src="/web-files/upload/thumbs/3EA79E12D8C0BC4E13C6FAF69F7DC38E/AEBBF89D359ED03C4D5168F717E2EE8B.jpg" alt="Camisa Masculina" border="0" title="Camisa Masculina" />
                            </div>
                            
                                            </div>
                </figure>
                

                
                

                
                
                
                

                
                
                
                

                


                
                
                
                
            </div>
            <div class="col-sm-7">
                <div class="product-infos">
                    <div class="product-infos-row">
                        <h1 class="title">Camisa Masculina</h1>
                        <div class="price-rating">
                            <span class="estrelas e-5"></span>
                            <span class="price" style="text-align: right;">
                                 <span style="float:right; margin-bottom: 10px">R$ 129,90</span>
                                <br>
                                <span class="produto-parcelamento" style="font-size: 14px; text-align: right; display: inherit;">ou <strong>6x</strong> de <strong>R$ 21,65</strong></span>
                            </span>
                        </div>
                    </div>


                    <div class="product-infos-row">   

                        <input type="hidden" id="client_hidden" name="client_hidden" value="1A9C1DAE4855AF45065535B4AA384C55"/>
                        <input type="hidden" id="codproduto" name="codproduto" value="AC495248300239DADE219113A0265587"/>
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
                                                
                                                <option value='' selected></option>
                                                                                                    <option value='D75753C99AF27F1BB238E0E737A84796' >P - Pequena</option>
                                                    
                                                                                                    <option value='6E6B8D4F217D6FDEB8861288E0F76E26' >M - Media</option>
                                                    
                                                                                                    <option value='E359395E40B591BFB5145023D76ABB08' >G - Grande</option>
                                                    
                                                                                                    <option value='8E1D8A460E0455F1C67C000ED66E4AD8' >GG - Grande</option>
                                                    
                                                                                                    <option value='A5F3E55CB94D40596EF0444C0F3668CB' >XG - Extra Grande</option>
                                                    
                                                                                            </select>
                                        </div>
                                    </td>
                                    <td valign='left'>
                                        <div class='label-top inline-middle'>
                                            <select name='quantidade_0' id='quantidade_0' class='select select-loop' onchange='javascript:is_disponibilidade_row(0);'/>
                                            <option value='' selected></option>
                                            
                                                                                            <option style='margin-left:20px; position: absolute;' value='1'>01</option>
                                                
                                                                                            <option style='margin-left:20px; position: absolute;' value='2'>02</option>
                                                
                                                                                            <option style='margin-left:20px; position: absolute;' value='3'>03</option>
                                                
                                                                                            <option style='margin-left:20px; position: absolute;' value='4'>04</option>
                                                
                                                                                            <option style='margin-left:20px; position: absolute;' value='5'>05</option>
                                                
                                                                                            <option style='margin-left:20px; position: absolute;' value='6'>06</option>
                                                
                                                                                            <option style='margin-left:20px; position: absolute;' value='7'>07</option>
                                                
                                                                                            <option style='margin-left:20px; position: absolute;' value='8'>08</option>
                                                
                                                                                            <option style='margin-left:20px; position: absolute;' value='9'>09</option>
                                                
                                                                                            <option style='margin-left:20px; position: absolute;' value='10'>10</option>
                                                
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
                            <input type='hidden' class='form-control avise-me-ao-referencia' value='NS-0001'>
                            <input type="text" class='form-control avise-me-ao-chegar-0' id='' value='' placeholder='E-mail'>
                            <span class='input-group-btn'>
                                <button class='btn btn-default avise-me-ao-chegar-button-0' type='button' onclick=''><b>ENVIAR</b></button>
                            </span>
                        </div>
                    </div>

                    
                    
                    
                    
                    

                    


                    <div class="product-infos-row show-btn-comprar">

                        <a href="" class="btn btn-default btn-buy btn-block comprar" data-params="CLIENT_HIDDEN=1A9C1DAE4855AF45065535B4AA384C55&CODPRODUTO=AC495248300239DADE219113A0265587" data-id="" data-img="/web-files/upload/thumbs/5D8444F91CF4EEC43E4D73A79564A552/6F785979D3DF825B8BB647D1FDFDDBBD.jpg" data-redirect="/pt/produtos/checkout/" data-name="Camisa Masculina">INCLUIR NO CARRINHO</a>
                        <br>

                        <span class="Loader hide"><img src="/web-files/img/Loader.GIF" alt="Carregando..." title="Carregando..."/></span>
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
                                    <div>
<h3>CAMISAS MASCULINAS</h3>
<p>1. Camisa de manga curta, feita de algod&atilde;o super leve, para aproveitar o clima carioca em grande estilo.</p>
</div>
                                </div>
                            </div>
                            <div role="tabpanel" class="tab-pane fade" id="profile" style="padding: 1%;">
                                <div class="product-infos-row">
                                    <br/>
                                    <div><!-- Default panel contents -->
<div>MASCULINO</div>
<!-- Table -->
<table>
<thead>
<tr><th>Tamanhos</th><th>Dimens&otilde;es</th></tr>
</thead>
<tbody>
<tr>
<td>P &ndash; Pequena</td>
<td>06 / 53 X 66 / 220</td>
</tr>
<tr>
<td>M &ndash; M&eacute;dia</td>
<td>12 / 54 X 70 / 220</td>
</tr>
<tr>
<td>G &ndash; Grande</td>
<td>11 / 56 X 72 / 220</td>
</tr>
<tr>
<td>GG &ndash; Grande</td>
<td>06 / 59 X 73 / 220</td>
</tr>
<tr>
<td>XG &ndash; Extra Grande</td>
<td>05 / 61 X 74 / 220</td>
</tr>
</tbody>
</table>
</div>
<div>&nbsp;</div>
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
                                        
                                        <li style="margin: 0 !important;"><a href="http://www.facebook.com/sharer.php?u=http://www.estilocarioca.com.br/pt/nilton-santos/camisa-masculina-2?news=s&utm_source=fbBTshare" target="_blank" ><b class="entypo-facebook"></b></a></li>
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
<!-- FOOTER  -->



<footer class="footer ">
    <div class="container ">

        <div class="row footer-content">
            <div class="col-sm-6 col-md-3">
                <h2 class="footer-title">LOGIN E CADASTRO</h2>
                <ul class="list-unstyled">
                    <li><a href="/pt/conta/">Acompanhe seu pedido</a></li>
                    <li><a href="/pt/conta/login-cadastro/">Login e Cadastro</a></li>
                </ul>
            </div>
            <div class="col-sm-6 col-md-3">
                <h2 class="footer-title">ATENDIMENTO AO CLIENTE</h2>
                <ul class="list-unstyled">
                    <li><a href="/pt/informacoes/contato">Entre em contato</a></li>
                    <li><a href="/pt/informacoes/trocas-e-devolucoes">Trocas e devoluções</a></li>
                    <li><a href="/pt/informacoes/termos-servicos">Termos de serviço</a></li>
                </ul>
            </div>
            <div class="col-sm-6 col-md-3">
                <h2 class="footer-title">SIGA A EC</h2>
                <ul class="list-unstyled list-inline list-social">
                    <!--<li><a href=""><i class="sprite sprite-twitter-2"></i></a></li>-->
                    <li><a href="https://www.facebook.com/estilocarioca" target="blank"><b class="entypo-facebook"></b></a></li>
                    <li><a href="https://instagram.com/estilocarioca/" target="blank"><b class="entypo-instagrem"></b></a></li>
                </ul>
            </div>
            <div class="col-sm-6 col-md-3">

                <h2 class="footer-title">FIQUE POR DENTRO DA EC</h2>
                <form action="" method="post" class="newsletter-form ajax-form" novalidate="">
                    <div class="form-row">
                        <input name="nome_newsletter_2" id="nome" type="text" class="form-control" placeholder="Seu nome" required>
                    </div>
                    <div class="form-row">
                        <input name="email_newsletter_2" id="email" type="text" class="form-control" placeholder="Seu e-mail" required>
                    </div>
                    <div class="form-row">
                        <button type="submit" class="btn btn-default btn-block">Enviar</button>
                    </div>
                    <div id="erro_newsletter_2"> </div>
                </form>
            </div>
        </div>
        <hr>
        
        
        <div class="row footer-bottom">
            <div class="col-sm-6 col-sm-push-6 text-right">
                <span class="selo-es sprite sprite-selo-es"></span>
                <span class="cartoes sprite sprite-cartoes"></span>
                <img src="/web-files/img/bandeiras.png" alt=""/>
            </div>
            <div class="col-sm-6 col-sm-pull-6">
                <p class="copy">Desenvolvido por <span id="dl"></span></p>
                <script type="text/javascript">
                    var _dl = _dl || {};
                    _dl.width = "80";
                    _dl.color = "gray";
                    (function () {
                        var a = document.createElement("script");
                        a.type = "text/javascript";
                        a.async = !0;
                        a.src = "//static.designlab.com.br/js/bydl.js";
                        var b = document.getElementsByTagName("script")[0];
                        b.parentNode.insertBefore(a, b)
                    })();
                </script>
            </div>
                    
        </div>
                <hr>
                    
                    <div class="row footer-content text-center">
            <p style="line-height: 1.8em;font-size: 1.2rem;">
                <strong>RMGSPORT COMERCIO EIRELI - ME</strong>
                <br>CNPJ: 21.468.076/0001-16
                <br>&copy; Todos os direitos reservados - Rua Gazzi de Sá, nº17 - Lote 17 Quadra G , Barra da Tijuca / RJ - CEP: 22.793-210 
                <br>Atendimento ao cliente: rodrigo@estilocarioca.com.br - 21 3326.1986
            </p>
        </div>
    </div>
</footer>                

<script src="//code.jquery.com/jquery-1.11.2.min.js"></script>
<script language="javascript" src="/web-files/js/funcoes.js"></script>
<script src="http://www.estilocarioca.com.br/application/template/estilocarioca/assets/js/plugins/slick.min.js"></script>
<script src="http://www.estilocarioca.com.br/application/template/estilocarioca/assets/js/plugins/jquery.raty.js"></script>
<script src="http://www.estilocarioca.com.br/application/template/estilocarioca/assets/js/plugins/underscore-min.js"></script>
<script src="http://www.estilocarioca.com.br/application/template/estilocarioca/assets/js/plugins/mustache.min.js"></script>
<script src="http://www.estilocarioca.com.br/application/template/estilocarioca/assets/js/plugins/jquery.magnific-popup.min.js"></script>
<script src="http://www.estilocarioca.com.br/application/template/estilocarioca/assets/js/scripts.js"></script>
<script language="javascript" src="/web-files/bootstrap/js/bootstrap.js"></script>
<script language="javascript" src="/web-files/js/jQuery-Mask-Plugin.js"></script>
<script language="javascript" src="/web-files/js/vendor/jquery.payment.js"></script>
<script language="javascript" src="/web-files/js/vendor/jquery.mask.min.js"></script>
<script language="javascript" src="/web-files/js/joker.js"></script>
<script language="javascript" src="/web-files/js/default.js"></script>
<script language="javascript" src="/web-files/js/sweet-alert.js"></script>
<script language="javascript" src="/web-files/js/stickyfloat.js"></script>
 <script language="javascript"> jQuery('.checkout-panel-2').stickyfloat({ duration: 0, easing:"linear",   startOffset: 60,   }); </script>
<script src='http://cdnjs.cloudflare.com/ajax/libs/es5-shim/2.3.0/es5-shim.js'></script>



</body>
</html>

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
    
            str += "<option value='D75753C99AF27F1BB238E0E737A84796'>P - Pequena</option>";
        
            str += "<option value='6E6B8D4F217D6FDEB8861288E0F76E26'>M - Media</option>";
        
            str += "<option value='E359395E40B591BFB5145023D76ABB08'>G - Grande</option>";
        
            str += "<option value='8E1D8A460E0455F1C67C000ED66E4AD8'>GG - Grande</option>";
        
            str += "<option value='A5F3E55CB94D40596EF0444C0F3668CB'>XG - Extra Grande</option>";
        
            str += "</select>";
        str += "</div>";
        str += "</td>";
        str += "<td style='text-align: center'>";
        str += "<div class='label-top inline-middle'>";
        str += "<select name='quantidade_" + qntdd + "' id='quantidade_" + qntdd + "' class='select select-loop' onchange='javascript:is_disponibilidade_row(" + qntdd + ");'>";
        str += "<option value='' selected></option>";
    
            str += "<option value='1'>01</option>";
        
            str += "<option value='2'>02</option>";
        
            str += "<option value='3'>03</option>";
        
            str += "<option value='4'>04</option>";
        
            str += "<option value='5'>05</option>";
        
            str += "<option value='6'>06</option>";
        
            str += "<option value='7'>07</option>";
        
            str += "<option value='8'>08</option>";
        
            str += "<option value='9'>09</option>";
        
            str += "<option value='10'>10</option>";
        
            str += "</select>";
        str += "</div>";
        str += "</td><td id='verificar_" + qntdd + "' style='width: 30%;'> <span style='color: #8795ae'>VERIFICAR!</span> </td>";
        str += "</tr>";
        str += "<tr class='avise-me-hide-" + qntdd + " hide'>";
        str += "<td colspan='3'>";
        str += "<div class='product-infos-row hide-email'>";
        str += "<label style=\"margin-bottom: 15px; margin-top: 10px; color: #87020b; float: left; font-family: 'Roboto Slab', 'Helvetica', 'sans-serif'\">Avise-me ao chegar: </label> ";
        str += "<div class='input-group'>";
        str += "<input type='hidden' class='form-control avise-me-ao-referencia' value='NS-0001'>";
        str += "<input type='text' class='form-control avise-me-ao-chegar-" + qntdd + "' id='' value='' placeholder='E-mail'>";
        str += "<span class='input-group-btn'>";
        str += "<button class='btn btn-default avise-me-ao-chegar-button-" + qntdd + "' type='button' onclick=''><b>ENVIAR</b></button>";
        str += "</span>";
        str += "</div>";
        str += "</div>";
        str += "<span class='avise-me-load-" + qntdd + " Loader hide'><img src='/web-files/img/Loader.GIF' alt='Carregando...' title='Carregando...' style='width: 20px'/></span>";
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

        $("#" + verificar).html("<div style='line-height: 0; color: #8795ae; position: relative; top: 9px;'><img src='/web-files/img/Loader.GIF' alt='Carregando...' title='Carregando...' border='0' style='opacity:1; width: 20px'/><br/><br/></div>");

        $.ajax({
            type: 'post',
            data: "codquantidade=" + codquantidade,
            url: '/web-files/ajax/is-disponibilidade',
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
