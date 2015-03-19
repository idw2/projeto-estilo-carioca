<?php /* Smarty version Smarty-3.1.19, created on 2015-03-18 18:49:33
         compiled from "/home/estil450/public_html/application/views/index.tpl" */ ?>
<?php /*%%SmartyHeaderCode:15919278075509c8bd3428c9-59542800%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'd44edcaa04bb72cc7a0b1e7859a0a84b97fdd502' => 
    array (
      0 => '/home/estil450/public_html/application/views/index.tpl',
      1 => 1425677667,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '15919278075509c8bd3428c9-59542800',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'web_files' => 0,
    'language' => 0,
    'arr' => 0,
    'produto' => 0,
    'arr_mais_vendidos' => 0,
    'arr_promocoes' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.19',
  'unifunc' => 'content_5509c8bd5e5ed3_07089284',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5509c8bd5e5ed3_07089284')) {function content_5509c8bd5e5ed3_07089284($_smarty_tpl) {?><?php echo $_smarty_tpl->getSubTemplate ("header.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 9999, null, array(), 0);?>



<!--[if lt IE 9]>
    <script type="text/javascript">
        alert('Atenção: Você está usando um navegador obsoleto!');
    </script>
<![endif]-->

<!-- SLIDER  -->
<!--
<section class="container-slider">
    <div id="slider">
        <ul>

            <li data-transition="fade" data-slotamount="7">
                <img src="<?php echo $_smarty_tpl->tpl_vars['web_files']->value;?>
/img/slider/slide_03.jpg" alt="-" />
                <div class="caption lfl str" data-x="30" data-hoffset="0" data-y="120" data-speed="500" data-start="500" data-easing="easeOutExpo">
                    <img src="<?php echo $_smarty_tpl->tpl_vars['web_files']->value;?>
/img/slider/slider4/banner-liqui-novo_08.png" alt="-" width="350" />
                </div>
                <div class="caption lfr str" data-x="900" data-hoffset="0" data-y="0" data-speed="500" data-start="700" data-easing="easeOutExpo">
                    <img src="<?php echo $_smarty_tpl->tpl_vars['web_files']->value;?>
/img/slider/slider4/banner-liqui-novo_05.png" alt="-" width="250" />
                </div>
                <div class="caption lft str" data-x="center" data-hoffset="0" data-y="30" data-speed="500" data-start="900" data-easing="easeOutExpo">
                    <img src="<?php echo $_smarty_tpl->tpl_vars['web_files']->value;?>
/img/slider/slider4/banner-liqui-novo_03.png"  width="350" />
                </div>
            </li>

            <li data-transition="fade" data-slotamount="7">
                <img src="<?php echo $_smarty_tpl->tpl_vars['web_files']->value;?>
/img/slider/slide_03.jpg" alt="-" />
                <div class="caption lfl str" data-x="30" data-hoffset="0" data-y="110" data-speed="500" data-start="500" data-easing="easeOutExpo">
                    <img src="<?php echo $_smarty_tpl->tpl_vars['web_files']->value;?>
/img/slider/slide_03/img-3.png" alt="-" width="380" />
                </div>
                <div class="caption lfr str" data-x="900" data-hoffset="-80" data-y="0" data-speed="500" data-start="700" data-easing="easeOutExpo">
                    <img src="<?php echo $_smarty_tpl->tpl_vars['web_files']->value;?>
/img/slider/slide_03/img-1.png" alt="-" width="300" />
                </div>
                <div class="caption lft str" data-x="center" data-hoffset="0" data-y="0" data-speed="500" data-start="900" data-easing="easeOutExpo">
                    <img src="<?php echo $_smarty_tpl->tpl_vars['web_files']->value;?>
/img/slider/slide_03/img-2.png"  width="250" />
                </div>
            </li>

            <li data-transition="fade" data-slotamount="7">
                <img src="<?php echo $_smarty_tpl->tpl_vars['web_files']->value;?>
/img/slider/slide_03.jpg" alt="-" />
                <div class="caption lfl str" data-x="30" data-hoffset="-30" data-y="0" data-speed="500" data-start="500" data-easing="easeOutExpo">
                    <img src="<?php echo $_smarty_tpl->tpl_vars['web_files']->value;?>
/img/slider/slide_03-item-1.png" alt="-" width="300" />
                </div>
                <div class="caption lfr str" data-x="900" data-hoffset="-30" data-y="0" data-speed="500" data-start="700" data-easing="easeOutExpo">
                    <img src="<?php echo $_smarty_tpl->tpl_vars['web_files']->value;?>
/img/slider/slide_03-item-2.png" alt="-" width="250" />
                </div>
                <div class="caption lft str" data-x="center" data-hoffset="0" data-y="80" data-speed="500" data-start="900" data-easing="easeOutExpo">
                    <img src="<?php echo $_smarty_tpl->tpl_vars['web_files']->value;?>
/img/slider/slide_03-item-3.png"  width="500" />
                </div>
                <div class="caption lfl str" data-x="center" data-hoffset="-30" data-y="290" data-speed="500" data-start="200" data-easing="easeOutExpo">
                    <img src="<?php echo $_smarty_tpl->tpl_vars['web_files']->value;?>
/img/slider/slide_03-item-4.png" alt="-" width="800" />
                </div>
            </li>



        </ul>	      
    </div>
</section>
-->
<!-- /SLIDER  -->
<!-- 3 PRODUTOS  -->
<!--
<section class="pag-section hide-mobile">
    <div class="container">
        <div class="row">
            <div class="col-sm-4">
                <img src="<?php echo $_smarty_tpl->tpl_vars['web_files']->value;?>
/img/b-1.png" alt="" border="0" title="" class="img-responsive" style="width:360px;height:185px;" />
            </div>
            <div class="col-sm-4">
                <img src="<?php echo $_smarty_tpl->tpl_vars['web_files']->value;?>
/img/slider/banner-menor-central2.jpg" alt="Frete grátis nas compras acima de R$149,00" border="0" title="" class="img-responsive" />
            </div>
            <div class="col-sm-4">
                <img src="<?php echo $_smarty_tpl->tpl_vars['web_files']->value;?>
/img/b-2.png" alt="" border="0" title="" class="img-responsive" style="width:360px;height:185px;" />
            </div>
        </div>
    </div>
</section>
-->
<!-- /3 PRODUTOS  -->
<!-- RECEM CHEGADOS  -->

<section class="hero ">
    <div class="container ">
        <div class="row">
            <div class="col-sm-6">
                <div class="panel">
                    <h2>CONHEÇA A ESTILO CARIOCA</h2>
                    <p style='font-family: "Roboto Condensed", Helvetica, sans-serif; font-weight: 300'>Andar para frente é fundamental na vida, traz mudanças, novidades e acompanha evolução. E, como bom carioca, ESTILO CARIOCA não se opõem a esse pensamento, nem tão pouco a evolução. </p>
                    <div class="hr"></div>
                    <p>
                        <a style="display: inline-block; max-width: 42%;" href='/<?php echo $_smarty_tpl->tpl_vars['language']->value;?>
/nossos-produtos' class="btn btn-lg">Compre agora</a>
                    </p>
                </div>
            </div>
            <div class="col-sm-6">
                <img src="http://www.estilocarioca.com.br/application/template/estilocarioca/assets/img/hero.png" width="500">
            </div>
        </div>
    </div>
    <a href="" data-target=".section" class="scroll-down"></a>
</section>

<section class="section">
    <div class="container ">
        <div class="row ">
            <div class="col-lg-12 ">
                <div class="section-title2 ">
                    <h2 class="title">FIQUE POR DENTRO DAS NOVIDADES</h2>
                    <p class="subtitle">Preencha com seu nome e email para receber nossa Newsletter.</p>
                </div>
            </div>
        </div>
       
        <form action="" method="post"  novalidate="" class="ajax-form">
            <div class="row ">
                <div class="col-sm-4  ">
                    <input type="text" placeholder="Seu Nome" name="nome" id="nome_newsletter_2" class="form-control" required>
                </div>
                <div class="col-sm-4 ">
                    <input type="email" placeholder="Seu Email" name="email" id="email_newsletter_1" class="form-control" required>
                </div>
                <div class="col-sm-4 ">
                    <button type="submit" class="btn btn-default btn-block" style="width: 100%; border-radius: 0;">Enviar</button>
                </div>
                <div id="erro_newsletter_1"> </div>
            </div>
        </form>
    </div>
</section>

<div class="container "><hr></div>

<section class="section">
    <div class="container ">
        <div class="row">
            <div class="col-lg-12">
                <div class="section-title2">
                    <h2 class="title">Nossos Produtos</h2>
                    <p class="subtitle">COMPRE AGORA</p>
                </div>
            </div>
        </div>
        <div class="row ">
            <?php  $_smarty_tpl->tpl_vars['produto'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['produto']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['arr']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['produto']->key => $_smarty_tpl->tpl_vars['produto']->value) {
$_smarty_tpl->tpl_vars['produto']->_loop = true;
?>
                <?php if ($_smarty_tpl->tpl_vars['produto']->value->CODPRODUTO!='') {?>
                <div class="col-sm-3">
                    <div class="thumb">
                        <div class="thumb-img ">
                            <a href="/<?php echo $_smarty_tpl->tpl_vars['language']->value;?>
/<?php echo $_smarty_tpl->tpl_vars['produto']->value->CATEGORIA;?>
/<?php echo $_smarty_tpl->tpl_vars['produto']->value->URL_AMIGAVEL;?>
">
                            <img src="<?php echo $_smarty_tpl->tpl_vars['produto']->value->CROP268;?>
" alt="<?php echo $_smarty_tpl->tpl_vars['produto']->value->NOME;?>
" title="<?php echo $_smarty_tpl->tpl_vars['produto']->value->NOME;?>
" width="312" height="312">
                            </a>
                        </div>
                        <div class="thumb-holder">
                            <div class="thumb-holder-out">
                                <div class="thumb-holder-in">
                                    <h2 class="price">R$ <?php echo $_smarty_tpl->tpl_vars['produto']->value->PRECO;?>
</h2>
                                    <p class="name"><?php if ($_smarty_tpl->tpl_vars['produto']->value->CATEGORIA) {?>Junior<?php } else { ?>Nilton Santos<?php }?><br/><span style="font-size: 18px !important;"><?php echo $_smarty_tpl->tpl_vars['produto']->value->NOME;?>
</span></p>
                                    <a href="/<?php echo $_smarty_tpl->tpl_vars['language']->value;?>
/<?php echo $_smarty_tpl->tpl_vars['produto']->value->CATEGORIA;?>
/<?php echo $_smarty_tpl->tpl_vars['produto']->value->URL_AMIGAVEL;?>
" class="btn btn-default btn-buy">COMPRAR</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
             <?php }?>
            <?php } ?>
        </div>
    </div>
</section>
        <div style="margin-bottom: 5%;"></div>
        <!--
<section class="pag-section">
    <div class="container">

        <div class="row">
            <div class="col-lg-12">
                <div class="section-title">
                    <h2>
                        <a href="/<?php echo $_smarty_tpl->tpl_vars['language']->value;?>
/novos-produtos">
                            <strong>Novos</strong> Produtos
                        </a>
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
                <?php if ($_smarty_tpl->tpl_vars['produto']->value->CODPRODUTO!='') {?>
                    <div class="col-thumb col-xs-6 col-sm-3">
                        <div class="thumbnail">
                            <div class="thumbnail-img">
                                <a href="/<?php echo $_smarty_tpl->tpl_vars['language']->value;?>
/<?php echo $_smarty_tpl->tpl_vars['produto']->value->CATEGORIA;?>
/<?php echo $_smarty_tpl->tpl_vars['produto']->value->URL_AMIGAVEL;?>
">
                                    <?php if ($_smarty_tpl->tpl_vars['produto']->value->IS_NOVO=="1") {?>
                                        <span class="thumbnail-tag">Novo</span>
                                    <?php }?>
                                    <img src="<?php echo $_smarty_tpl->tpl_vars['produto']->value->CROP268;?>
" alt="<?php echo $_smarty_tpl->tpl_vars['produto']->value->NOME;?>
" title="<?php echo $_smarty_tpl->tpl_vars['produto']->value->NOME;?>
"/>
                                </a>
                            </div>
                            <div class="thumbnail-infos">
                                <a href="/<?php echo $_smarty_tpl->tpl_vars['language']->value;?>
/<?php echo $_smarty_tpl->tpl_vars['produto']->value->CATEGORIA;?>
/<?php echo $_smarty_tpl->tpl_vars['produto']->value->URL_AMIGAVEL;?>
">
                                    <div class="thumbnail-title"><?php if ($_smarty_tpl->tpl_vars['produto']->value->IS_PROMOCAO==1) {?><span class="price-through">R$ <?php echo $_smarty_tpl->tpl_vars['produto']->value->DE;?>
</span><?php }?> R$ <?php echo $_smarty_tpl->tpl_vars['produto']->value->PRECO;?>
</div>
                                </a>
                                <a href="/<?php echo $_smarty_tpl->tpl_vars['language']->value;?>
/<?php echo $_smarty_tpl->tpl_vars['produto']->value->CATEGORIA;?>
/<?php echo $_smarty_tpl->tpl_vars['produto']->value->URL_AMIGAVEL;?>
">
                                    <div class="thumbnail-subtitle"><?php echo $_smarty_tpl->tpl_vars['produto']->value->NOME;?>
</div>
                                </a>
                                
                                <span class="seis-vezes"><b>6x</b> de <b>R$ <?php echo $_smarty_tpl->tpl_vars['produto']->value->PRECO_6;?>
</b></span>
                                
                                
                            </div>
                        </div>
                    </div>
                <?php }?>
            <?php } ?>
        </div>
        
    </div>
</section>

<!-- /RECEM CHEGADOS  -->
<!-- MAIS VENDIDOS  -->
<!--
<section class="pag-section">
    <div class="container">

        <div class="row">
            <div class="col-lg-12">
                <div class="section-title">
                    <h2>
                        <a href="/<?php echo $_smarty_tpl->tpl_vars['language']->value;?>
/mais-vendidos">
                            <strong>Mais</strong> Vendidos
                        </a>
                    </h2>
                </div>
            </div>
        </div>

        <div class="row">

            <?php  $_smarty_tpl->tpl_vars['produto'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['produto']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['arr_mais_vendidos']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['produto']->key => $_smarty_tpl->tpl_vars['produto']->value) {
$_smarty_tpl->tpl_vars['produto']->_loop = true;
?>
                <?php if ($_smarty_tpl->tpl_vars['produto']->value->CODPRODUTO!='') {?>
                    <div class="col-thumb col-xs-6 col-sm-3">
                        <div class="thumbnail">
                            <div class="thumbnail-img">
                                <a href="/<?php echo $_smarty_tpl->tpl_vars['language']->value;?>
/<?php echo $_smarty_tpl->tpl_vars['produto']->value->CATEGORIA;?>
/<?php echo $_smarty_tpl->tpl_vars['produto']->value->URL_AMIGAVEL;?>
">
                                    <?php if ($_smarty_tpl->tpl_vars['produto']->value->IS_NOVO=="1") {?>
                                        <span class="thumbnail-tag">Novo</span>
                                    <?php }?>
                                    <img src="<?php echo $_smarty_tpl->tpl_vars['produto']->value->CROP268;?>
" alt="<?php echo $_smarty_tpl->tpl_vars['produto']->value->NOME;?>
" border="0" title="<?php echo $_smarty_tpl->tpl_vars['produto']->value->NOME;?>
" class="img-responsive" width="261" height="289"/>
                                </a>
                            </div>
                            <div class="thumbnail-infos">
                                <a href="/<?php echo $_smarty_tpl->tpl_vars['language']->value;?>
/<?php echo $_smarty_tpl->tpl_vars['produto']->value->CATEGORIA;?>
/<?php echo $_smarty_tpl->tpl_vars['produto']->value->URL_AMIGAVEL;?>
">
                                    <div class="thumbnail-title"><?php if ($_smarty_tpl->tpl_vars['produto']->value->IS_PROMOCAO==1) {?><span class="price-through">R$ <?php echo $_smarty_tpl->tpl_vars['produto']->value->DE;?>
</span><?php }?> R$ <?php echo $_smarty_tpl->tpl_vars['produto']->value->PRECO;?>
</div>
                                </a>
                                <a href="/<?php echo $_smarty_tpl->tpl_vars['language']->value;?>
/<?php echo $_smarty_tpl->tpl_vars['produto']->value->CATEGORIA;?>
/<?php echo $_smarty_tpl->tpl_vars['produto']->value->URL_AMIGAVEL;?>
">
                                    <div class="thumbnail-subtitle"><?php echo $_smarty_tpl->tpl_vars['produto']->value->NOME;?>
</div>
                                </a>
                                
                                <span class="seis-vezes"><b>6x</b> de <b>R$ <?php echo $_smarty_tpl->tpl_vars['produto']->value->PRECO_6;?>
</b></span>
                                
                            </div>
                        </div>
                    </div>
                <?php }?>
            <?php } ?>


        </div>
    </div>
</section>

<!-- /MAIS VENDIDOS  -->
<!-- EM PROMOCÃO  -->
<!--
<section class="pag-section">
    <div class="container">

        <div class="row">
            <div class="col-lg-12">
                <div class="section-title">
                    <h2>
                        <a href="/<?php echo $_smarty_tpl->tpl_vars['language']->value;?>
/promocoes">
                            <strong>Itens</strong> em Promoção
                        </a>
                    </h2>
                </div>
            </div>
        </div>

        <div class="row">

            <?php  $_smarty_tpl->tpl_vars['produto'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['produto']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['arr_promocoes']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['produto']->key => $_smarty_tpl->tpl_vars['produto']->value) {
$_smarty_tpl->tpl_vars['produto']->_loop = true;
?>
                <?php if ($_smarty_tpl->tpl_vars['produto']->value->CODPRODUTO!='') {?>
                    <div class="col-thumb col-xs-6 col-sm-3">
                        <div class="thumbnail">
                            <div class="thumbnail-img">
                                <a href="/<?php echo $_smarty_tpl->tpl_vars['language']->value;?>
/<?php echo $_smarty_tpl->tpl_vars['produto']->value->CATEGORIA;?>
/<?php echo $_smarty_tpl->tpl_vars['produto']->value->URL_AMIGAVEL;?>
">
                                    <?php if ($_smarty_tpl->tpl_vars['produto']->value->IS_NOVO=="1") {?>
                                        <span class="thumbnail-tag">Novo</span>
                                    <?php }?>
                                    <img src="<?php echo $_smarty_tpl->tpl_vars['produto']->value->CROP268;?>
" alt="<?php echo $_smarty_tpl->tpl_vars['produto']->value->NOME;?>
" border="0" title="<?php echo $_smarty_tpl->tpl_vars['produto']->value->NOME;?>
" class="img-responsive" width="261" height="289"/>
                                </a>
                            </div>
                            <div class="thumbnail-infos">
                                <a href="/<?php echo $_smarty_tpl->tpl_vars['language']->value;?>
/<?php echo $_smarty_tpl->tpl_vars['produto']->value->CATEGORIA;?>
/<?php echo $_smarty_tpl->tpl_vars['produto']->value->URL_AMIGAVEL;?>
">
                                    <div class="thumbnail-title"><?php if ($_smarty_tpl->tpl_vars['produto']->value->IS_PROMOCAO==1) {?><span class="price-through">R$ <?php echo $_smarty_tpl->tpl_vars['produto']->value->DE;?>
</span><?php }?> R$ <?php echo $_smarty_tpl->tpl_vars['produto']->value->PRECO;?>
</div>
                                </a>
                                <a href="/<?php echo $_smarty_tpl->tpl_vars['language']->value;?>
/<?php echo $_smarty_tpl->tpl_vars['produto']->value->CATEGORIA;?>
/<?php echo $_smarty_tpl->tpl_vars['produto']->value->URL_AMIGAVEL;?>
">
                                    <div class="thumbnail-subtitle"><?php echo $_smarty_tpl->tpl_vars['produto']->value->NOME;?>
</div>
                                </a>
                                
                                <span class="seis-vezes"><b>6x</b> de <b>R$ <?php echo $_smarty_tpl->tpl_vars['produto']->value->PRECO_6;?>
</b></span>
                                
                            </div>
                        </div>
                    </div>
                <?php }?>
            <?php } ?>


        </div>
    </div>
</section>

<!-- /EM PROMOCÃO  -->
<!-- INSTAGRAM  -->
<!--
<section class="pag-section hide-mobile">
    <div class="container">
        <div class="row">
            <div class="col-lg-12">

                <div class="section-title">
                    <h2>
                        <a href="#">
                            <strong>Instagram da</strong> Maria
                        </a>
                    </h2>
                </div>

            </div>
        </div>                        
        <div id="instagram" data-type="liked" class="pongstagrm row"></div>  
    </div>
</section>

<!-- /INSTAGRAM  -->

<?php echo $_smarty_tpl->getSubTemplate ("footer.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 9999, null, array(), 0);?>
<?php }} ?>
