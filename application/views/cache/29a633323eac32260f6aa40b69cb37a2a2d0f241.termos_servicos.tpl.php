<?php /*%%SmartyHeaderCode:5950579625447b093f0db37-07314913%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '29a633323eac32260f6aa40b69cb37a2a2d0f241' => 
    array (
      0 => '/home/maria951/public_html/novo/application/views/termos_servicos.tpl',
      1 => 1413983941,
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
      1 => 1413984373,
      2 => 'file',
    ),
    '90e90a97284dec988adac3b7318a019a6b5d1ff6' => 
    array (
      0 => '/home/maria951/public_html/novo/application/views/atendimento_online.tpl',
      1 => 1412097035,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '5950579625447b093f0db37-07314913',
  'variables' => 
  array (
    'conteudo' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.19',
  'unifunc' => 'content_5447b094208067_25637138',
  'cache_lifetime' => 120,
),true); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5447b094208067_25637138')) {function content_5447b094208067_25637138($_smarty_tpl) {?><!DOCTYPE HTML>
<html lang="pt-br">

    <head>
        <meta charset="UTF-8">
        <title>Maria de Barro | Termos de Serviço</title>

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
                         <strong>Termos</strong> de Serviço
                    </h2>
                </div>

            </div>
        </div>
        <div class="row">
            <div class="col-lg-12">
                <h2><span>Bem-vinda &agrave; Maria de Barro!</span></h2>
<p><span>A presta&ccedil;&atilde;o de servi&ccedil;os da Maria de Barro est&aacute; sujeita &agrave;s condi&ccedil;&otilde;es listadas nesta p&aacute;gina. Ao visitar o site ou comprar na Maria de Barro, voc&ecirc; automaticamente aceita essas condi&ccedil;&otilde;es. Leia com cuidado essas condi&ccedil;&otilde;es, que detalham o que nossos usu&aacute;rios podem esperar de n&oacute;s e o que esperamos de nossos usu&aacute;rios. Ao acessar qualquer se&ccedil;&atilde;o do site, voc&ecirc; aceita o contrato vinculante e os termos estabelecidos abaixo.</span></p>
<p><span>&nbsp;</span></p>
<p><strong><span>SUA CONTA</span></strong></p>
<p><span>A Maria de Barro reserva-se o direito de, &agrave; sua discri&ccedil;&atilde;o, recusar o servi&ccedil;o, encerrar contas, remover ou editar conte&uacute;do e cancelar pedidos.</span></p>
<p><span>&nbsp;</span></p>
<p><strong><span>Copyright</span></strong></p>
<p><span>Todo o design do site, textos, gr&aacute;ficos, logotipos, &iacute;cones, imagens, clipes de &aacute;udio, v&iacute;deos, a sele&ccedil;&atilde;o e organiza&ccedil;&atilde;o dos mesmos s&atilde;o de propriedade da Maria de Barro, TODOS OS DIREITOS RESERVADOS. N&atilde;o &eacute; dada permiss&atilde;o para copiar e reproduzir para fins comerciais sem a pr&eacute;via autoriza&ccedil;&atilde;o da Maria de Barro. Todo o material e informa&ccedil;&atilde;o apresentados pela Maria de Barro se destina a ser utilizado para fins informativos e descri&ccedil;&atilde;o de produtos. O uso deste site est&aacute; sujeito a estes termos e condi&ccedil;&otilde;es. Este site &eacute; apenas uma loja online de acess&oacute;rios femininos. Conte&uacute;do de Terceiros: Maria de Barro pode fornecer conte&uacute;do de terceiros como um servi&ccedil;o para aqueles interessados em informa&ccedil;&otilde;es. Maria de Barro n&atilde;o acompanha, aprova ou tem qualquer controle sobre qualquer conte&uacute;do de terceiro. Maria de Barro n&atilde;o garante, endossa ou aprova com precis&atilde;o ou integridade de qualquer conte&uacute;do de Terceiro conte&uacute;do. Maria de Barro n&atilde;o &eacute; respons&aacute;vel pela atualiza&ccedil;&atilde;o ou revis&atilde;o do conte&uacute;do de terceiros. Todos os links de terceiros citados no site ou no blog da Maria de Barro n&atilde;o s&atilde;o de nossa responsabilidade e n&atilde;o garantimos que o conte&uacute;do ainda esteja dispon&iacute;vel.</span></p>
<p><span>&nbsp;</span></p>
<p><strong><span>Responsabilidade</span></strong></p>
<p><span>A Maria de Barro N&Atilde;O GARANTE QUE AS INFORMA&Ccedil;&Otilde;ES publicadas neste site s&atilde;o exatas, completas ou correntes. As informa&ccedil;&otilde;es sobre pre&ccedil;os e disponibilidade est&atilde;o sujeitas a altera&ccedil;&otilde;es sem aviso pr&eacute;vio. Maria de Barro N&Atilde;O SER&Aacute; RESPONS&Aacute;VEL POR DANOS DE QUALQUER TIPO DECORRENTES DE CONEX&Atilde;O COM O USO DO SITE. Este site foi criado e &eacute; controlado por Maria de Barro e reserva-se o direito de fazer mudan&ccedil;as em seu site, em sua pol&iacute;tica de privacidade e nos termos e condi&ccedil;&otilde;es a qualquer momento.</span></p>
<p><span>Nosso dados: XXXXXXXXXXXX</span></p>
<p><span>&nbsp;XXXXX</span></p>
<p><span>XXXXXXX</span></p>
<p><strong><span>Informa&ccedil;&otilde;es sobre o produto</span></strong></p>
<p><span>As descri&ccedil;&otilde;es dos produtos oferecidos pela Maria de Barro s&atilde;o as mais corretas poss&iacute;veis. Se um produto vendido pela Maria de Barro n&atilde;o corresponder &agrave; descri&ccedil;&atilde;o fornecida, solicitamos que o devolva sem uso e em perfeitas condi&ccedil;&otilde;es. Os produtos apresentados neste site podem ser encomendados e entregues somente dentro do Brasil, desde que seja uma &aacute;rea coberta pelos Correios.</span></p>
<p><span>As refer&ecirc;ncias a produtos, servi&ccedil;os, processos ou outras informa&ccedil;&otilde;es pelo nome comercial, marca registrada, fabricante, fornecedor ou de outra forma, seja em nosso site ou em nosso blog, n&atilde;o constituem nem implicam endosso, patroc&iacute;nio ou recomenda&ccedil;&atilde;o por parte da Maria de Barro. Alguns produtos possuem imagens meramente ilustrativas, para que os usu&aacute;rios possam ter ideia de tamanho ou detalhes dos produtos.</span></p>
<p><span>&nbsp;</span></p>
<p><strong><span>Cores dos produtos</span></strong></p>
<p><span>A Maria de Barro tenta reproduzir e exibir com precis&atilde;o as cores dos produtos, mas sabemos que as cores reais dos produtos est&atilde;o sujeitas a pequenas varia&ccedil;&otilde;es por conta do seu monitor. Cada monitor est&aacute; configurado de uma forma diferente.</span></p>
<p><span>&nbsp;</span></p>
<p><strong><span>Ofertas e Promo&ccedil;&otilde;es</span></strong></p>
<p><span>As ofertas ser&atilde;o v&aacute;lidas durante determinado tempo ou enquanto houver estoque dispon&iacute;vel. Todos os produtos est&atilde;o sujeitos &agrave; disponibilidade de entrega.</span></p>
<p><span>&nbsp;</span></p>
<p><strong><span>Programa de prote&ccedil;&atilde;o &agrave; fraude e atividades n&atilde;o autorizadas</span></strong></p>
<p><span>Como parte de nossos procedimentos de prote&ccedil;&atilde;o &agrave; fraude ou outros tipos de atividades n&atilde;o autorizadas, nos reservamos no direito de recusar a processar uma compra, devido &agrave; suspeita de fraude, ato il&iacute;cito, atividade ilegal ou em casos que haja suspeita de m&aacute; f&eacute;. Caso ocorra alguma suspeita, podemos rejeitar o seu pedido e cancelar a sua compra, ou o nosso Servi&ccedil;o de Atendimento ao Cliente pode entrar em contato com voc&ecirc; no n&uacute;mero de telefone ou atrav&eacute;s do e-mail fornecido para confirmar o seu pedido e solicitar documentos para comprova&ccedil;&atilde;o/aprova&ccedil;&atilde;o da titularidade do propriet&aacute;rio do cart&atilde;o. Tamb&eacute;m nos reservamos o direito de cancelar quaisquer contas, pedidos ou se recusar a enviar para determinados endere&ccedil;os, devido &agrave; suspeita de fraude, ato il&iacute;cito, atividade ilegal ou em casos que haja suspeita de m&aacute; f&eacute;. N&oacute;s tomamos essas medidas para proteger os nossos clientes, bem como nos proteger de fraude ou atividades n&atilde;o autorizadas.</span></p>
<p><span>&nbsp;</span></p>
<p><strong><span>Coment&aacute;rios, Sugest&otilde;es e Outros</span></strong></p>
<p><span>Maria de Barro agradece seus coment&aacute;rios e feedback sobre este site, nossos produtos e servi&ccedil;os. Todas as informa&ccedil;&otilde;es, materiais, sugest&otilde;es, ideias ou coment&aacute;rios enviados para Maria de Barro n&atilde;o ser&atilde;o tratadas como confidenciais, propriet&aacute;rias ou informa&ccedil;&otilde;es sobre segredo comercial e, mediante a apresenta&ccedil;&atilde;o de tais informa&ccedil;&otilde;es, o usu&aacute;rio estar&aacute; concedendo a Maria de Barro uma licen&ccedil;a irrevog&aacute;vel e irrestrita para utilizar, modificar, reproduzir, transmitir, exibir e distribuir essas informa&ccedil;&otilde;es para qualquer finalidade. A menos que exigido por lei, a Maria de Barro n&atilde;o vai usar seu nome em conex&atilde;o com tais informa&ccedil;&otilde;es, materiais, sugest&otilde;es, ideias ou coment&aacute;rios sem o seu consentimento pr&eacute;vio por escrito.</span></p>
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
                        <li><a href="/pt/informacoes/trocas-e-devolucoes">Trocas e devoluções</a></li>
                        <li><a href="/pt/informacoes/direito-de-arrependimento">Direito de arrependimento</a></li>
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
