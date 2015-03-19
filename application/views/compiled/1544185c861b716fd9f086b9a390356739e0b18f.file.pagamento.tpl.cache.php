<?php /* Smarty version Smarty-3.1.19, created on 2014-11-10 13:15:53
         compiled from "/home/maria951/public_html/homolog/application/views/pagamento.tpl" */ ?>
<?php /*%%SmartyHeaderCode:11282739065460d6a9259af3-26992902%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '1544185c861b716fd9f086b9a390356739e0b18f' => 
    array (
      0 => '/home/maria951/public_html/homolog/application/views/pagamento.tpl',
      1 => 1414775451,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '11282739065460d6a9259af3-26992902',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'endereco_list' => 0,
    'endereco' => 0,
    'web_files' => 0,
    'nenhum_produto' => 0,
    'total_peso' => 0,
    'cep_remetente' => 0,
    'CEP' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.19',
  'unifunc' => 'content_5460d6a9316512_83217971',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5460d6a9316512_83217971')) {function content_5460d6a9316512_83217971($_smarty_tpl) {?><?php if (!is_callable('smarty_function_counter')) include '/home/maria951/public_html/homolog/libraries/plugins/function.counter.php';
?><?php echo smarty_function_counter(array('assign'=>'i','start'=>1,'print'=>false),$_smarty_tpl);?>
 
<?php  $_smarty_tpl->tpl_vars['endereco'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['endereco']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['endereco_list']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['endereco']->key => $_smarty_tpl->tpl_vars['endereco']->value) {
$_smarty_tpl->tpl_vars['endereco']->_loop = true;
?>  
    <?php if ($_smarty_tpl->tpl_vars['endereco']->value->CODENDERECO!=''&&$_smarty_tpl->tpl_vars['endereco']->value->STATUS=="1") {?>
        <?php $_smarty_tpl->tpl_vars["CEP"] = new Smarty_variable(((string)$_smarty_tpl->tpl_vars['endereco']->value->CEP), null, 0);?>
        <?php $_smarty_tpl->tpl_vars["CODENDERECO"] = new Smarty_variable(((string)$_smarty_tpl->tpl_vars['endereco']->value->CODENDERECO), null, 0);?>
    <?php }?>    
    <?php echo smarty_function_counter(array(),$_smarty_tpl);?>
    
<?php } ?>


<p style="text-align: center">
    <img src="<?php echo $_smarty_tpl->tpl_vars['web_files']->value;?>
/img/transportadoras.jpg" alt="Métodos de Envio" title="Métodos de Envio" border="0" style="width: 268px;"/><br>
    (*) Método de envio preferêncial Total Express Transportadora<br>
    (*) Atenção: Alguns serviços de entrega de encomenda poderão não estar disponíveis em algumas localidades 
</p>
<div class="row">

    <div class="col-lg-12">    
        <?php if ($_smarty_tpl->tpl_vars['nenhum_produto']->value==false) {?>   
            <div class="">    
                <table class="table" style="font-size: 14px">
                    <thead>
                        <tr>
                            <th>Estimar custo de envio da encomenda.</th>
                        </tr>
                    </thead>
                    <tbody>

                    <tr>
                        <td>
                            <input type="hidden" class="form-control" id="total_peso" name="total_peso" value="<?php echo $_smarty_tpl->tpl_vars['total_peso']->value;?>
"/>
                            <input type="hidden" class="form-control" id="cep_remetente" name="cep_remetente" value="<?php echo $_smarty_tpl->tpl_vars['cep_remetente']->value;?>
"/>
                            <input type="text" class="form-control" id="cep_destinatario" name="cep_destinatario" maxlength="8" value="<?php echo $_smarty_tpl->tpl_vars['CEP']->value;?>
" onkeypress="return formataCEP(event, this);" placeholder="Insira seu CEP" style="width: 50%" readonly="readonly"/>
                            <br>
                            <label>Tipo de encomenda</label>
                            <select id="forma_envio" class="form-control myFormaEnvio" style="width: 50%">
                                <option value="total_express">Total Express - Transportadora</option>
                                <option value="41106">Correios - PAC</option>
                                <option value="40010">Correios - SEDEX</option>
                                <option value="40215">Correios - SEDEX 10</option>
                                <option value="40290">Correios - SEDEX hoje</option>
                                
                            </select><span class="Loader hide" ><img src="<?php echo $_smarty_tpl->tpl_vars['web_files']->value;?>
/img/Loader.GIF" alt="Carregando..." title="Carregando..." border="0" style="width: 25px;"/></span>
                            <br/>
                            <span id="msg_erro"></span>
                            <br/>
                            


                        </td>
                    </tr>
                    </tbody>
                </table>
            </div>
        <?php }?>
    </div>
</div>
<div style="clear: both;"></div>
<?php }} ?>
