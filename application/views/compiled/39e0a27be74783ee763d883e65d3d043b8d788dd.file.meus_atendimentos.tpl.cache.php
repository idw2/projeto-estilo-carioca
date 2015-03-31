<?php /* Smarty version Smarty-3.1.19, created on 2014-10-01 13:52:52
         compiled from "/home/maria951/public_html/novo/application/views/admin/meus_atendimentos.tpl" */ ?>
<?php /*%%SmartyHeaderCode:382254046542c316476b257-74822457%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '39e0a27be74783ee763d883e65d3d043b8d788dd' => 
    array (
      0 => '/home/maria951/public_html/novo/application/views/admin/meus_atendimentos.tpl',
      1 => 1412110205,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '382254046542c316476b257-74822457',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'dados' => 0,
    'language' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.19',
  'unifunc' => 'content_542c316484a5f9_98017852',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_542c316484a5f9_98017852')) {function content_542c316484a5f9_98017852($_smarty_tpl) {?><?php echo $_smarty_tpl->getSubTemplate ("admin/header.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 9999, null, array(), 0);?>


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

            <h2><span class="label label-default">Meus atendimentos</span></h2>
            <br/>
            <div class="panel-default">
                <input type="hidden" name="codatendente" id="codatendente" value="<?php echo $_smarty_tpl->tpl_vars['dados']->value['CODCONTA'];?>
"/>
                <input type="hidden" name="language" id="language" value="<?php echo $_smarty_tpl->tpl_vars['language']->value;?>
"/>
                <table class='table' id="table-1-2" cellspacing="0" cellpadding="2">
                    <thead>
                        <th>Fila</th>
                        <th>Data</th>
                        <th>Nome</th>
                        <th>E-mail</th>

                        <th>Ações</th>
                    </thead>
                    <tbody class='meus-atendimentos'></tbody>
                </table>
            </div>

        </div>
    </div>
</div>

<?php echo $_smarty_tpl->getSubTemplate ("admin/footer.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 9999, null, array(), 0);?>
<?php }} ?>
