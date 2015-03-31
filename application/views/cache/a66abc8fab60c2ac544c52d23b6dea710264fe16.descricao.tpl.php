<?php /*%%SmartyHeaderCode:211767352555133483f3be75-54334808%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'a66abc8fab60c2ac544c52d23b6dea710264fe16' => 
    array (
      0 => '/home/estil450/public_html/application/views/descricao.tpl',
      1 => 1427302232,
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
      1 => 1427303322,
      2 => 'file',
    ),
    '176fac5985d5dc4b43edea6c0618ca1f6996d998' => 
    array (
      0 => '/home/estil450/public_html/application/views/footer.tpl',
      1 => 1427310006,
      2 => 'file',
    ),
    'e42802b9f9225092d26556a5ec1f3ebf37f60366' => 
    array (
      0 => '/home/estil450/public_html/application/views/atendimento_online.tpl',
      1 => 1417455048,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '211767352555133483f3be75-54334808',
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
  'unifunc' => 'content_551334844d2ca8_63278332',
  'cache_lifetime' => 120,
),true); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_551334844d2ca8_63278332')) {function content_551334844d2ca8_63278332($_smarty_tpl) {?><!DOCTYPE HTML>
<html lang="pt-br">

    <head>
        <meta charset="UTF-8">
        <title>Estilo Carioca | Nilton Santos | Camisa Maculina</title>

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

        <meta property="og:title" content="Camisa Maculina - mariadebarro.com" />        <meta property="og:type" content="product" />        <meta property="og:site_name" content="estilocarioca.com.br" />        <meta property="og:description" content="
CAMISAS MASCULINAS
Ver a descri&ccedil;&atilde;o para esse produto.
" />        <meta property="og:email" content="contato@estilocarioca.com.br"/>        <meta property="og:phone_number" content="21 32835265"/>        <meta property="og:street-address" content="Edifício Global 7000 Offices, Estrada dos Bandeirantes, 7000 - Rio de Janeiro/RJ - CEP: 22780-084, Bloco C Sala 290"/>        <meta property="og:locality" content="Rio de Janeiro"/>        <meta property="og:region" content="Rio de Janeiro — Capital"/>        <meta property="og:country-name" content="Brasil"/>        <meta property="og:postal-code" content="22780-084"/>    </head>
    <body class="theme-default ">

        <div class="search-popup">
            <div class="search-popup-out popup-close">
                <div class="search-popup-inner">
                    <div class="search-popup-container">
                        <div class="relative">
                            <form class="form search-popup-form" role="search" action="/en/novos-produtos" method="post">
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
            <a class="brand" href="/en/">
                <img src="http://www.estilocarioca.com.br/application/template/estilocarioca/assets/img/estilocarioca2.png" width="71" height="68">
            </a>
        </div>
        <nav class="navbar-collapse">
            <ul class="nav navbar-nav navbar-right">
                <li class="navbar-social">
                    <a class="face" href="https://www.facebook.com/estilocarioca">
                        <b class="entypo-facebook"></b>
                    </a>
                    <a class="insta" href="https://instagram.com/estilocarioca/">
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
                        <a href="/en/conta/" id="nav-login" style="display: inline-block;"> Minha conta</a>
                    </li>
                    <li>
                        <a href="/en/conta/sair" id="nav-login" style="display: inline-block;">Sair</a>
                    </li>   
                                <li class="navbar-cart">
                    <a href="/en/produtos/checkout/">
                        <i class="icon sprite sprite-cart"></i>
                        <span class="value">1</span>
                    </a>
                </li>
            </ul>
                    
            <ul class="nav navbar-nav">
                <li >
                    <a href="/en/">Home</a>
                </li>
                <li >
                    <a href="/en/informacoes/quem-somos">A Estilo Carioca</a>
                </li>
                <li >
                    <a href="/en/junior/">Junior</a>
                </li>
                <li  class="active">
                    <a href="/en/nilton-santos">Nilton Santos</a>
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
                                <a  href="/web-files/upload/thumbs/04B702519B76369249E6AD9690E0E2EF/221C8A6A166228B9D4B23F1369D0EC68.jpg" class="imagem-produto" rel="gallery">

                                    <img   src="/web-files/upload/thumbs/02FA08FD6B9BAAA643FADDF6B66504DD/25456F15F04C794D377D0017CED46D49.jpg" alt="Camisa Maculina" border="0" title="Camisa Maculina" />
                                </a>
                                <a  href="/web-files/upload/thumbs/04B702519B76369249E6AD9690E0E2EF/221C8A6A166228B9D4B23F1369D0EC68.jpg" class="imagem-produto-zoom fontawesome-zoom-in">

                                </a>
                            </div>
                            
                                                                                <div>
                                <a  href="/web-files/upload/thumbs/4305BEAE1B9BDEEFBD4040C315272C17/5D0BDED2BCBFD45F5E81EDEACEDBF645.jpg" class="imagem-produto" rel="gallery">

                                    <img   src="/web-files/upload/thumbs/0A82F4D9ABF0914CD862497021DE1930/52795E0A0F3484DCD777DC27AEF08D2B.jpg" alt="Camisa Maculina" border="0" title="Camisa Maculina" />
                                </a>
                                <a  href="/web-files/upload/thumbs/4305BEAE1B9BDEEFBD4040C315272C17/5D0BDED2BCBFD45F5E81EDEACEDBF645.jpg" class="imagem-produto-zoom fontawesome-zoom-in">

                                </a>
                            </div>
                            
                        
                    </div> 

                    <div class="slider-nav product-slider-nav">
                        
                                                    <div class="thumb_desc" >
                                <img style="cursor:pointer;" width="100" height='100' src="/web-files/upload/thumbs/17AF3DC07BE6F1335E750E57097CA11B/2FB1B237F9602506901ACF548150717F.jpg" alt="Camisa Maculina" border="0" title="Camisa Maculina" />
                            </div>
                            
                                                    <div class="thumb_desc" >
                                <img style="cursor:pointer;" width="100" height='100' src="/web-files/upload/thumbs/4DCD08F22648D8EA02808E8CC525A509/794B6CF7F7E24D72AF6663A9ECA45B25.jpg" alt="Camisa Maculina" border="0" title="Camisa Maculina" />
                            </div>
                            
                                            </div>
                </figure>
                

                
                

                
                
                
                

                
                
                
                

                


                
                
                
                
            </div>
            <div class="col-sm-7">
                <div class="product-infos">
                    <div class="product-infos-row">
                        <h1 class="title">Camisa Maculina</h1>
                        <div class="price-rating">
                            <span class="estrelas e-5"></span>
                            <span class="price" style="text-align: right;">
                                 <span style="float:right; margin-bottom: 10px">R$ 149,90</span>
                                <br>
                                <span class="produto-parcelamento" style="font-size: 14px; text-align: right; display: inherit;">ou <strong>6x</strong> de <strong>R$ 24,98</strong></span>
                            </span>
                        </div>
                    </div>


                    <div class="product-infos-row">   

                        <input type="hidden" id="client_hidden" name="client_hidden" value="17EF39563542E38CE771DEB8DAF7E2C4"/>
                        <input type="hidden" id="codproduto" name="codproduto" value="21957ACCA13AFC2F1593984B8882361F"/>
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
                                            <select name='tamanho_0' id='tamanho_0' class='select select-loop escolha' onchange='javascript:is_disponibilidade(this.value, this.name);'>
                                                
                                                <option value='' selected></option>
                                                                                                    <option value='E178A67BB04CAE83A980D681C96EE727' >P - Pequena</option>
                                                    
                                                                                                    <option value='875F250C12B5D14A33DB247B8759A8BE' >M - Média</option>
                                                    
                                                                                                    <option value='82C01E6268463E53D4E84AD374945D2C' >G - Grande</option>
                                                    
                                                                                                    <option value='BF34B54D5E0B68E99B0069D67E871675' >GG - Grande</option>
                                                    
                                                                                                    <option value='BD4D6C7905DF830D5DA52F9F48BD93AF' >XG - Extra Grande</option>
                                                    
                                                                                            </select>
                                        </div>
                                    </td>
                                    <td valign='left'>
                                        <div class='label-top inline-middle'>
                                            <select name='quantidade_0' id='quantidade_0' class='select select-loop escolha' onchange='javascript:is_disponibilidade_row(0);'/>
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
                                    <td id='verificar_0' style='width: 30%;'> <div class="verificar" style='line-height: 35px; color: #8795ae;'>VERIFICAR!</div> </td>

                                </tr>
                                
                            </tbody> 
                        </table>


                    </div>   
                    <div class='avise-me-hide-0 hide product-infos-row hide-email'>
                        <label style="text-align: center!important; font-family: 'Roboto Condensed', 'Helvetica', 'sans-serif'; font-weight: 400; letter-spacing: 1px; text-transform: uppercase;">Avise-me ao chegar: </label> 
                        <div class="input-group">
                            <input type='hidden' class='form-control avise-me-ao-referencia' value='NS-0006'>
                            <input type="text" class='form-control avise-me-ao-chegar-0' id='' value='rodrigo@estilocarioca.com.br' placeholder='E-mail'>
                            <span class='input-group-btn'>
                                <button class='btn btn-default avise-me-ao-chegar-button-0' type='button' onclick=''><b>ENVIAR</b></button>
                            </span>
                        </div>
                    </div>

                    
                    
                    
                    
                    

                    


                    <div class="product-infos-row show-btn-comprar">

                        <a href="" class="btn btn-default btn-buy btn-block comprar" data-params="CLIENT_HIDDEN=17EF39563542E38CE771DEB8DAF7E2C4&CODPRODUTO=21957ACCA13AFC2F1593984B8882361F" data-id="" data-img="/web-files/upload/thumbs/04B702519B76369249E6AD9690E0E2EF/221C8A6A166228B9D4B23F1369D0EC68.jpg" data-redirect="/en/produtos/checkout/" data-name="Camisa Maculina">INCLUIR NO CARRINHO</a>
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
<p>Ver a descri&ccedil;&atilde;o para esse produto.</p>
</div>
                                </div>
                            </div>
                            <div role="tabpanel" class="tab-pane fade" id="profile" style="padding: 1%;">
                                <div class="product-infos-row">
                                    <br/>
                                    <div class=\"panel panel-default\"><!-- Default panel contents -->
<div class=\"panel-heading\">MASCULINO</div>
<!-- Table -->
<table class=\"table\">
<thead>
<tr><th style=\"padding: 8px !important;\">Tamanhos</th><th style=\"padding: 8px !important;\">Dimens&otilde;es</th></tr>
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
<div class=\"panel panel-default\">&nbsp;</div>
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
                                        
                                        <li style="margin: 0 !important;"><a href="http://www.facebook.com/sharer.php?u=http://www.estilocarioca.com.br/en/nilton-santos/camisa-maculina?news=s&utm_source=fbBTshare" target="_blank" ><b class="entypo-facebook"></b></a></li>
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
                                                <div class="col-sm-3">
                        <div class="thumb">
                            <div class="thumb-img">
                                <a href="/en/nilton-santos/camisa-masculina-2">
                                    <img src="/web-files/upload/thumbs/3EB20EA3705800DCDA50232E0C45D8DC/69D44DFC22D874536A1F71F3AC53DC54.jpg" alt="Camisa Bi Mundial" title="Camisa Bi Mundial" width="312" height="312">
                                </a>
                            </div>
                            <div class="thumb-holder">
                                <div class="thumb-holder-out">
                                    <div class="thumb-holder-in">
                                        <h2 class="price">R$ 129,90</h2>
                                        <p class="name">Nilton Santos<br/><span style="font-size: 18px !important;">Camisa Bi Mundial</span></p>
                                        <a href="/en/nilton-santos/camisa-masculina-2" class="btn btn-default btn-buy">COMPRAR</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                                                                <div class="col-sm-3">
                        <div class="thumb">
                            <div class="thumb-img">
                                <a href="/en/nilton-santos/baby-look-1">
                                    <img src="/web-files/upload/thumbs/D502690F150ADE901D99AA478472DC6B/7FC1C20D4E8D8D0A108C1806FC67959F.jpg" alt="Baby Look" title="Baby Look" width="312" height="312">
                                </a>
                            </div>
                            <div class="thumb-holder">
                                <div class="thumb-holder-out">
                                    <div class="thumb-holder-in">
                                        <h2 class="price">R$ 159,00</h2>
                                        <p class="name">Nilton Santos<br/><span style="font-size: 18px !important;">Baby Look</span></p>
                                        <a href="/en/nilton-santos/baby-look-1" class="btn btn-default btn-buy">COMPRAR</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                                                                <div class="col-sm-3">
                        <div class="thumb">
                            <div class="thumb-img">
                                <a href="/en/nilton-santos/camisa-masculina-3">
                                    <img src="/web-files/upload/thumbs/B57D9770DDC8E281B42EDDAA76528A61/6EEA28499DD6A26FBBDAE56CB6B8A332.jpg" alt="Camisa Masculina" title="Camisa Masculina" width="312" height="312">
                                </a>
                            </div>
                            <div class="thumb-holder">
                                <div class="thumb-holder-out">
                                    <div class="thumb-holder-in">
                                        <h2 class="price">R$ 159,00</h2>
                                        <p class="name">Nilton Santos<br/><span style="font-size: 18px !important;">Camisa Masculina</span></p>
                                        <a href="/en/nilton-santos/camisa-masculina-3" class="btn btn-default btn-buy">COMPRAR</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                                                                <div class="col-sm-3">
                        <div class="thumb">
                            <div class="thumb-img">
                                <a href="/en/nilton-santos/nilton-santos-manga-longa-1">
                                    <img src="/web-files/upload/thumbs/AC529423034079FBCF30C78986410318/C0B5B61FF6B28BC796FB7C80BF9E9482.jpg" alt="Nilton Santos Manga Longa" title="Nilton Santos Manga Longa" width="312" height="312">
                                </a>
                            </div>
                            <div class="thumb-holder">
                                <div class="thumb-holder-out">
                                    <div class="thumb-holder-in">
                                        <h2 class="price">R$ 149,90</h2>
                                        <p class="name">Nilton Santos<br/><span style="font-size: 18px !important;">Nilton Santos Manga Longa</span></p>
                                        <a href="/en/nilton-santos/nilton-santos-manga-longa-1" class="btn btn-default btn-buy">COMPRAR</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                            

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
                    <li><a href="/en/conta/">Acompanhe seu pedido</a></li>
                    <li><a href="/en/conta/login-cadastro/">Login e Cadastro</a></li>
                </ul>
            </div>
            <div class="col-sm-6 col-md-3">
                <h2 class="footer-title">ATENDIMENTO AO CLIENTE</h2>
                <ul class="list-unstyled">
                    <li><a href="/en/informacoes/contato">Entre em contato</a></li>
                    <li><a href="/en/informacoes/trocas-e-devolucoes">Trocas e devoluções</a></li>
                    <li><a href="/en/informacoes/termos-servicos">Termos de serviço</a></li>
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
            <p style="line-height: 1.8em;font-size: 1.2rem;padding: 20px;">
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
    
            str += "<option value='E178A67BB04CAE83A980D681C96EE727'>P - Pequena</option>";
        
            str += "<option value='875F250C12B5D14A33DB247B8759A8BE'>M - Média</option>";
        
            str += "<option value='82C01E6268463E53D4E84AD374945D2C'>G - Grande</option>";
        
            str += "<option value='BF34B54D5E0B68E99B0069D67E871675'>GG - Grande</option>";
        
            str += "<option value='BD4D6C7905DF830D5DA52F9F48BD93AF'>XG - Extra Grande</option>";
        
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
        str += "<input type='hidden' class='form-control avise-me-ao-referencia' value='NS-0006'>";
        str += "<input type='text' class='form-control avise-me-ao-chegar-" + qntdd + "' id='' value='rodrigo@estilocarioca.com.br' placeholder='E-mail'>";
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
