<?php /*%%SmartyHeaderCode:97737178154d3c944015c85-77286879%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '719c09098f5be8080f332f349fc5c93d76e44c48' => 
    array (
      0 => '/home/estil450/public_html/application/views/newsletter.tpl',
      1 => 1417455062,
      2 => 'file',
    ),
    '9915484c49efae1e853c1be7aa9d8b2c159a82c4' => 
    array (
      0 => '/home/estil450/public_html/application/views/header.tpl',
      1 => 1423165012,
      2 => 'file',
    ),
    '21ad6c09fd0cb3d807b70a3f24dfe7c8b337e8c6' => 
    array (
      0 => '/home/estil450/public_html/application/views/top.tpl',
      1 => 1417459582,
      2 => 'file',
    ),
    '0bee94ae48de853b49453ace6157d2fb7a7b277b' => 
    array (
      0 => '/home/estil450/public_html/application/views/navbar.tpl',
      1 => 1421065412,
      2 => 'file',
    ),
    '176fac5985d5dc4b43edea6c0618ca1f6996d998' => 
    array (
      0 => '/home/estil450/public_html/application/views/footer.tpl',
      1 => 1423164939,
      2 => 'file',
    ),
    'e42802b9f9225092d26556a5ec1f3ebf37f60366' => 
    array (
      0 => '/home/estil450/public_html/application/views/atendimento_online.tpl',
      1 => 1417455048,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '97737178154d3c944015c85-77286879',
  'variables' => 
  array (
    'language' => 0,
    'erro' => 0,
    'sucesso' => 0,
    'nome' => 0,
    'email' => 0,
    'termos' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.19',
  'unifunc' => 'content_54d3c94436f779_75112202',
  'cache_lifetime' => 120,
),true); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_54d3c94436f779_75112202')) {function content_54d3c94436f779_75112202($_smarty_tpl) {?><!DOCTYPE HTML>
<html lang="pt-br">

    <head>
        <meta charset="UTF-8">
        <title>Estilo Carioca | Inscrição de newsletter</title>
        
        <meta name="title" content="Estilo Carioca"><meta name="description" content=""><meta name="author" content="Designlab">
        <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no">
        <link rel="shortcut icon" href="http://www.estilocarioca.com.br/application/template/estilocarioca/assets/img/favicon.png?v=5">

        <link rel="stylesheet" href="http://www.estilocarioca.com.br/application/template/estilocarioca/assets/css/plugins/slick.css"><link rel="stylesheet" href="http://www.estilocarioca.com.br/application/template/estilocarioca/assets/css/plugins/sweet-alert.css"><link rel="stylesheet" href="http://www.estilocarioca.com.br/application/template/estilocarioca/assets/css/plugins/jquery.raty.css"><link rel="stylesheet" href="http://www.estilocarioca.com.br/application/template/estilocarioca/assets/css/plugins/magnific-popup.css"><link rel="stylesheet" href="http://www.estilocarioca.com.br/application/template/estilocarioca/assets/css/style.css"><script type="text/javascript" async="" src="//static.designlab.com.br/js/bydl.js"></script><script src="http://www.estilocarioca.com.br/application/template/estilocarioca/assets/js/modernizr.custom.js"></script>
        <!--[if IE 8]>
        <link rel="stylesheet" href="http://www.estilocarioca.com.br/application/template/estilocarioca/assets/css/ie8.css" /><script src="http://www.estilocarioca.com.br/application/template/estilocarioca/assets/js/respond.js" ></script>        <![endif]-->
        
        <script type="text/javascript">
            var App = window.App || {
                base_path: 'COLOCAR URI DO SITE'
            };
        </script>
<!--
        <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1"/>
        <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0" />
-->
                                                                                        <!--
        <link rel="icon" type="image/vnd.microsoft.icon" href="/web-files/img/favicon.png"/>
        <link rel="shortcut icon" type="image/x-icon" href="/web-files/img/favicon.png"/>

        <link rel="stylesheet" href="/web-files/font-awesome-4.1.0/css/font-awesome.min.css"/>
        <link rel="stylesheet" href="/web-files/plugins/rs-plugin/css/settings.css"/>
        <link rel="stylesheet" href="/web-files/plugins/flexslider/flexslider.css"/>
        <link rel="stylesheet" href="/web-files/plugins/fancybox/jquery.fancybox.css"/>
        <link rel="stylesheet" href="/web-files/pongstagr.am-master/source/pongstagr.am.css"/>		
        <link rel="stylesheet" href="/web-files/css/plugins/magnific-popup.css"/>		
        <link rel="stylesheet" href="/web-files/css/plugins/fancyselect.css"/>		
        
        
        
        <link rel="stylesheet" href="/web-files/css/joker.min.css"/>
-->
    </head>
    <body style="padding-top: 52px" class="theme-default">

        <header class="header" id="stt_logado_print">
            <div class="navbar navbar-fixed-top" role="navigation">
    <div class="container">
        <a href="#" class="brand-circle"><img src="/web-files/img/brand-circle.png"></a>
        <ul class="nav navbar-nav">
                            <li><a href="/pt/conta/login-cadastro/" id="nav-login">Login e Cadastro</a></li>
                
            
        </ul>
        <ul class="nav navbar-nav navbar-right">
            <li><a href="/pt/informacoes/newsletter">Newsletter</a></li>
                            <li>
                <a id="shopping-cart" href="/pt/produtos/checkout/" class="btn-with-icon fa fa-shopping-cart">
                                            <span class="label label-primary">1</span>
                                        Meu Carrinho
                </a>
            </li>
                            

            
            

        </ul>
    </div>
</div>
<div class="container header-brand">
    <div class="row">
        <div class="col-sm-6 col-brand">
            <a href="/pt/" class="brand"><img src="/web-files/img/logo.png" alt="Maria de Barro" border="0" title="" class="img-responsive"/></a>
        </div>
        <div class="col-sm-6 text-right col-chart">
            <p>
                <a href="tel:+5521995765038"><span class="icon-whatsapp"></span> 21 99576.5038</a><br/>
                <a href="tel:+552132835265"><span class="fa fa-phone" style="margin-right: 12px"></span> 21 3283.5265</a>
            </p>
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
        <li  class="" ><a href="/pt/aneis/">Anéis</a></li>            
        <li  class="" ><a href="/pt/brincos/">Brincos</a></li>           
        <li  class="" ><a href="/pt/colares/">Colares</a></li>           
        <li  class="" ><a href="/pt/pulseiras/">Pulseiras</a></li>                       
        <li  class="" ><a href="/pt/conjuntos/">Conjuntos</a></li>                       
        <li  class="" ><a href="/pt/promocoes/">Promoções</a></li>                       


    </ul>
    <div style="position: relative">
        <form class="navbar-form pull-right search-wrap" role="search" action="/pt/novos-produtos" method="post">
            <input type="search" name="search" id="search" class="form-control" placeholder="BUSCAR" autocomplete="off"/>
            <button type="submit" class="btn eu-quero"><span class="fa fa-search"></span></button>
        </form>  
        <div class="sugestao"> </div>
    </div>
            <a href="admin/navbar.tpl"></a>
    <style>
        .sugestao{
            position: absolute;
            background: #fff;
            height: auto;
            right: 0;
            top: 40px;
            width: auto;
            min-width: 250px;
            /*padding: 0.5%;*/
            text-align: left;
            z-index: 500;
            /*max-height: 200px;
            overflow-x: auto;*/
            box-shadow: 0 1px 2px rgba(0,0,0,.2);
        }
    </style>
