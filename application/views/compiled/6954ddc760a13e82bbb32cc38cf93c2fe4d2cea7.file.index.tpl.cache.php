<?php /* Smarty version Smarty-3.1.19, created on 2015-03-25 21:10:28
         compiled from "/home/estil450/public_html/application/views/admin/index.tpl" */ ?>
<?php /*%%SmartyHeaderCode:1973293962551324446b1013-49726401%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '6954ddc760a13e82bbb32cc38cf93c2fe4d2cea7' => 
    array (
      0 => '/home/estil450/public_html/application/views/admin/index.tpl',
      1 => 1425487035,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '1973293962551324446b1013-49726401',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'web_files' => 0,
    'erro' => 0,
    'sucesso' => 0,
    'language' => 0,
    'email' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.19',
  'unifunc' => 'content_55132444746f31_61999717',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_55132444746f31_61999717')) {function content_55132444746f31_61999717($_smarty_tpl) {?><!DOCTYPE HTML>
<html lang="pt-br">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0" />
        <link rel="stylesheet" href="<?php echo $_smarty_tpl->tpl_vars['web_files']->value;?>
/font-awesome-4.1.0/css/font-awesome.min.css"/>
        <link rel="stylesheet" href="<?php echo $_smarty_tpl->tpl_vars['web_files']->value;?>
/bootstrap/css/bootstrap.css"/>
        <link rel="stylesheet" href="<?php echo $_smarty_tpl->tpl_vars['web_files']->value;?>
/bootstrap/css/bootstrap-theme.css"/>	
        <link rel="stylesheet" href="<?php echo $_smarty_tpl->tpl_vars['web_files']->value;?>
/css/sweet-alert.css?v=2"/>
        <link rel="shortcut icon" href="http://www.estilocarioca.com.br/application/template/estilocarioca/assets/img/favicon.png?v=5">
        <link rel="shortcut icon" type="image/x-icon" href="http://www.estilocarioca.com.br/application/template/estilocarioca/assets/img/favicon.png?v=5"/>
        <title></title>
    </head>
    <body>

        <div class="container">
            <div class="row box-login">

                <div class="col-sm-4"> </div>
                <div class="col-sm-4">

                    <?php if ($_smarty_tpl->tpl_vars['erro']->value=='') {?>

                        <div class="alert alert-success" style="text-align: center" role="alert"><strong>Atenção: </strong>Preencher todos os campos!</div>

                    <?php } else { ?>

                        <?php if ($_smarty_tpl->tpl_vars['sucesso']->value=="FALSE") {?>
                            <div class="alert alert-danger" style="text-align: center" role="alert"><strong>Atenção: </strong><?php echo $_smarty_tpl->tpl_vars['erro']->value;?>
</div>
                        <?php } else { ?>
                            <div class="alert alert-success" style="text-align: center" role="alert"><?php echo $_smarty_tpl->tpl_vars['erro']->value;?>
</div>	
                        <?php }?>

                    <?php }?>

                    <img class="area-restrita img-responsive center-block" src="<?php echo $_smarty_tpl->tpl_vars['web_files']->value;?>
/img/logo.png" alt="" border="0" title="" style="margin: 0 auto;"/><br/>
                    <form class="form-horizontal" role="form" novalidate="" method="post" action="/<?php echo $_smarty_tpl->tpl_vars['language']->value;?>
/admin/login">
                        <div class="input-group input-group-lg">
                            <input type="text" class="form-control" id="email" name="email" placeholder="E-mail" value="<?php echo $_smarty_tpl->tpl_vars['email']->value;?>
" required/>
                            <span class="input-group-addon"><i class="fa fa-reply-all">&nbsp</i></span>
                        </div>
                        <br/>
                        <div class="input-group input-group-lg">
                            <input type="password" class="form-control" id="senha" name="senha" placeholder="Senha" required/>
                            <span class="input-group-addon"><i class="fa fa-pencil">&nbsp</i></span>
                        </div>	
                        <br/>
                        <div class="input-group input-group-lg">
                            <button type="submit" class="btn btn-primary btn-lg btn-primary-maria" role="button">Entrar</button>
                        </div>						
                    </form>
                </div>
                <div class="col-sm-4">  </div>

            </div>
        </div>
<script src="//code.jquery.com/jquery-1.11.2.min.js"></script>
<script language="javascript" src="<?php echo $_smarty_tpl->tpl_vars['web_files']->value;?>
/js/sweet-alert.js"></script>
<script language="javascript" src="<?php echo $_smarty_tpl->tpl_vars['web_files']->value;?>
/js/default.js"></script>
    </body>
</html>

<?php }} ?>
