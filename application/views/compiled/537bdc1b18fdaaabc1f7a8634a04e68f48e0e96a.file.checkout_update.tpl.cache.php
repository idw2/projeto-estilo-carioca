<?php /* Smarty version Smarty-3.1.19, created on 2015-02-05 07:21:18
         compiled from "/home/maria951/public_html/homolog/application/views/checkout_update.tpl" */ ?>
<?php /*%%SmartyHeaderCode:173634676154d36e4e34d9c0-36120527%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '537bdc1b18fdaaabc1f7a8634a04e68f48e0e96a' => 
    array (
      0 => '/home/maria951/public_html/homolog/application/views/checkout_update.tpl',
      1 => 1423086103,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '173634676154d36e4e34d9c0-36120527',
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
    'web_files' => 0,
    'embalar_presente' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.19',
  'unifunc' => 'content_54d36e4e4535d6_50684628',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_54d36e4e4535d6_50684628')) {function content_54d36e4e4535d6_50684628($_smarty_tpl) {?>
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
            <td><a href="/<?php echo $_smarty_tpl->tpl_vars['language']->value;?>
/descricao/categoria/<?php echo $_smarty_tpl->tpl_vars['lista_desejo']->value->CATEG;?>
/<?php echo $_smarty_tpl->tpl_vars['lista_desejo']->value->URL_AMIGAVEL;?>
"><img src="<?php echo $_smarty_tpl->tpl_vars['lista_desejo']->value->FOTO;?>
" alt="<?php echo $_smarty_tpl->tpl_vars['lista_desejo']->value->NOME;?>
" title="<?php echo $_smarty_tpl->tpl_vars['lista_desejo']->value->NOME;?>
" border="0"/></a><br/></td>
            <td style="text-transform: uppercase;">
                <?php echo $_smarty_tpl->tpl_vars['lista_desejo']->value->NOME;?>

                <?php if ($_smarty_tpl->tpl_vars['lista_desejo']->value->ALERT!='') {?>
                    <br/><span style="color: #df5d65; font-size: 10px; font-weight: bold;"><?php echo $_smarty_tpl->tpl_vars['lista_desejo']->value->ALERT;?>
</span>
                <?php }?>
            </td>
            <td><?php echo $_smarty_tpl->tpl_vars['lista_desejo']->value->REFERENCIA;?>
</td>
            <td><?php echo $_smarty_tpl->tpl_vars['lista_desejo']->value->PRECO;?>
</td>
            <td id="n_input">
                <table>
                    <tr>
                        <td><span style="cursor: pointer;" class="minus" onclick="javascript:plus_wishlist_checkout('<?php echo $_smarty_tpl->tpl_vars['url_checkout']->value;?>
<?php echo $_smarty_tpl->tpl_vars['lista_desejo']->value->CODPRODUTO;?>
&COMANDO=menos&CODLISTADESEJOS=<?php echo $_smarty_tpl->tpl_vars['lista_desejo']->value->CODLISTADESEJOS;?>
&imposto=<?php echo $_smarty_tpl->tpl_vars['imposto']->value;?>
', '<?php echo $_smarty_tpl->tpl_vars['lista_desejo']->value->CODLISTADESEJOS;?>
');" title="Menos item"><i class="fa fa-minus-square"></i></span>&nbsp;</td>
                        <td><input type="text" name="quantidade" id="input_<?php echo $_smarty_tpl->tpl_vars['lista_desejo']->value->CODLISTADESEJOS;?>
"  style="width: 44px; text-align: center;" value="<?php echo $_smarty_tpl->tpl_vars['lista_desejo']->value->QUANTIDADE;?>
" readonly="readonly"/></td>
                        <td>&nbsp;<span style="cursor: pointer;" class="plus" onclick="javascript:plus_wishlist_checkout('<?php echo $_smarty_tpl->tpl_vars['url_checkout']->value;?>
<?php echo $_smarty_tpl->tpl_vars['lista_desejo']->value->CODPRODUTO;?>
&COMANDO=mais&CODLISTADESEJOS=<?php echo $_smarty_tpl->tpl_vars['lista_desejo']->value->CODLISTADESEJOS;?>
&imposto=<?php echo $_smarty_tpl->tpl_vars['imposto']->value;?>
', '<?php echo $_smarty_tpl->tpl_vars['lista_desejo']->value->CODLISTADESEJOS;?>
');" title="Mais item"><i class="fa fa-plus-square"></i></span></td>
                    </tr>
                </table>                
            </td>
            <td  id="preco_total_produto_<?php echo $_smarty_tpl->tpl_vars['lista_desejo']->value->CODLISTADESEJOS;?>
"> <?php if ($_smarty_tpl->tpl_vars['lista_desejo']->value->TOTAL=='') {?>0,00<?php } else { ?><?php echo $_smarty_tpl->tpl_vars['lista_desejo']->value->TOTAL;?>
<?php }?></td>
            <td><span onclick="javascript:del_row_wishlist('<?php echo $_smarty_tpl->tpl_vars['url_checkout']->value;?>
<?php echo $_smarty_tpl->tpl_vars['lista_desejo']->value->CODPRODUTO;?>
')"><i class="fa fa-times"></i></span></td>
        </tr>
    <?php } ?> 
    <tr>
        <td colspan="10" valign="center">
            <img src="<?php echo $_smarty_tpl->tpl_vars['web_files']->value;?>
/img/present.png" border="0" alt="Embalagem para presente" alt="Embalagem para presente"/> <strong>Deseja que embale para presente?</strong> <span style="cursor: pointer; color: #df5d65; font-style: italic;" onclick="embalar_presente()"/>Clique aqui</span> <span <?php if ($_smarty_tpl->tpl_vars['embalar_presente']->value=="1") {?>class="yes"<?php } else { ?>class="yes hide"<?php }?>> &nbsp;<img src="<?php echo $_smarty_tpl->tpl_vars['web_files']->value;?>
/img/yes.png" alt="OK" title="OK" border="0"/></span>
            <style>
                .panel-toggle{
                    background: #EFEDED;
                    border-bottom: solid 2px #D2D2D2 !important;
                    padding: 12px;
                }
            </style>
        </td>
    </tr>
<?php }?>

<?php }} ?>