</div>
        </div>
    </div>
</nav>
        </header>


<div class="container">
    <br/>   
    <div class="row">
        <div class="col-md-6">

            <div class="jumbotron">
                <div class="container">

                    <h2>Inscreva-se?</h2>
                    <br/>
                    <p>E receba periódicamente notícias do nosso site!</p><br/>

                </div>
            </div>
        </div> 

        <div class="col-md-6">
            <form class="navbar-form navbar-left" style="width: 100%" action="/pt/informacoes/newsletter" method="post">

                
                    <div class="alert alert-success" role="alert"><strong>Atenção: </strong>Preencher todos os campos!</div>

                
                <h3 style="margin: 16px 0 12px">Newsletter</h3>
                <br/>
                <p><input type="text" class="form-control" style="min-width: 100%" id="nome" name="nome" maxlength="40" value="" placeholder="Nome completo"/></p>
                <p><input type="text" class="form-control" style="max-width: 47%" id="email" name="email" maxlength="70" value="" placeholder="E-mail"/></p>
                <h4>Sexo</h4>
                <p>
                    <select name="sexo" class="form-control">
                        <option value="M">Masculino</option>
                        <option value="F">Feminino</option>
                    </select>
                </p>
                <h4>
                                            <input type="checkbox" name="termos"/> Sim, ceito receber as notícias deste site por e-mail.
                        
                </h4>
                <p><button type="submit" class="btn btn-primary" name="enviar">ENVIAR</button></p>

            </form>
        </div>
                
    </div>
