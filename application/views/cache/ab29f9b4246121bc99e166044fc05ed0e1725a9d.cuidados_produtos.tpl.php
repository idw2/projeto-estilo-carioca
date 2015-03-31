<?php /*%%SmartyHeaderCode:3107302305447afd04a90b6-43590634%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'ab29f9b4246121bc99e166044fc05ed0e1725a9d' => 
    array (
      0 => '/home/maria951/public_html/novo/application/views/cuidados_produtos.tpl',
      1 => 1412180543,
      2 => 'file',
    ),
    '6a0d8cd5da5366cd163c1096d3e3a62591b34250' => 
    array (
      0 => '/home/maria951/public_html/novo/application/views/header.tpl',
      1 => 1413495907,
      2 => 'file',
    ),
    'dddb63286e4a273b560ff992665e7d4c506e6fdb' => 
    array (
      0 => '/home/maria951/public_html/novo/application/views/navbar.tpl',
      1 => 1412200448,
      2 => 'file',
    ),
    '9c6368fa7ae30d46a3ff6d19316b23707d94dba8' => 
    array (
      0 => '/home/maria951/public_html/novo/application/views/footer.tpl',
      1 => 1413559782,
      2 => 'file',
    ),
    '90e90a97284dec988adac3b7318a019a6b5d1ff6' => 
    array (
      0 => '/home/maria951/public_html/novo/application/views/atendimento_online.tpl',
      1 => 1412097035,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '3107302305447afd04a90b6-43590634',
  'variables' => 
  array (
    'conteudo' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.19',
  'unifunc' => 'content_5447afd06d63c1_06288446',
  'cache_lifetime' => 120,
),true); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5447afd06d63c1_06288446')) {function content_5447afd06d63c1_06288446($_smarty_tpl) {?><!DOCTYPE HTML>
<html lang="pt-br">

    <head>
        <meta charset="UTF-8">
        <title>Maria de Barro | Cuidado com os Produtos</title>

        <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1"/>
        <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0" />

                                                                                        
        <link rel="icon" type="image/vnd.microsoft.icon" href="/web-files/img/favicon.ico"/>
        <link rel="shortcut icon" type="image/x-icon" href="/web-files/img/favicon.ico"/>

        <link rel="stylesheet" href="/web-files/font-awesome-4.1.0/css/font-awesome.min.css"/>
        <link rel="stylesheet" href="/web-files/plugins/rs-plugin/css/settings.css"/>
        <link rel="stylesheet" href="/web-files/plugins/flexslider/flexslider.css"/>
        <link rel="stylesheet" href="/web-files/plugins/fancybox/jquery.fancybox.css"/>
        <link rel="stylesheet" href="/web-files/pongstagr.am-master/source/pongstagr.am.css"/>		
        <link rel="stylesheet" href="/web-files/css/plugins/magnific-popup.css"/>		
        
        
        
        <link rel="stylesheet" href="/web-files/css/joker.css"/>

    </head>
    <body style="padding-top: 52px" class="theme-default">

        <header class="header">
            <div class="navbar navbar-fixed-top" role="navigation">
                <div class="container">
                    <a href="#" class="brand-circle"><img src="/web-files/img/brand-circle.png"></a>
                    <ul class="nav navbar-nav">
                        <li><a href="/pt/produtos/checkout/" id="nav-login">Login e Cadastro</a></li>
                        <li><a onclick="open_atendimento()" style="cursor: pointer;">Atendimento Online</a></li>
                    </ul>
                    <ul class="nav navbar-nav navbar-right">
                        <li><a href="/pt/produtos/checkout/">Wishlist</a></li>
                        <li>
                            <a id="shopping-cart" href="/pt/produtos/checkout/" class="btn-with-icon fa fa-shopping-cart">
                                                                    <span class="label label-primary">7</span>
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
                            <a href="tel:+5521995765038"><span class="icon-whatsapp"></span> 21 99576.5038</a>
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
  <form class="navbar-form pull-right search-wrap" role="search">
    <input type="search" class="form-control" placeholder="BUSCAR">
    <button type="submit" class="btn eu-quero"><span class="fa fa-search"></span></button>
  </form>  
</div>
                    </div>
                </div>
            </nav>
        </header>


<section class="pag-section pag-section-top">
    <div class="container">
        <div class="row">
            <div class="col-lg-12">

                <div class="section-title">
                    <h2>
                         <strong>Cuidado</strong> com os Produtos
                    </h2>
                </div>

            </div>
        </div>
        <div class="row">
            <div class="col-lg-12">
                <p><strong><img src="http://cdn1.muitox.com.br/wp-content/uploads/2012/10/como-limpar-prata-620x413.jpg" alt="" width="620" height="413" /></strong></p>
<p><strong>Dica N&ordm; 1:</strong> Toda mulher &eacute; apaixonada por bijuterias, pois atendem a todos os gostos desde as mais extravagantes as mais finas e delicadas, fazem parte do nosso dia a dia e com certeza nos ajudam a valorizar e dar nova apar&ecirc;ncia ao nosso visual, por tudo isso devemos dispensar certos cuidado as bijuterias que n&atilde;o s&atilde;o j&oacute;ias, por&eacute;m devemos conserv&aacute;-las como tal, para que possamos fazer uso por muito tempo, mantendo-as sempre lindas, segue aqui algumas dicas de conserva&ccedil;&atilde;o:</p>
<p><strong>Dica N&ordm; 2:</strong>&nbsp;Ao tomar banho, retire-as.</p>
<p><strong>Dica N&ordm; 3:</strong>&nbsp;N&atilde;o v&aacute; &agrave; praia com bijuterias, pois a areia, &aacute;gua salgada e bronzeadores, poder&atilde;o estrag&aacute;-las, oxidando-as, o mesmo vale para clubes, retire-as antes do banho de piscina.</p>
<p><strong>Dica N&ordm; 4:</strong>&nbsp;Nunca durma usando bijus.</p>
<p><strong>Dica N&ordm; 5:</strong>&nbsp;&Eacute; conveniente retir&aacute;-las antes de usar perfumes e cosm&eacute;ticos, pois algumas subst&acirc;ncias podem escurec&ecirc;-las, aguarde alguns minutinhos para recoloc&aacute;-las.</p>
<p><strong>Dica N&ordm; 6:</strong>&nbsp;Muito cuidado com certos procedimentos feito nos cabelos como tinturas e alisamento, que cont&eacute;m produtos qu&iacute;micos muito fortes, ficando impregnados por alguns dias, esses produtos podem manchar as pe&ccedil;as, principalmente as que ficam em contato com os cabelos.</p>
<p><strong>Dica N&ordm; 7:</strong>&nbsp;N&atilde;o deixe suas bijus em contato com cosm&eacute;ticos, ao usar cremes e hidratantes para corpo, rosto e m&atilde;os, retire an&eacute;is, pulseiras e colares, pois a qu&iacute;mica encontrada nesses produtos, aliado a qu&iacute;mica do seu pr&oacute;prio corpo pode escurec&ecirc;-las.</p>
<p><strong>Dica N&ordm; 8:</strong>&nbsp;Evite usar bijuterias ao realizar servi&ccedil;os como jardinagem, pois a terra e os adubos qu&iacute;micos afetam a folhea&ccedil;&atilde;o do produto.</p>
<p><strong>Dica N&ordm; 9:</strong>&nbsp;Evite us&aacute;-las ao realizar servi&ccedil;os dom&eacute;sticos, pois os produtos de limpeza, os produtos qu&iacute;micos e produtos abrasivos podem danific&aacute;-las.</p>
<p><strong>Dica N&ordm; 10:</strong>&nbsp;N&atilde;o as guarde todas juntas, pois podem embara&ccedil;ar, dificultando a separa&ccedil;&atilde;o no momento de us&aacute;-las, podendo causar rompimento e escurecimento das pe&ccedil;as pelo atrito, por isso o mais correto &eacute; colocar cada pe&ccedil;a em saquinhos separados antes de guard&aacute;-las.</p>
<p><strong>Dica N&ordm; 11:</strong>&nbsp;Guarde suas bijus em porta-j&oacute;ias de prefer&ecirc;ncia revestidos por tecidos de algod&atilde;o, se n&atilde;o tiver porta j&oacute;ia ou n&atilde;o for revestido, providencie uma caixa ou tecido para acomodar suas bijus.</p>
<p><strong>Dica N&ordm; 12:</strong>&nbsp;Para que as pe&ccedil;as n&atilde;o escure&ccedil;am e n&atilde;o fique emba&ccedil;adas a dica &eacute; colocar um peda&ccedil;o de giz escolar branco dentro do porta-j&oacute;ias, dessa forma ele absorver&aacute; a umidade do local.</p>
<p><strong>Dica N&ordm; 13:</strong>&nbsp;Para limp&aacute;-las basta lavar com &aacute;gua e sab&atilde;o neutro, secar com papel toalha e fazer um polimento usando flanela ou outro tecido macio, jamais deixe as pe&ccedil;as de molho. Muito cuidado com creme dental e talco, pois causam uma limpeza e apar&ecirc;ncia tempor&aacute;rias e seus componentes qu&iacute;micos podem danificar as pe&ccedil;as mais rapidamente.</p>
<p><strong>Dica N&ordm; 14:</strong>&nbsp;O nosso dia a dia &eacute; muito corrido, mas evite ao m&aacute;ximo deixar bijuterias espalhadas pela casa ou dentro da bolsa, em bolsos, porta luvas de carro, pois o atrito a outros objetos danifica pe&ccedil;as finas e aumenta o risco de voc&ecirc; vir a perder uma bijuteria de que gosta muito, o acondicionamento correto das bijus est&aacute; diretamente ligado a sua durabilidade, a principal dica n&atilde;o &eacute; saber comprar bem, mas conservar as que voc&ecirc; j&aacute; tem.</p>
            </div>
        </div>
    </div>
</section>

<!-- FOOTER  -->

<div class="body_atendimento" id="body_atendimento" style="position:fixed; bottom:0; z-index: 1000; right: 0">
    <input type="hidden" id="language" value="pt"/>
    <span class="btn_close" style="position: relative; cursor: pointer; z-index: 2000; left: 310px; top: 51px;"><img src="/web-files/img/Close.png" alt="Fechar" title="Fechar" border="0"></span>
    <div style="cursor: pointer; z-index: 1000; position: relative;" id="btn_atendimento"><img src="/web-files/img/posso_ajudar.png" alt="Atendimento-online" title="Atendimento-online" border="0"/></div>
    <div style="overflow-x: auto; height: 541px; background: #fff; left: 16px; position: relative; bottom: 58px; width: 314px;" class="window_atendimento hide">
        <div style='text-align: center; padding-top: 220px;' class='load_atendimento hide'><img src='/web-files/img/Loader.GIF' alt='Carregando...' title='Carregando...' border='0' style="opacity:1"/></div>
        <div class='text_atendimento hide'></div>
    </div>
</div>

<div id="fb-root"></div>
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
                        <li><a href="#">Nosso blog</a></li>
                        <li><a href="/pt/informacoes/politica-privacidade">Política de privacidade</a></li>
                        <li><a href="/pt/informacoes/entrega-devolucao">Política de entrega</a></li>
                        <li><a href="/pt/informacoes/procon-rj">Procon/RJ</a></li>
                    </ul>
                </div>
                <div class="col-sm-3 footer-group">
                    <h2 class="footer-title">Dúvidas</h2>
                    <ul class="footer-lista">
                        <li><a href="/pt/informacoes/contato">Atendimento</a></li>
                        <li><a href="#">Trocas e devoluções</a></li>
                        <li><a href="#">Direito de arrependimento</a></li>
                        <li><a href="/pt/informacoes/termos-servicos">Termos de serviço</a></li>
                        <li><a href="/pt/informacoes/perguntas-frequentes">Perguntas frequentes</a></li>
                        <li><a href="/pt/informacoes/cuidados-produtos">Cuidados com os produtos</a></li>
                        
                    </ul>
                </div>
                <div class="col-sm-3 footer-group">
                    <h2 class="footer-title">Eu quero!</h2>
                    <ul class="footer-lista">
                        <li><a href="/pt/novos-produtos/">Nossos produtos</a></li>
                        <li><a href="/pt/informacoes/promocoes">Promoções</a></li>
                        <li><a href="/pt/informacoes/programa-vantagens">Programa de vantagens</a></li>
                        <li><a href="/pt/informacoes/programa-fidelidade">Programa de fidelidade</a></li>
                        <li><a href="#" class="tag-novo">Guia de presentes</a></li>
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
                <div class="col-sm-7 footer-group">
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
                <div class="col-sm-5 footer-group">
                    <h2 class="footer-title">Certificados</h2>
                    <p>
                        <img src="/web-files/img/assets/band_ebit.png">
                        <img src="/web-files/img/assets/siteblindado.gif">
                    </p>
                </div>
            </div>
            <hr>
            <div class="row">
                <div class="col-sm-12 text-center">
                    <p>
                        <strong>MARIA DE BARRO ACESSÓRIOS FEMININOS LTDA</strong>
                        <br>CNPJ: 18.611.490/0001-28
                        <br>&copy; Todos os direitos reservados - Edifício Global 7000 Offices - Estrada dos Bandeirantes nº 7000 Bloco C Sala 290, Rio de Janeiro / RJ - CEP: 22780-084 
                        <br>Atendimento ao cliente: maria@mariadebarro.com.br
                        
                        
                        
                        
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
                    </div>
                </div>
                <div class='col-sm-6 col-sm-pull-6'>
                    <p class="copyright">Desenvolvido por <a href="http://designlab.com.br/ " target="_blank"><img src="/web-files/img/assets/dl.png" width="90" class="dl"></a></p>
                </div>
            </div>
        </div>
    </div>
</footer>


<!-- /FOOTER  -->

<script language="javascript" src="/web-files/js/jquery-1.11.1.min.js"></script>
<script src="//code.jquery.com/ui/1.11.1/jquery-ui.js"></script>

<script language="javascript" src="/web-files/js/vendor/jquery.easing.1.3.js"></script>


<script language="javascript" src="/web-files/plugins/rs-plugin/js/jquery.themepunch.plugins.min.js"></script>
<script language="javascript" src="/web-files/plugins/rs-plugin/js/jquery.themepunch.revolution.min.js"></script>
<script language="javascript" src="/web-files/plugins/flexslider/jquery.flexslider-min.js"></script>
<script language="javascript" src="/web-files/plugins/fancybox/jquery.fancybox.js"></script>

<script language="javascript" src="/web-files/js/funcoes.js"></script>
<script language="javascript" src="/web-files/js/jQuery-Mask-Plugin.js"></script>
<script language="javascript" src="/web-files/bootstrap/js/bootstrap.js"></script>
<script language="javascript" src="/web-files/js/vendor/jquery.creditCardValidator.js"></script>
<script language="javascript" src="/web-files/js/vendor/jquery.mask.min.js"></script>
<script language="javascript" src="/web-files/pongstagr.am-master/source/pongstagr.am.js"></script>
<script language="javascript" src="/web-files/js/vendor/jquery.magnific-popup.min.js"></script>
<script language="javascript" src="/web-files/js/joker.js"></script>
<script language="javascript" src="/web-files/js/default.js"></script>

<link rel="stylesheet" href="//code.jquery.com/ui/1.11.1/themes/smoothness/jquery-ui.css">
<link rel="stylesheet" href="/resources/demos/style.css">


</body>
</html><?php }} ?>
