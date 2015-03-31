<?php /* Smarty version Smarty-3.1.19, created on 2014-10-23 15:08:08
         compiled from "/home/maria951/public_html/novo/application/views/endereco.tpl" */ ?>
<?php /*%%SmartyHeaderCode:813129954544935f8e650a4-13225637%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'd39ccc5f5b95d8ad3bd651d54cfd25ec16be830e' => 
    array (
      0 => '/home/maria951/public_html/novo/application/views/endereco.tpl',
      1 => 1413236062,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '813129954544935f8e650a4-13225637',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'endereco_list' => 0,
    'endereco' => 0,
    'i' => 0,
    'codcadastro' => 0,
    'msg_erro' => 0,
    'erro' => 0,
    'cep' => 0,
    'logradouro' => 0,
    'numero' => 0,
    'complemento' => 0,
    'bairro' => 0,
    'cidade' => 0,
    'estado' => 0,
    'sem_endereco' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.19',
  'unifunc' => 'content_544935f91f33a3_74253561',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_544935f91f33a3_74253561')) {function content_544935f91f33a3_74253561($_smarty_tpl) {?><?php if (!is_callable('smarty_function_counter')) include '/home/maria951/public_html/novo/libraries/plugins/function.counter.php';
?>
<div class="row">
    <div class="col-lg-6">
        <form class="navbar-form navbar-left" name="formListenderecos" id="formListenderecos" style="width: 100%">    
            <?php echo smarty_function_counter(array('assign'=>'i','start'=>1,'print'=>false),$_smarty_tpl);?>
 
            <?php  $_smarty_tpl->tpl_vars['endereco'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['endereco']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['endereco_list']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['endereco']->key => $_smarty_tpl->tpl_vars['endereco']->value) {
$_smarty_tpl->tpl_vars['endereco']->_loop = true;
?>  
                <?php if ($_smarty_tpl->tpl_vars['endereco']->value->CODENDERECO!='') {?>
                    <?php if ($_smarty_tpl->tpl_vars['endereco']->value->STATUS=="1") {?>
                        <h4 colspan='2'><?php echo $_smarty_tpl->tpl_vars['i']->value;?>
. Endereço de entrega</h4>
                    <?php } else { ?>
                        <h4 colspan='2'><?php echo $_smarty_tpl->tpl_vars['i']->value;?>
. Endereço adicional</h4>
                    <?php }?>
                    <div class="">
                        <div class="panel-body">
                            <table class="table" style="font-size: 14px">
                                <tr>
                                    <td rowspan='4'><input type='radio' value='<?php echo $_smarty_tpl->tpl_vars['endereco']->value->STATUS;?>
' name='prioridade' onclick="javascript:alter_endereco_entrega('<?php echo $_smarty_tpl->tpl_vars['endereco']->value->CODENDERECO;?>
', '<?php echo $_smarty_tpl->tpl_vars['codcadastro']->value;?>
')" id='<?php echo $_smarty_tpl->tpl_vars['endereco']->value->CODENDERECO;?>
' <?php if ($_smarty_tpl->tpl_vars['endereco']->value->STATUS=="1") {?>checked="true"<?php }?>/></td>
                                    <td>CEP:</td>
                                    <td><?php echo $_smarty_tpl->tpl_vars['endereco']->value->CEP;?>
</td> 
                                    <td rowspan='4'><span class="plus" onclick="javascript:del_row_enderecos('<?php echo $_smarty_tpl->tpl_vars['endereco']->value->CODENDERECO;?>
', '<?php echo $_smarty_tpl->tpl_vars['codcadastro']->value;?>
')"><i class="fa fa-times"></i></span></td>
                                </tr>    
                                <tr> <td>Endereço:</td><td><?php echo $_smarty_tpl->tpl_vars['endereco']->value->LOGRADOURO;?>
, nº <?php echo $_smarty_tpl->tpl_vars['endereco']->value->NUMERO;?>
 <?php if ($_smarty_tpl->tpl_vars['endereco']->value->COMPLEMENTO!='') {?>- <?php echo $_smarty_tpl->tpl_vars['endereco']->value->COMPLEMENTO;?>
 <?php }?></td> </tr>
                                <tr> <td>Bairro:</td><td><?php echo $_smarty_tpl->tpl_vars['endereco']->value->BAIRRO;?>
</td> </tr>
                                <tr> <td>Cidade/UF:</td><td><?php echo $_smarty_tpl->tpl_vars['endereco']->value->CIDADE;?>
/<?php echo $_smarty_tpl->tpl_vars['endereco']->value->UF;?>
</td> </tr>
                            </table>
                        </div>
                    </div>
                <?php }?>    
                <?php echo smarty_function_counter(array(),$_smarty_tpl);?>
    
            <?php } ?>
        </form>
        

    </div>
    <div class="col-sm-6">
        <div class="panel panel-primary" >
            <div class="panel-body">
                <?php if ($_smarty_tpl->tpl_vars['msg_erro']->value!='') {?>
                    <div class="alert alert-info" role="alert"><?php echo $_smarty_tpl->tpl_vars['msg_erro']->value;?>
</div>
                <?php }?>

                <form class="form" id="formulario_enderecos" method="post" onsubmit="return false">

                    <?php if ($_smarty_tpl->tpl_vars['erro']->value=='') {?>
                        <div class="alert alert-success" role="alert"  style="font-size: 15px;"><strong>Atenção: </strong>Preencher todos os campos!</div>
                    <?php } else { ?>
                        <div class="alert alert-danger" role="alert"  style="font-size: 15px;"><strong>Atenção: </strong><?php echo $_smarty_tpl->tpl_vars['erro']->value;?>
</div>
                    <?php }?>
                    
                    <div class="form-group form-inline">
                        <input type="text" class="form-control" id="cep" name="cep" maxlength="9" value="<?php echo $_smarty_tpl->tpl_vars['cep']->value;?>
" placeholder="CEP" style="margin-right: 15px;"/>
                        <span class="input-group" style="cursor: pointer; font-size: 15px;" id="pesquisar_endereco"><a>» Pesquisar</a></span>  
                        <span class="Loader hide"><img src="/web-files/img/Loader.GIF" alt="Carregando..." title="Carregando..." border="0" style="width: 25px"/></span>
                    </div>
                    <div class="form-group">
                        <div class="row">
                            <div class="col col-sm-8">
                                <input type="text" class="form-control" id="logradouro" name="logradouro" maxlength="140" value="<?php echo $_smarty_tpl->tpl_vars['logradouro']->value;?>
" placeholder="Endereço"/>
                            </div>
                            <div class="col col-sm-4">
                                <input type="text" class="form-control" id="numero" name="numero" maxlength="5" value="<?php echo $_smarty_tpl->tpl_vars['numero']->value;?>
" placeholder="Nº" onkeypress="return formataNumDV(event, this, 6);"/>
                            </div>
                        </div>
                    </div>
                    <div class="form-group">
                        <input type="text" class="form-control" id="complemento" name="complemento" maxlength="12" value="<?php echo $_smarty_tpl->tpl_vars['complemento']->value;?>
" placeholder="Complemento"/>
                    </div>
                    <div class="form-group">
                        <input type="text" class="form-control" id="bairro" name="bairro" maxlength="50" value="<?php echo $_smarty_tpl->tpl_vars['bairro']->value;?>
" placeholder="Bairro"/>
                    </div>
                    <div class="form-group">
                        <div class="row">
                            <div class="col col-sm-8">
                                <input type="text" class="form-control" id="cidade" name="cidade" maxlength="80" value="<?php echo $_smarty_tpl->tpl_vars['cidade']->value;?>
" placeholder="Cidade"/>
                            </div>
                            <div class="col col-sm-4">
                                <input type="text" class="form-control" id="estado" name="estado" maxlength="2" value="<?php echo $_smarty_tpl->tpl_vars['estado']->value;?>
" placeholder="UF"/>
                            </div>
                        </div>
                    </div>
                    <div class="form-group">
                          <button type="button" class="btn btn-default" name="enviar" onclick="javascript:cadastrar_endereco();">Cadastrar endereço</button>
                        <span class="Loader-endereco hide"><img src="/web-files/img/Loader.GIF" alt="Carregando..." title="Carregando..." border="0" style="width: 25px;"/></span>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>
<div>
    <ul class="pager">

            <?php if ($_smarty_tpl->tpl_vars['sem_endereco']->value) {?>
            <li class="next meu-endereco-entrega"><a onclick="javascript:forma_envio()">Meu endereço de entrega está correto &rarr;</a></li>
            <input type="hidden" id="EXISTE_ENDERECO_ENTREGA" value="SIM">
            <?php }?>
    </ul>
</div> 

<div style="clear: both;"></div>
<style>
    .endereco{
        cursor: pointer;
    }
</style>
<?php }} ?>