</div>
<div style="clear: both;"></div>


<!-- FOOTER  -->


<!--
<div id="fb-root"></div>
<script>
    (function (i, s, o, g, r, a, m) {
        i['GoogleAnalyticsObject'] = r;
        i[r] = i[r] || function () {
            (i[r].q = i[r].q || []).push(arguments)
        }, i[r].l = 1 * new Date();
        a = s.createElement(o),
                m = s.getElementsByTagName(o)[0];
        a.async = 1;
        a.src = g;
        m.parentNode.insertBefore(a, m)
    })(window, document, 'script', '//www.google-analytics.com/analytics.js', 'ga');

    ga('create', 'UA-56768389-1', 'auto');
    ga('send', 'pageview');

</script>
<script>(function (d, s, id) {
        var js, fjs = d.getElementsByTagName(s)[0];
        if (d.getElementById(id))
            return;
        js = d.createElement(s);
        js.id = id;
        js.src = "//connect.facebook.net/pt_BR/sdk.js#xfbml=1&appId=1404136649848973&version=v2.0";
        fjs.parentNode.insertBefore(js, fjs);
    }(document, 'script', 'facebook-jssdk'));</script>

<footer class="footer">
    <div class="container">
        <a href="#" class="footer-borboleta"></a>
    </div>
    <div class="footer-content">
        <div class="container">
            <div class="row">
                <div class="col-sm-3 footer-group">
                    <h2 class="footer-title">Institucional</h2>
                    <ul class="footer-lista">
                        <li><a href="/pt/informacoes/quem-somos">Quem somos</a></li>

                            
                        <li><a href="/pt/informacoes/politica-privacidade">Política de privacidade</a></li>
                        <li><a href="/pt/informacoes/entrega-devolucao">Política de entrega</a></li>
                        <li><a href="/pt/informacoes/procon-rj">Procon/RJ</a></li>
                    </ul>
                </div>
                <div class="col-sm-3 footer-group">
                    <h2 class="footer-title">Dúvidas</h2>
                    <ul class="footer-lista">
                        <li><a href="/pt/informacoes/contato">Atendimento</a></li>
                        <li><a href="/pt/informacoes/trocas-e-devolucoes">Trocas e devoluções</a></li>
                            
                        <li><a href="/pt/informacoes/termos-servicos">Termos de serviço</a></li>
                        <li><a href="/pt/informacoes/perguntas-frequentes">Perguntas frequentes</a></li>
                        <li><a href="/pt/informacoes/cuidados-produtos">Cuidados com os produtos</a></li>

                    </ul>
                </div>
                <div class="col-sm-3 footer-group">
                    <h2 class="footer-title">Eu quero!</h2>
                    <ul class="footer-lista">
                        <li><a href="/pt/novos-produtos/">Novos produtos</a></li>
                        <li><a href="/pt/informacoes/promocoes">Promoções</a></li>
                        <li><a href="/pt/informacoes/programa-vantagens">Programa de vantagens</a></li>
                        <li><a href="/pt/informacoes/programa-fidelidade">Programa de fidelidade</a></li>
                            
                    </ul>
                </div>
                <div class="col-sm-3 footer-group">
                    <div class="fb-box-out">
                        <div class="fb-box">
                            <div class="fb-like-box" data-href="https://www.facebook.com/mariadebarroacessorios" data-colorscheme="light" data-show-faces="false" data-header="false" data-stream="false" data-show-border="false"></div>
                        </div>
                    </div>
                </div>
            </div>
            <hr>
            <div class="row">
                <div class="col-sm-7 col-md-5 footer-group">
                    <h2 class="footer-title">Formas de pagamento</h2>
                    <p>
                        <img src="/web-files/img/assets/band_visa.png">
                        <img src="/web-files/img/assets/band_master.png">
                        <img src="/web-files/img/assets/band_american.png">
                        <img src="/web-files/img/assets/band_diners.png">
                        <img src="/web-files/img/assets/band_elo.png">
                        <img src="/web-files/img/assets/band_boleto.png">
                    </p>
                </div>
                <div class="col-sm-5 col-md-4 footer-group">
                    <h2 class="footer-title">Certificados</h2>
                    <div style="margin-bottom: 4px;">
                        <div style="display: inline-block;vertical-align: top;">
                            <a id="seloEbit" href="http://www.ebit.com.br/#maria-de-barro" target="_blank" onclick="redir(this.href);" style="display: inline-block;"></a> 
                            <script type="text/javascript" id="getSelo" src="https://imgs.ebit.com.br/ebitBR/selo-ebit/js/getSelo.js?58278">
                            </script>
                        </div>
                        <div style="display: inline-block;vertical-align: top;">
                            <div id="armored_website" style="display: block;margin-bottom: 4px;">
                                <param id="aw_preload" value="true" />
                            </div>
                            <script type="text/javascript" src="//selo.siteblindado.com/aw.js" async></script>
                            <a href="http://www.google.com/safebrowsing/diagnostic?site=http://www.mariadebarro.com.br/" target="_blank" style="display: block;"><img src="/web-files/img/assets/google_safe-browsing.png"></a>
                        </div>
                    </div>
                                    </div>
                <div class="col-sm-12 col-md-3 footer-group">
                    <h2 class="footer-title" style="color: #fff;">Newsletter</h2>
                    <p style="color: #9a9a9a;font-size:13px;font-size:1.3rem;" id="erro_newsletter">Receba nossas novidades e promoções!</p>
                    <form class="" action="" method="post" onsubmit="return false">
                        <input type="email" name="email_newsletter" id="email_newsletter"  class="form-control" placeholder="Seu email" style="background: #3D3D3D;box-shadow: inset 0 1px 2px rgba(0,0,0,0.1);border-radius: 2px;border: solid 1px #373737;color: #CFCFCF;font-weight: 300;">
                        <button type="button" class="btn btn-primary" onclick="javascript:newsletter_footer();" style="border-radius: 2px;float:right;margin-top: -40px">Enviar</button>
                    </form>
                </div>
            </div>
            <hr>
            <div class="row">
                <div class="col-sm-12 text-center">
                    <p>
                        <strong>MARIA DE BARRO ACESSÓRIOS FEMININOS LTDA</strong>
                        <br>CNPJ: 18.611.490/0001-28
                        <br>&copy; Todos os direitos reservados - Edifício Global 7000 Offices - Estrada dos Bandeirantes nº 7000 Bloco C Sala 290, Rio de Janeiro / RJ - CEP: 22780-084 
                        <br>Atendimento ao cliente: maria@mariadebarro.com.br - 21 99576.5038 / 21 3283.5265
                    </p>
                </div>
            </div>
        </div>
    </div>
    <div class='footer-bottom'>
        <div class='container'>
            <div class='row'>
                <div class='col-sm-6 col-sm-push-6 text-right'>
                    <div class="redes-sociais">
                        <a target="_blank" href="http://instagram.com/mariadebarro" class="instagram"><i class="fa fa-instagram" style="position: relative; top: 16px;"></i></a>
                        <a target="_blank" href="https://www.facebook.com/mariadebarroacessorios" class="facebook"><i class="fa fa-facebook" style="position: relative; top: 16px;"></i></a>
                        <a target="_blank" href="https://twitter.com/Maria_de_barro" class="twitter"><i class="fa fa-twitter" style="position: relative; top: 16px;"></i></a>
                        <a target="_blank" href="https://plus.google.com/u/0/113176039094986209102/posts" class="gplus"><i class="fa fa-google-plus" style="position: relative; top: 16px;"></i></a>
                        <a target="_blank" href="http://blog.mariadebarro.com.br" class="icon-blogger"></a>
                    </div>
                </div>
                <div class='col-sm-6 col-sm-pull-6'>
                    <p class="copyright">Desenvolvido por <a href="http://designlab.com.br/ " target="_blank"><img src="/web-files/img/assets/dl.png" width="90" class="dl"></a></p>
                </div>
            </div>
        </div>
    </div>
