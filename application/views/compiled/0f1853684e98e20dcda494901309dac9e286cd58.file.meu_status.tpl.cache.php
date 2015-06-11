<?php /* Smarty version Smarty-3.1.19, created on 2014-09-30 16:59:55
         compiled from "/home/maria951/public_html/novo/application/views/admin/meu_status.tpl" */ ?>
<?php /*%%SmartyHeaderCode:313899228542b0bbb958d15-12262999%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '0f1853684e98e20dcda494901309dac9e286cd58' => 
    array (
      0 => '/home/maria951/public_html/novo/application/views/admin/meu_status.tpl',
      1 => 1412023111,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '313899228542b0bbb958d15-12262999',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'ERRO_NAO_EXITE_ATENDENTE' => 0,
    'atendentes' => 0,
    'atendente' => 0,
    'i' => 0,
    'language' => 0,
    'stt' => 0,
    'eye' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.19',
  'unifunc' => 'content_542b0bbbaa3cc8_48728977',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_542b0bbbaa3cc8_48728977')) {function content_542b0bbbaa3cc8_48728977($_smarty_tpl) {?><?php if (!is_callable('smarty_function_counter')) include '/home/maria951/public_html/novo/libraries/plugins/function.counter.php';
?><?php echo $_smarty_tpl->getSubTemplate ("admin/header.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 9999, null, array(), 0);?>


<div class="sidebar">
    <?php echo $_smarty_tpl->getSubTemplate ("admin/navbar.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 9999, null, array(), 0);?>

</div>
<div class="content">
    <div class="row">
        <div class="col-md-12">
            <div class="pull-left">
                <?php echo $_smarty_tpl->getSubTemplate ("admin/logo.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 9999, null, array(), 0);?>

            </div>
            <?php echo $_smarty_tpl->getSubTemplate ("admin/search.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 9999, null, array(), 0);?>

        </div>
    </div>
    <div class="row">
        <div class="col-md-12">

            <h2><span class="label label-default">Meu status</span></h2>
            <br/>
            <div class="panel-default">
       
                <table class='table' id="table-1-2" cellspacing="0" cellpadding="2">
                    <thead>
                        <th>Data cadastro</th>
                        <th>Nome</th>
                        <th>E-mail</th>
                        <th>Sexo</th>
                        <th>Situação</th>
                    </thead>
                    
                   <?php if ($_smarty_tpl->tpl_vars['ERRO_NAO_EXITE_ATENDENTE']->value=="ERRO_NAO_EXITE_ATENDENTE") {?>
                       <tr>
                          <td colspan="5">Não existe atendentes cadastrados!</td>
                       </tr>
                    <?php }?>
                    
                    <?php echo smarty_function_counter(array('assign'=>'i','start'=>0,'print'=>false),$_smarty_tpl);?>
 
                    <?php  $_smarty_tpl->tpl_vars['atendente'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['atendente']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['atendentes']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['atendente']->key => $_smarty_tpl->tpl_vars['atendente']->value) {
$_smarty_tpl->tpl_vars['atendente']->_loop = true;
?>  
                        <?php if ($_smarty_tpl->tpl_vars['atendente']->value->CODCONTA!='') {?>
                        <tbody>
                            <tr <?php if ($_smarty_tpl->tpl_vars['i']->value%2==1) {?>class="myDragClass"<?php }?>>
                                <td><?php echo $_smarty_tpl->tpl_vars['atendente']->value->DTA;?>
</td>
                                <td><?php echo $_smarty_tpl->tpl_vars['atendente']->value->NOME;?>
</td>
                                <td><?php echo $_smarty_tpl->tpl_vars['atendente']->value->EMAIL;?>
</td>
                                <td><?php echo $_smarty_tpl->tpl_vars['atendente']->value->SEXO;?>
</td>
                                <td>
                                    <?php if ($_smarty_tpl->tpl_vars['atendente']->value->ON_LINE=="0") {?>
                                        <?php $_smarty_tpl->tpl_vars['eye'] = new Smarty_variable("desative", null, 0);?>
                                        <?php $_smarty_tpl->tpl_vars['stt'] = new Smarty_variable("1", null, 0);?>
                                    <?php } else { ?>
                                        <?php $_smarty_tpl->tpl_vars['eye'] = new Smarty_variable('', null, 0);?>
                                        <?php $_smarty_tpl->tpl_vars['stt'] = new Smarty_variable("0", null, 0);?>
                                    <?php }?>
                                    <a href="/<?php echo $_smarty_tpl->tpl_vars['language']->value;?>
/atendimento/on-line/<?php echo $_smarty_tpl->tpl_vars['stt']->value;?>
/<?php echo $_smarty_tpl->tpl_vars['atendente']->value->EMAIL;?>
"><span class="ico-default-eye <?php echo $_smarty_tpl->tpl_vars['eye']->value;?>
" data-toggle="tooltip" <?php if ($_smarty_tpl->tpl_vars['atendente']->value->ON_LINE=="0") {?> title="Off-Line" <?php } else { ?>  title="On-Line" <?php }?>><i class="fa fa-eye"></i></span></a>
                                </td>
                            </tr>
                        </tbody>
                        <?php }?>
                    <?php echo smarty_function_counter(array(),$_smarty_tpl);?>
    
                    <?php } ?> 

                    
                </table>
            </div>

        </div>
    </div>
</div>

<?php echo $_smarty_tpl->getSubTemplate ("admin/footer.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 9999, null, array(), 0);?>
<?php }} ?>
