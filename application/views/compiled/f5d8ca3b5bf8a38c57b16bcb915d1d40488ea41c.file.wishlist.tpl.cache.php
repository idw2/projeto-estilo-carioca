<?php /* Smarty version Smarty-3.1.19, created on 2014-11-05 12:27:12
         compiled from "/home/maria951/public_html/homolog/application/views/wishlist.tpl" */ ?>
<?php /*%%SmartyHeaderCode:702122992545a33c0497478-57874012%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'f5d8ca3b5bf8a38c57b16bcb915d1d40488ea41c' => 
    array (
      0 => '/home/maria951/public_html/homolog/application/views/wishlist.tpl',
      1 => 1414774251,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '702122992545a33c0497478-57874012',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'nenhum_produto' => 0,
    'ld' => 0,
    'language' => 0,
    'lista_desejo' => 0,
    'url_checkout' => 0,
    'imposto' => 0,
    'bonus' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.19',
  'unifunc' => 'content_545a33c0598079_28461780',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_545a33c0598079_28461780')) {function content_545a33c0598079_28461780($_smarty_tpl) {?><?php echo $_smarty_tpl->getSubTemplate ("header.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 9999, null, array(), 0);?>


<section class="pag-section pag-section-top" style="margin-bottom: 50px;">
    <div class="container">
         <?php echo $_smarty_tpl->getSubTemplate ("navbar2.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 9999, null, array(), 0);?>

        <h3 class="title-md">Minha lista de desejos</h3>
        <div class="row">
            <div class="col-md-12">
                <div class="row">
                    <div class="col-md-12">
                        <div class="panel panel-default"> 
                            <table class="table" style="font-size: 14px">
                                <thead>
                                    <tr>
                                        <th>Produto</th>
                                        <th>Nome do Produto</th>
                                        <th>Referência</th>
                                        <th>Preço Unitário</th>
                                        <th style="width: 11%;">Quantidade</th>
                                        
                                        <th>#</th>
                                    </tr>
                                </thead>

                                <tbody>

                                    <?php if ($_smarty_tpl->tpl_vars['nenhum_produto']->value==true) {?>
                                        <tr>
                                            <th colspan="10">Nenhum produto na sua Lista de Desejos!</th>
                                        </tr>
                                    <?php } else { ?>    
                                        <?php  $_smarty_tpl->tpl_vars['lista_desejo'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['lista_desejo']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['ld']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['lista_desejo']->key => $_smarty_tpl->tpl_vars['lista_desejo']->value) {
$_smarty_tpl->tpl_vars['lista_desejo']->_loop = true;
?>  

                                            <tr>
                                                <td>
                                                    <a href="/<?php echo $_smarty_tpl->tpl_vars['language']->value;?>
/descricao/categoria/<?php echo $_smarty_tpl->tpl_vars['lista_desejo']->value->CATEG;?>
/<?php echo $_smarty_tpl->tpl_vars['lista_desejo']->value->URL_AMIGAVEL;?>
">
                                                        <img src="<?php echo $_smarty_tpl->tpl_vars['lista_desejo']->value->FOTO;?>
" alt="<?php echo $_smarty_tpl->tpl_vars['lista_desejo']->value->NOME;?>
" title="<?php echo $_smarty_tpl->tpl_vars['lista_desejo']->value->NOME;?>
" border="0"/>
                                                    </a>
                                                </td>
                                                <td style="text-transform: uppercase;"><?php echo $_smarty_tpl->tpl_vars['lista_desejo']->value->NOME;?>
</td>
                                                <td><?php echo $_smarty_tpl->tpl_vars['lista_desejo']->value->REFERENCIA;?>
</td>
                                                <td><?php echo $_smarty_tpl->tpl_vars['lista_desejo']->value->PRECO;?>
</td>
                                                <td id="n_input">
                                                    <table>
                                                        <tr>
                                                            <td><span style="cursor: pointer;" class="minus" onclick="javascript:plus_wishlist2('<?php echo $_smarty_tpl->tpl_vars['url_checkout']->value;?>
<?php echo $_smarty_tpl->tpl_vars['lista_desejo']->value->CODPRODUTO;?>
&COMANDO=menos&CODLISTADESEJOS=<?php echo $_smarty_tpl->tpl_vars['lista_desejo']->value->CODLISTADESEJOS;?>
&imposto=<?php echo $_smarty_tpl->tpl_vars['imposto']->value;?>
', '<?php echo $_smarty_tpl->tpl_vars['lista_desejo']->value->CODLISTADESEJOS;?>
');" title="Menos item"><i class="fa fa-minus-square"></i></span>&nbsp;</td>
                                                            <td><input type="text" name="quantidade" id="input_<?php echo $_smarty_tpl->tpl_vars['lista_desejo']->value->CODLISTADESEJOS;?>
"  style="width: 44px; text-align: center;" value="<?php echo $_smarty_tpl->tpl_vars['lista_desejo']->value->QUANTIDADE;?>
" readonly="readonly"/></td>
                                                            <td>&nbsp;<span style="cursor: pointer;" class="plus" onclick="javascript:plus_wishlist2('<?php echo $_smarty_tpl->tpl_vars['url_checkout']->value;?>
<?php echo $_smarty_tpl->tpl_vars['lista_desejo']->value->CODPRODUTO;?>
&COMANDO=mais&CODLISTADESEJOS=<?php echo $_smarty_tpl->tpl_vars['lista_desejo']->value->CODLISTADESEJOS;?>
&imposto=<?php echo $_smarty_tpl->tpl_vars['imposto']->value;?>
', '<?php echo $_smarty_tpl->tpl_vars['lista_desejo']->value->CODLISTADESEJOS;?>
');" title="Mais item"><i class="fa fa-plus-square"></i></span></td>
                                                        </tr>
                                                    </table>                
                                                </td>

                                                <td><span style="cursor: pointer;" onclick="javascript:del_row_wishlist('<?php echo $_smarty_tpl->tpl_vars['url_checkout']->value;?>
<?php echo $_smarty_tpl->tpl_vars['lista_desejo']->value->CODPRODUTO;?>
')"><i class="fa fa-times"></i></span></td>
                                            </tr>

                                        <?php } ?> 
                                        <tr>
                                            <td colspan="10" valign="center">
                                                <strong>Programa de fidelidade:</strong> Com esta compra você vai ganhar R$ <span class="bonus"><?php echo $_smarty_tpl->tpl_vars['bonus']->value;?>
</span> de bônus para utilizar nas próximas compras. <a href="/<?php echo $_smarty_tpl->tpl_vars['language']->value;?>
/informacoes/programa-fidelidade" target="_blank" style="color: #df5d65; font-style: italic;">Saiba como funciona</a>
                                            </td>
                                        </tr>
                                    <?php }?>
                                </tbody>
                            </table>
                        </div>
                    </div>

                </div>
                <div>
                    <ul class="list-unstyled">
                        <li class="next pull-right"><a href="/<?php echo $_smarty_tpl->tpl_vars['language']->value;?>
/produtos/checkout/" class="btn btn-primary">Finalizar compra &rarr;</a></li>
                    </ul>
                </div> 
            </div>
        </div>

    </div>
</section>

<?php echo $_smarty_tpl->getSubTemplate ("footer.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 9999, null, array(), 0);?>

<?php }} ?>
