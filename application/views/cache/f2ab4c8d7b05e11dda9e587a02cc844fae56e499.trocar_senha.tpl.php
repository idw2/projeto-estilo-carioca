<?php /*%%SmartyHeaderCode:505773464548710f5c41250-32602365%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'f2ab4c8d7b05e11dda9e587a02cc844fae56e499' => 
    array (
      0 => '/home/maria951/public_html/homolog/application/views/trocar_senha.tpl',
      1 => 1417410111,
      2 => 'file',
    ),
    '27f9a7a3179d1f7292a60ba13c6a64d672873ee0' => 
    array (
      0 => '/home/maria951/public_html/homolog/application/views/header.tpl',
      1 => 1417535437,
      2 => 'file',
    ),
    'c27bca64ec2ede303e0466e3c1a5d085b64e9a9a' => 
    array (
      0 => '/home/maria951/public_html/homolog/application/views/top.tpl',
      1 => 1417459590,
      2 => 'file',
    ),
    '0b07c4222b2a38d9dc09bbf5ff933afa59e6bd20' => 
    array (
      0 => '/home/maria951/public_html/homolog/application/views/navbar.tpl',
      1 => 1417410064,
      2 => 'file',
    ),
    '6faaabf2e71bebda07a190870503cd27e94da1d6' => 
    array (
      0 => '/home/maria951/public_html/homolog/application/views/footer.tpl',
      1 => 1418048081,
      2 => 'file',
    ),
    '664eb11e5e87b30f38f0ffe594bbda9642eba0cf' => 
    array (
      0 => '/home/maria951/public_html/homolog/application/views/atendimento_online.tpl',
      1 => 1417410086,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '505773464548710f5c41250-32602365',
  'variables' => 
  array (
    'language' => 0,
    'codcadastro' => 0,
    'erro' => 0,
    'sucesso' => 0,
    'senha' => 0,
    'repetir_senha' => 0,
    'novo_lembrete' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.19',
  'unifunc' => 'content_548710f6132c54_05570037',
  'cache_lifetime' => 120,
),true); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_548710f6132c54_05570037')) {function content_548710f6132c54_05570037($_smarty_tpl) {?><!DOCTYPE HTML>
<html lang="pt-br">

    <head>
        <meta charset="UTF-8">
        <title>Maria de Barro | Trocar senha</title>

        <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1"/>
        <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0" />

                                                                                        
        <link rel="icon" type="image/vnd.microsoft.icon" href="/web-files/img/favicon.png"/>
        <link rel="shortcut icon" type="image/x-icon" href="/web-files/img/favicon.png"/>

        <link rel="stylesheet" href="/web-files/font-awesome-4.1.0/css/font-awesome.min.css"/>
        <link rel="stylesheet" href="/web-files/plugins/rs-plugin/css/settings.css"/>
        <link rel="stylesheet" href="/web-files/plugins/flexslider/flexslider.css"/>
        <link rel="stylesheet" href="/web-files/plugins/fancybox/jquery.fancybox.css"/>
        <link rel="stylesheet" href="/web-files/pongstagr.am-master/source/pongstagr.am.css"/>		
        <link rel="stylesheet" href="/web-files/css/plugins/magnific-popup.css"/>		
        <link rel="stylesheet" href="/web-files/css/plugins/fancyselect.css"/>		
        
        
        
        <link rel="stylesheet" href="/web-files/css/joker.css"/>

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


<div class="container" style="padding-top: 50px">
    <div class="col-md-6">
    <form class="navbar-form navbar-left" style="width: 100%" action="/pt/conta/trocar-senha/codigo/27af15a63e22d1f7b4231dad9c651698" method="post">

        
            <div class="alert alert-success" role="alert"><strong>Atenção: </strong>Preencher todos os campos!</div>

        
        <h3 style="margin: 16px 0 12px">Trocar senha</h3>
        <br/>				
        <p>
        <div class="input-group">
            <input type="password" class="form-control" id="senha" name="senha" value="" autofocus="1" placeholder="Nova senha"/>
            <span class="input-group-addon"><span class="glyphicon glyphicon-cog"></span></span>
        </div>		
        </p>
        <p>
        <div class="input-group">
            <input type="password" class="form-control" id="repetir_senha" name="repetir_senha" value="" autofocus="1" placeholder="Repetir senha"/>
            <span class="input-group-addon"><span class="glyphicon glyphicon-cog"></span></span>
        </div>		
        </p>
        <p>
        <div class="input-group">
            <input type="text" class="form-control" id="novo_lembrete" name="novo_lembrete" value="" autofocus="1" placeholder="Novo lembrete"/>
            <span class="input-group-addon"><span class="glyphicon glyphicon-pencil"></span></span>
        </div>
        </p>
        <p>
            <button type="submit" class="btn btn-primary" name="enviar">ALTERAR</button>
            <span class="input-group"><a href="/pt/conta/login-cadastro/">» Acessar conta?</a></span>  
        </p>

    </form>
</div>            
<div class="col-md-6">

    <div class="jumbotron">
        <div class="container">

            <!-- h1 e p que já tínhamos -->
            <h2>Parabéns!</h2>
            <br/>
            <p>Você solicitou a alteração de sua senha.<br/>
            <p>É obrigatório informar uma dica como lembrete para o cadastro da nova senha.<br/>

        </div>
    </div>
</div> 
</div>


<!-- FOOTER  -->



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
                        <li><a href="http://blog.mariadebarro.com.br">Blog da Maria</a></li>
                            
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
                    <div>
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
                        <a target="_blank" href="http://instagram.com/mariadebarro" class="instagram"><i class="fa fa-instagram"></i></a>
                        <a target="_blank" href="https://www.facebook.com/mariadebarroacessorios" class="facebook"><i class="fa fa-facebook"></i></a>
                        <a target="_blank" href="https://twitter.com/Maria_de_barro" class="twitter"><i class="fa fa-twitter"></i></a>
                        <a target="_blank" href="https://plus.google.com/u/0/113176039094986209102/posts" class="gplus"><i class="fa fa-google-plus"></i></a>
                        <a target="_blank" href="http://blog.mariadebarro.com.br" class="icon-blogger"></a>
                    </div>
                </div>
                <div class='col-sm-6 col-sm-pull-6'>
                    <p class="copyright">Desenvolvido por <a href="http://designlab.com.br/ " target="_blank"><img src="/web-files/img/assets/dl.png" width="90" class="dl"></a></p>
                </div>
            </div>
        </div>
    </div>
</footer>

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




</body>
</html><?php }} ?>
