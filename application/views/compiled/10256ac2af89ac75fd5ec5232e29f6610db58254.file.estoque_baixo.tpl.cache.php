<?php /* Smarty version Smarty-3.1.19, created on 2015-01-16 13:58:44
         compiled from "/home/maria951/public_html/homolog/application/views/admin/estoque_baixo.tpl" */ ?>
<?php /*%%SmartyHeaderCode:114980854754b96d7499e6a9-10388505%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '10256ac2af89ac75fd5ec5232e29f6610db58254' => 
    array (
      0 => '/home/maria951/public_html/homolog/application/views/admin/estoque_baixo.tpl',
      1 => 1418145280,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '114980854754b96d7499e6a9-10388505',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'falta_produtos_estoque' => 0,
    'web_files' => 0,
    'num_produtos_que_faltam' => 0,
    'referencia_nome_produtos' => 0,
    'referencia_nome_produto' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.19',
  'unifunc' => 'content_54b96d74a3a3e7_50600519',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_54b96d74a3a3e7_50600519')) {function content_54b96d74a3a3e7_50600519($_smarty_tpl) {?><?php echo $_smarty_tpl->getSubTemplate ("admin/header.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 9999, null, array(), 0);?>


<div class="sidebar">
    <?php echo $_smarty_tpl->getSubTemplate ("admin/navbar.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 9999, null, array(), 0);?>

</div>
<div class="content">
    <div class="row">
        <div class="col-md-12">
            <div class="pull-left">
                <?php echo $_smarty_tpl->getSubTemplate ("admin/logo.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 9999, null, array(), 0);?>

            </div>
            
        </div>
    </div>

    <?php if ($_smarty_tpl->tpl_vars['falta_produtos_estoque']->value==true) {?>    
            

        

    <?php }?> 

    <div class="row">
        <div class="col-md-12">

            <h2><span class="label label-default">Lista de Produtos em Estoque Baixo</span></h2>
            <br/>

            <div class="panel-default hide">
                <h3> <span class="Loader "><img src="<?php echo $_smarty_tpl->tpl_vars['web_files']->value;?>
/img/Loader.GIF" alt="Carregando..." title="Carregando..." border="0"/></span> &nbsp;Aguarde, verificando estoque... &nbsp;</h3>
            </div>

            <div class="panel-default showEstoque">


                <div class="container" style="width: 100%;">        
                    <?php if ($_smarty_tpl->tpl_vars['falta_produtos_estoque']->value==true) {?>  
                        <div class="row">        
                            <div class="panel panel-default">
                                <div class="panel-heading"><span>ATENÇÃO:</span> Existem <?php echo $_smarty_tpl->tpl_vars['num_produtos_que_faltam']->value;?>
 produto(s) com estoque baixo!</div>
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
                            </div>        
                        </div> 
                    <?php }?>
                </div>

            </div>

        </div>
    </div>
</div>

<?php echo $_smarty_tpl->getSubTemplate ("admin/footer.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 9999, null, array(), 0);?>


<?php }} ?>
