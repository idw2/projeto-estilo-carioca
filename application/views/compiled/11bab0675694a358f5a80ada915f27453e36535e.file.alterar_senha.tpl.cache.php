<?php /* Smarty version Smarty-3.1.19, created on 2015-03-10 14:31:59
         compiled from "/home/estil450/public_html/application/views/admin/alterar_senha.tpl" */ ?>
<?php /*%%SmartyHeaderCode:55731137054ff005fe4a555-25183559%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '11bab0675694a358f5a80ada915f27453e36535e' => 
    array (
      0 => '/home/estil450/public_html/application/views/admin/alterar_senha.tpl',
      1 => 1425487041,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '55731137054ff005fe4a555-25183559',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'language' => 0,
    'erro' => 0,
    'sucesso' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.19',
  'unifunc' => 'content_54ff005feecdf9_89669004',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_54ff005feecdf9_89669004')) {function content_54ff005feecdf9_89669004($_smarty_tpl) {?><?php echo $_smarty_tpl->getSubTemplate ("admin/header.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 9999, null, array(), 0);?>


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
            Alterar senha
        </h1>
        <ol class="breadcrumb">
            <li>
                <i class="fa fa-home"></i>  <a href="/<?php echo $_smarty_tpl->tpl_vars['language']->value;?>
/admin/welcome">Home</a>
            </li>
            <li class="active">
                <i class="fa fa-child"></i>  Alterar senha
            </li>
        </ol>
    </div>
</div>  

<div class="row">
    <div class="col-lg-12">
        <?php if ($_smarty_tpl->tpl_vars['erro']->value=='') {?>

            <div class="alert alert-info alert-dismissable" role="alert"><strong>Atenção: </strong>Preencher todos os campos!</div>

        <?php } else { ?>

            <?php if ($_smarty_tpl->tpl_vars['sucesso']->value=="FALSE") {?>
                <div class="alert alert-danger" role="alert"><strong>Atenção: </strong><?php echo $_smarty_tpl->tpl_vars['erro']->value;?>
</div>
            <?php } else { ?>
                <div class="alert alert-success" role="alert"><?php echo $_smarty_tpl->tpl_vars['erro']->value;?>
</div>	
            <?php }?>

        <?php }?>
    </div>
</div>



<br/>

<div class="row">
    <div class="col-lg-12">
        <div class="panel panel-default">
            <div class="panel-body">
                <form class="navbar-form navbar-left" style="width: 100%" action="/<?php echo $_smarty_tpl->tpl_vars['language']->value;?>
/admin/alterar-senha" method="post">


                    <div class="input-group input-group-lg" style="margin-bottom: 1%;">
                        <input type="password" class="form-control" id="senha_atual" name="senha_atual" placeholder="Senha atual"/>
                        <span class="input-group-addon"><i class="fa fa-pencil">&nbsp</i></span>
                    </div>	
                    <br/>
                    <div class="input-group input-group-lg" style="margin-bottom: 1%;">
                        <input type="password" class="form-control" id="senha_nova" name="senha_nova" placeholder="Nova senha"/>
                        <span class="input-group-addon"><i class="fa fa-pencil">&nbsp</i></span>
                    </div>	
                    <br/>
                    <div class="input-group input-group-lg" style="margin-bottom: 1%;">
                        <input type="password" class="form-control" id="senha_repetir" name="senha_repetir" placeholder="Repetir senha"/>
                        <span class="input-group-addon"><i class="fa fa-pencil">&nbsp</i></span>
                    </div>	
                    <br/>
                    <div class="input-group input-group-lg">
                        <?php echo $_smarty_tpl->getSubTemplate ("admin/btn_enviar.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 9999, null, array(), 0);?>

                    </div>

                </form>
            </div>
        </div>
    </div>
</div>            


<?php echo $_smarty_tpl->getSubTemplate ("admin/tinymce_1.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 9999, null, array(), 0);?>

<?php echo $_smarty_tpl->getSubTemplate ("admin/footer.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 9999, null, array(), 0);?>
<?php }} ?>
