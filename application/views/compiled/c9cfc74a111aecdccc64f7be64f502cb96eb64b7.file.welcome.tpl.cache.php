<?php /* Smarty version Smarty-3.1.19, created on 2015-03-13 19:05:34
         compiled from "/home/estil450/public_html/application/views/admin/welcome.tpl" */ ?>
<?php /*%%SmartyHeaderCode:219005009550334fe249123-00680358%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'c9cfc74a111aecdccc64f7be64f502cb96eb64b7' => 
    array (
      0 => '/home/estil450/public_html/application/views/admin/welcome.tpl',
      1 => 1425487046,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '219005009550334fe249123-00680358',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'saudacao' => 0,
    'nome_logon' => 0,
    'language' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.19',
  'unifunc' => 'content_550334fe36b6e5_86607673',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_550334fe36b6e5_86607673')) {function content_550334fe36b6e5_86607673($_smarty_tpl) {?><?php echo $_smarty_tpl->getSubTemplate ("admin/header.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 9999, null, array(), 0);?>



<?php echo $_smarty_tpl->getSubTemplate ("admin/navbar.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 9999, null, array(), 0);?>



<?php echo $_smarty_tpl->getSubTemplate ("admin/logo.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 9999, null, array(), 0);?>


<!-- Page Heading -->
<div class="row">
    <div class="col-lg-12">
        <h1 class="page-header">
            <?php echo $_smarty_tpl->tpl_vars['saudacao']->value;?>
 <?php echo $_smarty_tpl->tpl_vars['nome_logon']->value;?>
!
        </h1>
        <ol class="breadcrumb">
            <li>
                <i class="fa fa-home"></i>  <a href="/<?php echo $_smarty_tpl->tpl_vars['language']->value;?>
/admin/welcome">Home</a>
            </li>
        </ol>
    </div>
</div>
<!-- /.row -->

<!-- Main jumbotron for a primary marketing message or call to action -->
<div class="jumbotron">
    <h1>Bem-vindo a Área Restrita!</h1>
    <p>Clique no botão abaixo para gerenciar seus produtos!</p>
    <p><a href="/<?php echo $_smarty_tpl->tpl_vars['language']->value;?>
/produtos/produtos-lista" class="btn btn-primary btn-lg" role="button">Gerenciar Produtos</a>
    </p>
</div>

<?php echo $_smarty_tpl->getSubTemplate ("admin/footer.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 9999, null, array(), 0);?>


<?php }} ?>
