<?php /* Smarty version Smarty-3.1.19, created on 2015-03-24 14:25:42
         compiled from "/home/estil450/public_html/homolog/application/views/admin/avise_me.tpl" */ ?>
<?php /*%%SmartyHeaderCode:744707173551173e69965c6-57945459%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '1b38341b9ff04a4611a1c1f9c27f97d3c46981c7' => 
    array (
      0 => '/home/estil450/public_html/homolog/application/views/admin/avise_me.tpl',
      1 => 1425568898,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '744707173551173e69965c6-57945459',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'language' => 0,
    'ERRO_NAO_EXISTE_SOLICITACAO' => 0,
    'avise_me' => 0,
    'myDragClass' => 0,
    'ame' => 0,
    'it' => 0,
    'web_files' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.19',
  'unifunc' => 'content_551173e6ae1290_22333933',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_551173e6ae1290_22333933')) {function content_551173e6ae1290_22333933($_smarty_tpl) {?><?php if (!is_callable('smarty_function_counter')) include '/home/estil450/public_html/homolog/libraries/plugins/function.counter.php';
?><?php echo $_smarty_tpl->getSubTemplate ("admin/header.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 9999, null, array(), 0);?>


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
            Avise-me quando chegar
        </h1>
        <ol class="breadcrumb">
            <li>
                <i class="fa fa-home"></i>  <a href="/<?php echo $_smarty_tpl->tpl_vars['language']->value;?>
/admin/welcome">Home</a>
            </li>
            <li class="active">
                <i class="fa fa-child"></i>  Avise-me quando chegar
            </li>
        </ol>
    </div>
</div>  

<div class="row">
    <div class="col-lg-12">
        <div class="panel panel-default">
            <div class="panel-heading">
                <h3 class="panel-title"><i class="fa fa-bar-chart-o fa-fw"></i> Clientes e suas Solicitações</h3>
            </div>
            <div class="panel-body">
                <div class="panel-default showEstoque">

                    <table class="table">
                        <thead>                
                        <th>Nome/E-mail</th>
                        <th></th>
                        </thead>

                        <?php if ($_smarty_tpl->tpl_vars['ERRO_NAO_EXISTE_SOLICITACAO']->value=="ERRO_NAO_EXISTE_SOLICITACAO") {?>
                            <tr>
                                <td colspan="3">Não existem solicitações!</td>
                            </tr>
                        <?php }?>

                        <?php echo smarty_function_counter(array('assign'=>'i','start'=>0,'print'=>false),$_smarty_tpl);?>
 
                        <?php  $_smarty_tpl->tpl_vars['ame'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['ame']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['avise_me']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['ame']->key => $_smarty_tpl->tpl_vars['ame']->value) {
$_smarty_tpl->tpl_vars['ame']->_loop = true;
?>  

                            <tr <?php if ('i'%2==1) {?> class="<?php echo $_smarty_tpl->tpl_vars['myDragClass']->value;?>
"<?php }?>>
                                <td><?php if ($_smarty_tpl->tpl_vars['ame']->value->NOME=='') {?> <?php echo $_smarty_tpl->tpl_vars['ame']->value->EMAIL;?>
 <?php } else { ?><?php echo $_smarty_tpl->tpl_vars['ame']->value->NOME;?>
<br/><?php echo $_smarty_tpl->tpl_vars['ame']->value->EMAIL;?>
<?php }?></td>
                                <td>
                                    <div class="row">        
                                        <table class="table">
                                            <thead>
                                                <tr>
                                                    <th>#</th>
                                                    <th>Nome</th>
                                                    <th>Referência</th>
                                                    <th>Preço</th>
                                                    <th>Categoria</th>
                                                    <th>Ações</th>
                                                </tr>
                                            </thead>
                                            
                                            <?php  $_smarty_tpl->tpl_vars['it'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['it']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['ame']->value->ITENS; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['it']->key => $_smarty_tpl->tpl_vars['it']->value) {
$_smarty_tpl->tpl_vars['it']->_loop = true;
?>
                                                <tbody>
                                                    <tr>
                                                        <td><a href="/pt/produtos/editar/<?php echo $_smarty_tpl->tpl_vars['it']->value->URL_AMIGAVEL;?>
" target="_blank"><img src="<?php echo $_smarty_tpl->tpl_vars['it']->value->CROP80;?>
" border="0" title="<?php echo $_smarty_tpl->tpl_vars['it']->value->NOME;?>
" alt="<?php echo $_smarty_tpl->tpl_vars['it']->value->NOME;?>
"></a></td>
                                                        <td style="width: 50%"><?php echo $_smarty_tpl->tpl_vars['it']->value->NOME;?>
<br/><b>Tamanho: </b> <?php echo $_smarty_tpl->tpl_vars['it']->value->ROTULO;?>
 - <?php echo $_smarty_tpl->tpl_vars['it']->value->ESPECIFICACAO;?>
</td>
                                                        <td style="width: 10%"><?php echo $_smarty_tpl->tpl_vars['it']->value->REFERENCIA;?>
</td>
                                                        <td style="width: 10%"><?php echo $_smarty_tpl->tpl_vars['it']->value->PRECO;?>
</td>
                                                        <td style="width: 10%"><?php echo $_smarty_tpl->tpl_vars['it']->value->CATEGORIA;?>
</td>
                                                        <td style="width: 5%"><a class="ico-default-edit" data-toggle="tooltip" title="Enviar aviso deste produto ao cliente?" href="/pt/produtos/enviar-aviso/<?php echo $_smarty_tpl->tpl_vars['it']->value->CODAVISEME;?>
/<?php echo $_smarty_tpl->tpl_vars['ame']->value->EMAIL_B64;?>
"><i class="fa fa-paper-plane"></i></a></td>
                                                    </tr>
                                                </tbody>
                                            <?php } ?>

                                        </table>       
                                    </div> 
                                </td>
                            </tr>

                            <?php echo smarty_function_counter(array(),$_smarty_tpl);?>
    
                        <?php } ?>

                    </table>
                </div>
            </div>
        </div>
    </div>
</div>

<div class="row">
    <div class="col-md-12">

        <div class="panel-default hide">
            <h3> <span class="Loader "><img src="<?php echo $_smarty_tpl->tpl_vars['web_files']->value;?>
/img/Loader.GIF" alt="Carregando..." title="Carregando..." border="0"/></span> &nbsp;Aguarde, verificando estoque... &nbsp;</h3>
        </div>



    </div>
</div>


<?php echo $_smarty_tpl->getSubTemplate ("admin/footer.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 9999, null, array(), 0);?>

<?php }} ?>
