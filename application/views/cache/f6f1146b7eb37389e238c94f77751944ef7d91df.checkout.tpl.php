<?php /*%%SmartyHeaderCode:16798008745508a32f574392-33283854%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'f6f1146b7eb37389e238c94f77751944ef7d91df' => 
    array (
      0 => '/home/estil450/public_html/application/views/checkout.tpl',
      1 => 1425673073,
      2 => 'file',
    ),
    '9915484c49efae1e853c1be7aa9d8b2c159a82c4' => 
    array (
      0 => '/home/estil450/public_html/application/views/header.tpl',
      1 => 1425767056,
      2 => 'file',
    ),
    '21ad6c09fd0cb3d807b70a3f24dfe7c8b337e8c6' => 
    array (
      0 => '/home/estil450/public_html/application/views/top.tpl',
      1 => 1426628688,
      2 => 'file',
    ),
    '176fac5985d5dc4b43edea6c0618ca1f6996d998' => 
    array (
      0 => '/home/estil450/public_html/application/views/footer.tpl',
      1 => 1426115679,
      2 => 'file',
    ),
    'e42802b9f9225092d26556a5ec1f3ebf37f60366' => 
    array (
      0 => '/home/estil450/public_html/application/views/atendimento_online.tpl',
      1 => 1417455048,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '16798008745508a32f574392-33283854',
  'variables' => 
  array (
    'nenhum_produto' => 0,
    'ld' => 0,
    'language' => 0,
    'lista_desejo' => 0,
    'url_checkout' => 0,
    'imposto' => 0,
    'web_files' => 0,
    'embalar_presente' => 0,
    'codproduto' => 0,
    'codcadastro' => 0,
    'total_peso' => 0,
    'cep_remetente' => 0,
    'CEP' => 0,
    'teste' => 0,
    'sem_impostos' => 0,
    'sobre_valor' => 0,
    'total_geral' => 0,
    'total_produtos' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.19',
  'unifunc' => 'content_5508a32fabe9e2_40012587',
  'cache_lifetime' => 120,
),true); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5508a32fabe9e2_40012587')) {function content_5508a32fabe9e2_40012587($_smarty_tpl) {?><!DOCTYPE HTML>
<html lang="pt-br">

    <head>
        <meta charset="UTF-8">
        <title>Estilo Carioca | Checkout | Resumo</title>

        <meta name="title" content="Estilo Carioca"><meta name="description" content=""><meta name="author" content="Designlab">
        <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no">
           

        <link rel="shortcut icon" href="http://www.estilocarioca.com.br/application/template/estilocarioca/assets/img/favicon.png?v=5">
        <link rel="stylesheet" href="http://www.estilocarioca.com.br/application/template/estilocarioca/assets/css/plugins/slick.css">
        <link rel="stylesheet" href="http://www.estilocarioca.com.br/application/template/estilocarioca/assets/css/plugins/sweet-alert.css">
        <link rel="stylesheet" href="http://www.estilocarioca.com.br/application/template/estilocarioca/assets/css/plugins/jquery.raty.css">
        <link rel="stylesheet" href="http://www.estilocarioca.com.br/application/template/estilocarioca/assets/css/plugins/magnific-popup.css">
        <link rel="stylesheet" href="/web-files/css/sweet-alert.css?v=2"/>
        <link rel="stylesheet" href="http://www.estilocarioca.com.br/application/template/estilocarioca/assets/css/style.css">
        
        <script src="http://www.estilocarioca.com.br/application/template/estilocarioca/assets/js/modernizr.custom.js"></script>
        <link rel="stylesheet" href="/web-files/font-awesome-4.1.0/css/font-awesome.min.css"/>
        <style>
            
            .sugestao a  { font-size: 16px; display: block; background: #f4f4f4 !important; color:#1f3c8a !important; height: 100% !important; padding: 15px !important;margin-top: 0.3em !important; width: 100% !important;  }
.sugestao a:hover { font-size: 16px; background: #1f3c8a !important; text-decoration: none; color:#fff !important; height: 100% !important; padding: 15px  !important; margin-top: 0.3em !important; width: 100% !important;  }
            
        
        @font-face {
            font-family: helveticaneue;
            src: local('HelveticaNeueLTStd-UltLt.otf'), url('HelveticaNeueLTStd-UltLt.otf');
        }
        
        body, .font-default, .footer-title{
            font-family: helveticaneue, Helvetica, sans-serif !important;
        }
        
        .footer-title{
            font-weight: 600 !important;
            color: #293751 !important;
        }
        
        body{
            line-height: 1.90rem !important;
        }
        
        
        
        
        .title-tag{
            background: #8795ae !important;
        }
        
        .theme-default .section-title3 > h2{
            box-shadow: 0 2px #8795ae !important;
        }
        
        </style>
        <!--[if IE 8]>
        <link rel="stylesheet" href="http://www.estilocarioca.com.br/application/template/estilocarioca/assets/css/ie8.css" /><script src="http://www.estilocarioca.com.br/application/template/estilocarioca/assets/js/respond.js" ></script>        <![endif]-->

        <script type="text/javascript">
            var App = window.App || {
                base_path: ''
            };
        </script>
        
        <script>$('#myTab a').click(function (e) {
  e.preventDefault()
  $(this).tab('show')
}) </script>

                                                                                            </head>
    <body class="theme-default ">

        <div class="search-popup">
            <div class="search-popup-out popup-close">
                <div class="search-popup-inner">
                    <div class="search-popup-container">
                        <div class="relative">
                            <form class="form search-popup-form" role="search" action="/pt/novos-produtos" method="post">
                                <input type="search" placeholder="Buscar" name="search" class="input" autocomplete="off">
                                <button type="submit"><i class="sprite sprite-search"></i></button>
                                 
                            </form>
                            <div class="search-sugestao"></div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <section id="stt_logado_print">
            <header id="header" class="navbar navbar-fixed-top navbar-default" role="navigation">
    <div class="header-bar"></div>
    <div class="container">
        <div class="navbar-header">
            <a href="#" class="hamburger"><span></span></a>
            <a class="brand" href="/pt/">
                <img src="http://www.estilocarioca.com.br/application/template/estilocarioca/assets/img/estilocarioca2.png" width="71" height="68">
            </a>
        </div>
        <nav class="navbar-collapse">
            <ul class="nav navbar-nav navbar-right">
                <li class="navbar-social">
                    <a href="https://www.facebook.com/estilocarioca">
                        <b class="entypo-facebook"></b>
                    </a>
                    <a href="https://instagram.com/estilocarioca/">
                        <b class="entypo-instagrem"></b>
                    </a>
                    
                    <!--<a href="">
                        <i class="sprite sprite-twitter"></i>
                    </a>-->
                </li>
                <li class="navbar-search">
                    <a href="" class="search">
                        <i class="sprite sprite-search"></i>
                    </a>
                </li>
                                    <li>
                        <a href="/pt/conta/login-cadastro/">
                            <i class="icon sprite sprite-user"></i>
                        </a>
                    </li>
                                <li class="navbar-cart">
                    <a href="/pt/produtos/checkout/">
                        <i class="icon sprite sprite-cart"></i>
                        <span class="value">7</span>
                    </a>
                </li>
            </ul>
                    
            <ul class="nav navbar-nav">
                <li >
                    <a href="/pt/">Home</a>
                </li>
                <li >
                    <a href="/pt/informacoes/quem-somos">A Estilo Carioca</a>
                </li>
                <li >
                    <a href="/pt/junior/">Junior</a>
                </li>
                <li >
                    <a href="/pt/nilton-santos">Nilton Santos</a>
                </li>
            </ul>
        </nav>
    </div>
</header>  
        </section>


<section class="section">
    <div class="container" style="padding-top: 25px;">
        <div class="row">
            <div class="col-md-9">
                <div class="section-title2">
                    <h2 class="title">Finalizar Compra</h2>
                    <p  class="subtitle">CHECKOUT</p>
                </div>
            </div>
        </div>

        <div class="row">

            <div class="col-md-9">
                <h2 class="title-lg">SEUS PRODUTOS <img src="/web-files/img/Loader.GIF" alt="Carregando..." alt="Carregando..." boder="0" style="width: 22px;" class="img-load-seus-produtos hide"/></h2>
                <div class="row">
                    <div class="col-md-12">
                        <div class="panel panel-default"> 
                            <table class="table table-update" style="font-size: 14px;">
                                <thead  style="border-bottom: solid 2px #e7e7e7; margin-bottom: 15px;">
                                    <tr>
                                        <th>Produto</th>
                                        <th>Nome do Produto</th>
                                        <th>Referência</th>
                                        <th>Preço</th>
                                        <th style="width: 11%;">Quantidade</th>
                                        <th style="width: 8%;">Total</th>
                                        <th>#</th>
                                    </tr>
                                </thead>
                                <tbody class="tbody-update">
                                        
                                          
                                                                                        <tr style="border-bottom: solid 2px #e7e7e7; margin-bottom: 15px;">
                                                <td><a href="/pt/descricao/categoria/nilton-santos/camisa-masculina-2"><img src="/web-files/upload/thumbs/19EFCAF637AEBF944F3D4195714DF96C/3992902BA52B6C84B657A99CD39F09F2.jpg" alt="CAMISA MASCULINA" title="CAMISA MASCULINA" border="0"/></a><br/></td>
                                                <td style="text-transform: uppercase;">
                                                    CAMISA MASCULINA<br/><b>Tamanho: </b> G - Grande
                                                                                                    </td>
                                                <td>NS-0001</td>
                                                <td>129,90</td>
                                                <td id="n_input">
                                                    <table>
                                                        <tr>
                                                            <td><span style="cursor: pointer;" class="minus" onclick="javascript:plus_wishlist_checkout('CLIENT_HIDDEN=1A9C1DAE4855AF45065535B4AA384C55&CODPRODUTO=AC495248300239DADE219113A0265587&COMANDO=menos&CODLISTADESEJOS=822DA1F5A17A1745324FEC5E51E44C27&imposto=0.92&CODQUANTIDADE=E359395E40B591BFB5145023D76ABB08', '822DA1F5A17A1745324FEC5E51E44C27');" title="Menos item"><i class="fa fa-minus-square"></i></span>&nbsp;</td>
                                                            <td><input type="text" name="quantidade" id="input_822DA1F5A17A1745324FEC5E51E44C27"  style="width: 44px; text-align: center;" value="7" readonly="readonly"/></td>
                                                            <td>&nbsp;<span style="cursor: pointer;" class="plus" onclick="javascript:plus_wishlist_checkout('CLIENT_HIDDEN=1A9C1DAE4855AF45065535B4AA384C55&CODPRODUTO=AC495248300239DADE219113A0265587&COMANDO=mais&CODLISTADESEJOS=822DA1F5A17A1745324FEC5E51E44C27&imposto=0.92&CODQUANTIDADE=E359395E40B591BFB5145023D76ABB08', '822DA1F5A17A1745324FEC5E51E44C27');" title="Mais item"><i class="fa fa-plus-square"></i></span></td>
                                                        </tr>
                                                    </table>                
                                                </td>
                                                <td  id="preco_total_produto_822DA1F5A17A1745324FEC5E51E44C27"> 909,30</td>
                                                <td><span onclick="javascript:del_row_wishlist('CLIENT_HIDDEN=1A9C1DAE4855AF45065535B4AA384C55&CODPRODUTO=AC495248300239DADE219113A0265587&CODQUANTIDADE=AC495248300239DADE219113A0265587&CODQUANTIDADE=E359395E40B591BFB5145023D76ABB08')"><i class="fa fa-times"></i></span></td>
                                            </tr>
                                         
                                        <tr>
                                            <td colspan="10" valign="center">
                                                <img src="/web-files/img/present.png" border="0" alt="Embalagem para presente" alt="Embalagem para presente"/> <strong>Deseja que embale para presente?</strong> <span style="cursor: pointer; color: #8795ae; font-style: italic;" onclick="embalar_presente()"/>Clique aqui</span> <span class="yes hide"> &nbsp;<img src="/web-files/img/yes.png" alt="OK" title="OK" border="0"/></span>
                                                <style>
                                                    .panel-toggle{
                                                        background: #EFEDED;
                                                        border-bottom: solid 2px #D2D2D2 !important;
                                                        padding: 12px;
                                                    }
                                                </style>
                                            </td>
                                        </tr>
                                    
                                </tbody>
                            </table>    

                                                            <table class="table" style="font-size: 11px; margin-top: 12px; border: 0 !important;">
                                    <thead style="border: 0 !important;">
                                        <tr style="border: 0 !important;">
                                            <th colspan="3" style="border: 0 !important;">Calcular frete e prazo: </th>
                                        </tr>
                                    </thead>
                                    <tbody style="border: 0 !important;">
                                        <tr style="border: 0 !important;">
                                            <td style='width: 35%; border: 0 !important;'>
                                                <input type="hidden" class="form-control" id="codproduto" name="codproduto" value=""/>
                                                <input type="hidden" class="form-control" id="codcadastro" name="codcadastro" value=""/>
                                                <input type="hidden" class="form-control" id="total_peso" name="total_peso" value="2.1"/>
                                                <input type="hidden" class="form-control" id="cep_remetente" name="cep_remetente" value="22780-084"/>
                                                <input type="text" class="input" id="cep_destinatario" name="cep_destinatario" maxlength="8" value="" onkeypress="return formataCEP(event, this);" placeholder="CEP" style="width: 95%;"/>
                                            </td>
                                            <td style='width: 35%; border: 0 !important;'>
                                                <select id="forma_envio_rapido" class="select2" style="width: 100%;">
                                                    
                                                    <option value="41106">Correios - PAC</option>
                                                    <option value="40010">Correios - SEDEX</option>
                                                    <option value="40215">Correios - SEDEX 10</option>
                                                    <option value="40290">Correios - SEDEX hoje</option>
                                                    
                                                </select>
                                            </td>
                                            <td style="border: 0 !important;">
                                                <button type="button" id="btn_calc_cep_rapido" class="btn btn-default btn-sm" style="width: 100%; border-radius: 0" role="button">Calcular</button>
                                            </td>
                                        </tr>
                                        <tr style="border: 0 !important;">
                                            <td colspan="3" style="border: 0 !important;">
                                                <div style='height: 30px;'>
                                                    <span id="msg_erro" style="color: #df5d65; font-weight: bold; line-height: 4;"></span>
                                                    <div class="LoaderImg hide" style="text-align: center">
                                                        <img src="/web-files/img/Loader.GIF" alt="Carregando..." title="Carregando..." border="0" style="width: 25px;"/>
                                                    </div>
                                                </div>
                                            </td>
                                        </tr>
                                    </tbody>
                                </table>
                                <div id="table-frete" style="display: none;">
                                    <hr>
                                    <table style="width: 100%;">
                                        <thead style="border-bottom: solid 1px #e9e9e9;">
                                            <tr>
                                                <th><p style="color: #1f3c8a; font-weight: bold;">Entrega</p></th>
                                        <th><p style="color: #1f3c8a; font-weight: bold;">Frete</p></th>
                                        <th><p style="color: #1f3c8a; font-weight: bold;">Prazo</p></th>
                                        </tr>
                                        </thead>
                                        <tr>
                                            <td>
                                                <p id='entrega' style="font-weight: 400; margin: 12px 0;"></p>
                                            </td>
                                            <td>
                                                <p id='frete' style="font-weight: 400; margin: 12px 0;"></p>
                                            </td>
                                            <td>
                                                <p id='prazo' style="font-weight: 400; margin: 12px 0;"></p>
                                            </td>
                                        </tr>
                                    </table>
                                </div>
                             
                        </div>
                    </div>
                </div>
                <div>
                    <ul class="list-unstyled">
                        <li class="previous pull-left" ><a href="/pt/nossos-produtos" >&larr; Continuar comprando</a></li>
                                                        <li class="next pull-right"><a onclick="javascript:scrollToAnchor('step-1')" class="btn btn-primary">Finalizar compra &rarr;</a></li>
                                
                                                </ul>
                </div> 
                <div class="row">
                    <div class="col-lg-12" style="text-align: center; margin-bottom: 7%;">
                        <hr style="position: relative; top: 18px; border-top: 5px solid #eee; width: 100%"/>
                        <img src="/web-files/img/Lock.png" alt="Checkout seguro"  title="Checkout seguro" border="0" style="width: 7%; position: relative; bottom: 30px; border: 8px solid #fff; border-radius: 13px;"/>
                        <h3 style="color: #8795ae;" id="checkout_seguro">CHECKOUT SEGURO</h3>
                        <div style="font-size: 22px;">TOTAL DE 4 PASSOS</div>
                    </div>
                </div>        
                <div class="row steps step-1 hide">
                    <div class="col-lg-12">
                        <div class="section-title3" style="text-align:left; margin-bottom: -2em;">
                            <span class="title-tag">1</span>
                            <h2 class="title">A COMPRA SERÁ REALIZADA POR</h2>
                        </div>
                        <div id="step-1" style="text-align:center; margin-top: 9%; margin-bottom: 4%;"> </div>
                    </div>
                </div>
                <div class="row steps step-2 hide">

                    <div class="col-lg-12">
                        <div class="section-title3" style="text-align: left; margin-bottom: 7%;">
                            <span class="title-tag">2</span>
                            <h2 class="title">MEUS ENDEREÇOS</h2>
                        </div>
                        <div id="step-2" style="margin-bottom: 3%;"> </div>
                    </div>
                </div>  
                <div class="row steps step-3 hide">
                    
                    <div class="col-lg-12">
                        <div class="section-title3" style="text-align: left; margin-bottom: 6%;">
                            <span class="title-tag">3</span>
                            <h2 class="title">FORMA DE ENVIO</h2>
                        </div>
                        <div id="step-3"> </div>
                    </div>
                </div>  
                <div class="row steps step-4 hide">
                    
                    <div class="col-lg-12">
                        <div class="section-title3" style="text-align: left; margin-bottom: 13%;">
                            <span class="title-tag">4</span>
                            <h2 class="title">FORMA DE PAGAMENTO</h2>
                        </div>
                        <div id="step-4" style="margin-bottom: 17%"> </div>
                    </div>
                </div>
            </div>
                            <div id="checkout-panel-2" class="checkout-panel-2 checkout-panel">
                    <div id="total-box-tabela">
                        <table width="100%">
                            <tbody>
                                <tr class="cart_total_price_product" style="font-weight: normal; display: none">
                                    <td colspan="6" style="width: 105px;">Produtos sem impostos :</td>
                                    <td class="sta-right-text" id="total_parcial">
                                                                                    909,30    
                                                                        
                                    </td>
                                </tr>
                                <tr class="cart_total_price_product" style="font-weight: normal; display: none">
                                    <td colspan="6" style="width: 105px;">Impostos :</td>
                                    <td class="sta-right-text" id="total_impostos">
                                                                                    0,00
                                                                        
                                    </td>
                                </tr>
                                <tr class="cart_total_voucher hide">
                                    <td colspan="6">
                                        Desconto :
                                    </td>
                                    <td class="sta-right-text price-discount" id="total_discount">
                                        R$0,00
                                    </td>
                                </tr> 

                                <tr class="cart_total_voucher hide">
                                    <td colspan="6">
                                        Total gift-wrapping :
                                    </td>
                                    <td class="sta-right-text price-discount" id="total_wrapping">
                                        R$0,00
                                    </td>
                                </tr>

                                <tr class="cart_total_delivery_tp">
                                    <td colspan="6" id="total_product-txt">
                                        Total de Produtos:
                                    </td>
                                    <td class="sta-right-text">
                                                                                    909,30    
                                                                        
                                    </td>
                                </tr>

                                <tr class="cart_total_delivery" style="">
                                    <td colspan="6" id="total_product-txt">
                                        Quantidade:
                                    </td>
                                    <td class="sta-right-text">
                                                                                    7 Itens                                                                         
                                    </td>
                                </tr>

                                <tr class="cart_total_delivery">
                                    <td colspan="6">Frete:</td>

                                    <td id="taxa_entrega" class="sta-right-text">

                                    </td>
                                </tr>

                                <tr class="prazo_entrega_tr hide">
                                    <td colspan="6">Prazo de Entrega:</td>

                                    <td id="prazo_entrega" class="sta-right-text">
                                        0,00
                                    </td>
                                </tr>

                                <tr class="cart_total_price" style="">
                                    <td colspan="6" id="total_product-txt">
                                        Total:
                                    </td>
                                    <td class="sta-right-text" id="total_geral">
                                                                                    909,30    
                                                                        
                                    </td>
                                </tr>
                                <tr class="cart_total_tax" style="display:none">
                                    <td colspan="6">
                                        Total:
                                    </td>
                                    <td class="price sta-right-text" id="total_tax">R$0,00</td>
                                </tr>
                                <tr class="cart_total_price" style="display:none">
                                    <td colspan="6">
                                        Total:
                                    </td>
                                    <td class="sta-right-text"> R$380,00 </td>

                            </tbody>
                        </table>
                    </div>
                    <div id="cart_voucher">
                        <form action="#" method="post" id="voucher" onsubmit="return false">
                            <fieldset>
                                <label for="discount_name"><b>CUPOM DE DESCONTO</b> </label>
                                <input type="text" id="discount_name" name="discount_name" value="" style="text-align: center;" class="form-control" style="margin-bottom: 12px" maxlength="6">
                                <p class="submit">
                                    <input type="hidden" name="ticket_desconto" id="ticket_desconto"/>
                                    <button type="button" name="submitAddDiscount" id="submitAddDiscount" class="btn btn-default" onclick="javascript:checar_desconto();" style="margin-top: 10px;">ADICIONAR CUPOM</button>
                                </p>   
                                <div class="cart-voucher-txt-alert" style="color: #8795ae;"></div>
                                <div class="cart-voucher-txt">Caso você possua um cupom de desconto ou presente, adicione acima</div>
                            </fieldset>
                        </form> 
                    </div>
                    <div id="eseguro"> 
                        <h6>É UM SITE SEGURO?</h6>
                        <p>Sim, a Estilo Carioca utiliza criptografia (SSL) e tem auditoria diária da empresa Site Blindado.</p>
                        <div style=" margin-top: 12px; ">
                            <div class="selo-top-cart-cartao">
                                <div id="armored_website" style="display: inline-block;">
                                    <param id="aw_preload" value="true" />
                                </div>
                            </div>
                        </div> 
                    </div>
                </div>
                    </div>
    </div>
</section>

<!-- FOOTER  -->



<footer class="footer ">
    <div class="container ">

        <div class="row footer-content">
            <div class="col-sm-6 col-md-3">
                <h2 class="footer-title">LOGIN E CADASTRO</h2>
                <ul class="list-unstyled">
                    <li><a href="/pt/conta/">Acompanhe seu pedido</a></li>
                    <li><a href="/pt/conta/login-cadastro/">Login e Cadastro</a></li>
                </ul>
            </div>
            <div class="col-sm-6 col-md-3">
                <h2 class="footer-title">ATENDIMENTO AO CLIENTE</h2>
                <ul class="list-unstyled">
                    <li><a href="/pt/informacoes/contato">Entre em contato</a></li>
                    <li><a href="/pt/informacoes/trocas-e-devolucoes">Trocas e devoluções</a></li>
                    <li><a href="/pt/informacoes/termos-servicos">Termos de serviço</a></li>
                </ul>
            </div>
            <div class="col-sm-6 col-md-3">
                <h2 class="footer-title">SIGA A EC</h2>
                <ul class="list-unstyled list-inline list-social">
                    <!--<li><a href=""><i class="sprite sprite-twitter-2"></i></a></li>-->
                    <li><a href="https://www.facebook.com/estilocarioca" target="blank"><b class="entypo-facebook"></b></a></li>
                    <li><a href="https://instagram.com/estilocarioca/" target="blank"><b class="entypo-instagrem"></b></a></li>
                </ul>
            </div>
            <div class="col-sm-6 col-md-3">

                <h2 class="footer-title">FIQUE POR DENTRO DA EC</h2>
                <form action="" method="post" class="newsletter-form ajax-form" novalidate="">
                    <div class="form-row">
                        <input name="nome_newsletter_2" id="nome" type="text" class="form-control" placeholder="Seu nome" required>
                    </div>
                    <div class="form-row">
                        <input name="email_newsletter_2" id="email" type="text" class="form-control" placeholder="Seu e-mail" required>
                    </div>
                    <div class="form-row">
                        <button type="submit" class="btn btn-default btn-block">Enviar</button>
                    </div>
                    <div id="erro_newsletter_2"> </div>
                </form>
            </div>
        </div>
        <hr>
        
        
        <div class="row footer-bottom">
            <div class="col-sm-6 col-sm-push-6 text-right">
                <span class="selo-es sprite sprite-selo-es"></span>
                <span class="cartoes sprite sprite-cartoes"></span>
                <img src="/web-files/img/bandeiras.png" alt=""/>
            </div>
            <div class="col-sm-6 col-sm-pull-6">
                <p class="copy">Desenvolvido por <span id="dl"></span></p>
                <script type="text/javascript">
                    var _dl = _dl || {};
                    _dl.width = "80";
                    _dl.color = "gray";
                    (function () {
                        var a = document.createElement("script");
                        a.type = "text/javascript";
                        a.async = !0;
                        a.src = "//static.designlab.com.br/js/bydl.js";
                        var b = document.getElementsByTagName("script")[0];
                        b.parentNode.insertBefore(a, b)
                    })();
                </script>
            </div>
                    
        </div>
                <hr>
                    
                    <div class="row footer-content text-center">
            <p style="line-height: 1.8em;font-size: 1.2rem;">
                <strong>RMGSPORT COMERCIO EIRELI - ME</strong>
                <br>CNPJ: 21.468.076/0001-16
                <br>&copy; Todos os direitos reservados - Rua Gazzi de Sá, nº17 - Lote 17 Quadra G , Barra da Tijuca / RJ - CEP: 22.793-210 
                <br>Atendimento ao cliente: rodrigo@estilocarioca.com.br - 21 3326.1986
            </p>
        </div>
    </div>
</footer>                

<script src="//code.jquery.com/jquery-1.11.2.min.js"></script>
<script language="javascript" src="/web-files/js/funcoes.js"></script>
<script src="http://www.estilocarioca.com.br/application/template/estilocarioca/assets/js/plugins/slick.min.js"></script>
<script src="http://www.estilocarioca.com.br/application/template/estilocarioca/assets/js/plugins/jquery.raty.js"></script>
<script src="http://www.estilocarioca.com.br/application/template/estilocarioca/assets/js/plugins/underscore-min.js"></script>
<script src="http://www.estilocarioca.com.br/application/template/estilocarioca/assets/js/plugins/mustache.min.js"></script>
<script src="http://www.estilocarioca.com.br/application/template/estilocarioca/assets/js/plugins/jquery.magnific-popup.min.js"></script>
<script src="http://www.estilocarioca.com.br/application/template/estilocarioca/assets/js/scripts.js"></script>
<script language="javascript" src="/web-files/bootstrap/js/bootstrap.js"></script>
<script language="javascript" src="/web-files/js/jQuery-Mask-Plugin.js"></script>
<script language="javascript" src="/web-files/js/vendor/jquery.payment.js"></script>
<script language="javascript" src="/web-files/js/vendor/jquery.mask.min.js"></script>
<script language="javascript" src="/web-files/js/joker.js"></script>
<script language="javascript" src="/web-files/js/default.js"></script>
<script language="javascript" src="/web-files/js/sweet-alert.js"></script>
<script language="javascript" src="/web-files/js/stickyfloat.js"></script>
 <script language="javascript"> jQuery('.checkout-panel-2').stickyfloat({ duration: 0, easing:"linear",   startOffset: 60,   }); </script>
<script src='http://cdnjs.cloudflare.com/ajax/libs/es5-shim/2.3.0/es5-shim.js'></script>



</body>
</html>
    <script>

        $(document).ready(function() {
            finalizar_compra();
        });


    </script>
<?php }} ?>
