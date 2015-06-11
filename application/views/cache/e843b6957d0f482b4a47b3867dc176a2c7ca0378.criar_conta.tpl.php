<?php /*%%SmartyHeaderCode:39090807545b6e1c3ee8b8-27389958%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'e843b6957d0f482b4a47b3867dc176a2c7ca0378' => 
    array (
      0 => '/home/maria951/public_html/homolog/application/views/criar_conta.tpl',
      1 => 1414786287,
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
      1 => 1415040630,
      2 => 'file',
    ),
    '664eb11e5e87b30f38f0ffe594bbda9642eba0cf' => 
    array (
      0 => '/home/maria951/public_html/homolog/application/views/atendimento_online.tpl',
      1 => 1414499263,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '39090807545b6e1c3ee8b8-27389958',
  'variables' => 
  array (
    'language' => 0,
    'email_base' => 0,
    'erro' => 0,
    'nome' => 0,
    'email' => 0,
    'aniversario' => 0,
    'ddd' => 0,
    'tel' => 0,
    'ramal' => 0,
    'cpf' => 0,
    'lembrete' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.19',
  'unifunc' => 'content_545b6e1c758937_62551886',
  'cache_lifetime' => 120,
),true); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_545b6e1c758937_62551886')) {function content_545b6e1c758937_62551886($_smarty_tpl) {?><!DOCTYPE HTML>
<html lang="pt-br">

    <head>
        <meta charset="UTF-8">
        <title>Maria de Barro | Criar conta</title>

        <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1"/>
        <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0" />

                                                                                        
        <link rel="icon" type="image/vnd.microsoft.icon" href="/homolog/web-files/img/favicon.ico"/>
        <link rel="shortcut icon" type="image/x-icon" href="/homolog/web-files/img/favicon.ico"/>

        <link rel="stylesheet" href="/homolog/web-files/font-awesome-4.1.0/css/font-awesome.min.css"/>
        <link rel="stylesheet" href="/homolog/web-files/plugins/rs-plugin/css/settings.css"/>
        <link rel="stylesheet" href="/homolog/web-files/plugins/flexslider/flexslider.css"/>
        <link rel="stylesheet" href="/homolog/web-files/plugins/fancybox/jquery.fancybox.css"/>
        <link rel="stylesheet" href="/homolog/web-files/pongstagr.am-master/source/pongstagr.am.css"/>		
        <link rel="stylesheet" href="/homolog/web-files/css/plugins/magnific-popup.css"/>		
        
        
        
        <link rel="stylesheet" href="/homolog/web-files/css/joker.css"/>

    </head>
    <body style="padding-top: 52px" class="theme-default">

        <header class="header">
            <div class="navbar navbar-fixed-top" role="navigation">
                <div class="container">
                    <a href="#" class="brand-circle"><img src="/homolog/web-files/img/brand-circle.png"></a>
                    <ul class="nav navbar-nav">
                                                    <li><a href="/homolog/pt/conta/login-cadastro/" id="nav-login">Login e Cadastro</a></li>
                                                
                        
                    </ul>
                    <ul class="nav navbar-nav navbar-right">
                                                <li>
                            <a id="shopping-cart" href="/homolog/pt/produtos/checkout/" class="btn-with-icon fa fa-shopping-cart">
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
                        <a href="/homolog/pt/" class="brand"><img src="/homolog/web-files/img/logo.png" alt="Maria de Barro" border="0" title="" class="img-responsive"/></a>
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

        <li  class="" ><a href="/homolog/pt/">Home</a></li>
        <li  class="" ><a href="/homolog/pt/aneis/">Anéis</a></li>            
        <li  class="" ><a href="/homolog/pt/brincos/">Brincos</a></li>           
        <li  class="" ><a href="/homolog/pt/colares/">Colares</a></li>           
        <li  class="" ><a href="/homolog/pt/pulseiras/">Pulseiras</a></li>                       
        <li  class="" ><a href="/homolog/pt/conjuntos/">Conjuntos</a></li>                       
        <li  class="" ><a href="/homolog/pt/promocoes/">Promoções</a></li>                       

    </ul>
    <div style="position: relative">
        <form class="navbar-form pull-right search-wrap" role="search" action="/homolog/pt/novos-produtos" method="post">
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


<div class="container">
    <br/>   
    
    <div class="row">       
        <div class="col-lg-12">    
            <div class="panel panel-default">    
                <table class="table" style="font-size: 14px">
                    <thead>
                        <tr>
                            <th>Criar uma conta</th>
                        </tr>
                    </thead>
                    </body>

                    <tr>
                        <td>
                            <form class="navbar-form navbar-left" role="search" action="/homolog/pt/conta/criar_conta/email/" method="post">

                                                                    <div class="alert alert-success" role="alert"><strong>Atenção: </strong>Preencher todos os campos!</div>
                                                                <br/>
                                <h4>Dados pessoais</h4>
                                <p><input type="text" class="form-control" style="min-width: 100%" id="nome" name="nome" maxlength="40" value="" placeholder="Nome completo"/></p>
                                <p>
                                    <input type="hidden" class="form-control" style="min-width: 47%" id="email" name="email" maxlength="70" value="" placeholder="E-mail" readonly/>
                                </p>
                                <h4>E-mail: </h4>
                                <h4>Data de nascimento</h4>
                                <p><select name='dia' class='form-control'><optgroup label='Dia'><option value='01'>01</option><option value='02'>02</option><option value='03'>03</option><option value='04'>04</option><option value='05'>05</option><option value='06'>06</option><option value='07'>07</option><option value='08'>08</option><option value='09'>09</option><option value='10'>10</option><option value='11'>11</option><option value='12'>12</option><option value='13'>13</option><option value='14'>14</option><option value='15'>15</option><option value='16'>16</option><option value='17'>17</option><option value='18'>18</option><option value='19'>19</option><option value='20'>20</option><option value='21'>21</option><option value='22'>22</option><option value='23'>23</option><option value='24'>24</option><option value='25'>25</option><option value='26'>26</option><option value='27'>27</option><option value='28'>28</option><option value='29'>29</option><option value='30'>30</option><option value='31'>31</option></optgroup></select>&nbsp;<select name='mes' class='form-control'><optgroup label='Mês'><option value='01'>01</option><option value='02'>02</option><option value='03'>03</option><option value='04'>04</option><option value='05'>05</option><option value='06'>06</option><option value='07'>07</option><option value='08'>08</option><option value='09'>09</option><option value='10'>10</option><option value='11'>11</option><option value='12'>12</option></optgroup></select>&nbsp;<select name='ano' class='form-control'><optgroup label='Ano'><option value='2000'>2000</option><option value='1999'>1999</option><option value='1998'>1998</option><option value='1997'>1997</option><option value='1996'>1996</option><option value='1995'>1995</option><option value='1994'>1994</option><option value='1993'>1993</option><option value='1992'>1992</option><option value='1991'>1991</option><option value='1990'>1990</option><option value='1989'>1989</option><option value='1988'>1988</option><option value='1987'>1987</option><option value='1986'>1986</option><option value='1985'>1985</option><option value='1984'>1984</option><option value='1983'>1983</option><option value='1982'>1982</option><option value='1981'>1981</option><option value='1980'>1980</option><option value='1979'>1979</option><option value='1978'>1978</option><option value='1977'>1977</option><option value='1976'>1976</option><option value='1975'>1975</option><option value='1974'>1974</option><option value='1973'>1973</option><option value='1972'>1972</option><option value='1971'>1971</option><option value='1970'>1970</option><option value='1969'>1969</option><option value='1968'>1968</option><option value='1967'>1967</option><option value='1966'>1966</option><option value='1965'>1965</option><option value='1964'>1964</option><option value='1963'>1963</option><option value='1962'>1962</option><option value='1961'>1961</option><option value='1960'>1960</option><option value='1959'>1959</option><option value='1958'>1958</option><option value='1957'>1957</option><option value='1956'>1956</option><option value='1955'>1955</option><option value='1954'>1954</option><option value='1953'>1953</option><option value='1952'>1952</option><option value='1951'>1951</option><option value='1950'>1950</option><option value='1949'>1949</option><option value='1948'>1948</option><option value='1947'>1947</option><option value='1946'>1946</option><option value='1945'>1945</option><option value='1944'>1944</option><option value='1943'>1943</option><option value='1942'>1942</option><option value='1941'>1941</option><option value='1940'>1940</option><option value='1939'>1939</option><option value='1938'>1938</option><option value='1937'>1937</option><option value='1936'>1936</option><option value='1935'>1935</option><option value='1934'>1934</option><option value='1933'>1933</option><option value='1932'>1932</option><option value='1931'>1931</option><option value='1930'>1930</option><option value='1929'>1929</option><option value='1928'>1928</option><option value='1927'>1927</option><option value='1926'>1926</option><option value='1925'>1925</option><option value='1924'>1924</option><option value='1923'>1923</option><option value='1922'>1922</option><option value='1921'>1921</option><option value='1920'>1920</option><option value='1919'>1919</option><option value='1918'>1918</option><option value='1917'>1917</option><option value='1916'>1916</option><option value='1915'>1915</option><option value='1914'>1914</option><option value='1913'>1913</option><option value='1912'>1912</option><option value='1911'>1911</option><option value='1910'>1910</option><option value='1909'>1909</option><option value='1908'>1908</option><option value='1907'>1907</option><option value='1906'>1906</option><option value='1905'>1905</option><option value='1904'>1904</option><option value='1903'>1903</option><option value='1902'>1902</option><option value='1901'>1901</option><option value='1900'>1900</option></optgroup></select></p>
                                <h4>Sexo</h4>
                                <p> 
                                    <select name="sexo" class="form-control">
                                        <option value="M">Masculino</option>
                                        <option value="F">Feminino</option>
                                    </select>
                                </p>
                                <p>
                                <h4>Telefone ou celular</h4>
                                <input type="text" class="form-control" style="max-width: 15%" id="ddd" name="ddd" maxlength="4" value="" placeholder="DDD" onkeypress="return formataNumDV(event, this, 2);"/>
                                <input type="text" class="form-control" style="max-width: 30%" id="tel" name="tel" maxlength="10" value="" placeholder="Telefone" onkeypress="return formataNumDV(event, this, 9);"/>
                                <input type="text" class="form-control" style="max-width: 30%" id="ramal" name="ramal" maxlength="8" value="" placeholder="Ramal" onkeypress="return formataNumDV(event, this, 4);"/>
                                </p>
                                <h4 style="position: relative">CPF 
                                    <span class="CPF-Ask hide">O cadastro do CPF é obrigatório para o envio da Nota Fiscal</span>
                                    <i class="fa fa-question-circle" style="cursor: pointer" onmouseover="showAsk()" onmouseout="hideAsk()"></i>
                                   
                                </h4>
                                <style>
                                    .CPF-Ask{
                                        border: 1px solid #ccc;
                                        display: inline-block;
                                        padding: 20px;
                                        border-radius: 34px;
                                        color: #fff;
                                        background: #df5d65;
                                        position: absolute;
                                        top: -21px;
                                        left: 66px;
                                        z-index: 10000;
                                    }
                                    .fa.fa-question-circle{
                                        color: #df5d65;
                                    }
                                </style>
                                <script>
                                    function showAsk(){
                                        $(".CPF-Ask").removeClass("hide");
                                    }
                                    function hideAsk(){
                                        $(".CPF-Ask").addClass("hide");
                                    }
                                </script>
                                <p><input type="text" class="form-control" style="max-width: 47%" id="cpf" name="cpf" onkeypress="return formataCPF(event, this);" value="" placeholder="CPF"/></p>
                                <h4>Sua senha</h4>
                                <p><input type="password" class="form-control" style="max-width: 47%" id="passwd" name="passwd" maxlength="50" value="" placeholder="Senha"/></p>
                                <p><input type="password" class="form-control" style="max-width: 47%" id="passwd2" name="passwd2" maxlength="50" value=""  placeholder="Repetir senha"/></p>
                                <h4>Lembrete de segurança</h4>
                                <p><input type="text" class="form-control" style="min-width: 100%" id="lembrete" name="lembrete" maxlength="30" value="" placeholder="Lembrete de senha"/></p>
                                <p><button type="submit" class="btn btn-primary" name="enviar">ENVIAR</button></p>

                            </form>
                        </td>
                    </tr>
                    </tbody>
                </table>
            </div>
        </div>

    </div>
    
</div>
<div style="clear: both;"></div>

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
                        <li><a href="/homolog/pt/informacoes/quem-somos">Quem somos</a></li>
                        
                        <li><a href="/homolog/pt/informacoes/politica-privacidade">Política de privacidade</a></li>
                        <li><a href="/homolog/pt/informacoes/entrega-devolucao">Política de entrega</a></li>
                        <li><a href="/homolog/pt/informacoes/procon-rj">Procon/RJ</a></li>
                    </ul>
                </div>
                <div class="col-sm-3 footer-group">
                    <h2 class="footer-title">Dúvidas</h2>
                    <ul class="footer-lista">
                        <li><a href="/homolog/pt/informacoes/contato">Atendimento</a></li>
                        <li><a href="/homolog/pt/informacoes/trocas-e-devolucoes">Trocas e devoluções</a></li>
                        
                        <li><a href="/homolog/pt/informacoes/termos-servicos">Termos de serviço</a></li>
                        <li><a href="/homolog/pt/informacoes/perguntas-frequentes">Perguntas frequentes</a></li>
                        <li><a href="/homolog/pt/informacoes/cuidados-produtos">Cuidados com os produtos</a></li>
                        
                    </ul>
                </div>
                <div class="col-sm-3 footer-group">
                    <h2 class="footer-title">Eu quero!</h2>
                    <ul class="footer-lista">
                        <li><a href="/homolog/pt/novos-produtos/">Novos produtos</a></li>
                        <li><a href="/homolog/pt/informacoes/promocoes">Promoções</a></li>
                        <li><a href="/homolog/pt/informacoes/programa-vantagens">Programa de vantagens</a></li>
                        <li><a href="/homolog/pt/informacoes/programa-fidelidade">Programa de fidelidade</a></li>
                        
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
                        <img src="/homolog/web-files/img/assets/band_visa.png">
                        <img src="/homolog/web-files/img/assets/band_master.png">
                        <img src="/homolog/web-files/img/assets/band_american.png">
                        <img src="/homolog/web-files/img/assets/band_diners.png">
                        <img src="/homolog/web-files/img/assets/band_elo.png">
                        <img src="/homolog/web-files/img/assets/band_boleto.png">
                    </p>
                </div>
                <div class="col-sm-5 footer-group">
                    <h2 class="footer-title">Certificados</h2>
                    <p>
                        <img src="/homolog/web-files/img/assets/band_ebit.png">
                        <img src="/homolog/web-files/img/assets/siteblindado.gif">
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
                    <p class="copyright">Desenvolvido por <a href="http://designlab.com.br/ " target="_blank"><img src="/homolog/web-files/img/assets/dl.png" width="90" class="dl"></a></p>
                </div>
            </div>
        </div>
    </div>
</footer>

<script language="javascript" src="/homolog/web-files/js/jquery-1.11.1.min.js"></script>

<script src="//code.jquery.com/ui/1.11.1/jquery-ui.js"></script>

<script language="javascript" src="/homolog/web-files/js/vendor/jquery.easing.1.3.js"></script>


<script language="javascript" src="/homolog/web-files/plugins/rs-plugin/js/jquery.themepunch.plugins.min.js"></script>
<script language="javascript" src="/homolog/web-files/plugins/rs-plugin/js/jquery.themepunch.revolution.min.js"></script>
<script language="javascript" src="/homolog/web-files/plugins/flexslider/jquery.flexslider-min.js"></script>
<script language="javascript" src="/homolog/web-files/plugins/fancybox/jquery.fancybox.js"></script>

<script language="javascript" src="/homolog/web-files/js/funcoes.js"></script>
<script language="javascript" src="/homolog/web-files/js/jQuery-Mask-Plugin.js"></script>
<script language="javascript" src="/homolog/web-files/bootstrap/js/bootstrap.js"></script>
<script language="javascript" src="/homolog/web-files/js/vendor/jquery.payment.js"></script>
<script language="javascript" src="/homolog/web-files/js/vendor/jquery.mask.min.js"></script>
<script language="javascript" src="/homolog/web-files/pongstagr.am-master/source/pongstagr.am.js"></script>
<script language="javascript" src="/homolog/web-files/js/vendor/jquery.magnific-popup.min.js"></script>
<script language="javascript" src="/homolog/web-files/js/joker.js"></script>
<script language="javascript" src="/homolog/web-files/js/default.js"></script>




<script> var link  = window.location.href; if( link.indexOf('https://') ){ window.location='https://www.mariadebarro.com.br/homolog/';} </script>

</body>
</html>
<?php }} ?>
