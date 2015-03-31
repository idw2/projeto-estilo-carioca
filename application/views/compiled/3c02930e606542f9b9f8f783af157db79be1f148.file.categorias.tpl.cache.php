<?php /* Smarty version Smarty-3.1.19, created on 2014-11-10 13:14:21
         compiled from "/home/maria951/public_html/homolog/application/views/categorias.tpl" */ ?>
<?php /*%%SmartyHeaderCode:7651215485460d64d205548-61034354%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '3c02930e606542f9b9f8f783af157db79be1f148' => 
    array (
      0 => '/home/maria951/public_html/homolog/application/views/categorias.tpl',
      1 => 1415213179,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '7651215485460d64d205548-61034354',
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
    'arr' => 0,
    'produto' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.19',
  'unifunc' => 'content_5460d64deb2499_88338553',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5460d64deb2499_88338553')) {function content_5460d64deb2499_88338553($_smarty_tpl) {?><?php echo $_smarty_tpl->getSubTemplate ("header.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 9999, null, array(), 0);?>


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
/novos-produtos/sort/<?php echo $_smarty_tpl->tpl_vars['sort']->value;?>
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
/novos-produtos/sort/<?php echo $_smarty_tpl->tpl_vars['sort']->value;?>
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
/novos-produtos"/>
                            <?php } else { ?>
                                <input type="hidden" name="url" id="url" value="/<?php echo $_smarty_tpl->tpl_vars['language']->value;?>
/novos-produtos/search/<?php echo $_smarty_tpl->tpl_vars['search']->value;?>
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
                <div class="divisor-dashed"></div>
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
                                    <?php if ($_smarty_tpl->tpl_vars['produto']->value->IS_NOVO==1) {?>
                                        <span class="thumbnail-tag">Novo</span>
                                    <?php }?>
                                    <img src="<?php echo $_smarty_tpl->tpl_vars['produto']->value->CROP268;?>
" alt="<?php echo $_smarty_tpl->tpl_vars['produto']->value->NOME;?>
" border="0" title="<?php echo $_smarty_tpl->tpl_vars['produto']->value->NOME;?>
" class="img-responsive" width="261" height="289"/>
                                </a>
                            </div>
                            <div class="thumbnail-infos">
                                <div class="row sp1"><div class="col-sm-12 sp2"></div></div>
                                <a href="/<?php echo $_smarty_tpl->tpl_vars['language']->value;?>
/<?php echo $_smarty_tpl->tpl_vars['produto']->value->CATEGORIA;?>
/<?php echo $_smarty_tpl->tpl_vars['produto']->value->URL_AMIGAVEL;?>
">

                                    <div class="thumbnail-title"><?php if ($_smarty_tpl->tpl_vars['produto']->value->IS_PROMOCAO==1) {?><span class="price-through">R$ <?php echo $_smarty_tpl->tpl_vars['produto']->value->DE;?>
</span><?php }?> R$ <?php echo $_smarty_tpl->tpl_vars['produto']->value->PRECO;?>
</div>

                                    
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

        <div class="row">
            <div class="col-lg-12">
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
/novos-produtos/sort/<?php echo $_smarty_tpl->tpl_vars['sort']->value;?>
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
/novos-produtos/sort/<?php echo $_smarty_tpl->tpl_vars['sort']->value;?>
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
                    <div class="form-inline page-controls-options">
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
/novos-produtos"/>
                            <?php } else { ?>
                                <input type="hidden" name="url" id="url" value="/<?php echo $_smarty_tpl->tpl_vars['language']->value;?>
/novos-produtos/search/<?php echo $_smarty_tpl->tpl_vars['search']->value;?>
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
