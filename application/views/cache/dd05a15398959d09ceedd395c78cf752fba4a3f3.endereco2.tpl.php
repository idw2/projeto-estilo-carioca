<?php /*%%SmartyHeaderCode:154461924554fa1aa2bf3fa9-94523383%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'dd05a15398959d09ceedd395c78cf752fba4a3f3' => 
    array (
      0 => '/home/estil450/public_html/application/views/endereco2.tpl',
      1 => 1425676862,
      2 => 'file',
    ),
    '9915484c49efae1e853c1be7aa9d8b2c159a82c4' => 
    array (
      0 => '/home/estil450/public_html/application/views/header.tpl',
      1 => 1425667743,
      2 => 'file',
    ),
    '21ad6c09fd0cb3d807b70a3f24dfe7c8b337e8c6' => 
    array (
      0 => '/home/estil450/public_html/application/views/top.tpl',
      1 => 1424895433,
      2 => 'file',
    ),
    'dc6348d01822c4289c6134acb5dd40c7d0a6cfed' => 
    array (
      0 => '/home/estil450/public_html/application/views/navbar2.tpl',
      1 => 1417455060,
      2 => 'file',
    ),
    '176fac5985d5dc4b43edea6c0618ca1f6996d998' => 
    array (
      0 => '/home/estil450/public_html/application/views/footer.tpl',
      1 => 1425665078,
      2 => 'file',
    ),
    'e42802b9f9225092d26556a5ec1f3ebf37f60366' => 
    array (
      0 => '/home/estil450/public_html/application/views/atendimento_online.tpl',
      1 => 1417455048,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '154461924554fa1aa2bf3fa9-94523383',
  'variables' => 
  array (
    'sem_endereco' => 0,
    'endereco_list' => 0,
    'endereco' => 0,
    'i' => 0,
    'codcadastro' => 0,
    'msg_erro' => 0,
    'erro' => 0,
    'cep' => 0,
    'web_files' => 0,
    'logradouro' => 0,
    'numero' => 0,
    'complemento' => 0,
    'bairro' => 0,
    'cidade' => 0,
    'estado' => 0,
    'language' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.19',
  'unifunc' => 'content_54fa1aa30a8458_85738348',
  'cache_lifetime' => 120,
),true); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_54fa1aa30a8458_85738348')) {function content_54fa1aa30a8458_85738348($_smarty_tpl) {?><!DOCTYPE HTML>
<html lang="pt-br">

    <head>
        <meta charset="UTF-8">
        <title>Estilo Carioca | Meus Endereços</title>

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

                                                                                            </head>
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
        <nav class="collapse navbar-collapse">
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
                <li >
                    <a href="/pt/nilton-santos">Nilton Santos</a>
                </li>
            </ul>
            <ul class="nav navbar-nav navbar-right">
                <li class="navbar-social">
                    <a href="https://instagram.com/estilocarioca/">
                        <i class="sprite sprite-instagram"></i>
                    </a>
                    <a href="https://www.facebook.com/estilocarioca">
                        <i class="sprite sprite-facebook"></i>
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
                        <a href="/pt/conta/" id="nav-login" style="display: inline-block;"> Minha conta</a>
                    </li>
                    <li>
                        <a href="/pt/conta/sair" id="nav-login" style="display: inline-block;">Sair</a>
                    </li>   
                                <li class="navbar-cart">
                    <a href="/pt/produtos/checkout/">
                        <i class="icon sprite sprite-cart"></i>
                        <span class="value">1</span>
                    </a>
                </li>
            </ul>
        </nav>
    </div>
</header>  
        </section>


<div class="container"></div>
<section class="section">
    <div class="container" style="margin-bottom: 8%">
        <div class="row">
            <div class="section-title">
                <h2 class="title">Meus Endereços</h2>
                <p class="subtitle">--//--</p>
            </div>
        </div>
        <div class="row">
               

    <div class="row">
        <div class="col-lg-12">
            <ul class="nav nav-tabs nav-justified navbar-checkout" role="tablist" style="font-size: 14px">
                <li ><a href="/pt/conta/meus-pedidos/">Meus Pedidos</a></li>
                <li class="active"><a href="/pt/conta/endereco/">Meus Endereços</a></li>
                <li ><a href="/pt/conta/meus-dados/">Meus Dados</a></li>
                <li ><a href='/pt/conta/wishlist'>Wishlist</a></li>
                    
            </ul>
            
        </div>
    </div>


        </div>
        <br/><br/>
        <div class="row">
            <div class="col-lg-12 col-md-12">
                <div class="row" id="step-2">

                    <div class="col-sm-6 col-sm-push-6">
                                                <form class="navbar-form navbar-left" name="formListenderecos" id="formListenderecos" style="width: 100%">    
                             
                              
                                                                                                            <h4 colspan='2'>1. Endereço de entrega</h4>
                                                                        <div class="">
                                        <div class="panel-body">
                                            <table class="table" style="font-size: 14px">
                                                <tr>
                                                    <td rowspan='4'><input type='radio' value='1' name='prioridade' onclick="javascript:alter_endereco_entrega2('CC61458307372203378CC50B43C07D71', 'A1556FEE63CD9251D6C66B01206BBDBD')" id='CC61458307372203378CC50B43C07D71' checked="true"/></td>
                                                    <td>CEP:</td>
                                                    <td>72450-050</td> 
                                                    <td rowspan='4'><span class="plus" onclick="javascript:del_row_enderecos2('CC61458307372203378CC50B43C07D71', 'A1556FEE63CD9251D6C66B01206BBDBD')"><i class="fa fa-times"></i></span></td>
                                                </tr>    
                                                <tr> <td>Endereço:</td><td>Quadra 5, nº 104 </td> </tr>
                                                <tr> <td>Bairro:</td><td>Setor Leste (Gama)</td> </tr>
                                                <tr> <td>Cidade/UF:</td><td>Brasília/DF</td> </tr>
                                            </table>
                                        </div>
                                    </div>
                                    
                                    
                              
                                                                                                            <h4 colspan='2'>2. Endereço adicional</h4>
                                                                        <div class="">
                                        <div class="panel-body">
                                            <table class="table" style="font-size: 14px">
                                                <tr>
                                                    <td rowspan='4'><input type='radio' value='0' name='prioridade' onclick="javascript:alter_endereco_entrega2('88BF86A516D4E99A318ACE0142DF39D2', 'A1556FEE63CD9251D6C66B01206BBDBD')" id='88BF86A516D4E99A318ACE0142DF39D2' /></td>
                                                    <td>CEP:</td>
                                                    <td>72450-050</td> 
                                                    <td rowspan='4'><span class="plus" onclick="javascript:del_row_enderecos2('88BF86A516D4E99A318ACE0142DF39D2', 'A1556FEE63CD9251D6C66B01206BBDBD')"><i class="fa fa-times"></i></span></td>
                                                </tr>    
                                                <tr> <td>Endereço:</td><td>Quadra 5, nº 104 </td> </tr>
                                                <tr> <td>Bairro:</td><td>Setor Leste (Gama)</td> </tr>
                                                <tr> <td>Cidade/UF:</td><td>Brasília/DF</td> </tr>
                                            </table>
                                        </div>
                                    </div>
                                    
                                    
                                                    </form>
                    </div> 

                    <div class="col-sm-6 col-sm-pull-6">
                        <div class="panel panel-primary" >
                            <div class="panel-body" style="border: solid 0 #e9e9e9;">
                                                                <form class="form" id="formulario_enderecos" method="post" onsubmit="return false">

                                    
                                    
                                    <div class="form-group">
                                        <label for="cep" class="required">CEP</label>
                                        <div class="form-inline">
                                            <input type="text" class="form-control" id="cep" name="cep" maxlength="9" value="" placeholder="CEP" style="margin-right: 15px;"/>
                                            <span class="input-group" style="cursor: pointer; font-size: 15px;" id="pesquisar_endereco"><a>» Pesquisar</a></span>  
                                            <span class="Loader hide"><img src="/web-files/img/Loader.GIF" alt="Carregando..." title="Carregando..." border="0" style="width: 25px"/></span>
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <label for="cep" class="required">Endereço</label>
                                        <div class="row">
                                            <div class="col col-sm-8">
                                                <input type="text" class="form-control" id="logradouro" name="logradouro" maxlength="140" value="" placeholder="Endereço"/>
                                            </div>
                                            <div class="col col-sm-4">
                                                <input type="text" class="form-control" id="numero" name="numero" maxlength="5" value="" placeholder="Nº" onkeypress="return formataNumDV(event, this, 6);"/>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <label for="cep" class="required">Completemento</label>
                                        <input type="text" class="form-control" id="complemento" name="complemento" maxlength="100" value="" placeholder="Complemento"/>
                                    </div>
                                    <div class="form-group">
                                        <label for="cep" class="required">Bairro</label>
                                        <input type="text" class="form-control" id="bairro" name="bairro" maxlength="50" value="" placeholder="Bairro"/>
                                    </div>
                                    <div class="form-group">
                                        <label for="cep" class="required">Cidade / Estado</label>
                                        <div class="row">
                                            <div class="col col-sm-8">
                                                <input type="text" class="form-control" id="cidade" name="cidade" maxlength="80" value="" placeholder="Cidade"/>
                                            </div>
                                            <div class="col col-sm-4">
                                                <input type="text" class="form-control" id="estado" name="estado" maxlength="2" value="" placeholder="UF"/>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <button type="submit" class="btn btn-default" name="enviar" onclick="javascript:cadastrar_endereco_conta()">Cadastrar endereço</button>
                                        <span class="Loader-endereco hide"><img src="/web-files/img/Loader.GIF" alt="Carregando..." title="Carregando..." border="0" style="width: 25px;"/></span>
                                    </div>
                                </form>
                            </div>
                        </div>
                    </div>

                </div>
                <div>
                    <ul class="list-unstyled">
                        <li class="previous pull-left"><a href="/pt/nossos-produtos" class="btn btn-dark">&larr; Continuar comprando</a></li>
                    </ul>
                </div> 
                <div style="clear: both;"></div>
                <style>
                    .endereco{
                        cursor: pointer;
                    }
                </style>
            </div>
        </div>
    </div>
</section>




<!-- FOOTER  -->



<footer class="footer ">
    <div class="container ">

        <div class="row footer-content">
            <div class="col-sm-6 col-md-3">
                <h2 class="footer-title">LOGIN E CADASTRO:</h2>
                <ul class="list-unstyled">
                    <li><a href="/pt/conta/">Acompanhe seu pedido</a></li>
                    <li><a href="/pt/conta/login-cadastro/">Login e Cadastro</a></li>
                </ul>
            </div>
            <div class="col-sm-6 col-md-3">
                <h2 class="footer-title">ATENDIMENTO AO CLIENTE:</h2>
                <ul class="list-unstyled">
                    <li><a href="/pt/informacoes/contato">Entre em contato</a></li>
                    <li><a href="/pt/informacoes/trocas-e-devolucoes">Trocas e devoluções</a></li>
                    <li><a href="/pt/informacoes/termos-servicos">Termos de serviço</a></li>
                </ul>
            </div>
            <div class="col-sm-6 col-md-2">
                <h2 class="footer-title">SIGA A EC:</h2>
                <ul class="list-unstyled list-inline list-social">
                    <!--<li><a href=""><i class="sprite sprite-twitter-2"></i></a></li>-->
                    <li><a href="https://www.facebook.com/estilocarioca" target="blank"><i class="sprite sprite-facebook-2"></i></a></li>
                    <li><a href="https://instagram.com/estilocarioca/" target="blank"><i class="sprite sprite-instagram-2"></i></a></li>
                </ul>
            </div>
            <div class="col-sm-6 col-md-4">

                <h2 class="footer-title">FIQUE POR DENTRO DA EC:</h2>
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
<?php }} ?>
