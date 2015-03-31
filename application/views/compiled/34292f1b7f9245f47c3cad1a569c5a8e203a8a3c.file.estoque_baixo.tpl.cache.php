<?php /* Smarty version Smarty-3.1.19, created on 2015-03-13 19:08:25
         compiled from "/home/estil450/public_html/application/views/admin/estoque_baixo.tpl" */ ?>
<?php /*%%SmartyHeaderCode:1132005798550335a90df482-16790588%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '34292f1b7f9245f47c3cad1a569c5a8e203a8a3c' => 
    array (
      0 => '/home/estil450/public_html/application/views/admin/estoque_baixo.tpl',
      1 => 1425487020,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '1132005798550335a90df482-16790588',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'language' => 0,
    'num_produtos_que_faltam' => 0,
    'falta_produtos_estoque' => 0,
    'referencia_nome_produtos' => 0,
    'referencia_nome_produto' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.19',
  'unifunc' => 'content_550335a917b3b8_26157530',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_550335a917b3b8_26157530')) {function content_550335a917b3b8_26157530($_smarty_tpl) {?><?php echo $_smarty_tpl->getSubTemplate ("admin/header.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 9999, null, array(), 0);?>


<div class="sidebar">
    <?php echo $_smarty_tpl->getSubTemplate ("admin/navbar.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 9999, null, array(), 0);?>

</div>

<div class="row">
    <div class="col-md-12">
        <div class="pull-left">
            <?php echo $_smarty_tpl->getSubTemplate ("admin/logo.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 9999, null, array(), 0);?>

        </div>
    </div>
</div>
<!-- Page Heading -->
<div class="row">
    <div class="col-lg-12">
        <h1 class="page-header">
            Lista de Produtos em Estoque Baixo
        </h1>
        <ol class="breadcrumb">
            <li>
                <i class="fa fa-home"></i>  <a href="/<?php echo $_smarty_tpl->tpl_vars['language']->value;?>
/admin/welcome">Home</a>
            </li>
            <li class="active">
                <i class="fa fa-child"></i>  Lista de Produtos em Estoque Baixo
            </li>
        </ol>
    </div>
</div>      


<div class="panel-default showEstoque">


    <div class="row">
        <div class="col-lg-12">
            <div class="panel panel-default">
                <div class="panel-heading">
                    <h3 class="panel-title"><i class="fa fa-bar-chart-o fa-fw"></i> <span>ATENÇÃO:</span> Existem <?php echo $_smarty_tpl->tpl_vars['num_produtos_que_faltam']->value;?>
 produto(s) com estoque baixo!</h3>
                </div>
                <div class="panel-body">
                    <?php if ($_smarty_tpl->tpl_vars['falta_produtos_estoque']->value==true) {?>  
                        <table class="table">
                            <thead>
                                <tr>
                                    <th>Referência</th>
                                    <th>Produto</th>
                                    <th>Quantidade</th>
                                </tr>
                            </thead>
                            <tbody>
                                <?php  $_smarty_tpl->tpl_vars['referencia_nome_produto'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['referencia_nome_produto']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['referencia_nome_produtos']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['referencia_nome_produto']->key => $_smarty_tpl->tpl_vars['referencia_nome_produto']->value) {
$_smarty_tpl->tpl_vars['referencia_nome_produto']->_loop = true;
?>   
                                    <tr>
                                        <td><?php echo $_smarty_tpl->tpl_vars['referencia_nome_produto']->value->REFERENCIA;?>
</td>
                                        <td><?php echo $_smarty_tpl->tpl_vars['referencia_nome_produto']->value->NOME;?>
</td>
                                        <td><?php echo $_smarty_tpl->tpl_vars['referencia_nome_produto']->value->QUANTIDADE;?>
</td>
                                    </tr>
                                <?php } ?>
                            </tbody>
                        </table>
                    <?php } else { ?>
                        * Nada na lista!
                    <?php }?>
                </div>
            </div>
        </div>
    </div>


</div>


<?php echo $_smarty_tpl->getSubTemplate ("admin/footer.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 9999, null, array(), 0);?>


<?php }} ?>
