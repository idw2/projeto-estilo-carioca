<?php /*%%SmartyHeaderCode:7651215485460d64d205548-61034354%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '3c02930e606542f9b9f8f783af157db79be1f148' => 
    array (
      0 => '/home/maria951/public_html/homolog/application/views/categorias.tpl',
      1 => 1415213179,
      2 => 'file',
    ),
    '27f9a7a3179d1f7292a60ba13c6a64d672873ee0' => 
    array (
      0 => '/home/maria951/public_html/homolog/application/views/header.tpl',
      1 => 1415211731,
      2 => 'file',
    ),
    '0b07c4222b2a38d9dc09bbf5ff933afa59e6bd20' => 
    array (
      0 => '/home/maria951/public_html/homolog/application/views/navbar.tpl',
      1 => 1415221960,
      2 => 'file',
    ),
    '6faaabf2e71bebda07a190870503cd27e94da1d6' => 
    array (
      0 => '/home/maria951/public_html/homolog/application/views/footer.tpl',
      1 => 1415365941,
      2 => 'file',
    ),
    '664eb11e5e87b30f38f0ffe594bbda9642eba0cf' => 
    array (
      0 => '/home/maria951/public_html/homolog/application/views/atendimento_online.tpl',
      1 => 1414499263,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '7651215485460d64d205548-61034354',
  'variables' => 
  array (
    'btn_anterior' => 0,
    'paginacao' => 0,
    'total_produto' => 0,
    'pagina' => 0,
    'pgn' => 0,
    'search' => 0,
    'categoria' => 0,
    'language' => 0,
    'sort' => 0,
    'qntdd' => 0,
    'btn_proximo' => 0,
    'arr' => 0,
    'produto' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.19',
  'unifunc' => 'content_5460d64e326634_50374334',
  'cache_lifetime' => 120,
),true); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5460d64e326634_50374334')) {function content_5460d64e326634_50374334($_smarty_tpl) {?><!DOCTYPE HTML>
<html lang="pt-br">

    <head>
        <meta charset="UTF-8">
        <title>Maria de Barro | Categoria | Conjuntos</title>

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
                                                <li><strong style="display: inline-block; line-height: 50px; color: #df5d65;">Boa tarde, Rogerio Pontes!</strong></li>
                        <li><a href="/pt/conta/" id="nav-login" style="display: inline-block;"> Minha conta</a></li>
                                                
                        
                    </ul>
                    <ul class="nav navbar-nav navbar-right">
                                                <li><a href="/pt/conta/wishlist">Wishlist</a></li>
                                                <li>
                            <a id="shopping-cart" href="/pt/produtos/checkout/" class="btn-with-icon fa fa-shopping-cart">
                                                                    <span class="label label-primary">1</span>
                                                                Meu Carrinho
                            </a>
                        </li>
                                                    <li><a href="/pt/conta/sair" id="nav-login" style="display: inline-block;">Sair</a></li>    
                                                

                        
                        

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
        <li  class="active" ><a href="/pt/conjuntos/">Conjuntos</a></li>                       
        <li  class="" ><a href="/pt/promocoes/">Promoções</a></li>                       

    </ul>
    <div style="position: relative">
        <form class="navbar-form pull-right search-wrap" role="search" action="/pt/novos-produtos" method="post">
            <input type="search" name="search" id="search" class="form-control" placeholder="BUSCAR" autocomplete="off"/>
            <button type="submit" class="btn eu-quero"><span class="fa fa-search"></span></button>
        </form>  
        <div class="sugestao"> </div>
    </div>
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


<section class="pag-section">
    <div class="container">

        <div class="row">
            <div class="col-lg-12">
                
                
            </div>
        </div>

        <div class="row">
            <div class="col-lg-12">
                <div class="page-controls">
                    <ul class="pagination">
                        <li class="disabled" ><span>« Anterior</span></li>
                                                                                                                                    <li class="active"><a href="#">1 <span class="sr-only">(atual)</span></a></li>
                                                            
                                                         
                            
                        

                        <li class="disabled"><a href="#">Próxima »</a></li>
                    </ul>
                    <div class="form-inline page-controls-options">
                        <label>Mostrar por: <select name="selectPrductSort" id="selectPrductSort" class="form-control">
                                <option value="">--</option>
                                <option value="mais-novos" selected>Mais novos</option>
                                <option value="preco-crescente" >Preço: Menor para o maior</option>
                                <option value="preco-decrescente" >Preço: Maior para o menor</option>
                                <option value="nome-crescente" >Listar por nome: A para o Z</option>
                                <option value="nome-decrescente" >Listar por nome: Z para o A</option>
                                <option value="quantidade" >Em estoque</option>
                            </select>
                        </label>
                                                    <input type="hidden" name="url" id="url" value="/pt/conjuntos"/>
                                                <input type="hidden" name="pagina" id="pagina" value="1"/>
                        <input type="hidden" name="qntdd_produtos" id="qntdd_produtos" value="16"/>
                    </div>
                </div>
                <div class="divisor-dashed"></div>
            </div>
        </div> 

        <div class="row">
                                                <div class="col-thumb col-xs-6 col-sm-3">
                        <div class="thumbnail">
                            <div class="thumbnail-img">
                                <a href="/pt/conjuntos/conjunto-dourado-chanel-cordao-brinco-co">
                                                                            <span class="thumbnail-tag">Novo</span>
                                                                        <img src="/web-files/upload/thumbs/A2FAD9F749518BFB7BBF8592CA0C640C/49BBC3716982FE5A78659E9631BBF625.jpg" alt="Conjunto dourado chanel cordao/brinco co" border="0" title="Conjunto dourado chanel cordao/brinco co" class="img-responsive" width="261" height="289"/>
                                </a>
                            </div>
                            <div class="thumbnail-infos">
                                <div class="row sp1"><div class="col-sm-12 sp2"></div></div>
                                <a href="/pt/conjuntos/conjunto-dourado-chanel-cordao-brinco-co">

                                    <div class="thumbnail-title"> R$ 174,00</div>

                                    
                                    <a href="/pt/conjuntos/conjunto-dourado-chanel-cordao-brinco-co">
                                        <div class="thumbnail-subtitle">Conjunto dourado chanel cordao/brinco co</div>
                                    </a>
                                    
                            </div>
                        </div>
                    </div>
                                                                <div class="col-thumb col-xs-6 col-sm-3">
                        <div class="thumbnail">
                            <div class="thumbnail-img">
                                <a href="/pt/conjuntos/conjunto-dourado-cordao-brinco-de-perola">
                                                                            <span class="thumbnail-tag">Novo</span>
                                                                        <img src="/web-files/upload/thumbs/477656F031ACA8A26A0D60FA01D8820B/3DDF5FFC90D281448C30DA3E8881D47D.jpg" alt="Conjunto dourado cordão brinco de pérola" border="0" title="Conjunto dourado cordão brinco de pérola" class="img-responsive" width="261" height="289"/>
                                </a>
                            </div>
                            <div class="thumbnail-infos">
                                <div class="row sp1"><div class="col-sm-12 sp2"></div></div>
                                <a href="/pt/conjuntos/conjunto-dourado-cordao-brinco-de-perola">

                                    <div class="thumbnail-title"> R$ 120,00</div>

                                    
                                    <a href="/pt/conjuntos/conjunto-dourado-cordao-brinco-de-perola">
                                        <div class="thumbnail-subtitle">Conjunto dourado cordão brinco de pérola</div>
                                    </a>
                                    
                            </div>
                        </div>
                    </div>
                                    </div>

        <div class="row">
            <div class="col-lg-12">
                <div class="page-controls">
                    <ul class="pagination">
                        <li class="disabled" ><span>« Anterior</span></li>
                                                                                                                                        <li class="active"><a href="#">1 <span class="sr-only">(atual)</span></a></li>
                                                            
                                                         
                            
                        

                        <li class="disabled"><a href="#">Próxima »</a></li>
                    </ul>
                    <div class="form-inline page-controls-options">
                        <label>Mostrar por: <select name="selectPrductSort_2" id="selectPrductSort_2" class="form-control">
                                <option value="">--</option>
                                <option value="mais_novos" selected>Mais novos</option>
                                <option value="preco-crescente" >Preço: Menor para o maior</option>
                                <option value="preco-decrescente" >Preço: Maior para o menor</option>
                                <option value="nome-crescente" >Listar por nome: A para o Z</option>
                                <option value="nome-decrescente" >Listar por nome: Z para o A</option>
                                <option value="quantidade" >Em estoque</option>
                            </select>
                        </label>
                        
                         
                                                    <input type="hidden" name="url" id="url" value="/pt/conjuntos"/>
                                                
                        
                        
                        <input type="hidden" name="pagina" id="pagina" value="1"/>
                    </div>
                </div>
            </div>
        </div>

    </div>
</section>

<!-- FOOTER  -->



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

<script language="javascript" src="/web-files/js/jquery-1.11.1.min.js"></script>

<script src="//code.jquery.com/ui/1.11.1/jquery-ui.js"></script>

<script language="javascript" src="/web-files/js/vendor/jquery.easing.1.3.js"></script>


<script language="javascript" src="/web-files/plugins/rs-plugin/js/jquery.themepunch.plugins.min.js"></script>
<script language="javascript" src="/web-files/plugins/rs-plugin/js/jquery.themepunch.revolution.min.js"></script>
<script language="javascript" src="/web-files/plugins/flexslider/jquery.flexslider-min.js"></script>
<script language="javascript" src="/web-files/plugins/fancybox/jquery.fancybox.js"></script>

<script language="javascript" src="/web-files/js/vendor/underscore-min.js"></script>
<script language="javascript" src="/web-files/js/funcoes.js"></script>
<script language="javascript" src="/web-files/js/jQuery-Mask-Plugin.js"></script>
<script language="javascript" src="/web-files/bootstrap/js/bootstrap.js"></script>
<script language="javascript" src="/web-files/js/vendor/jquery.payment.js"></script>
<script language="javascript" src="/web-files/js/vendor/jquery.mask.min.js"></script>
<script language="javascript" src="/web-files/pongstagr.am-master/source/pongstagr.am.js"></script>
<script language="javascript" src="/web-files/js/vendor/jquery.magnific-popup.min.js"></script>
<script language="javascript" src="/web-files/js/joker.js"></script>
<script language="javascript" src="/web-files/js/default.js"></script>




<script> var link  = window.location.href; if( link.indexOf('https://') ){ window.location='https://www.mariadebarro.com.br/homolog/';} </script>

</body>
</html><?php }} ?>