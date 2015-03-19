<?php /*%%SmartyHeaderCode:17541941235432b52db08702-95241171%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '0accc6c702f0b5d331399e0821f33a31b70d4037' => 
    array (
      0 => '/home/maria951/public_html/novo/application/views/minha_conta.tpl',
      1 => 1410882563,
      2 => 'file',
    ),
    '6a0d8cd5da5366cd163c1096d3e3a62591b34250' => 
    array (
      0 => '/home/maria951/public_html/novo/application/views/header.tpl',
      1 => 1412537397,
      2 => 'file',
    ),
    'dddb63286e4a273b560ff992665e7d4c506e6fdb' => 
    array (
      0 => '/home/maria951/public_html/novo/application/views/navbar.tpl',
      1 => 1412200448,
      2 => 'file',
    ),
    'f9aba294bedd1c58ea2a06f3e7f314dbd8ec1b53' => 
    array (
      0 => '/home/maria951/public_html/novo/application/views/navbar2.tpl',
      1 => 1412167601,
      2 => 'file',
    ),
    '9c6368fa7ae30d46a3ff6d19316b23707d94dba8' => 
    array (
      0 => '/home/maria951/public_html/novo/application/views/footer.tpl',
      1 => 1412535457,
      2 => 'file',
    ),
    '90e90a97284dec988adac3b7318a019a6b5d1ff6' => 
    array (
      0 => '/home/maria951/public_html/novo/application/views/atendimento_online.tpl',
      1 => 1412097035,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '17541941235432b52db08702-95241171',
  'variables' => 
  array (
    'language' => 0,
    'erro' => 0,
    'nome' => 0,
    'email' => 0,
    'aniversario' => 0,
    'ddd' => 0,
    'tel' => 0,
    'ramal' => 0,
    'updatePassword' => 0,
    'lembrete' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.19',
  'unifunc' => 'content_5432b52de15c11_10619612',
  'cache_lifetime' => 120,
),true); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5432b52de15c11_10619612')) {function content_5432b52de15c11_10619612($_smarty_tpl) {?><!DOCTYPE HTML>
<html lang="pt-br">

    <head>
        <meta charset="UTF-8">
        <title>Maria de Barro | Minha conta</title>

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
                        <li><a href="/pt/produtos/autenticacao/" id="nav-login">Login e Cadastro</a></li>
                        <li><a onclick="open_atendimento()" style="cursor: pointer;">Atendimento Online</a></li>
                    </ul>
                    <ul class="nav navbar-nav navbar-center">
                        <li><a href="tel:+552132835265">Tel: 21 3283.5265</a></li>
                        <li><span>Menu</span></li>
                    </ul>
                    <ul class="nav navbar-nav navbar-right">
                        <li><a href="/pt/produtos/checkout/">Wishlist</a></li>
                        <li>
                            <a href="/pt/produtos/checkout/" class="btn-with-icon fa fa-shopping-cart">
                                                                    <span class="label label-primary">6</span>
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
                        <a class="carrinho-wrap" href="/pt/produtos/checkout/">
                            <img src="/web-files/img/carrinho.png" alt="" border="0" title="" />
                            <span id="item_carrinho"> 6 Itens                             </span>
                        </a>
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


<div class="container">
    <br/>   
    <div class="row" style="margin-bottom: 10%;">

        <div class="col-lg-12">
    <ul class="nav nav-tabs nav-justified navbar-checkout" role="tablist" style="font-size: 14px">
        <li ><a href="/pt/produtos/checkout/">Resumo</a></li>
        <li class="active"><a href="/pt/produtos/autenticacao/">Login</a></li>
        <li ><a href="/pt/produtos/endereco/">Endereço</a></li>
        <li ><a href='/pt/produtos/pagamento'>Pagamento</a></li>
        <li ><a href='/pt/produtos/confirmacao'>Confirmação</a></li>
    </ul>
</div>

    </div>
    <div class="row">       
        <div class="col-lg-12">    
            <div class="panel panel-default">    
                <table class="table" style="font-size: 14px">
                    <thead>
                        <tr>
                            <th>Minha conta</th>
                        </tr>
                    </thead>
                    </body>

                    <tr>
                        <td>
                            <form class="navbar-form navbar-left" role="search" action="/pt/produtos/endereco" method="post">

                                                                    <div class="alert alert-success" role="alert"><strong>Atenção: </strong>Preencher todos os campos!</div>
                                                                <br/>
                                <h4>Dados pessoais</h4>
                                <p><input type="text" class="form-control" style="min-width: 100%" id="nome" name="nome" maxlength="40" value="Rogerio de Almeida Pontes" placeholder="Nome completo"/></p>
                                <p><input type="text" class="form-control" style="min-width: 47%" id="email" name="email" maxlength="70" value="roger@designlab.com.br" placeholder="E-mail" readonly/></p>
                                <h4>Data de nascimento</h4>
                                <p><select name='dia' class='form-control'><optgroup label='Dia'><option value='01'>01</option><option value='02'>02</option><option value='03'>03</option><option value='04'>04</option><option value='05'>05</option><option value='06'>06</option><option value='07'>07</option><option value='08'>08</option><option value='09'>09</option><option value='10'>10</option><option value='11'>11</option><option value='12'>12</option><option value='13'>13</option><option value='14'>14</option><option value='15'>15</option><option value='16'>16</option><option value='17'>17</option><option value='18'>18</option><option value='19'>19</option><option value='20'>20</option><option value='21'>21</option><option value='22'>22</option><option value='23'>23</option><option value='24'>24</option><option value='25'>25</option><option value='26'>26</option><option value='27'>27</option><option value='28'>28</option><option value='29'>29</option><option value='30' selected>30</option><option value='31'>31</option></optgroup></select>&nbsp;<select name='mes' class='form-control'><optgroup label='Mês'><option value='01'>01</option><option value='02'>02</option><option value='03'>03</option><option value='04'>04</option><option value='05'>05</option><option value='06'>06</option><option value='07'>07</option><option value='08'>08</option><option value='09'>09</option><option value='10' selected>10</option><option value='11'>11</option><option value='12'>12</option></optgroup></select>&nbsp;<select name='ano' class='form-control'><optgroup label='Ano'><option value='2000'>2000</option><option value='1999'>1999</option><option value='1998'>1998</option><option value='1997'>1997</option><option value='1996'>1996</option><option value='1995'>1995</option><option value='1994'>1994</option><option value='1993'>1993</option><option value='1992'>1992</option><option value='1991'>1991</option><option value='1990'>1990</option><option value='1989'>1989</option><option value='1988'>1988</option><option value='1987'>1987</option><option value='1986'>1986</option><option value='1985'>1985</option><option value='1984'>1984</option><option value='1983'>1983</option><option value='1982'>1982</option><option value='1981'>1981</option><option value='1980'>1980</option><option value='1979'>1979</option><option value='1978'>1978</option><option value='1977' selected>1977</option><option value='1976'>1976</option><option value='1975'>1975</option><option value='1974'>1974</option><option value='1973'>1973</option><option value='1972'>1972</option><option value='1971'>1971</option><option value='1970'>1970</option><option value='1969'>1969</option><option value='1968'>1968</option><option value='1967'>1967</option><option value='1966'>1966</option><option value='1965'>1965</option><option value='1964'>1964</option><option value='1963'>1963</option><option value='1962'>1962</option><option value='1961'>1961</option><option value='1960'>1960</option><option value='1959'>1959</option><option value='1958'>1958</option><option value='1957'>1957</option><option value='1956'>1956</option><option value='1955'>1955</option><option value='1954'>1954</option><option value='1953'>1953</option><option value='1952'>1952</option><option value='1951'>1951</option><option value='1950'>1950</option><option value='1949'>1949</option><option value='1948'>1948</option><option value='1947'>1947</option><option value='1946'>1946</option><option value='1945'>1945</option><option value='1944'>1944</option><option value='1943'>1943</option><option value='1942'>1942</option><option value='1941'>1941</option><option value='1940'>1940</option><option value='1939'>1939</option><option value='1938'>1938</option><option value='1937'>1937</option><option value='1936'>1936</option><option value='1935'>1935</option><option value='1934'>1934</option><option value='1933'>1933</option><option value='1932'>1932</option><option value='1931'>1931</option><option value='1930'>1930</option><option value='1929'>1929</option><option value='1928'>1928</option><option value='1927'>1927</option><option value='1926'>1926</option><option value='1925'>1925</option><option value='1924'>1924</option><option value='1923'>1923</option><option value='1922'>1922</option><option value='1921'>1921</option><option value='1920'>1920</option><option value='1919'>1919</option><option value='1918'>1918</option><option value='1917'>1917</option><option value='1916'>1916</option><option value='1915'>1915</option><option value='1914'>1914</option><option value='1913'>1913</option><option value='1912'>1912</option><option value='1911'>1911</option><option value='1910'>1910</option><option value='1909'>1909</option><option value='1908'>1908</option><option value='1907'>1907</option><option value='1906'>1906</option><option value='1905'>1905</option><option value='1904'>1904</option><option value='1903'>1903</option><option value='1902'>1902</option><option value='1901'>1901</option><option value='1900'>1900</option></optgroup></select></p>
                                <h4>Sexo</h4>
                                <p> 
                                    <select name="sexo" class="form-control">
                                        <option value="M">Masculino</option>
                                        <option value="F">Feminino</option>
                                    </select>
                                </p>
                                <p>
                                <h4>Telefone ou celular</h4>
                                <input type="text" class="form-control" style="max-width: 15%" id="ddd" name="ddd" maxlength="4" value="61" placeholder="DDD" onkeypress="return formataNumDV(event, this, 2);"/>
                                <input type="text" class="form-control" style="max-width: 30%" id="tel" name="tel" maxlength="10" value="39678750" placeholder="Telefone" onkeypress="return formataNumDV(event, this, 9);"/>
                                <input type="text" class="form-control" style="max-width: 30%" id="ramal" name="ramal" maxlength="8" value="" placeholder="Ramal" onkeypress="return formataNumDV(event, this, 4);"/>
                                </p>
                                <div class="updatePassword  hide ">
                                <h4>Sua senha</h4>
                                <p><input type="password" class="form-control" style="max-width: 47%" id="passwd" name="passwd" maxlength="50" value="" placeholder="Senha"/></p>
                                <p><input type="password" class="form-control" style="max-width: 47%" id="passwd2" name="passwd2" maxlength="50" value=""  placeholder="Repetir senha"/></p>
                                <h4>Lembrete de segurança</h4>
                                <p><input type="text" class="form-control" style="min-width: 100%" id="lembrete" name="lembrete" maxlength="30" value="apenas teste" placeholder="Lembrete de senha"/></p>
                                </div>
                                <h4><input type="checkbox" name="updatePassword" id="updatePassword"  /> Desejo atualizar a minha senha.</h4>
                                <p><a class="btn btn-primary btn-primary-maria" href="/pt/produtos/autenticacao/">VOLTAR</a>&nbsp;<button type="submit" class="btn btn-primary" name="enviar">ENVIAR</button></p>
                            </form>
                        </td>
                    </tr>
                    </tbody>
                </table>
            </div>
        </div>

    </div>
    <div>
        <ul class="pager">
            <li class="previous"><a href="/pt/produtos/checkout/">&larr; Continuar comprando</a></li>
            <li class="next"><a href="/pt/produtos/endereco/">Avançar &rarr;</a></li>
        </ul>
    </div> 
</div>
<div style="clear: both;"></div>
<script>

    window.onload = teste;
    function teste(){
        $(document).ready(function(){
            $("#updatePassword").click(function(){
                if( $("#updatePassword").is(':checked') ){
                    $(".updatePassword").removeClass("hide");
                } else {
                    $(".updatePassword").addClass("hide");
                } 
            });
        });
    }

    
</script>

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

<footer class="footer">
    <div class="bs-docs-featurette x-footer mftoot">
        <div class="container">
            <div class="row">
                <div class="col-sm-3">
                    <h3 class="mH3">Maria de Barro</h3>
                    <div class="m-footer" id="resume-somos">

                    </div>
                    <div style="text-align: left; color: #fff">
                        <i class="fa fa-angle-double-right"></i><a href="/pt/informacoes/quem-somos"> leia mais ...</a><br/>     
                    </div>
                </div>
                <div class="col-sm-3">
                    <h3 class="mH3">Fale com a Maria</h3>
                    <ul class="m-footer">
                        <li>
                            <p class="big-message fale-com-maria-vzap">
                                <span class="circled"><i class="icon-whatsapp"></i></span>
                                + 55 21 <strong>99576.5038</strong>
                            </p>
                        </li>
                        <li>
                            <p class="big-message fale-com-maria-vphone">
                                <span class="circled"><i class="fa fa-phone"></i></span>
                                + 55 21 <strong>3283.5265</strong>
                            </p>
                        </li>
                        <li>
                            <p style="font-size: 14px;font-size: 1.4rem;" class="fale-com-maria-vmail">
                                <span class="circled"><i class="fa fa-envelope-o"></i></span>
                                maria@mariadebarro.com.br
                            </p>
                        </li>
                    </ul>
                </div>
                <div class="col-sm-3">
                    <h3 class="mH3">Minhas compras</h3>
                    <ul class="m-footer">
                        <li><a href="/pt/">Minha conta</a></li>
                        <li><a href="/pt/">Meus pedidos</a></li>
                        <li><a href="/pt/">Lista de desejos</a></li>
                        <li><a href="/pt/">VENDA POR ATACADO</a></li>
                    </ul>
                </div>
                <div class="col-sm-3"> 
                    <h3 class="mH3">Eu Quero!</h3>
                    <ul class="m-footer">
                        <li><a href="#">Novos Produtos</a></li>
                        <li><a href="/pt/informacoes/promocoes">Promoções</a></li>
                        <li><a href="/pt/informacoes/programa-vantagens">Programa de vantagens</a></li>
                        <li><a href="/pt/informacoes/programa-fidelidade">Programa de fidelidade</a></li>
                        <li><a href="#">Guia de presentes</a></li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
    <div class="bs-docs-featurette x-footer footer-2">
        <div class="container">
            <div class="row">
                <div class="col-sm-4"> 
                    <h3 class="mH3">Precisa de Ajuda?</h3>
                    <ul class="m-footer-2">
                        <li><a href="/pt/informacoes/forma-pagamento">Formas de Pagamento</a></li>
                        <li><a href="/pt/informacoes/entrega-devolucao">Entrega e devolução</a></li>
                        <li><a href="/pt/informacoes/procon_rj">Procon-RJ</a></li>
                        <li><a href="/pt/informacoes/perguntas-frequentes">Perguntas Frequentes</a></li>
                        <li><a href="/pt/informacoes/cuidados-produtos">Cuidados com o produto</a></li>
                        <li><a href="/pt/informacoes/contato">Fale conosco</a></li>                    
                    </ul>
                </div>
                <div class="col-sm-4"> 
                    <h3 class="mH3">Sobre a Maria</h3>
                    <ul class="m-footer-2">
                        <li><a href="/pt/informacoes/quem_somos">Quem somos</a></li>
                        <li><a href="#">Nosso Blog</a></li>
                        <li><a href="/pt/informacoes/politica-privacidade">Política de Privacidade</a></li>
                        <li><a href="/pt/informacoes/termos-servicos">Termos de serviço</a></li>
                    </ul>
                    <div class="row">
                        <div class="col-sm-12" style="text-align: left;">
                            <form name="myNewsletter" class="navbar-form navbar-left form-inline form-newsletter" method="post" action="/pt/informacoes/newsletter" enctype="multipart/form-data" >
                                <div class="form-group">
                                    <p style="margin-bottom: 0">Receba nossa Newsletter</p>
                                    <input type="text" name="email" class="form-control form-control-gray" placeholder="SEU EMAIL">
                                    <button type="submit" class="btn">
                                        <img src="/web-files/img/envelope.gif" border="0" alt="newsletter" title="newsletter" width="31px" height="32px" />  
                                    </button>
                                </div>
                            </form>                     
                        </div>    
                    </div>    
                </div>
                <div class="col-sm-4 text-right"> 
                    <img src="/web-files/img/footer-selos.jpg">
                </div>

            </div>
        </div>
    </div>
    <div class="direitos" style="border-top: #dcdcdc 1px solid; background: #fff;">
        <div class="container">
            <div class="row"> 
                <div class="col-sm-6" style="line-height: 6; font-size: 14px;"> 
                    Desenvolvido por <strong><a href="http://www.designlab.com.br" target="_blank"><img src="/web-files/img/designlab.png" border="0" alt="" title="" style="position: relative; bottom: 2px;"/></a></strong>
                </div> 
                <div class="col-sm-6 text-right"> 
                    <div class="redes-sociais">
                        <a target="_blank" href="http://instagram.com/mariadebarro" class="instagram"><i class="fa fa-instagram"></i></a>
                        <a target="_blank" href="http://instagram.com/mariadebarro" class="facebook"><i class="fa fa-facebook"></i></a>
                        <a target="_blank" href="#" class="twitter"><i class="fa fa-twitter"></i></a>
                        <a target="_blank" href="#" class="gplus"><i class="fa fa-google-plus"></i></a>                
                    </div>
                </div> 
            </div> 
        </div> 
    </div>
</footer>
<!-- /FOOTER  -->

<script language="javascript" src="/web-files/js/jquery-2.1.1.min.js"></script>

<script language="javascript" src="/web-files/js/vendor/jquery.easing.1.3.js"></script>


<script language="javascript" src="/web-files/plugins/rs-plugin/js/jquery.themepunch.plugins.min.js"></script>
<script language="javascript" src="/web-files/plugins/rs-plugin/js/jquery.themepunch.revolution.min.js"></script>
<script language="javascript" src="/web-files/plugins/flexslider/jquery.flexslider-min.js"></script>
<script language="javascript" src="/web-files/plugins/fancybox/jquery.fancybox.js"></script>

<script language="javascript" src="/web-files/js/funcoes.js"></script>
<script language="javascript" src="/web-files/js/jQuery-Mask-Plugin.js"></script>
<script language="javascript" src="/web-files/bootstrap/js/bootstrap.js"></script>
<script language="javascript" src="/web-files/pongstagr.am-master/source/pongstagr.am.js"></script>
<script language="javascript" src="/web-files/js/vendor/jquery.magnific-popup.min.js"></script>
<script language="javascript" src="/web-files/js/default.js"></script>
<script language="javascript" src="/web-files/js/joker.js"></script>

<link rel="stylesheet" href="//code.jquery.com/ui/1.11.1/themes/smoothness/jquery-ui.css">
<script src="//code.jquery.com/ui/1.11.1/jquery-ui.js"></script>
<link rel="stylesheet" href="/resources/demos/style.css">


</body>
</html><?php }} ?>
