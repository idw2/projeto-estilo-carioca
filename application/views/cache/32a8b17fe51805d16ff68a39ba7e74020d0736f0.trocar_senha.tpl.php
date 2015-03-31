<?php /*%%SmartyHeaderCode:149084930454199810598424-01695525%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '32a8b17fe51805d16ff68a39ba7e74020d0736f0' => 
    array (
      0 => '/home/maria951/public_html/novo/application/views/trocar_senha.tpl',
      1 => 1410963398,
      2 => 'file',
    ),
    '6a0d8cd5da5366cd163c1096d3e3a62591b34250' => 
    array (
      0 => '/home/maria951/public_html/novo/application/views/header.tpl',
      1 => 1410901382,
      2 => 'file',
    ),
    'dddb63286e4a273b560ff992665e7d4c506e6fdb' => 
    array (
      0 => '/home/maria951/public_html/novo/application/views/navbar.tpl',
      1 => 1410558562,
      2 => 'file',
    ),
    '9c6368fa7ae30d46a3ff6d19316b23707d94dba8' => 
    array (
      0 => '/home/maria951/public_html/novo/application/views/footer.tpl',
      1 => 1410721950,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '149084930454199810598424-01695525',
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
  'unifunc' => 'content_54199810799ef6_80795426',
  'cache_lifetime' => 120,
),true); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_54199810799ef6_80795426')) {function content_54199810799ef6_80795426($_smarty_tpl) {?><!DOCTYPE HTML>
<html lang="pt-br">

    <head>
        <meta charset="UTF-8">
        <title>Maria de Barro | Trocar senha</title>

        <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1"/>
        <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0" />

        <!-- para o sistema Open Graph -->
        <meta property="og:title" content="Maria de Barro" />
        <meta property="og:type" content=”article” />
        <meta property="og:url" content="http://novo.mariadebarro.com.br/" />
        <meta property="" content="http://novo.mariadebarro.com.br/web-files/img/logo.png" />
        <meta property="og:description" content="A Maria de Barro é uma loja online de acessórios feita especialmente para as mulheres." />

        <link rel="icon" type="image/vnd.microsoft.icon" href="/web-files/img/favicon.ico"/>
        <link rel="shortcut icon" type="image/x-icon" href="/web-files/img/favicon.ico"/>

        <link rel="stylesheet" href="/web-files/font-awesome-4.1.0/css/font-awesome.min.css"/>
        <link rel="stylesheet" href="/web-files/bootstrap/css/bootstrap.css"/>
        
        <link rel="stylesheet" href="/web-files/pongstagr.am-master/source/pongstagr.am.css"/>		


        <link rel="stylesheet" href="/web-files/css/joker.css"/>
        
    </head>
    <body style="padding-top: 52px">

        

        <header class="header">
            <div class="navbar navbar-fixed-top" role="navigation">
                <div class="container">
                    <ul class="nav navbar-nav">
                        <li><a href="/pt/produtos/autenticacao/" id="nav-login">Login e Cadastro</a></li>
                        
                    </ul>
                    <ul class="nav navbar-nav navbar-right">
                        <li><a href="/pt/produtos/checkout/">Wishlist</a></li>
                        <li class="dropdown">
                            <a href="#" class="dropdown-toggle" data-toggle="dropdown">Meu Carrinho</a>
                            <ul class="dropdown-menu" role="menu">
                                <li><a href="#">-</a></li>
                            </ul>
                        </li>
                        <li><a href="#">Checkout</a></li>
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
                            <span id="item_carrinho"> 5 Itens                             </span>
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
    <li  class="" ><a href="/pt/categoria/aneis/">Anéis</a></li>            
    <li  class="" ><a href="/pt/categoria/brincos/">Brincos</a></li>           
    <li  class="" ><a href="/pt/categoria/colares/">Colares</a></li>           
    <li  class="" ><a href="/pt/categoria/pulseiras/">Pulseiras</a></li>                       
    <li  class="" ><a href="/pt/categoria/promocoes/">Promoções</a></li>                       

  </ul>
  <form class="navbar-form pull-right search-wrap" role="search">
    <input type="search" class="form-control" placeholder="BUSCAR">
    <button type="submit" class="btn btn-default eu-quero"><span class="fa fa-search"></span></button>
  </form>  
</div>
                    </div>
                </div>
            </nav>
        </header>

        


<div class="container">
    <div class="col-md-6">
    <form class="navbar-form navbar-left" style="width: 100%" action="/pt/produtos/trocar_senha/codigo/f45e361f7d774ab0b4cbcacc2c69d8bd" method="post">

        
            <div class="alert alert-success" role="alert"><strong>Atenção: </strong>Preencher todos os campos!</div>

        
        <h2><span class="label label-default">Trocar senha</span></h2>
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
            <span class="input-group"><a href="/pt/produtos/autenticacao/">» Acessar conta?</a></span>  
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


<div class="bs-docs-featurette x-footer mftoot">
    <div class="container">
        <div class="row">
            <div class="col-sm-3">
                <h3 class="mH3">Maria de Barro</h3>
                <div class="m-footer" id="resume-somos">

                </div>
                <div style="text-align: left; color: #fff">
                    <i class="fa fa-angle-double-right"></i><a href="/pt/informacoes/quem_somos" style=" color: #fff">&nbsp;leia mais...</a><br/>     
                </div>
            </div>
            <div class="col-sm-3">
                <h3 class="mH3">Fale com a Maria</h3>
                <div class="m-footer">
                    <div class="fale-com-maria-vzap"><i></i>+ 55 21 99576.5038</div>
                    <div class="fale-com-maria-vphone"><i></i> + 55 21 3283.5265</div>
                    <div class="fale-com-maria-vmail"><i></i>maria@mariadebarro.com.br</div>

                </div>
            </div>
            <div class="col-sm-3">
                <h3 class="mH3">Minhas compras</h3>
                <div class="m-footer">
                    <a href="/pt/">Minha conta</a><br/>
                    <a href="/pt/">Meus pedidos</a><br/>
                    <a href="/pt/">Lista de desejos</a><br/>
                    <a href="/pt/">VENDA POR ATACADO</a><br/>
                </div>
            </div>
            <div class="col-sm-3"> 
                <h3 class="mH3">Eu Quero!</h3>
                <div class="m-footer">
                    <a href="#">Novos Produtos</a><br/>
                    <a href="/pt/informacoes/promocoes">Promoções</a><br/>
                    <a href="/pt/informacoes/programa_vantagens">Programa de vantagens</a><br/>
                    <a href="/pt/informacoes/programa_fidelidade">Programa de fidelidade</a><br/>
                    <a href="#">Guia de presentes</a><br/>
                </div>
            </div>
        </div>
    </div>
</div>
<div class="bs-docs-featurette x-footer footer-2">
    <div class="container">
        <div class="row">
            <div class="col-sm-4"> 
                <h3 class="mH3">Precisa de Ajuda?</h3>
                <div class="m-footer-2 text-left">
                    <a href="/pt/informacoes/forma_pagamento">Formas de Pagamento</a><br/>
                    <a href="/pt/informacoes/entrega_devolucao">Entrega e devolução</a><br/>
                    <a href="/pt/informacoes/procon_rj">Procon-RJ</a><br/>
                    <a href="/pt/informacoes/perguntas_frequentes">Perguntas Frequentes</a><br/>
                    <a href="/pt/informacoes/cuidados_produtos">Cuidados com o produto</a><br/>
                    <a href="/pt/informacoes/contato">Fale conosco</a><br/>                    
                </div>
            </div>
            <div class="col-sm-4"> 
                <h3 class="mH3">Sobre a Maria</h3>
                <div class="m-footer-2 text-left">
                    <a href="/pt/informacoes/quem_somos">Quem somos</a><br/>
                    <a href="#">Nosso Blog</a><br/>
                    <a href="/pt/informacoes/politica_privacidade">Política de Privacidade</a><br/>
                    <a href="/pt/informacoes/termos_servicos">Termos de serviço</a><br/>
                    <br/>
                </div>
                <div class="row">
                    <div class="col-sm-12" style="text-align: left;">
                        <form class="navbar-form navbar-left" role="search" style="padding-right: 0; padding-left: 0 !important;">
                            <div class="form-group">
                                <span>Receba nossa Newslatter</span>
                                <input type="text" class="form-control" placeholder="SEU E-MAIL" style="width: 70%; background: #e9e9e9; color: #aaaaa6;">
                                <button type="submit" class="btn btn-default eu-quero" style="border: 0; padding: 0">
                                    <img src="/web-files/img/envelope.gif" border="0" alt="newsletter" title="newsletter" width="31px" height="32px" />  
                                </button>
                            </div>
                        </form>                     
                    </div>    
                </div>    
            </div>
            <div class="col-sm-4"> 

            </div>

        </div>
    </div>
</div>
<div class="direitos" style="height: 100px; border-top: #dcdcdc 1px solid; background: #fff;">
    <div class="container">
        <div class="col-sm-6" style="line-height: 6; font-size: 14px;"> 
            Desenvolvido por <strong><a href="http://www.designlab.com.br" target="_blank"><img src="/web-files/img/designlab.png" border="0" alt="" title="" style="position: relative; bottom: 2px;"/></a></strong>
        </div> 
        <div class="col-sm-6 text-right"> 
            <div class="redes-sociais">
                <a target="_blank" href="http://instagram.com/mariadebarro"><i class="instagran fa fa-instagram">&nbsp</i></a>
                <a target="_blank" href="http://instagram.com/mariadebarro"><i class="facebook fa fa-facebook">&nbsp</i></a>
                <a target="_blank" href="#"><i class="twitter fa fa-twitter">&nbsp</i></a>
                <a target="_blank" href="#"><i class="g-plus fa fa-google-plus">&nbsp</i></a>                
            </div>
        </div> 
    </div> 
</div>

<script language="javascript" src="/web-files/js/funcoes.js"></script>
<script language="javascript" src="/web-files/js/jquery-2.1.1.min.js"></script>
<script language="javascript" src="/web-files/js/jQuery-Mask-Plugin.js"></script>
<script language="javascript" src="/web-files/bootstrap/js/bootstrap.js"></script>
<script language="javascript" src="/web-files/pongstagr.am-master/source/pongstagr.am.js"></script>
<script language="javascript" src="/web-files/js/default.js"></script>
<script language="javascript" src="/web-files/js/joker.js"></script>

<script>
    $(document).ready(function () {

        $.ajax({
            type: 'post',
            data: "keys=",
            url: '/web-files/server/get_resume_somos.php',
            success: function (data) {
                $("#resume-somos").html(data);
                console.log(data);
            }
        });
    });

    function add_checkout_list(params, url, loading) {
        $("." + loading).removeClass('hide');
        var qntdd = parseInt($("#quantidade").val());
        var quantidade = "&QUANTIDADE=" + qntdd;
        var valores = params + quantidade;

        $.ajax({
            type: 'post',
            data: valores,
            url: '/web-files/server/add_lista_desejos.php',
            success: function (data) {
                //alert(data);
                //$("#list-drop-desejos").html(data);
                $("." + loading).addClass('hide');
                window.location = url;

                //window.location.reload();
                //$("a[title=Close]").click();
                //$(".myload_crop_" + indice).html("<strong style='color: #395aa4'>" + data + "</strong>");
            }
        });
    }

</script>

</body>
</html><?php }} ?>