</footer>-->
                
<footer class="footer">
    <div class="container">
        <div class="row footer-content">
            <div class="col-sm-6 col-md-3">
                <h2 class="footer-title">LOGIN E CADASTRO</h2>
                <ul class="list-unstyled">
                    <li><a href="">Acompanhe seu pedido</a></li>
                    <li><a href="">Minha conta</a></li>
                    <li><a href="">Login</a></li>
                </ul>
            </div>
            <div class="col-sm-6 col-md-3">
                <h2 class="footer-title">ATENDIMENTO AO CLIENTE</h2>
                <ul class="list-unstyled">
                    <li><a href="">Entre em contato</a></li>
                    <li><a href="">Trocas e devoluções</a></li>
                    <li><a href="">Termos de serviço</a></li>
                </ul>
            </div>
            <div class="col-sm-6 col-md-3">
                <h2 class="footer-title">SIGA A EC</h2>
                <ul class="list-unstyled list-inline list-social">
                    <li><a href=""><i class="sprite sprite-twitter-2"></i></a></li>
                    <li><a href=""><i class="sprite sprite-facebook-2"></i></a></li>
                    <li><a href=""><i class="sprite sprite-instagram-2"></i></a></li>
                </ul>
            </div>
            <div class="col-sm-6 col-md-3">
                <h2 class="footer-title">FIQUE POR DENTRO DA EC</h2>
                <form action="" method="post" class="newsletter-form ajax-form" novalidate="">
                    <div class="form-row">
                        <input name="name" type="text" class="form-control" placeholder="Seu nome">
                    </div>
                    <div class="form-row">
                        <input name="email" type="text" class="form-control" placeholder="Seu nome">
                    </div>
                    <div class="form-row">
                        <button type="submit" class="btn btn-default btn-block">Enviar</button>
                    </div>
                </form>
            </div>
        </div>
        <hr>
        <div class="row footer-bottom">
            <div class="col-sm-6 col-sm-push-6 text-right">
                <span class="selo-es sprite sprite-selo-es"></span>
                <span class="cartoes sprite sprite-cartoes"></span>
            </div>
            <div class="col-sm-6 col-sm-pull-6">
                <p class="copy">Desenvolvido por <a class="dl" href="http://designlab.com.br" target="_blank"><img width="80" src="//static.designlab.com.br/img/footer/dl-gray.png"></a></p>
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
    </div>
