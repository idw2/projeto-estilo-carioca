<?php /* Smarty version Smarty-3.1.19, created on 2014-10-24 12:37:51
         compiled from "/home/maria951/public_html/novo/application/views/descricao.tpl" */ ?>
<?php /*%%SmartyHeaderCode:2016893693544a643f975a47-37628823%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'e50e74f5a05015e38cb74e9edc39ca4966e9edc5' => 
    array (
      0 => '/home/maria951/public_html/novo/application/views/descricao.tpl',
      1 => 1414161398,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '2016893693544a643f975a47-37628823',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'fotos_full' => 0,
    'i' => 0,
    'fful' => 0,
    'source' => 0,
    'nome' => 0,
    'descricao' => 0,
    'quantidade' => 0,
    'is_promocao' => 0,
    'de' => 0,
    'preco' => 0,
    'lista_desejos' => 0,
    'produto' => 0,
    'FOTO_SM' => 0,
    'language' => 0,
    'site' => 0,
    'ctgr' => 0,
    'url_amigavel' => 0,
    'titulo' => 0,
    'url' => 0,
    'especificacoes' => 0,
    'facebook' => 0,
    'fb_post_url' => 0,
    'promocoes' => 0,
    'promocao' => 0,
    'arr' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.19',
  'unifunc' => 'content_544a643fbb63e4_13276272',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_544a643fbb63e4_13276272')) {function content_544a643fbb63e4_13276272($_smarty_tpl) {?><?php if (!is_callable('smarty_function_counter')) include '/home/maria951/public_html/novo/libraries/plugins/function.counter.php';
?><?php echo $_smarty_tpl->getSubTemplate ("header.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 9999, null, array(), 0);?>



<!-- PRODUTO / INFORMAÇÕES -->

<section class="pag-section pag-section-top">
    <div class="container">

        

        <div class="row">
            <div class="col-md-8 col-lg-9">
                <div class="row">

                    

                    <div class="col-sm-5">

                        <div class="produto-img">
                            <a href="#" class="produto-img-lupa fa fa-search"></a>
                            <div id="produto-slider" class="flexslider">
                                <ul class="slides">
                                    <?php echo smarty_function_counter(array('assign'=>'i','start'=>1,'print'=>false),$_smarty_tpl);?>
 
                                    <?php  $_smarty_tpl->tpl_vars['fful'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['fful']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['fotos_full']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['fful']->key => $_smarty_tpl->tpl_vars['fful']->value) {
$_smarty_tpl->tpl_vars['fful']->_loop = true;
?>
                                        <?php if ($_smarty_tpl->tpl_vars['i']->value==1) {?>
                                            <?php $_smarty_tpl->tpl_vars["FOTO_SM"] = new Smarty_variable(((string)$_smarty_tpl->tpl_vars['fful']->value->FOTO_IT), null, 0);?>
                                        <?php }?>
                                        <li>
                                            <a href="/<?php echo $_smarty_tpl->tpl_vars['source']->value;?>
<?php echo $_smarty_tpl->tpl_vars['fful']->value->FOTO_HLG;?>
" class="fancybox-gallery" rel="gallery"><img src="/<?php echo $_smarty_tpl->tpl_vars['source']->value;?>
<?php echo $_smarty_tpl->tpl_vars['fful']->value->FOTO_IT;?>
" alt="<?php echo $_smarty_tpl->tpl_vars['nome']->value;?>
" border="0" title="<?php echo $_smarty_tpl->tpl_vars['nome']->value;?>
" /></a>
                                        </li>
                                    <?php echo smarty_function_counter(array(),$_smarty_tpl);?>

                                    <?php } ?>
                                </ul>
                            </div>
                        </div>
                        <div id="produto-slider-thumbs" class="flexslider">
                            <ul class="slides">
                                
                                <?php  $_smarty_tpl->tpl_vars['fful'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['fful']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['fotos_full']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['fful']->key => $_smarty_tpl->tpl_vars['fful']->value) {
$_smarty_tpl->tpl_vars['fful']->_loop = true;
?>    
                                    <li>
                                        <img src="/<?php echo $_smarty_tpl->tpl_vars['source']->value;?>
<?php echo $_smarty_tpl->tpl_vars['fful']->value->FOTO_SM;?>
" alt="<?php echo $_smarty_tpl->tpl_vars['nome']->value;?>
" border="0" title="<?php echo $_smarty_tpl->tpl_vars['nome']->value;?>
" />
                                    </li>
                                
                                <?php } ?>
                            </ul>
                        </div>
                    </div>

                    

                    <div class="col-sm-7">

                        <h3 class="title-condensed"><?php echo $_smarty_tpl->tpl_vars['nome']->value;?>
</h3>
                        <p><?php echo $_smarty_tpl->tpl_vars['descricao']->value;?>
</p>
                        <hr>
                        <label style="margin-bottom: 15px;">
                            Quantidade: <input type="text" name="quantidade" id="quantidade"  class="form-control" style="width: 42px;text-align: center;padding: 0;" value="1" maxlength="3" />
                        </label>
                        <div>
                        <div class="label-outline label-outline-light">Disponibilidade: <strong><?php if ($_smarty_tpl->tpl_vars['quantidade']->value=="0") {?>Esgotado<?php } else { ?>Em Estoque<?php }?></strong></div>
                        </div>
                        <hr>
                        <h2 class="title-lg"><?php if ($_smarty_tpl->tpl_vars['is_promocao']->value==1) {?><span class="price-through" style="position: relative; top: -2px; color: #9a9a9a; font-size: 14px; font-size: 1.4rem; font-weight: 400; line-height: 1;">R$ <?php echo $_smarty_tpl->tpl_vars['de']->value;?>
</span><?php }?> R$ <?php echo $_smarty_tpl->tpl_vars['preco']->value;?>
</h2>
                        <hr>
                        <?php if ($_smarty_tpl->tpl_vars['quantidade']->value!="0") {?>
                            <button href="#" class="btn btn-primary comprar" data-params="<?php echo $_smarty_tpl->tpl_vars['lista_desejos']->value;?>
" data-id="<?php echo $_smarty_tpl->tpl_vars['produto']->value->CODPRODUTO;?>
" data-img="<?php echo $_smarty_tpl->tpl_vars['FOTO_SM']->value;?>
" data-redirect="/<?php echo $_smarty_tpl->tpl_vars['source']->value;?>
<?php echo $_smarty_tpl->tpl_vars['language']->value;?>
/produtos/checkout/" data-name="<?php echo $_smarty_tpl->tpl_vars['nome']->value;?>
">
                                ADOREI, QUERO COMPRAR
                            </button>
                            <!--
                            <a href="#" class="btn btn-heart fa fa-heart">
                                <span class="fa fa-heart"></span>
                            </a>
                            -->
                            <span class="Loader hide">
                                <img src="/web-files/img/Loader.GIF" alt="Carregando..." title="Carregando..."/>
                            </span>
                        <?php }?>
                    </div>
                </div>

                

                <div class="row">
                    <div class="col-lg-12">
                        
                        <p style="margin: 12px 0 28px;">
                            Compartilhe: 
                            <a href="http://www.facebook.com/sharer.php?u=<?php echo $_smarty_tpl->tpl_vars['site']->value;?>
<?php echo $_smarty_tpl->tpl_vars['language']->value;?>
/<?php echo $_smarty_tpl->tpl_vars['ctgr']->value;?>
/<?php echo $_smarty_tpl->tpl_vars['url_amigavel']->value;?>
?news=s&utm_source=fbBTshare" target="_blank" class="social social-fb fa fa-facebook"></a>
                            <a  href="http://twitter.com/share?text=<?php echo $_smarty_tpl->tpl_vars['titulo']->value;?>
&url=<?php echo $_smarty_tpl->tpl_vars['url']->value;?>
&via=maria_de_barro" target="_blank" target="_blank" class="social social-twitter fa fa-twitter"></a>
                        </p>
                    </div>
                </div>

                

                <div class="row">
                    <div class="col-lg-12">


                        <ul class="nav nav-tabs" role="tablist">
                            <li class="active">
                                <a href="#mais-informacoes" role="tab" data-toggle="tab" >Mais Informações</a>
                            </li>
                            <li>
                                <a href="#comentarios" role="tab" data-toggle="tab" >Comentários</a>
                            </li>
                        </ul>

                        <div class="tab-content">
                            <div class="tab-pane active" id="mais-informacoes">
                                <?php echo $_smarty_tpl->tpl_vars['especificacoes']->value;?>

                            </div>
                            <div class="tab-pane" id="comentarios">
                                <div id="fb-root"></div>
                                <script>
                                    (function (d, s, id) {
                                        var js, fjs = d.getElementsByTagName(s)[0];
                                        if (d.getElementById(id))
                                            return;
                                        js = d.createElement(s);
                                        js.id = id;
                                        js.src = "//connect.facebook.net/pt_BR/sdk.js#xfbml=1&appId=256162091228883&version=v2.0";
                                        fjs.parentNode.insertBefore(js, fjs);
                                    }(document, 'script', 'facebook-jssdk'));
                                </script>
                                <div class="fb-comments" data-width="100%" data-href="<?php echo $_smarty_tpl->tpl_vars['facebook']->value;?>
?href=<?php echo $_smarty_tpl->tpl_vars['fb_post_url']->value;?>
" data-numposts="15" data-colorscheme="light"></div>
                            </div>
                        </div>
                    </div>
                </div>

            </div>

            

            <div class="col-md-4 col-lg-3 produto-sidebar hidden-sm">
                <div class="row">
                    <div class="col-lg-12">
                        <div class="thumbs-slider" style="margin-top: -8px;">
                            <div class="thumbs-slider-header">
                                <div class="thumbs-slider-controls pull-right">
                                    <ul class="nav nav-pills">
                                        <li><a href="#" class="btn btn-light btn-simple fa fa-chevron-left previous"></a></li>
                                        <li><a href="#" class="btn btn-light btn-simple fa fa-chevron-right next"></a></li>
                                    </ul>
                                </div>
                                <h3 class="thumbs-slider-title title-condensed">EM PROMOÇÃO</h3>
                            </div>
                            <ul class="slides">
                                <?php  $_smarty_tpl->tpl_vars['promocao'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['promocao']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['promocoes']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['promocao']->key => $_smarty_tpl->tpl_vars['promocao']->value) {
$_smarty_tpl->tpl_vars['promocao']->_loop = true;
?> 
                                    <li>
                                        <div class="thumbnail">
                                            <div class="thumbnail-img">
                                                <a href="/<?php echo $_smarty_tpl->tpl_vars['source']->value;?>
<?php echo $_smarty_tpl->tpl_vars['language']->value;?>
/<?php echo $_smarty_tpl->tpl_vars['promocao']->value->CATEGORIA;?>
/<?php echo $_smarty_tpl->tpl_vars['promocao']->value->URL_AMIGAVEL;?>
">
                                                    <?php if ($_smarty_tpl->tpl_vars['promocao']->value->IS_NOVO=="1") {?>
                                                        <span class="thumbnail-tag">Novo</span>
                                                    <?php }?>
                                                    <img src="/<?php echo $_smarty_tpl->tpl_vars['source']->value;?>
<?php echo $_smarty_tpl->tpl_vars['promocao']->value->CROP268;?>
" alt="<?php echo $_smarty_tpl->tpl_vars['promocao']->value->NOME;?>
" border="0" title="<?php echo $_smarty_tpl->tpl_vars['promocao']->value->NOME;?>
" class="img-responsive" width="261" height="289"/>
                                                </a>
                                            </div>
                                            <div class="thumbnail-infos">
                                                <a href="/<?php echo $_smarty_tpl->tpl_vars['source']->value;?>
<?php echo $_smarty_tpl->tpl_vars['language']->value;?>
/<?php echo $_smarty_tpl->tpl_vars['promocao']->value->CATEGORIA;?>
/<?php echo $_smarty_tpl->tpl_vars['promocao']->value->URL_AMIGAVEL;?>
">
                                                    <div class="thumbnail-title"><?php if ($_smarty_tpl->tpl_vars['promocao']->value->IS_PROMOCAO==1) {?><span class="price-through">R$ <?php echo $_smarty_tpl->tpl_vars['promocao']->value->DE;?>
</span><?php }?> R$ <?php echo $_smarty_tpl->tpl_vars['promocao']->value->PRECO;?>
</div>
                                                </a>
                                                <a href="/<?php echo $_smarty_tpl->tpl_vars['source']->value;?>
<?php echo $_smarty_tpl->tpl_vars['language']->value;?>
/<?php echo $_smarty_tpl->tpl_vars['promocao']->value->CATEGORIA;?>
/<?php echo $_smarty_tpl->tpl_vars['promocao']->value->URL_AMIGAVEL;?>
">
                                                    <div class="thumbnail-subtitle"><?php echo $_smarty_tpl->tpl_vars['promocao']->value->NOME;?>
</div>
                                                </a>
                                            </div>
                                        </div>
                                    </li>
                                <?php } ?>
                            </ul>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-lg-12">
                        <div class="panel panel-primary">
                            <div class="panel-heading">
                                <span class="panel-title">Wishlist</span>
                            </div>
                            <div class="panel-body">
                                Nenhum produto
                                <hr>
                                <div class="text-right">
                                    <a href="#" class="btn-link">&raquo; Meus Desejos</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- /PRODUTO / INFORMAÇÕES -->
<!-- RELACIONADOS -->

<section class="pag-section">
    <div class="container">
        <div class="row">
            <div class="container">
                <div class="section-title">
                    <h2>
                        <strong>Produtos</strong> Relacionados
                    </h2>
                </div>
            </div>
        </div>
        <div class="row">
            <?php  $_smarty_tpl->tpl_vars['produto'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['produto']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['arr']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['produto']->key => $_smarty_tpl->tpl_vars['produto']->value) {
$_smarty_tpl->tpl_vars['produto']->_loop = true;
?> 
                <div class="col-thumb col-xs-6 col-sm-3">
                    <div class="thumbnail">
                        <div class="thumbnail-img">
                            <a href="/<?php echo $_smarty_tpl->tpl_vars['source']->value;?>
<?php echo $_smarty_tpl->tpl_vars['language']->value;?>
/<?php echo $_smarty_tpl->tpl_vars['produto']->value->CATEGORIA;?>
/<?php echo $_smarty_tpl->tpl_vars['produto']->value->URL_AMIGAVEL;?>
">
                                <?php if ($_smarty_tpl->tpl_vars['produto']->value->IS_NOVO=="1") {?>
                                    <span class="thumbnail-tag">Novo</span>
                                <?php }?>
                                <img src="/<?php echo $_smarty_tpl->tpl_vars['source']->value;?>
<?php echo $_smarty_tpl->tpl_vars['produto']->value->CROP268;?>
" alt="<?php echo $_smarty_tpl->tpl_vars['produto']->value->NOME;?>
" border="0" title="<?php echo $_smarty_tpl->tpl_vars['produto']->value->NOME;?>
" class="img-responsive" width="261" height="289"/>
                            </a>
                        </div>
                        <div class="thumbnail-infos">
                            <div class="row sp1"><div class="col-sm-12 sp2"></div></div>
                            <a href="/<?php echo $_smarty_tpl->tpl_vars['source']->value;?>
<?php echo $_smarty_tpl->tpl_vars['language']->value;?>
/<?php echo $_smarty_tpl->tpl_vars['produto']->value->CATEGORIA;?>
/<?php echo $_smarty_tpl->tpl_vars['produto']->value->URL_AMIGAVEL;?>
">
                                <div class="thumbnail-title"><?php if ($_smarty_tpl->tpl_vars['produto']->value->IS_PROMOCAO==1) {?><span class="price-through">R$ <?php echo $_smarty_tpl->tpl_vars['produto']->value->DE;?>
</span><?php }?> R$ <?php echo $_smarty_tpl->tpl_vars['produto']->value->PRECO;?>
</div>
                                <a href="/<?php echo $_smarty_tpl->tpl_vars['source']->value;?>
<?php echo $_smarty_tpl->tpl_vars['language']->value;?>
/<?php echo $_smarty_tpl->tpl_vars['produto']->value->CATEGORIA;?>
/<?php echo $_smarty_tpl->tpl_vars['produto']->value->URL_AMIGAVEL;?>
">
                                    <div class="thumbnail-subtitle"><?php echo $_smarty_tpl->tpl_vars['produto']->value->NOME;?>
</div>
                                </a>
                                
                        </div>
                    </div>
                </div>
            <?php } ?>
        </div>
    </div>
</section>

<!-- /RELACIONADOS -->

<?php echo $_smarty_tpl->getSubTemplate ("footer.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 9999, null, array(), 0);?>
<?php }} ?>
