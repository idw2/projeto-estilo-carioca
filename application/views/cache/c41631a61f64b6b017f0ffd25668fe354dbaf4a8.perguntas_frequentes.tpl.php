<?php /*%%SmartyHeaderCode:2954197175447afd78765b4-66040141%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'c41631a61f64b6b017f0ffd25668fe354dbaf4a8' => 
    array (
      0 => '/home/maria951/public_html/novo/application/views/perguntas_frequentes.tpl',
      1 => 1412180191,
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
  'nocache_hash' => '2954197175447afd78765b4-66040141',
  'variables' => 
  array (
    'conteudo' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.19',
  'unifunc' => 'content_5447afd7a9cd76_76765711',
  'cache_lifetime' => 120,
),true); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5447afd7a9cd76_76765711')) {function content_5447afd7a9cd76_76765711($_smarty_tpl) {?><!DOCTYPE HTML>
<html lang="pt-br">

    <head>
        <meta charset="UTF-8">
        <title>Maria de Barro | Perguntas Frequentes</title>

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
                         <strong>Perguntas</strong> Frequentes
                    </h2>
                </div>

            </div>
        </div>
        <div class="row">
            <div class="col-lg-12">
                <p><strong>Como comprar?</strong></p>
<p>Comprar na Maria de Barro &eacute; muito simples, basta seguir os passos abaixo:</p>
<p>1. Selecione a categoria que voc&ecirc; deseja no menu superior.</p>
<p>2. Selecione a subcategoria ou clique diretamente sobre o produto na p&aacute;gina atual para ver detalhes do produto.</p>
<p>3. Escolha o produto e defina a quantidade que voc&ecirc; deseja, em seguida clique em "Eu quero". Para adicionar mais produtos, selecione a op&ccedil;&atilde;o "Continuar comprando".</p>
<p>4. Para finalizar sua compra, &eacute; necess&aacute;rio que voc&ecirc; preencha o nosso cadastro, com seus dados de entrega e pagamento. Caso voc&ecirc; j&aacute; esteja cadastrado, fa&ccedil;a o login utilizando o seu e-mail e senha.</p>
<p>5. Para fechar a compra basta ir em "Minhas compras", ou apenas dar continuidade ao processo de pagamento. Siga as instru&ccedil;&otilde;es que ir&atilde;o aparecer nas p&aacute;ginas.</p>
<p>Caso tenha mais alguma d&uacute;vida, entre em contato conosco ou envie um e-mail para maria@mariadebarro.com.br</p>
<p>&nbsp;&nbsp;</p>
<p><strong>Frete Gr&aacute;tis?</strong></p>
<p>O frete &eacute; gr&aacute;tis para a regi&atilde;o Sudeste e Paran&aacute; nas compras acima de R$99,00 (noventa e nove reais). Demais regi&otilde;es, o frete &eacute; gr&aacute;tis nas compras acima de R$180,00 (cento e oitenta reais). O valor final da compra deve ser igual ou acima de R$99,00 (noventa e reais) para regi&atilde;o Sudeste e Paran&aacute;, e igual ou acima de R$180,00 (cento e oitenta reais) para demais regi&otilde;es, para que ent&atilde;o tenha direito ao envio gratuito, mesmo que fa&ccedil;a uso de cupom promocional. Ao finalizar a compra deve optar por envio via Frete Gr&aacute;tis que &eacute; realizado via PAC dos Correios e tem um prazo para entrega (ap&oacute;s a postagem) de at&eacute; 23 (vinte e tr&ecirc;s) dias uteis, dependendo da localiza&ccedil;&atilde;o.</p>
<p>&nbsp;</p>
<p><strong>Troca Gr&aacute;tis?</strong></p>
<p>Para que tenha direito &agrave; troca gr&aacute;tis, deve realizar uma compra igual ou acima de R$200,00 (duzentos reais), sendo que esse deve ser o valor m&iacute;nimo da compra, mesmo que fa&ccedil;a uso de cupom promocional. A primeira troca do seu pedido ser&aacute; realizada gratuitamente at&eacute; 7 (sete) dias ap&oacute;s o recebimento do mesmo pelo cliente, que deve enviar e-mail dentro desse per&iacute;odo para nosso Atendimento ao Cliente, atrav&eacute;s do e-mail <a href="mailto:maria@mariadebarro.com.br">maria@mariadebarro.com.br</a> . Informe que deseja realizar uma troca e o n&uacute;mero do pedido, e ent&atilde;o receber&aacute; maiores detalhes sobre como proceder. Dependendo de onde more, podemos solicitar o recolhimento do(s) produto(s) (deve estar devidamente embalado) pelo carteiro ou postagem em uma ag&ecirc;ncia pr&oacute;pria dos Correios. Assim que tivermos o(s) produto(s) em m&atilde;os, iremos analisar o estado do mesmo e se estiver tudo ok, enviaremos um novo produto no mesmo valor pago pelo produto (para o mesmo endere&ccedil;o de envio do primeiro pedido) ou podemos disponibilizar o valor como cr&eacute;dito na loja. Esta op&ccedil;&atilde;o s&oacute; &eacute; dispon&iacute;vel para a primeira troca do seu pedido, no caso de devolu&ccedil;&atilde;o/desist&ecirc;ncia do(s) produto(s), o custo do envio dos mesmos para a Maria de Barro ser&aacute; por conta do cliente.</p>
<p>&nbsp;</p>
<p><strong>Meu pedido ainda n&atilde;o chegou, o que devo fazer?</strong></p>
<p>Se voc&ecirc; n&atilde;o recebeu o seu pedido ap&oacute;s o prazo m&aacute;ximo de entrega informado, por favor, entre em contato conosco pelo email maria@mariadebarro.com.br, informando a data de compra, o n&uacute;mero do pedido e seu nome. Ent&atilde;o o auxiliaremos da melhor forma poss&iacute;vel, para solucionar o ocorrido.</p>
<p>&nbsp;</p>
<p><strong>Como pagar com cart&atilde;o de cr&eacute;dito?</strong></p>
<p>Na tela de pagamento, voc&ecirc; selecionar&aacute; o Cart&atilde;o de Cr&eacute;dito de sua prefer&ecirc;ncia. O valor total de sua compra aparecer&aacute; junto com a bandeira dos cart&otilde;es e as op&ccedil;&otilde;es de parcelamento. Selecione o cart&atilde;o desejado e preencha os dados, como operadora, nome do titular, n&uacute;mero e validade, que est&atilde;o impressos na face do seu cart&atilde;o.</p>
<p>&nbsp;</p>
<p><strong>Como pagar com boleto banc&aacute;rio?</strong></p>
<p>Na tela de "Formas de Pagamento", selecione "Boleto Banc&aacute;rio". Imprima o boleto e o pague em qualquer ag&ecirc;ncia da rede banc&aacute;ria na data de vencimento. Se preferir, utilize os servi&ccedil;os online que o seu banco oferece. A data de vencimento est&aacute; impressa no boleto (vencimentos em feriados ou fins-de-semana podem ser pagos no dia &uacute;til seguinte). O processo de libera&ccedil;&atilde;o do pedido ocorrer&aacute; somente ap&oacute;s a confirma&ccedil;&atilde;o do pagamento. Se por algum motivo voc&ecirc; n&atilde;o pagar o boleto dentro do prazo original estabelecido, seu pedido ser&aacute; cancelado automaticamente, ser&aacute; necess&aacute;rio que voc&ecirc; selecione os produtos desejados e escolha novamente a op&ccedil;&atilde;o de pagar por boleto banc&aacute;rio ou ent&atilde;o deve solicitar uma segunda via atrav&eacute;s do e-mail maria@mariadebarro.com.br</p>
<p>&nbsp;</p>
<p><strong>Quero efetuar o pagamento atrav&eacute;s de boleto mas n&atilde;o tenho como imprimir, &eacute; poss&iacute;vel?</strong></p>
<p>Voc&ecirc; dever&aacute; escolher a op&ccedil;&atilde;o "Boleto banc&aacute;rio" no processo de pagamento. Quando o boleto banc&aacute;rio for exibido na tela do seu computador, anote a seq&uuml;&ecirc;ncia num&eacute;rica, que s&atilde;o aproximadamente 40 algarismos. Com esses n&uacute;meros, voc&ecirc; poder&aacute; pagar o boleto direto na sua conta, os processos de pagamento variam de banco para banco, mas normalmente podemos classific&aacute;-los como ficha de compensa&ccedil;&atilde;o. Voc&ecirc; tamb&eacute;m poder&aacute; efetuar o pagamento em uma ag&ecirc;ncia banc&aacute;ria que aceite o pagamento utilizando esta seq&uuml;&ecirc;ncia num&eacute;rica. Em qualquer um dos casos, voc&ecirc; receber&aacute; um comprovante que atesta o pagamento e n&oacute;s receberemos a confirma&ccedil;&atilde;o de que o pagamento foi feito, sem a necessidade de enviar comprovante algum.</p>
<p>&nbsp;</p>
<p><strong>Como efetuar o pagamento atrav&eacute;s da internet?</strong></p>
<p>Selecione o banco de sua prefer&ecirc;ncia na p&aacute;gina de pagamento. Um link se abrir&aacute; automaticamente para o site de seu &ldquo;Internet banking&rdquo;. A partir da&iacute;, voc&ecirc; deve selecionar o pagamento do tipo "ficha de compensa&ccedil;&atilde;o" e digitar a seq&uuml;&ecirc;ncia num&eacute;rica do boleto nos campos solicitados.</p>
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