</footer>                
                
<script src="//code.jquery.com/jquery-1.11.2.min.js"></script>
<script src="http://www.estilocarioca.com.br/application/template/estilocarioca/assets/js/plugins/slick.min.js"></script>
<script src="http://www.estilocarioca.com.br/application/template/estilocarioca/assets/js/plugins/jquery.raty.js"></script>
<script src="http://www.estilocarioca.com.br/application/template/estilocarioca/assets/js/plugins/underscore-min.js"></script>
<script src="http://www.estilocarioca.com.br/application/template/estilocarioca/assets/js/plugins/jquery.magnific-popup.min.js"></script>
<script src="http://www.estilocarioca.com.br/application/template/estilocarioca/assets/js/scripts.js"></script>
<!--
<script language="javascript" src="//code.jquery.com/jquery-1.11.1.min.js"></script>

<script src="//code.jquery.com/ui/1.11.1/jquery-ui.js"></script>

<script language="javascript" src="/web-files/js/vendor/jquery.easing.1.3.js"></script>


<script language="javascript" src="/web-files/plugins/rs-plugin/js/jquery.themepunch.plugins.min.js"></script>
<script language="javascript" src="/web-files/plugins/rs-plugin/js/jquery.themepunch.revolution.min.js"></script>
<script language="javascript" src="/web-files/plugins/flexslider/jquery.flexslider-min.js"></script>
<script language="javascript" src="/web-files/plugins/fancybox/jquery.fancybox.js"></script>

<script language="javascript" src="/web-files/js/vendor/underscore-min.js"></script>
<script language="javascript" src="/web-files/js/vendor/fancyselect.min.js"></script>
<script language="javascript" src="/web-files/js/funcoes.js"></script>
<script language="javascript" src="/web-files/js/jQuery-Mask-Plugin.js"></script>
<script language="javascript" src="/web-files/bootstrap/js/bootstrap.js"></script>
<script language="javascript" src="/web-files/js/vendor/jquery.payment.js"></script>
<script language="javascript" src="/web-files/js/vendor/jquery.mask.min.js"></script>
<script language="javascript" src="/web-files/pongstagr.am-master/source/pongstagr.am.js"></script>
<script language="javascript" src="/web-files/js/vendor/jquery.magnific-popup.min.js"></script>
<script language="javascript" src="/web-files/js/joker.js"></script>
<script language="javascript" src="/web-files/js/default.js"></script>
-->





</body>
</html><?php }} ?>
