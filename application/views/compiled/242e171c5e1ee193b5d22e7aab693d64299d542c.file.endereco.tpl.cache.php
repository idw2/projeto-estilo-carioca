<?php /* Smarty version Smarty-3.1.19, created on 2014-11-10 13:15:52
         compiled from "/home/maria951/public_html/homolog/application/views/endereco.tpl" */ ?>
<?php /*%%SmartyHeaderCode:11565880185460d6a8908e29-48444772%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '242e171c5e1ee193b5d22e7aab693d64299d542c' => 
    array (
      0 => '/home/maria951/public_html/homolog/application/views/endereco.tpl',
      1 => 1415116022,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '11565880185460d6a8908e29-48444772',
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
    'web_files' => 0,
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
  'unifunc' => 'content_5460d6a8ad6e99_60359232',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5460d6a8ad6e99_60359232')) {function content_5460d6a8ad6e99_60359232($_smarty_tpl) {?><?php if (!is_callable('smarty_function_counter')) include '/home/maria951/public_html/homolog/libraries/plugins/function.counter.php';
?>
<div class="row">
    <div class="col-sm-6 col-sm-push-6">
        <form class="form" name="formListenderecos" id="formListenderecos" >    
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
    <div class="col-sm-6 col-sm-pull-6">
        <?php if ($_smarty_tpl->tpl_vars['msg_erro']->value!='') {?>
            <div class="alert alert-info" role="alert"><?php echo $_smarty_tpl->tpl_vars['msg_erro']->value;?>
</div>
        <?php }?>
        <form class="form" id="formulario_enderecos" method="post" onsubmit="return false">
            
            <?php if ($_smarty_tpl->tpl_vars['erro']->value=='') {?>
                
            <?php } else { ?>
                <div class="alert alert-danger" role="alert"  style="font-size: 15px;"><strong>Atenção: </strong><?php echo $_smarty_tpl->tpl_vars['erro']->value;?>
</div>
            <?php }?>
            
            <div class="form-group">
                <label for="cep" class="required">CEP</label>
                <div class="form-inline">
                    <input type="text" class="form-control" id="cep" name="cep" maxlength="9" value="<?php echo $_smarty_tpl->tpl_vars['cep']->value;?>
" placeholder="CEP" style="margin-right: 15px;"/>
                    <span class="input-group" style="cursor: pointer; font-size: 15px;" id="pesquisar_endereco"><a>» Pesquisar</a></span>  
                    <span class="Loader hide"><img src="<?php echo $_smarty_tpl->tpl_vars['web_files']->value;?>
/img/Loader.GIF" alt="Carregando..." title="Carregando..." border="0" style="width: 25px"/></span>
                </div>
            </div>
            <div class="form-group">
                <label for="cep" class="required">Endereço</label>
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
                <label for="cep" class="required">Completemento</label>
                <input type="text" class="form-control" id="complemento" name="complemento" maxlength="100" value="<?php echo $_smarty_tpl->tpl_vars['complemento']->value;?>
" placeholder="Complemento"/>
            </div>
            <div class="form-group">
                <label for="cep" class="required">Bairro</label>
                <input type="text" class="form-control" id="bairro" name="bairro" maxlength="50" value="<?php echo $_smarty_tpl->tpl_vars['bairro']->value;?>
" placeholder="Bairro"/>
            </div>
            <div class="form-group">
                <label for="cep" class="required">Cidade / Estado</label>
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
                <span class="Loader-endereco hide"><img src="<?php echo $_smarty_tpl->tpl_vars['web_files']->value;?>
/img/Loader.GIF" alt="Carregando..." title="Carregando..." border="0" style="width: 25px;"/></span>
            </div>
        </form>
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
