<?php /* Smarty version Smarty-3.1.19, created on 2014-10-01 13:56:41
         compiled from "/home/maria951/public_html/novo/application/views/admin/form_atendimento.tpl" */ ?>
<?php /*%%SmartyHeaderCode:971438528542c3249370dd8-31745988%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'e0712539c2c0c3d82d91df877cc6f85728a2804c' => 
    array (
      0 => '/home/maria951/public_html/novo/application/views/admin/form_atendimento.tpl',
      1 => 1412179041,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '971438528542c3249370dd8-31745988',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'mensagens' => 0,
    'mensagem' => 0,
    'codatendimento' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.19',
  'unifunc' => 'content_542c32493fdb46_36439213',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_542c32493fdb46_36439213')) {function content_542c32493fdb46_36439213($_smarty_tpl) {?><?php if (!is_callable('smarty_function_counter')) include '/home/maria951/public_html/novo/libraries/plugins/function.counter.php';
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

            <h2><span class="label label-default">Atendimento online</span></h2>
            <br/>
            <div class="panel-default">
                <div style="padding: 20px 10px 0 10px; font-size: 18px; line-height: 2;">
                    <div style="overflow-x: auto; height: 365px;" class="chat_text">
                        <?php echo smarty_function_counter(array('assign'=>'i','start'=>1,'print'=>false),$_smarty_tpl);?>
 
                        <?php  $_smarty_tpl->tpl_vars['mensagem'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['mensagem']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['mensagens']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['mensagem']->key => $_smarty_tpl->tpl_vars['mensagem']->value) {
$_smarty_tpl->tpl_vars['mensagem']->_loop = true;
?> 
                            <div style="display: inline-block; line-height: 1.2; font-size: 16px;"><strong style="color: #df5d65;">Mensagem automática: </strong><?php echo $_smarty_tpl->tpl_vars['mensagem']->value->MENSAGEM;?>
</div>
                        <?php echo smarty_function_counter(array(),$_smarty_tpl);?>
  
                        <?php } ?>
                    </div>
                    <span style="display: inline-block; height: 36px;">
                        <div class="atendimento_loading hide"><img src="/web-files/img/Loader.GIF" alt="Carregando..." title="Carregando..." border="0" width="8%" style="opacity:1"/> digitando...</div>
                    </span>
                    <div class="input-group">
                        <input type="hidden" name="codatendimento" id="codatendimento" value="<?php echo $_smarty_tpl->tpl_vars['codatendimento']->value;?>
"/>
                        <input type="text" class="form-control"/>
                        <span class="input-group-btn">
                            <button class="btn btn-primary" type="button">Enviar</button>
                        </span>
                    </div>

                </div>
            </div>

        </div>
    </div>
</div>

<?php echo $_smarty_tpl->getSubTemplate ("admin/footer.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 9999, null, array(), 0);?>
<?php }} ?>
