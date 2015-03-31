<?php /*%%SmartyHeaderCode:964063281544a75c81544b0-50109702%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '88368b8b4393e895c5de0e01ec5d70f34ba762fc' => 
    array (
      0 => '/home/maria951/public_html/novo/application/views/categorias.tpl',
      1 => 1414165313,
      2 => 'file',
    ),
    '6a0d8cd5da5366cd163c1096d3e3a62591b34250' => 
    array (
      0 => '/home/maria951/public_html/novo/application/views/header.tpl',
      1 => 1414165340,
      2 => 'file',
    ),
    'dddb63286e4a273b560ff992665e7d4c506e6fdb' => 
    array (
      0 => '/home/maria951/public_html/novo/application/views/navbar.tpl',
      1 => 1414165334,
      2 => 'file',
    ),
    '9c6368fa7ae30d46a3ff6d19316b23707d94dba8' => 
    array (
      0 => '/home/maria951/public_html/novo/application/views/footer.tpl',
      1 => 1414165346,
      2 => 'file',
    ),
    '90e90a97284dec988adac3b7318a019a6b5d1ff6' => 
    array (
      0 => '/home/maria951/public_html/novo/application/views/atendimento_online.tpl',
      1 => 1412097035,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '964063281544a75c81544b0-50109702',
  'variables' => 
  array (
    'btn_anterior' => 0,
    'paginacao' => 0,
    'total_produto' => 0,
    'pagina' => 0,
    'pgn' => 0,
    'language' => 0,
    'categoria' => 0,
    'sort' => 0,
    'qntdd' => 0,
    'btn_proximo' => 0,
    'arr' => 0,
    'produto' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.19',
  'unifunc' => 'content_544a75c85bbf78_23606758',
  'cache_lifetime' => 120,
),true); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_544a75c85bbf78_23606758')) {function content_544a75c85bbf78_23606758($_smarty_tpl) {?><!DOCTYPE HTML>
<html lang="pt-br">

    <head>
        <meta charset="UTF-8">
        <title>Maria de Barro | Categoria | Pulseiras</title>

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
    <li  class="active" ><a href="/pt/pulseiras/">Pulseiras</a></li>                       
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
                                                            
                                                         
                                                                                                                                    <li><a href="/pt/pulseiras/sort/mais_novos/qntdd/16/pagina/2">2</a></li>
                                                            
                                                         
                            
                        

                        <li class=""><a href="2">Próxima »</a></li>
                    </ul>
                    <div class="form-inline page-controls-options">
                        <label>Mostrar por: <select name="selectPrductSort" id="selectPrductSort" class="form-control">
                                <option value="">--</option>
                                <option value="mais_novos" selected>Mais novos</option>
                                <option value="preco_crescente" >Preço: Menor para o maior</option>
                                <option value="preco_decrescente" >Preço: Maior para o menor</option>
                                <option value="nome_crescente" >Listar por nome: A para o Z</option>
                                <option value="nome_decrescente" >Listar por nome: Z para o A</option>
                                <option value="quantidade" >Em estoque</option>
                            </select>
                        </label>
                        <input type="hidden" name="url" id="url" value="/pt/pulseiras"/>
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
                                <a href="/pt/pulseiras/pulseira-de-couro-com-canutilhos">
                                                                            <span class="thumbnail-tag">Novo</span>
                                                                        <img src="/web-files/upload/thumbs/98239C505E98F96E279BAA3C9BAE32B7/52FA545501448D19214AD3DA008DA5BE.jpg" alt="Pulseira de couro com canutilhos " border="0" title="Pulseira de couro com canutilhos " class="img-responsive" width="261" height="289"/>
                                </a>
                            </div>
                            <div class="thumbnail-infos">
                                <div class="row sp1"><div class="col-sm-12 sp2"></div></div>
                                <a href="/pt/pulseiras/pulseira-de-couro-com-canutilhos">

                                    <div class="thumbnail-title"><span class="price-through">R$ 100,00</span> R$ 100,00</div>

                                    
                                    <a href="/pt/pulseiras/pulseira-de-couro-com-canutilhos">
                                        <div class="thumbnail-subtitle">Pulseira de couro com canutilhos </div>
                                    </a>
                                    
                            </div>
                        </div>
                    </div>
                                                                <div class="col-thumb col-xs-6 col-sm-3">
                        <div class="thumbnail">
                            <div class="thumbnail-img">
                                <a href="/pt/pulseiras/pulseira-de-couro-com-canutilhos-1">
                                                                            <span class="thumbnail-tag">Novo</span>
                                                                        <img src="/web-files/upload/thumbs/13ED6F63D03FE306E35229593A21C592/F2EE57A1AF131B87C31163EB03B7EACC.jpg" alt="Pulseira de Couro com canutilhos" border="0" title="Pulseira de Couro com canutilhos" class="img-responsive" width="261" height="289"/>
                                </a>
                            </div>
                            <div class="thumbnail-infos">
                                <div class="row sp1"><div class="col-sm-12 sp2"></div></div>
                                <a href="/pt/pulseiras/pulseira-de-couro-com-canutilhos-1">

                                    <div class="thumbnail-title"><span class="price-through">R$ 118,00</span> R$ 70,80</div>

                                    
                                    <a href="/pt/pulseiras/pulseira-de-couro-com-canutilhos-1">
                                        <div class="thumbnail-subtitle">Pulseira de Couro com canutilhos</div>
                                    </a>
                                    
                            </div>
                        </div>
                    </div>
                                                                <div class="col-thumb col-xs-6 col-sm-3">
                        <div class="thumbnail">
                            <div class="thumbnail-img">
                                <a href="/pt/pulseiras/pulseira-rose-de-elos-1">
                                                                            <span class="thumbnail-tag">Novo</span>
                                                                        <img src="/web-files/upload/thumbs/E2B32FE3CD69EF3F149A6A5F5239AC2C/C3217EAAAB45D9B645FB46A8793D8E24.jpg" alt="Pulseira rosé de elos" border="0" title="Pulseira rosé de elos" class="img-responsive" width="261" height="289"/>
                                </a>
                            </div>
                            <div class="thumbnail-infos">
                                <div class="row sp1"><div class="col-sm-12 sp2"></div></div>
                                <a href="/pt/pulseiras/pulseira-rose-de-elos-1">

                                    <div class="thumbnail-title"><span class="price-through">R$ 118,00</span> R$ 70,80</div>

                                    
                                    <a href="/pt/pulseiras/pulseira-rose-de-elos-1">
                                        <div class="thumbnail-subtitle">Pulseira rosé de elos</div>
                                    </a>
                                    
                            </div>
                        </div>
                    </div>
                                                                <div class="col-thumb col-xs-6 col-sm-3">
                        <div class="thumbnail">
                            <div class="thumbnail-img">
                                <a href="/pt/pulseiras/pulseira-dourada-de-elos">
                                                                            <span class="thumbnail-tag">Novo</span>
                                                                        <img src="/web-files/upload/thumbs/C7DD7903FBB764F25001B859B6D80186/86EE3AA06D6129E15B36034BA03AA2F2.jpg" alt="Pulseira dourada de elos" border="0" title="Pulseira dourada de elos" class="img-responsive" width="261" height="289"/>
                                </a>
                            </div>
                            <div class="thumbnail-infos">
                                <div class="row sp1"><div class="col-sm-12 sp2"></div></div>
                                <a href="/pt/pulseiras/pulseira-dourada-de-elos">

                                    <div class="thumbnail-title"><span class="price-through">R$ 118,00</span> R$ 70,80</div>

                                    
                                    <a href="/pt/pulseiras/pulseira-dourada-de-elos">
                                        <div class="thumbnail-subtitle">Pulseira dourada de elos</div>
                                    </a>
                                    
                            </div>
                        </div>
                    </div>
                                                                <div class="col-thumb col-xs-6 col-sm-3">
                        <div class="thumbnail">
                            <div class="thumbnail-img">
                                <a href="/pt/pulseiras/bracelete-dourado-com-pedra-branca">
                                                                            <span class="thumbnail-tag">Novo</span>
                                                                        <img src="/web-files/upload/thumbs/9D2496C083064B34CEFBEC34709642D3/28249707BB90F2350EB2358D70B7F8B4.jpg" alt="Bracelete dourado com pedra branca" border="0" title="Bracelete dourado com pedra branca" class="img-responsive" width="261" height="289"/>
                                </a>
                            </div>
                            <div class="thumbnail-infos">
                                <div class="row sp1"><div class="col-sm-12 sp2"></div></div>
                                <a href="/pt/pulseiras/bracelete-dourado-com-pedra-branca">

                                    <div class="thumbnail-title"><span class="price-through">R$ 129,00</span> R$ 77,40</div>

                                    
                                    <a href="/pt/pulseiras/bracelete-dourado-com-pedra-branca">
                                        <div class="thumbnail-subtitle">Bracelete dourado com pedra branca</div>
                                    </a>
                                    
                            </div>
                        </div>
                    </div>
                                                                <div class="col-thumb col-xs-6 col-sm-3">
                        <div class="thumbnail">
                            <div class="thumbnail-img">
                                <a href="/pt/pulseiras/pulseira-dourada-rabo-de-rato-com-trevo">
                                                                            <span class="thumbnail-tag">Novo</span>
                                                                        <img src="/web-files/upload/thumbs/E60B13228FB28779F3E1477860FC3CF4/21027D77037A19B0F3882E2F2C133E66.jpg" alt="Pulseira dourada rabo de rato com trevo" border="0" title="Pulseira dourada rabo de rato com trevo" class="img-responsive" width="261" height="289"/>
                                </a>
                            </div>
                            <div class="thumbnail-infos">
                                <div class="row sp1"><div class="col-sm-12 sp2"></div></div>
                                <a href="/pt/pulseiras/pulseira-dourada-rabo-de-rato-com-trevo">

                                    <div class="thumbnail-title"><span class="price-through">R$ 195,00</span> R$ 117,00</div>

                                    
                                    <a href="/pt/pulseiras/pulseira-dourada-rabo-de-rato-com-trevo">
                                        <div class="thumbnail-subtitle">Pulseira dourada rabo de rato com trevo</div>
                                    </a>
                                    
                            </div>
                        </div>
                    </div>
                                                                <div class="col-thumb col-xs-6 col-sm-3">
                        <div class="thumbnail">
                            <div class="thumbnail-img">
                                <a href="/pt/pulseiras/pulseira-dourada-com-detalhe-de-coracao-1">
                                                                            <span class="thumbnail-tag">Novo</span>
                                                                        <img src="/web-files/upload/thumbs/B98478EBCC69838B97B75560268D1443/F10663802FACB4B53D25B984ECDCC67A.jpg" alt="Pulseira dourada com detalhe de coração" border="0" title="Pulseira dourada com detalhe de coração" class="img-responsive" width="261" height="289"/>
                                </a>
                            </div>
                            <div class="thumbnail-infos">
                                <div class="row sp1"><div class="col-sm-12 sp2"></div></div>
                                <a href="/pt/pulseiras/pulseira-dourada-com-detalhe-de-coracao-1">

                                    <div class="thumbnail-title"> R$ 64,00</div>

                                    
                                    <a href="/pt/pulseiras/pulseira-dourada-com-detalhe-de-coracao-1">
                                        <div class="thumbnail-subtitle">Pulseira dourada com detalhe de coração</div>
                                    </a>
                                    
                            </div>
                        </div>
                    </div>
                                                                <div class="col-thumb col-xs-6 col-sm-3">
                        <div class="thumbnail">
                            <div class="thumbnail-img">
                                <a href="/pt/pulseiras/pulseira-dourada-com-simbolo-da-paz">
                                                                            <span class="thumbnail-tag">Novo</span>
                                                                        <img src="/web-files/upload/thumbs/B927A639F1CD18737EBBAFCCC2FD7424/92829ED915D67AEB439656032DBEBCE8.jpg" alt="Pulseira dourada com símbolo da paz" border="0" title="Pulseira dourada com símbolo da paz" class="img-responsive" width="261" height="289"/>
                                </a>
                            </div>
                            <div class="thumbnail-infos">
                                <div class="row sp1"><div class="col-sm-12 sp2"></div></div>
                                <a href="/pt/pulseiras/pulseira-dourada-com-simbolo-da-paz">

                                    <div class="thumbnail-title"> R$ 46,00</div>

                                    
                                    <a href="/pt/pulseiras/pulseira-dourada-com-simbolo-da-paz">
                                        <div class="thumbnail-subtitle">Pulseira dourada com símbolo da paz</div>
                                    </a>
                                    
                            </div>
                        </div>
                    </div>
                                                                <div class="col-thumb col-xs-6 col-sm-3">
                        <div class="thumbnail">
                            <div class="thumbnail-img">
                                <a href="/pt/pulseiras/pulseira-dourada-com-detalhe-de-trevo">
                                                                            <span class="thumbnail-tag">Novo</span>
                                                                        <img src="/web-files/upload/thumbs/4A18BDCE8C85A6CF47A89E3B4BB394B4/A8A2CD6D04AC76FB2F3F09A8F756F29D.jpg" alt="Pulseira dourada com detalhe de trevo" border="0" title="Pulseira dourada com detalhe de trevo" class="img-responsive" width="261" height="289"/>
                                </a>
                            </div>
                            <div class="thumbnail-infos">
                                <div class="row sp1"><div class="col-sm-12 sp2"></div></div>
                                <a href="/pt/pulseiras/pulseira-dourada-com-detalhe-de-trevo">

                                    <div class="thumbnail-title"> R$ 53,00</div>

                                    
                                    <a href="/pt/pulseiras/pulseira-dourada-com-detalhe-de-trevo">
                                        <div class="thumbnail-subtitle">Pulseira dourada com detalhe de trevo</div>
                                    </a>
                                    
                            </div>
                        </div>
                    </div>
                                                                <div class="col-thumb col-xs-6 col-sm-3">
                        <div class="thumbnail">
                            <div class="thumbnail-img">
                                <a href="/pt/pulseiras/pulseira-dourada-de-bolinhas-1">
                                                                            <span class="thumbnail-tag">Novo</span>
                                                                        <img src="/web-files/upload/thumbs/A439DEBDA2F4A0906569EF6F4F338303/50C7BF1703F481D8DC09FC6AF0494CA1.jpg" alt="Pulseira dourada de bolinhas" border="0" title="Pulseira dourada de bolinhas" class="img-responsive" width="261" height="289"/>
                                </a>
                            </div>
                            <div class="thumbnail-infos">
                                <div class="row sp1"><div class="col-sm-12 sp2"></div></div>
                                <a href="/pt/pulseiras/pulseira-dourada-de-bolinhas-1">

                                    <div class="thumbnail-title"> R$ 46,00</div>

                                    
                                    <a href="/pt/pulseiras/pulseira-dourada-de-bolinhas-1">
                                        <div class="thumbnail-subtitle">Pulseira dourada de bolinhas</div>
                                    </a>
                                    
                            </div>
                        </div>
                    </div>
                                                                <div class="col-thumb col-xs-6 col-sm-3">
                        <div class="thumbnail">
                            <div class="thumbnail-img">
                                <a href="/pt/pulseiras/pulseira-dourada-torcida">
                                                                            <span class="thumbnail-tag">Novo</span>
                                                                        <img src="/web-files/upload/thumbs/742F869007AF676A0FD5EE9888783CC2/72059BF5993C69B9D89713C647DD8E6D.jpg" alt="Pulseira dourada torcida" border="0" title="Pulseira dourada torcida" class="img-responsive" width="261" height="289"/>
                                </a>
                            </div>
                            <div class="thumbnail-infos">
                                <div class="row sp1"><div class="col-sm-12 sp2"></div></div>
                                <a href="/pt/pulseiras/pulseira-dourada-torcida">

                                    <div class="thumbnail-title"> R$ 46,00</div>

                                    
                                    <a href="/pt/pulseiras/pulseira-dourada-torcida">
                                        <div class="thumbnail-subtitle">Pulseira dourada torcida</div>
                                    </a>
                                    
                            </div>
                        </div>
                    </div>
                                                                <div class="col-thumb col-xs-6 col-sm-3">
                        <div class="thumbnail">
                            <div class="thumbnail-img">
                                <a href="/pt/pulseiras/pulseira-rabo-de-rato-trama-grossa">
                                                                            <span class="thumbnail-tag">Novo</span>
                                                                        <img src="/web-files/upload/thumbs/1E7AFABE663D43288D91FA28D42A8216/092B6180EFB3545221E2EEE8DEC28AE6.jpg" alt="Pulseira rabo de rato trama grossa" border="0" title="Pulseira rabo de rato trama grossa" class="img-responsive" width="261" height="289"/>
                                </a>
                            </div>
                            <div class="thumbnail-infos">
                                <div class="row sp1"><div class="col-sm-12 sp2"></div></div>
                                <a href="/pt/pulseiras/pulseira-rabo-de-rato-trama-grossa">

                                    <div class="thumbnail-title"> R$ 46,00</div>

                                    
                                    <a href="/pt/pulseiras/pulseira-rabo-de-rato-trama-grossa">
                                        <div class="thumbnail-subtitle">Pulseira rabo de rato trama grossa</div>
                                    </a>
                                    
                            </div>
                        </div>
                    </div>
                                                                <div class="col-thumb col-xs-6 col-sm-3">
                        <div class="thumbnail">
                            <div class="thumbnail-img">
                                <a href="/pt/pulseiras/pulseira-com-detalhe-em-acrilico-redondo">
                                                                            <span class="thumbnail-tag">Novo</span>
                                                                        <img src="/web-files/upload/thumbs/3A6E4C3A29ABD4047BF58107D18257D2/CA43EB8246372345873D600C4CFDB3A1.jpg" alt="Pulseira com detalhe em acrílico redondo" border="0" title="Pulseira com detalhe em acrílico redondo" class="img-responsive" width="261" height="289"/>
                                </a>
                            </div>
                            <div class="thumbnail-infos">
                                <div class="row sp1"><div class="col-sm-12 sp2"></div></div>
                                <a href="/pt/pulseiras/pulseira-com-detalhe-em-acrilico-redondo">

                                    <div class="thumbnail-title"> R$ 64,00</div>

                                    
                                    <a href="/pt/pulseiras/pulseira-com-detalhe-em-acrilico-redondo">
                                        <div class="thumbnail-subtitle">Pulseira com detalhe em acrílico redondo</div>
                                    </a>
                                    
                            </div>
                        </div>
                    </div>
                                                                <div class="col-thumb col-xs-6 col-sm-3">
                        <div class="thumbnail">
                            <div class="thumbnail-img">
                                <a href="/pt/pulseiras/pulseira-dourada-com-detalhe-em-acrilico">
                                                                            <span class="thumbnail-tag">Novo</span>
                                                                        <img src="/web-files/upload/thumbs/A858A534495A4B1E152821CE87193602/F27801728CAF359B8DF10648A2593FFD.jpg" alt="Pulseira dourada com detalhe em acrílico" border="0" title="Pulseira dourada com detalhe em acrílico" class="img-responsive" width="261" height="289"/>
                                </a>
                            </div>
                            <div class="thumbnail-infos">
                                <div class="row sp1"><div class="col-sm-12 sp2"></div></div>
                                <a href="/pt/pulseiras/pulseira-dourada-com-detalhe-em-acrilico">

                                    <div class="thumbnail-title"> R$ 63,00</div>

                                    
                                    <a href="/pt/pulseiras/pulseira-dourada-com-detalhe-em-acrilico">
                                        <div class="thumbnail-subtitle">Pulseira dourada com detalhe em acrílico</div>
                                    </a>
                                    
                            </div>
                        </div>
                    </div>
                                                                <div class="col-thumb col-xs-6 col-sm-3">
                        <div class="thumbnail">
                            <div class="thumbnail-img">
                                <a href="/pt/pulseiras/pulseira-rose-rabo-de-rato">
                                                                            <span class="thumbnail-tag">Novo</span>
                                                                        <img src="/web-files/upload/thumbs/BE106A249E4F0D3BE5358400BE22C798/CD1DDE041AC5554E6802FB6C7118F054.jpg" alt="Pulseira Rosé Rabo de Rato" border="0" title="Pulseira Rosé Rabo de Rato" class="img-responsive" width="261" height="289"/>
                                </a>
                            </div>
                            <div class="thumbnail-infos">
                                <div class="row sp1"><div class="col-sm-12 sp2"></div></div>
                                <a href="/pt/pulseiras/pulseira-rose-rabo-de-rato">

                                    <div class="thumbnail-title"> R$ 42,00</div>

                                    
                                    <a href="/pt/pulseiras/pulseira-rose-rabo-de-rato">
                                        <div class="thumbnail-subtitle">Pulseira Rosé Rabo de Rato</div>
                                    </a>
                                    
                            </div>
                        </div>
                    </div>
                                                                <div class="col-thumb col-xs-6 col-sm-3">
                        <div class="thumbnail">
                            <div class="thumbnail-img">
                                <a href="/pt/pulseiras/pulseira-dourada-rabo-de-rato-1">
                                                                            <span class="thumbnail-tag">Novo</span>
                                                                        <img src="/web-files/upload/thumbs/39FA68B526938687755643428A2AD03D/095BE64DF6B7EE2402BDF496FEEEF13D.jpg" alt="Pulseira dourada rabo de rato" border="0" title="Pulseira dourada rabo de rato" class="img-responsive" width="261" height="289"/>
                                </a>
                            </div>
                            <div class="thumbnail-infos">
                                <div class="row sp1"><div class="col-sm-12 sp2"></div></div>
                                <a href="/pt/pulseiras/pulseira-dourada-rabo-de-rato-1">

                                    <div class="thumbnail-title"> R$ 42,00</div>

                                    
                                    <a href="/pt/pulseiras/pulseira-dourada-rabo-de-rato-1">
                                        <div class="thumbnail-subtitle">Pulseira dourada rabo de rato</div>
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
                                                            
                                                         
                                                                                                                                    <li><a href="/pt/pulseiras/sort/mais_novos/qntdd/16/pagina/2">2</a></li>
                                                            
                                                         
                            
                        

                        <li class=""><a href="2">Próxima »</a></li>
                    </ul>
                    <div class="form-inline page-controls-options">
                        <label>Mostrar por: <select name="selectPrductSort_2" id="selectPrductSort_2" class="form-control">
                                <option value="">--</option>
                                <option value="mais_novos" selected>Mais novos</option>
                                <option value="preco_crescente" >Preço: Menor para o maior</option>
                                <option value="preco_decrescente" >Preço: Maior para o menor</option>
                                <option value="nome_crescente" >Listar por nome: A para o Z</option>
                                <option value="nome_decrescente" >Listar por nome: Z para o A</option>
                                <option value="quantidade" >Em estoque</option>
                            </select>
                        </label>
                        <input type="hidden" name="url" id="url" value="/pt/pulseiras"/>
                        <input type="hidden" name="pagina" id="pagina" value="1"/>
                    </div>
                </div>
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
<script language="javascript" src="/web-files/js/vendor/jquery.payment.js"></script>
<script language="javascript" src="/web-files/js/vendor/jquery.mask.min.js"></script>
<script language="javascript" src="/web-files/pongstagr.am-master/source/pongstagr.am.js"></script>
<script language="javascript" src="/web-files/js/vendor/jquery.magnific-popup.min.js"></script>
<script language="javascript" src="/web-files/js/joker.js"></script>
<script language="javascript" src="/web-files/js/default.js"></script>

<link rel="stylesheet" href="//code.jquery.com/ui/1.11.1/themes/smoothness/jquery-ui.css">
<link rel="stylesheet" href="/resources/demos/style.css">


</body>
</html><?php }} ?>
