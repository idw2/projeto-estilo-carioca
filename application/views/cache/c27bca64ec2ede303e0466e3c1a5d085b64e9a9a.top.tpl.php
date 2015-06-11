<?php /*%%SmartyHeaderCode:101153914654d36e50551cd2-52525389%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'c27bca64ec2ede303e0466e3c1a5d085b64e9a9a' => 
    array (
      0 => '/home/maria951/public_html/homolog/application/views/top.tpl',
      1 => 1417459590,
      2 => 'file',
    ),
    '0b07c4222b2a38d9dc09bbf5ff933afa59e6bd20' => 
    array (
      0 => '/home/maria951/public_html/homolog/application/views/navbar.tpl',
      1 => 1421065414,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '101153914654d36e50551cd2-52525389',
  'variables' => 
  array (
    'web_files' => 0,
    'nome_logon' => 0,
    'language' => 0,
    'saudacao' => 0,
    'total_produtos' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.19',
  'unifunc' => 'content_54d36e506bc648_47644589',
  'cache_lifetime' => 120,
),true); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_54d36e506bc648_47644589')) {function content_54d36e506bc648_47644589($_smarty_tpl) {?><div class="navbar navbar-fixed-top" role="navigation">
    <div class="container">
        <a href="#" class="brand-circle"><img src="/web-files/img/brand-circle.png"></a>
        <ul class="nav navbar-nav">
                            <li><a href="/pt/conta/login-cadastro/" id="nav-login">Login e Cadastro</a></li>
                
            
        </ul>
        <ul class="nav navbar-nav navbar-right">
            <li><a href="/pt/informacoes/newsletter">Newsletter</a></li>
                            <li>
                <a id="shopping-cart" href="/pt/produtos/checkout/" class="btn-with-icon fa fa-shopping-cart">
                                            <span class="label label-primary">2</span>
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

        <li  class="active" ><a href="/pt/">Home</a></li>
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
</nav><?php }} ?>
