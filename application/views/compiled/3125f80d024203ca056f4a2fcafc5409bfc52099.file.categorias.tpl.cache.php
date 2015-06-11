<?php /* Smarty version Smarty-3.1.19, created on 2015-03-23 20:24:43
         compiled from "/home/estil450/public_html/application/views/categorias.tpl" */ ?>
<?php /*%%SmartyHeaderCode:11608466915510768b05e653-97921996%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '3125f80d024203ca056f4a2fcafc5409bfc52099' => 
    array (
      0 => '/home/estil450/public_html/application/views/categorias.tpl',
      1 => 1426115124,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '11608466915510768b05e653-97921996',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'btn_anterior' => 0,
    'paginacao' => 0,
    'total_produto' => 0,
    'pagina' => 0,
    'pgn' => 0,
    'search' => 0,
    'categoria' => 0,
    'language' => 0,
    'sort' => 0,
    'qntdd' => 0,
    'btn_proximo' => 0,
    'page' => 0,
    'arr' => 0,
    'produto' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.19',
  'unifunc' => 'content_5510768b465392_35241930',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5510768b465392_35241930')) {function content_5510768b465392_35241930($_smarty_tpl) {?><?php echo $_smarty_tpl->getSubTemplate ("header.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 9999, null, array(), 0);?>


<style>

    .divisor-dashed {
        display: block;
        border-bottom: dashed 1px #e9e9e9;
        margin: 0 0 15px;
    }

    .theme-default .pagination > li > a, .theme-default .pagination > li > span {
        color: #919191;
        background-color: #e9e9e9;
        border: none;
        font-weight: 400;
        font-size: 13px;
        font-size: 1.3rem;
        border-radius: 2px;
    }

    .theme-default .pagination > li:last-child > a, .theme-default .pagination > li:last-child > span {
        border-radius: 0;
    }

    .theme-default .pagination > li {
        display: inline-block;
        float: left;
        margin-left: 4px;
    }

    .theme-default .pagination > .active > a, .theme-default .pagination > .active > span, .theme-default .pagination > .active > a:hover, .theme-default .pagination > .active > span:hover, .theme-default .pagination > .active > a:focus, .theme-default .pagination > .active > span:focus {
        color: #fff;
        border-color: #8795ae;
        background: #8795ae;
    }

    .theme-default .pagination > .active > a, .theme-default .pagination > .active > span, .theme-default .pagination > .active > a:hover, .theme-default .pagination > .active > span:hover, .theme-default .pagination > .active > a:focus, .theme-default .pagination > .active > span:focus {
        color: #fff;
        border-color: #8795ae;
        background: #8795ae;
    }

</style>

<section class="pag-section">
    <div class="container">

        <div class="row">
            <div class="col col-lg-6 col-md-6">
                <div class="page-controls">
                    <ul class="pagination">
                        <li <?php if ($_smarty_tpl->tpl_vars['btn_anterior']->value=='') {?>class="disabled"<?php }?> ><?php if ($_smarty_tpl->tpl_vars['btn_anterior']->value=='') {?><span>« Anterior</span><?php } else { ?><a href="<?php echo $_smarty_tpl->tpl_vars['btn_anterior']->value;?>
">« Anterior</a><?php }?></li>
                            <?php  $_smarty_tpl->tpl_vars['pgn'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['pgn']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['paginacao']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['pgn']->key => $_smarty_tpl->tpl_vars['pgn']->value) {
$_smarty_tpl->tpl_vars['pgn']->_loop = true;
?>
                                <?php if ($_smarty_tpl->tpl_vars['total_produto']->value!=0) {?>
                                    <?php if ($_smarty_tpl->tpl_vars['pagina']->value==$_smarty_tpl->tpl_vars['pgn']->value) {?>
                                    <li class="active"><a href="#"><?php echo $_smarty_tpl->tpl_vars['pgn']->value;?>
 <span class="sr-only">(atual)</span></a></li>
                                    <?php } else { ?>
                                        <?php if ($_smarty_tpl->tpl_vars['search']->value=='') {?>

                                        <?php if ($_smarty_tpl->tpl_vars['categoria']->value=="geral") {?>
                                            <li><a href="/<?php echo $_smarty_tpl->tpl_vars['language']->value;?>
/nossos-produtos/sort/<?php echo $_smarty_tpl->tpl_vars['sort']->value;?>
/qntdd/<?php echo $_smarty_tpl->tpl_vars['qntdd']->value;?>
/pagina/<?php echo $_smarty_tpl->tpl_vars['pgn']->value;?>
"><?php echo $_smarty_tpl->tpl_vars['pgn']->value;?>
</a></li>
                                            <?php } else { ?>
                                            <li><a href="/<?php echo $_smarty_tpl->tpl_vars['language']->value;?>
/<?php echo $_smarty_tpl->tpl_vars['categoria']->value;?>
/sort/<?php echo $_smarty_tpl->tpl_vars['sort']->value;?>
/qntdd/<?php echo $_smarty_tpl->tpl_vars['qntdd']->value;?>
/pagina/<?php echo $_smarty_tpl->tpl_vars['pgn']->value;?>
"><?php echo $_smarty_tpl->tpl_vars['pgn']->value;?>
</a></li>                                            
                                            <?php }?>         

                                    <?php } else { ?>

                                        <?php if ($_smarty_tpl->tpl_vars['categoria']->value=="geral") {?>
                                            <li><a href="/<?php echo $_smarty_tpl->tpl_vars['language']->value;?>
/nossos-produtos/sort/<?php echo $_smarty_tpl->tpl_vars['sort']->value;?>
/qntdd/<?php echo $_smarty_tpl->tpl_vars['qntdd']->value;?>
/pagina/<?php echo $_smarty_tpl->tpl_vars['pgn']->value;?>
/search/<?php echo $_smarty_tpl->tpl_vars['search']->value;?>
"><?php echo $_smarty_tpl->tpl_vars['pgn']->value;?>
</a></li>
                                            <?php } else { ?>
                                            <li><a href="/<?php echo $_smarty_tpl->tpl_vars['language']->value;?>
/<?php echo $_smarty_tpl->tpl_vars['categoria']->value;?>
/sort/<?php echo $_smarty_tpl->tpl_vars['sort']->value;?>
/qntdd/<?php echo $_smarty_tpl->tpl_vars['qntdd']->value;?>
/pagina/<?php echo $_smarty_tpl->tpl_vars['pgn']->value;?>
/search/<?php echo $_smarty_tpl->tpl_vars['search']->value;?>
"><?php echo $_smarty_tpl->tpl_vars['pgn']->value;?>
</a></li>                                            
                                            <?php }?>

                                    <?php }?>
                                <?php }?>                        
                            <?php }?>                         
                        <?php } ?>

                        

                        <li class="<?php if ($_smarty_tpl->tpl_vars['btn_proximo']->value=='') {?>disabled<?php }?>"><a href="<?php if ($_smarty_tpl->tpl_vars['btn_proximo']->value=='') {?>#<?php } else { ?><?php echo $_smarty_tpl->tpl_vars['btn_proximo']->value;?>
<?php }?>">Próxima »</a></li>
                    </ul>

                </div>
            </div>
            <div class="col col-lg-6 col-md-6 text-right">
                <div class="page-controls">
                    <p></p>
                    <div class="form-inline page-controls-options">
                        <label>Mostrar por: <select name="selectPrductSort" id="selectPrductSort" class="form-control">
                                <option value="">--</option>
                                <option value="mais-novos" <?php if ($_smarty_tpl->tpl_vars['sort']->value=="mais_novos") {?>selected<?php }?>>Mais novos</option>
                                <option value="preco-crescente" <?php if ($_smarty_tpl->tpl_vars['sort']->value=="preco_crescente") {?>selected<?php }?>>Preço: Menor para o maior</option>
                                <option value="preco-decrescente" <?php if ($_smarty_tpl->tpl_vars['sort']->value=="preco_decrescente") {?>selected<?php }?>>Preço: Maior para o menor</option>
                                <option value="nome-crescente" <?php if ($_smarty_tpl->tpl_vars['sort']->value=="nome_crescente") {?>selected<?php }?>>Listar por nome: A para o Z</option>
                                <option value="nome-decrescente" <?php if ($_smarty_tpl->tpl_vars['sort']->value=="nome_decrescente") {?>selected<?php }?>>Listar por nome: Z para o A</option>
                                <option value="quantidade" <?php if ($_smarty_tpl->tpl_vars['sort']->value=="quantidade") {?>selected<?php }?>>Em estoque</option>
                            </select>
                        </label>
                        <?php if ($_smarty_tpl->tpl_vars['categoria']->value=="geral") {?>
                            <?php if ($_smarty_tpl->tpl_vars['search']->value=='') {?>
                                <input type="hidden" name="url" id="url" value="/<?php echo $_smarty_tpl->tpl_vars['language']->value;?>
/nossos-produtos"/>
                            <?php } else { ?>
                                <input type="hidden" name="url" id="url" value="/<?php echo $_smarty_tpl->tpl_vars['language']->value;?>
/nossos-produtos/search/<?php echo $_smarty_tpl->tpl_vars['search']->value;?>
"/>
                            <?php }?>    
                        <?php } else { ?>
                            <input type="hidden" name="url" id="url" value="/<?php echo $_smarty_tpl->tpl_vars['language']->value;?>
/<?php echo $_smarty_tpl->tpl_vars['categoria']->value;?>
"/>
                        <?php }?>
                        <input type="hidden" name="pagina" id="pagina" value="<?php if ($_smarty_tpl->tpl_vars['pagina']->value!='') {?><?php echo $_smarty_tpl->tpl_vars['pagina']->value;?>
<?php }?>"/>
                        <input type="hidden" name="qntdd_produtos" id="qntdd_produtos" value="<?php if ($_smarty_tpl->tpl_vars['qntdd']->value!='') {?><?php echo $_smarty_tpl->tpl_vars['qntdd']->value;?>
<?php }?>"/>
                    </div>
                </div>
            </div>
            <div class="col col-lg-12 col-md-12 divisor-dashed"></div>        
        </div>

        <div class="row">
            <div class="col-lg-12 section-title">
                <h2 class="title"><?php if ($_smarty_tpl->tpl_vars['page']->value=="junior") {?>Junior<?php } else { ?><?php if ($_smarty_tpl->tpl_vars['page']->value=="index") {?>Conheça a Estilo Carioca<?php } else { ?>Nilton Santos<?php }?><?php }?></h2>
                <p class="subtitle">Produtos</p>
            </div>
        </div>            

        <div class="row">

            <?php  $_smarty_tpl->tpl_vars['produto'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['produto']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['arr']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['produto']->key => $_smarty_tpl->tpl_vars['produto']->value) {
$_smarty_tpl->tpl_vars['produto']->_loop = true;
?>
                <?php if ($_smarty_tpl->tpl_vars['produto']->value->CODPRODUTO!='') {?>
                    <div class="col-xs-6 col-sm-3" style="margin-bottom: 30px;">
                        <div class="thumb">
                            <div class="thumb-img">
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
                                        <p class="name"><?php if ($_smarty_tpl->tpl_vars['produto']->value->CATEGORIA=="junior") {?>Junior<?php } else { ?>Nilton Santos<?php }?><br/><span style="font-size: 18px !important;"><?php echo $_smarty_tpl->tpl_vars['produto']->value->NOME;?>
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

        <div class="row"  style="margin-top: 6%;">
            <div class="col col-lg-12 col-md-12 divisor-dashed"></div>
            <div class="col col-lg-6 col-md-6">
                <div class="page-controls">
                    <ul class="pagination">
                        <li <?php if ($_smarty_tpl->tpl_vars['btn_anterior']->value=='') {?>class="disabled"<?php }?> ><?php if ($_smarty_tpl->tpl_vars['btn_anterior']->value=='') {?><span>« Anterior</span><?php } else { ?><a href="<?php echo $_smarty_tpl->tpl_vars['btn_anterior']->value;?>
">« Anterior</a><?php }?></li>
                            <?php  $_smarty_tpl->tpl_vars['pgn'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['pgn']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['paginacao']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['pgn']->key => $_smarty_tpl->tpl_vars['pgn']->value) {
$_smarty_tpl->tpl_vars['pgn']->_loop = true;
?>
                                <?php if ($_smarty_tpl->tpl_vars['total_produto']->value!=0) {?>
                                    <?php if ($_smarty_tpl->tpl_vars['pagina']->value==$_smarty_tpl->tpl_vars['pgn']->value) {?>
                                    <li class="active"><a href="#"><?php echo $_smarty_tpl->tpl_vars['pgn']->value;?>
 <span class="sr-only">(atual)</span></a></li>
                                    <?php } else { ?>
                                        <?php if ($_smarty_tpl->tpl_vars['search']->value=='') {?>

                                        <?php if ($_smarty_tpl->tpl_vars['categoria']->value=="geral") {?>
                                            <li><a href="/<?php echo $_smarty_tpl->tpl_vars['language']->value;?>
/nossos-produtos/sort/<?php echo $_smarty_tpl->tpl_vars['sort']->value;?>
/qntdd/<?php echo $_smarty_tpl->tpl_vars['qntdd']->value;?>
/pagina/<?php echo $_smarty_tpl->tpl_vars['pgn']->value;?>
"><?php echo $_smarty_tpl->tpl_vars['pgn']->value;?>
</a></li>
                                            <?php } else { ?>
                                            <li><a href="/<?php echo $_smarty_tpl->tpl_vars['language']->value;?>
/<?php echo $_smarty_tpl->tpl_vars['categoria']->value;?>
/sort/<?php echo $_smarty_tpl->tpl_vars['sort']->value;?>
/qntdd/<?php echo $_smarty_tpl->tpl_vars['qntdd']->value;?>
/pagina/<?php echo $_smarty_tpl->tpl_vars['pgn']->value;?>
"><?php echo $_smarty_tpl->tpl_vars['pgn']->value;?>
</a></li>                                            
                                            <?php }?>         

                                    <?php } else { ?>

                                        <?php if ($_smarty_tpl->tpl_vars['categoria']->value=="geral") {?>
                                            <li><a href="/<?php echo $_smarty_tpl->tpl_vars['language']->value;?>
/nossos-produtos/sort/<?php echo $_smarty_tpl->tpl_vars['sort']->value;?>
/qntdd/<?php echo $_smarty_tpl->tpl_vars['qntdd']->value;?>
/pagina/<?php echo $_smarty_tpl->tpl_vars['pgn']->value;?>
/search/<?php echo $_smarty_tpl->tpl_vars['search']->value;?>
"><?php echo $_smarty_tpl->tpl_vars['pgn']->value;?>
</a></li>
                                            <?php } else { ?>
                                            <li><a href="/<?php echo $_smarty_tpl->tpl_vars['language']->value;?>
/<?php echo $_smarty_tpl->tpl_vars['categoria']->value;?>
/sort/<?php echo $_smarty_tpl->tpl_vars['sort']->value;?>
/qntdd/<?php echo $_smarty_tpl->tpl_vars['qntdd']->value;?>
/pagina/<?php echo $_smarty_tpl->tpl_vars['pgn']->value;?>
/search/<?php echo $_smarty_tpl->tpl_vars['search']->value;?>
"><?php echo $_smarty_tpl->tpl_vars['pgn']->value;?>
</a></li>                                            
                                            <?php }?>

                                    <?php }?>                                    
                                <?php }?>                        
                            <?php }?>                         
                        <?php } ?>

                        <li class="<?php if ($_smarty_tpl->tpl_vars['btn_proximo']->value=='') {?>disabled<?php }?>"><a href="<?php if ($_smarty_tpl->tpl_vars['btn_proximo']->value=='') {?>#<?php } else { ?><?php echo $_smarty_tpl->tpl_vars['btn_proximo']->value;?>
<?php }?>">Próxima »</a></li>
                    </ul>
                </div>
            </div>
            <div class="col col-lg-6 col-md-6 text-right">
                <div class="page-controls">
                    <div class="form-inline page-controls-options">
                        <p></p>
                        <label>Mostrar por: <select name="selectPrductSort_2" id="selectPrductSort_2" class="form-control">
                                <option value="">--</option>
                                <option value="mais_novos" <?php if ($_smarty_tpl->tpl_vars['sort']->value=="mais_novos") {?>selected<?php }?>>Mais novos</option>
                                <option value="preco-crescente" <?php if ($_smarty_tpl->tpl_vars['sort']->value=="preco_crescente") {?>selected<?php }?>>Preço: Menor para o maior</option>
                                <option value="preco-decrescente" <?php if ($_smarty_tpl->tpl_vars['sort']->value=="preco_decrescente") {?>selected<?php }?>>Preço: Maior para o menor</option>
                                <option value="nome-crescente" <?php if ($_smarty_tpl->tpl_vars['sort']->value=="nome_crescente") {?>selected<?php }?>>Listar por nome: A para o Z</option>
                                <option value="nome-decrescente" <?php if ($_smarty_tpl->tpl_vars['sort']->value=="nome_decrescente") {?>selected<?php }?>>Listar por nome: Z para o A</option>
                                <option value="quantidade" <?php if ($_smarty_tpl->tpl_vars['sort']->value=="quantidade") {?>selected<?php }?>>Em estoque</option>
                            </select>
                        </label>


                        <?php if ($_smarty_tpl->tpl_vars['categoria']->value=="geral") {?>
                            <?php if ($_smarty_tpl->tpl_vars['search']->value=='') {?>
                                <input type="hidden" name="url" id="url" value="/<?php echo $_smarty_tpl->tpl_vars['language']->value;?>
/nossos-produtos"/>
                            <?php } else { ?>
                                <input type="hidden" name="url" id="url" value="/<?php echo $_smarty_tpl->tpl_vars['language']->value;?>
/nossos-produtos/search/<?php echo $_smarty_tpl->tpl_vars['search']->value;?>
"/>
                            <?php }?>    
                        <?php } else { ?>
                            <input type="hidden" name="url" id="url" value="/<?php echo $_smarty_tpl->tpl_vars['language']->value;?>
/<?php echo $_smarty_tpl->tpl_vars['categoria']->value;?>
"/>
                        <?php }?>

                        <input type="hidden" name="pagina" id="pagina" value="<?php if ($_smarty_tpl->tpl_vars['pagina']->value!='') {?><?php echo $_smarty_tpl->tpl_vars['pagina']->value;?>
<?php }?>"/>
                    </div>
                </div>
            </div>
        </div>





    </div>
</section>

<?php echo $_smarty_tpl->getSubTemplate ("footer.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 9999, null, array(), 0);?>
<?php }} ?>
