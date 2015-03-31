<?php /* Smarty version Smarty-3.1.19, created on 2014-11-10 13:18:21
         compiled from "/home/maria951/public_html/homolog/application/views/index.tpl" */ ?>
<?php /*%%SmartyHeaderCode:1512640185460d73dcee126-97451008%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '5dbdad2f772412a4f461f40a42d7e8f9f2e81a04' => 
    array (
      0 => '/home/maria951/public_html/homolog/application/views/index.tpl',
      1 => 1415211359,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '1512640185460d73dcee126-97451008',
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
  'unifunc' => 'content_5460d73e009157_00999460',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5460d73e009157_00999460')) {function content_5460d73e009157_00999460($_smarty_tpl) {?><?php echo $_smarty_tpl->getSubTemplate ("header.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 9999, null, array(), 0);?>


<!-- SLIDER  -->

<section class="container-slider">
    <div id="slider">
        <ul>

            <li data-transition="fade" data-slotamount="7">
                <img src="<?php echo $_smarty_tpl->tpl_vars['web_files']->value;?>
/img/slider/slide_03.jpg" alt="-" />
                <div class="caption lfl str" data-x="-50" data-hoffset="0" data-y="120" data-speed="500" data-start="500" data-easing="easeOutExpo">
                    <img src="<?php echo $_smarty_tpl->tpl_vars['web_files']->value;?>
/img/slider/slider4/banner-liqui-novo_08.png" alt="-" width="350" />
                </div>
                <div class="caption lfr str" data-x="right" data-hoffset="0" data-y="0" data-speed="500" data-start="700" data-easing="easeOutExpo">
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
                <div class="caption lfl str" data-x="-80" data-hoffset="0" data-y="110" data-speed="500" data-start="500" data-easing="easeOutExpo">
                    <img src="<?php echo $_smarty_tpl->tpl_vars['web_files']->value;?>
/img/slider/slide_03/img-3.png" alt="-" width="380" />
                </div>
                <div class="caption lfr str" data-x="right" data-hoffset="-80" data-y="0" data-speed="500" data-start="700" data-easing="easeOutExpo">
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
                <div class="caption lfl str" data-x="-80" data-hoffset="-30" data-y="0" data-speed="500" data-start="500" data-easing="easeOutExpo">
                    <img src="<?php echo $_smarty_tpl->tpl_vars['web_files']->value;?>
/img/slider/slide_03-item-1.png" alt="-" width="300" />
                </div>
                <div class="caption lfr str" data-x="right" data-hoffset="-30" data-y="0" data-speed="500" data-start="700" data-easing="easeOutExpo">
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

<!-- /SLIDER  -->
<!-- 3 PRODUTOS  -->

<section class="pag-section hide-mobile">
    <div class="container">
        <div class="row">
            <div class="col-sm-4">
                <a href="/<?php echo $_smarty_tpl->tpl_vars['language']->value;?>
/"><img src="<?php echo $_smarty_tpl->tpl_vars['web_files']->value;?>
/img/b-0.png" alt="" border="0" title="" class="img-responsive" /></a>
            </div>
            <div class="col-sm-4">
                <a href="/<?php echo $_smarty_tpl->tpl_vars['language']->value;?>
/"><img src="<?php echo $_smarty_tpl->tpl_vars['web_files']->value;?>
/img/b-1.png" alt="" border="0" title="" class="img-responsive" /></a>
            </div>
            <div class="col-sm-4">
                <a href="/<?php echo $_smarty_tpl->tpl_vars['language']->value;?>
/"><img src="<?php echo $_smarty_tpl->tpl_vars['web_files']->value;?>
/img/b-2.png" alt="" border="0" title="" class="img-responsive" /></a>
            </div>
        </div>
    </div>
</section>

<!-- /3 PRODUTOS  -->
<!-- RECEM CHEGADOS  -->

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
