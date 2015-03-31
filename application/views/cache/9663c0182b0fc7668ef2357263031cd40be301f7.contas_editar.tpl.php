<?php /*%%SmartyHeaderCode:119357198455032e07af8bc8-54966356%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '9663c0182b0fc7668ef2357263031cd40be301f7' => 
    array (
      0 => '/home/estil450/public_html/application/views/admin/contas_editar.tpl',
      1 => 1425487045,
      2 => 'file',
    ),
    'ac2c18a5081edc217b9c4be02e595167eff25d93' => 
    array (
      0 => '/home/estil450/public_html/application/views/admin/header.tpl',
      1 => 1425578453,
      2 => 'file',
    ),
    '7eb677adcd7c0d82e647c09ecee716de8729db60' => 
    array (
      0 => '/home/estil450/public_html/application/views/admin/navbar.tpl',
      1 => 1425487032,
      2 => 'file',
    ),
    '96a8ddce0d67da5c866b6fbb6bc0382bff5ef8e7' => 
    array (
      0 => '/home/estil450/public_html/application/views/admin/logo.tpl',
      1 => 1425487015,
      2 => 'file',
    ),
    '242494dac312b69fc8a81bf2c4c5a4ede5022fff' => 
    array (
      0 => '/home/estil450/public_html/application/views/admin/btn_voltar.tpl',
      1 => 1425487027,
      2 => 'file',
    ),
    'd6fe851a73ae76aa30af1d73a4ad29e2ad509c14' => 
    array (
      0 => '/home/estil450/public_html/application/views/admin/btn_enviar.tpl',
      1 => 1425503196,
      2 => 'file',
    ),
    '5d845aeca603183216c663abda55568885594a7e' => 
    array (
      0 => '/home/estil450/public_html/application/views/admin/footer.tpl',
      1 => 1425578459,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '119357198455032e07af8bc8-54966356',
  'variables' => 
  array (
    'language' => 0,
    'success' => 0,
    'erro' => 0,
    'nome' => 0,
    'email' => 0,
    'aniversario' => 0,
    'sexo' => 0,
    'checked1' => 0,
    'checked2' => 0,
    'ddd' => 0,
    'tel' => 0,
    'ramal' => 0,
    'cpf' => 0,
    'updatePassword' => 0,
    'lembrete' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.19',
  'unifunc' => 'content_55032e07e5ec69_47795746',
  'cache_lifetime' => 120,
),true); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_55032e07e5ec69_47795746')) {function content_55032e07e5ec69_47795746($_smarty_tpl) {?><!DOCTYPE HTML>
<html lang="pt-br">

    <head>
        <meta charset="UTF-8">
        <title>Estilo Carioca | Meus dados</title>

        <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1"/>
        <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0" />

        <link rel="shortcut icon" href="http://www.estilocarioca.com.br/application/template/estilocarioca/assets/img/favicon.png?v=5">
        <link rel="shortcut icon" type="image/x-icon" href="http://www.estilocarioca.com.br/application/template/estilocarioca/assets/img/favicon.png?v=5"/>

        <link rel="stylesheet" href="/web-files/font-awesome-4.1.0/css/font-awesome.min.css"/>
        <link rel="stylesheet" href="/web-files/bootstrap/css/bootstrap.css"/>
        <link rel="stylesheet" href="/web-files/bootstrap/css/bootstrap-theme.css"/>		
        <link rel="stylesheet" href="/web-files/css/docs.min.css"/>
        <link rel="stylesheet" href="/web-files/css/style.css"/>

        <script language="javascript" src="/web-files/js/funcoes.js"></script>
        <script language="javascript" src="/web-files/js/jquery-2.1.1.min.js"></script>
        <script language="javascript" src="/web-files/js/jQuery-Mask-Plugin.js"></script>
        <script language="javascript" src="/web-files/bootstrap/js/bootstrap.js"></script>
        <script language="javascript" src="/web-files/bootstrap/js/bootstrap-tooltip.js"></script>
        <!-- Add fancyBox -->
        <link rel="stylesheet" href="/web-files/fancyapps-fancyBox-18d1712/source/jquery.fancybox.css?v=2.1.5" type="text/css" media="screen" />
        <script type="text/javascript" src="/web-files/fancyapps-fancyBox-18d1712/source/jquery.fancybox.pack.js?v=2.1.5"></script>
        <!-- Upload -->
        <script type="text/javascript" src="/web-files/js/jquery.uploadfile.js"></script>
        <link rel="stylesheet" href="/web-files/css/uploadfile.css" type="text/css" media="screen" />
        <!-- JQuery UI -->
        <script type="text/javascript" src="/web-files/jquery-ui-1.11.1.custom/jquery-ui.js"></script>
        <link rel="stylesheet" href="/web-files/jquery-ui-1.11.1.custom/jquery-ui.css"/>
        <link rel="stylesheet" href="/web-files/jquery-ui-1.11.1.custom/jquery-ui.structure.css"/>
        <link rel="stylesheet" href="/web-files/jquery-ui-1.11.1.custom/jquery-ui.theme.css"/>
        <!-- Drag -->
        <script type="text/javascript" src="/web-files/js/jquery-sortable.js"></script>
        <!-- PLUGIN CROP -->
        <link rel="stylesheet" href="/web-files/crop/cropper.css" type="text/css" media="screen" />
        <script type="text/javascript" src="/web-files/crop/cropper.js"></script>
        <script type="text/javascript" src="/web-files/js/highlight.min.js"></script>
        <script type="text/javascript" src="/web-files/js/jquery.tablednd.0.7.js"></script>
        <script type="text/javascript" src="/web-files/js/default.js"></script>

        <!-- //COLOR PICKER BOOTSTRAP// -->
        <link href="/web-files/bootstrap-colorpicker-master/dist/css/bootstrap-colorpicker.min.css" rel="stylesheet">
        <link href="/web-files/bootstrap-colorpicker-master/src/css/docs.css" rel="stylesheet">
        
                    <!-- //CSS DO TEMA RESPONSIVO EM BOOTSTRAP -->
            <link href="/web-files/startbootstrap-sb-admin-1.0.2/css/sb-admin.css" rel="stylesheet">
            <link href="/web-files/startbootstrap-sb-admin-1.0.2/css/plugins/morris.css" rel="stylesheet">
        

        <script type="text/javascript">
            if (window.hljs) {
                hljs.tabReplace = '    ';
                hljs.initHighlightingOnLoad();
            }
        </script>

        <style>
            
            .ico-default-trophy, .ico-default-dolar, .ico-default-heart, .ico-default-star, .ico-default-eye, .ico-default-trash, .ico-default-photo, .ico-default-edit{
                display: inline-block;
                width: 32px;
                height: 29px;
                border-radius: 50%;
                background: #e9c92e;
                cursor: pointer;
                color: #fff;
                text-align:  center;
                font-size: 14px;
                line-height: 26px;
                padding: 0 0 0 1px;

            }

            .ico-default-trash{  background: #58595A; }

            .ico-default-heart{ background: #EC8ED6; color: #fff;  border: none; }            
            .ico-default-heart i{ color: #fff; }            
            .ico-default-heart.desative{ background: #fff; border: 1px solid #57574b; }
            .ico-default-heart.desative i{ color: #57574b; }

            .ico-default-eye{ background: #e9c92e; color: #fff;  border: none; }            
            .ico-default-eye i{ color: #fff; }            
            .ico-default-eye.desative{ background: #fff; border: 1px solid #57574b; }
            .ico-default-eye.desative i{ color: #57574b; }

            .ico-default-dolar{ background: #81B4D1; color: #fff;  border: none; }            
            .ico-default-dolar i{ color: #fff; }            
            .ico-default-dolar.desative{ background: #fff; border: 1px solid #57574b; }
            .ico-default-dolar.desative i{ color: #57574b; }

            .ico-default-trophy{ background: #D1819B; color: #fff;  border: none; }            
            .ico-default-trophy i{ color: #fff; }            
            .ico-default-trophy.desative{ background: #fff; border: 1px solid #57574b; }
            .ico-default-trophy.desative i{ color: #57574b; }

            .ico-default-photo{
                background: #395aa4;                
            }

            .ico-default-edit{
                background: #18CAEC;
            }

            .ico-default-star{ background: #2ac364; color: #fff;  border: none; }            
            .ico-default-star i{ color: #fff; }            
            .ico-default-star.desative{ background: #fff; border: 1px solid #57574b; }
            .ico-default-star.desative i{ color: #57574b; }

            .ico-default-eye a, .ico-default-trash a, .ico-default-photo a, .ico-default-edit a{ 
                color: #fff;
                text-decoration: none;
            } 

            .ico-default-star a:hover, .ico-default-eye a:hover, .ico-default-trash a:hover, .ico-default-photo a:hover{ 
                text-decoration: none;
            } 

            .ico-default-trash.desative, .ico-default-photo.desative{
                background: #ad2138;
            }


            .aviso-balao{
                display: inline-block;
                padding: 3px 10px;
                position: absolute;
                bottom: 11px;
                right: 13px;
            }
            .hidex{
                max-height: 0;
                overflow: hidden;
                box-shadow: none;
                opacity: 0;
                margin-bottom: 0;
            }
            

        </style>

    </head>
    <body>
        <div id="wrapper">
            <div id="page-wrapper">
                <div class="container-fluid">



<div class="sidebar">
    <!-- Navigation -->
<nav class="navbar navbar-inverse navbar-fixed-top" role="navigation">
    <!-- Brand and toggle get grouped for better mobile display -->
    <div class="navbar-header">
        <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-ex1-collapse">
            <span class="sr-only">Toggle navigation</span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
        </button>
        <a class="navbar-brand" href="/en/admin/welcome">rodrigo@estilocarioca.com.br</a>
    </div>
    <!-- Top Menu Items -->
    <ul class="nav navbar-right top-nav">
        <li class="dropdown">
            <a href="#" class="dropdown-toggle" data-toggle="dropdown"><i class="fa fa-user"></i> Estilo Carioca <b class="caret"></b></a>
            <ul class="dropdown-menu">
                
                <li>
                    <a href="/en/admin/alterar-senha"><i class="fa fa-fw fa-gear"></i> Alterar senha</a>
                </li>
                <li class="divider"></li>
                <li>
                    <a href="/en/admin/logout"><i class="fa fa-fw fa-power-off"></i> Sair</a>
                </li>
            </ul>
        </li>
    </ul>
    <!-- Sidebar Menu Items - These collapse to the responsive navigation menu on small screens -->
    <div class="collapse navbar-collapse navbar-ex1-collapse">
        <ul class="nav navbar-nav side-nav">


            <li  class="" >
                <a href="/en/admin/dashboard"><i class="fa fa-fw fa-dashboard"></i> Dashboard</a>
            </li>
            <li ><a href="/en/produtos/produtos-lista">
                    <i class="fa fa-paper-plane"></i> Produtos</a>
            </li> 
            <li >
                <a href="/en/pedidos/pedidos-lista"><i class="fa fa-file-text"></i> Pedidos</a>
            </li>
            <li >
                <a href="/en/conta/lista"><i class="fa fa-users"></i> Clientes</a>
            </li>
            <li >
                <a href="/en/produtos/estoque"><i class="fa fa-bars"></i> Estoque</a></li> 
            <li >
                <a href="/en/produtos/estoque-baixo" style="position: relative;"><i class="fa fa-sort-alpha-asc"></i> Estoque Baixo  <span class="btn btn-sm btn-danger aviso-balao">35</span> </a>
            </li>
            <li >
                <a href="/en/produtos/avise-me" style="position: relative;"><i class="fa fa-bell"></i> Avise-me  <span class="btn btn-sm btn-danger aviso-balao">1</span> </a>
            </li>  
            
            <li  class="" >
                <a href="/en/informacoes/newsletter-lista"><i class="fa fa-paper-plane"></i> Newsletter</a>
            </li>
            <li >
                <a href="/en/conta/aniversariantes" style="position: relative;"><i class="fa fa-users"></i> Aniversariantes </a>
            </li>
            <li >
                <a href="/en/pedidos/exportar"><i class="fa fa-expand"></i> Exportar Pedidos</a>
            </li>
            
            <li >
                <a href="/en/nota-fiscal/exportar" style="position: relative;"><i class="fa fa-expand"></i> Exportar Nota Fiscal <span class="btn btn-sm btn-danger aviso-balao">10</span> </a>
            </li>
            
        </ul>
    </div>
    <!-- /.navbar-collapse -->
</nav>
</div>

<div class="row">
    <div class="col-md-12">
        <div class="pull-left">
            <a href="/en/admin/welcome"><img class="area-restrita img-responsive" src="/web-files/img/logo.png" alt="" border="0" title="" /></a>
        </div>
    </div>
</div>

<!-- Page Heading -->
<div class="row">
    <div class="col-lg-12">
        <h1 class="page-header">
            Editar Clientes
        </h1>
        <ol class="breadcrumb">
            <li>
                <i class="fa fa-home"></i>  <a href="/en/admin/welcome">Home</a>
            </li>
            <li class="active">
                <i class="fa fa-child"></i>  Editar Clientes
            </li>
        </ol>
    </div>
</div> 

<div class="row">
    <div class="col-md-12">

        <div class="row">
            <br/>
            <div class="col-md-12 text-right">
                                <a href="/en/conta/lista" data-toggle="tooltip"  title="Voltar" style="color:#d9534f; font-size: 30px;"><i class="fa fa-reply">&nbsp</i></a>                
            </div>
        </div>

    </div>
</div>

            <div class="alert alert-info alert-dismissable" role="alert"><strong>Atenção: </strong>Preencher todos os campos!</div>
     



<div class="row">
    <div class="col-lg-12">
        <div class="panel panel-default">
            <div class="panel-body">
                <form class="navbar-form navbar-left" method="post">




                    <br/>
                    <h4>Dados pessoais</h4>
                    <p><input type="text" class="form-control" style="min-width: 100%" id="nome" name="nome" maxlength="40" value="Cassio Lemos" placeholder="Nome completo"/></p>
                    <p>
                        <label>cassio@designlab.com.br</label>
                        <input type="hidden" class="form-control" style="min-width: 47%" id="email" name="email" maxlength="70" value="cassio@designlab.com.br" placeholder="E-mail" readonly/>
                    </p>
                    <h4>Data de nascimento</h4>
                    <p><select name='dia' class='form-control'><optgroup label='Dia'><option value='01'>01</option><option value='02'>02</option><option value='03'>03</option><option value='04'>04</option><option value='05'>05</option><option value='06'>06</option><option value='07'>07</option><option value='08'>08</option><option value='09'>09</option><option value='10'>10</option><option value='11'>11</option><option value='12'>12</option><option value='13' selected>13</option><option value='14'>14</option><option value='15'>15</option><option value='16'>16</option><option value='17'>17</option><option value='18'>18</option><option value='19'>19</option><option value='20'>20</option><option value='21'>21</option><option value='22'>22</option><option value='23'>23</option><option value='24'>24</option><option value='25'>25</option><option value='26'>26</option><option value='27'>27</option><option value='28'>28</option><option value='29'>29</option><option value='30'>30</option><option value='31'>31</option></optgroup></select>&nbsp;<select name='mes' class='form-control'><optgroup label='Mês'><option value='01'>01</option><option value='02'>02</option><option value='03' selected>03</option><option value='04'>04</option><option value='05'>05</option><option value='06'>06</option><option value='07'>07</option><option value='08'>08</option><option value='09'>09</option><option value='10'>10</option><option value='11'>11</option><option value='12'>12</option></optgroup></select>&nbsp;<select name='ano' class='form-control'><optgroup label='Ano'><option value='2001'>2001</option><option value='2000'>2000</option><option value='1999'>1999</option><option value='1998'>1998</option><option value='1997'>1997</option><option value='1996'>1996</option><option value='1995'>1995</option><option value='1994'>1994</option><option value='1993'>1993</option><option value='1992'>1992</option><option value='1991'>1991</option><option value='1990' selected>1990</option><option value='1989'>1989</option><option value='1988'>1988</option><option value='1987'>1987</option><option value='1986'>1986</option><option value='1985'>1985</option><option value='1984'>1984</option><option value='1983'>1983</option><option value='1982'>1982</option><option value='1981'>1981</option><option value='1980'>1980</option><option value='1979'>1979</option><option value='1978'>1978</option><option value='1977'>1977</option><option value='1976'>1976</option><option value='1975'>1975</option><option value='1974'>1974</option><option value='1973'>1973</option><option value='1972'>1972</option><option value='1971'>1971</option><option value='1970'>1970</option><option value='1969'>1969</option><option value='1968'>1968</option><option value='1967'>1967</option><option value='1966'>1966</option><option value='1965'>1965</option><option value='1964'>1964</option><option value='1963'>1963</option><option value='1962'>1962</option><option value='1961'>1961</option><option value='1960'>1960</option><option value='1959'>1959</option><option value='1958'>1958</option><option value='1957'>1957</option><option value='1956'>1956</option><option value='1955'>1955</option><option value='1954'>1954</option><option value='1953'>1953</option><option value='1952'>1952</option><option value='1951'>1951</option><option value='1950'>1950</option><option value='1949'>1949</option><option value='1948'>1948</option><option value='1947'>1947</option><option value='1946'>1946</option><option value='1945'>1945</option><option value='1944'>1944</option><option value='1943'>1943</option><option value='1942'>1942</option><option value='1941'>1941</option><option value='1940'>1940</option><option value='1939'>1939</option><option value='1938'>1938</option><option value='1937'>1937</option><option value='1936'>1936</option><option value='1935'>1935</option><option value='1934'>1934</option><option value='1933'>1933</option><option value='1932'>1932</option><option value='1931'>1931</option><option value='1930'>1930</option><option value='1929'>1929</option><option value='1928'>1928</option><option value='1927'>1927</option><option value='1926'>1926</option><option value='1925'>1925</option><option value='1924'>1924</option><option value='1923'>1923</option><option value='1922'>1922</option><option value='1921'>1921</option><option value='1920'>1920</option><option value='1919'>1919</option><option value='1918'>1918</option><option value='1917'>1917</option><option value='1916'>1916</option><option value='1915'>1915</option><option value='1914'>1914</option><option value='1913'>1913</option><option value='1912'>1912</option><option value='1911'>1911</option><option value='1910'>1910</option><option value='1909'>1909</option><option value='1908'>1908</option><option value='1907'>1907</option><option value='1906'>1906</option><option value='1905'>1905</option><option value='1904'>1904</option><option value='1903'>1903</option><option value='1902'>1902</option><option value='1901'>1901</option><option value='1900'>1900</option></optgroup></select></p>

                                                                    

                    <h4>Sexo</h4>
                    <p> 
                        <select name="sexo" class="form-control">
                            <option value="M" selected>Masculino</option>
                            <option value="F" >Feminino</option>
                        </select>
                    </p>
                    <p>
                    <h4>Telefone ou celular</h4>
                    <input type="text" class="form-control" style="max-width: 15%" id="ddd" name="ddd" maxlength="4" value="21" placeholder="DDD" onkeypress="return formataNumDV(event, this, 2);"/>
                    <input type="text" class="form-control" style="max-width: 30%" id="tel" name="tel" maxlength="10" value="981977595" placeholder="Telefone" onkeypress="return formataNumDV(event, this, 9);"/>
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
                        function showAsk() {
                            $(".CPF-Ask").removeClass("hide");
                        }
                        function hideAsk() {
                            $(".CPF-Ask").addClass("hide");
                        }
                    </script>
                    <p> 
                        
                        <input type="text" class="form-control" style="min-width: 47%" id="cpf" name="cpf" maxlength="70" value="139.912.497-82" placeholder="CPF"/>
                    </p>

                    <h4><input type="checkbox" name="updatePassword" id="updatePassword"  /> Desejo atualizar a minha senha.</h4>
                    <div class="updatePassword  hide ">
                        <h4>Sua senha</h4>
                        <p><input type="password" class="form-control" style="max-width: 47%" id="passwd" name="passwd" maxlength="50" value="" placeholder="Senha"/></p>
                        <p><input type="password" class="form-control" style="max-width: 47%" id="passwd2" name="passwd2" maxlength="50" value=""  placeholder="Repetir senha"/></p>
                        <h4>Lembrete de segurança</h4>
                        <p><input type="text" class="form-control" style="min-width: 100%" id="lembrete" name="lembrete" maxlength="30" value="Quem desenvolveu o site ?" placeholder="Lembrete de senha"/></p>
                    </div>
                    <p><button type="submit" class="btn btn-primary btn-lg" role="button">Enviar</button></p>
                </form>
            </div>
        </div>
    </div>
</div>


<script>

    window.onload = teste;
    function teste() {
        $(document).ready(function() {
            $("#updatePassword").click(function() {
                if ($("#updatePassword").is(':checked')) {
                    $(".updatePassword").removeClass("hide");
                } else {
                    $(".updatePassword").addClass("hide");
                }
            });
        });
    }


</script>

</div>
<!-- /.container-fluid -->
</div>
<!-- /#page-wrapper -->
</div>
<!-- /#wrapper -->

<script>
    $(function() {
        $("[data-toggle='tooltip']").tooltip();
    });
    
</script>

<!-- //COLOR PICKER BOOTSTRAP// -->

<script src="/web-files/bootstrap-colorpicker-master/dist/js/bootstrap-colorpicker.js"></script>
<script src="/web-files/bootstrap-colorpicker-master/src/js/docs.js"></script>

<!-- //JS DO TEMA RESPONSIVO EM BOOTSTRAP// -->
<script src="/web-files/startbootstrap-sb-admin-1.0.2/js/plugins/morris/raphael.min.js"></script>
<script src="/web-files/startbootstrap-sb-admin-1.0.2/js/plugins/morris/morris.min.js"></script>
<script src="/web-files/startbootstrap-sb-admin-1.0.2/js/plugins/morris/morris-data.js"></script>



</body>
</html><?php }} ?>
