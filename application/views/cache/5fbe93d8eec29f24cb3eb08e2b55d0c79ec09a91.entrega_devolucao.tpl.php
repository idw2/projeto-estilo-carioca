<?php /*%%SmartyHeaderCode:591859433544a624ba49639-50015813%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '5fbe93d8eec29f24cb3eb08e2b55d0c79ec09a91' => 
    array (
      0 => '/home/maria951/public_html/novo/application/views/entrega_devolucao.tpl',
      1 => 1412180521,
      2 => 'file',
    ),
    '6a0d8cd5da5366cd163c1096d3e3a62591b34250' => 
    array (
      0 => '/home/maria951/public_html/novo/application/views/header.tpl',
      1 => 1414160863,
      2 => 'file',
    ),
    'dddb63286e4a273b560ff992665e7d4c506e6fdb' => 
    array (
      0 => '/home/maria951/public_html/novo/application/views/navbar.tpl',
      1 => 1414159653,
      2 => 'file',
    ),
    '9c6368fa7ae30d46a3ff6d19316b23707d94dba8' => 
    array (
      0 => '/home/maria951/public_html/novo/application/views/footer.tpl',
      1 => 1414159509,
      2 => 'file',
    ),
    '90e90a97284dec988adac3b7318a019a6b5d1ff6' => 
    array (
      0 => '/home/maria951/public_html/novo/application/views/atendimento_online.tpl',
      1 => 1412097035,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '591859433544a624ba49639-50015813',
  'variables' => 
  array (
    'conteudo' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.19',
  'unifunc' => 'content_544a624be142c2_67982887',
  'cache_lifetime' => 120,
),true); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_544a624be142c2_67982887')) {function content_544a624be142c2_67982887($_smarty_tpl) {?><!DOCTYPE HTML>
<html lang="pt-br">

    <head>
        <meta charset="UTF-8">
        <title>Maria de Barro | Entrega e Devolução</title>

        <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1"/>
        <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0" />

                                                                                        
        <link rel="icon" type="image/vnd.microsoft.icon" href="/novo/web-files/img/favicon.ico"/>
        <link rel="shortcut icon" type="image/x-icon" href="/novo/web-files/img/favicon.ico"/>

        <link rel="stylesheet" href="/novo/web-files/font-awesome-4.1.0/css/font-awesome.min.css"/>
        <link rel="stylesheet" href="/novo/web-files/plugins/rs-plugin/css/settings.css"/>
        <link rel="stylesheet" href="/novo/web-files/plugins/flexslider/flexslider.css"/>
        <link rel="stylesheet" href="/novo/web-files/plugins/fancybox/jquery.fancybox.css"/>
        <link rel="stylesheet" href="/novo/web-files/pongstagr.am-master/source/pongstagr.am.css"/>		
        <link rel="stylesheet" href="/web-files/css/plugins/magnific-popup.css"/>		
        
        
        
        <link rel="stylesheet" href="/novo/web-files/css/joker.css"/>

    </head>
    <body style="padding-top: 52px" class="theme-default">

        <header class="header">
            <div class="navbar navbar-fixed-top" role="navigation">
                <div class="container">
                    <a href="#" class="brand-circle"><img src="/novo/web-files/img/brand-circle.png"></a>
                    <ul class="nav navbar-nav">
                        <li><a href="/novo/pt/produtos/checkout/" id="nav-login">Login e Cadastro</a></li>
                        <li><a onclick="open_atendimento()" style="cursor: pointer;">Atendimento Online</a></li>
                    </ul>
                    <ul class="nav navbar-nav navbar-right">
                        <li><a href="/novo/pt/produtos/checkout/">Wishlist</a></li>
                        <li>
                            <a id="shopping-cart" href="/novo/pt/produtos/checkout/" class="btn-with-icon fa fa-shopping-cart">
                                                                                                Meu Carrinho
                            </a>
                        </li>

                        

                        
                        

                    </ul>
                </div>
            </div>
            <div class="container header-brand">
                <div class="row">
                    <div class="col-sm-6 col-brand">
                        <a href="/novo/pt/" class="brand"><img src="/novo/web-files/img/logo.png" alt="Maria de Barro" border="0" title="" class="img-responsive"/></a>
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

    <li  class="" ><a href="/novo/pt/">Home</a></li>
    <li  class="" ><a href="/novo/pt/aneis/">Anéis</a></li>            
    <li  class="" ><a href="/novo/pt/brincos/">Brincos</a></li>           
    <li  class="" ><a href="/novo/pt/colares/">Colares</a></li>           
    <li  class="" ><a href="/novo/pt/pulseiras/">Pulseiras</a></li>                       
    <li  class="" ><a href="/novo/pt/conjuntos/">Conjuntos</a></li>                       
    <li  class="" ><a href="/novo/pt/promocoes/">Promoções</a></li>                       

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
                         <strong>Política</strong> de Entrega e Devolução
                    </h2>
                </div>

            </div>
        </div>
        <div class="row">
            <div class="col-lg-12">
                <p>Oferecemos aos nossos clientes 2 tipos de entrega: Normal e Expressa. E al&eacute;m dessas, a op&ccedil;&atilde;o de buscar o pedido na Maria de Barro (em nosso escrit&oacute;rio). O prazo para entrega dos produtos varia de acordo com regi&atilde;o de entrega, volume e peso do pedido. N&atilde;o h&aacute; cobran&ccedil;a de frete para a op&ccedil;&atilde;o Buscar na loja.</p>
<p>&nbsp;</p>
<p><strong>EXPRESSA:</strong>&nbsp;As entregas EXPRESSAS s&atilde;o realizadas no prazo de 1 (um) a 4 (quatro) dias &uacute;teis ap&oacute;s a postagem. Para a Regi&atilde;o Norte, a entrega pode ser realizada em at&eacute; 6 (seis) dias &uacute;teis, ap&oacute;s a postagem da mesma.</p>
<p><strong>NORMAL:</strong>&nbsp;As entregas NORMAIS s&atilde;o realizadas entre 03(tr&ecirc;s) &agrave; 23 (vinte e tr&ecirc;s) dias &uacute;teis ap&oacute;s a postagem, dependendo cidade de destino. Regi&atilde;o Sudeste a entrega pode ser realizada entre 3 (tr&ecirc;s) at&eacute; 10 (dez) dias &uacute;teis, demais regi&otilde;es entre 3 (tr&ecirc;s) at&eacute; 23 (vinte e tr&ecirc;s) dias &uacute;teis.</p>
<p><strong>Buscar na Maria de Barro:</strong>&nbsp;O pedido dever&aacute; ser feito e conclu&iacute;do atrav&eacute;s do nosso site e estar&aacute; dispon&iacute;vel em at&eacute; 1 dia &uacute;til ap&oacute;s a compensa&ccedil;&atilde;o do pagamento, quando estiver tudo ok com o pedido. O cliente receber&aacute; um e-mail informando que o pedido j&aacute; est&aacute; pronto para retirada.</p>
<p>Para buscar o seu pedido basta agendar atrav&eacute;s do e-mail maria@mariadebarro.com.br Nosso endere&ccedil;o:&nbsp;<span>Global 7000 Offices Estrada dos Bandeirantes, 7000 - Bloco C Sala 290 - Rio de Janeiro, RJ CEP: 22780-084</span></p>
<p>Os pedidos ser&atilde;o processados em at&eacute; 2 (dois) dias &uacute;teis ap&oacute;s a confirma&ccedil;&atilde;o do pagamento junto as institui&ccedil;&otilde;es financeiras.</p>
<p>&nbsp;</p>
<p><strong>Embalagem:</strong>&nbsp;Os pedidos s&atilde;o embalados e enviados em caixas de papel&atilde;o. Os produtos s&atilde;o embalados em uma embalagem especial, que al&eacute;m de proteger o produto, pode ser utilizado como presente. Caso voc&ecirc; esteja presenteando algu&eacute;m, informe qual(is) produto(s) s&atilde;o para presente, pois dessa forma, podemos embalar individualmente cada produto.</p>
<p>Ao ser informado da data de entrega do seu pedido, &eacute; importante que voc&ecirc;, ou uma pessoa de sua confian&ccedil;a, esteja no local para receber e assinar o protocolo de entrega da mercadoria. Nossos portadores s&atilde;o instru&iacute;dos a n&atilde;o efetuar a entrega, quando n&atilde;o houver um respons&aacute;vel no local pelo recebimento.</p>
<p>Importante: ap&oacute;s a 2&ordf; (segunda) tentativa de entrega, caso n&atilde;o haja algu&eacute;m para receber, o pedido &eacute; devolvido para o nosso escrit&oacute;rio. Para que o pedido seja enviado novamente, ser&aacute; cobrada uma taxa com o mesmo valor do frete para reenvio do produto. Caso aconte&ccedil;a esse tipo de situa&ccedil;&atilde;o com voc&ecirc;, entre em contato atrav&eacute;s do e-mail <a href="mailto:maria@mariadebarro.com.br">maria@mariadebarro.com.br</a> e informe o n&uacute;mero do seu pedido. A taxa do frete paga no primeiro envio n&atilde;o &eacute; reembolsada, pois houve tentativa de entrega.</p>
<p>&nbsp;</p>
<p><strong>&hearts; Custos com frete</strong></p>
<p>O frete ser&aacute; calculado automaticamente pelo sistema direto no carrinho de compras, de acordo com a op&ccedil;&atilde;o escolhida, seja ela NORMAL ou EXPRESSA, variando de acordo com o peso total das mercadorias, o volume da caixa e o local de entrega.</p>
<p>N&atilde;o h&aacute; cobran&ccedil;a de frete para a op&ccedil;&atilde;o Buscar Maria de Barro</p>
<p>N&atilde;o h&aacute; cobran&ccedil;a adicional pela embalagem, basta solicitar qual produto deseja que seja embalado para presente.</p>
<p>Dica: Recomendamos agrupar os produtos em um pedido &uacute;nico. N&atilde;o podemos agrupar dois pedidos distintos efetuados separadamente, assim as taxas de envio ser&atilde;o aplicadas a cada um deles.</p>
<p>&nbsp;</p>
<p><strong>&hearts; Pol&iacute;tica de Trocas</strong></p>
<p>Os produtos podem ser trocados, devolvidos por arrependimento do comprador ou defeito. Se ocorrer qualquer das hip&oacute;teses abaixo, recuse o recebimento do produto:</p>
<ul>
<li>Embalagem aberta ou avariada;</li>
<li>Produto avariado;</li>
<li>Produto em desacordo com o pedido.</li>
</ul>
<p>&nbsp;</p>
<p><strong>&hearts; Troca por op&ccedil;&atilde;o ou arrependimento</strong></p>
<p>O c&oacute;digo do consumidor assegura o direito de troca do produto no caso de desist&ecirc;ncia/arrependimento ou op&ccedil;&atilde;o desde que ocorra em at&eacute; 7(sete) dias, logo ap&oacute;s o recebimento do mesmo. Arcaremos com a despesa de postagem do produto para an&aacute;lise, atrav&eacute;s de autoriza&ccedil;&atilde;o de postagem, que ser&aacute; informado pelo nosso SAC. Para trocar um produto &eacute; necess&aacute;rio que voc&ecirc; comunique nossa Central de Atendimento pelo e-mail maria@mariadebarro.com.br, informando o n&uacute;mero do pedido, a data da compra e a refer&ecirc;ncia do item que ser&aacute; trocado ou devolvido nos explicando o motivo, ent&atilde;o responderemos o e-mail, j&aacute; informando uma autoriza&ccedil;&atilde;o de postagem dos Correios e como deve proceder. O produto dever&aacute; ser devolvido protegido na embalagem tnt do envio e em caixa adequada, obrigatoriamente deve estar protegido e com a tag da Maria de Barro. Importante: s&oacute; aceitamos devolu&ccedil;&otilde;es depois de confirmada essa comunica&ccedil;&atilde;o e dentro do prazo. Caso contr&aacute;rio, n&atilde;o aceitaremos a devolu&ccedil;&atilde;o e sua compra ser&aacute; reenviada sem consulta pr&eacute;via. A autoriza&ccedil;&atilde;o de postagem &eacute; v&aacute;lida somente 1(uma) vez por pedido (para devolu&ccedil;&atilde;o ou troca de produtos do mesmo pedido), devendo postar no dia seguinte ao recebimento da autoriza&ccedil;&atilde;o de postagem, para que a mesma n&atilde;o perca validade. N&atilde;o arcaremos com uma segunda autoriza&ccedil;&atilde;o de postagem, e caso perca o prazo da primeira autoriza&ccedil;&atilde;o, o custo do envio do(s) produto(s) ser&aacute; responsabilidade do cliente. Ao recebermos a devolu&ccedil;&atilde;o, caso seja detectado que o cliente fez uso ou o(s) produto(s) volte(m) danificado(s), o valor da autoriza&ccedil;&atilde;o da postagem ser&aacute; descontado no valor do(s) produto(s) a ser(em) reembolsado(s) para o cliente. Ap&oacute;s nossa an&aacute;lise, e se estiver tudo ok, o reembolso se dar&aacute; atrav&eacute;s de cr&eacute;ditos na loja ou estorno da compra, excluindo o valor frete do frete pago pelo cliente para o envio do pedido, isto &eacute;, caso tenha sido cobrado frete para envio do pedido.</p>
<p>&nbsp;</p>
<p><strong>&hearts; Troca de itens com defeito</strong></p>
<p>N&oacute;s asseguramos o direito de troca do produto no caso de defeito em at&eacute; 7(sete) dias ap&oacute;s a entrega do mesmo. Ap&oacute;s a an&aacute;lise e comprova&ccedil;&atilde;o de que o produto foi entregue com defeito, a Maria de Barro arca com as despesas de recolhimento/postagem do produto para an&aacute;lise e reenvio de um novo produto em perfeito estado para o cliente (caso esteja dispon&iacute;vel em estoque e seja o desejo do cliente).</p>
<p>Para solicitar a troca de um produto que tenha sido enviado com defeito, &eacute; necess&aacute;rio que voc&ecirc; comunique nosso SAC pelo e-mail maria@mariadebarro.com.br, informando o n&uacute;mero do pedido, a data da compra, fotos do defeito do produto e a refer&ecirc;ncia do item que ser&aacute; devolvido, realizando este procedimento imediatamente ap&oacute;s o recebimento do mesmo.</p>
<p>N&oacute;s iremos enviar o produto para an&aacute;lise e caso n&atilde;o haja conserto, providenciaremos a troca pelo mesmo ou por outro item de sua escolha, desde que seja o mesmo valor do produto. Havendo diferen&ccedil;a de valores entre os produtos, o cliente poder&aacute; optar pelo pagamento da diferen&ccedil;a ou receber a diferen&ccedil;a como cr&eacute;dito na loja. O prazo para an&aacute;lise &eacute; de 30 dias corridos, mas pode ser definido antes deste per&iacute;odo.</p>
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
                        <li><a href="/novo/pt/informacoes/quem-somos">Quem somos</a></li>
                        <li><a href="#">Nosso blog</a></li>
                        <li><a href="/novo/pt/informacoes/politica-privacidade">Política de privacidade</a></li>
                        <li><a href="/novo/pt/informacoes/entrega-devolucao">Política de entrega</a></li>
                        <li><a href="/novo/pt/informacoes/procon-rj">Procon/RJ</a></li>
                    </ul>
                </div>
                <div class="col-sm-3 footer-group">
                    <h2 class="footer-title">Dúvidas</h2>
                    <ul class="footer-lista">
                        <li><a href="/novo/pt/informacoes/contato">Atendimento</a></li>
                        <li><a href="/novo/pt/informacoes/trocas-e-devolucoes">Trocas e devoluções</a></li>
                        <li><a href="/novo/pt/informacoes/direito-de-arrependimento">Direito de arrependimento</a></li>
                        <li><a href="/novo/pt/informacoes/termos-servicos">Termos de serviço</a></li>
                        <li><a href="/novo/pt/informacoes/perguntas-frequentes">Perguntas frequentes</a></li>
                        <li><a href="/novo/pt/informacoes/cuidados-produtos">Cuidados com os produtos</a></li>
                        
                    </ul>
                </div>
                <div class="col-sm-3 footer-group">
                    <h2 class="footer-title">Eu quero!</h2>
                    <ul class="footer-lista">
                        <li><a href="/novo/pt/novos-produtos/">Nossos produtos</a></li>
                        <li><a href="/novo/pt/informacoes/promocoes">Promoções</a></li>
                        <li><a href="/novo/pt/informacoes/programa-vantagens">Programa de vantagens</a></li>
                        <li><a href="/novo/pt/informacoes/programa-fidelidade">Programa de fidelidade</a></li>
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
                        <img src="/novo/web-files/img/assets/band_visa.png">
                        <img src="/novo/web-files/img/assets/band_master.png">
                        <img src="/novo/web-files/img/assets/band_american.png">
                        <img src="/novo/web-files/img/assets/band_diners.png">
                        <img src="/novo/web-files/img/assets/band_elo.png">
                        <img src="/novo/web-files/img/assets/band_boleto.png">
                    </p>
                </div>
                <div class="col-sm-5 footer-group">
                    <h2 class="footer-title">Certificados</h2>
                    <p>
                        <img src="/novo/web-files/img/assets/band_ebit.png">
                        <img src="/novo/web-files/img/assets/siteblindado.gif">
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
                    <p class="copyright">Desenvolvido por <a href="http://designlab.com.br/ " target="_blank"><img src="/novo/web-files/img/assets/dl.png" width="90" class="dl"></a></p>
                </div>
            </div>
        </div>
    </div>
</footer>


<!-- /FOOTER  -->

<script language="javascript" src="/novo/web-files/js/jquery-1.11.1.min.js"></script>
<script src="//code.jquery.com/ui/1.11.1/jquery-ui.js"></script>

<script language="javascript" src="/novo/web-files/js/vendor/jquery.easing.1.3.js"></script>


<script language="javascript" src="/novo/web-files/plugins/rs-plugin/js/jquery.themepunch.plugins.min.js"></script>
<script language="javascript" src="/novo/web-files/plugins/rs-plugin/js/jquery.themepunch.revolution.min.js"></script>
<script language="javascript" src="/novo/web-files/plugins/flexslider/jquery.flexslider-min.js"></script>
<script language="javascript" src="/novo/web-files/plugins/fancybox/jquery.fancybox.js"></script>

<script language="javascript" src="/novo/web-files/js/funcoes.js"></script>
<script language="javascript" src="/novo/web-files/js/jQuery-Mask-Plugin.js"></script>
<script language="javascript" src="/novo/web-files/bootstrap/js/bootstrap.js"></script>
<script language="javascript" src="/novo/web-files/js/vendor/jquery.payment.js"></script>
<script language="javascript" src="/novo/web-files/js/vendor/jquery.mask.min.js"></script>
<script language="javascript" src="/novo/web-files/pongstagr.am-master/source/pongstagr.am.js"></script>
<script language="javascript" src="/novo/web-files/js/vendor/jquery.magnific-popup.min.js"></script>
<script language="javascript" src="/novo/web-files/js/joker.js"></script>
<script language="javascript" src="/novo/web-files/js/default.js"></script>

<link rel="stylesheet" href="//code.jquery.com/ui/1.11.1/themes/smoothness/jquery-ui.css">
<link rel="stylesheet" href="/novo/resources/demos/style.css">


</body>
</html><?php }} ?>
